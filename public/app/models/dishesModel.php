<?php

namespace App\Models\DishesModel;


function findAll(\PDO $connexion)
{
    $sql = "
        SELECT 
            dishes.id AS dish_id,
            dishes.name AS dish_name,
            AVG(ratings.value) AS average_rating,
            dishes.description,
            users.name AS user_name,
            COUNT(comments.id) AS number_of_comments
        FROM dishes
        LEFT JOIN ratings ON dishes.id = ratings.dish_id
        LEFT JOIN users ON dishes.user_id = users.id
        LEFT JOIN comments ON dishes.id = comments.dish_id
        GROUP BY dishes.id
        ORDER BY dishes.created_at ASC
        LIMIT 9
    ";
    $rs = $connexion->prepare($sql);
    $rs->execute();

    return $rs->fetchAll(\PDO::FETCH_ASSOC);
}