flag = "vishwaCTF{Th4t5_D33p_5n0ugh}"
flag_enc = [0x76, 0x69, 0x73, 0x68, 0x77, 0x61, 0x43, 0x54, 0x46, 0x7b, 0x54, 0x68, 0x34, 0x74, 0x35, 0x5f, 0x44, 0x33, 0x33, 0x70, 0x5f, 0x35, 0x6e, 0x30, 0x75, 0x67, 0x68, 0x7d]
flag2 = []
for i in flag_enc:
	#flag_enc.append(hex(ord(i)))
	flag2.append(chr(i))
print(''.join(flag2))
