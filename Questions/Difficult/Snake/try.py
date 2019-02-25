str1 = "Cyb3rC3ll"
str2 = input("Enter string : ")
if len(str1) == len(str2):
	flag = 0
	for i in range(len(str1)):
		if str1[i] != str2[i]:
			flag = flag + 1
			break
	if flag == 0:
		print(" Congrats , You got it ")
	else:
		print(" You're close , Try a little harder !")
else:
	print("Not even close !")
#	if str1[i] == str2[i]:

