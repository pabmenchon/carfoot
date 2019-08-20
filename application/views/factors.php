<div class="page-content">
		
	<div class="container-fluid">
		<div class="page-content__header">
			
			<form method="get" action="" class="form-inline">
				<h2 class="page-content__header-heading">Emmision Factors </h2>
				<input type="text" name="factors" class="form-control ml-5" placeholder="Search Factors" value="<?=(isset($_GET['factors'])?$_GET['factors']:"")?>">
				<button type="submit" class="btn"><i class="mdi mdi-magnify" aria-hidden="true"></i></button>
			</form>
			
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#addfactors">
			  NEW
			</button>
			<?php if ($this->session->flashdata('factor_error')) { 
				echo "<script> setTimeout(function(){alert('".$this->session->flashdata('factor_error')."');},2000); </script>";
			} ?>
			
			<!-- Modal -->
			<div class="modal fade" id="addfactors" tabindex="-1" role="dialog" aria-labelledby="addfactorlabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					    	<?php echo form_open('factors/insert_data'); ?>
						      <div class="modal-header">
						        <h5 class="modal-title" id="addfactorlabel">Add New Factors</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
						        <div class="form-group">
						        	<label>Type:</label>
						        	<select name="type" class="form-control" required>
						        		<option value="materials">Materials</option>
						        		<option value='materials_density_factors' >Materials density factors</option>
						        		<option value='liquids_density_factors' >Liquids density factors</option>
						        		<option value='woods' >Woods</option>
						        		<option value='rocks_stones' >Rocks stones</option>
						        		<option value='artificials_stones' >Artificials stones</option>
						        		<option value='construction_materials' >Construction materials</option>
						        		<option value='bulk_materials' >Bulk materials</option>
						        		<option value='partitionss' >Partitionss</option>
						        		<option value='facings' >Facings</option>
						        		<option value='concrete' >Concrete</option>
						        		<option value='mortars_mixes' >Mortars mixes</option>
						        		<option value='pavements' >Pavements</option>
						        		<option value='ceilings' >Ceilings</option>
						        		<option value='floors' >Floors</option>
						        		<option value='pipes' >Pipes</option>
						        		<option value='manholes' >Manholes</option>
						        		<option value='pumps' >Pumps</option>
						        		<option value='wetland_emissions' >Wetland emissions</option>
						        		<option value='office_emissions' >Office emissions</option>
						        		<option value='pretreatment' >Pretreatment</option>
						        		<option value='special_select_materials' >Special select materials</option>
						        		<option value='liners' >Liners</option>
						        		<option value='liners1' >Liners1</option>
						        		<option value='doors' >doors</option>
						        		<option value='windows' >Windows</option>
						        		<option value='griller' >Griller</option>
						        		<option value='cables' >Cables</option>
						        		<option value='electrical_panels' >Electrical panels</option>
						        		<option value='lamps' >Lamps</option>
						        		<option value='streetlights' >Streetlights</option>
						        		<option value='lights' >Lights</option>
						        		<option value='vehicules' >Vehicules</option>
						        		<option value='vehicules1' >Vehicules1</option>
						        		<option value='fuel' >Fuel</option>
						        		<option value='constructed_wetland' >Constructed wetland</option>
						        		<option value='vehicules2' >Vehicules2</option>
						        		<option value='pipes1' >Pipes1</option>
						        		<option value='polimers' >Polimers</option>
						        		<option value='polimers1' >Polimers1</option>
						        		<option value='polimers2' >Polimers2</option>
						        	</select>
						        </div>
						        <div class="form-group">
						        	<label>Emmision Source: </label>
						        	<input type="text" name="source" class="form-control" placeholder="Source"  required>
						        </div>
						        <div class="form-group">
						        	<label>Factor: </label>
						        	<input type="number" name="factor" step="0.01" class="form-control" required min=0>
						        </div>
						        <div class="form-group">
						        	<label>Unit: </label>
						        	<input type="text" name="unit" class="form-control" placeholder="unit" >
						        </div>
						        <div class="form-group">
						        	<label>Reference: </label>
						        	<input type="number" name="reference" class="form-control" min=0 >
						        </div>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
						        <button type="submit" class="btn btn-success">Save changes</button>
						      </div>
						     </form>
					    </div>
				  </div>
			</div>
		</div>
		<?php if ($this->session->tempdata('factor_success')) { ?>
			<div class="alert alert-success" role="alert">
			 <?=$this->session->tempdata('factor_success')?>
		</div>
		<?php } ?>

		
		<div class="row main-container">
			<div class="col-lg-12">
				<?php foreach($all_data_lists as $tbl_title => $tbl_datas){?>
				<div class="table-container mt-3">
					<label><b><?php echo $tbl_title; ?></b></label>
					<table class="table table-bordered">    
						<thead class="thead-dark">
							<tr>
								<th>Emission source</th>
								<th>Factor</th>
								<th>Unit</th>
								<th>Reference</th>
							</tr>
						</thead> 
						<tbody>
							<?php foreach($tbl_datas as $tbl_data){?>
							<tr>
								<td><?php echo htmlspecialchars($tbl_data->source, ENT_QUOTES, 'UTF-8') ; ?></td>
								<td><?php echo htmlspecialchars($tbl_data->factor, ENT_QUOTES, 'UTF-8') ; ?></td>
								<td><?php echo htmlspecialchars($tbl_data->unit, ENT_QUOTES, 'UTF-8') ; ?></td>
								<td><?php echo htmlspecialchars($tbl_data->reference, ENT_QUOTES, 'UTF-8') ; ?>									

								<button type="button" class="btn btn-info btn-edit-factor" data-toggle="modal" data-target="#editfactor" data-factortable="<?=str_replace(" ","_",strtolower($tbl_title))?>" data-factorid="<?=$tbl_data->id ?>" >
								  EDIT
								</button>
								<button type="button" class="btn btn-danger btn-delete-factor" data-factortable="<?=str_replace(" ","_",strtolower($tbl_title))?>" data-factorid="<?=$tbl_data->id ?>">DELETE</button>

								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
				<?php } ?>		
			</div>
			
		</div> 

		<!-- Modal -->
		<div class="modal fade" id="editfactor" tabindex="-1" role="dialog" aria-labelledby="editmodallabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="editmodallabel">Edit Factor</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <?php echo form_open('factors/edit_data'); ?>
			      <div class="modal-body">
			      	<input type="hidden" name="factorid" id="factor-edit-id">
			        <div class="form-group">
						<label>Type:</label>
						<select name="type" class="form-control" id="type-edit" required>
							<option value="materials">Materials</option>
							<option value='materials_density_factors' >Materials density factors</option>
							<option value='liquids_density_factors' >Liquids density factors</option>
							<option value='woods' >Woods</option>
							<option value='rocks_stones' >Rocks stones</option>
							<option value='artificials_stones' >Artificials stones</option>
							<option value='construction_materials' >Construction materials</option>
							<option value='bulk_materials' >Bulk materials</option>
							<option value='partitionss' >Partitionss</option>
							<option value='facings' >Facings</option>
							<option value='concrete' >Concrete</option>
							<option value='mortars_mixes' >Mortars mixes</option>
							<option value='pavements' >Pavements</option>
							<option value='ceilings' >Ceilings</option>
							<option value='floors' >Floors</option>
							<option value='pipes' >Pipes</option>
							<option value='manholes' >Manholes</option>
							<option value='pumps' >Pumps</option>
							<option value='wetland_emissions' >Wetland emissions</option>
							<option value='office_emissions' >Office emissions</option>
							<option value='pretreatment' >Pretreatment</option>
							<option value='special_select_materials' >Special select materials</option>
							<option value='liners' >Liners</option>
							<option value='liners1' >Liners1</option>
							<option value='doors' >doors</option>
							<option value='windows' >Windows</option>
							<option value='griller' >Griller</option>
							<option value='cables' >Cables</option>
							<option value='electrical_panels' >Electrical panels</option>
							<option value='lamps' >Lamps</option>
							<option value='streetlights' >Streetlights</option>
							<option value='lights' >Lights</option>
							<option value='vehicules' >Vehicules</option>
							<option value='vehicules1' >Vehicules1</option>
							<option value='fuel' >Fuel</option>
							<option value='constructed_wetland' >Constructed wetland</option>
							<option value='vehicules2' >Vehicules2</option>
							<option value='pipes1' >Pipes1</option>
							<option value='polimers' >Polimers</option>
							<option value='polimers1' >Polimers1</option>
							<option value='polimers2' >Polimers2</option>
						</select>
					</div>
					<div class="form-group">
						<label>Emmision Source: </label>
						<input type="text" name="source" id="source-edit" class="form-control" placeholder="Source"  required>
					</div>
					<div class="form-group">
						<label>Factor: </label>
						<input type="number" name="factor" step="0.01" id="factor-edit" class="form-control" required min=0 >
					</div>
					<div class="form-group">
						<label>Unit: </label>
						<input type="text" name="unit" class="form-control" id="unit-edit" placeholder="unit" >
					</div>
					<div class="form-group">
						<label>Reference: </label>
						<input type="number" name="reference"  class="form-control" id="reference-edit" min=0 >
					</div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary" >Save changes</button>
			      </div>
			  </form>
		    </div>
		  </div>
		</div>


	</div>
</div>