<?php
class database extends SQLite3{
function __construct(){
		$this->open('quizgame.db');
		
	}
}
$db = new database();
echo "WEBTECH LEC","</br>";
$query1="SELECT * FROM quiz;";
echo "<table><tr><td>id</td><td>name</td><td>file_path</td></tr>";
$result=$db->query($query1);
while ($row = $result->fetchArray()){

echo "<tr>";
echo '<tr><td>'.$row ['id'] .'</td>
<td>'.$row['name'] .'</td>
 <td>';?><a href='<?php echo$row['file_path'];?>'><?php echo $row['file_path'];?><?php echo '</a>';?> <?php echo '</td
 </tr>';

 }
?>