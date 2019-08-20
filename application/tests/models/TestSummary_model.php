<?php

final class TestSummary_model extends TestCase
{
    private $Summary_model;

    public function setUp()
    {
        $this->resetInstance();
        $this->CI->load->model('Summary_model');
        $this->Summary_model = $this->CI->Summary_model;
    }

   
   public function test_get_proj_data_true() {        
        $userid = 2;
        $project_id = 2;
        $output = $this->Summary_model->get_proj_data($userid, $project_id);
        $expected = array((object)['id'=>2, 'p_name'=> 'test project', 'userid' => 2, 'p_date'  => '2019-08-15' ]);
        $this->assertEquals($expected, $output);
   }
   public function test_get_proj_data_false) {        
        $userid = 3;
        $project_id = 2;
        $output = $this->Summary_model->get_proj_data($userid, $project_id);
        $expected = false;
        $this->assertEquals($expected, $output);
   }
   public function test_get_lastproj_data() {

        $userid = 2;       
        
        $expected = array((object)['id'=>3, 'p_name'=> 'test project 2', 'userid' => 2, 'p_date'  => '2019-08-16' ]);
        $output = $this->Summary_model->get_lastproj_data($userid);
       
        $this->assertEquals($expected, $output);
   }


   public function test_get_projects_data() {
    
        $userid = 2;  
        $expected = array( '2' => 'test project', '3' => 'test project 2' );
        $output = $this->Summary_model->get_projects_data($userid);
        
        $this->assertEquals($expected, $output);
   }
    
}
