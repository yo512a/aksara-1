<?php function checkingCheckBox($value){
if(isset($_GET['tipe'])){foreach($_GET['tipe'] as $tipe){
if($tipe==$value){echo " checked";}	
}}
}function checkingRadio($sort,$value){
if(isset($_GET[$sort])){
if($_GET[$sort]==$value){echo " checked";}
}else{if($value=="bebas"){echo " checked";}else if($value=="latest"){echo " checked";}}
}function checkingSelect($value){
if(isset($_GET['kategori'])){
if($_GET['kategori']==$value){echo " selected";}else{if($value=="Semua"){echo " selected";}}
}
}function checkingTahun($value){
if(isset($_GET['tahun'])){
if($_GET['tahun']==$value){return " selected";}else{if($value=="Semua"){return " selected";}}
}
}?>
<form id='filters' method='get' class='act' data-open='yes'>
<div class='submitBtn fl-w100'>
<a class='btn' href='<?php echo base_url("books");?>'>Reset</a>
<button type='submit' class='btn'>Terapkan</button></div>
<div id='opts' class='fl-w100'>
<div class='opt'>
<div class='title'><i class='fad fa-layer-group'></i>Tipe Buku</div>
<ul class='cats'>
<label><input type='checkbox' name='tipe[]' value='Ensiklopedia'<?php checkingCheckBox("Ensiklopedia");?>><div class='checkmark'></div>Ensiklopedia</label>
<label><input type='checkbox' name='tipe[]' value='Biografi'<?php checkingCheckBox("Biografi");?>><div class='checkmark'></div>Biografi</label>
<label><input type='checkbox' name='tipe[]' value='Buku Anak-Anak'<?php checkingCheckBox("Buku Anak-Anak");?>><div class='checkmark'></div>Buku Anak-Anak</label>
<label><input type='checkbox' name='tipe[]' value='Buku Sekolah'<?php checkingCheckBox("Buku Sekolah");?>><div class='checkmark'></div>Buku Sekolah</label>
<label><input type='checkbox' name='tipe[]' value='Novel'<?php checkingCheckBox("Novel");?>><div class='checkmark'></div>Novel</label>
</ul>
</div>

<div class='opt'>
<div class='title'><i class='fas fa-filter'></i>Kategori</div>
<ul class='cats'>
<select name='kategori' class='fl-w100'>
<option value='Semua'<?php checkingSelect("Semua");?>>Semua</option>
<option value='Biologi'<?php checkingSelect("Biologi");?>>Biologi</option>
<option value='Teknologi'<?php checkingSelect("Teknologi");?>>Teknologi</option>
<option value='Fisika'<?php checkingSelect("Fisika");?>>Fisika</option>
<option value='Fiksi'<?php checkingSelect("Fiksi");?>>Fiksi</option>
</select>
</ul>
</div>

<div class='opt'>
<div class='title'><i class='fad fa-sort-shapes-down'></i>Sortir</div>
<ul class='cats'>
<label><input type='radio' name='sortY' value='latest'<?php checkingRadio("sortY","latest");?>><div class='checkmark'></div>Terbaru</label>
<label><input type='radio' name='sortY' value='earliest'<?php checkingRadio("sortY","earliest");?>><div class='checkmark'></div>Dari Awal</label>
<label><input type='radio' name='sortA' value='bebas'<?php checkingRadio("sortA","bebas");?>><div class='checkmark'></div>Alfabet Bebas</label>
<label><input type='radio' name='sortA' value='az'<?php checkingRadio("sortA","az");?>><div class='checkmark'></div>Alfabet A-Z</label>
<label><input type='radio' name='sortA' value='za'<?php checkingRadio("sortA","za");?>><div class='checkmark'></div>Alfabet Z-A</label>
</ul>
</div>

<div class='opt'>
<div class='title'><i class='fad fa-calendar-alt'></i>Tahun</div>
<ul class='cats'>
<select name='tahun' class='fl-w100'>
<option value='semua'>Semua</option>
<?php for($tahun=date('Y');$tahun>=2000;$tahun--){
echo "<option value='$tahun'".checkingTahun($tahun).">$tahun</option>";
}?></select>
</ul>
</div>
</div>
</form>