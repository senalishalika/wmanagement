
        <ul id="topnavi">
            <li><a href="" id="viewdealer">View</a></li>
            <li><a href="" id="adddealer">Add New</a></li>
            <li><a href="" id="updealer">UPdate</a></li>
            <li><a href="" id="deldealer">Delete</a></li>
        </ul>

</div>

<div class="content">


        <div class="form">


        </div>  

    </div>

<script>
        
    $("div.content>ul#topnavi>li>a").click( function(e){

        e.preventDefault();

    });


    $("ul#topnavi>li>a").click( function(){
    var id = this.id;
    console.log(id);

    $('div.content > div.form').html("");

     if (id == "adddealer"){

        url = "adddealer.php";

    } else if (id == "updealer"){

        url = "updealer.php";

    }else {

        url = "deldealer.php";
    }


     $.ajax({


            
        type:"post",
        url:url,
        success:function(data){

            $("div.content> div.form").html(data);

        }



    });

    



});







</script>

