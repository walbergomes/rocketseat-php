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
        id="explorer"
        class="flex items-center gap-2 text-purple-light font-nunito bg-gray-300 px-3 py-2 rounded-md cursor-pointer">
        <img
          src="assets/Icon/Popcorn-Regular-Selected.svg"
          alt=""
          class="w-[20px]">
        Explorer
      </button>
      <button
        type="button"
        id="my-films"
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

  <main class="max-w-7xl m-auto pb-[60px]">
    <section class="flex justify-between mt-16">
      <h1 class="text-gray-50 text-2xl font-[Rammetto_One]">Explorar</h1>
      <div class="input-wrapper flex gap-2 h-[48px] w-[264px] border border-[#1A1B2D] rounded-md focus-within:outline outline-[#892CCD]">
        <img src="assets/Icon/MagnifyingGlass-Regular.svg" alt="" class="w-[16px] ml-3">
        <input type="text" placeholder="Pesquisar filme" class="placeholder:text-[#7A7B9F] outline-none text-white">
      </div>
    </section>

    <!-- ### FILMS ### -->
    <section class="w-full flex flex-wrap gap-y-[24px] justify-between mt-6">
      <figure class="card w-[280px] h-[360px] bg-red-500 rounded-2xl overflow-hidden relative">
        <img
          src="assets/Image/Films/pobres-criaturas.png"
          alt=""
          class="w-full h-full object-cover">
        <div class="shadow absolute bottom-0 left-0 w-full h-[100px] 
          bg-gradient-to-b from-transparent to-gray-900/90"></div>

        <div class="absolute top-5 right-5 flex text-[#E4E5EC] text-xs items-baseline bg-[#0f0f1a]/80 px-[10px] py-[6px] rounded-full leading-none">
          <span class="text-xl leading-none font-[Rajdhani] font-bold">4,5</span>
          /5
          <img src="assets/Icon/Star-Fill.svg" alt="" class="w-4 ml-[6px]">
        </div>

        <figcaption class="absolute bottom-5 left-5">
          <h2 class="text-xl text-[#E4E5EC] font-[Rajdhani] font-bold">Pobres Criaturas</h2>
          <p class="font-[Nunito_Sans] text-sm text-[#B5B6C9]">Drama • 2023</p>
        </figcaption>
      </figure>

      <figure class="card w-[280px] h-[360px] bg-red-500 rounded-2xl overflow-hidden relative">
        <img
          src="assets/Image/Films/meu-malvado.png"
          alt=""
          class="w-full h-full object-cover">
        <div class="shadow absolute bottom-0 left-0 w-full h-[100px] 
          bg-gradient-to-b from-transparent to-gray-900/90"></div>

        <div class="absolute top-5 right-5 flex text-[#E4E5EC] text-xs items-baseline bg-[#0f0f1a]/80 px-[10px] py-[6px] rounded-full leading-none">
          <span class="text-xl leading-none font-[Rajdhani] font-bold">4,5</span>
          /5
          <img src="assets/Icon/Star-Fill.svg" alt="" class="w-4 ml-[6px]">
        </div>

        <figcaption class="absolute bottom-5 left-5">
          <h2 class="text-xl text-[#E4E5EC] font-[Rajdhani] font-bold">Meu Malvado Favorito 4</h2>
          <p class="font-[Nunito_Sans] text-sm text-[#B5B6C9]">Animação • 2024</p>
        </figcaption>
      </figure>

      <figure class="card w-[280px] h-[360px] bg-red-500 rounded-2xl overflow-hidden relative">
        <img
          src="assets/Image/Films/deadpol-x-wolverine.png"
          alt=""
          class="w-full h-full object-cover">
        <div class="shadow absolute bottom-0 left-0 w-full h-[100px] 
          bg-gradient-to-b from-transparent to-gray-900/90"></div>

        <div class="absolute top-5 right-5 flex text-[#E4E5EC] text-xs items-baseline bg-[#0f0f1a]/80 px-[10px] py-[6px] rounded-full leading-none">
          <span class="text-xl leading-none font-[Rajdhani] font-bold">4,5</span>
          /5
          <img src="assets/Icon/Star-Fill.svg" alt="" class="w-4 ml-[6px]">
        </div>

        <figcaption class="absolute bottom-5 left-5">
          <h2 class="text-xl text-[#E4E5EC] font-[Rajdhani] font-bold">Deadpool & Wolverine</h2>
          <p class="font-[Nunito_Sans] text-sm text-[#B5B6C9]">Ação • 2023</p>
        </figcaption>
      </figure>

      <figure class="card w-[280px] h-[360px] bg-red-500 rounded-2xl overflow-hidden relative">
        <img
          src="assets/Image/Films/o-corvo.png"
          alt=""
          class="w-full h-full object-cover">
        <div class="shadow absolute bottom-0 left-0 w-full h-[100px] 
          bg-gradient-to-b from-transparent to-gray-900/90"></div>

        <div class="absolute top-5 right-5 flex text-[#E4E5EC] text-xs items-baseline bg-[#0f0f1a]/80 px-[10px] py-[6px] rounded-full leading-none">
          <span class="text-xl leading-none font-[Rajdhani] font-bold">4,5</span>
          /5
          <img src="assets/Icon/Star-Fill.svg" alt="" class="w-4 ml-[6px]">
        </div>

        <figcaption class="absolute bottom-5 left-5">
          <h2 class="text-xl text-[#E4E5EC] font-[Rajdhani] font-bold">O Corvo</h2>
          <p class="font-[Nunito_Sans] text-sm text-[#B5B6C9]">Fantasia • 2024</p>
        </figcaption>
      </figure>

      <figure class="card w-[280px] h-[360px] bg-red-500 rounded-2xl overflow-hidden relative">
        <img
          src="assets/Image/Films/senhor-dos-aneis.png"
          alt=""
          class="w-full h-full object-cover">
        <div class="shadow absolute bottom-0 left-0 w-full h-[100px] 
          bg-gradient-to-b from-transparent to-gray-900/90"></div>

        <div class="absolute top-5 right-5 flex text-[#E4E5EC] text-xs items-baseline bg-[#0f0f1a]/80 px-[10px] py-[6px] rounded-full leading-none">
          <span class="text-xl leading-none font-[Rajdhani] font-bold">4,5</span>
          /5
          <img src="assets/Icon/Star-Fill.svg" alt="" class="w-4 ml-[6px]">
        </div>

        <figcaption class="absolute bottom-5 left-5">
          <h2 class="text-xl text-[#E4E5EC] font-[Rajdhani] font-bold">O Senhor dos Anéis: A Sociedade do Anel</h2>
          <p class="font-[Nunito_Sans] text-sm text-[#B5B6C9]">Aventura • 2001</p>
        </figcaption>
      </figure>

      <figure class="card w-[280px] h-[360px] bg-red-500 rounded-2xl overflow-hidden relative">
        <img
          src="assets/Image/Films/alien.png"
          alt=""
          class="w-full h-full object-cover">
        <div class="shadow absolute bottom-0 left-0 w-full h-[100px] 
          bg-gradient-to-b from-transparent to-gray-900/90"></div>

        <div class="absolute top-5 right-5 flex text-[#E4E5EC] text-xs items-baseline bg-[#0f0f1a]/80 px-[10px] py-[6px] rounded-full leading-none">
          <span class="text-xl leading-none font-[Rajdhani] font-bold">4,5</span>
          /5
          <img src="assets/Icon/Star-Fill.svg" alt="" class="w-4 ml-[6px]">
        </div>

        <figcaption class="absolute bottom-5 left-5">
          <h2 class="text-xl text-[#E4E5EC] font-[Rajdhani] font-bold">Alien: Covenant</h2>
          <p class="font-[Nunito_Sans] text-sm text-[#B5B6C9]">Horror • 2017</p>
        </figcaption>
      </figure>

      <figure class="card w-[280px] h-[360px] bg-red-500 rounded-2xl overflow-hidden relative">
        <img
          src="assets/Image/Films/divertidamente.png"
          alt=""
          class="w-full h-full object-cover">
        <div class="shadow absolute bottom-0 left-0 w-full h-[100px] 
          bg-gradient-to-b from-transparent to-gray-900/90"></div>

        <div class="absolute top-5 right-5 flex text-[#E4E5EC] text-xs items-baseline bg-[#0f0f1a]/80 px-[10px] py-[6px] rounded-full leading-none">
          <span class="text-xl leading-none font-[Rajdhani] font-bold">4,5</span>
          /5
          <img src="assets/Icon/Star-Fill.svg" alt="" class="w-4 ml-[6px]">
        </div>

        <figcaption class="absolute bottom-5 left-5">
          <h2 class="text-xl text-[#E4E5EC] font-[Rajdhani] font-bold">Divertidamente 2</h2>
          <p class="font-[Nunito_Sans] text-sm text-[#B5B6C9]">Animação • 2024</p>
        </figcaption>
      </figure>

      <figure class="card w-[280px] h-[360px] bg-red-500 rounded-2xl overflow-hidden relative">
        <img
          src="assets/Image/Films/mad-max.png"
          alt=""
          class="w-full h-full object-cover">
        <div class="shadow absolute bottom-0 left-0 w-full h-[100px] 
          bg-gradient-to-b from-transparent to-gray-900/90"></div>

        <div class="absolute top-5 right-5 flex text-[#E4E5EC] text-xs items-baseline bg-[#0f0f1a]/80 px-[10px] py-[6px] rounded-full leading-none">
          <span class="text-xl leading-none font-[Rajdhani] font-bold">4,5</span>
          /5
          <img src="assets/Icon/Star-Fill.svg" alt="" class="w-4 ml-[6px]">
        </div>

        <figcaption class="absolute bottom-5 left-5">
          <h2 class="text-xl text-[#E4E5EC] font-[Rajdhani] font-bold">Mad Max: Estrada da Fúria</h2>
          <p class="font-[Nunito_Sans] text-sm text-[#B5B6C9]">Ação • 2015</p>
        </figcaption>
      </figure>

    </section>


    <!-- ### NOT FOUND FILM ### -->
    <section class="w-full mt-6 flex flex-col items-center gap-[20px] hidden">
      <img src="./assets/Icon/FilmSlate-Regular.svg" alt="" class="w-[44px] h-[44px]">

      <div class="text-center">
        <p class="font-[Nunito_Sans] text-base text-[#B5B6C9]">
          Nenhum filme encontrado com “Filme ABC”
        </p>
        <p class="font-[Nunito_Sans] text-base text-[#B5B6C9]">
          Que tal tentar outra busca?
        </p>
      </div>

      <button class="flex text-base text-[#7A7B9F] items-center gap-[8px] font-[Nunito_Sans] cursor-pointer hover:brightness-[.8]">
        <img src="./assets/Icon/X-Regular.svg" alt="" class="w-[20px]">
        Limpar filtro
      </button>
    </section>

  </main>

</body>

</html>