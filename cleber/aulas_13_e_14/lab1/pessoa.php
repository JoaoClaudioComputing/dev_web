<?php
 class Pessoa{

    private $nome;

    private $sobreNome;

    private $dataNascimento;

    private $cpfcnpj;
    
    private $tipo;

    public function getNome(){
        return $this->nome;

    }
    public function setNome($nome){
        $this->nome = $nome;
    }
     
    public function getsobreNome(){
        return $this->sobreNome;
    }

    public function setSobreNome($sobreNome){
    
        return $this->sobreNome = $sobreNome;
    }

    public function getDataNascimento(){

        return $this->dataNascimento;
    }

    public function setDataNascimento($dataNascimento){

        return $this->dataNascimento = $dataNascimento;
    }

    public function getCpfcnpj(){

        return $this->cpfcnpj;
    }

    public function setCpfCnpj($cpfcnpj){

        return $this->cpfcnpj = $cpfcnpj;
    }

    public function getTipo(){

        return $this->tipo;
    }

    public function setTipo($tipo){

        return $this->tipo = $tipo;
    }

    public function getNomeCompleto($nome, $sobreNome){

        return  $nome . ' ' . $sobreNome;
    } 
 }
 ?>