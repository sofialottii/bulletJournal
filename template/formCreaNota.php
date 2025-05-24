<div>
    <h2>Crea Nota</h2>
    <form action="#" method="POST">
        <label for="titolo">Titolo:</label>
        <input type="text" id="titolo" name="titolo" required>
        <br>
        <label for="contenuto">Contenuto:</label>
        <textarea id="contenuto" name="contenuto" required></textarea>
        <br>
        <input type="submit" name="crea" value="Crea Nota" />
        <input type="reset" value="Annulla" />
        <input type="button" value="Torna alla home" onclick="window.location.href='index.php'" />
    </form>
</div>