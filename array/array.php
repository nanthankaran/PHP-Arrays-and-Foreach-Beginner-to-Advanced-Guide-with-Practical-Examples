<?php

$foodss=array("biryani","halwa","milksweet");


$kdkd =["karan","ksl"];
echo $kdkd[0];

$deteils=[
    "name"=>"karan",
    "age"=>"21",
    "work"=>"Frontend Developers"
];
 

$foods=[
    "starters"=>"milksweet",
    "maindish"=>"biryani"
];


foreach($foodss as $dishs){
    echo "$dishs <br>";
}
echo "<br>";
foreach($deteils as $fields =>$attribute){
    echo "My $fields is $attribute"."<br>";
}
echo "<br>";
foreach($foods as $dishcategory => $dishname){
    echo "$dishcategory - $dishname <br>";
}
echo "<br>";
?>
