<!DOCTYPE html>
<html>
    <head>
        <title>
           Mweb-EVENT MAKER
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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    </head>
    <style>
        body{
            background:#000;
        }
        #home-page{
            border: 2px solid #ffffff;
            border-radius: 50%;
            width: 250px;
            height: 250px;
            margin: 20px;
        padding: 10px;
            text-decoration: none;
            color: #CFB53B;
            margin-bottom:100px;
        }
        #home-page:hover{
             box-shadow: 0px 0px 20px #CFB53B,
                     0px 0px 40px #CFB53B,
                     0px 0px 80px #CFB53B;
        }
          #mweb-name{
         
    font-size: 87px;
    color: #ffc107;
    font-family: "Arial Black", sans-serif;
    text-shadow: 0px 0px 0 rgb(240,178,0),
                 1px 1px 0 rgb(225,163,0),
                 2px 2px 0 rgb(210,148,0),
                 3px 3px 0 rgb(195,133,0),
                 4px 4px 0 rgb(180,118,0),
                 5px 5px  0 rgb(165,103,0),
                 6px 6px 5px rgba(0,0,0,0.81),
                 6px 6px 1px rgba(0,0,0,0.5),
                 1px 1px 5px rgba(0,0,0,.2);
 
        }
         
            .mem-2{
                float:right;
                  }
            #person{
                display:flex;
            }
            #profile{
                width: 250px;
                height:250px;
                border:10px solid #CFB53B;
                position: absolute;
            }  
            .first-slide{
                background-image: url(mt1.jpeg);
                cursor: pointer;
                caret-color:#c54;
                background-position: center;
                background-origin:content-box;
                background-repeat: no-repeat;
                background-size:330px;
                border-radius:15%;
                
            } .rendu-slide{
                background-image: url(mt2.jpeg);
                cursor:url("mt2.jpeg");
                caret-color:#c54;
                background-position: center;
                background-origin:content-box;
                background-repeat: no-repeat;
                background-size:330px;
                border-radius:15%;
                
            } .moodu-slide{
                background-image: url(mt3.jpeg);
                cursor: pointer;
                caret-color:#c54;
                background-position: center;
                background-origin:content-box;
                background-repeat: no-repeat;
                background-size:330px;
                border-radius:15%;
                
            }
            .second-slide{
                background-color:#CFB53B;
            }
            .first-slide:hover{
                transform: translateY(105px);
                position: absolute;
                transition-duration: 1.5s;
            }   
            .second-slide>p{
                text-align:left;
                color: #FCFBFA;
                font-size:17px;
                font-family: monospace;
            }
            b{
                text-decoration: overline;
                position: absolute;
                top: 70%;
                left: 55%;
                transform: translate(-50%,-50%);
            }
            center>p{
                font-size: 30px;
                color: #CFB53B;
                font-family: monospace;
                text-shadow: 2px 2px 2px #cfb53b;
            }
           .image-place{
              float: right;
              transform: translateY(-70px);
            }
        #ohh{
            margin:20px;
            
        }
    </style>
    <body><br>
        <div style="border-bottom:1px solid black;">
       <p class="text-center col-md-12" id="mweb-name" style="font-size:2em;color: #ffffff ;margin-top:0px;">MARRIAGE EVENT MAKER</p>
            <div id="mySidenav" class="sidenav "></div></div>
        <br>
        <hr style="color:#c9c316;height:10px;margin:20px;"><br>
        <a href="mw.php" id="home-page" class="col-md-3">&#x2190;</a><center><p class="col-md-9" id="mweb-name" style="font-size:20px;">Married Types</p></center>
         <br>
   <!--   <div class="container-fluid d-flex" >
            <div class="row " >
        <div class="col-md-4" id="person">
            
            <div class="second-slide" id="profile">
               <p>CHRISTIAN MARRIAGE</p>
                <div class="image-place">
             
                </div>
                  
            </div>
            <div class="rendu-slide" id="profile">
                <b></b></div>
                <br>
             <div class="col-md-4" id="person">
            
            <div class="second-slide" id="profile">
               <p>HINDU MARRIAGE</p>
                <div class="image-place">
             
                </div>
                  
            </div><br><br>
            <div class="moodu-slide" id="profile">
                <b></b></div>
                 
                  <div class="col-md-4" id="person">
            
            <div class="second-slide" id="profile">
               <p>MUSLIM MARRIAGE</p>
                <div class="image-place">
             
                </div>
                  
            </div>
            <div class="first-slide" id="profile">
                <b></b></div>
                </div></div>
            
                </div></div></div>-->
        <center><div class="row d-flex">
            <a href="#" class="col-md-4" id="ohh"><img src="mt1.jpeg" style="width:200px;height:200px;"></a>            
            <a href="#" class="col-md-4" id="ohh"><img src="mt2.jpeg" style="width:200px;height:200px;"></a>            
            <a href="#" class="col-md-4" id="ohh"><img src="mt3.jpg" style="width:200px;height:200px;"></a>            
            </div></center>
    </body>
</html>