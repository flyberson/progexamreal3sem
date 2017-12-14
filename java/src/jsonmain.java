import java.io.BufferedWriter;
import java.io.FileWriter;

import org.json.simple.parser.JSONParser;

public class jsonmain {
    private static String test;

    public static void main(String[] args) {

        try {


                   test = UrlReader.readUrl();
            BufferedWriter writer = new BufferedWriter(new FileWriter("fileName.txt"));
            writer.write(test);

            writer.close();

        } catch (Exception e) {
            e.printStackTrace();
        }
    }
}