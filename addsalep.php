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
        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
    <div class="ad">
    <h1>Add Dealer</h1>
    
        <table>
        <form>
            <tr>
            <td>Dealer Name <span class="error">* <?php echo $dealer_nameerr;?></span></td>
                <td>NIC <span class="error">* <?php echo $NICerr;?></span></td>
            </tr>
            <tr>
            <td width="400px"><input type="text" name="dealer_name" style="width: 300px" required ></td>
                <td><input type="text" name="NIC" style="width: 200px"  required ></td>
            </tr>
            <tr>
                <td>Dealer Address <span class="error">* <?php echo $addresserr;?></span></td>
            <td>Area number <span class="error">* <?php echo $area_noerr;?></span></td>

            </tr>
            <tr>
                <td><input type="text" name="address" style="width: 300px" required></td>
            <td><select class="dropdown"  name="area_no">
                <option value="Colombo">Col01</option>
                <option value="Dehiwala">De01</option>
                <option value="Maharahama">Mahara01</option>
                <option value="Nugegoda">Nuge01</option>
            </select></td>

            </tr>
            <tr>

                <td>Relevant Salesperson <span class="error">* <?php echo $salesPerson_iderr;?></span></td>
                <td>Mobile No <span class="error">* <?php echo $mobileNoerr;?></span></td>
            </tr>
            <tr>
                <td><input type="text" name="salesPerson_id" style="width: 200px" required></td>
                <td><input type="text" name="mobileNo" style="width: 200px" required></td>
            </tr>
            <tr>

                <td>Telephone No <span class="error">* <?php echo $telephoneNoerr;?></span></td>
                <td>E mail <span class="error">* <?php echo $emailerr;?></span></td>
            </tr>
            <tr>
                <td><input type="text" name="telephoneNo" style="width: 200px" required></td>
                <td><input type="text" name="email" style="width: 200px" required></td>
            </tr>
            <tr>

                <td>Fax No <span class="error">* <?php echo $faxerr;?></span></td>
            </tr>
            <tr>
                <td><input type="text" name="fax" style="width: 200px" required></td>
            </tr>
            <tr>
                <td></td>
           <td> <button type="submit">SAVE</button></td>
           <td> <button type="reset">RESET</button></td>
            </tr>

        </form>
        <div id="required">
            <p><span class="error">* Required Fields.</span><br/>
            </p>
        </div>
        
        </table>

    </div>



<?php

    $error=FALSE;
        $dealer_nameerr = $area_noerr =  $NICerr = $addresserr = $salesPerson_iderr = $mobileNoerr = $telephoneNoerr = $emailerr = $faxerr = "";
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            
            if(empty($_POST['dealer_name'])){ 
                $dealer_nameerr = "";
                $error = TRUE;
            }else{
                $dealer_name = $_POST['dealer_name'];
            }
            
          
            
            if(empty($_POST['area_no'])){ 
                $area_noerr = "";
                $error = TRUE;
            }else{
                $area_no = $_POST['area_no'];
            }
            
            if(empty($_POST['NIC'])){ 
                $NICerr = "";
                $error = TRUE;
            }else{
                $NIC = $_POST['NIC'];
                
            }
            
            
            
            if(empty($_POST['address'])){
                $addresserr = "";
                $error = TRUE;
            }else{
                $address = $_POST['address'];
            }
            
            if(empty($_POST['salesPerson_id'])){ 
                $salesPerson_iderr = "";
                $error = TRUE;
            }else{
                $salesPerson_id = $_POST['salesPerson_id'];
            }
            
           
            if(empty($_POST['mobileNo'])){ 
                $mobileNoerr = "";
                $error = TRUE;
            }else{
                $mobileNo = $_POST['mobileNo'];
            }
            
            if(empty($_POST['telephoneNo'])){ 
                $telephoneNoerr = "";
                $error = TRUE;
            }else{
                $telephoneNo = $_POST['telephoneNo'];
                
            }
        
            if(empty($_POST['email'])){ 
                $emailerr = "";
                $error = TRUE;
            }else{
                $email = $_POST['email'];
                if (strpos($email, '@') == FALSE) {
                    $emailerr =  "Invalid email address";
                    $error = TRUE;
                }
            }
            
            if(empty($_POST['fax'])){ 
                $faxerr = "";
                $error = TRUE;
            }else{
                $fax = $_POST['fax'];
            }
            
             if ($error==FALSE){
           

            
            $sql="INSERT INTO `dealer` (`dealer_name`, `area_no`, `NIC`, `address`, `salesPerson_id`, `mobileNo`, `telephoneNo`, `email`, `fax`) VALUES ('$_POST[dealer_name]', '$_POST[area_no]', '$_POST[NIC]', '$_POST[address]', '$_POST[salesPerson_id]', '$_POST[mobileNo]', '$_POST[telephoneNo]', '$_POST[email]', '$_POST[fax]')";
            
            if(mysqli_query($connection,$sql)){
                die();
            } else{echo "error";}
             
            }
        }
    ?>