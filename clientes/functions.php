<?php
require_once('../config.php');
require_once(DBAPI);
$clientes = null;
$cliente = null;


function index() {
	global $clientes;
	$clientes = find_all('clientes');
}

function add() {
  if (!empty($_POST['cliente'])) {
    
    $cliente = $_POST['cliente'];
    
    save('clientes', $cliente);
    header('location: sucesso.php');
    
  } 
}


function edit() {
  
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_POST['cliente'])) {
      $cliente = $_POST['cliente'];
      
      update('clientes', $id, $cliente);
      header('location: index.php');
    } else {
      global $cliente;
      $cliente = find('clientes', $id);
    } 
  } else {
    header('location: index.php');
  }
}

function view($id = null) {
  global $cliente;
  $cliente = find('clientes', $id);
}

function delete($id = null) {
  global $cliente;
  $cliente = remove('clientes', $id);
  header('location: index.php');
}