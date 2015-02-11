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

$view = new View(BASE_VIEW_PATH);

$view->post = $post;

$view->render('post/edit');