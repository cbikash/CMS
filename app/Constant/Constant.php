<?php


namespace App\Constant;


class Constant
{

    const Home_DESCRIPTION = '101';
    const About_PAGE = '102';
    const FOOTER_ABOUT = '103';
    const APPLY_PAGE = '104';
    const STUDY_IN_JAPAN = '105';

    public static  $TYPE_SLIDER = '201';
    public static $TYPE_PLACE = '202';

    static $aboutTypes = [
        self::Home_DESCRIPTION => 'Home Page',
        self::About_PAGE => 'About Page',
        self::FOOTER_ABOUT => 'Footer Section',
    ];


}
