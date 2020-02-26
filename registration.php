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
<title>Student Registration Form</title>
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
	<form name = "myform" method = "post" action="regInsert.php">
	<table>
	<td><td>First Name     :</td><td> <input id = "fname" name = "fname" placeholder ="First Name" type ="text" onblur ="frstname('fname')"/></td></tr>
	<td><td>Last Name      :</td><td> <input id = "lname" name = "lname" placeholder ="Last Name" type ="text" onblur ="lstname('lname')"/></td></tr>
	<td><td>Student Id     :</td><td> <input id ="sid" name ="sid" placeholder ="Student Id" type ="text" onblur ="valid_id('sid')"/></td></tr>
    <td><td>Class          :</td><td> <select name="class">
					 <option>Select Class</option>
					 <?php 
					 for($i =1 ; $i <=10 ;$i++)
					 {
					 ?>
					 <option value=<?php echo "$i"?>><?php echo "$i"?></option>
					 <?php } ?>
					 </select></td></tr>
	<td><td>Password       :</td><td> <input id ="pass" name ="pass" type ="password" placeholder ="Password" /></td></tr>
	<td><td>Confirm Password       :</td><td> <input id ="cpass" name ="cpass" type ="password" placeholder ="Confirm Password"/></td></tr>
	   <td><td>Gender         :</td><td> <input id ="gender" name ="gender" type ="radio" value ="Male"/>Male &nbsp; <input id ="gender" name ="gender" type ="radio" value ="Female"/>Female</td></tr>
       <td><td>Phone Number   :</td><td> <input id="pnumber" name ="pnumber" type ="text" placeholder ="Phone Number" onblur ="valid_phone('pnumber')"/></td></tr>	
</table>
                                  DOB           : Year : <select name ="year">
						  <option>Select Year</option>
						  <?php 
						  for($i=1950 ; $i<2017 ; $i++)
						  {
						  ?>
						  <option value=<?php echo "$i"?>><?php echo "$i"?></option>
						  <?php } ?>
						  </select> &nbsp; Month : <select name ="month" id="month" onchange="datecheck()">
						 
						   <option value="">Select Month</option>
						  <?php
						$ar=array("January","February","March","April","May","June","July","August","September","October","Novermer","December");
						for($i=0;$i<12 ; $i++)
						{
							?>
								<option value = <?php echo $i+1 ?>> <?php echo"$ar[$i]"?></option>
							<?php	
								}
							?>
						  </select> &nbsp; Day : <select name ="day" id='dspan'>
						  <option>Select Day</option>
						    <?php 
						  for($i=1; $i<32 ; $i++)
						  {
						  ?>
						  <option value=<?php echo "$i"?>><?php echo "$i"?></option>
						  <?php } ?>
						 </select><br><br>
	<input class="button" type = "submit" Value="Submit"/>
	</form>
</pre>	
<hr>
<script src ="reg_validation.js"></script>
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