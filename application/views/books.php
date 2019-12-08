<!doctype html>
<html>
<head>
<link href='<?php echo base_url();?>assets/css/index.css' rel='stylesheet'/>
<link href='<?php echo base_url();?>assets/css/font-poppins.css' rel='stylesheet'/>
<link href='<?php echo base_url();?>assets/fonts/fontawesome5_11_2/css/all.min.css' rel='stylesheet'/>
</head>
<body>
<?php $this->load->view('template/navbar');$this->load->view('template/sidebar');$this->load->view('template/sidebarFilter');?>

<div id='main'>

</div>
<script type='text/javascript' src='<?php echo base_url();?>assets/js/smooth-scrollbar.js'></script>
<script type='text/javascript'>
(function(){
const filterBtn=document.querySelector('.filterBtn');
const filters=document.getElementById('filters');
filterBtn.addEventListener('click',filterBtnClick);
function filterBtnClick(){
if(filters.getAttribute('data-open')=='no'){
	filters.setAttribute('data-open','yes');
	filterBtn.className='filterBtn d-flex ai-c jc-sb cp act';
	filters.className='act';
}else{
	filters.setAttribute('data-open','no');
	filterBtn.className='filterBtn d-flex ai-c jc-sb cp';
	filters.className='';
}
}
})();
(function(){
	var scrollBar=window.Scrollbar;
	scrollBar.init(document.getElementById('filters'),{alwaysShowTracks:true,thumbMinSize:30})
})();
</script></body>
</html>