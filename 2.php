<?php include 'core/init.php';
      protect_page(); ?>
     
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">

     <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<script>


$( document ).ready(function() {

var id = "";
var url = "";

       $("div.link_title>a").click( function(e){

        e.preventDefault();


});

    $("div.link_title>a").click( function(){
    var id = this.id;
   

    $('div.content').html("");

    if ( id == "pd") {
        url = "Product.php"

    } else if (id == "stock"){

        url = "stock.php";

    } else if (id == "dealer"){

        url = "dealer.php";

    } else if (id == "salep"){

        url = "salep.php";
    } else {

        url = "report.php";
    }
    

    $.ajax({


            
        type:"post",
        url:url,
        success:function(data){

            $("div.content").html(data);

        }



    });


});



});



</script>

 
</head>
<body>


<?php

include 'include/headers/head.php';
 ?>

<div id="body">
    <div id="navigation"> nav</div>


    <nav>
        <ul id="mainsidebar">
            <li class="var_nav">
                <div class="link_bg"></div>
                <div class="link_title" id="pd">
                   
                    <a href="" id="pd" style="top: 10px;
                                display:block;
                                position:absolute;
                                float:left;
                                font-family:arial;
                                color:#1C1C1C;
                                text-decoration:none;
                                width:100%;
                                height:70px;
                                text-align:center;"><img class= "pic" src="img/a.png" align="middle"><span>Product Details</span></a>
                </div>
            </li>
            <li class="var_nav">
                <div class="link_bg"></div>
                <div class="link_title" >
                   
                    <a href="" id="stock" style="top: 10px;
                                display:block;
                                position:absolute;
                                float:left;
                                font-family:arial;
                                color:#1C1C1C;
                                text-decoration:none;
                                width:100%;
                                height:70px;
                                text-align:center;"><img class= "pic" src="img/b.png" align="middle"><span>Stock</span></a>
                </div>
            </li>
            <li class="var_nav">
                <div class="link_bg"></div>
                <div class="link_title" >
                    
                    <a href="" id="dealer" style="top: 10px;
                                display:block;
                                position:absolute;
                                float:left;
                                font-family:arial;
                                color:#1C1C1C;
                                text-decoration:none;
                                width:100%;
                                height:70px;
                                text-align:center;"><img class= "pic" src="img/c.png" align="middle"><span>Dealers</span></a>
                </div>
            </li>
            <li class="var_nav">
                <div class="link_bg"></div>
                <div class="link_title" >
                    
                    <a href="#" id="salep" style="top: 10px;
                                display:block;
                                position:absolute;
                                float:left;
                                font-family:arial;
                                color:#1C1C1C;
                                text-decoration:none;
                                width:100%;
                                height:70px;
                                text-align:center;"><img class= "pic" src="img/d.png" align="middle"><span>Salesperson</span></a>
                </div>
            </li>
            <li class="var_nav">
                <div class="link_bg"></div>
                <div class="link_title" >
                   
                    <a href="#" id="report" style="top: 10px;
                                display:block;
                                position:absolute;
                                float:left;
                                font-family:arial;
                                color:#1C1C1C;
                                text-decoration:none;
                                width:100%;
                                height:70px;
                                text-align:center;"><img class= "pic" src="img/e.png" align="middle"><span>Reports</span></a>
                </div>
            </li>
        </ul>
    </nav>

    
      </nav>

   
    <div class="content">


        <div class="form">


        </div>  

    </div>
 <div>    

 


  	<?php

include 'include/footer.php';
 ?>

