<?php
"<br>";
$link = mysqli_connect("localhost", "root", "root", "activity1");
if($link === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

echo "Connected!<br>";

$sql = "SELECT * FROM users";

$result = mysqli_query($link, $sql);

if(mysqli_num_rows($result) > 0)
{
    echo "Data:<BR>";
    while($row = mysqli_fetch_assoc($result))
    {
        $field1name = $row["FIRST_NAME"];
        $field2name = $row["LAST_NAME"];
        echo "first: $field1name, last: $field2name <br>";
    }   
    echo "end of list";
    $result->free();
}
else
{
    echo "0 results";
}
mysqli_close($link);
?>