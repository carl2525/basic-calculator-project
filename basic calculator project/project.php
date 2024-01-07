<html>
<head>
 <title>PHP Test</title>
 <link rel="stylesheet" href="css/style.css?v=<?php echo time();?>">

  <meta charset="utf-8">
  	<span style="font-size:32px;color:white;font-weight:bold;font-family:Gill Sans MT;cursor:pointer;float:right;padding-right:15px;padding-top:16px;position:relative" onclick="openNav()"> MENU &#9776</span>

  	<div class="logo">
		<a href="#"><img src="css/img/rtulogo.png" height="75" width="300"></a>
		</div>

				<div id="myNav" class="overlay">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<div class="overlay-content">
			<ul>
				<li><a href="#">HOMEPAGE</a></li>
				<li><a href="#">OFFLINE</a></li>
				<li><a href="#">OFFLINE</a></li>
				<li><a href="#">DOWN OFFLINE</a></li>
				</ul>
			</div>
			</div>

</head>
<body>

<?php 
if (isset($_POST['Submit'])) {
$picture = $_POST['picture'];
$n =$_POST['n'];
$farenheit =$_POST['farenheit'];
$base =$_POST['base'];
$height =$_POST['height'];
$length =$_POST['length'];
$width =$_POST['width'];


if ($picture == "circle") {
	echo $_POST['farenheit'] = "";
	echo $_POST['base'] = "";
	echo $_POST['height'] = "";
	echo $_POST['length'] = "";
	echo $_POST['width'] = "";

if($n !="")
	{
	$finalCircPic=("<IMG SRC =css/img/circle.png>");
	$answerarea = (pi())*$_POST['n']*$_POST['n'];
	$answercircum = 2*(pi())*$_POST['n'];
	$answerdiam =  2*$_POST['n'];

	$finalarea = "The Area of the Circle is Equals to: ".number_format((float)$answerarea, 3, '.', '' );
	$finalcircum = "The Circumference of the Circle is Equals to: ".number_format((float)$answercircum, 3, '.', '' );
	$finaldiam = "The Diameter of the Circle is Equals to: ".number_format((float)$answerdiam, 3, '.', '' );
	}

	else 
	{
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $counter = isset($_POST['counter']) ? $_POST['counter'] : 0;
  if(isset($_POST["Submit"])){
    $counter++;

    $errorIdentifier = "Please Input Properly on Radius Value Error # ".$counter;
    $finalWarning =("<IMG SRC =css/img/warning.png>");

    while($counter>2)
    {
    	if($counter>=3)
    	{
    		echo '<script type="text/javascript"> ';  
    		echo '  if (confirm("Blank Space Detected/No Formula is Choosen Two Times in a Row, Please Input Properly on the Given Textfield. Thank You!!")) {';  
    		 		' $counter ="0" ';
    		echo '}';
    		echo '</script>'; 	

    	}
    	$counter =0;
    	 echo "<meta http-equiv='refresh' content='0'>";

    }

  
   }
}	

	}
	

}

else if ($picture == "temp"){

	echo $_POST['n'] = "";
	echo $_POST['base'] = "";
	echo $_POST['height'] = "";
	echo $_POST['length'] = "";
	echo $_POST['width'] = "";


	if($farenheit !="" )
	{
	echo $_POST['n'] = "";
	$finalThermo =("<IMG SRC =css/img/thermo.png>");


$answertemp = ($_POST['farenheit']-32)*5/9;
$finalTemp = "The Conversion of Farenheit to Celsius is: ".number_format((float)$answertemp, 3, '.', '' ). "C";

}
else
	{
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $counter = isset($_POST['counter']) ? $_POST['counter'] : 0;
  if(isset($_POST["Submit"])){
    $counter++;
     $errorIdentifier = "Please Input Properly on Farenheit Value Error # ". $counter;
     $finalWarning =("<IMG SRC =css/img/warning.png>");

    while($counter>2)
    {
    	if($counter>=3)
    	{
    		echo '<script type="text/javascript"> ';  
    		echo '  if (confirm("Blank Space Detected/No Formula is Choosen Two Times in a Row, Please Input Properly on the Given Textfield. Thank You!!")) {';  
    		 		' $counter ="0" ';
    		echo '}';
    		echo '</script>'; 	

    	}
    	$counter =0;
    	 echo "<meta http-equiv='refresh' content='0'>";

    }

  
   }
}	
	}
}

else if ($picture == "triangle"){

	echo $_POST['farenheit'] = "";
	echo $_POST['n'] = "";
	echo $_POST['length'] = "";
	echo $_POST['width'] = "";


		if($base !="" && $height !="" )
{
$finalTriPic =("<IMG SRC =css/img/triangle.png>");

$answertri = ($_POST['height']*$_POST['base'])/2;
$finalTri = "The Area of the Triangle is Equals to: ".number_format((float)$answertri, 3, '.', '' );


}
else
{
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $counter = isset($_POST['counter']) ? $_POST['counter'] : 0;
  if(isset($_POST["Submit"])){
    $counter++;
     $errorIdentifier = "Please Input Properly on Ht. & Base Value Error # ".$counter;
     $finalWarning =("<IMG SRC =css/img/warning.png>");

    while($counter>2)
    {
    	if($counter>=3)
    	{
    		echo '<script type="text/javascript"> ';  
    		echo '  if (confirm("Blank Space Detected/No Formula is Choosen Two Times in a Row, Please Input Properly on the Given Textfield. Thank You!!")) {';  
    		 		' $counter ="0" ';
    		echo '}';
    		echo '</script>'; 	

    	}
    	$counter =0;
    	 echo "<meta http-equiv='refresh' content='0'>";

    }

  
   }
}	
}
}


else if ($picture == "rectangle"){

	echo $_POST['farenheit'] = "";
	echo $_POST['n'] = "";
	echo $_POST['base'] = "";
	echo $_POST['height'] = "";

	if($length !="" && $width !="" )
{

$finalRecPic=("<IMG SRC =css/img/rectangle.png>");


$answerRArea = $_POST['width']*$_POST['length'];
$answerPeri = 2*($_POST['length']+$_POST['width']);

$finalRArea = "The Area of the Rectangle is Equals to : ".number_format((float)$answerRArea, 3, '.', '' );
$finalPeri = "The Perimeter of the Rectangle is Equals to: ".number_format((float)$answerPeri, 3, '.', '' );

}

else
{
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $counter = isset($_POST['counter']) ? $_POST['counter'] : 0;
  if(isset($_POST["Submit"])){
    $counter++;
    $errorIdentifier = "Please Input Properly on Lgt & Wth Value Error # ".$counter;
    $finalWarning =("<IMG SRC =css/img/warning.png>");

    while($counter>2)
    {
    	if($counter>=3)
    	{
    		echo '<script type="text/javascript"> ';  
    		echo '  if (confirm("Blank Space Detected/No Formula is Choosen Two Times in a Row, Please Input Properly on the Given Textfield. Thank You!!")) {';  
    		 		' $counter ="0" ';
    		echo '}';
    		echo '</script>'; 	

    	}
    	$counter =0;
    	 echo "<meta http-equiv='refresh' content='0'>";

    }

  
   }
}	
}
}



else {
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $counter = isset($_POST['counter']) ? $_POST['counter'] : 0;
  if(isset($_POST["Submit"])){
    $counter++;
    $nochoose = ("No Formula is Choosen, Choose Formula Error #").$counter;
    $choosepic = ("<IMG SRC =css/img/chooseWarning.png>");

    while($counter>2)
    {
      if($counter>=3)
      {
        echo '<script type="text/javascript"> ';  
        echo '  if (confirm("Blank Space Detected/No Formula is Choosen Two Times in a Row, Please Input Properly on the Given Textfield. Thank You!!")) {';  
            ' $counter ="0" ';
        echo '}';
        echo '</script>';   

      }
      $counter =0;
       echo "<meta http-equiv='refresh' content='0'>";

    }

  
   }
} 

}
}

?>

<br><br><br>
<h1><center><b>BASIC CALCULATOR PROJECT</center></b></h1>

<div class ="numberInput">
<form Name="f1" action="project.php" method="post">

<div class="input">

<div id=circle>
<h2>INPUT FOR CIRCLE ONLY</h2>
<p><b>Enter Radius:</b><br> <input type="text" onkeypress="return isNumberKey(event)" name="n" placeholder="Input Radius Value" value="<?php if (isset($_POST['n'])) echo $_POST['n']; ?>"/></p><hr/> <br>
</div>

<div id=temperature>
<h2>INPUT FOR TEMPERATURE CONVERTER ONLY</h2>
<p><b>Enter Farenheit:<br></b>  <input type="text" name="farenheit" onkeypress="return isNumberKey(event)"  placeholder="Input Farenheit Value" value="<?php if (isset($_POST['farenheit'])) echo $_POST['farenheit']; ?>"/></p><hr/> <br>
</div>

<div id=triangle>
<h2>INPUT FOR TRIANGLE ONLY</h2>
<p><b>Enter Base of Triangle:<br></b>  <input type="text" name="base" onkeypress="return isNumberKey(event)"  placeholder="Input Base Value" value="<?php if (isset($_POST['base'])) echo $_POST['base'];?>"/></p>
<p><b>Enter Height of Triangle:<br></b>  <input type="text" name="height" onkeypress="return isNumberKey(event)"  placeholder="Input Height Value" value="<?php if (isset($_POST['height'])) echo $_POST['height'];?>"/></p><hr/> <br>
</div>

<div id=rectangle>
<h2>INPUT FOR RECTANGLE ONLY</h2>
<p><b>Enter Length of Rectangle:<br></b>  <input type="text" name="length" onkeypress="return isNumberKey(event)"  placeholder="Input Length Value" value="<?php if (isset($_POST['length'])) echo $_POST['length'];?>"/></p>
<p><b>Enter Width of Rectangle:<br></b>  <input type="text" name="width" onkeypress="return isNumberKey(event)"  placeholder="Input Width Value" value="<?php if (isset($_POST['width'])) echo $_POST['width'];?>"/></p><hr/> <br>
</div>
</div>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br>

<h2>FORMULA CHOOSE</h2>

<div class="compute">
<select name="picture">
<option value="none">Choose Formula</option>
<option value="circle" <?php if($_POST['picture']=='circle') echo 'selected="selected"';?>>Formula of Circle</option>
<option value="temp" <?php if($_POST['picture']=='temp') echo 'selected="selected"';?>>Farenheit to Celsius</option>
<option value="triangle" <?php if($_POST['picture']=='triangle') echo 'selected="selected"';?>>Area of Triangle</option>
<option value="rectangle" <?php if($_POST['picture']=='rectangle') echo 'selected="selected"';?>>Area and Perimeter of Rectangle</option>
</select>
<br>
<input type="submit" name = "Submit" Value = "Choose Formula Computation">
<input type = "hidden" name = "counter" value = "<?php echo $counter; ?>" />
</div>
</form>
<br>



<div class="finalAnswers">
<div class="answer">
	<p><?php echo $finalCircPic?></p>
	<p><?php echo $finalarea?></p>
	<p><?php echo $finalcircum?></p>
	<p><?php echo $finaldiam?></p>

</div>
<div class ="answer1">
	<p><?php echo $finalThermo?></p>
	<p><?php echo $finalTemp?></p>
</div>
<div class ="answer2">
	<p><?php echo $finalTriPic?></p>
	<p><?php echo $finalTri?></p>
</div>
<div class ="answer3">
	<p><?php echo $finalRecPic?></p>
	<p><?php echo $finalRArea?></p>
	<p><?php echo $finalPeri?></p>
</div>
<div class ="answer4">
	<p><?php echo $nochoose?></p>
  <p><?php echo $choosepic?></p>
</div>
<div class="answerError">
	<p><?php echo $errorIdentifier?></p>
	<p><?php echo $finalWarning?></p>
	</div>
</div>
<br><br>
<br>
<br>
<br>

<script type="text/javascript">
	function openNav() {
  document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.height = "0%";
}

function isNumberKey(evt)
       {
          var charCode = (evt.which) ? evt.which : evt.keyCode;
          if (charCode != 46 && charCode > 31 
            && (charCode < 48 || charCode > 57))
             return false;

          return true;
       }
</script>
</body>
	<div class="footer">
	<p><b>© Copyright Rizal Technological University, All Rights Reserved 2021</p></b>
	<br>
	<br>
	<br>
</div>

</html>