<?php

class Calculate_test extends TestCase
{
    // セットアップ
    public function setUp()
    {
        $this->resetInstance();
        $this->CI->load->library('Calculate');
        $this->obj = $this->CI->calculate;
    }

    // テストケース add(x, y)
    public function test_add()
    {
        $result = $this->obj->add(1, 2);
        $this->assertEquals(3, $result);
    }

    // テストケース multi(x, y)
    public function test_multi()
    {
        $result = $this->obj->multi(4, 6);
        $this->assertEquals(24, $result);
    }

    //...
}
