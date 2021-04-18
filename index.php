<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Free Stresser</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="https://cdn.discordapp.com/attachments/806310152969519104/810975219820920892/nPiJtZr0aMiKvx2YquZ7EadCXpHOg4DXhCoUwUtKuTewk3JNIBCldr71-TKUbNFTWhGTtEbjmBPBiK8rzx7sSgBmaLjLvhaX7mrh.png">

<link rel="stylesheet" type="text/css" href="./assets/animate.css">

<link rel="stylesheet" type="text/css" href="./assets/main.css">

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-zrnmn8R8KkWl12rAZFt4yKjxplaDaT7/EUkKm7AovijfrQItFWR7O/JJn4DAa/gx" crossorigin="anonymous">

</head>
<body>
<div class="thing">
<div class="container-thing">
<div class="thing-pic js-tilt" data-tilt="" style="will-change: transform; transition: all 400ms cubic-bezier(0.03, 0.98, 0.52, 0.99) 0s; transform: perspective(300px) rotateX(0deg) rotateY(0deg);">
<img src="https://cdn.discordapp.com/attachments/806310152969519104/810975219820920892/nPiJtZr0aMiKvx2YquZ7EadCXpHOg4DXhCoUwUtKuTewk3JNIBCldr71-TKUbNFTWhGTtEbjmBPBiK8rzx7sSgBmaLjLvhaX7mrh.png" alt="IMG">
</div>
<form class="thing-form validate-form" name="input" action="function.php" method="post">
<span class="thing-form-title">
Free Stresser
</span>
<div class="wrap-input1 validate-input" data-validate="Host is required">
<input class="input1" type="text" name="host" placeholder="Host">
<span class="shadow-input1"></span>
</div>
<div class="wrap-input1 validate-input" data-validate="Port">
<input class="input1" type="text" name="port" placeholder="Port">
<span class="shadow-input1"></span>
</div>
<div class="wrap-input1 validate-input" data-validate="Time">
<input class="input1" type="text" name="time" placeholder="Time">
<span class="shadow-input1"></span>
</div>
<select name="method" class="dropdown">
    <option value="NTP">NTP</option>
    <option value="REDSYN">REDSYN</option>
    <option value="HTTPGET">HTTPGET</option>
</select>
<br>
<div class="container-thing-form-btn">
<button type="submit" class="thing-form-btn"><span>Start<i class="fa fa-meteor" aria-hidden="true"></i></span></button>
</div>
</form>
</div>
</div>

<script src="./assets/jquery-3.2.1.min.js"></script>
<script src="./assets/tilt.jquery.min.js"></script>
<script>
	$('.js-tilt').tilt({
		scale: 1.1
	})
</script>

<script src="./assets/main.js"></script>


</body></html>