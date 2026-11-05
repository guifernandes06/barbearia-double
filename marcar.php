<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Nunito Sans' rel='stylesheet'>

    <link rel="shortcut icon" href="imagens/mini_logo.png" type="image/svg+xml" />
    <link rel="stylesheet" href="styles.css">

    <title>Barbearia Double</title>


</head>

<body>
    <div class="navbar">
        <div class="logo-container">
            <img src="imagens/logo.png" alt="Logo" class="logo">
        </div>

        <div class="nav-links">
            <a href="index.html">Home</a>
            <a href="cortes.html">Cortes</a>
            <a href="produtos.html">Produtos</a>
            <a href="https://barbeariadouble.short.gy/marcar" target="_blank">Marcar</a>
        </div>
    </div>

    <div class="content">
        <p>
        <h1>
            <b>
                Barbearia Double
            </b>
        </h1>
        </p>

    </div>

    <div class="gallery">
        <div class="img-big">
            <img src="imagens/double.png" alt="">
        </div>

        <div class="img-small">
            <img src="imagens/double01.png" alt="">
        </div>

        <div class="img-small">
            <img src="imagens/double01.png" alt="">
        </div>
    </div>

    <div class="pagina">
        <section class="servicos">
            <h2>Serviços</h2>
            <?php
            require_once 'login.php';

            $sql = "SELECT nome, tempo, preco FROM servicos";
            $result = $conn->query($sql);

            if ($result && $result->num_rows > 0) {
                echo "<div class='servicos-grid'>";

                while ($row = $result->fetch_assoc()) {
                    echo "
                    <div class='servico-card' style='text-align: left;'>
                        <h3> ➤ {$row['nome']}</h3> 
                        ➤ {$row['tempo']} min &nbsp; <span>{$row['preco']}€</span>
                    </div>
                    ";
                }

                echo "</div>";
            } else {
                echo "<p>Sem serviços disponíveis.</p>";
            }
            ?>
        </section>

        <aside class="sidebar">
            <h1>
                <b>
                    Double
                </b>
            </h1>
            <p class="subtitulo">Barbearia</p>

            <a href="marcar.php" class="btn-agendar">Agendar agora</a>

            <div class="info">
                <p><strong>⏰ Aberto</strong> até 19:30</p>
                <p><strong>📍</strong> Rua Doutor José Vilaça 50, Braga</p>
                <a href="#" class="link">Como chegar</a>
            </div>
        </aside>
    </div>

    <footer class="bg-light text-center text-lg-start mt-5">
        <div class="text-center p-3">
            © 2025 Barbearia Double |
            <a class="text-dark" href="termos.html">Termos e Condições</a>
            <br>
            Feito pelo <a href="https://www.linkedin.com/in/guilherme2006/" target="_blank">Guilherme
                Fernandes</a>
        </div>
    </footer>
</body>

</html>