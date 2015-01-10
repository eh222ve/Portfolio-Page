<?php
/**
 * Created by PhpStorm.
 * User: Erik
 * Date: 1/10/2015
 * Time: 6:30 PM
 */

namespace model;
require_once("./src/model/ProjectRepository.php");

class ProjectList {
    public $title;
    public $projects;
    public function __construct($title){
        $this->title = $title;
        $this->projects = array();
    }

    public function add($project){
        $this->projects[] = $project;
    }
}

