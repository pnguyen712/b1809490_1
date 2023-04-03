<!DOCTYPE html>
<html lang="en">
<body>
    Insert Employee
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="border">
        ID<BR> <input type="text" name="id" value = "<?php echo $id;?>"><BR>
        Full Name<BR> <input type="text" name="name" value="<?php echo $name; ?> "><BR>
        Email<BR> <imput type="text" name="email" value="<?php echo $email ?>"><BR>
        Password<BR> <input type="text" name="password" value="<?php echo $password ?>"><BR>
        <input type="submit" name="submit" value="submit">
    </form>
    <?php
        $id=$_POST["id"];
        $name=$_POST["name"];
        $email=$_POST["email"];
        $password=$_POST["password"];
            $MYSQL_ADDON_HOST=getenv('btnvudazzcszlfidqthw-mysql.services.clever-cloud.com');
            $MYSQL_ADDON_PORT=getenv('3306');
            $MYSQL_ADDON_DB =getenv('btnvudazzcszlfidqthw');
            $MYSQL_ADDON_USER=getenv('usj4ncmyqyyx4dmp');
            $MYSQL_ADDON_PASSWORD=getenv('yLWLmm89XwPxVdw8HzTY');
            
            $conn = mysqli_connect($MYSQL_ADDON_HOST, $MYSQL_ADDON_USER, $MYSQL_ADDON_PASSWORD, $MYSQL_ADDON_BD);
                if(!$conn) {
                    echo "Error: Unable to open database\n";
                } else {
                    echo "Open database successfully\n";
                }
                $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
                if (mysqli_query($conn, $sql)) {
                    echo "User added successfully.";
                } else {
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                }
                mysqli_close($conn);
    ?>
</body>
</html>
