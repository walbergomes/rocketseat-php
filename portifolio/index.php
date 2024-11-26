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
  $titulo = $saudacao . "Esse é o portfólio do " .  $name;
  $subtitulo = "Seja bem vindo ao meu portfólio";
  $ano = 2024;

  $projeto = "Meu portfólio";
  $finalizado = true;
  $dataDoProjeto = "2024-11-25";
  $descricao = "Meu primeiro portfólio em PHP e HTML";

  $projetos = [
    [
      "titulo" => "Meu portfólio",
      "finalizado" => true,
      "data" => "2024-11-25",
      "descricao" => "Meu primeiro portfólio. Escrito em PHP e HTML."
    ],
    [
      "titulo" => "Lista de tarefas", 
      "finalizado" => false,
      "data" => "2024-05-25",
      "descricao" => "Lista de tarefas. Escrito em PHP e HTML."
    ],
    [
      "titulo" => "Controle de leitura de livros", 
      "finalizado" => true,
      "data" => "2024-05-25",
      "descricao" => "Lista de livros. Escrito em PHP e HTML."
    ],
    [
      "titulo" => "Projeto em andamento", 
      "finalizado" => false,
      "data" => "2025-05-25",
      "descricao" => "Projeto em andamento. Escrito em PHP e HTML."
    ],
  ];


  function verificarSeEstaFinalizado( $projeto ) {
    if ( $projeto['finalizado'] ) {
      return '<span style="color: green;"> ✅ finalizado </span>';
    } 
    
    return '<span style="color: red;"> 🚫 não finalizado </span>';
    
  };


  $filtrarProjetos = function ($listaDeProjetos, $finalizado = null) {

    if(is_null($finalizado)) {
      return $listaDeProjetos;
    }

    $filtrados = [];

    foreach($listaDeProjetos as $projeto) {

      if( $projeto['finalizado'] === $finalizado ) {
        $filtrados [] = $projeto;
      }

    }

    return $filtrados;
  };


  $projetosFiltrados = $filtrarProjetos($projetos, false);




  ?>

  <h1><?php echo $titulo; ?></h1>

  <!-- Pode ser escrito assim também - é a mesma coisa que usar echo, só é mais curto -->
  <!-- Nessa versão, o ";" não é obrigatório -->
  <p><?= $subtitulo ?> </p>
  <p><?= $ano ?> </p>


  <hr>

  <ul>
    <?php foreach ($projetosFiltrados as $projeto): ?>

      <div
        <?php if (! ((2024 - $ano) > 2)): ?>
        style="background-color: burlywood;"
        <?php endif; ?>
      >

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