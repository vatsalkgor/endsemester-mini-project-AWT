<?php 
	move_uploaded_file($_FILES['files']['tmp_name'], '../upload/'.$_FILES['files']['name']);
?>
<img src="upload/<?php echo $_FILES['files']['name']?>" height="200px" width=400px;>