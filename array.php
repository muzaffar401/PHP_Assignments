



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Multiplication Table</title>
</head>

<body>
    <div class="container my-4">

    <h1 class="text-center text-success">2D array</h1>

        
        <table class="table table-bordered">
            <tbody>
                <thead class="bg-success">
                    <th>Name</th>
                    <th>Course</th>
                    <th>Timing</th>
                    <th>Fees</th>
                </thead>


                <?php
                $std = [
                    ["muzaffar", "cpism", "9 to 11", 8500],
                    ["ahmed", "dism", "9 to 11", 3500],
                    ["bilal", "digital marketing", "9 to 11", 9500],
                    ["zaid", "seo", "9 to 11", 12500],
                    ["zubair", "cloud", "9 to 11", 54500],
                    ["saad", "AI", "9 to 11", 87500],
                ];

                for ($row = 0; $row < count($std); $row++) {
                ?>
                    <tr class="bg-secondary text-white">
                        <?php
                        for ($col = 0; $col < count($std[$row]); $col++) {
                        ?>
                            <td><?php echo $std[$row][$col] ?></td>
                        <?php
                        }
                        ?>
                    </tr>
                <?php
                };



                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-FMo4r59lgBLm8+AlXzMAeOXC1MRsM3qwStSG9sjS8tx/vMGplNnDkLWCujx13dyH" crossorigin="anonymous"></script>
</body>

</html>