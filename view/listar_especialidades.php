<?php
include_once '../style/template.php';
include_once '../control/EspecialidadeControl.php';
$especialidadecontrol = new EspecialidadeControl();
?>

<table class="table table-hover">
    <tr>
        <td>ID</td>
        <td>NOME</td>
    </tr>
<?php
foreach ($especialidadecontrol->listarTodos() as $especialidade) {
    ?>
    <tr>
        <td><?php echo $especialidade->id ?></td>
        <td><?php echo $especialidade->nome?></td>
    </tr>
<?php } ?>
</table>

<?php include_once '../style/footer.php';?>