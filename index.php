<?php
error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blood Berry</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
    <link href="css/modern-business.css" rel="stylesheet">
    <style>
    .navbar-toggler {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    .carousel-item.active,
    .carousel-item-next,
    .carousel-item-prev {
        display: block;
    }
    </style>

</head>

<body>

    <!-- Navigation -->
<?php include('includes/header.php');?>
<?php include('includes/slider.php');?>
   
    <!-- Page Content -->
    <div class="">
		<div class="container alert alert-info my-4 text-center text-uppercase alert-dismissible">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
				<strong>Welcome!</strong> To Blood Berry.
		</div>
		
	
        <!-- Marketing Icons Section -->
		
        <div class="container-fluid row p-5">
            <div class="col-lg-4 mb-4">
                <div class="card">
						<button type="button" class="btn btn-outline-danger  card-header">The Need For Blood!</button>
							<!-- <h4 class="card-header"></h4>-->
							<p class="card-text  mt-3" style="padding-left:2%">You could search a specific blood that need for your patients.
								if you need any help contact with us direct through this website by contact us option.
							</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
					<button type="button" class="btn btn-outline-danger  card-header">Blood Tips For Donor</button>
						<p class="card-text  mt-3" style="padding-left:2%">It's always a good idea to be fully hydrated before giving blood. 
							We recommend you drink at least three glasses of water in the three hours before donation and also have another 500ml drink of water while you wait. 
							This might seem like a lot, but research has shown the more hydrated you are, the less likely you are to feel faint during and after your donation.
						</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
					<button type="button" class="btn btn-outline-danger card-header">Who You Could Help!</button>
						<p class="card-text mt-3" style="padding-left:2%"> Blood is essential to help patients survive surgeries, cancer treatment, chronic illnesses, and traumatic injuries
							. This lifesaving care starts with one person making a generous donation.
							The need for blood is constant. But only about 3% of age-eligible people donate blood yearly
						</p>
                </div>
            </div>
        </div>
		</div>
        <!-- /.row -->

        <!-- Portfolio Section -->
		<div class=" card pb-4">
			<button type="button container" class="btn btn-outline-danger  card-header">Some Of The Available Donar</button>
		  </div>
        <div class=" row">
                   <?php 
$status=1;
$sql = "SELECT * from tblblooddonars where status=:status order by rand() limit 8";
$query = $dbh -> prepare($sql);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
	foreach($results as $result)
		{ ?>

					<div class="col-lg-3 col-sm-6 portfolio-item">
						<div class="card h-50">
							<a href="#"><img class="card-img-top img-fluid  rounded-circle"  width="160" height="80" src="images/<?php echo htmlentities($result->Profile);?>" alt="" ></a>
							<div class="card-block">
								<h4 class="card-title"><a href="#"><?php echo htmlentities($result->FullName);?></a></h4>
										<p class="card-text"><b>Email Address :</b> <?php echo htmlentities($result->EmailId);?></p>
										<p class="card-text"><b>Mobile Number :</b> <?php echo htmlentities($result->MobileNumber);?></p>
										<p class="card-text"><b>Blood Group :</b> <?php echo htmlentities($result->BloodGroup);?></p>
										<p class="card-text"><b>  Gender :</b> <?php echo htmlentities($result->Gender);?></p>
										<p class="card-text"><b>Age :</b> <?php echo htmlentities($result->Age);?></p>
										<p class="card-text"><b>Address :</b> <?php echo htmlentities($result->Address);?></p>
							</div>
						</div>
					</div>

					<?php }} ?>
				  
		 



				</div>
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-8">
              <div class=" card ">
			<button type="button container" class="btn btn-outline-danger  card-header">About Blood Group</button>
		  </div>
          <p class="pt-3">  blood group of any human being will mainly fall in any one of the following groups.</p>
                <ul>               
					<li>A positive or A negative</li>
					<li>B positive or B negative</li>
					<li>O positive or O negative</li>
					<li>AB positive or AB negative.</li>
                </ul>
                <p class="pb-3">A healthy diet helps ensure a successful blood donation, and also makes you feel better! Check out the following recommended foods to eat prior to your donation.</p>
            </div>
            <div class="col-lg-4">
                <img class="img-fluid rounded" src="images/banner3.png" alt="">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="row pb-5">
            <div class="col-md-8 ">
						<div class=" card">
								<button type="button container" class="btn btn-outline-danger  card-header">UNIVERSAL DONORS AND RECIPIENTS</button>
						</div>
           
                <p class="pt-3 ">
					The most common blood type is O, followed by type A.

					Type O individuals are often called "universal donors" since their blood can be transfused into persons with any blood type. 
					Those with type AB blood are called "universal recipients" because they can receive blood of any type.
				</p>
            </div>
            <div class="col-md-4  card">
              <a class=" btn bg-danger text-white " href="become-donar.php">Become A Donor</a>
            </div>
        </div>

    <!-- /.container -->

    <!-- Footer -->
  <?php include('includes/footer.php');?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
