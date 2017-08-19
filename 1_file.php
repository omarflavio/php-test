<?php
/*
echo "Hello";
$A=1;
$B=2;
    echo $A+$B;
*/

if(isset($_POST['submit'])) {
    $name = $_POST['username'];
    $email = $_POST['mail'];
    $phone = $_POST['pass'];
    
    $phone = filter_var($phone,FILTER_SANITIZE_NUMBER_INT);
    
    
    $conn = mysqli_connect('localhost','root','','one');
    $sql = "INSERT INTO start(name,email,phone) VALUES('$name','$email','$phone')";
    $result = $conn->query($sql);
    
}
   
    
?>

<html>
    <head></head>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
            <input type="text" name="username" placeholder="Name"/><br>
            <input type="text" name="mail" placeholder="E-Mail"/><br>
            <input type="text" name="pass" placeholder="Password"/><br>
            <button type="submit" name="submit">submit</button>
                        
        </form>
    </body>
</html>