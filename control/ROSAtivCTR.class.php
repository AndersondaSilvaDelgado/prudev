<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once('./model/dao/ROSAtivDAO.class.php');
/**
 * Description of ROSAtivCTR
 *
 * @author anderson
 */
class ROSAtivCTR {
    //put your code here
    
    public function dados() {
        
        $rOSAtivDAO = new ROSAtivDAO();
       
        $dados = array("dados"=>$rOSAtivDAO->dados());
        $json_str = json_encode($dados);
        
        return $json_str;
        
    }
    
}
