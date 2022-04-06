<?php  

    include_once "./db.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Now</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>


    <?php 
    

        if( isset($_POST['add_student']) ){
            // get form values 
            $name = $_POST['name'];
            $roll = $_POST['roll'];
            $dept = $_POST['dept'];



            if( empty($name) || empty($roll) || empty($dept) ){
                $msg = "<p class=\" alert alert-danger d-flex justify-content-between \"> All fields are required ! <button class=\"btn-close\" data-bs-dismiss=\"alert\"></button></p>";
            }else{
                
                $connection -> query("INSERT INTO students (name, roll, dept) VALUES ('$name','$roll','$dept')");
                $msg = "<p class=\" alert alert-success d-flex justify-content-between \"> Data Stable ! <button class=\"btn-close\" data-bs-dismiss=\"alert\"></button></p>";
            }

            


        }
    
    
    
    ?>

    

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow">
                <div class="card-body">
                    <h2>Create your account</h2>

                    <?php  echo $msg ?? '';  ?>
                    <hr>
                    <form action="" method="POST">
                        <div class="my-3">
                            <label for="">Name</label>
                            <input name="name" type="text" class="form-control">
                        </div>
                        <div class="my-3">
                            <label for="">Roll</label>
                            <input name="roll" type="text" class="form-control">
                        </div>
                        <div class="my-3">
                            <label for="">Dept</label>
                            <select name="dept" class="form-control" name="" id="">
                                <option value="">-select-</option>
                                <option value="CSE">CSE</option>
                                <option value="EEE">EEE</option>
                                <option value="Software">Software</option>
                                <option value="IOS">IOS</option>
                            </select>
                        </div>
                        <div class="my-3">
        
                            <input type="submit" name="add_student" class="btn btn-primary w-100" value="add new student"> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="card shadow">
                <div class="card-body">
                    <h2>All students</h2>
                    <hr>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Roll</th>
                                <th>Dept</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>


                            <?php 
                            

                                $data = $connection -> query("SELECT * FROM students");

                                echo " Students Number = " . $data -> num_rows;
                                
                                $i = 1;
                                while( $student =  $data -> fetch_object() ) :
                            ?>

                            <tr>
                                <td><?php echo $i; $i++; ?></td>
                                <td><?php echo $student -> name; ?></td>
                                <td><?php echo $student -> roll; ?></td>
                                <td><?php echo $student -> dept; ?></td>
                                <td>
                                    <a class="btn btn-sm btn-info" href="#">View</a>
                                    <a class="btn btn-sm btn-warning" href="#">Edit</a>
                                    <a class="btn btn-sm btn-danger" href="#">Delete</a>
                                </td>
                            </tr>

                            <?php endwhile; ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  
</body>
</html>