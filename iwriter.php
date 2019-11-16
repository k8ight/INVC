<?php
include("engine/wengine"); 

?>
<head>
<title>Iwriter</title>
<link rel="stylesheet" href="engine/istyle.css">
</head>


<body>
<?php 

if(!empty($_SESSION["lxr"])){
echo'
<h1>INVOICE DETAILS</h1>
<form action="" method="post">
Item:<select name="itm">
<option value="8mbps_300">8mbps_300</option>
<option value="12mbps_500">12mbps_500</option>
<option value="16mbps_800">16mbps_800</option>
</select><br>
Quantity:<select class="qty" name="qty">
<option value="1">1 Unit</option>
<option value="6">6 Unit</option>
<option value="12">12 Unit</option>
</select><br>
UPrice:<select name="up">
<option value="300">Rs 300</option>
<option value="500">Rs 500</option>
<option value="800">Rs 800</option>
</select><br>
<input type="submit" value="Add to Invoice Receipt" />

</form>
<a href="./iwriter.php?done=yes"><button id="a">Done Adding</button></a>
<a href="./iwriter.php?kill=yes"><button id="a">Cancel this & Delete Inputed</button></a>
<iframe id="myiFrame" src="./invoice.php?cuz='.$_SESSION['idx'].'.'.$_SESSION['cuzn'].'" >
</iframe>

';
}

else
{
	echo'<center>
<h1>CUSTOMER DETAILS</h1>
<form action="" method="post">
<input type="text" name="cuzn" class="cuzn" placeholder="Customer Name" required /><br>
<textarea  name="cuza" placeholder="Customer Address" required ></textarea><br>
<input type="text" name="cuzp" class="cuzap" placeholder="Customer pincode" required /><br>
<input type="text" name="cuzc" class="cuzp" placeholder="Customer Phone,Email" required /><br>
<input type="submit" value="create Invoice Form" />
</form>
<a href="./"><button id="a">Back To main</button></a></center>';

echo $randomid;	
}
?>


</body>