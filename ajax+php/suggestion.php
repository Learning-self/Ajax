<?php 
	// 用名字填充数组
	$a[]="Anna";
	$a[]="Brittany";
	$a[]="Cinderella";
	$a[]="Diana";
	$a[]="Eva";
	$a[]="Fiona";
	$a[]="Gunda";
	$a[]="Hege";
	$a[]="Inga";
	$a[]="Johanna";
	$a[]="Kitty";
	$a[]="Linda";
	$a[]="Nina";
	$a[]="Ophelia";
	$a[]="Petunia";
	$a[]="Amanda";
	$a[]="Raquel";
	$a[]="Cindy";
	$a[]="Doris";
	$a[]="Eve";
	$a[]="Evita";
	$a[]="Sunniva";
	$a[]="Tove";
	$a[]="Unni";
	$a[]="Violet";
	$a[]="Liza";
	$a[]="Elizabeth";
	$a[]="Ellen";
	$a[]="Wenche";
	$a[]="Vicky";
	// 获取来自URL的参数
	$s = $_GET['s'];
	// 如果参数不为空，则实行查找
	if(strlen($s) > 0){
		$suggestion = "";
		for ($i=0; $i < count($a); $i++) { 
			if(strtolower($s) == strtolower(substr($a[$i], 0,strlen($s)))){
				if ($suggestion =="") {
					$suggestion = $a[$i];
				}else{
					$suggestion = $suggestion.",".$a[$i];
				}
			}
		}
	}
	// 如果没有找到提示，则把输出设置为“no suggestion”；否则设置为正确的值
	if ($suggestion == "") {
		$response = "no suggestion";
	}else{
		$response = $suggestion;
	}
	// 输出响应
	echo $response;

?>