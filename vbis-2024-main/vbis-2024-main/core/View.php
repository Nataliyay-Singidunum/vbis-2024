<?php

namespace app\core;

use http\Params;

class View{
    public function render($viewName, $layoutName, $params){
        $layout = $this->renderLayout($layoutName);
        $view = $this->renderPartialView($viewName, $params);

        return str_replace("{{ RENDER_SECTION }}", $view, $layout);
    }

    public function renderLayout($layoutName){
        ob_start(); // buffer
        include_once __DIR__ . "/../views/layouts/$layoutName.php";
        return ob_get_clean();
    }

    public function renderPartialView($viewName, $params){

        if ($params !== null) {
            foreach ($params as $key => $value) {
                $$key = $value;
            }

            ob_start(); // buffer
            include_once __DIR__ . "/../views/$viewName.php";
            return ob_get_clean();
        }
    }
}








