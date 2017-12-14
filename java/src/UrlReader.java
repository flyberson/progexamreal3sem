import java.net.*;
import java.io.*;

public class UrlReader {
    private static String output;

    public static String readUrl() {
try {
    URL api = new URL("http://localhost/PhpstormProjects/progexamreal3sem/explore_california_api.php/tours");
    BufferedReader in = new BufferedReader(
            new InputStreamReader(api.openStream()));

    String inputLine;
    while ((inputLine = in.readLine()) != null)
    {

        output +=inputLine;}
    in.close();
}
catch (Exception e){
    System.out.println("something went wrong");
    e.printStackTrace();
}
return output;
    }

}