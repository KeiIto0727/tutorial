<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>ユーザー登録</title>
    </head>
    <body>
        <h1 align="center">ログイン</h1>
        <form method="post" action="post2.php" align="center">
            <label for="name">名前：</label>
            <input id="name" type="text" name="name" size="15"><br>
            <br>
            性別 :
            <input id="gender1" type="radio" name="gender" value="男" />
            <label for="gender1">男</label>
            <input id="gender2" type="radio" name="gender" value="女" />
            <label for="gender2">女</label>
            <br>
            <br>
            <input type="submit" value="送信！">
        </form>
    </body>
</html>