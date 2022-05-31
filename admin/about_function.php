<?php
include("connection.php");
$msg = false;
		if (isset($_POST['add_about']))
		{
			$about  = $_POST['about'];
			//echo $about;

			$qr = "INSERT INTO about_table(about_info) VALUES ('$about')";
			if ($connectQuery->query($qr) === TRUE)
				 	{
		    		$msg=TRUE;
					} else
				 	{
		    		$msg=false;
					}
					header('Location:about.php?msg='.$msg);
					
		}
if (isset($_POST['update_about']))
{
	$id = $_POST['aid'];
	$about  = $_POST['about_data'];
	//echo $about;

	$qr = "UPDATE about_table SET about_info='$about' WHERE id = '$id'";
	//"INSERT INTO about_table(about_info) VALUES ('$about')";
	if ($connectQuery->query($qr) === TRUE)
		 	{
    		$msg=TRUE;
			} else
		 	{
    		$msg=false;
			}
			header('Location:about.php?msg='.$msg);
			
}
if (isset($_POST['add_disclaimer']))
{
	$disclaimer  = $_POST['disclaimer'];
	//echo $about;

	$qr = "INSERT INTO disclaimer_table(disclaimer) VALUES ('$disclaimer')";
	if ($connectQuery->query($qr) === TRUE)
		 	{
    		$msg=TRUE;
			} else
		 	{
    		$msg=false;
			}
			header('Location:disclaimer.php?msg='.$msg);
			
}
if (isset($_POST['add_slider']))
{
	$files = $_FILES['image'];
  		//call_issue
  		//print_r($files);
    $filename = $files['name'];
    $fileerror = $files['error'];
    $filetmp = $files['tmp_name'];
    $fileext = explode('.', $filename);
    $filecheck = strtolower(end($fileext));
    $fileextstored = array('png', 'jpg', 'jpeg', 'gif');
	   	if (in_array($filecheck, $fileextstored)) {
	   		// code...
	   		$destfile = 'slider/'.$filename;
	   		move_uploaded_file($filetmp, $destfile);
	   		 
	   	}

	$qr = "INSERT INTO web_slider(image) VALUES ('$destfile')";
	if ($connectQuery->query($qr) === TRUE)
		 	{
    		$msg=TRUE;
			} else
		 	{
    		$msg=false;
			}
			header('Location:web_slider.php?msg='.$msg);
			
}

if (isset($_POST['update_disclaimer']))
{
	$id = $_POST['did'];
	$disclaimer  = $_POST['disclaimer_data'];
	//echo $about;

	$qr = "UPDATE disclaimer_table SET disclaimer='$disclaimer' WHERE id = '$id'";
	//"INSERT INTO about_table(about_info) VALUES ('$about')";
	if ($connectQuery->query($qr) === TRUE)
		 	{
    		$msg=TRUE;
			} else
		 	{
    		$msg=false;
			}
			header('Location:disclaimer.php?msg='.$msg);
			
}
if (isset($_POST['update_slider']))
{
	$id = $_POST['eid'];
	$files = $_FILES['file'];
	  $filename = $files['name'];
    $fileerror = $files['error'];
    $filetmp = $files['tmp_name'];
    $fileext = explode('.', $filename);
    $filecheck = strtolower(end($fileext));
    $fileextstored = array('png', 'jpg', 'jpeg', 'gif');
	   	if (in_array($filecheck, $fileextstored)) {
	   		// code...
	   		$destfile = 'slider/'.$filename;
	   		move_uploaded_file($filetmp, $destfile);
	   		 
	   	}

	$qr = "UPDATE web_slider SET image='$destfile' WHERE id = '$id'";
	//"INSERT INTO about_table(about_info) VALUES ('$about')";
	if ($connectQuery->query($qr) === TRUE)
		 	{
    		$msg=TRUE;
			} else
		 	{
    		$msg=false;
			}
			header('Location:web_slider.php?msg='.$msg);
			
}
?>