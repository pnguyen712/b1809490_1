<!DOCTYPE html>
<html lang="en">
<body>
Insert Employee
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="border">
    ID<BR> <input type="text" name="id" value="<?php echo $id;?>"><BR>
    <input type="submit" name="submit" value="submit">
    </form>
<?php
    $id=$_POST["id"];
    $MYSQL_ADDON_HOST=getenv('btnvudazzcszlfidqthw-mysql.services.clever-cloud.com');
    $MYSQL_ADDON_PORT=getenv('3306');
    $MYSQL_ADDON_BD =getenv('btnvudazzcszlfidqthw');
    $MYSQL_ADDON_USER=getenv('usj4ncmyqyyx4dmp');
    $MYSQL_ADDON_PASSWORD=getenv('yLWLmm89XwPxVdw8HzTY');

    $conn = mysqli_connect($MYSQL_ADDON_HOST,$MYSQL_ADDON_PORT,$MYSQL_ADDON_BD,$MYSQL_ADDON_USER,$MYSQL_ADDON_PASSWORD);
    if(!$conn){
        echo "ERROR : Unable to open database\n";
    } else {
        echo "Open database successfully\n";
    }
    $sql = "DELETE FROM users WHERE id=$id";
    if (mysqli_query($conn,$sql)) {
        echo "User deleted successfully.";
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
    mysqli_close($conn);
?>
</body>
</html>
