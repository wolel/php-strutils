<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 28/01/2019
 * Time: 15:35
 */

class StrUtils
{

    private $str;

    public function __construct($str)
    {
        $this->str = $str;
    }

    public function bold()
    {
        return "<strong>" . $this->str . "</strong>";
    }

    public function italic()
    {
        return "<i>" . $this->str . "</i>";
    }

    public function underline()
    {
        return "<u>" . $this->str . "</u>";
    }

    public function capitalize()
    {
        return mb_strtoupper($this->str);
    }

    public function uglify()
    {
        return "<strong><i><u>".mb_strtoupper($this->str)."</u></i></strong>";
    }

}