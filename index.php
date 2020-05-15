<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<title>CG Sample</title>
<link rel="stylesheet" href="./styles.css" type="text/css" />
</head>

<body>
<div id="container">
<div id="rndtop">
<h1>CG Sample</h1>
</div>
<div id="rndbody">
<div style="text-align:center"><a href="./"><img src="./img/header.jpg" alt="" /></a>
</div>

<div id="contents">
<div id="main">
<h2>プロジェクト一覧</h2>
<div id="text1">

<ul>
<?php

$path = "./projects";
$array = scandir( $path );

foreach ($array as &$value) {
    if($value !== '.' && $value !== '..'){
      echo '<li><span class="lbg" style="font-size: 16px"><a href="./projects/' . $value . '/">' . $value .'</a></span></li>';
      echo "\n";
    }
}

 ?>
</ul>

</div>
</div>
</div>
</div>
<div id="rndbottom"></div>
</div>

<div id="footer">Copyright (C) 2020 <a href="./">CG SAMPLE</a> All Rights Reserved.</div>
</body>

</html>
