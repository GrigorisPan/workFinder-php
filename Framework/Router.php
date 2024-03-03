<?php

namespace Framework;

use App\Controllers\ErrorController;

class Router
{

  protected $routes = [];

  /**
   * Load error page
   * 
   * @param int $httpCode
   * 
   * @return void
   */
  public function error($httpCode = 404)
  {
    http_response_code($httpCode);
    loadView("error/{$httpCode}");
    exit;
  }

  /**
   * Add a new route
   *
   * @param string $method
   * @param string $uri
   * @param string $action
   * @return void
   */
  public function registerRoute($method, $uri, $action)
  {
    list($controller, $controllerMethod) = explode('@', $action);
    $this->routes[] = [
      'method' => $method,
      'uri' => $uri,
      'controller' => $controller,
      'controllerMethod' => $controllerMethod
    ];
  }

  /**
   * Add a GET request
   * 
   * @param string $uri
   * @param string $controller
   * 
   * @return void
   */
  public function get($uri, $controller)
  {
    $this->registerRoute('GET', $uri, $controller);
  }


  /**
   * Add a POST request
   * 
   * @param string $uri
   * @param string $controller
   * 
   * @return void
   */
  public function post($uri, $controller)
  {
    $this->registerRoute('POST', $uri, $controller);
  }

  /**
   * Add a PUT request
   * 
   * @param string $uri
   * @param string $controller
   * 
   * @return void
   */
  public function put($uri, $controller)
  {
    $this->registerRoute('PUT', $uri, $controller);
  }

  /**
   * Add a DELETE request
   * 
   * @param string $uri
   * @param string $controller
   * 
   * @return void
   */
  public function delete($uri, $controller)
  {
    $this->registerRoute('DELETE', $uri, $controller);
  }

  /**
   * Route the request
   * 
   * @param string $uri
   * @param string $method
   * 
   * @return void
   */
  public function route($uri)
  {
    //inspect($uri);
    $requestMethod = $_SERVER['REQUEST_METHOD'];

    // Check if the request is a POST and contains the _method parameter
    if ($requestMethod === 'POST' && isset($_POST['_method'])) {
      // Override the request method with the value of _method
      $requestMethod = strtoupper($_POST['_method']);
    }


    foreach ($this->routes as $route) {
      //inspect($route);

      //Split the current URI into segments
      $uriSegments = explode('/', trim($uri, '/'));
      //inspect($uriSegments);

      //Split the route URI into segmants
      $routeUriSegments = explode('/', trim($route['uri'], '/'));
      //inspect($routeUriSegments);

      $match = true;

      //Check if the number of segments matches
      if (count($uriSegments) === count($routeUriSegments) && strtoupper($route['method'] === $requestMethod)) {
        $params = [];

        $match = true;

        // Compare each segment
        for ($i = 0; $i < count($uriSegments); $i++) {

          //If the uri's do not match and there is no params
          if ($routeUriSegments[$i] !== $uriSegments[$i] && !preg_match('/\{(.+?)\}/', $routeUriSegments[$i])) {
            $match = false;
            break;
          }

          //Check for the params and add to $params array
          if (preg_match('/\{(.+?)\}/', $routeUriSegments[$i], $matches)) {
            //inspect($matches);

            // This segment is a parameter, so store it
            $params[$matches[1]] = $uriSegments[$i];
            //inspect($params);

          }
        }
        if ($match) {
          // Extract controller and method from route
          $controller = 'App\\Controllers\\' . $route['controller'];
          $controllerMethod = $route['controllerMethod'];

          // Instantiate the controller and call the method
          $controllerInstance = new $controller();
          $controllerInstance->$controllerMethod($params);
          return;
        }
      }
    }
  }
}
