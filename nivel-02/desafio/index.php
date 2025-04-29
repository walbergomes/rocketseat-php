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

  <div class="max-w-7xl m-auto pb-[60px]">
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
  </div>
</body>

</html>