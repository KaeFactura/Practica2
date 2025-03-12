<?php
class HomeController {
    public function index() {
        $this->renderView('home');
    }

    private function renderView($view, $data = []) {
        // Extraer variables para que estén disponibles en la vista
        extract($data);

        $file = __DIR__ . '/../views/' . $view . '.php';

        if (file_exists($file)) {
            require_once $file;
        } else {
            die("La vista '$view' no existe.");
        }
    }
}
?>

