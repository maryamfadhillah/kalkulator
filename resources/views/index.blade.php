<!DOCTYPE html>
<html>

<head>
    <title>Kalkulator</title>
    <link rel="stylesheet" type="text/css" href="">
</head>

<body>
<div>
    <h2>Kalkulator Sederhana</h2>
    <form method="post" action="{{ route('hitung') }}">
        @method('POST')
        @csrf
    <input type="text" name="bil1">
    <input type="text" name="bil2">
    <select name="operasi">
        <option value="tambah">+</option>
        <option value="kurang">-</option>
        <option value="kali">x</option>
        <option value="bagi">/</option>
    </select>
    <input type="submit" name="hitung" value="Hitung">
    </form>
</div>
</body>

</html>