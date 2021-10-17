<?php
session_start();
?>

<!doctype html>

<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylesheet.css">
    <title>Multiple Form</title>
  </head>
  <body>
    <h1>Dynamic Form</h1>
    
    <?php 

     if(isset($_POST['save'])) {

        $_SESSION["firstName"] = $_POST['firstName'];
        $_SESSION["lastName"] = $_POST['lastName'];
        $_SESSION["email"] = $_POST['email'];
        $_SESSION["phoneNumber"] = $_POST['phoneNumber'];

        
     }
         
    ?>
      
    <div class="container">
    
    <form  method="post">
    <table class="table form_table">
        <thead>
          <tr>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Remove</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input class="form-control" type="text" name="firstName[]" placeholder="First Name" required></td>
            <td><input class="form-control" type="text" name="lastName[]" placeholder="Last Name" required></td>
            <td><input class="form-control" type="email" name="email[]" placeholder="Email" required></td>
            <td><input class="form-control" type="text" name="phoneNumber[]" placeholder="Phone Number" required></td>  
            <td> <button type="button" id="remove" class="btn btn-danger remove-button disabled" disabled><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
              </svg></button></td>  
        </tr>
        </tbody>
      </table>
        <div class="buttons row">
        <div class="col-lg-1">
            <button type="submit" name="save" value = "save" class="btn btn-success submit-button">Save</button>
        </div>
        <div class="col-lg-2">
            <button type="button" class="btn btn-warning add-button">Add Field</button>
        </div>
        </div>
    </form>
   </div>
   
   <?php 
                  if(isset($_SESSION["firstName"])) {
   ?>

   <div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone Number</th>
          </tr>
        </thead>
        <tbody>
          
               <?php
                    forEach($_SESSION["firstName"] as $key => $value) {
                      ?>
                            <tr>
                            <td> <?= $value ?> </td>
                            <td><?=$_SESSION["lastName"][$key]?> </td>
                            <td> <?=$_SESSION["email"][$key] ?></td>
                            <td> <?=$_SESSION["phoneNumber"][$key]?> </td>
                    </tr>
                            
                        <?php
                    } 
             
               ?>
        </tbody>
      </table>
   </div>
  <?php 
                  }
    ?>
  

    <footer>Copyrights &copy; Raaj Kumar 2021</footer>
   
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script src="js/index.js"></script>
  </body>
</html>
