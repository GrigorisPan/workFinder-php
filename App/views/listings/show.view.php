<?php loadPartial('head'); ?>
<?php loadPartial('navbar'); ?>


<section class="container mx-auto p-4 mt-4">
  <div class="rounded-lg shadow-md bg-white p-3">
    <?php loadPartial('message') ?>
    <div class="flex justify-between items-center">
      <a class="block p-4 text-brightRed" href="/listings">
        <i class="fa fa-arrow-alt-circle-left"></i>
        Back To Listings
      </a>
      <div class="flex space-x-4 ml-4">
        <a href="/listings/edit/<?= $listing->id ?>" class="px-4 py-2 border-2 border-darkBlue hover:bg-darkBlue text-darkBlue hover:text-white rounded">Edit</a>
        <!-- Delete Form-->
        <form method="POST">
          <input type="hidden" name="_method" value="DELETE" />
          <button type="submit" class="px-4 py-2 border-2 border-brightRed hover:bg-brightRed text-brightRed hover:text-white rounded">
            Delete
          </button>
        </form>
        <!-- End Delete Form -->
      </div>
    </div>
    <div class="p-4">
      <h2 class="text-xl font-semibold"><?= $listing->title ?></h2>
      <p class="text-gray-700 text-lg mt-2">
        <?= $listing->description ?>
      </p>
      <ul class="my-4 bg-gray-100 p-4">
        <li class="mb-2"><strong>Salary:</strong> <?= formatSalary($listing->salary) ?></li>
        <li class="mb-2">
          <strong>Location:</strong> <?= $listing->city ?> , <?= $listing->state ?>
          <!-- <span class="text-xs bg-brightRed text-white rounded-full px-2 py-1 ml-2">Local</span> -->
        </li>
        <?php if (!empty($listing->tags)) : ?>
          <li class="mb-2">
            <strong>Tags:</strong> <?= $listing->tags ?>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</section>

<section class="container mx-auto p-4">
  <h2 class="text-xl font-semibold mb-4">Job Details</h2>
  <div class="rounded-lg shadow-md bg-white p-4">
    <h3 class="text-lg font-semibold mb-2 text-brightRed">
      Job Requirements
    </h3>
    <p>
      <?= $listing->requirements ?>
    </p>
    <h3 class="text-lg font-semibold mt-4 mb-2 text-brightRed">Benefits</h3>
    <p><?= $listing->benefits ?></p>
  </div>
  <p class="my-5">
    Put "Job Application" as the subject of your email and attach your
    resume.
  </p>
  <a href="mailto:<?= $listing->email ?>" class="block w-full text-center px-5 py-2.5 shadow-sm rounded border text-base font-medium cursor-pointer text-white bg-brightRedLight hover:bg-brightRed">
    Apply Now
  </a>
</section>


<?php loadPartial('bottom-banner'); ?>
<?php loadPartial('footer') ?>