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

      <section class="w-1/3 bg-gray-300 h-[490px] rounded-[18px]">
        <label class="block w-full h-full flex flex-col items-center justify-center cursor-pointer">
          <img src="./assets/Icon/UploadSimple-Regular.svg" alt="">
          <span class="font-nunito text-base text-gray-500 mt-3">Fazer upload</span>
          <input type="file" class="opacity-[0]">
        </label>
      </section>

      <section class="w-2/3 flex flex-col justify-between">
        <h2 class="text-gray-700 font-rajdhani text-xl font-bold">Novo filme</h2>
        <form class="mt-6 flex flex-col gap-4">
          <div class="input-wrapper flex gap-2 h-[48px] border border-[#1A1B2D] rounded-md focus-within:outline outline-[#892CCD]">
            <img src="assets/Icon/FilmSlate-Regular.svg" alt="" class="w-[16px] ml-3">
            <input type="text" placeholder="Título" class="placeholder:text-[#7A7B9F] outline-none text-white w-full">
          </div>

          <div class="flex gap-4">
            <div class="input-wrapper flex gap-2 h-[48px] w-full border border-[#1A1B2D] rounded-md focus-within:outline outline-[#892CCD]">
              <img src="assets/Icon/CalendarBlank-Regular.svg" alt="" class="w-[16px] ml-3">
              <input type="text" placeholder="Ano" class="placeholder:text-[#7A7B9F] outline-none text-white w-full">
            </div>
            <div class="input-wrapper flex gap-2 h-[48px] w-full border border-[#1A1B2D] rounded-md focus-within:outline outline-[#892CCD]">
              <img src="assets/Icon/Tag-Regular.svg" alt="" class="w-[16px] ml-3">
              <input type="text" placeholder="Categoria" class="placeholder:text-[#7A7B9F] outline-none text-white w-full">
            </div>
          </div>

          <textarea placeholder="Descrição" class="w-full h-[200px] pl-4 pt-3  placeholder:text-[#7A7B9F] border border-[#1A1B2D] rounded-md focus-within:outline outline-[#892CCD] text-white resize-none"></textarea>
        </form>

        <div id="btns" class="flex gap-8 justify-end">
          <button class="font-nunito text-gray-500 text-base hover:brightness-[.8] cursor-pointer">Cancelar</button>
          <button class="font-nunito text-base text-white px-5 py-3 bg-purple-base rounded-md hover:brightness-[.8] cursor-pointer">Salvar</button>
        </div>


      </section>

    </main>

  </div>
</body>

</html>