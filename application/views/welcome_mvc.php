<?php include_once('includes/header.php'); ?>

<div class="span4">
	<div class="tabbable">
    	<ul class="nav nav-tabs">
    	<li><a href="#form" data-toggle="tab">FORM INPUT</a></li>
    	</ul>
<div class="tab-content">
<div class="tab-pane active" id="form">
<table>
<?php echo form_open($action) ?>
<tr>
<th align="right">Username : </th>
<td><?php echo form_input('username') ?></td>
</tr>

<tr>
<th align="right">Email : </th>
<td><?php echo form_input('email') ?></td>
</tr>

<tr>
<th align="right">Contact : </th>
<td><?php echo form_input('contact') ?></td>
</tr>

<tr>
<th align="right">Address : </th>
<td><?php echo form_textarea('address') ?></td>
</tr>

<tr>
<th align="right"></th>
<td><input type="submit" name="submit" value="SAVE" class="btn btn-primary" ></td>
</tr>

<?php echo form_close() ?>
</table>
<?php echo validation_errors() ?>
</div>
</div>
</div>
</div>



<div class="span7">
<div class="tabbable">
    	<ul class="nav nav-tabs">
    	<li><a href="#userdata" data-toggle="tab">USER DATA</a></li>
    	</ul>
<div class="tab-content">
<div class="tab-pane active" id="userdata">
<table class="table table-hover">
<tr>
<th align="center">No</th>
<th align="center">Username</th>
<th align="center">Email</th>
<th align="center">Contact</th>
<th align="center">Address</th>
<th align="center">Action</th>
</tr>
<?php $i=1; foreach($hasil as $data) { ?>
<tr>
<td align="center"><?php echo $i++ ?></td>
<td align="center"><?php echo $data->username ?></td>
<td align="center"><?php echo $data->email ?></td>
<td align="center"><?php echo $data->contact ?></td>
<td align="center"><?php echo $data->address ?></td>
<td align="center">
<a href="<?php echo base_url('index.php/mvc_c/edit/'.$data->id.'') ?>"><i class="icon-pencil"></i></a>
<a href="<?php echo base_url('index.php/mvc_c/remove/'.$data->id.'') ?>" onclick="return confirm('apakah anda yakin ingin menghapus ?')"><i class="icon-remove"></i></a>
</td>
</tr>
<?php } ?>
</table>
</div>
</div>
</div>
</div>

<?php include_once('includes/footer.php'); ?>