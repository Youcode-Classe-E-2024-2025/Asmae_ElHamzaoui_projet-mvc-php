<?php
class HomeController extends Controller {
    public function index() {
        // Vérifie que tu passes bien des données à la vue
        $this->view('front/home');
    }
}

