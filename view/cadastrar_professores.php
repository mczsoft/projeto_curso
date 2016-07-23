<?php
    include_once '../style/template.php';
    include_once '../control/ProfessorControl.php';
    
            $profcontrol = new ProfessorControl();
            if(isset($_POST['Salvar'])){    
                $profcontrol->inserir();
            }
?>    

<div class="col-sm-4 col-sm-offset-4 jumbotron">
    <h2><center>Cadastrar Professores</center></h2>
        <br>
        <form method="post">
            <label> Número do contribuinte </label>
            <input class="form-control" name="numero_contribuinte" type="number" required="">
               <label> Nome </label>
            <input class="form-control" name="nome" required="">
                <div class="row">
                    <div class="col-sm-6">
                        <label> Data de nascimento </label>
                        <input class="form-control" name="nascimento" type="date" required="">
                    </div>
                     <div class="col-sm-6">
                          <label> Carga horaria </label>
                          <input class="form-control" name="carga_horaria" type="number" required="">   
                    </div>
                </div>
            <br>
            <input name="Salvar" type="submit" class="btn btn-primary btn-sm" >

</div>
           
        </form>
        
</div>


    
    <?php include_once '../style/footer.php';?>