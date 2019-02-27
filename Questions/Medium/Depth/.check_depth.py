import os

count = 0
cwd = os.getcwd()
nonsense = [0x76, 0x69, 0x73, 0x68, 0x77, 0x61, 0x43, 0x54, 0x46, 0x7b, 0x54, 0x68, 0x34, 0x74, 0x35, 0x5f, 0x44, 0x33, 0x33, 0x70, 0x5f, 0x35, 0x6e, 0x30, 0x75, 0x67, 0x68, 0x7d]


def main():
	global count
	while len([f.path for f in os.scandir(os.getcwd()) if f.is_dir() ]) != 0:
		os.chdir([f.path for f in os.scandir(os.getcwd()) if f.is_dir()][0])
		count += 1

	flag_reveal = []
	if(count == 100):
		for i in nonsense:
			flag_reveal.append(chr(i))
		print(''.join(flag_reveal))
	else:
		print("That's not deep enough ! Go more deep ")


if __name__ == '__main__':
	main()
