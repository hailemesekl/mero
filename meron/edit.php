


<?php
$er= ""; 
include("one.php");
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $id = $_GET['id'];

    $post_one = $_POST['post1'];
    $img = $_FILES['img']['name'];
    $img_tem = $_FILES['img']['tmp_name'];
    $img_size = $_FILES['img']['size'];

    if($post_one !="" && $img !=""){
        if($img_size < 100000000){
            $folder = "img/". $img;
            move_uploaded_file($img_tem,$folder);

            $sql = "UPDATE phot SET post='$post_one', imag ='$img' where id = $id";
            $res = mysqli_query($conn,$sql);
            if($res){
                  echo "all edit";
            }

        }else{
             echo "size is too large";
        }
    
               
    }elseif($img !=""){
          if($img_size < 100000000){

            $folder = "img/". $img;
            move_uploaded_file($img_tem,$folder);

            $sql = "UPDATE phot SET imag ='$img' where id = $id";
            $res = mysqli_query($conn,$sql);
            if($res){
                 echo "Only Photo editing";
            }else{
                 echo "Not photo editing";
            }
                
          }else{
              echo "img is too large";
          }
    }elseif($post_one != ""){
        $sql = "UPDATE phot SET post='$post_one'  where id = $id";
        $res = mysqli_query($conn,$sql);
       
        if($res){
              echo "texte edit";
        }else{
              echo "not edit";
        }

    }else{
        echo " please edited";
    }
      
}
?>



<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

 

  <title>header</title>
  <link rel="shortcut icon" href="mm.jpg" type="image/x-icon">
</head>
<body>

<style>
    #bar-one{
        margin-top: 10px;
        background: black;

    }
    #menu-one{
        color:white;
        border: 1px solid white;
    }
    #menu-one:hover{
       color: gold;
       border: 1px solid gold;
    }
    #nave-bar-one{
      color:white;
    }
    #nave-bar-one:hover{
      color: gold;
    }
    
    #nave-bar-two{
      color:white;
    }

    #nave-bar-two:hover{
         color:gold
    }
    #nave-bar-ancer{
      color: white;
      font-weight: bold;


    }
    #nave-bar-ancer:hover{
       color:gold;

    }

  #form-one{
     border: 1px solid gold;
     margin-top:30px;
     padding: 60px;
     border-radius: 10px;
  }
  #labe-form-one{
    font-size: large;
    font-weight: bold;
  }
  #submit-one{
    margin-top: 10px;
    padding-left: 40px;
    padding-right: 40px;
    border-radius: 4px;
  }
  #submit-one:hover{
    background: black;
    color:white;
  }

</style>

<!-- menu bar -->

<nav id="bar-one" class="navbar navbar-expand-lg ">
<a class="navbar-brand" href="#" id="log-one">
    <img src="mm.jpg" alt="Logo"  id="log-two" style="width:30px;">
  </a>
  <a class="navbar-brand" href="#" id="nave-bar-one">Hope for Hopeless MINISTRY</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span id="menu-one" class="navbar">Menu</span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#" id="nave-bar-two"> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="homeEdit22.php" id="nave-bar-two">Edit page</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" id="nave-bar-two"></a>
      </li>
    </ul>
    <span class="navbar-text">
    
     <a href="" id="nave-bar-ancer"></a> 
      
    </span>

    
  </div>
</nav>

<!-- menu bar end-->




<!--form of image-->

<div class="container">
     <form action="#" method="POST" enctype="multipart/form-data" id="form-one">

     <div class="row">
          <div class="col-md-6">
            <label id="labe-form-one" for="post">What is in your mind</label> <br>
           <textarea name="post1" id="texare-one" cols="30" placeholder="enter  "></textarea> <br>
          </div>

          <div id="labe-form-one" class="col-md-6 mt-3">
            <label for="img">Photo</label>
            <input type="file" name="img" class="form-control" id="imge-form-one">
             
          </div>

          <div class="col-md-4">
           
            <input type="submit" name="submit"  value="POST" id="submit-one">
          </div>

    </div>
            <p class="text-danger"></p>
     </form>

 </div>

<!-- form end-->




</body>
</html>