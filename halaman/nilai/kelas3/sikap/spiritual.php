<?php

	$id = $_POST['id'];

	if ( $id== "Spritual") {
?>

<div class="col-sm-offset-3">
	<div class="checkbox">
		<label><input type="checkbox"  name="nilai[]" value="ketatan dalam beribadah,"> ketatan dalam</label> 
		<label><input type="checkbox"  name="nilai[]" value="berperilaku syukur,"> berperilaku syukur</label>
		<label><input type="checkbox"  name="nilai[]" value="toleransi dalam beribadah"> toleransi dalam beribadah</label>
	</div>
</div>
<div class="col-sm-offset-3">
	<div class="checkbox">
		<label><input type="checkbox"  name="nilai[]" value="berdoa sebelum dan sesudah melakukan kegiatan,"> berdoa sebelum dan sesudah melakukan kegiatan</label>
	</div>
</div>
<?php
	}else if( $id== "Sosial"){
?>
	<div class="col-sm-offset-3">
		<div class="checkbox">
			<label><input type="checkbox"  name="nilai[]" value="jujur,"> jujur</label>
			<label><input type="checkbox"  name="nilai[]" value="disiplin,"> disiplin</label>
			<label><input type="checkbox"  name="nilai[]" value="tanggung jawab,"> tanggung jawab</label>
		</div>
	</div>
	<div class="col-sm-offset-3">
		<div class="checkbox">
			<label><input type="checkbox"  name="nilai[]" value="santun"> santun</label>
			<label><input type="checkbox"  name="nilai[]" value="peduli"> peduli</label>
			<label><input type="checkbox"  name="nilai[]" value="percaya diri"> percaya diri</label>
		</div>
	</div>	
<?php } ?>
