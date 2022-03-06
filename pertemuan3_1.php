<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" style="text-align: center; padding: 5px;">
        <thead>
            <th style="padding: 5px;">Nama</th>
            <th style="padding: 5px;">Nilai/Huruf Bahasa Indonesia</th>
            <th style="padding: 5px;">Nilai/Huruf IPS</th>
        </thead>
        <tbody>
            <?php
            $data = [
                ['nama' => 'Marcel', 'bi' => 100, 'ipa' => 100],
                ['nama' => 'Bagas', 'bi' => 75, 'ipa' => 53],
                ['nama' => 'Budi', 'bi' => 45, 'ipa' => 78],
                ['nama' => 'Hudin', 'bi' => 70, 'ipa' => 26],
                ['nama' => 'Paijo', 'bi' => 86, 'ipa' => 86],
                ['nama' => 'Karjo', 'bi' => 34, 'ipa' => 89],
                ['nama' => 'Bambang', 'bi' => 89, 'ipa' => 75],
                ['nama' => 'Wahyu', 'bi' => 83, 'ipa' => 80],
                ['nama' => 'Baron', 'bi' => 100, 'ipa' => 94],
                ['nama' => 'Hildan', 'bi' => 92, 'ipa' => 67]
            ];
                foreach ($data as $d) {
                    echo '<tr></tr>';
                    echo '<td>'.$d['nama'].'</td>';
                    if ($d['bi']>=80 && $d['bi']<=100) {
                        echo '<td>'.$d['bi'].'/A</td>';
                    } else if($d['bi']>=60 && $d['bi']<=79){
                        echo '<td>'.$d['bi'].'/B</td>';
                    } else if($d['bi']>0 && $d['bi']<=59){
                        echo '<td>'.$d['bi'].'/C</td>';
                    } else{
                        echo '<td>nilai belum masuk</td>';
                    }
                    
                    if ($d['ipa']>=80 && $d['ipa']<=100) {
                        echo '<td>'.$d['ipa'].'/A</td>';
                    } else if($d['ipa']>=60 && $d['ipa']<=79){
                        echo '<td>'.$d['ipa'].'/B</td>';
                    } else if($d['ipa']>0 && $d['ipa']<=59){
                        echo '<td>'.$d['ipa'].'/C</td>';
                    } else{
                        echo '<td>nilai belum masuk</td>';
                    }
                }
            ?>
        </tbody>
    </table>
</body>
</html>


<!-- <?php 

    $data = [
        ['nama' => 'Marcel', 'bi' => 100, 'ipa' => 100],
        ['nama' => 'Bagas', 'bi' => 75, 'ipa' => 53],
        ['nama' => 'Budi', 'bi' => 45, 'ipa' => 78],
        ['nama' => 'Hudin', 'bi' => 70, 'ipa' => 26],
        ['nama' => 'Paijo', 'bi' => 86, 'ipa' => 86],
        ['nama' => 'Karjo', 'bi' => 34, 'ipa' => 89],
        ['nama' => 'Bambang', 'bi' => 89, 'ipa' => 75],
        ['nama' => 'Wahyu', 'bi' => 83, 'ipa' => 80],
        ['nama' => 'Baron', 'bi' => 100, 'ipa' => 94],
        ['nama' => 'Hildan', 'bi' => 92, 'ipa' => 67]
    ];

    echo $data['nama'];
    foreach ($data as $d) {
        echo $d['nama'];
        echo '<br>';
        if ($d['bi']>=80 && $d['bi']<=100) {
            echo "Nilai Bahasa Indonesia A";
        } else if($d['bi']>=60 && $d['bi']<=79){
            echo "Nilai Bahasa Indonesia B";
        } else if($d['bi']>0 && $d['bi']<=59){
            echo "Nilai Bahasa Indonesia C";
        } else{
            echo "Nilai Bahasa Indonesia belum masuk";
        }
        echo '<br>';
        if ($d['ipa']>=80 && $d['ipa']<=100) {
            echo "Nilai IPA A";
        } else if($d['ipa']>=60 && $d['ipa']<=79){
            echo "Nilai IPA B";
        } else if($d['ipa']>0 && $d['ipa']<=59){
            echo "Nilai IPA C";
        } else{
            echo "Nilai IPA belum masuk";
        }
        echo '<br>';
        echo '<br>';
    }

?> -->