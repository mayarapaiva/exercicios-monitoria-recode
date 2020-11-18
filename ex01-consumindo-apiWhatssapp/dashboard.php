<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recode</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
</head>
<body>
    
    <?php require "partials/header.html" ?>

    <main style="height: 90vh; background-color: #ccc; padding-top: 5vh">

        <div class="card d-flex align-items-center mx-auto" style="width:350px; height:80vh">
            <canvas id="myChart" width="200" height="200"></canvas>
        </div>

    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
    <script>
        var ctx = document.getElementById("myChart").getContext('2d');

        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Monitores', 'Alunos', 'Professores'],
                datasets: [
                    {
                        data: [89, 114, 30],
                        backgroundColor: [
                            '#be2121',
                            '#2172be',
                            '#12be32'
                        ]
                    }
                ]
            }
        });
    </script>
</body>
</html>