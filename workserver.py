# workserver.py - simple HTTP server with a do_work / stop_work API
# GET /do_work activates a worker thread which uses CPU
# GET /stop_work signals worker thread to stop
import math
import socket
import threading
import time

from azure.servicebus import ServiceBusService, Message, Queue
from azure.servicebus import Message
from bottle import run, route


hostname = socket.gethostname()
hostport = 9000



def writebody():
	body = '<html><head><title>Work interface - build</title></head>'
	body += '<body><h2>Worker interface on</h2><ul><h3>'
	return body
	
	

	
@route('/')
def root():
	return writebody()
	
run(host=hostname, port=hostport)
