<style>
	.logo img{
		width:150px;
		height:70px;
		float:left;
	}
	nav {
		width:;
	}
</style> 
    <style>
    .navbar-toggler {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    </style>

 <nav class="navbar fixed-top navbar-toggleable-md py-0 px-0 navbar-inverse bg-danger">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
		
		<a class="logo"  href = "index.php"><img src ="images/blood_berry1.PNG"></a> <!--Logo Design-->
        <div class="container">

            <div class="collapse navbar-collapse" id="navbarExample">
                <ul class="btn-group navbar-nav ml-auto ">
				<li class="nav-item">
                        <a   class="btn-danger nav-link text-white" href="index.php">Home</a>
                    </li>
					<li class="nav-item">
                        <a   class="btn-danger nav-link text-white" href="page.php?type=donor">Tips</a>
                    </li>
					<li class="nav-item">
                        <a   class="btn-danger nav-link text-white" href="search-donor.php">Search</a>
                    </li>
					<li class="nav-item">
                        <a   class="btn-danger nav-link text-white" href="become-donar.php">Donor</a>
                    </li>
                    
  <div class="btn-group">
    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
      Registration
    </button>
    <div class="dropdown-menu bg-danger">
      <a class="dropdown-item  text-info" href="become-donar.php">Donor</a>
      <a class="dropdown-item text-info" href="become-agent.php">Agent</a>
    </div>
  </div>

					<li class="nav-item">
                        <a class="btn-danger nav-link text-white" href="contact.php">Contact</a>
                    </li>
					<li class="nav-item">
					
                        <a class="btn-danger nav-link   text-white" href="page.php?type=aboutus">About</a>
                    </li>
					<li class="nav-item">
                        <a class="btn-danger nav-link text-white" href="admin/index.php">Admin</a>
                 
                    </li>
                 
                 
                </ul>
            </div>
        </div>
    </nav>
