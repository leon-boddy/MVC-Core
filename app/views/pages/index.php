<?php
    //INCLUDE HEADER VIEW
    require APPROOT . '/views/headers/header'. HEADKEY .'.php'; 

    //SLICES START


    require APPROOT . '/views/slices/hero-promo.php'; 
    require APPROOT . '/views/slices/three-across.php'; 
    

    //PALCEHOLDER CONTENT
    echo '<h1>' . $data['title'] . '</h1>
    <p>This is my MCV framework, documentation soon come...</p>';



    //INCLUDE FOOTER VIEW
    require APPROOT . '/views/footers/footer'. FOOTKEY .'.php'; 
?>