<?php

$server='localhost';
$user='root';
$password='';
$dbname='corona';


$con = mysqli_connect($server, $user ,$password , $dbname);

if ($con) {
	?>
	<script >
		alert("connection ok");
	</script>
	<?php
}else{
	?>
	<script >
		alert(" No connection ");
	</script>
	<?php

}
?>