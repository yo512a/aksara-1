<div id='sidebar' class='d-flex fd-c ac-sb'>
<div class='logo'>
<a href='<?php echo base_url();?>'><img src='<?php echo base_url();?>assets/img/layout/logo.png'></a>
</div>

<div class='menusContainer fl-w100'>
<ul class='menus'>

<?php //menus data
if(isset($bookReader)){
echo "<li class='bookReader'>
<div class='fl-w100 fw-6 ti'>".$bookReader[0]->judul."</div>
<div class='fl-w100 de d-flex'><i class='fad fa-pencil'></i>".$bookReader[0]->penulis."</div>
<div class='fl-w100 de d-flex'><i class='fad fa-calendar'></i>".$bookReader[0]->tahun."</div>
<div class='fl-w100 de d-flex'><i class='fad fa-star'></i>".substr($bookReader[0]->rating/$bookReader[0]->voters,0,4)."</div>
</li>";
}
$menus=array(
site_url() => "<a href='".base_url()."' title='Beranda'><i class='fas fa-home-lg-alt'></i>Beranda</a>",
site_url('books') => "<a href='".base_url()."books' title='Buku'><i class='fal fa-book'></i>Buku</a>",
'#' => "<a href='#' title='Kreativitas'><i class='fal fa-lightbulb'></i>Kreativitas</a>"
);
foreach($menus as $m => $val){
echo "<li>".$val."</li>";
}

?>

</ul>

<ul class='menus'><div class='title fl-w100'>Halaman Lain</div>
<?php
$menus2=array(
base_url('blog') => "<a href='#' title='Blog'><i class='fas fa-newspaper'></i>Blog</a>",
base_url('tentang') => "<a href='#' title='Tentang Kami'><i class='fas fa-info-circle'></i>Tentang</a>"
);
foreach($menus2 as $m => $val){
echo "<li>".$val."</li>";
}
?>
</ul>
</div>

</div>