<?php

final class TestFactor extends TestCase
{

    private $Factor;

    public function setUp()
    {
        $this->resetInstance();
        $this->CI->load->model('Factor');
        $this->Factor = $this->CI->Factor;
    }

    public function test_get_proj_data_true() {        
        $userid = 2;
        $project_id = 2;
        $output = $this->Factor->get_proj_data($userid, $project_id);
        $expected = array((object)['id'=>2, 'p_name'=> 'test project', 'userid' => 2, 'p_date'  => '2019-08-15' ]);
        $this->assertEquals($expected, $output);
    }
    public function test_get_proj_data_false) {        
         $userid = 3;
         $project_id = 2;
         $output = $this->Factor->get_proj_data($userid, $project_id);
         $expected = false;
         $this->assertEquals($expected, $output);
    }
    public function test_get_lastproj_data() {

         $userid = 2;       
         
         $expected = array((object)['id'=>3, 'p_name'=> 'test project 2', 'userid' => 2, 'p_date'  => '2019-08-16' ]);
         $output = $this->Factor->get_lastproj_data($userid);
        
         $this->assertEquals($expected, $output);
    }
    public function test_get_projects_data() {
        $userid =2;

        $output = $this->Factor->get_projects_data($userid);
        $expected = array( '2' => 'test project' );
        $this->assertEquals($expected, $output);
    }


    

    public function test_get_factor_data() {
        $id = 31;
        $tbl_name = "lights";
        $output = $this->Factor->get_factor_data($id, $tbl_name);
        $expected = array((object)['id'=>31, 'source'=> 'Solar panel', 'factor' => 0.045, 'unit'  => 'kg CO2/KWh', 'reference' =>23 ]);
        $this->assertEquals($expected, $output);
    }


    public function test_add_factor() {
        $type = 'lights';
        $source = 'Engime energy';
        $factor = '0.002';
        $unit = 'kg CO2/KWh';
        $reference = 10;
        $output = $this->Factor->add_factor($type, $source, $factor, $unit, $reference);
        $expected = true;
        $this->assertEquals($expected, $output);
    }
    public function test_edit_factor(){
        $id = 33;
        $type = 'lights';
        $source = 'Engime energy';
        $factor = '0.0022';
        $unit = 'kg CO2/KWh';
        $reference = 10;
        $output = $this->Factor->edit_factor($id, $type, $source, $factor, $unit, $reference);
        $expected = true;
        $this->assertEquals($expected, $output);
    }

    public function test_delete_factor() {
        $id = 33;
        $type = "lights";
        $output = $this->Factor->delete_factor($id, $type);
        $expected = true;
        $this->assertEquals($expected, $output);
    }
    
}
