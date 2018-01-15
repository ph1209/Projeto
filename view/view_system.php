<?php
  $nome = null;
  $desc = null;
  $anexo = null;
  $status = null;
  $titulo = "Nova Task";
  $botao = "Enviar";
  $btn_voltar=null;
  $action = "router.php?controller=task&modo=inserir";
  if(isset($_GET['cod'])){
    require_once('controller/task_controller.php');
    $task_controller = new ControllerTasks();
    $task_obj = $task_controller->visualizar();
    $nome = $task_obj->nome;
    $desc = $task_obj->descricao;
    $anexo = "Arquivo atual: ".$task_obj->anexo;
    $status = 'disabled';
    $titulo = "Visualizar Task";
    $botao = "Editar";
    $btn_voltar= "<a class='btn_voltar' href='system.php'>Voltar</a>";
    $action = "system.php?cod=".$task_obj->codigo."&edit=1";
    if(isset($_GET['edit'])){
      $status = null;
      $titulo = "Editar Task";
      $botao = "Salvar";
      $action = "router.php?controller=task&modo=editar&cod=".$task_obj->codigo;
    }
  }
 ?>
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
      <h4 class="title"><?php echo($titulo); ?></h4>
      <form action="<?php echo($action); ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="exampleFormControlInput1">Nome</label>
          <input name="txt_nome" value="<?php echo($nome); ?>" <?php echo($status) ?> type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nome da task">
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Descrição</label>
          <textarea name="txt_desc" <?php echo($status) ?> class="form-control txt_area" id="exampleFormControlTextarea1" rows="5"><?php echo($desc); ?></textarea>
        </div>
        <div class="form-group">
          <label for="exampleFormControlFile1">Arquivo para anexo</label>
          <input name="file" <?php echo($status) ?> type="file" class="form-control-file" id="exampleFormControlFile1"><br>
          <?php echo($anexo); ?>
        </div>
        <button type="submit" class="btn btn-primary"><?php echo($botao); ?></button>
        <?php echo ($btn_voltar); ?>
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

         <?php
           require_once('controller/task_controller.php');
           $controller = new ControllerTasks();
           $lst_tasks = $controller->listarTasks();
           $contador = 0;
           if(sizeof($lst_tasks)>=1){
             while ($contador<sizeof($lst_tasks)) {
         ?>
          <li class="list-group-item">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-8 lst_title">
                  <?php echo($lst_tasks[$contador]->nome); ?>,
                  <?php echo($lst_tasks[$contador]->anexo); ?>
                </div>
                <div class="col-md-4 lst_opt">
                  <a href="system.php?cod=<?php echo($lst_tasks[$contador]->codigo); ?>">
                    Visualizar
                  </a> |
                  <a href="router.php?controller=task&modo=deletar&cod=<?php echo($lst_tasks[$contador]->codigo); ?>">
                    Excluir
                  </a>
                </div>
              </div>
            </div>
          </li>
        <?php
              $contador ++;
            }
          }
         ?>
      </ul>
    </div>
    <div class="col-md-1"></div>
  </div>
</div>
