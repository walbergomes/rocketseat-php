<?php
  $technologies = [
    ["title" => "Github"],
    ["title" => "PHP"],
    ["title" => "CSS"],
    ["title" => "HTML"],
    ["title" => "JavaScript"],
  ];
?>

<header class="flex flex-col items-center pt-40">
  <div class="size-fit p-1 rounded-full border-[3px] border-red-400">
    <img src="assets/avatar.png" alt="" class="" />
  </div>

  <p class="text-gray-200 mt-10 text-xl">
    Hello World! Meu nome é
    <span class="text-red-300">Martina Santos</span> e sou
  </p>
  <h1 class="text-gray-200 text-6xl font-bold mt-4">Desenvolvedora PHP</h1>
  <p class="max-w-[680px] text-gray-400 text-sm text-center mt-8">
    Transformo necessidades em aplicações reais, evolventes e funcionais.
    Desenvolvo sistemas através da minha paixão pela tecnologia,
    contribuindo com soluções inovadoras e eficazes para desafios complexos.
  </p>

  <div class="mt-15">
    
    <?php 
      $colors = ['emerald', 'fuchsia', 'rose', 'sky', 'yellow'];
      foreach($technologies as $position => $technology): 
    ?>
      <span
        class="bg-<?=$colors[$position]?>-500 px-3 py-1 border-[2px] rounded-3xl text-base text-bg-900">

        <?=$technology['title'] ?>
      </span>
    <?php endforeach; ?>
    
  </div>
</header>