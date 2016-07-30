<?php
include_once '../style/template.php';
include_once '../control/ProfessorControl.php';
$professorcontrol = new ProfessorControl();
?>

<div class="col-sm-10 col-sm-offset-1">
    <br>
    <h2><center>Lista de Professores</center></h2>

<table class="table table-hover">
    <tr>
        <td>ID</td>
        <td>Numero do Contribuinte</td>
        <td>Nome</td>
        <td>Nascimento</td>
        <td>Carga Horária</td>
    </tr>
<?php
foreach ($professorcontrol->listarTodos() as $professor) {
    ?>
    <tr>
        <td><?php echo $professor->id ?></td>
        <td><?php echo $professor->numero_contribuinte?></td>
        <td><?php echo $professor->nome?></td>
        <td><?php echo $professor->nascimento?></td>
        <td><?php echo $professor->carga_horaria?></td>
    </tr>
</div>
<?php } ?>
</table>

<?php include_once '../style/footer.php';?><?php

