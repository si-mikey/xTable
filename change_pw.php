<?php 
error_reporting(E_ALL & ~E_NOTICE); 
require "includes/config.php";
require "includes/sess.php";
session_start();

if (!$_SESSION['fname'] ){
		
	header('Refresh: 0; URL=login.php');
	exit;
	
}


 ?>
<!DOCTYPE html>
<html>
<head>
<title>UsableX Change Password</title>

<style>
body{margin:0; padding:0; font:100% Arial, sans-serif;}


/* LOGIN CSS */

    ul {
        margin: 0;
        padding: 0;
    }

    ul li { display: inline-table; }
    
        .no-placeholder-hide { /* Will appear only if the browser doesn't support placeholders */
            float: left;
            font: bold 14px/100% Tahoma, Geneva, sans-serif;
            color: #305183;
            text-transform: uppercase;
            margin: 0 0 10px 0;
            display: none;
        }

html {
    width: 100%;
    height: 100%;
    background-image: radial-gradient(top, #546673, #1f242a);
    background-image: -moz-radial-gradient(50% 50%, farthest-side, #546673, #1f242a);
    background-image: -webkit-gradient(radial, 50% 50%, 0, 50% 50%, 700, from(#546673), to(#1f242a));
    background-image: -o-linear-gradient(#1f242a, #546673);
                      -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr='#546673', endColorstr='#1f242a')";
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#546673', endColorstr='#1f242a');
}

        #wrapper {
			width: 500px;
			margin: 10% auto;
			

        }
        
            /* Form General Style */
    
            #form {
                width: 100%;
                float: left;
                background: #fff;
                border-radius: 10px;
                -moz-border-radius: 10px;
                -webkit-border-radius: 10px;
                box-shadow: 0px 0px 0px 8px #57636d;
                -moz-box-shadow: 0px 0px 0px 8px #57636d;
                -webkit-box-shadow: 0px 0px 0px 8px #57636d;
            }
            
                #formWrapper {
                    width: 385px;
                    padding: 23px;
                    float: left;
                    border-top: none;
                    border-bottom: none;
                    border-radius: 0 0 8px 8px;
                }
            
                /* Form Menu Style */
            
                ul#menu {
                    width: 100%;
                    float: left;
                    list-style: none;
                    background: #617798;
                    border-radius: 8px 8px 0 0;
                }

                ul#menu li {    
                    width: 33%;
                    float: left;
                    border-left: 1px solid #305183;
                    border-radius: 8px 8px 0 0;
                }
                ul#menu li.client { border: none; }
                
                ul#menu li:hover,
                ul#menu li.active {
                    box-shadow: none !important;
                    background: #fff;
                    background: rgba(0,0,0,0.1) 0px 0px 8px;
                    background: -moz-linear-gradient(top, #fff, #eee 1px, #fff 25px);
                    background: -webkit-gradient(linear, left top, left 25, from(#fff), color-stop(4%, #eee), to(#fff));
                    background: -o-linear-gradient(#eee, #fff);
                }

                    ul#menu li a {
                        display: block;
                        padding: 15px 0;
                        font: bold 18px/100% Tahoma, Geneva, sans-serif;
                        color: #fff;
                        text-decoration: none;
                        text-align: center;
                        text-shadow: #305183 0 1px 0;
                    }
                    ul#menu li a:hover,
                    ul#menu li.active a { color: #617798; text-shadow: none; }
    
                /* Form Content Style */
                    
                .hide { display: none; }

                
                        /* Client Menu Options */
                
                        ul#options {
                            width: 150px;
                            height: 44px;
                            float: left;
                        }
                        
                            ul#options li a {
                                display: block;
                                margin: 5px 0;
                                font: normal 12px/100% Tahoma, Geneva, sans-serif;
                                text-transform: uppercase;
                                text-decoration: none;
                                color: #617798;
                            } 
                            
                            ul#options li a:hover { color: #305183; }
            
        /* Form Fields */
        
            /* Input Fields */
        
            input[type="text"], input[type="password"] {
                width: 96.7%;
                font: normal 13px/100% Tahoma, Geneva, sans-serif;
                color: #c4c4c4;
                margin: 0 0 12px 0;
                padding: 13px 0 13px 10px;
                border: 1px solid #e5e5e5;
                background: rgba(0,0,0,0.1) 0px 0px 8px;
                background: -moz-linear-gradient(top, #fff, #eee 1px, #fff 25px);
                background: -webkit-gradient(linear, left top, left 25, from(#fff), color-stop(4%, #eee), to(#fff));
                background: -o-linear-gradient(#eee, #fff);
                            -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr='#eeeeee', endColorstr='#ffffff')";
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#eeeeee', endColorstr='#ffffff');
            }

                input:hover,
                input:focus {
                    border-color: #c9c9c9;
                    -moz-box-shadow: rgba(0,0,0,0.15) 0px 0px 8px;
                    -webkit-box-shadow: rgba(0,0,0,0.15) 0px 0px 8px;
                    -o-box-shadow: rgba(0,0,0,0.15) 0px 0px 8px;
                }
                
                input:focus { border-color: #999999 !important; }
                
                    input:-webkit-input-placeholder { color: #c4c4c4; }
                    input:-moz-placeholder { color: #c4c4c4; }
            
            /* Label Fields (Keep Login) */
            
            label {
                margin: 9px;
                float: right;
            }
            
                input[type="checkbox"] {
                    margin: 6px;
                     /* Only for Opera, sadly */
                    border: 1px solid #305183;
                    background: #617798;
                    color: #fff;
                }

                    label p {
                        margin: 7px 0;
                        float: left;
                        font: normal 11px/100% Tahoma, Geneva, sans-serif;
                        text-transform: uppercase;
                        color: #617798;
                    }

            /* Buttons */

            input[type="submit"] {
                float: right;
                padding: 12px 17px 11px 17px;
                font: bold 14px/100% Tahoma, Geneva, sans-serif;
                color: #fff;
                text-shadow: #305183 0 1px 0;
                background: #617798;
                cursor: pointer;
                border: 1px solid #305183;
            }

                input[type="submit"]:hover, input[type="submit"]:focus { border-color: #142d52; }
                input[type="submit"]:active { background: #617789; }
                
                /* Forget Password special Stylings */
                
                input[type="text"].inputForget {
                    width: 68.2%;
                    margin-bottom: 0;
                }
                
            
    /* Chrome */
    
    @media not screen and (orientation) {

        /* Client Menu Options */

        ul#menu li.client { width: 34%;    }
    
        /* Client Menu Options */
        
        ul#options li a { margin: 4px 0; } 
    
        /* Buttons */
        
        input[type="submit"] {
            margin: 0;
            padding: 14px 20px 14px 20px !important;
        }
    }

#modal{
	position:absolute;
	top:10px;
	right: 20px;

}
	
#close{
	float: right;
	color: #fff;
	text-decoration:none;
	margin:5px 5px 0px 0px;

}

.success{

	color: #7EC045;
}
.error{

	color: #E20037;
}

#msg{
	padding-bottom: 15px;

}

#dropdowns{
	width: 400px;
	display:none;
}

#selectionClose{
	color: #fff;
	float:right;
	text-decoration:none;
	margin-right:5px;
	font-size: .9em;
	font-wight:bold;

}


</style>
<link rel="stylesheet" type="text/css" href="css/base.css" />
<link rel="stylesheet" type="text/css" href="css/redmond/jquery-ui-1.8.16.custom.css" />
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/jqueryUI/js/jqueryui.js"></script>
<script src="js/jquery.quickflip.source.js"></script>


</head>
<body>


<div id="wrapper">
    <form id="form" name="test" action="change_pw.php" method="POST">
    
    <ul id="menu">
       <li><a href="javascript:void(0) return false;" title="Change Password" id='tabTitle'>Change Password</a></li>
		<a href='javascript:void(0) return false;' id='close'>Close</a>
    </ul>
    
        <div id="formWrapper">
		
            <div id="user" >
				<div id='msg'></div>
                <label class="no-placeholder-hide">Username</label><input type="text"  id='username' name="username" autocomplete="on" placeholder="Username" />
                <label class="no-placeholder-hide">New Password</label><input type="password"  id='newpassword' name="newpassword" placeholder="New Password" />
                <label class="no-placeholder-hide">Confirm Password</label><input type="password"  id='cnpassword' name="cnpassword" placeholder="Confirm Password" />
				
                <input type="submit" id='chpBtn' name='chpBtn' value="Submit" onclick='javascript:void(0); return false;'/>

            </div>
			  </form>
		</div>
   
</div>
<!-- /////////////////////////////////////////Drop downs////////////////////////////////// -->
<div id="dropdowns">
    <form id="form" name="test" action="login.php" method="POST">
    
    <ul id="menu">
       <li><a href="javascript:void(0) return false;" title="Login" id='tabTitle'>Selection</a></li>

		<a href='javascript:void(0) return false;' id='selectionClose'>Close</a>
    </ul>
    
        <div id="formWrapper">
		
            <div id="user" >
				<div id='selectionMsg'></div>
                <label class="no-placeholder-hide">Vertical</label>
								
					<select placeholder="Vertical" name='vertical' id='vertical' class='vcp'>
						<option value='na'>Select a Vertical</>
						<option value='1'>Booking</>
						<option value='2'>Retail</>
						<option value='3'>Self-Service</>
						<option value='4'>UK</>
					
					</select><br />
				
                <label class="no-placeholder-hide">Client</label>
					<select  id='client' name="client" placeholder="Client" class='vcp'>
					
					</select><br />
					
					
                <label class="no-placeholder-hide">Project</label>
					<select id='project' name="project" placeholder="Project" class='vcp'>
					
					</select>
				
                 
            </div>
			  </form>
		</div>

</div>

<!-- /////////////////////////////////////////Drop downs////////////////////////////////// -->

<?php

 $username = @mysql_real_escape_string($_POST['username']);
 $newpassword = @mysql_real_escape_string($_POST['newpassword']);
 $cnpassword = @mysql_real_escape_string($_POST['cnpassword']);


	if($username && $newpassword && $cnpassword && $newpassword == $cnpassword){
	
	
		$update = mysql_query("UPDATE table_user SET user_password = MD5('{$newpassword}') WHERE  user_email = '{$username}'");

			if($update){
			
				$loginSuccess = "true";
				
			
			}
		
		
		
}else{
	

}


?>



<script>
	$(document).ready(function() 
		{ 			
		
						
						$("#username").attr("value","<?php echo $_SESSION['email'] ?>");
						$("#username").css("color","#999");
						
						$("#username").attr("readonly","readonly");

				
			$("#chpBtn").click(function(){
				
			
				if( !$("#username").val() || !$("#newpassword").val() || !$("#cnpassword").val() &&  $("#newpassword").val() == $("#cnpassword").val() ){
							
							$("#msg").html("Provide valid new password and confirm password");
							$("#msg").attr("class","error");
							
				}else{
				
						$("#username").removeAttr("readonly");
						$("#form").submit();
						
						
				}
				
			});
			
			<?php
		if($loginSuccess == 'true'){	
	?>
				
				window.location.href="home.php";
	
	
	
			<?php
			}
			?>

		});

</script>
</body>
</html>