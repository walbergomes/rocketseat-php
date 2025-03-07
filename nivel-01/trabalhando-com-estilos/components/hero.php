<?php
$itens = [
  ["href" => "", "src" => "assets/twitter.png", "alt" => "Twitter logo"],
  ["href" => "", "src" => "assets/facebook.png", "alt" => "Facebook logo"],
  ["href" => "", "src" => "assets/linkedin.png", "alt" => "LinkedIn logo"],
  ["href" => "", "src" => "assets/youtube.png", "alt" => "Youtube logo"],
]
?>


<section class="flex gap-x-3">
  <!-- Título e Descrição -->
  <div class="w-2/3">
    <h1 class="text-3xl font-bold">Oi, meu nome é Walber!</h1>
    <p class="text-xl leading-6 mt-6">
      Falando um pouco sobre mim, sou desenvolvedor junior em JS e estou aprendendo PHP
    </p>

    <ul class="flex gap-x-3 mt-3">
      
      <?php foreach ($itens as $item) : ?>
        <li>
          <a href="<?= $item["href"] ?>" target="_blank">
            <img class="h-8 hover:animate-bounce" src="<?=$item["src"]?>" alt="<?=$item["alt"]?>">
          </a>
        </li>

      <?php endforeach; ?>
    </ul>
  </div>

  <!-- Image -->
  <div class="w-1/3 flex items-center justify-center">
    <div>
      <img class="h-60 -mt-6 hover:animate-pulse" src="assets/avatar.svg" alt="Foto Walber">
    </div>
  </div>
</section>