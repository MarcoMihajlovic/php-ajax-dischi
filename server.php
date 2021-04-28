<?php
    
    require __DIR__ . '/partials/database.php';

    header('content-Type: application/json');

    $author = $_GET['author'];

    $filtered = [];

    if($author == "all"){
        echo json_encode($database);
    } else {
        $filtered =[];
        
        foreach($database as $album) {
            if (in_array($author, $album)) {
                $filtered[] = $album;
                echo json_encode($filtered);
            }
        }
    }

?>