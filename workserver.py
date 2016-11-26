# workserver.py - simple HTTP server with a do_work / stop_work API
# GET /do_work activates a worker thread which uses CPU
# GET /stop_work signals worker thread to stop
import math
import socket
import threading
import time



hostname = socket.gethostname()
hostport = 80


from azure.servicebus import ServiceBusService, Message, Queue
from azure.servicebus import Message
from bottle import run, route

def writebody():
    body = '<html><head><title>Work interface - build</title></head>'
    body += '<body><h2>Worker interface on</h2><ul><h3>'
    return body
	
bus_service = ServiceBusService(
    service_namespace='jairaj007',
    shared_access_key_name='RootManageSharedAccessKey',
    shared_access_key_value='lGSHGfaf8RBQ9lHbso85PCvGD2BCBVzpMKHHXLwluhg=')
	

	
@route('/')
def root():
	return writebody()
	msg = bus_service.receive_queue_message('myqueue', peek_lock=True)
	return(msg.body)
	msg.delete()
	


run()
