<!doctype html>
<html lang="pt-br">
<head>
	<link rel="stylesheet" href="css/style.css" type="text/css"></style>
		<meta charset="UTF-8">
	<title>Carrinho inicio</title>
</head>
<body>
	
	<?php
	include 'conexao.php';

	Conexao();
    function ListagemProdutos() {

	   $selecao = "SELECT * FROM produtos";
	   $query = mysql_query( $selecao ) or die( mysql_error() );

	   while( $linha = mysql_fetch_array( $query ) ) {

	   	echo '<b>' . utf8_encode($linha['nome']) . '</b> <br>';
	   	echo 'Preço: ' . number_format( $linha['preco'], 2, ', ', '.') . '<br>';
	   	echo '<a href="carrinho.php?acao=add&id='.$linha['id'].'">Comprar</a> <hr>';

	   } // end while...
	}

	ListagemProdutos();

	?>

</body>
</html>