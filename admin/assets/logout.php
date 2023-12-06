<!DOCTYPE HTML>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH@lsSSs5nCTpu]/zy4C+0GpanoFVy38MVBE+IbbVYUew+OrCXaRkfj"
  crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-0gVRvuATP1z7JjHLkuOU7Xw784+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kROJKI"
  crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLh1TQ8iRABdZL16030VMWSktQ0p6b7In1Z13/Jr59b6EGGOI1aFkw7 cmDA6j6gD" crossorigin="anonymous">
  <title>Aula PHP - Revisão</title>
  </head>
<body>
 <main> 
<div class="container py-5 h-50">
<div class="row d-flex align-items-center justify-content-center h-50 ">
</div><!--Fim da row-->
</div><!--Fim do container-->
<?PHP
session_start();
unset($_SESSION['login_session']);
session_destroy();
header("Location:../view/login.php");
?>
</main>
</body>
</html>