<center>
    <form method="post" action="../../Traitement/Visiteur.php">
        <table>
            <tr>
                <td> NUM </td>
                <td> <input name="num" value="<?= $V['ID'] ?>" disabled> </td>
            </tr>
            <tr>
                <td> NOM </td>
                <td> <input name="nom" value="<?= $V[1] ?>"> </td>
            </tr>
            <tr>
                <td> PRENOM </td>
                <td> <input name="prenom" value="<?= $V[2] ?>"> </td>
            </tr>
            <tr>
                <td> E-MAIL </td>
                <td> <input name="email" value="<?= $V[3] ?>"> </td>
            </tr>
            <tr>
                <td colspan="2"> <input type="submit" value="Modifier"> </td>
            </tr>
        </table>
    </form>
</center>