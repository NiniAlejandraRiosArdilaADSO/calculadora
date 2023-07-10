<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculadora</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="mt-5 text-center">Calculadora PHP</h2>
                <form action="index.php" method="post" id="form">                   
                    <div class="mb-3">
                        <label for="num1" class="form-label">Primer número</label>
                        <input type="text" class="form-control" id="num1" name="num1">
                    </div>
                    <div class="mb-3">
                        <label for="num2" class="form-label">Segundo número</label>
                        <input type="text" class="form-control" id="num2" name="num2">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Operador</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="operador" id="suma" value="+">
                            <label class="form-check-label" for="suma">sumar</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="operador" id="resta" value="-">
                            <label class="form-check-label" for="resta">restar</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="operador" id="multiplicacion" value="*">
                            <label class="form-check-label" for="multiplicacion">multiplicar</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="operador" id="division" value="/">
                            <label class="form-check-label" for="division">dividir</label>
                        </div>
                    </div>
                    <div class="d-grid">
                        <button id="btn-enviar" type="submit" class="btn btn-primary">Calcular</button>
                    </div>
                </form>
                <?php
                if(isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operador'])) {
                    $num1 = $_POST['num1'];
                    $num2 = $_POST['num2'];
                    $operador = $_POST['operador'];
                    $resultado = 0;

                    switch ($operador) {
                        case '+':
                            $resultado = $num1 + $num2;
                            break;
                        case '-':
                            $resultado = $num1 - $num2;
                            break;
                        case '*':
                            $resultado = $num1 * $num2;
                            break;
                        case '/':
                            if($num2 != 0) {
                                $resultado = $num1 / $num2;
                            } else {
                                echo "Error: No se puede dividir entre cero.";
                            }
                            break;
                        case '%':
                            $resultado = $num1 % $num2;
                            break;
                    }                        
                    echo "<h3 class='mt-4 text-center'>Resultado: $resultado</h3>";
                }
                ?>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>