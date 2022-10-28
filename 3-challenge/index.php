
<?php

    $testFile = "test.txt";
    $contents = "hello!こんにちは！\n";
    
    if (is_writable($testFile)) {
        // 書き込み可能なときの処理
        // 対象のファイルを開く
        //$fp = fopen($testFile, "w");
        // 上書き
        $fp = fopen($testFile, "a");
        // 追記
        fwrite($fp, $contents);
        // ファイルを閉じる
        fclose($fp);
        // 書き込みした旨の表示
        echo "finish writing!!";
        echo "<br>";
    } else {
        // 書き込み不可のときの処理
        echo "not writable!";
        echo "<br>";
        exit;
    }

    $test_file = "test2.txt";
    
    if (is_readable($test_file)) {
        // 読み込み可能なときの処理
        // 対象のファイルを開く
        $fp = fopen($test_file, "r");
        // 開いたファイルから1行ずつ読み込む
        while ($line = fgets($fp)) {
            // 改行コード込みで1行ずつ出力
            echo $line.'<br>';
        }
        // ファイルを閉じる
        fclose($fp);
    } else {
        // 読み込み不可のときの処理
        echo "not readable!";
        exit;
    }
