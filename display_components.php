<?php
session_start();
if(!isset($_SESSION["librarian"]))
{
	?>
	<script type="text/javascript">
	window.location="login.php";
	</script>
	<?php
}
include "connection.php";
include "header.php";
?>

       
        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3></h3>
                    </div>

                    <!--<div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search components...">
                                <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                            </div>
                        </div>
                    </div>-->
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>display & search components</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
							<form name ="form1" action="" method="post">
							<input type = "text" name="t1" class="form-control" placeholder="enter component name">
							<input type= "submit" name="submit1" value="search component" class="btn btn-default"style="background-color: blue; color: white">
							</form>
							<?php
							if(isset($_POST["submit1"]))
							{
							$res = mysqli_query($link, "select * from add_comp where c_name like('$_POST[t1]%')");
							echo "<table class='table table-bordered'>";
							echo "<tr>";
							echo "<th>"; echo "component name"; echo "</th>";
							echo "<th>"; echo "purchash date"; echo "</th>";
							echo "<th>"; echo "price"; echo "</th>";
							echo "<th>"; echo "total quantity"; echo "</th>";
							echo "<th>"; echo "available quantity"; echo "</th>";
							echo "<th>"; echo "delete component"; echo "</th>";
							echo "</tr>";
							while($row = mysqli_fetch_array($res))
							{
								echo "<tr>";
							echo "<td>"; echo $row["c_name"]; echo "</td>";
							echo "<td>"; echo $row["c_purchase_date"]; echo "</td>";
							echo "<td>"; echo $row["c_price"]; echo "</td>";
							echo "<td>"; echo $row["c_qty"]; echo "</td>";
							echo "<td>"; echo $row["available_qty"]; echo "</td>";
							echo "<td>"; ?><a href="delete_comp.php?id=<?php echo $row["id"];?>">Delete Components </a><?php echo "</td>";


							echo "</tr>";
							}
							echo "</table>";	
							}
							else
							{
							$res = mysqli_query($link, "select * from add_comp");
							echo "<table class='table table-bordered'>";
							echo "<tr>";
							echo "<th>"; echo "component name"; echo "</th>";
							echo "<th>"; echo "purchash date"; echo "</th>";
							echo "<th>"; echo "price"; echo "</th>";
							echo "<th>"; echo "total quantity"; echo "</th>";
							echo "<th>"; echo "available quantity"; echo "</th>";
							echo "<th>"; echo "delete component"; echo "</th>";
							echo "</tr>";
							while($row = mysqli_fetch_array($res))
							{
								echo "<tr>";
							echo "<td>"; echo $row["c_name"]; echo "</td>";
							echo "<td>"; echo $row["c_purchase_date"]; echo "</td>";
							echo "<td>"; echo $row["c_price"]; echo "</td>";
							echo "<td>"; echo $row["c_qty"]; echo "</td>";
							echo "<td>"; echo $row["available_qty"]; echo "</td>";
							echo "<td>"; ?><a href="delete_comp.php?id=<?php echo $row["id"];?>">Delete Components</a><?php echo "</td>";

							echo "</tr>";
							}
							echo "</table>";	
							}
							?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->


 <?php
include "footer.php";
?>