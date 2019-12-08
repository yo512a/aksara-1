<div id='navbar' class='d-flex ai-c jc-sb'>
<form class='searchForm d-flex ai-c'>
<?php if(base_url(uri_string())==base_url('books')){
echo "<div class='filterBtn d-flex ai-c jc-sb cp act'>FILTER</div>";
}?>
<button type='submit'><i class='fas fa-search'></i></button>
<input type='text' class='search' placeholder='Cari sesuatu'>
</form>

<ul class='l d-flex ai-c'>
<li><a href='#' title='Daftar sekarang'>Daftar</a></li>
<li><a href='#' class='bgBtn' title='Masuk'>Masuk</a></li>
</ul>
</div>