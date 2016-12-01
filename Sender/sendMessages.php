<?php


echo "<h1>Generating Requests</h1>";

require_once "vendor\autoload.php";
use WindowsAzure\Common\ServicesBuilder;
use WindowsAzure\Common\ServiceException;
use WindowsAzure\ServiceBus\Models\QueueInfo;
use WindowsAzure\ServiceBus\Models\BrokeredMessage;
use WindowsAzure\ServiceBus\Models\ReceiveMessageOptions;



$connectionString="DefaultEndpointsProtocol=http;AccountName=6905assignment2;AccountKey=uO9P8uhYWle7s8dePugaMqsMjtvQhkyhDHHlfF1d7CiAgI+XriPsTb0ROSlP5/Y1OFsxWdgXQlbSknIxjTao1w==";

// Create table REST proxy.
$tableRestProxy = ServicesBuilder::getInstance()->createTableService($connectionString);





$connectionString = "Endpoint=https://jairaj007.servicebus.windows.net/;SharedSecretIssuer=owner;SharedSecretValue=NT7d6BIJQdoPD7JW1ujKAAsfLk50jJyguSc7FYdn7Sc=";
$serviceBusRestProxy = ServicesBuilder::getInstance()->createServiceBusService($connectionString);

//array with random product names
$names[0] = "Finanical Trap";
$names[1] = "VPN";
$names[2] = "Auditing";
$names[3] = "T1 Lines";


	
try    {
    // Create message.
	$i=1;
	while($i<=1000000){
		$arr["TransactionID"] = $i;
		$arr["UserID"] = rand(1, 10);
		$arr["SellerID"] = rand(1, 10);
		$arr["Product Name"] = $names[rand(0,3)];
		$arr["Sale Price"] = rand(100,100000);
		$arr["Transaction Date"] = date("m.d.y");
		$message = new BrokeredMessage();
		
		$message->setBody(json_encode($arr,true));
		
		// Send message.
		$serviceBusRestProxy->sendQueueMessage("myqueue", $message);
		$i=$i+1;
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
