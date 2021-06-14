<?php

$connection = mysqli_connect("localhost", "root", "", "db_internship");

$q = mysqli_query($connection, "select * from tbl_student where is_delete = 0")
        or die(mysqli_error($connection));

echo "<table border='1'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Name</th>";
echo "<th>Gender</th>";
echo "<th>Mobile</th>";
echo "<th>Action</th>";
echo "</tr>";
$i = 0;
while($row = mysqli_fetch_array($q)) {
    $i++;
    echo "<tr>";
    echo "<td>$i</td>";
    echo "<td>{$row['student_name']}</td>";
    echo "<td>{$row['student_gender']}</td>";
    echo "<td>{$row['student_mobile']}</td>";
    echo "<td> <a href='edit.php?id={$row['student_id']}'>Edit</a> | <a href ='delete.php?deleteid={$row['student_id']}'>Delete</a></td>";
    echo "</tr>";
    
}
echo "</table>";

echo "<a href='query_into_db.php'>Add Record</a>";