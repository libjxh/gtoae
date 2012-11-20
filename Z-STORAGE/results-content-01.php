<h2>Peer review articles</h2> SEARCH narrow these results by...

<table><tr><td><img src="images/resultscheckbox.png" /></td><td><a class="colorbox_share" href="content/disassemble.html"  onClick="assemble_href(this);"><img src="images/share.png" /></td><td><img src="images/1x1.png" height="1" width="250" />Sort and filter <img src="images/downarrow.png" /></td></tr></table>
<table>
    <tr>
        <td><img src="images/content-preview01.png"</td>
        <td><img src="images/content-preview02.png"</td>
        <td><img src="images/content-preview03.png"</td>
    </tr>
    <tr>
        <td><input type="checkbox" name="item_1" value="1"></td>
        <td><input type="checkbox" name="item_2" value="2"></td>
        <td><input type="checkbox" name="item_3" value="3"></td>
    </tr>

    <tr>
        <td><img src="images/content-preview04.png"</td>
        <td><img src="images/content-preview05.png"</td>
        <td><img src="images/content-preview06.png"</td>
    </tr>
    <tr>
        <td><form><input type="checkbox" name="item_4" value="4"></form></td>
        <td><form><input type="checkbox" name="item_5" value="5"></form></td>
        <td><form><input type="checkbox" name="item_6" value="6"></form></td>
    </tr>
</table>
<script>
function assemble_href(obj) {
    var inputs = document.getElementsByTagName("input"); //or document.forms[0].elements;  
    var cbs = []; //will contain all checkboxes  
    var checked = []; //will contain all checked checkboxes  
    for (var i = 0; i < inputs.length; i++) {  
      if (inputs[i].type == "checkbox") {  
        cbs.push(inputs[i]);  
        if (inputs[i].checked) {  
          checked.push(inputs[i]);  
        }  
      }  
    }  
    var nbCbs = cbs.length; //number of checkboxes  
    var nbChecked = checked.length; //number of checked checkboxes  

	var href = obj.href.replace(/[?&]+([^=&]+)=([^&]*)[&]*/gi, '');
	if (nbChecked > 0)
	{
		var parameter = '';
		for (var i = 0; i < nbChecked; i++)
		{
			parameter = parameter + 'item_' + i + '=' + checked[i].value + '&';
		}
		href = href + '?' + parameter;
	}
	obj.href = href;
}
</script>