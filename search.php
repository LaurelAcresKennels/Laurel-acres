<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Search</title>
     <meta charset="utf-8">
     <meta name = "format-detection" content = "telephone=no" />
     <link rel="icon" href="images/favicon.ico">
     <link rel="shortcut icon" href="images/favicon.ico" />
     <link rel="stylesheet" href="css/style.css">
     <script src="js/jquery.js"></script>
     <script src="js/jquery-migrate-1.1.1.js"></script>
     <script src="js/script.js"></script> 
     <script src="js/superfish.js"></script>
     <script src="search/search.js"></script>
     <script src="js/jquery.equalheights.js"></script>
     <script src="js/jquery.mobilemenu.js"></script>
     <script src="js/jquery.easing.1.3.js"></script>

     <script src="js/jquery.ui.totop.js"></script>

     <script>
 
/*
       $(window).load(function() { 
            $('.full-width').horizontalNav({});
            
            
      $('.sf-menu>li>a').each(function(ind, el){
          var span = $('span', $(el));
          if (span.length) {
            
            span.css({'top':'60px','margin': -span.outerHeight(true)/2+'px 0 0 0'});
          }
        })
        });*/
     

     
     
   jQuery(function(){
            $().UItoTop({ easingType: 'easeOutQuart' });
        });

        jQuery(function(){
            $().UItoTop({ easingType: 'easeOutQuart' });
            $(".top_arr").click(function(){
                $('body, html').stop().animate({'scrollTop': 0}); 
            });
        });        



     </script>

      <!--[if lt IE 9]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
         </a>
      </div>
      <script src="js/html5shiv.js"></script>
      <link rel="stylesheet" media="screen" href="css/ie.css">
    <![endif]-->
     </head>

     <body class="" id="top">
<!--==============================header=================================-->
      <div class="page">
  <header>
    <div class="left_bg"></div>
    <div class="container_16">
        <div class="grid_7">
            <h1><a class="logo" href="index.html"><img src="images/logo.png" alt=""></a> </h1>
        </div>
        <div class="grid_9">
            <div class="menuHolder">
                <nav>
                    <ul class="sf-menu">
                        <li><a href="index.html">about us</a>
                            <ul>
                                <li><a href="#">history</a></li>
                                <li><a href="#">staff</a></li>
                                <li class="last"><a href="#">news</a>
                                    <ul>
                                        <li><a href="#">fresh</a></li>
                                        <li class="last"><a href="#">archive</a></li>
                                    </ul>
                                </li>
                           </ul>
                        </li>
                        <li><a href="index-1.html">menu</a></li>
                        <li><a href="index-2.html">reservations</a></li>
                        <li><a href="index-3.html">blog</a></li>
                        <li><a href="index-4.html">contacts</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>

<!--==============================Content=================================-->
<div class="content pt1">
  <div class="cont_block_4">




  <div class="container_16">
    <div class="grid_16 ">
        <h3 class="marg_1">Search result:</h3>
			   <div id="search-results"></div>
    </div>
  </div>
  </div>
</div>

<!--==============================footer=================================-->
<footer>
    <div class="top_line"></div>
    <div class="container_16 pad_1">
        <div class="wrapper">
            <div class="grid_5">
                <p class="copyr">&copy; <span id="copyright-year"></span><span class="sep"> <img src="images/separator_4.jpg" alt=""></span><a href="index-5.html" class="link animate">Privacy Policy</a></p>
                <div><!--{%FOOTER_LINK} --></div>
            </div>
            <div class="grid_5">
                <div class="block1_footer">
                    <img src="images/cont_icon1.png" alt="">
                    <div class="txt_info">
                        reservation <br>
                        <p class="fs_1">+1<span>&bull;</span>234<span>&bull;</span>567<span>&bull;</span>8900</p>
                    </div>
                </div>
            </div>
            <div class="grid_5 prefix_1">
                <div class="block2_footer">
                    <img src="images/cont_icon2.png" alt="">
                    <div class="txt_info">
                        28 Jackson Blvd Ste 1020 <br>
                        Chicago, <br>
                        IL 60604-2340
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="cont_to_top">
                <div class="grid_16">
                    <div class="top_arr">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
  </div>
</body>

</html>

