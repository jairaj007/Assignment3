import math
import socket
import threading
import time

from bottle import run, route


hostname = socket.gethostname()
hostport = 80

def writebody():
    return ("Hello")

	
@route('/')
def root():
    return writebody()
	

run(host=hostname, port=hostport)
