<!DOCTYPE html>

<html>
<head>
    <title>Contexto</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <?php
                @session_start();

                if (isset($_SESSION["email"])) {
                    echo '<a class="navbar-brand" href="painel.php.php">PROTECHTED</a>';
                } else {
                    echo '<a class="navbar-brand" href="../index.php">PROTECHTED</a>';
                }
            ?>

        </div>

        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <?php
                    @session_start();

                    if (isset($_SESSION["email"])) {
                        echo '<li><a href="painel.php">PANEL</a></li>';
                        echo '<li><a href="sair.php">SIGN OUT</a></li>';
                    } else {
                        echo '<li><a href="entrar.php">SIGN IN</a></li>';
                        echo '<li><a href="criarconta.php">SIGN UP</a></li>';
                    }
                ?>

            </ul>
        </div>
    </div>
</nav>

<div class="container-exibe text-center">
    <?php
        require "negocio.php";

        if (verificaVisita()) {
            $praia = $_SESSION["praia"];
        } else {
            $praia = $_POST["t_praia"];
        }

        $praia = retornarPraia($praia);

        if ($praia != null) {
            $clima = retornaInformacoes($praia[0], $praia[5], $praia[6]);

            echo "<h2>$praia[1], $praia[3], $praia[4]</h2>";
            echo "<h3>$clima[2]ºC - $clima[0]</h3>";

            $_POST["exibir"] = true;

        } else {
            $_POST["exibir"] = false;
        }
    ?>
</div>

<div class="text-center">
    <?php
        if ($_POST["exibir"]) {
            if ($clima[1] <= 2.00) {
                echo "<h1>It's the perfect time to go to the beach!</h1>";
                echo "<h4>The uv index on $praia[1] beach is currently $clima[1], considered low.</h4>";
                echo "<h4>However, wear sunglasses and sunscreen. Protection is never too much.</h4>";
                echo "<h4>No maximum exposure time.</h4>";

            } elseif ($clima[1] > 2.00 and $clima[1] <= 5.00) {
                echo "<h1>You can go to the beach, but be careful.</h1>";
                echo "<h4>The uv index on $praia[1] beach is currently $clima[1], considered moderate.</h4>";
                echo "<h4>The use of sunglasses and sunscreen is indispensable.</h4>";
                echo "<h4>45 minutes is the maximum exposure time.</h4>";

            } elseif ($clima[1] > 5.00 and $clima[1] <= 7.00) {
                echo "<h1>Is it really necessary to go to the beach now?</h1>";
                echo "<h4>The uv index on $praia[1] beach is currently $clima[1], considered high.</h4>";
                echo "<h4>30 minutes is the maximum exposure time.</h4>";

            } elseif ($clima[1] > 7.00 and $clima[1] <= 10.00) {
                echo "<h1>It's not a good idea to go to the beach now...</h1>";
                echo "<h4>The uv index on $praia[1] beach is currently $clima[1], considered very high.</h4>";
                echo "<h4>15 minutes is the maximum exposure time.</h4>";

            } else {
                echo "<h1>Just don't go to the beach now.</h1>";
                echo "<h4>The uv index on $praia[1] beach is currently $clima[1], considered extreme.</h4>";
                echo "<h4>10 minutes is the maximum exposure time.</h4>";
            }

            $resultado = retornarAcontecimentos($praia[0]);

            echo "<br><br>";
            echo "See what other people are saying:";

            while ($row = mysqli_fetch_row($resultado)) {
                printf("<h3>%s</h3>", $row[2]);
                printf("<h4>%s</h4>", $row[3]);
            }

            echo "<br>";
            echo "<form class=\"form-horizontal\" method=\"POST\" action=\"inserir.php\">";
            echo "<fieldset>";
            echo "<input type=\"hidden\" name=\"praia\" value=$praia[0]>";
            echo "<div class=\"form-group\">";
            echo "<label class=\"col-md-4 control-label\" for=\"bot_inserir\"></label>";
            echo "<div class=\"col-md-4\">";
            echo "<br>";
            echo "<button id=\"bot_inserir\" name=\"botaoinserir\" class=\"btn btn-primary\">INSERT INFO</button></div></div></fieldset></form></div>";
        } else {
            echo "<h1>Nonexistent beach.</h1>";

            if (verificaLogin()) {
                echo "<meta http-equiv='refresh' content='2; url=painel.php'>";
            } else {
                echo "<meta http-equiv='refresh' content='2; url=../principal.php'>";
            }
        }

    ?>

<footer class="container-rodape atributos-rodape text-center">
    UFRPE - DEINFO - BSI | SOFTWARE ENGINEERING FOUNDATIONS 2017.1 | PROTECHTED FUN BY EBONY MARQUES RODRIGUES
</footer>
</body>
</html>