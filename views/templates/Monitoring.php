<?php 
    /** 
     * Affichage de la partie monitoring : liste des articles avec statistiques sur le nombre de vues et de commentaires, avec possibilité de trier par colonne.
     * un bouton pour revenir à l'administration et l'accès à la liste des commentaires pour chaque article.
     * @var String $currentBy
     * @var String $nextOrder
     * @var array $articles 
     */
?>

<div class="adminMenu">
    <a class="adminSubmit" href="index.php?action=admin">Panneau d'administration</a>
    <div class="adminSubmit"> | </div>
    <a class="adminSubmit active" href="index.php?action=monitoring">Monitoring</a>
</div>

<h2>Monitoring des articles</h2>

<div class="adminMonitoring">
    <div class="MonitoringLine Header">
        <div class="title">
            <a href="index.php?action=monitoring&by=title&order=<?= $currentBy === 'title' ? $nextOrder : 'ASC' ?>">
                Titre <?php if ($currentBy === 'title') { echo $nextOrder === 'ASC' ? '▼' : '▲'; } ?></a>
        </div>
        <div class="views">
            <a href="index.php?action=monitoring&by=views&order=<?= $currentBy === 'views' ? $nextOrder : 'ASC' ?>">
                Vues <?php if ($currentBy === 'views') { echo $nextOrder === 'ASC' ? '▼' : '▲'; } ?></a>
        </div>
        <div class="comments">
            <a href="index.php?action=monitoring&by=commentsCount&order=<?= $currentBy === 'commentsCount' ? $nextOrder : 'ASC' ?>">
                Commentaires <?php if ($currentBy === 'commentsCount') { echo $nextOrder === 'ASC' ? '▼' : '▲'; } ?>    </a>
        </div>
        <div class="publicationDate">
            <a href="index.php?action=monitoring&by=date_creation&order=<?= $currentBy === 'date_creation' ? $nextOrder : 'ASC' ?>">
                Date de publication <?php if ($currentBy === 'date_creation') { echo $nextOrder === 'ASC' ? '▼' : '▲'; } ?></a>
        </div>
    </div>
    <?php foreach ($articles as $article) { ?>
        <div class="MonitoringLine">
            <div class="title"><a href="index.php?action=commentMonitoring&id=<?= $article->getId() ?>"><?= $article->getTitle() ?></a></div>
            <div class="views"><?= $article->getViews() ?></div>
            <div class="comments"><?= $article->getCommentsCount() ?></div>
            <div class="publicationDate">
                <?= $article->getDateCreation()->format("d/m/Y H:i") ?>
            </div>
        </div>
    <?php } ?>
</div>

