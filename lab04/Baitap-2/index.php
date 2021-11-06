<?php
class VanDongVien{
    public $hoten,$tuoi,$monthidau,$cannang,$chieucao;
    public $arrVDV = array();
     function __construct($hoten="", $tuoi="", $monthidau="", $cannang="", $chieucao="")
    {
        $this->hoten = $hoten;
        $this->tuoi = $tuoi;
        $this->monthidau = $monthidau;
        $this->cannang = $cannang;
        $this->chieucao = $chieucao;
    }
    public function input(){
        array_push($arrVDV,(object)[$this->hoten, $this->tuoi,$this->monthidau,$this->cannang,$this->chieucao]);
        foreach($arrVDV as $vdv){
            echo $vdv;
        }
    }
}
$vdv = new VanDongVien("nguyen dinh phat trien","12","lap trinh phan mem","63","1.75");
$vdv->input();
?>