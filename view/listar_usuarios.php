<?php
include_once '../control/UsuarioControl.php';
$usuariocontrol = new UsuarioControl();
?>

<table>
    <tr>
        <td>ID</td>
        <td>NOME</td>
        <td>E-MAIL</td>
        <td>SENHA</td>
    </tr>
    <?php
foreach ($usuariocontrol->listarTodos() as $usuario) {
    ?>
    <tr>
        <td><?php echo $usuario->id  ?></td>
        <td><?php echo $usuario->nome  ?></td>
        <td><?php echo $usuario->email ?></td>
        <td><?php echo $usuario->senha ?></td>
    </tr>
<?php } ?>
</table>
