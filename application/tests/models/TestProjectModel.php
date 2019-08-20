<?php

final class TestProject_model extends TestCase
{
    private $Project_model;

    public function setUp()
    {
        $this->resetInstance();
        $this->CI->load->model('Project_model');
        $this->Project_model = $this->CI->Project_model;
    }
    
   
    public function test_insert_data() { 

        
        $data = array(
            'p_name'=> 'test project 3',
            'p_date'=> '2019-08-19',
            'userid'=> 3
        );

        $output = $this->Project_model->insert_data($data);
        $expected = true;
        $this->assertEquals($expected, $output);
    }
   
    
}
