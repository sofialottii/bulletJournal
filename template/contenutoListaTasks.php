<div>
    <h2>Tasks</h2>
    <!--filtra per scadenza, titolo, archiviato, completato, non completato -->
    <form action="#" method="GET">
        <label for="filtraScadenza">Filtra per scadenza:</label>
        <input type="date" id="filtraScadenza" name="filtraScadenza" />
        <br>
        <label for="filtraTitolo">Filtra per titolo:</label>
        <input type="text" id="filtraTitolo" name="filtraTitolo" />
        <br>
        <label for="priorita">Filtra per priorità:</label>
        <select id="priorita" name="priorita">
            <option value="">--Seleziona Priorità--</option>
            <option value="Alta">Alta</option>
            <option value="Media">Media</option>
            <option value="Bassa">Bassa</option>
        </select>
        <br>
        <input type="submit" value="Filtra" name="filtra" />
        <input type="submit" value="Archiviati" name="archiviati" />
        <input type="submit" value="Completati" name="completati" />
        <input type="submit" value="Non Completati" name="nonCompletati" />
        <input type="submit" value="Tutti" name="tutti" />
        <input type="button" value="Crea nuovo task" onclick="window.location.href='creaTask.php'" />
        <input type="button" value="Torna alla home" onclick="window.location.href='index.php'" />
    </form>
    <?php if(!empty($templateParams["tasks"])): ?>
        <?php foreach($templateParams["tasks"] as $task): ?>
            <div class="task">
                <h3><?php echo $task["Titolo"]; ?></h3>
                <p><strong>Scadenza:</strong> <?php echo $task["Scadenza"]; ?></p>
                <p><strong>Descrizione:</strong> <?php echo $task["Descrizione"]; ?></p>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Non hai task.</p>
    <?php endif; ?>
</div>