<?php
require_once("config.php");
$col_1 = $_POST["a"];
$sql = "SELECT * FROM lta_list WHERE COL_1 = '$col_1'";
$result = $link->query($sql);
if ($result->num_rows > 0) 
{
    while ($row = $result->fetch_assoc()) {
        echo $row["COL_7"];
    }
}
else 
{
    echo "not found";
}

?>