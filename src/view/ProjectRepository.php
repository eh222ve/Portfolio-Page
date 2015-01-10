<?php
/**
 * Created by PhpStorm.
 * User: Erik
 * Date: 1/10/2015
 * Time: 7:46 PM
 */

namespace view;


class ProjectRepository {

    public function render($projectsLists){
        $html = "<div id='projects'>";
        $html .= "<article class='code'>";
        foreach ($projectsLists as $projectList){
            $html .= \view\ProjectList::render($projectList);
        }
        $html .= "</article>";
        $html .= "</div>";

        return $html;

    }

}