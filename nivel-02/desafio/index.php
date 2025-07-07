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
      <button
        type="button"
        id="my-films"
        class="flex items-center gap-2 text-gray-500 font-nunito px-3 py-2 rounded-md cursor-pointer">
        <img
          src="assets/Icon/Popcorn-Regular.svg"
          alt=""
          class="w-[20px]">
        Explorar
      </button>

      <button
        type="button"
        id="explorer"
        class="flex items-center gap-2 text-gray-500 font-nunito px-3 py-2 rounded-md cursor-pointer">
        <img
          src="assets/Icon/FilmSlate-Regular.svg"
          alt=""
          class="w-[20px]">
        Meus filmes
      </button>
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
    <main class="w-full h-full mt-16 flex gap-12">

      <!-- ### FILM IMAGE SIDE ### -->
      <section class="w-fit">
        <figure class="card w-[381px] h-[490px] bg-red-500 rounded-2xl overflow-hidden relative">
          <img
            src="assets/Image/Films/pobres-criaturas.png"
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
          <h2 class="font-rajdhani font-bold text-3xl text-gray-700">Pobres criaturas</h2>
          <div id="info" class="font-rajdhani font-bold text-3xl">
            <div>
              <span class="font-nunito text-base text-gray-600 font-bold">Categoria:</span>
              <span class="font-nunito text-base text-gray-600 font-normal">Drama</span>
            </div>
            <div>
              <span class="font-nunito text-base text-gray-600 font-bold">Ano:</span>
              <span class="font-nunito text-base text-gray-600 font-normal">2023</span>
            </div>
          </div>
          <div id="stars" class="flex gap-2 items-center">
            <img src="assets/Icon/Star-Fill-Purple.svg" alt="" class="w-[24px]">
            <img src="assets/Icon/Star-Fill-Purple.svg" alt="" class="w-[24px]">
            <img src="assets/Icon/Star-Fill-Purple.svg" alt="" class="w-[24px]">
            <img src="assets/Icon/Star-Fill-Purple.svg" alt="" class="w-[24px]">
            <img src="assets/Icon/Star-Regular-Purple.svg" alt="" class="w-[24px]">

            <span class="ml-2 font-nunito text-2xl text-gray-700 font-bold">4</span>
            <span class="font-nunito text-base text-gray-600">(5) Avaliações</span>
          </div>
        </header>

        <p class="font-nunito text-base text-gray-600 mt-[80px]">
          Do cineasta Yorgos Lanthimos e da produtora Emma Stone, vem o conto incrível e a evolução fantástica de Bella Baxter (Stone), uma jovem mulher trazida de volta à vida pelo brilhante e pouco ortodoxo cientista Dr. Godwin Baxter (Willem Dafoe). Sob a proteção de Baxter, Bella está ansiosa para aprender. Faminta pela mundanidade que lhe falta, Bella foge com Duncan Wedderburn (Mark Ruffalo), um advogado astuto e depravado, em uma aventura relâmpago pelos continentes. Livre dos preconceitos de sua época, Bella se torna firme em seu propósito de defender a igualdade e a libertação.
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

  <!-- ### OVERLAY ### -->
  <div id="overlay" class="fixed inset-0 bg-stone-950/60 backdrop-blur-sm"></div>



  <!-- ### REVIEW MODAL ### -->
  <div id="modal" class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[600px] h-[570px] bg-gray-100 p-10 rounded-[18px] border border-[#1A1B2D]">
    <header class="flex justify-between items-center">
      <h4 class="text-gray-700 text-xl font-rajdhani font-bold">Avaliar filme</h4>

      <button class="bg-gray-300 p-[6px] rounded-md cursor-pointer hover:brightness-[.8]">
        <img src="assets/Icon/X-Regular.svg" alt="" class="w-[20px]">
      </button>
    </header>

    <div class="mt-8 flex justify-between gap-7">

      <section class="w-fit">
        <figure class="card w-[137px] h-[176px] bg-red-500 rounded-md overflow-hidden relative">
          <img
            src="assets/Image/Films/pobres-criaturas.png"
            alt=""
            class="w-full h-full object-cover">
          <div class="shadow absolute bottom-0 left-0 w-full h-[100px] 
          bg-gradient-to-b from-transparent to-gray-900/90"></div>
        </figure>
      </section>

      <section class="w-full flex flex-col justify-between">
        <div id="div-wrapper">
          <h3 class="text-gray-700 text-2xl font-rajdhani font-bold">Pobres criaturas</h3>
          <div id="info" class="font-rajdhani font-bold text-sm">
            <div class="mt-3">
              <span class="font-nunito text-gray-600 font-bold">Categoria:</span>
              <span class="font-nunito text-gray-600 font-normal">Drama</span>
            </div>
            <div>
              <span class="font-nunito text-gray-600 font-bold">Ano:</span>
              <span class="font-nunito text-gray-600 font-normal">2023</span>
            </div>
          </div>
        </div>

        <div>
          <span class="font-nunito text-gray-600 text-sm">Sua avaliação:</span>


          <!-- ##### STARS ##### -->

          <div id="stars" class="flex mt-[6px]">

            <!-- ##### STAR ##### -->
            <div id="star" class="relative w-[40px] h-[40px] group cursor-pointer">
              <!-- Estrela contornada (default) -->
              <div class="absolute inset-0 transition-opacity duration-200 group-hover:opacity-0">
                <!-- SVG contornada -->
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M37.3719 15.1969C37.2156 14.7165 36.9206 14.293 36.5241 13.98C36.1276 13.6669 35.6473 13.4781 35.1437 13.4375L25.925 12.6938L22.3656 4.08596C22.1731 3.61693 21.8455 3.21573 21.4244 2.93337C21.0033 2.65101 20.5078 2.50024 20.0008 2.50024C19.4938 2.50024 18.9982 2.65101 18.5771 2.93337C18.156 3.21573 17.8284 3.61693 17.6359 4.08596L14.0797 12.6922L4.85623 13.4375C4.35182 13.4802 3.87122 13.6708 3.47463 13.9853C3.07804 14.2999 2.78312 14.7246 2.6268 15.2061C2.47048 15.6875 2.45972 16.2044 2.59587 16.692C2.73202 17.1795 3.00902 17.6161 3.39217 17.9469L10.4234 24.0141L8.28123 33.086C8.16143 33.5788 8.19076 34.0962 8.36551 34.5723C8.54026 35.0485 8.85255 35.462 9.26273 35.7603C9.67291 36.0586 10.1625 36.2284 10.6693 36.248C11.1761 36.2676 11.6774 36.1361 12.1094 35.8703L20 31.0141L27.8953 35.8703C28.3274 36.133 28.8276 36.2619 29.3329 36.2408C29.8382 36.2198 30.3259 36.0497 30.7347 35.752C31.1435 35.4543 31.455 35.0423 31.6301 34.5679C31.8052 34.0935 31.8361 33.5779 31.7187 33.086L29.5687 24.0125L36.6 17.9453C36.9862 17.6151 37.2658 17.1776 37.4032 16.6883C37.5406 16.199 37.5297 15.68 37.3719 15.1969ZM34.975 16.0516L27.3656 22.6141C27.1921 22.7637 27.063 22.9581 26.9924 23.176C26.9219 23.394 26.9126 23.6271 26.9656 23.85L29.2906 33.6625C29.2966 33.6761 29.2972 33.6914 29.2923 33.7053C29.2873 33.7193 29.2772 33.7308 29.264 33.7375C29.2359 33.7594 29.2281 33.7547 29.2047 33.7375L20.6547 28.4797C20.4578 28.3587 20.2311 28.2946 20 28.2946C19.7688 28.2946 19.5422 28.3587 19.3453 28.4797L10.7953 33.7407C10.7719 33.7547 10.7656 33.7594 10.7359 33.7407C10.7227 33.7339 10.7126 33.7224 10.7077 33.7085C10.7027 33.6945 10.7033 33.6792 10.7094 33.6657L13.0344 23.8532C13.0873 23.6303 13.0781 23.3971 13.0075 23.1791C12.937 22.9612 12.8079 22.7668 12.6344 22.6172L5.02498 16.0547C5.00623 16.0391 4.98905 16.025 5.00467 15.9766C5.0203 15.9282 5.0328 15.9344 5.05623 15.9313L15.0437 15.125C15.2728 15.1054 15.492 15.0229 15.6773 14.8867C15.8625 14.7506 16.0066 14.5659 16.0937 14.3532L19.9406 5.03909C19.9531 5.01253 19.9578 5.00003 19.9953 5.00003C20.0328 5.00003 20.0375 5.01253 20.05 5.03909L23.9062 14.3532C23.9942 14.566 24.1392 14.7505 24.3253 14.8861C24.5114 15.0218 24.7314 15.1034 24.9609 15.1219L34.9484 15.9282C34.9719 15.9282 34.9859 15.9282 35 15.9735C35.014 16.0188 35 16.036 34.975 16.0516Z" fill="#A85FDD" />
                </svg>
              </div>

              <!-- Estrela preenchida (hover) -->
              <div class="absolute inset-0 opacity-0 transition-opacity duration-200 group-hover:opacity-100">
                <!-- SVG preenchida -->
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M36.6078 17.9452L29.5766 24.0124L31.7188 33.0859C31.837 33.5784 31.8065 34.095 31.6313 34.5702C31.4561 35.0455 31.1439 35.4582 30.7343 35.7561C30.3247 36.0541 29.8359 36.2239 29.3298 36.2442C28.8236 36.2645 28.3229 36.1344 27.8906 35.8702L20 31.014L12.1047 35.8702C11.6726 36.1329 11.1724 36.2618 10.6671 36.2407C10.1619 36.2197 9.67413 36.0496 9.26534 35.7519C8.85655 35.4542 8.54499 35.0422 8.36988 34.5678C8.19476 34.0934 8.16394 33.5778 8.28127 33.0859L10.4313 24.0124L3.40002 17.9452C3.01768 17.6148 2.74116 17.179 2.605 16.6923C2.46884 16.2057 2.47907 15.6897 2.63442 15.2088C2.78977 14.7279 3.08336 14.3034 3.47851 13.9884C3.87366 13.6734 4.35286 13.4817 4.85627 13.4374L14.075 12.6937L17.6313 4.08743C17.8238 3.61839 18.1514 3.21719 18.5725 2.93483C18.9936 2.65247 19.4891 2.50171 19.9961 2.50171C20.5031 2.50171 20.9987 2.65247 21.4198 2.93483C21.8409 3.21719 22.1685 3.61839 22.361 4.08743L25.9156 12.6937L35.1344 13.4374C35.6388 13.4801 36.1194 13.6707 36.516 13.9853C36.9126 14.2998 37.2075 14.7245 37.3638 15.206C37.5202 15.6874 37.5309 16.2043 37.3948 16.6919C37.2586 17.1794 36.9816 17.616 36.5985 17.9468L36.6078 17.9452Z" fill="#A85FDD" />
                </svg>
              </div>
            </div>

            <!-- ##### STAR ##### -->
            <div id="star" class="relative w-[40px] h-[40px] group cursor-pointer">
              <!-- Estrela contornada (default) -->
              <div class="absolute inset-0 transition-opacity duration-200 group-hover:opacity-0">
                <!-- SVG contornada -->
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M37.3719 15.1969C37.2156 14.7165 36.9206 14.293 36.5241 13.98C36.1276 13.6669 35.6473 13.4781 35.1437 13.4375L25.925 12.6938L22.3656 4.08596C22.1731 3.61693 21.8455 3.21573 21.4244 2.93337C21.0033 2.65101 20.5078 2.50024 20.0008 2.50024C19.4938 2.50024 18.9982 2.65101 18.5771 2.93337C18.156 3.21573 17.8284 3.61693 17.6359 4.08596L14.0797 12.6922L4.85623 13.4375C4.35182 13.4802 3.87122 13.6708 3.47463 13.9853C3.07804 14.2999 2.78312 14.7246 2.6268 15.2061C2.47048 15.6875 2.45972 16.2044 2.59587 16.692C2.73202 17.1795 3.00902 17.6161 3.39217 17.9469L10.4234 24.0141L8.28123 33.086C8.16143 33.5788 8.19076 34.0962 8.36551 34.5723C8.54026 35.0485 8.85255 35.462 9.26273 35.7603C9.67291 36.0586 10.1625 36.2284 10.6693 36.248C11.1761 36.2676 11.6774 36.1361 12.1094 35.8703L20 31.0141L27.8953 35.8703C28.3274 36.133 28.8276 36.2619 29.3329 36.2408C29.8382 36.2198 30.3259 36.0497 30.7347 35.752C31.1435 35.4543 31.455 35.0423 31.6301 34.5679C31.8052 34.0935 31.8361 33.5779 31.7187 33.086L29.5687 24.0125L36.6 17.9453C36.9862 17.6151 37.2658 17.1776 37.4032 16.6883C37.5406 16.199 37.5297 15.68 37.3719 15.1969ZM34.975 16.0516L27.3656 22.6141C27.1921 22.7637 27.063 22.9581 26.9924 23.176C26.9219 23.394 26.9126 23.6271 26.9656 23.85L29.2906 33.6625C29.2966 33.6761 29.2972 33.6914 29.2923 33.7053C29.2873 33.7193 29.2772 33.7308 29.264 33.7375C29.2359 33.7594 29.2281 33.7547 29.2047 33.7375L20.6547 28.4797C20.4578 28.3587 20.2311 28.2946 20 28.2946C19.7688 28.2946 19.5422 28.3587 19.3453 28.4797L10.7953 33.7407C10.7719 33.7547 10.7656 33.7594 10.7359 33.7407C10.7227 33.7339 10.7126 33.7224 10.7077 33.7085C10.7027 33.6945 10.7033 33.6792 10.7094 33.6657L13.0344 23.8532C13.0873 23.6303 13.0781 23.3971 13.0075 23.1791C12.937 22.9612 12.8079 22.7668 12.6344 22.6172L5.02498 16.0547C5.00623 16.0391 4.98905 16.025 5.00467 15.9766C5.0203 15.9282 5.0328 15.9344 5.05623 15.9313L15.0437 15.125C15.2728 15.1054 15.492 15.0229 15.6773 14.8867C15.8625 14.7506 16.0066 14.5659 16.0937 14.3532L19.9406 5.03909C19.9531 5.01253 19.9578 5.00003 19.9953 5.00003C20.0328 5.00003 20.0375 5.01253 20.05 5.03909L23.9062 14.3532C23.9942 14.566 24.1392 14.7505 24.3253 14.8861C24.5114 15.0218 24.7314 15.1034 24.9609 15.1219L34.9484 15.9282C34.9719 15.9282 34.9859 15.9282 35 15.9735C35.014 16.0188 35 16.036 34.975 16.0516Z" fill="#A85FDD" />
                </svg>
              </div>

              <!-- Estrela preenchida (hover) -->
              <div class="absolute inset-0 opacity-0 transition-opacity duration-200 group-hover:opacity-100">
                <!-- SVG preenchida -->
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M36.6078 17.9452L29.5766 24.0124L31.7188 33.0859C31.837 33.5784 31.8065 34.095 31.6313 34.5702C31.4561 35.0455 31.1439 35.4582 30.7343 35.7561C30.3247 36.0541 29.8359 36.2239 29.3298 36.2442C28.8236 36.2645 28.3229 36.1344 27.8906 35.8702L20 31.014L12.1047 35.8702C11.6726 36.1329 11.1724 36.2618 10.6671 36.2407C10.1619 36.2197 9.67413 36.0496 9.26534 35.7519C8.85655 35.4542 8.54499 35.0422 8.36988 34.5678C8.19476 34.0934 8.16394 33.5778 8.28127 33.0859L10.4313 24.0124L3.40002 17.9452C3.01768 17.6148 2.74116 17.179 2.605 16.6923C2.46884 16.2057 2.47907 15.6897 2.63442 15.2088C2.78977 14.7279 3.08336 14.3034 3.47851 13.9884C3.87366 13.6734 4.35286 13.4817 4.85627 13.4374L14.075 12.6937L17.6313 4.08743C17.8238 3.61839 18.1514 3.21719 18.5725 2.93483C18.9936 2.65247 19.4891 2.50171 19.9961 2.50171C20.5031 2.50171 20.9987 2.65247 21.4198 2.93483C21.8409 3.21719 22.1685 3.61839 22.361 4.08743L25.9156 12.6937L35.1344 13.4374C35.6388 13.4801 36.1194 13.6707 36.516 13.9853C36.9126 14.2998 37.2075 14.7245 37.3638 15.206C37.5202 15.6874 37.5309 16.2043 37.3948 16.6919C37.2586 17.1794 36.9816 17.616 36.5985 17.9468L36.6078 17.9452Z" fill="#A85FDD" />
                </svg>
              </div>
            </div>

            <!-- ##### STAR ##### -->
            <div id="star" class="relative w-[40px] h-[40px] group cursor-pointer">
              <!-- Estrela contornada (default) -->
              <div class="absolute inset-0 transition-opacity duration-200 group-hover:opacity-0">
                <!-- SVG contornada -->
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M37.3719 15.1969C37.2156 14.7165 36.9206 14.293 36.5241 13.98C36.1276 13.6669 35.6473 13.4781 35.1437 13.4375L25.925 12.6938L22.3656 4.08596C22.1731 3.61693 21.8455 3.21573 21.4244 2.93337C21.0033 2.65101 20.5078 2.50024 20.0008 2.50024C19.4938 2.50024 18.9982 2.65101 18.5771 2.93337C18.156 3.21573 17.8284 3.61693 17.6359 4.08596L14.0797 12.6922L4.85623 13.4375C4.35182 13.4802 3.87122 13.6708 3.47463 13.9853C3.07804 14.2999 2.78312 14.7246 2.6268 15.2061C2.47048 15.6875 2.45972 16.2044 2.59587 16.692C2.73202 17.1795 3.00902 17.6161 3.39217 17.9469L10.4234 24.0141L8.28123 33.086C8.16143 33.5788 8.19076 34.0962 8.36551 34.5723C8.54026 35.0485 8.85255 35.462 9.26273 35.7603C9.67291 36.0586 10.1625 36.2284 10.6693 36.248C11.1761 36.2676 11.6774 36.1361 12.1094 35.8703L20 31.0141L27.8953 35.8703C28.3274 36.133 28.8276 36.2619 29.3329 36.2408C29.8382 36.2198 30.3259 36.0497 30.7347 35.752C31.1435 35.4543 31.455 35.0423 31.6301 34.5679C31.8052 34.0935 31.8361 33.5779 31.7187 33.086L29.5687 24.0125L36.6 17.9453C36.9862 17.6151 37.2658 17.1776 37.4032 16.6883C37.5406 16.199 37.5297 15.68 37.3719 15.1969ZM34.975 16.0516L27.3656 22.6141C27.1921 22.7637 27.063 22.9581 26.9924 23.176C26.9219 23.394 26.9126 23.6271 26.9656 23.85L29.2906 33.6625C29.2966 33.6761 29.2972 33.6914 29.2923 33.7053C29.2873 33.7193 29.2772 33.7308 29.264 33.7375C29.2359 33.7594 29.2281 33.7547 29.2047 33.7375L20.6547 28.4797C20.4578 28.3587 20.2311 28.2946 20 28.2946C19.7688 28.2946 19.5422 28.3587 19.3453 28.4797L10.7953 33.7407C10.7719 33.7547 10.7656 33.7594 10.7359 33.7407C10.7227 33.7339 10.7126 33.7224 10.7077 33.7085C10.7027 33.6945 10.7033 33.6792 10.7094 33.6657L13.0344 23.8532C13.0873 23.6303 13.0781 23.3971 13.0075 23.1791C12.937 22.9612 12.8079 22.7668 12.6344 22.6172L5.02498 16.0547C5.00623 16.0391 4.98905 16.025 5.00467 15.9766C5.0203 15.9282 5.0328 15.9344 5.05623 15.9313L15.0437 15.125C15.2728 15.1054 15.492 15.0229 15.6773 14.8867C15.8625 14.7506 16.0066 14.5659 16.0937 14.3532L19.9406 5.03909C19.9531 5.01253 19.9578 5.00003 19.9953 5.00003C20.0328 5.00003 20.0375 5.01253 20.05 5.03909L23.9062 14.3532C23.9942 14.566 24.1392 14.7505 24.3253 14.8861C24.5114 15.0218 24.7314 15.1034 24.9609 15.1219L34.9484 15.9282C34.9719 15.9282 34.9859 15.9282 35 15.9735C35.014 16.0188 35 16.036 34.975 16.0516Z" fill="#A85FDD" />
                </svg>
              </div>

              <!-- Estrela preenchida (hover) -->
              <div class="absolute inset-0 opacity-0 transition-opacity duration-200 group-hover:opacity-100">
                <!-- SVG preenchida -->
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M36.6078 17.9452L29.5766 24.0124L31.7188 33.0859C31.837 33.5784 31.8065 34.095 31.6313 34.5702C31.4561 35.0455 31.1439 35.4582 30.7343 35.7561C30.3247 36.0541 29.8359 36.2239 29.3298 36.2442C28.8236 36.2645 28.3229 36.1344 27.8906 35.8702L20 31.014L12.1047 35.8702C11.6726 36.1329 11.1724 36.2618 10.6671 36.2407C10.1619 36.2197 9.67413 36.0496 9.26534 35.7519C8.85655 35.4542 8.54499 35.0422 8.36988 34.5678C8.19476 34.0934 8.16394 33.5778 8.28127 33.0859L10.4313 24.0124L3.40002 17.9452C3.01768 17.6148 2.74116 17.179 2.605 16.6923C2.46884 16.2057 2.47907 15.6897 2.63442 15.2088C2.78977 14.7279 3.08336 14.3034 3.47851 13.9884C3.87366 13.6734 4.35286 13.4817 4.85627 13.4374L14.075 12.6937L17.6313 4.08743C17.8238 3.61839 18.1514 3.21719 18.5725 2.93483C18.9936 2.65247 19.4891 2.50171 19.9961 2.50171C20.5031 2.50171 20.9987 2.65247 21.4198 2.93483C21.8409 3.21719 22.1685 3.61839 22.361 4.08743L25.9156 12.6937L35.1344 13.4374C35.6388 13.4801 36.1194 13.6707 36.516 13.9853C36.9126 14.2998 37.2075 14.7245 37.3638 15.206C37.5202 15.6874 37.5309 16.2043 37.3948 16.6919C37.2586 17.1794 36.9816 17.616 36.5985 17.9468L36.6078 17.9452Z" fill="#A85FDD" />
                </svg>
              </div>
            </div>

            <!-- ##### STAR ##### -->
            <div id="star" class="relative w-[40px] h-[40px] group cursor-pointer">
              <!-- Estrela contornada (default) -->
              <div class="absolute inset-0 transition-opacity duration-200 group-hover:opacity-0">
                <!-- SVG contornada -->
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M37.3719 15.1969C37.2156 14.7165 36.9206 14.293 36.5241 13.98C36.1276 13.6669 35.6473 13.4781 35.1437 13.4375L25.925 12.6938L22.3656 4.08596C22.1731 3.61693 21.8455 3.21573 21.4244 2.93337C21.0033 2.65101 20.5078 2.50024 20.0008 2.50024C19.4938 2.50024 18.9982 2.65101 18.5771 2.93337C18.156 3.21573 17.8284 3.61693 17.6359 4.08596L14.0797 12.6922L4.85623 13.4375C4.35182 13.4802 3.87122 13.6708 3.47463 13.9853C3.07804 14.2999 2.78312 14.7246 2.6268 15.2061C2.47048 15.6875 2.45972 16.2044 2.59587 16.692C2.73202 17.1795 3.00902 17.6161 3.39217 17.9469L10.4234 24.0141L8.28123 33.086C8.16143 33.5788 8.19076 34.0962 8.36551 34.5723C8.54026 35.0485 8.85255 35.462 9.26273 35.7603C9.67291 36.0586 10.1625 36.2284 10.6693 36.248C11.1761 36.2676 11.6774 36.1361 12.1094 35.8703L20 31.0141L27.8953 35.8703C28.3274 36.133 28.8276 36.2619 29.3329 36.2408C29.8382 36.2198 30.3259 36.0497 30.7347 35.752C31.1435 35.4543 31.455 35.0423 31.6301 34.5679C31.8052 34.0935 31.8361 33.5779 31.7187 33.086L29.5687 24.0125L36.6 17.9453C36.9862 17.6151 37.2658 17.1776 37.4032 16.6883C37.5406 16.199 37.5297 15.68 37.3719 15.1969ZM34.975 16.0516L27.3656 22.6141C27.1921 22.7637 27.063 22.9581 26.9924 23.176C26.9219 23.394 26.9126 23.6271 26.9656 23.85L29.2906 33.6625C29.2966 33.6761 29.2972 33.6914 29.2923 33.7053C29.2873 33.7193 29.2772 33.7308 29.264 33.7375C29.2359 33.7594 29.2281 33.7547 29.2047 33.7375L20.6547 28.4797C20.4578 28.3587 20.2311 28.2946 20 28.2946C19.7688 28.2946 19.5422 28.3587 19.3453 28.4797L10.7953 33.7407C10.7719 33.7547 10.7656 33.7594 10.7359 33.7407C10.7227 33.7339 10.7126 33.7224 10.7077 33.7085C10.7027 33.6945 10.7033 33.6792 10.7094 33.6657L13.0344 23.8532C13.0873 23.6303 13.0781 23.3971 13.0075 23.1791C12.937 22.9612 12.8079 22.7668 12.6344 22.6172L5.02498 16.0547C5.00623 16.0391 4.98905 16.025 5.00467 15.9766C5.0203 15.9282 5.0328 15.9344 5.05623 15.9313L15.0437 15.125C15.2728 15.1054 15.492 15.0229 15.6773 14.8867C15.8625 14.7506 16.0066 14.5659 16.0937 14.3532L19.9406 5.03909C19.9531 5.01253 19.9578 5.00003 19.9953 5.00003C20.0328 5.00003 20.0375 5.01253 20.05 5.03909L23.9062 14.3532C23.9942 14.566 24.1392 14.7505 24.3253 14.8861C24.5114 15.0218 24.7314 15.1034 24.9609 15.1219L34.9484 15.9282C34.9719 15.9282 34.9859 15.9282 35 15.9735C35.014 16.0188 35 16.036 34.975 16.0516Z" fill="#A85FDD" />
                </svg>
              </div>

              <!-- Estrela preenchida (hover) -->
              <div class="absolute inset-0 opacity-0 transition-opacity duration-200 group-hover:opacity-100">
                <!-- SVG preenchida -->
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M36.6078 17.9452L29.5766 24.0124L31.7188 33.0859C31.837 33.5784 31.8065 34.095 31.6313 34.5702C31.4561 35.0455 31.1439 35.4582 30.7343 35.7561C30.3247 36.0541 29.8359 36.2239 29.3298 36.2442C28.8236 36.2645 28.3229 36.1344 27.8906 35.8702L20 31.014L12.1047 35.8702C11.6726 36.1329 11.1724 36.2618 10.6671 36.2407C10.1619 36.2197 9.67413 36.0496 9.26534 35.7519C8.85655 35.4542 8.54499 35.0422 8.36988 34.5678C8.19476 34.0934 8.16394 33.5778 8.28127 33.0859L10.4313 24.0124L3.40002 17.9452C3.01768 17.6148 2.74116 17.179 2.605 16.6923C2.46884 16.2057 2.47907 15.6897 2.63442 15.2088C2.78977 14.7279 3.08336 14.3034 3.47851 13.9884C3.87366 13.6734 4.35286 13.4817 4.85627 13.4374L14.075 12.6937L17.6313 4.08743C17.8238 3.61839 18.1514 3.21719 18.5725 2.93483C18.9936 2.65247 19.4891 2.50171 19.9961 2.50171C20.5031 2.50171 20.9987 2.65247 21.4198 2.93483C21.8409 3.21719 22.1685 3.61839 22.361 4.08743L25.9156 12.6937L35.1344 13.4374C35.6388 13.4801 36.1194 13.6707 36.516 13.9853C36.9126 14.2998 37.2075 14.7245 37.3638 15.206C37.5202 15.6874 37.5309 16.2043 37.3948 16.6919C37.2586 17.1794 36.9816 17.616 36.5985 17.9468L36.6078 17.9452Z" fill="#A85FDD" />
                </svg>
              </div>
            </div>

            <!-- ##### STAR ##### -->
            <div id="star" class="relative w-[40px] h-[40px] group cursor-pointer">
              <!-- Estrela contornada (default) -->
              <div class="absolute inset-0 transition-opacity duration-200 group-hover:opacity-0">
                <!-- SVG contornada -->
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M37.3719 15.1969C37.2156 14.7165 36.9206 14.293 36.5241 13.98C36.1276 13.6669 35.6473 13.4781 35.1437 13.4375L25.925 12.6938L22.3656 4.08596C22.1731 3.61693 21.8455 3.21573 21.4244 2.93337C21.0033 2.65101 20.5078 2.50024 20.0008 2.50024C19.4938 2.50024 18.9982 2.65101 18.5771 2.93337C18.156 3.21573 17.8284 3.61693 17.6359 4.08596L14.0797 12.6922L4.85623 13.4375C4.35182 13.4802 3.87122 13.6708 3.47463 13.9853C3.07804 14.2999 2.78312 14.7246 2.6268 15.2061C2.47048 15.6875 2.45972 16.2044 2.59587 16.692C2.73202 17.1795 3.00902 17.6161 3.39217 17.9469L10.4234 24.0141L8.28123 33.086C8.16143 33.5788 8.19076 34.0962 8.36551 34.5723C8.54026 35.0485 8.85255 35.462 9.26273 35.7603C9.67291 36.0586 10.1625 36.2284 10.6693 36.248C11.1761 36.2676 11.6774 36.1361 12.1094 35.8703L20 31.0141L27.8953 35.8703C28.3274 36.133 28.8276 36.2619 29.3329 36.2408C29.8382 36.2198 30.3259 36.0497 30.7347 35.752C31.1435 35.4543 31.455 35.0423 31.6301 34.5679C31.8052 34.0935 31.8361 33.5779 31.7187 33.086L29.5687 24.0125L36.6 17.9453C36.9862 17.6151 37.2658 17.1776 37.4032 16.6883C37.5406 16.199 37.5297 15.68 37.3719 15.1969ZM34.975 16.0516L27.3656 22.6141C27.1921 22.7637 27.063 22.9581 26.9924 23.176C26.9219 23.394 26.9126 23.6271 26.9656 23.85L29.2906 33.6625C29.2966 33.6761 29.2972 33.6914 29.2923 33.7053C29.2873 33.7193 29.2772 33.7308 29.264 33.7375C29.2359 33.7594 29.2281 33.7547 29.2047 33.7375L20.6547 28.4797C20.4578 28.3587 20.2311 28.2946 20 28.2946C19.7688 28.2946 19.5422 28.3587 19.3453 28.4797L10.7953 33.7407C10.7719 33.7547 10.7656 33.7594 10.7359 33.7407C10.7227 33.7339 10.7126 33.7224 10.7077 33.7085C10.7027 33.6945 10.7033 33.6792 10.7094 33.6657L13.0344 23.8532C13.0873 23.6303 13.0781 23.3971 13.0075 23.1791C12.937 22.9612 12.8079 22.7668 12.6344 22.6172L5.02498 16.0547C5.00623 16.0391 4.98905 16.025 5.00467 15.9766C5.0203 15.9282 5.0328 15.9344 5.05623 15.9313L15.0437 15.125C15.2728 15.1054 15.492 15.0229 15.6773 14.8867C15.8625 14.7506 16.0066 14.5659 16.0937 14.3532L19.9406 5.03909C19.9531 5.01253 19.9578 5.00003 19.9953 5.00003C20.0328 5.00003 20.0375 5.01253 20.05 5.03909L23.9062 14.3532C23.9942 14.566 24.1392 14.7505 24.3253 14.8861C24.5114 15.0218 24.7314 15.1034 24.9609 15.1219L34.9484 15.9282C34.9719 15.9282 34.9859 15.9282 35 15.9735C35.014 16.0188 35 16.036 34.975 16.0516Z" fill="#A85FDD" />
                </svg>
              </div>

              <!-- Estrela preenchida (hover) -->
              <div class="absolute inset-0 opacity-0 transition-opacity duration-200 group-hover:opacity-100">
                <!-- SVG preenchida -->
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M36.6078 17.9452L29.5766 24.0124L31.7188 33.0859C31.837 33.5784 31.8065 34.095 31.6313 34.5702C31.4561 35.0455 31.1439 35.4582 30.7343 35.7561C30.3247 36.0541 29.8359 36.2239 29.3298 36.2442C28.8236 36.2645 28.3229 36.1344 27.8906 35.8702L20 31.014L12.1047 35.8702C11.6726 36.1329 11.1724 36.2618 10.6671 36.2407C10.1619 36.2197 9.67413 36.0496 9.26534 35.7519C8.85655 35.4542 8.54499 35.0422 8.36988 34.5678C8.19476 34.0934 8.16394 33.5778 8.28127 33.0859L10.4313 24.0124L3.40002 17.9452C3.01768 17.6148 2.74116 17.179 2.605 16.6923C2.46884 16.2057 2.47907 15.6897 2.63442 15.2088C2.78977 14.7279 3.08336 14.3034 3.47851 13.9884C3.87366 13.6734 4.35286 13.4817 4.85627 13.4374L14.075 12.6937L17.6313 4.08743C17.8238 3.61839 18.1514 3.21719 18.5725 2.93483C18.9936 2.65247 19.4891 2.50171 19.9961 2.50171C20.5031 2.50171 20.9987 2.65247 21.4198 2.93483C21.8409 3.21719 22.1685 3.61839 22.361 4.08743L25.9156 12.6937L35.1344 13.4374C35.6388 13.4801 36.1194 13.6707 36.516 13.9853C36.9126 14.2998 37.2075 14.7245 37.3638 15.206C37.5202 15.6874 37.5309 16.2043 37.3948 16.6919C37.2586 17.1794 36.9816 17.616 36.5985 17.9468L36.6078 17.9452Z" fill="#A85FDD" />
                </svg>
              </div>
            </div>

          </div>

        </div>
      </section>

    </div>



  </div>



</body>

</html>