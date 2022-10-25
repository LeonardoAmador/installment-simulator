<?php
date_default_timezone_set('America/Sao_Paulo');

$value = $_POST['value'];
$quote = $_POST['quote'];
$date = $_POST['date'];
$raw  = $date;
$time_now = date('Y-m-d', strtotime($date.' days'));

echo "<table style=' border: 1.1px solid #ccc;
border-collapse: collapse;
box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.500);
max-width: 600px;
min-width: 300px;
background-color: white;
margin: auto;'>
    <thead>
        <tr>
            <th style = ' font-weight: bolder;
            color: black;
            border: 1.1px solid #ccc;
            text-align: center;
            text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.68);
            padding: 10px;'>Parcela</th>
            <th style = ' font-weight: bolder;
            color: black;
            border: 1.1px solid #ccc;
            text-align: center;
            text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.68);
            padding: 10px;'>Data vencimento</th>
            <th style = ' font-weight: bolder;
            color: black;
            border: 1.1px solid #ccc;
            text-align: center;
            text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.68);
            padding: 10px;'>Valor Parcela</th>
        </tr>
    </thead>
    <tbody>
    ";

for($i = 0;$i < intval($quote);$i++){
    echo "
    <tr>
        <td style = 'border: 1.1px solid #ccc;
        color: black;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.696);
        text-align: center;
        padding: 10px;'>". $i + 1 ."X</td>
        <td style = ' border: 1.1px solid #ccc;
        color: black;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.696);
        text-align: center;
        padding: 10px;'>".date('Y-m-d', strtotime($date.' days'))."</td>
        <td style = 'border: 1.1px solid #ccc;
        color: black;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.696);
        text-align: center;
        padding: 10px;'>".((float)$value / intval($quote))."</td>
    </tr>";
    $date = $date + $raw;
}    
echo "</tbody></table>";
?>