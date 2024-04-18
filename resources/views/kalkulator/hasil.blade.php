<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="calculator">
        <h1><center>Kalkulator Sederhana</center></h1>
        <form action="{{Route ('proses.store')}}" method="post">
            @csrf
            <center> 
                <label for="a">Masukan angka pertama</label><br>
                <input type="number" name="a" id=""><br><br>
                <label for="b">Masukan angka kedua</label><br>
                <input type="number" name="b" id=""><br><br>
                <input type="submit" value="+" name="op">
                <input type="submit" value="_" name="op">
                <input type="submit" value="x" name="op">
                <input type="submit" value=":" name="op">
                <input type="reset" value="Reset" name="op">
            </center> 
        </form>

    </div>
</body>
</html>