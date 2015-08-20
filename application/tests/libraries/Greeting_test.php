<?php

class Greeting_test extends TestCase
{
    public function setUp()
    {
        $this->resetInstance();
        $this->CI->load->library('Greeting');
        $this->obj = $this->CI->greeting;
    }
    
    // テストケース　朝
    public function test_say_good_moring_at_7()
    {
        MonkeyPatch::patchMethod(
            'Greeting',
            ['getCurrentHour' => '7']
        );

        $result = $this->obj->say();
        $this->assertEquals('Good Morning.', $result);
    }
    
    // テストケース　昼
    public function test_say_good_afternoon_at_13()
    {
        MonkeyPatch::patchMethod(
            'Greeting',
            ['getCurrentHour' => '13']
        );

        $result = $this->obj->say();
        $this->assertEquals('Good Afternoon.', $result);
    }
    
    //...(同じメソッドsay()に対して時間帯条件ごとに複数のテストケース)
}
