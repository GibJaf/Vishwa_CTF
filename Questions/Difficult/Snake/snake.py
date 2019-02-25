#!/usr/bin/python2.7
import random 
lr = '\x6b'
print '''
___________.__               _________              __           
\__    ___/|  |__   ____    /   _____/ ____ _____  |  | __ ____  
  |    |   |  |  \_/ __ \   \_____  \ /    \\__  \ |  |/ // __ \ 
  |    |   |   Y  \  ___/   /        \   |  \/ __ \|    <\  ___/ 
  |____|   |___|  /\___  > /_______  /___|  (____  /__|_ \\___  >
                \/     \/          \/     \/     \/     \/    \/ 

'''
chains = [0x74, 0x68, 0x69, 0x73, 0x20, 0x69, 0x73, 0x20, 0x61, 0x20, 0x74, 0x72, 0x6f, 0x6c, 0x6c]
db = '\x31'
ef = '\x68'
chars = []
keys = [0x70, 0x61, 0x73, 0x73, 0x77, 0x6f, 0x72, 0x64, 0x21, 0x21]
nn = '\x35'
lock_pick = random.randint(0, 0x3e8)
pq = '\x72'
lock = lock_pick * 2
xy = '\x6d'
password = [0x69, 0x74, 0x73, 0x20, 0x6e, 0x6f, 0x74, 0x20, 0x74, 0x68, 0x61, 0x74, 0x20, 0x65, 0x61, 0x73, 0x79]
lock = lock + 10
ty = '\x34'
lock = lock / 2
auth = [0x6b, 0x65, 0x65, 0x70, 0x20, 0x74, 0x72, 0x79, 0x69, 0x6e, 0x67]
yz = '\x34'
lock = lock - lock_pick
gh = '\x34'
print 'The Snake Created by 3XPL017'
venom = [0x43, 0x79, 0x62, 0x33, 0x72, 0x43, 0x33, 0x6c, 0x6c]
print 'Your number is ' + str(lock_pick)
for key in keys:
    keys_encrypt = lock ^ key
    chars.append(keys_encrypt)
for chain in chains:
    chains_encrypt = chain + 0xA
    chars.append(chains_encrypt)
aa = '\x56'
rr = '\x77'
slither = aa + db + nn + ef + rr + gh + lr + ty + pq + xy + yz
print 'Authentication required'
print ''
user_input = raw_input('Enter your username : ')
if user_input == slither:
    pass

else:
    print 'Wrong username try harder'
    exit()



pass_input = raw_input('Enter your password : ')
if len(venom) == len(pass_input):
        flag = 0
        for i in range(len(venom)):
                if chr(venom[i]) != pass_input[i]:
                        flag = flag + 1
                        break
        if flag == 0:
                print(" Congrats , You got it ")
        else:
                print(" You're close , Try a little harder !")
else:
        print("Not even close !")

