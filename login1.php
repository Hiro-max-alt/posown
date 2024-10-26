<?php 
session_start();

include "database.php";



if (isset($_POST['usernameInput']) && isset($_POST['passwordInput']) ){


function validate($data){


    $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


    $username = validate($_POST['usernameInput']);
    $password = validate($_POST['passwordInput']);

    if (empty($username)) {
        header("Location: index.php?error =User Name is required");
        exit();
    }else if(empty($password)){
        header("Location: index.php?error=Password is required");
        exit();
    } else {

        $sql = "SELECT * FROM  accounts WHERE username = '$username' AND password = '$password'";

        $result = mysqli_query($conn,$sql);


        if (mysqli_num_rows($result) ===1 ){
            
            $row = mysqli_fetch_assoc($result);

            if($row['username'] === $username && $row['password'] === $password){
                $_SESSION['username'] = $row['username'];
            	//$_SESSION['name'] = $row['name'];
            	$_SESSION['userID'] = $row['userID'];
            	header("Location: home.php");
		        exit();
            }
		}else{
			header("Location: index.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}

?>