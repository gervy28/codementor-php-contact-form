<?php
// Form Submission Object - 
  $user = $email = $queryType = $message = '';

if($_SERVER["REQUEST_METHOD"]  == "POST") {
  $user = $_POST['user'];
  $email = $_POST['email'];
  $queryType = $_POST['query-type'];
  $message = $_POST['message'];
  ?>
  <div >
    <h1>Thanks for Submitting your form, <?= $user ?></h1>
    <h2> Please Review Your Submission Below: </h2>
    <ul>
      <li>
        Name: <?= $user ?>    
      </li>
      <li>
        Email: <?= $email ?>    
      </li>  
      <li>
        Subject: <?= $user ?>    
      </li>  
      <li>
        Message: <?= $message ?>    
      </li>
    </ul>
  </div>
<?php
} else {
  echo "<h1>Please Submit Form Data</h1>";
};
?>
