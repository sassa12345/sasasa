<?php
if (isset($_FILES['video'])) {
    $target_dir = "uploads/";
    $filename = basename($_FILES["video"]["name"]);
    $target_file = $target_dir . $filename;

    if (move_uploaded_file($_FILES["video"]["tmp_name"], $target_file)) {
        echo "ご協力ありがとうございました。データは正常に送信されました。";
    } else {
        echo "データの送信に失敗しました。";
    }
} else {
    echo "データが送信されていません。";
}
?>
