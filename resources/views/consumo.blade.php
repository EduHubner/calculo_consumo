<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('style.css')}}" type="text/css">
    <title>Calculo de Consumo de Combustível</title>
</head>
<body>
    <main>
        <form action="{{url('/gasto')}}" method="get">
            <div class="painel">
                <h2>Instruções</h2>
                <div class="conteudo-painel">
                    <p>Esta aplicação tem como finalidade demonstrar os valores que
                        serão gastos com combustível durante uma viagem, com base no
                    consumo do seu veículo, e com a distância determinada por você!</p>
                    <p>Os combustíveis disponíveis para este cálculo são:</p>
                    <ul>
                        <li><b><input type="radio" name="combustivel" value="Gasolina"> Gasolina - R$ 7,25</b></li>
                        <li><b><input type="radio" name="combustivel" value="Etanol"> Etanol - R$ 6,99</b></li>
                        <li><b><input type="radio" name="combustivel" value="Diesel"> Diesel - R$ 7,42</b></li>
                    </ul>
                </div>
            </div>

            <div class="painel">
                <h2>Cálculo do valor (R$) do consumo</h2>
                <div class="conteudo-painel">
                        <label for="distancia">Distância em Quilômetros a ser percorrida</label>
                        <input type="number" class="campoTexto"  name="distancia" required/>
                        <br>
                        <label for="autonomia">Consumo de combustível do veículo (Km/L)</label>
                        <input type="number" class="campoTexto" name="autonomia" required/>
                        <br>
                        <button class="botao" type="submit">Calcular</button>
                </div>
            </div>
        </form>
    </main>
</body>
</html>