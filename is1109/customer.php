<!DOCTYPE html>
<html><!DOCTYPE html>
<html>
<head>
	<title>order</title> 
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<style>
body  {
  background-image: url("rice.jpg");
  background-size: cover;
  background-color: #cccccc;
}
</style>


<script>
	        function validation(){
				var Idnum = document.getElementById("num").value;
				var Day = document.getElementById("day").value;
			if(( Idnum.length <= 0) && (Day.length <= 0))
			{
			swal({
					title: "Submit Failed!!",
					title: "Fill the required fields",
					icon : "error",
				});
			}
			else 
			{
			swal({
					title: "Submit Succesful!!",
					icon : "Success",
					});
			}
		}
</script>
</head>

<body>
<div style="margin:0 auto;width:25%;text-align:left">
	<br>
<p align="center"><font size="120" color="#000700"> PLACE YOUR ORDER</font></p>

<form>
	<h1>Item:</h1>
		<select>
		<option value="">Samba</option>
		<option value="">Niwdu</option>
		<option value="">Kekulu</option>
		<option value="">Rathu Kekulu</option>
		</select>
  
  <h1>Item Code:</h1>
  		<input type="text" name="itemcode" id="code" placeholder="Code">
  <h1>Quantity:</h1>
  		<input type="text" name="num" id="num" placeholder="Num" />
  <h1>Date of Order:</h1> 
 		<input type="date" name="day" id="day" placeholder="Day" />
  <br><br><br>
  <button type="button" name="submit" class="btn" onclick="validation();">Submit</button>
  <input type="button" value="Check Availability">
  <input type="button" value="reset">
</form> 

</body>
</html>
