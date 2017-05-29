<html>
<body bgcolor="#FF3333">
<?php
echo"<b>PENDAFTARAN PELANGGAN BARU</b><br>";
?>
<form action="link.php"method="post">
<pre>
<?php
echo"<b>Data Pribadi</b><br>";
?>
Nama Lengkap	:<input type="text"name="name"/>
Jenis Kelamin	:<input type="radio"name="LP" value="Pria">Pria<input type="radio"name="LP"value="Wanita">Wanita
Email			:<input type="text"name="mail"/>

<?php
echo"<b>Data Alamat Pengiriman</b><br>";
?>
Nama Negara		:<input type="text"name="Negara"/>
Kota			:<input type="text"name="Kota"/>
Alamat			:<input type="text"name="address"/>
Kode Pos		:<input type="text"name="kode"/>

<?php
echo"<b>Data No Kontak</b><br>";
?>
No.Telepon		:<input type="text"name="telp"/>
No.Handphone	:<input type="text"name="no"/>
No.Faksmili		:<input type="text"name="fax"/>

	<input type="submit"/name="send"value="Send"/><input type="submit"/name="Reset"value="Reset"/>
</form>
<form action="uasdita.php">
</pre>
</form>
</body>
</html>
