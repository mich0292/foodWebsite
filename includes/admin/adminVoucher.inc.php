<?php  
    //For Connection of PHP Data Objects(PDO)
    function setConnectionInfo(){
        $connString='mysql:host=localhost;dbname=sushisamadb';
        $user='root';
        $password='';
        //Actual connection to database with this line
        $pdo=new PDO($connString, $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }

    function readVoucher(){
        $pdo=setConnectionInfo();
        //Assign menu query to sql
        $sql='SELECT * FROM promo';
        //Execute sql (statement hold the result of the query)
        if ( $statement=$pdo->query($sql) ){
            return $statement;
        } 
        else{
            $errorMessage = "Error entering data:".mysqli_error($link)."<br>";
            session_unset(); 
            session_destroy(); 
            header("Location: Admin-Voucher.php?sql_error");
            exit();
        }
        $pdo = null;
    }


    /*********************************************************************************************
	*									Destroy Voucher										 *
	*********************************************************************************************/
	function deleteVoucher($ID_number){ 
		$pdo=setConnectionInfo();
		$sql="DELETE FROM promo WHERE voucherID ='$ID_number'";
		if ( $statement=$pdo->prepare($sql)){
			$statement->execute();
			session_unset(); 
			session_destroy(); 
			header("Location: Admin-Voucher.php?deleteorder=success");
			exit();	
		} else{
			$errorMessage = "Error entering data:".mysqli_error($link)."<br>";
			session_unset(); 
			session_destroy(); 
			header("Location: Admin-Voucher.php?sql_error");
			exit();
		}
		$pdo = null;	
	}
	
	if ( isset($_POST['confirmDeletion']) ){
		$getID = $_POST['voucherID'];
		deleteVoucher($getID);
    } 
    
    /*********************************************************************************************
	*									Add Voucher										 *
	*********************************************************************************************/
    if(isset($_POST['voucherbutton'])){
    
        $promoCode = $_POST['code'];
        $promoType = $_POST['type'];
        $promoPrice = $_POST['price'];
        $promoActive = $_POST['active'];

        if(!empty($promoCode) &&  !empty($promoType) &&  !empty($promoPrice) &&  !empty($promoActive) ){
            $sql = "INSERT INTO promo (promo_code,promo_type,promo_price,promo_active) VALUE (?,?,?,?)";
            $stmt = mysqli_stmt_init($conn);
            
            if (mysqli_stmt_prepare($stmt, $sql)){
                mysqli_stmt_bind_param($stmt, "ssfi" ,  $promoCode,  $promoType,  $promoPrice,  $promoActive);
                mysqli_stmt_execute($stmt);
				session_unset(); 
				session_destroy(); 
				header("Location: home.php?voucher=success");
                exit();
			}else {
				$errorMessage = "Error entering data:".mysqli_error($link)."<br>";
				session_unset(); 
				session_destroy(); 
				header("Location: home.php?sql_error");
				exit();
			}


        }

    
    else{
        //If the information provided is incomplete -> Indicate which field needs to be filled + keep what the user already input!
        if (empty($_POST['code'])) {
            $_SESSION['codeInput'] = "";
            $_SESSION['codeErr'] = "Code is required";
            $_SESSION['codeClass'] = "has-error"; 
        } else {
            $_SESSION['codeInput'] = $promoCode;
            $_SESSION['codeErr'] = "";
            $_SESSION['codeClass'] = "";
        }

        if (empty($_POST['type'])) {
            $_SESSION['typeInput'] = "";
            $_SESSION['typeErr'] = "Type is required";
            $_SESSION['typeClass'] = "has-error"; 
        } else {
            $_SESSION['typeInput'] = $promoType;
            $_SESSION['typeErr'] = "";
            $_SESSION['typeClass'] = "";
        }

        if (empty($_POST['price'])) {
            $_SESSION['priceInput'] = "";
            $_SESSION['priceErr'] = "Code is required";
            $_SESSION['priceClass'] = "has-error"; 
        } else {
            $_SESSION['priceInput'] = $promoPrice;
            $_SESSION['priceErr'] = "";
            $_SESSION['priceClass'] = "";
        }

        if (empty($_POST['active'])) {
            $_SESSION['activeInput'] = "";
            $_SESSION['activeErr'] = "Code is required";
            $_SESSION['activelass'] = "has-error"; 
        } else {
            $_SESSION['activeInput'] = $promoActive;
            $_SESSION['activeErr'] = "";
            $_SESSION['activelass'] = "";
        }

        header("Location: home.php?emptyfields#section-Voucher");
			exit();	
    }mysqli_close($conn);	

    }	
    else if(isset($_POST['cancelbutton'])){	
		//Destroy session and clear the variables
		session_unset(); 
		session_destroy(); 
		header("Location: home.php?cancel#section-Voucher");
		exit();	
	}
?>