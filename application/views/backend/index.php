<!DOCTYPE html>
<html lang="en"> 
<head>
   <meta charset="utf-8" />
   <title>Admin Area</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <link href="<?=base_url('assets/back/')?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
   <link href="<?=base_url('assets/back/')?>assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="<?=base_url('assets/back/')?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="<?=base_url('assets/back/')?>css/style.css" rel="stylesheet" />
   <link href="<?=base_url('assets/back/')?>css/style-responsive.css" rel="stylesheet" />
   <link href="<?=base_url('assets/back/')?>css/style-default.css" rel="stylesheet" id="style_color" />
   <script type="text/javascript" language="javascript">
	// JavaScript Document
	
	function trim(str) 
		{    
			 if (str != null) 
			 {        
			 	var i;        
			    for (i=0; i<str.length; i++) 
				{           
					 if (str.charAt(i)!=" ") 
					 {               
					   str=str.substring(i,str.length);                 
					   break;            
					 }        
				}            
					  
					 for (i=str.length-1; i>=0; i--)
					 {            
					 	if (str.charAt(i)!=" ") 
						{                
							str=str.substring(0,i+1);                
						     break;            
						}         
					 }                 
					if (str.charAt(0)==" ") 
					{            
						return "";         
					} 
					else 
					{            
					    return str;         
					}    
				}
			}
	function IsValidDate(Day,Mn,Yr)
	{
		var DateVal = Mn + "/" + Day + "/" + Yr;
		var dt = new Date(DateVal);
	
		if(dt.getDate()!=Day)
		{
			return false;
		}
		else if(dt.getMonth()!=Mn-1)
		{
		//this is for the purpose JavaScript starts the month from 0
			return false;
		}
		else if(dt.getFullYear()!=Yr)
		{
			return false;
		}
		return true;
	}
	function IsValidDategraterthantoday(Day,Mn,Yr)
	{
		var DateVal = Mn + "/" + Day + "/" + Yr;
		var dt = new Date(DateVal);
		var xDtToday = new Date();
		
		if(dt>xDtToday)
		{	
			return false;
		}
		else
		{
			return true;	
		}
	}
	function verifylogin()
	{ 
		var arrTmp=new Array();
		arrTmp[0]=checkusername();
		arrTmp[1]=checkpassword();
		
		
		var i;
		_blk=true;
		for(i=0;i<arrTmp.length;i++)
		{
			if(arrTmp[i]==false)
			{
			   _blk=false;
			}
		}
		if(_blk==true)
		{
			return true;
		}
		else
		{
			return false;
		}
	
 	}	
	
	function checkusername()
	{
		if(trim(document.frmlogin.username.value) == "")
		{	 
			document.getElementById("lblusername").innerHTML="Please enter username.";
			return false;
		}
		else
		{
			document.getElementById("lblusername").innerHTML="";
			return true;
		}
	}
	function checkpassword()
	{
		if(trim(document.frmlogin.password.value) == "")
		{	 
			document.getElementById("lblpassword").innerHTML="Please enter password.";
			return false;
		}
		else
		{
			document.getElementById("lblpassword").innerHTML="";
			return true;
		}
	}
	
</script>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="lock">
    <div class="lock-header">
        <h2>Welcome To Admin Area</h2>
        <!-- END LOGO -->
    </div>
    <form name="frmlogin" id="frmlogin" method="post" class="form-horizontal" onSubmit="return verifylogin();">
    
    <div class="login-wrap">
    						<?if($invalid == 'true'){?>
    						<div class="alert alert-error" style="color:red;">
                                <button data-dismiss="alert" class="close">�</button>
                                <strong>Error! Invalid Username or password...</strong>
                            </div>
                            <?}?>
        <div class="metro single-size red">
            <div class="locked">
                <i class="icon-lock"></i>
                <span>Login</span>
            </div>
        </div>
       						  
        <div class="metro double-size green">
            
                <div class="input-append lock-input">
                    <input name="username" id="username" type="text" placeholder="Username"  /><br><span id="lblusername" class="error"></span>
                </div>
           
        </div>
        <div class="metro double-size yellow">
            
                <div class="input-append lock-input">
                    <input name="password" id="password" type="password" placeholder="******" class="input-large" /><br><span id="lblpassword" class="error"></span>
                    <input type="hidden" name="action" value="login">
                </div>
           
        </div>
        <div class="metro single-size terques login">
           
                <button type="submit" class="btn login-btn">
                    <input type="hidden" name="Submit" name="Submit" value="Submit">
                    Login
                    <i class=" icon-long-arrow-right"></i>
                </button>
            
        </div>
      
    </div>
    </form>
</body>
<!-- END BODY -->
</html>