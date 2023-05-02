<?php
    if(isset($_POST['id']))
    {
        require_once "../../model/Query.php";
        $query = new Query();
        $data = $query->ChiTiet("thanhvien", [], ["id" => "="], ["id" => $_POST['id']]);
        $dataNhom = $query->DanhSach("nhom");
        $str = '';

        $str .= '<div class="center">';
            $str .= '<span class="close"><i class="fa-solid fa-circle-xmark"></i></span>';
            $str .= '<h2>Cập nhật</h2>';
            
            $str .= '<p><b>User</b></p>';
            $str .= '<input type="text" name="user" disnable placeholder="Username" autocomplete="off" spellcheck="false" value="'.$data->user.'" />';

            $str .= '<p><b>Fullname</b></p>';
            $str .= '<input type="text" name="fullname" placeholder="Fullname" autocomplete="off" spellcheck="false" value="'.$data->fullname.'" />';

            $str .= '<p><b>Nhóm</b></p>';
            $str .= '<select>';
                $str .= '<option value="0">Chọn</option>';
                foreach($dataNhom as $key => $value)
                {
                    if($value->id == $data->nhom)
                    {
                        $str .= '<option value="'.$value->id.'" selected>'.$value->ten.'</option>';
                    }
                    else
                    {
                        $str .= '<option value="'.$value->id.'">'.$value->ten.'</option>';
                    }
                }
            $str .= '</select>';

            $str .= '<p></p>';
            $str .= '<input type="button" name="edit" value="Sửa" data='.$data->id.' />';
        $str .= '</div>';
        echo json_encode([
            "status" => "success",
            "thanhvien" => $str
        ]);
    }
    else
    {
        echo json_encode([
            "status" => "fail"
        ]);
    }
?>