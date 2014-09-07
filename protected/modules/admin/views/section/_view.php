
<tr>
	<td class="dir-rtl">
	<?php echo CHtml::encode($data->title); ?>
	</td>
	<td><?php echo CHtml::link('ویرایش','admin/section/update/id/'.$data->id); 
			 echo CHtml::link('حذف','admin/section/delete/id/'.$data->id);
?>
	</td>
</tr>
