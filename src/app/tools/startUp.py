import socket
import os
host_name = socket.gethostname()
IPAddress = socket.gethostbyname(host_name)
print("Your Computer Name is:" + host_name)
print("Your Computer IP Address is:" + IPAddress)
os.system("start chrome " + IPAddress + ":8888/STARTUP?ip=" + IPAddress)
os.system("php -S " + IPAddress + ":8888 -t C:/Users/aungz/Desktop/workspace/git/POS/src/public")
#How to get the IP address of a client using socket module