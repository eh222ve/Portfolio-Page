<?php

namespace controller;
require_once("./src/view/Navigation.php");
require_once("./src/controller/Portfolio.php");

class Navigation {
    private $view;
    private $pageTitle;

    public function __construct(){
        $this->view = new \view\Navigation();
    }
    public function Navigate(&$title)
    {
        $controller;
        switch ($this->view->getAction()) {
            case \view\Navigation::$actionHome:
                $controller = new Portfolio();
                $title = "Välkommen";
                return $controller->Home();
                break;
            case \view\Navigation::$actionPortfolio:
                $controller = new Portfolio();
                $title = "Portfolio";
                return $controller->PortfolioPage();
                break;
            case \view\Navigation::$actionContact:
                $controller = new Portfolio();
                $title = "Contact";
                return $controller->ContactPage();
                break;
            default:
                $controller = new Portfolio();
                $title = "Välkommen";
                return $controller->Home();
                break;
        }
    }

}