<h3>Entry DATA AKTIF_STUDI</h3>
<?php echo form_open('aktif_studi/add'); ?>

<table class="table table-bordered">
	<tr>
		<td>Nama</td>
		<td><?php echo form_input('nama','',
			"placeholder='Nama' class='form-control'"); ?></td>
	</tr>
	<tr>
		<td>Nim</td>
		<td><?php echo form_input('nim','',
			"placeholder='Nim' class='form-control'"); ?></td>
	</tr>
	<tr>
		<td>Fakultas</td>
		<td><?php echo form_input('fakultas','',
			"placeholder='Fakultas' class='form-control'"); ?></td>
	</tr>
	<tr>

		<td>Progdi/Jenjang</td>
		<td><?php echo form_input('progdi','',
			"placeholder='Progdi' class='form-control'"); ?></td>
	</tr>
	<tr>
		<td colspan="2">
		<?php echo form_submit('submit','simpan',"class='btn btn-danger btn-sm'") ?>
		</td>
	</tr>
</table>
</form>