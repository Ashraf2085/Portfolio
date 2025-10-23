<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php require_once(__DIR__ . '/header.php') ?>
    <div class="main">
        <h1>Le savez-vous ?</h1>
        <div class="presentation">
            <div class="paragraphe">
                <p>
                Ce site a été entièrement créé avec HTML5 et CSS3.  
                Au début, j'avais commencé à le faire uniquement en HTML.
                </p>

                <p>
                Mais comme j'ai remarqué que le menu du haut serait le même sur toutes les pages,
                j'ai pensé à le faire en PHP.
                </p>

                <p>
                Cela me permettait d'éviter de répéter le même code pour chaque page.
                J'ai donc transformé l’extension de mes fichiers HTML en fichiers PHP.
                </p>

                <p>
                De cette façon, j’ai pu utiliser la fonction <strong>require_once</strong>,
                qui m’a permis d’intégrer la partie "header" (le menu du haut)
                dans toutes les pages du site, y compris celle-ci.
                </p>

                <p>
                J'avais également pensé à créer un <strong>footer</strong> pour les pages.  
                Le concept est le même que pour le header : un code centralisé réutilisable.
                </p>

                <p>
                Avec <strong>require_once</strong> (qui s’utilise uniquement en PHP), 
                on peut déplacer ou inclure n'importe quel morceau de code dans plusieurs pages facilement.
                </p>

            </div>
        </div>
    </div>
    <footer>
        &copy; 2025 SITE Moderne
    </footer>
</body>
</html>