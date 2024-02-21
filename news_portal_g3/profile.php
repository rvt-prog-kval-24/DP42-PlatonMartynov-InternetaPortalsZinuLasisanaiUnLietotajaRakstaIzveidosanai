<?php
include_once "header.php";
?>

<style>

body{
    background-color: rgb(24, 25, 31);  
}

.card{
    border:none;

    position:relative;
    overflow:hidden;
    border-radius:8px;
    cursor:pointer;
}

.card:before{
    
    content:"";
    position:absolute;
    left:0;
    top:0;
    width:4px;
    height:100%;
    background-color:#E1BEE7;
    transform:scaleY(1);
    transition:all 0.5s;
    transform-origin: bottom
}

.card:after{
    
    content:"";
    position:absolute;
    left:0;
    top:0;
    width:4px;
    height:100%;
    background-color:#8E24AA;
    transform:scaleY(0);
    transition:all 0.5s;
    transform-origin: bottom
}

.card:hover::after{
    transform:scaleY(1);
}


.fonts{
    font-size:11px;
}

.social-list{
    display:flex;
    list-style:none;
    justify-content:center;
    padding:0;
}

.social-list li{
    padding:10px;
    color:#8E24AA;
    font-size:19px;
}


.buttons button:nth-child(1){
       border:1px solid #8E24AA !important;
       color:#8E24AA;
       height:40px;
}

.buttons button:nth-child(1):hover{
       border:1px solid #8E24AA !important;
       color:#fff;
       height:40px;
       background-color:#8E24AA;
}

.buttons button:nth-child(2){
       border:1px solid #8E24AA !important;
       background-color:#8E24AA;
       color:#fff;
        height:40px;
}

a{
    text-decoration:none;
}

</style>
  </head>
  <body>

  <div class="container mt-5">
    
    <div class="row d-flex justify-content-center">
        
        <div class="col-md-7">
            
            <div class="card p-3 py-4">
                
                <div class="text-center">
                    <img src="pictures/narrator.jpg" width="170" class="rounded-circle">
                </div>
                
                <div class="text-center mt-3">
                    <span class="bg-secondary p-1 px-4 rounded text-white">                       
                    Admin
                    </span>
                    <h5 class="mt-2 mb-0"><?php echo $_SESSION['username']; ?>  </h5>
                    <span>  </span>
                    
                    <div class="px-4 mt-1">
                    
                    </div>
                    
                     <ul class="social-list">
                        <li><i class="fa fa-facebook"></i></li>
                        <li><i class="fa fa-dribbble"></i></li>
                        <li><i class="fa fa-instagram"></i></li>
                        <li><i class="fa fa-linkedin"></i></li>
                        <li><i class="fa fa-google"></i></li>
                    </ul>
                    
                    <div class="buttons">
                        
                        <button class="btn btn-outline-primary px-4">Message</button>
                        <button class="btn btn-primary px-4 ms-3">Contact</button>



                        <div class="float-container"><br>

                        <div class="float-child">
                            <div class="green">
                                <a href="admin_user.php"><button class="btn btn-outline-primary px-4">&nbspUser update&nbsp</button></a></div>
                        </div><br>
                        
                        <div class="float-child">
                            <div class="blue">
                            <a href="admin_news.php"><button class="btn btn-outline-primary px-4">News update</button></a>
                            </div>
                        </div>
                        
                        </div>

                    </div>      
                </div>                         
            </div>           
        </div>       
    </div>    
</div>



  </body>
</html>