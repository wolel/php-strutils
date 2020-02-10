<?php


class StrUtils2
{
private $str = "text ici";

    public function __constructor($str){
        $this->str = $str;
    }
    public function setText($str){
        $this->str = $str;
    }

    public function bold(){
        return "<b>".$this->str."</b>";
    }

    public function italic(){
        return "<i>".$this->str."</i>";
          }

    public function underline(){
        return "<u>".$this->str."</u>";

    }
    public function capitalize(){
        return strtoupper($this->str);

    }

    public function uglify(){

       $this->str = $this->bold();
       $this->str = $this->italic();
       $this->str = $this->underline();
       $this->str = $this->capitalize();

/*$this->bold()->italic()->underline();*/
       return $this->str;
    }
}
