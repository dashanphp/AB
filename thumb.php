<?php 
 $maxfile="application/public/home/images/ceo.jpg";
 function thumb($maxfile,$minw,$minh='100px'){
 	//大图宽度
 	$imgarr = getimagesize($maxfile);
 	//print_r($imgarr);exit;
 	$maxw = $imgarr[0];
 	$maxh = $imgarr[1];
 	$maxt = $imgarr[2];
 	$maxm = $imgarr['mime'];
 	$type =  basename($maxm);
 	$dirname = dirname($maxfile);
 	$filename = basename($maxfile);
 	
 	switch ($type) {
 		case 'png':
 			$createim = "imagecreatefrompng";
 			$output = "imagepng";
 			break;
 		case 'jpg':
 		case 'jpeg':
 			$createim = "imagecreatefromjpeg";
 			$output = 'imagejpeg';
 			break;
 		case 'jif':
 			$createim = "imagecreatefromgif";
 			$outpout = "imagegif";
 			break;
 	}
 	//大图资源
 	$maxim = $createim($maxfile);
 	
 	if($maxw/$minw<$maxh/$minh){
 		$pei = $maxw/$minw;
 	}else{
 		$pei = $maxh/$minh;
 	}
 	$newwidth = floor($maxw/$pei);
 	$newheight = floor($maxh/$pei);
 	//新的小图资源
 	$newminim = imagecreatetruecolor($newwidth,$newheight);
 	imagecopyresampled($newminim,$maxim,0,0,0,0,$newwidth,$newheight,$maxw,$maxh);  
 	//保存图片名字
 	$newname =$dirname.'/thumb_'.$filename;
 	//保存生成的图片
 	$output($newminim,$newname);

 }
 thumb($maxfile,'600px');