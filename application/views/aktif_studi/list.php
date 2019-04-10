<h3>DATA AKTIF_STUDI</h3>
<?php echo anchor('aktif_studi/add','ENTRY',
	array('class'=>'btn btn-danger btn-sm')); ?>
<table class="table table-bordered">
	<tr>
		<td>No</td>
		<td>Nama</td>
		<td>Nim</td>
		<td>Fakultas</td>
		<td>Progdi</td>
		<td colspan="2">ACTION</td>
	</tr>
<?php
$no=1;
foreach ($aktif_studis as $aktif_studi){
	echo "<tr>
	<td width='10'>$no</td>
	<td>$aktif_studi->Nama</td>
	<td>$aktif_studi->Nim</td>
	<td>$aktif_studi->Fakultas</td>
	<td>$aktif_studi->Progdi</td>
	<td width='20'>";
	echo anchor('aktif_studi/edit/'.$aktif_studi->Id,'Edit',
		array('class'=>'btn btn-danger btn-sm'));
	echo "</td>
	<td width='20'>";
	echo anchor('aktif_studi/delete/'.$aktif_studi->Id,'Delete',
		array('class'=>'btn btn-danger btn-sm'));
	echo "</td>
	</tr>";
	$no++;
}
?>
</table>
	