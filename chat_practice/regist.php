<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>◆chat◆</title>
  <link href="style.css" rel="stylesheet">
</head>
<body>
<header class="header">chat
<a class="logout" href="logout.php">ログアウト</a>
</header>

<form method="post" action="check.php">
  <div class="box">
   <fieldset>
         <p>※ユーザーIDとパスワードは、数字とアルファベットで8文字以内でご登録ください。</p>
    <legend>新規登録</legend>
     <label>お名前：<input type="text" name="username"></label><br>
     <label>ユーザーID：<input type="text" name="lid"></label><br>
     <label>パスワード：<input type="text" name="lpw"　pattern="(^[0-9A-Za-z]+$>)"></label><br>
     <input type="submit" value="入力内容を確認する" class="button">
    </fieldset>
  </div>
</form>



<footer class="footer">chat</footer>

 <!-- jQueryを読み込む！必ず先に！
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- <script src="js/app.js"></script>  -->
</body>
</html>

