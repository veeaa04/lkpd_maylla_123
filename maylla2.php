<?php //skenario 2
$jam = date("12.00");
$jam = floatval($jam); //knverensi ke float

if ( $jam >= 00.00 && $jam <= 04.00) {
    echo "Dini Hari";
}
else if ( $jam >= 04.00 && $jam <= 10.00) {
    echo "Pagi";
}
else if ( $jam >= 10.00 && $jam <= 15.00) {
    echo "Siang";
}
else if ( $jam >= 15.00 && $jam <= 17.30) {
    echo "Sore";
}
else if ( $jam >= 17.30 && $jam <= 18.30) {
    echo "Petang";
}
else if ( $jam >= 18.30 && $jam <= 24.00) {
    echo "Malam";
}
else if ( $jam >= 00.00 && $jam <= 24.00) {
    echo "Dunia Lain";
}
?>