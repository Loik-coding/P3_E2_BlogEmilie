<?php 
    /** 
     * Affichage de la partie admin : liste des articles avec un bouton "modifier" pour chacun. 
     * Et un formulaire pour ajouter un article. 
     */
?>

<h2>Monitoring des articles</h2>
<div class="adminButtons">
    <a class="submit" href="index.php?action=admin">Retour à l'administration</a>
</div>
<div class="adminMonitoring">
    <div class="MonitoringLine Header">
        <div class="title">Titre</div>
        <div class="views">Vues</div>
        <div class="comments">Commentaires</div>
        <div class="publicationDate">Date de publication</div>
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

