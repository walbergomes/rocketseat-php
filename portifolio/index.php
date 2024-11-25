<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meu Portfólio</title>
</head>

<body>
  <?php
  $name = "Walber";
  $saudacao = "Oi, ";
  $titulo = $saudacao . "Esse é o portifólio do " .  $name;
  $subtitulo = "Seja bem vindo ao meu portifólio";
  $ano = 2024;

  $projeto = "Meu portifólio";
  $finalizado = true;
  $dataDoProjeto = "2024-11-25";
  $descricao = "Meu primeiro portifólio em PHP e HTML";

  $projetos = [
    [
      "titulo" => "Meu portifólio",
      "finalizado" => true,
      "data" => "2024-11-25",
      "descricao" => "Meu primeiro portifólio. Escrito em PHP e HTML."
    ],
    [
      "titulo" => "Lista de tarefas",
      "finalizado" => false,
      "data" => "2024-05-25",
      "descricao" => "Lista de tarefas Escrito em PHP e HTML."
    ],
  ];


  function verificarSeEstaFinalizado( $projeto ) {
    if ( $projeto['finalizado'] ) {
      return '<span style="color: green;"> ✅ finalizado </span>';
    } 
    
    return '<span style="color: red;"> 🚫 não finalizado </span>';
    
  }


  ?>

  <h1><?php echo $titulo; ?></h1>

  <!-- Pode ser escrito assim também - é a mesma coisa que usar echo, só é mais curto -->
  <!-- Nessa versão, o ";" não é obrigatório -->
  <p><?= $subtitulo ?> </p>
  <p><?= $ano ?> </p>


  <hr>

  <ul>
    <?php foreach ($projetos as $projeto): ?>
      <div
        <?php if (! ((2024 - $ano) > 2)): ?>
        style="background-color: burlywood;"
        <?php endif; ?>>
        <h2><?=$projeto['titulo']?></h2>
        <p><?= $projeto['descricao'] ?></p>

        <div>
          <div><?=$projeto['data'] ?></div>
          <div>
            Projeto:

            <?= verificarSeEstaFinalizado($projeto) ?>

            <!-- <?php if ($projeto['finalizado']): ?>
              <span style="color: green;"> ✅ finalizado </span>
            <?php else: ?>
              <span style="color: red;"> 🚫 não finalizado </span>
            <?php endif ?> -->

          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </ul>
</body>

</html>