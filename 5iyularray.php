<!-- - Bir array yaradın və içərisinə 5 fərqli ad əlavə edin .
  - Array-dən 2-ci adı "Samir" olaraq yeniləyin.
  - Array-dən 4-cü elementi silin.
  - Array-də neçə element olduğunu tapın və ekrana sayını yazdırın
  - foreach dövrünü istifadə edərək array-dən bütün elementləri ekrana yazdırın.
  - Array-də "Nurlan" adının olub olmadığını yoxlayın

- İçərisində rəqəmlər olan bir array yaradın və bütün elementlərin toplamını hesablayın
- İki fərqli array-i birləşdirərək yeni bir array yaradın -->

<?php
// - Array-dən 2-ci adı "Samir" olaraq yeniləyin.

$NAME=["Rəqsanə","Sunar","Abdulla","Nurlan","Samir"];
$NAME[1]="Samir";
print_r($NAME) ;
echo "<br>";

// - Array-dən 4-cü elementi silin.

unset($NAME[3]);
print_r($NAME);
echo "<br>";

//- Array-də neçə element olduğunu tapın və ekrana sayını yazdırın
print_r(count($NAME)); //silinmis arraydaki adlarin sayisini ekrana yazdirir

echo "<br>";
//  - foreach dövrünü istifadə edərək array-dən bütün elementləri ekrana yazdırın.

foreach ($NAME as $value) {
    echo $value;
    echo "<br>";
}
//  - Array-də "Nurlan" adının olub olmadığını yoxlayın

if(in_array("Nurlan",$NAME)){
    echo "Nurlan adi var";
}else{
    echo "Nurlan adi yoxdur";
}
echo "<br>";

?>
<?php
// - İçərisində rəqəmlər olan bir array yaradın və bütün elementlərin toplamını hesablayın
$numbers=[1,2,3,4,5,6,7,8,9,10];
echo array_sum($numbers);
echo "<br>";
?>
<?php
// - İki fərqli array-i birləşdirərək yeni bir array yaradın
$numbers1=[1,2,3,4,5,6,7,8,9,10];
$numbers2=[11,12,13,14,15,16,17,18,19,20];
$numbers3=array_merge($numbers1,$numbers2);
print_r($numbers3);
?>

