<?php
    //criando uma seção caso não tenha
    if(!isset($_SESSION)){
        session_start(); 
        
    }    
    //se não tiver um nome logado morre a 
    
    if (!isset($_SESSION['nome'])){

      die ("Favor fazer o Login");
    }
//habilitando conteúdo da página Principal
if ($_SESSION['nivel'] == 1 ){
    $nivel1 = "";
    $nivel2 = "";
    $nivel3 = "";
    $nivel4 = "";
    $nivel5 = "";

}

if ($_SESSION['nivel'] == 2 ){
        $nivel1 = "disabled";
        $nivel2 = "";
        $nivel3 = "disabled";
        $nivel4 = "disabled";
        $nivel5 = "disabled";
      
    }
if ($_SESSION['nivel'] == 3 ){
    $nivel1 = "";
    $nivel2 = "disabled";
    $nivel3 = "";
    $nivel4 = "disabled";
    $nivel5 = "disabled";
   
}

if ($_SESSION['nivel'] == 4 ){
    $nivel1 = "disabled";
    $nivel2 = "disabled";
    $nivel3 = "disabled";
    $nivel4 = "";
    $nivel5 = "disabled";
  
}
    
?>