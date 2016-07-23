<?php
include_once '../model/Professor.php';
class ProfessorControl {
    public function inserir() {
        $numero_contribuinte = $_POST['numero_contribuinte'];
        $nome = $_POST['nome'];
        $nascimento = $_POST['nascimento'];
        $carga_horaria = $_POST['carga_horaria'];
        
        $professor = new Professor();
        
        $professor->setNumero_contribuinte($numero_contribuinte);
        $professor->setNome($nome);
        $professor->setNascimento($nascimento);
        $professor->setCarga_horaria($carga_horaria);
        $professor->salvar();
    }
    
    
    public function listarTodos () {
        $professor = new Professor();
        return $professor->listarProfessores();
    }
    
    public function buscar ($id) {
        
    }
    
    public function editar ($id) {
        
    }
    public function deletar ($id) {
        
    }  
}
    
