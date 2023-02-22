<?php
include('generator.php');
$obj = new Generate();
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Password Generator</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h3 class="text-center my-5">Password Generator (OOP)</h3>
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Password Generator</h5>
            <div class="card-body">
              <form action="" method="post">
                <label for="">Password Length</label>
                <input type="number" class="form-control" name="length" placeholder="Enter password length" required>
                <button type="submit" class="btn btn-success mt-3" style="float:right">Generate</button>
              </form>
            </div>
          </div>
        </div>
          <?php
          $length = $_POST['length'];
          $generated_password = $obj->passwordGenerate($length);
          if($generated_password == true){
            echo "Password is: ".$generated_password;
          }else{
            echo "Length must be greater than 6";
          }
          ?>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>