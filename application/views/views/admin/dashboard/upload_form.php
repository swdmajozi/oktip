<html>
<head>
<title>Upload Form</title>
</head>
<body>
<?php


$dt_end = new DateTime('December 3, 2009 2:00 PM');
$remain = $dt_end->diff(new DateTime());
echo $remain->h . ' hours and ' . $remain->m . ' minutes';
?>

<?php echo @$error;?>

<?php echo form_open_multipart('upload/do_upload');?>

<input type="file" name="userfile" size="20" />

<br /><br />

<input name="submit" type="submit" value="upload" />

</form>

</body>
</html>