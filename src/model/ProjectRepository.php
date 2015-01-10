<?php
/**
 * Created by PhpStorm.
 * User: Erik
 * Date: 1/10/2015
 * Time: 6:04 PM
 */

namespace model;

require_once("./src/model/Project.php");
require_once("./src/model/ProjectList.php");

class ProjectRepository {
    public function getAll(){
        $list = array();

        $php = new ProjectList("PHP");
        $php->add(new Project("Filmuthrning", "http://erikhamrin.se/projects/bth/movierentals/webroot/index.php", "Projekt i kurs för OOPHP där funktionalitet var fokus med kopplingar mot databas."));
        $php->add(new Project("Gymnastikliga", "http://erikhamrin.se/projects/lnu/1dv404/", "Projekt i kurs Iterativ Mjukvaruutveckling 1DV404 på LNU, grupprojekt där jag ansvarat för backend-utvecklingen"));

        $javascript = new ProjectList("Javascript");
        $javascript->add(new Project("Desktop Application", "http://erikhamrin.se/projects/lnu/1dv403/5-pwd/", "En fönsterhanterare som har ett antal inbyggda applikationer. Detta är slutprojekt i kursen Webteknik I på LNU.", "https://github.com/eh222ve/1dv403-laborationer/tree/master/5-pwd"));

        $csharp = new ProjectList("C#");
        $csharp->add(new Project("Räkna på löner", "https://github.com/eh222ve/1dv402-eh222ve-1-3-salaries/blob/master/_1DV402.S1.L03C/Program.cs", "En konsolapplikation för uträkning av medianlön, medellön samt spridning."));
        $csharp->add(new Project("Geometriska former", "https://github.com/eh222ve/1dv402-eh222ve-2-3-shapes/blob/master/_1DV402.S2.L03C/Program.cs", "En konsolapplikation för uträkning mått, volym m.m. på 2D- och 3D-former."));

        $css = new ProjectList("CSS");
        $css->add(new Project("Bildgalleri", "http://erikhamrin.se/projects/lnu/1ik415/gallery/index.html", "Ett bildgalleri som byggs upp och animeras med CSS"));

        $list[] = $php;
        $list[] = $javascript;
        $list[] = $csharp;
        $list[] = $css;

        return $list;
    }
}