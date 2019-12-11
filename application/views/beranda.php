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
<a class='morebtn fw-6' href='<?php echo base_url('books');?>'>LIHAT LAINNYA</a>
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
<div class='widget recent posts fl-w100 no-mrg'>
<div class='titlecontainer fl-w100'>
<div class='top d-flex ai-c jc-sb'>
<div class='text fw-6'>Novel</div>
<a class='morebtn fw-6' href='<?php echo base_url('books?tipe%5B%5D=Novel&kategori=Semua&sortY=latest&sortA=bebas&tahun=semua');?>'>LIHAT LAINNYA</a>
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

<?php $this->load->view('template/footer');
$useragent=$_SERVER['HTTP_USER_AGENT'];
if(!preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||!preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
echo "<script type='text/javascript' src='".base_url()."assets/js/smooth-scrollbar.js'></script>
<script type='text/javascript'>
(function(){
	var scrollBar=window.Scrollbar;var elemScr=document.querySelector('#main');
	scrollBar.init(elemScr,{alwaysShowTracks:true,thumbMinSize:30});
	scrollBar.init(document.querySelector('.menusContainer'),{alwaysShowTracks:true,thumbMinSize:30})
})();
</script>";
}?>
</div><!--end main-->
</body>
</html>