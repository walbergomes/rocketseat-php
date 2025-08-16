<?php

require 'dados.php';

$id = $_REQUEST['id'];

$filtered = array_filter($films, fn($f) => $f['id'] == $id);

$film = array_pop($filtered);

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <title>Gerenciador de Filmes</title>

  <link rel="shortcut icon" href="./assets/Vector/Logo.svg" type="image/x-icon">
  <link rel="stylesheet" href="css/custom.css">

  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Rajdhani:wght@300;400;500;600;700&family=Rammetto+One&display=swap" rel="stylesheet">
</head>

<body class="h-screen bg-gray-100 px-4">

  <header class="h-[80px] flex items-center justify-between">
    <img
      src="/assets/Vector/Logo.svg"
      alt=""
      class="w-[45px]">

    <div id="select-mode" class="flex gap-6">
      <a
        href="/index.php"
        id="my-films"
        class="flex items-center gap-2 text-gray-500 font-nunito px-3 py-2 rounded-md cursor-pointer">
        <img
          src="assets/Icon/Popcorn-Regular.svg"
          alt=""
          class="w-[20px]">
        Explorar
      </a>

      <a
        id="explorer"
        class="flex items-center gap-2 text-gray-500 font-nunito px-3 py-2 rounded-md cursor-pointer">
        <img
          src="assets/Icon/FilmSlate-Regular.svg"
          alt=""
          class="w-[20px]">
        Meus filmes
      </a>
    </div>

    <div class="flex items-center gap-3">
      <span class="text-gray-600 font-nunito text-sm cursor-pointer">Olá, Jordan</span>
      <div class="w-[32px] h-[32px] rounded-md bg-purple-base p-px overflow-hidden cursor-pointer">
        <img
          src="./assets/Image/profile.jpg"
          alt=""
          class="w-full h-full object-cover rounded-md">
      </div>

      <div class="divider h-[32px] w-[2px] bg-gray-300"></div>

      <button
        type="button"
        class="flex items-center justify-center bg-gray-300 p-1.5 rounded-md cursor-pointer">
        <img
          src="assets/Icon/SignOut-Regular.svg"
          alt=""
          class="w-[20px] h-[20px]">
      </button>
    </div>
  </header>

  <div class="max-w-7xl m-auto pb-38">
    <main class="w-full mt-16 flex gap-12">
      <!-- ### FILM IMAGE SIDE ### -->
      <section class="w-fit">
        <figure class="card w-[381px] h-[490px] bg-red-500 rounded-2xl overflow-hidden relative">
          <img
            src="assets/Image/Films/<?=$film['img']?>"
            alt=""
            class="w-full h-full object-cover">
          <div class="shadow absolute bottom-0 left-0 w-full h-[100px] 
          bg-gradient-to-b from-transparent to-gray-900/90"></div>
        </figure>
      </section>

      <!-- ### FILM INFOS SIDE ### -->
      <section class="w-2/3 flex flex-col">
        <button class="text-base font-nunito text-gray-500 flex items-center gap-2 cursor-pointer w-fit hover:brightness-[.8] mt-[10px]">
          <img src="assets/Icon/ArrowLeft-Regular.svg" alt="" class="w-[20px]">
          Voltar
        </button>

        <header class="mt-5 flex flex-col gap-3">
          <h2 class="font-rajdhani font-bold text-3xl text-gray-700">
            <?=$film['title']?>
          </h2>
          <div id="info" class="font-rajdhani font-bold text-3xl">
            <div>
              <span class="font-nunito text-base text-gray-600 font-bold">
                Categoria:
              </span>
              <span class="font-nunito text-base text-gray-600 font-normal">
                <?=$film['gender']?>
              </span>
            </div>
            <div>
              <span class="font-nunito text-base text-gray-600 font-bold">Ano:</span>
              <span class="font-nunito text-base text-gray-600 font-normal">
                <?=$film['year']?>
              </span>
            </div>
          </div>
          <div id="stars" class="flex gap-2 items-center">
            <img src="assets/Icon/Star-Fill-Purple.svg" alt="" class="w-[24px]">
            <img src="assets/Icon/Star-Fill-Purple.svg" alt="" class="w-[24px]">
            <img src="assets/Icon/Star-Fill-Purple.svg" alt="" class="w-[24px]">
            <img src="assets/Icon/Star-Fill-Purple.svg" alt="" class="w-[24px]">
            <img src="assets/Icon/Star-Regular-Purple.svg" alt="" class="w-[24px]">

            <span class="ml-2 font-nunito text-2xl text-gray-700 font-bold">
              <?=$film['stars']?>
            </span>
            <span class="font-nunito text-base text-gray-600">(5) Avaliações</span>
          </div>
        </header>

        <p class="font-nunito text-base text-gray-600 mt-[80px]">
          <?=$film['description']?>
        </p>
      </section>
    </main>


    <!-- ### REVIEW SECTION ### -->
    <section class="mt-36">
      <header class="flex justify-between items-center">
        <h3 class="text-[#E5E2E9] font-rajdhani text-2xl font-bold">Avaliações</h3>
        <button class="py-3 px-5 rounded-md bg-purple-base text-white flex items-center gap-2 hover:brightness-[.8] cursor-pointer">
          <img src="assets/Icon/Star-Regular.svg" alt="" class="w-[20px]">
          Avaliar filme
        </button>
      </header>

      <div class="flex flex-col gap-3 mt-[40px]">

        <div id="card" class="bg-gray-200 p-8 rounded-xl flex justify-between items-stretch">
          <div id="profile" class="flex gap-4">
            <div class="w-[48px] h-[48px] rounded-md bg-purple-base p-px overflow-hidden cursor-pointer">
              <img
                src="./assets/Image/profile.jpg"
                alt=""
                class="w-full h-full object-cover rounded-md">
            </div>

            <div>
              <div id="name">
                <span class="text-gray-700 text-base font-rajdhani font-bold">Jordan Felix</span>
                <span class="inline-block px-[6px] py-[3px] bg-purple-base rounded-full text-xs text-gray-700 font-bold">você</span>
              </div>

              <p class="font-nunito text-gray-500 text-sm">4 filmes avaliados</p>
            </div>

          </div>

          <div id="divider" class="w-[2px] bg-gray-300"></div>

          <p class="text-base text-gray-500 font-nunito font-normal max-w-xl">
            Uma fusão hipnotizante de drama e fantasia, este filme nos leva a um universo surreal repleto de simbolismo e emoção. A história é delicadamente tecida com momentos de profunda reflexão, enquanto os personagens navegam por dilemas humanos em meio a paisagens encantadas.
          </p>

          <div class="flex items-center gap-[6px] px-[10px] h-[32px] bg-gray-300 rounded-md text-gray-700 text-xs font-rajdhani">
            <span class="text-xl leading-none font-bold">4</span>
            /5
            <img src="assets/Icon/Star-Fill-Purple.svg" alt="" class="w-[16px]">
          </div>

        </div>

        <div id="card" class="bg-gray-200 p-8 rounded-xl flex justify-between items-stretch">
          <div id="profile" class="flex gap-4">
            <div class="w-[48px] h-[48px] rounded-md bg-purple-base p-px overflow-hidden cursor-pointer">
              <img
                src="./assets/Image/sheldon.jpg"
                alt=""
                class="w-full h-full object-cover rounded-md">
            </div>

            <div>
              <div id="name">
                <span class="text-gray-700 text-base font-rajdhani font-bold">Sheldon Cooper</span>
                <!-- <span class="inline-block px-[6px] py-[3px] bg-purple-base rounded-full text-xs text-gray-700 font-bold">você</span> -->
              </div>

              <p class="font-nunito text-gray-500 text-sm">483 filmes avaliados</p>
            </div>

          </div>

          <div id="divider" class="w-[2px] bg-gray-300"></div>

          <p class="text-base text-gray-500 font-nunito font-normal max-w-xl">
            Trata-se, indubitavelmente, de uma obra cinematográfica que beira a perfeição estética — uma simbiose meticulosamente calibrada entre os gêneros dramático e fantástico. A estrutura narrativa demonstra notável competência em manipular os arquétipos emocionais humanos, enquanto os personagens, de complexidade psicológica surpreendente, conduzem o espectador por uma jornada semiótica onde as fronteiras entre o tangível e o onírico são, para nossa satisfação intelectual, agradavelmente indistintas.
          </p>

          <div class="flex items-center gap-[6px] px-[10px] h-[32px] bg-gray-300 rounded-md text-gray-700 text-xs font-rajdhani">
            <span class="text-xl leading-none font-bold">4</span>
            /5
            <img src="assets/Icon/Star-Fill-Purple.svg" alt="" class="w-[16px]">
          </div>

        </div>

        <div id="card" class="bg-gray-200 p-8 rounded-xl flex justify-between items-stretch">
          <div id="profile" class="flex gap-4">
            <div class="w-[48px] h-[48px] rounded-md bg-purple-base p-px overflow-hidden cursor-pointer">
              <img
                src="./assets/Image/mussum.jpg"
                alt=""
                class="w-full h-full object-cover rounded-md">
            </div>

            <div>
              <div id="name">
                <span class="text-gray-700 text-base font-rajdhani font-bold">Mussum</span>
                <!-- <span class="inline-block px-[6px] py-[3px] bg-purple-base rounded-full text-xs text-gray-700 font-bold">você</span> -->
              </div>

              <p class="font-nunito text-gray-500 text-sm">18 filmes avaliados</p>
            </div>

          </div>

          <div id="divider" class="w-[2px] bg-gray-300"></div>

          <p class="text-base text-gray-500 font-nunito font-normal max-w-xl">
            Ih, mermão! Esse filminho é uma viagem das emoçãozis, misturando draminha com fantasiazis na maciota, sô! A históra fala de trem tipo amô, perdimen e redençãon, tudo isso num lugarzinho mágico que gruda na mente que nem chicletis no tênis, visse! Tu começa a assistir e já era, não dá nem pra piscá os zóio, cacildis!
          </p>

          <div class="flex items-center gap-[6px] px-[10px] h-[32px] bg-gray-300 rounded-md text-gray-700 text-xs font-rajdhani">
            <span class="text-xl leading-none font-bold">5</span>
            /5
            <img src="assets/Icon/Star-Fill-Purple.svg" alt="" class="w-[16px]">
          </div>

        </div>

      </div>

      <!-- ### WITHOUT REVIEWS ### -->
      <div class="flex flex-col gap-5 items-center gap-3 mt-[40px] hidden">
        <img src="assets/Icon/Popcorn-Regular.svg" alt="" class="w-[44px]">
        <div class="flex flex-col text-center">
          <span class="text-base font-nunito text-gray-600">Nenhuma avaliação registrada.</span>
          <span class="text-base font-nunito text-gray-600">Que tal enviar o primeiro comentário?</span>
        </div>
        <button class="flex items-center gap-2 text-base text-gray-500 font-nunito hover:brightness-[.8] cursor-pointer">
          <img src="assets/Icon/Star-Regular-Gray.svg" alt="" class="w-[20px]">
          Avaliar filme
        </button>
      </div>

    </section>
  </div>
</body>

</html>