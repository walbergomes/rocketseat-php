<!DOCTYPE html>
<html lang="en">

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

<body class="h-screen bg-gray-100 p-4">

  <div class="w-full h-full text-white flex gap-4">

    <section class="flex-1 h-full rounded-2xl overflow-hidden relative">
      <img src="assets/Vector/Logo.svg" alt="" class="absolute w-[60px] left-6 top-7">
      <span class="absolute left-6 bottom-25 text-gray-600 font-rammeto text-base">ab filmes</span>
      <p class="absolute left-6 bottom-10 font-rammeto text-xl w-[346px]">O guia definitivo para os amantes do cinema</p>
      <img src="assets/Image/Login.png" alt="" class="h-full w-full object-cover">
    </section>

    <section class="flex-1 flex justify-center items-center">

      <!-- ----- LOGIN CARD ----- -->
      <div id="card-login" class="flex flex-col w-[328px] hidden">

        <!-- SELECT FOR CHOOSE LOGIN OR REGISTER -->
        <div
          id="select-login-or-register"
          class="w-[328px] h-[48px] bg-gray-200 flex p-1 rounded-[10px]">
          <button
            type="button"
            class="flex justify-center items-center w-full h-full rounded-md bg-gray-300 text-purple-light font-nunito cursor-pointer">
            Login
          </button>
          <button
            type="button"
            class="flex justify-center items-center w-full h-full rounded-md text-gray-500 font-nunito cursor-pointer">
            Cadastro
          </button>
        </div>

        <h1 class="font-rammeto text-2xl mt-[52px] mb-[20px]">Acesse sua conta</h1>

        <form class="flex flex-col gap-3">
          <div class="w-full h-[48px] border flex rounded-md border-[#1a1b2d] has-focus:outline">
            <img
              src="assets/Icon/Envelope-Regular.svg"
              alt=""
              class=" ml-4 w-[20px]">
            <input
              type="email"
              placeholder="E-mail"
              class="w-screen p-2 rounded-md outline-none placeholder:text-gray-500 placeholder:font-nunito">
          </div>
          <div class="w-full h-[48px] border flex rounded-md border-[#1a1b2d] has-focus:outline">
            <img
              src="assets/Icon/Password-Regular.svg"
              alt=""
              class="ml-4 w-[20px]">
            <input
              type="password"
              placeholder="Senha"
              class="w-screen p-2 rounded-md outline-none placeholder:text-gray-500 placeholder:font-nunito">
          </div>

          <button type="button" class="w-full h-[48px] bg-purple-base rounded-md font-nunito mt-5">Entrar</button>
        </form>
      </div>

      <!-- ----- REGISTER CARD ----- -->
      <div id="card-register" class="flex flex-col w-[328px]">

        <div
          id="select-login-or-register"
          class="w-[328px] h-[48px] bg-gray-200 flex p-1 rounded-[10px]">
          <span class="flex justify-center items-center w-full h-full rounded-md text-gray-500 font-nunito cursor-pointer">Login</span>
          <span class="flex justify-center items-center w-full h-full rounded-md bg-gray-300 text-purple-light  font-nunito cursor-pointer">Cadastro</span>
        </div>

        <h1 class="font-rammeto text-2xl mt-[52px] mb-[20px]">Crie sua conta</h1>

        <form class="flex flex-col gap-3">
          <div class="w-full h-[48px] border flex rounded-md border-[#1a1b2d] has-focus:outline">
            <img
              src="assets/Icon/User-Regular.svg"
              alt=""
              class=" ml-4 w-[20px]">
            <input
              type="text"
              placeholder="Nome"
              class="w-screen p-2 rounded-md outline-none placeholder:text-gray-500 placeholder:font-nunito">
          </div>
          <div class="w-full h-[48px] border flex rounded-md border-[#1a1b2d] has-focus:outline">
            <img
              src="assets/Icon/Envelope-Regular.svg"
              alt=""
              class=" ml-4 w-[20px]">
            <input
              type="email"
              placeholder="E-mail"
              class="w-screen p-2 rounded-md outline-none placeholder:text-gray-500 placeholder:font-nunito">
          </div>
          <div class="w-full h-[48px] border flex rounded-md border-[#1a1b2d] has-focus:outline">
            <img
              src="assets/Icon/Password-Regular.svg"
              alt=""
              class=" ml-4 w-[20px]">
            <input
              type="password"
              placeholder="Senha"
              class="w-screen p-2 rounded-md outline-none placeholder:text-gray-500 placeholder:font-nunito">
          </div>

          <button class="w-full h-[48px] bg-purple-base rounded-md font-nunito mt-5">Criar</button>
        </form>
      </div>
    </section>

  </div>

</body>

</html>