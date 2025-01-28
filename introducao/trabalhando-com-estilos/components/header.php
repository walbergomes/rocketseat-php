<?php
$itens = [
  ["href" => "#projetos", "texto" => "Projetos"],
  ["href" => "#projetos", "texto" => "Github"],
  ["href" => "#projetos", "texto" => "LinkedIn"],
  ["href" => "#projetos", "texto" => "Twitter"],
]
?>


<header
  class="mx-auto max-w-screen-lg px-3 py-6 flex items-center justify-between">
  <!-- Logo -->
  <div class="font-bold text-xl text-cyan-600">🦁 Meu Portfolio...</div>

  <!-- Links -->
  <div>
    <ul class="flex gap-x-3 font-medium">
      <?php foreach ($itens as $item) : ?>
        <li>
          <a href="<?= $item["href"] ?>" class="hover:underline">
            <?= $item["texto"] ?>
          </a>
        </li>

      <?php endforeach; ?>
    </ul>
  </div>
</header>