<?php
/* 
    -----------------------------------------------
    --   %%NOM_DE_LA_PAGE%% = %%AFFILIATION%%   --
    -----------------------------------------------

    Created on : date
    Author     : prenom nom <mail>
*/
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>MyAstro - Voyance gratuite</title>
    
        <meta name="robots" content="noindex,nofollow" />
        
        <link rel="icon" type="image/png" href="logo_myastro_32x32.jpg" />
	
        <link rel="stylesheet" type="text/css" href="css/bootstrap.334.min.css" />
        <link href="css/voyance-gratuite-16.css" rel="stylesheet" />
	
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
   <body>
        <section class="ContentBand">
            <div class="PageWrapper">
                <div class="ContentBand-Column">
                    <div class="TextContent">
                        <header class="ContentBand-ColumnHeader">
                            <span class="SiteLogo"></span>
                            <h1 class="DescText-Title">
                            	<img src="images_landing/voyance-gratuite-16/couple.png" alt="couple sur la plage">
                            </h1>
                            <p class="DescText-Title-Legend">
                                MARIE,<br />
                                Consultante en astrologie Lunaire<br />
                                répondra à vos questions
                            </p>
                        </header>
                        <article class="DescText">
                            <div class="DescText-Content">
                                <p>La pleine lune est un événement incontournable de l’astrologie. Influençant nos émotions, nos sentiments et nos réactions, la pleine lune est une période idéale pour les relations amoureuses et les nouveaux départs. Belle et lumineuse, la pleine lune est un moment propice aux prises de décisions, aux passages à l’action et aux lancements de nouveaux projets. Amour, travail, argent, pendant quelques jours, la pleine lune influence directement les domaines de notre vie quotidienne, donnant à chacun d’entre nous, l’opportunité d’y voir plus clair et de s’engager sur un chemin plus sûr et serein.</p>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="ContentBand-Column Form">
                    <article class="FormContainer">
                        <div class="FormContainer overlay" id="form-overlay"></div>
                        <h2 class="FormContainer-Header">Remplissez vite le formulaire <br class="hidebloc"/> pour recevoir votre étude personnalisée !</h2>
                        <div class="FormContainer-Fields">
                            <p class="alert alert-danger" style="display: none"></p>
                            <form id="form-container">
                                <!-- ########## identification formulaire ########## -->
                                <input type="hidden" name="source" value="pleine-lune-avril-16" />
                                <input type="hidden" name="method" value="affil-maxi" />
                                <input type="hidden" name="support" value="voyance" />
                                <input type="hidden" name="affiliation" value="affilbase" />
                                <input type="hidden" name="dri" value="http://www.myastro.fr/pleine-lune-avril-16-tel" />
                                <input type="hidden" name="redirect_method" value="reload_form" />
                                <!-- ########## autres champs pré-remplis ######### -->
                                <input type="hidden" name="cguv" value="1" />
                                <input type="hidden" name="partenaires" value="1" />
                                <!-- ############################################### -->
                                <div class="FormField">
                                    <label for="name" class="FormField-Label">Prénom</label>
                                    <input type="text" id="name" name="prenom" class="FormField-Input" required />
                                </div>
                                <div class="FormField radio">
                                    <div class="FormField-TableInputContainer fixed-2-col gender">
                                        <div class="FormField-TableInputContainer-Cell">
                                            <label for="sexe-f" class="FormField-Label "><span class="ico-woman fa fa-venus"></span> Femme</label>
                                            <input type="radio" name="sexe" value="femme" id="sexe-f" class="FormField-Input" />
                                        </div>
                                        <div class="FormField-TableInputContainer-Cell">
                                            <label for="sexe-h" class="FormField-Label"><span class="ico-man fa fa-mars"></span> Homme</label>
                                            <input type="radio" name="sexe" value="homme" id="sexe-h" class="FormField-Input" />
                                        </div>
                                    </div>
                                </div>
                                <div class="FormField">
                                    <label class="FormField-Label">Date de naissance</label>
                                    <div class="FormField-TableInputContainer">
                                        <div class="FormField-TableInputContainer-Cell">
                                            <select  class="FormField-Input" name="jour" required>
                                                <option selected="selected" value="">Jour</option>
                                                <?php for($i=1;$i<=31;$i++){ ?>
                                                <option value="<?= $i ?>"><?= sprintf('%02d', $i) ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="FormField-TableInputContainer-Cell">
                                            <select class="FormField-Input" name="mois" required>
                                                <option value="" selected="selected">Mois</option>
                                                <option value="01">Janv.</option>
                                                <option value="02">Fev.</option>
                                                <option value="03">Mars</option>
                                                <option value="04">Avr.</option>
                                                <option value="05">Mai</option>
                                                <option value="06">Juin</option>
                                                <option value="07">Juil.</option>
                                                <option value="08">Aout</option>
                                                <option value="09">Sept.</option>
                                                <option value="10">Oct.</option>
                                                <option value="11">Nov.</option>
                                                <option value="12">Dec.</option>
                                            </select>
                                        </div>
                                        <div class="FormField-TableInputContainer-Cell">
                                            <select class="FormField-Input" name="annee" required>
                                                <option selected="selected" value="">Année</option>
                                                <?php for($i=date('Y')-18;$i>=1900;$i--){ ?>
                                                <option value="<?= $i ?>"><?= $i ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="FormField">
                                    <label class="FormField-Label" for="theme_id">Votre question</label>
                                    <select class="FormField-Input" name="theme_id" id="theme_id" required>
                                        <option value="" selected disabled>Thème de la question</option>
                                        <optgroup label="Amour">
                                            <option value="pla16_question_1">Quand vais-je rencontrer l’amour ?</option>
                                            <option value="pla16_question_2">Quels sont ses sentiments pour moi ?</option>
                                            <option value="pla16_question_24">Mes sentiments sont confus, que dois-je faire ?</option>
                                            <option value="pla16_question_11">Ai-je encore un avenir avec lui/elle ?</option>
                                        </optgroup>
                                        <optgroup label="Argent">                          
                                            <option value="pla16_question_73">Vais-je gagner de l’argent ?</option>
                                        </optgroup>
                                        <optgroup label="Travail">
                                            <option value="pla16_question_4">Quel sera mon avenir professionnel ?</option>
                                            <option value="pla16_question_3">Quand vais-je trouver du travail ?</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="FormField sonprenom" style="display: none;">
                                    <label class="FormField-Label" for="son_prenom">Son prénom</label>
                                    <input type="text" id="son_prenom" name="conjoint" class="FormField-Input" />
                                </div>
                                <div class="FormField">
                                    <label for="email" class="FormField-Label">E-mail</label>
                                    <input id="email" type="email" name="email" class="FormField-Input" required />
                                    <span class="FormField-Info" style="margin-top: -10rem;">Une étude personnalisée vous sera envoyée à cette adresse</span>
                                </div>
                                <button class="ripple FormContainer-btn" type="submit" name="valider">Je veux savoir</button>
                            </form>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <footer class="SiteFooter">
            <div class="PageWrapper">
                <ul class="ReassuranceList">
                    <li class="ReassuranceList-Item">
                        <span class="ReassuranceList-Item-Img star"></span>
                        <span class="ReassuranceList-Item-Txt">Voyant <strong>sérieux reconnus</strong> <br/> pour leur <strong>savoir faire</strong></span>
                    </li>
                    <li class="ReassuranceList-Item">
                        <span class="ReassuranceList-Item-Img lock"></span>
                        <span class="ReassuranceList-Item-Txt">Consultations 100% <br/>discrètes &amp; anonymes</span>
                    </li>
                    <li class="ReassuranceList-Item">
                        <span class="ReassuranceList-Item-Img chat"></span>
                        <span class="ReassuranceList-Item-Txt">Interprétation<br/>immédiate</span>
                    </li>
                    <li class="ReassuranceList-Item">
                        <span class="ReassuranceList-Item-Img trophy"></span>
                        <span class="ReassuranceList-Item-Txt">My Astro leader <br/>depuis 2007</span>
                    </li>
                    <li class="ReassuranceList-Item">
                        <span class="ReassuranceList-Item-Img secure"></span>
                        <span class="ReassuranceList-Item-Txt">Paiement <br/>sécurisé par CB</span>
                    </li>
                </ul>
            </div>
        </footer>
        <p class="SiteCopyright"><?php include('include/footer_copyright.php'); ?></p>
        
        <!-- #### SCRIPTS #### -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="js/formValidator.js"></script>
    <script type="text/javascript">
    (function(window, $) {

        $(function() {


            $('.ripple').on('click', function(event) {
                event.preventDefault();

                var $div = $('<div/>'),
                    btnOffset = $(this).offset(),
                    xPos = event.pageX - btnOffset.left,
                    yPos = event.pageY - btnOffset.top;



                $div.addClass('ripple-effect');
                var $ripple = $(".ripple-effect");

                $ripple.css("height", $(this).height());
                $ripple.css("width", $(this).height());
                $div
                    .css({
                        top: yPos - ($ripple.height() / 2),
                        left: xPos - ($ripple.width() / 2),
                        background: $(this).data("ripple-color")
                    })
                    .appendTo($(this));

                window.setTimeout(function() {
                    $div.remove();
                }, 2000);
            });

        });

    })(window, jQuery);
    </script>
        <!-- #### REMARKETINGS #### -->
        <?php include('include/remarketing/adwords.php');
              include('include/remarketing/analytics.php');
              include('include/remarketing/facebook.php'); ?>
    </body>
</html>
<!-- #### AJOUTER ICI LES FONTS ET FEUILLES DE STYLE SECONDAIRES #### -->