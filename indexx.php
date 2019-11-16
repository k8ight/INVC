<!DOCTYPE html>
<?php 
session_destroy();
include("engine/engine");
?>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title></title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<meta name="viewport" content="width=device-width,initial-scale=1" />
	
		<link rel="stylesheet" href="engine/main.css" />
		<script>
						(function(doc){var addEvent='addEventListener',type='gesturestart',qsa='querySelectorAll',scales=[1,1],meta=qsa in doc?doc[qsa]('meta[name=viewport]'):[];function fix(){meta.content='width=device-width,minimum-scale='+scales[0]+',maximum-scale='+scales[1];doc.removeEventListener(type,fix,true);}if((meta=meta[meta.length-1])&&addEvent in doc){fix();scales=[.25,1.6];doc[addEvent](type,fix,true);}}(document));
		</script>
	</head>
<body link="black" vlink="black"> 


<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search Using Invoice NO.." title="Type in a name">
		 
<img alt src="data:image/png;base64,<?php echo $logoi;?>"  id="logo" type="image/png">



<br>
		
 <div id='listm'><ul id='myUL' style='list-style-type:none'><h3><b>Invoices</b></h3>
		  <?php
	
$ext='*.customer';
$files = glob('./database/*.'.$ext.'');
foreach($files as $file) {
    $file = pathinfo($file);
    echo "<div id='".md5($file['filename'])."'><li><table border=1>
	<tr><td>
	<b><a href='./invoice.php?cuz=".$file['filename']."'><span  class='item' id='audi'>".$file['filename']."</span><span id='".md5($file['filename']).'ispa'."'></span></a></a></b>
	<br></td></tr>
	</table></li></div>
	";	

}?>

</div>
<div id="cnew"><center>
<a href="iwriter.php"><button id="a">New Invoice</button></a>
</center>
</div>
<script>

function myFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
	hr=document.getElementsByTagName("td");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
			hr[i].style.display="";
			hr[i].style.width="550px";
			
			} else {
				hr[i].style.display="none";
            li[i].style.display = "none";
			

        }
    }
}
function onlyPlayOneIn(container) {
  container.addEventListener("play", function(event) {
  audio_elements = container.getElementsByTagName("audio")
    for(i=0; i < audio_elements.length; i++) {
      audio_element = audio_elements[i];
      if (audio_element !== event.target) {
        audio_element.pause();
      }
    }
  }, true);
}

document.addEventListener("DOMContentLoaded", function() {
  onlyPlayOneIn(document.body);
});
</script>
		<br>
	
</body>
</html>
</!DOCTYPE html>
