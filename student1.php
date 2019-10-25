<html>
<head>
<script>
button {
    background: red;
    cursor: pointer;
}
</script>
</head>
<body>
<?php
$rows=61;

$cols=10;
echo "<h1 align='center'><u>student marks list</u></h1>";
echo "<h2> faculty name:</h1>";
echo "<h2>faculty subject:</h1>";


echo "<center>";

echo "<table border='1'>";

	echo"<tr>";
	echo"<th>roll number</th>";
	echo"<th>slip test1</th>";
	echo"<th>slip test 2</th>";
	echo"<th>avg slip test</th>";
	echo"<th>mid 1</th>";
	echo"<th>mid 2</th>";
	echo"<th>avg mid</th>";
	echo"<th>lab internal 1</th>";
	echo"<th>lab internal 2</th>";
	echo"<th>lab internal avg</th>";
	echo"</tr>";

for($i=1;$i<$rows;$i++)

{
echo "<tr>";
for($j=0;$j<$cols;$j++)
{
	if($j==0)
	{
		echo"<td>1601188620".$i."</td>";
	}
	else
		echo "<td><INPUT TYPE='TEXT' size='10'/></td>";
}

echo "</tr>";

}

echo "</table>";
echo "<br/>";
echo "<br/>";
echo "<input type='button' style='font-size:25px' style='font-color:blue' value='SUBMIT' class='block'/></center>";

?>
</BODY>
</HTML>
