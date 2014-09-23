<tr>
	<td class="dir-rtl">
	<?php echo CHtml::encode($data->sub_section_title); ?>
	</td>
	<td>
	<?php echo CHtml::link('ویرایش','admin/collection/update/id/'.$data->sub_section_id); 
		  echo CHtml::link('حذف','admin/collection/delete/id/'.$data->sub_section_id);
	?>
	</td>
</tr>
