<div>
    <h2>Home</h2>
    <p>Benvenuto nel tuo profilo!</p>
</div>

<!--navigation bar-->
<div>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="listaNote.php">Note</a></li>
            <li><a href="listaDiario.php">Diario</a></li>
            <li><a href="listaTasks.php">Tasks</a></li>
            <li><a href="statistiche.php">Statistiche</a></li>
        </ul>
    </nav>
</div>

<div>
    <h2>Calendario</h2>
    <div id='calendar' class=""></div>
</div>

<div>
    <h2>Note del giorno</h2>
    <?php foreach($templateParams["noteOggi"] as $note): ?>
        <div class="note">
            <h3><?php echo $note["Titolo"]; ?></h3>
            <p><?php echo $note["Contenuto"]; ?></p>
            <p><strong>Data:</strong> <?php echo $note["CreatoIl"]; ?></p>
        </div>
    <?php endforeach; ?>
    <?php if(empty($templateParams["noteOggi"])): ?>
        <p>Non hai note per oggi.</p>
    <?php endif; ?>
    <form action="creaNota.php" method="POST">
        <input type="submit" value="Crea nuova nota">
    </form>
</div>

<div>
    <h2>Pensieri del giorno</h2> <!--Diario-->
    <?php if(isset($templateParams["diarioOggi"]) && !empty($templateParams["diarioOggi"])): ?>
        
        <h3><?php echo $templateParams["diarioOggi"][0]["Titolo"]; ?></h3>
        <p><?php echo $templateParams["diarioOggi"][0]["Descrizione"]; ?></p>
        <p><strong>Data:</strong> <?php echo $templateParams["diarioOggi"][0]["CreatoIl"]; ?></p>
    <?php else: ?>
        <p>Non hai pensieri per oggi.</p>
        
    <?php endif; ?>
    <form action="creaDiario.php" method="POST">
        <input type="submit" value="Crea nuovo pensiero">
    </form>
</div>

<div>
    <h2>Task in scadenza</h2>
    <?php foreach($templateParams["tasksScadenzaSettimana"] as $task): ?>
        <div class="task">
            <h3><?php echo $task["Titolo"]; ?></h3>
            <p><strong>Scadenza:</strong> <?php echo $task["Scadenza"]; ?></p>
            <p><strong>Descrizione:</strong> <?php echo $task["Descrizione"]; ?></p>
        </div>
    <?php endforeach; ?>
    <?php if(empty($templateParams["tasksScadenzaSettimana"])): ?>
        <p>Non hai task in scadenza questa settimana.</p>
    <?php endif; ?>
    <form action="creaTask.php" method="POST">
        <input type="submit" value="Crea nuovo task">
    </form>
</div>

<div>
    <h2>Statistiche</h2>
    <p>Qui puoi visualizzare le tue statistiche personali.</p>
    <ul>
        <li>Note totali: <?php echo $templateParams["noteTotali"]; ?></li>
        <li>Pensieri totali: <?php echo $templateParams["diarioTotali"]; ?></li>
        <li>Task completati: <?php echo $templateParams["taskCompletati"]; ?></li>
        <li>Task in scadenza questa settimana: <?php echo $templateParams["taskScadenzaSettimana"]; ?></li>
    </ul>
</div>