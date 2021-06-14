<?php
$host = "localhost";
$username = "root";
$passwd = "";
$dbname = "db_internship";

$connection = mysqli_connect($host, $username, $passwd, $dbname);

$q = mysqli_query($connection,
"insert into tbl_student(student_name, student_gender, student_mobile) values('Abheek', 'Male', '9586164944')")
     or die("Error". mysqli_error($connection));

if($q)
{
  echo "<script>alert('Record Added');</script>";
