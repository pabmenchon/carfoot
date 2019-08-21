$(document).ready(function(){
	$('#parameters_toggle').on("click", function () {
		$("#parameters_div").toggle();
		$(this).toggleClass('ua-icon-tree-plus');
	});
	$('#wetland_toggle').on("click", function () {
		$("#wetland_div").toggle();
		$(this).toggleClass('ua-icon-tree-plus');
	});
	$('#maintenance_toggle').on("click", function () {
		$("#maintenance_div").toggle();
		$(this).toggleClass('ua-icon-tree-plus');
	});
	$('#electricity_toggle').on("click", function () {
		$("#electricity_div").toggle();
		$(this).toggleClass('ua-icon-tree-plus');
	});

	function getFactor(factor_data){
		var factor_datas	= factor_data.split(' | '),
			factor			= factor_datas[1];
		
			return factor ? factor : 0;
	}
	
	// table constructed wetland
	var bed1_total2_fuc = function(){
		var bed12			= $("input[name='bed12']").val() == "" ? 0 : $("input[name='bed12']").val();
		var total_area1		= $("input[name='total_area1']").val() == "" ? 0 : $("input[name='total_area1']").val();
		var lifetime1		= $("input[name='lifetime1']").val() == "" ? 0 : $("input[name='lifetime1']").val();
		var bed1_type2		= getFactor($("select[name='bed1_type2']").find('option:selected').text());
		var sum				= Math.round(parseFloat(bed12) * parseFloat(total_area1) * parseFloat(lifetime1) * parseFloat(bed1_type2) / 10) / 100;
		
		$("input[name='bed1_total2']").val(sum);
	}
	
	$("input[name='bed12']").change(bed1_total2_fuc);
	$("input[name='total_area1']").change(bed1_total2_fuc);
	$("input[name='lifetime1']").change(bed1_total2_fuc);
	$("select[name='bed1_type2']").change(bed1_total2_fuc);
	
	var bed2_total2_fuc = function(){
		var bed22		= $("input[name='bed22']").val() == "" ? 0 : $("input[name='bed22']").val();
		var lifetime1		= $("input[name='lifetime1']").val() == "" ? 0 : $("input[name='lifetime1']").val();
		var tonesCO2		= $("input[name='tonesCO2']").val() == "" ? 0 : $("input[name='tonesCO2']").val();
		var bed2_type2	= getFactor($("select[name='bed2_type2']").find('option:selected').text());
		var sum = Math.round(parseFloat(bed22) * parseFloat(lifetime1) * parseFloat(tonesCO2) * parseFloat(bed2_type2) / 10) / 100;
		
		$("input[name='bed2_total2']").val(sum);
	}
	
	$("input[name='lifetime1']").change(bed2_total2_fuc);
	$("input[name='bed22']").change(bed2_total2_fuc);
	$("select[name='bed2_type2']").change(bed2_total2_fuc);
	
	var bed3_total2_fuc = function(){
		var bed32		= $("input[name='bed32']").val() == "" ? 0 : $("input[name='bed32']").val();
		var lifetime1		= $("input[name='lifetime1']").val() == "" ? 0 : $("input[name='lifetime1']").val();
		var total_area1		= $("input[name='total_area1']").val() == "" ? 0 : $("input[name='total_area1']").val();
		var bed3_type2	= getFactor($("select[name='bed3_type2']").find('option:selected').text());
		var sum = Math.round(parseFloat(bed32) * parseFloat(lifetime1) * parseFloat(total_area1) * parseFloat(bed3_type2) / 10) / 100;
		
		$("input[name='bed3_total2']").val(sum);
	}
	
	$("input[name='lifetime1']").change(bed3_total2_fuc);
	$("input[name='bed32']").change(bed3_total2_fuc);
	$("input[name='total_area1']").change(bed3_total2_fuc);
	$("select[name='bed3_type2']").change(bed3_total2_fuc);
	
	var tonesCO22_fuc = function(){
		var bed1_total2		= $("input[name='bed1_total2']").val() == "" ? 0 : $("input[name='bed1_total2']").val();
		var bed2_total2		= $("input[name='bed2_total2']").val() == "" ? 0 : $("input[name='bed2_total2']").val();
		var bed3_total2		= $("input[name='bed3_total2']").val() == "" ? 0 : $("input[name='bed3_total2']").val();
		var sum = parseFloat(bed1_total2) + parseFloat(bed2_total2) + parseFloat(bed3_total2);
		
		$("input[name='tonesCO22']").val(sum);
	}
	
	$("input[name='bed12']").change(tonesCO22_fuc);
	$("input[name='lifetime1']").change(tonesCO22_fuc);
	$("select[name='bed1_type2']").change(tonesCO22_fuc);
	
	$("input[name='bed22']").change(tonesCO22_fuc);
	$("select[name='bed2_type2']").change(tonesCO22_fuc);
	
	$("input[name='bed32']").change(tonesCO22_fuc);
	$("input[name='total_area1']").change(tonesCO22_fuc);
	$("select[name='bed3_type2']").change(tonesCO22_fuc);
	
	// table electricity
	var airpump_total3_fuc = function(){
		var airpump_num3	= $("input[name='airpump_num3']").val() == "" ? 0 : $("input[name='airpump_num3']").val();
		var airpump_time3	= $("input[name='airpump_time3']").val() == "" ? 0 : $("input[name='airpump_time3']").val();
		var airpump_src3	= getFactor($("select[name='airpump_src3']").find('option:selected').text());
		var sum = Math.round(parseFloat(airpump_num3) * parseFloat(airpump_time3) * parseFloat(airpump_src3) * 0.053 *1000) / 1000000;
		
		$("input[name='airpump_total3']").val(sum);
	}
	
	$("input[name='airpump_num3']").change(airpump_total3_fuc);
	$("input[name='airpump_time3']").change(airpump_total3_fuc);
	$("select[name='airpump_src3']").change(airpump_total3_fuc);
	
	var waterpump_total3_fuc = function(){
		var waterpump_num3	= $("input[name='waterpump_num3']").val() == "" ? 0 : $("input[name='waterpump_num3']").val();
		var waterpump_time3	= $("input[name='waterpump_time3']").val() == "" ? 0 : $("input[name='waterpump_time3']").val();
		var waterpump_src3	= getFactor($("select[name='waterpump_src3']").find('option:selected').text());
		var sum = Math.round(parseFloat(waterpump_num3) * parseFloat(waterpump_time3) * parseFloat(waterpump_src3) * 0.7 * 1000) / 1000000;
		
		$("input[name='waterpump_total3']").val(sum);
	}
	
	$("input[name='waterpump_num3']").change(waterpump_total3_fuc);
	$("input[name='waterpump_time3']").change(waterpump_total3_fuc);
	$("select[name='waterpump_src3']").change(waterpump_total3_fuc);
	
	var device1_total3_fuc = function(){
		var device1_num3	= $("input[name='device1_num3']").val() == "" ? 0 : $("input[name='device1_num3']").val();
		var device1_time3	= $("input[name='device1_time3']").val() == "" ? 0 : $("input[name='device1_time3']").val();
		var device1_comsuption3	= $("input[name='device1_comsuption3']").val() == "" ? 0 : $("input[name='device1_comsuption3']").val();
		var device1_src3	= getFactor($("select[name='device1_src3']").find('option:selected').text());
		var sum = Math.round(parseFloat(device1_num3) * parseFloat(device1_time3) * parseFloat(device1_comsuption3) * parseFloat(device1_src3) * 1000) / 1000000;
		
		$("input[name='device1_total3']").val(sum);
	}
	
	$("input[name='device1_num3']").change(device1_total3_fuc);
	$("input[name='device1_time3']").change(device1_total3_fuc);
	$("input[name='device1_comsuption3']").change(device1_total3_fuc);
	$("select[name='device1_src3']").change(device1_total3_fuc);
	
	var device2_total3_fuc = function(){
		var device2_num3	= $("input[name='device2_num3']").val() == "" ? 0 : $("input[name='device2_num3']").val();
		var device2_time3	= $("input[name='device2_time3']").val() == "" ? 0 : $("input[name='device2_time3']").val();
		var device2_comsuption3	= $("input[name='device2_comsuption3']").val() == "" ? 0 : $("input[name='device2_comsuption3']").val();
		var device2_src3	= getFactor($("select[name='device2_src3']").find('option:selected').text());
		var sum = Math.round(parseFloat(device2_num3) * parseFloat(device2_time3) * parseFloat(device2_comsuption3) * parseFloat(device2_src3) * 1000) / 1000000;
		
		$("input[name='device2_total3']").val(sum);
	}
	
	$("input[name='device2_num3']").change(device2_total3_fuc);
	$("input[name='device2_time3']").change(device2_total3_fuc);
	$("input[name='device2_comsuption3']").change(device2_total3_fuc);
	$("select[name='device2_src3']").change(device2_total3_fuc);
	
	var tonesCO23_fuc = function(){
		var airpump_total3	= $("input[name='airpump_total3']").val() == "" ? 0 : $("input[name='airpump_total3']").val();
		var waterpump_total3	= $("input[name='waterpump_total3']").val() == "" ? 0 : $("input[name='waterpump_total3']").val();
		var device1_total3	= $("input[name='device1_total3']").val() == "" ? 0 : $("input[name='device1_total3']").val();
		var device2_total3	= $("input[name='device2_total3']").val() == "" ? 0 : $("input[name='device2_total3']").val();
		var sum = Math.round((parseFloat(airpump_total3) + parseFloat(waterpump_total3) + parseFloat(device1_total3) + parseFloat(device2_total3)) * 1000000) /1000000;
		
		$("input[name='tonesCO23']").val(sum);
	}
	
	$("input[name='airpump_num3']").change(tonesCO23_fuc);
	$("input[name='airpump_time3']").change(tonesCO23_fuc);
	$("select[name='airpump_src3']").change(tonesCO23_fuc);
	
	$("input[name='waterpump_num3']").change(tonesCO23_fuc);
	$("input[name='waterpump_time3']").change(tonesCO23_fuc);
	$("select[name='waterpump_src3']").change(tonesCO23_fuc);
	
	$("input[name='device1_num3']").change(tonesCO23_fuc);
	$("input[name='device1_time3']").change(tonesCO23_fuc);
	$("input[name='device1_comsuption3']").change(tonesCO23_fuc);
	$("select[name='device1_src3']").change(tonesCO23_fuc);
	
	$("input[name='device2_num3']").change(tonesCO23_fuc);
	$("input[name='device2_time3']").change(tonesCO23_fuc);
	$("input[name='device2_comsuption3']").change(tonesCO23_fuc);
	$("select[name='device2_src3']").change(tonesCO23_fuc);
	
	// table maintenace
	var removal_total4_fuc = function(){
		var removal_no4	= $("input[name='removal_no4']").val() == "" ? 0 : $("input[name='removal_no4']").val();
		var removal_time4	= $("input[name='removal_time4']").val() == "" ? 0 : $("input[name='removal_time4']").val();
		var removal_fuel4	= getFactor($("select[name='removal_fuel4']").find('option:selected').text());
		var sum = Math.round(parseFloat(removal_no4) * parseFloat(removal_time4) * parseFloat(removal_fuel4) * 170 * 0.18 * 0.5 / 10) / 100;
		
		$("input[name='removal_total4']").val(sum);
	}
	
	$("input[name='removal_no4']").change(removal_total4_fuc);
	$("input[name='removal_time4']").change(removal_total4_fuc);
	$("select[name='removal_fuel4']").change(removal_total4_fuc);
	
	var vegetation_total4_fuc = function(){
		var vegetation_no4	= $("input[name='vegetation_no4']").val() == "" ? 0 : $("input[name='vegetation_no4']").val();
		var vegetation_time4	= $("input[name='vegetation_time4']").val() == "" ? 0 : $("input[name='vegetation_time4']").val();
		var vegetation_model4	= getFactor($("select[name='vegetation_model4']").find('option:selected').text());
		var vegetation_fuel4	= getFactor($("select[name='vegetation_fuel4']").find('option:selected').text());
		
		var sum = Math.round(parseFloat(vegetation_no4) * parseFloat(vegetation_time4) * parseFloat(vegetation_model4) * parseFloat(vegetation_fuel4) * 0.18 * 0.5 / 10) / 100;
		
		$("input[name='vegetation_total4']").val(sum);
	}
	
	$("input[name='vegetation_no4']").change(vegetation_total4_fuc);
	$("input[name='vegetation_time4']").change(vegetation_total4_fuc);
	$("select[name='vegetation_model4']").change(vegetation_total4_fuc);
	$("select[name='vegetation_fuel4']").change(vegetation_total4_fuc);
	
	var travels_total4_fuc = function(){
		var travels_no4	= $("input[name='travels_no4']").val() == "" ? 0 : $("input[name='travels_no4']").val();
		var travels_time4	= $("input[name='travels_time4']").val() == "" ? 0 : $("input[name='travels_time4']").val();
		var travels_model4	= getFactor($("select[name='travels_model4']").find('option:selected').text());
		var travels_fuel4	= getFactor($("select[name='travels_fuel4']").find('option:selected').text());
		
		var sum = Math.round(parseFloat(travels_no4) * parseFloat(travels_time4) * parseFloat(travels_model4) * parseFloat(travels_fuel4) * 0.18 * 0.5 / 10) / 100;
		
		$("input[name='travels_total4']").val(sum);
	}
	
	$("input[name='travels_no4']").change(travels_total4_fuc);
	$("input[name='travels_time4']").change(travels_total4_fuc);
	$("select[name='travels_model4']").change(travels_total4_fuc);
	$("select[name='travels_fuel4']").change(travels_total4_fuc);
	
	var pipe1_total4_fuc = function(){
		var pipe14	= $("input[name='pipe14']").val() == "" ? 0 : $("input[name='pipe14']").val();
		var pipe1_elem4	= getFactor($("select[name='pipe1_elem4']").find('option:selected').text());
		var pipe1_mat4	= getFactor($("select[name='pipe1_mat4']").find('option:selected').text());
		
		var sum = Math.round(parseFloat(pipe14) * parseFloat(pipe1_elem4) * parseFloat(pipe1_mat4) / 10) / 100;
		
		$("input[name='pipe1_total4']").val(sum);
	}
	
	$("input[name='pipe14']").change(pipe1_total4_fuc);
	$("select[name='pipe1_elem4']").change(pipe1_total4_fuc);
	$("select[name='pipe1_mat4']").change(pipe1_total4_fuc);
	
	var pipe2_total4_fuc = function(){
		var pipe24	= $("input[name='pipe24']").val() == "" ? 0 : $("input[name='pipe24']").val();
		var pipe2_elem4	= getFactor($("select[name='pipe2_elem4']").find('option:selected').text());
		var pipe2_mat4	= getFactor($("select[name='pipe2_mat4']").find('option:selected').text());
		
		var sum = Math.round(parseFloat(pipe24) * parseFloat(pipe2_elem4) * parseFloat(pipe2_mat4) / 10) / 100;
		
		$("input[name='pipe2_total4']").val(sum);
	}
	
	$("input[name='pipe24']").change(pipe2_total4_fuc);
	$("select[name='pipe2_elem4']").change(pipe2_total4_fuc);
	$("select[name='pipe2_mat4']").change(pipe2_total4_fuc);
	
	var manholes_total4_fuc = function(){
		var pipe24	= $("input[name='pipe24']").val() == "" ? 0 : $("input[name='pipe24']").val();
		var manholes4		= $("input[name='manholes4']").val();
		var manholes_elem4	= getFactor($("select[name='manholes_elem4']").find('option:selected').text());
		var manholes_mat4	= getFactor($("select[name='manholes_mat4']").find('option:selected').text());
		
		var sum = Math.round(parseFloat(manholes4) * parseFloat(manholes_elem4) * parseFloat(manholes_mat4) / 10) / 100;
		
		$("input[name='manholes_total4']").val(sum);
	}
	
	$("input[name='manholes4']").change(manholes_total4_fuc);
	$("select[name='manholes_elem4']").change(manholes_total4_fuc);
	$("select[name='manholes_mat4']").change(manholes_total4_fuc);
	
	var lightbulbs_total4_fuc = function(){
		var lightbulbs4	= $("input[name='lightbulbs4']").val() == "" ? 0 : $("input[name='lightbulbs4']").val();
		var lightbulbs_elem4	= getFactor($("select[name='lightbulbs_elem4']").find('option:selected').text());
		
		var sum = Math.round(parseFloat(lightbulbs4) * parseFloat(lightbulbs_elem4) / 10) / 100;
		
		$("input[name='lightbulbs_total4']").val(sum);
	}
	
	$("input[name='lightbulbs4']").change(lightbulbs_total4_fuc);
	$("select[name='lightbulbs_elem4']").change(lightbulbs_total4_fuc);
	
	var spotlight_total4_fuc = function(){
		var spotlight4	= $("input[name='spotlight4']").val() == "" ? 0 : $("input[name='spotlight4']").val();
		var spotlight_elem4	= getFactor($("select[name='spotlight_elem4']").find('option:selected').text());
		
		var sum = Math.round(parseFloat(spotlight4) * parseFloat(spotlight_elem4) / 10) / 100;
		
		$("input[name='spotlight_total4']").val(sum);
	}
	
	$("input[name='spotlight4']").change(spotlight_total4_fuc);
	$("select[name='spotlight_elem4']").change(spotlight_total4_fuc);
	
	var airpump_total4_fuc = function(){
		var airpump4	= $("input[name='airpump4']").val() == "" ? 0 : $("input[name='airpump4']").val();
		
		var sum = Math.round(parseFloat(airpump4)) / 100;
		
		$("input[name='airpump_total4']").val(sum);
	}
	
	$("input[name='airpump4']").change(airpump_total4_fuc);
	
	var waterpump_total4_fuc = function(){
		var waterpump4	= $("input[name='waterpump4']").val() == "" ? 0 : $("input[name='waterpump4']").val();
		
		var sum = Math.round(parseFloat(waterpump4) * 18 ) / 100;
		
		$("input[name='waterpump_total4']").val(sum);
	}
	
	$("input[name='waterpump4']").change(waterpump_total4_fuc);
	
	var tonesCO24_fuc = function(){
		var removal_total4	= $("input[name='removal_total4']").val() == "" ? 0 : $("input[name='removal_total4']").val();
		var airpump4	= $("input[name='airpump4']").val() == "" ? 0 : $("input[name='airpump4']").val();
		var vegetation_total4	= $("input[name='vegetation_total4']").val() == "" ? 0 : $("input[name='vegetation_total4']").val();
		var travels_total4	= $("input[name='travels_total4']").val() == "" ? 0 : $("input[name='travels_total4']").val();
		var pipe1_total4	= $("input[name='pipe1_total4']").val() == "" ? 0 : $("input[name='pipe1_total4']").val();
		var pipe2_total4	= $("input[name='pipe2_total4']").val() == "" ? 0 : $("input[name='pipe2_total4']").val();
		var manholes_total4	= $("input[name='manholes_total4']").val() == "" ? 0 : $("input[name='manholes_total4']").val();
		var lightbulbs_total4	= $("input[name='lightbulbs_total4']").val() == "" ? 0 : $("input[name='lightbulbs_total4']").val();
		var spotlight_total4	= $("input[name='spotlight_total4']").val() == "" ? 0 : $("input[name='spotlight_total4']").val();
		var airpump_total4	= $("input[name='airpump_total4']").val() == "" ? 0 : $("input[name='airpump_total4']").val();
		var waterpump_total4	= $("input[name='waterpump_total4']").val() == "" ? 0 : $("input[name='waterpump_total4']").val();
		
		var sum = parseFloat(removal_total4) + parseFloat(vegetation_total4) + parseFloat(travels_total4) + parseFloat(pipe1_total4) + parseFloat(pipe2_total4) + parseFloat(manholes_total4) + parseFloat(lightbulbs_total4) + parseFloat(spotlight_total4) + parseFloat(airpump_total4) + parseFloat(waterpump_total4);
		
		$("input[name='tonesCO24']").val(sum);
	}
	
	$("input[name='removal_no4']").change(tonesCO24_fuc);
	$("input[name='removal_time4']").change(tonesCO24_fuc);
	$("select[name='removal_fuel4']").change(tonesCO24_fuc);
	
	$("input[name='vegetation_no4']").change(tonesCO24_fuc);
	$("input[name='vegetation_time4']").change(tonesCO24_fuc);
	$("select[name='vegetation_model4']").change(tonesCO24_fuc);
	$("select[name='vegetation_fuel4']").change(tonesCO24_fuc);
	
	$("input[name='travels_no4']").change(tonesCO24_fuc);
	$("input[name='travels_time4']").change(tonesCO24_fuc);
	$("select[name='travels_model4']").change(tonesCO24_fuc);
	$("select[name='travels_fuel4']").change(tonesCO24_fuc);
	
	$("input[name='pipe14']").change(tonesCO24_fuc);
	$("select[name='pipe1_elem4']").change(tonesCO24_fuc);
	$("select[name='pipe1_mat4']").change(tonesCO24_fuc);
	
	$("input[name='pipe24']").change(tonesCO24_fuc);
	$("select[name='pipe2_elem4']").change(tonesCO24_fuc);
	$("select[name='pipe2_mat4']").change(tonesCO24_fuc);
	
	$("input[name='manholes4']").change(tonesCO24_fuc);
	$("select[name='manholes_elem4']").change(tonesCO24_fuc);
	$("select[name='manholes_mat4']").change(tonesCO24_fuc);
	
	$("input[name='lightbulbs4']").change(tonesCO24_fuc);
	$("select[name='lightbulbs_elem4']").change(tonesCO24_fuc);
	
	$("input[name='spotlight4']").change(tonesCO24_fuc);
	$("select[name='spotlight_elem4']").change(tonesCO24_fuc);
	
	$("input[name='airpump4']").change(tonesCO24_fuc);
	
	$("input[name='waterpump4']").change(tonesCO24_fuc);
	
});