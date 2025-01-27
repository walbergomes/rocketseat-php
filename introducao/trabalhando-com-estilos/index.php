<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Meu Portfólio</title>

    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
  </head>
  <body class="bg-slate-900 text-gray-200">
    <?php include('./components/header.php'); ?>

    <main class="mx-auto max-w-screen-lg px-3 min-h-20 py-6">
      <?php include('./components/hero.php'); ?>

      <section id="projetos" class="space-y-3 py-6">
        <h2 class="text-2xl font-bold">Meus projetos</h2>

        <?php include('./components/projetos.php') ?>

      </section>
    </main>

    <footer class="h-20 mx-auto max-w-screen-lg min-h-20 py-6">
     <div class="border-t border-gray-600 pt-6 px-3 text-gray-400 text-sm">
        Copyright <?=date('Y') ?>. Construído com ❤️ por mim mesmo :)
     </div>
    </footer>
  </body>
</html>
