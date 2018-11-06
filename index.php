<!DOCTYPE html>
<html>
<body>

<h1 style="text-align:center;">MTUniversity</h1>
<p style="text-align:center;">Coming soon........</p>
<p>List of Upcoming courses</p>
<?php
$classes = array("1- Intro to Abrasives 100", "2- Grinding Processes 201", "3- Grinding Safety 211");
sort($classes);

$clength = count($classes);
for($x = 0; $x < $clength; $x++) {
    echo $classes[$x];
    echo "<br>";
}
?>

</body>
</html>
