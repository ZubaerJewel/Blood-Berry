<?php

error_reporting(0);
include('includes/config.php');
 ?>
 
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">	
	<title>Blood Berry | Public Donor List  </title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/modern-business.css" rel="stylesheet"> 
    
    

	<!-- Bootstrap Resposive Datatables -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
	<link href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap4.min.css" rel="stylesheet"> 

	
  <style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>

</head>

<body>
	<?php include('includes/header.php');?>

	<div class="px-5">
		
		
			<div class="container   pb-5">

				<div class="row pb-5">
					<div class="col-md-12">

						<div class=" text-center btn page-title text-info p-5" style="font-size: 26px">Donors Information</div>

						<!-- Zero Configuration Table -->
							<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
							else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
				<table id="zcbt" class="display table-md table table-striped table-bordered table-hover dt-responsive nowrap "style=" font-size:12px;"  width="100%">
									<thead>
										<tr>
										<th>SL</th>
										<th>Profile</th>
											<th>Name</th>
											<th>Gender</th>
											<th>Age</th>											
											<th>Blood Group</th>
											<th>Mobile No</th>											
											<th>Email</th>
											<th>District</th>
											<th>About Donor</th>
											<th  >...</th>											
									</tr>
									</thead>
									<tfoot>
										<tr>
											<th>SL</th>
											<th>Profile</th>
											<th>Name</th>
											<th>Gender</th>
											<th>Age</th>											
											<th>Blood Group</th>
											<th>Mobile No</th>											
											<th>Email</th>											
											<th>District</th>
											<th>About Donor </th>
											<th  >...</th>											
															
										</tr>
									</tfoot>
									<tbody>

<?php $sql = "SELECT * from  tblblooddonars ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{				?>	
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td><img style="width:50px ;" style="height: 40px" src="images/<?php echo htmlentities($result->Profile);?>"></td>
											<td><?php echo htmlentities($result->FullName);?></td>
											<td><?php echo htmlentities($result->Gender);?></td>
											<td><?php echo htmlentities($result->Age);?></td>
											<td><?php echo htmlentities($result->BloodGroup);?></td>
											<td><?php echo htmlentities($result->MobileNumber);?></td>
											<td><?php echo htmlentities($result->EmailId);?></td>
											<td><?php echo htmlentities($result->Address);?></td>
											<td><?php echo htmlentities($result->Message);?></td>
										<td>
<?php if($result->status==1)
{?>
<a class=" text-success"> Available</a> 
<?php } else {?>

<a class="text-muted" > Unavailable</a>

<?php } ?>
</td>

										</tr>
										<?php $cnt=$cnt+1; }} ?>
										
									</tbody>
								</table>
				</div>
	</div>
</div>
	    <!-- Footer -->
  <?php include('includes/footer.php');?>

	<!-- Datatables Loading Scripts -->
	
    
    
    
    
    

	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
		<!-- Datatables Loading Scripts -->
	<script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>	
	<script src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap4.min.js"></script>

	
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	
		<script>
			$(document).ready(function () {
    $('#zcbt').DataTable();
});
	</script>
</body>
</html>
