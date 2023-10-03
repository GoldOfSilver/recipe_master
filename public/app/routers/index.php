<?php
// ROUTER PRINCIPAL


// DISHES.INDEX: Liste des dishes
// PATTERN: ?dishes=index
// CTRL: dishesController
// ACTION: index

if (isset($_GET['dishes'])) :
    include_once '../app/routers/dishesRouters.php';
endif;