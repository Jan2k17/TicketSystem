<?php
	$id = $_GET['id'];
	
	$sql = "UPDATE users SET admin = '1' WHERE id = '$id'; ";
	
	if ($conn->query($sql) === TRUE) {
		?>
			<div class="alert alert-success">
				<strong>!ERFOLG!</strong> Dem User wurde Adminrechte zugeteilt.
			</div>
		<?php
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
?>