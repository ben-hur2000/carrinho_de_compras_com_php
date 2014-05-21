<?php

function Conexao() {

      $link = mysql_connect('localhost','root','');
      $baseDeDados = mysql_select_db('php_pra_valer');

      if ( !$baseDeDados ) { 
      	 echo mysql_error();
      }
	    
}


?>