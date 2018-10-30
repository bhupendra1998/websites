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
                    <h3>Add Component Info</h3>
                </div>

                <!--<div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
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
                            <h2>add component info</h2>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <form name="form1" action="" method="post" class="col-lg-6">
                            <table class="table table-bordered">
                                <tr>
                                    <td><input type="text"class="form-control" placeholder="component name" name="cname" required=""> </td>
                                </tr>
                                <tr>
                                    <td><input type="text"class="form-control" placeholder="purchase date" name="c_purchase_date" required=""> </td>
                                </tr>
                                <tr>
                                    <td><input type="text"class="form-control" placeholder="price" name="c_price" required=""> </td>
                                </tr>
                                <tr>
                                    <td><input type="text"class="form-control" placeholder="quantity" name="c_qyt" required=""> </td>
                                </tr>
                                <tr>
                                    <td><input type="text"class="form-control" placeholder="available quantity" name="a_qyt"  required=""> </td>
                                
                                <tr>
                                    <td><input type="submit" name="submit1" class="btn btn-default submit" value="insert component details" style="background-color: blue; color: white" >
                                </tr>

                            </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
<?php
if (isset($_POST["submit1"]))
{
    mysqli_query($link,"insert into add_comp values ('','$_POST[cname]','$_POST[c_purchase_date]','$_POST[c_price]','$_POST[c_qyt]','$_POST[a_qyt]','$_SESSION[librarian]')")

?>
<script type="text/javascript">
    alert("component inserted successfully");
</script>
<?php
}

include "footer.php";
?>