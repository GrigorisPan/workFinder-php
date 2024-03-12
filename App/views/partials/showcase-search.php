<!-- Showcase Section -->
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
      <form method='GET' action="/listings/search" class="mb-4 flex flex-col mx-5 md:mx-auto md:w-2/3">
        <input type="text" name="keywords" placeholder="Keywords" class="md:w-auto mb-2 px-4 py-2 focus:outline-none" />
        <input type="text" name="location" placeholder="Location" class="md:w-auto mb-2 px-4 py-2 focus:outline-none" />
        <button class="rounded-2xl md:w-auto bg-brightRed hover:bg-brightRedLight text-white px-4 py-2 focus:outline-none">
          Search
        </button>
      </form>
    </div>
  </div>
</section>