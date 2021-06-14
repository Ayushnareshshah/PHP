<?php

$connection = mysqli_connect("localhost", "root", "", "db_internship");

$q = mysqli_query($connection, "select * from tbl_student")
        or die(mysqli_error($connection));

$row = mysqli_fetch_row($q);

print_r($row);
echo $row[0].$row[1].$row[2].$row[3];