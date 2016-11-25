<?php
require_once 'vendor\autoload.php';
use WindowsAzure\Common\ServicesBuilder;
use WindowsAzure\Common\ServiceException;
use WindowsAzure\ServiceBus\Models\QueueInfo;
use WindowsAzure\ServiceBus\Models\BrokeredMessage;

$connectionString = "Endpoint=https://jairaj007.servicebus.windows.net/;SharedSecretIssuer=owner;SharedSecretValue=NT7d6BIJQdoPD7JW1ujKAAsfLk50jJyguSc7FYdn7Sc=";
$serviceBusRestProxy = ServicesBuilder::getInstance()->createServiceBusService($connectionString);


echo "HELLO";


try    {
    // Create message.
    $message = new BrokeredMessage();
	$stuff = "Something Awesome";
	$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);

	$i=0;
	while($i<=1000000){
		$a[$i] = $arr;
	
	$i++;
	}
	
	
//echo json_encode($arr);
	$i=0;
	while($i<=1000000){
    $message->setBody(json_encode($a[$i++]));


    // Send message.
    $serviceBusRestProxy->sendQueueMessage("myqueue", $message);
	
	echo $i."</br>";
	
	}
}
catch(ServiceException $e){
    // Handle exception based on error codes and messages.
    // Error codes and messages are here: 
    // http://msdn.microsoft.com/library/windowsazure/hh780775
    $code = $e->getCode();
    $error_message = $e->getMessage();
    echo $code.": ".$error_message."<br />";
}



?>
