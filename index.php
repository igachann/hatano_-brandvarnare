
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>てんけんチェッカー</title>
</head>
<body>
<div class="main-container">
    <h1>てんけんチェッカー</h1>
    <?php //var_dump($_POST); ?>
    <form method="post" action="confirm.php">
        <div class="element_wrap">
            <label>階数</label>
            <select name="floor">
                <?php for ($i=1; $i<=50; $i++) {?>
                    <option name="floor" value="<?php echo $i ?>"><?php echo $i.'階' ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="element_wrap">
            <label>部屋数</label>
            <select name="room">
                <?php for ($i=1; $i<=30; $i++) {?>
                    <option name="room" value="<?php echo $i ?>"><?php echo $i.'号室' ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="element_wrap">
            <label>4号室なしを考慮する</label>
            <input type="checkbox" name="exception-four" value="1" checked="checked">
        </div>

        <div class="element_wrap">
            <label>9号室なしを考慮する</label>
            <input type="checkbox" name="exception-nine" value="1" checked="checked">
        </div>
        <input  class="setting" type="submit" name="btn_confirm" value="設定する">
    </form>
</div>

</body>
</html>