<div>
    <h2>Crea Task</h2>
    <form action="#" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required />
        <br>
        <label for="descrizione">Descrizione:</label>
        <textarea id="descrizione" name="descrizione" required></textarea>
        <br>
        <label for="scadenza">Scadenza:</label>
        <input type="date" id="scadenza" name="scadenza" />
        <br>
        <label for="priorita">Priorità:</label>
        <select id="priorita" name="priorita">
            <option value="">--Seleziona Priorità--</option>
            <option value="Alta">Alta</option>
            <option value="Media">Media</option>
            <option value="Bassa">Bassa</option>
        </select>
        <br>
        <label for="colore">Colore:</label>
        <input type="color" id="colore" name="colore" value="#ffffff" />
        <br>
        <input type="submit" name="crea" value="Crea Task" />
        <input type="reset" value="Annulla" />
        <input type="button" value="Torna alla home" onclick="window.location.href='index.php'" />
</div>