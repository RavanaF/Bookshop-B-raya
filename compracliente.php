<?php

include_once 'clienteclass.php';

$produto    = $_POST['cxproduto'];

$cliente0 = new Cliente($produto);

echo "Produto: ".$cliente0->toString();
echo "<hr>";



?>