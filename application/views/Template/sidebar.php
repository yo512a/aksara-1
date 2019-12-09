<div id='sidebar' class='d-flex fd-c ac-sb'>
<div class='logo'>
<a href='<?php echo base_url();?>'><img src='<?php echo base_url();?>assets/img/layout/logo.png'></a>
</div>

<div class='menusContainer fl-w100'>
<ul class='menus'>

<?php //menus data
function selectedMenus($url){
if($url==current_url()){$selected=" class='selected' data-url='$url'";}else{$selected="";}
return $selected;
}
$menus=array(
site_url() => "<a href='".base_url()."' title='Beranda'><i class='fas fa-home-lg-alt'></i>Beranda</a>",
site_url('books') => "<a href='".base_url()."books' title='Buku'><i class='fas fa-book'></i>Buku</a>",
'#' => "<a href='#' title='Kreativitas'><i class='fas fa-lightbulb'></i>Kreativitas</a>"
);
foreach($menus as $m => $val){
echo "<li".selectedMenus($m).">".$val."</li>";
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
echo "<li".selectedMenus($m).">".$val."</li>";
}
?>
</ul>
</div>

</div>