<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>入力内容確認</title>
</head>

<body>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $age = $_POST['age'];
        $tel = $_POST['tel'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $note = $_POST['note'];
        $gender = $_POST['gender'];

    }
    
    //バリデーション
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(!preg_match("/^[a-zA-Zぁ-んァ-ヶー一-龠]+$/u", $name)){
            echo "<p>名前はひらがな、カタカナ、漢字、英字のみ使用できます。</p>";
        } elseif(!is_numeric($age)||$age < 0 || $age > 150) {
            echo "<p>年齢は0から150の間で入力してください。</p>";
        } elseif(!preg_match("/^[0-9-]+$/", $tel)) {
        echo "<p>電話番号は半角英数とハイフンのみ使用できます。</p>";
        } elseif(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p>メールアドレスの形式が正しくありません。</p>";
        } elseif(!preg_match("/^[1-9a-zA-Zぁ-んァ-ヶー一-龠-]+$/", $address)) {
        echo "<p>住所はひらがな、カタカナ、漢字、英字、半角英数、ハイフンのみ使用できます。</p>";
        } else {
            echo"<p>名前:".htmlspecialchars($name,ENT_QUOTES,'UTF-8')."</p>";
            echo"<p>年齢：{$age}</p>";
            echo"<p>電話番号：{$tel}</p>";
            echo"<p>メールアドレス：{$email}</p>";
            echo"<p>住所：".htmlspecialchars($address,ENT_QUOTES,'UTF-8')."</p>";
            echo"<p>質問：".htmlspecialchars($note,ENT_QUOTES,'UTF-8')."</p>";
            echo"<p>性別：{$gender}</p>";
        } 
    }else{
            echo"<p>データが送信されていません。</p>";
        }
    ?>
</body>
</html>