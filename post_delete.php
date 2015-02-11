<?php
require_once 'includes/bootstrap.php';
$post_id = $_GET['id'];

if(empty($post_id)){
	die("Wrong post id supplied");
}

$postTable = new Model\Db\Table\Post();
$post = $postTable->getById($post_id);

if(empty($post)){
	die("Wrong post id supplied");
}

$cat->delete();

header("Location: ".BASE_URL.'index.php');