<?php$kota = array (			'jatim' => array (							'1' => 'Malang',							'2' => 'Pasuruan',							'3' => 'Probolinggo',							'4' => 'Lumajang'						),			'jateng' => array (							'1' => 'Semarang',							'2' => 'Solo',							'3' => 'Klaten',							'4' => 'Magelang'						),			'jabar' => array (							'1' => 'bandung',							'2' => 'Banten',							'3' => 'Karawang',							'4' => 'Bekasi'						),			'lain'	=> array (							'1' => 'Pilih kota'						)		);$opsi = $_POST['kota'];if($opsi =='jatim'){	$arr = $kota['jatim'];}else if($opsi == 'jateng'){	$arr = $kota['jateng'];}else if($opsi=='jabar'){	$arr = $kota['jabar'];}else{	$arr = $kota['lain'];}foreach($arr as $key => $val){	echo '<option value="'.$key.'">'.$val.'</option>';}?>