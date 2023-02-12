<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>

<?php

$blogs = [
  [
    "id" => 1,
    "title" => '30 ways to become a successful software engineer',
    "author" => 'Shahriar',
    "published_at" => date('d M Y')
  ],
  [
    "id" => 2,
    "title" => '30 ways to become a successful software engineer',
    "author" => 'Shahriar',
    "published_at" => date('d M Y')
  ],
  [
    "id" => 3,
    "title" => '30 ways to become a successful software engineer',
    "author" => 'Shahriar',
    "published_at" => date('d M Y')
  ],
  [
    "id" => 4,
    "title" => '30 ways to become a successful software engineer',
    "author" => 'Shahriar',
    "published_at" => date('d M Y')
  ],
  [
    "id" => 5,
    "title" => '30 ways to become a successful software engineer',
    "author" => 'Shahriar',
    "published_at" => date('d M Y')
  ],
];

?>

<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <div class="align-center flex flex-wrap gap-4">
      <?php foreach ($blogs as $blog) :  ?>

        <div class="max-w-sm rounded bg-slate-50 p-4 shadow hover:cursor-pointer">
          <h4 class="text-xl font-bold"><?= $blog['title'] ?></h4>
          <div class="flex justify-between">
            <p class="font-light text-gray-400">by <span class="font-normal text-gray-600"><?= $blog['author'] ?></span></p>
            <p class="text-gray-400"><?= $blog['published_at'] ?></p>
          </div>
        </div>

      <?php endforeach;  ?>
    </div>
  </div>
</main>

<?php require('partials/footer.php') ?>