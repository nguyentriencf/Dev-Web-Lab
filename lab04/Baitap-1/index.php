<?php
/*
1 lấy phân số
2. UCLN của tử số và mẫu số
3. chia tử số và mẫu số cho ước chung lớn nhất
4. phân số mới

*/
class phanso{
    public $tuso1,$mauso1,$tuso2,$mauso2;
    public $result;
   
    public function __construct() {
      
    }
    // public function NhapPhanso(phanso $this){

    // }
    public function UCLN($tuso, $mauso){
        for($i=1; $i<= $tuso; $i++) if($tuso % $i ==0) $ucln1[] = $i;
        for($i=1; $i<= $mauso;$i++) if($mauso % $i==0) $ucln2[] = $i;
        // chức năng của array_intersect() là đê lấy phần giao của hai mảng 
        $temp = array_intersect($ucln1,$ucln2);
        $result = max($temp);
        return $result;
    }
    public function ToiGian($phanso){
        $arrPhanSo = explode('/',$phanso);
        $ucln = $this->UCLN($arrPhanSo[0], $arrPhanSo[1]);
        $arrPhanSo[0] /= $ucln;
        $arrPhanSo[1] /= $ucln;
        return $arrPhanSo;
    }
    public function input($phansothu1, $phansothu2)
    {
        $ps1 = $this->ToiGian($phansothu1);
        $ps2 = $this->ToiGian($phansothu2);
        $this->tuso1 = $ps1[0];
        $this->mauso1 = $ps1[1];
        $this->tuso2 = $ps2[0];
        $this->mauso2 = $ps2[1];
    }
    function xulyketqua($tuso,$mauso){
        $arrResult = $this->ToiGian($tuso . '/' . $mauso);
        $this->result = implode('/', $arrResult);
        $this->result;
    }
    function cong(){
     $tuso =($this->tuso1* $this->mauso2)+($this->tuso2* $this->mauso1);
     $mauso = $this->mauso1 * $this->mauso2;
     return $this->xulyketqua($tuso, $mauso);
    }
    function tru()
    {
        $tuso = ($this->tuso1 * $this->mauso2) - ($this->tuso2 * $this->mauso1);
        $mauso = $this->mauso1 * $this->mauso2;
        return $this->xulyketqua($tuso, $mauso);
      
    } 
    function  nhan(){
        $tuso= $this->tuso1 * $this->tuso2;
        $mauso = $this->mauso1 * $this->mauso2;
        return $this->xulyketqua($tuso, $mauso);

    }
    function chia(){
        $tuso = $this->tuso1*$this->mauso2;
        $mauso = $this->mauso1 *$this->tuso2;
        return $this->xulyketqua($tuso, $mauso);
    }
    function outPut(){
        echo 'kết quả là: '. $this->result;
    }
}
$phanso= new phanso();
$phanso->input('4/2','1/2');
$phanso->chia();
// $phanso->tru();
$phanso->outPut();
?>