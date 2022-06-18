
<!DOCTYPE html>
<html lang="en">
<head>


<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
  window.OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: "c9cf8616-2984-464e-8e19-9ca78839d9bc",
    });
  });
</script>

</head>
<body>


</body>
</html>
<!-- 
// session_start();
// //error_reporting(0);bbms
// session_regenerate_id(true);
//include('includes/config.php');
// -------------------------------------------------------------------

//prompt function
// function prompt($prompt_msg){
//    echo("<script type='text/javascript'> var answer = prompt('".$prompt_msg."'); </script>");

// $answer = "<script type='text/javascript'> document.write(answer); </script>";
// return($answer);
// }

// //program
// $prompt_msg = "Please type your name.";
// $name = prompt($prompt_msg);
// echo $name;

// if(isset($_COOKIE['mail'])){
// 	$name = $_COOKIE['mail'];
// 			$sql="INSERT INTO  public_email(PublicEmail) 
// 			 VALUES(:email)";
// 			 $query = $dbh->prepare($sql);
// 			 $query->bindParam(':email',$name,PDO::PARAM_STR);
//             $query->execute();
// 			 $lastInsertId = $dbh->lastInsertId();
			
// 			if($lastInsertId)
// 		 {
// 			 	
// 		 		<script>alert("Your Data Submitted Successfully !");</script>

// 			 }
// 		 else 
// 			{
// 				
// 					<script>alert("Something went wrong. Please try again!");</script>
// 				
// 			}  
//           	// }	


// 		}

// function askName() {

// var user=localStorage.getItem('email');
// if(user){alert(user);} 
// }
// else{
// let email = prompt("To make your time on this website better, please enter your email.");

//  if (email != null) { 


// // Creating a cookie after the document is ready
// $(document).ready(function () {
//     createCookie("mail",email, "10");
// });
   
// // Function to create the cookie
// function createCookie(name, value, sec) {
//     var expires;
      
//     if (sec) {
//         var date = new Date();
//         date.setTime(date.getTime() + (sec*1000));
//         expires = "; expires=" + date.toGMTString();
//     }
//     else {
//         expires = "";
//     }
      
//     document.cookie = escape(name) + "=" + 
//         escape(value) + expires + "; path=/";
// }

// user=localStorage.setItem('email', email)
//document.getElementById("userpara").innerHTML = "Hello, " + email; 
// } 

// else { 
//document.getElementById("noUser").innerHTML = "Welcome, Stranger!"; 
// }}
//------------------------------------------------------------------------------->
<!-- //     let email = sessionStorage.getItem('email');

// if (email === null) {
//     email = prompt("Enter your E-mail For Blood Information");
// }
//     if (email != null) {
//         sessionStorage.setItem('email', email);

//     } 
//     else if(email ===  null || email === " ")
//     {
//         email = prompt("Enter your E-mail For Blood Information");
//     }
//     else {
//         email = prompt("Enter your E-mail For Blood Information");
//     }
// } --> 
