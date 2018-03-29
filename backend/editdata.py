fmailpy=open("../mail.py")
fmainpy=open("../main.py")
finputdata=open("inputdata.txt")
inputdata=finputdata.read()
inputdata=inputdata.split()
finputdata.close()

mailpy=fmailpy.read()
fmailpy.close()
mailpy=mailpy.split("\n")
mainpy=fmainpy.read()
fmainpy.close()
mainpy=mainpy.split("\n")

mailpy[4]="fromEmail = "+"\'"+inputdata[1]+"\'"
mailpy[5]="fromEmailPassword = "+"\'"+inputdata[2]+"\'"
mailpy[6]="toEmail = "+"\'"+inputdata[3]+"\'"
mainpy[7]="email_update_interval = "+inputdata[0]
#print(mailpy)

fmailpy=open("../mail.py",'w')
for item in mailpy :
    fmailpy.write(item+"\n")

fmainpy=open("../main.py",'w')
for item in mainpy :
    fmainpy.write(item+"\n")
