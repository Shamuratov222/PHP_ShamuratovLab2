<?php
session_start();
if (!$_SESSION['user']) {
        unset($_SESSION['user']);//закрытие сессии по логину 
session_destroy();//удаление сессии 
    header('Location: ../auth.php');
}
?>
<?php
$link = mysqli_connect("localhost", "f0606083_username","password") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
mysqli_query($link,'SET NAMES UTF-8');
mysqli_select_db($link,"f0606083_langs") or die("Нет такой таблицы!");
 $result=mysqli_query($link,"select app_name, app_ver, dev_name, 
 dev_city, l_type, l_extype from apps left outer JOIN developer on apps.dev_id=developer.dev_id
 left outer JOIN languages on apps.l_id=languages.l_id
 order by apps.app_id");

require '../PHPExcel-1.8.1/Classes/PHPExcel.php';
$pExcel = new PHPExcel();
$aSheet = $pExcel->setActiveSheetIndex(0);
$aSheet->setTitle('Приложения');
$aSheet->setCellValue('A1','№');
$aSheet->setCellValue('B1','Название');
$aSheet->setCellValue('C1','Версия');
$aSheet->setCellValue('D1','Разработчик');
$aSheet->setCellValue('E1','Город');
$aSheet->setCellValue('F1','Тип');
$aSheet->setCellValue('G1','Тип исполнения');
$i = 1;
while ($st = mysqli_fetch_assoc($result)) {
echo ($st['app_name']);
echo ($st['app_ver']);
echo ($st['dev_name']);
echo ($st['dev_city']);
echo ($st['l_type']);
echo ($st['l_extype']);
    $aSheet->setCellValue('A'.($i+1), $i);
    $aSheet->setCellValue('B'.($i+1), $st['app_name']);
    $aSheet->setCellValue('C'.($i+1), $st['app_ver']);
    $aSheet->setCellValue('D'.($i+1), $st['dev_name']);
    $aSheet->setCellValue('E'.($i+1), $st['dev_city']);
    $aSheet->setCellValue('F'.($i+1), $st['l_type']);
    $aSheet->setCellValue('G'.($i+1), $st['l_extype']);
    $i++;
}
 echo 'uspeh1';
ob_end_clean();
header('Content-Type:xlsx:application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition:attachment;filename="simple.xlsx"');
ob_end_clean();
$objWriter = new PHPExcel_Writer_Excel2007($pExcel);
$objWriter->save('php://output');
exit;
?>