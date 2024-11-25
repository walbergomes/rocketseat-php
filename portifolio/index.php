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
    $descricao = "Meu primeiro portifólio em PHP e HTML"
  ?>

  <h1><?php echo $titulo; ?></h1>

  <!-- Pode ser escrito assim também - é a mesma coisa que usar echo, só é mais curto -->
  <!-- Nessa versão, o ";" não é obrigatório -->
  <p><?=$subtitulo?> </p>
  <p><?=$ano?> </p>


  <hr>

  <div>
    <h2><?=$projeto?></h2>
    <p><?=$descricao?></p>

    <div>
      <div><?=$dataDoProjeto?></div>
      <div>

        <?php 
          if( $finalizado ) {
            echo "✅";
          } else {
            echo "🚫";
          }
        ?>
        
      </div>
    </div>
  </div>
</body>
</html> 