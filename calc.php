<html>
<head>
<title>��������� �����������</title>
<style>
td{text-align:center; border: solid 0.3mm;}
table{border:solid 0.3mm;}
</style>
</head>
<body>
<?php
if($_POST["sum"]>0&&$_POST["percent"]>=0&&$_POST["mounth"]>=1&&$_POST["first"]>=0&&$_POST["sum"]>$_POST["first"]){
echo
    "<table>
        <tr>
            <td>�����</td>
            <td>������</td>
            <td>��������� ���������</td>
            <td>��������� �����</td>
            <td>������� �������������</td>
        </tr>
    ";
$k=$_POST["sum"]; //����� ������� � � ��������� ������� �������������
$c=$_POST["percent"]; //���������� ������
$n=$_POST["mounth"]; //���������� �������
$first=$_POST["first"];  // ������ �����
$p=$c/1200;
$sumdolg=0;
$sumpercent=0;
$a=($p*pow(1+$p,$n))/(pow(1+$p,$n)-1); // ������������� �����������
$k-=$first; //�������� ������ �����
$sa=$a*$k; //����� ������������ �������
for($i=1;$i<=$n;$i++) //������ �������
{
    $cent=$p*$k; //��������� ���������
    $dolg=$sa-$cent; //��������� �����
    $ost=$k-$dolg;   //������� �����
    $sumpercent+=$cent;
    $sumdolg+=$dolg;
    echo
        "<tr>
            <td>".$i."</td>
            <td>".round($sa,2)."</td>
            <td>".round($cent,2)."</td>
            <td>".round($dolg,2)."</td>
            <td>".round($ost,2)."</td>
        </tr>";
    $k=$k-$dolg;
}
echo
"
<tr>
    <td>�����</td>
    <td></td>
    <td>".round($sumpercent,2)."</td>
    <td>".round($sumdolg+$first,2)."</td>
    <td></td>
</tr>
</table>";
}
else
{
    echo("����������� ������� ������!<br><form method='POST' action='index.php'><input type='submit' name='sub' value='�����'>");

}

?>
</body>
</html>