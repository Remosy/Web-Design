import csv
List=[]
    
def main():
    #csvfile = file("/Users/adaremasy13/Desktop/Register-1864-1878/RegisterImmigrants1885-1917.csv", 'rb')
    csvfile = file("/Users/adaremasy13/Desktop/RegisterBrisbane1885-1917/RegistersImmigrants1885-1917.csv", 'rb')
    f = open("/Users/adaremasy13/Desktop/RegisterBrisbane1885-1917/applicant.csv", 'wb')
    
    reader = csv.reader(csvfile)
    for line in reader:
        ApplicantName = line[3]          
        if ApplicantName not in List and ApplicantName != "Depositor/Applicant":
           if ApplicantName == "":
              print("_______")
              print(line[2])
              List.append("N/a")
              break
           List.append(ApplicantName)
    csvfile.close()
    ct = 0
    for i in List:
        ct += 1
        f.write("%d,%s\n"%(ct,i))
    f.close()
        
if __name__ == "__main__":
    main()
