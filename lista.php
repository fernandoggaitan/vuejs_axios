<?php

$lista = array(
	array('sabor' => 'Chocolate', 'seleccionado' => false),
	array('sabor' => 'Dulce de leche', 'seleccionado' => false),
	array('sabor' => 'Frutilla', 'seleccionado' => false),
	array('sabor' => 'Limón', 'seleccionado' => false),
	array('sabor' => 'Vainilla', 'seleccionado' => false)
);

echo json_encode($lista);
