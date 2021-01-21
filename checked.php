<?php 

require_once("connMysql.php");

if (isset($_POST["action"]) && ($_POST["action"] == "update")) {

    $id = $_POST['boardid'];

    $sql_query = "UPDATE board SET checked='1' WHERE boardid= $id";
    $db['AS']->query('$sql_query');
    // $sql_query = "UPDATE board SET checked=? WHERE boardid= ?";
    //     $stmt = $db_link->prepare($sql_query);
    //     $stmt->bind_param('ii',$checked ,$boardid);
    //     $stmt->execute();
    //     $stmt->close();
        //返回後台區
    header("Location:admin.php");
}
    

?>
