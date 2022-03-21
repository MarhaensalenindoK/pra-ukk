<?php
    $pages = array("registers", "dashboard", "update", "print");

    if(isset($_GET['page'])) {
        $page = $_GET['page'];
    }else {
        $page = "dashboard";
    }
    
    foreach($pages as $thisPage){
        if($page == $thisPage){
            include "pages/$thisPage.php";
            break;
        }
    }
