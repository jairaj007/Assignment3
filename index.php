<?php
echo "<h1>Hello43</h1>";
require_once "vendor/autoload.php";
use WindowsAzure\Common\ServicesBuilder;
use WindowsAzure\Common\ServiceException;
use WindowsAzure\ServiceBus\Models\QueueInfo;
use WindowsAzure\ServiceBus\Models\BrokeredMessage;
use WindowsAzure\ServiceBus\Models\ReceiveMessageOptions;
use MicrosoftAzure\Storage\Table\Models\Entity;
use MicrosoftAzure\Storage\Table\Models\EdmType;
use MicrosoftAzure\Storage\Table\Models\QueryEntitiesOptions;


echo "<h1>Hello23</h1>";
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
			echo "MessageID: ".$message->getMessageId()."<br />";
			
			//check if Transaction to ensure it is valid 
			
			//echo $transaction["UserID"];
			//$transaction = json_decode($tranaction)
			
			$transaction = json_decode($transaction);
			echo $transaction->{'TransactionID'};
			$num = $i + rand(1,10000) + rand(1,10000);
			// Delete message. Not necessary if peek lock is not set.
			echo "Message deleted.<br />";
			$entity = new Entity();
				$entity->setPartitionKey("5");
				$entity->setRowKey("$num");
				$entity->addProperty("TransactionID",EdmType::INT32, $transaction->{'TransactionID'});
				$entity->addProperty("UserID",EdmType::INT32, $transaction->{'UserID'});
				$entity->addProperty("SellerID",EdmType::INT32, $transaction->{'SellerID'});
				$entity->addProperty("ProductName",EdmType::STRING, $transaction->{'Product Name'});
				$entity->addProperty("SalePrice",EdmType::INT32, $transaction->{'Sale Price'});
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
?>
