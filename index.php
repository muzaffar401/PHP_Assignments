<!-- 
// function local(){
//     $localVar = "muzaffar ahmed";
//     echo $localVar;
// }
// local();


// $globalVar = "muzaffar ahmed";
// function globalFunc()
// {

//     global $globalVar;
//     echo $globalVar;
// }

// globalFunc();


// function staticFunc(){
//     static $staticVar = 5;
//     echo $staticVar."<br>";
//     $staticVar++;
// }
// staticFunc();
// staticFunc();
// staticFunc();
// staticFunc();
// staticFunc();
// staticFunc();


// $email = "ma9400667@gmail.com";
// $pass = 12345;

// if($email == "ma9400667@gmail.com" && $pass == 12344){
//     echo "<script>
//     alert('Login Successfully')
//     </script>";
// } else{
//     echo "<script>
//     alert('invalid')
//     </script>";
// } -->

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

        <h1 class="text-center text-primary fs-1 text-decoration-underline">TABLE OF 5</h1>

        <div class="container d-flex justify-content-between">
            <h1 class="d-flex">EVEN = <div class="bg-secondary rounded-circle" style="height: 50px; width: 50px;"></div>
            </h1>
            <h1 class="d-flex">ODD = <div class="bg-primary rounded-circle" style="height: 50px; width: 50px;"></div>
            </h1>
        </div>
        <table class="table table-bordered">
            <tbody>
                <?php
                for ($i = 1; $i <= 10; $i++) {
                    $result = 5 * $i;

                    if ($rowClass = $i % 2 == 0) {
                        $rowClass = 'bg-secondary text-white';
                    } else {
                        $rowClass = 'bg-primary text-white';
                    }

                    echo "<tr class='{$rowClass}'>
                            <td>5</td>
                            <td>*</td>
                            <td>{$i}</td>
                            <td>{$result}</td>
                        </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-FMo4r59lgBLm8+AlXzMAeOXC1MRsM3qwStSG9sjS8tx/vMGplNnDkLWCujx13dyH" crossorigin="anonymous"></script>
</body>

</html>