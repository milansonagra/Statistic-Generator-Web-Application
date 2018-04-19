<!DOCTYPE html>
<html>
	<head>
		<title>New Born</title>
	</head>
	<body>
		<?php echo validation_errors('form'); ?>
		<center>
		<?php echo form_open("L1_New_Born_Controller/submit");?>
		<table cellpadding ="5px" cellspacing="10px"  style="border: double;align-content: center;" >
			<tr>
				<th colspan="2"><h2>New Born</th></h2></th>
			</tr>
			<tr>
				<td><b><?php echo form_label('Indoor Number');?></b></td>
				<td><?php echo form_input(array('type'=>'number','id'=>'indoor_number','name'=>'indoor_number','value'=>$indoor_number));?></td>
			</tr>
			<tr>
				<td><b><?php echo form_label('Name');?></b></td>
				<td><?php echo form_input(array('type'=>'text','id'=>'name','name'=>'name'));?></td>
			</tr>
			<tr>
				<td ><b><?php echo form_label('Age');?></b></td>
				<td><?php echo form_input(array('type'=>'number','id'=>'age','name'=>'age'));?></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<?php echo form_radio('age_in','Y',TRUE);?> Years
					<?php echo form_radio('age_in','D',FALSE);?> Days
				</td>
			</tr>
			<tr>
				<td>
					<b><?php echo form_label('Diagnosis');?></b>
				</td>
				<td>
					<?php
					$options_diagnosis = array(
						NULL => '---- Select The Diagnosisr----',
						1 => 'diag-1'
					);
				?>
				<?php echo form_dropdown('Diagnosis',$options_diagnosis);?>
				</td>
			</tr>
			<tr>
				<td><b><?php echo form_label('Remark');?></b></td>
				<td><textarea name="remark"></textarea></td>
			</tr>
			<tr style="align-content: center;">
				<td colspan="2"><center><?php echo form_submit('submit','Submit')?></center></td>
			</tr>
		</table>
		</center>
		<?php form_close();?>
	</body>
</html>