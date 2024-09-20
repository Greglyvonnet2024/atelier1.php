<?php

var_dump($_GET);

if (!empty($_GET) && $_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['menu']) && isset($_GET['img'])) {
        $menu = $_GET['menu'];
        // menu = new-york ou rome ou dehli ou hanoi
        $img = $_GET['img'];

        switch ($menu) {
            case 'rome':
                header("Location: resultat2.php?menu=$menu&img=$img");
                break;
            case 'new-york':
                header("Location: resultat2.php?menu=$menu&img=$img");
                break;
            case 'delhi';
                header("Location: resultat2.php?menu=$menu&img=$img");
                break;
            case 'hanoi';
                header("Location: resultat2.php?menu=$menu&img=$img");
                break;
        }
    }
}

var_dump($_GET);
