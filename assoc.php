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
        <h1 class="text-center text-success">Associative array</h1>


        <table class="table table-bordered">
            <tbody>
                <thead class="bg-success text-white">
                    <th>Name</th>
                    <th>Age</th>
                    <th>Course</th>
                    <th>Slot</th>
                    <th>Fee</th>
                </thead>
                <?php
                $detail = [
                    [
                        "name" => "muzafar",
                        "age" => 20,
                        "course" => "cpism",
                        "slot" => "9 to 11",
                        "fee" => 8500
                    ],
                    [
                        "name" => "bilal",
                        "age" => 23,
                        "course" => "dism",
                        "slot" => "3 to 5",
                        "fee" => 12500
                    ],
                    [
                        "name" => "ali",
                        "age" => 18,
                        "course" => "digital marketing",
                        "slot" => "1 to 3",
                        "fee" => 18500
                    ],
                    [
                        "name" => "zaffar",
                        "age" => 26,
                        "course" => "SEO",
                        "slot" => "11 to 1",
                        "fee" => 23500
                    ],
                    [
                        "name" => "saad",
                        "age" => 16,
                        "course" => "Web design",
                        "slot" => "5 to 8",
                        "fee" => 94500
                    ],

                ];

                foreach ($detail as $values) {
                ?>
                <tr>
                <td><?php echo $values['name']?></td>
                <td><?php echo $values['age']?></td>
                <td><?php echo $values['course']?></td>
                <td><?php echo $values['slot']?></td>
                <td><?php echo $values['fee']?></td>
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