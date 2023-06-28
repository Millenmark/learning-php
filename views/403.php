<?php require("partials/head.php"); ?>
<?php require("partials/nav.php"); ?>


<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <h1 class="text-2xl font-bold">You don't have a note with this id: <?=$_GET["id"];?></h1>
    <p class="mt-4">
      <a href="/" class="text-blue underline">Go back home</a>
    </p>
  </div>
</main>
  
<?php require("partials/foot.php"); ?>
