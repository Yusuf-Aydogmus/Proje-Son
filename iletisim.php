<!docytype html>
<html>


<head>
</head>
<body id="iletisimmGovde " >

    <h2>Mesajınız Alınmıştır</h2>
    <hr>
    <a href="Hakk%C4%B1nda.html">Siteye Geri Dönmek için Buraya Tıklayın</a>
<hr>

<table>

	<tr>
		<td>ADI SOYADI</td>
		<td>:</td>
		<td>
	<b>
<?php
		echo $_POST['adi'] ."&nbsp;" .$_POST['soyadi'];

?>

            </b>
	</td>
           
	</tr>
	
	
	<tr>
		<td>CİNSİYETİ</td>
		<td>:</td>
		<td>
		
		<b>
		<?php
		
			echo $_POST['cinsiyet'];
		
		
		?>
            </b>
		
		
		
	</td>
	</tr>
	

	<tr>
		<td>SEÇİLEN DERSLER</td>
		<td>:</td>
		<td>
		
		<b>
		<?php
		
		
		
		if(isset($_POST['sikayet']))
		{
			echo $_POST['sikayet']."<br>";
		}
		if(isset($_POST['bilgi']))
		{
			echo $_POST['bilgi']."<br>";
		}
		if(isset($_POST['soru']))
		{
			echo $_POST['soru']."<br>";
		}
		if(isset($_POST['dilek']))
		{
			echo $_POST['dilek']."<br>";
		}
		if(isset($_POST['diger']))
		{
			echo $_POST['diger']."<br>";
		}
		
		?>
            </b>
		
		
		
	</td>
	</tr>
	
	
	
	
	
	
	<tr>
		<td>YAŞADIĞI ŞEHİR</td>
		<td>:</td>
		<td>
		
		<b>
		<?php
		
			echo $_POST['sehir']."<br>";
		
		
		
		?>
            </b>
		
		
		
		
	</td>
	</tr>
	
	
    
    
    
    
    
   
    

    
	<tr>
		<td>DOSYA</td>
		<td>:</td>
		<td>
		
		<b>
		<?php
		//if(isset($_POST['dosya']))
		//{
			echo $_POST['dosya']."<br>";
		//}
	
		
		
		?>
            </b>
		
		
		
		
	</td>
	</tr>
	
	
</table>
</body>




</html>