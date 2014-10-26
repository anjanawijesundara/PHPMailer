require ('vendor/autoload.php');

$FROM_NAME=”from_name”;
$FROM_EMAIL=”from_email@gmail.com”

$REPLY_EMAIL=”reply@gmail.com”;
$REPLY_NAME=”Reply Name”;

$CUSTOMER_EMAIL =”john@doye.com”
$CUSTOMER_NAME=”John Doye”;

$CC_EMAIL = 'cc_email';
$CC_NAME = “cc_name”;

$GMAIL_USER_NAME=”username”;
$GMAIL_PASSWORD =”password”;

$Subject=”PHPMailer Email”;

$Message=”<h3>Site point PHPMailer tutorial</h3> <p>This tutorial will teach you how to send a email with PHPMAiler library</p><h4>Happy coding </h4>”;

$mail = new PHPMailer(true);
$mail->IsSMTP();

try{
$mail->SMTPDebug  = true;              
$mail->SMTPAuth   = true;               
$mail->SMTPSecure = "tls";              
$mail->Host       = "smtp.gmail.com";   
$mail->Port       = 587;                
$mail->Username   = $GMAIL_USER_NAME;                           
$mail->Password   = $GMAIL_PASSWORD;    
$mail->SetFrom(FROM_EMAIL,FROM_NAME);                        
$mail->AddReplyTo($REPLY_EMAIL, $REPLY_NAME);  
$mail->AddAddress($CUSTOMER_EMAIL, $CUSTOMER_NAME);          
$mail->AddCC($CC_EMAIL,$CC_NAME);      
$mail->Subject = $Subject;                                    
$mail->MsgHTML($Message);                                     
$mail->Send();        

} catch (phpmailerException $e) {
    	echo $e->errorMessage();
} catch (Exception $e) {
    	echo $e->getMessage(); 
}
