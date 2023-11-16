<?php
/**
 * difine name e root do sistema
 */
define("SITE", [
    "name" => "Lotris PHP 8 - MVC ",
    "root" => "http://localhost:5000/"
]);

/**
 * 
 * @param string $param
 * @return string
 */
function site(string $param = null){
    if ($param && !empty(SITE[$param])) {
        return SITE[$param];
    }
    return SITE["root"];
}