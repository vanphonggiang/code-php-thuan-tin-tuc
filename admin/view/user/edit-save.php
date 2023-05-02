<?php 
    if(isset($_POST['id']))
    {
        require_once "../../model/Query.php";
        $query = new Query();
        $query->CapNhat("thanhvien", ["fullname", "nhom"], ["id"], ["id" => $_POST['id'], "fullname" => $_POST['fullname'], "nhom" => $_POST['nhom']]);
        echo json_encode([
            "status" => "success",
            "fullname" => $_POST['fullname'],
            "id" => $_POST['id']
        ]);
    }
    else
    {
        echo json_encode([
            "status" => "fail"
        ]);
    }
 ?>