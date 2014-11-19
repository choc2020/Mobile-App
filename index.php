<html>
<?php
include 'connect.php';
 ?>
<head>
</head>
<body>
<script>
function showDuration(str)
{

 if (str=="")
  {
  document.getElementById("multicountry").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("multicountry").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","duration.php?q="+document.getElementById("multicity").value,true);

xmlhttp.send();
}
</script>
	
	 
	
	 <form  id="search" method="POST" action="">
      <select name="cit" id="multicountry" onChange="showDuration(this.value);">
    <option value="">select the city</option>
	<?php
		$sql3 = "select*from search1";
		$retval3 = mysql_query( $sql3, $dbhandle );
		while($row3=mysql_fetch_array($retval3,MYSQL_ASSOC))
{?>
      <option value="<?php echo $row3['country'];?>"> <?php echo $row3['country'];?></option>
	  <?php }?>
		 </select>
		 <select  name="are" id="multiarea">
		 <option>choose the area</option>
		
		 </select>
		 
		 <input id="multisubmit" type="submit" value="search">
		 </form>
</body>
</html>
