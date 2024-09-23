<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos do PHP
</title>
</head>
<body>
    <h1>Teste de tipos primitivos do PHP
    </h1>
    <h2>Tipos de primitivos: 
    String, int ou integer, Float ou Double, bool ou boolear</h2>

    <?php 
        // 0x = Hexadecimal 0b = Binário 0 = Octal

        //$num = 0x10A;

       //echo "O valor da variável é $num";

       //$v = 300;
       //var_dump($v);

       //$num = 3e2;
       //echo "O valor é $num";

       //$num = (float) "950";
        // $num = (int) ""; usado para forçar a variável ser do tipo que vc quer

        //var_dump($num)

        //$vet = [6, 2.5, 5, 9, 5, "Maria"];
        //var_dump($vet);

        class Pessoa {
            private string $nome;
        }
        $p = new Pessoa;
        var_dump($p)

    ?>
</body>
</html>