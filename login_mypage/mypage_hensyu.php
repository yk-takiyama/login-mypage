<?php
mb_internal_encoding("utf8");

session_start();

if(empty($_POST[from_mypage])){
    header("Location:login_error.php");
}

?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>マイページ登録</title>
        <link rel="stylesheet" type="text/css" href="mypage.css">
    </head>
    
    <body>
        <header>
            <img src="4eachblog_logo.jpg">
            <div class="login"><a href="log_out.php">ログアウト</a></div>
        </header>
        <main>
            <div class="box">
                <h2>会員情報</h2>
                <div class="hello">
                    <?php echo "こんにちは！　".$_SESSION['name']."さん"; ?>
                </div>
                <form method="post" action="mypage_update.php">
                    <div class="profile_pic">
                    <img src="<?php echo $_SESSION['picture'];?>">
                    </div>
                    <div class="basic_info">
                        <p>氏名：<input type="text" size="35" name="name" class="form-control" value="<?php echo $_SESSION['name'];?>"></p>
                        <p>メール：<input type="text" size="35" name="mail" class="form-control" value="<?php echo $_SESSION['mail'];?>"></p>
                        <p>パスワード：<input type="text" size="35" name="password" class="form-control" value="<?php echo $_SESSION['password'];?>"></p>
                    </div>
                    <div class="comments">
                        <textarea rows="2" cols="90" name="comments" class="form-control"><?php echo $_SESSION['comments'];?></textarea>
                    </div>
                    <div class="hensyubutton">
                        <input type="submit" class="submit_button2" size="35" value="この内容に変更する">
                    </div>
                </form>
            </div>
        </main>
        <footer>
        ©︎2018 InterNous.inc. All rights reserved
        </footer>
    </body>
</html>