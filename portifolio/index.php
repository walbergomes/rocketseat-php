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
      "Meu portifólio", 
      "Lista de Tarefas",
      "Controle de leitura de livros",
      "mais um projeto",
    ];
  ?>

  <h1><?php echo $titulo; ?></h1>

  <!-- Pode ser escrito assim também - é a mesma coisa que usar echo, só é mais curto -->
  <!-- Nessa versão, o ";" não é obrigatório -->
  <p><?=$subtitulo?> </p>
  <p><?=$ano?> </p>


  <hr>

  <ul>
    <?php foreach($projetos as $projeto) {
      echo "<li>{$projeto}º</li>";
    }


    ?>
  </ul>




















  <!-- <div 
    <?php if( ! ((2024 - $ano) > 2) ): ?>
      style="background-color: burlywood;"
    <?php endif; ?>

  >
    <h2><?=$projeto?></h2>
    <p><?=$descricao?></p>

    <div>
      <div><?=$dataDoProjeto?></div>
      <div> 
        Projeto: 

        <?php  if($finalizado): ?> 
          <span style="color: green;"> ✅ finalizado </span>
        <?php else: ?> 
          <span style="color: red;"> 🚫 não finalizado </span>
        <?php endif ?>

      </div>
    </div>
  </div> -->
</body>
</html> 