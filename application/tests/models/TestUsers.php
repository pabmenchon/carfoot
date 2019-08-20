<?php


final class TestUsers extends TestCase
{
   
    private $user;
    public function setUp()
    {
        $this->resetInstance();
        $this->CI->load->model('Users');
        $this->user = $this->CI->Users;
    }
  
    public function test_registration_insert_true() {        
        
        $data = array(
                'userName'  => 'username',
                'userEmail' => 'testemail@gmail.com',
                'userPass'  => '12345'
            );
        $output = $this->user->registration_insert($data);
        $expected = true;
        $this->assertEquals($expected, $output);
    }

    public function test_registration_insert_false() {
        
        $data = array(
                'userName'  => 'username',
                'userEmail' => 'testemail@gmail.com',
                'userPass'  => '12345'
        );
        $output = $this->user->registration_insert($data);
        $expected = false;
        $this->assertEquals($expected, $output);
    }

    public function test_login_true() {
        
        $data = array(
               
                'userEmail' => 'testemail@gmail.com',
                'userPass'  => '12345'
        );
        
        $output = $this->user->login($data);
        $expected = true;
        $this->assertEquals($expected, $output);
    }

    public function test_login_false() {
        
        $data = array(
               
                'userEmail' => 'testemail@gmail.com',
                'userPass'  => '123456'
        );
        
        $output = $this->user->login($data);
        $expected = false;
        $this->assertEquals($expected, $output);
    }

    public function test_read_user_information_true() {
        
        $useremail = 'testemail@gmail.com' ; 

        $output = $this->user->read_user_information($useremail);

        $expected = array((object)['id'=>3, 'userName'=> 'username', 'userEmail' => 'testemail@gmail.com', 'userPass'  => md5('12345'), 'userPhoto' => NULL, 'userGroup' => NULL, 'status' => 1 ]);

        $this->assertEquals($expected, $output);
    }

    public function test_read_user_information_false() {
        
        $useremail = 'testemail@gmails.com' ; 

        $output = $this->user->read_user_information($useremail);
        $expected = false;
        $this->assertEquals($expected, $output);
    }
}
