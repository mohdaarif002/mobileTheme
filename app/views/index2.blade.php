<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>How to create lazy loading images using jQuery | PGPGang.com</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<script src="jquery-1.9.1.min.js"></script>
<script src="jquery.devrama.lazyload.min-0.9.3.js"></script>
<script type="text/javascript">      
    $(function(){
        $.DrLazyload();
    });
     
</script>
<style>
    .main{
        margin-left:auto;
        margin-right:auto;
        width:1024px;
    }
    img{
        border:1px solid black;
    }
</style>
</head>
<body>
<h2>How to create lazy loading images using jQuery Example.&nbsp;&nbsp;&nbsp;=> <a href="http://www.phpgang.com/">Home</a> | <a href="http://demo.phpgang.com/">More Demos</a></h2>
<div class="main">
<h3>Example</h3>
<img data-size="1024:588" data-lazy-src="images/1.jpg" />
<img data-size="1024:588" data-lazy-src="images/2.jpg" />
<img data-size="1024:588" data-lazy-src="images/3.jpg" />
<img data-size="1024:588" data-lazy-src="images/4.jpg" />
<img data-size="1024:588" data-lazy-src="images/5.jpg" />
<img data-size="1024:588" data-lazy-src="images/6.jpg" />
<img data-size="1024:588" data-lazy-src="images/7.jpg" />
<img data-size="1024:588" data-lazy-src="images/8.jpg" />
<img data-size="1024:588" data-lazy-src="images/9.jpg" />
</div>
</body>
</html>