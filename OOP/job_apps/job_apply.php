<?php 
    include('includes/header.php');
    require_once('class/apply.php');
?>
<section class="mt-3">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title text-center">
                Job Application
                <a href="index.php" class="btn btn-success btn-sm float-end"><i class="fa fa-undo"></i> Back</a>
            </h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <?php 
                                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                                    $jobId = $_POST['jobId'];
                                    $name = $_POST['name'];
                                    $email = $_POST['email'];
                                    $phone = $_POST['phone'];
                                    $resume = $_FILES['resume'];

                                    $apply = new Apply($jobId,$name,$email,$phone,$resume);
                                    if($apply->save()){?>
                            <div class="error-msg text-center">
                                <i class="fa-regular fa-face-smile text-muted" style="font-size: 48px"></i>
                                <p style="font-size: 24px" class="my-3 text-success">Your Application Submited
                                    Sucessfully!</p>
                            </div>
                            <?php } } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('includes/footer.php'); ?>