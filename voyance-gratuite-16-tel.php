<!-- #### SI 2e page intégrée, mettre seulement le formulaire après avoir démarrer la session #### -->
<!-- #### SINON faire une intégration landing classique avec ce formulaire #### -->
<?php session_start(); ?>
<!-- ########## identification formulaire ########## -->
<input type="hidden" name="method" value="telnum-save" />
<input type="hidden" name="dri" value="tchat" /><!-- Si un tchat est prévu -->
<input type="hidden" name="dri2" value="http://www.myastro.fr/%%NOM_DE_LA_PAGE%%-dri" />
<!-- ############################################### -->

<!-- les champs de formulaire sont sur le même modèle que la landing, il faut mettre le détail de la question, le numéro de téléphone et le pays -->

<!-- À la fin du formulaire les scripts de conversion -->
<?php include_once('include/conversion/%%CONVERSION%%.php');?>
