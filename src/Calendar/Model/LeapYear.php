<?php
/**
 * Created by PhpStorm.
 * User: jack
 * Date: 19.10.17
 * Time: 0:56
 */
namespace Calendar\Model;

class LeapYear
{
    public function isLeapYear($year = null)
    {
        if (null === $year) {
            $year = date('Y');
        }

        return 0 == $year % 400 || (0 == $year % 4 && 0 != $year % 100);
    }
}
