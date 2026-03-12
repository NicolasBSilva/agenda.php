<?php
    namespace Projeto\model;//determinando o local do arquivo pessoa

    class endereco{
        //public - todos podem acessar
        //protected - so quem faz parte da familia pode acessar
        //private - so a classe mae pode acessar
    
        private int $codigo; //tipo de variavel comeca com 0
        private string $logradouro;
        private float $numero; //variavel com virgula
        private string $bairro; //comeca com ""
        private string $CEP; 
        private bool $complemento;//true or false
        private string $cidade; //comeca com ""
        private string $estado; 
        private string $pais; //comeca com ""
        
            public function __construct(int $codigo,
                                        string $logradouro, 
                                        float $numero,
                                        string $bairro,
                                        string $CEP,
                                        bool $complemento,
                                        string $cidade,
                                        string $estado,
                                        bool $pais)
        {
        $this->codigo         = $codigo;
        $this->logradouro     = $logradouro;
        $this->numero         = $numero;
        $this->bairro         = $bairro;
        $this->CEP            = $CEP;
        $this->complemento    = $complemento;
        $this->cidade         = $cidade;
        $this->estado         = $estado;
        $this->pais           = $pais;    


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

        public function imprimir():string
        {

            return "<br>Codigo: ".$this->codigo.
                   "<br>logradouro: ".$this->logradouro.
                   "<br>numero: ".$this->numero.
                   "<br>bairro: ".$this->bairro.
                   "<br>CEP: ".$this->CEP.
                   "<br>complemento: ".$this->complemento.
                   "<br>cidade: ".$this->cidade.
                   "<br>estado: ".$this->estado.
                   "<br>pais: ".$this->pais;
        }//fim do metodo

    

    }

    ?>