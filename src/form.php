<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>フォーム入力</title>
    <link rel="stylesheet" href="style.css?v=<?php echo filemtime('style.css'); ?>">

</head>

<body>
    <h1>フォーム入力</h1>

    <form action="confirm.php" method="post">
        <label for="name">名前:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="age">年齢：</label>
        <input type="number" id="age" name="age" required><br><br>

        <label for="phone">電話番号：</label>
        <input type="phone" id="phone" name="phone" required><br><br>

        <label for="email">メールアドレス：</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="address">住所：</label>
        <input type="text" id="address" name="address" required><br><br>

        <label for="question">質問：</label>
        <textarea id="note" name="question" rows="4" required></textarea><br><br>

        <label for="gender">性別：</label>
        <input type="gender" id="gender" name="gender" required><br><br>

        <button type="submit">送信</button>
    </form>
</body>
</html>