# workserver.py - simple HTTP server with a do_work / stop_work API
# GET /do_work activates a worker thread which uses CPU
# GET /stop_work signals worker thread to stop
import math
import socket
import threading
import time
from azure.servicebus import ServiceBusService, Message, Queue
from azure.servicebus import Message
from bottle import route, run

hostname = socket.gethostname()
hostport = 9000

def writebody():
    bus_read_service = ServiceBusService(
        service_namespace='vmsseight',
        shared_access_key_name='ListenOneTime',
        shared_access_key_value='OhFgmG5Cr/K9aOrE29YL7eXERzmUb3Fpf7J+FoBhiMw=')
    msg = bus_service.receive_queue_message('myqueue', peek_lock=False)	
    msg.delete()
   return msg


@route('/')
def root():
    return writebody()



run(host=hostname, port=hostport)
