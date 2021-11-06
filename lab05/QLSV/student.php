<?
require 'entity.php';
class Student extends Entity {
    public function GetAll()
    {
        return $this->mySql->GetAll('SinhVien');
    }
    public function GetById($mssv)
    {
        $query = "select * from SinhVien where MSSV =' ". $mssv."'";
        $result= $this->mySql->myQuery($query);
        return  mysqli_fetch_array($result);
    }
    public function Insert($mssv,$hoten,$tuoi,$malop){
        $query = "call Add_SinhVien_Proc('".$mssv."','".$hoten."',".$tuoi.",'".$malop."')";
        $result =$this->mySql->myQuery($query);
        return $result;
    }
    public function Update($mssv, $hoten, $tuoi, $malop) {
        $query = "call Update_SinhVien_Proc('" . $mssv . "','" . $hoten . "'," . $tuoi . ",'" . $malop . "')";
        $result = $this->mySql->myQuery($query);
        return $result;
    }
    public function Delete($mssv)
    {
        $query = "Delete from SinhVien where MSSV= '" . $mssv . "'";
        $result = $this->mySql->myQuery($query);
        return $result;
    }

}
?>