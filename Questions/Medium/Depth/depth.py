# This script will make 100 folders one inside another

import os

for i in range(100):
	cwd = os.getcwd()
	cwd+=str("/Dir"+str(i+1))
	os.mkdir(cwd)
	os.chdir(cwd)
	print("Iteration ",(i+1))
	print("cwd = ",cwd,"\n")
