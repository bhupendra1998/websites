<?php
include "connection.php";
if(isset($_GET["id"]))
{
	$id=$_GET["id"];
	
	mysqli_query($link,"delete from add_comp where id=$id");
	?>
	<script type="text/javascript">
	window.location="display_components.php";
	</script>
<?php
}
else
{
	?>
	<script type="text/javascript">
	window.location="display_components.php";
	</script>
<?php
}
