<?php
class Controller {
    public function view($view, $data = []) {
        // Charge la vue via Twig
    }

    public function model($model) {
        require_once "../app/models/{$model}.php";
        return new $model();
    }
}
