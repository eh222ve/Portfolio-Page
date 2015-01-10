<?php
/**
 * Created by PhpStorm.
 * User: Erik
 * Date: 1/10/2015
 * Time: 5:19 PM
 */

namespace controller;

require_once("./src/model/ProjectRepository.php");
require_once("./src/view/ProjectRepository.php");
require_once("./src/model/Portfolio.php");
require_once("./src/view/Portfolio.php");

class Portfolio {
    private $model;
    private $view;

    public function __construct(){
        $this->model = new \model\Portfolio();
        $this->view = new \view\Portfolio($this->model);
    }

    public function Home(){
        $html = $this->view->getStartPage();
        return $html;
    }

    public function PortfolioPage()
    {
        $projects = new \model\ProjectRepository();
        $projectsView = new \view\ProjectRepository();

        return $projectsView->render($projects->getAll());
    }

    public function ContactPage()
    {
        $html = $this->view->getContactPage();
        return $html;
    }

}