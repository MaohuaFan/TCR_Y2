<?php
    // Functie: Connection Database
    // Auteur: Maohua Fan

    namespace Opdracht6Login\classes;

    use \PDO;
    use \PDOException;

    class Database{

        private $username = "root";
        private $password = "";
        private $dbname = "login";
        private $hostname = "localhost";
        private $conn; // This will hold the database connection

        // Constructor to establish database connection

        public function __construct()
        {
            try {
                $this->conn = new PDO("mysql:host=$this->hostname;dbname=$this->dbname", $this->username, $this->password);
                // Set the PDO Error Mode to Exception
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                // echo "Connected successfully <br><br><br>";
            }
            catch(PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }
        }
 
        // Function to get data from sql quary
        public function GetData($sql, $params = array()){
            $result = [];

            try {
                // Ensure connection is established
                if(!$this->conn) {
                    $this->__construct();
                }

                // Select data from the database
                $query = $this->conn->prepare($sql);
                $query->execute($params);
                $result = $query->fetchAll();
            } catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
            }

            return $result;
        }
    }




    // Debug and Placeholder List
    // $db = new Database();
    // var_dump($db);





    
    /**
 * @covers User::ShowUser
 */
/*public function testShowUser(){
    // Create a User object with test data
    $user = new User("john_doe", "password123", "john@example.com");

    // Start output buffering to capture echoed output
    ob_start();
    
    // Call the ShowUser method
    $user->ShowUser();
    
    // Get the contents of the output buffer
    $output = ob_get_clean();

    // Add your assertions to test the output
    $expectedOutput = "<br>Username: john_doe<br><br>Password: password123<br><br>Email: john@example.com<br>";
    $this->expectOutputString($expectedOutput);
    $this->assertEquals($expectedOutput, $output);
}*/

/**
 * @covers User::GetUser
 */
/*public function testGetUser(){
    // Mocking the GetData method
    $mockedUserData = [
        ['username' => 'testuser', 'password' => 'testpassword', 'email' => 'test@example.com']
    ];
    $mockedGetDataReturnValue = $mockedUserData;

    $mockedUser = $this->getMockBuilder(User::class)
                       ->setMethods(['GetData'])
                       ->getMock();

    $mockedUser->expects($this->once())
               ->method('GetData')
               ->willReturn($mockedGetDataReturnValue);

    // Call the GetUser method
    $result = $mockedUser->GetUser('testuser');

    // Assertions
    $this->assertTrue($result); // Check if the user is found
    $this->assertEquals('testuser', $mockedUser->username); // Check if username property is set
    $this->assertEquals('testpassword', $mockedUser->password); // Check if password property is set
    $this->assertEquals('test@example.com', $mockedUser->email); // Check if email property is set
    $this->assertEquals('testuser', $_SESSION['username']); // Check if session variable is set correctly
    $this->assertEquals('test@example.com', $_SESSION['email']); // Check if session variable is set correctly
}*/


?>