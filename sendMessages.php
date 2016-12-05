<?php

require_once( 'Thread.php' );
require_once "vendor/autoload.php";

use WindowsAzure\Common\ServicesBuilder;
use WindowsAzure\Common\ServiceException;
use WindowsAzure\ServiceBus\Models\QueueInfo;
use WindowsAzure\ServiceBus\Models\BrokeredMessage;
use WindowsAzure\ServiceBus\Models\ReceiveMessageOptions;
use MicrosoftAzure\Storage\Table\Models\Entity;
use MicrosoftAzure\Storage\Table\Models\EdmType;
use MicrosoftAzure\Storage\Table\Models\QueryEntitiesOptions;


if( !Thread::isAvailable() ) {
    print( 'Threads not supported' );
}


//Failure Rate Occurs every 10000 requests generated


// define the function to be run as a separate thread
function send() {
//array with random product names
$names[0] = "Finanical Trap";
$names[1] = "VPN";
$names[2] = "Auditing";
$names[3] = "T1 Lines";	
$connectionString="DefaultEndpointsProtocol=http;AccountName=6905assignment2;AccountKey=uO9P8uhYWle7s8dePugaMqsMjtvQhkyhDHHlfF1d7CiAgI+XriPsTb0ROSlP5/Y1OFsxWdgXQlbSknIxjTao1w==";
// Create table REST proxy.
$tableRestProxy = ServicesBuilder::getInstance()->createTableService($connectionString);
$connectionString = "Endpoint=https://jairaj007.servicebus.windows.net/;SharedSecretIssuer=owner;SharedSecretValue=NT7d6BIJQdoPD7JW1ujKAAsfLk50jJyguSc7FYdn7Sc=";
$serviceBusRestProxy = ServicesBuilder::getInstance()->createServiceBusService($connectionString);	
    try    {
    // Create message.
	$i=1;
	while($i<=30000){
		
		if($i%10000==0){
			$arr["TransactionID"] = $i;
			$arr["UserID"] = rand(1, 10);
			$arr["SellerIDdd"] = rand(1, 10);
			$arr["ProductName"] = $names[rand(0,3)];
			$arr["SalePrice"] = rand(100,100000);
			$arr["Transaction Date"] = date("m.d.y");
			$message = new BrokeredMessage();
		}
		else{
			$arr["TransactionID"] = $i;
			$arr["UserID"] = rand(1, 10);
			$arr["SellerID"] = rand(1, 10);
			$arr["ProductName"] = $names[rand(0,3)];
			$arr["SalePrice"] = rand(100,100000);
			$arr["Transaction Date"] = date("m.d.y");
			$message = new BrokeredMessage();
		}
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
}

// define the function to be run as a separate thread
function send2() {
//array with random product names
$names[0] = "Finanical Trap";
$names[1] = "VPN";
$names[2] = "Auditing";
$names[3] = "T1 Lines";	
$connectionString="DefaultEndpointsProtocol=http;AccountName=6905assignment2;AccountKey=uO9P8uhYWle7s8dePugaMqsMjtvQhkyhDHHlfF1d7CiAgI+XriPsTb0ROSlP5/Y1OFsxWdgXQlbSknIxjTao1w==";
// Create table REST proxy.
$tableRestProxy = ServicesBuilder::getInstance()->createTableService($connectionString);
$connectionString = "Endpoint=https://jairaj007.servicebus.windows.net/;SharedSecretIssuer=owner;SharedSecretValue=NT7d6BIJQdoPD7JW1ujKAAsfLk50jJyguSc7FYdn7Sc=";
$serviceBusRestProxy = ServicesBuilder::getInstance()->createServiceBusService($connectionString);	
    try    {
    // Create message.
	$i=30001;
	while($i<=60000){
		if($i%10000==0){
			$arr["TransactionID"] = $i;
			$arr["UserID"] = rand(1, 10);
			$arr["SellerIDdd"] = rand(1, 10);
			$arr["ProductName"] = $names[rand(0,3)];
			$arr["SalePrice"] = rand(100,100000);
			$arr["Transaction Date"] = date("m.d.y");
			$message = new BrokeredMessage();
		}
		else{
			$arr["TransactionID"] = $i;
			$arr["UserID"] = rand(1, 10);
			$arr["SellerID"] = rand(1, 10);
			$arr["ProductName"] = $names[rand(0,3)];
			$arr["SalePrice"] = rand(100,100000);
			$arr["Transaction Date"] = date("m.d.y");
			$message = new BrokeredMessage();
		}
		
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
}

// define the function to be run as a separate thread
function send3() {
//array with random product names
$names[0] = "Finanical Trap";
$names[1] = "VPN";
$names[2] = "Auditing";
$names[3] = "T1 Lines";	
$connectionString="DefaultEndpointsProtocol=http;AccountName=6905assignment2;AccountKey=uO9P8uhYWle7s8dePugaMqsMjtvQhkyhDHHlfF1d7CiAgI+XriPsTb0ROSlP5/Y1OFsxWdgXQlbSknIxjTao1w==";
// Create table REST proxy.
$tableRestProxy = ServicesBuilder::getInstance()->createTableService($connectionString);
$connectionString = "Endpoint=https://jairaj007.servicebus.windows.net/;SharedSecretIssuer=owner;SharedSecretValue=NT7d6BIJQdoPD7JW1ujKAAsfLk50jJyguSc7FYdn7Sc=";
$serviceBusRestProxy = ServicesBuilder::getInstance()->createServiceBusService($connectionString);	
    try    {
    // Create message.
	$i=60001;
	while($i<=90000){
		if($i%10000==0){
			$arr["TransactionID"] = $i;
			$arr["UserID"] = rand(1, 10);
			$arr["SellerIDdd"] = rand(1, 10);
			$arr["ProductName"] = $names[rand(0,3)];
			$arr["SalePrice"] = rand(100,100000);
			$arr["Transaction Date"] = date("m.d.y");
			$message = new BrokeredMessage();
		}
		else{
			$arr["TransactionID"] = $i;
			$arr["UserID"] = rand(1, 10);
			$arr["SellerID"] = rand(1, 10);
			$arr["ProductName"] = $names[rand(0,3)];
			$arr["SalePrice"] = rand(100,100000);
			$arr["Transaction Date"] = date("m.d.y");
			$message = new BrokeredMessage();
		}
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
}

// define the function to be run as a separate thread
function send4() {
//array with random product names
$names[0] = "Finanical Trap";
$names[1] = "VPN";
$names[2] = "Auditing";
$names[3] = "T1 Lines";	
$connectionString="DefaultEndpointsProtocol=http;AccountName=6905assignment2;AccountKey=uO9P8uhYWle7s8dePugaMqsMjtvQhkyhDHHlfF1d7CiAgI+XriPsTb0ROSlP5/Y1OFsxWdgXQlbSknIxjTao1w==";
// Create table REST proxy.
$tableRestProxy = ServicesBuilder::getInstance()->createTableService($connectionString);
$connectionString = "Endpoint=https://jairaj007.servicebus.windows.net/;SharedSecretIssuer=owner;SharedSecretValue=NT7d6BIJQdoPD7JW1ujKAAsfLk50jJyguSc7FYdn7Sc=";
$serviceBusRestProxy = ServicesBuilder::getInstance()->createServiceBusService($connectionString);	
    try    {
    // Create message.
	$i=90001;
	while($i<=120000){
		if($i%10000==0){
			$arr["TransactionID"] = $i;
			$arr["UserID"] = rand(1, 10);
			$arr["SellerIDdd"] = rand(1, 10);
			$arr["ProductName"] = $names[rand(0,3)];
			$arr["SalePrice"] = rand(100,100000);
			$arr["Transaction Date"] = date("m.d.y");
			$message = new BrokeredMessage();
		}
		else{
			$arr["TransactionID"] = $i;
			$arr["UserID"] = rand(1, 10);
			$arr["SellerID"] = rand(1, 10);
			$arr["ProductName"] = $names[rand(0,3)];
			$arr["SalePrice"] = rand(100,100000);
			$arr["Transaction Date"] = date("m.d.y");
			$message = new BrokeredMessage();
		}
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
}

// define the function to be run as a separate thread
function send5() {
//array with random product names
$names[0] = "Finanical Trap";
$names[1] = "VPN";
$names[2] = "Auditing";
$names[3] = "T1 Lines";	
$connectionString="DefaultEndpointsProtocol=http;AccountName=6905assignment2;AccountKey=uO9P8uhYWle7s8dePugaMqsMjtvQhkyhDHHlfF1d7CiAgI+XriPsTb0ROSlP5/Y1OFsxWdgXQlbSknIxjTao1w==";
// Create table REST proxy.
$tableRestProxy = ServicesBuilder::getInstance()->createTableService($connectionString);
$connectionString = "Endpoint=https://jairaj007.servicebus.windows.net/;SharedSecretIssuer=owner;SharedSecretValue=NT7d6BIJQdoPD7JW1ujKAAsfLk50jJyguSc7FYdn7Sc=";
$serviceBusRestProxy = ServicesBuilder::getInstance()->createServiceBusService($connectionString);	
    try    {
    // Create message.
	$i=120001;
	while($i<=150000){
		if($i%10000==0){
			$arr["TransactionID"] = $i;
			$arr["UserID"] = rand(1, 10);
			$arr["SellerIDdd"] = rand(1, 10);
			$arr["ProductName"] = $names[rand(0,3)];
			$arr["SalePrice"] = rand(100,100000);
			$arr["Transaction Date"] = date("m.d.y");
			$message = new BrokeredMessage();
		}
		else{
			$arr["TransactionID"] = $i;
			$arr["UserID"] = rand(1, 10);
			$arr["SellerID"] = rand(1, 10);
			$arr["ProductName"] = $names[rand(0,3)];
			$arr["SalePrice"] = rand(100,100000);
			$arr["Transaction Date"] = date("m.d.y");
			$message = new BrokeredMessage();
		}
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
}

// define the function to be run as a separate thread
function send6() {
//array with random product names
$names[0] = "Finanical Trap";
$names[1] = "VPN";
$names[2] = "Auditing";
$names[3] = "T1 Lines";	
$connectionString="DefaultEndpointsProtocol=http;AccountName=6905assignment2;AccountKey=uO9P8uhYWle7s8dePugaMqsMjtvQhkyhDHHlfF1d7CiAgI+XriPsTb0ROSlP5/Y1OFsxWdgXQlbSknIxjTao1w==";
// Create table REST proxy.
$tableRestProxy = ServicesBuilder::getInstance()->createTableService($connectionString);
$connectionString = "Endpoint=https://jairaj007.servicebus.windows.net/;SharedSecretIssuer=owner;SharedSecretValue=NT7d6BIJQdoPD7JW1ujKAAsfLk50jJyguSc7FYdn7Sc=";
$serviceBusRestProxy = ServicesBuilder::getInstance()->createServiceBusService($connectionString);	
    try    {
    // Create message.
	$i=150001;
	while($i<=180000){
		if($i%10000==0){
			$arr["TransactionID"] = $i;
			$arr["UserID"] = rand(1, 10);
			$arr["SellerIDdd"] = rand(1, 10);
			$arr["ProductName"] = $names[rand(0,3)];
			$arr["SalePrice"] = rand(100,100000);
			$arr["Transaction Date"] = date("m.d.y");
			$message = new BrokeredMessage();
		}
		else{
			$arr["TransactionID"] = $i;
			$arr["UserID"] = rand(1, 10);
			$arr["SellerID"] = rand(1, 10);
			$arr["ProductName"] = $names[rand(0,3)];
			$arr["SalePrice"] = rand(100,100000);
			$arr["Transaction Date"] = date("m.d.y");
			$message = new BrokeredMessage();
		}
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
}
// define the function to be run as a separate thread
function send7() {
//array with random product names
$names[0] = "Finanical Trap";
$names[1] = "VPN";
$names[2] = "Auditing";
$names[3] = "T1 Lines";	
$connectionString="DefaultEndpointsProtocol=http;AccountName=6905assignment2;AccountKey=uO9P8uhYWle7s8dePugaMqsMjtvQhkyhDHHlfF1d7CiAgI+XriPsTb0ROSlP5/Y1OFsxWdgXQlbSknIxjTao1w==";
// Create table REST proxy.
$tableRestProxy = ServicesBuilder::getInstance()->createTableService($connectionString);
$connectionString = "Endpoint=https://jairaj007.servicebus.windows.net/;SharedSecretIssuer=owner;SharedSecretValue=NT7d6BIJQdoPD7JW1ujKAAsfLk50jJyguSc7FYdn7Sc=";
$serviceBusRestProxy = ServicesBuilder::getInstance()->createServiceBusService($connectionString);	
    try    {
    // Create message.
	$i=180001;
	while($i<=210000){
		if($i%10000==0){
			$arr["TransactionID"] = $i;
			$arr["UserID"] = rand(1, 10);
			$arr["SellerIDdd"] = rand(1, 10);
			$arr["ProductName"] = $names[rand(0,3)];
			$arr["SalePrice"] = rand(100,100000);
			$arr["Transaction Date"] = date("m.d.y");
			$message = new BrokeredMessage();
		}
		else{
			$arr["TransactionID"] = $i;
			$arr["UserID"] = rand(1, 10);
			$arr["SellerID"] = rand(1, 10);
			$arr["ProductName"] = $names[rand(0,3)];
			$arr["SalePrice"] = rand(100,100000);
			$arr["Transaction Date"] = date("m.d.y");
			$message = new BrokeredMessage();
		}
		
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
}
// define the function to be run as a separate thread
function send8() {
//array with random product names
$names[0] = "Finanical Trap";
$names[1] = "VPN";
$names[2] = "Auditing";
$names[3] = "T1 Lines";	
$connectionString="DefaultEndpointsProtocol=http;AccountName=6905assignment2;AccountKey=uO9P8uhYWle7s8dePugaMqsMjtvQhkyhDHHlfF1d7CiAgI+XriPsTb0ROSlP5/Y1OFsxWdgXQlbSknIxjTao1w==";
// Create table REST proxy.
$tableRestProxy = ServicesBuilder::getInstance()->createTableService($connectionString);
$connectionString = "Endpoint=https://jairaj007.servicebus.windows.net/;SharedSecretIssuer=owner;SharedSecretValue=NT7d6BIJQdoPD7JW1ujKAAsfLk50jJyguSc7FYdn7Sc=";
$serviceBusRestProxy = ServicesBuilder::getInstance()->createServiceBusService($connectionString);	
    try    {
    // Create message.
	$i=210001;
	while($i<=240000){
		if($i%10000==0){
			$arr["TransactionID"] = $i;
			$arr["UserID"] = rand(1, 10);
			$arr["SellerIDdd"] = rand(1, 10);
			$arr["ProductName"] = $names[rand(0,3)];
			$arr["SalePrice"] = rand(100,100000);
			$arr["Transaction Date"] = date("m.d.y");
			$message = new BrokeredMessage();
		}
		else{
			$arr["TransactionID"] = $i;
			$arr["UserID"] = rand(1, 10);
			$arr["SellerID"] = rand(1, 10);
			$arr["ProductName"] = $names[rand(0,3)];
			$arr["SalePrice"] = rand(100,100000);
			$arr["Transaction Date"] = date("m.d.y");
			$message = new BrokeredMessage();
		}
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
}
// define the function to be run as a separate thread
function send9() {
//array with random product names
$names[0] = "Finanical Trap";
$names[1] = "VPN";
$names[2] = "Auditing";
$names[3] = "T1 Lines";	
$connectionString="DefaultEndpointsProtocol=http;AccountName=6905assignment2;AccountKey=uO9P8uhYWle7s8dePugaMqsMjtvQhkyhDHHlfF1d7CiAgI+XriPsTb0ROSlP5/Y1OFsxWdgXQlbSknIxjTao1w==";
// Create table REST proxy.
$tableRestProxy = ServicesBuilder::getInstance()->createTableService($connectionString);
$connectionString = "Endpoint=https://jairaj007.servicebus.windows.net/;SharedSecretIssuer=owner;SharedSecretValue=NT7d6BIJQdoPD7JW1ujKAAsfLk50jJyguSc7FYdn7Sc=";
$serviceBusRestProxy = ServicesBuilder::getInstance()->createServiceBusService($connectionString);	
    try    {
    // Create message.
	$i=240001;
	while($i<=270000){
		if($i%10000==0){
			$arr["TransactionID"] = $i;
			$arr["UserID"] = rand(1, 10);
			$arr["SellerIDdd"] = rand(1, 10);
			$arr["ProductName"] = $names[rand(0,3)];
			$arr["SalePrice"] = rand(100,100000);
			$arr["Transaction Date"] = date("m.d.y");
			$message = new BrokeredMessage();
		}
		else{
			$arr["TransactionID"] = $i;
			$arr["UserID"] = rand(1, 10);
			$arr["SellerID"] = rand(1, 10);
			$arr["ProductName"] = $names[rand(0,3)];
			$arr["SalePrice"] = rand(100,100000);
			$arr["Transaction Date"] = date("m.d.y");
			$message = new BrokeredMessage();
		}
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
}

// define the function to be run as a separate thread
function send10() {
//array with random product names
$names[0] = "Finanical Trap";
$names[1] = "VPN";
$names[2] = "Auditing";
$names[3] = "T1 Lines";	
$connectionString="DefaultEndpointsProtocol=http;AccountName=6905assignment2;AccountKey=uO9P8uhYWle7s8dePugaMqsMjtvQhkyhDHHlfF1d7CiAgI+XriPsTb0ROSlP5/Y1OFsxWdgXQlbSknIxjTao1w==";
// Create table REST proxy.
$tableRestProxy = ServicesBuilder::getInstance()->createTableService($connectionString);
$connectionString = "Endpoint=https://jairaj007.servicebus.windows.net/;SharedSecretIssuer=owner;SharedSecretValue=NT7d6BIJQdoPD7JW1ujKAAsfLk50jJyguSc7FYdn7Sc=";
$serviceBusRestProxy = ServicesBuilder::getInstance()->createServiceBusService($connectionString);	
    try    {
    // Create message.
	$i=270001;
	while($i<=300000){
		if($i%10000==0){
			$arr["TransactionID"] = $i;
			$arr["UserID"] = rand(1, 10);
			$arr["SellerIDdd"] = rand(1, 10);
			$arr["ProductName"] = $names[rand(0,3)];
			$arr["SalePrice"] = rand(100,100000);
			$arr["Transaction Date"] = date("m.d.y");
			$message = new BrokeredMessage();
		}
		else{
			$arr["TransactionID"] = $i;
			$arr["UserID"] = rand(1, 10);
			$arr["SellerID"] = rand(1, 10);
			$arr["ProductName"] = $names[rand(0,3)];
			$arr["SalePrice"] = rand(100,100000);
			$arr["Transaction Date"] = date("m.d.y");
			$message = new BrokeredMessage();
		}
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
}

$threads = array();
$index = 0;	

$t1 = new Thread( 'send' );
$t2 = new Thread( 'send2' );
$t3 = new Thread( 'send3' );
$t4 = new Thread( 'send4' );
$t5 = new Thread( 'send5' );
$t6 = new Thread( 'send6' );
$t7 = new Thread( 'send7' );
$t8 = new Thread( 'send8' );
$t9 = new Thread( 'send9' );
$t10 = new Thread( 'send10' );




// start them
$t1->start( 10, 't1' );
$t2->start( 10, 't2' );
$t3->start( 10, 't3' );
$t4->start( 10, 't4' );
$t5->start( 10, 't5' );
$t6->start( 10, 't6' );
$t7->start( 10, 't7' );
$t8->start( 10, 't8' );
$t9->start( 10, 't9' );
$t10->start( 10, 't10' );



// keep the program running until the threads finish
while($t1->isAlive() && $t2->isAlive() && $t3->isAlive()&& $t4->isAlive()&& $t5->isAlive()&& $t6->isAlive()&& $t7->isAlive()&& $t8->isAlive()&& $t9->isAlive()&& $t10->isAlive()) {
    sleep(1);
}


?>
