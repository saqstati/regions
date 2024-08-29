<?php

// require_once 'connection.php';
// require_once __DIR__ . '/PHPExcel.php';
// require_once __DIR__ . '/PHPExcel/Writer/Excel5.php';

// $sql = 'SELECT * FROM municipalitiesaz';
// $result = mysqli_query($link, $sql);

// $objPHPExcel = new PHPExcel();
// $objPHPExcel->setActiveSheetIndex(0)
//             ->setCellValue('A1', 'A1')
//             ->setCellValue('B1', 'A2')
//             ->setCellValue('C1', 'A3')
//             ->setCellValue('D1', 'A4')
//             ->setCellValue('E1', 'A5')
//             ->setCellValue('F1', 'A6')
//             ->setCellValue('G1', 'A7')
//             ->setCellValue('H1', 'A8');

// $num_row = 1;
// foreach ($result as $row) {
// 	$num_row++;
// 	$objPHPExcel->setActiveSheetIndex(0)
// 		->setCellValue('A' . $num_row, $row['A1'])
// 		->setCellValue('B' . $num_row, $row['A2'])
// 		->setCellValue('C' . $num_row, $row['A3'])
// 		->setCellValue('D' . $num_row, $row['A4'])
// 		->setCellValue('E' . $num_row, $row['A5'])
// 		->setCellValue('F' . $num_row, $row['A6'])
// 		->setCellValue('G' . $num_row, $row['A7'])
// 		->setCellValue('H' . $num_row, $row['A8']);
// }

// $objPHPExcel->getActiveSheet()
//             ->getStyle('A1:J1')
//             ->getFont()
//             ->setBold(true);

// $objPHPExcel->setActiveSheetIndex(0);
// header('Content-Type: application/vnd.ms-excel');
// header("Content-Disposition: attachment;Filename=export.xls");
// header('Cache-Control: max-age=0');
// $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
// $objWriter->save('php://output');


// include_once ('xlsxwriter.class.php');
// ini_set('display_errors', 0);
// ini_set('log_errors', 1);
// error_reporting(E_ALL & ~E_NOTICE);

// $fileName = 'municipaliteties_compare.xlsx';


// header('Content-Disposition: attachment; filename="'.XLSXWriter::sanitize_filename($fileName).'"');
// header('Content-Type: pplication/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
// header('Content-Transfer-Encoding: binary'); 
// header('Cache-Control:must-revalidated');
// header('Pragma: public');

// $opt = [
// 	PDO::ATTR_ERRMODE               => PDO::ERRMODE_EXCEPTION,
// 	PDO::ATTR_DEFAULT_FETCH_MODE    => PDO::FETCH_ASSOC,
// 	PDO::ATTR_EMULATE_PREPARES      => false,
// ];
// try{
// 	$pdo = new PDO($link, $opt);
// }catch(PDOException $e){
// 	echo $e->getMessage();
// }

// $query = $pdo->prepare($sql);

// $query->execute();

// $write = new XLSXWriter();

// while($row = $query->fetch()){
// 	$write->writeSheetRow('Sheet1',$row);
// }

// $write->writeToStdOut();
// exit();

header("Content-Type: application/xls");
header('Content-Encoding: UTF-8');
header("Content-Transfer-Encoding: binary"); 
header('Expires: '.gmdate('D, d M Y H:i:s').' GMT'); 
header("Content-Disposition: attachment; filename=municipaliteties_list.xls");
header("Pragma: no-cache");
header("Expires: 0");
ob_clean();
flush();

// application/octet-stream

// header("Expires: 0");
// header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
// header("Cache-Control: private",false);

// header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
// header("Content-Disposition: attachment;filename=\"filename.xlsx\"");

// header("Pragma: public");
// header("Expires: 0");
// header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
// header("Content-type: application/vnd.ms-excel;charset:UTF-8");
// header("Content-Type: application/force-download");
// header("Content-Type: application/octet-stream");
// header("Content-Type: application/download");
// header("Content-Disposition: attachment;filename=orderlist.xlsx ");
// header("Content-Transfer-Encoding: binary ");

// Shuchkin\SimpleXLSXGen::fromArray( $output )->downloadAs('municipaliteties_list.xlsx');


// $file = "myfile.xlsx";
// header('Content-disposition: attachment; filename='.$file);
// header('Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
// header('Content-Length: ' . filesize($file));
// header('Content-Transfer-Encoding: binary');
// header('Cache-Control: must-revalidate');
// header('Pragma: public');
// ob_clean();
// flush(); 
// readfile($file);



require_once 'connection.php';

$key = isset($_GET['key']) ? $_GET['key'] : '0';
$mun = isset($_GET['mun']) ? $_GET['mun'] : '0';

$output = "";

$output .= "
		<table>
			<thead>
				<tr>
				";


$output .= "<th>მუნიციპალიტეტი</th>";
$output .= strstr($key, '1') ? "<th>ფართობი (კვ.კმ)</th>" : "";
$output .= strstr($key, '2') ? "<th>ქალაქების და დაბების რაოდენობა (ერთეული)</th>" : "";
$output .= strstr($key, '3') ? "<th>სოფლების რაოდენობა (ერთეული)</th>" : "";
$output .= strstr($key, '4') ? "<th>მოსახლეობის რიცხოვნობა (ათასი)</th>" : "";
$output .= strstr($key, '5') ? "<th>ცოცხლად დაბადებულთა რიცხოვნობა (კაცი)</th>" : "";
$output .= strstr($key, '6') ? "<th>შობადობის ზოგადი კოეფიციენტი (დაბადებულთა რიცხოვნობა მოსახლეობის 1000 კაცზე)</th>" : "";
$output .= strstr($key, '7') ? "<th>გარდაცვლილთა რიცხოვნობა (კაცი)</th>" : "";
$output .= strstr($key, '8') ? "<th>მოკვდაობის ზოგადი კოეფიციენტი (გარდაცვლილთა რიცხოვნობა მოსახლეობის 1000 კაცზე)</th>" : "";
$output .= strstr($key, '9') ? "<th>ბუნებრივი მატება (კაცი)</th>" : "";
$output .= strstr($key, '10') ? "<th>დასაქმებულთა რაოდენობა-ბიზნეს სექტორში (ათასი კაცი)</th>" : "";
$output .= strstr($key, '11') ? "<th>დასაქმებულთა საშუალოთვიური ხელფასი-ბიზნეს სექტორში (ლარი)</th>" : "";
$output .= strstr($key, '12') ? "<th>რეგისტრირებული ეკონომიკური სუბიექტების რაოდენობა (ერთეული)</th>" : "";
$output .= strstr($key, '13') ? "<th>აქტიური ეკონომიკური სუბიექტების რაოდენობა (ერთეული)</th>" : "";
$output .= strstr($key, '14') ? "<th>ახლადრეგისტრირებული ეკონომიკური სუბიექტების რაოდენობა (ერთეული)</th>" : "";

$output .= "					
				</tr>
			<tbody>
	";

$query = mysqli_query($link, "SELECT * FROM `municipalitiesaz` WHERE ID IN(" . $mun . ") ORDER BY Name ASC");
while ($fetch = $query->fetch_array()) {

	$output .= "
				<tr>
                    <td>" . $fetch['Name'] . "</td>";

	$output .= strstr($key, '1') ? "<td>" . $fetch['Area'] . "</td>" : "";
	$output .= strstr($key, '2') ? "<td>" . $fetch['NumberOfCT'] . "</td>" : "";
	$output .= strstr($key, '3') ? "<td>" . $fetch['Villages'] . "</td>" : "";
	$output .= strstr($key, '4') ? "<td>" . $fetch['Population'] . "</td>" : "";
	$output .= strstr($key, '5') ? "<td>" . $fetch['LiveBirths'] . "</td>" : "";
	$output .= strstr($key, '6') ? "<td>" . $fetch['GeneralBirthRate'] . "</td>" : "";
	$output .= strstr($key, '7') ? "<td>" . $fetch['Dead'] . "</td>" : "";
	$output .= strstr($key, '8') ? "<td>" . $fetch['GeneralMortalityRate'] . "</td>" : "";
	$output .= strstr($key, '9') ? "<td>" . $fetch['NaturalIncrease'] . "</td>" : "";
	$output .= strstr($key, '10') ? "<td>" . $fetch['Employees'] . "</td>" : "";
	$output .= strstr($key, '11') ? "<td>" . $fetch['AVGSalary'] . "</td>" : "";
	$output .= strstr($key, '12') ? "<td>" . $fetch['RegEcSub'] . "</td>" : "";
	$output .= strstr($key, '13') ? "<td>" . $fetch['ActEcSub'] . "</td>" : "";
	$output .= strstr($key, '14') ? "<td>" . $fetch['NewlyEcEnt'] . "</td>" : "";
	$output .= "</tr>";
}

$output .= "
			</tbody>
 
		</table>
	";

echo $output;
