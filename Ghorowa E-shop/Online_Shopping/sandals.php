<html>

<div><br/><center><h2><font face="Lucida Handwriting" size="+1" color="#00CCFF">Sandals</font></h2></center></div>
<div style="width:100%;float:left" >
<?php

include("config.php");

$catg=$_REQUEST['catg'];
$subcatg=$_REQUEST['subcatg'];


   $sel=mysql_query("select * from items where catg='$catg' and subcatg='$subcatg'");
   echo"<form method='post'><table border='0' align='center'><tr>";
   $n=1;
    while($arr=mysql_fetch_array($sel))
   {
   $i=$arr['itemno'];
    if($n%4==0)
	{
	echo "<tr>";
	}
   echo "
   <td height='280' width='240' align='center'><img src='admin/itempics/$i.jpg' height='200' width='200'><br/>
  
 <b>Item No:</b>".$arr['itemno'].
   "<br><b>Price:</b>Tk&nbsp;".$arr['price'].
   "<br><b>Description:</b>".$arr['desc'].
   "<br><br><a href='index.php?con=12 & itemno=$i'><img src='images/MetalPlakDa5new.gif' width='70' height='20'/></a>
      <a href='index.php?con=14 & itemno=$i'><img src='images/view7.jpg' width='70' height='20'/></a>
   </td>";
  $n++;

   }
   	  echo "</tr></table>
       </form>";
	?>
 
	</div>
</body>
</html>




