<div class="container-fluid">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8 sys_title">
      <h2 class="title">Sistema de gerenciamento de Tasks</h2>
    </div>
    <div class="col-md-2"></div>
  </div>
  <div class="row linha_system">
    <div class="col-md-1"></div>
    <div class="col-md-4">
      <h4 class="title">Nova Task</h4>
      <form action="router.php?contorller=task&modo=inserir" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="exampleFormControlInput1">Nome</label>
          <input name="txt_nome" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nome da task">
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Descrição</label>
          <textarea name="txt_desc" class="form-control txt_area" id="exampleFormControlTextarea1" rows="5"></textarea>
        </div>
        <div class="form-group">
          <label for="exampleFormControlFile1">Arquivo para anexo</label>
          <input name="file" type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </div>


    <div class="col-md-6">
      <h4 class="title">Lista de Tasks</h4>
      <ul class="list-group">
        <li class="list-group-item list-group-item-success">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-8 lst_title">
                Título, arquivo_anexo.txt
              </div>
              <div class="col-md-4 lst_opt">
                <a href="#">Visualizar</a> |
                <a href="#">Excluir</a>
              </div>
            </div>
          </div>
        </li>
        <li class="list-group-item">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-8 lst_title">
                Título, arquivo_anexo.txt
              </div>
              <div class="col-md-4 lst_opt">
                <a href="#">Visualizar</a> |
                <a href="#">Excluir</a>
              </div>
            </div>
          </div>
        </li>
        <li class="list-group-item">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-8 lst_title">
                Título, arquivo_anexo.txt
              </div>
              <div class="col-md-4 lst_opt">
                <a href="#">Visualizar</a> |
                <a href="#">Excluir</a>
              </div>
            </div>
          </div>
        </li>
        <li class="list-group-item">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-8 lst_title">
                Título, arquivo_anexo.txt
              </div>
              <div class="col-md-4 lst_opt">
                <a href="#">Visualizar</a> |
                <a href="#">Excluir</a>
              </div>
            </div>
          </div>
        </li>
        <li class="list-group-item">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-8 lst_title">
                Título, arquivo_anexo.txt
              </div>
              <div class="col-md-4 lst_opt">
                <a href="#">Visualizar</a> |
                <a href="#">Excluir</a>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
    <div class="col-md-1"></div>
  </div>
</div>
