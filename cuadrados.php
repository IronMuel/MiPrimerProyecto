<html>
    <body>
        <h1>Cuadrados</h1>
        <table border="1">
            <?php for($i=1; $i<=10; $i++){ ?>
            <tr>
                <td><?php echo $i;?></td>
                <td><?php echo $i*$i;?></td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>
