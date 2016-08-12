<?php

$accountName = $data[0];
$balance = $data[1];
$detailtData = $data[2];
$error = $data[3];

?>
<meta charset="utf-8">
<h2><?php echo $accountName; // 帳戶名稱 ?></h2>
<h2>現在餘額：<?php echo $balance; ?></h2>

<?php echo $error; // 顯示錯誤訊息 ?>

<form method="POST">
    <label for="enter">輸入金額：</label>
    <input type="number" min="0" id="enter" name="enter"/>
    <input type="submit" name="enterSubmit" value="轉入"/>
    <br>
    <br>
    <label for="out">輸入金額：</label>
    <input type="number" min="0" id="out" name="out"/>
    <input type="submit" name="outSubmit" value="轉出"/>

    <input type="hidden" name="account" value="<?php echo $accountName; // 帳戶名稱 ?>"/>
</form>

<div>
    <!--顯示交易明細-->
    <table border="1">
        <tr>
            <td style="padding: 5px">時間</td>
            <td style="padding: 5px">金額</td>
        </tr>

        <?php foreach ($detailtData as $value) :?>
        <tr>
            <td style="padding: 5px"><?php echo $value['datetime']; ?></td>
            <td style="padding: 5px"><?php echo $value['transaction']; ?></td>
        </tr>
        <?php endforeach ?>
    </table>
</div>