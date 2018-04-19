<!DOCTYPE html>
<html>
	<head>
		<title>Personal Information</title>
	</head>
	<body>
		<?php echo validation_errors('form'); ?>
		<center>
		<?php echo form_open("L1_Personal_Info_Controller/submit");?>
		<table cellpadding ="5px" cellspacing="10px"  style="border: double;align-content: center;" >
			<tr>
				<th colspan="2"><h2>Personal Information</th></h2></th>
			</tr>
			<tr>
				<td><b><?php echo form_label('Serial Number');?></b></td>
				<td><?php echo form_input(array('type'=>'number','id'=>'serial_number','name'=>'serial_number','value'=>$serial_number));?></td>
			</tr>
			<tr>
				<td><b><?php echo form_label('Indoor Number');?></b></td>
				<td><?php echo form_input(array('type'=>'number','id'=>'indoor_number','name'=>'indoor_number','value'=>$indoor_number));?></td>
			</tr>
			<tr>
				<td><b><?php echo form_label('Name');?></b></td>
				<td><?php echo form_input(array('type'=>'text','id'=>'name','name'=>'name','value'=>$name));?></td>
			</tr>
			<tr>
				<td>
					<b>
					<?php echo form_label('Sex');?>
					</b>
				</td>
				<td>
					<?php echo form_radio('sex','M',TRUE);?>M
					<?php echo form_radio('sex','F',FALSE);?>F
					<?php echo form_radio('sex','O',FALSE);?>Other
				</td>
			</tr>
			<tr>
				<td ><b><?php echo form_label('Age');?></b></td>
				<td><?php echo form_input(array('type'=>'number','id'=>'age','name'=>'age','value'=>$age));?></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<?php echo form_radio('age_in','Y',TRUE);?> Years
					<?php echo form_radio('age_in','D',FALSE);?> Days
				</td>
			</tr>
			<tr>
				<td><b><?php echo form_label('Cast');?></b> </td>
				<td><?php echo form_input(array('type'=>'text','id'=>'cast','name'=>'cast','value'=>$cast));?></td>
			</tr>
			<tr>
				<td><b><?php echo form_label('Profession');?></b></td>
				<td><?php echo form_input(array('type'=>'text','id'=>'profession','name'=>'profession','value'=>$profession));?></td>
			</tr>
			<tr>
				<td><b><?php echo form_label('Address');?></b> </td>
				<td><?php echo form_textarea(array('id'=>'address','name'=>'address','rows'=>3,'cols'=>21,'value'=>$address))?></td>
			</tr>
			<tr>
				<td><b><?php echo form_label('Admission Date & Time');?></b></td>
				<td><?php echo form_input(array('type'=>'datetime-local','id'=>'d_t','name'=>'d_t','value'=>date("Y-m-d h:i:sa")));?></td>
			</tr>
			<tr>
				<td>
				</td>
				<td>
					<?php echo form_checkbox('108_in','yes',FALSE);?>
					Indoor in 108
				</td>
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
					<?php echo form_dropdown('diag_detail',$options_diagnosis);?>
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
				<td><?php echo form_textarea(array('id'=>'remark','name'=>'remark','rows'=>3,'cols'=>21,'value'=>$remark))?></td>
			</tr>
			<tr style="align-content: center;">
				<td colspan="2"><center><?php echo form_submit('submit','Submit')?></center></td>
			</tr>
		</table>
		<?php form_close();?>
		</center>
	</body>
</html>