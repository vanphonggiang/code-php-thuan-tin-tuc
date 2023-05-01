<?php 
    if(isset($_POST['id']))
    {
        require_once "../../model/Query.php";
        $query = new Query();
        $query->CapNhat("nhom", ["ten"], ["id"], ["id" => $_POST['id'], "ten" => $_POST['ten']]);
        echo json_encode([
            "status" => "success",
            "ten" => $_POST['ten'],
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