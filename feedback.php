<?php   include 'inc/header.php'   ?>




<?php 

$mysql=  'select *from feedback'; 

$result= mysqli_query($conn, $mysql);
$feedback= mysqli_fetch_all($result,MYSQLI_ASSOC);


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
  

  <main class="feed align-items-center">
    <section class="card1 align-item-center">
  <h1 class="header-top">Feedback</h1>
  
  <?php foreach($feedback as $input): ?>
  <div class="card my-3 w-75 container feedback">
    <div class="card-body text-center">
    
    
  <p> <?php  echo $input['feedback'];
  
  ?> </p>

    </div>
    
  <p class="text-center"> <?php  
  
  echo $input['name'] .' on ' .'<br>' .$input['date'];
  
  ?> </p>

    </div>

  <?php endforeach; ?>




  
    </section>
  </main>


<script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"
    ></script>
</body>
</html>


<?php   include 'inc/footer.php'   ?>