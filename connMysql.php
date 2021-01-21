<?


// // 資料庫設定
// $db_host = "localhost";
// $db_username = "root";
// $db_password = "";
// $db_name = "board";

// // 資料庫連線
// $db_link  = @new mysqli($db_host,$db_username,$db_password,$db_name);

// if($db_link->connect_error != ""){
//     echo "資料庫連線失敗";
// }else{
//     // 設定字元集與編碼
//     $db_link->query("SET NAMES 'utf8'");
//     // echo "成功";
// }

// ----------------------------------------------------------------------------------------------------------------


require_once("mysqlilib.php");

$db['AS']=new StockDB('localhost:','root','','board')
or die("資料庫連線失敗".mysqli_connect_error());
// $qstr = "SELECT * FROM board";
// $db['AS']->query($qstr);
// while ($db['AS']->next_record(2)){
//     $r=$db['AS']->record;
//     print_r($r);
// }

//分頁
// $page_obj=new Page($db['WS'],$_REQUEST['page'],30,$sql_column,$sql_from,$sql_where,$sql_order);
// $db['WS']->query($page_obj->_SQL);









?>