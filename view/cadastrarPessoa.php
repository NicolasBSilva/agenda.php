<?php
    namespace Projeto\view;
    require_once("../model/Pessoa.php");//v=chamando o arquivo
    use Projeto\model\Pessoa;//chamando a classe que esta no arquivop pessoa.php
    //instanciar uma variavel dac classe pessoa
    $pessoa = new Pessoa();//conexao
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastrar pessoa</title>
</head>
<body>
    <h1>cadastrar cliente</h1>
    <form method="POST">
        <label> Codigo: </label>
        <br> 
        <input type="number" name="codigo" id="codigo"/>
        <br> 
        <label> nome: </label>
        <br> 
        <input type="text" name="nome" id="nome"/>
        <br> 
        <label> cpf: </label>
        <br> 
        <input type="number" name="cpf" id="cpf"/>
        <br> 
        <label> telefone: </label>
        <br> 
        <input type="text" name="telefone" id="telefone"/>
        <br> 
        <label> endereco: </label>
        <br> 
        <input type="number" name="endereco" id="endereco"/>
        <br> 
        <label> status: </label>
        <br> 
        <input type="text" name="status" id="status"/>
        <br> 

        <button type="submit">cadastrar</button>
        <?php
            try{
                $codigo   = $_POST['codigo'];
                $nome     = $_POST['nome'];
                $cpf      = $_POST['cpf'];
                $telefone = $_POST['telefone'];
                $endereco = $_POST['endereco'];
                $status   = $_POST['status'];
                //instanciar a variavel pessoa com dados
                $pessoa = new pessoa($codigo,$nome, $cpf, $telefone, $endereco, $status);
            }catch(Excpet $erro){
                echo "algo deu errado!!!<Br><br> $erro";

            } 

        ?>

        </button>
        <?php
           echo $pessoa->imprimir();


        ?>
    </form>
    <button><a href="index.php">voltar</a></button>
</body>
</html>