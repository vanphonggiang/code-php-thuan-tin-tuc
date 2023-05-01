<?php
    if(isset($_POST['id']))
    {
        require_once "../../model/Query.php";
        $query = new Query();
        $data = $query->ChiTiet("nhom", [], ["id" => "="], ["id" => $_POST['id']]);
        echo json_encode([
            "status" => "success",
            "nhom" => $data
        ]);
    }
    else
    {
        echo json_encode([
            "status" => "fail"
        ]);
    }
?>