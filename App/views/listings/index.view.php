<?php loadPartial('head'); ?>
<?php loadPartial('navbar'); ?>
<?php if (isset($keywords) || isset($location)) {
  $bannerContent = 'Search Results For : ' . htmlspecialchars($keywords) . ' ' . htmlspecialchars($location);
  loadPartial('top-banner', [
    'bannerContent' => $bannerContent
  ]);
} else {
  loadPartial('top-banner', [
    'bannerContent' => 'All Jobs'
  ]);
} ?>
<?php loadPartial('message') ?>

<section>
  <div class="container mx-auto p-4 mt-4">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
      <?php foreach ($listings as $listing) : ?>
        <!-- Job Listing -->
        <div class="rounded-lg shadow-md bg-white">
          <div class="p-4">
            <h2 class="text-xl font-semibold"><?= $listing->title ?></h2>
            <p class="text-gray-700 text-lg mt-2">
              <?= $listing->description ?>
            </p>
            <ul class="my-4 bg-gray-100 p-4 rounded">
              <li class="mb-2"><strong>Salary:</strong> <?= formatSalary($listing->salary) ?></li>
              <li class="mb-2">
                <strong>Location:</strong> <?= $listing->city ?>, <?= $listing->state ?>
                <!--  <span class="text-xs bg-brightRed text-white rounded-full px-2 py-1 ml-2">Local</span> -->
              </li>
              <?php if (!empty($listing->tags)) : ?>
                <li class="mb-2">
                  <strong>Tags:</strong> <?= $listing->tags ?>
                </li>
              <?php endif; ?>
            </ul>
            <a href="/listings/<?= $listing->id ?>" class="block w-full text-center px-5 py-2.5 shadow-sm rounded border text-base font-medium text-white bg-brightRedLight hover:bg-brightRed">
              Details
            </a>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</section>

<?php loadPartial('bottom-banner'); ?>
<?php loadPartial('footer') ?>