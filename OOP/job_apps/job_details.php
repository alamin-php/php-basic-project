<?php 
    include('includes/header.php');
    require_once('class/job.php');
    $jobId = $_GET['id'];
    $job = Job::getJobByID($jobId);
?>
<section class="mt-3">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title text-center">
                Job Details
                <a href="index.php" class="btn btn-success btn-sm float-end"><i class="fa fa-undo"></i> Back</a>
            </h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5><?php echo $job->getTitle(); ?></h5>
                            <strong><?php echo $job->getCompany(); ?></strong>
                            <p class="p-0 m-0"> <i class="fa-solid fa-location-dot"></i>
                                <?php echo $job->getLocation(); ?></p>
                            <p class="p-0 m-0"><i class="fa-solid fa-graduation-cap"></i>
                                <?php echo $job->getEducation(); ?></p>
                            <p class="p-0 m-0"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                At least <?php echo $job->getExperience(); ?></p>
                            <p class="p-0 mt-3"><b>Job Requirments:</b> <?php echo $job->getRequirments(); ?></p>
                            <h5 class="my-3">Apply for this Job</h5>
                            <form action="job_apply.php" method="post" class="mt-3" enctype="multipart/form-data">
                                <input type="hidden" name="jobId" value="<?php echo $job->getId(); ?>">
                                <div class="form-group mb-3">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control form-control-sm"
                                        placeholder="Enter your name" name="name" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Email</label>
                                    <input type="email" class="form-control form-control-sm"
                                        placeholder="Enter your email" name="email" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Phone</label>
                                    <input type="text" class="form-control form-control-sm"
                                        placeholder="Enter your phone" name="phone" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Upload Resume</label>
                                    <input type="file" class="form-control form-control-sm" name="resume" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-sm float-end mt-3"><i
                                            class="fa fa-paper-plane"></i> Apply</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('includes/footer.php'); ?>