package dssd.invoker;
import java.io.File;
import java.io.IOException;
import java.io.PrintWriter;
import java.util.StringTokenizer;



public class Helper {

	public static void makeInputFile(InvokeParameter invokeParameter)
	{
		try {
			String filePath = InvokeService.CM_ROOT + File.separatorChar + Constants.CM_INPUT_FOLDER + File.separatorChar + Constants.CM_INPUT_FILE_INPUTFILES + Constants.CM_TEXT_FILE_EXTENSION;
			System.out.println("\nfilePath: " + filePath);
			PrintWriter writer = new PrintWriter(filePath, "UTF-8");
			for (String s : invokeParameter.getInput_files()){
				System.out.println("\nfilePathAdding: " + s);
				writer.println(s);
			}
			
			writer.close();
		} catch (IOException e) {
			e.printStackTrace();
		}
	}

	public static void makeEqualTokensFile(InvokeParameter invokeParameter)
	{
		try {
			String filePath = InvokeService.CM_ROOT + File.separatorChar + Constants.CM_INPUT_FOLDER + File.separatorChar + Constants.CM_INPUT_FILE_EQUAL_TOKENS + Constants.CM_TEXT_FILE_EXTENSION;
			System.out.println("\nfilePath: " + filePath);
			
			PrintWriter writer = new PrintWriter(filePath, "UTF-8");
			
			
			String inputString = invokeParameter.getEqual_tokens(); 
			
			StringTokenizer st = new StringTokenizer(inputString, "|");
			String tempString = "";
			while (st.hasMoreTokens()) {
				tempString = (String)st.nextToken();
				
				System.out.println(tempString);
				writer.println(tempString);
			}
			
			writer.close();
		} catch (IOException e) {
			e.printStackTrace();
		}
	}
	
	public static void makeSuppressedTokenFile(InvokeParameter invokeParameter)
	{
		try {
			String filePath = InvokeService.CM_ROOT + File.separatorChar + Constants.CM_INPUT_FOLDER + File.separatorChar + Constants.CM_INPUT_FILE_SUPPRESSED + Constants.CM_TEXT_FILE_EXTENSION;
			System.out.println("\nfilePath: " + filePath);
			
			PrintWriter writer = new PrintWriter(filePath, "UTF-8");
				
			String tempString = invokeParameter.getSuppressed_tokens();
			
			System.out.println(tempString);
			writer.println(tempString);
			
			writer.close();
		} catch (IOException e) {
			e.printStackTrace();
		}
	}
	
	public static void makeClusterParametersFile(InvokeParameter invokeParameter)
	{
		try {
			String filePath = InvokeService.CM_ROOT + File.separatorChar + Constants.CM_INPUT_FOLDER + File.separatorChar + Constants.CM_INPUT_FILE_CLUSTER_PARAMETERS + Constants.CM_TEXT_FILE_EXTENSION;
			System.out.println("\nfilePath: " + filePath);
			
			PrintWriter writer = new PrintWriter(filePath, "UTF-8");
			
			//TODO out of scope at the moment
			
			writer.close();
		} catch (IOException e) {
			e.printStackTrace();
		}
	}
}
