
<tr>
	<td class="dir-rtl">
	<?php echo CHtml::encode($data->first_name); ?>
	</td>
	<td class="dir-rtl">
		<?php echo CHtml::encode($data->last_name); ?>
	</td>
	<td class="dir-rtl">	
	<?php echo CHtml::encode($data->username); ?>
	</td>
	<td><?php echo CHtml::link('ویرایش','admin/user/update/id/'.$data->id); 
			 echo CHtml::link('حذف','admin/user/delete/id/'.$data->id);
?>
	</td>
</tr>
