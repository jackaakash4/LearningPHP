<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="POST">
        <div>
            <label for='name'>Name: </label>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for='password'>Password</label>
            <input type="password" id="password" name="password">
        </div>
        <div>
            <label for="department">department</label>
            <select id="department" name="department" required>
                <option value="IT">IT</option>
                <option value="Finance">Finance</option>
                <option value="HR">HR</option>
            </select>
        </div>
        <div>
            <label for="gender" >Gender</label>
            <input type="radio" id="male" name="gender" value="Male" required>
            <label for="male">Male</label>

            <input type="radio" id="female" name="gender" value="Female" required>
            <label for="female">Female</label>

        </div>
        <input type="submit" value="submit" >
    </form>
</body>
</html>


<?php 
    $servername = 'localhost:3306';
    $username = 'root';
    $password = '';
    $dbname = 'dbname';

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn -> connect_error){
        die("Connection failed". $conn-> connect_error);
    }

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name = $_POST["name"];
        $password = $_POST["password"];
        $department = $_POST["department"];
        $gender = $_POST["gender"];

    }

    $sql = "INSERT INTO employee(name, department, gender) VALUES('$name', '$department', '$gender') ";

    if($conn->query($sql)== TRUE){
            echo "Record inserted sucessfully";

    }else{
        echo"Error: ". $sql ."<br>". $conn->error;
    }
    
    $conn->close();

?>
