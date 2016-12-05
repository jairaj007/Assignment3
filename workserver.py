from azure.servicebus import ServiceBusService, Message, Queue
from bottle import run, route

hostname = socket.gethostname()
hostport = 80
keepworking = False  # boolean to switch worker thread on or off

# thread which maximizes CPU usage while the keepWorking global is True
def workerthread():
    # outer loop to run while waiting
    from azure.servicebus import ServiceBusService, Message, Queue
    bus_service = ServiceBusService(
        service_namespace='jairaj007',
        shared_access_key_name='RootManageSharedAccessKey',
        shared_access_key_value='lGSHGfaf8RBQ9lHbso85PCvGD2BCBVzpMKHHXLwluhg=')
    while (True):
        # main loop to thrash the CPI
        while (keepworking == True):
            bus_service.send_queue_message('myqueue', "hello")
        time.sleep(3)


# start the worker thread
worker_thread = threading.Thread(target=workerthread, args=())
worker_thread.start()


def writebody():
    body = '<html><head><title>Work interface - build</title></head>'
    body += '<body><h2>Worker interface on ' + hostname + '</h2><ul><h3>'

    if keepworking == False:
        body += '<br/>Worker thread is not running. <a href="./do_work">Start work</a><br/>'
    else:
        body += '<br/>Worker thread is running. <a href="./stop_work">Stop work</a><br/>'

    body += '<br/>Usage:<br/><br/>/do_work = start worker thread<br/>/stop_work = stop worker thread<br/>'
    body += '</h3></ul></body></html>'
    return body
	

	
@route('/')
def root():
    return writebody()
	

@route('/do_work')
def do_work():
    global keepworking
    # start worker thread
    keepworking = True
    return writebody()


@route('/stop_work')
def stop_work():
    global keepworking
    # stop worker thread
    keepworking = False
    return writebody()


run(host=hostname, port=hostport)
