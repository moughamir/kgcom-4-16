<?php
/* 
    --------------------------------------------------------------
    --   DRI POST-MAIL = %%NOM_DE_LA_PAGE%% = %%AFFILIATION%%   --
    --------------------------------------------------------------

    Created on : date
    Author     : prenom nom <mail>
*/
include('include/process-dri-postmailing.php');
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>%%TITLE%%</title>
    
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
		<!-- ### AU NIVEAU DU FORMULAIRE ### -->
		<?php if($state == 'MAIL_SENT' || $state == 'MAIL_ALREADY_SENT'){ ?>
			<!-- ### MESSAGE SUCCÈS ### -->
		<?php } else { ?>
			<!-- ### CODE FORMULAIRE ### -->
			<input type="text" id="name" name="prenom" placeholder="Mon Prénom" value="<?= $prenom ?>" required />
			<input type="tel" id="tel" name="tel" placeholder="Mon N° de téléphone" value="<?= $tel ?>"required />
			<!-- + champs du pays idem que landing -->
			<!-- SUBMIT -->
			<input type="text" name="antisp" value="" style="display: none" /><!-- #### IMPERATIF #### -->
			<button type="submit" name="demande_rappel" >Rappel Gratuit</button>
		<?php } ?>
        
        <!-- #### REMARKETINGS #### -->
        <?php include('include/remarketing/adwords.php');
              include('include/remarketing/analytics.php');
              include('include/remarketing/facebook.php'); ?>
    </body>
</html>