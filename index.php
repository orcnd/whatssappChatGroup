<?php
//config
$messageSeperator=' -- '; //seperator while merging messages
$pass='sadwewq'; //login password
//config ends



session_start();
$skey='swqad2wq9k';
$login=false;

if (isset($_GET['logout'])) {
	$login=false;
	$_SESSION[$skey]='';
}

if (isset($_SESSION[$skey])) {
	if ($_SESSION[$skey]==md5($pass)){
		$login=true;
	}
}

if ($login==false ) {
	if(isset($_POST['pass'])) {
		$p=$_POST['pass'];
		if ($p==$pass) {
			$_SESSION[$skey]=md5($p);
			$login=true;
		}
	}
}

if ($login==false) {
	echo '<html><head><title>LOGIN</title>';
	echo '		<link href="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA0MTguMTM1IDQxOC4xMzUiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDQxOC4xMzUgNDE4LjEzNTsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSI1MTJweCIgaGVpZ2h0PSI1MTJweCI+CjxnPgoJPHBhdGggc3R5bGU9ImZpbGw6IzdBRDA2RDsiIGQ9Ik0xOTguOTI5LDAuMjQyQzg4LjUsNS41LDEuMzU2LDk3LjQ2NiwxLjY5MSwyMDguMDJjMC4xMDIsMzMuNjcyLDguMjMxLDY1LjQ1NCwyMi41NzEsOTMuNTM2ICAgTDIuMjQ1LDQwOC40MjljLTEuMTkxLDUuNzgxLDQuMDIzLDEwLjg0Myw5Ljc2Niw5LjQ4M2wxMDQuNzIzLTI0LjgxMWMyNi45MDUsMTMuNDAyLDU3LjEyNSwyMS4xNDMsODkuMTA4LDIxLjYzMSAgIGMxMTIuODY5LDEuNzI0LDIwNi45ODItODcuODk3LDIxMC41LTIwMC43MjRDNDIwLjExMyw5My4wNjUsMzIwLjI5NS01LjUzOCwxOTguOTI5LDAuMjQyeiBNMzIzLjg4NiwzMjIuMTk3ICAgYy0zMC42NjksMzAuNjY5LTcxLjQ0Niw0Ny41NTktMTE0LjgxOCw0Ny41NTljLTI1LjM5NiwwLTQ5LjcxLTUuNjk4LTcyLjI2OS0xNi45MzVsLTE0LjU4NC03LjI2NWwtNjQuMjA2LDE1LjIxMmwxMy41MTUtNjUuNjA3ICAgbC03LjE4NS0xNC4wN2MtMTEuNzExLTIyLjkzNS0xNy42NDktNDcuNzM2LTE3LjY0OS03My43MTNjMC00My4zNzMsMTYuODktODQuMTQ5LDQ3LjU1OS0xMTQuODE5ICAgYzMwLjM5NS0zMC4zOTUsNzEuODM3LTQ3LjU2LDExNC44MjItNDcuNTZDMjUyLjQ0Myw0NSwyOTMuMjE4LDYxLjg5LDMyMy44ODcsOTIuNTU4YzMwLjY2OSwzMC42NjksNDcuNTU5LDcxLjQ0NSw0Ny41NiwxMTQuODE3ICAgQzM3MS40NDYsMjUwLjM2MSwzNTQuMjgxLDI5MS44MDMsMzIzLjg4NiwzMjIuMTk3eiIvPgoJPHBhdGggc3R5bGU9ImZpbGw6IzdBRDA2RDsiIGQ9Ik0zMDkuNzEyLDI1Mi4zNTFsLTQwLjE2OS0xMS41MzRjLTUuMjgxLTEuNTE2LTEwLjk2OC0wLjAxOC0xNC44MTYsMy45MDNsLTkuODIzLDEwLjAwOCAgIGMtNC4xNDIsNC4yMi0xMC40MjcsNS41NzYtMTUuOTA5LDMuMzU4Yy0xOS4wMDItNy42OS01OC45NzQtNDMuMjMtNjkuMTgyLTYxLjAwN2MtMi45NDUtNS4xMjgtMi40NTgtMTEuNTM5LDEuMTU4LTE2LjIxOCAgIGw4LjU3Ni0xMS4wOTVjMy4zNi00LjM0Nyw0LjA2OS0xMC4xODUsMS44NDctMTUuMjFsLTE2LjktMzguMjIzYy00LjA0OC05LjE1NS0xNS43NDctMTEuODItMjMuMzktNS4zNTYgICBjLTExLjIxMSw5LjQ4Mi0yNC41MTMsMjMuODkxLTI2LjEzLDM5Ljg1NGMtMi44NTEsMjguMTQ0LDkuMjE5LDYzLjYyMiw1NC44NjIsMTA2LjIyMmM1Mi43Myw0OS4yMTUsOTQuOTU2LDU1LjcxNywxMjIuNDQ5LDQ5LjA1NyAgIGMxNS41OTQtMy43NzcsMjguMDU2LTE4LjkxOSwzNS45MjEtMzEuMzE3QzMyMy41NjgsMjY2LjM0LDMxOS4zMzQsMjU1LjExNCwzMDkuNzEyLDI1Mi4zNTF6Ii8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" rel="icon" type="image/x-icon" />';
	
	echo '</head><body style="background:black;color:green;width:100%;height:100%;font-family:monospace;padding:0;margin:0;">
	<div style="position:absolute;left:0;top:40%;width:100%;text-align:center;display:block;padding:0;margin:0;">
	<h1>LOGIN</h1><form method="post">
	<input type="password" name="pass" style="background:black;border-color:#1c451a;color:green;padding:0px;height:40px;line-height:40px;padding-left:20px; padding-right:20px;text-align:center"><br><br>
	<input type="submit" value="GO" style="background:#1b2e1e;color:green;padding:0px;height:40px;line-height:40px;border-color:#204424;cursor:pointer;font-weight:bold;font-size:24px;padding-left:10px; padding-right:10px;text-shadow:0px 1px 1px rgba(0,0,0,0.2)">
	</form></div></body></html>';
	exit;
}

$c=file_get_contents('data.txt');
$ln=explode("\n",$c);

function mesajoku($s) {
	$ap=strpos($s,' - ');
	$zaman=substr($s,0,$ap);
	$mesaj=substr($s,$ap+3);

	$sr=strpos($mesaj,': ');
	if ($sr>0) {
		$sad=substr($mesaj,0,$sr);
	}else{
		$sad='WhattsApp';
	}

	$mesaj=substr($mesaj,strlen($sad)+2);

	if($sad=='') $sad='WhattsApp';
	$k=preg_replace('/[^a-zA-Z0-9,şŞçÇöÖüÜğĞıİ]/','',$mesaj);
	if (strlen($k)==0) return false;
	return array($sad,$mesaj,$zaman);
}

$snc=array();
$sncn=array();
$t=mesajoku($ln[0]);
for ($i=1;$i<count($ln);$i++) {
	$m=mesajoku($ln[$i]);
	if ($m!==false) {
		if ($t[0]==$m[0]) {
			$t[1].=$messageSeperator . $m[1];
		}else{
			$snc[]=$t;
			$t=$m;
		}
	}
}

?><!doctype html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		 <meta name="author" content="orcun candan"><!-- https://github.com/orcnd/whatssappChatGroup -->
    <title>WhattsApp Chat</title>
		<link href="css/bootstrap.min.css" rel="stylesheet" >
		<link href="css/main.css" rel="stylesheet" >
		<link href="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA0MTguMTM1IDQxOC4xMzUiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDQxOC4xMzUgNDE4LjEzNTsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSI1MTJweCIgaGVpZ2h0PSI1MTJweCI+CjxnPgoJPHBhdGggc3R5bGU9ImZpbGw6IzdBRDA2RDsiIGQ9Ik0xOTguOTI5LDAuMjQyQzg4LjUsNS41LDEuMzU2LDk3LjQ2NiwxLjY5MSwyMDguMDJjMC4xMDIsMzMuNjcyLDguMjMxLDY1LjQ1NCwyMi41NzEsOTMuNTM2ICAgTDIuMjQ1LDQwOC40MjljLTEuMTkxLDUuNzgxLDQuMDIzLDEwLjg0Myw5Ljc2Niw5LjQ4M2wxMDQuNzIzLTI0LjgxMWMyNi45MDUsMTMuNDAyLDU3LjEyNSwyMS4xNDMsODkuMTA4LDIxLjYzMSAgIGMxMTIuODY5LDEuNzI0LDIwNi45ODItODcuODk3LDIxMC41LTIwMC43MjRDNDIwLjExMyw5My4wNjUsMzIwLjI5NS01LjUzOCwxOTguOTI5LDAuMjQyeiBNMzIzLjg4NiwzMjIuMTk3ICAgYy0zMC42NjksMzAuNjY5LTcxLjQ0Niw0Ny41NTktMTE0LjgxOCw0Ny41NTljLTI1LjM5NiwwLTQ5LjcxLTUuNjk4LTcyLjI2OS0xNi45MzVsLTE0LjU4NC03LjI2NWwtNjQuMjA2LDE1LjIxMmwxMy41MTUtNjUuNjA3ICAgbC03LjE4NS0xNC4wN2MtMTEuNzExLTIyLjkzNS0xNy42NDktNDcuNzM2LTE3LjY0OS03My43MTNjMC00My4zNzMsMTYuODktODQuMTQ5LDQ3LjU1OS0xMTQuODE5ICAgYzMwLjM5NS0zMC4zOTUsNzEuODM3LTQ3LjU2LDExNC44MjItNDcuNTZDMjUyLjQ0Myw0NSwyOTMuMjE4LDYxLjg5LDMyMy44ODcsOTIuNTU4YzMwLjY2OSwzMC42NjksNDcuNTU5LDcxLjQ0NSw0Ny41NiwxMTQuODE3ICAgQzM3MS40NDYsMjUwLjM2MSwzNTQuMjgxLDI5MS44MDMsMzIzLjg4NiwzMjIuMTk3eiIvPgoJPHBhdGggc3R5bGU9ImZpbGw6IzdBRDA2RDsiIGQ9Ik0zMDkuNzEyLDI1Mi4zNTFsLTQwLjE2OS0xMS41MzRjLTUuMjgxLTEuNTE2LTEwLjk2OC0wLjAxOC0xNC44MTYsMy45MDNsLTkuODIzLDEwLjAwOCAgIGMtNC4xNDIsNC4yMi0xMC40MjcsNS41NzYtMTUuOTA5LDMuMzU4Yy0xOS4wMDItNy42OS01OC45NzQtNDMuMjMtNjkuMTgyLTYxLjAwN2MtMi45NDUtNS4xMjgtMi40NTgtMTEuNTM5LDEuMTU4LTE2LjIxOCAgIGw4LjU3Ni0xMS4wOTVjMy4zNi00LjM0Nyw0LjA2OS0xMC4xODUsMS44NDctMTUuMjFsLTE2LjktMzguMjIzYy00LjA0OC05LjE1NS0xNS43NDctMTEuODItMjMuMzktNS4zNTYgICBjLTExLjIxMSw5LjQ4Mi0yNC41MTMsMjMuODkxLTI2LjEzLDM5Ljg1NGMtMi44NTEsMjguMTQ0LDkuMjE5LDYzLjYyMiw1NC44NjIsMTA2LjIyMmM1Mi43Myw0OS4yMTUsOTQuOTU2LDU1LjcxNywxMjIuNDQ5LDQ5LjA1NyAgIGMxNS41OTQtMy43NzcsMjguMDU2LTE4LjkxOSwzNS45MjEtMzEuMzE3QzMyMy41NjgsMjY2LjM0LDMxOS4zMzQsMjU1LjExNCwzMDkuNzEyLDI1Mi4zNTF6Ii8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" rel="icon" type="image/x-icon" />
  </head>
  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
			<a class="navbar-brand col-sm-2 col-md-2 mr-0" href="#">
			<img class="logo" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA0MTguMTM1IDQxOC4xMzUiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDQxOC4xMzUgNDE4LjEzNTsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSI1MTJweCIgaGVpZ2h0PSI1MTJweCI+CjxnPgoJPHBhdGggc3R5bGU9ImZpbGw6IzdBRDA2RDsiIGQ9Ik0xOTguOTI5LDAuMjQyQzg4LjUsNS41LDEuMzU2LDk3LjQ2NiwxLjY5MSwyMDguMDJjMC4xMDIsMzMuNjcyLDguMjMxLDY1LjQ1NCwyMi41NzEsOTMuNTM2ICAgTDIuMjQ1LDQwOC40MjljLTEuMTkxLDUuNzgxLDQuMDIzLDEwLjg0Myw5Ljc2Niw5LjQ4M2wxMDQuNzIzLTI0LjgxMWMyNi45MDUsMTMuNDAyLDU3LjEyNSwyMS4xNDMsODkuMTA4LDIxLjYzMSAgIGMxMTIuODY5LDEuNzI0LDIwNi45ODItODcuODk3LDIxMC41LTIwMC43MjRDNDIwLjExMyw5My4wNjUsMzIwLjI5NS01LjUzOCwxOTguOTI5LDAuMjQyeiBNMzIzLjg4NiwzMjIuMTk3ICAgYy0zMC42NjksMzAuNjY5LTcxLjQ0Niw0Ny41NTktMTE0LjgxOCw0Ny41NTljLTI1LjM5NiwwLTQ5LjcxLTUuNjk4LTcyLjI2OS0xNi45MzVsLTE0LjU4NC03LjI2NWwtNjQuMjA2LDE1LjIxMmwxMy41MTUtNjUuNjA3ICAgbC03LjE4NS0xNC4wN2MtMTEuNzExLTIyLjkzNS0xNy42NDktNDcuNzM2LTE3LjY0OS03My43MTNjMC00My4zNzMsMTYuODktODQuMTQ5LDQ3LjU1OS0xMTQuODE5ICAgYzMwLjM5NS0zMC4zOTUsNzEuODM3LTQ3LjU2LDExNC44MjItNDcuNTZDMjUyLjQ0Myw0NSwyOTMuMjE4LDYxLjg5LDMyMy44ODcsOTIuNTU4YzMwLjY2OSwzMC42NjksNDcuNTU5LDcxLjQ0NSw0Ny41NiwxMTQuODE3ICAgQzM3MS40NDYsMjUwLjM2MSwzNTQuMjgxLDI5MS44MDMsMzIzLjg4NiwzMjIuMTk3eiIvPgoJPHBhdGggc3R5bGU9ImZpbGw6IzdBRDA2RDsiIGQ9Ik0zMDkuNzEyLDI1Mi4zNTFsLTQwLjE2OS0xMS41MzRjLTUuMjgxLTEuNTE2LTEwLjk2OC0wLjAxOC0xNC44MTYsMy45MDNsLTkuODIzLDEwLjAwOCAgIGMtNC4xNDIsNC4yMi0xMC40MjcsNS41NzYtMTUuOTA5LDMuMzU4Yy0xOS4wMDItNy42OS01OC45NzQtNDMuMjMtNjkuMTgyLTYxLjAwN2MtMi45NDUtNS4xMjgtMi40NTgtMTEuNTM5LDEuMTU4LTE2LjIxOCAgIGw4LjU3Ni0xMS4wOTVjMy4zNi00LjM0Nyw0LjA2OS0xMC4xODUsMS44NDctMTUuMjFsLTE2LjktMzguMjIzYy00LjA0OC05LjE1NS0xNS43NDctMTEuODItMjMuMzktNS4zNTYgICBjLTExLjIxMSw5LjQ4Mi0yNC41MTMsMjMuODkxLTI2LjEzLDM5Ljg1NGMtMi44NTEsMjguMTQ0LDkuMjE5LDYzLjYyMiw1NC44NjIsMTA2LjIyMmM1Mi43Myw0OS4yMTUsOTQuOTU2LDU1LjcxNywxMjIuNDQ5LDQ5LjA1NyAgIGMxNS41OTQtMy43NzcsMjguMDU2LTE4LjkxOSwzNS45MjEtMzEuMzE3QzMyMy41NjgsMjY2LjM0LDMxOS4zMzQsMjU1LjExNCwzMDkuNzEyLDI1Mi4zNTF6Ii8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" />
  		WhattsApp Chat (<?php echo count($snc); ?> rows)</a>
			<a href="?logout" class="pull-right text-white">Logout &nbsp;</a>
		</nav>
		<div class="container-fluid">
			<br>
		  <div class="row">
		    <main role="main" class="col-md-12 ml-sm-auto col-lg-12 px-4">
				<table class="table table-bordered table-striped">
					<thead>
						<th>#</th>
						<th>Sender</th>
						<th>Message</th>
						<th>DateTime</th>
					</thead>
					<tbody>
					<?php
					$i=1;
					$onceki='';
						foreach($snc as $m ) {
							echo '<tr><td>' . $i . '</td>';
							if ($m!==false) {
								echo '
								<td>' . $m[0] . '</td>
								<td>' . $m[1] . '</td>
								<td>' . $m[2] . '</td>
								';

							}else{
								echo '<td colspan="3">ERR: ' . $l . '</td>';
							}
							echo '</tr>';
							$i++;
						}
					?>

					</tbody>
				</table>
	    </main>
	  </div>
	</div>

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
