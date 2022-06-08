<?php
include_once "connection.php";
$sql = "SELECT COUNT(ID) as count_id FROM registration;";
$result = mysqli_query($link, $sql);
$totalStudentsRegistered = null;
if(mysqli_num_rows($result)>0)
{
	while($row = mysqli_fetch_assoc($result))
	{

		$totalSTudentsRegistered = $row['count_id'];
	}
}


$html = "
<table>
  <tr>
    <th>Total Students</th>
    <th>Contact</th>
    <th>Country</th>
  </tr>
  <tr>
    <td> " . $totalSTudentsRegistered . " </td>
    <td>Maria Anders</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
  </tr>
</table>";

echo $html;