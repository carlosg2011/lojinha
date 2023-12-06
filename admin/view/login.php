<style>
body {
  background-color: rgba(255,0,0,0.5);
  text-align: center;
}
li 
{
  list-style:none ;
}
</style>
<!--Inicio do form-->
      <form class="row d-flex align-items-bottom justify-content-center" action="../controller/valida.php" method="POST">
<!--Inicio da imagem-->
  <div class="col-md-10">
    <img src="https://media.tenor.com/oslAUCxTbO4AAAAC/rock-sus.gif" alt="logo" width="300" height="300" style="vertical-align:middle" class="img-fluid" > </div> <!--Fim da imagem-->
  <div class="col-auto">
    <label for="#">Login-Email</label>
      <input type="text" class="form-control" name="login" placeholder="digite seu email"><br>
    <label for="#">Senha</label>
      <input type="password" class="form-control" name="senha" placeholder="digite sua senha"><br> 
    <button type="submit" class="btn btn-primary mb-3">Logar</button>
  </div>
  <ul>
  <li><h3>USUARIO :</h3> aluno</li>
  <li><h3>SENHA(CPF) :</h3> 123.456.789-00</li>
  <li><h1>---------------------------</h1></li>
  <li><h3>USUARIO :</h3> artur</li>
  <li><h3>SENHA(CPF) :</h3> 123.456.789-99</li>
  </ul>
  </div><!--Fim do card-body--> 
</form> <!--Final do form-->