<?php include_once '../style/template.php';
      include_once '../control/EspecialidadeControl.php';
          $espcontrol = new EspecialidadeControl();
          
          if(isset($_POST['Salvar'])){
              $espcontrol->inserir();
          }
          
          
?>

<div class="col-xs-4 col-sm-offset-4 jumbotron">
    <h2><center>Cadastrar Especialidades</center></h2>
    <br>
    <form method="post">
       <label>Especialidades</label>
       <input class="form-control" name="nome" required="">
            <br>
            <input name="Salvar" type="submit" class="btn btn-primary btn-sm col-xs-offset-0">
        </form>
</div>


<?php include_once '../style/footer.php';?>