<h1>Meus livros</h1>

<div class="grid grid-cols-4 gap-4">
  <div class="col-span-3 gap-4 grid">

  </div>

  <div>
    <div class="border border-stone-700 rounded">
      <h1 class="border-b border-stone-700 text-stone-400 font-bold px-4 py-2">
        Cadastre um novo livro
      </h1>

      <form class="p-4 space-y-4" method="post" action="/livro-criar">
        <?php if ($validacoes = flash()->get('validacoes')): ?>

          <div class="border-red-800 bg-red-900 text-red-400 px-4 py-1 rounded-md border-2 text-sm font-bold">
            <ul>
              <li>Deu ruim</li>
              <?php foreach ($validacoes as $validacao): ?>
                <li><?= $validacao ?> </li>
              <?php endforeach; ?>
            </ul>
          </div>

        <?php endif; ?>

        <div class="flex flex-col">
          <label class="text-stone-400 mb-1">Titulo</label>
          <input
            type="text"
            class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1"
            name="titulo"
            require />
        </div>

        <div class="flex flex-col">
          <label class="text-stone-400 mb-1">Autor</label>
          <input
            type="text"
            class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1"
            name="autor"
            require />
        </div>

        <div class="flex flex-col">
          <label class="text-stone-400 mb-1">Descrição</label>
          <textarea
            type="text"
            class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1"
            name="descricao"
            require></textarea>
        </div>

        <div class="flex flex-col">
          <label class="text-stone-400 mb-1">Ano de Lançamento</label>
          <select
            name="ano_de_lancamento"
            class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1">
            <?php foreach (range(1800, date('Y')) as $ano): ?>
              <option value="<?=$ano?>"><?=$ano?></option>
            <?php endforeach; ?>
          </select>
        </div>

        <button
          type="submit"
          class="border-stone-800 bg-stone-900 text-stone-400 px-4 py-1 rounded-md border-2 
          hover:bg-stone-800 cursor-pointer
        ">
          Salvar
        </button>
      </form>

    </div>
  </div>
</div>