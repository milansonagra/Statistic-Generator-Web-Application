<!DOCTYPE html>
<html>
	<head>
		<title>Diagnosis</title>
	</head>
	<body>
		<?php echo validation_errors('form'); ?>
		<center>
		<?php echo form_open("L1_Diagnosis_Controller/submit");?>
		<table cellpadding ="5px" cellspacing="10px"  style="border: double;align-content: center;" >
			<tr>
				<th colspan="2"><h2>Information of Diagnosis</th></h2></th>
			</tr>
			<tr>
				<td><b><?php echo form_label('Indoor Number');?></b></td>
				<td><?php echo form_input(array('type'=>'number','id'=>'indoor_number','name'=>'indoor_number'));?></td>
			</tr>
			<tr>
				<td><b><?php echo form_label('Diagnosis Detail');?></b></td>
				<td>
					<?php
						$options_diagnosis = array(
							NULL => '---Select The Diagnosis type---',
							1 => 'one diag',
							2 => 'two diag'
						);
					?>
					<?php echo form_dropdown('doctor',$options_diagnosis);?>
				</td>
			</tr>
			<tr>
				<?php
					$options_doctors = array(
						NULL => '---- Select The Doctor----',
						1 => 'one dr'
					);
				?>
				<td><b><?php echo form_label('Doctor');?></b></td>
				<td><?php echo form_dropdown('doctor',$options_doctors);?></td>
			</tr>
			<tr>
				<?php
					$options_nurse = array(
						NULL => '---Select Nurssing staff---',
						1 => 'one nr'
					);
				?>
				<td><b><?php echo form_label('Nurssing staff');?></b></td>
				<td><?php echo form_dropdown('nurse',$options_nurse);?></td>
			</tr>
			<tr>
				<td><b><?php echo form_label('Remark');?></b></td>
				<td><textarea name="remark"></textarea></td>
			</tr>
			<tr style="align-content: center;">
				<td colspan="2"><center><?php echo form_submit('submit','Submit')?></center></td>
			</tr>
		</table>
		<?php form_close();?>
		</center>
	</body>
</html>