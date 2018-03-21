<?php

if(isset($_POST["submit"]))
{
$company = $_POST["c_name"];
$c_url = $_POST["url"];
$c_rate = $_POST["rating"];
$c_desc = $_POST["desc"];

$conn = mysqli_connect("localhost","root","","oosd");
if($conn)
{
    $sql = "insert into company(com_name,com_web_add,c_desc,c_rating) values('".$company."','".$c_url."','".$c_desc."','".$c_rate."')";
    if($run = mysqli_query($conn, $sql));
       {
        echo "<script>alert('Registered Successfully')</script>";
       }
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Company</title>
    <style type="text/css">
     *{
       margin:0px;
       padding:0px;
     }
     .top_bar{
          width: 100%;
          height:60px;
          background-color:#8A0651; 
     }
     .top_side_left{
         margin-left: 10%;
         color:#FFFFFF;
         padding-top: 18px;
         float: left;
     }
      .top_mid_side_left{
         margin-left: 10%;
         color:#FFFFFF;
         padding-top: 8px;
         float: left;
     }
     .top_side_right{
     	margin-right: 10%;
     	color:#FFFFFF;
     	padding-top: 18px;
     	float: right;
     }
     .top_mid_side_right{
         margin-right: 10%;
         color:#FFFFFF;
         padding-top: 8px;
         float: right;
     }
     #offer{
     	border: 1px solid #FFFFFF;
     	width: 200px;
     	text-align: center;
     }
     #a1{
         color:#FFFFFF;
         font-size: 16px;
         transition: 1s;
     }
     #a1:hover{
          background-color: #FFFFFF;
          color: #8A0651;
     }
     .top_ul{
     	    list-style-type: none;
     }
     .li_top{
         display:inline-block;
         color:#FFFFFF;
     }
     .a11{
          text-decoration: none;
     	  color: #ffffff;
     }
     .s_bar{
     	  width: 100%;
          height: 40px;
          background-color:#424242; 
     }
     .top_ul_1{
     	    list-style-type: none;
     	    margin: 0px;
     }
     .prod_ins{
     	margin-left:20%;
     	margin-right:20%;
     	padding-top: 30px;
     }
     #h{
     	margin-bottom:10px; 
     }
     td{
     	padding-left: 10px;
     }
     .footer{
       	margin-top: 30px;
       	 width:100%;
       	 background-color:#434343;
         height:200px;
       }
       .bottom{
       	width:100%;
       	background-color:#000000;
       	height:50px;
       }
     </style>
</head>
<body>
      <section class="top_bar">
            <div class="top_side_left">
            	<p id="offer"><a href="#" id="a1">Get flat 35% off on order 50$</a></p>
            </div>
            <div class="top_side_right">
                 <ul class="top_ul">
                    <li class="li_top"><a href="#" class='a11'>Login</a> |</li>
                    <li class="li_top"><a href="#" class='a11'>Register</a> |</li>
                    <li class="li_top"><a href="#" class='a11'>Contact</a> |</li>
                    <li class="li_top"><a href="#" class='a11'>About Us!</a> </li>
                 </ul>
            </div>
     </section>
     <section class="s_bar">
          <div class="top_mid_side_left">
                 <ul class="top_ul_1">
                    <li class="li_top"><a href="home.html" class='a11'><b>VIT-MART</b></a> |</li>
                    <li class="li_top"><a href="home.html" class='a11'>Home</a> |</li>
                    <li class="li_top"><a href="signin.html" class='a11'>Sign In</a> |</li>
                    <li class="li_top"><a href="registration_form.html" class='a11'>Sign Up</a> |</li>
                    <li class="li_top"><a href="#" class='a11'>About Us!</a> </li>
                 </ul>
            </div>
            <div class="top_mid_side_right">
                    <form>
                    <table>
                    <tr>
                    <td><input type="text" placeholder="Search..."></input></td> 
                    <td><input type="submit" value="OK!"></input></td> 
                    </tr>
                    </table>
                    </form>
                 </ul>
            </div>
     </section>
     <section class="prod_ins">
     	<h1 id="h"><b>ADD Company</b></h1>
     	<form name="insert_product" method="post" action="" enctype="multipart/form-data">
            <table width="95%" height="500px" align="center" cellpadding="5" cellspacing="5" border="1px">
               <tr>
                  <td><b>Company Name</b></td>
                  <td><input type = "text" name="c_name" placeholder="Company Name" pattern="[A-Za-z0-9]{1,100}" title="Company name should contain only alphabet and numbers"></td>  
               </tr>
               
                <tr>
                <td><b>Company Url</b></td>
                <td><input type="text" name="url" placeholder="Website Address">
                </td>
                </tr>
                <tr>
                <td><b>Company Rating</b></td>
                <td><input type="number" name="rating">
                </td>
                </tr>
                <tr>
                <td><b>Description</b></td>
                <td><input type="text" name="desc" placeholder="description" maxlength="1020">
                </td>
                </tr>
                <tr>
                <td><b>Confirm</b></td>
                <td><input type="submit" name="submit" value="ADD COMPANY">
                </td>
                </tr>
            </table>
     	</form>
     </section>
     <section class="footer">
     </section>
     <section class="bottom">
     	
     </section>
</body>
</html>