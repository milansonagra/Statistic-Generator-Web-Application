<!DOCTYPE html>
<html>
	<head>
		<title>Delivery</title>
	</head>
	<body>
		<?php echo validation_errors('form'); ?>
		<center>
		<?php echo form_open("L1_Delivery_Controller/submit");?>
		<table cellpadding ="5px" cellspacing="10px"  style="border: double;align-content: center;">
			<tr>
				<th colspan="2"><h2>Delivery</th></h2></th>
			</tr>
			<tr>
				<td><b><?php echo form_label('Indoor Number');?></b></td>
				<td><?php echo form_input(array('type'=>'number','id'=>'indoor_number','name'=>'indoor_number'));?></td>
			</tr>
			<tr>
				<td><b><?php echo form_label('Date Of Delivery');?></b></td>
				<td><?php echo form_input(array('type'=>'datetime-local','id'=>'delivery_date','name'=>'delivery_date','value'=>date("Y-m-d h:i:sa")));?></td>
			</tr>
			<tr>
				<?php
					$options_delivery = array(
						NULL => '----Select Type of Delivery----',
						1 => 'one',
						2 => 'two'
					);
				?>
				<td><b><?php echo form_label('Type Of Delivery');?></b></td>
				<td><?php echo form_dropdown('delivery_type',$options_delivery);?></td>
			</tr>
			<tr>
				<td>
					<b>
					<?php echo form_label('Child Sex');?>
					</b>
				</td>
				<td>
					<?php echo form_radio('sex','M',TRUE);?>M
					<?php echo form_radio('sex','F',FALSE);?>F
					<?php echo form_radio('sex','O',FALSE);?>Other
				</td>
			</tr>
			<tr>
				<td><b><?php echo form_label('Chile Wight');?></b></td>
				<td><?php echo form_input(array('type'=>'number','id'=>'child_wight','name'=>'child_wight'));?></td>
			</tr>
			<tr>
				<td><b><?php echo form_label('Week Admit');?></b></td>
				<td><?php echo form_input(array('type'=>'number','id'=>'week_admit','name'=>'week_admit'));?></td>
			</tr>
			<tr>
				<td><b><?php echo form_label('Mobile Number');?></b></td>
				<td><?php echo form_input(array('type'=>'number','id'=>'mobile_number','name'=>'mobile_number'));?></td>
			</tr>
			<tr>
				<td><b><?php echo form_label('Number of tifin per day');?></b></td>
				<td><b>Day: </b><?php echo form_input(array('type'=>'number','id'=>'tifin_day','name'=>'tifin_day'));?></td>
			</tr>
			<tr>
				<td rowspan="2"></td>
				<td><b>Noon: </b><?php echo form_input(array('type'=>'number','id'=>'tifin_noon','name'=>'tifin_noon'));?></td>
			</tr>
			<tr>
				<td><b>Night: </b><?php echo form_input(array('type'=>'number','id'=>'tifin_night','name'=>'tifin_night'));?></td>
			</tr>
			<tr>
				<?php
					$options_doctors = array(
						NULL => '----Select The Doctor----',
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
				<td><b><?php echo form_label('Sweeper Servent');?></b></td>
				<td><?php echo form_input(array('type'=>'text','id'=>'sweeperservent','name'=>'sweeperservent'));?></td>
			</tr>
			<tr>
				<td><b><?php echo form_label('Asha Worker');?></b></td>
				<td><?php echo form_input(array('type'=>'text','id'=>'ashaworker','name'=>'ashaworker'));?></td>
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
	</body>
</html>