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


		<link rel="stylesheet" href="plugins/colorbox/css/colorbox.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script src="plugins/colorbox/jquery.colorbox.js"></script>
		<script>
			$(document).ready(function(){
				//Examples of how to assign the ColorBox event to elements
				$(".colorbox_search").colorbox({iframe:true, width:"50%", height:"50%", overlayClose:false, opacity:0.5});
			});
		</script>

</head>

<body bgcolor="#CCCCCC">

<?php include("include-top-banner.php"); ?>
  
<table class="containertable" width="900" align="center"><tr>
        <td width="300" valign="top"><div id="clipurbanwaterway">Urban Waterway Heath Research <img src="images/downarrow.png" /></div></td>
            <td width="300" valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td width="300" valign="top"><div id="clipcreate">Create <img src="images/downarrow.png" /></div> <div id="clipupload">Upload</div> </td>
        </tr></table>
    
    <table class="containertable" width="900" align="center"><tr>
            <td width="200" valign="top"><div id="dashboard-side-01"><?php include("dashboard-side-01.php"); ?></div></td>
            <td width="700" valign="top"><div id="collab-search-content-01">
                
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX START THE BIG CONTENT HERE -->                

<span class="contentheader">Collaborative Search</span> <span class="itemcount">54</span>
<table><tr>
        <td><form name="input" action="collab-search-form-action.php" method="get"><input type="text" name="explore" size="40"></form></td>
        <td><a class="colorbox_search" href="search-popup-01.php" onfocus="this.blur()"><img src="images/search.png" /></a></td>
        <td><a href="error.php" onclick="NewWindow(this.href,'mywin','400','200','no','center');return false" onfocus="this.blur()">Advanced Search</a></td>
    </tr></table>


<div id="tip01"><img src="images/uparrow.png" /></div>
<div id="tip02"><b>Phrases</b> Try using phrases used by people or industry in the field your research is related to</div>
<p />

Research project search history

<div id="search-collab-content-block">
    <table border="0">
        <tr><td valign="top"><img src="images/jeanette.jpg" /></td>
            <td valign="top">Jeanette Fielding <i>3 hours ago</i> | <i><img src="images/magnifyingglass.png" align="absmiddle" /> <a href="error.php">Research Path</a> 2 queries, 2 saved</i><br />
                <b>"Ecology Research in urban waterways"</b></td>          
            <td valign="top"><i>5 comments</i></td>
            <td valign="top"><img src="images/downarrow.png" /></td>
        
        </tr>
    </table>    
</div>
<p />

<div id="search-collab-content-block">
    <table border="0">
        <tr><td valign="top"><img src="images/jeanette.jpg" /></td>
            <td valign="top">Jeanette Fielding <i>3 hours ago</i> | <i><img src="images/magnifyingglass.png" align="absmiddle" /> <a href="error.php">Research Path</a> 2 queries, 2 saved</i><br />
                <b>"Ecology Research in urban waterways"</b></td>          
            <td valign="top"><i>5 comments</i></td>
            <td valign="top"><img src="images/downarrow.png" /></td>
        
        </tr>
    </table>    
</div>
<p />
<div id="search-collab-content-block">
    <table border="0">
        <tr><td valign="top"><img src="images/jeanette.jpg" /></td>
            <td valign="top">Jeanette Fielding <i>3 hours ago</i> | <i><img src="images/magnifyingglass.png" align="absmiddle" /> <a href="error.php">Research Path</a> 2 queries, 2 saved</i><br />
                <b>"Ecology Research in urban waterways"</b></td>          
            <td valign="top"><i>5 comments</i></td>
            <td valign="top"><img src="images/downarrow.png" /></td>
        
        </tr>
    </table>    
</div>
<p />
<div id="search-collab-content-block">
    <table border="0">
        <tr><td valign="top"><img src="images/jeanette.jpg" /></td>
            <td valign="top">Jeanette Fielding <i>3 hours ago</i> | <i><img src="images/magnifyingglass.png" align="absmiddle" /> <a href="error.php">Research Path</a> 2 queries, 2 saved</i><br />
                <b>"Ecology Research in urban waterways"</b></td>          
            <td valign="top"><i>5 comments</i></td>
            <td valign="top"><img src="images/downarrow.png" /></td>
        
        </tr>
    </table>    
</div>
<p />
<div id="search-collab-content-block">
    <table border="0">
        <tr><td valign="top"><img src="images/jeanette.jpg" /></td>
            <td valign="top">Jeanette Fielding <i>3 hours ago</i> | <i><img src="images/magnifyingglass.png" align="absmiddle" /> <a href="error.php">Research Path</a> 2 queries, 2 saved</i><br />
                <b>"Ecology Research in urban waterways"</b></td>          
            <td valign="top"><i>5 comments</i></td>
            <td valign="top"><img src="images/downarrow.png" /></td>
        
        </tr>
    </table>    
</div>
<p />
<div id="search-collab-content-block">
    <table border="0">
        <tr><td valign="top"><img src="images/jeanette.jpg" /></td>
            <td valign="top">Jeanette Fielding <i>3 hours ago</i> | <i><img src="images/magnifyingglass.png" align="absmiddle" /> <a href="error.php">Research Path</a> 2 queries, 2 saved</i><br />
                <b>"Ecology Research in urban waterways"</b></td>          
            <td valign="top"><i>5 comments</i></td>
            <td valign="top"><img src="images/downarrow.png" /></td>
        
        </tr>
    </table>    
</div>
<p />
<div id="search-collab-content-block">
    <table border="0">
        <tr><td valign="top"><img src="images/jeanette.jpg" /></td>
            <td valign="top">Jeanette Fielding <i>3 hours ago</i> | <i><img src="images/magnifyingglass.png" align="absmiddle" /> <a href="error.php">Research Path</a> 2 queries, 2 saved</i><br />
                <b>"Ecology Research in urban waterways"</b></td>          
            <td valign="top"><i>5 comments</i></td>
            <td valign="top"><img src="images/downarrow.png" /></td>
        
        </tr>
    </table>    
</div>
<p />
<div id="search-collab-content-block">
    <table border="0">
        <tr><td valign="top"><img src="images/jeanette.jpg" /></td>
            <td valign="top">Jeanette Fielding <i>3 hours ago</i> | <i><img src="images/magnifyingglass.png" align="absmiddle" /> <a href="error.php">Research Path</a> 2 queries, 2 saved</i><br />
                <b>"Ecology Research in urban waterways"</b></td>          
            <td valign="top"><i>5 comments</i></td>
            <td valign="top"><img src="images/downarrow.png" /></td>
        
        </tr>
    </table>    
</div>
<p />
<div id="search-collab-content-block">
    <table border="0">
        <tr><td valign="top"><img src="images/jeanette.jpg" /></td>
            <td valign="top">Jeanette Fielding <i>3 hours ago</i> | <i><img src="images/magnifyingglass.png" align="absmiddle" /> <a href="error.php">Research Path</a> 2 queries, 2 saved</i><br />
                <b>"Ecology Research in urban waterways"</b></td>          
            <td valign="top"><i>5 comments</i></td>
            <td valign="top"><img src="images/downarrow.png" /></td>
        
        </tr>
    </table>    
</div>
<p />
<div id="search-collab-content-block">
    <table border="0">
        <tr><td valign="top"><img src="images/jeanette.jpg" /></td>
            <td valign="top">Jeanette Fielding <i>3 hours ago</i> | <i><img src="images/magnifyingglass.png" align="absmiddle" /> <a href="error.php">Research Path</a> 2 queries, 2 saved</i><br />
                <b>"Ecology Research in urban waterways"</b></td>          
            <td valign="top"><i>5 comments</i></td>
            <td valign="top"><img src="images/downarrow.png" /></td>
        
        </tr>
    </table>    
</div>
<p />


<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX END THE BIG CONTENT HERE -->
                
                
                </div></td>
        </tr></table>
    
</body>
</html>
