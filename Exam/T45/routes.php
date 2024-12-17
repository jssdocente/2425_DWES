<?php

$router->get('/', 'controllers/index.php');
$router->get('/about', 'controllers/about.php');
$router->get('/contact', 'controllers/contact.php');

//Notes
$router->get('/notes', 'controllers/notes/index.php');
$router->get('/note', 'controllers/notes/show.php');
$router->delete('/note', 'controllers/notes/destroy.php');
$router->get('/notes/create', 'controllers/notes/create.php');
$router->post('/notes', 'controllers/notes/store.php');

//Productos
$router->get('/products', 'controllers/products/index.php'); //listar productos
$router->get('/product/create', 'controllers/products/create.php'); //visualizar formulario de creación
$router->get('/product/show', 'controllers/products/show.php'); //mostrar un producto, solo visualización
$router->get('/product/edit', 'controllers/products/edit.php'); //mostrar un producto, permitiendo su actualización

$router->post('/product', 'controllers/products/store.php'); // crear un nuevo producto
$router->patch('/product', 'controllers/products/update.php'); // actualizar un producto
$router->delete('/product', 'controllers/products/destroy.php'); //eliminar un producto

