<!DOCTYPE html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Passwort Generator</title>
</head>
<body>
<div class="form" >
    <div class="formContent">
        <form action="CharFill.php" method="POST" >
            <table>
                <tr>
                    <td class="rowNum">Bitte geben Sie die Anzahl Zeilen an:</td>
                    <td><input type="number" name="row"></td>
                </tr>
                <tr>
                    <td class="columnNum">Bitte geben Sie die Anzahl Spalten an:</td>
                    <td><input type="number" name="column"></td>
                </tr>
                <tr>
                    <td><input type="reset" name="reset" value="delete"></td>
                    <td><input type="submit" name="sub" value="submit"></td>
                </tr>
            </table>
        </form>
    </div>
</div>
</body>
</html>