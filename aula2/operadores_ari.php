<h2>Operadores Aritméticos</h2>
<hr>

<p>São utilizados para realizar cálculos matemáticos.
</p>

tr => table row => linha da tabela 
td => table data => dados da tabela 


<thead>
<table border="1" width="100%">
    <tr>
        <th>Operador</th>
        <th>Descrição</th>
        <th>Exemplo</th>
    </tr>
</thead>

<tdoby>
    <tr>
        <td>+</td>
        <td>Soma</td>
        <td>$soma = 10 + 5;</td>
    </tr>

    <tr>
        <td>-</td>
        <td>Subtração</td>
        <td>$sub = 10 - 5;</td>
    </tr>

    <tr>
        <td>/</td>
        <td>Divisão</td>
        <td>$div = 10 / 5;</td>
    </tr>
    <tr>
        <td>*</td>
        <td>Multiplicação</td>
        <td>$multi = 10 * 5;</td>
    </tr>
    <tr>
        <td>%</td>
        <td>Resto da divisão</td>
        <td>$resto = 10 % 5;</td>
    </tr>
    <tr>
        <td>**</td>
        <td>Potência</td>
        <td>$pot= 10 ** 5;</td>
    </tr>
</tbody>
</table>
    
    <?php 
    $soma = 10 + 5;
    $sub =  10 - 5;
    $div = 10 / 5;
    $multi = 10 * 5;
    $resto = 10 % 5;
    $pot= 10 ** 5;

    echo "Soma = $soma <br>";
    echo "Subtração = $sub<br>";
    echo "Divisão = $div <br>";
    echo "Multiplicação = $multi <br>";
    echo "Resto da divisão = $resto <br>";
    echo "Potência = $pot <br>";
    





    ?>