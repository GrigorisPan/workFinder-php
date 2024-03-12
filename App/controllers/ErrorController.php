<?php

namespace App\Controllers;


class ErrorController
{
  /*
   * 404 not found error
   *
   * @return void
   */
  public static function notFound($message = 'Resource not found')
  {

    loadView('error', [
      'status' => '404',
      'message' => $message
    ]);
    exit;
  }

  /*
   * 403 unauthorized error
   *
   * @return void
   */
  public static function unauthorized($message = 'You are not unauthorized')
  {

    loadView('error', [
      'status' => '403',
      'message' => $message
    ]);
    exit;
  }
}
