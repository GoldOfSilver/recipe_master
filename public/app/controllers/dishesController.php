<?php

namespace App\Controllers\DishesController;

use App\Models\DishesModel;

function indexAction(\PDO $connexion)
{
    include_once '../app/models/dishesModel.php';
    $dishes = DishesModel\findAll($connexion);

    global $content, $title, $dishes_title;
    $title = "Recettes";
    $dishes_title = "Dishes";
    ob_start();
    include '../app/views/dishes/_showDishes.php';
    $content = ob_get_clean();
}