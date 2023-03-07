<?php require_once('class/job.php'); ?>
<section class="mt-3">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title text-center">Welcome to Job Portal</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <?php $jobs = Job::getAllJobs();?>
                <?php if(count($jobs) > 0) : ?>
                    <?php foreach($jobs as $job) : ?>
                <div class="col-md-6 mt-3">
                    <div class="card">
                        <div class="card-body">
                            <h5><?php echo $job->getTitle(); ?></h5>
                            <strong><?php echo $job->getCompany(); ?></strong>
                            <p class="p-0 m-0"> <i class="fa-solid fa-location-dot"></i> <?php echo $job->getLocation(); ?></p>
                            <p class="p-0 m-0"><i class="fa-solid fa-graduation-cap"></i> <?php echo $job->getEducation();?></p>
                            <p class="p-0 m-0"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                At least <?php echo $job->getExperience(); ?></p>
                            <a href="job_details.php?id=<?php echo $job->getId();?>" class="btn btn-success btn-sm float-end">Click to apply</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <?php else: ?>
                    <div class="error-msg text-center">
                        <i class="fa-regular fa-face-tired text-muted" style="font-size: 48px"></i>
                        <p style="font-size: 24px" class="my-3">No Job found!</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>