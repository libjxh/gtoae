<?php
$items = array(
	array('id' => 1, 'image' => '001.jpg', 'image2' => '001_2.jpg', 'name' => 'Detection of pathogenic'),
	array('id' => 2, 'image' => '002.jpg', 'image2' => '002_2.jpg', 'name' => 'Detection of pathogenic'),
	array('id' => 3, 'image' => '003.jpg', 'image2' => '003_2.jpg', 'name' => 'Detection of pathogenic'),
	array('id' => 4, 'image' => '004.jpg', 'image2' => '004_2.jpg', 'name' => 'Detection of pathogenic'),
	array('id' => 5, 'image' => '005.jpg', 'image2' => '005_2.jpg', 'name' => 'Detection of pathogenic'),
	array('id' => 6, 'image' => '006.jpg', 'image2' => '006_2.jpg', 'name' => 'Detection of pathogenic'),
	array('id' => 7, 'image' => '007.jpg', 'image2' => '007_2.jpg', 'name' => 'Detection of pathogenic'),
	array('id' => 8, 'image' => '008.jpg', 'image2' => '008_2.jpg', 'name' => 'Detection of pathogenic'),
	array('id' => 9, 'image' => '009.jpg', 'image2' => '009_2.jpg', 'name' => 'Detection of pathogenic'),
	array('id' => 10, 'image' => '010.jpg', 'image2' => '010_2.jpg', 'name' => 'Detection of pathogenic'),
	array('id' => 11, 'image' => '011.jpg', 'image2' => '011_2.jpg', 'name' => 'Detection of pathogenic'),
	array('id' => 12, 'image' => '012.jpg', 'image2' => '012_2.jpg', 'name' => 'Detection of pathogenic'),
	array('id' => 13, 'image' => '013.jpg', 'image2' => '013_2.jpg', 'name' => 'Detection of pathogenic'),
	array('id' => 14, 'image' => '014.jpg', 'image2' => '014_2.jpg', 'name' => 'Detection of pathogenic'),
	array('id' => 15, 'image' => '015.jpg', 'image2' => '015_2.jpg', 'name' => 'Detection of pathogenic'),
	array('id' => 16, 'image' => '016.jpg', 'image2' => '016_2.jpg', 'name' => 'Detection of pathogenic'),
	array('id' => 17, 'image' => '017.jpg', 'image2' => '017_2.jpg', 'name' => 'Detection of pathogenic'),
	array('id' => 18, 'image' => '018.jpg', 'image2' => '018_2.jpg', 'name' => 'Detection of pathogenic'),
	array('id' => 19, 'image' => '019.jpg', 'image2' => '019_2.jpg', 'name' => 'Detection of pathogenic'),
	array('id' => 20, 'image' => '020.jpg', 'image2' => '020_2.jpg', 'name' => 'Detection of pathogenic'),
	array('id' => 21, 'image' => '021.jpg', 'image2' => '021_2.jpg', 'name' => 'Detection of pathogenic'),
	array('id' => 22, 'image' => '022.jpg', 'image2' => '022_2.jpg', 'name' => 'Detection of pathogenic'),
	array('id' => 23, 'image' => '023.jpg', 'image2' => '023_2.jpg', 'name' => 'Detection of pathogenic'),
	array('id' => 24, 'image' => '024.jpg', 'image2' => '024_2.jpg', 'name' => 'Detection of pathogenic'),
);
$post_items = $_POST['items'];
print_R($post_items);
?>
<a id="tipsy_1" rel='tipsy' title='Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top Top '>1</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a id="tipsy_2" rel='tipsy' title='Down'>2</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a id="tipsy_3" rel='tipsy' title='Left'>3</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a id="tipsy_4" rel='tipsy' title='Right'>4</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<script type='text/javascript'>
  $('#tipsy_1').tipsy({trigger: 'manual', gravity: 'n'});
  $('#tipsy_2').tipsy({trigger: 'manual', gravity: 's'});
  $('#tipsy_3').tipsy({trigger: 'manual', gravity: 'e'});
  $('#tipsy_4').tipsy({trigger: 'manual', gravity: 'w'});
</script>



<script type='text/javascript'>
function anyChecked()
{
	<?php
	foreach($items as $item)	
	{
		?>
		if (document.getElementById('item_' + <?php echo $item['id']?>).checked)
		{
			return true;
		}
		<?php
	}
	?>

	return false;
}
</script>

<form method="post" name="content_form">
<table>
    <tr><td colspan="2">
<div id="slide_panel">
		<div id='share-and-add' class="dropdown">
				<a class="dropdown-button"><img src="images/icon-add+share.png" border="0" class="dropdown-icon">Share and Add</a>
				<div id="share-and-add-panel" class="dropdown-panel">
					<?php include('ajax_share_and_add_01.html');?>
				</div>
		</div>		
</div>
<a id="slide_button" href="#"><img src="images/search-results-fake/sort-TAB-CLOSED.jpg"></a>
	</td></tr>
    <tr><td align="left"><img src="images/search-results-fake/sort-RESULTS-87.jpg"></td><td align="right"><a href="index-final.php"/><img src="images/search-results-fake/sort-source-OFF.jpg"></a></td></tr>
</table>

<table>
<?php
	$item_per_row = 3;
	for ($i = 0; $i < count($items); $i = $i + $item_per_row)
	{
		echo '<tr>';
		for ($j = 0; $j < $item_per_row; $j++)
		{
			$index = $i + $j;
			if ($index < count($items))
			{
				$checked = '';
				if (isset($post_items))
				{// something sent
					foreach($post_items as $post_item)
					{
						if ($items[$index]['id'] == $post_item) {$checked = 'checked'; break;}
					}
				}
				echo '<td><div><img src="images/search-results-fake/' . $items[$index]['image'] . '" alt="' . $items[$index]['name'] . '" title="' . $items[$index]['name'] . '"><br />&nbsp;&nbsp;&nbsp;<input type="checkbox" id="item_' . $items[$index]['id'] . '" name="items[]" value="' . $items[$index]['id'] . '" ' . $checked . ' onClick="if (anyChecked()) {$(\'#slide_panel\').slideDown(\'slow\');} else {$(\'#slide_panel\').slideUp(\'slow\');}"/></div></td>';
			}
			else
			{echo '<td><div>&nbsp;</div></td>';}
		}
		echo '</tr>';
	}

?>
</table>




<script>
var callback = function(target) { 
	/*
	if ($(target).attr('id') == 'add_button')
	{
		$('#share-and-add-panel').load('ajax_share_and_add_01.html');
	}
	*/
	if ($(target).attr('id') == 'add_button_2')
	{
		$('#share-and-add-panel').load('ajax_share_and_add_02.html');
	}	
	if ($(target).attr('id') == 'add_button_3')
	{
		$('#share-and-add-panel').load('ajax_share_and_add_03.html');
	}	
}

// Initialize dropdowns:
$('#share-and-add').dropdown({width:'263px', maxHeight:'600px', callback:callback}); 
</script>
</form>

<script>
<?php
	$show_modal_window = 'false';
	if (isset($_GET['research_assistance']))
	{$show_modal_window = 'true';}

	echo "var colorbox = " . $show_modal_window . ";\n";
?>
</script>
<script>
$(document).ready(function(){
				//Examples of how to assign the ColorBox event to elements
				if (colorbox)
				{
					$.colorbox({href:"ajax_research_assistance_01.html", iframe:true, width:"40%", height:"40%", overlayClose:false, opacity:0.5});
				}
				$('#slide_button').click(function(){
					$('#slide_panel').slideToggle('slow');
					$(this).toggleClass('active');
				});
			});
</script>