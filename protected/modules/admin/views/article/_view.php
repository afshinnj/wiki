<tr>
	<td class="dir-rtl">
	<?php echo CHtml::encode($data->title); ?>
	</td>
	<td>
	<?php echo CHtml::link('ویرایش','admin/article/update/id/'.$data->id); 
			 echo CHtml::link('حذف','admin/article/delete/id/'.$data->id);
	?>
	</td>
</tr>