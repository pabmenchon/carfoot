<?php


final class TestOperation_model extends TestCase
{
    private $Operation_model;

    public function setUp()
    {
        $this->resetInstance();
        $this->CI->load->model('Operation_model');
        $this->Operation_model = $this->CI->Operation_model;
    }

   
   
    public function test_get_projects_data() {
        $userid =2;

        $output = $this->Operation_model->get_projects_data($userid);
        $expected = array( '2' => 'test project' );
        $this->assertEquals($expected, $output);
    }
    public function test_get_all_fixed_data() {
       

        $output = $this->Operation_model->get_all_fixed_data('lights');
        $expected = array('31' => 'Solar panel', '32' => 'Global energy mix');
        $this->assertEquals($expected, $output);
    }

        
}
