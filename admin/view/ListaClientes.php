﻿<?php session_start();
        if ($_SESSION['login_session']==null || $_SESSION['login_session']==false) {
          header("Location:../view/login.php");
        }?>
<?php
include_once '../controller/DAOCliente.php';
include_once '../controller/FabricaConexao.php';
$sql ='SELECT id_cliente,nome,cpf,telefone,email,endereco FROM clientes';
$stmt = FabricaConexao::Conexao()->prepare($sql);
$stmt->execute();
$linhas = $stmt->fetchAll(PDO::FETCH_CLASS);

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
    <title>Loja Informatica - Home</title>
<style>
body {
  background-color: rgba(255,0,0,0.5);
  text-align: center;
}

</style>
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
          <a class="nav-link" href="cliente.php">Cadastro Clientes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">|</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Produtos.php">Cadastro Produtos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">|</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Colaborador.php">Cadastro Colaboradores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">|</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Fornecedores.php">Cadastro Fornecedores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">|</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ViewPedido.php">Pedido</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">|</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="PagamentoClasse.php">Pagamento</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">|</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ListaClientes.php">Lista/Crud</a>
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
 <!------------------------------------------------------------------------------>   
<body>
 <main>  
 <div class="container py-5 h-50"><!--Comeco do conteiner -->
 <div class="row d-flex align-items-center justify-content-center h-50 "> <!--Comeco da linha -->
 <div class="col"></div><!--coluna vazia -->
<div class="col-sm-8"><!--Comeco da coluna principal -->
<div class="card"><!--Comeco do card -->
<div class="card-body"><!--Comeco do body card -->
<h5 class="card-title">Lista de Clientes</h5>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Cpf</th>
      <th scope="col">Telefone</th>
      <th scope="col">E-mail</th>
      <th scope="col">Endereco</th>
      <th scope="col">Alterar</th>
      <th scope="col">Deletar</th>
    </tr>
  </thead> 
  <tbody>
   <?PHP foreach ($linhas as $linha) 
    {
     echo "<tr>";
     echo "<td>". $linha->id_cliente."</td>";
     echo "<td>". $linha->nome."</td>";
     echo "<td>". $linha->cpf."</td>";
     echo "<td>". $linha->telefone."</td>";
     echo "<td>". $linha->email."</td>";
     echo "<td>". $linha->endereco."</td>";

     echo "<td>
     <a class='btn btn-sm btn-primary' href='AlteraClientes.php?acao=alterar&id=$linha->id_cliente'>Alterar</a> 
          </td>";
     echo "<td>
     <a class='btn btn-sm btn-danger' href='Deletaclientes.php?acao=deletar&id=$linha->id_cliente'>Deletar</a>
          </td>";
     echo "</tr>";
    }
    ?>
  </tbody>
  
</table>

</div> <!--Fim body do card-->
</div> <!--Fim do card-->
</div> <!--Fim da col principal-->
<div class="col"></div>
</div> <!--Fim da row-->
</div><!--Fim do container-->
 </main>
</body>
</html>