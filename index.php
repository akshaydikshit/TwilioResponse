<?php
require_once './autoload.php';
use Twilio\Twiml;
$body = $_REQUEST['Body'];
$from = $_REQUEST['From'];
$from1 = substr($from, -1);
$regnum = 8;

if( ($from == '+19292402278') && (stripos($body, '2017-10-01' )!== FALSE) && (stripos($body, 'attendance' )!== FALSE)){
 $response = new Twiml();
$message = $response->message("Your ward was Present on this date.");
}
else if( ($from == '+19292402278') && (stripos($body, '2017-10-02' )!== FALSE) && (stripos($body, 'attendance' )!== FALSE)){
 $response = new Twiml();
$message = $response->message("Your ward was Present on this date.");
}

else if( ($from == '+19292402278') && (stripos($body, '2017-10-03' )!== FALSE) && (stripos($body, 'attendance' )!== FALSE)){
 $response = new Twiml();
$message = $response->message("Your ward was Absent on this date.");
}

else if( (stripos($from1, $regnum )!== FALSE) && (stripos($body, '2017-10-01' )!== FALSE) && (stripos($body, 'attendance' )!== FALSE)){
 $response = new Twiml();
$message = $response->message("Sorry this is not a registered number. Please try again with a registered number.");
}

else if( ($from == '+16464645046') && (stripos($body, '2017-10-02' )!== FALSE) && (stripos($body, 'attendance' )!== FALSE)){
 $response = new Twiml();
$message = $response->message("Sorry this is not a registered number. Please try again with a registered number.");
}

else if( ($from != '+19292402278') && (stripos($body, '2017-10-03' )!== FALSE) && (stripos($body, 'attendance' )!== FALSE)){
 $response = new Twiml();
$message = $response->message("Sorry this is not a registered number. Please try again with a registered number.");
}

else if( ($from == '+19292402278') && (stripos($body, '2017-10-04' )!== FALSE) && (stripos($body, 'attendance' )!== FALSE)){
 $response = new Twiml();
$message = $response->message("Your ward was Absent on this date.");
}

else {
 $response = new Twiml();
 $message = $response->message($from1);

}

echo $response;
?>
