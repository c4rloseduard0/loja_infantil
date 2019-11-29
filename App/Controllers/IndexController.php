<?php
    namespace App\Controllers;

    use App\Models\Usuario;
    use App\ViewAction;

    class IndexController extends ViewAction
    {
        public function index()
        {
            $this->render("index", "temp1");
        }
    }
 ?>
