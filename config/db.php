<?php 

$pwd = "benrobo8";

$enc = "YmVucm9ibzg=";

$hash = password_hash($enc, PASSWORD_BCRYPT);

$check = password_verify($pwd, $hash);

if($check){
    echo "correcxrt";
}else{
    echo "wrong";
}

?>