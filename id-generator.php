<?php
$conn = mysqli_connect('localhost' ,'root' , '' , '');
if ($conn->connect_error){
    die('Connection failed : '.$conn->connect_error);
}
$query = mysqli_query($conn , "select * from users1");
while($row = mysqli_fetch_array($query)){
  $name = $row['name'];
  $dob = $row['dob'];
  $sex= $row['sex'];
  $pob = $row['pob'];
  $poi = $row['poi'];
  $doi = $row['doi'];

  
 
}
//$sql = "SELECT * FROM users ";
//$result = mysqli_query($conn, $sql);
 
//$usernames = mysqli_fetch_all($result);

//$encoded = trim(json_encode ($usernames,JSON_NUMERIC_CHECK),"[]");
//echo $encoded;
//<?php echo trim(json_decode ($encoded)) 
?>
  <?php
        $conn = mysqli_connect("localhost", "root", "", "");
		$query = " select * from "" order by id desc limit 1";
		$result = mysqli_query($conn, $query);

		while ($data = mysqli_fetch_assoc($result)) {
	?>
		<img class="im2" src="./image/<?php echo $data['filename']; ?>">

	<?php
		}
	?>
