<?php
error_reporting(0);
include('includes/config.php');


 ?>
<?php
if(isset($_POST['submit']))
  {
		$orgname=$_POST['orgname'];
		$orgmobile=$_POST['orgmnumber'];

		$orgemail=$_POST['orgemail'];

		$bloodgroup=$_POST['bloodgroup'];
		$nobbag=$_POST['nobbag'];
	
			$sql="INSERT INTO  tblbloodrequest(OrgName,OrgMobileNumber,OrgEmail,BloodGroup,NoBloodBag) 
			VALUES(:orgname,:orgmobile,:orgemail,:bloodgroup,:nobbag)";
			$query = $dbh->prepare($sql);
			$query->bindParam(':orgname',$orgname,PDO::PARAM_STR);
			$query->bindParam(':orgmobile',$orgmobile,PDO::PARAM_STR);
			$query->bindParam(':orgemail',$orgemail,PDO::PARAM_STR);
			
			$query->bindParam(':bloodgroup',$bloodgroup,PDO::PARAM_STR);
			$query->bindParam(':nobbag',$nobbag,PDO::PARAM_STR);
			$query->execute();
			$lastInsertId = $dbh->lastInsertId();
			if($lastInsertId)
			{
				$msg="Thank You For Your Request.Blood Berry Contact with you as soon possible.";
				?>
					<script>alert("Your Request Submitted Successfully !");</script>
				<?php
			}
			else 
			{
				$error="Something went wrong. Please try again";
				?>
					<script>alert("Something went wrong. Please try again!");</script>
				<?php
			}

}
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
	
	<title>Blood Berry |Storage Blood </title>

	
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

			<div class="container">
		<div class="content-wrapper">

				<div class="row">
					<div class="col-md-6">

						

						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading pt-5 text-info">Stocked  Blood</div>
							<div class="panel-body">
							
								<table id="zcbt" class="display table table-striped table-bordered table-hover table-responsive" cellspacing="0" width="100%">
									<thead>
										<tr>
										<th>SL</th>
												<th>Blood Groups</th>
											<th>Storage</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
										<th>SL</th>
											<th>Brand Name</th>
											<th>Storage</th>
										</tr>
										</tr>
									</tfoot>
									<tbody>

<?php $sql = "SELECT BloodGroup,StorageNumber from  tblbloodgroup ";
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
											<td><?php echo htmlentities($result->BloodGroup);?></td>
											<td><?php echo htmlentities($result->StorageNumber);?></td>


										</tr>
										<?php $cnt=$cnt+1; }} ?>
										
									</tbody>
								</table>

						

							</div>
						</div>

					

					</div>
					<div class="col-md-6">
					<div class="panel panel-default">
									<div class="panel-heading">
										<p class="btn page-title text-info mt-5" style="font-size: 16px">If You Are An Blood Berry Agent Contact Us For Blood</p>
									</div>
											<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
											else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>

									<div class="panel-body">
								<form method="post" class="form-horizontal" >
						
					    
									<div class="font-italic">Org. Name: </div>
									<div><input type="text" name="orgname" class="form-control"></div>
									<div class="font-italic">Org. Mobile Number:  <span style="color:red">*</span></div>
									<div><input type="text" name="orgmnumber" class="form-control" required></div>
						
									<div class="font-italic">Org. E-Mail :  <span style="color:red">*</span></div>
									<div><input type="text" name="orgemail" class="form-control" required></div>
									
									<div class="font-italic">Blood Group :  <span style="color:red">*</span></div>
									<div><input type="text" name="bloodgroup" class="form-control" required></div>

									<div class="font-italic">Number of Blood Bag :  <span style="color:red">*</span></div>
									<div><input type="text" name="nobbag" class="form-control" required></div>
									
									<div><input type="submit" name="submit" class="btn btn-primary mt-3" value="Request" style="cursor:pointer"></div>
								</form>
					</div>
				</div>
</div>
</div>
			</div>
		</div>
  <?php include('includes/footer.php');?>

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
	
</body>
</html>

