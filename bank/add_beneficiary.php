<?php
    include "validate_customer.php";
    include "header.php";
    include "customer_navbar.php";
    include "customer_sidebar.php";
    include "session_timeout.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/customer_add_style.css">
</head>

<body>
    <form class="add_customer_form" action="./add_beneficiary_action.php" method="post">
        <div class="flex-container-form_header">
            <h1 id="form_header">Vui lòng điền chi tiết thụ hưởng</h1>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Họ: </label><br>
                <input name="fname" size="30" type="text" required />
            </div>
            <div  class=container>
                <label>Tên: </b></label><br>
                <input name="lname" size="30" type="text" required />
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Số tài khoản: </label><br>
                <input name="acno" size="25" type="text" required />
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Email: </label><br>
                <input name="email" size="30" type="text" required />
            </div>
            <div  class=container>
                <label>Số điện thoại: </b></label><br>
                <input name="phno" size="30" type="text" required />
            </div>
        </div>

        <div class="flex-container">
            <div class="container">
                <a href="./beneficiary.php" class="button">Trở về</a>
            </div>

            <div class="container">
                <button type="submit">Đồng ý</button>
            </div>

            <div class="container">
                <button type="reset" class="reset" onclick="return confirmReset();">Đặt lại</button>
            </div>
        </div>

    </form>

    <script>
    function confirmReset() {
        return confirm('Bạn thực sự muốn đặt lại?')
    }
    </script>

</body>
</html>
