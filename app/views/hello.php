
<!DOCTYPE html >
<html >
     <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
            <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="jquery-1.9.1.min.js"></script>            
<script src="bootstrap/js/bootstrap.min.js"></script>            

<script src="jquery.devrama.lazyload.min-0.9.3.js"></script>
<script type="text/javascript">      
    $(function(){
        $.DrLazyload();
    });   
</script>
     
       <style>
            footer {
           background-color: gray;
           color: white;
           padding: 15px;
         }

        img{
            border:2px solid black;
        }
      </style>
		
</head>
    <body>
        
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="#">Logo</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="about">About</a></li>
                        <li><a href="projects">Projects</a></li>
                        <li><a href="contact">Contact</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
    <div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="practiceBootstrap">Practice Page</a></p>
      <p><a href="https://drive.google.com/open?id=0B-Mf8SRJeuRbcVdCbzR5d3dXbnc" target="_blank" download>Resume</a></p>
      <p><a href="#">Link</a></p>
    </div>
    <div class="col-sm-8 text-left"> 
      <h1>Welcome</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <hr>
      <h3>Test</h3>
      <p>Lorem ipsum...</p>
        
        <!--   image starts here
        -->
    
             <div id="myCarousel" class="carousel slide" data-ride="carousel">
                 <!-- Indicators -->
                 <ol class="carousel-indicators">
                     <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                     <li data-target="#myCarousel" data-slide-to="1"></li>
                     <li data-target="#myCarousel" data-slide-to="2"></li>
                     <li data-target="#myCarousel" data-slide-to="3"></li>
                 </ol>

                 <!-- Wrapper for slides -->
                 <div class="carousel-inner" role="listbox">
                     <div class="item active">
                         <img src="images/1.jpg" >
                     </div>

                     <div class="item">
                         <img src="images/2.jpg" >
                     </div>

                     <div class="item">
                         <img src="images/3.jpg" >
                     </div>

                     <div class="item">
                         <img src="images/4.jpg" >
                     </div>
                 </div>

                 <!-- Left and right controls -->
                 <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                     <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                     <span class="sr-only">Previous</span>
                 </a>
                 <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                     <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                     <span class="sr-only">Next</span>
                 </a>
             </div>
      
<!--  ends here-->
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>ADS1</p>
      </div>
         <div class="well">
        <p>ADS2</p>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid ">
    <div class="row">
        <center><h3>Favourite Actors</h3></center>
                <div class="col-sm-2 col-sm-offset-2"> 
                    <img data-lazy-src="heroes/aamir.jpg" height="120px" width="100%" >
                     </div>
                     <div class="col-sm-2">
                         <img data-lazy-src="heroes/ranveer.jpg" height="120px" width="100%"  >
                     </div>
                     <div class="col-sm-2">
                         <img data-lazy-src="heroes/leonardo.jpg" height="120px" width="100%" >
                     </div>
                     <div class="col-sm-2">
                         <img data-lazy-src="heroes/rdj.jpg" height="120px" width="100%" >
                     </div>  
        </div>
    </div>
 <div class="container-fluid ">
    <div class="row">
        <center><h3>Favourite Books</h3></center>
                <div class="col-sm-2 col-sm-offset-2"> 
                    <img data-lazy-src="books/ferrari.jpg" height="120px" width="88%" >
                     </div>
                     <div class="col-sm-2">
                         <img data-lazy-src="books/revolution.jpg" height="120px" width="88%"  >
                     </div>
                     <div class="col-sm-2">
                         <img data-lazy-src="books/hobbit.jpg" height="120px" width="88%" >
                     </div>
                     <div class="col-sm-2">
                         <img data-lazy-src="books/2.jpg" height="120px" width="88%" >
                     </div>  
        </div>
         <div class="row">
        <center><h3>Favourite Sports</h3></center>
                <div class="col-sm-2 col-sm-offset-2"> 
                    <img data-lazy-src="sports/kohli.jpg" height="120px" width="88%" >
                     </div>
                     <div class="col-sm-2">
                         <img data-lazy-src="sports/ronaldo.jpg" height="120px" width="88%"  >
                     </div>
                     <div class="col-sm-2">
                         <img data-lazy-src="sports/hockey.jpg" height="120px" width="88%" >
                     </div>
                     <div class="col-sm-2">
                         <img data-lazy-src="sports/lindan.jpg" height="120px" width="88%" >
                     </div>  
        </div>
    </div>
  
       
 <footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>
    

  </body> 
</html>
