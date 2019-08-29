<script src="<?php echo base_url(); ?>assets/js/view/operation.js"></script>
<div class="page-content">

	<div class="container-fluid">
		<div class="page-content__header">
			<div>
				<h2 class="page-content__header-heading">Operation</h2>
			</div>
		</div>
		<div class="main-container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main-container__desc"><i><b>Operation section is divided into: constructed wetland, parametera, electricity and maintenance.</b></i></div>

					<div class="row">
						<!-- 1. Parameters -->
						<label class="w-100"><span id="parameters_toggle" class="ua-icon-tree-minus mr-2"></span> <b style="font-size:18px;"> 1. Parameters</b></label>
						<div class="col-xl-12" id="parameters_div">
							<div class="form-group">
								<div class="text-muted">
									Please, provide each requested parameter in blank if you have it available.
								</div>
							</div>									
							<div class="row">
								<div class="col-3 text-center">
									<label>Parameters</label>
								</div>
								<div class="col-1 text-left">
									<label>Units</label>
								</div>
								<div class="col-3 text-center">
									<label>Parameters</label>
								</div>
								<div class="col-1 text-left">
									<label>Units</label>
								</div>
								<div class="col-3 text-center">
									<label>Parameters</label>
								</div>
								<div class="col-1 text-left">
									<label>Units</label>
								</div>
							</div>									
							<div class="row">
								<div class="col-2">
									<div class="mb-1 text-right">
										<label>Total area</label>
									</div>
								</div>
								<div class="col-1">
									<div class="mb-1">
										<input type="number" min=0 step="0.01" class="form-control" name="total_area1" placeholder="" value="<?php echo $total_area1 == 0 ? "" : $total_area1; ?>">
									</div>												
								</div>
								<div class="col-1">
									<div class="mb-1 text-left">
										<label>m2</label>
									</div>
								</div>
								<div class="col-2">
									<div class="mb-1 text-right">
										<label>Lifetime of operation</label>
									</div>
								</div>
								<div class="col-1">
									<div class="mb-1">
										<input type="number" min=0 class="form-control" name="lifetime1" placeholder="" value="<?php echo $lifetime1 == 0 ? "" : $lifetime1; ?>">
									</div>												
								</div>
								<div class="col-1">
									<div class="mb-1 text-left">
										<label>y</label>
									</div>
								</div>
								<div class="col-2">
									<div class="mb-1 text-right">
										<label>Treated wastewater</label>
									</div>
								</div>
								<div class="col-1">
									<div class="mb-1">
										<input type="number" min=0 step="0.01" class="form-control" name="wastewater1" placeholder="" value="<?php echo $wastewater1 == 0 ? "" : $wastewater1; ?>">
									</div>												
								</div>
								<div class="col-1">
									<div class="mb-1 text-left">
										<label>m3/d</label>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col-2">
									<div class="mb-1 text-right">
										<label>Population Equivalent</label>
									</div>
								</div>
								<div class="col-1">
									<div class="mb-1">
										<input type="number" min=0 step="0.01" class="form-control" name="equivalent1" placeholder="" value="<?php echo $equivalent1 == 0 ? "" : $equivalent1; ?>">
									</div>												
								</div>
								<div class="col-1">
									<div class="mb-1 text-left">
										<label>PE</label>
									</div>
								</div>
								<div class="col-2">
									<div class="mb-1 text-right">
										<label>BOD5 Influent</label>
									</div>
								</div>
								<div class="col-1">
									<div class="mb-1">
										<input type="number" min=0 step="0.01" class="form-control" name="bod5_influent1" placeholder="" value="<?php echo $bod5_influent1 == 0 ? "" : $bod5_influent1; ?>">
									</div>												
								</div>
								<div class="col-1">
									<div class="mb-1 text-left">
										<label>mg/l</label>
									</div>
								</div>
								<div class="col-2">
									<div class="mb-1 text-right">
										<label>BOD5 Effluent</label>
									</div>
								</div>
								<div class="col-1">
									<div class="mb-1">
										<input type="number" min=0 step="0.01" class="form-control" name="bod5_effluent1" placeholder="" value="<?php echo $bod5_effluent1 == 0 ? "" : $bod5_effluent1; ?>">
									</div>												
								</div>
								<div class="col-1">
									<div class="mb-1 text-left">
										<label>mg/l</label>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col-2">
									<div class="mb-1 text-right">
										<label>COD Influent</label>
									</div>
								</div>
								<div class="col-1">
									<div class="mb-1">
										<input type="number" min=0 step="0.01" class="form-control" name="cod_influent1" placeholder="" value="<?php echo $cod_influent1 == 0 ? "" : $cod_influent1; ?>">
									</div>												
								</div>
								<div class="col-1">
									<div class="mb-1 text-left">
										<label>mg/l</label>
									</div>
								</div>
								<div class="col-2">
									<div class="mb-1 text-right">
										<label>COD Effluent</label>
									</div>
								</div>
								<div class="col-1">
									<div class="mb-1">
										<input type="number" min=0 step="0.01" class="form-control" name="cod_effluent1" placeholder="" value="<?php echo $cod_effluent1 == 0 ? "" : $cod_effluent1; ?>">
									</div>												
								</div>
								<div class="col-1">
									<div class="mb-1 text-left">
										<label>mg/l</label>
									</div>
								</div>
								<div class="col-2">
									<div class="mb-1 text-right">
										<label>TN Influent</label>
									</div>
								</div>
								<div class="col-1">
									<div class="mb-1">
										<input type="number" min=0 step="0.01" class="form-control" name="tn_influent1" placeholder="" value="<?php echo $tn_influent1 == 0 ? "" : $tn_influent1; ?>">
									</div>												
								</div>
								<div class="col-1">
									<div class="mb-1 text-left">
										<label>mg/l</label>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col-2">
									<div class="mb-1 text-right">
										<label>TN Effluent</label>
									</div>
								</div>
								<div class="col-1">
									<div class="mb-1">
										<input type="number" min=0 step="0.01" class="form-control" name="tn_effluent1" placeholder="" value="<?php echo $tn_effluent1 == 0 ? "" : $tn_effluent1; ?>">
									</div>												
								</div>
								<div class="col-1">
									<div class="mb-1 text-left">
										<label>mg/l</label>
									</div>
								</div>
								<div class="col-2">
									<div class="mb-1 text-right">
										<label>NH4+ Influent</label>
									</div>
								</div>
								<div class="col-1">
									<div class="mb-1">
										<input type="number" min=0 step="0.01" class="form-control" name="nh4_influent1" placeholder="" value="<?php echo $nh4_influent1 == 0 ? "" : $nh4_influent1; ?>">
									</div>												
								</div>
								<div class="col-1">
									<div class="mb-1 text-left">
										<label>mg/l</label>
									</div>
								</div>
								<div class="col-2">
									<div class="mb-1 text-right">
										<label>NH4+ Effluent</label>
									</div>
								</div>
								<div class="col-1">
									<div class="mb-1">
										<input type="number" min=0 step="0.01" class="form-control" name="nh4_effluent1" placeholder="" value="<?php echo $nh4_effluent1 == 0 ? "" : $nh4_effluent1; ?>">
									</div>												
								</div>
								<div class="col-1">
									<div class="mb-1 text-left">
										<label>mg/l</label>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col-2">
									<div class="mb-1 text-right">
										<label>NO3- Influent</label>
									</div>
								</div>
								<div class="col-1">
									<div class="mb-1">
										<input type="number" min=0 step="0.01" class="form-control" name="no3_influent1" placeholder="" value="<?php echo $no3_influent1 == 0 ? "" : $no3_influent1; ?>">
									</div>												
								</div>
								<div class="col-1">
									<div class="mb-1 text-left">
										<label>mg/l</label>
									</div>
								</div>
								<div class="col-2">
									<div class="mb-1 text-right">
										<label>NO3- Effluent</label>
									</div>
								</div>
								<div class="col-1">
									<div class="mb-1">
										<input type="number" min=0 step="0.01" class="form-control" name="no3_effluent1" placeholder="" value="<?php echo $no3_effluent1 == 0 ? "" : $no3_effluent1; ?>">
									</div>												
								</div>
								<div class="col-1">
									<div class="mb-1 text-left">
										<label>mg/l</label>
									</div>
								</div>
								<div class="col-2">
									<div class="mb-1 text-right">
										<label>TP Influent</label>
									</div>
								</div>
								<div class="col-1">
									<div class="mb-1">
										<input type="number" min=0 step="0.01" class="form-control" name="tp_influent1" placeholder="" value="<?php echo $tp_influent1 == 0 ? "" : $tp_influent1; ?>">
									</div>												
								</div>
								<div class="col-1">
									<div class="mb-1 text-left">
										<label>mg/l</label>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col-2">
									<div class="mb-1 text-right">
										<label>TP Effluent</label>
									</div>
								</div>
								<div class="col-1">
									<div class="mb-1">
										<input type="number" min=0 step="0.01" class="form-control" name="tp_effluent1" placeholder="" value="<?php echo $tp_effluent1 == 0 ? "" : $tp_effluent1; ?>">
									</div>												
								</div>
								<div class="col-1">
									<div class="mb-1 text-left">
										<label>mg/l</label>
									</div>
								</div>
								<div class="col-2">
									<div class="mb-1 text-right">
										<label>E-coli Influent</label>
									</div>
								</div>
								<div class="col-1">
									<div class="mb-1">
										<input type="number" min=0 step="0.01" class="form-control" name="ecoli_influent1" placeholder="" value="<?php echo $ecoli_influent1 == 0 ? "" : $ecoli_influent1; ?>">
									</div>												
								</div>
								<div class="col-1">
									<div class="mb-1 text-left">
										<label>CFU 100 mL-1</label>
									</div>
								</div>
								<div class="col-2">
									<div class="mb-1 text-right">
										<label>E-coli Effluent</label>
									</div>
								</div>
								<div class="col-1">
									<div class="mb-1">
										<input type="number" min=0 step="0.01" class="form-control" name="ecoli_effluent1" placeholder="" value="<?php echo $ecoli_effluent1 == 0 ? "" : $ecoli_effluent1; ?>">
									</div>												
								</div>
								<div class="col-1">
									<div class="mb-1 text-left">
										<label>CFU 100 mL-1</label>
									</div>
								</div>
							</div>
						</div>
						<!-- 2. Constructed Wetland -->
						<label class="w-100 mt-3"><span id="wetland_toggle" class="ua-icon-tree-minus mr-2"></span> <b style="font-size:18px;"> 2. Constructed Wetland</b></label>
						<div class="col-xl-12" id="wetland_div">
							<div class="form-group">
								<div class="text-muted">
									Please, provide the number of each constructed wetland bed and choose its type.
								</div>
							</div>
							<div class="row">
								<div class="col-4 text-center">
									<label>Nº Beds</label>
								</div>
								<div class="col-4 text-center">
									<label>CW type</label>
								</div>
								<div class="col-2 text-center">
									<label>Subtotal (t CO2)</label>
								</div>
							</div>									
							<div class="row">
								<div class="col-2">
									<div class="mb-1 text-right">
										<label>Bed 1</label>
									</div>
								</div>
								<div class="col-2">
									<div class="input-group mb-1">
										<input type="number" min="0" class="form-control" name="bed12" placeholder="" value="<?php echo $bed12 == 0 ? "" : $bed12; ?>">
										<input type="hidden" name="btm_area" value="<?php echo $btm_area; ?>">
										<div class="input-group-append">
											<span class="input-group-text">u</span>
										</div>
									</div>
								</div>
								<div class="col-4">
									<div class="mb-1">
										<select name="bed1_type2" class="form-control">
											<option value="">Select...</option>
											<?php foreach($constructed_wetland as $key => $val) { ?>
											<?php if($key == $bed1_type2){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-2">
									<div class="mb-1">
										<input type="text" class="form-control" name="bed1_total2" value="<?php echo $bed1_total2 == 0 ? "" : $bed1_total2; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col-2">
									<div class="mb-1 text-right">
										<label>Bed 2</label>
									</div>
								</div>
								<div class="col-2">
									<div class="input-group mb-1">
										<input type="number" min="0" class="form-control" name="bed22" placeholder="" value="<?php echo $bed22 == 0 ? "" : $bed22; ?>">
										<input type="hidden" name="tonesCO2" value="<?php echo $tonesCO2; ?>">
										<div class="input-group-append">
											<span class="input-group-text">u</span>
										</div>
									</div>
								</div>
								<div class="col-4">
									<div class="mb-1">
										<select name="bed2_type2" class="form-control">
											<option value="">Select...</option>
											<?php foreach($constructed_wetland as $key => $val) { ?>
											<?php if($key == $bed2_type2){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-2">
									<div class="mb-1">
										<input type="text" class="form-control" name="bed2_total2" value="<?php echo $bed2_total2 == 0 ? "" : $bed2_total2; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col-2">
									<div class="mb-2 text-right">
										<label>Bed 3</label>
									</div>
								</div>
								<div class="col-2">
									<div class="input-group mb-2">
										<input type="number" min="0" class="form-control" name="bed32" placeholder="" value="<?php echo $bed32 == 0 ? "" : $bed32; ?>">
										<div class="input-group-append">
											<span class="input-group-text">u</span>
										</div>
									</div>
								</div>
								<div class="col-4">
									<div class="mb-2">
										<select name="bed3_type2" class="form-control">
											<option value="">Select...</option>
											<?php foreach($constructed_wetland as $key => $val) { ?>
											<?php if($key == $bed3_type2){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-2">
									<div class="mb-2">
										<input type="text" class="form-control" name="bed3_total2" value="<?php echo $bed3_total2 == 0 ? "" : $bed3_total2; ?>" readonly>
									</div>
								</div>
							</div>								
							<div class="row">
								<div class="col-6 text-center">
									
								</div>
								<div class="col-2 text-right">
									<label>Tones CO2</label>										
								</div>
								<div class="col-2">
									<div class="form-group">												
										<input type="text" class="form-control" name="tonesCO22" value="<?php echo $tonesCO22 == 0 ? "" : $tonesCO22; ?>" readonly>
									</div>
								</div>
							</div>									
						</div>							
						<!-- 3. Electricity -->
						<label class="w-100 mt-3"><span id="electricity_toggle" class="ua-icon-tree-minus mr-2"></span> <b style="font-size:18px;"> 3. Electricity</b></label>
						<div class="col-xl-12" id="electricity_div">
							<div class="form-group">
								<div class="text-muted">
									Please, choose the electricity source for the pumps and provide the time working in hours per day.
								</div>
							</div>
							<div class="row">
								<div class="col-4 text-center">
									<label>Number of pumps</label>
								</div>
								<div class="col-4 text-center">
									<label>Electricity source</label>
								</div>
								<div class="col-2 text-center">
									<label>Time Working</label>
								</div>
								<div class="col-2 text-center">
									<label>Subtotal (t CO2)</label>
								</div>
							</div>									
							<div class="row">
								<div class="col-2">
									<div class="mb-1 text-center">
										<label>Air pump</label>
									</div>
								</div>
								<div class="col-2">
									<div class="mb-1">
										<input type="text" class="form-control" name="airpump_num3" value="<?php echo $airpump_num == 0 ? "" : $airpump_num; ?>" readonly>
									</div>
								</div>
								<div class="col-4">
									<div class="mb-1">
										<select name="airpump_src3" class="form-control">
											<option value="">Select...</option>
											<?php foreach($lights as $key => $val) { ?>
											<?php if($key == $airpump_src3){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-2">
									<div class="input-group mb-1">
										<input type="number" min="0" step="0.01" class="form-control" name="airpump_time3" placeholder="" value="<?php echo $airpump_time3 == 0 ? "" : $airpump_time3; ?>">
										<div class="input-group-append">
											<span class="input-group-text">h/d</span>
										</div>
									</div>												
								</div>
								<div class="col-2">
									<div class="mb-1">
										<input type="text" class="form-control" name="airpump_total3" value="<?php echo $airpump_total3 == 0 ? "" : $airpump_total3; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col-2">
									<div class="mb-2 text-center">
										<label>Water pump</label>
									</div>
								</div>
								<div class="col-2">
									<div class="mb-2">
										<input type="text" class="form-control" name="waterpump_num3" value="<?php echo $waterpump_num == 0 ? "" : $waterpump_num; ?>" readonly>
									</div>
								</div>
								<div class="col-4">
									<div class="mb-2">
										<select name="waterpump_src3" class="form-control">
											<option value="">Select...</option>
											<?php foreach($lights as $key => $val) { ?>
											<?php if($key == $waterpump_src3){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-2">
									<div class="input-group mb-2">
										<input type="number" min="0" step="0.01" class="form-control" name="waterpump_time3" placeholder="" value="<?php echo $waterpump_time3 == 0 ? "" : $waterpump_time3; ?>">
										<div class="input-group-append">
											<span class="input-group-text">h/d</span>
										</div>
									</div>												
								</div>
								<div class="col-2">
									<div class="mb-2">
										<input type="text" class="form-control" name="waterpump_total3" value="<?php echo $waterpump_total3 == 0 ? "" : $waterpump_total3; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col-3 text-center">
									<label>Other devices</label>
								</div>
								<div class="col-3 text-center">
									<label>Electricity source</label>
								</div>
								<div class="col-2 text-center">
									<label>Time Working</label>
								</div>
								<div class="col-2 text-center">
									<label>Comsuption</label>
								</div>
								<div class="col-2 text-center">
									<label>Subtotal (t CO2)</label>
								</div>
							</div>									
							<div class="row">
								<div class="col">
									<div class="mb-1 text-center">
										<label>Device 1</label>
									</div>
								</div>
								<div class="col">
									<div class="mb-1">
										<input type="number" min=0 class="form-control" name="device1_num3" placeholder="" value="<?php echo $device1_num3 == 0 ? "" : $device1_num3; ?>">
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">
										<select name="device1_src3" class="form-control">
											<option value="">Select...</option>
											<?php foreach($lights as $key => $val) { ?>
											<?php if($key == $device1_src3){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-2">
									<div class="input-group mb-1">
										<input type="number" min=0 step="0.01" class="form-control" name="device1_time3" placeholder="" value="<?php echo $device1_time3 == 0 ? "" : $device1_time3; ?>">
										<div class="input-group-append">
											<span class="input-group-text">h/d</span>
										</div>
									</div>												
								</div>
								<div class="col-2">
									<div class="input-group mb-1">
										<input type="number" min=0 step="0.01" class="form-control" name="device1_comsuption3" placeholder="" value="<?php echo $device1_comsuption3 == 0 ? "" : $device1_comsuption3; ?>">
										<div class="input-group-append">
											<span class="input-group-text">KW/h</span>
										</div>
									</div>												
								</div>
								<div class="col-2">
									<div class="mb-1">
										<input type="text" class="form-control" name="device1_total3" value="<?php echo $device1_total3 == 0 ? "" : $device1_total3; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col">
									<div class="mb-2 text-center">
										<label>Device 2</label>
									</div>
								</div>
								<div class="col">
									<div class="mb-2">
										<input type="number" min=0 class="form-control" name="device2_num3" placeholder="" value="<?php echo $device2_num3 == 0 ? "" : $device2_num3; ?>">
									</div>
								</div>
								<div class="col-3">
									<div class="mb-2">
										<select name="device2_src3" class="form-control">
											<option value="">Select...</option>
											<?php foreach($lights as $key => $val) { ?>
											<?php if($key == $device2_src3){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-2">
									<div class="input-group mb-2">
										<input type="number" min=0 step="0.01" class="form-control" name="device2_time3" placeholder="" value="<?php echo $device2_time3 == 0 ? "" : $device2_time3; ?>">
										<div class="input-group-append">
											<span class="input-group-text">h/d</span>
										</div>
									</div>												
								</div>
								<div class="col-2">
									<div class="input-group mb-2">
										<input type="number" min=0 step="0.01" class="form-control" name="device2_comsuption3" placeholder="" value="<?php echo $device2_comsuption3 == 0 ? "" : $device2_comsuption3; ?>">
										<div class="input-group-append">
											<span class="input-group-text">KW/h</span>
										</div>
									</div>												
								</div>
								<div class="col-2">
									<div class="mb-2">
										<input type="text" class="form-control" name="device2_total3" value="<?php echo $device2_total3 == 0 ? "" : $device2_total3; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col-9 text-center">
									
								</div>
								<div class="col-1 text-right">
									<label>Tones CO2</label>										
								</div>
								<div class="col-2">
									<div class="form-group">												
										<input type="text" class="form-control" name="tonesCO23" value="<?php echo $tonesCO23 == 0 ? "" : $tonesCO23; ?>" readonly>
									</div>
								</div>
							</div>									
						</div>							
						<!-- 4. Maintenance -->
						<label class="w-100 mt-3"><span id="maintenance_toggle" class="ua-icon-tree-minus mr-2"></span> <b style="font-size:18px;"> 4. Maintenance</b></label>
						<div class="col-xl-12" id="maintenance_div">
							<div class="form-group">
								<div class="text-muted">
									Please, provide the numbers of vehicules for maintenance works as well as model, fuel type and time working in each case. If you anticipate that you will need some replacement material during operation of the CW you can also choose from several options.
								</div>
							</div>
							<div class="row">
								<div class="col-3 text-center">
									<label>Sludge removal</label>
								</div>
								<div class="col-3 text-center">
									<label>Vehicule model</label>
								</div>
								<div class="col-2 text-center">
									<label>Fuel type</label>
								</div>
								<div class="col-2 text-center">
									<label>Time Working</label>
								</div>
								<div class="col-2 text-center">
									<label>Subtotal (t CO2)</label>
								</div>
							</div>									
							<div class="row">
								<div class="col-2">
									<div class="mb-2 text-center">
										<label>Nº Vehicules</label>
									</div>
								</div>
								<div class="col-1">
									<div class="mb-2">
										<input type="number" min="0" class="form-control" name="removal_no4" placeholder="" value="<?php echo $removal_no4 == 0 ? "" : $removal_no4; ?>">
									</div>
								</div>
								<div class="col-3">
									<div class="mb-2">
										<input type="text" class="form-control" name="removal_model4" placeholder="" value="Mercedes Atego (Pumper truck 170 cv)">
									</div>
								</div>
								<div class="col-2">
									<div class="mb-2">
										<select name="removal_fuel4" class="form-control">
											<option value="">Select...</option>
											<?php foreach($fuel as $key => $val) { ?>
											<?php if($key == $removal_fuel4){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-2">
									<div class="input-group mb-2">
										<input type="number" min="0" step="0.01" class="form-control" name="removal_time4" placeholder="" value="<?php echo $removal_time4 == 0 ? "" : $removal_time4; ?>">
										<div class="input-group-append">
											<span class="input-group-text">h/y</span>
										</div>
									</div>												
								</div>
								<div class="col-2">
									<div class="mb-2">
										<input type="text" class="form-control" name="removal_total4" value="<?php echo $removal_total4 == 0 ? "" : $removal_total4; ?>" readonly>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-3 text-center">
									<label>Pruning Vegetation</label>
								</div>
								<div class="col-3 text-center">
									<label">Vehicule model</label>
								</div>
								<div class="col-2 text-center">
									<label">Fuel type</label>
								</div>
								<div class="col-2 text-center">
									<label">Time Working</label>
								</div>
								<div class="col-2 text-center">
									<label">Subtotal (t CO2)</label>
								</div>
							</div>									
							<div class="row">
								<div class="col-2">
									<div class="mb-2 text-center">
										<label>Nº Vehicules</label>
									</div>
								</div>
								<div class="col-1">
									<div class="mb-2">
										<input type="number" min=0 class="form-control" name="vegetation_no4" placeholder="" value="<?php echo $vegetation_no4 == 0 ? "" : $vegetation_no4; ?>">
									</div>
								</div>
								<div class="col-3">
									<div class="mb-2">
										<select name="vegetation_model4" class="form-control">
											<option value="">Select...</option>
											<?php foreach($vehicules1 as $key => $val) { ?>
											<?php if($key == $vegetation_model4){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-2">
									<div class="mb-2">
										<select name="vegetation_fuel4" class="form-control">
											<option value="">Select...</option>
											<?php foreach($fuel as $key => $val) { ?>
											<?php if($key == $vegetation_fuel4){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-2">
									<div class="input-group mb-2">
										<input type="number" min=0 step="0.01" class="form-control" name="vegetation_time4" placeholder="" value="<?php echo $vegetation_time4 == 0 ? "" : $vegetation_time4; ?>">
										<div class="input-group-append">
											<span class="input-group-text">h/y</span>
										</div>
									</div>												
								</div>
								<div class="col-2">
									<div class="mb-2">
										<input type="text" class="form-control" name="vegetation_total4" value="<?php echo $vegetation_total4 == 0 ? "" : $vegetation_total4; ?>" readonly>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-3 text-center">
									<label>Maintenance travels</label>
								</div>
								<div class="col-3 text-center">
									<label">Vehicule model</label>
								</div>
								<div class="col-2 text-center">
									<label">Fuel type</label>
								</div>
								<div class="col-2 text-center">
									<label">Time Working</label>
								</div>
								<div class="col-2 text-center">
									<label">Subtotal (t CO2)</label>
								</div>
							</div>									
							<div class="row">
								<div class="col-2">
									<div class="mb-2 text-center">
										<label>Nº Vehicules</label>
									</div>
								</div>
								<div class="col-1">
									<div class="mb-2">
										<input type="number" min=0 class="form-control" name="travels_no4" placeholder="" value="<?php echo $travels_no4 == 0 ? "" : $travels_no4; ?>">
									</div>
								</div>
								<div class="col-3">
									<div class="mb-2">
										<select name="travels_model4" class="form-control">
											<option value="">Select...</option>
											<?php foreach($vehicules2 as $key => $val) { ?>
											<?php if($key == $travels_model4){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-2">
									<div class="mb-2">
										<select name="travels_fuel4" class="form-control">
											<option value="">Select...</option>
											<?php foreach($fuel as $key => $val) { ?>
											<?php if($key == $travels_fuel4){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-2">
									<div class="input-group mb-2">
										<input type="number" min=0 step="0.01" class="form-control" name="travels_time4" placeholder="" value="<?php echo $travels_time4 == 0 ? "" : $travels_time4; ?>">
										<div class="input-group-append">
											<span class="input-group-text">h/y</span>
										</div>
									</div>												
								</div>
								<div class="col-2">
									<div class="mb-2">
										<input type="text" class="form-control" name="travels_total4" value="<?php echo $travels_total4 == 0 ? "" : $travels_total4; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col-3 text-center">
									<label>Replacement material</label>
								</div>
								<div class="col-4 text-center">
									<label">Element</label>
								</div>
								<div class="col-1 text-left">
									<label">Unit</label>
								</div>
								<div class="col-2 text-center">
									<label">Material</label>
								</div>
								<div class="col-2 text-center">
									<label">Subtotal (t CO2)</label>
								</div>
							</div>									
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Pipe 1</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" min=0 step="0.01" class="form-control" name="pipe14" placeholder="" value="<?php echo $pipe14 == 0 ? "" : $pipe14; ?>">
										<div class="input-group-append">
											<span class="input-group-text">m</span>
										</div>
									</div>												
								</div>
								<div class="col-4">
									<div class="mb-1">
										<select name="pipe1_elem4" class="form-control">
											<option value="">Select...</option>
											<?php foreach($pipes as $key => $val) { ?>
											<?php if($key == $pipe1_elem4){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-1">
									<div class="mb-1 text-left">
										<label>Kg/m</label>
									</div>
								</div>
								<div class="col-2">
									<div class="mb-1">
										<select name="pipe1_mat4" class="form-control">
											<option value="">Select...</option>
											<?php foreach($pipes1 as $key => $val) { ?>
											<?php if($key == $pipe1_mat4){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>												
								</div>
								<div class="col-2">
									<div class="mb-1">
										<input type="text" class="form-control" name="pipe1_total4" value="<?php echo $pipe1_total4 == 0 ? "" : $pipe1_total4; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Pipe 2</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" min=0 step="0.01" class="form-control" name="pipe24" placeholder="" value="<?php echo $pipe24 == 0 ? "" : $pipe24; ?>">
										<div class="input-group-append">
											<span class="input-group-text">m</span>
										</div>
									</div>												
								</div>
								<div class="col-4">
									<div class="mb-1">
										<select name="pipe2_elem4" class="form-control">
											<option value="">Select...</option>
											<?php foreach($pipes as $key => $val) { ?>
											<?php if($key == $pipe2_elem4){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-1">
									<div class="mb-1 text-left">
										<label>Kg/m</label>
									</div>
								</div>
								<div class="col-2">
									<div class="mb-1">
										<select name="pipe2_mat4" class="form-control">
											<option value="">Select...</option>
											<?php foreach($pipes1 as $key => $val) { ?>
											<?php if($key == $pipe2_mat4){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>												
								</div>
								<div class="col-2">
									<div class="mb-1">
										<input type="text" class="form-control" name="pipe2_total4" value="<?php echo $pipe2_total4 == 0 ? "" : $pipe2_total4; ?>" readonly>
									</div>
								</div>
							</div>								
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Nº manholes</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" min=0  class="form-control" name="manholes4" placeholder="" value="<?php echo $manholes4 == 0 ? "" : $manholes4; ?>">
										<div class="input-group-append">
											<span class="input-group-text">u</span>
										</div>
									</div>												
								</div>
								<div class="col-4">
									<div class="mb-1">
										<select name="manholes_elem4" class="form-control">
											<option value="">Select...</option>
											<?php foreach($manholes as $key => $val) { ?>
											<?php if($key == $manholes_elem4){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-1">
									<div class="mb-1 text-left">
										<label>Kg</label>
									</div>
								</div>
								<div class="col-2">
									<div class="mb-1">
										<select name="manholes_mat4" class="form-control">
											<option value="">Select...</option>
											<?php foreach($pipes1 as $key => $val) { ?>
											<?php if($key == $manholes_mat4){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>												
								</div>
								<div class="col-2">
									<div class="mb-1">
										<input type="text" class="form-control" name="manholes_total4" value="<?php echo $manholes_total4 == 0 ? "" : $manholes_total4; ?>" readonly>
									</div>
								</div>
							</div>						
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Nº light bulbs</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" min=0  class="form-control" name="lightbulbs4" placeholder="" value="<?php echo $lightbulbs4 == 0 ? "" : $lightbulbs4; ?>">
										<div class="input-group-append">
											<span class="input-group-text">u</span>
										</div>
									</div>												
								</div>
								<div class="col-4">
									<div class="mb-1">
										<select name="lightbulbs_elem4" class="form-control">
											<option value="">Select...</option>
											<?php foreach($lamps as $key => $val) { ?>
											<?php if($key == $lightbulbs_elem4){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-1">
									<div class="mb-1 text-left">
										<label>u</label>
									</div>
								</div>
								<div class="col-2">
									<div class="mb-1">
										<input type="text" class="form-control" name="lightbulbs_mat4" placeholder="" value="Glass, steel, electronic,…">
									</div>												
								</div>
								<div class="col-2">
									<div class="mb-1">
										<input type="text" class="form-control" name="lightbulbs_total4" value="<?php echo $lightbulbs_total4 == 0 ? "" : $lightbulbs_total4; ?>" readonly>
									</div>
								</div>
							</div>						
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Nº spotlight</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" min=0  class="form-control" name="spotlight4" placeholder="" value="<?php echo $spotlight4 == 0 ? "" : $spotlight4; ?>">
										<div class="input-group-append">
											<span class="input-group-text">u</span>
										</div>
									</div>												
								</div>
								<div class="col-4">
									<div class="mb-1">
										<select name="spotlight_elem4" class="form-control">
											<option value="">Select...</option>
											<?php foreach($electrical_panels as $key => $val) { ?>
											<?php if($key == $spotlight_elem4){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-1">
									<div class="mb-1 text-left">
										<label>u</label>
									</div>
								</div>
								<div class="col-2">
									<div class="mb-1">
										<input type="text" class="form-control" name="spotlight_mat4" placeholder="" value="Glass, steel, electronic,…">
									</div>												
								</div>
								<div class="col-2">
									<div class="mb-1">
										<input type="text" class="form-control" name="spotlight_total4" value="<?php echo $spotlight_total4 == 0 ? "" : $spotlight_total4; ?>" readonly>
									</div>
								</div>
							</div>						
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Nº air pump</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" min=0  class="form-control" name="airpump4" placeholder="" value="<?php echo $airpump4 == 0 ? "" : $airpump4; ?>">
										<div class="input-group-append">
											<span class="input-group-text">u</span>
										</div>
									</div>												
								</div>
								<div class="col-2 offset-7">
									<div class="mb-1">
										<input type="text" class="form-control" name="airpump_total4" value="<?php echo $airpump_total4 == 0 ? "" : $airpump_total4; ?>" readonly>
									</div>
								</div>
							</div>						
							<div class="row">
								<div class="col">
									<div class="mb-2 text-right">
										<label>Nº water pump</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-2">
										<input type="number" min=0  class="form-control" name="waterpump4" placeholder="" value="<?php echo $waterpump4 == 0 ? "" : $waterpump4; ?>">
										<div class="input-group-append">
											<span class="input-group-text">u</span>
										</div>
									</div>												
								</div>
								<div class="col-2 offset-7">
									<div class="mb-2">
										<input type="text" class="form-control" name="waterpump_total4" value="<?php echo $waterpump_total4 == 0 ? "" : $waterpump_total4; ?>" readonly>
									</div>
								</div>
							</div>						
							<div class="row">
								<div class="col-9 text-center">
									
								</div>
								<div class="col-1 text-right">
									<label>Tones CO2</label>										
								</div>
								<div class="col-2">
									<div class="form-group">												
										<input type="text" class="form-control" name="tonesCO24" value="<?php echo $tonesCO24 == 0 ? "" : $tonesCO24; ?>" readonly>
									</div>
								</div>
							</div>									
						</div>
						
					</div>
				</div>
  
			</div>
		</div>
	</div>

</div>
<?php if($this->session->flashdata('input_error')){

	echo "<script> $('document').ready(function(){ setTimeout(function(){alert('Error in ".$this->session->flashdata('input_error')[0].", numeric type is required.');$('input[name=" . '"'.$this->session->flashdata('input_error')[1].'"'."]').get(0).scrollIntoView(true);window.scrollBy(0, -150);},2000); }) </script>";
}