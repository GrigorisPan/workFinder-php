<!-- Bottom Banner -->
<section class="container mx-auto my-6">
  <div class="bg-brightRed text-white rounded p-4 flex items-center justify-between">
    <div>
      <h2 class="text-xl font-semibold">Looking to hire?</h2>
      <p class="text-white text-lg mt-2">
        Post your job listing now and find the perfect candidate.
      </p>
    </div>
    <?php if (Framework\Session::has('user')) : ?>
      <a href="/listings/create" class="bg-white hover:bg-gray-400 text-darkBlue px-4 py-2 rounded hover:shadow-md transition duration-300">
        <i class="fa fa-edit"></i> Post a Job
      </a>
    <?php endif; ?>
  </div>
</section>