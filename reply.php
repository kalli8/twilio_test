<?php
 
 	require "twilio-php-master/Services/Twilio.php";
 
    // Step 2: set our AccountSid and AuthToken from www.twilio.com/user/account
    $AccountSid = "ACb4601ebfba5a649c4aae1ccbf6b1ee8f";
    $AuthToken = "a4d6a5026b373ccd8cd7405d8026adfa";
 
    // Step 3: instantiate a new Twilio Rest Client
    $client = new Services_Twilio($AccountSid, $AuthToken);
 
    // make an associative array of senders we know, indexed by phone number
    $people = array(
       "+17033444899" => "Kalli",
        "+16164321090" => "Michael",
        "+12154311593" => "Miguel",
    );
 
    // if the sender is known, then greet them by name
    // otherwise, consider them just another monkey
    if(!$name = $people[$_REQUEST['From']]) {
        $name = "Monkey";
    }
 
    // now greet the sender
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
    <Message><?php echo $name ?>, thanks for the message!</Message>
</Response>