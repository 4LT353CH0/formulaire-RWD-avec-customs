<!--
Php pour les débutants
--
https://openclassrooms.com/courses/concevez-votre-site-web-avec-php-et-mysql/introduction-a-php
-->
<?php
// Inclure un fichier qui contient des définitions de constantes, dont le titre de la page (TITRE_PAGE_SAISIE)
//Une constante est un identifiant (un nom) qui représente une valeur simple. 
//Comme son nom le suggère, cette valeur ne peut 
// jamais être modifiée durant l'exécution du script (sauf les constantes magiques).
//Par défaut, le nom d'une constante est sensible à la casse. 
//Par convention, les constantes sont toujours en majuscules. 
//
//
//http://php.net/manual/fr/language.constants.php
//
//Les variables sont toujours assignées par valeur. 
//C'est-à-dire, lorsque vous assignez une expression à une variable, 
//la valeur de l'expression est recopiée dans la variable. 
//Cela signifie, par exemple, qu'après avoir assigné la valeur d'une variable à une autre, 
//modifier l'une des variables n'aura pas d'effet sur l'autre. Pour plus de détails sur ce genre d'assignation, 
//reportez-vous aux expressions.
//
//http://php.net/manual/fr/language.variables.basics.php
//
//-----1-------
//Récuperation dans des vartiables PHP des valeurs
//saisies dans le formulaire en utilisant un fichier externe
//traitement.php
//------------
$nom = (isset($_POST["nom"]))?$_POST["nom"]:"";
$prenom = (isset($_POST["prenom"]))?$_POST["prenom"]:"";
$tel = (isset($_POST["tel"]))?$_POST["tel"]:"";
$email = (isset($_POST["email"]))?$_POST["email"]:"";
$url = (isset($_POST["url"]))?$_POST["url"]:"";
$mdp = (isset($_POST["mdp"]))?$_POST["mdp"]:"";
//radio??
//type file??
//checkboxes??
//Select>option
//Select>option
$sujet = (isset($_POST["sujet"]))?$_POST["sujet"]:"";
$commentaire = (isset($_POST["commentaire"]))?$_POST["commentaire"]:"";
//-----2-------
// Si les variables attendues n'existent pas (si $variable-is-not-set), les initialiser
if (! isset($nom)) $nom = "";
if (! isset($prenom)) $prenom = "";
if (! isset($tel)) $tel = "";
if (! isset($email)) $email = "";
if (! isset($url)) $url = "";
if (! isset($mdp)) $mdp = "";
if (! isset($sujet)) $sujet = "";
if (! isset($commentaire)) $commentaire = "";
// ensuite on utilise les variables dans les traitements
// et éventuellement dans le réaffichage du formulaire
// Les nouvelles entrées seront maintenant sauvegardées dans les champ

?>
    <!--Tout sur le formulaire 
    > http://www.scriptol.fr/html5/formulaire.php
    > http://g-rossolini.developpez.com/tutoriels/php/formulaires/?page=global
    < http://41mag.fr/tutoriel-html5-comment-faire-un-formulaire-complet.html
    < http://www.tiprof.fr/SitesWebDynamic/Techniques-swd/08_Php-et-form/exemple-complet.html
    //
    > Autres scripts - https://www.phpjabbers.com
    -->
    <!DOCTYPE html>

    <head>
        <title>Mon formulaire en HTML5, CSS et PHP</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="formulaire.css">
    </head>

    <body lang="fr">
        <header>
            <div class="vaParent">
                <h1 class="vaChild">Le formulaire HTML5, CSS et PHP</h1>
            </div>
        </header>
        <!--      
    Le formulaire
    --
    ACTION > URL (Uniform Resource Locator) absolue qui va traiter le script PHP  
    METHOD > La mode de transmission vers le serveur de informations saisiesdans le formulaire
    NAME > Nom du fomulaire UNIQUE
    --
    -->
        <section>
            <article>
                <form action="traitement.php" method="post" name="mecontacter" id="mecontacter">

                    <fieldset class="ligne" id="quisuisje">
                        <legend>Qui suis-je?</legend>
                        <!--           PLACEHOLDER (HTML5) remplace VALUE-->
                        <!--            AUTOFOCUS (HTML5) activer automatiquement un champ-->
                        <!--            AUTOCOMPLETE (HTML5) activer le cookie qui se souvient des données pour auto-remplir un champ-->
                        <!--            REQUIRED (HTML5) > sympa d'avoir mais pas d'impact sur la sécurité-->
                        <!-- tabindex=n° > by adding tabindex the user will tab away in the order defined by the code-->
                        <div class="column column5-desktop">
                            <label for="nom" class="ligne">
                                <span class="column column12 column4-desktop">Nom:</span>
                                <input type="text" name="nom" placeholder="Mon nom" value="<?php echo $nom ?>" id="nom" tabindex=1 class="column column12 column8-desktop">
                            </label>
                            <label for="prenom" class="ligne">
                                <span class="column column12 column4-desktop">Prénom:</span>
                                <input type="text" name="prenom" placeholder="Mon Prénom" value="<?php echo $prenom ?>" autofocus autocomplete="on" id="prenom" tabindex=2 class="column column12 column8-desktop">
                            </label>
                            <!--TEL > HTML5-->
                            <label for="tel" class="ligne">
                                <span class="column column12 column4-desktop">Téléphone:</span>
                                <input type="tel" name="tel" placeholder="06.75.65.45.88" value="<?php echo $tel ?>" id="tel" tabindex=3 class="column column12 column8-desktop">
                            </label>
                        </div>
                        <div class="column column12 column7-desktop">
                            <!--EMAIL > HTML5-->
                            <label for="email" class="ligne">
                                <span class="column column12 column4-desktop">E-mail: *</span>
                                <input type="email" placeholder="moi@monadresse.fr" name="email" value="<?php echo $email ?>" id="email" tabindex=4 required class="column column12 column8-desktop">
                            </label>
                            <!--URL > HTML5-->
                            <label for="url" class="ligne">
                                <span class="column column12 column4-desktop">Mon site web</span>
                                <input type="url" name="url" placeholder="www.monsiteweb.fr" value="<?php echo $url ?>" id="url" tabindex=5 class="column column12 column8-desktop">
                            </label>
                            <!--PASSWORD > HTML5-->
                            <label for="mdp" class="ligne">
                                <span class="column column12 column4-desktop">Mot de passe:</span>
                                <input type="password" name="mdp" value="<?php echo $mdp ?>" placeholder="Mon mot de passe" id="mdp" tabindex=6 class="column column12 column8-desktop">
                            </label>
                        </div>
                    </fieldset>
                    <fieldset id="sexe" class="ligne">
                        <legend>Homme, femme, les deux??</legend>
                        <div class="column column12 column6-tablet column3-desktop padding15">
                            <input type="radio" name="sexe[]" value="homme" tabindex=7 id="homme" class="invisible">
                            <label for="homme"><span></span>Masculin</label>
                        </div>
                        <div class="column column12 column6-tablet column3-desktop padding15">
                            <input type="radio" name="sexe[]" value="femme" tabindex=8 id="femme" class="invisible">
                            <label for="femme"><span></span>Féminin</label>
                        </div>
                        <div class="column column12 column6-tablet column3-desktop padding15">
                            <input type="radio" name="sexe[]" value="hermaphrodite" tabindex=9 id="hermaphrodite" class="invisible">
                            <label for="hermaphrodite"><span></span>Les deux</label>
                        </div>
                        <div class="column column12 column6-tablet column3-desktop padding15">
                            <input type="radio" name="sexe[]" value="non" tabindex=10 id="non" checked class="invisible">
                            <label for="non"><span></span>N/A</label>
                        </div>

                    </fieldset>
                    <fieldset id="meschoses">
                        <legend>..et moi, alors, qui suis-je?</legend>
                        <!--Bouton envoyer photo-->

                        <input type="file" name="photo" tabindex=11 tabindex=12 id="photo">
                        <label for$="photo" id="uploadAvatar" class="column column12">
                            <div>Le GROS bouton, ABGP (<span>A</span>rchi-<span>B</span>eau-<span>G</span>osse-<span>P</span>rofessionnel), de téléchargement</div>
                        </label>
                        <!--Checkboxes-->
                        <!--When checkbox-hidden, tabindex jumps right over and we have got a problem
                        bugfix here >
                        http://sassyhtml.com/snippets/css/css-checkboxes-and-tabindex-accessibility/-->
                        <h3>Mes couleurs préferées</h3>
                        <div class="ligne">
                            <div class="column column12 column6-tablet column3-desktop padding15">
                                <input type="checkbox" name="couleur[]" tabindex=12 id="rouge" class="invisible" value="rouge">
                                <label for="rouge">
                                    <span></span>Rouge!
                                </label>
                            </div>
                            <div class="column column12 column6-tablet column3-desktop padding15">
                                <input type="checkbox" name="couleur[]" tabindex=13 id="vert" class="invisible" value="vert">
                                <label for="vert">
                                    <span></span>Vert!
                                </label>
                            </div>
                            <div class="column column12 column6-tablet column3-desktop padding15">
                                <input type="checkbox" name="couleur[]" tabindex=14 id="bleu" class="invisible" value="bleu">
                                <label for="bleu">
                                    <span></span>Bleu!
                                </label>
                            </div>
                            <div class="column column12 column6-tablet column3-desktop padding15">
                                <input type="checkbox" name="couleur[]" tabindex=15 id="aucun" class="invisible" value="aucun">
                                <label for="aucun">
                                    <span></span>huh?..
                                </label>
                            </div>
                        </div>
                        <!--Fin .ligne-->
                        <!--Blocs RWD en colonne-->
                        <div class="ligne">
                            <!--col6-->
                            <div class="column column12 column6-tablet column12-desktop">
                                <h3>Je parle quelle langue le mieux (hors [G33K])</h3>
                                <select name="langue" id="langue">
                                    <option value="Espagnol" tabindex=17>Espagnol</option>
                                    <option value="Anglais" tabindex=18>Anglais</option>
                                    <option value="Français" tabindex=19>Français</option>
                                    <option value="Italien" tabindex=20>Italien</option>
                                    <option value="Arabe" tabindex=21>Arabe</option>
                                    <option value="Kabyles" tabindex=22>Kabyles</option>
                                    <option value="Allemand" tabindex=23>Allemand</option>
                                    <option selected value="Nerd" tabindex=24>Nerd</option>
                                    <option value="Pasbien" tabindex=25>Pas bien</option>
                                </select>
                            </div>
                            <!--fin col 6-->
                            <div class="column column12 column6-tablet column12-desktop">
                                <h3>Je mangerai bien des fruits et j'aime particulièrement des</h3>
                                <select name="langue" id="fruits">
                                    <option value="abricots">Abricots</option>
                                    <option value="pommes">Pommes</option>
                                    <option value="bananes">Bananes</option>
                                    <option value="pommedepain" selected>Pommes de pain</option>
                                    <option value="rien">Rien</option>
                                </select>
                            </div>
                            <!--Fin col 6-->
                        </div>
                        <!--fin ligne-->
                    </fieldset>
                    <div class="ligne">
                        <legend>Mon espace 'Ralouille'</legend>
                        <label for="sujet" class="ligne">
                            <span class="column column12 column3-tablet sujet">Sujet</span>
                            <input type="text" name="sujet" value="<?php echo $sujet ?>" placeholder="Mon sujet" id="sujet" class="column column12 column5-desktop">
                        </label>
                        <fieldset class="ralouille column column12 column8-desktop padding15">
                            <label for="commentaire" class="ligne">
                                <span class="column column12 column4-tablet">Mon message</span>
                                <textarea name="commentaire" value="<?php echo $commentaire ?>" class="column column12 column8-desktop">Je râle ici, mon message sera précis, je me plains et je ne suis pas content!
                                </textarea>
                            </label>
                        </fieldset>
                        <fieldset class="boutons column column12 column4-desktop padding15">
                            <!--TYPE="HIDDEN" > Le ROBOT spam va remplir et du à la condition invisible, toute information envoyé avec champ INVISIBLE rempli, ne sera PAS envoyée -->
                            <input type="hidden" name="invisible" value="Mon intention est maléfique, spambots, méfiez-vous!!" placeholder="appuyez pour émettre l'inémettrable">
                            <div class="ligne">
                                <div class="padding15 column column12 column6-tablet">
                                    <input type="reset" name="effacer" value="Effacer">
                                </div>
                                <div class="padding15 column column12 column6-tablet">
                                    <input type="submit" value="Envoyer">
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <!--Fin ligne-->
                </form>
            </article>
        </section>
        <footer>
            <div class="vaParent">
                <div class="vaChild" style="height:50px;">
                    <h2>&copy; yeh right? 2016</h2>
                    <h3>..well at least the text is centered vertically</h3>
                </div>
                <!--http://vanseodesign.com/css/vertical-centering/-->
            </div>
        </footer>
    </body>

    </html>