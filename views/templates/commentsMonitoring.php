<?php 
    /** 
     * Affichage de la partie CommentsMonitoring : liste des commentaires par articles avec possibilité de les supprimer
     * Et un bouton pour revenir à la page de monitoring.
     * @var Article $article
     * @var array $comments
     */
?>

<div class="adminMenu">
    <a class="adminSubmit" href="index.php?action=admin">Panneau d'administration</a>
    <div class="adminSubmit"> | </div>
    <a class="adminSubmit" href="index.php?action=monitoring">Monitoring</a>
    <div class="adminSubmit"> → </div>
    <div class="adminSubmit active"><?= htmlspecialchars($article->getTitle()) ?></div>
</div>

<h2>Gestion des commentaires de l'article</h2>


<div class="adminCommentMonitoring">
    <div class="commentMonitoringLine Header">
        <div class="pseudo">Pseudo</div>
        <div class="content">Contenu</div>
        <div class="creation_date">Date de création</div>
        <div class="supprimer">Supprimer ce commentaire</div>
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

