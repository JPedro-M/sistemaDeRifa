<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de rifas 3000</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="cabecalho">
        <div class="logo">
            <img src="img/logo.png" alt="logo">
        </div>
        <div class="titulo">Gerador de rifas 3000</div>
        <div class="logo">
            <img src="img/logo.png" alt="logo">
        </div>
    </header>
    <div class="formulario">
        <h1>Formulario para criação da rifa</h1><br>
        <p>Responda todas as perguntas abaixo para fazer uma rifa</p>
        <form action="" method="post">
            <label for="titulo">Insira o titulo:</label>
            <input type="text" name="titulo" id="titulo"><br>
            <label for="descricao">Insira a descrição:</label>
            <input type="text" name="desc" id="desc"><br>
            <label for="valor">Insira o valor:</label>
            <input type="number" name="valor" id="valor" step="0.01"><br>
            <label for="premio">Insira o Prêmio:</label>
            <input type="text" name="premio" id="premio"><br>
            <label for="quant">Insira a quantidade de rifas:</label>
            <input type="number" name="quant" id="quant"><br>
            <label for="data">insira a data do sorteio:</label>
            <input type="date" name="data" id="data"><br>
            <label for="obs">Insira uma observação:</label>
            <input type="text" name="obs" id="obs"><br>
            <input type="submit" value="gerar" id="gerar">
        </form>
    </div>
    <div class="resposta">
        <?php 
            if(!empty($_POST['titulo'])){
                $titulo = $_POST['titulo'];
                $desc = $_POST['desc'];
                $valor = $_POST['valor'];
                $premio = $_POST['premio'];
                $quant = $_POST['quant'];
                $data = $_POST['data'];
                $obs = $_POST['obs'];

                for($i = 1; $i <= $quant; $i++){
                    echo "<div class='rifa'>
                    <table>
                        <tr>
                            <td>
                                <div class='info'>
                                    <p>Nome:_________________</p>
                                    <p>Endereço:______________</p>
                                    <p>Telefone:_______________</p>
                                    <h2>Nº.$i</h2>
                                </div>
                            </td>
                            <td>
                                <div class='corpo'>
                                    <div class='titulo'>
                                        <h1>$titulo</h1>
                                        <p>$desc</p>
                                    </div>
                                    <table>
                                        <tr>
                                            <td>
                                                <div class='premio'>
                                                    <h1>PRÊMIO</h1>
                                                    <p>$premio</p>
                                                </div>
                                                <div class='obs'>
                                                    <p>$obs</p>
                                                </div>
                                            </td>
                                            <td id='2'>
                                                <div class='valor'>
                                                    <h1>VALOR: R$$valor</h1>
                                                </div>
                                                <div class='data'>
                                                    <p>SORTEIO: .$data</p>
                                                </div>
                                                <div class='numero'>
                                                    <p>Nº.$i</p>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>";
                }
                
            }
        ?>
    </div>
    
</body>
</html>