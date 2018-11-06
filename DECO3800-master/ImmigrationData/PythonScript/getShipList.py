import csv
import glob

List = []
RED = '\033[91m'
GREEN = '\033[92m'
YELLOW = '\033[93m'
LIGHT_PURPLE = '\033[94m'

def main():
    minput = input("Enter Target folder 'path,suffix,column': \n")
    line = minput.split(",")
    mpath = line[0]
    print("%s" %mpath)
    suffix = line[1]
    print("%s" %suffix)
    column = line[2]
    print("%s" %column)

    path = "%s/*.%s"%(mpath,suffix)
    print("%s" %path)
    files=glob.glob(path)

    for f in files:
        print("Reading...%s" %f)
        progress(f,column)
        
    fpath = "%s/rawList.%s"%(mpath,suffix)
    newfile = open(fpath, 'wb')
    ct = 0
    for element in List:
        ct+=1
        newfile.write("%d,%s\n"%(ct,element))
    size = len(List)
    print("Total thing: %d" %size)
    newfile.close()

def progress(fileName,column):
    csvfile = file(fileName, 'rb')
    reader = csv.reader(csvfile)
    count = 0
    print("                                        ")
    print("%d"%len(List))
    print("________________________________________")
    for line in reader:
        thing = line[int(column)]          
        if thing not in List and thing != "" and thing != "Ship ":
           count += 1
           print("NO.%d  %s"%(count,thing))
           List.append(thing)
    return List
    csvfile.close()
                           
if __name__ == "__main__":
    main()
