

<?php if ($this->session->flashdata('config_error')) { 
	echo "<script> setTimeout(function(){alert('".$this->session->flashdata('config_error')."');},2000); </script>";
} ?>



<div class="page-content">

	<div class="container-fluid">
		<div class="page-content__header">
			<div>
				<h2 class="page-content__header-heading">Configuration</h2>
			</div>
		</div>
		<div class="main-container">
			
				<div class="row">
					<div class="col-lg-12">
						<div class="main-container__desc"><i><b>Configuration</b></i></div>

						<div class="row">
							<!-- 1. Construction -->
							<label class="w-100"><span id="parameters_toggle" class="ua-icon-tree-minus mr-2"></span> <b style="font-size:18px;"> 1. Construction phase </b></label>
							<div class="col-xl-12" id="parameters_div">
								<div class="form-group">
									<div class="text-muted">
										Please, provide...
									</div>
								</div>									
															
								<div class="row">
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Materials t CO2 Eq min: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="material_eq_min" placeholder="" value="<?=isset($all_config)? ($all_config['material_eq_min'] ? $all_config['material_eq_min']:""):"" ?>">
										</div>												
									</div>
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Materials t CO2 Eq max: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="material_eq_max" placeholder="" value="<?=isset($all_config)?  ($all_config['material_eq_max'] ? $all_config['material_eq_max']:""):"" ?>">
										</div>												
									</div>
								</div>

								<div class="row">
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Materials t CO2-C Eq min : </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="material_ceq_min" placeholder="" value="<?=isset($all_config)? ($all_config['material_ceq_min'] ? $all_config['material_ceq_min']:""):"" ?>">
										</div>												
									</div>
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Materials t CO2-C Eq max: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="material_ceq_max" placeholder="" value="<?=isset($all_config)? ($all_config['material_ceq_max'] ? $all_config['material_ceq_max']:""):"" ?>">
										</div>												
									</div>
								</div>

								<div class="row">
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Materials % Proportion min : </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="meterial_pro_min" placeholder="" value="<?=isset($all_config)? ($all_config['meterial_pro_min'] ? $all_config['meterial_pro_min']:""):"" ?>">
										</div>												
									</div>
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Materials % Proportion max: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="meterial_pro_max" placeholder="" value="<?=isset($all_config)? ($all_config['meterial_pro_max'] ? $all_config['meterial_pro_max']:""):"" ?>">
										</div>												
									</div>
								</div>
								<div class="row">
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Energy t CO2 Eq min: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="energy_eq_min" placeholder="" value="<?=isset($all_config)? ($all_config['energy_eq_min'] ? $all_config['energy_eq_min']:""):"" ?>">
										</div>												
									</div>
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Energy t CO2 Eq max: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="energy_eq_max" placeholder="" value="<?=isset($all_config)? ($all_config['energy_eq_max'] ? $all_config['energy_eq_max']:""):"" ?>">
										</div>												
									</div>
								</div>	
								<div class="row">
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Energy t CO2-C Eq min: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="energy_ceq_min" placeholder="" value="<?=isset($all_config)? ($all_config['energy_ceq_min'] ? $all_config['energy_ceq_min']:""):"" ?>">
										</div>												
									</div>
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Energy t CO2-C Eq max: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="energy_ceq_max" placeholder="" value="<?=isset($all_config)? ($all_config['energy_ceq_max'] ? $all_config['energy_ceq_max']:""):"" ?>">
										</div>												
									</div>
								</div>										
								<div class="row">
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Energy % Proportion min: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="energy_pro_min" placeholder="" value="<?=isset($all_config)? ($all_config['energy_pro_min'] ? $all_config['energy_pro_min']:""):"" ?>">
										</div>												
									</div>
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Energy % Proportion max: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="energy_pro_max" placeholder="" value="<?=isset($all_config)? ($all_config['energy_pro_max'] ? $all_config['energy_pro_max']:""):"" ?>">
										</div>												
									</div>
								</div>	
								<div class="row">
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Subtotal t CO2 Eq min: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="subtotal_eq_min" placeholder="" value="<?=isset($all_config)? ($all_config['subtotal_eq_min'] ? $all_config['subtotal_eq_min']:""):"" ?>">
										</div>												
									</div>
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Subtotal t CO2 Eq max: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="subtotal_eq_max" placeholder="" value="<?=isset($all_config)? ($all_config['subtotal_eq_max'] ? $all_config['subtotal_eq_max']:""):"" ?>">
										</div>												
									</div>
								</div>	
								<div class="row">
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Subtotal t CO2-C Eq min: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="subtotal_ceq_min" placeholder="" value="<?=isset($all_config)? ($all_config['subtotal_ceq_min'] ? $all_config['subtotal_ceq_min']:""):"" ?>">
										</div>												
									</div>
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Subtotal t CO2-C Eq max: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="subtotal_ceq_max" placeholder="" value="<?=isset($all_config)? ($all_config['subtotal_ceq_max'] ? $all_config['subtotal_ceq_max']:""):"" ?>">
										</div>												
									</div>
								</div>	
								<div class="row">
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Subtotal % Proportion min : </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="subtotal_pro_min" placeholder="" value="<?=isset($all_config)? ($all_config['subtotal_pro_min'] ? $all_config['subtotal_pro_min']:""):"" ?>">
										</div>												
									</div>
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Subtotal % Proportion max: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="subtotal_pro_max" placeholder="" value="<?=isset($all_config)? ($all_config['subtotal_pro_max'] ? $all_config['subtotal_pro_max']:""):"" ?>">
										</div>												
									</div>
								</div>	
								
							</div>
							<!-- 2. Operation -->
							<label class="w-100 mt-3"><span id="wetland_toggle" class="ua-icon-tree-minus mr-2"></span> <b style="font-size:18px;"> 2. Operation Phase. </b></label>
							<div class="col-xl-12" id="wetland_div">
								<div class="form-group">
									<div class="text-muted">
										Please, provide ...
									</div>
								</div>
																
								<div class="row">
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Wetland t CO2 Eq min: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="wetland_eq_min" placeholder="" value="<?=isset($all_config)? ($all_config['wetland_eq_min'] ? $all_config['wetland_eq_min']:""):"" ?>">
										</div>												
									</div>
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Wetland t CO2 Eq max: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="wetland_eq_max" placeholder="" value="<?=isset($all_config)? ($all_config['wetland_eq_max'] ? $all_config['wetland_eq_max']:"" ):"" ?>">
										</div>												
									</div>
								</div>	
								<div class="row">
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Wetland t CO2-C Eq min: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="wetland_ceq_min" placeholder="" value="<?=isset($all_config)? ($all_config['wetland_ceq_min'] ? $all_config['wetland_ceq_min']:""):"" ?>">
										</div>												
									</div>
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Wetland t CO2-C Eq max: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="wetland_ceq_max" placeholder="" value="<?=isset($all_config)? ($all_config['wetland_ceq_max'] ? $all_config['wetland_ceq_max']:""):"" ?>">
										</div>												
									</div>
								</div>	
								<div class="row">
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Wetland % Proportion min: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="wetland_pro_min" placeholder="" value="<?=isset($all_config)? ($all_config['wetland_pro_min'] ? $all_config['wetland_pro_min']:""):"" ?>">
										</div>												
									</div>
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Wetland % Proportion max: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="wetland_pro_max" placeholder="" value="<?=isset($all_config)? ($all_config['wetland_pro_max'] ? $all_config['wetland_pro_max']:""):"" ?>">
										</div>												
									</div>
								</div>									
								<div class="row">
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Energy t CO2 Eq min: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="op_energy_eq_min" placeholder="" value="<?=isset($all_config)? ($all_config['op_energy_eq_min'] ? $all_config['op_energy_eq_min']:""):"" ?>">
										</div>												
									</div>
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Energy t CO2 Eq max: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="op_energy_eq_max" placeholder="" value="<?=isset($all_config)? ($all_config['op_energy_eq_max'] ? $all_config['op_energy_eq_max']:""):"" ?>">
										</div>												
									</div>
								</div>	
								<div class="row">
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Energy t CO2-C Eq min: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="op_energy_ceq_min" placeholder="" value="<?=isset($all_config)? ($all_config['op_energy_ceq_min'] ? $all_config['op_energy_ceq_min']:""):"" ?>">
										</div>												
									</div>
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Energy t CO2-C Eq max: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="op_energy_ceq_max" placeholder="" value="<?=isset($all_config)? ($all_config['op_energy_ceq_max'] ? $all_config['op_energy_ceq_max']:""):"" ?>">
										</div>												
									</div>
								</div>	
								<div class="row">
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Energy % Proportion min: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="op_energy_pro_min" placeholder="" value="<?=isset($all_config)? ($all_config['op_energy_pro_min'] ? $all_config['op_energy_pro_min']:""):"" ?>">
										</div>												
									</div>
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Energy % Proportion max: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="op_energy_pro_max" placeholder="" value="<?=isset($all_config)? ($all_config['op_energy_pro_max'] ? $all_config['op_energy_pro_max']:""):"" ?>">
										</div>												
									</div>
								</div>	
								<div class="row">
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Maintenance t CO2 Eq min: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="op_maintenance_eq_min" placeholder="" value="<?=isset($all_config)? ($all_config['op_maintenance_eq_min'] ? $all_config['op_maintenance_eq_min']:""):"" ?>">
										</div>												
									</div>
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Maintenance t CO2 Eq max: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="op_maintenance_eq_max" placeholder="" value="<?=isset($all_config)? ($all_config['op_maintenance_eq_max'] ? $all_config['op_maintenance_eq_max']:""):"" ?>">
										</div>												
									</div>
								</div>	
								<div class="row">
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Maintenance t CO2-C Eq min: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="op_maintenance_ceq_min" placeholder="" value="<?=isset($all_config)? ($all_config['op_maintenance_ceq_min'] ? $all_config['op_maintenance_ceq_min']:""):"" ?>">
										</div>												
									</div>
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Maintenance t CO2-C Eq max: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="op_maintenance_ceq_max" placeholder="" value="<?=isset($all_config)? ($all_config['op_maintenance_ceq_max'] ? $all_config['op_maintenance_ceq_max']:""):"" ?>">
										</div>												
									</div>
								</div>	
								<div class="row">
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Maintenance % Proportion min: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="op_maintenance_pro_min" placeholder="" value="<?=isset($all_config)? ($all_config['op_maintenance_pro_min'] ? $all_config['op_maintenance_pro_min']:""):"" ?>">
										</div>												
									</div>
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Maintenance % Proportion max: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="op_maintenance_pro_max" placeholder="" value="<?=isset($all_config)? ($all_config['op_maintenance_pro_max'] ? $all_config['op_maintenance_pro_max']:""):"" ?>">
										</div>												
									</div>
								</div>	
								<div class="row">
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Subtotal t CO2 Eq min: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="op_subtotal_eq_min" placeholder="" value="<?=isset($all_config)? ($all_config['op_subtotal_eq_min'] ? $all_config['op_subtotal_eq_min']:""):"" ?>">
										</div>												
									</div>
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Subtotal t CO2 Eq max: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="op_subtotal_eq_max" placeholder="" value="<?=isset($all_config)? ($all_config['op_subtotal_eq_max'] ? $all_config['op_subtotal_eq_max']:""):"" ?>">
										</div>												
									</div>
								</div>	
								<div class="row">
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Subtotal t CO2-C Eq min: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="op_subtotal_ceq_min" placeholder="" value="<?=isset($all_config)? ($all_config['op_subtotal_ceq_min'] ? $all_config['op_subtotal_ceq_min']:""):"" ?>">
										</div>												
									</div>
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Subtotal t CO2-C Eq max: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="op_subtotal_ceq_max" placeholder="" value="<?=isset($all_config)? ($all_config['op_subtotal_ceq_max'] ? $all_config['op_subtotal_ceq_max']:""):"" ?>">
										</div>												
									</div>
								</div>	
								<div class="row">
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Subtotal % Proportion min: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="op_subtotal_pro_min" placeholder="" value="<?=isset($all_config)? ($all_config['op_subtotal_pro_min'] ? $all_config['op_subtotal_pro_min']:""):"" ?>">
										</div>												
									</div>
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Subtotal % Proportion  max: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="op_subtotal_pro_max" placeholder="" value="<?=isset($all_config)? ($all_config['op_subtotal_pro_max'] ? $all_config['op_subtotal_pro_max']:""):"" ?>">
										</div>												
									</div>
								</div>	
																
							</div>							
							<!-- 3. Elimination -->
							<label class="w-100 mt-3"><span id="electricity_toggle" class="ua-icon-tree-minus mr-2"></span> <b style="font-size:18px;"> 3. Elimination phase. </b></label>
							<div class="col-xl-12" id="electricity_div">
								<div class="form-group">
									<div class="text-muted">
										Please, choose the electricity source for the pumps and provide the time working in hours per day.
									</div>
								</div>
																	
								<div class="row">
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Materials t CO2 Eq min: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="el_material_eq_min" placeholder="" value="<?=isset($all_config)? ($all_config['el_material_eq_min'] ? $all_config['el_material_eq_min']:""):"" ?>">
										</div>												
									</div>
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Materials t CO2 Eq max: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="el_material_eq_max" placeholder="" value="<?=isset($all_config)? ($all_config['el_material_eq_max'] ? $all_config['el_material_eq_max']:""):"" ?>">
										</div>												
									</div>
								</div>	
								<div class="row">
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Materials t CO2-C Eq min: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="el_material_ceq_min" placeholder="" value="<?=isset($all_config)? ($all_config['el_material_ceq_min'] ? $all_config['el_material_ceq_min']:""):"" ?>">
										</div>												
									</div>
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Materials t CO2-C Eq max: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="el_material_ceq_max" placeholder="" value="<?=isset($all_config)? ($all_config['el_material_ceq_max'] ? $all_config['el_material_ceq_max']:""):"" ?>">
										</div>												
									</div>
								</div>									
								<div class="row">
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Materials % Proportion min: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="el_material_pro_min" placeholder="" value="<?=isset($all_config)? ($all_config['el_material_pro_min'] ? $all_config['el_material_pro_min']:""):"" ?>">
										</div>												
									</div>
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Materials % Proportion max: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="el_material_pro_max" placeholder="" value="<?=isset($all_config)? ($all_config['el_material_pro_max'] ? $all_config['el_material_pro_max']:""):"" ?>">
										</div>												
									</div>
								</div>	
								<div class="row">
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Energy t CO2 Eq min: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="el_energy_eq_min" placeholder="" value="<?=isset($all_config)? ($all_config['el_energy_eq_min'] ? $all_config['el_energy_eq_min']:""):"" ?>">
										</div>												
									</div>
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Energy t CO2 Eq max: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="el_energy_eq_max" placeholder="" value="<?=isset($all_config)? ($all_config['el_energy_eq_max'] ? $all_config['el_energy_eq_max']:""):"" ?>">
										</div>												
									</div>
								</div>	
								<div class="row">
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Energy t CO2-C Eq min: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="el_energy_ceq_min" placeholder="" value="<?=isset($all_config)? ($all_config['el_energy_ceq_min'] ? $all_config['el_energy_ceq_min']:""):"" ?>">
										</div>												
									</div>
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Energy t CO2-C Eq max: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="el_energy_ceq_max" placeholder="" value="<?=isset($all_config)? ($all_config['el_energy_ceq_max'] ? $all_config['el_energy_ceq_max']:""):"" ?>">
										</div>												
									</div>
								</div>	
								<div class="row">
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Energy % Proportion min: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="el_energy_pro_min" placeholder="" value="<?=isset($all_config)? ($all_config['el_energy_pro_min'] ? $all_config['el_energy_pro_min']:""):"" ?>">
										</div>												
									</div>
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Energy % Proportion max: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="el_energy_pro_max" placeholder="" value="<?=isset($all_config)? ($all_config['el_energy_pro_max'] ? $all_config['el_energy_pro_max']:""):"" ?>">
										</div>												
									</div>
								</div>	
								<div class="row">
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Subtotal t CO2 Eq min: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="el_subtotal_eq_min" placeholder="" value="<?=isset($all_config)? ($all_config['el_subtotal_eq_min'] ? $all_config['el_subtotal_eq_min']:""):"" ?>">
										</div>												
									</div>
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Subtotal t CO2 Eq max: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="el_subtotal_eq_max" placeholder="" value="<?=isset($all_config)? ($all_config['el_subtotal_eq_max'] ? $all_config['el_subtotal_eq_max']:""):"" ?>">
										</div>												
									</div>
								</div>	
								<div class="row">
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Subtotal t CO2-C Eq min: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="el_subtotal_ceq_min" placeholder="" value="<?=isset($all_config)? ($all_config['el_subtotal_ceq_min'] ? $all_config['el_subtotal_ceq_min']:""):"" ?>">
										</div>												
									</div>
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Subtotal t CO2-C Eq max: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="el_subtotal_ceq_max" placeholder="" value="<?=isset($all_config)? ($all_config['el_subtotal_ceq_max'] ? $all_config['el_subtotal_ceq_max']:""):"" ?>">
										</div>												
									</div>
								</div>	
								<div class="row">
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Subtotal % Proportion min: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="el_subtotal_pro_min" placeholder="" value="<?=isset($all_config)? ($all_config['el_subtotal_pro_min'] ? $all_config['el_subtotal_pro_min']:""):"" ?>">
										</div>												
									</div>
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Subtotal % Proportion max: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="el_subtotal_pro_max" placeholder="" value="<?=isset($all_config)? ($all_config['el_subtotal_pro_max'] ? $all_config['el_subtotal_pro_max']:""):"" ?>">
										</div>												
									</div>
								</div>	
																	
							</div>							
							<!-- 4. CO2 Source -->
							<label class="w-100 mt-3"><span id="maintenance_toggle" class="ua-icon-tree-minus mr-2"></span> <b style="font-size:18px;"> 4. CO2 Source</b></label>
							<div class="col-xl-12" id="maintenance_div">
																
								<div class="row">
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Materials t CO2 Eq min: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="cs_material_eq_min" placeholder="" value="<?=isset($all_config)? ($all_config['cs_material_eq_min'] ? $all_config['cs_material_eq_min']:""):"" ?>">
										</div>												
									</div>
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Materials t CO2 Eq max: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="cs_material_eq_max" placeholder="" value="<?=isset($all_config)? ($all_config['cs_material_eq_max'] ? $all_config['cs_material_eq_max']:""):"" ?>">
										</div>												
									</div>
								</div>	
								<div class="row">
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Materials t CO2-C Eq min: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="cs_material_ceq_min" placeholder="" value="<?=isset($all_config)? ($all_config['cs_material_ceq_min'] ? $all_config['cs_material_ceq_min']:""):"" ?>">
										</div>												
									</div>
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Materials t CO2-C Eq max: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="cs_material_ceq_max" placeholder="" value="<?=isset($all_config)? ($all_config['cs_material_ceq_max'] ? $all_config['cs_material_ceq_max']:""):"" ?>">
										</div>												
									</div>
								</div>								
								<div class="row">
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Materials % Proportion min: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="cs_material_pro_min" placeholder="" value="<?=isset($all_config)? ($all_config['cs_material_pro_min'] ? $all_config['cs_material_pro_min']:""):"" ?>">
										</div>												
									</div>
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Materials % Proportion max: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="cs_material_pro_max" placeholder="" value="<?=isset($all_config)? ($all_config['cs_material_pro_max'] ? $all_config['cs_material_pro_max']:""):"" ?>">
										</div>												
									</div>
								</div>	
								<div class="row">
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Energy t CO2 Eq min: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="cs_energy_eq_min" placeholder="" value="<?=isset($all_config)? ($all_config['cs_energy_eq_min'] ? $all_config['cs_energy_eq_min']:""):"" ?>">
										</div>												
									</div>
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Energy t CO2 Eq max: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="cs_energy_eq_max" placeholder="" value="<?=isset($all_config)? ($all_config['cs_energy_eq_max'] ? $all_config['cs_energy_eq_max']:""):"" ?>">
										</div>												
									</div>
								</div>	
								<div class="row">
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Energy t CO2-C Eq min: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="cs_energy_ceq_min" placeholder="" value="<?=isset($all_config)? ($all_config['cs_energy_ceq_min'] ? $all_config['cs_energy_ceq_min']:""):"" ?>">
										</div>												
									</div>
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Energy t CO2-C Eq max: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="cs_energy_ceq_max" placeholder="" value="<?=isset($all_config)? ($all_config['cs_energy_ceq_max'] ? $all_config['cs_energy_ceq_max']:""):"" ?>">
										</div>												
									</div>
								</div>	
								<div class="row">
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Energy % Proportion min: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="cs_energy_pro_min" placeholder="" value="<?=isset($all_config)? ($all_config['cs_energy_pro_min'] ? $all_config['cs_energy_pro_min']:""):"" ?>">
										</div>												
									</div>
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Energy % Proportion max: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="cs_energy_pro_max" placeholder="" value="<?=isset($all_config)? ($all_config['cs_energy_pro_max'] ? $all_config['cs_energy_pro_max']:""):"" ?>">
										</div>												
									</div>
								</div>	
								<div class="row">
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Maintenance t CO2 Eq min: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="cs_maintenance_eq_min" placeholder="" value="<?=isset($all_config)? ($all_config['cs_maintenance_eq_min'] ? $all_config['cs_maintenance_eq_min']:""):"" ?>">
										</div>												
									</div>
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Maintenance t CO2 Eq max: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="cs_maintenance_eq_max" placeholder="" value="<?=isset($all_config)? ($all_config['cs_maintenance_eq_max'] ? $all_config['cs_maintenance_eq_max']:""):"" ?>">
										</div>												
									</div>
								</div>	
								<div class="row">
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Maintenance t CO2-C Eq min: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="cs_maintenance_ceq_min" placeholder="" value="<?=isset($all_config)? ($all_config['cs_maintenance_ceq_min'] ? $all_config['cs_maintenance_ceq_min']:""):"" ?>">
										</div>												
									</div>
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Maintenance t CO2-C Eq max: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="cs_maintenance_ceq_max" placeholder="" value="<?=isset($all_config)? ($all_config['cs_maintenance_ceq_max'] ? $all_config['cs_maintenance_ceq_max']:""):"" ?>">
										</div>												
									</div>
								</div>	
								<div class="row">
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Maintenance % Proportion min: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="cs_maintenance_pro_min" placeholder="" value="<?=isset($all_config)? ($all_config['cs_maintenance_pro_min'] ? $all_config['cs_maintenance_pro_min']:""):"" ?>">
										</div>												
									</div>
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Maintenance % Proportion max: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="cs_maintenance_pro_max" placeholder="" value="<?=isset($all_config)? ($all_config['cs_maintenance_pro_max'] ? $all_config['cs_maintenance_pro_max']:""):"" ?>">
										</div>												
									</div>
								</div>	
								<div class="row">
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Wetland t CO2 Eq min: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="cs_wetland_eq_min" placeholder="" value="<?=isset($all_config)? ($all_config['cs_wetland_eq_min'] ? $all_config['cs_wetland_eq_min']:""):"" ?>">
										</div>												
									</div>
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Wetland t CO2 Eq max: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="cs_wetland_eq_max" placeholder="" value="<?=isset($all_config)? ($all_config['cs_wetland_eq_max'] ? $all_config['cs_wetland_eq_max']:""):"" ?>">
										</div>												
									</div>
								</div>	
								<div class="row">
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Wetland t CO2-C Eq min: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="cs_wetland_ceq_min" placeholder="" value="<?=isset($all_config)? ($all_config['cs_wetland_ceq_min'] ? $all_config['cs_wetland_ceq_min']:""):"" ?>">
										</div>												
									</div>
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Wetland t CO2-C Eq max: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="cs_wetland_ceq_max" placeholder="" value="<?=isset($all_config)? ($all_config['cs_wetland_ceq_max'] ? $all_config['cs_wetland_ceq_max']:""):"" ?>">
										</div>												
									</div>
								</div>	
								<div class="row">
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Wetland % Proportion min: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="cs_wetland_pro_min" placeholder="" value="<?=isset($all_config)? ($all_config['cs_wetland_pro_min'] ? $all_config['cs_wetland_pro_min']:""):"" ?>">
										</div>												
									</div>
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Wetland % Proportion max: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="cs_wetland_pro_max" placeholder="" value="<?=isset($all_config)? ($all_config['cs_wetland_pro_max'] ? $all_config['cs_wetland_pro_max']:""):"" ?>">
										</div>												
									</div>
								</div>	
								<div class="row">
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>TOTAL t CO2 Eq min: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="cs_total_eq_min" placeholder="" value="<?=isset($all_config)? ($all_config['cs_total_eq_min'] ? $all_config['cs_total_eq_min']:""):"" ?>">
										</div>												
									</div>
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>TOTAL t CO2 Eq max: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="cs_total_eq_max" placeholder="" value="<?=isset($all_config)? ($all_config['cs_total_eq_max'] ? $all_config['cs_total_eq_max']:""):"" ?>">
										</div>												
									</div>
								</div>	
								<div class="row">
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>TOTAL t CO2-C Eq min: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="cs_total_ceq_min" placeholder="" value="<?=isset($all_config)? ($all_config['cs_total_ceq_min'] ? $all_config['cs_total_ceq_min']:""):"" ?>">
										</div>												
									</div>
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>TOTAL t CO2-C Eq max: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="cs_total_ceq_max" placeholder="" value="<?=isset($all_config)? ($all_config['cs_total_ceq_max'] ? $all_config['cs_total_ceq_max']:""):"" ?>">
										</div>												
									</div>
								</div>	
								<div class="row">
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>TOTAL % Proportion min: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="cs_total_pro_min" placeholder="" value="<?=isset($all_config)? ($all_config['cs_total_pro_min'] ? $all_config['cs_total_pro_min']:""):"" ?>">
										</div>												
									</div>
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>TOTAL % Proportion max: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="cs_total_pro_max" placeholder="" value="<?=isset($all_config)? ($all_config['cs_total_pro_max'] ? $all_config['cs_total_pro_max']:""):"" ?>">
										</div>												
									</div>
								</div>	
							</div>

							<!-- 5. CO2 Emissions -->
							<label class="w-100 mt-3"><span id="maintenance_toggle" class="ua-icon-tree-minus mr-2"></span> <b style="font-size:18px;"> 4. CO2 Emissions </b></label>
							<div class="col-xl-12" id="maintenance_div">
																
								<div class="row">
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Indirect t CO2 Eq min: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="ce_indirect_eq_min" placeholder="" value="<?=isset($all_config)? ($all_config['ce_indirect_eq_min'] ? $all_config['ce_indirect_eq_min']:""):"" ?>">
										</div>												
									</div>
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Indirect t CO2 Eq max: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="ce_indirect_eq_max" placeholder="" value="<?=isset($all_config)? ($all_config['ce_indirect_eq_max'] ? $all_config['ce_indirect_eq_max']:""):"" ?>">
										</div>												
									</div>
								</div>	
								<div class="row">
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Indirect t CO2-C Eq min: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="ce_indirect_ceq_min" placeholder="" value="<?=isset($all_config)? ($all_config['ce_indirect_ceq_min'] ? $all_config['ce_indirect_ceq_min']:""):"" ?>">
										</div>												
									</div>
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Indirect t CO2-C Eq max: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="ce_indirect_ceq_max" placeholder="" value="<?=isset($all_config)? ($all_config['ce_indirect_ceq_max'] ? $all_config['ce_indirect_ceq_max']:""):"" ?>">
										</div>												
									</div>
								</div>	
								<div class="row">
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Indirect % Proportion min: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="ce_indirect_pro_min" placeholder="" value="<?=isset($all_config)? ($all_config['ce_indirect_pro_min'] ? $all_config['ce_indirect_pro_min']:""):"" ?>">
										</div>												
									</div>
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Indirect % Proportion max: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="ce_indirect_pro_max" placeholder="" value="<?=isset($all_config)? ($all_config['ce_indirect_pro_max'] ? $all_config['ce_indirect_pro_max']:""):"" ?>">
										</div>												
									</div>
								</div>									
								<div class="row">
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Direct t CO2 Eq min: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="ce_direct_eq_min" placeholder="" value="<?=isset($all_config)? ($all_config['ce_direct_eq_min'] ? $all_config['ce_direct_eq_min']:""):"" ?>">
										</div>												
									</div>
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Direct t CO2 Eq max: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="ce_direct_eq_max" placeholder="" value="<?=isset($all_config)? ($all_config['ce_direct_eq_max'] ? $all_config['ce_direct_eq_max']:""):"" ?>">
										</div>												
									</div>
								</div>	
								<div class="row">
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Direct t CO2-C Eq min: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="ce_direct_ceq_min" placeholder="" value="<?=isset($all_config)? ($all_config['ce_direct_ceq_min'] ? $all_config['ce_direct_ceq_min']:""):"" ?>">
										</div>												
									</div>
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Direct t CO2-C Eq max: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="ce_direct_ceq_max" placeholder="" value="<?=isset($all_config)? ($all_config['ce_direct_ceq_max'] ? $all_config['ce_direct_ceq_max']:""):"" ?>">
										</div>												
									</div>
								</div>	
								<div class="row">
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Direct % Proportion min: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="ce_direct_pro_min" placeholder="" value="<?=isset($all_config)? ($all_config['ce_direct_pro_min'] ? $all_config['ce_direct_pro_min']:""):"" ?>">
										</div>												
									</div>
									<div class="col-3">
										<div class="mb-1 text-right">
											<label>Direct % Proportion max: </label>
										</div>
									</div>
									<div class="col-3">
										<div class="mb-1">
											<input type="number" min=0 step="0.01" class="form-control" name="ce_direct_pro_max" placeholder="" value="<?=isset($all_config)? ($all_config['ce_direct_pro_max'] ? $all_config['ce_direct_pro_max']:""):"" ?>">
										</div>												
									</div>
								</div>	
							</div>

							
						</div>
					</div>
	  
				</div>

				<button class="btn btn-lg btn-success" style="position: fixed;right: 10px;top: 60px;" type="submit">Save</button>

			
		</div>
	</div>

</div>