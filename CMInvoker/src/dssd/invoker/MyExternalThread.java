package dssd.invoker;


/**
 * @author Umer & Hafeez
 */

import java.io.*;

public class MyExternalThread extends Thread{
    
	private InputStream inputStream;
	
    public MyExternalThread(InputStream is)
    {
        inputStream = is;
    }
    
    public void run()
    {
    	try{
    		InputStreamReader streamReader = new InputStreamReader(inputStream);
    		BufferedReader bufferReader = new BufferedReader(streamReader);
    		String line=null;
   			while ( (line = bufferReader.readLine()) != null)
  				System.out.println(line);
        } 
        catch (IOException ex){
        	ex.printStackTrace();    
        }
    }

}
