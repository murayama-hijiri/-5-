<?php
$name = $_POST["name"];
$seat = $_POST["seat"];
$email = $_POST["email"];
$tel = $_POST["tel"];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>入力確認ent</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
</head>
    <body>
        <?php include("header.php")?>
        <div class="main">
            <div class="confirm_content">
                <p class="title_text">お問い合わせ内容確認</p>
                <table>
                    <tbody>
                        <tr>
                            <td>お名前</td>
                            <td><?php echo $name;?></td>
                        </tr>
                        <tr>
                            <td>希望席</td>
                            <td><?php echo $seat;?></td>
                        </tr>
                        <tr>
                            <td>メールアドレス</td>
                            <td><?php echo $email;?></td>
                        </tr>
                        <tr>
                            <td>電話番号</td>
                            <td><?php echo $tel;?></td>
                        </tr>
                    </tbody>
                </table>
                <form action="thanks.php" method="get">
                    <input type="hidden" name="name" value="<?php echo $name; ?>">
                    <input type="hidden" name="seat" value="<?php echo $seat; ?>">
                    <input type="hidden" name="email" value="<?php echo $email; ?>">
                    <input type="hidden" name="tel" value="<?php echo $tel; ?>">
                    <div class="button_area">
                        <input type="button" id="return_button" value="戻る" onclick="history.back();">
                        <input type="submit" id="submit_button">
                    </div>
                </form>
            </div>
        </div>
        <?php include("footer.php")?>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="../js/index.js"></script>
    </body>
</html>