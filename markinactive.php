<!DOCTYPE HTML>  
<html>
<body>
<?php
$name = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$ecodes =explode(" ",$_POST['name']);

$i=0;
$link = mysqli_connect("localhost", "root", "mypass", "jarvis");
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
while($i < count($ecodes))


{
	// $ecodes = strval($ecodes[$i]);
    $sql = "UPDATE `dt` SET `Employee_Status` = 'Inactiv' WHERE `dt`.`Ecodedt` =  '$ecodes[$i]'";
    if (mysqli_query($link, $sql)) {
        echo '<script>alert("Data Updated Successfully.")</script>';
        sleep(3);
    }
    else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
	$i++;
}
}
?>

<h2>Mark Inactive</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" >
  <span class="error"></span>
  <br><br>
  <input type="submit" name="submit" value="Mark Inactive">  
</form>
</body>
</html>
