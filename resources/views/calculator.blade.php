<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <h1>Calculator</h1>
    <form action="/calculator" method="POST">
        @csrf
        <input type="number" name="num1" required>
        <select name="operation">
            <option value="add">+</option>
            <option value="substract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="number" name="num2" required>
        <button type="submit">CALCULATE</button>
    </form>
    @isset($result)
        <h2>Resultado: {{ $result }}</h2>
    @endisset
</body>
</html>
