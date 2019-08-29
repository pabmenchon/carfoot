<?php


final class TestConfiguration_model extends TestCase
{

    private $Configuration_model;

    public function setUp()
    {
        $this->resetInstance();
        $this->CI->load->model('Configuration_model');
        $this->Configuration_model = $this->CI->Configuration_model;
    }  
   

    public function test_get_proj_data_true() {        
        $userid = 2;
        $project_id = 2;
        $output = $this->Configuration_model->get_proj_data($userid, $project_id);
        $expected = array((object)['id'=>2, 'p_name'=> 'test project', 'userid' => 2, 'p_date'  => '2019-08-15' ]);
        $this->assertEquals($expected, $output);
    }
    public function test_get_proj_data_false() {        
         $userid = 3;
         $project_id = 20;
         $output = $this->Configuration_model->get_proj_data($userid, $project_id);
         $expected = false;
         $this->assertEquals($expected, $output);
    }
    public function test_get_lastproj_data() {

         $userid = 2;       
         
         $expected = array((object)['id'=>'2', 'p_name'=> 'test project', 'userid' => '2', 'p_date'  => '2019-08-15' ]);
         $output = $this->Configuration_model->get_lastproj_data($userid);
        
         $this->assertEquals($expected, $output);
    }
    public function test_get_projects_data() {
        $userid =2;

        $output = $this->Configuration_model->get_projects_data($userid);
        $expected = array( 2 => 'test project' );
        $this->assertEquals($expected, $output);
    }


    public function test_get_all_config_false(){
        $userid = 2;
        $projectid = 20;
        $tbl_name = "config";
        $output = $this->Configuration_model->get_all_config($userid, $projectid, $tbl_name);
        $expected = false;
        $this->assertEquals($expected, $output);
    }

    public function test_update_config( ){
        
        $userid = 2;
        $projectid = 2;
        $data = array(
            'material_eq_min' => 30, 
            'material_eq_max' => 190
        );

        $tbl_name = "config";

        $output = $this->Configuration_model->update_config(  $userid, $projectid, $data, $tbl_name);
        $expected = true;
        $this->assertEquals($expected, $output);
    }
    
}
