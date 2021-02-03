<html>
<body>
<h1>Third task</h1>
<?php
$counter=0;
$text="168++++++167=16";
$index=-1;
for($i=0;$i<strlen($text)-1;$i++){
	if($text[$i].$text[$i+1]=="16"){
		$counter+=1;
	}

	if($counter==2){
		$index= $i;
		break;
	}
}

$i=0;
$result="";
while($i<strlen($text)){
	if($i==$index){
		$result=$result."15";
		$i=$i+2;
	}
	else{
		$result=$result.$text[$i];
		$i++;
	}
}
echo $result;
?>
</body>
</html>