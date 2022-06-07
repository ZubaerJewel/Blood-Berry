<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{ 

if(isset($_POST['submit']))
  {
$fullname=$_POST['fullname'];
$mobile=$_POST['mobileno'];
//profile picture  start
			$profile = $_FILES["profile_pic"]; 
			$profile_name = $profile['name'];
			$profile_tmp_name = $profile['tmp_name'];
			
			$location = "../images/";
			move_uploaded_file($profile_tmp_name,$location.$profile_name);
			
			//profile picture  end
$email=$_POST['emailid'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$blodgroup=$_POST['bloodgroup'];
$address=$_POST['address'];
$message=$_POST['message'];
$status=1;
			$sql="INSERT INTO  tblblooddonars(FullName,MobileNumber,Profile,EmailId,Password,Age,Gender,BloodGroup,Address,Message,status) 
			VALUES(:fullname,:mobile,:profile_name,:email,:password,:age,:gender,:blodgroup,:address,:message,:status)";
			$query = $dbh->prepare($sql);
			$query->bindParam(':fullname',$fullname,PDO::PARAM_STR);
			$query->bindParam(':mobile',$mobile,PDO::PARAM_STR);
			$query->bindParam(':profile_name',$profile_name,PDO::PARAM_STR);
			$query->bindParam(':email',$email,PDO::PARAM_STR);
			$query->bindParam(':password',$password,PDO::PARAM_STR);
			$query->bindParam(':age',$age,PDO::PARAM_STR);
			$query->bindParam(':gender',$gender,PDO::PARAM_STR);
			$query->bindParam(':blodgroup',$blodgroup,PDO::PARAM_STR);
			$query->bindParam(':address',$address,PDO::PARAM_STR);
			$query->bindParam(':message',$message,PDO::PARAM_STR);
			$query->bindParam(':status',$status,PDO::PARAM_STR);
			$query->execute();
			$lastInsertId = $dbh->lastInsertId();
			if($lastInsertId)
			{
				$msg="Your info submitted successfully";
				?>
					<script>alert("Your Data Submitted Successfully !");</script>
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
	
	<title>Blood Berry| Admin Add Donor</title>

	<!-- Font awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="css/style.css">
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
<script language="javascript">
function isNumberKey(evt)
      {
         
        var charCode = (evt.which) ? evt.which : event.keyCode
                
        if (charCode > 31 && (charCode < 48 || charCode > 57) && charCode!=46)
           return false;

         return true;
      }
      </script>
</head>

<body>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
	<?php include('includes/leftbar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">Add Donor</h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Basic Info</div>
<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>

									<div class="panel-body">
<form method="post" class="form-horizontal" enctype="multipart/form-data">

			<div class="row">
								<div class="col-lg-4 mb-4">
									<div class="font-italic">Full Name:  <span style="color:red">*</span></div>
									<div><input type="text" name="fullname" class="form-control" required></div>
								</div>
								

								<div class="col-lg-4 mb-4">
									<div class="font-italic">Profile Picture</div>
									<div><input type="file"  name="profile_pic"></div>
								</div> 
								<div class="col-lg-4 mb-4">
										<div class="font-italic">Gender: <span style="color:red">*</span></div>
									 <div>
										<select name="gender" class="form-control" required>
											<option value="">Select</option>
											<option value="Male">Male</option>
											<option value="Female">Female</option>
										</select>
								     </div>
								</div>
							 
							</div>
							<div class="row">

							
								<div class="col-lg-4 mb-4">
									<div class="font-italic">Mobile Number:  <span style="color:red">*</span></div>
									<div><input type="text" name="mobileno" class="form-control" required></div>
								</div>
								<div class="col-lg-4 mb-4">
									<div class="font-italic">Email Id: </div>
									<div><input type="email" name="emailid" class="form-control"></div>
								</div>
								<div class="col-lg-4 mb-4">
									<div class="font-italic">Age: <span style="color:red">*</span></div>
									<div><input type="text" name="age" class="form-control" required></div>
								</div>
								<!--<div class="col-lg-4 mb-4">
									<div class="font-italic">Password</div>
									<div><input type="password" name="password" class="form-control"></div>
								</div>-->
							</div>

							<div class="row">
							<div class="col-lg-4 mb-4">
									<div class="font-italic">Blood Group<span style="color:red">*</span> </div>
									<div>
										<select name="bloodgroup" class="form-control" required>
											<option  value="">Select</option>		
											<?php $sql = "SELECT * from  tblbloodgroup ";
											$query = $dbh -> prepare($sql);
											$query->execute();
											$results=$query->fetchAll(PDO::FETCH_OBJ);
											$cnt=1;
											if($query->rowCount() > 0)
											{
												foreach($results as $result)
											{               ?>  
											<option value="<?php echo htmlentities($result->BloodGroup);?>"><?php echo htmlentities($result->BloodGroup);?></option>
											<?php }} ?>
										</select>
									</div>
								</div>
								<div class="col-lg-4 mb-4">
									<div class="font-italic">District:  <span style="color:red">*</span></div>
									<div><input type="text" name="address" class="form-control" required></div>
								</div>

								<div class="col-lg-4 mb-4">
									<div class="font-italic">About Yourself:</div>
									<div><textarea class="form-control" name="message" > </textarea></div>
									
								</div>
							</div>

							<div class="row">
								<div class="col-lg-4 mb-4">
								<div><input type="submit" name="submit" class="btn btn-primary" value="submit" style="cursor:pointer"></div>
							</div>



</div>




</form>
									</div>
								</div>
							</div>
						</div>
						
					

					</div>
				</div>
				
			

			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
<?php } ?>