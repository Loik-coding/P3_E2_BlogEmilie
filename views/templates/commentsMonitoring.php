<?php 
    /** 
     * Affichage de la partie CommentsMonitoring : liste des commentaires par articles avec possibilité de les supprimer
     * Et un bouton pour revenir à la page de monitoring.
     */
?>

<div class="adminMenu">
    <a class="adminSubmit" href="index.php?action=admin">Panneau d'administration</a>
    <a class="adminSubmit" href="index.php?action=monitoring">Monitoring</a>
</div>

<h2><?= htmlspecialchars($article->getTitle()) ?></h2>


<div class="adminCommentMonitoring">
    <div class="commentMonitoringLine Header">
        <div class="pseudo">Pseudo</div>
        <div class="content">Contenu</div>
        <div class="creation_date">Date de création</div>
        <div class="Supprimer">Supprimer ce commentaire</div>
    </div>
    <?php foreach ($comments as $comment) { ?>
        <div class="commentMonitoringLine">
            <div class="pseudo"><?= $comment->getPseudo() ?></div>
            <div class="content"><?= $comment->getContent() ?></div>
            <div class="creation_date">
                <?= $comment->getDateCreation()->format("d/m/Y H:i") ?>
            </div>
            <div class="supprimer">
                <a href="index.php?action=deleteComment&commentId=<?= $comment->getId() ?>&articleId=<?= $article->getId() ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce commentaire ?');">Supprimer</a>
            </div>
        </div>
    <?php } ?>
</div>

