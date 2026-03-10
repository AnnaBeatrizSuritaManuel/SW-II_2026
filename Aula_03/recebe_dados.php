<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recebe dados</title>
</head>
<body>
    
     <?php
     $nome = htmlspecialchars($_POST['nome']);
     $email = $_POST['email'];
     $idade = $_POST['idade'];

     $ano_atual = date('Y');
     $ano = $ano_atual - $idade;
     
     ?>

    <p>o nome é: <?php echo $nome; ?> </p>
    <p>o email é: <?php echo $email; ?> </p>
    <p>o idade é: <?php echo $idade; ?> </p>

    <p>entao você nasceu no ano de  <?php echo $ano; ?> </p>

      <?php 
    if ($idade >= 18 ) {
       echo "<p style=' color:gree'>você é de idade</p>";
    } else {
        echo "<p style=' color: red'>voce é de menor</p>";
    }
    ?>

</body>
</html>