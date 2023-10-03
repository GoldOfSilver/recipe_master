<?php

// 1. Lancer les sessions
session_start();

// 2. Chargement des paramètres de connexion
require_once '../app/config/params.php';

// 3. Chargement des paramètres de constante
require_once '../core/constantes.php';

// 4. Chargement du fichier de connexion
require_once '../core/connexion.php';

// 5. Chargement des outils
require_once '../core/tools.php';