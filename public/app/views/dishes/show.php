<section class="bg-white rounded-lg shadow-lg p-6 mb-6">
    <!-- Recipe Image -->
    <img class="w-full h-96 object-cover rounded-t-lg" src="<?php echo $dish['picture']; ?>" alt="<?php echo $dish['dish_name']; ?>" />
    
    <!-- Recipe Info -->
    <div class="p-4">
        <h1 class="text-3xl font-bold mb-4"><?php echo $dish['dish_name']; ?></h1>
        <div class="flex items-center mb-4">
            <span class="text-yellow-500 mr-1"><i class="fas fa-star"></i></span>
            <span><?php echo number_format($dish['average_rating'], 1); ?></span>
            <span class="ml-4 text-gray-700"><i class="fas fa-clock"></i> <?php echo $dish['prep_time']; ?> minutes</span>
        </div>
        <p class="text-gray-700 mb-4">
            <?php echo $dish['description']; ?>
        </p>
        <div class="flex items-center mb-4">
            <span class="text-gray-700 mr-2">Par <?php echo $dish['user_name']; ?></span>
            <span class="text-gray-500"><i class="fas fa-comment"></i> <?php echo $dish['number_of_comments']; ?> commentaires</span>
        </div>
    </div>

    <!-- Ingredients -->
    <div class="p-4 border-t">
        <h2 class="text-2xl font-bold mb-4">Ingrédients</h2>
        <ul class="list-disc pl-5">
            <li>200g de farine</li>
            <li>100g de sucre</li>
            <li>3 œufs</li>
        </ul>
    </div>

    <!-- Steps -->
    <div class="p-4 border-t">
        <h2 class="text-2xl font-bold mb-4">Étapes</h2>
        <ol class="list-decimal pl-5">
            <li>Préchauffez le four à 180°C.</li>
            <li>Dans un saladier, mélangez la farine et le sucre.</li>
            <li>
                Ajoutez les œufs un à un en mélangeant bien entre chaque ajout.
            </li>
        </ol>
    </div>

    <!-- Comments -->
    <div class="p-4 border-t">
        <h2 class="text-2xl font-bold mb-4">Commentaires</h2>
        <!-- Comment -->
        <?php foreach ($comments as $comment) : ?>
            <div class="mb-4">
                <div class="flex items-center mb-2">
                    <img src="https://source.unsplash.com/50x50/?portrait" alt="Nom de l'utilisateur" class="w-10 h-10 rounded-full mr-2"/>
                    <span class="font-bold"><?php echo $comment['user_name']; ?></span>
                </div>
                <p class="text-gray-700">
                    <?php echo $comment['content']; ?>
                </p>
            </div>
        <?php endforeach; ?>
    </div>
</section>