import sys
try:
        f=open('test.txt')
        s=f.readline()
        i=int(s.strip())
except IOError as err:
        print("I/O error:{0}".format(err))
except ValueError:
        print("""could not convert data to an integer""")
except:
        print("unexcepted error:".sys.sec_info()[0])
        raise
finally:
        f.close()
