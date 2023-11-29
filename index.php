<?php
include 'Model/db.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body style="background-color: #222222;">
    <main class="container ">
        <div class="container-sm bg-warning rounded-3 p-5" style="margin: 100px auto">
            <table class="table table-striped table-dark rounded-3">
                <thead>
                    <tr>
                        <th scope="col">
                            <?php ?>
                        </th>
                        <th scope="col">NAME</th>
                        <th scope="col">INFO</th>
                        <th scope="col">PARKING</th>
                        <th scope="col">RAITING</th>
                        <th scope="col">DISTANCE TO CENTER</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($hotels as $info) { ?>

                        <tr>
                            <th scope="row"></th>
                            <td>
                                <?php echo ($info['name']) ?>
                            </td>
                            <td>
                                <?php echo ($info['description']) ?>
                            </td>
                            <td>
                                <?php echo ($info['parking'] ? '1' : '0'); ?>
                            </td>
                            <td>
                                <?php echo ($info['vote']) ?>
                            </td>
                            <td>
                                <?php echo ($info['distance_to_center']) ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>


        </div>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>