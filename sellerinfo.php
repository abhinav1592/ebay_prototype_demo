
<?php
$link = mysqli_connect("localhost", "root", "", "test");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

/* return name of current default database */
if ($result = mysqli_query($link, "SELECT DATABASE()")) {
    $row = mysqli_fetch_row($result);
    printf("Default database is %s.\n", $row[0]);
    mysqli_free_result($result);
}


// $v1 = $_POST["id"]?:null;
 $v1 = isset($_POST['id']) ? $_POST['id'] : '';
 //$v2 = $_POST["name"]?:null;
  $v2 = isset($_POST['name']) ? $_POST['name'] : '';
 //$v3 = $_POST["address_shipping"]?:null;
  $v3 = isset($_POST['address_shipping']) ? $_POST['address_shipping'] : '';

 $sql = "INSERT INTO seller".
          " (id,name,address_shipping)".
          " VALUES ('$v1','$v2','$v3')";


 if(!mysqli_query($link,$sql)){
        printf("error: %s\n", mysqli_error($link));

 }
/*/* change db to world db 
mysqli_select_db($link, "world");

/* return name of current default database 
if ($result = mysqli_query($link, "SELECT DATABASE()")) {
    $row = mysqli_fetch_row($result);
    printf("Default database is %s.\n", $row[0]);
    mysqli_free_result($result);
}
*/
mysqli_close($link);
?>