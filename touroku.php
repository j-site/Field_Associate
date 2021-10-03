<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>ページのタイトルが入ります</title>
</head>
<body>
    <?php
    print (htmlspecialchars($_POST['namae'],ENT_QUOTES));
    echo "様";
    echo '<br>';
    echo "登録が完了しました。";
    echo "<br>";
    echo "次回からは登録したID,PASSでログインいただけます。";
    echo '<br/>';
    echo '<form>';
    echo '<input type="button" onclick="history.back()" value=戻る>';
    echo '</form>';

    ?>

</body>
</html>
