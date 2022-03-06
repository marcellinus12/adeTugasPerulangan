<?php 

$saya = [
    'nama' => 'Marcellinus Calvin',
    'email' => 'marcelcalvin26@gmail.com',
    'nomor' => '081331337006',
    'hobi' => 'Badminton',
    'sosmed' => ['ig' => '@marcelcalvin26', 'twitter' => '@leodegrance00']
  ];
  
  echo '<br>';
  echo 'Nama : '.$saya['nama'];
  echo '<br>';
  echo 'Email : '.$saya['email'];
  echo '<br>';
  echo 'Nomor : '.$saya['nomor'];
  echo '<br>';
  echo 'Hobi : '.$saya['hobi'];
  echo '<br>';
  echo 'Media Sosial : '.'Instagram '.$saya['sosmed']['ig'].' & '.'Twitter '.$saya['sosmed']['twitter'];
  

?>