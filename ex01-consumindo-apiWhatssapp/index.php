<?php
    require "Models/Student.php";
    $students = Student::getAll();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recode</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</head>
<body>
   
    <?php require "partials/header.html" ?>

    <main class="py-5">
        <?php foreach ($students as $students) { ?>
            <div class="card w-50 mx-auto mt-4">
                <div class="card-header">
                    <?=  $students['name'] ?>
                </div>
                <div class="card-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum illum sunt iste quae, dignissimos voluptate, dolor ipsam voluptas doloribus aliquid voluptatum veritatis illo mollitia cumque deserunt? Quas minima maiores cum!
                </div>
                <div class="card-footer d-flex align-items-center justify-content-end">
                    <a class="btn btn-success" href="https://wa.me/<?= $student['phone'] ?>">
                        <i class="fab fa-whatsapp" style="font-size: 30px"></i>
                    </a>
                </div>
            </div>
        <?php } ?>

    </main>
</body>
</html>
