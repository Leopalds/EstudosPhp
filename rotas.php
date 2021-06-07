<?php



$rotas->get('', 'controle/index.php');
$rotas->get('sobre', 'controle/sobre.php');
$rotas->get('sobre/cultura', 'controle/sobre-cultura.php');
$rotas->get('contato', 'controle/contato.php');

$rotas->post('nomes', 'controle/add-nome.php');
