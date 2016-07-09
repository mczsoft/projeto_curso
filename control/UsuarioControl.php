<?php

include_once '../model/Usuario.php';

class UsuarioControl {
    public function inserir() {
        
    }
    
    public function listarTodos () {
        $usuario = new usuario();
        return $usuario->listarTodosUsuarios();
    }
    
    public function buscar ($id) {
        
    }
    
    public function editar ($id) {
        
    }
    public function deletar ($id) {
        
    }  
}
    