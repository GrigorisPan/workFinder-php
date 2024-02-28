<!-- NavBar -->
<nav class="relative container mx-auto p-5">
  <!-- Flex  container-->
  <div class="flex items-center justify-between">
    <!-- Logo -->
    <div class="inline-block">
      <h1 class="text-3xl font-semibold">
        <a href="/">workFinder</a>
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
    <a href="/listings/create" class="hidden md:block p-3 px-6 pt-2 text-white bg-brightRed rounded-full baseline hover:bg-brightRedLight">Post a Job</a>

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