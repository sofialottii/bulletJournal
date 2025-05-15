<div>
    <h2>Home</h2>
    <p>Benvenuto nel tuo profilo!</p>
</div>

<div>
    <h2>Calendario</h2>
    <div id='calendar' class=""></div>
</div>

<div>
    <h2>Note del giorno</h2>
    <?php foreach($templateParams["noteOggi"] as $note): ?>
        <div class="note">
            <h3><?php echo $note["titolo"]; ?></h3>
            <p><?php echo $note["contenuto"]; ?></p>
            <p><strong>Data:</strong> <?php echo $note["data"]; ?></p>
        </div>
    <?php endforeach; ?>
    <?php if(empty($templateParams["noteOggi"])): ?>
        <p>Non hai note per oggi.</p>
    <?php endif; ?>
    <form action="php/creaNota.php" method="POST">
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
    <form action="php/creaDiario.php" method="POST">
        <input type="submit" value="Crea nuovo pensiero">
    </form>
</div>