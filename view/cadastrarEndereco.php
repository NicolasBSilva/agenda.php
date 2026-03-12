<?php
    namespace Projeto\view;
    require_once("../model/Pessoa.php");
    require_once("../model/endereco.php");//v=chamando o arquivo
    use Projeto\model\endereco;//chamando a classe que esta no arquivop pessoa.php
    //instanciar uma variavel dac classe pessoa
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastrar endereco</title>
</head>
<body>
    <h1>cadastrar endereco</h1>
    <form method="POST">
        <label> Codigo: </label>
        <br> 
        <input type="number" name="codigo" id="codigo"/>
        <br> 
        <label> logradouro: </label>
        <br> 
        <input type="text" name="logradouro" id="logradouro"/>
        <br> 
        <label> numero: </label>
        <br> 
        <input type="number" name="numero" id="numero"/>
        <br> 
        <label> bairro: </label>
        <br> 
        <input type="text" name="bairro" id="bairro"/>
        <br> 
        <label> CEP: </label>
        <br> 
        <input type="number" name="CEP" id="CEP"/>
        <br> 
        <label> complemento: </label>
        <br> 
        <input type="text" name="complemento" id="complemento"/>
        <br>
        <label> cidade: </label>
        <br> 
        <input type="text" name="cidade" id="cidade"/>
        <br> 
        <label> estado: </label>
        <br> 
        <input type="number" name="estado" id="estado"/>
        <br> 
        <label> pais: </label>
        <br> 
        <input type="text" name="pais" id="pais"/>
        <br><br>  
        <button type="submit">cadastrar
        <?php
            try{
                $codigo   = $_POST['codigo'];
                $logradouro     = $_POST['logradouro'];
                $numero      = $_POST['numero'];
                $bairro = $_POST['bairro'];
                $CEP = $_POST['CEP'];
                $complemento   = $_POST['complemento'];
                $cidade = $_POST['cidade'];
                $estado = $_POST['estado'];
                $pais   = $_POST['pais'];
                //instanciar a variavel pessoa com dados
                $endereco = new endereco($codigo,$logradouro, $numero, $bairro, $CEP, $complemento, $cidade, $estado, $pais);
            }catch(Excpet $erro){
                echo "algo deu errado!!!<Br><br> $erro";
            } 
        ?>
          
            </button>
        <?php
           echo $endereco->imprimir();
        ?>
    </form>
    <button><a href="index.php">voltar</a></button>