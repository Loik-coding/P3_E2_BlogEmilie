<?php 
    /** 
     * Affichage de la partie admin : liste des articles avec un bouton "modifier" pour chacun. 
     * Et un formulaire pour ajouter un article. 
     */
    $currentBy = Utils::request("by", "title");
    $currentOrder = Utils::request("order", "ASC");

    $nextOrder = $currentOrder === "ASC" ? "DESC" : "ASC";
?>


<h2>Monitoring des articles</h2>
<div class="adminButtons">
    <a class="submit" href="index.php?action=admin">Retour à l'administration</a>
</div>
<div class="adminMonitoring">
    <div class="MonitoringLine Header">
        <div class="title">
            <a href="index.php?action=monitoring&by=title&order=ASC"><?= $currentBy === 'title' ? $nextOrder : 'ASC' ?>Titre</a>
        </div>
        <div class="views">
            <a href="index.php?action=monitoring&by=views&order=ASC"><?= $currentBy === 'views' ? $nextOrder : 'ASC' ?>Vues</a>
        </div>
        <div class="comments">
            <a href="index.php?action=monitoring&by=commentsCount&order=ASC"><?= $currentBy === 'commentsCount' ? $nextOrder : 'ASC' ?>Commentaires</a>
        </div>
        <div class="publicationDate">
            <a href="index.php?action=monitoring&by=date_creation&order=ASC"><?= $currentBy === 'date_creation' ? $nextOrder : 'ASC' ?>Date de publication</a>
        </div>
    </div>
    <?php foreach ($articles as $article) { ?>
        <div class="MonitoringLine">
            <div class="title"><?= $article->getTitle() ?></div>
            <div class="views"><?= $article->getViews() ?></div>
            <div class="comments"><?= $article->getCommentsCount() ?></div>
            <div class="publicationDate">
                <?= $article->getDateCreation()->format("d/m/Y H:i") ?>
            </div>
        </div>
    <?php } ?>
</div>

