<?php
    include "validate_admin.php";
    include "connect.php";
    include "header.php";
    include "user_navbar.php";
    include "staff_sidebar.php";
    include "session_timeout.php";
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
            $headline = mysqli_real_escape_string($conn, $_POST["headline"]);
            $news_details = mysqli_real_escape_string($conn, $_POST["news_details"]);

            $sql0 = "INSERT INTO news (title, created)
            VALUES('$headline', NOW())";

            $sql1 = "INSERT INTO news_body (body)
            VALUES('$news_details')"; ?>

            <?php
            if (($conn->query($sql0) === TRUE) && ($conn->query($sql1) === TRUE)) { ?>
                <p id="info"><?php echo "Đăng tin tức thành công!\n"; ?></p>
            <?php
            } else { ?>
                <p id="info"><?php
                echo "Lỗi hệ thống!<br>";
                echo "Lỗi: " . $sql1 . "<br>" . $conn->error . "<br>"; ?></p>
            <?php
            }

            $conn->close();
            ?>
        </div>

        <div class="flex-item">
            <a href="./post_news.php" class="button">Tiếp tục đăng</a>
        </div>

    </div>

</body>
</html>
