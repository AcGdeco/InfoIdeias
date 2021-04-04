<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
<script type="text/javascript" src="js/index.js"></script>

<br><br><br><br><br>
<div style = "display:flex;justify-content:center;" >
    <table>
        <tr>
            <th colspan = "3">
                TESTE AVALIATIVO
            </th>
        </tr>

        <tr>
            <td>
                Insira um ano para saber o século correspondente
            </td>
            <td>
                <input type = "number" id = "seculoAno">
            </td>
            <td>
                <span onclick = "anoSeculo()" >SABER</span>
            </td>
        </tr>

        <tr>
            <td>
                Insira uma string para saber se ela é palindromo
            </td>
            <td>
                <input type = "text" id = "palindromo">
            </td>
            <td>
                <span onclick = "palindromo()" >SABER</span>
            </td>
        </tr>

        <tr>
            <td>
                Insira um número da área para saber a quantidade de quadrados
            </td>
            <td>
                <input type = "number" id = "quantQuad">
            </td>
            <td>
                <span onclick = "quantQuad()" >SABER</span>
            </td>
        </tr>

        <tr>
            <td>
                Saiba se a sequência é crescente removendo no máximo apenas um elemento da array<br>
                Insira uma sequência como no exemplo 1,2,5,7,10,9
            </td>
            <td>
                <input type = "text" id = "sequencia">
            </td>
            <td>
                <span onclick = "sequencia()" >SABER</span>
            </td>
        </tr>

    </table>
</div>