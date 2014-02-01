<?php include('header.php');?> 
			<tr>
				<td colspan=5 ><a href="<?=$kickstarter_rotf_home?>"><img src="<?=$image_path?><?=$banner_image?>"></a></td>
			</tr>
		</table>
		<table width=980>
			<tr>
				<td colspan=6 class="goldback"><h4><?=$banner_text?></h4></td>
			</tr>
			<tr>
				<td class="imageblock"><a href="<?=$crusader_url?>"><img src="<?=$image_path?><?=$crusader_image?>"></a></td>
				<td class="textblock"><?=$crusader_text?><a href="<?=$crusader_url?>"><font size=2>&nbsp;<?=$more_text?></font></a></td>
				<td class="imageblock"><a href="<?=$cleric_url?>"><img src="<?=$image_path?><?=$cleric_image?>"></a></td>
				<td class="textblock"><?=$cleric_text?><a href="<?=$cleric_url?>"><font size=2>&nbsp;<?=$more_text?></font></a></td>
				<td class="imageblock"><a href="<?=$revenant_url?>"><img src="<?=$image_path?><?=$revenant_image?>"></a></td>
				<td class="textblock"><?=$revenant_text?><a href="<?=$revenant_url?>"><font size=2>&nbsp;<?=$more_text?></font></a></td>
			</tr>
		</table>
	</center>
<?php include('footer.php');?>
