<h3>Edit DATA AKTIF_STUDI</h3>
<?php echo form_open('aktif_studi/edit'); ?>
<?php echo form_hidden('id', $aktif_studi[0]->Id);?>
<table class="table table-bordered">
	<tr>
		<td>Nama</td>
		<td><?php echo form_input('nama',$aktif_studi[0]->Nama,
			"placeholder='Nama' class='form-control'"); ?></td>
	</tr>
	<tr>
		<td>Nim</td>
		<td><?php echo form_input('nim',$aktif_studi[0]->Nim,
			"placeholder='nim' class='form-control'"); ?></td>
	</tr>
	<tr>

		<td>Fakultas</td>
		<td><?php echo form_input('fakultas',$aktif_studi[0]->Fakultas,
			"placeholder='Fakultas'class='form-control'"); ?></td>
	</tr>
	<tr>

		<td>Progdi/Jenjang</td>
		<td><?php echo form_input('progdi',$aktif_studi[0]->Progdi,
			"placeholder='Progdi/Jenjang' class='form-control'"); ?></td>
	</tr>
	<tr>
		
		<td colspan="2">
		<?php echo form_submit('submit','simpan',"class='btn btn-danger btn-sm'")?>
		<?php echo anchor('aktif_studi','Kembali',array('class'=>'btn btn-danger btn-sm'));?>
		</td>
	</tr>
</table>
</form>