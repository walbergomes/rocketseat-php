<?php

$projetos = [
  [
    "titulo" => "Meu portfólio",
    "finalizado" => true,
    "ano" => 2021,
    "descricao" => "Meu primeiro portfólio. Escrito em PHP e HTML.",
    "stack" => ["PHP", "HTML", "CSS", "JS"],
    "img" => ""
  ],
  [
    "titulo" => "Lista de tarefas",
    "finalizado" => false,
    "ano" => 2023,
    "descricao" => "Lista de tarefas. Escrito em PHP e HTML.",
    "stack" => ["PHP", "HTML", "CSS", "JS"],
    "img" => ""
  ],
  [
    "titulo" => "Controle de leitura de livros",
    "finalizado" => true,
    "ano" => 2024,
    "descricao" => "Lista de livros. Escrito em PHP e HTML.",
    "stack" => ["PHP", "HTML", "CSS", "JS"],
    "img" => ""
  ],
  [
    "titulo" => "Projeto em andamento",
    "finalizado" => false,
    "ano" => 2025,
    "descricao" => "Projeto em andamento. Escrito em PHP e HTML.",
    "stack" => ["PHP", "HTML", "CSS", "JS"],
    "img" => ""
  ],
];

?>

<?php foreach ($projetos as $projeto) : ?>
  <div class="bg-slate-800 rounded-lg p-3 flex items-center">

    <div class="w-1/5 flex items-center justify-middle">
      <img src="<?= $projeto["img"] ?>" class="h-10">
    </div>

    <div class="w-4/5 space-y-3">

      <div class="flex gap-3 justify-between">
        <h3 class="font-semibold text-xl">
          <?php if ($projeto["finalizado"]): ?> ✅ <?php endif; ?>
          <?= $projeto["titulo"] ?>
          <?php if ($projeto["finalizado"]): ?>
            <span class="text-xs text-gray-400 opacity-50 italic">(finalizado em <?=$projeto["ano"]?>)</span>

          <?php else: ?>
            <span class="text-xs text-gray-400 opacity-50 italic">(em desenvolvimento)</span>

          <?php endif; ?>
        </h3>
        <div class="space-x-1">
          <?php 
            $colors = ["fuchsia", "lime", "sky", "rose"];
            
            foreach ($projeto["stack"] as $posicao => $language): 
          ?>
          <span 
            class="bg-<?=$colors[$posicao]?>-400 text-<?=$colors[$posicao]?>-900 rounded-md px-2 py-1 font-semibold text-xs">
            <?=$language?>
          </span>
          <?php endforeach; ?>
        </div>
      </div>

      <p class="leading-6">
        <?=$projeto["descricao"]?>
      </p>

    </div>

  </div>

<?php endforeach; ?>