<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        function sort_2way($array, $order) {
          // 引数$orderがTRUEの場合
          if ($order === true) {
            echo '昇順にソートします。<br>';
            sort ($array);  
          // 引数$orderがそれ以外（FALSE）の場合
          } else {
            echo '降順にソートします。<br>';
            rsort ($array);
          }
      
          // ソートした配列のデータを1行ずつ表示する
          foreach ($array as $num) {
            echo $num . '<br>';
          }
        }
        // ソートする配列を宣言する
        $nums = [15, 4, 18, 23, 10];

        // 昇順ソートの呼び出し
        sort_2way($nums, true);

        // 降順ソートの呼び出し
        sort_2way($nums, false);   
        ?>
    </p>
</body>

</html>