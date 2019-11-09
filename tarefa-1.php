<?php 
	/**
	 * 1. Criar uma variável $a contendo um array ( 'x'=>1, 'y'=>2, 'z'=>'Eu <3 JSON'):
	 * 	a) Fazer echo da variável $a.
	 * 	b) Utilizando json_encode, transformar o array em uma string json e atribuí-lo a $a.
	 * 	c) Fazer echo da variável $a.
	 * 	d) Faça uma nova variável $b receber o resultado do json_decode da variável $a.
	 * 	e) Fazer echo de $b.
	 * 	f) Imprimir a frase “Eu <3 JSON | 1 | 2 |” utilizando os dados da variável $b.
	 */
	$a = [
		'x' => 1,
		'y' => 2,
		'z' => 'Eu <3 JSON'
	];

	// echo($a); // Notice: Array to string conversion
	$a = json_encode($a);
	echo($a);
	$b = json_decode($a,true);
	// echo($b); // Notice: Array to string conversion
	echo("<br>Eu $b[z] | $b[x] | $b[y] |");

?>