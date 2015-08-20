<?php

class Greeting
{
    private function getCurrentHour()
    {
        $hour = date('H');
        return $hour;
    }
    
    public function say()
    {
        $greeting = '';
        $hour = $this->getCurrentHour();
        if (6 <= $hour && $hour <= 11) {
            $greeting = 'Good Morning.';
        } elseif (12 <= $hour && $hour <= 16) {
            $greeting = 'Good Afternoon.';
        } elseif (17 <= $hour && $hour <= 20) {
            $greeting = 'Good Evening.';
        } elseif (21 <= $hour && $hour <= 23) {
            $greeting = 'Good Night.';
        } elseif (0 <= $hour && $hour <= 5) {
            $greeting = 'ZZZ...';
        }
        return $greeting;
    }
}
