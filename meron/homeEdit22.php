
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
    #edit-text-one{
      
     
    }

</style>





   

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
        <a class="nav-link" href="#" id="nave-bar-two">News</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="profileOne.php" id="nave-bar-two">Regester</a>
      </li>
    </ul>
    <span class="navbar-text">
    
     <a href="" id="nave-bar-ancer">Log out</a> 
      
    </span>

    
  </div>
</nav>

 

  <!-- Display image-->

  <div class="container" style="border-top: 3px dotted black; margin-top:10px; padding-top:10px;">
      <div class="row">


      <?php
      include("one.php");

      $sql = "select * from phot order by id desc";
      $res = mysqli_query($conn,$sql);
      if($res){
          while($row=mysqli_fetch_assoc($res)){
             $post = $row['post'];
             $image = $row['imag'];
            
              if($image > 0 && $post > 0){
                 
                 echo " 
                 
                 <div class='col-md-4'>
                <div class='thumbnail'>
          
              <img src='img./$row[imag]' alt='Lights' style='width:100%'>
             
           

            <div class='caption' style='border-bottom:5px double red; margin-bottom:40px;'>
              <p class='mt-3'>$row[post]</p>
                <a class='edit-one' href='edit.php? id=$row[id]'> Edit Phot  and  text </a>
           

              <p>$row[data]</p>
            </div>
          </a>
        </div>
      </div>
                 
                 
                 ";
                
              }elseif($post > 0 && $image < 0){
                  echo "
                  
                       <div class='col-md-4'>
                <div class='thumbnail'>
          
            
              
           

            <div class='caption' style='border-bottom:5px double red; margin-bottom:40px;'>
              <p class='mt-3'>$row[post]</p>
                <a class='edit-one' href='edit.php? id=$row[id]'> Edit </a>
           

              <p>$row[data]</p>
            </div>
          </a>
        </div>
      </div>
                  
                  
                  
                  ";
              }
              
              
      }
    }
      ?>



      </div>

  </div>




</div>
</div>




  

 



  
</body>
</html>
