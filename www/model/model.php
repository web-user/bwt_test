<?php
defined('MVCproject') or die('Access denied');

// regestration
function registration(){
	// check fields to fill
	$error = '';

	$login = clear($_POST['login']);
	$pass = trim($_POST['pass']);
	$name = clear($_POST['name']);
	$email = clear($_POST['email']);
	$datetime = clear($_POST['datetime']);
	$address = clear($_POST['address']);
	$gender = clear($_POST['gender']);
	$surname = clear($_POST['surname']);


	if( empty($login) ) {
		$error .="<li>Enter login</li>";
	}
	if( empty($pass) ) {
		$error .="<li>Enter password</li>";
	}
	if( empty($name) ) {
		$error .="<li>Enter Name</li>";
	}
	if( empty($email) ) {
		$error .="<li>Enter email</li>";
	}
	if( empty($surname) ) {
		$error .="<li>Enter surname</li>";
	}


	if( empty($error) ){
		// if the fields are filled
		// checking login existence 
		$query = "SELECT customer_id FROM customers WHERE login = '$login' LIMIT 1";
		$res = mysql_query($query) or die(mysql_error());
		if( $row = mysql_num_rows($res) ){
			// если такой логин уже есть
			$_SESSION['reg']['name'] = $name;
			$_SESSION['reg']['email'] = $email;
			$_SESSION['reg']['datetime'] = $datetime;
			$_SESSION['reg']['surname'] = $surname;
			echo "<div class='error'>A user with this login already exists. Please enter a different username</div>";
		}else{
			// If verification is register
			$pass = md5($pass);
			$query = "INSERT INTO customers (name, surname, email, gender, date, login, password)
				VALUES ('$name', '$surname', '$email', '$gender', '$datetime', '$login', '$pass')";
			$res = mysql_query($query) or die(mysql_error());
			if( mysql_affected_rows() > 0 ){
				//if the entry is added
				$_SESSION['auth']['user'] = $name;
				$_SESSION['auth']['customer_id'] = mysql_insert_id();
				$_SESSION['auth']['email'] = $email;
				echo "<div class='success'>Registration completed successfully.</div>";
			}else{
				//if the field is not filled
				$_SESSION['reg']['res'] = "<div class='error'>Error!</div> ";
				$_SESSION['reg']['login'] = $login;
				$_SESSION['reg']['name'] = $name;
				$_SESSION['reg']['email'] = $email;
				$_SESSION['reg']['datetime'] = $phone;
				$_SESSION['reg']['surname'] = $surname;
			}
		}

	}else{
		//if the field is not filled
		echo "<div class='error'>Required fields are not filled:<br> <ul>$error</ul></div> ";
	}

}

//authorization
function authorization(){
    $login = mysql_real_escape_string(trim($_POST['loginauth']));
    $pass = trim($_POST['passauth']);
    
    if(empty($login) OR empty($pass)){
        // if the empty field a login / password
        $_SESSION['auth']['error'] = "Fields username / password to be filled!";
    }else{
        // if the received data from the fields of the login / password
        $pass = md5($pass);
        
        $query = "SELECT customer_id, name, email FROM customers WHERE login = '$login' AND password = '$pass' LIMIT 1";
        $res = mysql_query($query) or die(mysql_error());
        if(mysql_num_rows($res) == 1){
            // If authorization is successful
            $row = mysql_fetch_row($res);
            $_SESSION['auth']['customer_id'] = $row[0];
            $_SESSION['auth']['user'] = $row[1];
            $_SESSION['auth']['email'] = $row[2];
        }else{
            // if the wrong login / password
            $_SESSION['auth']['error'] = "Username / password is incorrect!";
        }
    }
}