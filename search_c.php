<?php
session_start();
if(!isset($_SESSION["username"]))
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
                        <h3> </h3>
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
                                <h2>Search Components</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
							<form name = "form1" action="" method="post">
							     <table class="table"> 
								     <tr>
									     <td><input type="text" name = "t1" placeholder="Enter component name" class ="form-control"required> </td>
										 <td><input type="submit"value="search component"name="submit1" class="form-control btn btn-default"  style="background-color: blue; color:white";> </td>
									 </tr>
								 </table>
							
							</form>
                                <?php
								if(isset($_POST["submit1"]))
								{
									$i=0;
								$res = mysqli_query($link,"select * from add_comp where c_name like('%$_POST[t1]%')");
								echo "<table class ='table table-bordered'>";
								echo "<tr>";
								while($row = mysqli_fetch_array($res))
								{ 
							        $i = $i+1;
									echo "<td>";
									
									echo "<br>";
									echo "<b>".$row["c_name"]."</b>";
									echo "<br>";
									echo "<b>"."available".$row["available_qty"]."</b>";
									
									
									echo "</td>";
									if($i==2)
									{
										echo "</tr>";
										echo "<tr>";
										$i=0;
									}
								}
								echo "</tr>";
								echo "</table>";
									
								}
								else
								{
									$i=0;
								$res = mysqli_query($link,"select * from add_comp where available_qty>0");
								echo "<table class ='table table-bordered'>";
								echo "<tr>";
								while($row = mysqli_fetch_array($res))
								{ 
							        $i = $i+1;
									echo "<td>";
									
									echo "<br>";
									echo "<b>".$row["c_name"]."</b>";
									echo "<br>";
									echo "<b>"."available".$row["available_qty"]."</b>";
									
									
									echo "</td>";
									if($i==2)
									{
										echo "</tr>";
										echo "<tr>";
										$i=0;
									}
								}
								echo "</tr>";
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