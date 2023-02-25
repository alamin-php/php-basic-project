<?php
    require_once 'gradebook.php';
    require_once 'course.php.php';
    require_once 'student.php.php';

    $student1 = new Student('s001', 'Asfiya Jannat Orin');
    $student2 = new Student('s002', 'Moni');
    $student3 = new Student('s003', 'Al-Amin');

//  this course for math student
    $course1 = new Course('c001', 'Math');
    $course1->addStudent($student1);
    $course1->addStudent($student2);
    $course1->addStudent($student3);

    $course1->addGrade('s001', 80);
    $course1->addGrade('s002', 85);
    $course1->addGrade('s003', 90);

//  this course for java student
    $course2 = new Course('c002', 'Java');
    $course2->addStudent($student1);
    $course2->addStudent($student2);
    $course2->addStudent($student3);

    $course2->addGrade('s001', 70);
    $course2->addGrade('s002', 90);
    $course2->addGrade('s003', 87);

    $gradebook = new Gradebook();
    $gradebook->addCourse($course1);
    $gradebook->addCourse($course2);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gradbook</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h3 class="text-center my-5">Student Gradebook</h3>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Gradebook</h5>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Name</th>
                                    <th>Course</th>
                                    <th>Grade</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($gradebook->getCourses() as $course): ?>
                            <?php foreach ($course->getStudents() as $student): ?>
                                <tr>
                                    <td>1</td>
                                    <td><?php echo $student->getName();?></td>
                                    <td><?php echo $course->getName();?></td>
                                    <td><?php echo $course->getGrade($student->getId());?></td>
                                </tr>
                            <?php endforeach;?>
                            <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
                crossorigin="anonymous"></script>
</body>

</html>