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
    bus_service = ServiceBusService(
        service_namespace='jairaj007',
        shared_access_key_name='RootManageSharedAccessKey',
        shared_access_key_value='lGSHGfaf8RBQ9lHbso85PCvGD2BCBVzpMKHHXLwluhg=')
    msg = bus_service.receive_queue_message('myqueue', peek_lock=True)	
    msg.delete()
    return msg.body

	
@route('/')
def root():
    table_service = TableService(account_name='6905assignment2',account_key='uO9P8uhYWle7s8dePugaMqsMjtvQhkyhDHHlfF1d7CiAgI+XriPsTb0ROSlP5/Y1OFsxWdgXQlbSknIxjTao1w==')
    return ("Hello")
	
@route('/do_work')
def do_work():
    return writebody()
	
run(host=hostname, port=hostport)
