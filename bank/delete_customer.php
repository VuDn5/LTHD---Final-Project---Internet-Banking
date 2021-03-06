<?php
    /* Avoid multiple sessions warning
    Check if session is set before starting a new one. */
    if(!isset($_SESSION)) {
        session_start();
    }

    include "validate_admin.php";
    include "connect.php";
    include "header.php";
    include "user_navbar.php";
    include "staff_sidebar.php";
    include "session_timeout.php";

    if (isset($_GET['cust_id'])) {
        $_SESSION['cust_id'] = $_GET['cust_id'];
    }

    $sql0 = "DELETE FROM customer WHERE cust_id=".$_SESSION['cust_id'];
    $sql1 = "DROP TABLE passbook".$_SESSION['cust_id'];
    $sql2 = "DROP TABLE beneficiary".$_SESSION['cust_id'];

?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/action_style.css">
</head>

<body>
    <div class="flex-container">
        <div class="flex-item">
            <?php
                if (($conn->query($sql0) === TRUE)) { ?>
                    <p id="info"><?php echo "Xóa khách hàng thành công!"; ?></p>
                <?php
                }
                else { ?>
                    <p id="info"><?php echo "Lỗi: " . $sql0 . "<br>" . $conn->error . "<br>"; ?></p>
                <?php
                }
            ?>
        </div>

        <div class="flex-item">
            <?php
                if (($conn->query($sql1) === TRUE)) { ?>
                    <p id="info"><?php echo "Xóa lịch sử giao dịch khách hàng thành công!"; ?></p>
                <?php
                }
                else { ?>
                    <p id="info"><?php echo "Lỗi: " . $sql1 . "<br>" . $conn->error . "<br>"; ?></p>
                <?php
                }
            ?>
        </div>

        <div class="flex-item">
            <?php
                if (($conn->query($sql2) === TRUE)) { ?>
                    <p id="info"><?php echo "Xóa người thụ hưởng khách hàng thành công!"; ?></p>
                <?php
                }
                else { ?>
                    <p id="info"><?php echo "Lỗi: " . $sql2 . "<br>" . $conn->error . "<br>"; ?></p>
                <?php
                }
            ?>
        </div>
        <?php $conn->close(); ?>

        <div class="flex-item">
            <a href="./manage_customers.php" class="button">Trở về</a>
        </div>

    </div>

</body>
</html>
