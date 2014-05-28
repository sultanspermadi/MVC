<?php include_once ('includes/header.php');?>
<?php
$id="";
$username= "";
$email= "";
$contact= "";
$address="";

if($hasil->num_rows()!=0)
{
	$data = $hasil->row();

$username	= $data->username;
$email     	= $data->email;
$contact	= $data->contact;
$address 	= $data->address;
}

?>


<form name="edit_user" action="<?php echo $action; ?>" method="post">
<center>
<div class="span12">
<table width="500" align="center" cellpadding="5">
<legend>FORM EDIT BIODATA</legend>
<tr>
<th align="right">Username : </th>
<td><input type="text" name="username" value="<?php echo $username; ?>"></td>
</tr>

<tr>
<th align="right">Email : </th>
<td><input type="text" name="email" value="<?php echo $email; ?>"></td>
</tr>

<tr>
<th align="right">Contact : </th>
<td><input type="text" name="contact" value="<?php echo $contact; ?>"></td>
</tr>

<tr>
<th align="right">Address : </th>
<td><textarea name="address"><?php echo $address; ?></textarea></td>
</tr>

<tr>
<th align="right"></th>
<td><input class="btn btn-primary" type="submit" name="submit" value="UBAH" onclick="return confirm('Anda Akan Mengubah Biodata ?')">
<a href="<?php echo base_url('index.php/mvc_c/index') ?>">KEMBALI</a>
</td>
</tr>
</table>
<?php echo validation_errors(); ?>
</div>
</form>
</center>

<?php include_once ('includes/footer.php'); ?>