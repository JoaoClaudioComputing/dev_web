<?php
    include_once("pessoa.php");
    
    $oPessoa = new Pessoa();

    $oPessoa->setNome('Joao');
    $oPessoa->setSobrenome('Claudio');

    echo $oPessoa ->getNomeCompleto($oPessoa->setNome(), $oPessoa->setSobrenome())
?>