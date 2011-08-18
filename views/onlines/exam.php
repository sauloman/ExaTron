<script type="text/javascript" src="./ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="./ckfinder/ckfinder.js"></script>
<script type="text/javascript">

</script>
<html>
<head>
	<title>Editor de Examen</title>
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<style type="text/css">
</style>
</head>
<body>
	<form name="lol" action="../Controladores/pregunta_agrega.php" method="post">
		<p>
		Editor de examen UVP</p>
	  <p>
	    <label>selecciona examen escribe numero</label>&nbsp;</p>
		<p>
        
        <?php 
$link=mysql_connect("localhost","root",""); 
mysql_select_db("examen",$link); 
//echo"<select name=examen id=examen>"; 

$sql="SELECT Contenido FROM question ORDER BY RAND() limit 1, 5";
//$sql2="SELECT id FROM exam"; 

$result=mysql_query($sql); 
//$result2=mysql_query($sql2);
$i=0; 
while ($row=mysql_fetch_array($result)) 
{ 
//echo "<option value=".$row[$i].">".$row[$i]."</option>\n"; 
//echo "<option value=".$row[$i].">".$row[$i]."</option>\n";
   echo"$row[$i]";
   
   echo"Escribe el inciso de la respuesta correcta";
?>

   <p>
		  <label for="resp_Alumno"></label>
		  <input type="text" name="resp_Alumno" id="resp_Alumno">
 </p>
<?php   
} 
//echo "</select>"; 
?> 
        
		<p>
			<input type="submit"/>
		</p>
	</form>
</body>
</html>

