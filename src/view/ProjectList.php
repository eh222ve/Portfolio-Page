<?php
/**
 * Created by PhpStorm.
 * User: Erik
 * Date: 1/10/2015
 * Time: 6:45 PM
 */

namespace view;
require_once("./src/view/Project.php");

class ProjectList {
    public static function render(\model\ProjectList $projectlist){
        $html = "<section>";
        $html .= "<h2>{$projectlist->title}</h2><dl>";
        foreach($projectlist->projects as $project){
            $html .= \view\Project::render($project);
        }
        $html .= "</dl></section>";

        return $html;
    }
}