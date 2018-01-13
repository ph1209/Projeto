<div class="container-fluid">
  <div class="row linha_login">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <h1 class="title">Área de acesso</h1>
      <?php
        //TRATAMENTO DE ERRO DE LOGIN
        if(isset($_GET['erro'])){
          ?>
            <div class="alert alert-danger" role="alert">
              Usuário ou senha incorretos.
            </div>
          <?php
        }
      ?>
      <form action="router.php?controller=login" method="post">
        <div class="form-group">
          <label for="exampleInputEmail1">Endereço de e-mail</label>
          <input name="txt_email" type="email" class="form-control" id="exampleInputEmail1" placeholder="exemplo@exemplo.com">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Senha</label>
          <input name="txt_senha" type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
        </div>
        <button type="submit" class="login_btn btn btn-default" >Entrar</button>
      </form>
    </div>
    <div class="col-md-3"></div>
  </div>
</div>
