from __future__ import print_function
for i in range (0,1150):
	j = "A"+str(i)+".apk"
	f = open(j,'w')
	f.write('hi there\n') # python will convert \n to os.linesep
	f.close()