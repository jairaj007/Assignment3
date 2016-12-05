import math
import socket
import threading
import time

from azure.servicebus import ServiceBusService, Message, Queue
from bottle import run, route


hostname = socket.gethostname()
hostport = 1080

def writebody():
    bus_service = ServiceBusService(
        service_namespace='jairaj007',
        shared_access_key_name='RootManageSharedAccessKey',
        shared_access_key_value='lGSHGfaf8RBQ9lHbso85PCvGD2BCBVzpMKHHXLwluhg=')
    msg = bus_service.receive_queue_message('myqueue', peek_lock=True)	
    msg.delete()
    return msg.body

	
@route('/')
def root():
    return writebody()
	

run(host=hostname, port=hostport)
