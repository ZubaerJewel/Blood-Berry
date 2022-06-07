<?php 
session_start();
//error_reporting(0);bbms
session_regenerate_id(true);
include('includes/config.php');

if(strlen($_SESSION['alogin'])==0)
	{	
	header("Location: index.php"); //
	}
	else{?>
<table border="1">
									<thead>
										<tr>
										<th>SL</th>
											<th>Name</th>
											<th>Age</th>
											<th>Gender</th>
											<th>Blood Group</th>
											<th>Organization Name</th>
											<th>Org. Contact</th>
											<th>Org. Email</th>											
											<th>District</th>
											<th>About Organization </th>
										
										</tr>
									</thead>

<?php 
$filename="Agent list";
$sql = "SELECT * from  tbl_agent ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{				

	echo '  
		<tr>  
			<td>'.$cnt.'</td> 
			<td>'.$complainNumber= $result->FullName.'</td> 
			<td>'.$Gender= $result->Gender.'</td> 
			<td>'.$Age= $result->Age.'</td> 
			<td>'.$BloodGroup=$result->BloodGroup.'</td>
			<td>'.$BloodGroup=$result->OrganizationName.'</td>	
			<td>'.	$MobileNumber= $result->MobileNumber.'</td> 
			<td>'.$EmailId= $result->EmailId.'</td> 			
			<td>'.$BloodGroup=$result->Address.'</td>	 
			<td>'.$BloodGroup=$result->Message.'</td>	
   					
</tr>  
';
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=".$filename."-report.xls");
header("Pragma: no-cache");
header("Expires: 0");
			$cnt++;
			}
	}
?>
</table>
<?php } ?>