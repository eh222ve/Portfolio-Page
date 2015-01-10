<?php
namespace view;

class Navigation {
    private static $getURL = "url";
    public static $actionHome = "Home";
    public static $actionPortfolio = "Portfolio";
    public static $actionContact = "Contact";


    public function hasUserInput(){
        if(isset($_GET[self::$getURL])){
            return true;
        }
        return false;
    }

    public function getAction(){
        if(isset($_GET[self::$getURL])){
            return $_GET[self::$getURL];
        }
        return false;
    }

    public static function getMenu(){
        $html = "<nav id='navbar'>";
        $html .= "<ul>";
        $html .= "<li><a href='/" . self::$actionHome . "'>Home</a></li>";
        $html .= "<li><a href='/" . self::$actionPortfolio . "'>Portfolio</a></li>";
        $html .= "<li><a href='/" . self::$actionContact . "'>Kontakt</a></li>";
        $html .= "</ul>";
        $html .= "</nav>";

        return $html;

    }

}