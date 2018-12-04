<?php $cities = ['Berlynas', 'Roma', 'Londonas'];
  $cities[] = 'Tokijas';
  $cities2 = [
    'Tokijas' => 13.6,
    'Vasingtonas' => 0.6,
    'Maskva' => 11.5
  ];
  print_r($cities);
  $cities2 ['Londonas'] = 8.6;
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <ul>
      <li><?php echo $cities[1]; ?></li>
    </ul>

    <ul>
     <?php
       foreach ($cities2 as $city => $citizens) {
         echo "<li>$city Gyventoju skaicius: $citizens</li>";
       };
      ?>
   </ul>
  </body>
</html>