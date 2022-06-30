<?php

/*$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'atividade';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword);

if($conexao->connect_errno){
    echo 'erro';
}
else{
    echo 'conexao efetuada com sucesso'.'<br>';
}
if(isset($_POST['submit']))*/

$nome = $_POST['nome'];
$quantidade = $_POST['quantidade'];
$preco_compra = $_POST['preço_compra'];
$preco_venda = $_POST['preço_venda'];
$validade = $_POST['validade'];

$cone = mysqli_connect("localhost","root","","atividade") or die ("Erro ao conectar");

$result = mysqli_query($cone , "INSERT INTO USUARIO(NOME ,quantidade , precoCompra , precoVenda ,validade ) VALUES('$nome' , '$quantidade' , '$preco_compra' , '$preco_venda' , '$validade')") or die ('os dados nao foram inseridos');
//echo("INSERT INTO USUARIO(NOME ,quantidade , precoCompra , precoVenda ,validade ) VALUES('$nome' , '$quantidade' , '$preco_compra' , '$preco_venda' , '$validade')");
/*if($nome = '' && $quantidade = '' && $preco_compra = '' && $preco_venda = '' && $validade = '' ){

    echo 'insira dados validos';
}
else if ($result){
    echo 'o produto foi cadastrado com sucesso';
}
else{
    echo 'o produto nao foi cadastrado';
}*/

?>