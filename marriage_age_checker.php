<?php 

    include_once "./functions.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Structure</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>
<body>


    <?php 


        
    
    
        /**
         * Maqrriage Age Check form submit 
         */
        if( isset($_POST['check']) ){
            // get values 
            $name = $_POST['name'];
            $byear = $_POST['byear'];
            $gender = $_POST['gender'] ?? '';


            if( empty($name) || empty($byear) || empty($gender) ){
                $msg =  "<p class=\"alert alert-danger d-flex justify-content-between\"> All fields are required ! <button class=\"btn-close\" data-bs-dismiss=\"alert\"></button></p>"; 
            }else if($byear <= 1200 || $byear >= 5000) {
                $msg =  "<p class=\"alert alert-warning d-flex justify-content-between\"> Invalid Birth Year ! <button class=\"btn-close\" data-bs-dismiss=\"alert\"></button></p>"; 
            } else {


                $msg = marriageAgeCal($name, $byear , $gender);


                // $msg =  "<p class=\"alert alert-success d-flex justify-content-between\"> Data Stable ! <button class=\"btn-close\" data-bs-dismiss=\"alert\"></button></p>";
            }

            



        }
    
    
    
    ?>




    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-5">

                <div class="card shadow">
                    <div class="card-body">


                        <h2>Check your Marriage Age</h2>

                        <?php echo $msg ?? ''; ?>


                        <hr>
                        <form action="" method="POST">
                            <div class="my-3">
                                <label for="">Name</label>
                                <input name="name" type="text" class="form-control">
                            </div>
                            <div class="my-3">
                                <label for="">Birth year</label>
                                <input name="byear" type="text" class="form-control">
                            </div>
                            <div class="my-3">
                                <label for="">Gender</label>
                                <input name="gender" type="radio" value="Male" id="Male"> <label for="Male">Male</label>
                                <input name="gender" type="radio" value="Female" id="Female"> <label for="Female">Female</label>
                            </div>
                            <div class="my-3">
                                <input type="submit" name="check" class="btn btn-primary" value="Check Now">
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>








