import csv
shipList=[]

path = "/.../csv/shipXYZ.csv"
    #"/.../csv/Assisted-Immigrants-1848-1912-U-V.csv"
    #Get Distinct ships name
    #OUTPUT Ships -> ship.csv
def main():
    fileName = input('Enter: ')
    progress(fileName)
    
def progress(fileName):
    csvfile = file(fileName, 'rb')
    f = open(path, 'wb')
    reader = csv.reader(csvfile)
    for line in reader:
        shipName = line[2]          
        if shipName not in shipList:
           shipList.append(shipName)
    csvfile.close()
    for i in shipList:
        f.write("%s \n" %i)
    f.close()
        
if __name__ == "__main__":
    main()
