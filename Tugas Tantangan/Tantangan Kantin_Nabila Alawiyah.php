<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tantangan</title>
</head>
<body>
	<h2>Bani Saleh's Canteen</h2>
	<form action="Proses Kantin_Nabila Alawiyah.php" method="POST">
	<table width="50%" border="0" cellpadding="0">
			
		<th style="background-color: blue; color: white;">Foods</th>
		<th style="background-color: blue; color: white;">Drinks</th>

		<tr>
			<td>
				<select name="foods[]" multiple>
						<option value=10000>Nasi Goreng Rp10.000</option>
						<option value=20000>Sate Kambing Rp20.000</option>
						<option value=25000>Tongseng Rp25.000</option>
	  		</td>
	  		<td>
	  			<input type="checkbox" name="Drinks[]" value=7000>Juice Rp7.000,-<br>
	  			<input type="checkbox" name="Drinks[]" value=5000>Coffe Rp5.000,-<br>
	  			<input type="checkbox" name="Drinks[]" value=3000>Tea Rp3.000,-<br>
	  			<input type="checkbox" name="Drinks[]" value=6000>Coconut Ice Rp6.000,-
	  		</td>
	  	</tr>
	  	<tr>
	  		<td style="background-color: blue;"> </td>
	  		<td style="background-color: blue;"><input type="submit" value="Submit"></td>
	  	</tr>
	</table>
		<br>

	<table border= '1' cellpadding= '5'>
        <tr>
        	<th>Your Foods</th>
			<th>Your Drinks</th>
        </tr>
        <tr>
            <td align="right" height='20px'><br></td>
            <td align="right" height='20px'><br></td>
        </tr>
        <tr>
            <td align="right" height='20px'> </td>
            <td align="right" height='20px'> </td>
        </tr>
        <tr>
            <td align="right" height='20px'>Total</td>
            <td align="right" height='20px'></td>
    </table>
	</form>
</body>
</html>