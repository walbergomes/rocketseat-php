<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio</title>

    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
  </head>
  <body class="bg-stone-900">
    <?php include('./components/header.php'); ?>

    <section class="flex flex-col items-center mt-40 mb-[56px]">
      <span class="text-red-300 text-xl mb-3">Meu trabalho</span>
      <h2 class="text-gray-200 text-2xl font-bold">
        Veja os projetos em destaque
      </h2>

      <?php include('./components/projects.php'); ?>

    </section>

    <section class="flex flex-col w-full items-center mb-[200px]">
      <span class="text-fuchsia-500 text-xl">Contato</span>
      <h3 class="text-2xl text-neutral-50 font-bold">Gostou do meu trabalho</h3>
      <p class="text-base text-neutral-400 mb-15">
        Entre em contato ou acompanhe as minhas redes sociais!
      </p>

      <?php include("./components/contact-cards.php"); ?>
    </section>
  </body>
</html>
