<?php
$dsn='mysql:dbname=GachaDB;host=127.0.0.1';
$user='root';
$pw='H@chiouji1';

$sql='Select * from Chara';

$dbh=new PDO($dsn,$user,$pw);
$sth=$dbh->prepare($sql);
$sth->execute();

while(($buff=$sth->fetch())!==false){
print implode(',',$buff);
print "\n";
}
?>
