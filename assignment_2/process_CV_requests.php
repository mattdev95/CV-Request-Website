<?php

require_once "db.php";
	// below code checks whether the form is submitted
	// using the POST method or not

	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		// the form is submitted using the POST method
		// now proceed to process the form's data

		$errTitle = $errForename = $errSurname = $errEmail = $errCompanyName = $errCVtype = "";
		$title = $forename = $surname = $email = $companyname = $usercomment = $cvtype=  "";

    $title         = mysqli_real_escape_string($db_connection, $_POST["title"]);
		  $forename           = mysqli_real_escape_string($db_connection, $_POST["forename"]);
			  $surname           = mysqli_real_escape_string($db_connection, $_POST["surname"]);
        	$email          = mysqli_real_escape_string($db_connection, $_POST["emailid"]);
						$companyname    = mysqli_real_escape_string($db_connection, $_POST["company"]);
					$usercomment =    mysqli_real_escape_string($db_connection, $_POST["usercomment"]);
    	$cvtype   = mysqli_real_escape_string($db_connection, $_POST["chosencv"]);

	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta name="description" content="Matthew's cv requests">
<meta name="author" content="Matthew Edwards">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/process_CV_requests.css">
<link href="https://fonts.googleapis.com/css?family=Noto+Serif&display=swap" rel="stylesheet" type="text/css">
	<title>CV Requested</title>
</head>
<body>
	<div id="container">
		<div id="home_link">
	      <a href="assignment_2/web_form.html">
	      <img border="0" alt="Go back to the web form" src="images/back.png" width="50" height="50">
	      </a>
    </div>
		<br>
		<br>
<div id="message_style">
<?php
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$qry = "insert into cv_requests(title, forename, surname, your_email_id, your_company_name, user_comment ,cv_requested)
				values('$title', '$forename', '$surname', '$email', '$companyname', '$usercomment', '$cvtype');";

		$res = $db_connection->query($qry);
		if($res)
		{

			echo "<p>Thank you <strong>".$forename."</strong> for requesting to see my CV.</p>";
			echo "<p>Your Company Name: <strong>".$companyname."</strong></p>";
            echo "<p>Your Comment: ".$usercomment."</p>";
            echo "<p><a href='files/";

            if ($cvtype === 'short')
                echo "Short_CV";
            else
                echo "Long_CV";
            echo ".pdf' target='_blank'>View my ".$cvtype." CV</a></p>";
			exit();
		}
		else
		{
			echo "<p>Error occurred, please try again later.</p>";
			exit();
		}
	}
$db_connection->close();
?>
</div>
</div>
</body>
</html>
