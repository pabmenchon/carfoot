<script src="<?php echo base_url(); ?>assets/js/view/material.js"></script>


<div class="page-content">

	<div class="container-fluid">
		<div class="page-content__header">
			<div>
				<h2 class="page-content__header-heading">Materials and Construction</h2>
			</div>
		</div>
		<div class="main-container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main-container__desc"><i><b>This workbook is divided into three sections: Materials and construction, Operation and Summary.</b><br>You should fill in the data that are requested in "Materials and construction" and "Operation" sections for obtaining the final printable report "Summary".<br><b>Materials and construction section is divided into: project, hut, excavation, electricity, pretreatment, wetland, pipes, pumps and electrical.</b><br>Fill up the blank cells in each case above mencionated. You should fill the data really knows. Not known data does not prevent for calculating emissions from other components.</i></div>

					<div class="row">
						<!-- 1. Project Raw -->
						<label class="w-100"><span id="project_toggle" class="ua-icon-tree-minus mr-2"></span> <b style="font-size:18px;"> 1. Project</b></label>
						<div class="col-xl-12" id="project_div">
							<div class="form-group">
								<div class="text-muted">
									Please, provide the number of hours estimated in the drafting of the engineering project. If you don`t know this data you can leave it in blank.
								</div>
							</div>
							<div class="row">
								<div class="col-2">
									<div class="form-group has-success">
										<label for="inputPHours">Hours</label>											
										<div class="input-group input-group-sm">	
											<input type="number" class="form-control" name="p_hours12" placeholder="" value="<?php echo $p_hours12 == 0 ? "" : $p_hours12; ?>" min=0>
											<input type="hidden" id="office_emission_c350" value="<?php echo $office_emissions[1]; ?>">
											<div class="input-group-append">
												<span class="input-group-text">h</span>
											</div>
										</div>	
									</div>
								</div>
								<div class="col-8">
									<div class="form-group input-group-sm has-success">
										<label for="inputPElements">Elements</label>
										<input type="text" class="form-control" name="p_elem12" placeholder="" value="Pc, printer, illumination, refrigeration, paper, travel to work (office 30 m2)">
									</div>
								</div>
								<div class="col-2">
									<div class="form-group input-group-sm has-success">
										<label for="inputPSubtotal">Subtotal (t CO2)</label>
										<input type="text" class="form-control" name="p_subtotal12" value="<?php echo $p_subtotal12 == 0 ? "" : $p_subtotal12; ?>" readonly>
									</div>
								</div>
							</div>
						</div>
						<!-- 2. Hut -->
						<label class="w-100 mt-3"><span id="hut_toggle" class="ua-icon-tree-minus mr-2"></span> <b style="font-size:18px;"> 2. Hut</b></label>
						<div class="col-xl-12" id="hut_div">
							<div class="form-group">
								<div class="text-muted">
									If in your project is planning to build a hut for system control and store material please enter the data that are requested. You also should choose both elements and material in each case. If in your project does not intend to build a hut for system control and store materials, please leave blank cells.
								</div>
							</div>
							<div class="row">
								<div class="col-3 text-center">
									<label>Dimensions and Number of Elements</label>
								</div>
								<div class="col-5 text-center">
									<label>Elements</label>
								</div>
								<div class="col-3 text-center">
									<label>Material</label>
								</div>
								<div class="col-1 text-center">
									<label>Subtotal (t CO2)</label>
								</div>
							</div>									
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Length</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" step="0.01" class="form-control" name="length1" placeholder="" value="<?php echo $length1 == 0 ? "" : $length1; ?>" min=0>
										<input type="hidden" id="materials_c62" value="<?php echo $materials[52]; ?>">
										<div class="input-group-append">
											<span class="input-group-text">m</span>
										</div>
									</div>
								</div>
								<div class="col">
									<div class="mb-1 text-right">
										<label>Partitions (Kg/m2)</label>
									</div>
								</div>
								<div class="col-4">
									<div class="mb-1">
										<select name="partitions_elem1" class="form-control">
											<option value="">Select...</option>
											<?php foreach($partitionss as $key => $val) { ?>
											<?php if($key == $partitions_elem1){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">
										<input type="text" class="form-control" name="partitions_mat1" placeholder="" value="Ceramic">
									</div>
								</div>
								<div class="col-1">
									<div class="mb-1">
										<input type="text" class="form-control" name="partitions_total1" value="<?php echo $partitions_total1 == 0 ? "" : $partitions_total1 ?>" readonly>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Height</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" step="0.01" class="form-control" name="height1" placeholder="" value="<?php echo $height1 == 0 ? "" : $height1; ?>" min=0>
										<div class="input-group-append">
											<span class="input-group-text">m</span>
										</div>
									</div>
								</div>
								<div class="col">
									<div class="mb-1 text-right">
										<label>Roof (Kg/m2)</label>
									</div>
								</div>
								<div class="col-4">
									<div class="mb-1">
										<select name="roof_elem1" class="form-control">
											<option value="">Select...</option>
											<?php foreach($ceilings as $key => $val) { ?>
											<?php if($key == $roof_elem1){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">
										<select name="roof_mat1" class="form-control">
											<option value="">Select...</option>
											<?php foreach($special_select_materials as $key => $val) { ?>
											<?php if($key == $roof_mat1){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-1">
									<div class="mb-1">
										<input type="text" class="form-control" name="roof_total1" value="<?php echo $roof_total1 == 0 ? "" : $roof_total1; ?>" readonly>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Width</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" step="0.01" class="form-control" name="width1" placeholder="" value="<?php echo $width1 == 0 ? "" : $width1; ?>" min=0>
										<div class="input-group-append">
											<span class="input-group-text">m</span>
										</div>
									</div>
								</div>
								<div class="col">
									<div class="mb-1 text-right">
										<label>Facing (Kg/m2)</label>
									</div>
								</div>
								<div class="col-4">
									<div class="mb-1">
										<select name="facing_elem1" class="form-control">
											<option value="">Select...</option>
											<?php foreach($facings as $key => $val) { ?>
											<?php if($key == $facing_elem1){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">
										<select name="facing_mat1" class="form-control">
											<option value="">Select...</option>
											<?php foreach($special_select_materials as $key => $val) { ?>
											<?php if($key == $facing_mat1){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-1">
									<div class="mb-1">
										<input type="text" class="form-control" name="facing_total1" value="<?php echo $facing_total1 == 0 ? "" : $facing_total1; ?>" readonly>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Floors</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number"  class="form-control" name="floors_num1" placeholder="" value="<?php echo $floors_num1 == 0 ? "" : $floors_num1; ?>" min=0 >
										<div class="input-group-append">
											<span class="input-group-text">u</span>
										</div>
									</div>
								</div>
								<div class="col">
									<div class="mb-1 text-right">
										<label>Floor (Kg/m2)</label>
									</div>
								</div>
								<div class="col-4">
									<div class="mb-1">
										<select name="floor_elem1" class="form-control">
											<option value="">Select...</option>
											<?php foreach($floors as $key => $val) { ?>
											<?php if($key == $floor_elem1){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">
										<select name="floor_mat1" class="form-control">
											<option value="">Select...</option>
											<?php foreach($special_select_materials as $key => $val) { ?>
											<?php if($key == $floor_mat1){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-1">
									<div class="mb-1">
										<input type="text" class="form-control" name="floor_total1" value="<?php echo $floor_total1 == 0 ? "" : $floor_total1; ?>" readonly>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Pilars(30x30x 250cm)</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" min=0 class="form-control" name="pilars30_num1" placeholder="" value="<?php echo $pilars30_num1 == 0 ? "" : $pilars30_num1; ?>">
										<div class="input-group-append">
											<span class="input-group-text">u</span>
										</div>
									</div>
								</div>
								<div class="col">
									<div class="mb-1 text-right">
										<label>Pavement (Kg/m2)</label>
									</div>
								</div>
								<div class="col-4">
									<div class="mb-1">
										<select name="pavement_elem1" class="form-control">
											<option value="">Select...</option>
											<?php foreach($pavements as $key => $val) { ?>
											<?php if($key == $pavement_elem1){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">
										<select name="pavement_mat1" class="form-control">
											<option value="">Select...</option>
											<?php foreach($special_select_materials as $key => $val) { ?>
											<?php if($key == $pavement_mat1){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-1">
									<div class="mb-1">
										<input type="text" class="form-control" name="pavement_total1" value="<?php echo $pavement_total1 == 0 ? "" : $pavement_total1; ?>" readonly>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Pilars(25x25x 250cm)</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" min=0  class="form-control" name="pilars25_num1" placeholder="" value="<?php echo $pilars25_num1 == 0 ? "" : $pilars25_num1; ?>">
										<div class="input-group-append">
											<span class="input-group-text">u</span>
										</div>
									</div>
								</div>
								<div class="col">
									<div class="mb-1 text-right">
										<label>Pilars (Kg/m2)</label>
									</div>
								</div>
								<div class="col-4">
									<div class="mb-1">
										<input type="text" class="form-control" name="pilars_elem1" placeholder="" value="Reinforced concrete">
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">
										<input type="text" class="form-control" name="pilars_mat1" placeholder="" value="Reinforced concrete">
									</div>
								</div>
								<div class="col-1">
									<div class="mb-1">
										<input type="text" class="form-control" name="pilars_total1" value="<?php echo $pilars_total1 == 0 ? "" : $pilars_total1; ?>" readonly>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Paint</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" min=0  class="form-control" name="paint1" placeholder="" value="<?php echo $paint1 == 0 ? "" : $paint1; ?>" readonly>
										<div class="input-group-append">
											<span class="input-group-text">m2</span>
										</div>
									</div>
								</div>
								<div class="col">
									<div class="mb-1 text-right">
										<label>Paint (Kg/m2)</label>
									</div>
								</div>
								<div class="col-4">
									<div class="mb-1">
										<select name="paint_elem1" class="form-control">
											<option value="">Select...</option>
											<?php foreach($facings as $key => $val) { ?>
											<?php if($key == $paint_elem1){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">
										<select name="paint_mat1" class="form-control">
											<option value="">Select...</option>
											<?php foreach($special_select_materials as $key => $val) { ?>
											<?php if($key == $paint_mat1){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-1">
									<div class="mb-1">
										<input type="text" class="form-control" name="paint_total1" value="<?php echo $paint_total1 == 0 ? "" : $paint_total1; ?>" readonly>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Doors</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" min=0  class="form-control" name="doors_num1" placeholder="" value="<?php echo $doors_num1 == 0 ? "" : $doors_num1; ?>">
										<div class="input-group-append">
											<span class="input-group-text">u</span>
										</div>
									</div>
								</div>
								<div class="col">
									<div class="mb-1 text-right">
										<label>Door (Kg/m2)</label>
									</div>
								</div>
								<div class="col-4">
									<div class="mb-1">
										<select name="door_elem1" class="form-control">
											<option value="">Select...</option>
											<?php foreach($doors as $key => $val) { ?>
											<?php if($key == $door_elem1){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">
										<select name="door_mat1" class="form-control">
											<option value="">Select...</option>
											<?php foreach($special_select_materials as $key => $val) { ?>
											<?php if($key == $door_mat1){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-1">
									<div class="mb-1">
										<input type="text" class="form-control" name="door_total1" value="<?php echo $door_total1 == 0 ? "" : $door_total1; ?>" readonly>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="mb-2 text-right">
										<label>Windows</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-2">
										<input type="number" min=0  class="form-control" name="windows_num1" placeholder="" value="<?php echo $windows_num1 == 0 ? "" : $windows_num1; ?>">
										<div class="input-group-append">
											<span class="input-group-text">u</span>
										</div>
									</div>
								</div>
								<div class="col">
									<div class="mb-2 text-right">
										<label>Window (Kg/m2)</label>
									</div>
								</div>
								<div class="col-4">
									<div class="mb-2">
										<select name="windows_elem" class="form-control">
											<option value="">Select...</option>
											<?php foreach($windows as $key => $val) { ?>
											<?php if($key == $windows_elem1){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-2">
										<input type="text" class="form-control" name="windows_mat1" placeholder="" value="Aluminum + glass">
									</div>
								</div>
								<div class="col-1">
									<div class="mb-2">
										<input type="text" class="form-control" name="windows_total1" value="<?php echo $windows_total1 == 0 ? "" : $windows_total1; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col-9 text-center">
									
								</div>
								<div class="col-2 text-right">
									<label>Tones CO2</label>										
								</div>
								<div class="col-1">
									<div class="form-group">												
										<input type="text" class="form-control" name="tonesCO21" value="<?php echo $tonesCO21 == 0 ? "" : $tonesCO21; ?>" readonly>
									</div>
								</div>
							</div>									
						</div>	
						<!-- 3. Excavation -->
						<label class="w-100 mt-3"><span id="excavation_toggle" class="ua-icon-tree-minus mr-2"></span> <b style="font-size:18px;"> 3. Excavation</b></label>
						<div class="col-xl-12" id="excavation_div">
							<div class="form-group">
								<div class="text-muted">
									You should add both excavator and trucks number to be used in the excavation works, choose the machine model, choose the fuel type and the whole time working for each machine.
								</div>
							</div>
							<div class="row">
								<div class="col-2 text-center">
									<label>Nº vehicules</label>
								</div>
								<div class="col-3 text-center">
									<label>Model</label>
								</div>
								<div class="col-3 text-center">
									<label>Fuel Type</label>
								</div>
								<div class="col-2 text-center">
									<label>Time Working</label>
								</div>
								<div class="col-2 text-center">
									<label>Subtotal (t CO2)</label>
								</div>
							</div>									
							<div class="row">
								<div class="col-1">
									<div class="mb-1 text-right">
										<label>Excavator 1</label>
									</div>
								</div>
								<div class="col-1">
									<div class="mb-1">
										<input type="number" min=0  class="form-control" name="excavator12" placeholder="" value="<?php echo $excavator12 == 0 ? "" : $excavator12; ?>">
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">
										<select name="excavator1_model2" class="form-control">
											<option value="">Select...</option>
											<?php foreach($vehicules as $key => $val) { ?>
											<?php if($key == $excavator1_model2){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">
										<select name="excavator1_fuel2" class="form-control">
											<option value="">Select...</option>
											<?php foreach($fuel as $key => $val) { ?>
											<?php if($key == $excavator1_fuel2){?>
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
										<input type="number" min=0 step="0.01" class="form-control" name="excavator1_time2" placeholder="" value="<?php echo $excavator1_time2 == 0 ? "" : $excavator1_time2; ?>">
										<div class="input-group-append">
											<span class="input-group-text">h</span>
										</div>
									</div>												
								</div>
								<div class="col-2">
									<div class="mb-1">
										<input type="text" class="form-control" name="excavator1_total2" value="<?php echo $excavator1_total2 == 0 ? "" : $excavator1_total2; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col-1">
									<div class="mb-1 text-right">
										<label>Excavator 2</label>
									</div>
								</div>
								<div class="col-1">
									<div class="mb-1">
										<input type="number" min=0  class="form-control" name="excavator22" placeholder="" value="<?php echo $excavator22 == 0 ? "" : $excavator22; ?>">
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">
										<select name="excavator2_model2" class="form-control">
											<option value="">Select...</option>
											<?php foreach($vehicules as $key => $val) { ?>
											<?php if($key == $excavator2_model2){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">
										<select name="excavator2_fuel2" class="form-control">
											<option value="">Select...</option>
											<?php foreach($fuel as $key => $val) { ?>
											<?php if($key == $excavator2_fuel2){?>
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
										<input type="number" min=0 step="0.01" class="form-control" name="excavator2_time2" placeholder="" value="<?php echo $excavator2_time2 == 0 ? "" : $excavator2_time2; ?>">
										<div class="input-group-append">
											<span class="input-group-text">h</span>
										</div>
									</div>												
								</div>
								<div class="col-2">
									<div class="mb-1">
										<input type="text" class="form-control" name="excavator2_total2" value="<?php echo $excavator2_total2 == 0 ? "" : $excavator2_total2; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col-1">
									<div class="mb-1 text-right">
										<label>Truck 1</label>
									</div>
								</div>
								<div class="col-1">
									<div class="mb-1">
										<input type="number" min=0  class="form-control" name="truck12" placeholder="" value="<?php echo $truck12 == 0 ? "" : $truck12; ?>">
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">
										<select name="truck1_model2" class="form-control">
											<option value="">Select...</option>
											<?php foreach($vehicules1 as $key => $val) { ?>
											<?php if($key == $truck1_model2){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">
										<select name="truck1_fuel2" class="form-control">
											<option value="">Select...</option>
											<?php foreach($fuel as $key => $val) { ?>
											<?php if($key == $truck1_fuel2){?>
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
										<input type="number" min=0 step="0.01"  class="form-control" name="truck1_time2" placeholder="" value="<?php echo $truck1_time2 == 0 ? "" : $truck1_time2; ?>">
										<div class="input-group-append">
											<span class="input-group-text">h</span>
										</div>
									</div>												
								</div>
								<div class="col-2">
									<div class="mb-1">
										<input type="text" class="form-control" name="truck1_total2" value="<?php echo $truck1_total2 == 0 ? "" : $truck1_total2; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col-1">
									<div class="mb-2 text-right">
										<label>Truck 2</label>
									</div>
								</div>
								<div class="col-1">
									<div class="mb-2">
										<input type="number" min=0  class="form-control" name="truck22" placeholder="" value="<?php echo $truck22 == 0 ? "" : $truck22; ?>">
									</div>
								</div>
								<div class="col-3">
									<div class="mb-2">
										<select name="truck2_model2" class="form-control">
											<option value="">Select...</option>
											<?php foreach($vehicules1 as $key => $val) { ?>
											<?php if($key == $truck2_model2){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-2">
										<select name="truck2_fuel2" class="form-control">
											<option value="">Select...</option>
											<?php foreach($fuel as $key => $val) { ?>
											<?php if($key == $truck2_fuel2){?>
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
										<input type="number" min=0 step="0.01" class="form-control" name="truck2_time2" placeholder="" value="<?php echo $truck2_time2 == 0 ? "" : $truck2_time2; ?>">
										<div class="input-group-append">
											<span class="input-group-text">h</span>
										</div>
									</div>			
								</div>
								<div class="col-2">
									<div class="mb-2">
										<input type="text" class="form-control" name="truck2_total2" value="<?php echo $truck2_total2 == 0 ? "" : $truck2_total2; ?>" readonly>
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
										<input type="text" class="form-control" name="tonesCO22" value="<?php echo $tonesCO22 == 0 ? "" : $tonesCO22; ?>" readonly>
									</div>
								</div>
							</div>									
						</div>							
						<!-- 4. Electricity -->
						<label class="w-100 mt-3"><span id="electricity_toggle" class="ua-icon-tree-minus mr-2"></span> <b style="font-size:18px;"> 4. Electricity</b></label>
						<div class="col-xl-12" id="electricity_div">
							<div class="form-group">
								<div class="text-muted">
									If you are using some kind of electrical device for construction provide the number of devices, its consumption of electricity, choose electricity source and add the whole estimated time working for each one.
								</div>
							</div>
							<div class="row">
								<div class="col-3 text-center">
									<label>Number of devices</label>
								</div>
								<div class="col-2 text-center">
									<label>Consuption</label>
								</div>
								<div class="col-3 text-center">
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
								<div class="col">
									<div class="mb-1 text-center">
										<label>Device 1</label>
									</div>
								</div>
								<div class="col">
									<div class="mb-1">
										<input type="number" min=0  class="form-control" name="device1_num3" placeholder="" value="<?php echo $device1_num3 == 0 ? "" : $device1_num3; ?>">
									</div>
								</div>
								<div class="col-2">
									<div class="input-group mb-1">
										<input type="number" min=0  class="form-control" name="device1_cons3" placeholder="" value="<?php echo $device1_cons3 == 0 ? "" : $device1_cons3; ?>">
										<div class="input-group-append">
											<span class="input-group-text">kw/h</span>
										</div>
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
									<div class="mb-1">
										<input type="text" class="form-control" name="device1_total3" value="<?php echo $device1_total3 == 0 ? "" : $device1_total3; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col">
									<div class="mb-1 text-center">
										<label>Device 2</label>
									</div>
								</div>
								<div class="col">
									<div class="mb-1">
										<input type="number" min=0  class="form-control" name="device2_num3" placeholder="" value="<?php echo $device2_num3 == 0 ? "" : $device2_num3; ?>">
									</div>
								</div>
								<div class="col-2">
									<div class="input-group mb-1">
										<input type="number" min=0  class="form-control" name="device2_cons3" placeholder="" value="<?php echo $device2_cons3 == 0 ? "" : $device2_cons3; ?>">
										<div class="input-group-append">
											<span class="input-group-text">kw/h</span>
										</div>
									</div>												
								</div>
								<div class="col-3">
									<div class="mb-1">
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
									<div class="input-group mb-1">
										<input type="number" min=0 step="0.01" class="form-control" name="device2_time3" placeholder="" value="<?php echo $device2_time3 == 0 ? "" : $device2_time3; ?>">
										<div class="input-group-append">
											<span class="input-group-text">h/d</span>
										</div>
									</div>												
								</div>
								<div class="col-2">
									<div class="mb-1">
										<input type="text" class="form-control" name="device2_total3" value="<?php echo $device2_total3 == 0 ? "" : $device2_total3; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col">
									<div class="mb-2 text-center">
										<label>Device 3</label>
									</div>
								</div>
								<div class="col">
									<div class="mb-2">
										<input type="number" min=0  class="form-control" name="device3_num3" placeholder="" value="<?php echo $device3_num3 == 0 ? "" : $device3_num3; ?>">
									</div>
								</div>
								<div class="col-2">
									<div class="input-group mb-2">
										<input type="number" min=0  class="form-control" name="device3_cons3" placeholder="" value="<?php echo $device3_cons3 == 0 ? "" : $device3_cons3; ?>">
										<div class="input-group-append">
											<span class="input-group-text">kw/h</span>
										</div>
									</div>												
								</div>
								<div class="col-3">
									<div class="mb-2">
										<select name="device3_src3" class="form-control">
											<option value="">Select...</option>
											<?php foreach($lights as $key => $val) { ?>
											<?php if($key == $device3_src3){?>
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
										<input type="number" min=0 step="0.01" class="form-control" name="device3_time3" placeholder="" value="<?php echo $device3_time3 == 0 ? "" : $device3_time3; ?>">
										<div class="input-group-append">
											<span class="input-group-text">h/d</span>
										</div>
									</div>												
								</div>
								<div class="col-2">
									<div class="mb-2">
										<input type="text" class="form-control" name="device3_total3" value="<?php echo $device3_total3 == 0 ? "" : $device3_total3; ?>" readonly>
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
						<!-- 5. Pretreatment -->
						<label class="w-100 mt-3"><span id="pretreatment_toggle" class="ua-icon-tree-minus mr-2"></span> <b style="font-size:18px;"> 5. Pretreatment</b></label>
						<div class="col-xl-12" id="pretreatment_div">
							<div class="form-group">
								<div class="text-muted">
									<b>You can choose between using a prefabricated pretreatment or build the pretreatment.</b><br>Please, provide the number of tanks to be buried and choose the volumen of the tank if you are using a prefabricated pretreatment.<br>Please, provide the dimensions of  the tanks to be built, the numbers of griller and choose the elements and  type of material if you are using a built "in situ" pretreatment.
								</div>
							</div>
							<label class=""><b>Tank</b></label>
							<div class="row">
								<div class="col-4 text-center">
									<label>Tanks</label>
								</div>
								<div class="col-4 text-center">
									<label>Elements</label>
								</div>
								<div class="col-2 text-center">
									<label>Material</label>
								</div>
								<div class="col-2 text-center">
									<label>Subtotal (t CO2)</label>
								</div>
							</div>									
							<div class="row">
								<div class="col-2">
									<div class="mb-1 text-right">
										<label>Number of Tanks 1</label>
									</div>
								</div>
								<div class="col-2">
									<div class="input-group mb-1">
										<input type="number" min=0  class="form-control" name="tank1_num4" placeholder="" value="<?php echo $tank1_num4 == 0 ? "" : $tank1_num4; ?>">
										<div class="input-group-append">
											<span class="input-group-text">u</span>
										</div>
									</div>												
								</div>
								<div class="col-1">
									<div class="mb-1 text-right">
										<label>Tank 1 (u)</label>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">
										<select name="tank1_elem4" class="form-control">
											<option value="">Select...</option>
											<?php foreach($pretreatment as $key => $val) { ?>
											<?php if($key == $tank1_elem4){?>
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
										<input type="text" class="form-control" name="tank1_mat4" placeholder="" value="PE">
									</div>												
								</div>
								<div class="col-2">
									<div class="mb-1">
										<input type="text" class="form-control" name="tank1_total4" value="<?php echo $tank1_total4 == 0 ? "" : $tank1_total4; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col-2">
									<div class="mb-1 text-right">
										<label>Number of Tanks 2</label>
									</div>
								</div>
								<div class="col-2">
									<div class="input-group mb-1">
										<input type="number" min=0  class="form-control" name="tank2_num4" placeholder="" value="<?php echo $tank2_num4 == 0 ? "" : $tank2_num4; ?>">
										<div class="input-group-append">
											<span class="input-group-text">u</span>
										</div>
									</div>												
								</div>
								<div class="col-1">
									<div class="mb-1 text-right">
										<label>Tank 2 (u)</label>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">
										<select name="tank2_elem4" class="form-control">
											<option value="">Select...</option>
											<?php foreach($pretreatment as $key => $val) { ?>
											<?php if($key == $tank2_elem4){?>
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
										<input type="text" class="form-control" name="tank2_mat4" placeholder="" value="PE">
									</div>												
								</div>
								<div class="col-2">
									<div class="mb-1">
										<input type="text" class="form-control" name="tank2_total4" value="<?php echo $tank2_total4 == 0 ? "" : $tank2_total4; ?>" readonly>
									</div>
								</div>
							</div>																		
							<div class="row">
								<div class="col-2">
									<div class="mb-2 text-right">
										<label>Number of Tanks 3</label>
									</div>
								</div>
								<div class="col-2">
									<div class="input-group mb-2">
										<input type="number" min=0  class="form-control" name="tank3_num4" placeholder="" value="<?php echo $tank3_num4 == 0 ? "" : $tank3_num4; ?>">
										<div class="input-group-append">
											<span class="input-group-text">u</span>
										</div>
									</div>												
								</div>
								<div class="col-1">
									<div class="mb-2 text-right">
										<label>Tank 3 (u)</label>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-2">
										<select name="tank3_elem4" class="form-control">
											<option value="">Select...</option>
											<?php foreach($pretreatment as $key => $val) { ?>
											<?php if($key == $tank3_elem4){?>
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
										<input type="text" class="form-control" name="tank3_mat4" placeholder="" value="PE">
									</div>												
								</div>
								<div class="col-2">
									<div class="mb-2">
										<input type="text" class="form-control" name="tank3_total4" value="<?php echo $tank3_total4 == 0 ? "" : $tank3_total4; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col-1 offset-9 text-right">
									<label>Tones CO2</label>										
								</div>
								<div class="col-2">
									<div class="form-group">												
										<input type="text" class="form-control" name="tonesCO24" value="<?php echo $tonesCO24 == 0 ? "" : $tonesCO24; ?>" readonly>
									</div>
								</div>
							</div>
							<label class=""><b>Built "in situ"</b></label>
							<div class="row">
								<div class="col-3 text-center">
									<label>Dimensions</label>
								</div>
								<div class="col-5 text-center">
									<label>Elements</label>
								</div>
								<div class="col-3 text-center">
									<label>Material</label>
								</div>
								<div class="col-1 text-center">
									<label>Subtotal (t CO2)</label>
								</div>
							</div>									
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Length</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" step="0.01" min=0  class="form-control" name="length5" placeholder="" value="<?php echo $length5 == 0 ? "" : $length5; ?>">
										<div class="input-group-append">
											<span class="input-group-text">m</span>
										</div>
									</div>												
								</div>
								<div class="col">
									<div class="mb-1 text-right">
										<label>Tank (Kg/m2)</label>
									</div>
								</div>
								<div class="col-4">
									<div class="mb-1">
										<select name="tank_elem5" class="form-control">
											<option value="">Select...</option>
											<?php foreach($floors as $key => $val) { ?>
											<?php if($key == $tank_elem5){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">												
										<select name="tank_mat5" class="form-control">
											<option value="">Select...</option>
											<?php foreach($special_select_materials as $key => $val) { ?>
											<?php if($key == $tank_mat5){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>												
								</div>
								<div class="col-1">
									<div class="mb-1">
										<input type="text" class="form-control" name="tank_total5" value="<?php echo $tank_total5 == 0 ? "" : $tank_total5; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Height</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" step="0.01" min=0  class="form-control" name="height5" placeholder="" value="<?php echo $height5 == 0 ? "" : $height5; ?>">
										<div class="input-group-append">
											<span class="input-group-text">m</span>
										</div>
									</div>												
								</div>
								<div class="col">
									<div class="mb-1 text-right">
										<label>Griller (Kg/m2)</label>
									</div>
								</div>
								<div class="col-4">
									<div class="mb-1">
										<select name="griller_elem5" class="form-control">
											<option value="">Select...</option>
											<?php foreach($griller as $key => $val) { ?>
											<?php if($key == $griller_elem5){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">												
										<select name="griller_mat5" class="form-control">
											<option value="">Select...</option>
											<?php foreach($special_select_materials as $key => $val) { ?>
											<?php if($key == $griller_mat5){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>												
								</div>
								<div class="col-1">
									<div class="mb-1">
										<input type="text" class="form-control" name="griller_total5" value="<?php echo $griller_total5 == 0 ? "" : $griller_total5; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Width</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" step="0.01" min=0  class="form-control" name="width5" placeholder="" value="<?php echo $width5 == 0 ? "" : $width5; ?>">
										<div class="input-group-append">
											<span class="input-group-text">m</span>
										</div>
									</div>												
								</div>
								<div class="col"></div>
								<div class="col-8"></div>
							</div>									
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Number of Griller</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" min=0  class="form-control" name="griller5" placeholder="" value="<?php echo $griller5 == 0 ? "" : $griller5; ?>">
										<div class="input-group-append">
											<span class="input-group-text">m2</span>
										</div>
									</div>												
								</div>
								<div class="col"></div>
								<div class="col-6 text-center">
									
								</div>
								<div class="col-1 text-right">
									<label>Tones CO2</label>										
								</div>
								<div class="col-1">
									<div class="form-group">												
										<input type="text" class="form-control" name="tonesCO25" value="<?php echo $tonesCO25 == 0 ? "" : $tonesCO25; ?>" readonly>
									</div>
								</div>
							</div>									
						</div>	
						<!-- 6. Wetland -->
						<label class="w-100 mt-3"><span id="wetland_toggle" class="ua-icon-tree-minus mr-2"></span> <b style="font-size:18px;"> 6. Wetland</b></label>
						<div class="col-xl-12" id="wetland_div">
							<div class="form-group">
								<div class="text-muted">
									<b>You have three options in case you are using a hybrid systems within different dimensions, fillers or configurations.</b><br>Please, provide length, width, total deep and the deep of each filler layer and the perimetral structure dimensions for each bed to be buitl. Please, you have also choose both elements and materials.<br>Notice you have two types of bed configuratios: slope of 45° (bed 1 and 2) and slope of 30° (bed 3). If you have only a wetland bed contemplated in your project you have to fill only for one bed.
								</div>
							</div>
							<label class=""><b>Wetland (bed 1) slope 45°</b></label>
							<div class="row">
								<div class="col-3 text-center">
									<label>Dimensions</label>
								</div>
								<div class="col-4 text-center">
									<label>Elements</label>
								</div>
								<div class="col-3 text-center">
									<label>Material</label>
								</div>
								<div class="col-2 text-center">
									<label>Subtotal (t CO2)</label>
								</div>
							</div>									
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Length</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" step="0.01" min=0  class="form-control" name="length6" placeholder="" value="<?php echo $length6 == 0 ? "" : $length6; ?>">
										<div class="input-group-append">
											<span class="input-group-text">m</span>
										</div>
									</div>												
								</div>
								<div class="col">
									<div class="mb-1 text-right">
										<label>Geotextil (Kg/m2)</label>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">
										<select name="geotextil_elem6" class="form-control">
											<option value="">Select...</option>
											<?php foreach($liners as $key => $val) { ?>
											<?php if($key == $geotextil_elem6){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">												
										<select name="geotextil_mat6" class="form-control">
											<option value="">Select...</option>
											<?php foreach($polimers as $key => $val) { ?>
											<?php if($key == $geotextil_mat6){?>
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
										<input type="text" class="form-control" name="geotextil_total6" value="<?php echo $geotextil_total6 == 0 ? "" : $geotextil_total6; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Width</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" step="0.01" min=0  class="form-control" name="width6" placeholder="" value="<?php echo $width6 == 0 ? "" : $width6; ?>">
										<div class="input-group-append">
											<span class="input-group-text">m</span>
										</div>
									</div>												
								</div>
								<div class="col">
									<div class="mb-1 text-right">
										<label>Liner (Kg/m2)</label>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">
										<select name="liner_elem6" class="form-control">
											<option value="">Select...</option>
											<?php foreach($liners1 as $key => $val) { ?>
											<?php if($key == $liner_elem6){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">												
										<select name="liner_mat6" class="form-control">
											<option value="">Select...</option>
											<?php foreach($polimers1 as $key => $val) { ?>
											<?php if($key == $liner_mat6){?>
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
										<input type="text" class="form-control" name="liner_total6" value="<?php echo $liner_total6 == 0 ? "" : $liner_total6; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Total Deep</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" step="0.01" min=0  class="form-control" name="deep6" placeholder="" value="<?php echo $deep6 == 0 ? "" : $deep6; ?>">
										<div class="input-group-append">
											<span class="input-group-text">m</span>
										</div>
									</div>												
								</div>
								<div class="col">
									<div class="mb-1 text-right">
										<label>Leak detection liner (Kg/m2)</label>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">
										<select name="leak_liner_elem6" class="form-control">
											<option value="">Select...</option>
											<?php foreach($liners1 as $key => $val) { ?>
											<?php if($key == $leak_liner_elem6){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">												
										<select name="leak_liner_mat6" class="form-control">
											<option value="">Select...</option>
											<?php foreach($polimers2 as $key => $val) { ?>
											<?php if($key == $leak_liner_mat6){?>
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
										<input type="text" class="form-control" name="leak_liner_total6" value="<?php echo $leak_liner_total6 == 0 ? "" : $leak_liner_total6; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Layer 1</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" step="0.01" min=0  class="form-control" name="layer16" placeholder="" value="<?php echo $layer16 == 0 ? "" : $layer16; ?>">
										<div class="input-group-append">
											<span class="input-group-text">m</span>
										</div>
									</div>												
								</div>
								<div class="col">
									<div class="mb-1 text-right">
										<label>Bed filler (Kg/m2)</label>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">
										<select name="bed1_elem6" class="form-control">
											<option value="">Select...</option>
											<?php foreach($bulk_materials as $key => $val) { ?>
											<?php if($key == $bed1_elem6){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">												
										<input type="text" class="form-control" name="bed1_mat6" placeholder="" value="Arid (sand and gravel)">
									</div>												
								</div>
								<div class="col-2">
									<div class="mb-1">
										<input type="text" class="form-control" name="bed1_total6" value="<?php echo $bed1_total6 == 0 ? "" : $bed1_total6; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Layer 2</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" step="0.01" min=0  class="form-control" name="layer26" placeholder="" value="<?php echo $layer26 == 0 ? "" : $layer26; ?>">
										<div class="input-group-append">
											<span class="input-group-text">m</span>
										</div>
									</div>												
								</div>
								<div class="col">
									<div class="mb-1 text-right">
										<label></label>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">
										<select name="bed2_elem6" class="form-control">
											<option value="">Select...</option>
											<?php foreach($bulk_materials as $key => $val) { ?>
											<?php if($key == $bed2_elem6){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">												
										<input type="text" class="form-control" name="bed2_mat6" placeholder="" value="Arid (sand and gravel)">
									</div>												
								</div>
								<div class="col-2">
									<div class="mb-1">
										<input type="text" class="form-control" name="bed2_total6" value="<?php echo $bed2_total6 == 0 ? "" : $bed2_total6; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Layer 3</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" step="0.01" min=0  class="form-control" name="layer36" placeholder="" value="<?php echo $layer36 == 0 ? "" : $layer36; ?>">
										<div class="input-group-append">
											<span class="input-group-text">m</span>
										</div>
									</div>												
								</div>
								<div class="col">
									<div class="mb-1 text-right">
										<label></label>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">
										<select name="bed3_elem6" class="form-control">
											<option value="">Select...</option>
											<?php foreach($bulk_materials as $key => $val) { ?>
											<?php if($key == $bed3_elem6){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">												
										<input type="text" class="form-control" name="bed3_mat6" placeholder="" value="Arid (sand and gravel)">
									</div>												
								</div>
								<div class="col-2">
									<div class="mb-1">
										<input type="text" class="form-control" name="bed3_total6" value="<?php echo $bed3_total6 == 0 ? "" : $bed3_total6; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Layer 4</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" step="0.01" min=0  class="form-control" name="layer46" placeholder="" value="<?php echo $layer46 == 0 ? "" : $layer46; ?>">
										<div class="input-group-append">
											<span class="input-group-text">m</span>
										</div>
									</div>												
								</div>
								<div class="col">
									<div class="mb-1 text-right">
										<label></label>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">
										<select name="bed4_elem6" class="form-control">
											<option value="">Select...</option>
											<?php foreach($bulk_materials as $key => $val) { ?>
											<?php if($key == $bed4_elem6){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">												
										<input type="text" class="form-control" name="bed4_mat6" placeholder="" value="Arid (sand and gravel)">
									</div>												
								</div>
								<div class="col-2">
									<div class="mb-1">
										<input type="text" class="form-control" name="bed4_total6" value="<?php echo $bed4_total6 == 0 ? "" : $bed4_total6; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Layer 5</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" step="0.01" min=0  class="form-control" name="layer56" placeholder="" value="<?php echo $layer56 == 0 ? "" : $layer56; ?>">
										<div class="input-group-append">
											<span class="input-group-text">m</span>
										</div>
									</div>												
								</div>
								<div class="col">
									<div class="mb-1 text-right">
										<label></label>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">
										<select name="bed5_elem6" class="form-control">
											<option value="">Select...</option>
											<?php foreach($bulk_materials as $key => $val) { ?>
											<?php if($key == $bed5_elem6){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">												
										<input type="text" class="form-control" name="bed5_mat6" placeholder="" value="Arid (sand and gravel)">
									</div>												
								</div>
								<div class="col-2">
									<div class="mb-1">
										<input type="text" class="form-control" name="bed5_total6" value="<?php echo $bed5_total6 == 0 ? "" : $bed5_total6; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Perimetral stone Width</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" min=0  class="form-control" name="stone_width6" placeholder="" value="<?php echo $stone_width6 == 0 ? "" : $stone_width6; ?>">
										<div class="input-group-append">
											<span class="input-group-text">m</span>
										</div>
									</div>												
								</div>
								<div class="col">
									<div class="mb-1 text-right">
										<label>Perimetral stone</label>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">
										<select name="stone_elem6" class="form-control">
											<option value="">Select...</option>
											<?php foreach($rocks_stones as $key => $val) { ?>
											<?php if($key == $stone_elem6){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">												
										<input type="text" class="form-control" name="stone_mat6" placeholder="" value="Arid (sand and gravel)">
									</div>												
								</div>
								<div class="col-2">
									<div class="mb-1">
										<input type="text" class="form-control" name="stone_total6" value="<?php echo $stone_total6 == 0 ? "" : $stone_total6; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Perimetral stone Height</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" min=0  class="form-control" name="stone_height6" placeholder="" value="<?php echo $stone_height6 == 0 ? "" : $stone_height6; ?>">
										<div class="input-group-append">
											<span class="input-group-text">m</span>
										</div>
									</div>												
								</div>
								<div class="col">
									<div class="mb-1 text-right">
										<label>Vegetation matter</label>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">
										<input type="text" class="form-control" name="vege_matter_elem6" placeholder="" value="<?php echo $vege_matter_elem6 == 0 ? "" : $vege_matter_elem6; ?>">
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">												
										<input type="text" class="form-control" name="vege_matter_mat6" placeholder="" value="<?php echo $vege_matter_mat6 == 0 ? "" : $vege_matter_mat6; ?>">
									</div>												
								</div>
								<div class="col-2">
									<div class="mb-1">
										<input type="text" class="form-control" name="vege_matter_total6" value="<?php echo $vege_matter_total6 == 0 ? "" : $vege_matter_total6; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Bottom area</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" min=0  class="form-control" name="btm_area6" placeholder="" value="<?php echo $btm_area6 == 0 ? "" : $btm_area6; ?>" readonly>
										<div class="input-group-append">
											<span class="input-group-text">m2</span>
										</div>
									</div>												
								</div>
								<div class="col"></div>
								<div class="col-8"></div>
							</div>									
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Top area</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number"  min=0  class="form-control" name="top_area6" placeholder="" value="<?php echo $top_area6 == 0 ? "" : $top_area6; ?>" readonly>
										<div class="input-group-append">
											<span class="input-group-text">m2</span>
										</div>
									</div>												
								</div>
								<div class="col"></div>
								<div class="col-8"></div>
							</div>									
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Nº of beds</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" min=0  class="form-control" name="beds_no6" placeholder="" value="<?php echo $beds_no6 == 0 ? "" : $beds_no6; ?>">
										<div class="input-group-append">
											<span class="input-group-text">u</span>
										</div>
									</div>												
								</div>
								<div class="col"></div>
								<div class="col-1 offset-5 text-right">
									<label>Tones CO2</label>										
								</div>
								<div class="col-2">
									<div class="form-group">												
										<input type="text" class="form-control" name="tonesCO26" value="<?php echo $tonesCO26 == 0 ? "" : $tonesCO26; ?>" readonly>
									</div>
								</div>
							</div>
							<label class="mt-2"><b>Wetland (bed 2) slope 45°</b></label>
							<div class="row">
								<div class="col-3 text-center">
									<label>Dimensions</label>
								</div>
								<div class="col-4 text-center">
									<label>Elements</label>
								</div>
								<div class="col-3 text-center">
									<label>Material</label>
								</div>
								<div class="col-2 text-center">
									<label>Subtotal (t CO2)</label>
								</div>
							</div>									
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Length</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" step="0.01" min=0  class="form-control" name="length7" placeholder="" value="<?php echo $length7 == 0 ? "" : $length7; ?>">
										<div class="input-group-append">
											<span class="input-group-text">m</span>
										</div>
									</div>												
								</div>
								<div class="col">
									<div class="mb-1 text-right">
										<label>Geotextil (Kg/m2)</label>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">
										<select name="geotextil_elem7" class="form-control">
											<option value="">Select...</option>
											<?php foreach($liners as $key => $val) { ?>
											<?php if($key == $geotextil_elem7){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">												
										<select name="geotextil_mat7" class="form-control">
											<option value="">Select...</option>
											<?php foreach($polimers as $key => $val) { ?>
											<?php if($key == $geotextil_mat7){?>
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
										<input type="text" class="form-control" name="geotextil_total7" value="<?php echo $geotextil_total7 == 0 ? "" : $geotextil_total7; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Width</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" step="0.01" min=0  class="form-control" name="width7" placeholder="" value="<?php echo $width7 == 0 ? "" : $width7; ?>">
										<div class="input-group-append">
											<span class="input-group-text">m</span>
										</div>
									</div>												
								</div>
								<div class="col">
									<div class="mb-1 text-right">
										<label>Liner (Kg/m2)</label>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">
										<select name="liner_elem7" class="form-control">
											<option value="">Select...</option>
											<?php foreach($liners1 as $key => $val) { ?>
											<?php if($key == $liner_elem7){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">												
										<select name="liner_mat7" class="form-control">
											<option value="">Select...</option>
											<?php foreach($polimers1 as $key => $val) { ?>
											<?php if($key == $liner_mat7){?>
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
										<input type="text" class="form-control" name="liner_total7" value="<?php echo $liner_total7 == 0 ? "" : $liner_total7; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Total Deep</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" step="0.01" min=0  class="form-control" name="deep7" placeholder="" value="<?php echo $deep7 == 0 ? "" : $deep7; ?>">
										<div class="input-group-append">
											<span class="input-group-text">m</span>
										</div>
									</div>												
								</div>
								<div class="col">
									<div class="mb-1 text-right">
										<label>Leak detection liner (Kg/m2)</label>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">
										<select name="leak_liner_elem7" class="form-control">
											<option value="">Select...</option>
											<?php foreach($liners1 as $key => $val) { ?>
											<?php if($key == $leak_liner_elem7){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">												
										<select name="leak_liner_mat7" class="form-control">
											<option value="">Select...</option>
											<?php foreach($polimers2 as $key => $val) { ?>
											<?php if($key == $leak_liner_mat7){?>
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
										<input type="text" class="form-control" name="leak_liner_total7" value="<?php echo $leak_liner_total7 == 0 ? "" : $leak_liner_total7; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Layer 1</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" step="0.01" min=0  class="form-control" name="layer17" placeholder="" value="<?php echo $layer17 == 0 ? "" : $layer17; ?>">
										<div class="input-group-append">
											<span class="input-group-text">m</span>
										</div>
									</div>												
								</div>
								<div class="col">
									<div class="mb-1 text-right">
										<label>Bed filler (Kg/m2)</label>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">
										<select name="bed1_elem7" class="form-control">
											<option value="">Select...</option>
											<?php foreach($bulk_materials as $key => $val) { ?>
											<?php if($key == $bed1_elem7){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">												
										<input type="text" class="form-control" name="bed1_mat7" placeholder="" value="Arid (sand and gravel)">
									</div>												
								</div>
								<div class="col-2">
									<div class="mb-1">
										<input type="text" class="form-control" name="bed1_total7" value="<?php echo $bed1_total7 == 0 ? "" : $bed1_total7; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Layer 2</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" step="0.01" min=0  class="form-control" name="layer27" placeholder="" value="<?php echo $layer27 == 0 ? "" : $layer27; ?>">
										<div class="input-group-append">
											<span class="input-group-text">m</span>
										</div>
									</div>												
								</div>
								<div class="col">
									<div class="mb-1 text-right">
										<label></label>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">
										<select name="bed2_elem7" class="form-control">
											<option value="">Select...</option>
											<?php foreach($bulk_materials as $key => $val) { ?>
											<?php if($key == $bed2_elem7){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">												
										<input type="text" class="form-control" name="bed2_mat7" placeholder="" value="Arid (sand and gravel)">
									</div>												
								</div>
								<div class="col-2">
									<div class="mb-1">
										<input type="text" class="form-control" name="bed2_total7" value="<?php echo $bed2_total7 == 0 ? "" : $bed2_total7; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Layer 3</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" step="0.01" min=0  class="form-control" name="layer37" placeholder="" value="<?php echo $layer37 == 0 ? "" : $layer37; ?>">
										<div class="input-group-append">
											<span class="input-group-text">m</span>
										</div>
									</div>												
								</div>
								<div class="col">
									<div class="mb-1 text-right">
										<label></label>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">
										<select name="bed3_elem7" class="form-control">
											<option value="">Select...</option>
											<?php foreach($bulk_materials as $key => $val) { ?>
											<?php if($key == $bed3_elem7){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">												
										<input type="text" class="form-control" name="bed3_mat7" placeholder="" value="Arid (sand and gravel)">
									</div>												
								</div>
								<div class="col-2">
									<div class="mb-1">
										<input type="text" class="form-control" name="bed3_total7" value="<?php echo $bed3_total7 == 0 ? "" : $bed3_total7; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Layer 4</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" step="0.01" min=0  class="form-control" name="layer47" placeholder="" value="<?php echo $layer47 == 0 ? "" : $layer47; ?>">
										<div class="input-group-append">
											<span class="input-group-text">m</span>
										</div>
									</div>												
								</div>
								<div class="col">
									<div class="mb-1 text-right">
										<label></label>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">
										<select name="bed4_elem7" class="form-control">
											<option value="">Select...</option>
											<?php foreach($bulk_materials as $key => $val) { ?>
											<?php if($key == $bed4_elem7){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">												
										<input type="text" class="form-control" name="bed4_mat7" placeholder="" value="Arid (sand and gravel)">
									</div>												
								</div>
								<div class="col-2">
									<div class="mb-1">
										<input type="text" class="form-control" name="bed4_total7" value="<?php echo $bed4_total7 == 0 ? "" : $bed4_total7; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Layer 5</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" step="0.01" min=0  class="form-control" name="layer57" placeholder="" value="<?php echo $layer57 == 0 ? "" : $layer57; ?>">
										<div class="input-group-append">
											<span class="input-group-text">m</span>
										</div>
									</div>												
								</div>
								<div class="col">
									<div class="mb-1 text-right">
										<label></label>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">
										<select name="bed5_elem7" class="form-control">
											<option value="">Select...</option>
											<?php foreach($bulk_materials as $key => $val) { ?>
											<?php if($key == $bed5_elem7){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">												
										<input type="text" class="form-control" name="bed5_mat7" placeholder="" value="Arid (sand and gravel)">
									</div>												
								</div>
								<div class="col-2">
									<div class="mb-1">
										<input type="text" class="form-control" name="bed5_total7" value="<?php echo $bed5_total7 == 0 ? "" : $bed5_total7; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Perimetral stone Width</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" step="0.01" min=0  class="form-control" name="stone_width7" placeholder="" value="<?php echo $stone_width7 == 0 ? "" : $stone_width7; ?>">
										<div class="input-group-append">
											<span class="input-group-text">m</span>
										</div>
									</div>												
								</div>
								<div class="col">
									<div class="mb-1 text-right">
										<label>Perimetral stone</label>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">
										<select name="stone_elem7" class="form-control">
											<option value="">Select...</option>
											<?php foreach($rocks_stones as $key => $val) { ?>
											<?php if($key == $stone_elem7){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">												
										<input type="text" class="form-control" name="stone_mat7" placeholder="" value="Arid (sand and gravel)">
									</div>												
								</div>
								<div class="col-2">
									<div class="mb-1">
										<input type="text" class="form-control" name="stone_total7" value="<?php echo $stone_total7 == 0 ? "" : $stone_total7; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Perimetral stone Height</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" step="0.01" min=0  class="form-control" name="stone_height7" placeholder="" value="<?php echo $stone_height7 == 0 ? "" : $stone_height7; ?>">
										<div class="input-group-append">
											<span class="input-group-text">m</span>
										</div>
									</div>												
								</div>
								<div class="col">
									<div class="mb-1 text-right">
										<label>Vegetation matter</label>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">
										<input type="text" class="form-control" name="vege_matter_elem7" placeholder="" value="<?php echo $vege_matter_elem7 == 0 ? "" : $vege_matter_elem7; ?>">
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">												
										<input type="text" class="form-control" name="vege_matter_mat7" placeholder="" value="<?php echo $vege_matter_mat7 == 0 ? "" : $vege_matter_mat7; ?>">
									</div>												
								</div>
								<div class="col-2">
									<div class="mb-1">
										<input type="text" class="form-control" name="vege_matter_total7" value="<?php echo $vege_matter_total7 == 0 ? "" : $vege_matter_total7; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Bottom area</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" step="0.01" min=0  class="form-control" name="btm_area7" placeholder="" value="<?php echo $btm_area7 == 0 ? "" : $btm_area7; ?>">
										<div class="input-group-append">
											<span class="input-group-text">m2</span>
										</div>
									</div>												
								</div>
								<div class="col"></div>
								<div class="col-8"></div>
							</div>									
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Top area</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" step="0.01" min=0  class="form-control" name="top_area7" placeholder="" value="<?php echo $top_area7 == 0 ? "" : $top_area7; ?>">
										<div class="input-group-append">
											<span class="input-group-text">m2</span>
										</div>
									</div>												
								</div>
								<div class="col"></div>
								<div class="col-8"></div>
							</div>									
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Nº of beds</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" min=0  class="form-control" name="beds_no7" placeholder="" value="<?php echo $beds_no7 == 0 ? "" : $beds_no7; ?>">
										<div class="input-group-append">
											<span class="input-group-text">u</span>
										</div>
									</div>												
								</div>
								<div class="col"></div>
								<div class="col-1 offset-5 text-right">
									<label>Tones CO2</label>										
								</div>
								<div class="col-2">
									<div class="form-group">												
										<input type="text" class="form-control" name="tonesCO27" value="<?php echo $tonesCO27 == 0 ? "" : $tonesCO27; ?>" readonly>
									</div>
								</div>
							</div>			
							<label class="mt-2"><b>Wetland (bed 3) slope 45°</b></label>
							<div class="row">
								<div class="col-3 text-center">
									<label>Dimensions</label>
								</div>
								<div class="col-4 text-center">
									<label>Elements</label>
								</div>
								<div class="col-3 text-center">
									<label>Material</label>
								</div>
								<div class="col-2 text-center">
									<label>Subtotal (t CO2)</label>
								</div>
							</div>									
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Length</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" step="0.01" min=0  class="form-control" name="length8" placeholder="" value="<?php echo $length8 == 0 ? "" : $length8; ?>">
										<div class="input-group-append">
											<span class="input-group-text">m</span>
										</div>
									</div>												
								</div>
								<div class="col">
									<div class="mb-1 text-right">
										<label>Geotextil (Kg/m2)</label>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">
										<select name="geotextil_elem8" class="form-control">
											<option value="">Select...</option>
											<?php foreach($liners as $key => $val) { ?>
											<?php if($key == $geotextil_elem8){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">												
										<select name="geotextil_mat8" class="form-control">
											<option value="">Select...</option>
											<?php foreach($polimers as $key => $val) { ?>
											<?php if($key == $geotextil_mat8){?>
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
										<input type="text" class="form-control" name="geotextil_total8" value="<?php echo $geotextil_total8 == 0 ? "" : $geotextil_total8; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Width</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" step="0.01" min=0  class="form-control" name="width8" placeholder="" value="<?php echo $width8 == 0 ? "" : $width8; ?>">
										<div class="input-group-append">
											<span class="input-group-text">m</span>
										</div>
									</div>												
								</div>
								<div class="col">
									<div class="mb-1 text-right">
										<label>Liner (Kg/m2)</label>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">
										<select name="liner_elem8" class="form-control">
											<option value="">Select...</option>
											<?php foreach($liners1 as $key => $val) { ?>
											<?php if($key == $liner_elem8){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>											
										</select>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">												
										<select name="liner_mat8" class="form-control">
											<option value="">Select...</option>
											<?php foreach($polimers1 as $key => $val) { ?>
											<?php if($key == $liner_mat8){?>
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
										<input type="text" class="form-control" name="liner_total8" value="<?php echo $liner_total8 == 0 ? "" : $liner_total8; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Total Deep</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" step="0.01" min=0  class="form-control" name="deep8" placeholder="" value="<?php echo $deep8 == 0 ? "" : $deep8; ?>">
										<div class="input-group-append">
											<span class="input-group-text">m</span>
										</div>
									</div>												
								</div>
								<div class="col">
									<div class="mb-1 text-right">
										<label>Leak detection liner (Kg/m2)</label>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">
										<select name="leak_liner_elem8" class="form-control">
											<option value="">Select...</option>
											<?php foreach($liners1 as $key => $val) { ?>
											<?php if($key == $leak_liner_elem8){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">												
										<select name="leak_liner_mat8" class="form-control">
											<option value="">Select...</option>
											<?php foreach($polimers2 as $key => $val) { ?>
											<?php if($key == $leak_liner_mat8){?>
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
										<input type="text" class="form-control" name="leak_liner_total8" value="<?php echo $leak_liner_total8 == 0 ? "" : $leak_liner_total8; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Layer 1</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" min=0 step="0.01" class="form-control" name="layer18" placeholder="" value="<?php echo $layer18 == 0 ? "" : $layer18; ?>">
										<div class="input-group-append">
											<span class="input-group-text">m</span>
										</div>
									</div>												
								</div>
								<div class="col">
									<div class="mb-1 text-right">
										<label>Bed filler (Kg/m2)</label>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">
										<select name="bed1_elem8" class="form-control">
											<option value="">Select...</option>
											<?php foreach($bulk_materials as $key => $val) { ?>
											<?php if($key == $bed1_elem8){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">												
										<input type="text" class="form-control" name="bed1_mat8" placeholder="" value="Arid (sand and gravel)">
									</div>												
								</div>
								<div class="col-2">
									<div class="mb-1">
										<input type="text" class="form-control" name="bed1_total8" value="<?php echo $bed1_total8 == 0 ? "" : $bed1_total8; ?>"  readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Layer 2</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" min=0 step="0.01" class="form-control" name="layer28" placeholder="" value="<?php echo $layer28 == 0 ? "" : $layer28; ?>">
										<div class="input-group-append">
											<span class="input-group-text">m</span>
										</div>
									</div>												
								</div>
								<div class="col">
									<div class="mb-1 text-right">
										<label></label>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">
										<select name="bed2_elem8" class="form-control">
											<option value="">Select...</option>
											<?php foreach($bulk_materials as $key => $val) { ?>
											<?php if($key == $bed2_elem8){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">												
										<input type="text" class="form-control" name="bed2_mat8" placeholder="" value="Arid (sand and gravel)">
									</div>												
								</div>
								<div class="col-2">
									<div class="mb-1">
										<input type="text" class="form-control" name="bed2_total8" value="<?php echo $bed2_total8 == 0 ? "" : $bed2_total8; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Layer 3</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" min=0 step="0.01" class="form-control" name="layer38" placeholder="" value="<?php echo $layer38 == 0 ? "" : $layer38; ?>">
										<div class="input-group-append">
											<span class="input-group-text">m</span>
										</div>
									</div>												
								</div>
								<div class="col">
									<div class="mb-1 text-right">
										<label></label>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">
										<select name="bed3_elem8" class="form-control">
											<option value="">Select...</option>
											<?php foreach($bulk_materials as $key => $val) { ?>
											<?php if($key == $bed3_elem8){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">												
										<input type="text" class="form-control" name="bed3_mat8" placeholder="" value="Arid (sand and gravel)">
									</div>												
								</div>
								<div class="col-2">
									<div class="mb-1">
										<input type="text" class="form-control" name="bed3_total8" value="<?php echo $bed3_total8 == 0 ? "" : $bed3_total8; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Layer 4</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" min=0 step="0.01" class="form-control" name="layer48" placeholder="" value="<?php echo $layer48 == 0 ? "" : $layer48; ?>">
										<div class="input-group-append">
											<span class="input-group-text">m</span>
										</div>
									</div>												
								</div>
								<div class="col">
									<div class="mb-1 text-right">
										<label></label>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">
										<select name="bed4_elem8" class="form-control">
											<option value="">Select...</option>
											<?php foreach($bulk_materials as $key => $val) { ?>
											<?php if($key == $bed4_elem8){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">												
										<input type="text" class="form-control" name="bed4_mat8" placeholder="" value="Arid (sand and gravel)">
									</div>												
								</div>
								<div class="col-2">
									<div class="mb-1">
										<input type="text" class="form-control" name="bed4_total8" value="<?php echo $bed4_total8 == 0 ? "" : $bed4_total8; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Layer 5</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" min=0 step="0.01" class="form-control" name="layer58" placeholder="" value="<?php echo $layer58 == 0 ? "" : $layer58; ?>">
										<div class="input-group-append">
											<span class="input-group-text">m</span>
										</div>
									</div>												
								</div>
								<div class="col">
									<div class="mb-1 text-right">
										<label></label>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">
										<select name="bed5_elem8" class="form-control">
											<option value="">Select...</option>
											<?php foreach($bulk_materials as $key => $val) { ?>
											<?php if($key == $bed5_elem8){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">												
										<input type="text" class="form-control" name="bed5_mat8" placeholder="" value="Arid (sand and gravel)">
									</div>												
								</div>
								<div class="col-2">
									<div class="mb-1">
										<input type="text" class="form-control" name="bed5_total8" value="<?php echo $bed5_total8 == 0 ? "" : $bed5_total8; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Perimetral stone Width</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" min=0 step="0.01" class="form-control" name="stone_width8" placeholder="" value="<?php echo $stone_width8 == 0 ? "" : $stone_width8; ?>">
										<div class="input-group-append">
											<span class="input-group-text">m</span>
										</div>
									</div>												
								</div>
								<div class="col">
									<div class="mb-1 text-right">
										<label>Perimetral stone</label>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">
										<select name="stone_elem8" class="form-control">
											<option value="">Select...</option>
											<?php foreach($rocks_stones as $key => $val) { ?>
											<?php if($key == $stone_elem8){?>
											<option value="<?php echo $key; ?>" selected><?php echo $val; ?></option>
											<?php }else{ ?>
											<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
											<?php } ?>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">												
										<input type="text" class="form-control" name="stone_mat8" placeholder="" value="Arid (sand and gravel)">
									</div>												
								</div>
								<div class="col-2">
									<div class="mb-1">
										<input type="text" class="form-control" name="stone_total8" value="<?php echo $stone_total8 == 0 ? "" : $stone_total8; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Perimetral stone Height</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" min=0 step="0.01"  class="form-control" name="stone_height8" placeholder="" value="<?php echo $stone_height8 == 0 ? "" : $stone_height8; ?>">
										<div class="input-group-append">
											<span class="input-group-text">m</span>
										</div>
									</div>												
								</div>
								<div class="col">
									<div class="mb-1 text-right">
										<label>Vegetation matter</label>
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">
										<input type="text" class="form-control" name="vege_matter_elem8" placeholder="" value="<?php echo $vege_matter_elem8 == 0 ? "" : $vege_matter_elem8; ?>">
									</div>
								</div>
								<div class="col-3">
									<div class="mb-1">												
										<input type="text" class="form-control" name="vege_matter_mat8" placeholder="" value="<?php echo $vege_matter_mat8 == 0 ? "" : $vege_matter_mat8; ?>">
									</div>												
								</div>
								<div class="col-2">
									<div class="mb-1">
										<input type="text" class="form-control" name="vege_matter_total8" value="<?php echo $vege_matter_total8 == 0 ? "" : $vege_matter_total8; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Bottom area</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" min=0 step="0.01" class="form-control" name="btm_area8" placeholder="" value="<?php echo $btm_area8 == 0 ? "" : $btm_area8; ?>">
										<div class="input-group-append">
											<span class="input-group-text">m2</span>
										</div>
									</div>												
								</div>
								<div class="col"></div>
								<div class="col-8"></div>
							</div>									
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Top area</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" min=0 step="0.01" class="form-control" name="top_area8" placeholder="" value="<?php echo $top_area8 == 0 ? "" : $top_area8; ?>">
										<div class="input-group-append">
											<span class="input-group-text">m2</span>
										</div>
									</div>												
								</div>
								<div class="col"></div>
								<div class="col-8"></div>
							</div>									
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Nº of beds</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" min=0  class="form-control" name="beds_no8" placeholder="" value="<?php echo $beds_no8 == 0 ? "" : $beds_no8; ?>">
										<div class="input-group-append">
											<span class="input-group-text">u</span>
										</div>
									</div>												
								</div>
								<div class="col"></div>
								<div class="col-5 text-center">
									
								</div>
								<div class="col-1 text-right">
									<label>Tones CO2</label>										
								</div>
								<div class="col-2">
									<div class="form-group">												
										<input type="text" class="form-control" name="tonesCO28" value="<?php echo $tonesCO28 == 0 ? "" : $tonesCO28; ?>" readonly>
									</div>
								</div>
							</div>
						</div>	
						<!-- 7. Pipes -->
						<label class="w-100 mt-3"><span id="pipes_toggle" class="ua-icon-tree-minus mr-2"></span> <b style="font-size:18px;"> 7. Pipes</b></label>
						<div class="col-xl-12" id="pipes_div">
							<div class="form-group">
								<div class="text-muted">
									Please, provide the lenght of each type of pipe to be used and also the number the manholes. You have to choose the kind of pipe or manhole to be installed and its construction material.
								</div>
							</div>
							<div class="row">
								<div class="col-3 text-center">
									<label>Dimensions</label>
								</div>
								<div class="col-5 text-center">
									<label>Elements</label>
								</div>
								<div class="col-2 text-center">
									<label>Material</label>
								</div>
								<div class="col-2 text-center">
									<label>Subtotal (t CO2)</label>
								</div>
							</div>									
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Length 1</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" min=0 step="0.01" class="form-control" name="length19" placeholder="" value="<?php echo $length19 == 0 ? "" : $length19; ?>">
										<div class="input-group-append">
											<span class="input-group-text">m</span>
										</div>
									</div>												
								</div>
								<div class="col">
									<div class="mb-1 text-right">
										<label>Pipe1 (Kg/m)</label>
									</div>
								</div>
								<div class="col-4">
									<div class="mb-1">
										<select name="pipe1_elem9" class="form-control">
											<option value="">Select...</option>
											<?php foreach($pipes as $key => $val) { ?>
											<?php if($key == $pipe1_elem9){?>
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
										<select name="pipe1_mat9" class="form-control">
											<option value="">Select...</option>
											<?php foreach($pipes1 as $key => $val) { ?>
											<?php if($key == $pipe1_mat9){?>
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
										<input type="text" class="form-control" name="pipe1_total9" value="<?php echo $pipe1_total9 == 0 ? "" : $pipe1_total9; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Length 2</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" min=0 step="0.01" class="form-control" name="length29" placeholder="" value="<?php echo $length29 == 0 ? "" : $length29; ?>">
										<div class="input-group-append">
											<span class="input-group-text">m</span>
										</div>
									</div>												
								</div>
								<div class="col">
									<div class="mb-1 text-right">
										<label>Pipe2 (Kg/m)</label>
									</div>
								</div>
								<div class="col-4">
									<div class="mb-1">
										<select name="pipe2_elem9" class="form-control">
											<option value="">Select...</option>
											<?php foreach($pipes as $key => $val) { ?>
											<?php if($key == $pipe2_elem9){?>
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
										<select name="pipe2_mat9" class="form-control">
											<option value="">Select...</option>
											<?php foreach($pipes1 as $key => $val) { ?>
											<?php if($key == $pipe2_mat9){?>
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
										<input type="text" class="form-control" name="pipe2_total9" value="<?php echo $pipe2_total9 == 0 ? "" : $pipe2_total9; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Length 3</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" min=0 step="0.01" class="form-control" name="length39" placeholder="" value="<?php echo $length39 == 0 ? "" : $length39; ?>">
										<div class="input-group-append">
											<span class="input-group-text">m</span>
										</div>
									</div>												
								</div>
								<div class="col">
									<div class="mb-1 text-right">
										<label>Pipe3 (Kg/m)</label>
									</div>
								</div>
								<div class="col-4">
									<div class="mb-1">
										<select name="pipe3_elem9" class="form-control">
											<option value="">Select...</option>
											<?php foreach($pipes as $key => $val) { ?>
											<?php if($key == $pipe3_elem9){?>
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
										<select name="pipe3_mat9" class="form-control">
											<option value="">Select...</option>
											<?php foreach($pipes1 as $key => $val) { ?>
											<?php if($key == $pipe3_mat9){?>
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
										<input type="text" class="form-control" name="pipe3_total9" value="<?php echo $pipe3_total9 == 0 ? "" : $pipe3_total9; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Number of Manholes</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" min=0  class="form-control" name="manholes_num9" placeholder="" value="<?php echo $manholes_num9 == 0 ? "" : $manholes_num9; ?>">
										<div class="input-group-append">
											<span class="input-group-text">u</span>
										</div>
									</div>												
								</div>
								<div class="col">
									<div class="mb-1 text-right">
										<label>Manhole (Kg)</label>
									</div>
								</div>
								<div class="col-4">
									<div class="mb-1">
										<select name="manhole_elem9" class="form-control">
											<option value="">Select...</option>
											<?php foreach($manholes as $key => $val) { ?>
											<?php if($key == $manhole_elem9){?>
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
										<select name="manhole_mat9" class="form-control">
											<option value="">Select...</option>
											<?php foreach($pipes1 as $key => $val) { ?>
											<?php if($key == $manhole_mat9){?>
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
										<input type="text" class="form-control" name="manhole_total9" value="<?php echo $manhole_total9 == 0 ? "" : $manhole_total9; ?>" readonly>
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
										<input type="text" class="form-control" name="tonesCO29" value="<?php echo $tonesCO29 == 0 ? "" : $tonesCO29; ?>" readonly>
									</div>
								</div>
							</div>									
						</div>
						<!-- 8. Pumps -->
						<label class="w-100 mt-3"><span id="pumps_toggle" class="ua-icon-tree-minus mr-2"></span> <b style="font-size:18px;"> 8. Pumps</b></label>
						<div class="col-xl-12" id="pumps_div">
							<div class="form-group">
								<div class="text-muted">
									Please, provide the number of pumps to be used in the project. If you are not using pumps leave it in blank.
								</div>
							</div>
							<div class="row">
								<div class="col-3 text-center">
									<label>Number of pumps</label>
								</div>
								<div class="col-5 text-center">
									<label>Elements</label>
								</div>
								<div class="col-2 text-center">
									<label>Material</label>
								</div>
								<div class="col-2 text-center">
									<label>Subtotal (t CO2)</label>
								</div>
							</div>									
							<div class="row">
								<div class="col">
									<div class="mb-1 text-right">
										<label>Air pump</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-1">
										<input type="number" min=0 step="0.01" class="form-control" name="airpump_num10" placeholder="" value="<?php echo $airpump_num10 == 0 ? "" : $airpump_num10; ?>">
										<div class="input-group-append">
											<span class="input-group-text">u</span>
										</div>
									</div>												
								</div>
								<div class="col">
									<div class="mb-1 text-right">
										<label>Air pump (Kg)</label>
									</div>
								</div>
								<div class="col-4">
									<div class="mb-1">
										<input type="text" class="form-control" name="airpump_elem10" placeholder="" value="Air pump Secoh SLL-50 (70 L air/min; 60 W/h)">
									</div>
								</div>
								<div class="col-2">
									<div class="mb-1">
										<input type="text" class="form-control" name="airpump_mat10" placeholder="" value="Foundry">
									</div>												
								</div>
								<div class="col-2">
									<div class="mb-1">
										<input type="text" class="form-control" name="airpump_total10" value="<?php echo $airpump_total10 == 0 ? "" : $airpump_total10; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col">
									<div class="mb-2 text-right">
										<label>Water pump</label>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-2">
										<input type="number" min=0 step="0.01" class="form-control" name="waterpump_num10" placeholder="" value="<?php echo $waterpump_num10 == 0 ? "" : $waterpump_num10; ?>">
										<div class="input-group-append">
											<span class="input-group-text">u</span>
										</div>
									</div>												
								</div>
								<div class="col">
									<div class="mb-2 text-right">
										<label>Water pump (Kg)</label>
									</div>
								</div>
								<div class="col-4">
									<div class="mb-2">
										<input type="text" class="form-control" name="waterpump_elem10" placeholder="" value="Grundfos AP12.40.04">
									</div>
								</div>
								<div class="col-2">
									<div class="mb-2">
										<input type="text" class="form-control" name="waterpump_mat10" placeholder="" value="Stainless steel">
									</div>												
								</div>
								<div class="col-2">
									<div class="mb-2">
										<input type="text" class="form-control" name="waterpump_total10" value="<?php echo $waterpump_total10 == 0 ? "" : $waterpump_total10; ?>" readonly>
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
										<input type="text" class="form-control" name="tonesCO210" value="<?php echo $tonesCO210 == 0 ? "" : $tonesCO210; ?>" readonly>
									</div>
								</div>
							</div>									
						</div>
						<!-- 9. Electrical -->
						<label class="w-100 mt-3"><span id="electrical_toggle" class="ua-icon-tree-minus mr-2"></span> <b style="font-size:18px;"> 9. Electrical</b></label>
						<div class="col-xl-12" id="electrical_div">
							<div class="form-group">
								<div class="text-muted">
									Please, provide the number of electrical elements to be used in your project. You have to choose the kind of the element material to be installed and its construction material.
								</div>
							</div>
							<div class="row">
								<div class="col-3 text-center">
									<label>Number of elemets</label>
								</div>
								<div class="col-6 text-center">
									<label>Elements</label>
								</div>
								<div class="col-2 text-center">
									<label>Material</label>
								</div>
								<div class="col-1 text-center">
									<label>Subtotal (t CO2)</label>
								</div>
							</div>									
							<div class="row">
								<div class="col-2">
									<div class="mb-1 text-right">
										<label>Electrical panels</label>
									</div>
								</div>
								<div class="col-1">
									<div class="input-group mb-1">
										<input type="number" min=0 class="form-control" name="panels_num11" placeholder="" value="<?php echo $panels_num11 == 0 ? "" : $panels_num11; ?>">
										<div class="input-group-append">
											<span class="input-group-text">u</span>
										</div>
									</div>												
								</div>
								<div class="col-2">
									<div class="mb-1 text-right">
										<label>Electrical panels (Kg)</label>
									</div>
								</div>
								<div class="col-4">
									<div class="mb-1">
										<input type="text" class="form-control" name="panels_elem11" placeholder="" value="Electrical panel (PVC)">
									</div>
								</div>
								<div class="col-2">
									<div class="mb-1">
										<input type="text" class="form-control" name="panels_mat11" placeholder="" value="PVC">
									</div>												
								</div>
								<div class="col-1">
									<div class="mb-1">
										<input type="text" class="form-control" name="panels_total11" value="<?php echo $panels_total11 == 0 ? "" : $panels_total11; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col-2">
									<div class="mb-1 text-right">
										<label>Switches and sockets</label>
									</div>
								</div>
								<div class="col-1">
									<div class="input-group mb-1">
										<input type="number" min=0  class="form-control" name="switches_num11" placeholder="" value="<?php echo $switches_num11 == 0 ? "" : $switches_num11; ?>">
										<div class="input-group-append">
											<span class="input-group-text">u</span>
										</div>
									</div>												
								</div>
								<div class="col-2">
									<div class="mb-1 text-right">
										<label>Switches and sockets (Kg)</label>
									</div>
								</div>
								<div class="col-4">
									<div class="mb-1">
										<input type="text" class="form-control" name="switches_elem11" placeholder="" value="Switches and sockets (~PVC)">
									</div>
								</div>
								<div class="col-2">
									<div class="mb-1">
										<input type="text" class="form-control" name="switches_mat11" placeholder="" value="(~PVC)">
									</div>												
								</div>
								<div class="col-1">
									<div class="mb-1">
										<input type="text" class="form-control" name="switches_total11" value="<?php echo $switches_total11 == 0 ? "" : $switches_total11; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col-2">
									<div class="mb-1 text-right">
										<label>Magneto-thermal switch (MCB)</label>
									</div>
								</div>
								<div class="col-1">
									<div class="input-group mb-1">
										<input type="number" min=0  class="form-control" name="mcb_num11" placeholder="" value="<?php echo $mcb_num11 == 0 ? "" : $mcb_num11; ?>">
										<div class="input-group-append">
											<span class="input-group-text">u</span>
										</div>
									</div>												
								</div>
								<div class="col-2">
									<div class="mb-1 text-right">
										<label>Magneto-thermal switch (MCB) (u)</label>
									</div>
								</div>
								<div class="col-4">
									<div class="mb-1">
										<input type="text" class="form-control" name="mcb_elem11" placeholder="" value="Magneto-thermal switch (MCB) (80% steel, 20% PVC)">
									</div>
								</div>
								<div class="col-2">
									<div class="mb-1">
										<input type="text" class="form-control" name="mcb_mat11" placeholder="" value="(80% steel, 20% PVC)">
									</div>												
								</div>
								<div class="col-1">
									<div class="mb-1">
										<input type="text" class="form-control" name="mcb_total11" value="<?php echo $mcb_total11 == 0 ? "" : $mcb_total11; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col-2">
									<div class="mb-1 text-right">
										<label>Cables 1</label>
									</div>
								</div>
								<div class="col-1">
									<div class="input-group mb-1">
										<input type="number" min=0 step="0.01" class="form-control" name="cables1_num11" placeholder="" value="<?php echo $cables1_num11 == 0 ? "" : $cables1_num11; ?>">
										<div class="input-group-append">
											<span class="input-group-text">m</span>
										</div>
									</div>												
								</div>
								<div class="col-2">
									<div class="mb-1 text-right">
										<label>Cables 1 (Kg/m)</label>
									</div>
								</div>
								<div class="col-4">
									<div class="mb-1">
										<select name="cables1_elem11" class="form-control">
											<option value="">Select...</option>
											<?php foreach($cables as $key => $val) { ?>
											<?php if($key == $cables1_elem11){?>
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
										<input type="text" class="form-control" name="cables1_mat11" placeholder="" value="Cooper + PVC">
									</div>												
								</div>
								<div class="col-1">
									<div class="mb-1">
										<input type="text" class="form-control" name="cables1_total11" value="<?php echo $cables1_total11 == 0 ? "" : $cables1_total11; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col-2">
									<div class="mb-1 text-right">
										<label>Cables 2</label>
									</div>
								</div>
								<div class="col-1">
									<div class="input-group mb-1">
										<input type="number" min=0 step="0.01" class="form-control" name="cables2_num11" placeholder="" value="<?php echo $cables2_num11 == 0 ? "" : $cables2_num11; ?>">
										<div class="input-group-append">
											<span class="input-group-text">m</span>
										</div>
									</div>												
								</div>
								<div class="col-2">
									<div class="mb-1 text-right">
										<label>Cables 2 (Kg/m)</label>
									</div>
								</div>
								<div class="col-4">
									<div class="mb-1">
										<select name="cables2_elem11" class="form-control">
											<option value="">Select...</option>
											<?php foreach($cables as $key => $val) { ?>
											<?php if($key == $cables2_elem11){?>
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
										<input type="text" class="form-control" name="cables2_mat11" placeholder="" value="Cooper + PVC">
									</div>												
								</div>
								<div class="col-1">
									<div class="mb-1">
										<input type="text" class="form-control" name="cables2_total11" value="<?php echo $cables2_total11 == 0 ? "" : $cables2_total11; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col-2">
									<div class="mb-1 text-right">
										<label>Light bulbs 1</label>
									</div>
								</div>
								<div class="col-1">
									<div class="input-group mb-1">
										<input type="number" min=0  class="form-control" name="bulbs1_num11" placeholder="" value="<?php echo $bulbs1_num11 == 0 ? "" : $bulbs1_num11; ?>">
										<div class="input-group-append">
											<span class="input-group-text">u</span>
										</div>
									</div>												
								</div>
								<div class="col-2">
									<div class="mb-1 text-right">
										<label>Light bulbs 1 (u)</label>
									</div>
								</div>
								<div class="col-4">
									<div class="mb-1">
										<select name="bulbs1_elem11" class="form-control">
											<option value="">Select...</option>
											<?php foreach($lamps as $key => $val) { ?>
											<?php if($key == $bulbs1_elem11){?>
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
										<input type="text" class="form-control" name="bulbs1_mat11" placeholder="" value="Glass, steel, electronic,…">
									</div>												
								</div>
								<div class="col-1">
									<div class="mb-1">
										<input type="text" class="form-control" name="bulbs1_total11" value="<?php echo $bulbs1_total11 == 0 ? "" : $bulbs1_total11; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col-2">
									<div class="mb-1 text-right">
										<label>Light bulbs 2</label>
									</div>
								</div>
								<div class="col-1">
									<div class="input-group mb-1">
										<input type="number" min=0  class="form-control" name="bulbs2_num11" placeholder="" value="<?php echo $bulbs2_num11 == 0 ? "" : $bulbs2_num11; ?>">
										<div class="input-group-append">
											<span class="input-group-text">u</span>
										</div>
									</div>												
								</div>
								<div class="col-2">
									<div class="mb-1 text-right">
										<label>Light bulbs 2 (u)</label>
									</div>
								</div>
								<div class="col-4">
									<div class="mb-1">
										<select name="bulbs2_elem11" class="form-control">
											<option value="">Select...</option>
											<?php foreach($lamps as $key => $val) { ?>
											<?php if($key == $bulbs2_elem11){?>
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
										<input type="text" class="form-control" name="bulbs2_mat11" placeholder="" value="Glass, steel, electronic,…">
									</div>												
								</div>
								<div class="col-1">
									<div class="mb-1">
										<input type="text" class="form-control" name="bulbs2_total11" value="<?php echo $bulbs2_total11 == 0 ? "" : $bulbs2_total11; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col-2">
									<div class="mb-1 text-right">
										<label>Light bulbs 3</label>
									</div>
								</div>
								<div class="col-1">
									<div class="input-group mb-1">
										<input type="number" min=0  class="form-control" name="bulbs3_num11" placeholder="" value="<?php echo $bulbs3_num11 == 0 ? "" : $bulbs3_num11; ?>">
										<div class="input-group-append">
											<span class="input-group-text">u</span>
										</div>
									</div>												
								</div>
								<div class="col-2">
									<div class="mb-1 text-right">
										<label>Light bulbs 3 (u)</label>
									</div>
								</div>
								<div class="col-4">
									<div class="mb-1">
										<select name="bulbs3_elem11" class="form-control">
											<option value="">Select...</option>
											<?php foreach($lamps as $key => $val) { ?>
											<?php if($key == $bulbs3_elem11){?>
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
										<input type="text" class="form-control" name="bulbs3_mat11" placeholder="" value="Glass, steel, electronic,…">
									</div>												
								</div>
								<div class="col-1">
									<div class="mb-1">
										<input type="text" class="form-control" name="bulbs3_total11" value="<?php echo $bulbs3_total11 == 0 ? "" : $bulbs3_total11; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col-2">
									<div class="mb-1 text-right">
										<label>Spotlight 1</label>
									</div>
								</div>
								<div class="col-1">
									<div class="input-group mb-1">
										<input type="number" min=0  class="form-control" name="spotlight1_num11" placeholder="" value="<?php echo $spotlight1_num11 == 0 ? "" : $spotlight1_num11; ?>">
										<div class="input-group-append">
											<span class="input-group-text">u</span>
										</div>
									</div>												
								</div>
								<div class="col-2">
									<div class="mb-1 text-right">
										<label>Spotlight 1 (u)</label>
									</div>
								</div>
								<div class="col-4">
									<div class="mb-1">
										<select name="spotlight1_elem11" class="form-control">
											<option value="">Select...</option>
											<?php foreach($electrical_panels as $key => $val) { ?>
											<?php if($key == $spotlight1_elem11){?>
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
										<input type="text" class="form-control" name="spotlight1_mat11" placeholder="" value="Glass, steel, electronic,…">
									</div>												
								</div>
								<div class="col-1">
									<div class="mb-1">
										<input type="text" class="form-control" name="spotlight1_total11" value="<?php echo $spotlight1_total11 == 0 ? "" : $spotlight1_total11; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col-2">
									<div class="mb-1 text-right">
										<label>Spotlight 2</label>
									</div>
								</div>
								<div class="col-1">
									<div class="input-group mb-1">
										<input type="number" min=0  class="form-control" name="spotlight2_num11" placeholder="" value="<?php echo $spotlight2_num11 == 0 ? "" : $spotlight2_num11; ?>">
										<div class="input-group-append">
											<span class="input-group-text">u</span>
										</div>
									</div>												
								</div>
								<div class="col-2">
									<div class="mb-1 text-right">
										<label>Spotlight 2 (u)</label>
									</div>
								</div>
								<div class="col-4">
									<div class="mb-1">
										<select name="spotlight2_elem11" class="form-control">
											<option value="">Select...</option>
											<?php foreach($electrical_panels as $key => $val) { ?>
											<?php if($key == $spotlight2_elem11){?>
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
										<input type="text" class="form-control" name="spotlight2_mat11" placeholder="" value="Glass, steel, electronic,…">
									</div>												
								</div>
								<div class="col-1">
									<div class="mb-1">
										<input type="text" class="form-control" name="spotlight2_total11" value="<?php echo $spotlight2_total11 == 0 ? "" : $spotlight2_total11; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col-2">
									<div class="mb-1 text-right">
										<label>Streetlight 1</label>
									</div>
								</div>
								<div class="col-1">
									<div class="input-group mb-1">
										<input type="number" min=0  class="form-control" name="streetlight1_num11" placeholder="" value="<?php echo $streetlight1_num11 == 0 ? "" : $streetlight1_num11; ?>">
										<div class="input-group-append">
											<span class="input-group-text">u</span>
										</div>
									</div>												
								</div>
								<div class="col-2">
									<div class="mb-1 text-right">
										<label>Streetlight 1 (u)</label>
									</div>
								</div>
								<div class="col-4">
									<div class="mb-1">
										<select name="streetlight1_elem11" class="form-control">
											<option value="">Select...</option>
											<?php foreach($streetlights as $key => $val) { ?>
											<?php if($key == $streetlight1_elem11){?>
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
										<input type="text" class="form-control" name="streetlight1_mat11" placeholder="" value="Galvanizated steel">
									</div>												
								</div>
								<div class="col-1">
									<div class="mb-1">
										<input type="text" class="form-control" name="streetlight1_total11" value="<?php echo $streetlight1_total11 == 0 ? "" : $streetlight1_total11; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col-2">
									<div class="mb-2 text-right">
										<label>Streetlight 2</label>
									</div>
								</div>
								<div class="col-1">
									<div class="input-group mb-2">
										<input type="number" min=0  class="form-control" name="streetlight2_num11" placeholder="" value="<?php echo $streetlight2_num11 == 0 ? "" : $streetlight2_num11; ?>">
										<div class="input-group-append">
											<span class="input-group-text">u</span>
										</div>
									</div>												
								</div>
								<div class="col-2">
									<div class="mb-2 text-right">
										<label>Streetlight 2 (u)</label>
									</div>
								</div>
								<div class="col-4">
									<div class="mb-2">
										<select name="streetlight2_elem11" class="form-control">
											<option value="">Select...</option>
											<?php foreach($streetlights as $key => $val) { ?>
											<?php if($key == $streetlight2_elem11){?>
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
										<input type="text" class="form-control" name="streetlight2_mat11" placeholder="" value="Galvanizated steel">
									</div>												
								</div>
								<div class="col-1">
									<div class="mb-2">
										<input type="text" class="form-control" name="streetlight2_total11" value="<?php echo $streetlight2_total11 == 0 ? "" : $streetlight2_total11; ?>" readonly>
									</div>
								</div>
							</div>									
							<div class="row">
								<div class="col-9 text-center">
									
								</div>
								<div class="col-2 text-right">
									<label>Tones CO2</label>										
								</div>
								<div class="col-1">
									<div class="form-group">												
										<input type="text" class="form-control" name="tonesCO211" value="<?php echo $tonesCO211 == 0 ? "" : $tonesCO211; ?>" readonly>
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