<!DOCTYPE html>
<?php 
include("engine/engine");
include("engine/compiler");
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $cname; ?>Customer Copy</title>
    <link rel="stylesheet" href="engine/style.css" media="all" />
	<script src="engine/jquery-2.2.1.min.js" type="text/javascript"></script>
  </head>
  <body><div id="body">
  <div id="pa">
    <header class="clearfix">
      <div id="logo">
     <img src="data:image/png;base64,<?php echo $logoi;?>">
      </div>
      <div id="company">
        <h2 class="name"><?php echo $cname; ?></h2>
        <div><?php echo $caddress; ?></div>
        <div><?php echo $ccontact; ?></div>
		<div>GST TIN:<?php echo $gsti; ?></div>
        <div><!--<a href="mailto:company@example.com">company@example.com</a>--></div>
      </div>
      </div>
    </header>
    <main>
      <div id="details" class="clearfix">
        <div id="client">
          <div class="to">INVOICE TO:</div>
          <h2 class="name"><?php echo $name;?></h2>
          <?php echo $adx;?>
        </div>
        <div id="invoice">
          <h3>INVOICE <?php echo $ivn;?></h3>
          <div class="date">Date of Invoice: <?php echo $tdte;?></div>
         
        </div>
      </div>
      <table border="1" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
            <th class="no">#</th>
            <th colspan="2" class="desc">ITEM DESCRIPTION</th>
            <th class="qty">QUANTITY</th>
            <th class="total">ITEM PRICE</th>
          </tr>
        </thead>
        <tbody>
	 <?php	  echo $idata;?>   

 	   

		  
        </tbody>
        <tfoot >
		
          <tr>
            <td colspan="3"></td>
            <td colspan="0">SUBTOTAL:</td>
            <td><b>Rs. <span id="totals"></span></b></td>
          </tr>
          <tr>
            <td colspan="3"></td>
            <td colspan="0">CGST <?php echo $cgst; ?>%:</td>
            <td>+ Rs. <span id="cgst"></span></td>
          </tr>
		  <tr>
            <td colspan="3"></td>
            <td colspan="0">SGST <?php echo $sgst; ?>%:</td>
            <td>+ Rs. <span id="sgst"></span></td>
          </tr>
          <tr>
            <td colspan="3"></td>
			<td colspan="0"><b>GRAND TOTAL:</b></td>
            <td><b>Rs. <span id="gt"></span></b></td>
          </tr>
		  	  
		  <tr></tr>
		
		  
        </tfoot>
	
      
  
      </table>
      <td class="authx" > Authorised Signature:<img height="50" width="100" src="data:image/png;base64,<?php echo $authl;?>"/>  </td>
     <!-- <div id="notices">
        <div>Registerd DATA:</div>
        <div class="notice">IP= & MAC= </div>
      </div>-->
	  <footer>
	  <center><b>Invoice was created on a computer and is not valid without the signature & seal.
		 <br> All payments must be done on due date Or <?php echo $fine;?> fine will be granted</b></center>
	  </footer>
	  
	  
	  
	  
	   </main>
	</div>
	</div>
    
	<center><input type="button" onclick="pa()" value="Print" /><a href="./"><button>Back</button></a></center>
	
	
	<script>
	  
var sum = 0;
$('.totalprice').each(function()
{
    sum += parseFloat($(this).text());
});
var cgst= (sum * <?php echo $cgst;?>)/100 ;
var sgst= (sum * <?php echo $sgst; ?>)/100 ;
var gt= (sum + cgst + sgst) ;
document.getElementById("totals").innerHTML = sum +".00";
document.getElementById("cgst").innerHTML = +(Math.round(cgst + "e+2")  + "e-2") ;
document.getElementById("sgst").innerHTML = +(Math.round(sgst + "e+2")  + "e-2") ;
document.getElementById("gt").innerHTML = +(Math.round(gt + "e+2")  + "e-2") ;





	function pa() {
      var printContents = document.getElementById('body').innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
	</script>
  </body>
</html>