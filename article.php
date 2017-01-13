<?php

require __DIR__ . '/autoload.php';


if (isset($_GET['id'])) {

    $data = \App\Models\Article::findById($_GET['id']);

    if (false === $data) {

        header('Location: /obychenie/PHP2-01/index.php');
        die();

    } else {

        include __DIR__ . '/template/article.php';

    }
}