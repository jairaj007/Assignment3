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
    print( 'You must call this file by SSH-ing into the VM and running reciever.php' );
}



function recieve(){
$connectionString = "Endpoint=https://jairaj007.servicebus.windows.net/;SharedSecretIssuer=owner;SharedSecretValue=NT7d6BIJQdoPD7JW1ujKAAsfLk50jJyguSc7FYdn7Sc=";
$serviceBusRestProxy = ServicesBuilder::getInstance()->createServiceBusService($connectionString);
	  $connectionString2="DefaultEndpointsProtocol=http;AccountName=6905assignment2;AccountKey=uO9P8uhYWle7s8dePugaMqsMjtvQhkyhDHHlfF1d7CiAgI+XriPsTb0ROSlP5/Y1OFsxWdgXQlbSknIxjTao1w==";


// Create table REST proxy.
$tableRestProxy = ServicesBuilder::getInstance()->createTableService($connectionString2);
    
	

try    {
    // Set the receive mode to PeekLock (default is ReceiveAndDelete).
    $options = new ReceiveMessageOptions();
    $options->setPeekLock();
    // Receive message.
	
	$i=1;
	$message = $serviceBusRestProxy->receiveQueueMessage("myqueue", $options);
	while(!$message==null){
			$message = $serviceBusRestProxy->receiveQueueMessage("myqueue", $options);
			$transaction=($message->getBody());			
			//check if Transaction to ensure it is valid 
			$transaction = json_decode($transaction);
			echo $transaction->{'TransactionID'};
			$num = $i + rand(1,10000) + rand(1,10000);
			// Delete message. Not necessary if peek lock is not set.
		
		
			$entity = new Entity();
				$entity->setPartitionKey("5");
				$entity->setRowKey("$transaction->{'TransactionID'}");
				$entity->addProperty("TransactionID",EdmType::INT32, $transaction->{'TransactionID'});
				$entity->addProperty("UserID",EdmType::INT32, $transaction->{'UserID'});
				$entity->addProperty("SellerID",EdmType::INT32, $transaction->{'SellerID'});
				$entity->addProperty("ProductName",EdmType::STRING, $transaction->{'ProductName'});
				$entity->addProperty("SalePrice",EdmType::INT32, $transaction->{'SalePrice'});
				$entity->addProperty("TransactionDate",EdmType::INT32, $i);
				try{
					$tableRestProxy->insertEntity("suitEventStore", $entity);
				}
				catch(ServiceException $e){
					// Handle exception based on error codes and messages.
					// Error codes and messages are here:
					// http://msdn.microsoft.com/library/azure/dd179438.aspx
					$code = $e->getCode();
					$error_message = $e->getMessage();
					//echo ($error_message );
				}
				
				
			
			$serviceBusRestProxy->deleteMessage($message);
			$i=$i+1;
	}
}
catch(ServiceException $e){
    // Handle exception based on error codes and messages.
    // Error codes and messages are here:
    // http://msdn.microsoft.com/library/windowsazure/hh780735
    $code = $e->getCode();
    $error_message = $e->getMessage();
    echo $code.": ".$error_message."<br />";
}
}
$threads = array();
$index = 0;	

$t1 = new Thread( 'recieve' );
$t2 = new Thread( 'recieve' );
$t3 = new Thread( 'recieve' );
$t4 = new Thread( 'recieve' );
$t5 = new Thread( 'recieve' );
$t6 = new Thread( 'recieve' );
$t7 = new Thread( 'recieve' );
$t8 = new Thread( 'recieve' );
$t9 = new Thread( 'recieve' );
$t10 = new Thread( 'recieve' );
$t11 = new Thread( 'recieve' );
$t12 = new Thread( 'recieve' );
$t13 = new Thread( 'recieve' );
$t14 = new Thread( 'recieve' );
$t15 = new Thread( 'recieve' );




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
$t10>start( 10, 't10' );
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
