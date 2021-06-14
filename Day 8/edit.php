<?php

$connection = mysqli_connect("localhost", "root", "", "db_internship");
$editid = $_GET['id'];

$editq = mysqli_query($connection,"select * from tbl_student where student_id='{$editid}'") 
    or die(mysqli_error($connection));

$editdata = mysqli_fetch_array($editq);
//print_r($editdata);

if($_POST) {
    $txt1 = $_POST['txt1'];
    $txt2 = $_POST['txt2'];
    $txt3 = $_POST['txt3'];
    
    $uq = mysqli_query($connection, "update tbl_student set student_name='{$txt1}', student_gender='{$txt2}', student_mobile='{$txt3}'where student_id='{$editid}'") 
        or die(mysqli_error($connection));
    if($uq) {
        echo "<script>alert('Record Updated');window.location='table.php'</script>";
    }
    
    }
?>

<html>
    <body>
        <form method ="post">
            Name: <input type="text" value="<?php echo $editdata['student_name']; ?>" name="txt1"/>
            <br/>
            Gender: Male<input type="radio" <?php if($editdata['student_gender']=="Male") {echo "checked";} ?> value ="Male" name="txt2"/>
            Female<input type="radio" <?php if($editdata['student_gender']=="Female") {echo "checked";} ?> value ="Female" name="txt2"/>
            <br/>
            Mobile: <input type="number" value="<?php echo $editdata['student_mobile']; ?>" name="txt3"/>
            <br/>
            <input type="submit"/>
            <br/>
        </body>
</html>