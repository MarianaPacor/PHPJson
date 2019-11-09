<?php 
	/**
	 * 2. Criar um arquivo novo chamado arquivos.php. 
	 * 	a) Criar uma função que verifique se existe um arquivo chamado texto.txt no mesmo diretório de arquivos.php. Se o arquivo existir, deve ser aberto com direitos de leitura e escrita, para que seja possível adicionar informações. Se ele não existir, deve ser criado com direitos de leitura e escrita.
	 * 	b) A frase “Olá mundo! testando.” deve ser escrita 100 vezes no arquivo, 1 vez por linha. Depois disso, o arquivo deve ser fechado.
	 * 	c) Mostrar o conteúdo do arquivo texto.txt, lendo todo o arquivo de uma vez.
	 * 	d) Mostrar o conteúdo do arquivo texto.txt, lendo e imprimindo linha por linha.
	 * 	e) Excluir o arquivo texto.txt
	 * 	f) Criar um novo arquivo chamado texto2.txt contendo o texto: “Olá novamente, mundo!”.
	 * 	g) Escrever no arquivo texto2.txt “Este texto sobrescreve o anterior?”. E verificar se ele realmente sobrescreveu o texto que estava no arquivo.
	 * 	h) Escrever no arquivo texto2.txt: “NÃO!” depois do texto que já existe.
	 */

	// Definindo constante com nome do arquivo
	define ('ARQUIVO','texto.txt');

	// Definindo a função abra o arquivo com as condições.
	function arquivo(){
		return fopen(ARQUIVO,'w+');
	}

	// Abrindo o arquivo
	$f = arquivo();

	// Escrevendo 100x "Olá mundo! testando."
	for ($i=1; $i <= 100; $i++) { 
		fwrite($f,"Olá mundo! testando $i.\r\n");
	}

	// Fechando arquivo
	fclose($f);

	// Lendo o arquivo todo de uma só vez:
	$conteudo = file_get_contents(ARQUIVO);
	echo "<pre>$conteudo</pre>";

	// Lendo o arquivo linha por linha
	$f = fopen(ARQUIVO,'r');
	echo '<pre>';
	while($linha = fgets($f)){
		echo($linha);
	}
	echo '</pre>';

	// Excluindo o arquivo 
	unlink(ARQUIVO);
	
	// Criando o arquivo texto2.txt e adicionando conteúdo nele
	$f2 = fopen('texto2.txt','w+');
	fwrite($f2,"Olá novamente, mundo!");
	fclose($f2);

	// Escrevendo no arquivo, sobreescrevendo o que foi escrito.
	$f2 = fopen('texto2.txt','w+');
	fwrite($f2,"Este texto sobrescreve o anterior?");
	fclose($f2);

	// Escrevendo no arquivo sem sobrescrever
	$f2 = fopen('texto2.txt','a+');
	fwrite($f2,"NÃO!");
	fclose($f2);

?>