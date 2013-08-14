<html>
<header>
<title></title>
<script type="text/javascript" src="../scripts/jquery-1.9.1.js"></script>
<script type="text/javascript">
jQuery(function($){
	console.log("файл підключений");
	$("#first_name").blur(function(){
	var name=this.name;
	console.log(name);
	});
	$("#first_name").css('color','red');
})
</script>
</header>
<body>
<form>
<input type="text" name="first_name" id="first_name" value="">
<input type="text" name="last_name" id="last_name" value="">
</form>
</body>
</html>