<?php include_once('function.php'); ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>String Tools</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h3 class="text-center my-5">String Manipulation Tools Using (OOP)</h3>
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">String</h5>
            <div class="card-body">
              <form action="" method="post">
                <label for="">Input data</label>
                <input type="text" class="form-control" name="string_input" placeholder="Enter your string">
                <label for="" class="mt-3">Select a function</label>
                <select class="form-control" name="string_function" id="string_function">
                  <option value="strlen">strlen</option>
                  <option value="strrev">strrev</option>
                  <option value="strtoupper">strtoupper</option>
                  <option value="strtolower">strtolower</option>
                  <option value="ucfirst">ucfirst</option>
                  <option value="ucwords">ucwords</option>
                  <option value="trim">trim</option>
                  <option value="str_repeat">Repeat 3 times</option>
                </select>
                <button type="submit" class="btn btn-success mt-3" style="float:right">Manipulation String</button>
              </form>
            </div>
          </div>
        </div>
        <?php
          $stringInput = $_POST['string_input'];
          $stringFunction = $_POST['string_function'];
          $obj = new Apps();
          $result = $obj->getInput($stringInput, $stringFunction);
          if ($result != false) { ?>
            <p class="text-default mt-3"><?php echo "The result of string function <b>{$stringFunction}</b> where input: <b>{$stringInput}</b> and output: <b>{$result}</b>"; ?></p>
          <?php
          }
        ?>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>