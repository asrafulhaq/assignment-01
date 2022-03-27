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
</head>
<body>



 
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow">
                    <div class="card-body">
                        <h2>Create an account</h2>
                        <hr>
                        <form action="" method="POST">
                            <div class="my-3">
                                <label for="">Name</label>
                                <input name="name" type="text" class="form-control">
                            </div>
                            <div class="my-3">
                                <label for="">Age</label>
                                <input name="age" type="text" class="form-control">
                            </div>
                            <div class="my-3">
                                <input name="submit" type="submit" class="btn btn-primary" value="Create">
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <?php  

                            if( isset($_POST['submit']) ){
                                // get form value 
                                $name = $_POST['name'];
                                $age = $_POST['age'];


                                // for form validation 
                                if( empty($name) || empty($age) ){
                                    echo "<p class=\"alert alert-danger d-flex justify-content-between \">All fields are required !<button data-bs-dismiss=\"alert\" class=\"btn-close\"></button></p>";
                                }else {
                                    // marriage funciton for check 
                                    echo marriageAgeCal($name, $age);
                                }


                                
                            }

                           
                        
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>








