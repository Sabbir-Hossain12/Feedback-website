<?php
    
    include 'inc/header.php'; 

?>

<?php
// Set vars to empty values
$name = $email = $feedback = '';
$nameErr = $emailErr = $feedbackErr = '';

// Form submit
if (isset($_POST['submit'])) 

{
  // Validate name
  if (empty($_POST['name'])) {
    $nameErr = 'Name is required';

  } else {
    
    $name= htmlspecialchars($_POST['name']);

    
  }

                if (empty($_POST['email'])) {
                $emailErr = 'email is required'; 
             } else {
                
                $email= htmlspecialchars($_POST['email']);
                }


  if (empty($_POST['feedback'])) {
    $feedbackErr = 'feedback is required';

    
  } else {
    
    $feedback= htmlspecialchars($_POST['feedback']);

    
  }





  
  
  if (empty($nameErr) && empty($emailErr) && empty($feedbackErr) ) 
  {
    // add to database
    $sql = "INSERT INTO feedback (name, email, feedback) VALUES ('$name', '$email', '$feedback')";
    if (mysqli_query($conn, $sql)) {
      
      header("Location: feedback.php");
    } else {
      // error
      echo 'Error: ' . mysqli_error($conn);
    }
  }
}

// echo $name;
// echo $nameErr;
?>




    
    

    <main>
      <div class="container   align-items-center">
      
       <h1 class="header-top">Feedback </h1>
       <h4 class="header-secondary">Leave Feedback For Handicraftbd</h4>
       
      <div class="mb-3">
        <form action="<?php echo htmlspecialchars(
      $_SERVER['PHP_SELF']
    ); ?>" method="POST" >
        <label for="exampleFormControlInput1" class="form-label">Name</label>
        <input type="text" class="form-control <?php echo !$nameErr?: 'is-invalid' ?>" id="exampleFormControlInput1" name="name"   placeholder="Enter name here">
        
        <div id="validationServer03Feedback" class="invalid-feedback">
              <?php  echo $nameErr  ?>
    </div>
      </div>




      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email </label>
        <input type="email" class="form-control <?php echo !$emailErr?: 'is-invalid' ?>" id="exampleFormControlInput1" name="email"   placeholder="Enter email here">
        <div id="validationServer03Feedback" class="invalid-feedback">
              <?php  echo $emailErr  ?>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Feedback</label>
        <textarea class="form-control <?php echo !$feedbackErr?: 'is-invalid' ?>" id="exampleFormControlTextarea1" rows="3" name="feedback"  placeholder="Enter Feedback here"></textarea>
        <div id="validationServer03Feedback" class="invalid-feedback">
              <?php  echo $feedbackErr  ?>
      </div>

      <div class="mb-3">
        <input type="submit" name="submit" value="Send" class="form-control submit-button" id="submit">
      </div>
  </form>
      
      </div>
  
    </main>




    
  














   <?PHP include 'inc/footer.php';  ?>

    