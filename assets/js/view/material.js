$(document).ready(function(){
	$('#project_toggle').on("click", function () {
		$("#project_div").toggle();
		$(this).toggleClass('ua-icon-tree-plus');
	});
	$('#hut_toggle').on("click", function () {
		$("#hut_div").toggle();
		$(this).toggleClass('ua-icon-tree-plus');
	});
	$('#excavation_toggle').on("click", function () {
		$("#excavation_div").toggle();
		$(this).toggleClass('ua-icon-tree-plus');
	});
	$('#electricity_toggle').on("click", function () {
		$("#electricity_div").toggle();
		$(this).toggleClass('ua-icon-tree-plus');
	});
	$('#pretreatment_toggle').on("click", function () {
		$("#pretreatment_div").toggle();
		$(this).toggleClass('ua-icon-tree-plus');
	});
	$('#wetland_toggle').on("click", function () {
		$("#wetland_div").toggle();
		$(this).toggleClass('ua-icon-tree-plus');
	});
	$('#pipes_toggle').on("click", function () {
		$("#pipes_div").toggle();
		$(this).toggleClass('ua-icon-tree-plus');
	});
	$('#pumps_toggle').on("click", function () {
		$("#pumps_div").toggle();
		$(this).toggleClass('ua-icon-tree-plus');
	});
	$('#electrical_toggle').on("click", function () {
		$("#electrical_div").toggle();
		$(this).toggleClass('ua-icon-tree-plus');
	});

	//alert('ddd');
	//console.log($("input[name='p_hours12']").val());
	//console.log($("select[name='partitions_elem1']").find('option:selected').text());
	
	function getFactor(factor_data){
		var factor_datas	= factor_data.split(' | '),
			factor			= factor_datas[1];
		
			return factor ? factor : 0;
	}
	
	// table project;
	$("input[name='p_hours12']").keyup(function(){
		var p_hours12	= $("input[name='p_hours12']").val();
		var c350		= getFactor($("#office_emission_c350").val());
		var sum			= Math.round((parseFloat(p_hours12) * parseFloat(c350) + 1.85) / 10) / 100;
		
		$("input[name='p_subtotal12']").val(sum);
	});
	
	// table hut
	var partitions_total1_fuc = function(){
		var length1				= $("input[name='length1']").val() == "" ? 0 : $("input[name='length1']").val();
		var height1				= $("input[name='height1']").val() == "" ? 0 : $("input[name='height1']").val();
		var partitions_elem1	= getFactor($("select[name='partitions_elem1']").find('option:selected').text());
		var c62					= getFactor($("#materials_c62").val());
		var sum					= Math.round(parseFloat(partitions_elem1) * parseFloat(length1) * parseFloat(height1) * 4 * parseFloat(c62) / 10) / 100;
		
		$("input[name='partitions_total1']").val(sum);
	}
	
	$("input[name='length1']").keyup(partitions_total1_fuc);
	$("input[name='height1']").keyup(partitions_total1_fuc);
	$("select[name='partitions_elem1']").change(partitions_total1_fuc);
	
	var roof_total1_fuc = function(){
		var length1		= $("input[name='length1']").val() == "" ? 0 : $("input[name='length1']").val();
		var width1		= $("input[name='width1']").val() == "" ? 0 : $("input[name='width1']").val();
		var roof_elem1	= getFactor($("select[name='roof_elem1']").find('option:selected').text());
		var roof_mat1	= getFactor($("select[name='roof_mat1']").find('option:selected').text());
		var sum = Math.round(parseFloat(length1) * parseFloat(width1) * parseFloat(roof_elem1) * parseFloat(roof_mat1) / 10) / 100;
		
		$("input[name='roof_total1']").val(sum);
	}
	
	$("input[name='width1']").keyup(roof_total1_fuc);
	$("input[name='length1']").keyup(roof_total1_fuc);
	$("select[name='roof_elem1']").change(roof_total1_fuc);
	$("select[name='roof_mat1']").change(roof_total1_fuc);
	
	var facing_total1_fuc = function(){
		var length1			= $("input[name='length1']").val() == "" ? 0 : $("input[name='length1']").val();
		var height1			= $("input[name='height1']").val() == "" ? 0 : $("input[name='height1']").val();
		var facing_elem1	= getFactor($("select[name='facing_elem1']").find('option:selected').text());
		var facing_mat1		= getFactor($("select[name='facing_mat1']").find('option:selected').text());
		var sum				= Math.round(parseFloat(length1) * parseFloat(height1) * parseFloat(facing_elem1) * parseFloat(facing_mat1) * 4 / 10) / 100;
		
		$("input[name='facing_total1']").val(sum);
	}
	
	$("input[name='length1']").keyup(facing_total1_fuc);
	$("input[name='height1']").keyup(facing_total1_fuc);
	$("select[name='facing_elem1']").change(facing_total1_fuc);
	$("select[name='facing_mat1']").change(facing_total1_fuc);
	
	var floor_total1_fuc = function(){
		var length1		= $("input[name='length1']").val() == "" ? 0 : $("input[name='length1']").val();
		var width1		= $("input[name='width1']").val() == "" ? 0 : $("input[name='width1']").val();
		var floors_num1	= $("input[name='floors_num1']").val() == "" ? 0 : $("input[name='floors_num1']").val();
		var floor_elem1	= getFactor($("select[name='floor_elem1']").find('option:selected').text());
		var floor_mat1	= getFactor($("select[name='floor_mat1']").find('option:selected').text());
		var sum = Math.round(parseFloat(length1) * parseFloat(width1) * parseFloat(floors_num1) * parseFloat(floor_elem1) * parseFloat(floor_mat1) / 10) / 100;
		
		$("input[name='floor_total1']").val(sum);
	}
	
	$("input[name='width1']").keyup(floor_total1_fuc);
	$("input[name='length1']").keyup(floor_total1_fuc);
	$("input[name='floors_num1']").keyup(floor_total1_fuc);
	$("select[name='floor_elem1']").change(floor_total1_fuc);
	$("select[name='floor_mat1']").change(floor_total1_fuc);
	
	var pavement_total1_fuc = function(){
		var length1			= $("input[name='length1']").val() == "" ? 0 : $("input[name='length1']").val();
		var width1			= $("input[name='width1']").val() == "" ? 0 : $("input[name='width1']").val();
		var pavement_elem1	= getFactor($("select[name='pavement_elem1']").find('option:selected').text());
		var pavement_mat1	= getFactor($("select[name='pavement_mat1']").find('option:selected').text());
		var sum = Math.round(parseFloat(length1) * parseFloat(width1) * parseFloat(pavement_elem1) * parseFloat(pavement_mat1) / 10) / 100;
		
		$("input[name='pavement_total1']").val(sum);
	}
	
	$("input[name='width1']").keyup(pavement_total1_fuc);
	$("input[name='length1']").keyup(pavement_total1_fuc);
	$("select[name='pavement_elem1']").change(pavement_total1_fuc);
	$("select[name='pavement_mat1']").change(pavement_total1_fuc);
	
	var pilars_total1_fuc = function(){
		var pilars25_num1	= $("input[name='pilars25_num1']").val() == "" ? 0 : $("input[name='pilars25_num1']").val();
		var pilars30_num1	= $("input[name='pilars30_num1']").val() == "" ? 0 : $("input[name='pilars30_num1']").val();
		var sum = Math.round((0.3 * 0.3 * 2.5 * parseFloat(pilars30_num1) + 0.25 * 0.25 * 2.5 * parseFloat(pilars25_num1)) * 2500 * 0.51 / 10) / 100;
		
		$("input[name='pilars_total1']").val(sum);
	}
	
	$("input[name='pilars25_num1']").keyup(pilars_total1_fuc);
	$("input[name='pilars30_num1']").keyup(pilars_total1_fuc);
	
	var paint1_fuc = function(){
		var length1		= $("input[name='length1']").val() == "" ? 0 : $("input[name='length1']").val();
		var height1		= $("input[name='height1']").val() == "" ? 0 : $("input[name='height1']").val();
		var width1		= $("input[name='width1']").val() == "" ? 0 : $("input[name='width1']").val();
		var sum = Math.round(parseFloat(length1) * parseFloat(height1) * 2 + parseFloat(length1) * parseFloat(width1) * 2);
		
		$("input[name='paint1']").val(sum);
	}

	$("input[name='length1']").keyup(paint1_fuc);
	$("input[name='height1']").keyup(paint1_fuc);
	$("input[name='width1']").keyup(paint1_fuc);

	var paint_total1_fuc = function(){
		var paint1			= $("input[name='paint1']").val() == "" ? 0 : $("input[name='paint1']").val();
		var paint_elem1		= getFactor($("select[name='paint_elem1']").find('option:selected').text());
		var paint_mat1		= getFactor($("select[name='paint_mat1']").find('option:selected').text());
		var sum = Math.round(parseFloat(paint1) * parseFloat(paint_elem1) * parseFloat(paint_mat1) / 10) / 100;
		
		$("input[name='paint_total1']").val(sum);
	}
	
	$("input[name='length1']").keyup(paint_total1_fuc);
	$("input[name='height1']").keyup(paint_total1_fuc);
	$("input[name='width1']").keyup(paint_total1_fuc);
	$("input[name='paint1']").keyup(paint_total1_fuc);
	$("select[name='paint_elem1']").change(paint_total1_fuc);
	$("select[name='paint_mat1']").change(paint_total1_fuc);
	
	var door_total1_fuc = function(){
		var doors_num1	= $("input[name='doors_num1']").val() == "" ? 0 : $("input[name='doors_num1']").val();
		var door_elem1	= getFactor($("select[name='door_elem1']").find('option:selected').text());
		var door_mat1	= getFactor($("select[name='door_mat1']").find('option:selected').text());
		var sum			= Math.round(parseFloat(doors_num1) * parseFloat(door_elem1) * parseFloat(door_mat1) / 10) / 100;
		
		$("input[name='door_total1']").val(sum);
	}
	
	$("input[name='doors_num1']").keyup(door_total1_fuc);
	$("select[name='door_elem1']").change(door_total1_fuc);
	$("select[name='door_mat1']").change(door_total1_fuc);
	
	var windows_total1_fuc = function(){
		var windows_num1	= $("input[name='windows_num1']").val() == "" ? 0 : $("input[name='windows_num1']").val();
		var windows_elem	= getFactor($("select[name='windows_elem']").find('option:selected').text());
		var sum				= Math.round(parseFloat(windows_num1) * parseFloat(windows_elem) * 10.4 / 10) / 100;
		
		$("input[name='windows_total1']").val(sum);
	}
	
	$("input[name='windows_num1']").keyup(windows_total1_fuc);
	$("select[name='windows_elem']").change(windows_total1_fuc);
	
	var tonesCO21_fuc = function(){
		var partitions_total1	= $("input[name='partitions_total1']").val() == "" ? 0 : $("input[name='partitions_total1']").val();
		var roof_total1			= $("input[name='roof_total1']").val() == "" ? 0 : $("input[name='roof_total1']").val();
		var facing_total1		= $("input[name='facing_total1']").val() == "" ? 0 : $("input[name='facing_total1']").val();
		var floor_total1		= $("input[name='floor_total1']").val() == "" ? 0 : $("input[name='floor_total1']").val();
		var pavement_total1		= $("input[name='pavement_total1']").val() == "" ? 0 : $("input[name='pavement_total1']").val();
		var sum					= Math.round((parseFloat(partitions_total1) + parseFloat(roof_total1) + parseFloat(facing_total1) + parseFloat(floor_total1) + parseFloat(pavement_total1)) * 100) / 100;
		
		$("input[name='tonesCO21']").val(sum);
	}
	
	$("input[name='length1']").keyup(tonesCO21_fuc);
	$("input[name='height1']").keyup(tonesCO21_fuc);
	$("select[name='partitions_elem1']").change(tonesCO21_fuc);
	
	$("input[name='width1']").keyup(tonesCO21_fuc);
	$("select[name='roof_elem1']").change(tonesCO21_fuc);
	$("select[name='roof_mat1']").change(tonesCO21_fuc);
	
	$("select[name='facing_elem1']").change(tonesCO21_fuc);
	$("select[name='facing_mat1']").change(tonesCO21_fuc);
	
	$("input[name='floors_num1']").keyup(tonesCO21_fuc);
	$("select[name='floor_elem1']").change(tonesCO21_fuc);
	$("select[name='floor_mat1']").change(tonesCO21_fuc);
	
	$("select[name='pavement_elem1']").change(tonesCO21_fuc);
	$("select[name='pavement_mat1']").change(tonesCO21_fuc);	
	
	// table excavation
	var excavator1_total2_fuc = function(){
		var excavator12			= $("input[name='excavator12']").val() == "" ? 0 : $("input[name='excavator12']").val();
		var excavator1_model2	= getFactor($("select[name='excavator1_model2']").find('option:selected').text());
		var excavator1_fuel2	= getFactor($("select[name='excavator1_fuel2']").find('option:selected').text());
		var excavator1_time2	= $("input[name='excavator1_time2']").val() == "" ? 0 : $("input[name='excavator1_time2']").val();
		var sum					= Math.round(parseFloat(excavator12) * 0.18 * parseFloat(excavator1_time2) * parseFloat(excavator1_model2) * 0.5 * parseFloat(excavator1_fuel2) / 10) / 100;
		
		$("input[name='excavator1_total2']").val(sum);
	}
	
	$("input[name='excavator12']").keyup(excavator1_total2_fuc);
	$("input[name='excavator1_time2']").keyup(excavator1_total2_fuc);
	$("select[name='excavator1_model2']").change(excavator1_total2_fuc);
	$("select[name='excavator1_fuel2']").change(excavator1_total2_fuc);
	
	var excavator2_total2_fuc = function(){
		var excavator22			= $("input[name='excavator22']").val() == "" ? 0 : $("input[name='excavator22']").val();
		var excavator2_model2	= getFactor($("select[name='excavator2_model2']").find('option:selected').text());
		var excavator2_fuel2	= getFactor($("select[name='excavator2_fuel2']").find('option:selected').text());
		var excavator2_time2	= $("input[name='excavator2_time2']").val() == "" ? 0 : $("input[name='excavator2_time2']").val();
		var sum					= Math.round(parseFloat(excavator22) * 0.18 * parseFloat(excavator2_time2) * parseFloat(excavator2_model2) * 0.5 * parseFloat(excavator2_fuel2) / 10) / 100;
		
		$("input[name='excavator2_total2']").val(sum);
	}
	
	$("input[name='excavator22']").keyup(excavator2_total2_fuc);
	$("input[name='excavator2_model2']").change(excavator2_total2_fuc);
	$("select[name='excavator2_fuel2']").change(excavator2_total2_fuc);
	$("select[name='excavator2_time2']").keyup(excavator2_total2_fuc);
	
	var truck1_total2_fuc = function(){
		var truck12			= $("input[name='truck12']").val() == "" ? 0 : $("input[name='truck12']").val();
		var truck1_model2	= getFactor($("select[name='truck1_model2']").find('option:selected').text());
		var truck1_fuel2	= getFactor($("select[name='truck1_fuel2']").find('option:selected').text());
		var truck1_time2	= $("input[name='truck1_time2']").val() == "" ? 0 : $("input[name='truck1_time2']").val();
		var sum					= Math.round(parseFloat(truck12) * 0.18 * parseFloat(truck1_time2) * parseFloat(truck1_model2) * 0.5 * parseFloat(truck1_fuel2) / 10) / 100;
		
		$("input[name='truck1_total2']").val(sum);
	}
	
	$("input[name='truck12']").keyup(truck1_total2_fuc);
	$("select[name='truck1_model2']").change(truck1_total2_fuc);
	$("select[name='truck1_fuel2']").change(truck1_total2_fuc);
	$("input[name='truck1_time2']").keyup(truck1_total2_fuc);
	
	var truck2_total2_fuc = function(){
		var truck22			= $("input[name='truck22']").val() == "" ? 0 : $("input[name='truck22']").val();
		var truck2_model2	= getFactor($("select[name='truck2_model2']").find('option:selected').text());
		var truck2_fuel2	= getFactor($("select[name='truck2_fuel2']").find('option:selected').text());
		var truck2_time2	= $("input[name='truck2_time2']").val() == "" ? 0 : $("input[name='truck2_time2']").val();
		var sum					= Math.round(parseFloat(truck22) * 0.18 * parseFloat(truck2_time2) * parseFloat(truck2_model2) * 0.5 * parseFloat(truck2_fuel2) / 10) / 100;
		
		$("input[name='truck2_total2']").val(sum);
	}
	
	$("input[name='truck22']").keyup(truck2_total2_fuc);
	$("select[name='truck2_model2']").change(truck2_total2_fuc);
	$("select[name='truck2_fuel2']").change(truck2_total2_fuc);
	$("input[name='truck2_time2']").keyup(truck2_total2_fuc);
	
	var tonesCO22_fuc = function(){
		var excavator1_total2	= $("input[name='excavator1_total2']").val() == "" ? 0 : $("input[name='excavator1_total2']").val();
		var excavator2_total2			= $("input[name='excavator2_total2']").val() == "" ? 0 : $("input[name='excavator2_total2']").val();
		var truck1_total2		= $("input[name='truck1_total2']").val() == "" ? 0 : $("input[name='truck1_total2']").val();
		var truck2_total2		= $("input[name='truck2_total2']").val() == "" ? 0 : $("input[name='truck2_total2']").val();
		
		var sum					= Math.round((parseFloat(excavator1_total2) + parseFloat(excavator2_total2) + parseFloat(truck1_total2) + parseFloat(truck2_total2)) * 100) / 100;
		
		$("input[name='tonesCO22']").val(sum);
	}
	
	$("input[name='excavator12']").keyup(tonesCO22_fuc);
	$("select[name='excavator1_model2']").change(tonesCO22_fuc);
	$("select[name='excavator1_fuel2']").change(tonesCO22_fuc);
	$("input[name='excavator1_time2']").keyup(tonesCO22_fuc);

	$("input[name='excavator22']").keyup(tonesCO22_fuc);
	$("select[name='excavator2_model2']").change(tonesCO22_fuc);
	$("select[name='excavator2_fuel2']").change(tonesCO22_fuc);
	$("input[name='excavator2_time2']").keyup(tonesCO22_fuc);

	$("input[name='truck12']").keyup(tonesCO22_fuc);
	$("select[name='truck1_model2']").change(tonesCO22_fuc);
	$("select[name='truck1_fuel2']").change(tonesCO22_fuc);
	$("input[name='truck1_time2']").keyup(tonesCO22_fuc);

	$("input[name='truck22']").keyup(tonesCO22_fuc);
	$("select[name='truck2_model2']").change(tonesCO22_fuc);
	$("select[name='truck2_fuel2']").change(tonesCO22_fuc);
	$("input[name='truck2_time2']").keyup(tonesCO22_fuc);

	// table Electricity
	var device1_total3_fuc = function(){
		var device1_num3	= $("input[name='device1_num3']").val() == "" ? 0 : $("input[name='device1_num3']").val();
		var device1_cons3	= $("input[name='device1_cons3']").val() == "" ? 0 : $("input[name='device1_cons3']").val();
		var device1_src3	= getFactor($("select[name='device1_src3']").find('option:selected').text());
		var device1_time3	= $("input[name='device1_time3']").val() == "" ? 0 : $("input[name='device1_time3']").val();
		var sum				= Math.round(parseFloat(device1_num3) * parseFloat(device1_cons3) * parseFloat(device1_src3) * parseFloat(device1_time3) / 10) / 100;
		
		$("input[name='device1_total3']").val(sum);
	}
	
	$("input[name='device1_num3']").keyup(device1_total3_fuc);
	$("input[name='device1_cons3']").keyup(device1_total3_fuc);
	$("select[name='device1_src3']").change(device1_total3_fuc);
	$("input[name='device1_time3']").keyup(device1_total3_fuc);

	var device2_total3_fuc = function(){
		var device2_num3	= $("input[name='device2_num3']").val() == "" ? 0 : $("input[name='device2_num3']").val();
		var device2_cons3	= $("input[name='device2_cons3']").val() == "" ? 0 : $("input[name='device2_cons3']").val();
		var device2_src3	= getFactor($("select[name='device2_src3']").find('option:selected').text());
		var device2_time3	= $("input[name='device2_time3']").val() == "" ? 0 : $("input[name='device2_time3']").val();
		var sum				= Math.round(parseFloat(device2_num3) * parseFloat(device2_cons3) * parseFloat(device2_src3) * parseFloat(device2_time3) / 10) / 100;
		
		$("input[name='device2_total3']").val(sum);
	}
	
	$("input[name='device2_num3']").keyup(device2_total3_fuc);
	$("input[name='device2_cons3']").keyup(device2_total3_fuc);
	$("select[name='device2_src3']").change(device2_total3_fuc);
	$("input[name='device2_time3']").keyup(device2_total3_fuc);

	var device3_total3_fuc = function(){
		var device3_num3	= $("input[name='device3_num3']").val() == "" ? 0 : $("input[name='device3_num3']").val();
		var device3_cons3	= $("input[name='device3_cons3']").val() == "" ? 0 : $("input[name='device3_cons3']").val();
		var device3_src3	= getFactor($("select[name='device3_src3']").find('option:selected').text());
		var device3_time3	= $("input[name='device3_time3']").val() == "" ? 0 : $("input[name='device3_time3']").val();
		var sum				= Math.round(parseFloat(device3_num3) * parseFloat(device3_cons3) * parseFloat(device3_src3) * parseFloat(device3_time3) / 10) / 100;
		
		$("input[name='device3_total3']").val(sum);
	}
	
	$("input[name='device3_num3']").keyup(device3_total3_fuc);
	$("input[name='device3_cons3']").keyup(device3_total3_fuc);
	$("select[name='device3_src3']").change(device3_total3_fuc);
	$("input[name='device3_time3']").keyup(device3_total3_fuc);

	var tonesCO23_fuc = function(){
		var device1_total3	= $("input[name='device1_total3']").val() == "" ? 0 : $("input[name='device1_total3']").val();
		var device2_total3	= $("input[name='device2_total3']").val() == "" ? 0 : $("input[name='device2_total3']").val();
		var device3_total3  = $("input[name='device3_total3']").val() == "" ? 0 : $("input[name='device3_total3']").val();
		
		var sum				= Math.round((parseFloat(device1_total3) + parseFloat(device2_total3) + parseFloat(device3_total3)) * 100) / 100;
		
		$("input[name='tonesCO23']").val(sum);
	}

	$("input[name='device1_num3']").keyup(tonesCO23_fuc);
	$("input[name='device1_cons3']").keyup(tonesCO23_fuc);
	$("select[name='device1_src3']").change(tonesCO23_fuc);
	$("input[name='device1_time3']").keyup(tonesCO23_fuc);

	$("input[name='device2_num3']").keyup(tonesCO23_fuc);
	$("input[name='device2_cons3']").keyup(tonesCO23_fuc);
	$("select[name='device2_src3']").change(tonesCO23_fuc);
	$("input[name='device2_time3']").keyup(tonesCO23_fuc);

	$("input[name='device3_num3']").keyup(tonesCO23_fuc);
	$("input[name='device3_cons3']").keyup(tonesCO23_fuc);
	$("select[name='device3_src3']").change(tonesCO23_fuc);
	$("input[name='device3_time3']").keyup(tonesCO23_fuc);

	// table Pretreatment (tank)
	var tank1_total4_fuc = function(){
		var tank1_num4	= $("input[name='tank1_num4']").val() == "" ? 0 : $("input[name='tank1_num4']").val();
		var tank1_elem4	= getFactor($("select[name='tank1_elem4']").find('option:selected').text());
		var sum			= Math.round(parseFloat(tank1_num4) * parseFloat(tank1_elem4) * 15.06 / 10) / 100;
		
		$("input[name='tank1_total4']").val(sum);
	}
	
	$("input[name='tank1_num4']").keyup(tank1_total4_fuc);
	$("select[name='tank1_elem4']").change(tank1_total4_fuc);

	var tank2_total4_fuc = function(){
		var tank2_num4	= $("input[name='tank2_num4']").val() == "" ? 0 : $("input[name='tank2_num4']").val();
		var tank2_elem4	= getFactor($("select[name='tank2_elem4']").find('option:selected').text());
		var sum			= Math.round(parseFloat(tank2_num4) * parseFloat(tank2_elem4) * 15.06 / 10) / 100;
		
		$("input[name='tank2_total4']").val(sum);
	}
	
	$("input[name='tank2_num4']").keyup(tank2_total4_fuc);
	$("select[name='tank2_elem4']").change(tank2_total4_fuc);

	var tank3_total4_fuc = function(){
		var tank3_num4	= $("input[name='tank3_num4']").val() == "" ? 0 : $("input[name='tank3_num4']").val();
		var tank3_elem4	= getFactor($("select[name='tank3_elem4']").find('option:selected').text());
		var sum			= Math.round(parseFloat(tank3_num4) * parseFloat(tank3_elem4) * 15.06 / 10) / 100;
		
		$("input[name='tank3_total4']").val(sum);
	}
	
	$("input[name='tank3_num4']").keyup(tank3_total4_fuc);
	$("select[name='tank3_elem4']").change(tank3_total4_fuc);

	var tonesCO24_fuc = function(){
		var tank1_total4	= $("input[name='tank1_total4']").val() == "" ? 0 : $("input[name='tank1_total4']").val();
		var tank2_total4	= $("input[name='tank2_total4']").val() == "" ? 0 : $("input[name='tank2_total4']").val();
		var tank3_total4  	= $("input[name='tank3_total4']").val() == "" ? 0 : $("input[name='tank3_total4']").val();
		
		var sum				= Math.round((parseFloat(tank1_total4) + parseFloat(tank2_total4) + parseFloat(tank3_total4)) * 100) / 100;
		
		$("input[name='tonesCO24']").val(sum);
	}

	$("input[name='tank1_num4']").keyup(tonesCO24_fuc);
	$("select[name='tank1_elem4']").change(tonesCO24_fuc);

	$("input[name='tank2_num4']").keyup(tonesCO24_fuc);
	$("select[name='tank2_elem4']").change(tonesCO24_fuc);

	$("input[name='tank3_num4']").keyup(tonesCO24_fuc);
	$("select[name='tank3_elem4']").change(tonesCO24_fuc);

	// table Pretreatment (Built "in situ")
	var tank_total5_fuc = function(){
		var length5		= $("input[name='length5']").val() == "" ? 0 : $("input[name='length5']").val();
		var height5		= $("input[name='height5']").val() == "" ? 0 : $("input[name='height5']").val();
		var width5		= $("input[name='width5']").val() == "" ? 0 : $("input[name='width5']").val();
		var tank_elem5	= getFactor($("select[name='tank_elem5']").find('option:selected').text());
		var tank_mat5	= getFactor($("select[name='tank_mat5']").find('option:selected').text());
		var sum			= Math.round(((parseFloat(length5) * parseFloat(height5) * 2) + (parseFloat(length5) * parseFloat(width5) * 2) + (parseFloat(height5) * parseFloat(width5) * 2)) * parseFloat(tank_elem5) * parseFloat(tank_mat5)  / 10) / 100;
		
		$("input[name='tank_total5']").val(sum);
	}
	
	$("input[name='length5']").keyup(tank_total5_fuc);
	$("input[name='height5']").keyup(tank_total5_fuc);
	$("input[name='width5']").keyup(tank_total5_fuc);
	$("select[name='tank_elem5']").change(tank_total5_fuc);
	$("select[name='tank_mat5']").change(tank_total5_fuc);

	var griller_total5_fuc = function(){
		var griller5		= $("input[name='griller5']").val() == "" ? 0 : $("input[name='griller5']").val();
		var griller_elem5	= getFactor($("select[name='griller_elem5']").find('option:selected').text());
		var griller_mat5	= getFactor($("select[name='griller_mat5']").find('option:selected').text());
		var sum				= Math.round(parseFloat(griller5) * parseFloat(griller_elem5) * parseFloat(griller_mat5) / 10) / 100;
		
		$("input[name='griller_total5']").val(sum);
	}
	
	$("input[name='griller5']").keyup(griller_total5_fuc);
	$("select[name='griller_elem5']").change(griller_total5_fuc);
	$("select[name='griller_mat5']").change(griller_total5_fuc);

	var tonesCO25_fuc = function(){
		var tank_total5		= $("input[name='tank_total5']").val() == "" ? 0 : $("input[name='tank_total5']").val();
		var griller_total5	= $("input[name='griller_total5']").val() == "" ? 0 : $("input[name='griller_total5']").val();
		
		var sum				= Math.round((parseFloat(tank_total5) + parseFloat(griller_total5)) * 100) / 100;
		
		$("input[name='tonesCO25']").val(sum);
	}

	$("input[name='length5']").keyup(tonesCO25_fuc);
	$("input[name='height5']").keyup(tonesCO25_fuc);
	$("input[name='width5']").keyup(tonesCO25_fuc);
	$("select[name='tank_elem5']").change(tonesCO25_fuc);
	$("select[name='tank_mat5']").change(tonesCO25_fuc);

	$("input[name='griller5']").keyup(tonesCO25_fuc);
	$("select[name='griller_elem5']").change(tonesCO25_fuc);
	$("select[name='griller_mat5']").change(tonesCO25_fuc);

	// table Wetland   (bed 1)  slope 45°
	var geotextil_total6_fuc = function(){
		var length6				= $("input[name='length6']").val() == "" ? 0 : $("input[name='length6']").val();
		var width6				= $("input[name='width6']").val() == "" ? 0 : $("input[name='width6']").val();
		var geotextil_elem6		= getFactor($("select[name='geotextil_elem6']").find('option:selected').text());
		var geotextil_mat6		= getFactor($("select[name='geotextil_mat6']").find('option:selected').text());
		var sum					= Math.round((((parseFloat(length6) * parseFloat(width6) + (40/100 * (parseFloat(length6) * parseFloat(width6))))) * 2 * parseFloat(geotextil_elem6) * parseFloat(geotextil_mat6)) / 10) / 100;
		
		$("input[name='geotextil_total6']").val(sum);
	}
	
	$("input[name='length6']").keyup(geotextil_total6_fuc);
	$("input[name='width6']").keyup(geotextil_total6_fuc);
	$("select[name='geotextil_elem6']").change(geotextil_total6_fuc);
	$("select[name='geotextil_mat6']").change(geotextil_total6_fuc);

	var liner_total6_fuc = function(){
		var length6				= $("input[name='length6']").val() == "" ? 0 : $("input[name='length6']").val();
		var width6				= $("input[name='width6']").val() == "" ? 0 : $("input[name='width6']").val();
		var liner_elem6		= getFactor($("select[name='liner_elem6']").find('option:selected').text());
		var liner_mat6		= getFactor($("select[name='liner_mat6']").find('option:selected').text());
		var sum					= Math.round(((parseFloat(length6) * parseFloat(width6) + (parseFloat(length6) * parseFloat(width6) * 40/100)) * parseFloat(liner_elem6) * parseFloat(liner_mat6)) / 10) / 100;
		
		$("input[name='liner_total6']").val(sum);
	}
	
	$("input[name='length6']").keyup(liner_total6_fuc);
	$("input[name='width6']").keyup(liner_total6_fuc);
	$("select[name='liner_elem6']").change(liner_total6_fuc);
	$("select[name='liner_mat6']").change(liner_total6_fuc);

	var leak_liner_total6_fuc = function(){
		var length6				= $("input[name='length6']").val() == "" ? 0 : $("input[name='length6']").val();
		var width6				= $("input[name='width6']").val() == "" ? 0 : $("input[name='width6']").val();
		var leak_liner_elem6	= getFactor($("select[name='leak_liner_elem6']").find('option:selected').text());
		var leak_liner_mat6		= getFactor($("select[name='leak_liner_mat6']").find('option:selected').text());
		var sum					= Math.round(((parseFloat(length6) * parseFloat(width6) + (parseFloat(length6) * parseFloat(width6) * 40/100)) * parseFloat(leak_liner_elem6) * parseFloat(leak_liner_mat6)) / 10) / 100;
		
		$("input[name='leak_liner_total6']").val(sum);
	}
	
	$("input[name='length6']").keyup(leak_liner_total6_fuc);
	$("input[name='width6']").keyup(leak_liner_total6_fuc);
	$("select[name='leak_liner_elem6']").change(leak_liner_total6_fuc);
	$("select[name='leak_liner_mat6']").change(leak_liner_total6_fuc);

	var btm_area6_fuc = function(){
		var length6	= $("input[name='length6']").val() == "" ? 0 : $("input[name='length6']").val();
		var width6	= $("input[name='width6']").val() == "" ? 0 : $("input[name='width6']").val();
		var sum		= parseFloat(length6) * parseFloat(width6);
		
		$("input[name='btm_area6']").val(sum);
	}
	$("input[name='length6']").keyup(btm_area6_fuc);
	$("input[name='width6']").keyup(btm_area6_fuc);

	var top_area6_fuc = function(){
		var length6	= $("input[name='length6']").val() == "" ? 0 : $("input[name='length6']").val();
		var width6	= $("input[name='width6']").val() == "" ? 0 : $("input[name='width6']").val();
		var deep6	= $("input[name='deep6']").val() == "" ? 0 : $("input[name='deep6']").val();
		var sum		= (parseFloat(length6) + 2 * parseFloat(deep6)) * (parseFloat(width6) + 2 * parseFloat(deep6));
		
		$("input[name='top_area6']").val(sum);
	}	
	$("input[name='length6']").keyup(top_area6_fuc);
	$("input[name='width6']").keyup(top_area6_fuc);
	$("input[name='deep6']").keyup(top_area6_fuc);

	var bed1_total6_fuc = function(){
		var layer16		= $("input[name='layer16']").val() == "" ? 0 : $("input[name='layer16']").val();
		var btm_area6	= $("input[name='btm_area6']").val() == "" ? 0 : $("input[name='btm_area6']").val();
		var top_area6	= $("input[name='top_area6']").val() == "" ? 0 : $("input[name='top_area6']").val();
		var bed1_elem6	= getFactor($("select[name='bed1_elem6']").find('option:selected').text());
		var sum			= Math.round(((parseFloat(layer16) / 3) * (parseFloat(btm_area6) + parseFloat(top_area6) + Math.pow(parseFloat(btm_area6) * parseFloat(top_area6), 0.5)) * parseFloat(bed1_elem6) * 0.03) / 10) / 100;
		
		$("input[name='bed1_total6']").val(sum);
	}

	$("input[name='layer16']").keyup(bed1_total6_fuc);
	$("input[name='length6']").keyup(bed1_total6_fuc);
	$("input[name='width6']").keyup(bed1_total6_fuc);
	$("input[name='deep6']").keyup(bed1_total6_fuc);
	$("select[name='bed1_elem6']").change(bed1_total6_fuc);

	var bed2_total6_fuc = function(){
		var layer26		= $("input[name='layer26']").val() == "" ? 0 : $("input[name='layer26']").val();
		var btm_area6	= $("input[name='btm_area6']").val() == "" ? 0 : $("input[name='btm_area6']").val();
		var top_area6	= $("input[name='top_area6']").val() == "" ? 0 : $("input[name='top_area6']").val();
		var bed2_elem6	= getFactor($("select[name='bed2_elem6']").find('option:selected').text());
		var sum			= Math.round(((parseFloat(layer26) / 3) * (parseFloat(btm_area6) + parseFloat(top_area6) + Math.pow(parseFloat(btm_area6) * parseFloat(top_area6), 0.5)) * parseFloat(bed2_elem6) * 0.03) / 10) / 100;
		
		$("input[name='bed2_total6']").val(sum);
	}

	$("input[name='layer26']").keyup(bed2_total6_fuc);
	$("input[name='length6']").keyup(bed2_total6_fuc);
	$("input[name='width6']").keyup(bed2_total6_fuc);
	$("input[name='deep6']").keyup(bed2_total6_fuc);
	$("select[name='bed2_elem6']").change(bed2_total6_fuc);

	var bed3_total6_fuc = function(){
		var layer36		= $("input[name='layer36']").val() == "" ? 0 : $("input[name='layer36']").val();
		var btm_area6	= $("input[name='btm_area6']").val() == "" ? 0 : $("input[name='btm_area6']").val();
		var top_area6	= $("input[name='top_area6']").val() == "" ? 0 : $("input[name='top_area6']").val();
		var bed3_elem6	= getFactor($("select[name='bed3_elem6']").find('option:selected').text());
		var sum			= Math.round(((parseFloat(layer36) / 3) * (parseFloat(btm_area6) + parseFloat(top_area6) + Math.pow(parseFloat(btm_area6) * parseFloat(top_area6), 0.5)) * parseFloat(bed3_elem6) * 0.03) / 10) / 100;
		
		$("input[name='bed3_total6']").val(sum);
	}

	$("input[name='layer36']").keyup(bed3_total6_fuc);
	$("input[name='length6']").keyup(bed3_total6_fuc);
	$("input[name='width6']").keyup(bed3_total6_fuc);
	$("input[name='deep6']").keyup(bed3_total6_fuc);
	$("select[name='bed3_elem6']").change(bed3_total6_fuc);

	var bed4_total6_fuc = function(){
		var layer46		= $("input[name='layer46']").val() == "" ? 0 : $("input[name='layer46']").val();
		var btm_area6	= $("input[name='btm_area6']").val() == "" ? 0 : $("input[name='btm_area6']").val();
		var top_area6	= $("input[name='top_area6']").val() == "" ? 0 : $("input[name='top_area6']").val();
		var bed4_elem6	= getFactor($("select[name='bed4_elem6']").find('option:selected').text());
		var sum			= Math.round(((parseFloat(layer46) / 3) * (parseFloat(btm_area6) + parseFloat(top_area6) + Math.pow(parseFloat(btm_area6) * parseFloat(top_area6), 0.5)) * parseFloat(bed4_elem6) * 0.03) / 10) / 100;
		
		$("input[name='bed4_total6']").val(sum);
	}

	$("input[name='layer46']").keyup(bed4_total6_fuc);
	$("input[name='length6']").keyup(bed4_total6_fuc);
	$("input[name='width6']").keyup(bed4_total6_fuc);
	$("input[name='deep6']").keyup(bed4_total6_fuc);
	$("select[name='bed4_elem6']").change(bed4_total6_fuc);

	var bed5_total6_fuc = function(){
		var layer56		= $("input[name='layer56']").val() == "" ? 0 : $("input[name='layer56']").val();
		var btm_area6	= $("input[name='btm_area6']").val() == "" ? 0 : $("input[name='btm_area6']").val();
		var top_area6	= $("input[name='top_area6']").val() == "" ? 0 : $("input[name='top_area6']").val();
		var bed5_elem6	= getFactor($("select[name='bed5_elem6']").find('option:selected').text());
		var sum			= Math.round(((parseFloat(layer56) / 3) * (parseFloat(btm_area6) + parseFloat(top_area6) + Math.pow(parseFloat(btm_area6) * parseFloat(top_area6), 0.5)) * parseFloat(bed5_elem6) * 0.03) / 10) / 100;
		
		$("input[name='bed5_total6']").val(sum);
	}

	$("input[name='layer56']").keyup(bed5_total6_fuc);
	$("input[name='length6']").keyup(bed5_total6_fuc);
	$("input[name='width6']").keyup(bed5_total6_fuc);
	$("input[name='deep6']").keyup(bed5_total6_fuc);
	$("select[name='bed5_elem6']").change(bed5_total6_fuc);

	var stone_total6_fuc = function(){
		var length6			= $("input[name='length6']").val() == "" ? 0 : $("input[name='length6']").val();
		var width6			= $("input[name='width6']").val() == "" ? 0 : $("input[name='width6']").val();
		var stone_width6	= $("input[name='stone_width6']").val() == "" ? 0 : $("input[name='stone_width6']").val();
		var stone_height6	= $("input[name='stone_height6']").val() == "" ? 0 : $("input[name='stone_height6']").val();
		var stone_elem6		= getFactor($("select[name='stone_elem6']").find('option:selected').text());
		var sum				= Math.round((((parseFloat(length6) * 2) + (parseFloat(width6) * 2)) * (parseFloat(stone_width6) / 100) * (parseFloat(stone_height6) / 100) * parseFloat(stone_elem6) * 0.03) / 10) / 100;
		
		$("input[name='stone_total6']").val(sum);
	}

	$("input[name='length6']").keyup(stone_total6_fuc);
	$("input[name='width6']").keyup(stone_total6_fuc);
	$("input[name='stone_width6']").keyup(stone_total6_fuc);
	$("input[name='stone_height6']").keyup(stone_total6_fuc);
	$("select[name='stone_elem6']").change(stone_total6_fuc);

	var tonesCO26_fuc = function(){
		var geotextil_total6	= $("input[name='geotextil_total6']").val() == "" ? 0 : $("input[name='geotextil_total6']").val();
		var liner_total6		= $("input[name='liner_total6']").val() == "" ? 0 : $("input[name='liner_total6']").val();
		var leak_liner_total6	= $("input[name='leak_liner_total6']").val() == "" ? 0 : $("input[name='leak_liner_total6']").val();
		var bed1_total6			= $("input[name='bed1_total6']").val() == "" ? 0 : $("input[name='bed1_total6']").val();
		var bed2_total6			= $("input[name='bed2_total6']").val() == "" ? 0 : $("input[name='bed2_total6']").val();
		var bed3_total6			= $("input[name='bed3_total6']").val() == "" ? 0 : $("input[name='bed3_total6']").val();
		var bed4_total6			= $("input[name='bed4_total6']").val() == "" ? 0 : $("input[name='bed4_total6']").val();
		var bed5_total6			= $("input[name='bed5_total6']").val() == "" ? 0 : $("input[name='bed5_total6']").val();
		var stone_total6		= $("input[name='stone_total6']").val() == "" ? 0 : $("input[name='stone_total6']").val();
		var beds_no6			= $("input[name='beds_no6']").val() == "" ? 0 : $("input[name='beds_no6']").val();
		
		var sum					= Math.round((parseFloat(geotextil_total6) + parseFloat(liner_total6) + parseFloat(leak_liner_total6) + parseFloat(bed1_total6) + parseFloat(bed2_total6) + parseFloat(bed3_total6) + parseFloat(bed4_total6) + parseFloat(bed5_total6) + parseFloat(stone_total6)) * parseFloat(beds_no6) * 100) / 100;
		
		$("input[name='tonesCO26']").val(sum);
	}

	$("input[name='length6']").keyup(tonesCO26_fuc);
	$("input[name='width6']").keyup(tonesCO26_fuc);
	$("input[name='deep6']").keyup(tonesCO26_fuc);
	$("select[name='geotextil_elem6']").change(tonesCO26_fuc);
	$("select[name='geotextil_mat6']").change(tonesCO26_fuc);

	$("select[name='liner_elem6']").change(tonesCO26_fuc);
	$("select[name='liner_mat6']").change(tonesCO26_fuc);

	$("select[name='leak_liner_elem6']").change(tonesCO26_fuc);
	$("select[name='leak_liner_mat6']").change(tonesCO26_fuc);

	$("input[name='layer16']").keyup(tonesCO26_fuc);
	$("select[name='bed1_elem6']").change(tonesCO26_fuc);
	$("input[name='layer26']").keyup(tonesCO26_fuc);
	$("select[name='bed2_elem6']").change(tonesCO26_fuc);
	$("input[name='layer36']").keyup(tonesCO26_fuc);
	$("select[name='bed3_elem6']").change(tonesCO26_fuc);
	$("input[name='layer46']").keyup(tonesCO26_fuc);
	$("select[name='bed4_elem6']").change(tonesCO26_fuc);
	$("input[name='layer56']").keyup(tonesCO26_fuc);
	$("select[name='bed5_elem6']").change(tonesCO26_fuc);

	$("input[name='stone_width6']").keyup(tonesCO26_fuc);
	$("input[name='stone_height6']").keyup(tonesCO26_fuc);
	$("select[name='stone_elem6']").change(tonesCO26_fuc);

	$("input[name='beds_no6']").keyup(tonesCO26_fuc);

	// table Wetland   (bed 2)  slope 45°
	var geotextil_total7_fuc = function(){
		var length7				= $("input[name='length7']").val() == "" ? 0 : $("input[name='length7']").val();
		var width7				= $("input[name='width7']").val() == "" ? 0 : $("input[name='width7']").val();
		var geotextil_elem7		= getFactor($("select[name='geotextil_elem7']").find('option:selected').text());
		var geotextil_mat7		= getFactor($("select[name='geotextil_mat7']").find('option:selected').text());
		var sum					= Math.round((((parseFloat(length7) * parseFloat(width7) + (40/100 * (parseFloat(length7) * parseFloat(width7))))) * 2 * parseFloat(geotextil_elem7) * parseFloat(geotextil_mat7)) / 10) / 100;
		
		$("input[name='geotextil_total7']").val(sum);
	}
	
	$("input[name='length7']").keyup(geotextil_total7_fuc);
	$("input[name='width7']").keyup(geotextil_total7_fuc);
	$("select[name='geotextil_elem7']").change(geotextil_total7_fuc);
	$("select[name='geotextil_mat7']").change(geotextil_total7_fuc);

	var liner_total7_fuc = function(){
		var length7				= $("input[name='length7']").val() == "" ? 0 : $("input[name='length7']").val();
		var width7				= $("input[name='width7']").val() == "" ? 0 : $("input[name='width7']").val();
		var liner_elem7		= getFactor($("select[name='liner_elem7']").find('option:selected').text());
		var liner_mat7		= getFactor($("select[name='liner_mat7']").find('option:selected').text());
		var sum					= Math.round(((parseFloat(length7) * parseFloat(width7) + (parseFloat(length7) * parseFloat(width7) * 40/100)) * parseFloat(liner_elem7) * parseFloat(liner_mat7)) / 10) / 100;
		
		$("input[name='liner_total7']").val(sum);
	}
	
	$("input[name='length7']").keyup(liner_total7_fuc);
	$("input[name='width7']").keyup(liner_total7_fuc);
	$("select[name='liner_elem7']").change(liner_total7_fuc);
	$("select[name='liner_mat7']").change(liner_total7_fuc);

	var leak_liner_total7_fuc = function(){
		var length7				= $("input[name='length7']").val() == "" ? 0 : $("input[name='length7']").val();
		var width7				= $("input[name='width7']").val() == "" ? 0 : $("input[name='width7']").val();
		var leak_liner_elem7	= getFactor($("select[name='leak_liner_elem7']").find('option:selected').text());
		var leak_liner_mat7		= getFactor($("select[name='leak_liner_mat7']").find('option:selected').text());
		var sum					= Math.round(((parseFloat(length7) * parseFloat(width7) + (parseFloat(length7) * parseFloat(width7) * 40/100)) * parseFloat(leak_liner_elem7) * parseFloat(leak_liner_mat7)) / 10) / 100;
		
		$("input[name='leak_liner_total7']").val(sum);
	}
	
	$("input[name='length7']").keyup(leak_liner_total7_fuc);
	$("input[name='width7']").keyup(leak_liner_total7_fuc);
	$("select[name='leak_liner_elem7']").change(leak_liner_total7_fuc);
	$("select[name='leak_liner_mat7']").change(leak_liner_total7_fuc);

	var btm_area7_fuc = function(){
		var length7	= $("input[name='length7']").val() == "" ? 0 : $("input[name='length7']").val();
		var width7	= $("input[name='width7']").val() == "" ? 0 : $("input[name='width7']").val();
		var sum		= parseFloat(length7) * parseFloat(width7);
		
		$("input[name='btm_area7']").val(sum);
	}
	$("input[name='length7']").keyup(btm_area7_fuc);
	$("input[name='width7']").keyup(btm_area7_fuc);

	var top_area7_fuc = function(){
		var length7	= $("input[name='length7']").val() == "" ? 0 : $("input[name='length7']").val();
		var width7	= $("input[name='width7']").val() == "" ? 0 : $("input[name='width7']").val();
		var deep7	= $("input[name='deep7']").val() == "" ? 0 : $("input[name='deep7']").val();
		var sum		= (parseFloat(length7) + 2 * parseFloat(deep7)) * (parseFloat(width7) + 2 * parseFloat(deep7));
		
		$("input[name='top_area7']").val(sum);
	}	
	$("input[name='length7']").keyup(top_area7_fuc);
	$("input[name='width7']").keyup(top_area7_fuc);
	$("input[name='deep7']").keyup(top_area7_fuc);

	var bed1_total7_fuc = function(){
		var layer17		= $("input[name='layer17']").val() == "" ? 0 : $("input[name='layer17']").val();
		var btm_area7	= $("input[name='btm_area7']").val() == "" ? 0 : $("input[name='btm_area7']").val();
		var top_area7	= $("input[name='top_area7']").val() == "" ? 0 : $("input[name='top_area7']").val();
		var bed1_elem7	= getFactor($("select[name='bed1_elem7']").find('option:selected').text());
		var sum			= Math.round(((parseFloat(layer17) / 3) * (parseFloat(btm_area7) + parseFloat(top_area7) + Math.pow(parseFloat(btm_area7) * parseFloat(top_area7), 0.5)) * parseFloat(bed1_elem7) * 0.03) / 10) / 100;
		
		$("input[name='bed1_total7']").val(sum);
	}

	$("input[name='layer17']").keyup(bed1_total7_fuc);
	$("input[name='length7']").keyup(bed1_total7_fuc);
	$("input[name='width7']").keyup(bed1_total7_fuc);
	$("input[name='deep7']").keyup(bed1_total7_fuc);
	$("select[name='bed1_elem7']").change(bed1_total7_fuc);

	var bed2_total7_fuc = function(){
		var layer27		= $("input[name='layer27']").val() == "" ? 0 : $("input[name='layer27']").val();
		var btm_area7	= $("input[name='btm_area7']").val() == "" ? 0 : $("input[name='btm_area7']").val();
		var top_area7	= $("input[name='top_area7']").val() == "" ? 0 : $("input[name='top_area7']").val();
		var bed2_elem7	= getFactor($("select[name='bed2_elem7']").find('option:selected').text());
		var sum			= Math.round(((parseFloat(layer27) / 3) * (parseFloat(btm_area7) + parseFloat(top_area7) + Math.pow(parseFloat(btm_area7) * parseFloat(top_area7), 0.5)) * parseFloat(bed2_elem7) * 0.03) / 10) / 100;
		
		$("input[name='bed2_total7']").val(sum);
	}

	$("input[name='layer27']").keyup(bed2_total7_fuc);
	$("input[name='length7']").keyup(bed2_total7_fuc);
	$("input[name='width7']").keyup(bed2_total7_fuc);
	$("input[name='deep7']").keyup(bed2_total7_fuc);
	$("select[name='bed2_elem7']").change(bed2_total7_fuc);

	var bed3_total7_fuc = function(){
		var layer37		= $("input[name='layer37']").val() == "" ? 0 : $("input[name='layer37']").val();
		var btm_area7	= $("input[name='btm_area7']").val() == "" ? 0 : $("input[name='btm_area7']").val();
		var top_area7	= $("input[name='top_area7']").val() == "" ? 0 : $("input[name='top_area7']").val();
		var bed3_elem7	= getFactor($("select[name='bed3_elem7']").find('option:selected').text());
		var sum			= Math.round(((parseFloat(layer37) / 3) * (parseFloat(btm_area7) + parseFloat(top_area7) + Math.pow(parseFloat(btm_area7) * parseFloat(top_area7), 0.5)) * parseFloat(bed3_elem7) * 0.03) / 10) / 100;
		
		$("input[name='bed3_total7']").val(sum);
	}

	$("input[name='layer37']").keyup(bed3_total7_fuc);
	$("input[name='length7']").keyup(bed3_total7_fuc);
	$("input[name='width7']").keyup(bed3_total7_fuc);
	$("input[name='deep7']").keyup(bed3_total7_fuc);
	$("select[name='bed3_elem7']").change(bed3_total7_fuc);

	var bed4_total7_fuc = function(){
		var layer47		= $("input[name='layer47']").val() == "" ? 0 : $("input[name='layer47']").val();
		var btm_area7	= $("input[name='btm_area7']").val() == "" ? 0 : $("input[name='btm_area7']").val();
		var top_area7	= $("input[name='top_area7']").val() == "" ? 0 : $("input[name='top_area7']").val();
		var bed4_elem7	= getFactor($("select[name='bed4_elem7']").find('option:selected').text());
		var sum			= Math.round(((parseFloat(layer47) / 3) * (parseFloat(btm_area7) + parseFloat(top_area7) + Math.pow(parseFloat(btm_area7) * parseFloat(top_area7), 0.5)) * parseFloat(bed4_elem7) * 0.03) / 10) / 100;
		
		$("input[name='bed4_total7']").val(sum);
	}

	$("input[name='layer47']").keyup(bed4_total7_fuc);
	$("input[name='length7']").keyup(bed4_total7_fuc);
	$("input[name='width7']").keyup(bed4_total7_fuc);
	$("input[name='deep7']").keyup(bed4_total7_fuc);
	$("select[name='bed4_elem7']").change(bed4_total7_fuc);

	var bed5_total7_fuc = function(){
		var layer57		= $("input[name='layer57']").val() == "" ? 0 : $("input[name='layer57']").val();
		var btm_area7	= $("input[name='btm_area7']").val() == "" ? 0 : $("input[name='btm_area7']").val();
		var top_area7	= $("input[name='top_area7']").val() == "" ? 0 : $("input[name='top_area7']").val();
		var bed5_elem7	= getFactor($("select[name='bed5_elem7']").find('option:selected').text());
		var sum			= Math.round(((parseFloat(layer57) / 3) * (parseFloat(btm_area7) + parseFloat(top_area7) + Math.pow(parseFloat(btm_area7) * parseFloat(top_area7), 0.5)) * parseFloat(bed5_elem7) * 0.03) / 10) / 100;
		
		$("input[name='bed5_total7']").val(sum);
	}

	$("input[name='layer57']").keyup(bed5_total7_fuc);
	$("input[name='length7']").keyup(bed5_total7_fuc);
	$("input[name='width7']").keyup(bed5_total7_fuc);
	$("input[name='deep7']").keyup(bed5_total7_fuc);
	$("select[name='bed5_elem7']").change(bed5_total7_fuc);

	var stone_total7_fuc = function(){
		var length7			= $("input[name='length7']").val() == "" ? 0 : $("input[name='length7']").val();
		var width7			= $("input[name='width7']").val() == "" ? 0 : $("input[name='width7']").val();
		var stone_width7	= $("input[name='stone_width7']").val() == "" ? 0 : $("input[name='stone_width7']").val();
		var stone_height7	= $("input[name='stone_height7']").val() == "" ? 0 : $("input[name='stone_height7']").val();
		var stone_elem7		= getFactor($("select[name='stone_elem7']").find('option:selected').text());
		var sum				= Math.round((((parseFloat(length7) * 2) + (parseFloat(width7) * 2)) * (parseFloat(stone_width7) / 100) * (parseFloat(stone_height7) / 100) * parseFloat(stone_elem7) * 0.03) / 10) / 100;
		
		$("input[name='stone_total7']").val(sum);
	}

	$("input[name='length7']").keyup(stone_total7_fuc);
	$("input[name='width7']").keyup(stone_total7_fuc);
	$("input[name='stone_width7']").keyup(stone_total7_fuc);
	$("input[name='stone_height7']").keyup(stone_total7_fuc);
	$("select[name='stone_elem7']").change(stone_total7_fuc);

	var tonesCO27_fuc = function(){
		var geotextil_total7	= $("input[name='geotextil_total7']").val() == "" ? 0 : $("input[name='geotextil_total7']").val();
		var liner_total7		= $("input[name='liner_total7']").val() == "" ? 0 : $("input[name='liner_total7']").val();
		var leak_liner_total7	= $("input[name='leak_liner_total7']").val() == "" ? 0 : $("input[name='leak_liner_total7']").val();
		var bed1_total7			= $("input[name='bed1_total7']").val() == "" ? 0 : $("input[name='bed1_total7']").val();
		var bed2_total7			= $("input[name='bed2_total7']").val() == "" ? 0 : $("input[name='bed2_total7']").val();
		var bed3_total7			= $("input[name='bed3_total7']").val() == "" ? 0 : $("input[name='bed3_total7']").val();
		var bed4_total7			= $("input[name='bed4_total7']").val() == "" ? 0 : $("input[name='bed4_total7']").val();
		var bed5_total7			= $("input[name='bed5_total7']").val() == "" ? 0 : $("input[name='bed5_total7']").val();
		var stone_total7		= $("input[name='stone_total7']").val() == "" ? 0 : $("input[name='stone_total7']").val();
		var beds_no7			= $("input[name='beds_no7']").val() == "" ? 0 : $("input[name='beds_no7']").val();
		
		var sum					= Math.round((parseFloat(geotextil_total7) + parseFloat(liner_total7) + parseFloat(leak_liner_total7) + parseFloat(bed1_total7) + parseFloat(bed2_total7) + parseFloat(bed3_total7) + parseFloat(bed4_total7) + parseFloat(bed5_total7) + parseFloat(stone_total7)) * parseFloat(beds_no7) * 100) / 100;
		
		$("input[name='tonesCO27']").val(sum);
	}

	$("input[name='length7']").keyup(tonesCO27_fuc);
	$("input[name='width7']").keyup(tonesCO27_fuc);
	$("input[name='deep7']").keyup(tonesCO27_fuc);
	$("select[name='geotextil_elem7']").change(tonesCO27_fuc);
	$("select[name='geotextil_mat7']").change(tonesCO27_fuc);

	$("select[name='liner_elem7']").change(tonesCO27_fuc);
	$("select[name='liner_mat7']").change(tonesCO27_fuc);

	$("select[name='leak_liner_elem7']").change(tonesCO27_fuc);
	$("select[name='leak_liner_mat7']").change(tonesCO27_fuc);

	$("input[name='layer17']").keyup(tonesCO27_fuc);
	$("select[name='bed1_elem7']").change(tonesCO27_fuc);
	$("input[name='layer27']").keyup(tonesCO27_fuc);
	$("select[name='bed2_elem7']").change(tonesCO27_fuc);
	$("input[name='layer37']").keyup(tonesCO27_fuc);
	$("select[name='bed3_elem7']").change(tonesCO27_fuc);
	$("input[name='layer47']").keyup(tonesCO27_fuc);
	$("select[name='bed4_elem7']").change(tonesCO27_fuc);
	$("input[name='layer57']").keyup(tonesCO27_fuc);
	$("select[name='bed5_elem7']").change(tonesCO27_fuc);

	$("input[name='stone_width7']").keyup(tonesCO27_fuc);
	$("input[name='stone_height7']").keyup(tonesCO27_fuc);
	$("select[name='stone_elem7']").change(tonesCO27_fuc);

	$("input[name='beds_no7']").keyup(tonesCO27_fuc);

	// table Wetland   (bed 3)  slope 90°
	var geotextil_total8_fuc = function(){
		var length8				= $("input[name='length8']").val() == "" ? 0 : $("input[name='length8']").val();
		var width8				= $("input[name='width8']").val() == "" ? 0 : $("input[name='width8']").val();
		var geotextil_elem8		= getFactor($("select[name='geotextil_elem8']").find('option:selected').text());
		var geotextil_mat8		= getFactor($("select[name='geotextil_mat8']").find('option:selected').text());
		var sum					= Math.round((((parseFloat(length8) * parseFloat(width8) + (40/100 * (parseFloat(length8) * parseFloat(width8))))) * 2 * parseFloat(geotextil_elem8) * parseFloat(geotextil_mat8)) / 10) / 100;
		
		$("input[name='geotextil_total8']").val(sum);
	}

	$("input[name='length8']").keyup(geotextil_total8_fuc);
	$("input[name='width8']").keyup(geotextil_total8_fuc);
	$("select[name='geotextil_elem8']").change(geotextil_total8_fuc);
	$("select[name='geotextil_mat8']").change(geotextil_total8_fuc);

	var liner_total8_fuc = function(){
		var length8				= $("input[name='length8']").val() == "" ? 0 : $("input[name='length8']").val();
		var width8				= $("input[name='width8']").val() == "" ? 0 : $("input[name='width8']").val();
		var liner_elem8		= getFactor($("select[name='liner_elem8']").find('option:selected').text());
		var liner_mat8		= getFactor($("select[name='liner_mat8']").find('option:selected').text());
		var sum					= Math.round(((parseFloat(length8) * parseFloat(width8) + (parseFloat(length8) * parseFloat(width8) * 40/100)) * parseFloat(liner_elem8) * parseFloat(liner_mat8)) / 10) / 100;
		
		$("input[name='liner_total8']").val(sum);
	}

	$("input[name='length8']").keyup(liner_total8_fuc);
	$("input[name='width8']").keyup(liner_total8_fuc);
	$("select[name='liner_elem8']").change(liner_total8_fuc);
	$("select[name='liner_mat8']").change(liner_total8_fuc);

	var leak_liner_total8_fuc = function(){
		var length8				= $("input[name='length8']").val() == "" ? 0 : $("input[name='length8']").val();
		var width8				= $("input[name='width8']").val() == "" ? 0 : $("input[name='width8']").val();
		var leak_liner_elem8	= getFactor($("select[name='leak_liner_elem8']").find('option:selected').text());
		var leak_liner_mat8		= getFactor($("select[name='leak_liner_mat8']").find('option:selected').text());
		var sum					= Math.round(((parseFloat(length8) * parseFloat(width8) + (parseFloat(length8) * parseFloat(width8) * 40/100)) * parseFloat(leak_liner_elem8) * parseFloat(leak_liner_mat8)) / 10) / 100;
		
		$("input[name='leak_liner_total8']").val(sum);
	}

	$("input[name='length8']").keyup(leak_liner_total8_fuc);
	$("input[name='width8']").keyup(leak_liner_total8_fuc);
	$("select[name='leak_liner_elem8']").change(leak_liner_total8_fuc);
	$("select[name='leak_liner_mat8']").change(leak_liner_total8_fuc);

	var btm_area8_fuc = function(){
		var length8	= $("input[name='length8']").val() == "" ? 0 : $("input[name='length8']").val();
		var width8	= $("input[name='width8']").val() == "" ? 0 : $("input[name='width8']").val();
		var sum		= parseFloat(length8) * parseFloat(width8);
		
		$("input[name='btm_area8']").val(sum);
	}
	$("input[name='length8']").keyup(btm_area8_fuc);
	$("input[name='width8']").keyup(btm_area8_fuc);

	var top_area8_fuc = function(){
		var length8	= $("input[name='length8']").val() == "" ? 0 : $("input[name='length8']").val();
		var width8	= $("input[name='width8']").val() == "" ? 0 : $("input[name='width8']").val();
		//var deep8	= $("input[name='deep8']").val() == "" ? 0 : $("input[name='deep8']").val();
		var sum		= parseFloat(length8) * parseFloat(width8);
		
		$("input[name='top_area8']").val(sum);
	}	
	$("input[name='length8']").keyup(top_area8_fuc);
	$("input[name='width8']").keyup(top_area8_fuc);
	//$("input[name='deep8']").keyup(top_area8_fuc);

	var bed1_total8_fuc = function(){
		var layer18		= $("input[name='layer18']").val() == "" ? 0 : $("input[name='layer18']").val();
		var length8		= $("input[name='length8']").val() == "" ? 0 : $("input[name='length8']").val();
		var width8		= $("input[name='width8']").val() == "" ? 0 : $("input[name='width8']").val();
		var bed1_elem8	= getFactor($("select[name='bed1_elem8']").find('option:selected').text());
		var sum			= Math.round((parseFloat(layer18) * parseFloat(length8) * parseFloat(width8) * parseFloat(bed1_elem8) * 0.03) / 10) / 100;
		
		$("input[name='bed1_total8']").val(sum);
	}

	$("input[name='layer18']").keyup(bed1_total8_fuc);
	$("input[name='length8']").keyup(bed1_total8_fuc);
	$("input[name='width8']").keyup(bed1_total8_fuc);
	$("select[name='bed1_elem8']").change(bed1_total8_fuc);

	var bed2_total8_fuc = function(){
		var layer28		= $("input[name='layer28']").val() == "" ? 0 : $("input[name='layer28']").val();
		var length8		= $("input[name='length8']").val() == "" ? 0 : $("input[name='length8']").val();
		var width8		= $("input[name='width8']").val() == "" ? 0 : $("input[name='width8']").val();
		var bed2_elem8	= getFactor($("select[name='bed2_elem8']").find('option:selected').text());
		var sum			= Math.round((parseFloat(layer28) * parseFloat(length8) * parseFloat(width8) * parseFloat(bed2_elem8) * 0.03) / 10) / 100;
		
		$("input[name='bed2_total8']").val(sum);
	}

	$("input[name='layer28']").keyup(bed2_total8_fuc);
	$("input[name='length8']").keyup(bed2_total8_fuc);
	$("input[name='width8']").keyup(bed2_total8_fuc);
	$("select[name='bed2_elem8']").change(bed2_total8_fuc);

	var bed3_total8_fuc = function(){
		var layer38		= $("input[name='layer38']").val() == "" ? 0 : $("input[name='layer38']").val();
		var length8		= $("input[name='length8']").val() == "" ? 0 : $("input[name='length8']").val();
		var width8		= $("input[name='width8']").val() == "" ? 0 : $("input[name='width8']").val();
		var bed3_elem8	= getFactor($("select[name='bed3_elem8']").find('option:selected').text());
		var sum			= Math.round((parseFloat(layer38) * parseFloat(length8) * parseFloat(width8) * parseFloat(bed3_elem8) * 0.03) / 10) / 100;
		
		$("input[name='bed3_total8']").val(sum);
	}

	$("input[name='layer38']").keyup(bed3_total8_fuc);
	$("input[name='length8']").keyup(bed3_total8_fuc);
	$("input[name='width8']").keyup(bed3_total8_fuc);
	$("select[name='bed3_elem8']").change(bed3_total8_fuc);

	var bed4_total8_fuc = function(){
		var layer48		= $("input[name='layer48']").val() == "" ? 0 : $("input[name='layer48']").val();
		var length8		= $("input[name='length8']").val() == "" ? 0 : $("input[name='length8']").val();
		var width8		= $("input[name='width8']").val() == "" ? 0 : $("input[name='width8']").val();
		var bed4_elem8	= getFactor($("select[name='bed4_elem8']").find('option:selected').text());
		var sum			= Math.round((parseFloat(layer48) * parseFloat(length8) * parseFloat(width8) * parseFloat(bed4_elem8) * 0.03) / 10) / 100;
		
		$("input[name='bed4_total8']").val(sum);
	}

	$("input[name='layer48']").keyup(bed4_total8_fuc);
	$("input[name='length8']").keyup(bed4_total8_fuc);
	$("input[name='width8']").keyup(bed4_total8_fuc);
	$("select[name='bed4_elem8']").change(bed4_total8_fuc);

	var bed5_total8_fuc = function(){
		var layer58		= $("input[name='layer58']").val() == "" ? 0 : $("input[name='layer58']").val();
		var length8		= $("input[name='length8']").val() == "" ? 0 : $("input[name='length8']").val();
		var width8		= $("input[name='width8']").val() == "" ? 0 : $("input[name='width8']").val();
		var bed5_elem8	= getFactor($("select[name='bed5_elem8']").find('option:selected').text());
		var sum			= Math.round((parseFloat(layer58) * parseFloat(length8) * parseFloat(width8) * parseFloat(bed5_elem8) * 0.03) / 10) / 100;
		
		$("input[name='bed5_total8']").val(sum);
	}

	$("input[name='layer58']").keyup(bed5_total8_fuc);
	$("input[name='length8']").keyup(bed5_total8_fuc);
	$("input[name='width8']").keyup(bed5_total8_fuc);
	$("select[name='bed5_elem8']").change(bed5_total8_fuc);

	var stone_total8_fuc = function(){
		var length8			= $("input[name='length8']").val() == "" ? 0 : $("input[name='length8']").val();
		var width8			= $("input[name='width8']").val() == "" ? 0 : $("input[name='width8']").val();
		var stone_width8	= $("input[name='stone_width8']").val() == "" ? 0 : $("input[name='stone_width8']").val();
		var stone_height8	= $("input[name='stone_height8']").val() == "" ? 0 : $("input[name='stone_height8']").val();
		var stone_elem8		= getFactor($("select[name='stone_elem8']").find('option:selected').text());
		var sum				= Math.round((((parseFloat(length8) * 2) + (parseFloat(width8) * 2)) * (parseFloat(stone_width8) / 100) * (parseFloat(stone_height8) / 100) * parseFloat(stone_elem8) * 0.03) / 10) / 100;
		
		$("input[name='stone_total8']").val(sum);
	}

	$("input[name='length8']").keyup(stone_total8_fuc);
	$("input[name='width8']").keyup(stone_total8_fuc);
	$("input[name='stone_width8']").keyup(stone_total8_fuc);
	$("input[name='stone_height8']").keyup(stone_total8_fuc);
	$("select[name='stone_elem8']").change(stone_total8_fuc);

	var tonesCO28_fuc = function(){
		var geotextil_total8	= $("input[name='geotextil_total8']").val() == "" ? 0 : $("input[name='geotextil_total8']").val();
		var liner_total8		= $("input[name='liner_total8']").val() == "" ? 0 : $("input[name='liner_total8']").val();
		var leak_liner_total8	= $("input[name='leak_liner_total8']").val() == "" ? 0 : $("input[name='leak_liner_total8']").val();
		var bed1_total8			= $("input[name='bed1_total8']").val() == "" ? 0 : $("input[name='bed1_total8']").val();
		var bed2_total8			= $("input[name='bed2_total8']").val() == "" ? 0 : $("input[name='bed2_total8']").val();
		var bed3_total8			= $("input[name='bed3_total8']").val() == "" ? 0 : $("input[name='bed3_total8']").val();
		var bed4_total8			= $("input[name='bed4_total8']").val() == "" ? 0 : $("input[name='bed4_total8']").val();
		var bed5_total8			= $("input[name='bed5_total8']").val() == "" ? 0 : $("input[name='bed5_total8']").val();
		var stone_total8		= $("input[name='stone_total8']").val() == "" ? 0 : $("input[name='stone_total8']").val();
		var beds_no8			= $("input[name='beds_no8']").val() == "" ? 0 : $("input[name='beds_no8']").val();
		
		var sum					= Math.round((parseFloat(geotextil_total8) + parseFloat(liner_total8) + parseFloat(leak_liner_total8) + parseFloat(bed1_total8) + parseFloat(bed2_total8) + parseFloat(bed3_total8) + parseFloat(bed4_total8) + parseFloat(bed5_total8) + parseFloat(stone_total8)) * parseFloat(beds_no8) * 100) / 100;
		
		$("input[name='tonesCO28']").val(sum);
	}

	$("input[name='length8']").keyup(tonesCO28_fuc);
	$("input[name='width8']").keyup(tonesCO28_fuc);
	$("input[name='deep8']").keyup(tonesCO28_fuc);
	$("select[name='geotextil_elem8']").change(tonesCO28_fuc);
	$("select[name='geotextil_mat8']").change(tonesCO28_fuc);

	$("select[name='liner_elem8']").change(tonesCO28_fuc);
	$("select[name='liner_mat8']").change(tonesCO28_fuc);

	$("select[name='leak_liner_elem8']").change(tonesCO28_fuc);
	$("select[name='leak_liner_mat8']").change(tonesCO28_fuc);

	$("input[name='layer18']").keyup(tonesCO28_fuc);
	$("select[name='bed1_elem8']").change(tonesCO28_fuc);
	$("input[name='layer28']").keyup(tonesCO28_fuc);
	$("select[name='bed2_elem8']").change(tonesCO28_fuc);
	$("input[name='layer38']").keyup(tonesCO28_fuc);
	$("select[name='bed3_elem8']").change(tonesCO28_fuc);
	$("input[name='layer48']").keyup(tonesCO28_fuc);
	$("select[name='bed4_elem8']").change(tonesCO28_fuc);
	$("input[name='layer58']").keyup(tonesCO28_fuc);
	$("select[name='bed5_elem8']").change(tonesCO28_fuc);

	$("input[name='stone_width8']").keyup(tonesCO28_fuc);
	$("input[name='stone_height8']").keyup(tonesCO28_fuc);
	$("select[name='stone_elem8']").change(tonesCO28_fuc);

	$("input[name='beds_no8']").keyup(tonesCO28_fuc);

	// table pipes
	var pipe1_total9_fuc = function(){
		var length19	= $("input[name='length19']").val() == "" ? 0 : $("input[name='length19']").val();
		var pipe1_elem9	= getFactor($("select[name='pipe1_elem9']").find('option:selected').text());
		var pipe1_mat9	= getFactor($("select[name='pipe1_mat9']").find('option:selected').text());
		var sum			= Math.round(parseFloat(length19) * parseFloat(pipe1_elem9) * parseFloat(pipe1_mat9) / 10) / 100;
		
		$("input[name='pipe1_total9']").val(sum);
	}
	
	$("input[name='length19']").keyup(pipe1_total9_fuc);
	$("select[name='pipe1_elem9']").change(pipe1_total9_fuc);
	$("select[name='pipe1_mat9']").change(pipe1_total9_fuc);

	var pipe2_total9_fuc = function(){
		var length29	= $("input[name='length29']").val() == "" ? 0 : $("input[name='length29']").val();
		var pipe2_elem9	= getFactor($("select[name='pipe2_elem9']").find('option:selected').text());
		var pipe2_mat9	= getFactor($("select[name='pipe2_mat9']").find('option:selected').text());
		var sum			= Math.round(parseFloat(length29) * parseFloat(pipe2_elem9) * parseFloat(pipe2_mat9) / 10) / 100;
		
		$("input[name='pipe2_total9']").val(sum);
	}
	
	$("input[name='length29']").keyup(pipe2_total9_fuc);
	$("select[name='pipe2_elem9']").change(pipe2_total9_fuc);
	$("select[name='pipe2_mat9']").change(pipe2_total9_fuc);

	var pipe3_total9_fuc = function(){
		var length39	= $("input[name='length39']").val() == "" ? 0 : $("input[name='length39']").val();
		var pipe3_elem9	= getFactor($("select[name='pipe3_elem9']").find('option:selected').text());
		var pipe3_mat9	= getFactor($("select[name='pipe3_mat9']").find('option:selected').text());
		var sum			= Math.round(parseFloat(length39) * parseFloat(pipe3_elem9) * parseFloat(pipe3_mat9) / 10) / 100;
		
		$("input[name='pipe3_total9']").val(sum);
	}
	
	$("input[name='length39']").keyup(pipe3_total9_fuc);
	$("select[name='pipe3_elem9']").change(pipe3_total9_fuc);
	$("select[name='pipe3_mat9']").change(pipe3_total9_fuc);

	var manhole_total9_fuc = function(){
		var manholes_num9	= $("input[name='manholes_num9']").val() == "" ? 0 : $("input[name='manholes_num9']").val();
		var manhole_elem9	= getFactor($("select[name='manhole_elem9']").find('option:selected').text());
		var manhole_mat9	= getFactor($("select[name='manhole_mat9']").find('option:selected').text());
		var sum				= Math.round(parseFloat(manholes_num9) * parseFloat(manhole_elem9) * parseFloat(manhole_mat9) / 10) / 100;
		
		$("input[name='manhole_total9']").val(sum);
	}
	
	$("input[name='manholes_num9']").keyup(manhole_total9_fuc);
	$("select[name='manhole_elem9']").change(manhole_total9_fuc);
	$("select[name='manhole_mat9']").change(manhole_total9_fuc);

	var tonesCO29_fuc = function(){
		var pipe1_total9	= $("input[name='pipe1_total9']").val() == "" ? 0 : $("input[name='pipe1_total9']").val();
		var pipe2_total9	= $("input[name='pipe2_total9']").val() == "" ? 0 : $("input[name='pipe2_total9']").val();
		var pipe3_total9	= $("input[name='pipe3_total9']").val() == "" ? 0 : $("input[name='pipe3_total9']").val();
		var manhole_total9	= $("input[name='manhole_total9']").val() == "" ? 0 : $("input[name='manhole_total9']").val();
		
		var sum				= Math.round((parseFloat(pipe1_total9) + parseFloat(pipe2_total9) + parseFloat(pipe3_total9) + parseFloat(manhole_total9)) * 100) / 100;
		
		$("input[name='tonesCO29']").val(sum);
	}

	$("input[name='length19']").keyup(tonesCO29_fuc);
	$("select[name='pipe1_elem9']").change(tonesCO29_fuc);
	$("select[name='pipe1_mat9']").change(tonesCO29_fuc);

	$("input[name='length29']").keyup(tonesCO29_fuc);
	$("select[name='pipe2_elem9']").change(tonesCO29_fuc);
	$("select[name='pipe2_mat9']").change(tonesCO29_fuc);

	$("input[name='length39']").keyup(tonesCO29_fuc);
	$("select[name='pipe3_elem9']").change(tonesCO29_fuc);
	$("select[name='pipe3_mat9']").change(tonesCO29_fuc);

	$("input[name='manholes_num9']").keyup(tonesCO29_fuc);
	$("select[name='manhole_elem9']").change(tonesCO29_fuc);
	$("select[name='manhole_mat9']").change(tonesCO29_fuc);

	// table pumps
	var airpump_total10_fuc = function(){
		var airpump_num10	= $("input[name='airpump_num10']").val() == "" ? 0 : $("input[name='airpump_num10']").val();
		var sum				= Math.round((parseFloat(airpump_num10) * 4.5 * 2.62) / 10) / 100;
		
		$("input[name='airpump_total10']").val(sum);
	}
	
	$("input[name='airpump_num10']").keyup(airpump_total10_fuc);

	var waterpump_total10_fuc = function(){
		var waterpump_num10	= $("input[name='waterpump_num10']").val() == "" ? 0 : $("input[name='waterpump_num10']").val();
		var sum				= Math.round((parseFloat(waterpump_num10) * 11 * 16.06) / 10) / 100;
		
		$("input[name='waterpump_total10']").val(sum);
	}
	
	$("input[name='waterpump_num10']").keyup(waterpump_total10_fuc);

	var tonesCO210_fuc = function(){
		var airpump_total10	= $("input[name='airpump_total10']").val() == "" ? 0 : $("input[name='airpump_total10']").val();
		var waterpump_total10	= $("input[name='waterpump_total10']").val() == "" ? 0 : $("input[name='waterpump_total10']").val();		
		var sum				= Math.round((parseFloat(airpump_total10) + parseFloat(waterpump_total10)) * 100) / 100;
		
		$("input[name='tonesCO210']").val(sum);
	}

	$("input[name='airpump_num10']").keyup(tonesCO210_fuc);
	$("input[name='waterpump_num10']").keyup(tonesCO210_fuc);

	// table Electrical
	var panels_total11_fuc = function(){
		var panels_num11	= $("input[name='panels_num11']").val() == "" ? 0 : $("input[name='panels_num11']").val();
		var sum				= Math.round((parseFloat(panels_num11) * 0.5 * 10.33) / 10) / 100;
		
		$("input[name='panels_total11']").val(sum);
	}

	$("input[name='panels_num11']").keyup(panels_total11_fuc);

	var switches_total11_fuc = function(){
		var switches_num11	= $("input[name='switches_num11']").val() == "" ? 0 : $("input[name='switches_num11']").val();
		var sum				= Math.round((parseFloat(switches_num11) * 0.07 * 10.33) / 10) / 100;
		
		$("input[name='switches_total11']").val(sum);
	}

	$("input[name='switches_num11']").keyup(switches_total11_fuc);
	
	var mcb_total11_fuc = function(){
		var mcb_num11	= $("input[name='mcb_num11']").val() == "" ? 0 : $("input[name='mcb_num11']").val();
		var sum			= Math.round((parseFloat(mcb_num11) * 0.2 * 4.3) / 10) / 100;
		
		$("input[name='mcb_total11']").val(sum);
	}

	$("input[name='mcb_num11']").keyup(mcb_total11_fuc);
	
	var bulbs1_total11_fuc = function(){
		var bulbs1_num11	= $("input[name='bulbs1_num11']").val() == "" ? 0 : $("input[name='bulbs1_num11']").val();
		var bulbs1_elem11	= getFactor($("select[name='bulbs1_elem11']").find('option:selected').text());
		var sum				= Math.round(parseFloat(bulbs1_num11) * parseFloat(bulbs1_elem11) / 10) / 100;
		
		$("input[name='bulbs1_total11']").val(sum);
	}

	$("input[name='bulbs1_num11']").keyup(bulbs1_total11_fuc);
	$("select[name='bulbs1_elem11']").change(bulbs1_total11_fuc);
	
	var bulbs2_total11_fuc = function(){
		var bulbs2_num11	= $("input[name='bulbs2_num11']").val() == "" ? 0 : $("input[name='bulbs2_num11']").val();
		var bulbs2_elem11	= getFactor($("select[name='bulbs2_elem11']").find('option:selected').text());
		var sum				= Math.round(parseFloat(bulbs2_num11) * parseFloat(bulbs2_elem11) / 10) / 100;
		
		$("input[name='bulbs2_total11']").val(sum);
	}

	$("input[name='bulbs2_num11']").keyup(bulbs2_total11_fuc);
	$("select[name='bulbs2_elem11']").change(bulbs2_total11_fuc);
	
	var bulbs3_total11_fuc = function(){
		var bulbs3_num11	= $("input[name='bulbs3_num11']").val() == "" ? 0 : $("input[name='bulbs3_num11']").val();
		var bulbs3_elem11	= getFactor($("select[name='bulbs3_elem11']").find('option:selected').text());
		var sum				= Math.round(parseFloat(bulbs3_num11) * parseFloat(bulbs3_elem11) / 10) / 100;
		
		$("input[name='bulbs3_total11']").val(sum);
	}

	$("input[name='bulbs3_num11']").keyup(bulbs3_total11_fuc);
	$("select[name='bulbs3_elem11']").change(bulbs3_total11_fuc);
	
	var spotlight1_total11_fuc = function(){
		var spotlight1_num11	= $("input[name='spotlight1_num11']").val() == "" ? 0 : $("input[name='spotlight1_num11']").val();
		var spotlight1_elem11	= getFactor($("select[name='spotlight1_elem11']").find('option:selected').text());
		var sum				= Math.round(parseFloat(spotlight1_num11) * parseFloat(spotlight1_elem11) / 10) / 100;
		
		$("input[name='spotlight1_total11']").val(sum);
	}

	$("input[name='spotlight1_num11']").keyup(spotlight1_total11_fuc);
	$("select[name='spotlight1_elem11']").change(spotlight1_total11_fuc);
	
	var spotlight2_total11_fuc = function(){
		var spotlight2_num11	= $("input[name='spotlight2_num11']").val() == "" ? 0 : $("input[name='spotlight2_num11']").val();
		var spotlight2_elem11	= getFactor($("select[name='spotlight2_elem11']").find('option:selected').text());
		var sum				= Math.round(parseFloat(spotlight2_num11) * parseFloat(spotlight2_elem11) / 10) / 100;
		
		$("input[name='spotlight2_total11']").val(sum);
	}

	$("input[name='spotlight2_num11']").keyup(spotlight2_total11_fuc);
	$("select[name='spotlight2_elem11']").change(spotlight2_total11_fuc);
	
	var streetlight1_total11_fuc = function(){
		var streetlight1_num11	= $("input[name='streetlight1_num11']").val() == "" ? 0 : $("input[name='streetlight1_num11']").val();
		var streetlight1_elem11	= getFactor($("select[name='streetlight1_elem11']").find('option:selected').text());
		var sum				= Math.round(parseFloat(streetlight1_num11) * parseFloat(streetlight1_elem11) / 10) / 100;
		
		$("input[name='streetlight1_total11']").val(sum);
	}

	$("input[name='streetlight1_num11']").keyup(streetlight1_total11_fuc);
	$("select[name='streetlight1_elem11']").change(streetlight1_total11_fuc);
	
	var streetlight2_total11_fuc = function(){
		var streetlight2_num11	= $("input[name='streetlight2_num11']").val() == "" ? 0 : $("input[name='streetlight2_num11']").val();
		var streetlight2_elem11	= getFactor($("select[name='streetlight2_elem11']").find('option:selected').text());
		var sum				= Math.round(parseFloat(streetlight2_num11) * parseFloat(streetlight2_elem11) / 10) / 100;
		
		$("input[name='streetlight2_total11']").val(sum);
	}

	$("input[name='streetlight2_num11']").keyup(streetlight2_total11_fuc);
	$("select[name='streetlight2_elem11']").change(streetlight2_total11_fuc);

	var tonesCO211_fuc = function(){
		var panels_total11		= $("input[name='panels_total11']").val() == "" ? 0 : $("input[name='panels_total11']").val();
		var switches_total11	= $("input[name='switches_total11']").val() == "" ? 0 : $("input[name='switches_total11']").val();	
		var mcb_total11			= $("input[name='mcb_total11']").val() == "" ? 0 : $("input[name='mcb_total11']").val();	
		var bulbs1_total11		= $("input[name='bulbs1_total11']").val() == "" ? 0 : $("input[name='bulbs1_total11']").val();	
		var bulbs2_total11		= $("input[name='bulbs2_total11']").val() == "" ? 0 : $("input[name='bulbs2_total11']").val();	
		var bulbs3_total11		= $("input[name='bulbs3_total11']").val() == "" ? 0 : $("input[name='bulbs3_total11']").val();	
		var spotlight1_total11	= $("input[name='spotlight1_total11']").val() == "" ? 0 : $("input[name='spotlight1_total11']").val();	
		var spotlight2_total11	= $("input[name='spotlight2_total11']").val() == "" ? 0 : $("input[name='spotlight2_total11']").val();	
		var streetlight1_total11	= $("input[name='streetlight1_total11']").val() == "" ? 0 : $("input[name='streetlight1_total11']").val();	
		var streetlight2_total11	= $("input[name='streetlight2_total11']").val() == "" ? 0 : $("input[name='streetlight2_total11']").val();	

		var sum				= Math.round((parseFloat(panels_total11) + parseFloat(switches_total11) + parseFloat(mcb_total11) + parseFloat(bulbs1_total11) + parseFloat(bulbs2_total11) + parseFloat(bulbs3_total11) + parseFloat(spotlight1_total11) + parseFloat(spotlight2_total11) + parseFloat(streetlight1_total11) + parseFloat(streetlight2_total11)) * 100) / 100;
		
		$("input[name='tonesCO211']").val(sum);
	}

	$("input[name='panels_num11']").keyup(tonesCO211_fuc);
	$("input[name='switches_num11']").keyup(tonesCO211_fuc);
	$("input[name='mcb_num11']").keyup(tonesCO211_fuc);
	$("input[name='bulbs1_num11']").keyup(tonesCO211_fuc);
	$("select[name='bulbs1_elem11']").change(tonesCO211_fuc);
	$("input[name='bulbs2_num11']").keyup(tonesCO211_fuc);
	$("select[name='bulbs2_elem11']").change(tonesCO211_fuc);
	$("input[name='bulbs3_num11']").keyup(tonesCO211_fuc);
	$("select[name='bulbs3_elem11']").change(tonesCO211_fuc);
	$("input[name='spotlight1_num11']").keyup(tonesCO211_fuc);
	$("select[name='spotlight1_elem11']").change(tonesCO211_fuc);
	$("input[name='spotlight2_num11']").keyup(tonesCO211_fuc);
	$("select[name='spotlight2_elem11']").change(tonesCO211_fuc);
	$("input[name='streetlight1_num11']").keyup(tonesCO211_fuc);
	$("select[name='streetlight1_elem11']").change(tonesCO211_fuc);
	$("input[name='streetlight2_num11']").keyup(tonesCO211_fuc);
	$("select[name='streetlight2_elem11']").change(tonesCO211_fuc);

});