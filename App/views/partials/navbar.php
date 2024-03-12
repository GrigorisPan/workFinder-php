<?php

use Framework\Session;
?>

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
      <?php if (Session::has('user')) : ?>
        <div class="flex justify-between items-center gap-4">
          <div>
            Welcome <?= Session::get('user')['name'] ?>
          </div>
          <form method="POST" action="/auth/logout">
            <button type="submit" class="inline hover:text-darkGrayishBlue">Logout</button>
          </form>
          <a href="/about" class="hover:text-darkGrayishBlue">About Us
          </a>
          <!-- Button -->
          <a href="/listings/create" class="hidden md:block p-3 px-6 pt-2 text-white bg-brightRed rounded-full baseline hover:bg-brightRedLight">Post a Job</a>
        </div>
      <?php else : ?>
        <a href="/auth/login" class="hover:text-darkGrayishBlue">Login </a>
        <a href="/auth/register" class="hover:text-darkGrayishBlue">Register
        </a>
        <a href="/about" class="hover:text-darkGrayishBlue">About Us
        </a>
      <?php endif; ?>

    </div>


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
      <?php if (Session::has('user')) : ?>
        <div>
          Welcome <?= Session::get('user')['name'] ?>
        </div>
        <form method="POST" action="/auth/logout">
          <button type="submit" class="inline hover:text-darkGrayishBlue">Logout</button>
        </form>
      <?php else : ?>
        <a href="/auth/login" class="hover:text-darkGrayishBlue">Login </a>
        <a href="/auth/register" class="hover:text-darkGrayishBlue">Register
        </a>
      <?php endif; ?>
      <a href="/about" class="hover:text-darkGrayishBlue">About Us
      </a>
    </div>
  </div>
</nav>