<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include('Student.php');
        $students = array();
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home', 'john@doe.com');
        $first->add_email('work', 'jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $first->add_status("大一");
        $students['j123'] = $first;

        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home', 'albert@braniacs.com');
        $second->add_email('work1', 'a_einstein@bcit.ca');
        $second->add_email('work2', 'albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $second->add_status("大二");
        $students['a456'] = $second;
        
        $third  = new Student();
        $third->surname = "Zhang";
        $third->first_name = "Yingyin";
        $third->add_email('home','867497302@qq.com');
        $third->add_email('work','Yingyin Zhang@dgpt.ca');
        $third->add_grade(81);
        $third->add_grade(99);
        $third->add_grade(75);
        $third->add_status("大三");
        $students['c789'] = $third;
        
        $fourth  = new Student();
        $fourth->surname = "Joile";
        $fourth->first_name = "Elaien";
        $fourth->add_email('home','2865647933@qq.com');
        $fourth->add_email('work','Elaine@dgpt.ca');
        $fourth->add_grade(95);
        $fourth->add_grade(80);
        $fourth->add_grade(50);
        $fourth->add_status("大四");
        $students['a101112'] = $fourth;
        
        foreach ($students as $student)
            echo $student->toString();
        ?>
       
    </body>
</html>
