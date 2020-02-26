function frstname(field_id)
{
	var fsname = document.getElementById(field_id).value;
	if(fsname == "")
	{
		alert("Please Fill This First Name Field");
	}
}

function lstname(field_id)
{
	var lsname = document.getElementById(field_id).value;
	if(lsname == "")
	{
		alert("Please Fill This Last Name Field");
	}
}

function valid_id()
{
	var stdid = document.getElementById("sid").value;
	var format = /^(?=.*\d).{5,7}$/;
	
	if(!stdid.match(format) || stdid =="")
	{
		alert("Please try a valid id");
	}
	
}

function valid_pass()
{
	var mypass = document.getElementById("pass").value;
	var pas = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,10}$/; 
	if(!mypass.match(pas) || mypass == "")
	{
		alert("You enter imvalid password");
	}
}






function datecheck()
{

	var month = document.getElementById("month").value;

	if(month =="1" || month=="3" || month=="5" || month=="7" || month=="8" || month=="10" || month=="12" )
	{
		var str = "<select name='day' id='day'><option value=''></option>";

		for(var i=1;i<=31;i++){ 

			str+="<option value='"+ i +"'>"+i+"</option>";
		}
		str+="</select>";
		 document.getElementById("dspan").innerHTML = str;
	}

	else if(month =="4" || month=="6" || month=="9" || month=="11")
	{
		var str = "<select name='day' id='day'><option value=''></option>";

		for(var i=1;i<=30;i++){ 

			str+="<option value='"+ i +"'>"+i+"</option>";
		}
		str+="</select>";
		 document.getElementById("dspan").innerHTML = str;
	}
	else if(month =="2")
	{
		var str = "<select name='day' id='day'><option value=''></option>";

		for(var i=1;i<=29;i++){ 

			str+="<option value='"+ i +"'>"+i+"</option>";
		}
		str+="</select>";
		 document.getElementById("dspan").innerHTML = str;
	}


}

function valid_phone()
{
	var myphn = document.getElementById("pnumber").value;
	var phn = /^(?=.*\d).{11,}$/; 
	if(!myphn.match(phn) || myphn == "")
	{
		alert("You enter imvalid phone number");
	}
}
