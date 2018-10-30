<?php
include "connection.php";
$id = isset($_GET['id']) ? $_GET['id'] : '';
$a = date("d-m-y");
$res = mysqli_query($link,"update issue_components set c_return_date='$a' where id=$id");
$c_name="";
$res = mysqli_query($link,"select * from issue_components where id = $id");

while($row = mysqli_fetch_array($res))
{
	$c_name=$row["c_name"];
}
mysqli_query($link,"update add_comp set available_qty=available_qty+1 where c_name= '$c_name'")

?>
<script type="text/javascript">
 window.location = "return_components.php";
 </script>
