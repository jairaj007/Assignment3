# workserver.py - simple HTTP server with a do_work / stop_work API
# GET /do_work activates a worker thread which uses CPU
# GET /stop_work signals worker thread to stop
import math
import socket
import threading
import time

from bottle import route, run

hostname = socket.gethostname()
hostport = 9000

def writebody():
   from azure.servicebus import ServiceBusService, Message, Queue
   bus_read_service = ServiceBusService(
       service_namespace='jairaj007',
       shared_access_key_name='RootManageSharedAccessKey',
       shared_access_key_value='lGSHGfaf8RBQ9lHbso85PCvGD2BCBVzpMKHHXLwluhg=')
   msg = bus_service.receive_queue_message('myqueue', peek_lock=False)	
   msg.delete()
   return msg


@route('/')
def root():
    return ("Hello")


run(host=hostname, port=hostport)
