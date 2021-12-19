<?php
session_start();
if (!$_SESSION['admin']) {
    unset($_SESSION['user']);//закрытие сессии по логину 
session_destroy();//удаление сессии 
    header('Location: auth.php');
}
?>
<?php

$link = mysqli_connect("localhost", "f0606083_username","password") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
mysqli_query($link,'SET NAMES UTF-8');
mysqli_select_db($link,"f0606083_langs") or die("Нет такой таблицы!");

 $result=mysqli_query($link,"select app_name, app_ver, dev_name, 
 dev_city, l_type, l_extype from apps left outer JOIN developer on apps.dev_id=developer.dev_name
 left outer JOIN languages on apps.l_id=languages.l_name
 order by apps.app_id");

$header= array("№ п/п","Название","Версия","Разработчик","Город","Тип","Тип исполнения");
require('FPDF/fpdf.php');

define('FPDF_FONTPATH',"FPDF/font/");

class PDF extends FPDF
{
function Headr($header)
{   $this->SetFillColor(200);
    $this->Cell(12,7,iconv('utf-8', 'windows-1251',$header[0]),1,'','',true);
    $this->Cell(50,7,iconv('utf-8', 'windows-1251',$header[1]),1,'','',true);
    $this->Cell(30,7,iconv('utf-8', 'windows-1251',$header[2]),1,'','',true);
    $this->Cell(50,7,iconv('utf-8', 'windows-1251',$header[3]),1,'','',true);
    $this->Cell(50,7,iconv('utf-8', 'windows-1251',$header[4]),1,'','',true);
    $this->Cell(50,7,iconv('utf-8', 'windows-1251',$header[5]),1,'','',true);
    $this->Cell(35,7,iconv('utf-8', 'windows-1251',$header[6]),1,'','',true);
    $this->Ln();
}
function BasicTable($result)
{
    $a=1;
    $fill=true;
    while($object = mysqli_fetch_array($result,MYSQLI_ASSOC)){
        $this->SetFillColor(235);
        $this->Cell(12,6,$a,1,'','',$fill);
        $this->Cell(50,6,iconv('utf-8', 'windows-1251',$object['app_name']),1,'','',$fill);
        $this->Cell(30,6,iconv('utf-8', 'windows-1251',$object['app_ver']),1,'','',$fill);
        $this->Cell(50,6,iconv('utf-8', 'windows-1251',$object['dev_name']),1,'','',$fill);
        $this->Cell(50,6,iconv('utf-8', 'windows-1251',$object['dev_city']),1,'','',$fill);
        $this->Cell(50,6,iconv('utf-8', 'windows-1251',$object['l_type']),1,'','',$fill);
        $this->Cell(35,6,iconv('utf-8', 'windows-1251',$object['l_extype']),1,'','',$fill);
        $this->Ln();
        $a++;
        $fill=!$fill;
    }
    foreach($data as $row)
    {
        foreach($row as $col)
            $this->Cell(40,6,iconv('utf-8', 'windows-1251',$data[$row]),1);
        $this->Ln();
    }
}
}

//create a FPDF object
$pdf=new PDF();
//set document properties
$pdf->AddFont('Arial','','arial.php');
$pdf->SetTitle('Таблица приложений',true);
//set font for the entire document
$pdf->SetFont('Arial');
//set up a page
$pdf->AddPage('L','A3');
$pdf->SetDisplayMode('real','default');
$pdf->SetXY (10,20);
$pdf->SetFontSize(10);
//Output the document
$pdf->Headr($header);
$pdf->BasicTable($result);
$pdf->Output('Таблица приложений.pdf','D',true);

?>