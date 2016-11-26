# workserver.py - simple HTTP server with a do_work / stop_work API
# GET /do_work activates a worker thread which uses CPU
# GET /stop_work signals worker thread to stop
import math
import socket
import threading
import time


from bottle import route, run

def writebody():
    return ("Hello")

hostname = socket.gethostname()
hostport = 9000

@route('/')
def root():
    return writebody()


run(host=hostname, port=hostport)
