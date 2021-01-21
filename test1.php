<?php 


// class Student{
    //     var $int_Id;
    //     var $str_Name;
    //     function setData($Id,$Name){
        //         $this->int_Id =$Id;
        //         $this->str_Name=$Name;
        //     }
        //     function showData(){
            //         echo "座號".$this->int_Id."<br>";
            //         echo "姓名".$this->int_Id."<br>";
            //     }
            // }
require "mysqlilib.php";

$db['AS']=new StockDB('localhost','root','','board');

$qstr = "SELECT * FROM board";
$db['AS']->query($qstr);
while ($db['AS']->next_record(2)){
    $r=$db['AS']->record;
    print_r($r);
}

// $count = $db['AS']->get_total_data();
// print_r($count);

// $db['AS']=@new StockDB($db_host_arr['localhost']['AS'],$db_user_arr['root']['AS'],$db_passwd_arr['AS'],$db_name_arr['board']['AS']);
// $qstr = "SELECT * FROM board";
// $db['AS']->query($qstr);
// while ($db['AS']->next_record()){
// 	$r=$db['AS']->record;
// }