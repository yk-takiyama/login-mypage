<?php
mb_internal_encoding("utf8");

$temp_pic_name = $_FILES['picture']['tmp_name'];

$original_pic_name = $_FILES['picture']['name'];
$path_filename = './image/'.$original_pic_name;

move_uploaded_file($temp_pic_name,'./image/'.$original_pic_name);

?>

<!DOCTYPE html>
<html lang = "ja">
    <head>
        <title>マイページ登録</title>
        <link rel="stylesheet" type="text/css" href="register_confirm.css">
    </head>
    <body>
        <header>
            <img src="4eachblog_logo.jpg">
        </header>
        
            <div class="kakunin">
                    <h2>会員登録 確認</h2>
                    <div class="bun">こちらの内容で登録しても宜しいでしょうか？</div>
                
                    <div class="name">
                        <p>氏名：
                        <?php echo $_POST['name']; ?>
                        <br>
                        </p>
                    </div>
                    <div class="mail">
                        <p>メール：
                        <?php echo $_POST['mail']; ?>
                        <br>
                        </p>
                    </div>
                    <div class="password">
                        <p>パスワード：
                        <?php echo $_POST['password']; ?>
                        <br>
                        </p>
                    </div>
                    <div class="picture">
                       <p>プロフィール写真：
                        <?php echo $original_pic_name; ?>
                        <br>
                        </p>
                    </div>
                    <div class="comments">
                      <p>コメント：
                        <?php echo $_POST['comments']; ?>
                        <br>
                        </p>
                    </div>
                    <div class="form_container">
                        <form action="register.php">
                            <input type="submit" class="button1" size="35" value="戻って修正する">
                        </form>
                        <form action="register_insert.php" method="post">
                            <input type="submit" class="button2" size="35" value="登録する">
                            
                            <input type="hidden" value="<?php echo $_POST['name']; ?>" name="name">
                            <input type="hidden" value="<?php echo $_POST['mail']; ?>" name="mail">
                            <input type="hidden" value="<?php echo $_POST['password']; ?>" name="password">
                            <input type="hidden" value="<?php echo $path_filename; ?>" name="picture">
                            <input type="hidden" value="<?php echo $_POST['comments']; ?>" name="comments">
                        </form>
                    </div>
                </div>
        
        <footer>
        ©︎2018 InterNous.inc. All rights reserved
        </footer>
    </body>
</html>