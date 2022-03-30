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
    <style>

        .file-content img {
            width: 70px;
            height: 70px;
            cursor: pointer;
        }

        .file-content input[type="file"] {
           display: none;
        }

        .preview img {
            width: 100%;
            border: 10px solid #FFF;
            display: none;
        }


    </style> 
</head>
<body>



        <?php 
        
        
            /**
             * Upload form submit 
             */

             if( isset($_POST['upload']) ){

                $file = $_FILES['photo'];

                // get file info  
                $file_name = time() .'_'. rand().'_'. $file['name'];
                $file_tmp_name = $file['tmp_name'];
                $file_type = $file['type'];

                if( $file_type == 'image/jpeg' || $file_type == 'image/jpg' || $file_type == 'image/png' || $file_type == 'image/gif'  ){
                    move_uploaded_file($file_tmp_name, 'photos/' . $file_name );
                }else {
                    $msg = "<p class=\"alert alert-danger\">invalid Image file format </p>";
                }




                



                

             }
        
        
        ?>



    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow">
                    <div class="card-body">
                        <?php echo $msg ?? ''; ?>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="my-3 ">
                               <div class="file-content">
                                    <input name="photo" type="file" id="fileupload">
                                    <label for="fileupload"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRSJW5qbtknQ57Lf0hV67r_Mcae2rJ9bjcgzcUhOAJZO_v-WtBiGnfuZJyFqx1c8MqpVvc&usqp=CAU" alt=""></label> 

                                    
                               </div>
                               <div class="preview">
                                <img id="preview_photo" class="shadow" src="" alt="">
                               </div>
                            </div>
                            <div class="my-3">
                                <input name="upload" class="btn btn-sm btn-primary" type="submit" value="Upload photo">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>                                  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>

        $('#fileupload').change( function(e){
            $('#preview_photo').show();
            let file = URL.createObjectURL(e.target.files[0]);
    
            $('#preview_photo').attr('src', file);

        });                                   



    </script>
</body>
</html>








