<!doctype html>
<html>
<head>
<link href='assets/css/index.css' rel='stylesheet'/>
<link href='assets/css/font-poppins.css' rel='stylesheet'/>
<link href='assets/fonts/fontawesome5_11_2/css/all.min.css' rel='stylesheet'/>
</head>
<body>
<?php $this->load->view('template/navbar');$this->load->view('template/sidebar');?>

<div id='main'>
<div id='headercover'><div class='bgCvr'></div>
<div class='bg d-flex ac-c f-wr'>
<div class='title fl-w100'>The best stock books & creatives to explore your knowledge</div>
<div class='desc fl-w100'>Explore 100+ free books to read and a lot creativity</div>
</div>
</div>

<div class='content'>
<div class='widget recent posts fl-w100'>
<div class='titlecontainer fl-w100'>
<div class='top d-flex ai-c jc-sb'>
<div class='text fw-6'>Terbaru</div>
<a class='morebtn fw-6' href='#'>LIHAT LAINNYA</a>
</div>
<div class='desc fl-w100'>Buku baru untuk membantumu jelajahi ilmu</div>
</div>
<div class='items fl-w100 d-flex f-wr'>
<?php foreach($bukuRecentBeranda as $p){
$judul=$p->judul;$cvr=$p->gambar;$pen=$p->penulis;if(strlen($pen)>35){$penulis=substr($pen,0,35)."&#8230;";}else{$penulis=$pen;}$rates=$p->rating;$voters=$p->voters;$rating=$rates/$voters;$tahun=$p->tahun;$slug=$p->slug;
echo "<a class='item' href='books/$slug'>
<div class='cvr' style='background-image:url(assets/img/buku/$cvr)'></div>
<div class='title'>$judul</div>
<div class='writer'>$tahun - $penulis</div>
</a>";
}?>
</div>
</div>
</div><!--end content-->

<div class='content'>
<div class='widget recent posts fl-w100'>
<div class='titlecontainer fl-w100'>
<div class='top d-flex ai-c jc-sb'>
<div class='text fw-6'>Novel</div>
<a class='morebtn fw-6' href='#'>LIHAT LAINNYA</a>
</div>
<div class='desc fl-w100'>Bacalah hldhsflfs</div>
</div>
<div class='items fl-w100 d-flex f-wr'>
<?php foreach($bukuRecentBeranda as $p){
$judul=$p->judul;$cvr=$p->gambar;$pen=$p->penulis;if(strlen($pen)>35){$penulis=substr($pen,0,35)."&#8230;";}else{$penulis=$pen;}$rates=$p->rating;$voters=$p->voters;$rating=$rates/$voters;$tahun=$p->tahun;$slug=$p->slug;
echo "<a class='item' href='books/$slug'>
<div class='cvr' style='background-image:url(assets/img/buku/$cvr)'></div>
<div class='title'>$judul</div>
<div class='writer'>$tahun - $penulis</div>
</a>";
}?>
</div>
</div>
</div><!--end content-->

<script type='text/javascript' src='<?php echo base_url();?>assets/js/smooth-scrollbar.js'></script>
<script type='text/javascript'>
(function(){
	var scrollBar=window.Scrollbar;var elemScr=document.querySelector('#main');
	scrollBar.init(elemScr,{alwaysShowTracks:true,thumbMinSize:30});
})();
</script>
</div><!--end main-->
</body>
</html>