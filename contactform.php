<?php
session_start();
$test = $_POST[ 'submit' ];

if ( isset( $_POST[ "captcha" ] ) && $_POST[ "captcha" ] != "" && $_SESSION[ "code" ] == $_POST[ "captcha" ] ) {

	
		$to = "karanbojappa7@gmail.com";
		$message = "<table border='0'>";
		$message .= "<tr>";
		$message .= "<td>";
		$message .= "Name : " . $_POST[ 'name' ];
		$message .= "</td>";
		$message .= "</tr>";

		$message .= "<tr>";
		$message .= "<td>";
		$message .= "Email : " . $_POST[ 'mail' ];
		$message .= "</td>";
		$message .= "</tr>";
    
		$message .= "<tr>";
		$message .= "<td>";
		$message .= "Number : " . $_POST[ 'num' ];
		$message .= "</td>";
		$message .= "</tr>";

		$message .= "<tr>";
		$message .= "<td>";
		$message .= "Message : " . $_POST[ 'mess' ];
		$message .= "</td>";
		$message .= "</tr>";
		$message .= "</table>";
    
		$message .= "<tr>";
		$message .= "<td>";
		$message .= "Subject : " . $_POST[ 'sub' ];
		$message .= "</td>";
		$message .= "</tr>";
		$message .= "</table>";  
    
		$message .= "<tr>";
		$message .= "<td>";
		$message .= "Address: " . $_POST[ 'add' ];
		$message .= "</td>";
		$message .= "</tr>";
		$message .= "</table>";    
		$message .= "<tr>";
		$message .= "<td>";
		$message .= "Product: " . $_POST[ 'product' ];
		$message .= "</td>";
		$message .= "</tr>";
		$message .= "</table>";

		$subject = "Biotic Life Science";

		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type:text/html;";
		$headers .= "charset=iso-8859-1\r\n";
		$headers .= "From:" . $_POST[ 'mail' ];
		"\r\n";

		mail( $to, $subject, $message, $headers );

		$message1 = "<table border=0 style='font-family:Arial; font-size:12px;'>";
		$message1 .= "<tr><td colspan=2><b></b>Dear " . $_POST[ 'name' ] . "<br><br>\n Greetings from GSS Pharma Services.<br><br>Thank you for contact us.<br><br>Our team will contact you for the further requirements.<br><br> Thank you .<br><br></td></tr>";
		$message1 .= "<tr><td colspan=2>Regards <br>GSS Pharma Services Team</td></tr>";
		$message1 .= "<tr><td colspan=2><br>NB. This is a system generated mail, Please donot reply.</td></tr>";
		$message1 .= "</table>";

		$subject1 = "GSS Pharma Services Contact Us Info";

		$to1 = $_POST[ 'mail' ];

		$headers1 = "MIME-Version: 1.0\r\n";
		$headers1 .= "Content-type:text/html;";
		$headers1 .= "charset=iso-8859-1\r\n";
		$headers1 .= "From: karanbojappa7@gmail.com \r\n";

		mail( $to1, $subject1, $message1, $headers1 );
		echo( "<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Your form is successfully submitted.')
//                window.location.reload();
				</SCRIPT>" );
	

} else {
	header( 'Location:cont_error.html' );
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}

?>