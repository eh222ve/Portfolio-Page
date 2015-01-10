<?php
require_once('src/view/HTMLView.php');
require_once('src/controller/Navigation.php');

$view = new \view\HTMLView();

$navigation = new \controller\Navigation();
$title = "";
$body = $navigation->Navigate($title);

$view->render($body, $title);