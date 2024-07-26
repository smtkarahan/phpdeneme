<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="form1" method="post" action="hesapla.php">
      Birinci Sayı: <input type="text" name="sayi1"><br>
      İkinci Sayı: <input type="text" name="sayi2"><br>
      İşleminizi seçiniz:
      <select name="islem">
         <option value="+">Topla</option>
         <option value="-">Çıkar</option>
         <option value="*">Çarp</option>
         <option value="/">Böl</option>
      </select>
      <input type="submit" name="hesapla" value="Hesapla">
   </form>
</body>
</html>