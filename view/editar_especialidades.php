<?php include_once '../style/template.php';
      include_once '../control/EspecialidadeControl.php';
          $espcontrol = new EspecialidadeControl();
          
          $id = $_GET['id'];
          $especialidade = $espcontrol->buscar($id);
      
          if(isset($_POST['Salvar'])){
              $espcontrol->editar();
              header('Location:listar_especialidades.php');
          }
?>

<div class="col-xs-4 col-sm-offset-4 jumbotron">
    <h2><center>Editar Especialidades</center></h2>
    <br>
    <form method="post">
       <label>Especialidades</label>
       <input type="hidden"name="id" value="<?php echo $especialidade->id?>">
       <input class="form-control" name="nome" required="" value="<?php echo $especialidade->nome; ?>">
            <br>
            <input name="Salvar" type="submit" class="btn btn-primary btn-sm col-xs-offset-0">
        </form>
</div>


<?php include_once '../style/footer.php';?>