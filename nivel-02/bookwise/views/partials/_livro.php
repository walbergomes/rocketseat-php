
<div class="p-2 rounded border-stone-800 border-2 bg-stone-900 mt-6">
  <div class="flex">
    <div class="w-1/3">Imagem</div>
    <div class="space-y-1">
      <a href="/livro?id=<?= $livro->id ?>" class="font-semibold hover:underline">
        <?= $livro->titulo ?>
      </a>
      <div class="text-xs italic"><?= $livro->autor ?></div>
      <div class="text-xs italic"><?= str_repeat('⭐', $livro->nota_avaliacao) ?> (<?= $livro->count_avaliacoes ?> Avaliações)</div>
    </div>
  </div>
  <div class="text-sm mt-2">
    <?= $livro->descricao ?>
  </div>
</div>