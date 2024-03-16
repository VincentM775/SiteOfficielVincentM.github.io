<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="google-site-verification" content="44yDus8rfzvEHwkA6YrQR6Ja2Y2ntilaUrVatV0ZAnE" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vincent MATIAS - Étudiant 1ère année en BUT Informatique</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">

</head>
<body>
    <script src="https://kit.fontawesome.com/99674c63ee.js" crossorigin="anonymous"></script>
    <header class="fondFlou" id="top">
        <h2><a class="textNav" href="/accueil.html" id="titreHeader">VMatias</a></h2>
        <nav>
              <a class="textNav" href="/accueil.html#competences">Compétences</a>
              <a class="textNav" href="/accueil.html#projets">Projets</a>
              <a class="textNav" href="/accueil.html#formations">Formations</a>
              <a class="textNav" href="/accueil.html#experiences">Expériences</a>
              <a class="textNav" href="/accueil.html#centreInteret">Centres d'intérêt</a>
              <a class="textNav" href="/contact.php">Contact</a>

        </nav>
    </header>
    <main>
        <section id="section1" >
            <div class="overlay"></div>
            <div id="titreExplicative">
                <h1 id="titrePage">Page de contact</h1>
            </div>
        </section>
        <hr>
        <section id="section2">
            
            <article>
                <?php include('./envoi.php');?>
                <form method="POST">
                    <h2 class="titreRubrique">Formulaire</h2>
                    <div id="all_input">
                        <div class="field" id="fieldNom">
                            <label class="label">Nom :</label>
                            <div class="control has-icons-left has-icons-right">
                                <input name="lastname" id="formNom" class="input is-danger" type="text" placeholder="Exemple : Matias"required>
                                <span class="icon is-small is-left">
                                    <i class="fas fa-user"></i>
                                </span>
                                <span class="icon is-small is-right">
                                    <i class="fas fas fa-exclamation-triangle"></i>
                                </span>
                            </div>
                            <p class="help is-danger">Ce champ est obligatoire</p>
                        </div>
                        
                        <div class="field" id="fieldPrenom">
                            <label class="label">Prénom :</label>
                            <div class="control has-icons-left has-icons-right">
                                <input name="firstname" id="formPrenom" class="input is-danger" type="text" placeholder="Exemple : Vincent"required>
                                <span class="icon is-small is-left">
                                    <i class="fas fa-user"></i>
                                </span>
                                <span class="icon is-small is-right">
                                    <i class="fas fas fa-exclamation-triangle"></i>
                                </span>
                            </div>
                            <p class="help is-danger">Ce champ est obligatoire</p>
                        </div>
                        
                        <div class="field" id="fieldEmail">
                            <label class="label">Email :</label>
                            <div class="control has-icons-left has-icons-right">
                                <input name="email" id="formEmail" class="input is-danger" type="email" placeholder="Exemple : vincentmts77@gmail.com" required >
                                <span class="icon is-small is-left">
                                    <i class="fas fa-envelope"></i>
                                </span>
                                <span class="icon is-small is-right">
                                    <i class="fas fa-exclamation-triangle"></i>
                                </span>
                            </div>
                            <p class="help is-danger">Ce champ est obligatoire</p>
                        </div>
                        
                        <div class="field" id="fieldSujet">
                            <label class="label">Sujet :</label>
                            <div class="control has-icons-left has-icons-right">
                                <input name="subject" id="formSujet" class="input is-danger" type="text" placeholder="Exemple : Recrutement alternance" required>
                                <span class="icon is-small is-left">
                                    <i class="fas fa-envelope"></i>
                                </span>
                                <span class="icon is-small is-right">
                                    <i class="fas fa-exclamation-triangle"></i>
                                </span>
                            </div>
                            <p class="help is-danger">Ce champ est obligatoire</p>
                        </div>
                        
                        <div class="field" id="fieldMessage">
                            <label class="label">Message :</label>
                            <div class="control">
                                <textarea name="message" id="formMessage" class="textarea" 
                                placeholder="Exemple : Bonjour,
je suis recruteur et je suis intéresser par votre profil.
Recontacter moi pour un entretient.
Cordialement" required></textarea>
                            </div>
                        </div>

                        <div class="field is-grouped">
                            <div class="control">
                                <button class="button is-link">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </article>
        </section>
        <hr>
    </main>
    <footer>
        <p>Vincent Matias &copy 2024 - Tous droits réservés</p>
    </footer>
    <script src="js.js"></script>
</body>
</html>