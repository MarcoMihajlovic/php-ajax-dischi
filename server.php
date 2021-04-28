<?php
    
    require __DIR__ . '/partials/database.php';

    header('content-Type: application/json');

    echo json_encode($database);

?>