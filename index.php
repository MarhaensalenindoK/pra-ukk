<?php
    session_start();
    ob_start();

    include "database/connection.php";
    include "controllers/registerController.php";

    if(isset($_POST['register'])){ 
        $controller = new RegisterController();
        $table = 'registrasi';
        $redirect = 'dashboard';

        $payload = [
            'name' => $_POST['name'],
            'jk' => $_POST['jk'],
            'address' => $_POST['address'],
            'religion' => $_POST['religion'],
            'from_jhs' => $_POST['from_jhs'],
            'major' => $_POST['major'],
        ];

        $controller->register($database, $table, $payload, $redirect);
    };

    if(isset($_POST['update'])){ 
        $controller = new RegisterController();
        $table = 'registrasi';
        $redirect = 'registers';

        $payload = [
            'name' => $_POST['name'],
            'jk' => $_POST['jk'],
            'address' => $_POST['address'],
            'religion' => $_POST['religion'],
            'from_jhs' => $_POST['from_jhs'],
            'major' => $_POST['major'],
        ];

        $controller->update($database, $table, $_POST['student_id'], $payload, $redirect);
    };

    if(isset($_GET['page']) && $_GET['page'] === 'registers'){ 
        $controller = new RegisterController();
        $table = 'registrasi';

        $results = $controller->index($database, $table);
    };

    if(isset($_GET['page']) && $_GET['page'] === 'update'){ 
        $controller = new RegisterController();
        $table = 'registrasi';

        $id = $_GET['id'];

        $data = $controller->detail($database, $table, $id);
    };

    if(isset($_GET['page']) && $_GET['page'] === 'print'){ 
        $controller = new RegisterController();
        $table = 'registrasi';

        $id = $_GET['id'];

        $data = $controller->detail($database, $table, $id);
    };

    if(isset($_POST['delete'])){ 
        $controller = new RegisterController();
        $table = 'registrasi';
        $redirect = 'registers';
        $id =  $_POST['student_id'];
        
        $results = $controller->delete($database, $table, $id, $redirect);
    };
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pra Ukk SMK 45</title>

    <!-- <style>
        .mx-auto {
            width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .mb-3 {
            margin-bottom: 1rem;
        }

        .card {
            margin-top: 10px;
        }

        .card-body {
            background-color: red;
            padding: 1rem;
        }
    </style> -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link <?php if(isset($_GET['page']) && $_GET['page'] === 'dashboard' || !isset($_GET['page'])) { echo 'active';} ?>" aria-current="page" href="?page=dashboard">Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php if(isset($_GET['page']) && $_GET['page'] === 'registers') { echo 'active';} ?>" href="?page=registers">New Student List</a>
        </li>
    </ul>

    <?php
        include "web.php";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
</body>

</html>