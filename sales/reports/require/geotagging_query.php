<?php
$conn = new mysqli("localhost", "root", "", "thesis") or die(mysqli_error());

$abcasa = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Abcasa'") or die(mysqli_error());
$f1 = $abcasa->fetch_array();

$alangilan = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Alangilan'") or die(mysqli_error());
$f2 = $alangilan->fetch_array();

$alijis = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Alijis'") or die(mysqli_error());
$f3 = $alijis->fetch_array();

$banago = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Banago'") or die(mysqli_error());
$f4 = $banago->fetch_array();

$bata = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Bata'") or die(mysqli_error());
$f5 = $bata->fetch_array();

$cabug = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Cabug'") or die(mysqli_error());
$f6 = $cabug->fetch_array();

$estefania = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Estefania'") or die(mysqli_error());
$f7 = $estefania->fetch_array();

$felisa = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Felisa'") or die(mysqli_error());
$f8 = $felisa->fetch_array();

$granada = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Granada'") or die(mysqli_error());
$f9 = $granada->fetch_array();

$handumanan = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Handumanan'") or die(mysqli_error());
$f10 = $handumanan->fetch_array();

$lopezjaena = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Lopez Jaena'") or die(mysqli_error());
$f11 = $lopezjaena->fetch_array();

$mabini = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Mabini'") or die(mysqli_error());
$f12 = $mabini->fetch_array();

$mandalagan = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Mandalagan'") or die(mysqli_error());
$f13 = $mandalagan->fetch_array();

$mansilingan = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Mansilingan'") or die(mysqli_error());
$f14 = $mansilingan->fetch_array();

$montevista = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Montevista'") or die(mysqli_error());
$f15 = $montevista->fetch_array();

$pahanocoy = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Pahanocoy'") or die(mysqli_error());
$f16 = $pahanocoy->fetch_array();

$ptataytay= $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Punta Taytay'") or die(mysqli_error());
$f17 = $ptataytay->fetch_array();

$singcang = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Singcang'") or die(mysqli_error());
$f18 = $singcang->fetch_array();

$sumag = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Sumag'") or die(mysqli_error());
$f19 = $sumag->fetch_array();

$taculing = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Taculing'") or die(mysqli_error());
$f20 = $taculing->fetch_array();

$tangub = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Tangub'") or die(mysqli_error());
$f21 = $tangub->fetch_array();

$villaesperanza = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Villa Esperanza'") or die(mysqli_error());
$f22 = $villaesperanza->fetch_array();

$villamonte = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Villamonte'") or die(mysqli_error());
$f23 = $villamonte->fetch_array();

$vistaalegre = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Vista Alegre'") or die(mysqli_error());
$f24 = $vistaalegre->fetch_array();

$brgy1 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Brgy 1'") or die(mysqli_error());
$f26 = $brgy1->fetch_array();

$brgy2 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Brgy 2'") or die(mysqli_error());
$f27 = $brgy2->fetch_array();

$brgy3 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Brgy 3'") or die(mysqli_error());
$f28 = $brgy3->fetch_array();

$brgy4 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Brgy 4'") or die(mysqli_error());
$f29 = $brgy4->fetch_array();

$brgy5 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Brgy 5'") or die(mysqli_error());
$f30 = $brgy5->fetch_array();

$brgy6 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Brgy 6'") or die(mysqli_error());
$f31 = $brgy6->fetch_array();

$brgy7 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Brgy 7'") or die(mysqli_error());
$f32 = $brgy7->fetch_array();

$brgy8 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Brgy 8'") or die(mysqli_error());
$f33 = $brgy8->fetch_array();

$brgy9 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Brgy 9'") or die(mysqli_error());
$f34 = $brgy9->fetch_array();

$brgy10 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Brgy 10'") or die(mysqli_error());
$f35 = $brgy10->fetch_array();

$brgy11 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Brgy 11'") or die(mysqli_error());
$f36 = $brgy11->fetch_array();

$brgy12 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Brgy 12'") or die(mysqli_error());
$f37 = $brgy12->fetch_array();

$brgy13 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Brgy 13'") or die(mysqli_error());
$f38 = $brgy13->fetch_array();

$brgy14 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Brgy 14'") or die(mysqli_error());
$f39 = $brgy14->fetch_array();

$brgy15 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Brgy 15'") or die(mysqli_error());
$f40 = $brgy15->fetch_array();

$brgy16 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Brgy 16'") or die(mysqli_error());
$f41 = $brgy16->fetch_array();

$brgy17 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Brgy 17'") or die(mysqli_error());
$f42 = $brgy17->fetch_array();

$brgy18 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Brgy 18'") or die(mysqli_error());
$f43 = $brgy18->fetch_array();

$brgy19 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Brgy 19'") or die(mysqli_error());
$f44 = $brgy19->fetch_array();

$brgy20 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Brgy 20'") or die(mysqli_error());
$f45 = $brgy20->fetch_array();

$brgy21 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Brgy 21'") or die(mysqli_error());
$f46 = $brgy21->fetch_array();

$brgy22 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Brgy 22'") or die(mysqli_error());
$f47 = $brgy22->fetch_array();

$brgy23 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Brgy 23'") or die(mysqli_error());
$f48 = $brgy23->fetch_array();

$brgy24 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Brgy 24'") or die(mysqli_error());
$f49 = $brgy24->fetch_array();

$brgy25 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Brgy 25'") or die(mysqli_error());
$f50 = $brgy25->fetch_array();

$brgy26 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Brgy 26'") or die(mysqli_error());
$f51 = $brgy26->fetch_array();

$brgy27 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Brgy 27'") or die(mysqli_error());
$f52 = $brgy27->fetch_array();

$brgy28 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Brgy 28'") or die(mysqli_error());
$f53 = $brgy28->fetch_array();

$brgy29 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Brgy 29'") or die(mysqli_error());
$f54 = $brgy29->fetch_array();

$brgy30 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Brgy 30'") or die(mysqli_error());
$f55 = $brgy30->fetch_array();

$brgy31 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Brgy 31'") or die(mysqli_error());
$f56 = $brgy31->fetch_array();

$brgy32 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Brgy 32'") or die(mysqli_error());
$f57 = $brgy32->fetch_array();

$brgy33 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Brgy 33'") or die(mysqli_error());
$f58 = $brgy33->fetch_array();

$brgy34 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Brgy 34'") or die(mysqli_error());
$f59 = $brgy34->fetch_array();

$brgy35 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Brgy 35'") or die(mysqli_error());
$f60 = $brgy35->fetch_array();

$brgy36 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Brgy 36'") or die(mysqli_error());
$f61 = $brgy36->fetch_array();

$brgy37 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Brgy 37'") or die(mysqli_error());
$f62 = $brgy37->fetch_array();

$brgy38 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Brgy 38'") or die(mysqli_error());
$f63 = $brgy38->fetch_array();

$brgy39 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Brgy 39'") or die(mysqli_error());
$f64 = $brgy39->fetch_array();

$brgy40 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Brgy 40'") or die(mysqli_error());
$f65 = $brgy40->fetch_array();

$brgy41 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE  `status` = 'Registered' && `barangay` = 'Brgy 41'") or die(mysqli_error());
$f66 = $brgy41->fetch_array();

?>
