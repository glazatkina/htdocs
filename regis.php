<?php session_start();?>
<!DOCTYPE HTML>
<?php if(isset($_GET['exit'])){
session_destroy();
echo('	<meta http-equiv="refresh" content="0;url=avtoriz.html">');
exit;
} ?>
<html lang="ru">
<head>
	<script language="javascript">
function doPopup(popupPath) {
window.open(popupPath,'name',
'width=850,height=550,scrollbars=YES');
}
</script>
	<?php 
include ('pgsql.php'); // ------------------------------------------------------- ����������� � ��

?>
	<meta charset="utf-8">
	<title>������ �������</title>
	
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	
	</head>

<body>
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<div class="nav-collapse collapse">
				<div class="row">
					<div class="span10">
						<ul class="nav">
							
						</ul>
						<form class="navbar-search form-search" action="/search_form/search.htm" method="POST">
							<div class="input-append">
								
<a href="regis.html" role="button" id="authModalBtn" class="btn pull-right" data-toggle="modal">&nbsp;�����������</a>
						<a href="avtoriz.html" role="button" id="authModalBtn" class="btn pull-right" data-toggle="modal">&nbsp;�����������</a>
							</div>
						</form>
					</div>
					<div class="span2">
						<a href="lk.php?exit=1" role="button" id="authModalBtn" class="btn pull-right" data-toggle="modal">&nbsp;�����</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="hero-bg">
	<div class="hero-unit">
		<div class="container">
			<div class="row">
				<div class="span8">
					<p>�����-������������� ��������������� ��������� ���������� �������� <strong>"��������������� ����� ��������� ����������"</strong></p>
					<h1><a href="/">���������� �����</a></h1>
				</div>
				<div class="span4"></div>
			</div>
		</div>
	</div>
</div>

<div class="content clearfix">
	<div class="container">
		<div class="contentIndents">
			<div class="row-fluid">
				<div class="span6">
					<h1>�����������</h1>
						<?php
							$handle = pg_query("SELECT id FROM reader");
							$tmp  = pg_fetch_array($handle);
							$t=max($tmp)+1;
							pg_query("INSERT INTO reader (id, barcode) VALUES ('$t','123')");
						?>
				</div>


             <div class="12">
				<div class="span6">
					<h3>&nbsp;</h3>
					<div class="well clearfix homeLinks">
						<ul class="thumbnails">
							<li>
								<a href="korzina.php" class="thumbnail">
									<img src="img/icon-strategy2_64.png" class="pull-left" alt="">
									<h3>�������</h3>
									<div class="clearfix"></div>
								</a>
							</li>
							<li>
								<a href="catalog.php" class="thumbnail">
									<img src="img/icon-archive_64.png" class="pull-left" alt="">
									<h3>�������</h3>
									<div class="clearfix"></div>
								</a>
							</li>
							<li>
								<a href="poisk.php" class="thumbnail">
									<img width="55" src="img/icon-search_64.png" class="pull-left" alt="">
									<h3>�����</h3>
									<div class="clearfix"></div>
								</a>
							</li>
							<li>
								<a href="lk.php?id=<?php echo $_SESSION['login'];?>" target="_blank" class="thumbnail">
									<img src="img/icon-textDocuments_64.png" class="pull-left" alt="">
									<h3>������ �������</h3>
									<p><small>���� � ������ ������� ����������</small></p>
									<div class="clearfix"></div>
								</a>
							</li>
						</ul>
					</div>

				</div>	</div>		</div>
		</div>
	</div>
</div>


<footer class="clearfix">
	<div class="container">
		<div class="row">
<div class="span4">
				<address>
					<strong>��� ���� "����"</strong><br>
					197101, �����-���������,<br>
					������� �������� 179<br>
					<abbr title="�������">���.</abbr>: +7 (812) 274 26 35
				</address>
				<address>
					<strong>����������� � ������ ��:</strong><br>
					<i class="icon-envelope icon-white"></i>&nbsp;<a href="mailto:it.gmgs@gmail.com">it.gmgs@gmail.com</a>
				</address>
			</div>

			<div class="span8">
				<ul class="footer-links">
					<li class="pull-right"><a href="#"><i class="icon-arrow-up"></i>&nbsp;������</a></li>
					<li><a href="korzina.php">�������</a></li>
					<li><a href="catalog.php">�������</a></li>
					<li><a href="lk.php?id=<?php echo $_SESSION['login'];?>" target="_blank">������ �������</a></li>
					
				</ul>
				<hr>

</body>
</html>
