<html>
<head>
<title>OAE Scenario 03 Dashboard</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<script language="javascript" type="text/javascript">
<!--
var win=null;
function NewWindow(mypage,myname,w,h,scroll,pos){
if(pos=="random"){LeftPosition=(screen.width)?Math.floor(Math.random()*(screen.width-w)):100;TopPosition=(screen.height)?Math.floor(Math.random()*((screen.height-h)-75)):100;}
if(pos=="center"){LeftPosition=(screen.width)?(screen.width-w)/2:100;TopPosition=(screen.height)?(screen.height-h)/2:100;}
else if((pos!="center" && pos!="random") || pos==null){LeftPosition=0;TopPosition=20}
settings='width='+w+',height='+h+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',location=no,directories=no,status=no,menubar=no,toolbar=no,resizable=no';
win=window.open(mypage,myname,settings);}
// -->
</script>


<script language="javascript" type="text/javascript">
function showHide(shID) {
   if (document.getElementById(shID)) {
      if (document.getElementById(shID+'-show').style.display != 'none') {
         document.getElementById(shID+'-show').style.display = 'none';
         document.getElementById(shID).style.display = 'block';
      }
      else {
         document.getElementById(shID+'-show').style.display = 'inline';
         document.getElementById(shID).style.display = 'none';
      }
   }
}
</script>


		<link rel="stylesheet" href="plugins/colorbox/css/colorbox.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script src="plugins/colorbox/jquery.colorbox.js"></script>
		<script>
			$(document).ready(function(){
				//Examples of how to assign the ColorBox event to elements
				$(".colorbox_share").colorbox({iframe:true, width:"50%", height:"50%", overlayClose:false, opacity:0.5});
			});
		</script>

</head>

<body bgcolor="#CCCCCC">

<?php include("include-top-banner.php"); ?>
    
<table class="containertable" width="900" align="center"><tr>
        <td width="300" valign="top">Research results <img src="images/downarrow.png" /></td>
            <td width="300" valign="top"><form name="input" action="collab-search-form-action.php" method="get"><input type="text" name="explore" value="counting pathogen levels in water creek" size="40"></form>
</td>
            <td width="300" valign="top"></td>
        </tr></table>
    
    <table class="containertable" width="900" align="center"><tr>
            <td width="200" valign="top"><div id="results-side-01"><?php include("results-side-01.php"); ?></div></td>
            <td width="500" valign="top"><div id="results-content-01"><?php include("results-content-01.php"); ?></div></td>
            <td width="200" valign="top"><div id="results-side-02"><?php include("results-side-02.php"); ?></div></td>
            
        </tr></table>
    
</body>
</html>
