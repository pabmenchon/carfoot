<div class="page-content">

	<div class="container-fluid">
		<div class="page-content__header">
			<div>
				<h2 class="page-content__header-heading">Summary</h2>
			</div>
		</div>
		
		<div class="row">
			<div class="col-lg-6">
				<div class="main-container table-container">
					<table class="table table-bordered table-sm">          
						<tbody>
							<tr>
								<td>
									Lifetime (y)
								</td>
								<td><?php echo $lifetime == 0 ? "" : number_format($lifetime,2); ?></td>
							</tr>
							<tr>
								<td>
									m3 per day
								</td>
								<td><?php echo $wastewater == 0 ? "" : number_format($wastewater,2); ?></td>
							</tr>
							<tr>
								<td>
									PE
								</td>
								<td><?php echo $equivalent == 0 ? "" : number_format($equivalent,2); ?></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="main-container table-container">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Construction phase</th>
								<th>t CO2 Eq</th>
								<th>t CO2-C Eq</th>
								<th>% Proportion</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									Materials
								</td>
								<td>
									<p class="<?=($tonesCO2_material_cons&&$all_config['material_eq_min']&&$all_config['material_eq_max'])? ( ($tonesCO2_material_cons<$all_config['material_eq_min']||$tonesCO2_material_cons>=$all_config['material_eq_max']) ? "reach-alert" :"" ) :""?>" ><?php echo $tonesCO2_material_cons == 0 ? "" : number_format($tonesCO2_material_cons,2); ?> </p>
								</td>
								<td>
									<p class="<?=($tonesCO2_material_c_cons&&$all_config['material_ceq_min']&&$all_config['material_ceq_max'])? ( ($tonesCO2_material_c_cons<$all_config['material_ceq_min']||$tonesCO2_material_c_cons>=$all_config['material_ceq_max']) ? "reach-alert" :"" ) :""?>" ><?php echo $tonesCO2_material_c_cons == 0 ? "" : number_format($tonesCO2_material_c_cons,2); ?></p>
								</td>
								<td>
									<p class="<?=($tonesCO2_material_cons_p&&$all_config['meterial_pro_min']&&$all_config['meterial_pro_max'])? ( ($tonesCO2_material_cons_p<$all_config['meterial_pro_min']||$tonesCO2_material_cons_p>=$all_config['meterial_pro_max']) ? "reach-alert" :"" ) :""?>" ><?php echo $tonesCO2_material_cons_p == 0 ? "" : number_format($tonesCO2_material_cons_p,2); ?></p>
								</td>
							</tr>
							<tr>
								<td>
									Energy
								</td>
								<td>
									<p class="<?=($tonesCO2_energy_cons&&$all_config['energy_eq_min']&&$all_config['energy_eq_max'])? ( ($tonesCO2_energy_cons<$all_config['energy_eq_min']||$tonesCO2_energy_cons>=$all_config['energy_eq_max']) ? "reach-alert" :"" ) :""?>" ><?php echo $tonesCO2_energy_cons == 0 ? "" : number_format($tonesCO2_energy_cons,2); ?></p>
								</td>
								<td>
									<p class="<?=($tonesCO2_energy_c_cons&&$all_config['energy_ceq_min']&&$all_config['energy_ceq_max'])? ( ($tonesCO2_energy_c_cons<$all_config['energy_ceq_min']||$tonesCO2_energy_c_cons>=$all_config['energy_ceq_max']) ? "reach-alert" :"" ) :""?>" ><?php echo $tonesCO2_energy_c_cons == 0 ? "" : number_format($tonesCO2_energy_c_cons,2); ?> </p>
								</td>
								<td>
									<p class="<?=($tonesCO2_energy_cons_p&&$all_config['energy_pro_min']&&$all_config['energy_pro_max'])? ( ($tonesCO2_energy_cons_p<$all_config['energy_pro_min']||$tonesCO2_energy_cons_p>=$all_config['energy_pro_max']) ? "reach-alert" :"" ) :""?>" ><?php echo $tonesCO2_energy_cons_p == 0 ? "" : number_format($tonesCO2_energy_cons_p,2); ?></p>
								</td>
							</tr>
							<tr>
								<td>
									Subtotal
								</td>
								<td>
									<p class="<?=($tonesCO2_cons_total&&$all_config['subtotal_eq_min']&&$all_config['subtotal_eq_max'])? ( ($tonesCO2_cons_total<$all_config['subtotal_eq_min']||$tonesCO2_cons_total>=$all_config['subtotal_eq_max']) ? "reach-alert" :"" ) :""?>" ><?php echo $tonesCO2_cons_total == 0 ? "" : number_format($tonesCO2_cons_total,2); ?></p>
								</td>
								<td>
									<p class="<?=($tonesCO2_c_cons_total&&$all_config['subtotal_ceq_min']&&$all_config['subtotal_ceq_max'])? ( ($tonesCO2_c_cons_total<$all_config['subtotal_ceq_min']||$tonesCO2_c_cons_total>=$all_config['subtotal_ceq_max']) ? "reach-alert" :"" ) :""?>" ><?php echo $tonesCO2_c_cons_total == 0 ? "" : number_format($tonesCO2_c_cons_total,2); ?></p>
								</td>
								<td>
									<p class="<?=($tonesCO2_cons_total_p&&$all_config['subtotal_pro_min']&&$all_config['subtotal_pro_max'])? ( ($tonesCO2_cons_total_p<$all_config['subtotal_pro_min']||$tonesCO2_cons_total_p>=$all_config['subtotal_pro_max']) ? "reach-alert" :"" ) :""?>" ><?php echo $tonesCO2_cons_total_p == 0 ? "" : number_format($tonesCO2_cons_total_p,2); ?></p>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="main-container table-container">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Operation phase</th>
								<th>t CO2 Eq</th>
								<th>t CO2-C Eq</th>
								<th>% Proportion</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									Wetland
								</td>
								<td>
									<p class="<?=($tonesCO2_wetland_operation&&$all_config['wetland_eq_min']&&$all_config['wetland_eq_max'])? ( ($tonesCO2_wetland_operation<$all_config['wetland_eq_min']||$tonesCO2_wetland_operation>=$all_config['wetland_eq_max']) ? "reach-alert" :"" ) :""?>" ><?php echo $tonesCO2_wetland_operation == 0 ? "" : number_format($tonesCO2_wetland_operation,2); ?></p>
								</td>
								<td>
									<p class="<?=($tonesCO2_c_wetland_operation&&$all_config['wetland_ceq_min']&&$all_config['wetland_ceq_max'])? ( ($tonesCO2_c_wetland_operation<$all_config['wetland_ceq_min']||$tonesCO2_c_wetland_operation>=$all_config['wetland_ceq_max']) ? "reach-alert" :"" ) :""?>" ><?php echo $tonesCO2_c_wetland_operation == 0 ? "" : number_format($tonesCO2_c_wetland_operation,2); ?></p>
								</td>
								<td>
									<p class="<?=($tonesCO2_wetland_operation_p&&$all_config['wetland_pro_min']&&$all_config['wetland_pro_max'])? ( ($tonesCO2_wetland_operation_p<$all_config['wetland_pro_min']||$tonesCO2_wetland_operation_p>=$all_config['wetland_pro_max']) ? "reach-alert" :"" ) :""?>" ><?php echo $tonesCO2_wetland_operation_p == 0 ? "" : number_format($tonesCO2_wetland_operation_p,2); ?></p>
								</td>
							</tr>
							<tr>
								<td>
									Energy
								</td>
								<td>
									<p class="<?=($tonesCO2_energy_operation&&$all_config['op_energy_eq_min']&&$all_config['op_energy_eq_max'])? ( ($tonesCO2_energy_operation<$all_config['op_energy_eq_min']||$tonesCO2_energy_operation>=$all_config['op_energy_eq_max']) ? "reach-alert" :"" ) :""?>" ><?php echo $tonesCO2_energy_operation == 0 ? "" : number_format($tonesCO2_energy_operation,2); ?></p>
								</td>
								<td>
									<p class="<?=($tonesCO2_c_energy_operation&&$all_config['op_energy_ceq_min']&&$all_config['op_energy_ceq_max'])? ( ($tonesCO2_c_energy_operation<$all_config['op_energy_ceq_min']||$tonesCO2_c_energy_operation>=$all_config['op_energy_ceq_max']) ? "reach-alert" :"" ) :""?>" ><?php echo $tonesCO2_c_energy_operation == 0 ? "" : number_format($tonesCO2_c_energy_operation,2); ?></p>
								</td>
								<td>
									<p class="<?=($tonesCO2_energy_operation_p&&$all_config['op_energy_pro_min']&&$all_config['op_energy_pro_max'])? ( ($tonesCO2_energy_operation_p<$all_config['op_energy_pro_min']||$tonesCO2_energy_operation_p>=$all_config['op_energy_pro_max']) ? "reach-alert" :"" ) :""?>" ><?php echo $tonesCO2_energy_operation_p == 0 ? "" : number_format($tonesCO2_energy_operation_p,2); ?></p>
								</td>
							</tr>
							<tr>
								<td>
									Maintenance
								</td>
								<td>
									<p class="<?=($tonesCO2_maintenance_operation&&$all_config['op_maintenance_eq_min']&&$all_config['op_maintenance_eq_max'])? ( ($tonesCO2_maintenance_operation<$all_config['op_maintenance_eq_min']||$tonesCO2_maintenance_operation>=$all_config['op_maintenance_eq_max']) ? "reach-alert" :"" ) :""?>" ><?php echo $tonesCO2_maintenance_operation == 0 ? "" : number_format($tonesCO2_maintenance_operation,2); ?></p>
								</td>
								<td>
									<p class="<?=($tonesCO2_c_maintenance_operation&&$all_config['op_maintenance_ceq_min']&&$all_config['op_maintenance_ceq_max'])? ( ($tonesCO2_c_maintenance_operation<$all_config['op_maintenance_ceq_min']||$tonesCO2_c_maintenance_operation>=$all_config['op_maintenance_ceq_max']) ? "reach-alert" :"" ) :""?>" ><?php echo $tonesCO2_c_maintenance_operation == 0 ? "" : number_format($tonesCO2_c_maintenance_operation,2); ?></p>
								</td>
								<td>
									<p class="<?=($tonesCO2_maintenance_operation_p&&$all_config['op_maintenance_pro_min']&&$all_config['op_maintenance_pro_max'])? ( ($tonesCO2_maintenance_operation_p<$all_config['op_maintenance_pro_min']||$tonesCO2_maintenance_operation_p>=$all_config['op_maintenance_pro_max']) ? "reach-alert" :"" ) :""?>" ><?php echo $tonesCO2_maintenance_operation_p == 0 ? "" : number_format($tonesCO2_maintenance_operation_p,2); ?></p>
								</td>
							</tr>
							<tr>
								<td>
									Subtotal
								</td>
								<td>
									<p class="<?=($tonesCO2_operation_total&&$all_config['op_subtotal_eq_min']&&$all_config['op_subtotal_eq_max'])? ( ($tonesCO2_operation_total<$all_config['op_subtotal_eq_min']||$tonesCO2_operation_total>=$all_config['op_subtotal_eq_max']) ? "reach-alert" :"" ) :""?>" ><?php echo $tonesCO2_operation_total == 0 ? "" : number_format($tonesCO2_operation_total,2); ?></p>
								</td>
								<td>
									<p class="<?=($tonesCO2_c_operation_total&&$all_config['op_subtotal_ceq_min']&&$all_config['op_subtotal_ceq_max'])? ( ($tonesCO2_c_operation_total<$all_config['op_subtotal_ceq_min']||$tonesCO2_c_operation_total>=$all_config['op_subtotal_ceq_max']) ? "reach-alert" :"" ) :""?>" ><?php echo $tonesCO2_c_operation_total == 0 ? "" : number_format($tonesCO2_c_operation_total,2); ?></p>
								</td>
								<td>
									<p class="<?=($tonesCO2_operation_total_p&&$all_config['op_subtotal_pro_min']&&$all_config['op_subtotal_pro_max'])? ( ($tonesCO2_operation_total_p<$all_config['op_subtotal_pro_min']||$tonesCO2_operation_total_p>=$all_config['op_subtotal_pro_max']) ? "reach-alert" :"" ) :""?>" ><?php echo $tonesCO2_operation_total_p == 0 ? "" : number_format($tonesCO2_operation_total_p,2); ?></p>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="main-container table-container">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Elimination phase</th>
								<th>t CO2 Eq</th>
								<th>t CO2-C Eq</th>
								<th>% Proportion</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									Materials
								</td>
								<td>
									<p class="<?=($tonesCO2_material_cons&&$all_config['el_material_eq_min']&&$all_config['el_material_eq_max'])? ( ($tonesCO2_material_cons<$all_config['el_material_eq_min']||$tonesCO2_material_cons>=$all_config['el_material_eq_max']) ? "reach-alert" :"" ) :""?>" ><?php echo $tonesCO2_material_cons == 0 ? "" : number_format($tonesCO2_material_cons,2); ?></p>
								</td>
								<td>
									<p class="<?=($tonesCO2_material_c_cons&&$all_config['el_material_ceq_min']&&$all_config['el_material_ceq_max'])? ( ($tonesCO2_material_c_cons<$all_config['el_material_ceq_min']||$tonesCO2_material_c_cons>=$all_config['el_material_ceq_max']) ? "reach-alert" :"" ) :""?>" ><?php echo $tonesCO2_material_c_cons == 0 ? "" : number_format($tonesCO2_material_c_cons,2); ?></p>
								</td>
								<td>
									<p class="<?=($tonesCO2_material_cons_p&&$all_config['el_material_pro_min']&&$all_config['el_material_pro_max'])? ( ($tonesCO2_material_cons_p<$all_config['el_material_pro_min']||$tonesCO2_material_cons_p>=$all_config['el_material_pro_max']) ? "reach-alert" :"" ) :""?>" ><?php echo $tonesCO2_material_cons_p == 0 ? "" : number_format($tonesCO2_material_cons_p,2); ?></p>
								</td>
							</tr>
							<tr>
								<td>
									Energy
								</td>
								<td>
									<p class="<?=($tonesCO2_energy_cons&&$all_config['el_energy_eq_min']&&$all_config['el_energy_eq_max'])? ( ($tonesCO2_energy_cons<$all_config['el_energy_eq_min']||$tonesCO2_energy_cons>=$all_config['el_energy_eq_max']) ? "reach-alert" :"" ) :""?>" ><?php echo $tonesCO2_energy_cons == 0 ? "" : number_format($tonesCO2_energy_cons,2); ?></p>
								</td>
								<td>
									<p class="<?=($tonesCO2_energy_c_cons&&$all_config['el_energy_ceq_min']&&$all_config['el_energy_ceq_max'])? ( ($tonesCO2_energy_c_cons<$all_config['el_energy_ceq_min']||$tonesCO2_energy_c_cons>=$all_config['el_energy_ceq_max']) ? "reach-alert" :"" ) :""?>" ><?php echo $tonesCO2_energy_c_cons == 0 ? "" : number_format($tonesCO2_energy_c_cons,2); ?></p>
								</td>
								<td>
									<p class="<?=($tonesCO2_energy_cons_p&&$all_config['el_energy_pro_min']&&$all_config['el_energy_pro_max'])? ( ($tonesCO2_energy_cons_p<$all_config['el_energy_pro_min']||$tonesCO2_energy_cons_p>=$all_config['el_energy_pro_max']) ? "reach-alert" :"" ) :""?>" ><?php echo $tonesCO2_energy_cons_p == 0 ? "" : number_format($tonesCO2_energy_cons_p,2); ?></p>
								</td>
							</tr>
							<tr>
								<td>
									Subtotal
								</td>
								<td>
									<p class="<?=($tonesCO2_cons_total&&$all_config['el_subtotal_eq_min']&&$all_config['el_subtotal_eq_max'])? ( ($tonesCO2_cons_total<$all_config['el_subtotal_eq_min']||$tonesCO2_cons_total>=$all_config['el_subtotal_eq_max']) ? "reach-alert" :"" ) :""?>" ><?php echo $tonesCO2_cons_total == 0 ? "" : number_format($tonesCO2_cons_total,2); ?></p>
								</td>
								<td>
									<p class="<?=($tonesCO2_c_cons_total&&$all_config['el_subtotal_ceq_min']&&$all_config['el_subtotal_ceq_max'])? ( ($tonesCO2_c_cons_total<$all_config['el_subtotal_ceq_min']||$tonesCO2_c_cons_total>=$all_config['el_subtotal_ceq_max']) ? "reach-alert" :"" ) :""?>" ><?php echo $tonesCO2_c_cons_total == 0 ? "" : number_format($tonesCO2_c_cons_total,2); ?></p>
								</td>
								<td>
									<p class="<?=($tonesCO2_cons_total_p&&$all_config['el_subtotal_pro_min']&&$all_config['el_subtotal_pro_max'])? ( ($tonesCO2_cons_total_p<$all_config['el_subtotal_pro_min']||$tonesCO2_cons_total_p>=$all_config['el_subtotal_pro_max']) ? "reach-alert" :"" ) :""?>" ><?php echo $tonesCO2_cons_total_p == 0 ? "" : number_format($tonesCO2_cons_total_p,2); ?></p>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			
			<div class="col-lg-6">
				<div class="main-container table-container">
					<table class="table table-bordered">    
						<thead>
							<tr>
								<th>Parameter</th>
								<th>Kg CO2 Eq</th>
								<th>Kg CO2-C Eq</th>
							</tr>
						</thead>      
						<tbody>
							<tr>
								<td>
									m3
								</td>
								<td><?php echo $tonesCO2_m3 == 0 ? "" : number_format($tonesCO2_m3,2); ?></td>
								<td><?php echo $tonesCO2_m3_c == 0 ? "" : number_format($tonesCO2_m3_c,2); ?></td>
							</tr>
							<tr>
								<td>
									PE
								</td>
								<td><?php echo $tonesCO2_pe == 0 ? "" : number_format($tonesCO2_pe,2); ?></td>
								<td><?php echo $tonesCO2_pe_c == 0 ? "" : number_format($tonesCO2_pe_c,2); ?></td>
							</tr>
							<tr>
								<td>
									Kg DBO5
								</td>
								<td><?php echo $tonesCO2_dbo5 == 0 ? "" : number_format($tonesCO2_dbo5,2); ?></td>
								<td><?php echo $tonesCO2_dbo5_c == 0 ? "" : number_format($tonesCO2_dbo5_c,2); ?></td>
							</tr>
							<tr>
								<td>
									Kg COD 
								</td>
								<td><?php echo $tonesCO2_cod == 0 ? "" : number_format($tonesCO2_cod,2); ?></td>
								<td><?php echo $tonesCO2_cod_c == 0 ? "" : number_format($tonesCO2_cod_c,2); ?></td>
							</tr>
							<tr>
								<td>
									Kg TN 
								</td>
								<td><?php echo $tonesCO2_tn == 0 ? "" : number_format($tonesCO2_tn,2); ?></td>
								<td><?php echo $tonesCO2_tn_c == 0 ? "" : number_format($tonesCO2_tn_c,2); ?></td>
							</tr>
							<tr>
								<td>
									Kg NH4+ 
								</td>
								<td><?php echo $tonesCO2_nh4 == 0 ? "" : number_format($tonesCO2_nh4,2); ?></td>
								<td><?php echo $tonesCO2_nh4_c == 0 ? "" : number_format($tonesCO2_nh4_c,2); ?></td>
							</tr>
							<tr>
								<td>
									Kg NO3- 
								</td>
								<td><?php echo $tonesCO2_no3 == 0 ? "" : number_format($tonesCO2_no3,2); ?></td>
								<td><?php echo $tonesCO2_no3_c == 0 ? "" : number_format($tonesCO2_no3_c,2); ?></td>
							</tr>
							<tr>
								<td>
									Kg TP
								</td>
								<td><?php echo $tonesCO2_tp == 0 ? "" : number_format($tonesCO2_tp,2); ?></td>
								<td><?php echo $tonesCO2_tp_c == 0 ? "" : number_format($tonesCO2_tp_c,2); ?></td>
							</tr>
							<tr>
								<td>
									E-coli
								</td>
								<td><?php echo $tonesCO2_coli == 0 ? "" : number_format($tonesCO2_coli,2); ?></td>
								<td><?php echo $tonesCO2_coli_c == 0 ? "" : number_format($tonesCO2_coli_c,2); ?></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="main-container table-container">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>CO2 Source</th>
								<th>t CO2 Eq</th>
								<th>t CO2-C Eq</th>
								<th>% Proportion</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									Materials
								</td>
								<td>
									<p class="<?=($tonesCO2_material_cons&&$all_config['cs_material_eq_min']&&$all_config['cs_material_eq_max'])? ( ($tonesCO2_material_cons<$all_config['cs_material_eq_min']||$tonesCO2_material_cons>=$all_config['cs_material_eq_max']) ? "reach-alert" :"" ) :""?>" ><?php echo $tonesCO2_material_cons == 0 ? "" : number_format($tonesCO2_material_cons,2); ?></p>
								</td>
								<td>
									<p class="<?=($tonesCO2_material_c_cons&&$all_config['cs_material_ceq_min']&&$all_config['cs_material_ceq_max'])? ( ($tonesCO2_material_c_cons<$all_config['cs_material_ceq_min']||$tonesCO2_material_c_cons>=$all_config['cs_material_ceq_max']) ? "reach-alert" :"" ) :""?>" ><?php echo $tonesCO2_material_c_cons == 0 ? "" : number_format($tonesCO2_material_c_cons,2); ?></p>
								</td>
								<td>
									<p class="<?=($tonesCO2_material_source_p&&$all_config['cs_material_pro_min']&&$all_config['cs_material_pro_max'])? ( ($tonesCO2_material_source_p<$all_config['cs_material_pro_min']||$tonesCO2_material_source_p>=$all_config['cs_material_pro_max']) ? "reach-alert" :"" ) :""?>" ><?php echo $tonesCO2_material_source_p == 0 ? "" : number_format($tonesCO2_material_source_p,2); ?></p>
								</td>
							</tr>
							<tr>
								<td>
									Energy
								</td>
								<td>
									<p class="<?=($tonesCO2_energy_source&&$all_config['cs_energy_eq_min']&&$all_config['cs_energy_eq_max'])? ( ($tonesCO2_energy_source<$all_config['cs_energy_eq_min']||$tonesCO2_energy_source>=$all_config['cs_energy_eq_max']) ? "reach-alert" :"" ) :""?>" ><?php echo $tonesCO2_energy_source == 0 ? "" : number_format($tonesCO2_energy_source,2); ?></p>
								</td>
								<td>
									<p class="<?=($tonesCO2_c_energy_source&&$all_config['cs_energy_ceq_min']&&$all_config['cs_energy_ceq_max'])? ( ($tonesCO2_c_energy_source<$all_config['cs_energy_ceq_min']||$tonesCO2_c_energy_source>=$all_config['cs_energy_ceq_max']) ? "reach-alert" :"" ) :""?>" ><?php echo $tonesCO2_c_energy_source == 0 ? "" : number_format($tonesCO2_c_energy_source,2); ?></p>
								</td>
								<td>
									<p class="<?=($tonesCO2_energy_source_p&&$all_config['cs_energy_pro_min']&&$all_config['cs_energy_pro_max'])? ( ($tonesCO2_energy_source_p<$all_config['cs_energy_pro_min']||$tonesCO2_energy_source_p>=$all_config['cs_energy_pro_max']) ? "reach-alert" :"" ) :""?>" ><?php echo $tonesCO2_energy_source_p == 0 ? "" : number_format($tonesCO2_energy_source_p,2); ?></p>
								</td>
							</tr>
							<tr>
								<td>
									Maintenance
								</td>
								<td>
									<p class="<?=($tonesCO2_maintenance_operation&&$all_config['cs_maintenance_eq_min']&&$all_config['cs_maintenance_eq_max'])? ( ($tonesCO2_maintenance_operation<$all_config['cs_maintenance_eq_min']||$tonesCO2_maintenance_operation>=$all_config['cs_maintenance_eq_max']) ? "reach-alert" :"" ) :""?>" ><?php echo $tonesCO2_maintenance_operation == 0 ? "" : number_format($tonesCO2_maintenance_operation,2); ?></p>
								</td>
								<td>
									<p class="<?=($tonesCO2_c_maintenance_operation&&$all_config['cs_maintenance_ceq_min']&&$all_config['cs_maintenance_ceq_max'])? ( ($tonesCO2_c_maintenance_operation<$all_config['cs_maintenance_ceq_min']||$tonesCO2_c_maintenance_operation>=$all_config['cs_maintenance_ceq_max']) ? "reach-alert" :"" ) :""?>" ><?php echo $tonesCO2_c_maintenance_operation == 0 ? "" : number_format($tonesCO2_c_maintenance_operation,2); ?></p>
								</td>
								<td>
									<p class="<?=($tonesCO2_maintenance_source_p&&$all_config['cs_maintenance_pro_min']&&$all_config['cs_maintenance_pro_max'])? ( ($tonesCO2_maintenance_source_p<$all_config['cs_maintenance_pro_min']||$tonesCO2_maintenance_source_p>=$all_config['cs_maintenance_pro_max']) ? "reach-alert" :"" ) :""?>" ><?php echo $tonesCO2_maintenance_source_p == 0 ? "" : number_format($tonesCO2_maintenance_source_p,2); ?></p>
								</td>
							</tr>
							<tr>
								<td>
									Wetland
								</td>
								<td>
									<p class="<?=($tonesCO2_wetland_operation&&$all_config['cs_wetland_eq_min']&&$all_config['cs_wetland_eq_max'])? ( ($tonesCO2_wetland_operation<$all_config['cs_wetland_eq_min']||$tonesCO2_wetland_operation>=$all_config['cs_wetland_eq_max']) ? "reach-alert" :"" ) :""?>" ><?php echo $tonesCO2_wetland_operation == 0 ? "" : number_format($tonesCO2_wetland_operation,2); ?></p>
								</td>
								<td>
									<p class="<?=($tonesCO2_c_wetland_operation&&$all_config['cs_wetland_ceq_min']&&$all_config['cs_wetland_ceq_max'])? ( ($tonesCO2_c_wetland_operation<$all_config['cs_wetland_ceq_min']||$tonesCO2_c_wetland_operation>=$all_config['cs_wetland_ceq_max']) ? "reach-alert" :"" ) :""?>" ><?php echo $tonesCO2_c_wetland_operation == 0 ? "" : number_format($tonesCO2_c_wetland_operation,2); ?></p>
								</td>
								<td>
									<p class="<?=($tonesCO2_wetland_source_p&&$all_config['cs_wetland_pro_min']&&$all_config['cs_wetland_pro_max'])? ( ($tonesCO2_wetland_source_p<$all_config['cs_wetland_pro_min']||$tonesCO2_wetland_source_p>=$all_config['cs_wetland_pro_max']) ? "reach-alert" :"" ) :""?>" ><?php echo $tonesCO2_wetland_source_p == 0 ? "" : number_format($tonesCO2_wetland_source_p,2); ?></p>
								</td>
							</tr>
							<tr>
								<td>
									TOTAL
								</td>
								<td>
									<p class="<?=($tonesCO2_total_source&&$all_config['cs_total_eq_min']&&$all_config['cs_total_eq_max'])? ( ($tonesCO2_total_source<$all_config['cs_total_eq_min']||$tonesCO2_total_source>=$all_config['cs_total_eq_max']) ? "reach-alert" :"" ) :""?>" ><?php echo $tonesCO2_total_source == 0 ? "" : number_format($tonesCO2_total_source,2); ?></p>
								</td>
								<td>
									<p class="<?=($tonesCO2_c_total_source&&$all_config['cs_total_ceq_min']&&$all_config['cs_total_ceq_max'])? ( ($tonesCO2_c_total_source<$all_config['cs_total_ceq_min']||$tonesCO2_c_total_source>=$all_config['cs_total_ceq_max']) ? "reach-alert" :"" ) :""?>" ><?php echo $tonesCO2_c_total_source == 0 ? "" : number_format($tonesCO2_c_total_source,2); ?></p>
								</td>
								<td>
									<p class="<?=($tonesCO2_total_source_p&&$all_config['cs_total_pro_min']&&$all_config['cs_total_pro_max'])? ( ($tonesCO2_total_source_p<$all_config['cs_total_pro_min']||$tonesCO2_total_source_p>=$all_config['cs_total_pro_max']) ? "reach-alert" :"" ) :""?>" ><?php echo $tonesCO2_total_source_p == 0 ? "" : number_format($tonesCO2_total_source_p,2); ?></p>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="main-container table-container">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>CO2 Emissions</th>
								<th>t CO2 Eq</th>
								<th>t CO2-C Eq</th>
								<th>% Proportion</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									Indirect
								</td>
								<td>
									<p class="<?=($tonesCO2_indirect_emission&&$all_config['ce_indirect_eq_min']&&$all_config['ce_indirect_eq_max'])? ( ($tonesCO2_indirect_emission<$all_config['ce_indirect_eq_min']||$tonesCO2_indirect_emission>=$all_config['ce_indirect_eq_max']) ? "reach-alert" :"" ) :""?>" ><?php echo $tonesCO2_indirect_emission == 0 ? "" : number_format($tonesCO2_indirect_emission,2); ?></p>
								</td>
								<td>
									<p class="<?=($tonesCO2_c_indirect_emission&&$all_config['ce_indirect_ceq_min']&&$all_config['ce_indirect_ceq_max'])? ( ($tonesCO2_c_indirect_emission<$all_config['ce_indirect_ceq_min']||$tonesCO2_c_indirect_emission>=$all_config['ce_indirect_ceq_max']) ? "reach-alert" :"" ) :""?>" ><?php echo $tonesCO2_c_indirect_emission == 0 ? "" : number_format($tonesCO2_c_indirect_emission,2); ?></p>
								</td>
								<td>
									<p class="<?=($tonesCO2_indirect_emission_p&&$all_config['ce_indirect_pro_min']&&$all_config['ce_indirect_pro_max'])? ( ($tonesCO2_indirect_emission_p<$all_config['ce_indirect_pro_min']||$tonesCO2_indirect_emission_p>=$all_config['ce_indirect_pro_max']) ? "reach-alert" :"" ) :""?>" ><?php echo $tonesCO2_indirect_emission_p == 0 ? "" : number_format($tonesCO2_indirect_emission_p,2); ?></p>
								</td>
							</tr>
							<tr>
								<td>
									Direct
								</td>
								<td>
									<p class="<?=($tonesCO2_direct_emission&&$all_config['ce_direct_eq_min']&&$all_config['ce_direct_eq_max'])? ( ($tonesCO2_direct_emission<$all_config['ce_direct_eq_min']||$tonesCO2_direct_emission>=$all_config['ce_direct_eq_max']) ? "reach-alert" :"" ) :""?>" ><?php echo $tonesCO2_direct_emission == 0 ? "" : number_format($tonesCO2_direct_emission,2); ?></p>
								</td>
								<td>
									<p class="<?=($tonesCO2_c_direct_emission&&$all_config['ce_direct_pro_min']&&$all_config['ce_direct_pro_max'])? ( ($tonesCO2_c_direct_emission<$all_config['ce_direct_pro_min']||$tonesCO2_c_direct_emission>=$all_config['ce_direct_pro_max']) ? "reach-alert" :"" ) :""?>" ><?php echo $tonesCO2_c_direct_emission == 0 ? "" : number_format($tonesCO2_c_direct_emission,2); ?></p>
								</td>
								<td>
									<p class="<?=($tonesCO2_direct_emission_p&&$all_config['ce_direct_ceq_min']&&$all_config['ce_direct_ceq_max'])? ( ($tonesCO2_direct_emission_p<$all_config['ce_direct_ceq_min']||$tonesCO2_direct_emission_p>=$all_config['ce_direct_ceq_max']) ? "reach-alert" :"" ) :""?>" ><?php echo $tonesCO2_direct_emission_p == 0 ? "" : number_format($tonesCO2_direct_emission_p,2); ?></p>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>  

		<div class="row">			
			<div class="col-lg-6">
				<div class="main-container">
					<h4 class="text-center">t CO2 Eq</h4>
					<div id="summary_pie"></div>
				</div>
			</div>
			
			<div class="col-lg-6">
				<div class="main-container">
					<h4>&nbsp;</h4>
					<div id="summary_bar"></div>
				</div>
			</div>
		</div>  

	</div>
</div>

<script>
	barChartDraw();
	pieChartDraw();

	function barChartDraw(){
		// set the dimensions and margins of the graph
		var margin = {top: 20, right: 20, bottom: 30, left: 60},
			width = $("#summary_bar").width() - margin.left - margin.right,
			height = 300 - margin.top - margin.bottom;

		// set the ranges
		var x = d3.scaleBand().range([0, width]).padding(0.1);
		var y = d3.scaleLinear().range([height, 0]);
				
		// append the svg object to the body of the page
		// append a 'group' element to 'svg'
		// moves the 'group' element to the top left margin
		var svg = d3.select("#summary_bar").append("svg")
			.attr("width", width + margin.left + margin.right)
			.attr("height", height + margin.top + margin.bottom)
		.append("g")
			.attr("transform", "translate(" + margin.left + "," + margin.top + ")");

		// the data
		var data = [{"param":"m3","val":<?php echo $tonesCO2_m3 == 0 ? 0 : number_format($tonesCO2_m3,2); ?>},
					{"param":"Kg DBO5","val":<?php echo $tonesCO2_dbo5 == 0 ? 0 : number_format($tonesCO2_dbo5,2); ?>},
					{"param":"Kg COD","val":<?php echo $tonesCO2_cod == 0 ? 0 : number_format($tonesCO2_cod,2); ?>}];
					
		// format the data
		data.forEach(function(d) {
			d.val = +d.val;
		});

		// Scale the range of the data in the domains
		x.domain(data.map(function(d) { return d.param; }));
		y.domain([0, d3.max(data, function(d) { return d.val; }) + 0.5]);

		// append the rectangles for the bar chart
		svg.selectAll(".bar")
			.data(data)
		.enter().append("rect")
			.attr("class", "bar")
			.attr("x", function(d) { return x(d.param); })
			.attr("width", x.bandwidth())
			.attr("y", function(d) { return y(d.val); })
			.attr("height", function(d) { return height - y(d.val); })
			.attr("fill", 'steelblue');

		// add the x Axis
		svg.append("g")
			.attr("transform", "translate(0," + height + ")")
			.call(d3.axisBottom(x));

		// add the y Axis
		svg.append("g")
			.call(d3.axisLeft(y));

		// text label for the y axis
		svg.append("text")
			.attr("transform", "rotate(-90)")
			.attr("y", 0 - margin.left)
			.attr("x",0 - (height / 2))
			.attr("dy", "1em")
			.style("text-anchor", "middle")
			.text("t CO2 Eq");
	}

	function pieChartDraw(){	
		var width = $("#summary_bar").width(),
			height = 300;
		var padding = 20;
		var pieTitle = "";
			
		var data = [{"param":"Materials","val":<?php echo $tonesCO2_material_source_p == 0 ? 0 : number_format($tonesCO2_material_source_p,2); ?>},
					{"param":"Energy","val":<?php echo $tonesCO2_energy_source_p == 0 ? 0 : number_format($tonesCO2_energy_source_p,2); ?>},
					{"param":"Maintenance","val":<?php echo $tonesCO2_maintenance_source_p == 0 ? 0 : number_format($tonesCO2_maintenance_source_p,2); ?>},
					{"param":"Wetland","val":<?php echo $tonesCO2_wetland_source_p == 0 ? 0 : number_format($tonesCO2_wetland_source_p,2); ?>}];
console.log(data);
		var radius = Math.min(width-padding, height-padding) / 2;
		var color = d3.scaleOrdinal(d3.schemeCategory10);

		var arc = d3.arc().innerRadius(0).outerRadius(radius-30);			
		var labelArc = d3.arc().outerRadius(radius - 70).innerRadius(radius - 70);
		
		var pie = d3.pie()
			.value(function(d) { 
				return d.val;
			})
			.sort(null);
			
		var svg = d3.select("#summary_pie")
			.append('svg')
			.attr('class', 'pie')
			.attr('width', width)
			.attr('height', height)
		.append('g')
			.attr('transform', 'translate(' + (width/2.6) + ',' + (height/2) + ')');

		var g = svg.selectAll(".arc")
			.data(pie(data))
		.enter().append("g")
			.attr("class", "arc");
			
		g.append("path")
			.attr("d", arc)
			.attr('fill', (d,i) => color(i));
		
		g.append("text")
			.attr("transform", function(d) { return "translate(" + labelArc.centroid(d) + ")"; })
			.attr("dx", "-1.15em")
			.attr("dy", ".35em")
			.text(function(d) { return d.value + "%";	});

		// define legend
		var legend = svg.selectAll('.legend') // selecting elements with class 'legend'
			.data(data) // refers to an array of labels from our dataset
		  .enter() // creates placeholder
			.append('g') // replace placeholders with g elements
			.attr('class', 'legend') // each g is given a legend class
			.attr('transform', function(d, i) {                   
				var height = 20 + 5; // height of element is the height of the colored square plus the spacing      
				var offset =  height * color.domain().length / 2; // vertical offset of the entire legend = height of a single element & half the total number of elements  
				var horz = 18 * 10; // the legend is shifted to the left to make room for the text
				var vert = i * height - offset; // the top of the element is hifted up or down from the center using the offset defiend earlier and the index of the current element 'i'               
				return 'translate(' + horz + ',' + vert + ')'; //return translation       
			});

		// adding colored squares to legend
		legend.append('rect') // append rectangle squares to legend                                   
			.attr('width', 15) // width of rect size is defined above                        
			.attr('height', 15) // height of rect size is defined above                      
			.style('fill', (d,i) => color(i)) // each fill is passed a color
		
		// adding text to legend
		legend.append('text')                                    
			.attr('x', 20 + 5)
			.attr('y', 20 - 7)
			.text(function(d) { return d.param; }); // return label		

	}

</script>