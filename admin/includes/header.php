<style>
	.logo img{
		width:150px;
		height:65px;
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

 <nav class=" navbar   navbar-toggleable-md text-right   navbar-inverse fixed-top">

		   <button class="navbar-toggler navbar-toggler-right btn-md btn-success " type="button" data-toggle="collapse" data-target="#navbarExample" >
            <span ><i class="fa fa-bars fa-4x" aria-hidden="true"></i>
</span>
        </button>
		<a class="logo"  href = "index.php"><img src ="../images/blood_berry1.PNG"></a> <!--Logo Design-->
       <div class="collapse" id="navbarExample">
                <ul class="ts-sidebar-menu  btn-group  ml-auto ">
				
								<li class="ts-label text-white my-5" style="font-size:22px">Main</li>
								<li><a class="btn" style="font-size:20px" href="dashboard.php"><i class="fa fa-dashboard text-white"></i> Dashboard</a></li>
			
								<li><a class="btn" style="font-size:20px"  href="#"><i class="fa fa-files-o  text-white"></i> Blood</a>
					<ul>
								<li><a class="btn" style="font-size:20px" href="blood-request.php">Blood Request</a></li>
								<li><a class="btn" style="font-size:20px"  href="manage-bloodgroup.php">Manage Blood</a></li>
					</ul>
								</li>


								<li><a class="btn btn-primary-hover" style="font-size:20px" href="add-donor.php"><i class="fa fa-edit text-white"></i> Add Donor</a></li>
								<li><a class="btn" style="font-size:20px" href="donor-list.php"><i class="fa fa-users text-white" ></i> Donor List</a></li>
				
								<li><a class="btn" style="font-size:20px"  href="add-agent.php"><i class="fa fa-edit text-light"></i> Add Agent</a></li>
								<li><a class="btn" style="font-size:20px"  href="agent-list.php"><i class="fa fa-users text-white" ></i> Agent List</a></li>

								<li><a class="btn" style="font-size:20px"  href="manage-conactusquery.php"><i class="fa fa-envelope text-white" ></i>Messages</a></li>
								<li><a class="btn" style="font-size:20px"  href="manage-pages.php"><i class="fa fa-files-o text-white"></i> Manage Pages</a></li>
								<li><a class="btn" style="font-size:20px"  href="update-contactinfo.php"><i class="fa fa-files-o text-white"></i> Update Contact</a></li>
								<li><a class="btn" style="font-size:20px"  href="change-password.php">Change Password</a></li>
								<li><a class="btn" style="font-size:20px"  href="logout.php">Logout</a></li>
				

                 
                </ul>
            </div>
    </nav>
