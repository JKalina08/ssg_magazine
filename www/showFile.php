<?php
//echo $_POST['file'];
if (isset($_POST['file'])) {

$file = "res/".$_POST['file'];
//echo $file;
if (file_exists($file) && is_readable($file) && preg_match('/\.pdf$/',$file)) {
	header('Content-Type: application/pdf');
	header("Content-Disposition: attachment; filename=\"$file\"");
	readfile($file);
	}

if (file_exists($file) && is_readable($file) && preg_match('/\.docx$/',$file)) {
	header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
	header("Content-Disposition: attachment; filename=\"$file\"");
	readfile($file);
	}    

if (file_exists($file) && is_readable($file) && preg_match('/\.doc$/',$file)) {
	header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
	header("Content-Disposition: attachment; filename=\"$file\"");
	readfile($file);
	}     

}
?>