<?php
//zOOm Gallery//
/** 
-----------------------------------------------------------------------
|  zOOm Image Gallery! by Mike de Boer - a multi-gallery component    |
-----------------------------------------------------------------------

-----------------------------------------------------------------------
|                                                                     |
| Date: January, 2004                                                 |
| Author: Mike de Boer, <http://www.mikedeboer.nl>                    |
| Copyright: copyright (C) 2004 by Mike de Boer                       |
| Description: zOOm Image Gallery, a multi-gallery component for      |
|              Mambo based on RSGallery by Ronald Smit. It's the most |
|              feature-rich gallery component for Mambo!              |
| Filename: lang_com_zoom.php                                         |
| Version: 2.0                                                        |
|                                                                     |
-----------------------------------------------------------------------
**/
//Language translation
DEFINE("_ZOOM_TITLE","Fotogalerij");
DEFINE("_ZOOM_PICK","Kies een galerij");
DEFINE("_ZOOM_DELETE","Verwijder");
DEFINE("_ZOOM_EDIT","Bewerk galerij");
DEFINE("_ZOOM_BACK","Hoofdscherm");

//Gallery admin page
DEFINE("_ZOOM_ADMINSYSTEM","Admin Systeem");
DEFINE("_ZOOM_USERSYSTEM","Gebruiker Systeem");
DEFINE("_ZOOM_ADMIN_TITLE","Fotogalerij Administratie Systeem");
DEFINE("_ZOOM_USER_TITLE","Fotogalerij Gebruiker Systeem");
DEFINE("_ZOOM_NEW","Nieuwe galerij");
DEFINE("_ZOOM_NEW_DESCR","maak een nieuw album aan voor uw foto's.");
DEFINE("_ZOOM_DEL","Verwijder galerij");
DEFINE("_ZOOM_DEL_DESCR","deze optie verwijderd een galerij, inclusief uw foto's!");
DEFINE("_ZOOM_UPLOAD","Bestand(en) uploaden");
DEFINE("_ZOOM_UPLOAD_DESCR","scan voor nieuwe afbeeldingen en verwijder afbeeldingen die niet meer bestaan of upload zelf uw foto's.");
DEFINE("_ZOOM_EDIT","Galerij-naam");
DEFINE("_ZOOM_EDIT_DESCR","u kunt hier de naam van een galerij wijzigen.");
DEFINE("_ZOOM_ADMIN_CREATE","Database aanmaken");
DEFINE("_ZOOM_ADMIN_CREATE_DESCR","maak de benodigde tabellen aan, zodat u kunt beginnen de Galerij te gebruiken.");
DEFINE("_ZOOM_HD_CHECK","Check");
DEFINE("_ZOOM_HD_CHECKALL","Markeer/Demarkeer Alle");
DEFINE("_ZOOM_HD_AFTER","Toevoegen na");
DEFINE("_ZOOM_HD_NAME","Naam galerij");
DEFINE("_ZOOM_HD_NEW","Nieuwe galerij aanmaken");
DEFINE("_ZOOM_TOPLEVEL","Hoogste niveau");
DEFINE("_ZOOM_HD_UPLOAD","Bestand uploaden");
DEFINE("_ZOOM_BACKTOGALLERY","Terug naar galerij");
DEFINE("_ZOOM_SETTINGS","Instellingen");
DEFINE("_ZOOM_SETTINGS_DESCR","u kunt hier alle configuratie-instellingen bekijken en wijzigen.");
DEFINE("_ZOOM_SETTINGS_CONVTYPE","Conversietype");
DEFINE("_ZOOM_SETTINGS_IMGPATH","Locatie van afbeeldingen:");
DEFINE("_ZOOM_SETTINGS_CONVSETTINGS","Afbeelding cenversie instellingen:");
DEFINE("_ZOOM_SETTINGS_IMPATH","Locatie van ImageMagick: ");
DEFINE("_ZOOM_SETTINGS_NETPBMPATH"," of NetPBM: ");
DEFINE("_ZOOM_SETTINGS_THUMBSETTINGS","Thumbnail instellingen:");
DEFINE("_ZOOM_SETTINGS_QUALITY","NetPBM en GD2 JPEG kwaliteit: ");
DEFINE("_ZOOM_SETTINGS_SIZE","Thumbnail max. breedte: ");
DEFINE("_ZOOM_SETTINGS_TEMPDESCR","Tijdelijke omschrijving: ");
DEFINE("_ZOOM_SETTINGS_LAYSETTINGS","Layout instellingen:");
DEFINE("_ZOOM_SETTINGS_COLUMNS","Aantal kolommen");
DEFINE("_ZOOM_SETTINGS_THUMBSPG","Thumbs per pagina");
DEFINE("_ZOOM_SETTINGS_COMMENTS","Commentaar");
DEFINE("_ZOOM_SETTINGS_POPUP","PopUp Afbeeldingen");
DEFINE("_ZOOM_SETTINGS_CATIMG","Galerij afbeelding");
DEFINE("_ZOOM_SETTINGS_SLIDESHOW","Slideshow");
DEFINE("_ZOOM_SETTINGS_ZOOMLOGO","zOOm-logo weergeven");
DEFINE("_ZOOM_SETTINGS_READEXIF","Lees EXIF-data");
DEFINE("_ZOOM_SETTINGS_RATING","Stemmen");
DEFINE("_ZOOM_SETTINGS_CSS","Stylesheet pop-up venster");
DEFINE("_ZOOM_SETTINGS_ACCESS","Toegankelijkheids instellingen:");
DEFINE("_ZOOM_SETTINGS_USERUPL","Gebruiker uploads toestaan");
DEFINE("_ZOOM_SETTINGS_SUCCESS","Configuratie succesvol opgeslagen!");
DEFINE("_ZOOM_YES","ja");
DEFINE("_ZOOM_NO","nee");
DEFINE("_ZOOM_SAVE","Opslaan");

//Image actions
DEFINE("_ZOOM_UPLOAD_SINGLE","enkel (ZIP-)bestand");
DEFINE("_ZOOM_UPLOAD_MULTIPLE","meerdere bestanden");
DEFINE("_ZOOM_UPLOAD_INTRO","Klik op de knop <b>Bladeren</b> om een foto te selecteren.");
DEFINE("_ZOOM_UPLOAD_STEP1","1. Selecteer het aantal bestanden dat u wilt uploaden: ");
DEFINE("_ZOOM_UPLOAD_STEP2","2. Selecteer de galerij voor uw foto's: ");
DEFINE("_ZOOM_UPLOAD_STEP3","3. Gebruik de knop Bladeren om foto's te vinden op uw computer.");
DEFINE("_ZOOM_ALERT_DELPIC","De foto is verwijderd!");
DEFINE("_ZOOM_ALERT_NODELPIC","De foto kon niet worden verwijderd!");
DEFINE("_ZOOM_ALERT_NOPICSELECTED","Geen afbeelding geselecteerd.\\nU wordt teruggebracht naar de upload-pagina");
DEFINE("_ZOOM_ALERT_NOPICSELECTED_MULT","Geen afbeelding geselecteerd.");
DEFINE("_ZOOM_ALERT_UPLOADOK","Afbeelding succesvol geupload!");
DEFINE("_ZOOM_ALERT_UPLOADSOK","afbeeldingen succesvol geupload!");
DEFINE("_ZOOM_ALERT_WRONGFORMAT","Verkeerde bestandsformaat.\\nU wordt teruggebracht naar het uploadscherm");
DEFINE("_ZOOM_ALERT_WRONGFORMAT_MULT","Verkeerde bestandsformaat.");
DEFINE("_ZOOM_ALERT_MOVEFAILURE","Fout bij verplaatsen van bestand.");
DEFINE("_ZOOM_INFO_CHECKCAT","Kies a.u.b. eerst een galerij, voor u begint met uploaden!");
DEFINE("_ZOOM_BUTTON_ADDIMAGES","Afbeeldingen toevoegen");
DEFINE("_ZOOM_BUTTON_REMIMAGES","Afb. verwijderen");
DEFINE("_ZOOM_INFO_PROCESSING","Afbeelding verwerken:");
DEFINE("_ZOOM_INFO_DONE","klaar!");

//Navigation (including Slideshow buttons and reset-link)
DEFINE("_ZOOM_SLIDESHOW","Slideshow:");
DEFINE("_ZOOM_PREVPIC","vorige afbeelding");
DEFINE("_ZOOM_NEXTPIC","volgende afbeelding");
DEFINE("_ZOOM_PLAY","afspelen");
DEFINE("_ZOOM_STOP","stop");
DEFINE("_ZOOM_RESET","herstel");
DEFINE("_ZOOM_FIRST","Eerste");
DEFINE("_ZOOM_LAST","Laatste");
DEFINE("_ZOOM_PREVIOUS","Vorige");
DEFINE("_ZOOM_NEXT","Volgende");

//Gallery actions
DEFINE("_ZOOM_IMGFOUND","afbeelding(en) gevonden - u bent op pagina");
DEFINE("_ZOOM_IMGFOUND2","van");
DEFINE("_ZOOM_ALERT_COMMENTOK","Uw commentaar is nu toegevoegd!");
DEFINE("_ZOOM_ALERT_COMMENTERROR","U heeft al commentaar gegeven op deze afbeelding!");
DEFINE("_ZOOM_ALERT_VOTE_OK","Uw stem is meegeteld! Dank u.");
DEFINE("_ZOOM_ALERT_VOTE_ERROR","U heeft al gestemd voor deze afbeelding!");
DEFINE("_ZOOM_ALERT_DEL","De galerij is verwijderd!");
DEFINE("_ZOOM_ALERT_EDITOK","De gegevens van de galerij zijn gewijzigd!");
DEFINE("_ZOOM_ALERT_NEWGALLERY","Nieuwe galerij aangemaakt.\\nU wordt teruggebracht naar het invoerscherm");
DEFINE("_ZOOM_ALERT_NONEWGALLERY","Aanmaken mislukt!.\\n U wordt teruggebracht naar het invoerscherm");
DEFINE("_ZOOM_ALERT_EDITIMG","Eigenschappen van de afbeelding succesvol opgeslagen!");
DEFINE("_ZOOM_FORMCREATE_SHOWPIC","Afbeelding weergeven op album-pagina");
DEFINE("_ZOOM_BUTTON_CREATE","Aanmaken");
DEFINE("_ZOOM_FORM_IMAGEFILE","Afbeelding");
DEFINE("_ZOOM_FORM_INGALLERY","In galerij");
DEFINE("_ZOOM_BUTTON_UPLOAD","Uploaden");
DEFINE("_ZOOM_BUTTON_EDIT","Wijzig");
DEFINE("_ZOOM_WINDOW_CLOSE","Sluiten");
DEFINE("_ZOOM_ALERT_NOCHECKBOX","Geen galerij geselecteerd.\\nU wordt teruggebracht naar het verwijderscherm!");
DEFINE("_ZOOM_NOPICS","Geen afbeeldingen in de galerij aanwezig");
DEFINE("_ZOOM_PROPERTIES","Eigenschappen");
DEFINE("_ZOOM_COMMENTS","Commentaar");
DEFINE("_ZOOM_YOUR_NAME","Naam");
DEFINE("_ZOOM_ADD","Toevoegen");
DEFINE("_ZOOM_HITS","hits");
DEFINE("_ZOOM_DESCRIPTION","Omschrijving");
DEFINE("_ZOOM_PICNAME","Naam");
DEFINE("_ZOOM_CLOSE","Sluiten");
DEFINE("_ZOOM_EDITPIC", "Bewerk Afbeelding");
DEFINE("_ZOOM_SETCATIMG","Instellen als galerij-afbeelding");

//rating
DEFINE("_ZOOM_RATING","Waardering");
DEFINE("_ZOOM_NOTRATED","Nog niet gewaardeerd!");
DEFINE("_ZOOM_VOTE","stem");
DEFINE("_ZOOM_VOTES","stemmen");
DEFINE("_ZOOM_RATE0","waardeloos");
DEFINE("_ZOOM_RATE1","slecht");
DEFINE("_ZOOM_RATE2","gemiddeld");
DEFINE("_ZOOM_RATE3","mooi");
DEFINE("_ZOOM_RATE4","zeer mooi");
DEFINE("_ZOOM_RATE5","perfekt!");

//special
DEFINE("_ZOOM_TOPTEN","Top Tien");
DEFINE("_ZOOM_LASTSUBM","Laatst toegevoegd");
DEFINE("_ZOOM_LASTCOMM","Laatst becommentarieerd");
DEFINE("_ZOOM_SEARCHRESULTS","Zoekresultaten");
DEFINE("_ZOOM_TOPRATED","Hoogst gewaardeerd");

//installation-screen
DEFINE("_ZOOM_INSTALL_HEAD","WELKOM BIJ ZOOM IMAGE GALLERY!");
DEFINE("_ZOOM_INSTALL_DESCR","De stap die u nu zult nemen, maakt lege tabellen voor zOOm Image Gallery aan. Als u al afbeeldingen hebt toegevoegd aan uw album, moet u niet verder gaan! ");
DEFINE("_ZOOM_INSTALL_YES","JA");
DEFINE("_ZOOM_INSTALL_YES_DESCR"," - maak alle tabellen aan voor zOOm Image Gallery..");
DEFINE("_ZOOM_INSTALL_NO","NEE BEDANKT");
DEFINE("_ZOOM_INSTALL_NO_DESCR"," - dat is niet wat ik wil en maak de tabellen handmatig aan..");
?>