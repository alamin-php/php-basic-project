<?php require_once('process.php'); ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Simple Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h3 class="text-center my-5">Simple Login (OOP)</h3>
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Simple Login</h5>
          </div>
          <div class="card-body">
              <form action="" method="post">
                <label for="">Username</label>
                <input type="text" class="form-control" name="username" placeholder="Enter username" required>
                <label for="" class="mt-3">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter password" required>
                <button type="submit" class="btn btn-success mt-3" style="float:right">Login</button>
              </form>
            </div>
        </div>
        <?php 
                $username = $_POST['username'];
                $password = $_POST['password'];
                $user = new User($username,$password);
                $admin = new Admin($username,$password);

                if(!empty($user) && !empty($password)){
                    echo $user->getLoginDetails()."<br>";

                    $adminLogin =  Admin::isAdmin();
                    if($adminLogin == true){
                        echo "<b>Admin login details</b>"."<br>";
                        echo $admin->getLoginDetails()."<br>";
                        echo "Admin User has been loggin";

                    }
                }
        ?>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>