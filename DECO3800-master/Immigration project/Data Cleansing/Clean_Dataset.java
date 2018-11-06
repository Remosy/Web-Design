import java.io.BufferedReader;
import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;

public class Clean_Dataset {
	private static FileWriter fw = null;

	public static void readAllFiles (final File folder) throws IOException {
		//read all files in the folder
		for (final File f: folder.listFiles()) {
			if(f.getName().equals("_DS_Store")) {
				continue;
			} else {
				//create the file to store the clean data
				readWrite(f.getPath(), "C:/Users/Owner/Desktop/DECO3800/clean.csv");
			};
		}
		fw.flush();
		fw.close();
	}

	public static void readWrite (String file, String outputFile) {
		BufferedReader br = null;
		String line = "";

		try {
			System.out.println("Processing: " + file);
			br = new BufferedReader(new FileReader(file));
			if (fw == null) {
				fw = new FileWriter(outputFile);
			}
			while ((line = br.readLine()) != null) {
				if (line.length() == 0) {
				} else {
					// split the data in the CSV file according to their delimiter
					String[] data = line.split(";");
					fw.append(appendThis(data));
				};
			}
		} catch (FileNotFoundException e) {
			e.printStackTrace();
		} catch (IOException e) {
			e.printStackTrace();
		}
	}

	public static String appendThis (String[] data) {
		String r = "\n";
		String date = "";
		for (int i=0; i < data.length; i++) {

			// if the data is representing a date
			if (i == 5) {
				String temps = "";
				String d[];
				// remove special character from the date
				for (int i1 = 0; i1 < data[i].length(); i1++) {
					char c = data[i].charAt(i1);
					if (c != '-' && c != '"') {
						temps += c;
					} else {
						temps += ' ';
					}
				}
				d = temps.split(" ");

				// add 18 or 19 in front of the year to make it into for digit
				// year format (18xx or 19xx)
				if (d.length > 1 && d[d.length-1].length() == 2) {
					if (Integer.parseInt(d[d.length-1])<=17) {
						System.out.println(d[d.length-1]);
						d[d.length-1] = "19"+d[d.length-1];
					} else {
						d[d.length-1] = "18"+d[d.length-1];
					}
				}
				for (String s: d) {
					date += s + " ";
				}
				date = date.substring(0, date.length()-1);
				r += date;

				// ignore if it is the first row (header)
				if (data[i].toLowerCase().startsWith("immigrant")){
					return "";
				}

				// change the month from number into text (6 --> Jun)
				if(data[i].contains("/") && i == 3) {
					String temp[] = data[i].split("/");
					switch (Integer.parseInt(temp[0])) {
					case 1: temp[0] = "Jan"; break;
					case 2: temp[0] = "Feb"; break;
					case 3: temp[0] = "Mar"; break;
					case 4: temp[0] = "Apr"; break;
					case 5: temp[0] = "May"; break;
					case 6: temp[0] = "Jun"; break;
					case 7: temp[0] = "Jul"; break;
					case 8: temp[0] = "Aug"; break;
					case 9: temp[0] = "Sep"; break;
					case 10: temp[0] = "Oct"; break;
					case 11: temp[0] = "Nov"; break;
					case 12: temp[0] = "Dec"; break;
					default: temp[0] = ""; break;
					}
					date = temp[1]+" "+temp[0]+" "+temp[2];
					r+=date;

					// standardize the date format again
				} else if (data[i].contains("-") && i == 3) {
					String temp[] = data[i].split("-");
					if(temp.length <= 2) {
						r+=data[i];
						r+=",";
						continue;
					}
					if (temp[2].length() == 2) {
						if (Integer.parseInt(temp[2]) <= 17)
							temp[2] = "19"+temp[2];
					} else {
						temp[2] = "18"+temp[2];
					}
					date = temp[0]+" "+temp[1]+" "+temp[2];
					r+=date;

					// if the data is Age
				} else if (i == 2){
					// standardize the format by changing Inf to n/a
					if (data[i].equals("-") || data[i].equals("Inf")) {
						r+="n/a";
					} else {
						r+=data[i];
					}
				} else {
					for (int a=0; a<data[i].length();a++) {
						char c = data[i].charAt(a);
						if (c != ',' || c != '"'){
							r+=c;
						}
					}
				}
				if (i != data.length-1) {
					r += ',';
				}
			}
		}
		return r;
	}

	public static void main (String[] args) throws IOException {
		// process all file in the specific folder
		readAllFiles(new File("C:/Users/Owner/Desktop/DECO3800/merged"));
	}
}
