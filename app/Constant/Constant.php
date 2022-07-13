<?php


namespace App\Constant;


class Constant
{

    const Home_DESCRIPTION = '101';
    const About_PAGE = '102';
    const FOOTER_ABOUT = '103';
    const APPLY_PAGE = '104';
    const STUDY_IN_JAPAN = '105';

    static $aboutTypes = [
        self::Home_DESCRIPTION => 'Description of Home page',
        self::About_PAGE => 'About Page',
        self::FOOTER_ABOUT => 'Footer About',
        self::APPLY_PAGE => 'Apply process page',
        self::STUDY_IN_JAPAN => 'Study in japan'
    ];

}
