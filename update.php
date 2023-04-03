<!DOCTYPE html>
<html lang="en">
<body>
Insert Employee
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="border">
    ID<BR> <input type="text" name="id" value="<?php echo $id;?>"><BR>
    Full Name<Br> <input type="text" name="name" value="<?php echo $name;?>"><br>
    Email<br> <input type="text" name="email" value="<?php echo $email ?>"><br>
    Password<br> <input type="text" name="password" value="<?php echo $password ?>"><br>
    <input type="submit" name="submit" value="submit">
</form>
<?php
    $id=$_POST["id"];
    $name=$_POST["name"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $MYSQL_ADDON_HOST=getenv('MYSQL_ADDON_HOST');
    $MYSQL_ADDON_PORT=getenv('MYSQL_ADDON_PORT');
    $MYSQL_ADDON_BD=getenv('MYSQL_ADDON_DB');
    $MYSQL_ADDON_USER=getenv('MYSQL_ADDON_USER');
    $MYSQL_ADDON_PASSWORD=getenv('MYSQL_ADDON_PASSWORD');
    $conn = mysqli_connect($MYSQL_ADDON_HOST,$MYSQL_ADDON_PORT,$MYSQL_ADDON_BD,$MYSQL_ADDON_USER,$MYSQL_ADDON_PASSWORD);
    if(!$conn){
        echo "ERROR : Unable to open database\n";
    } else {
        echo "Open database successfully\n";
    }
    $sql = "UPDATE users SET name='$name', email='$email', password='$password' WHERE id=$id";
    if (mysqli_query($conn,$sql)) {
        echo "User deleted successfully.";
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
    mysqli_close($conn);
?>
</body>
</html>
