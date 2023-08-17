<?php

function pagesController_homepage()
{

    echo "La page marche";

    require 'templates/accueil.php';
}


function pagesController_dashboard()
{

    require 'templates/dashboard.php';
}
