<?php

$url = $_SERVER['REQUEST_URI'];

if( strstr($url, 'blog/') ){

	include('blog-page.php');
	exit;

}