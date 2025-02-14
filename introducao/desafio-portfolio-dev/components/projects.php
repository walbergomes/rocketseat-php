<?php
$projects = [
  [
    "title" => "Travelgram",
    "description" => "Rede social onde as pessoas mostram os registros de suas viagens pelo mundo",
    "img" => "assets/thumbs/project-1.png",
    "stacks" => ["PHP", "CSS", "HTML", "JavaScript"]
  ],
  [
    "title" => "Página de receita",
    "description" => "Página com o passo a passo de uma receita para cupcakes",
    "img" => "assets/thumbs/project-2.png",
    "stacks" => ["PHP", "CSS", "HTML", "JavaScript"]
  ],
  [
    "title" => "Tech News",
    "description" => "Homepage de um portal de notícias sobre a área de tecnologia",
    "img" => "assets/thumbs/project-3.png",
    "stacks" => ["PHP", "CSS", "HTML", "JavaScript"]
  ],
  [
    "title" => "Refund",
    "description" => "Um sistema para pedido e acompanhamento de reembolso",
    "img" => "assets/thumbs/project-4.png",
    "stacks" => ["PHP", "CSS", "HTML", "JavaScript"]
  ],
  [
    "title" => "Página de turismo",
    "description" => "Página com as principais informações para quem quer viajar para Busan",
    "img" => "assets/thumbs/project-5.png",
    "stacks" => ["PHP", "CSS", "HTML", "JavaScript"]
  ],
  [
    "title" => "Zingen",
    "description" => "Landing Page completa e responsiva de um aplicativo de Karaokê",
    "img" => "assets/thumbs/project-6.png",
    "stacks" => ["PHP", "CSS", "HTML", "JavaScript"]
  ],
]
?>

<div class="max-w-screen-lg w-full mt-15 grid grid-cols-2 gap-3">
  <?php foreach ($projects as $project): ?>

    <div class="bg-stone-800 h-45 rounded-xl p-3 flex gap-3">
      <div
        class="w-2/5 rounded-xl bg-[url('<?= $project["img"] ?>')] bg-cover bg-center"></div>
      <div class="w-3/5 flex flex-col justify-between">
        <header>
          <h3 class="text-gray-200 font-bold text-base"><?= $project["title"] ?></h3>
          <p class="text-sm mt-3 text-neutral-500">
            <?= $project["description"] ?>
          </p>
        </header>

        <footer class="flex gap-2">
          <?php 
            $colors = ["rose", "purple", "indigo", "teal"];
            foreach ($project["stacks"] as $position => $stack): 
          ?>
            <span
              class="bg-<?=$colors[$position]?>-500 py-1 px-2 rounded text-sm text-stone-900 font-semibold">
              <?=$stack?>
            </span>
          <?php endforeach; ?>
        </footer>
      </div>
    </div>

  <?php endforeach; ?>
</div>