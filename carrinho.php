<?php
session_start();

function AdicionaCarrinho() {

 if ( !isset( $_SESSION['carrinho'] ) ) {
 	$_SESSION['carrinho'] = array();
 }

  ///////////////////////////////////////
 // ADICIONA CARRINHO...
//////////////////////////////////////

 if ( isset( $_GET['acao'] ) ) {

 	if ( $_GET['acao'] === 'add' ) {

 		$id = intval( $_GET['id'] );
 		if ( !isset( $_SESSION['carrinho'] [ $id ] ) ) {
           $_SESSION['carrinho'] [ $id ] = 1;
 		}

 		else {
 		   $_SESSION['carrinho'] [ $id ] += 1;
 		}

 	}

} // end adiciona carrinho...

function RemoveCarrinho() {

  ///////////////////////////////////////
 // REMOVER CARRINHO...
//////////////////////////////////////

 	if ( $_GET['acao'] === 'del' ) {

 		$id = intval( $_GET['id'] );
 		if ( isset( $_SESSION['carrinho'] [ $id ] ) ) {
           unset( $_SESSION['carrinho'] [ $id ] );
 		}
 	}

} // end remove carrinho...

function AlteraQuantidade() {

  ///////////////////////////////////////
 // ALTERAR QUANTIDADE...
//////////////////////////////////////

    if ( $_GET['acao'] === 'up' ) {

    	if ( is_array( $_POST['produto'] ) ) {
    		foreach ( $_POST['produto'] as $id => $quantidade ) {

    			$id = intval( $id );
    			$quantidade = intval( $quantidade );

    			if ( !empty( $quantidade ) || $quantidade <> 0 ) {
                   $_SESSION['carrinho'] [ $id ] = $quantidade;
    			}

    			else {
    				unset( $_SESSION['carrinho'] [ $id ] );
    			}
    		}
    	}
    }
 }

} // end altera quantidade...


AdicionaCarrinho();
RemoveCarrinho();
AlteraQuantidade();

?>
<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/style.css" type="text/css"></style>
	<title>Carrinho</title>
</head>
<body>
<header>
  <h1>Carrinho de Compras<h1>
</header>

	<table>
		<tr class="table-topo">
			<td>Produto</td>
			<td>Quantidade</td>
			<td>Preço</td>
			<td>Sub Total</td>
			<td>Remover</td>
		</tr>

	   <form action="?acao=up" method="post">
        <?php
         
        include 'conexao.php';
        Conexao();

          if ( count( $_SESSION['carrinho'] ) === 0 ) {
          	echo '<tr><td> Não há podutos no carrinho </td></tr>';
          }

          else {
          	foreach ( $_SESSION['carrinho'] as $id => $quantidade ) {

          		$selecao = "SELECT * FROM produtos WHERE id = '$id'";
          		$query = mysql_query( $selecao ) or die( mysql_error() );
          		$linha = mysql_fetch_array( $query );

          		$nome = $linha['nome'];
          		$preco = number_format( $linha['preco'], 2, ', ', '.');
          		$subTotal = number_format( $linha['preco'] * $quantidade, 2, ', ', '.');
          	  $total += $subTotal;

          	    echo '<tr>
			                  <td>'.utf8_encode($nome).'</td>
			                  <td><input type="text" name="produto['.$id.']" value="'.$quantidade.'"/></td>
			                  <td> R$: '.$preco.'</td>
			                  <td> R$: '.$subTotal.'</td>
			                  <td><a class="deletar" href="?acao=del&id='.$id.'">Remover</a></td>
		                  </tr>';
          	}
          }

          echo '<tr class="total">
                  <td></td>
                  <td></td>
                  <td></td>
                  <td class="text-total">Total</td>
                  <td>R$: '.number_format($total, 2, ', ', '.').'</td>
                </tr>'



  ?>



   <tr>
      <td> <button type="submit">Atualizar Carrinho</button> </td>
	    <td> <a href="index.php">Continuar comprando</a> </td>
   </tr>

	</form>
</table>
	
</body>
</html>