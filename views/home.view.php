<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/main.css" />
  <title>workFinder</title>
</head>

<body class="bg-gray-50">
  <!-- NavBar -->
  <nav class="relative container mx-auto p-5">
    <!-- Flex  container-->
    <div class="flex items-center justify-between">
      <!-- Logo -->
      <div class="inline-block">
        <h1 class="text-3xl font-semibold">
          <a href="index.html">workFinder</a>
        </h1>
      </div>
      <!-- Menu Items -->

      <div class="hidden md:flex space-x-6 font-semibold">
        <a href="login.html" class="hover:text-darkGrayishBlue">Login </a>
        <a href="register.html" class="hover:text-darkGrayishBlue">Register
        </a>
        <a href="about-us.html" class="hover:text-darkGrayishBlue">About Us
        </a>
      </div>
      <!-- Button -->
      <a href="post-job.html" class="hidden md:block p-3 px-6 pt-2 text-white bg-brightRed rounded-full baseline hover:bg-brightRedLight">Post a Job</a>

      <!-- Hamburger Icon -->
      <button id="menu-btn" class="block hamburger md:hidden focus:outline-none mt-2 ml-2">
        <span class="hamburger-top"></span>
        <span class="hamburger-middle"></span>
        <span class="hamburger-bottom"></span>
      </button>
    </div>

    <!-- Mobile Menu -->
    <div class="md:hidden">
      <div id="menu" class="absolute flex-col items-center hidden self-end py-8 m-5 space-y-6 font-bold bg-white sm:w-auto sm:self-center left-6 right-6 drop-shadow-md">
        <a href="login.html" class="hover:text-darkGrayishBlue">Login </a>
        <a href="register.html" class="hover:text-darkGrayishBlue">Register
        </a>
        <a href="about-us.html" class="hover:text-darkGrayishBlue">About Us
        </a>
      </div>
    </div>
  </nav>
  <!-- Hero Section -->
  <section id="hero">
    <!-- Flex Container -->
    <div class="container flex flex-col md:flex-row mx-auto px-6 pt-5 mt-5 mb-5 space-y-0 md:space-y-0 divide-y divide-brightRedLight md:divide-y-0 md:divide-x">
      <!-- Left Item -->
      <div class="flex flex-col mb-5 mt-5 md:w-1/2 items-center">
        <h1 class="max-w-md text-4xl font-bold text-center md:text-4xl md:text-left">
          Discover the perfect job opportunity for you and unlock your career
          potential
        </h1>
      </div>
      <!-- Search Form -->
      <div class="max-w-md container items-center text-center mt-5 mb-5 p-5">
        <h1 class="max-w-md text-4xl font-bold text-center md:text-4xl mb-5">
          Find Your Dream Job
        </h1>
        <form class="mb-4 flex flex-col mx-5 md:mx-auto md:w-2/3">
          <input type="text" name="keywords" placeholder="Keywords" class="md:w-auto mb-2 px-4 py-2 focus:outline-none" />
          <input type="text" name="location" placeholder="Location" class="md:w-auto mb-2 px-4 py-2 focus:outline-none" />
          <button class="rounded-2xl md:w-auto bg-brightRed hover:bg-brightRedLight text-white px-4 py-2 focus:outline-none">
            Search
          </button>
        </form>
      </div>
    </div>
  </section>
  <!-- Top Banner -->
  <section class="bg-brightRed text-white py-6 text-center">
    <div class="container mx-auto">
      <h2 class="text-3xl">Recent Jobs</h2>
    </div>
  </section>

  <!-- Job Listings -->
  <section>
    <div class="container mx-auto p-4 mt-4">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
        <!-- Job Listing 1: Software Engineer -->
        <div class="rounded-lg shadow-md bg-white">
          <div class="p-4">
            <h2 class="text-xl font-semibold">Software Engineer</h2>
            <p class="text-gray-700 text-lg mt-2">
              We are seeking a skilled software engineer to develop
              high-quality software solutions.
            </p>
            <ul class="my-4 bg-gray-100 p-4 rounded">
              <li class="mb-2"><strong>Salary:</strong> $80,000</li>
              <li class="mb-2">
                <strong>Location:</strong> New York
                <span class="text-xs bg-brightRed text-white rounded-full px-2 py-1 ml-2">Local</span>
              </li>
              <li class="mb-2">
                <strong>Tags:</strong> <span>Development</span>,
                <span>Coding</span>
              </li>
            </ul>
            <a href="details.html" class="block w-full text-center px-5 py-2.5 shadow-sm rounded border text-base font-medium text-white bg-brightRedLight hover:bg-brightRed">
              Details
            </a>
          </div>
        </div>

        <!-- Job Listing 2: Marketing Specialist -->
        <div class="rounded-lg shadow-md bg-white">
          <div class="p-4">
            <h2 class="text-xl font-semibold">Marketing Specialist</h2>
            <p class="text-gray-700 text-lg mt-2">
              We are looking for a Marketing Specialist to create and manage
              marketing campaigns.
            </p>
            <ul class="my-4 bg-gray-100 p-4 rounded">
              <li class="mb-2"><strong>Salary:</strong> $70,000</li>
              <li class="mb-2">
                <strong>Location:</strong> San Francisco
                <span class="text-xs bg-brightRed text-white rounded-full px-2 py-1 ml-2">Remote</span>
              </li>
              <li class="mb-2">
                <strong>Tags:</strong> <span>Marketing</span>,
                <span>Advertising</span>
              </li>
            </ul>
            <a href="details.html" class="block w-full text-center px-5 py-2.5 shadow-sm rounded border text-base font-medium text-white bg-brightRedLight hover:bg-brightRed">
              Details
            </a>
          </div>
        </div>
        <!-- Job Listing 3: Web Developer -->
        <div class="rounded-lg shadow-md bg-white">
          <div class="p-4">
            <h2 class="text-xl font-semibold">Web Developer</h2>
            <p class="text-gray-700 text-lg mt-2">
              Join our team as a Web Developer and create amazing web
              applications.
            </p>
            <ul class="my-4 bg-gray-100 p-4 rounded">
              <li class="mb-2"><strong>Salary:</strong> $75,000</li>
              <li class="mb-2">
                <strong>Location:</strong> Los Angeles
                <span class="text-xs bg-brightRed text-white rounded-full px-2 py-1 ml-2">Local</span>
              </li>
              <li class="mb-2">
                <strong>Tags:</strong> <span>Web Development</span>,
                <span>Programming</span>
              </li>
            </ul>
            <a href="details.html" class="block w-full text-center px-5 py-2.5 shadow-sm rounded border text-base font-medium text-white bg-brightRedLight hover:bg-brightRed">
              Details
            </a>
          </div>
        </div>

        <!-- Job Listing 4: Data Analyst -->
        <div class="rounded-lg shadow-md bg-white">
          <div class="p-4">
            <h2 class="text-xl font-semibold">Data Analyst</h2>
            <p class="text-gray-700 text-lg mt-2">
              We are hiring a Data Analyst to analyze and interpret data for
              insights.
            </p>
            <ul class="my-4 bg-gray-100 p-4 rounded">
              <li class="mb-2"><strong>Salary:</strong> $65,000</li>
              <li class="mb-2">
                <strong>Location:</strong> Chicago
                <span class="text-xs bg-brightRed text-white rounded-full px-2 py-1 ml-2">Remote</span>
              </li>
              <li class="mb-2">
                <strong>Tags:</strong> <span>Data Analysis</span>,
                <span>Statistics</span>
              </li>
            </ul>
            <a href="details.html" class="block w-full text-center px-5 py-2.5 shadow-sm rounded border text-base font-medium text-white bg-brightRedLight hover:bg-brightRed">
              Details
            </a>
          </div>
        </div>

        <!-- Job Listing 5: Graphic Designer -->
        <div class="rounded-lg shadow-md bg-white">
          <div class="p-4">
            <h2 class="text-xl font-semibold">Graphic Designer</h2>
            <p class="text-gray-700 text-lg mt-2">
              Join our creative team as a Graphic Designer and bring ideas to
              life.
            </p>
            <ul class="my-4 bg-gray-100 p-4 rounded">
              <li class="mb-2"><strong>Salary:</strong> $60,000</li>
              <li class="mb-2">
                <strong>Location:</strong> Miami
                <span class="text-xs bg-brightRed text-white rounded-full px-2 py-1 ml-2">Local</span>
              </li>
              <li class="mb-2">
                <strong>Tags:</strong> <span>Graphic Design</span>,
                <span>Creative</span>
              </li>
            </ul>
            <a href="details.html" class="block w-full text-center px-5 py-2.5 shadow-sm rounded border text-base font-medium text-white bg-brightRedLight hover:bg-brightRed">
              Details
            </a>
          </div>
        </div>

        <!-- Job Listing 6: Data Scientist -->
        <div class="rounded-lg shadow-md bg-white">
          <div class="p-4">
            <h2 class="text-xl font-semibold">Data Scientist</h2>
            <p class="text-gray-700 text-lg mt-2">
              We're looking for a Data Scientist to analyze complex data and
              generate insights.
            </p>
            <ul class="my-4 bg-gray-100 p-4 rounded">
              <li class="mb-2"><strong>Salary:</strong> $90,000</li>
              <li class="mb-2">
                <strong>Location:</strong> Seattle
                <span class="text-xs bg-brightRed text-white rounded-full px-2 py-1 ml-2">Remote</span>
              </li>
              <li class="mb-2">
                <strong>Tags:</strong> <span>Data Science</span>,
                <span>Machine Learning</span>
              </li>
            </ul>
            <a href="details.html" class="block w-full text-center px-5 py-2.5 shadow-sm rounded border text-base font-medium text-white bg-brightRedLight hover:bg-brightRed">
              Details
            </a>
          </div>
        </div>
      </div>
      <a href="listings.html" class="block text-xl text-center">
        <i class="fa fa-arrow-alt-circle-right"></i>
        Show All Jobs
      </a>
    </div>
  </section>

  <!-- Bottom Banner -->
  <section class="container mx-auto my-6">
    <div class="bg-brightRed text-white rounded p-4 flex items-center justify-between">
      <div>
        <h2 class="text-xl font-semibold">Looking to hire?</h2>
        <p class="text-white text-lg mt-2">
          Post your job listing now and find the perfect candidate.
        </p>
      </div>
      <a href="post-job.html" class="bg-white hover:bg-gray-400 text-darkBlue px-4 py-2 rounded hover:shadow-md transition duration-300">
        <i class="fa fa-edit"></i> Post a Job
      </a>
    </div>
  </section>
  <script src="js/script.js"></script>
</body>

</html>