<?php
/**
 * Created by PhpStorm.
 * User: Erik
 * Date: 1/10/2015
 * Time: 6:43 PM
 */

namespace view;


class Project {

    public static function render(\model\Project $project){
        $html = "<dt>";
        $html .= ($project->github) ? "<a href='{$project->github}' target='_blank'><img class='github' src='img/github.png'/></a>": "";
        $html .= "<a href='{$project->link}' target='_blank'>{$project->title}</a></dt>";
        $html .= "<dd>{$project->description}</dd>";

        return $html;

    }
}