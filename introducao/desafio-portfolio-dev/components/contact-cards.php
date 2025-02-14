<?php
$links = [
  [
    "img" => "assets/social/linkedin.svg",
    "title" => "Linkedin"
  ],
  [
    "img" => "assets/social/instagram.svg",
    "title" => "Instagram"
  ],
  [
    "img" => "assets/social/github.svg",
    "title" => "GitHub"
  ],
  [
    "img" => "assets/social/email.svg",
    "title" => "E-mail"
  ],
]
?>

<div class="cards flex flex-col gap-5">
  <?php foreach ($links as $link): ?>

    <div class="card bg-stone-800 w-[400px] p-5 rounded-xl">
      <a href="#" class="flex justify-between">
        <div class="flex gap-3 text-gray-400 font-medium">
          <img src="<?=$link["img"]?>" alt="" />
          <?=$link["title"]?>
        </div>
        <img src="assets/arrow.svg" alt="" />
      </a>
    </div>

  <?php endforeach; ?>
</div>