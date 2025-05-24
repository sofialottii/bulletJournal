<div>
    <h2>Ciao!</h2>
    <p>Benvenuta nella tua pagina di diario. Qui potrai scrivere tutti i pensieri di oggi, dando sfogo alla creatività. Puoi anche
        scegliere di rendere privato il tuo diario, in modo che nessuno possa leggerlo. Buona scrittura!</p>
    <form action="#" method="POST">
        <label for="titolo">Titolo:</label>
        <input type="text" id="titolo" name="titolo">
        <br>
        <label for="contenuto">Pensieri di oggi:</label>
        <textarea id="contenuto" name="contenuto"></textarea>
        <br>
        <label for="privacy">Privacy:</label>
        <input type="checkbox" id="privacy" name="privacy">
        <label for="privacy">Privato</label>
        <br>
        <input type="submit" name="crea" value="Crea pagina di oggi" />
        <input type="button" value="Torna alla home" onclick="window.location.href='index.php'" />

</div>