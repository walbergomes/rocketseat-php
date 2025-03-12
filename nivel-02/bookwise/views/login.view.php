<div class="mt-6 grid grid-cols-2 gap-2">
  <div class="border border-stone-700 rounded">
    <h1 class="border-b border-stone-700 text-stone-400 font-bold px-4 py-2">Login</h1>

    <form class="p-4 space-y-4" method="post">
      <div class="flex flex-col">
        <label class="text-stone-400 mb-1">Email</label>
        <input
          type="email"
          class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1"
          name="email"
          require>
      </div>

      <div class="flex flex-col">
        <label class="text-stone-400 mb-1">Senha</label>
        <input
          type="password"
          class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1"
          name="senha"
          require>
      </div>

      <button
        type="submit"
        class="border-stone-800 bg-stone-900 text-stone-400 px-4 py-1 rounded-md border-2 
          hover:bg-stone-800 cursor-pointer
        ">
        Logar
      </button>
    </form>

  </div>


  <div class="border border-stone-700 rounded">
    <h1 class="border-b border-stone-700 text-stone-400 font-bold px-4 py-2">Registro</h1>

    <form class="p-4 space-y-4" method="POST" action="/registrar">
      <?php if (isset($mensagem) && strlen($mensagem)): ?>

        <div class="border-green-800 bg-green-900 text-green-400 px-4 py-1 rounded-md border-2 text-sm font-bold">
          <?= $mensagem ?>
        </div>

      <?php endif; ?>

      <?php if (isset($_SESSION['validacoes']) && sizeof($_SESSION['validacoes'])): ?>

        <div class="border-red-800 bg-red-900 text-red-400 px-4 py-1 rounded-md border-2 text-sm font-bold">
          <ul>
            <li>Deu ruim</li>
            <?php foreach ($_SESSION['validacoes'] as $validacao): ?>
              <li><?= $validacao ?> </li>
            <?php endforeach; ?>
          </ul>
        </div>

      <?php endif; ?>

      <div class="flex flex-col">
        <label class="text-stone-400 mb-1">Nome</label>
        <input
          type="text"
          class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1"
          name="nome">
      </div>

      <div class="flex flex-col">
        <label class="text-stone-400 mb-1">Email</label>
        <input
          type="email"
          class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1"
          name="email">
      </div>

      <div class="flex flex-col">
        <label class="text-stone-400 mb-1">Confirme seu email</label>
        <input
          type="email"
          class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1"
          name="email_confirmacao">
      </div>

      <div class="flex flex-col">
        <label class="text-stone-400 mb-1">Senha</label>
        <input
          type="password"
          class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1"
          name="senha">
      </div>

      <button
        type="submit"
        class="border-stone-800 bg-stone-900 text-stone-400 px-4 py-1 rounded-md border-2 
          hover:bg-stone-800 cursor-pointer
        ">
        Cancelar
      </button>
      <button
        type="submit"
        class="border-stone-800 bg-stone-900 text-stone-400 px-4 py-1 rounded-md border-2 
          hover:bg-stone-800 cursor-pointer
        ">
        Registar
      </button>
    </form>

  </div>
</div>