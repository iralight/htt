
<!-- saved from url=(0047)https://yoast.com/research/autocompletetype.php -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">

<script>

</script>

<style>
body {
	font-size: 1.2em;
	max-width: 700px;
	margin: 20px;
}

h1 {
	font-size: 1.6em;
}

label {
	clear: both;
	width: 150px;
}
label, input {
	float: left;
}
br {
	clear: both;
}
#hide {
	height: 0px;
	overflow: hidden;
}
</style>

<script src="./autocompletetype_files/jquery.min.js"></script>
<script>
	$( document ).ready(function() {
		$("#mine").submit( function() {
			$("#hide").css("height","auto");
			return false;
		});
	});
</script>
</head>

<body style="">

<h1>Autocomplete test</h1>

<p>Autocomplete has some very scary side-effects, even more when combined with the<br>
<code>(x-)autocompletetype</code> attribute. Read more in our post: <a href="http://yoast.com/autocomplete-security/">why you should not use auto-complete</a>.</p>

<p>Fill out your name below and use autocomplete, you'll see what actually got submitted below.</p>

<form action="" id="mine" method="post">
	<label for="name">Name</label> <input type="text" x-autocompletetype="name" autofocus="" id="name" name="name"><br>
	<div id="hide">
	<label for="name">Email</label> <input type="text" x-autocompletetype="email" id="email" name="email">
	<label for="name">Telephone no</label> <input type="text" x-autocompletetype="tel" id="tel" name="tel">
	<label for="name">Street Address</label> <input type="text" x-autocompletetype="street-address" id="street-address" name="street-address">
	<label for="name">City</label> <input type="text" x-autocompletetype="city" id="city" name="city">
	<label for="name">Postal Code</label> <input type="text" x-autocompletetype="postal-code" id="postal-code" name="postal-code">
	<label for="name">Country</label> <input type="text" x-autocompletetype="country" id="country" name="country">
	<label for="name">Company</label> <input type="text" x-autocompletetype="organization" id="organization" name="organization">
	<label for="name">Role at company</label> <input type="text" x-autocompletetype="org-title" id="org-title" name="org-title">
	<br>
	</div>
	<input type="submit" value="Submit your name">
</form>
                

<div id="block">&nbsp;</div>

<div id="data">
</div>



</body></html>