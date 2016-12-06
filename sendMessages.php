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
$connectionString = "Endpoint=https://jairaj007.servicebus.windows.net/;SharedSecretIssuer=owner;SharedSecretValue=NT7d6BIJQdoPD7JW1ujKAAsfLk50jJyguSc7FYdn7Sc=";
$serviceBusRestProxy = ServicesBuilder::getInstance()->createServiceBusService($connectionString);	
    try    {
    // Create message.
	$i=1;
	while($i<=20000){
		if($i%10000==0){
			$arr["TransactionID"] = $i;
			$arr["UserID"] = rand(1, 10);
			$arr["SellerID"] = rand(1, 10);
			$arr["ProductName"] = $names[rand(0,3)];
			$arr["SalePrice"] = rand(100,100000);
			$arr["Transaction Date"] = date("m.d.y");
			$message = new BrokeredMessage();
			$message->setBody($arr);
		}
		else{
			$arr["TransactionID"] = $i;
			$arr["UserID"] = rand(1, 10);
			$arr["SellerID"] = rand(1, 10);
			$arr["ProductName"] = $names[rand(0,3)];
			$arr["SalePrice"] = rand(100,100000);
			$arr["Transaction Date"] = date("m.d.y");
			$message = new BrokeredMessage();
			$message->setBody(json_encode($arr,true));
		}

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

$connectionString = "Endpoint=https://jairaj007.servicebus.windows.net/;SharedSecretIssuer=owner;SharedSecretValue=NT7d6BIJQdoPD7JW1ujKAAsfLk50jJyguSc7FYdn7Sc=";
$serviceBusRestProxy = ServicesBuilder::getInstance()->createServiceBusService($connectionString);	
    try    {
    // Create message.
	$i=20001;
	while($i<=40000){
		if($i%10000==0){
			$message->setBody("Garbage");
		}
		else{
			$arr["TransactionID"] = $i;
			$arr["UserID"] = rand(1, 10);
			$arr["SellerID"] = rand(1, 10);
			$arr["ProductName"] = $names[rand(0,3)];
			$arr["SalePrice"] = rand(100,100000);
			$arr["Transaction Date"] = date("m.d.y");
			$message = new BrokeredMessage();
			$message->setBody(json_encode($arr,true));
		}


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

$connectionString = "Endpoint=https://jairaj007.servicebus.windows.net/;SharedSecretIssuer=owner;SharedSecretValue=NT7d6BIJQdoPD7JW1ujKAAsfLk50jJyguSc7FYdn7Sc=";
$serviceBusRestProxy = ServicesBuilder::getInstance()->createServiceBusService($connectionString);	
    try    {
    // Create message.
	$i=40001;
	while($i<=60000){
		if($i%10000==0){
			$message->setBody("Garbage");
		}
		else{
			$arr["TransactionID"] = $i;
			$arr["UserID"] = rand(1, 10);
			$arr["SellerID"] = rand(1, 10);
			$arr["ProductName"] = $names[rand(0,3)];
			$arr["SalePrice"] = rand(100,100000);
			$arr["Transaction Date"] = date("m.d.y");
			$message = new BrokeredMessage();
			$message->setBody(json_encode($arr,true));
		}

		
		
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

$connectionString = "Endpoint=https://jairaj007.servicebus.windows.net/;SharedSecretIssuer=owner;SharedSecretValue=NT7d6BIJQdoPD7JW1ujKAAsfLk50jJyguSc7FYdn7Sc=";
$serviceBusRestProxy = ServicesBuilder::getInstance()->createServiceBusService($connectionString);	
    try    {
    // Create message.
	$i=60001;
	while($i<=80000){
		if($i%10000==0){
			$message->setBody("Garbage");
		}
		else{
			$arr["TransactionID"] = $i;
			$arr["UserID"] = rand(1, 10);
			$arr["SellerID"] = rand(1, 10);
			$arr["ProductName"] = $names[rand(0,3)];
			$arr["SalePrice"] = rand(100,100000);
			$arr["Transaction Date"] = date("m.d.y");
			$message = new BrokeredMessage();
			$message->setBody(json_encode($arr,true));
		}

		
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

$connectionString = "Endpoint=https://jairaj007.servicebus.windows.net/;SharedSecretIssuer=owner;SharedSecretValue=NT7d6BIJQdoPD7JW1ujKAAsfLk50jJyguSc7FYdn7Sc=";
$serviceBusRestProxy = ServicesBuilder::getInstance()->createServiceBusService($connectionString);	
    try    {
    // Create message.
	$i=80001;
	while($i<=100000){
		if($i%10000==0){
			$message->setBody("Garbage");
		}
		else{
			$arr["TransactionID"] = $i;
			$arr["UserID"] = rand(1, 10);
			$arr["SellerID"] = rand(1, 10);
			$arr["ProductName"] = $names[rand(0,3)];
			$arr["SalePrice"] = rand(100,100000);
			$arr["Transaction Date"] = date("m.d.y");
			$message = new BrokeredMessage();
			$message->setBody(json_encode($arr,true));
		}

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

$connectionString = "Endpoint=https://jairaj007.servicebus.windows.net/;SharedSecretIssuer=owner;SharedSecretValue=NT7d6BIJQdoPD7JW1ujKAAsfLk50jJyguSc7FYdn7Sc=";
$serviceBusRestProxy = ServicesBuilder::getInstance()->createServiceBusService($connectionString);	
    try    {
    // Create message.
	$i=100001;
	while($i<=120000){
		if($i%10000==0){
			$message->setBody("Garbage");
		}
		else{
			$arr["TransactionID"] = $i;
			$arr["UserID"] = rand(1, 10);
			$arr["SellerID"] = rand(1, 10);
			$arr["ProductName"] = $names[rand(0,3)];
			$arr["SalePrice"] = rand(100,100000);
			$arr["Transaction Date"] = date("m.d.y");
			$message = new BrokeredMessage();
			$message->setBody(json_encode($arr,true));
		}

		
		// Send message.
		$serviceBusRestProxy->sendQueueMessage("myqueue1", $message);
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

$connectionString = "Endpoint=https://jairaj007.servicebus.windows.net/;SharedSecretIssuer=owner;SharedSecretValue=NT7d6BIJQdoPD7JW1ujKAAsfLk50jJyguSc7FYdn7Sc=";
$serviceBusRestProxy = ServicesBuilder::getInstance()->createServiceBusService($connectionString);	
    try    {
    // Create message.
	$i=120001;
	while($i<=140000){
		if($i%10000==0){
			$message->setBody("Garbage");
		}
		else{
			$arr["TransactionID"] = $i;
			$arr["UserID"] = rand(1, 10);
			$arr["SellerID"] = rand(1, 10);
			$arr["ProductName"] = $names[rand(0,3)];
			$arr["SalePrice"] = rand(100,100000);
			$arr["Transaction Date"] = date("m.d.y");
			$message = new BrokeredMessage();
			$message->setBody(json_encode($arr,true));
		}

		// Send message.
		$serviceBusRestProxy->sendQueueMessage("myqueue1", $message);
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

$connectionString = "Endpoint=https://jairaj007.servicebus.windows.net/;SharedSecretIssuer=owner;SharedSecretValue=NT7d6BIJQdoPD7JW1ujKAAsfLk50jJyguSc7FYdn7Sc=";
$serviceBusRestProxy = ServicesBuilder::getInstance()->createServiceBusService($connectionString);	
    try    {
    // Create message.
	$i=140001;
	while($i<=160000){
		if($i%10000==0){
			$message->setBody("Garbage");
		}
		else{
			$arr["TransactionID"] = $i;
			$arr["UserID"] = rand(1, 10);
			$arr["SellerID"] = rand(1, 10);
			$arr["ProductName"] = $names[rand(0,3)];
			$arr["SalePrice"] = rand(100,100000);
			$arr["Transaction Date"] = date("m.d.y");
			$message = new BrokeredMessage();
			$message->setBody(json_encode($arr,true));
		}

		
		// Send message.
		$serviceBusRestProxy->sendQueueMessage("myqueue1", $message);
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

$connectionString = "Endpoint=https://jairaj007.servicebus.windows.net/;SharedSecretIssuer=owner;SharedSecretValue=NT7d6BIJQdoPD7JW1ujKAAsfLk50jJyguSc7FYdn7Sc=";
$serviceBusRestProxy = ServicesBuilder::getInstance()->createServiceBusService($connectionString);	
    try    {
    // Create message.
	$i=160001;
	while($i<=180000){
		if($i%10000==0){
			$message->setBody("Garbage");
		}
		else{
			$arr["TransactionID"] = $i;
			$arr["UserID"] = rand(1, 10);
			$arr["SellerID"] = rand(1, 10);
			$arr["ProductName"] = $names[rand(0,3)];
			$arr["SalePrice"] = rand(100,100000);
			$arr["Transaction Date"] = date("m.d.y");
			$message = new BrokeredMessage();
			$message->setBody(json_encode($arr,true));
		}

		
		// Send message.
		$serviceBusRestProxy->sendQueueMessage("myqueue1", $message);
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

$connectionString = "Endpoint=https://jairaj007.servicebus.windows.net/;SharedSecretIssuer=owner;SharedSecretValue=NT7d6BIJQdoPD7JW1ujKAAsfLk50jJyguSc7FYdn7Sc=";
$serviceBusRestProxy = ServicesBuilder::getInstance()->createServiceBusService($connectionString);	
    try    {
    // Create message.
	$i=180001;
	while($i<=200000){
		if($i%10000==0){
			$message->setBody("Garbage");
		}
		else{
			$arr["TransactionID"] = $i;
			$arr["UserID"] = rand(1, 10);
			$arr["SellerID"] = rand(1, 10);
			$arr["ProductName"] = $names[rand(0,3)];
			$arr["SalePrice"] = rand(100,100000);
			$arr["Transaction Date"] = date("m.d.y");
			$message = new BrokeredMessage();
			$message->setBody(json_encode($arr,true));
		}

		
		// Send message.
		$serviceBusRestProxy->sendQueueMessage("myqueue1", $message);
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
function send11() {
//array with random product names
$names[0] = "Finanical Trap";
$names[1] = "VPN";
$names[2] = "Auditing";
$names[3] = "T1 Lines";	

$connectionString = "Endpoint=https://jairaj007.servicebus.windows.net/;SharedSecretIssuer=owner;SharedSecretValue=NT7d6BIJQdoPD7JW1ujKAAsfLk50jJyguSc7FYdn7Sc=";
$serviceBusRestProxy = ServicesBuilder::getInstance()->createServiceBusService($connectionString);	
    try    {
    // Create message.
	$i=200001;
	while($i<=220000){
		if($i%10000==0){
			$message->setBody("Garbage");
		}
		else{
			$arr["TransactionID"] = $i;
			$arr["UserID"] = rand(1, 10);
			$arr["SellerID"] = rand(1, 10);
			$arr["ProductName"] = $names[rand(0,3)];
			$arr["SalePrice"] = rand(100,100000);
			$arr["Transaction Date"] = date("m.d.y");
			$message = new BrokeredMessage();
			$message->setBody(json_encode($arr,true));
		}

		
		// Send message.
		$serviceBusRestProxy->sendQueueMessage("myqueue2", $message);
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
function send12() {
//array with random product names
$names[0] = "Finanical Trap";
$names[1] = "VPN";
$names[2] = "Auditing";
$names[3] = "T1 Lines";	

$connectionString = "Endpoint=https://jairaj007.servicebus.windows.net/;SharedSecretIssuer=owner;SharedSecretValue=NT7d6BIJQdoPD7JW1ujKAAsfLk50jJyguSc7FYdn7Sc=";
$serviceBusRestProxy = ServicesBuilder::getInstance()->createServiceBusService($connectionString);	
    try    {
    // Create message.
	$i=220001;
	while($i<=240000){
		if($i%10000==0){
			$message->setBody("Garbage");
		}
		else{
			$arr["TransactionID"] = $i;
			$arr["UserID"] = rand(1, 10);
			$arr["SellerID"] = rand(1, 10);
			$arr["ProductName"] = $names[rand(0,3)];
			$arr["SalePrice"] = rand(100,100000);
			$arr["Transaction Date"] = date("m.d.y");
			$message = new BrokeredMessage();
			$message->setBody(json_encode($arr,true));
		}

		
		// Send message.
		$serviceBusRestProxy->sendQueueMessage("myqueue2", $message);
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
function send13() {
//array with random product names
$names[0] = "Finanical Trap";
$names[1] = "VPN";
$names[2] = "Auditing";
$names[3] = "T1 Lines";	

$connectionString = "Endpoint=https://jairaj007.servicebus.windows.net/;SharedSecretIssuer=owner;SharedSecretValue=NT7d6BIJQdoPD7JW1ujKAAsfLk50jJyguSc7FYdn7Sc=";
$serviceBusRestProxy = ServicesBuilder::getInstance()->createServiceBusService($connectionString);	
    try    {
    // Create message.
	$i=240001;
	while($i<=260000){
		if($i%10000==0){
			$message->setBody("Garbage");
		}
		else{
			$arr["TransactionID"] = $i;
			$arr["UserID"] = rand(1, 10);
			$arr["SellerID"] = rand(1, 10);
			$arr["ProductName"] = $names[rand(0,3)];
			$arr["SalePrice"] = rand(100,100000);
			$arr["Transaction Date"] = date("m.d.y");
			$message = new BrokeredMessage();
			$message->setBody(json_encode($arr,true));
		}

		// Send message.
		$serviceBusRestProxy->sendQueueMessage("myqueue2", $message);
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
function send14() {
//array with random product names
$names[0] = "Finanical Trap";
$names[1] = "VPN";
$names[2] = "Auditing";
$names[3] = "T1 Lines";	

$connectionString = "Endpoint=https://jairaj007.servicebus.windows.net/;SharedSecretIssuer=owner;SharedSecretValue=NT7d6BIJQdoPD7JW1ujKAAsfLk50jJyguSc7FYdn7Sc=";
$serviceBusRestProxy = ServicesBuilder::getInstance()->createServiceBusService($connectionString);	
    try    {
    // Create message.
	$i=260001;
	while($i<=280000){
		if($i%10000==0){
			$message->setBody("Garbage");
		}
		else{
			$arr["TransactionID"] = $i;
			$arr["UserID"] = rand(1, 10);
			$arr["SellerID"] = rand(1, 10);
			$arr["ProductName"] = $names[rand(0,3)];
			$arr["SalePrice"] = rand(100,100000);
			$arr["Transaction Date"] = date("m.d.y");
			$message = new BrokeredMessage();
			$message->setBody(json_encode($arr,true));
		}

		// Send message.
		$serviceBusRestProxy->sendQueueMessage("myqueue2", $message);
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
function send15() {
//array with random product names
$names[0] = "Finanical Trap";
$names[1] = "VPN";
$names[2] = "Auditing";
$names[3] = "T1 Lines";	

$connectionString = "Endpoint=https://jairaj007.servicebus.windows.net/;SharedSecretIssuer=owner;SharedSecretValue=NT7d6BIJQdoPD7JW1ujKAAsfLk50jJyguSc7FYdn7Sc=";
$serviceBusRestProxy = ServicesBuilder::getInstance()->createServiceBusService($connectionString);	
    try    {
    // Create message.
	$i=280001;
	while($i<=300000){
		if($i%10000==0){
			$message->setBody("Garbage");
		}
		else{
			$arr["TransactionID"] = $i;
			$arr["UserID"] = rand(1, 10);
			$arr["SellerID"] = rand(1, 10);
			$arr["ProductName"] = $names[rand(0,3)];
			$arr["SalePrice"] = rand(100,100000);
			$arr["Transaction Date"] = date("m.d.y");
			$message = new BrokeredMessage();
			$message->setBody(json_encode($arr,true));
		}

		// Send message.
		$serviceBusRestProxy->sendQueueMessage("myqueue2", $message);
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
$t11 = new Thread( 'send11' );
$t12 = new Thread( 'send12' );
$t13 = new Thread( 'send13' );
$t14 = new Thread( 'send14' );
$t15 = new Thread( 'send15' );




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
$t11->start( 10, 't11' );
$t12->start( 10, 't12' );
$t13->start( 10, 't13' );
$t14->start( 10, 't14' );
$t15->start( 10, 't15' );




// keep the program running until the threads finish
while($t1->isAlive() && $t2->isAlive() && $t3->isAlive()&& $t4->isAlive()&& $t5->isAlive()&& $t6->isAlive()&& $t7->isAlive()&& $t8->isAlive()&& $t9->isAlive()&& $t10->isAlive()&& $t11->isAlive()&& $t12->isAlive()&& $t13->isAlive()&& $t14->isAlive()&& $t15->isAlive()) {
    sleep(1);
}


?>
