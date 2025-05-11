<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>課題016</title>
</head>

<body>
   <p>
       <?php
       // クラスを定義する
       class Food {
          // プロパティを定義する
          private $name;
          private $price;

          //  コンストラクタを定義する
          public function __construct(string $name, int $price) {
            $this->name = $name;
            $this->price = $price;
          }

          //  メソッドを定義する
          public function show_price() {
            echo $this->price . '<br>';
          }
       }

       // インスタンス化する
       $food = new Food('potate', 250);

       //  インスタンス$foodの各プロパティの値を出力する
       print_r($food);      
       ?>
   </p>

   <p>
       <?php
       // クラスを定義する
       class Animal {
          // プロパティを定義する
          private $name;
          private $height;
          private $weight;

          //  コンストラクタを定義する
          public function __construct(string $name, int $height, int $weight) {
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
          }

          //  メソッドを定義する
          public function show_height() {
            echo $this->height. '<br>';
          }

       }

       // インスタンス化する
       $animal = new Animal('dog', 60, 5000);

       //  インスタンス$foodの各プロパティの値を出力する
       print_r($animal);
       
       // メソッドの呼び出し
       echo '<br>';
       echo $food->show_price();
       echo $animal->show_height();
       ?>
   </p>   
</body>

</html>