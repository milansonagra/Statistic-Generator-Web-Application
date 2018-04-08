<!DOCTYPE html>
<html>
	<head>
		<title>Discharge Informations</title>
	</head>
	<body>
		<?php echo validation_errors('form'); ?>
		<center>
		<?php echo form_open("L1_Discharge_Info_Controller/submit");?>
		<table cellpadding ="5px" cellspacing="10px"  style="border: double;align-content: center;" >
			<tr>
				<th colspan="2"><h2>Discharge Information</th></h2></th>
			</tr>
			<tr>
				<td><b><?php echo form_label('Indoor Number');?></b></td>
				<td><?php echo form_input(array('type'=>'number','id'=>'indoor_number','name'=>'indoor_number'));?></td>
			</tr>
			<tr>
				<?php
						$options_nurse = array(
							NULL => '--Select Discharge Type--',
							1 => 'one',
							2 => 'two'
						);
				?>
				<td><b><?php echo form_label('Discharge Type');?></b></td>
				<td><?php echo form_dropdown('discharge_type',$options_nurse);?></td>
			</tr>
			<tr>
				<td><b><?php echo form_label('Admission Date & Time');?></b></td>
				<td><?php echo form_input(array('type'=>'datetime-local','id'=>'d_t','name'=>'d_t','value'=>date("Y-m-d h:i:sa")));?></td>
			</tr>
			<tr>
				<td>
				</td>
				<td>
					<?php echo form_checkbox('108_out','yes',FALSE);?>
					Indoor in 108
				</td>
			</tr>
			<tr style="align-content: center;">
				<td colspan="2"><center><?php echo form_submit('submit','Submit')?></center></td>
			</tr>
		</table>
		</center>
	</body>
</html>