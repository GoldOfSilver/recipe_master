<?php
// DISPATCHER CENTRAL

// 1. Charger l'initiateur
require_once '../core/init.php';

// 2. Charger le routeur principal
require_once '../app/routers/index.php';

// 3. Charger le template
require_once '../app/views/templates/index.php';