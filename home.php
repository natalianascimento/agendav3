<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset ="UTF-8">
        <meta name="viewport" content="width=device-width, inicial-scale=1.0">
        <title>Agenda</title>
    </head>
    <body>
	    <div align="center">
	    	<table border="1" cellpadding="0" cellspacing="0" width="80%" height="348">
		    	<tr>
			    	<td width="33%" bgcolor="#CCCCCC" height="19"><p align="center"><b>Incluir Contato</b></td>
			    	<td width="33%" bgcolor="#CCCCCC" height="19"><p align="center"><b>Excluir Contato</b></td>
		    	</tr>

		    	<tr>
			    	<!-- <td width="33%" rowspan="3" valign="top" height="325"> -->
			    	<td width="33%" height="175"><p align="center">&nbsp;&nbsp;</p>
			    	<form method="POST" action="formulario.php">
			    		<input type="hidden" name="operacao" value="cadastrar">
				    		<p align="center">&nbsp;&nbsp;<br>Nome: <input type="text" name="nome" size="15"></p>
				    		<p align="center">Telefone: <input type="text" name="telefone" size="15"></p>
				    		<p align="center"><input type="submit" value="Cadastrar" name="enviar"></p>
			    	</form>
			    	</td>

			    	<td width="33%" height="175"><p align="center">&nbsp;&nbsp;<br>ID do contato a ser excluido: </p>
			    		<form method="POST" action="formulario.php">
			    			<input type="hidden" name="operacao" value="excluir">
				    			<p align="center"><input type="text" name ="id" size="5"></p>
			    				<p align="center"><input type="submit" value="Excluir Contato" name="enviar"></p>
			    		</form>
			    	
			    	<p align="center"><br>
			    	&nbsp;&nbsp;
			    	</td></tr>
			    
			    	<tr>
				    	<td width="33%" bgcolor="#CCCCCC" height="19"><p align="center"><b>Mostrar contatos: </b></td>
				    	<td width="33%" bgcolor="#CCCCCC" height="19"><p align="center"><b>Alterar Dados: </b></td>
			    	</tr>
			    	<tr>
			    	<td width="33%" height="124">
				    	<p align="center">&nbsp;&nbsp;<br>Clique no bot�o abaixo para exibir todos os contatos: </p>
				    		<form method="POST" action="formulario.php">
				    			<input type="hidden" name="operacao" value="consultar">
				    			<p align="center">
				    			<input type="submit" value="Mostrar Contatos" name="enviar"></p>
				    		</form>
				    </td></tr>
	    	</table>
	    </div>
	</body>
</html>
	    
	    
	    
	    
	    
	    
	    
	    
	    