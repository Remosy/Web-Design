import java.io.*;

public class CSV_Reader {
	private static FileWriter fw = null;

	public static void readAllFiles (final File folder) throws IOException {
		// read all files in the folder
		for (final File f: folder.listFiles()) {
			if(f.getName().equals("_DS_Store")) {
				continue;
			} else {
				// create a CSV file to save the data merged
				readWrite(f.getPath(), "C:/Users/Owner/Desktop/DECO3800/merged.csv");
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
					String[] data = line.split(",");
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
		for (int i=0; i < data.length; i++) {
			// if the row is not the header
			if (data[i].toLowerCase().startsWith("name,")){
				return "";
			}
			// add the data
			for (int a=0; a<data[i].length();a++) {
				char c = data[i].charAt(a);
				if (c != ',' || c != '"'){
					r+=c;
				}
			}
			// add the delimiter after the data (if it is not the last data of the row)
			if (i != data.length-1) {
				r += ',';
			}
		}
		return r;
	}

	public static void main (String[] args) throws IOException {
		// process all files in the specific folder
		readAllFiles(new File("C:/Users/Owner/Desktop/DECO3800/csv1"));
	}
}
