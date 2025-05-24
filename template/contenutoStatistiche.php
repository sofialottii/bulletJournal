<div>
    <h2>Tieni d'occhio le tue statistiche!</h2>
    <!-- 4 div, ogni div con un titolo e un numero. I titoli: numero note scritte, numero pensieri scritti
    , numero task completati, numero task in scadenza. -->
    <div class="statistica">
        <h3>Note scritte</h3>
        <p><?php echo $templateParams["noteTotali"]; ?></p>
    </div>
    <div class="statistica">
        <h3>Pagine di diario scritte</h3>
        <p><?php echo $templateParams["diarioTotali"]; ?></p>
    </div>
    <div class="statistica">
        <h3>Task completati</h3>
        <p><?php echo $templateParams["taskCompletati"]; ?></p>
    </div>
    <div class="statistica">
        <h3>Task in scadenza questa settimana</h3>
        <p><?php echo $templateParams["taskScadenzaSettimana"]; ?></p>
    </div>
</div>