<?php require_once('process.php'); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shape Masurement</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h3 class="text-center my-5">Shape Masurement</h3>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Shape Masurement</h5>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="shape">Shape</label>
                                <select name="shape" id="shapeId" class="form-control form-control-sm">
                                    <option value="">Select One</option>
                                    <option value="rectangle">Rectangle</option>
                                    <option value="triangle">Triangle</option>
                                    <option value="circle">Circle</option>
                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <label for="masurementId">Masurement</label>
                                <input type="number" class="form-control" name="masurement" name="masurementId"
                                    placeholder="Enter Shape Masurement" required>
                            </div>
                            <button type="submit" class="btn btn-success mt-3" style="float:right">Generate</button>
                        </form>
                    </div>
                </div>
                <?php if(isset($area)) : ?>
                <h4 class="mt-5">Output of shape masurement</h4>
                <p>Your selected shape <?php echo $shape; ?> and <?php echo $masurement ?> is masurement of:
                    <?php echo $area; ?></p>
                <?php endif; ?>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
                crossorigin="anonymous"></script>
</body>

</html>