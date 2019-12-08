<!doctype html>
<html>
<head>
<link href='<?php echo base_url();?>assets/css/index.css' rel='stylesheet'/>
<link href='<?php echo base_url();?>assets/css/font-poppins.css' rel='stylesheet'/>
<link href='<?php echo base_url();?>assets/fonts/fontawesome5_11_2/css/all.min.css' rel='stylesheet'/>
</head>
<body>
<?php $this->load->view('template/navbar');$this->load->view('template/sidebar');?>

<div id='main'>
<iframe class='fl-w100' width='720' height='720' src='<?php echo base_url();?>assets/pdfViewer/web/viewer.html?file=<?php echo base_url()."assets/file/book/".$bookReader[0]->file;?>'></iframe>
</div>
<script type='text/javascript' src='<?php echo base_url();?>assets/js/pdf.js'></script>
<!--<script type='text/javascript'>
(function(){//epub
const url=window.atob('');
var thePdf=null;
var scale=2;
pdfjsLib.getDocument(url).promise.then(function(pdf){
	thePdf=pdf;
	viewer=document.getElementById('main');
	for(page=1;page<=pdf.numPages;page++){
		canvas=document.createElement('canvas');
		canvas.className='bookReader fl-w100';
		viewer.appendChild(canvas);
		renderPage(page,canvas)
	}
});
function renderPage(pageNumber,canvas){
	thePdf.getPage(pageNumber).then(function(page){
		viewport=page.getViewport(scale);
		canvas.height=viewport.height;
		canvas.width=viewport.width;
		page.render({canvasContext:canvas.getContext('2d'),viewport:viewport})
	})
}
})();
</script>-->
</body>
</html>