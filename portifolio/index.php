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
  ?>

  <h1><?php echo $titulo?></h1>

  <!-- Pode ser escrito assim também - é a mesma coisa que usar echo, só é mais curto-->
  <p><?=$subtitulo?> </p>
  <p><?=$ano?> </p>
</body>
</html>