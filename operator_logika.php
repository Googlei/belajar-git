<?php
	$x  = true;
	$y = true;
?>
	<table  class = "table table-bordered table-striped">
		<tr><th>$x</th><th><?php var_dump(%x); ?> </th></tr>
		<tr><th>$y</th><th><?php var_dump($y); ?> </th></tr>
		<tr><th>!$x</th><td><?php var_dump(!$x); ?> </td> </tr>
		<tr><th>!$y</th><td><?php var_dump(!$y); ?></td></tr>
		<tr><th>$x and $y</th><td><?php var_dump($x and $y); ?> </td></tr>
		<tr><th>$x and $y</th><td><?php var_dump($x or $y);  ?> </td></tr>
		<tr><th>$x xor $y</th><td><?php var_dump($x xor $y); ?> </td></tr>
	</table>

// ini adlah penggunaan parameter switch pada php
	/* biasa di gunakan untuk menjalankan satu di antara banyak blok kode berdasarkan kecocokan nilai yang di evaluasi
	*/

<?php
	$haywan = "kalb";

switch($haywan) {
	case "hirroh":
    	echo "<h1>Ini Gambar Kucing</h1>";
    	echo '<img src="http://i.imgur.com/4AiXzf8.jpg" />';
        break;
    case "kalb":
    	echo "<h1>Ini Gambar Anjing</h1>";
    	echo '<img src="http://i.imgur.com/A8eQsll.jpg" />';
        break;
    case "qird":
        echo "<h1>Ini Gambar Monyet</h1>";
    	echo '<img src="http://i.imgur.com/CXwaR8c.jpg" />';
        break;
    default:
    	echo "<h1>Ini Gambar Manusia</h1>";
    	echo '<img src="http://i.imgur.com/u0mFu.jpg" />';
}
	
	// parameter penggunaan switch pada php akan menjalankan blok kode yang case nya cocok dengan nilai variabel yang di evaluasi
<?php

$binatang = "yosta";

switch($binatang){
	case "ayam":
    	echo $binatang . " termasuk hewan omnivora";
        break;
	case "sapi":
    	echo $binatang . " termasuk hewan herbivora";
        break;
	case "kambing":
    	echo $binatang . " termasuk hewan herbivora";
        break;
	case "serigala":
    	echo $binatang . " termasuk hewan karnivora";
        break;
	case "harimau":
    	echo $binatang . " termasuk hewan karnivora";
        break;
	case "tikus":
    	echo $binatang . " termasuk hewan omnivora";
        break;
  	case "yosta":
    	echo $binatang . "|^_^|hallo yosta nice to meet you";
    	break;
	default:
    	echo $binatang . " tidak terdaftar di program";
        break;
}

// array multidimensi atau yang biasa kita kenal sebagai array bersarang	

	<?php

$herbivora = array('kambing', 'sapi', 'kuda');
$karnivora = array('harimau', 'serigala', 'anjing');
$omnivora = array('ayam', 'monyet', 'beruang');

$binatang = array($herbivora, $karnivora, $omnivora);

print_r($binatang);

<?php

$x = 0; 
while($x < 5) {
    echo "Nomor: $x <br>";
    $x++;
}

/* foreach bersarang atau yang biasa kita kenal sbgi array 	bersarang */

<?php 
$herbivora = array ('kambing','sapi','kuda');
$karnivora = array ('harimau','serigala', 'singa');
$omnivora  = array ('ayam', 'monyet', 'beruang');
$binatang  = array (
	'herbivora' => $herbivora,
	'karnivora' => $karnivora,
	'omnivora'  => $omnivora,
);

foreach ($binatang as $jenis) {
	foreach ($jenis as $nama) {
	echo $nama. ",";
	}
		echo "<br \>";
	}

// string replace di gunakan untuk melihat suatu string yang sama tapi mengulangi yang kalimat yg berbeda
<?php

$kalimat = "Saya suka Pizza";
echo str_replace("Cilok", "Batagor", $kalimat);

// Mengembalikan Nilai Function pada PHP

<?php

// fungsi untuk menghitung luas lingkaran
function luasLingkaran($length, $use_diameter = true){
if ($use_diameter)
  return $luas = 1/4 * 3,14 * $diameter;
// diketahui PI = 3,14 || 22/7
// menghitung luas berdasarkan diameter
  return $luas =  3,14 * $diameter;

$diameter = 14;
$luas = luasLingkaran($diameter);
echo "luas berdasarkan diameter: $luas <br />";

// menghitung luas berdasarkan jari-jari
	return $radius = 22/7 * $radius * $radius;

$radius = 7;
$luas = luasLingkaran($radius, false);
echo "luas berdasarkan radius: $luas <br />";
  
}

?>
 
