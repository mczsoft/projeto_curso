<?php

include_once '../model/Especialidade.php';

class EspecialidadeControl {
    public function inserir() {
        $nome = $_POST['nome'];
        
        $especialidade = new Especialidade();
        $especialidade->setNome($nome);
        $especialidade->salvar();
    }
    
    public function listarTodos () {
        $especialidade = new Especialidade();
        return $especialidade->listarTodasEspecialidades();
    }
    
    public function buscar ($id) {
        $especialidade = new Especialidade();
        $ResultadoDaBusca = $especialidade->buscar($id);
        return $ResultadoDaBusca;
    }
    
    public function editar () {
        $especialidade = new Especialidade();
        
        $id = $_POST['id'];
        $nome = $_POST['nome'];
       
        $especialidade->setNome($nome);
        $especialidade->atualizar($id);
    }
    public function deletar () {
        $especialidade = new Especialidade();
        $id = $_GET['id'];
        $especialidade->deletar($id);
    }      
}
