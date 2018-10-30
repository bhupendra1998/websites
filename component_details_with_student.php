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
include "header.php";
include "connection.php";
?>

        

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3></h3>
                    </div>

                    
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Component Details With Students</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
							<?php
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
									echo "<b>"."Total quantity:".$row["c_qty"]."</b>";
									echo "<br>";
									echo "<b>"."available :".$row["available_qty"]."</b>";
									echo "<br>";
									?> <a href="all_students_record.php?c_name=<?php echo $row["c_name"];?>" style= "color:blue">Students Record of This Component</a><?php
									
									
									echo "</td>";
									if($i==4)
									{
										echo "</tr>";
										echo "<tr>";
										$i=0;
									}
								}
								echo "</tr>";
								echo "</table>";
									
								
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