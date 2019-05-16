<?php
if(isset($_POST['submit'])){
	$file = $_FILES['file'];
	
	$fileName = $file['name'];
	$fileTmpName = $file['tmp_name'];
	$fileSize = $file['size'];
	$fileError = $file['error'];
	
	$fileExt = explode('.', $fileName);
	$fileExtCorrection = strtolower(end($fileExt));
	
	$allowed = array('jpg', 'jpeg', 'png', 'pdf');
	
	if(in_array($fileExtCorrection, $allowed)){
		if($fileError === 0){
			if($fileSize < 1000000){
				$fileNameNew = uniqid('', true).".".$fileExtCorrection;
				$fileDes = 'uploads/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDes);
				header("Location: index.php?upload=success");
			}else{
				echo "the file you uploaded is bigger than 20mb";
			}
		}else{
			echo "there's an error uploading your file";
		}
	}else{
		echo "you can't upload this type of file";
	}
}