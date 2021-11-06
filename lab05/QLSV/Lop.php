<?php
require_once 'entity.php';
class Lop extends Entity {
    public function GetAll()
    {
        return $this->mySql->GetAll('Lop');
    }
    public function GetById($id)
    {
        $query = "select * from Lop where MALOP='" . $id . "'";
        $result = $this->mysql->MyQuery($query);
        return mysqli_fetch_array($result);
    }
    public function Insert($malop, $tenlop)
    {
        $query = "call Add_Lop_Proc('" . $malop . "','" . $tenlop . ")";
        $result = $this->mySql->myQuery($query);
        return $result;
    }
    public function Update($malop, $tenlop)
    {
        $query = "call Update_Lop('" . $malop . "','" . $tenlop . ")";
        $result = $this->mySql->myQuery($query);
        return $result;
    }
    public function Delete($malop)
    {
        $query = "Delete from Lop where MSSV= '" . $malop . "'";
        $result = $this->mySql->myQuery($query);
        return $result;
    }
}


?>