<?php
include_once '../style/template.php';
include_once '../control/EspecialidadeControl.php';
$especialidadecontrol = new EspecialidadeControl();

    if(isset($_GET['id'])){
        $especialidadecontrol->deletar();
        ?>
<div class="alert alert-danger" role="alert"><center>Função Deletada</center></div>
        <?php
    }
?>

<div class="col-sm-10 col-sm-offset-1">
    <br>
    <h2><center>Lista de Especialidades</center></h2>
<table class="table table-hover">
    <tr>
        <td>ID</td>
        <td>NOME</td>
        <td>FUNÇÃO</td>
    </tr>
<?php
foreach ($especialidadecontrol->listarTodos() as $especialidade) {
    ?>
    <tr>
        <td><?php echo $especialidade->id ?></td>
        <td><?php echo $especialidade->nome?></td>
        <td><?php echo "<a href='editar_especialidades.php?acao=editar&id=".$especialidade->id."'>Editar</a>";?> |
        <?php echo "<a href='listar_especialidades.php?acao=deleta&id=".$especialidade->id."'>Deletar</a>";?></td>
        
    </tr>
<?php } ?>
</table>
</div>

<?php include_once '../style/footer.php';?>