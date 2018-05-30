import sys
import time
import serial
import urllib
ser = serial.Serial('/dev/ttyACM0',9600)
while ( ser.readline() != 0 ):
        time.sleep(5)
        string = ser.readline()
        print(string)
        foo= string.split()
        a = foo[0]
        b = foo[1]
        c = foo[2]
        print(a)
        print(b)
        print(c)
        urii="https://eyantra.000webhostapp.com/test.php?code1=" + a + "&code2=" + b + "&code3=" + c
        print(urii)
        urllib.urlopen(urii)
        #requests.get(urii)
        print("success!")
        #print ( ser.readline())

