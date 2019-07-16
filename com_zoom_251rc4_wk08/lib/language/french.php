<?php
//zOOm Media Gallery//
/**
-----------------------------------------------------------------------
|  zOOm Media Gallery! by Mike de Boer - a multi-gallery component    |
-----------------------------------------------------------------------

-----------------------------------------------------------------------
|                                                                     |
| Author : Mike de Boer, <http://www.mikedeboer.nl>                   |
| Copyright : copyright (C) 2007 by Mike de Boer                      |
| Description : zOOm Media Gallery, a multi-gallery component for     |
|              Joomla!. It's the most feature-rich gallery component  |
|              for Joomla!! For documentation and a detailed list     |
|              of features, check the zOOm homepage:                  |
|              http://www.zoomfactory.org                             |
| License : GPL                                                       |
| Filename : french.php (update by Brutus du Grammont - 2006-07-29)   |
|                                                                     |
-----------------------------------------------------------------------
* @package zOOm Media Gallery
* @author Mike de Boer <mailme@mikedeboer.nl>
**/
// MOS Intruder Alerts
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

//Language translation
define("_ZOOM_DATEFORMAT","%d.%m.%Y %H:%M"); // use the PHP strftime Format, more info at http://www.php.net
define("_ZOOM_PICK","Choisir une Galerie");
define("_ZOOM_DELETE","Supprimer");
define("_ZOOM_BACK","Retour");
define("_ZOOM_MAINSCREEN","Ecran principal");
define("_ZOOM_BACKTOGALLERY","Retour � la Galerie");
define("_ZOOM_INFO_DONE","Termin� !");
define("_ZOOM_TOOLTIP", "zOOm Astuce");
define("_ZOOM_WARNING", "zOOm Alerte !");
define("_ZOOM_ORDERSAVE", "Enr�gistrer ordre");
define("_ZOOM_SETTINGS_ERASE", "Effacer toutes les donn�es (config, images, galleries) et recommencer � zero.");
define("_ZOOM_SETTINGS_TEMPLATE_TITLE", "Titre");
define("_ZOOM_SETTINGS_TEMPLATE_CHOOSE", "Choisir");
define("_ZOOM_SETTINGS_GALLERY", "Affichage Galerie");
define("_ZOOM_SETTINGS_VIEW", "Affichage Media");
define("_ZOOM_SETTINGS_DESCRINGAL", "Description dans la galerie");
define("_ZOOM_SETTINGS_TEMPLATE_TABLELESS", "classique (tables)");
define("_ZOOM_SETTINGS_TEMPLATE_TABLES", "moderne (sans tables)");
define("_ZOOM_SETTINGS_GALLERY_FEATURES", "Options Gallerie");
define("_ZOOM_SETTINGS_NO_POP", "Pas de Popups");
define("_ZOOM_SETTINGS_STANDARD_POP", "Popup standard");
define("_ZOOM_SETTINGS_LIGHTBOX_POP", "Popup lightbox JS");
define("_ZOOM_SETTINGS_VIEW_FEATURES", "Options Media");
define("_ZOOM_SETTINGS_GENERAL_FEATURES", "Options G�n�rales");
define("_ZOOM_SETTINGS_HOTLINK", "Protection des images et path images");
define("_ZOOM_SETTINGS_MAXSIZEKB", "Taille Max. (Ko)");

//Gallery admin page
define("_ZOOM_ADMINSYSTEM","Espace Administrateur");
define("_ZOOM_USERSYSTEM","Espace Utilisateur");
define("_ZOOM_ADMIN_TITLE","Espace Administrateur de Galerie");
define("_ZOOM_USER_TITLE","Espace Utilisateur de Galerie");
define("_ZOOM_CATSMGR","Gestionnaire de Galerie");
define("_ZOOM_CATSMGR_DESCR","Cr�er une nouvelle galerie d'images ou la supprimer.");
define("_ZOOM_SETTINGS_DDONOF","Glisser d�poser possible :");
define("_ZOOM_NEW","Enr�gistrer Nouvelle Galerie");
define("_ZOOM_DEL","Supprimer une Galerie");
define("_ZOOM_MEDIAMGR","Gestionnaire d'images");
define("_ZOOM_MEDIAMGR_DESCR","Publier, effacer, charger automatiquement une image ou envoyer manuellement plusieurs images");
define("_ZOOM_THUMB", "Cr�ation code miniature");
define("_ZOOM_THUMB_DESCR", "Cr�er les codes des miniatures facilement");
define("_ZOOM_UPLOAD","Fichier(s) � envoyer");
define("_ZOOM_EDIT","Publier une Galerie");
define("_ZOOM_ADMIN_CREATE","Cr�er une base de donn�es");
define("_ZOOM_ADMIN_CREATE_DESCR","construire les tables de la base de donn�es requise pour pouvoir utiliser un album.");
define("_ZOOM_HD_PREVIEW","Pr�-visualiser");
define("_ZOOM_HD_CHECKALL","Tout v�rifier ou non");
define("_ZOOM_HD_CREATEDBY","Cr��e par");
define("_ZOOM_HD_AFTER","Ins�rer apr�s");
define("_ZOOM_HD_HIDEMSG","Cacher le texte 'pas d'images'");
define("_ZOOM_HD_NAME","Nom de la Galerie");
define("_ZOOM_HD_DIR","R�pertoire");
define("_ZOOM_HD_NEW","Nouvelle Galerie");
define("_ZOOM_HD_SHARE","Partager cette Galerie");
define("_ZOOM_SHARE","Partager");
define("_ZOOM_UNSHARE","Ne plus partager");
define("_ZOOM_PUBLISH","Publier");
define("_ZOOM_UNPUBLISH","D�publier");
define("_ZOOM_TOPLEVEL","Premier niveau");
define("_ZOOM_HD_UPLOAD","Envoi fichier");
define("_ZOOM_A_ERROR_ERRORTYPE","Erreur");
define("_ZOOM_A_ERROR_IMAGENAME","Nom de l'image");
define("_ZOOM_A_ERROR_NOFFMPEG","<u>FFmpeg</u> non disponible");
define("_ZOOM_A_ERROR_NOPDFTOTEXT","<u>PDF2Text</u> non disponible");
define("_ZOOM_A_ERROR_NOTINSTALLED","Non install�e");
define("_ZOOM_A_ERROR_CONFTODB","Erreur de configuration pendant la sauvegarde dans la base de donn�es !");
define("_ZOOM_A_MESS_NOT_SHURE","* Si vous n'�tes pas s�r, utilisez \"auto\" par d�faut.");
define("_ZOOM_A_MESS_SAFEMODE1","Note : \"Safe Mode\" est activ� ; dans ce cas, il est possible que l'envoi de fichiers plus gros ne soit pas trait� !<br />Vous devriez changer le Mode FTP dans l'espace Administrateur.");
define("_ZOOM_A_MESS_SAFEMODE2","Note : \"Safe Mode\" est activ� ; dans ce cas, il est possible que l'envoi de fichiers plus gros ne soit pas trait� !<br />zOOm recommande d'activer le Mode FTP dans l'espace Administrateur.");
define("_ZOOM_A_MESS_PROCESSING_FILE","Traitement en cours...");
define("_ZOOM_A_MESS_NOTOPEN_URL","Impossible d'acc�der � l'url :");
define("_ZOOM_A_MESS_PARSE_URL","Analyse \"%s\" des images... "); // %s = $url
define("_ZOOM_A_MESS_NOJAVA","Si vous voyez seulement une bo�te grise ci-dessus ou si vous avez des probl�mes de transfert,<br />il est possible que vous n'ayez pas la derni�re version de Java. Rendez-vous ici : <a href=\"http://www.java.com\" target=\"_blank\">Java.com</a> <br /> et t�l�chargez la derni�re version.");
define("_ZOOM_SETTINGS","Param�tres");
define("_ZOOM_SETTINGS_DESCR","Modifiez et visualisez ici les param�tres disponibles.");
define("_ZOOM_SETTINGS_TAB1","Syst�me");
define("_ZOOM_SETTINGS_TAB2","Fichiers");
define("_ZOOM_SETTINGS_TAB3","Apparence"); 
define("_ZOOM_SETTINGS_TAB4","Filigrane");
define("_ZOOM_SETTINGS_TAB5","Safe Mode");
define("_ZOOM_SETTINGS_TAB6","Accessibilit�");
define("_ZOOM_SETTINGS_TAB7","Droits");
define("_ZOOM_SETTINGS_TAB8","Remise � z�ro");
define("_ZOOM_SETTINGS_CONVTYPE","Type de conversion");
define("_ZOOM_SETTINGS_AUTODET","auto-d�tect� : ");
define("_ZOOM_SETTINGS_IMGPATH","Chemin vers le fichier images :");
define("_ZOOM_SETTINGS_TTIMGPATH","Le chemin courant est ");
define("_ZOOM_SETTINGS_CONVSETTINGS","Param�tres de conversion d'image :");
define("_ZOOM_SETTINGS_IMPATH","Chemin vers ImageMagick : ");
define("_ZOOM_SETTINGS_NETPBMPATH"," ou NetPBM : ");
define("_ZOOM_SETTINGS_FFMPEGPATH","Chemin vers FFmpeg ");
define("_ZOOM_SETTINGS_FFMPEGTOOLTIP","FFmpeg est requis pour cr�er les miniatures de vos fichiers vid�os.<br />Les extensions support�es sont : ");
define("_ZOOM_SETTINGS_OVERRIDE_FFMPEG","Utiliser FFmpeg, m�me si zOOm ne peut v�rifier sa pr�sence sur votre syst�me.");
define("_ZOOM_SETTINGS_PDFTOTEXTPATH","Chemin vers PDF2Text ");
define("_ZOOM_SETTINGS_XPDFTOOLTIP","PDF2Text, inclus dans Xpdf package, est requis pour indexer les fichiers PDF.");
define("_ZOOM_SETTINGS_OVERRIDE_PDF","Utiliser PDF2Text, m�me si zOOm ne peut v�rifier sa pr�sence sur votre syst�me.");
define("_ZOOM_SETTINGS_MAXSIZE","Largeur maximale d'une image : ");
define("_ZOOM_SETTINGS_THUMBSETTINGS","Param�tres d'une miniature :");
define("_ZOOM_SETTINGS_QUALITY","Qualit� de NetPBM et GD2 JPEG : ");
define("_ZOOM_SETTINGS_SIZE","Largeur maximale d'une miniature : ");
define("_ZOOM_SETTINGS_TEMPNAME","Nom provisoire : ");
define("_ZOOM_SETTINGS_AUTONUMBER","Num�rotation auto des noms d'images (ex. 1,2,3)");
define("_ZOOM_SETTINGS_TEMPDESCR","Description provisoire : ");
define("_ZOOM_SETTINGS_TITLE","Titre de la galerie :");
define("_ZOOM_SETTINGS_SUBCATSPG","Nbre de colonne(s) d'une (sous) galerie :");
define("_ZOOM_SETTINGS_COLUMNS","Nbre de colonnes pour les miniatures :");
define("_ZOOM_SETTINGS_THUMBSPG","Nombre de miniatures par page :");
define("_ZOOM_SETTINGS_CMTLENGTH","Longueur maximale des commentaires :");
define("_ZOOM_SETTINGS_CHARS","caract�res");
define("_ZOOM_SETTINGS_GALLERYPREFIX","Pr�fixe du titre de galerie :");
define("_ZOOM_SETTINGS_SHOWOCCSPACE","Montrer l'espace occup� dans le gestionnaire de fichiers :");
define("_ZOOM_SETTINGS_FEATURES_TITLE","Capacit� avanc�e Oui/Non");
define("_ZOOM_SETTINGS_CSS_TITLE","Edition Style CSS");
define("_ZOOM_SETTINGS_DISPLAY_TITLE","Donn�es � afficher Oui/Non");
define("_ZOOM_SETTINGS_COMMENTS","Commentaires");
define("_ZOOM_SETTINGS_POPUP","PopUp Images");
define("_ZOOM_SETTINGS_CATIMG","Montrer la cat�gorie d'image");
define("_ZOOM_SETTINGS_SLIDESHOW","Diaporama");
define("_ZOOM_SETTINGS_ZOOMLOGO","Montrer le logo zOOm");
define("_ZOOM_SETTINGS_SHOWHITS","Afficher le nombre de clics");
define("_ZOOM_SETTINGS_READEXIF","Lire les donn�es EXIF");
define("_ZOOM_SETTINGS_EXIFTOOLTIP","Ce m�mo montrera les donn�es additionnelles EXIF et autre IPTC, m�me sans le module EXIF pr�sent sur votre syst�me.");
define("_ZOOM_SETTINGS_READID3","Lire mp3 ID3-data");
define("_ZOOM_SETTINGS_ID3TOOLTIP","Cette fonction montre les param�tres ID3 v1.1 et v2.0 dans les fichiers MP3.");
define("_ZOOM_SETTINGS_RATING","Classement");
define("_ZOOM_SETTINGS_CSS","Fen�tre popup de la feuille de style");
define("_ZOOM_SETTINGS_CSSZOOM","zOOm galerie &amp; vue moyenne");
define("_ZOOM_SETTINGS_SUCCESS","Configuration mise � jour avec succ�s !");
define("_ZOOM_SETTINGS_ZOOMING","Zoom image");
define("_ZOOM_SETTINGS_ORDERBY","Tri des miniatures par :");
define("_ZOOM_SETTINGS_CATORDERBY","Tri des (sous) galeries par :");
define("_ZOOM_SETTINGS_DATE_ASC","Date, ascendante");
define("_ZOOM_SETTINGS_DATE_DESC","Date, descendante");
define("_ZOOM_SETTINGS_FLNM_ASC","Nom de fichier, ascendant");
define("_ZOOM_SETTINGS_FLNM_DESC","Nom de fichier, descendant");
define("_ZOOM_SETTINGS_NAME_ASC","Nom de l'image, ascendant");
define("_ZOOM_SETTINGS_NAME_DESC","Nom de l'image, descendant");
define("_ZOOM_SETTINGS_LBTOOLTIP","Une s�lection est un album constitu� des images choisies par un utilisateur et pouvant �tre t�l�charg�es comme un dossier ZIP.");
define("_ZOOM_SETTINGS_SHOWNAME","Affichage du Nom");
define("_ZOOM_SETTINGS_SHOWDESCR","Affichage de la description");
define("_ZOOM_SETTINGS_SHOWKEYWORDS","Affichage des mots-cl�s");
define("_ZOOM_SETTINGS_SHOWDATE","Affichage de la date");
define("_ZOOM_SETTINGS_SHOWUNAME","Afficher le nom de l'utilisateur");
define("_ZOOM_SETTINGS_SHOWFILENAME","Afficher le nom du fichier");
define("_ZOOM_SETTINGS_METABOX","Affichage d�taill� des pages-galeries");
define("_ZOOM_SETTINGS_METABOXTOOLTIP","Supprimez ce dispositif pour acc�l�rer la visualisation de votre galerie. Efficace avec de grandes bases de donn�es.");
define("_ZOOM_SETTINGS_ECARDS","E-cartes");
define("_ZOOM_SETTINGS_ECARDS_LIFETIME","E-cartes permanentes");
define("_ZOOM_SETTINGS_ECARDS_ONEWEEK","une semaine");
define("_ZOOM_SETTINGS_ECARDS_TWOWEEKS","deux semaines");
define("_ZOOM_SETTINGS_ECARDS_ONEMONTH","un mois");
define("_ZOOM_SETTINGS_ECARDS_THREEMONTHS","trois mois");
define("_ZOOM_SETTINGS_SHOWSEARCH","Champ de recherche sur TOUTES les pages");
define("_ZOOM_SETTINGS_BOX_ANIMATE","Bo�te anim�e");
define("_ZOOM_SETTINGS_BOX_PROPERTIES","Propri�t� de l'�tat visuel de la bo�te");
define("_ZOOM_SETTINGS_BOX_META","Metadata de l'�tat visuel de la bo�te");
define("_ZOOM_SETTINGS_BOX_COMMENTS","Commentaire de l'�tat visuel de la bo�te");
define("_ZOOM_SETTINGS_BOX_RATING","Classement de l'�tat visuel de la bo�te");
define("_ZOOM_SETTINGS_TOPTEN","Afficher le lien \"Top 10\" sur la page principale");
define("_ZOOM_SETTINGS_LASTSUBM","Afficher le lien \"Derniers fichiers envoy�s\" sur la page principale");
define("_ZOOM_SETTINGS_SETMENUOPTION","Afficher le lien \"Envois de fichiers\" dans le menu utilisateur");
define("_ZOOM_SETTINGS_USEFTP","Utiliser le mode FTP ?");
define("_ZOOM_SETTINGS_FTPHOST","Nom de l'h�bergeur ");
define("_ZOOM_SETTINGS_FTPUNAME","Nom de l'utilisateur ");
define("_ZOOM_SETTINGS_FTPPASS","Mot de passe ");
define("_ZOOM_SETTINGS_FTPWARNING","Attention : Le mot de passe n'est pas sauvegard� de mani�re s�curis�e !");
define("_ZOOM_SETTINGS_FTPHOSTDIR","R�pertoire de l'h�bergeur ");
define("_ZOOM_SETTINGS_MESS_FTPHOSTDIR","Veuillez indiquer le chemin de Joomla! depuis la racine de votre serveur FTP.<br />IMPORTANT : <b>sans</b> slash ou backslash � la fin de la ligne !");
define("_ZOOM_SETTINGS_GROUP","Groupe");
define("_ZOOM_SETTINGS_PRIV_DESCR","Vous �tes habilit� � modifier les privil�ges de tous les groupes utilisateurs connus de Joomla! et par cons�quent, vous pouvez modifier tous les privil�ges des utilisateurs appartenant � ces groupes !<br />
    Un utilisateur peut, en th�orie, faire les choses suivantes : envoyer des fichiers, �diter / effacer des fichiers, cr�er / �diter / effacer / partager des galeries.<br />
    Ce qu'ils peuvent faire ou non d�pend de vous.");
define("_ZOOM_SETTINGS_CLOSE","Afficher le lien \"Fermer\" en popup");
define("_ZOOM_SETTINGS_MAINSCREEN","Afficher le lien \"Page principale\" dans la barre de navigation");
define("_ZOOM_SETTINGS_NAVBUTTONS","Afficher les boutons de navigation");
define("_ZOOM_SETTINGS_PROPERTIES","Afficher les propri�t�s sous l'image");
define("_ZOOM_SETTINGS_MEDIAFOUND","Afficher \"Fichier trouv�\" dans la galerie");
define("_ZOOM_SETTINGS_ANONYMOUS_COMMENTS","Permettre les commentaires anonymes");
define("_ZOOM_SETTINGS_WM_ENABLE_TITLE","Option disponible");
define("_ZOOM_SETTINGS_WM_TITLE", "Votre filigrane");
define("_ZOOM_SETTINGS_WM_DESCR","Votre filigrane appara�t sur les images de la galerie. "
 . "Chaque image reste visible, mais les visiteurs h�siteront � les copier et � les imprimer."
 . "<br /><br />Suggestion : vous pouvez utiliser votre logo comme filigrane. "
 . "Assurez-vous de laisser le fond du logo transparent !");
define("_ZOOM_SETTINGS_WM_IMG", "Image");
define("_ZOOM_SETTINGS_WM_NOWATERMARKS","Pas trouv� de filigrane. Vous pouvez le t�l�charger ci-dessous.");
define("_ZOOM_SETTINGS_WM_PLACEMENT_TITLE","Emplacement");
define("_ZOOM_SETTINGS_WM_PLACEMENT_DESCR","Vous pouvez choisir la place du filigrane sur l'image "
 . "en s�lectionnant une des positions ci-dessous.");
define("_ZOOM_SETTINGS_WM_FILE","Transfert du filigrane");
define("_ZOOM_SETTINGS_WM_UPLOAD_SUCCESS","Filigrane transf�r� avec succ�s !");
define("_ZOOM_SETTINGS_WM_UPLOAD_FAIL","Echec de transfert du filigrane.");
define("_ZOOM_SETTINGS_WM_DEL_SUCCESS","Filigrane effac� avec succ�s !");
define("_ZOOM_SETTINGS_WM_DEL_FAIL","Le filigrane ne peut �tre effac�.");
define("_ZOOM_SYSTEM_TITLE","Configuration syst�me");
define("_ZOOM_YES","oui");
define("_ZOOM_NO","non");
define("_ZOOM_VISIBLE","Visible");
define("_ZOOM_HIDDEN","Cach�");
define("_ZOOM_SAVE","Sauvegarder");
define("_ZOOM_MOVEFILES","D�placer les fichiers");
define("_ZOOM_BUTTON_MOVE","D�placer");
define("_ZOOM_MOVEFILES_STEP1","S�lectionner la galerie vis�e & d�placer le fichier");
define("_ZOOM_ALERT_MOVE","%s fichier(s) d�plac�(s) avec succ�s, %s fichier(s) n'ont pas pu �tre d�plac�s.");
define("_ZOOM_OPTIMIZE","Optimiser les tables");
define("_ZOOM_OPTIMIZE_DESCR","zOOm Media Gallery utilise beaucoup de tables et cr�e ainsi des donn�es temporaires. Cliquer ici pour les supprimer.");
define("_ZOOM_OPTIMIZE_SUCCESS","Tables zOOm Media Gallery optimis�es !");
define("_ZOOM_UPDATE","Mise � jour zOOm Media Gallery");
define("_ZOOM_UPDATE_DESCR","ajoutez des nouveaut�s, solutionnez les probl�mes et r�solvez les bogues ! Allez sur <a href=\"http://www.zoomfactory.org\" target=\"_blank\">www.zoomfactory.org</a> pour conna�tre la derni�re version.");
define("_ZOOM_UPDATE_XMLDATE","Date de la derni�re mise � jour");
define("_ZOOM_UPDATE_NOUPDATES","Pas de mise � jour actuellement !");
define("_ZOOM_UPDATE_PACKAGE","Mise � jour fichier ZIP : ");
define("_ZOOM_CREDITS","A propos de zOOm Media Gallery & Credits");

//Image actions
define("_ZOOM_DISKSPACEUSAGE","Espace disque actuellement utilis�");
define("_ZOOM_UPLOAD_SINGLE","fichier unique (ZIP)");
define("_ZOOM_UPLOAD_MULTIPLE","fichiers multiples");
define("_ZOOM_UPLOAD_DRAGNDROP","Glisser-d�poser");
define("_ZOOM_UPLOAD_SCANDIR","analyser dossier");
define("_ZOOM_UPLOAD_INTRO","Cliquez sur <b>Browse</b> pour rechercher une image � envoyer.");
define("_ZOOM_UPLOAD_STEP1","1. Selectionner le nombre de fichiers que vous voulez envoyer : ");
define("_ZOOM_UPLOAD_STEP2","2. Selectionner la galerie o� vous voulez que les fichiers soient charg�s : ");
define("_ZOOM_UPLOAD_STEP3","3. Utilisez 'Browse' pour rechercher des photos sur votre ordinateur");
define("_ZOOM_SCAN_STEP1","Etape 1 : indiquez l'emplacement � examiner pour les images...");
define("_ZOOM_SCAN_STEP2","Etape 2 : s�lectionnez les fichiers � charger...");
define("_ZOOM_SCAN_STEP3","Etape 3 : zOOm traite les fichiers choisis...");
define("_ZOOM_SCAN_STEP1_DESCR","L'emplacement peut �tre soit une URL soit un r�pertoire sur le serveur.<br />&nbsp;   Info: Les images FTP indiquent alors le chemin vers votre r�pertoire sur le serveur, ici !");
define("_ZOOM_SCAN_STEP2_DESCR1","En cours...");
define("_ZOOM_SCAN_STEP2_DESCR2","comme un r�pertoire local");
define("_ZOOM_FORMCREATE_NAME","Nom");
define("_ZOOM_FORM_IMAGEFILE","Image");
define("_ZOOM_FORM_IMAGEFILTER","Type images support�");
define("_ZOOM_FORM_INGALLERY","Dans la galerie");
define("_ZOOM_FORM_SETFILENAME","Nommer les images comme les fichiers.");
define("_ZOOM_FORM_IGNORESIZES","Ignorer les tailles maximales pr�d�finies des images"); //added: 12-08
define("_ZOOM_FORM_LOCATION","Emplacement");
define("_ZOOM_BUTTON_SCAN","Soumettre une URL ou un r�pertoire");
define("_ZOOM_BUTTON_UPLOAD","Envoyer");
define("_ZOOM_BUTTON_EDIT","Publier");
define("_ZOOM_BUTTON_CREATE","Cr�er");
define("_ZOOM_CONFIRM_WIPE","ATTENTION !\\n Cette fonction purgera compl�tement votre zOOm galerie et supprimera toutes les images et galeries.\\n\\n Voulez-vous vraiment continuer ?");
define("_ZOOM_CONFIRM_DEL","Cette option supprimera compl�tement la galerie, y compris les images !\\nConfirmez-vous ?");
define("_ZOOM_CONFIRM_DELMEDIUM","Vous allez compl�tement supprimer cette image!\\nConfirmez-vous ?");
define("_ZOOM_ALERT_DEL","La galerie est supprim�e !");
define("_ZOOM_ALERT_NOCAT","Aucune galerie s�lectionn�e !");
define("_ZOOM_ALERT_NOMEDIA","Aucune image s�lectionn�e !");
define("_ZOOM_ALERT_EDITOK","Les champs de galerie ont �t� �dit�s avec succ�s !");
define("_ZOOM_ALERT_NEWGALLERY","Nouvelle galerie cr��e.");
define("_ZOOM_ALERT_NONEWGALLERY","Galerie non cr��e !");
define("_ZOOM_ALERT_EDITIMG","Les propri�t�s de l'image ont �t� �dit�es avec succ�s.");
define("_ZOOM_ALERT_DELPIC","Groupe d'images supprim� !.");
define("_ZOOM_ALERT_NODELPIC","L'image ne peut �tre effa��e !");
define("_ZOOM_ALERT_NOPICSELECTED","Aucune image s�lectionn�e.");
define("_ZOOM_ALERT_NOPICSELECTED_MULT","Aucun groupe d'images s�lectionn�.");
define("_ZOOM_ALERT_UPLOADOK","Image correctement charg�e !");
define("_ZOOM_ALERT_UPLOADSOK","Groupe d'images correctement charg� !");
define("_ZOOM_ALERT_WRONGFORMAT","Format d'image erron� !");
define("_ZOOM_ALERT_WRONGFORMAT_MULT","Format erron� !");
define("_ZOOM_ALERT_IMGERROR","Erreur de redimensionnement d'image ou de cr�ation de miniature.");
define("_ZOOM_ALERT_PCLZIPERROR","Erreur pendant l'extraction d'une archive.");
define("_ZOOM_ALERT_INDEXERROR","Erreur pendant l'indexation du document.");
define("_ZOOM_ALERT_WATERMARKERROR","Erreur en appliquant le filigrane.");
define("_ZOOM_ALERT_IMGFOUND","image(s) trouv�e(s).");
define("_ZOOM_INFO_CHECKCAT","Veuillez s�lectionner une galerie avant de cliquer sur 'Upload' !");
define("_ZOOM_BUTTON_ADDIMAGES","Ajouter des images");
define("_ZOOM_BUTTON_REMIMAGES","Supprimer des images");
define("_ZOOM_INFO_PROCESSING","Traitement du fichier :");
define("_ZOOM_ITEMEDIT_TAB1","Propri�t�s");
define("_ZOOM_ITEMEDIT_TAB2","Membres");
define("_ZOOM_ITEMEDIT_TAB3","Actions");
define("_ZOOM_USERSLIST_LINE1",">>Choisir les membres de cet article<<");
define("_ZOOM_USERSLIST_ALLOWALL",">>Acc�s public<<");
define("_ZOOM_USERSLIST_MEMBERSONLY",">>Membres seulement<<");
define("_ZOOM_PUBLISHED","Publi�");
define("_ZOOM_SHARED","Partager cette galerie");
define("_ZOOM_ROTATE","Rotation 90�");
define("_ZOOM_CLOCKWISE","dans le sens des aiguilles d'une montre");
define("_ZOOM_CCLOCKWISE","dans le sens inverse des aiguilles d'une montre");
define("_ZOOM_FLIP_HORIZ","Retournement horizontal");
define("_ZOOM_FLIP_VERT","Retournement vertical");
define("_ZOOM_PROGRESS_DESCR","Votre requ�te est en cours de traitement... Veuillez patienter.");

//Navigation (including Slideshow buttons)
define("_ZOOM_SLIDESHOW","Diaporama :");
define("_ZOOM_PREV_IMG","Image pr�c�dente");
define("_ZOOM_NEXT_IMG","Image suivante");
define("_ZOOM_FIRST_IMG","Premi�re image");
define("_ZOOM_LAST_IMG","Derni�re image");
define("_ZOOM_PLAY","d�marrer");
define("_ZOOM_STOP","stop");
define("_ZOOM_RESET","remise � z�ro");
define("_ZOOM_FIRST","Premier");
define("_ZOOM_LAST","Dernier");
define("_ZOOM_PREVIOUS","Pr�c�dent");
define("_ZOOM_NEXT","Suivant");
define("_ZOOM_IN_DESC", "Survolez l'image avec votre souris et appuyez sur les fl�ches HAUT ou BAS pour augmenter ou diminuer le grossissement.");

//Gallery actions
define("_ZOOM_SEARCH_BOX","Recherche rapide...");
define("_ZOOM_ADVANCED_SEARCH","Recherche avan��e");
define("_ZOOM_SEARCH_KEYWORD","Recherche par mots-cl�s");
define("_ZOOM_IMAGES","images");
define("_ZOOM_IMGFOUND","%s fichier(s) trouv�(s) - Vous �tes sur la page %s sur %s");
define("_ZOOM_SUBGALLERIES","sous-galeries");
define("_ZOOM_ALERT_COMMENTOK","Votre commentaire a bien �t� ajout�");
define("_ZOOM_ALERT_COMMENTERROR","Vous avez d�j� comment� cette image !");
define("_ZOOM_ALERT_VOTE_OK","Votre vote a �t� pris en compte. Merci");
define("_ZOOM_ALERT_VOTE_ERROR","Vous avez d�j� vot� pour cette image !");
define("_ZOOM_WINDOW_CLOSE","Fermer");
define("_ZOOM_NOPICS","Pas d'images dans la galerie");
define("_ZOOM_PROPERTIES","Propri�t�s");
define("_ZOOM_COMMENTS","Commentaires");
define("_ZOOM_NO_COMMENTS","Pas de commentaires pour l'instant !");
define("_ZOOM_YOUR_NAME","Nom");
define("_ZOOM_ADD","Ajouter");
define("_ZOOM_NAME","Nom");
define("_ZOOM_DATE","Date ajout�e");
define("_ZOOM_UNAME","Ajout� par");
define("_ZOOM_DESCRIPTION","Description");
define("_ZOOM_IMGNAME","Nom");
define("_ZOOM_FILENAME","Nom du fichier");
define("_ZOOM_CLICKDOCUMENT","(cliquer le nom du fichier pour ouvrir le document)");
define("_ZOOM_KEYWORDS","Mots-cl�s");
define("_ZOOM_HITS","clics");
define("_ZOOM_CLOSE","Fermer");
define("_ZOOM_NOIMG", "Aucune image trouv�e !");
define("_ZOOM_NONAME", "Vous devez indiquer un nom !");
define("_ZOOM_NOCAT", "Pas de cat�gorie s�lectionn�e !");
define("_ZOOM_EDITPIC", "Publier une image");
define("_ZOOM_SETCATIMG","Placer comme image d'une galerie");
define("_ZOOM_SETPARENTIMG","Placer comme image de galerie d'une galerie PARENTE");
define("_ZOOM_PASS","Mot de passe");
define("_ZOOM_PASS_REQUIRED","Cette galerie requiert un mot de passe.<br />Veuillez saisir un mot de passe<br />et cliquer sur 'Go'. Merci.");
define("_ZOOM_PASS_BUTTON","Go");
define("_ZOOM_PASS_GALLERY","Mot de passe");
define("_ZOOM_PASS_INNCORRECT","Mot de passe erron�");

//Lightbox
define("_ZOOM_LIGHTBOX","S�lection"); 
define("_ZOOM_LIGHTBOX_GALLERY","Mettre cette galerie dans ma s�lection !");
define("_ZOOM_LIGHTBOX_ITEM","Mettre cet article dans ma s�lection !");
define("_ZOOM_LIGHTBOX_VIEW","Voir ma s�lection");
define("_ZOOM_YOUR_LIGHTBOX","Votre s�lection contient :");
define("_ZOOM_LIGHTBOX_EMPTY","Votre s�lection est actuellement vide.");
define("_ZOOM_LIGHTBOX_ZIPBTN","Cr�er un fichier ZIP");
define("_ZOOM_LIGHTBOX_PLAYLISTBTN","Cr�er une liste � jouer & jouer");
define("_ZOOM_LIGHTBOX_CATS","Galeries");
define("_ZOOM_LIGHTBOX_TITLEDESCR","Titre & Description");
define("_ZOOM_ACTION","Action");
define("_ZOOM_LIGHTBOX_ADDED","Article ajout� � votre s�lection !");
define("_ZOOM_LIGHTBOX_NOTADDED","Erreur lors de l'ajout d'un article dans votre s�lection !");
define("_ZOOM_LIGHTBOX_EDITED","Article �dit� correctement !");
define("_ZOOM_LIGHTBOX_NOTEDITED","Erreur d'�dition de l'article !");
define("_ZOOM_LIGHTBOX_DEL","Article supprim� de votre s�lection !");
define("_ZOOM_LIGHTBOX_NOTDEL","Erreur lors de la suppression de l'article de votre s�lection !");
define("_ZOOM_LIGHTBOX_NOZIP","Vous avez d�j� cr�� le fichier ZIP de votre s�lection !");
define("_ZOOM_LIGHTBOX_PARSEZIP","Analyse d'images depuis la galerie...");
define("_ZOOM_LIGHTBOX_DOZIP","Cr�ation du fichier ZIP...");
define("_ZOOM_LIGHTBOX_DLHERE","Vous pouvez maintenant t�l�charger la s�lection");
define("_ZOOM_LIGHTBOX_PLSUCCESS","Liste musicale cr��e avec succ�s ! Vous devez rafra�chir le lecteur.");
define("_ZOOM_LIGHTBOX_PLERROR","Erreur cr�ation de la liste � jouer.");
define("_ZOOM_LIGHTBOX_NOAUDIO","Vous devez d'abord ajouter un fichier audio dans votre s�lection !");
define("_ZOOM_LIGHTBOX_NOITEMS","Votre s�lection semble vide.");

//EXIF information
define("_ZOOM_EXIF","EXIF");
define("_ZOOM_EXIF_SHOWHIDE","Montrer / cacher les m�tadonn�es");

//MP3 id3 v1.1 or later information
define("_ZOOM_AUDIO_PLAYING","Lecture en cours:");
define("_ZOOM_AUDIO_CLICKTOPLAY","Cliquer ici pour lire le fichier.");
define("_ZOOM_ID3","ID3");
define("_ZOOM_ID3_SHOWHIDE","Montrer / cacher les donn�es ID3");
define("_ZOOM_ID3_LENGTH","Longueur");
define("_ZOOM_ID3_QUALITY","Qualit�");
define("_ZOOM_ID3_TITLE","Titre");
define("_ZOOM_ID3_ARTIST","Artiste");
define("_ZOOM_ID3_ALBUM","Album");
define("_ZOOM_ID3_YEAR","Ann�e");
define("_ZOOM_ID3_COMMENT","Commentaire");
define("_ZOOM_ID3_GENRE","Genre");

//Video metadata information
define("_ZOOM_VIDEO_SHOWHIDE","Montrer / cacher les donn�es vid�o");
define("_ZOOM_VIDEO_PIXELRATIO","Pixel ratio");
define("_ZOOM_VIDEO_QUALITY","Qualit� vid�o");
define("_ZOOM_VIDEO_AUDIOQUALITY","Qualit� audio");
define("_ZOOM_VIDEO_CODEC","Codec");
define("_ZOOM_VIDEO_RESOLUTION","R�solution");

//rating
define("_ZOOM_RATING","Classement");
define("_ZOOM_NOTRATED","Pas encore class� !");
define("_ZOOM_VOTE","vote");
define("_ZOOM_VOTES","votes");
define("_ZOOM_RATE0","� jeter");
define("_ZOOM_RATE1","bof");
define("_ZOOM_RATE2","moyen");
define("_ZOOM_RATE3","bien");
define("_ZOOM_RATE4","tr�s bien");
define("_ZOOM_RATE5","excellent");

//special
define("_ZOOM_TOPTEN","Top 10");
define("_ZOOM_LASTSUBM","Derni�re propos�e");
define("_ZOOM_LASTCOMM","Dernier commentaire");
define("_ZOOM_SEARCHRESULTS","R�sultats de recherche");
define("_ZOOM_TOPRATED","Top Classement");

//ecard
define("_ZOOM_ECARD_SENDAS","Envoyer cette e-carte � un ami !");
define("_ZOOM_ECARD_YOURNAME","Votre nom");
define("_ZOOM_ECARD_YOUREMAIL","Votre e-mail");
define("_ZOOM_ECARD_FRIENDSNAME","Le nom de votre ami");
define("_ZOOM_ECARD_FRIENDSEMAIL","L'e-mail de votre ami");
define("_ZOOM_ECARD_MESSAGE","Message");
define("_ZOOM_ECARD_SENDCARD","Envoyer l'e-carte");
define("_ZOOM_ECARD_SUCCESS","Votre carte a bien �t� envoy�e.");
define("_ZOOM_ECARD_CLICKHERE","La visualiser ici!");
define("_ZOOM_ECARD_ERROR","Echec de l'envoi de votre e-carte �");
define("_ZOOM_ECARD_TURN","Regardez au dos de la carte !");
define("_ZOOM_ECARD_TURN2","Regardez le recto de cette carte !");
define("_ZOOM_ECARD_SENDER","Envoy�e par :");
define("_ZOOM_ECARD_SUBJ","Vous avez re�u une e-carte de :");
define("_ZOOM_ECARD_MSG1","e-carte exp�di�e depuis");
define("_ZOOM_ECARD_MSG2","Cliquer sur le lien ci-dessous pour voir votre carte !");
define("_ZOOM_ECARD_MSG3","Ne pas r�pondre � ce message g�n�r� automatiquement.");
define("_ZOOM_ECARD_ECARDEXPIRED","D�sol�, cette e-carte n'est plus disponible ou a expir�.");

//installation-screen
define ('_ZOOM_INSTALL_CREATE_DIR','zOOm Installation essaie de cr�er un r�pertoire images "images/zoom" ...');
define ('_ZOOM_INSTALL_CREATE_DIR_WM','zOOm Installation essaie de cr�er le r�pertoire "images/zoom/watermarks" ...');
define ('_ZOOM_INSTALL_CREATE_DIR_SUCC','fait !');
define ('_ZOOM_INSTALL_CREATE_DIR_FAIL','�chec !');
define ('_ZOOM_INSTALL_CREATE_DBASE_SUCC','Base de donn�es cr��e avec succ�s !');
define ('_ZOOM_INSTALL_UPGRADED_DBASE_SUCC','Base de donn�es mise � jour avec succ�s !');
define ('_ZOOM_INSTALL_MESS1','zOOm Image Gallery install� avec succ�s.<br>Vous pouvez maintenant publier vos albums !');
define ('_ZOOM_INSTALL_MESS2','NOTE : la premi�re chose que vous devriez faire maintenant est d\'aller dans le menu composant ci-dessus,<br>rep�rer l\'acc�s � "zOOm Media Gallery Admin", le cliquer et<br>v�rifier les param�tres de la page dans l\'espace Administrateur.');
define ('_ZOOM_INSTALL_MESS3','Ici vous pouvez modifier toutes les variables pour adapter zOOm � votre configuration.');
define ('_ZOOM_INSTALL_MESS4','N\'oubliez pas de cr�er une galerie et vous aurez fait le plus dur !');
define ('_ZOOM_INSTALL_MESS_FAIL1','zOOM Gallery n\'a pu �tre install� correctement !');
define ('_ZOOM_INSTALL_MESS_FAIL2','Les r�pertoires suivants doivent �tre cr��s et ensuite les droits pass�s � "0777":<br />'
. '"images/zoom"<br />'
. '/components/com_zoom/images"<br />'
. '"/components/com_zoom/admin"<br />'
. '"/components/com_zoom/classes"<br />'
. '"/components/com_zoom/images"<br />'
. '"/components/com_zoom/images/admin"<br />'
. '"/components/com_zoom/images/filetypes"<br />'
. '"/components/com_zoom/images/rating"<br />'
. '"/components/com_zoom/images/smilies"<br />'
. '"/components/com_zoom/language"<br />'
. '"/components/com_zoom/tabs"');
define ('_ZOOM_INSTALL_MESS_FAIL3','Une fois que vous avez cr�� ces r�pertoires et chang� les droits, aller � <br /> "Components -> zOOm Media Gallery" et choisissez vos param�tres.');
?>