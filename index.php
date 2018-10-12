<?php
	/*
		FlyingSky-CN / HitokotoAPI
		
		Copyright 2018 FlyingSky & OWUcat .

		Licensed under the Apache License, Version 2.0 (the "License");
		you may not use this file except in compliance with the License.
		You may obtain a copy of the License at

			http://www.apache.org/licenses/LICENSE-2.0

		Unless required by applicable law or agreed to in writing, software
		distributed under the License is distributed on an "AS IS" BASIS,
		WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
		See the License for the specific language governing permissions and
		limitations under the License.
	
	*/
	
	$stime=microtime(true);

	$path = dirname(__FILE__);
	$file = file($path."/hitokoto.txt");
	$arr  = mt_rand( 0, count( $file ) - 1 );
	$content  = trim($file[$arr]);
	if (isset($_GET['charset']) && !empty($_GET['charset'])) {
   		$charset = $_GET['charset'];
   	 	if (strcasecmp($charset,"gbk") == 0 ) {
        	$content = mb_convert_encoding($content,'gbk', 'utf-8');
    	}
	} else {
    	$charset = 'utf-8';
	}

	header("Content-Type: text/html; charset=$charset");

	if ($_GET['encode'] == 'js') {
    	$echo = "function hitokoto(){document.write('".$content."');}";
        echo $echo;
    } elseif ($_GET['encode'] == 'json') {
    	$echo = array('hitokoto' => $content);
        echo json_encode($echo);
    } else {
    	echo $content;
    }

	$etime=microtime(true);
	$total=$etime-$stime;
	if ($_GET['time'] == 1) {
      	echo $total;
    }

?>