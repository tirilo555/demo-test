<html>

<head>
<script type="text/javascript">
alert('Готово');

var map = function(func, arr) {
	    var result = [ ];
	    for(var i=0; i<arr.length; i++) {
			var g=func();
	        result[i] = g*arr[i];
	    }
	    return result;
	}
//alert(map( function (a) { return a*3 } ,  [1,2,3]));
alert('funk');
//Пример использования:
var func=function(){
	var i;
	i=555;
	return i;
}
alert(map(func, [10, 20, 30]));  // = [1,2,3]
</script>
<body>
	<p>Hello!</p>

</body>

<html>