<!DOCTYPE html>
<html lang="en">

<body>
LIST<BR>
    <?php
        $MYSQL_ADDON_HOST=getenv('btnvudazzcszlfidqthw-mysql.services.clever-cloud.com');
        $MYSQL_ADDON_PORT=getenv('3306');
        $MYSQL_ADDON_DB =getenv('btnvudazzcszlfidqthw');
        $MYSQL_ADDON_USER=getenv('usj4ncmyqyyx4dmp');
        $MYSQL_ADDON_PASSWORD=getenv('yLWLmm89XwPxVdw8HzTY');
        $conn = mysqli_connect($MYSQL_ADDON_HOST, $MYSQL_ADDON_USER, $MYSQL_ADDON_PASSWORD, $MYSQL_ADDON_BD);
        if(!$conn) {
            echo "Error: Unable to open database\n <BR>";
        } else {
            echo "Open database successfully\n <BR>";
        }
        $sql = "SELECT * FROM users";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result)>0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "ID: " .$row["id"] . " - Name: " . $row["name"] . " - Email: " . $row["email"] . "<br>";
        }   
        } else {
            echo "0 results";
        }
        mysqli_close($conn);
    ?>    

</body>
</html>
