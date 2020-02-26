<?php
session_start();
if(isset($_SESSION["username"]))
{
	
?>

<html>
<center>
<head>
   <style>
   /* round head */ 
#rcorners2 {
    border-radius: 25px;
    border: 2px solid #1E90FF;
    padding: 20px; 
    width: 1270px;
    height: 100px;    
}
/* nav bar */

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color:#1E90FF;
}

li {
    float: left;
    border-right:1px solid #bbb;
}

li:last-child {
    border-right: none;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: blue;
}

.active {
    background-color: orangre;
}



div { margin: 20px; }


/* select combo */
.slate   { backg1round-color: #ddd; }
.green   { background-color: #779126; }
.blue    { background-color: #3b8ec2; }
.yellow  { background-color: #eec111; }
.black   { background-color: #000; }

.slate select   { color: #000; }
.green select   { color: #fff; }
.blue select    { color: #fff; }
.yellow select  { color: #000; }
.black select   { color: #fff; }

#mainselection select {
   border: 0;
   color: #0000FF;
   background: transparent;
   font-size: 20px;
   font-weight: none;
   padding: 2px 10px;
   width: 378px;
   *width: 350px;
   *background: #58B14C;
   -webkit-appearance: none;

}

#mainselection {
   overflow:hidden;
   width:350px;
   -moz-border-radius: 9px 9px 9px 9px;
   -webkit-border-radius: 9px 9px 9px 9px;
   border-radius: 9px 9px 9px 9px;
   box-shadow: 1px 1px 11px #330033;
   background: #1E90FF url("http://i62.tinypic.com/15xvbd5.png") no-repeat scroll 319px center;
}
/* scroll */
#scroll {
    background-color: #eee;
    width: 1270px;
    height: 300px;
    border: 4px dotted blue;
    overflow: scroll;
	position:scroll;
	left:100px;
}
/*regbar */
#regbar  {
	width: 1270px;
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #1E90FF;
}

/*regestration on scrool*/
.styled-select {
   background: url(http://i62.tinypic.com/15xvbd5.png) no-repeat 96% 0;
   height: 29px;
   overflow: hidden;
   width: 240px;
}

.styled-select select {
   background: transparent;
   color:#0000FF;
   border: none;
   font-size: 14px;
   height: 29px;
   padding: 5px; /* If you add too much padding here, the options won't show in IE */
   width: 268px;
}

.styled-select.slate {
   background: url(http://i62.tinypic.com/2e3ybe1.jpg) no-repeat right center;
   height: 34px;
   width: 240px;
}

.styled-select.slate select {
   border: 1px solid #ccc;
   font-size: 16px;
   height: 34px;
   width: 268px;
}
   //start
	  body{
    margin:15px 30%;
	background-color:#5cd65c;
	color:black;
    //background-image: url("login.jpg");
	background-size:     cover;
    background-repeat:   no-repeat;
    background-position: 0% 0%;  
  }
        .inputBox{
            width : 30%;
            /*margin: 0% 40% 0% 40%;*//*this one also works*/
            margin: 15% auto;
            /*border: 1px solid red;*/
        }
        .inputBox form table tr td{
            border: 1px solid yellow;
        }
        #submit{
            width:100%;
        }
        .error{
            text-align: right;
        }
		.button:hover {
         box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
        }
		.button {
    background-color: blue; 
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}
    </style>
</head>
<title>Student Marks upload </title>

<body>
	<div id="rcorners2">
	<ul>
	
	<li><input class="button" name = "grade" id ="grade" value = "Grade" type = "button" onclick ="grade()"/></li>
	<li><input class="button" name = "payment" id ="payment" value = "Payment" type = "button" onclick="payment()"/></li>
	<li style="float:right"><a href="teacher_login.php"></br></br>Log Out</a></li>
	<li style="float:right"><input class="button" name = "registration" id ="registration" value = "Registration" type = "button" onclick="register()"/></li>
	
	 </ul>
    </div>
<hr>
	<pre>
	<form method ="post" action ="grade_insert.php">
	<table>
    <tr><td>Id          : </td><td><input name ="id" id ="id" type ="text" placeholder="Enter Id"/></td></tr>
	<tr><td>Student Id  : </td><td><input name ="stid" id ="stid" type ="text" placeholder="Student Id"/></td></tr>
	<tr><td>Bangla      : </td><td><input name ="bangla" id ="bangla" type ="text" placeholder="Enter Marks"/></td></tr>
	<tr><td>English     : </td><td><input name ="english" id ="english" type ="text" placeholder="Enter Marks"/></td></tr>
	<tr><td>Math        : </td><td><input name ="math" id ="math" type ="text" placeholder="Enter Marks"/></td></tr></br>
    <tr><td>Religion	:</td><td> <input name ="religion" id ="religion" type ="text" placeholder="Enter Marks"/></td></tr>
    <tr><td>Physics	    : </td><td><input name ="physics" id ="physics" type ="text" placeholder="Enter Marks"/></td></tr>
    <tr><td>Chemistry	:</td><td> <input name ="chemistry" id ="chemistry" type ="text" placeholder="Enter Marks"/></td></tr>
    <tr><td>Biology	    :</td><td> <input name ="biology" id ="biology" type ="text" placeholder="Enter Marks"/></td></tr>
		 
		  </td></tr>
		</table>
		 <input class="button" type = "submit" Value="Submit"/>
	</form>
</pre>
<hr>
</body>
</center>
</html>
<?php
}
else
{
	session_destroy();
	header("Location:teacher_login.php");
}
?>


<script type="text/javascript">
function grade()
{
	location.href="grade.php";
}

function register()
{
	location.href="registration.php";
}

function payment()
{
	location.href="payment.php";
}


</script>
