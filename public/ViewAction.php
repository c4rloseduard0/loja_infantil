<?php

    namespace App;

    abstract class ViewAction
    {
        protected $view;

        public function __construct()
        {
            $this->view = new \stdClass();
        }
        // função para renderizar uma pagina de acordo com o template
        public function render($view, $template)
        {
            $this->view->page = $view;  // variavel usada dentro do arquivo de layout
            if(file_exists("../App/Views/includes/".$template.".html")) {
                require_once "../App/Views/includes/".$template.".html"; // caminho especificado levando em consideração sua chamada em public/index.php
            } else {
                echo "entrou no else";
                echo "../App/Views/includes/".$template."html";
                $this->content();
            }
        }

        public function content($dir = "")
        {
            require_once "../App/Views/".$dir."/".$this->view->page.".html";
        }
    }
