<form method="GET">
    <input type=text name=input>
    <input type=submit name=submit value="Submit">
</form>

<?php
$name = $_GET['input'];
$connect=mysqli_connect("localhost","user","password","users");

if (mysqli_connect_errno())
    echo "Error occurs: " . mysqli_connect_error();

if (isset($_GET['submit'])){
    $query =  "SELECT * FROM users WHERE firstname = '" . $name . "' AND active = 1";
    $result=mysqli_query($connect, $query);
    echo "<table border='2'>
    <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Active</th>
    </tr>";

    while($row = mysqli_fetch_array($result))
    {
       echo "<tr>";
       echo "<td>" . $row['firstname'] . "</td>";
       echo "<td>" . $row['lastname'] . "</td>";
       echo "<td>" . $row['active'] . "</td>";
       echo "</tr>";
    }
    echo "</table>";
}
mysqli_close($connect);

?>
