<?php
/**
 * Created by PhpStorm.
 * User: Erik
 * Date: 1/10/2015
 * Time: 6:14 PM
 */

namespace model;


class Project {
    public $title;
    public $link;
    public $description;
    public $github;

    public function __construct($title, $link, $description, $github = null){
        $this->title = $title;
        $this->link = $link;
        $this->description = $description;
        $this->github = $github;
    }
}