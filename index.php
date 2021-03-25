<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Converter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">    <link rel="stylesheet" href="css/style.css">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>


<div class="container col-4">

        <form>
            <h1>Конвертер валют</h1>

            <div id="courses">
                <div>
                    <h4>Курс USD</h4>
                    <p course="USD">--.--</p>
                </div>
                <div>
                    <h4>Курс EUR</h4>
                    <p course="EUR">--.--</p>
                </div>
                <div>
                    <h4>Курс GBP</h4>
                    <p course="GBP">--.--</p>
                </div>
            </div>

            <div id="select">
            <div class="select">
            <p>Отдано</p>
            <select class="form-select" aria-label="Default select example">
                <option value="1">Rub</option>
            </select>

            <div class="input-group mb-3">
                <span class="input-group-text">RUB</span>
                <input type="number" id="inputRUB" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
            </div>
            </div>

            <div class="select">
            <p>Получено</p>
            <select id="selectValute" class="form-select" aria-label="Default select example">
                <option value="USD">USD</option>
                <option value="EUR">EUR</option>
                <option value="GBP">GBP</option>
            </select>

            <div class="input-group mb-3">
                <span class="input-group-text">$</span>
                <input type="number" id="inputValute" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
            </div>
            </div>
            </div>
        </form>

</div>







<script src="main.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>