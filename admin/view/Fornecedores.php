<?php session_start();
        if ($_SESSION['login_session']==null || $_SESSION['login_session']==false) {
          header("Location:../view/login.php");
        }?>
<?php
header('Content_Type: text/html; charset=UTF-8');
include_once '../controller/DAOFornecedor.PHP';
include_once '../model/Fornecedoresclasses.PHP';
$fornecedorDAO = new DAOFornecedor();
if(isset($_POST["enviar"]))
{
$forncedor->setNome($_POST["nome"]);
$forncedor->setcnpj($_POST["CNPJ"]);
$forncedor->setenderco($_POST["enderco"]);
$forncedor->setinsc_estadual($_POST["insc_estadual"]);
$forncedor->setcontato($_POST["contato"]);
}
?>
<!DOCTYPE HTML>
<html lang="pt-br">   
    <head>   
    <meta charset="UTF-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" 
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" 
    crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"  crossorigin="anonymous">
    <title>Aula PHP - Revisão</title>
    </head>
<!--Inicio da navBar-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="../view/Principal1.php">Loja</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       
        <li class="nav-item">
          <a class="nav-link" href="#">|</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../view/cliente.php">Cadastro Clientes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">|</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../view/Produtos.php">Cadastro Produtos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">|</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../view/colaborador.php">Cadastro Colaboradores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">|</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../view/Fornecedores.php">Cadastro Fornecedores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">|</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../assets/logout.php">Sair</a>
        </li>
      </ul>
      <!--Apresentando valor da variavel de sessao no canto superior direito-->
      <form class="d-flex">
        <label>Usuario:  
        </label>
        <?php
       
           echo $_SESSION['login_session'];
       
       
        ?>
        </label>
      </form>
      <!--Fim da apresentacao da variavel de sessao-->
    </div>
  </div>
</nav> <!--Fim da navBar-->
    </head>
<form>
<div class="mb-3">
<label for="exampleInputemail1" class="form-label">Nome</label>
<input type="text" class="form-control" name="nome">
<div id="nome" class="form-text">Digite o nome do Cliente.</div>
</div>
<div class="mb-3">
<label for="exampleInputPassword1" class="form-label" >CNPJ</label>
<input type="text" class="form-control" id="exampleInputPassword1" name="CNPJ">
<div id="nome" class="form-text">Digite o CNPJ do Fornecedor.</div>

</div>
<div class="mb-3">
<label for="exampleInputPassword1" class="form-label">insc_estadual</label>

<input type="email" class="form-control" id="exampleInputPassword1" name="insc_estadual">
<div id="nome" class="form-text">Digite o insc_estadual</div>

</div>
<div class="mb-3">
<label for="exampleInputPassword1" class="form-label">contato</label>

<input type="text" class="form-control" id="exampleInputPassword1" name="contato">
<div id="nome" class="form-text">Digite o contato do fornedor.</div>

</div>
<div class="mb-3">
<label for="exampleInputPassword1" class="form-label">endereco</label>

<input type="text" class="form-control" id="exampleInputPassword1" name="endereco">
<div id="nome" class="form-text">Digite o endereco do fornedor.</div>

</div>

<button type="submit" class="btn btn-primary" name="enviar">Gravar</button>

</form>



