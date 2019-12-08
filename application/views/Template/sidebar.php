<div id='sidebar'>
<div class='logo'>
<a href='<?php echo base_url();?>'><img src='<?php echo base_url();?>assets/img/layout/logo.png'></a>
</div>

<div class='menusContainer'>
<ul class='menus'>

<?php //menus data
function selectedMenus($url){
if($url==current_url()){$selected=" class='selected' data-url='$url'";}else{$selected="";}
return $selected;
}
$menus=array(
site_url() => "<a href='".base_url()."' title='Beranda'><i class='fas fa-home-lg-alt'></i>Beranda</a>",
site_url('books') => "<a href='".base_url()."books' title='Buku'><i class='fal fa-book'></i>Buku</a>",
'#' => "<a href='#' title='Kreativitas'><i class='fal fa-lightbulb'></i>Kreativitas</a>"
);
foreach($menus as $m => $val){
echo "<li".selectedMenus($m).">".$val."</li>";
}

?>

</ul>

<ul class='menus'><div class='title fl-w100'>Other Pages</div>
<li><a href='#' title='Blog'><i class='fad fa-newspaper'></i>Blog</a></li>
<li><a href='#' title='Tentang Kami'><i class='fad fa-info-circle'></i>Tentang</a></li>
</ul>
</div>

</div>