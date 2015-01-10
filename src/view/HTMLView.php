<?php

namespace view;

require_once("./src/controller/Navigation.php");

class HTMLView {

    public function render($body, $title){
        if(is_null($body)){
            throw new \Exception("HTMLView::Body cannot be null");
        }
        $nav = new \controller\Navigation();

        $html = <<<HTML
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>{$title} | Erik Hamrin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen and (min-device-width: 960px)"/>
	<link rel="stylesheet" href="css/mobile.css" type="text/css" media="screen and (max-device-width: 959px)" />

	<link rel='shortcut icon' href="favicon.png">

	<script src='//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js'></script>

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body>
<div id='wrapper'>
	<div id='header'>
		<span class="sitetitle">Erik Hamrin</span>
		<span class="siteslogan">Webprogrammerarstudent på LNU</span>
	</div>
HTML;
        $html .= \view\Navigation::getMenu();
        $html .= <<<HTML
<content>{$body}</content>
</div>
<div id='footer'>
    <footer>
        <span class="sitefooter">Copyright (c) Erik Hamrin</span>
    </footer>
</div>
</body>
</html>
HTML;
echo $html;
    }
}