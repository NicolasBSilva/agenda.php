<?php
    namespace Projeto\model;//determinando o local do arquivo pessoa

    class pessoa{
        //public - todos podem acessar
        //protected - so quem faz parte da familia pode acessar
        //private - so a classe mae pode acessar
    
        private int $codigo; //tipo de variavel comeca com 0
        private string $nome;
        private float $cpf; //variavel com virgula
        private string $telefone; //comeca com ""
        private string $endereco; 
        private boolean $status;//true or false
        
        //primeiro grande metodo de qualquer classe
        public function __construct(){
            $this->codigo   = 0;//instanciado
            $this->nome     = " ";
            $this->cpf      = 0;
            $this->telefone = " ";
            $this->endereco = " ";
            $this->status   = true;


        }//fim do metodo construct

        public function __construct(int $codigo,
                                    string $nome, 
                                    float $cpf,
                                    string $telefone,
                                    string $endereco,
                                    boolean $status)
        {
            $this->codigo   = $codigo;
            $this->nome     = $nome;
            $this->cpf      = $cpf;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
            $this->status   = $status;
        }//fim do construtor com parametro

        //metodo get e set
        public function __get(string $dado):mixed
        {

            return $this->dado;
        }//fim do get

        public function __set(string $variavel, string $novoDado):void
        {

            $this->variavel =$novoDado;
        }//fim do set

        //
        public function imprimir():string
        {

            return "<br>Codigo: ".$this->codigo.
                   "<br>nome: ".$this->nome.
                   "<br>cpf: ".$this->cpf.
                   "<br>telefone: ".$this->telefone.
                   "<br>endereco: ".$this->endereco.
                   "<br>status: ".$this->status;
        }//fim do metodo
    
    }//fim da classe pessoa





?>