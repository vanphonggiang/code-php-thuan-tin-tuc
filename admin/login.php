<?php
    session_start();
    $arrQuyen=[1];
    require_once 'model/Query.php';
    $query = new Query();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="public/css/login.css" />
    <script src="public/js/jquery.js"></script>
</head>
<body>
    <section>
        <div class="login-wrap">
            <h2>LOGIN</h2>
            <form method="post" class="form-login">
                <p class="tit">Tài khoản</p>
                <input type="text" name="username" placeholder="Username" class="email"/><br>
                
                <p class="tit">Mật khẩu</p>
                <input type="password" name="password" placeholder="Password" class="password"/><br>
                
                <input type="submit" name="btnLogin" value="Login" class="button" />
            </form>

            <?php
                if(isset($_POST['btnLogin']) )
                {
                    $check = $query->ChiTiet("thanhvien", [], ["user" => "="], ["user" => $_POST['username']]);
                    if(!empty($check))
                    {
                        if(md5($_POST['password']) == $check->pass)
                        {
                            if(in_array($check->nhom, $arrQuyen))
                            {
                                $_SESSION['proid']=$check->id;
                                $_SESSION['profullname']=$check->fullname;
                                $_SESSION['pronhom']=$check->nhom;
                                header('location:index.php');
                            }
                            else
                            {
                                echo "<p class='thong-bao'>Bạn không có quyền truy cập</p>";
                            }
                        }
                        else
                        {
                            echo "<p class='thong-bao'>Sai mật khẩu</p>";
                        }
                        
                    }
                    else
                    {
                        echo "<p class='thong-bao'>Tài khoản không tồn tại</p>";
                    }
                }
            ?>
        </div>
    </section>
</body>
</html>
<script>
    $(document).ready(function(){
        $(".form-login").submit(function(e){
            if ($(".email").val()=="") 
            {
                $(".email").css('box-shadow', '0px 0px 3px red');
                $(".email").focus();
                e.preventDefault(); 
            }
            if ($(".password").val()=="") 
            {
                $(".password").css('box-shadow', '0px 0px 3px red');
                $(".password").focus();
                e.preventDefault(); 
            }
        });
    });
</script>