package dssd.invoker.test;

import junit.framework.Test;
import junit.framework.TestSuite;

public class AllTests {

	public static Test suite() {
		TestSuite suite = new TestSuite("Test for dssd.invoker.test");
		//$JUnit-BEGIN$
		suite.addTestSuite(TestInvokeService.class);
		suite.addTestSuite(TestDatabase.class);
		//$JUnit-END$
		return suite;
	}

}
