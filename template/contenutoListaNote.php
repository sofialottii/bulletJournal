<div>
    <h2>Tutte le note</h2>
    <?php if(!empty($templateParams["note"])): ?>
        <?php foreach($templateParams["note"] as $note): ?>
            <div class="note">
                <h3><?php echo $note["Titolo"]; ?></h3>
                <p><?php echo $note["Contenuto"]; ?></p>
                <p><strong>Data:</strong> <?php echo $note["CreatoIl"]; ?></p>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Non hai note.</p>
    <?php endif; ?>
</div>