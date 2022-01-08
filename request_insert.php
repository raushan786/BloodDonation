<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['username']) && isset($_POST['email']) &&
        isset($_POST['age']) && isset($_POST['gender']) &&
        isset($_POST['search']) {
        
        $username = $_POST['username'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $search = $_POST['search'];

        define('DB_SERVER', 'localhost');
        define('DB_USERNAME', 'root');
        define('DB_PASSWORD', '');
        define('DB_NAME', 'login');
        
        // Try connecting to the Database
        $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
        
        //Check the connection
        if($conn == false){
            dir('Error: Cannot connect');
        }
        
        else {
            $Select = "SELECT email FROM request WHERE email = ? LIMIT 1";
            $Insert = "INSERT INTO request (username, email, age, gender, search) values(?, ?, ?, ?, ?)";

            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;

            if ($rnum == 0) {
                $stmt->close();

                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("sssss",$username, $email, $age, $gender, $search);
                if ($stmt->execute()) {
                   
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "Someone already registers using this email.";
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        die();
    }
}
else {
    echo "Submit button is not set";
}
header("location: acceptor.php");
?>