<!DOCTYPE html>
<html>
    <head>
        <title>
           PIND-WINGS
        </title>
        <link rel="icon" href="mwe-logo.jpg" type="image" sizes="16x16">
        <meta name="keywords" content="html,css,xml,xhtml,js">
        <meta name="description" content="marriage event maker-desgin our own event,that to not depending on others">
        <meta name="author" content="ABHILASH KUMAR">
        <meta name="viewport" content="width=device-width, initial-scale=0.791">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>
    <style>
        *{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }
        body{
            background-color: #ffffff;
            color:#f1fff1;
        }
          .sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index:1;
  top: 0;
  left:0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top:0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

  .ham-menu{
            margin: 10%;
            padding: 10px;
            background-color: gray;
            border: 3px solid #eee;
            box-shadow:0px 1px 1px #000000,0px 03px 05px #000000,0px 2px 2px #000000;
        }
        .ham-menu:hover{
                background: #000000;
            color: #000000;
        }
        #title-pindwings{
          background: rgb(166,216,226);
background: linear-gradient(90deg, rgba(166,216,226,1) 0%, rgba(208,148,134,1) 0%, rgba(214,145,138,1) 9%, rgba(224,146,42,1) 82%);
            height: 20vh;
            width: 70%;
            margin-top:40px; 
            border-top-left-radius: 20%;
            border-top-right-radius: 30%;
            border-bottom-left-radius: 40%;
            border-bottom-right-radius: 05px;
             border:0.6px solid saddlebrown;
        }
      
        #text-pind{
             line-height:110px;
    font-size: 50px;
    color: #e3e3e3;
    font-family: "Arial Black", Gadget, sans-serif;
    text-shadow: 0px 0px 0 rgb(210,210,210),
                 -1px 1px 0 rgb(192,192,192),
                 -2px 2px 0 rgb(175,175,175),
                 -3px 3px 0 rgb(157,157,157),
                 -4px 4px 0 rgb(140,140,140),
                 -5px 5px 0 rgb(122,122,122),
                 -6px 6px  0 rgb(105,105,105),
                 -7px 7px 6px rgba(191,89,46,0.36),
                 -7px 7px 1px rgba(191,89,46,0.5),
                 0px 0px 6px rgba(191,89,46,.2);
 
        }
        #img-modify{
            width: 200px;
            height: 200px;
            padding:04px;
           margin:30px;
            border: 6px solid saddlebrown;
            border-radius: 5px;
        }
             #grey-content{
            cursor: pointer;
            text-decoration: none;
            color: #ffffff;
             padding: 15px;
            
        }
        #grey-content:hover{
            text-decoration: underline;
            cursor: pointer;
            padding: 15px;
                
        }
        #a-img-modify{
            text-decoration: none;
            color:rosybrown;
            font-weight: 700;
            font-family: sans-serif;
        }
        #a-img-modify:hover{
            text-decoration: underline;
            transform: scale(0.92);
            transition-duration:0.65s;
        }
        .box{
            width: 300px;
            height: 300px;
            position:relative;
            margin-top:60px;
        }
        #box1{
            background-color: aquamarine;
            transform:rotate(02deg);
            position: absolute;
        }
        #box2{
            background-color:burlywood;
             transform: rotate(10deg);
            position: absolute;
        } 
        #box3{
            color: #f1f1f1;
            font-family: cursive;
            font-size: 30px;font-weight: 700;
            background-color: lightcoral;
             transform: rotate(20deg);line-height: 10;
            user-select: none;
        }
        .box-border{
            width: 600px; 
           
        }
        #box-border1{
            border: 10px solid aquamarine;
            padding: 0px;
        }
        #box-border2{
            border: 10px solid burlywood;
            padding: 0px;
        }
        #box-border3{
            border: 10px solid coral;
            padding: 30px;margin: 
            color: #000;
             font-family: monospace;
            font-style: italic;
            font-stretch:ultra-expanded;
            font-weight: 900;
            font-size: 30px;
            color:grey;
        }
    </style>
    <body>
    <div id="mySidenav" class="sidenav "><center><img src="mwe-logo.jpg" alt="Mweb-logo" id="mweb-animate-ham-menu" class="img-responsive" style="width:50px;height:50px;border:1px solid #f5e56e;margin-left:10px;" ><br>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            
                <br>
                <a href="mw.php">&#8962; Home</a><br>
  <a href=" mw-wings.php">&#x260D; Our Wings</a><br>
  <a href="cnct2.php">&#x269F; Contact</a><br>

  <a href="#">&#x2683; Own Event</a><br>
  <a href="#">
      <button data-toggle="collapse" data-target="#share-button" style="padding:5px;font-size:25px;font-weight:500;color:grey;text-decoration:none" class="btn btn-link" id="button-share"><i style="font-size:24px" class="fa">&#xf1e0;</i> Share &#x21d3;</button>
                 <div id="share-button" class="collapse" >
           <p ><li style="list-style-type: none; margin:20px;"><a id="share-button-a" href="https://www.facebook.com/sharer.php?u=http%3A%2F%2F127.0.0.1%3A49245%2Fmw.html" target="_blank">Share on Facebook</a></li>
<li style="list-style-type: none;margin:20px;"><a target="_blank" id="share-button-a" href="https://twitter.com/intent/tweet?url=http%3A%2F%2F127.0.0.1%3A49245%2Fmw.html">Share on Twitter</a></li>
<li style="list-style-type: none;margin:20px;"><a target="_blank" id="share-button-a" href="https://www.linkedin.com/shareArticle?mini=true&url=http%3A%2F%2F127.0.0.1%3A49245%2Fmw.html">Share on LinkedIn</a></li></p>
            </div></a><!--<br>
                <a href="#">&#x263A; <cite title="Mweb Creators">About Us</cite></a>--><br>
                <img src="mwebQR.jpeg" class="responsive" style="height:200px;width:200px;"><br><br><sr style="color:#ffffff">Look On</sr>
               <p class="d-flex flex-coloumn"> <a href="https://touch.facebook.com/profile.php"><i style="font-size:24px" class="fa">&#xf082;</i></a>&nbsp;&nbsp;
                <a href="https://www.instagram.com/pindcreations?r=nametag
"><i style="font-size:24px" class="fa">&#xf16d;</i></a>&nbsp;&nbsp;
               <!-- <a href=#><i style="font-size:24px" class="fa">&#xf08c;</i>
</a>--></p>
            </center>
</div>

<span class="ham-menu" style="font-size:30px;cursor:pointer;position:fixed;color: #eee;margin-left: 10px; border: 2px solid #eee;padding: 05px;" onclick="openNav()">&#9776; </span>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  
}

</script>
        <div id="title-pindwings" class="container-fluid"><center  id="text-pind" >PIND - WINGS</center>
           
        </div><hr style="background:gray;margin:40px;">
        
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-8">
                <div class="box-border" id="box-border1">
                <div class="box-border" id="box-border2">
                <div class="box-border" id="box-border3">YEAH ! HERE IS YOUR REQUIRED COLLECTIONS <br>&ldquo; Event  functions are arranged below &bdquo; <br>&#9679; GO &raquo; SELECTING EVENT TYPE &raquo; BUDGET FILTERS &raquo;SELECT EVENT MAKERS &raquo;DONE</div></div></div>
            </div>
            <div class="col-md-4">
                
                <div class="box text-center" id="box1"></div>
                <div class="box text-center" id="box2"></div> <div class="text-center box" id="box3">COLLECTIONS &alefsym;</div>
                
            </div>
        </div>
            </div>   
        <center>
        <div class="container" style="margin:40px;padding:10px;">
            <div class="row d-flex " >
            <a href="#" class="col-md-3" id="a-img-modify" ><img id="img-modify" src="reception-event.jpg"><br>RECEPTION EVENTS</a> <a  href="#" class="col-md-3" id="a-img-modify"><img id="img-modify" src="rooms.jpg"><br>ROOM BOOKINGS</a> 
                <a  href="#" class="col-md-3" id="a-img-modify"><img id="img-modify" src="food-order.jpg"><br>FOOD  ORDERS</a> <a  href="#" class="col-md-3" id="a-img-modify"><img id="img-modify" src="musical-events.jpg"><br>MUSICAL EVENTS</a>
            </div>
            </div></center>
    </body>
    <footer>
        <div class="container-fluid " id="footer-info" style="background-color: gray;color: #ffffff;padding: 50px;font-size: 15px;">  
                 <center>   
                  <div class="row d-inline-flex ">
                      <div class="col-md-3"><a  href="#"  id="grey-content"><br>About Us</a><br><br><a href="#"  id="grey-content">Contact Us</a><br><br><a href="#"  id="grey-content">Download Error</a></div>
                      <div class="col-md-3"><a href="#"  id="grey-content"><br>Suggestions</a><br><br><a href="#"  id="grey-content" >Event Places</a><br><br><a href="#"  id="grey-content">Start-up's</a>
</div>
                      <div class="col-md-3"><a href="#"  id="grey-content"> <br>Our Wings</a><br><br><a href="#"  id="grey-content">Event Wings</a><br><br><a href="#"  id="grey-content">Own Event</a></div>
                      <div class="col-md-3"><cite title="ON SOCIAL MEDIA PLATFORMS"><a href="#"  id="grey-content"><br>Follow Us</a></cite><br><br><a href="#"  id="grey-content">Our Office</a><br><br><a href="#" id="grey-content">Web-Admin-Contact</a></div>
                   
                     </div></center>
        <hr>
            &copy; copyright 2021 | <cite title="patent registration done-strict restrictions">Rights reserved </cite> | Digital ink penned by " pind creators "
        </div>
                      
                    
    </footer>
</html>