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
define("_ZOOM_TITLE","Fotogalerij");
define("_ZOOM_PICK","Kies een galerij");
define("_ZOOM_DELETE","Verwijder");
define("_ZOOM_BACK","Hoofdscherm");

//Gallery admin page
if ($zoom->_isAdmin || $zoom->_isUser){
define("_ZOOM_ADMINSYSTEM","Admin Systeem");
define("_ZOOM_USERSYSTEM","Gebruiker Systeem");
define("_ZOOM_ADMIN_TITLE","Fotogalerij Administratie Systeem");
define("_ZOOM_USER_TITLE","Fotogalerij Gebruiker Systeem");
define("_ZOOM_NEW","Nieuwe galerij");
define("_ZOOM_NEW_DESCR","maak een nieuw album aan voor uw afbeeldingen.");
define("_ZOOM_DEL","Verwijder galerij");
define("_ZOOM_DEL_DESCR","deze optie verwijderd een galerij, inclusief uw afbeeldingen!");
define("_ZOOM_UPLOAD","Bestand(en) uploaden");
define("_ZOOM_UPLOAD_DESCR","scan voor nieuwe afbeeldingen en verwijder afbeeldingen die niet meer bestaan of upload zelf uw afbeeldingen.");
define("_ZOOM_EDIT","Bewerk galerij");
define("_ZOOM_EDIT_DESCR","u kunt hier de naam en omschrijving van een galerij wijzigen.");
define("_ZOOM_ADMIN_CREATE","Database aanmaken");
define("_ZOOM_ADMIN_CREATE_DESCR","maak de benodigde tabellen aan, zodat u kunt beginnen de Galerij te gebruiken.");
define("_ZOOM_HD_CHECK","Check");
define("_ZOOM_HD_CHECKALL","Markeer/Demarkeer Alle");
define("_ZOOM_HD_AFTER","Toevoegen na");
define("_ZOOM_HD_NAME","Naam galerij");
define("_ZOOM_HD_NEW","Nieuwe galerij aanmaken");
define("_ZOOM_TOPLEVEL","Hoogste niveau");
define("_ZOOM_HD_UPLOAD","Bestand uploaden");
define("_ZOOM_BACKTOGALLERY","Terug naar galerij");
define("_ZOOM_SETTINGS","Instellingen");
define("_ZOOM_SETTINGS_DESCR","u kunt hier alle configuratie-instellingen bekijken en wijzigen.");
define("_ZOOM_SETTINGS_CONVTYPE","Conversietype");
define("_ZOOM_SETTINGS_AUTODET","auto-gedetecteerd: ");
define("_ZOOM_SETTINGS_IMGPATH","Locatie van afbeeldingen:");
define("_ZOOM_SETTINGS_CONVSETTINGS","Afbeelding conversie instellingen:");
define("_ZOOM_SETTINGS_IMPATH","Locatie van ImageMagick: ");
define("_ZOOM_SETTINGS_NETPBMPATH"," of NetPBM: ");
define("_ZOOM_SETTINGS_THUMBSETTINGS","Thumbnail instellingen:");
define("_ZOOM_SETTINGS_QUALITY","NetPBM en GD2 JPEG kwaliteit: ");
define("_ZOOM_SETTINGS_SIZE","Thumbnail max. breedte: ");
define("_ZOOM_SETTINGS_TEMPNAME","Tijdelijke Naam: ");
define("_ZOOM_SETTINGS_AUTONUMBER","auto-nummer afbeeldingsnamen (bijv. 1,2,3)");
define("_ZOOM_SETTINGS_TEMPDESCR","Tijdelijke omschrijving: ");
define("_ZOOM_SETTINGS_LAYSETTINGS","Layout instellingen:");
define("_ZOOM_SETTINGS_SUBCATSPG","Aantal sub-galerij kolommen");
define("_ZOOM_SETTINGS_COLUMNS","Aantal thumbnail kolommen");
define("_ZOOM_SETTINGS_THUMBSPG","Thumbs per pagina");
define("_ZOOM_SETTINGS_COMMENTS","Commentaar");
define("_ZOOM_SETTINGS_POPUP","PopUp Afbeeldingen");
define("_ZOOM_SETTINGS_CATIMG","Galerij afbeelding");
define("_ZOOM_SETTINGS_SLIDESHOW","Slideshow");
define("_ZOOM_SETTINGS_ZOOMLOGO","zOOm-logo weergeven");
define("_ZOOM_SETTINGS_SHOWHITS","Aantal hits weergeven");
define("_ZOOM_SETTINGS_READEXIF","Lees EXIF-data");
define("_ZOOM_SETTINGS_RATING","Stemmen");
define("_ZOOM_SETTINGS_CSS","Stylesheet pop-up venster");
define("_ZOOM_SETTINGS_ACCESS","Toegankelijkheids instellingen:");
define("_ZOOM_SETTINGS_USERUPL","Gebruiker uploads toestaan");
define("_ZOOM_SETTINGS_SUCCESS","Configuratie succesvol opgeslagen!");
define("_ZOOM_SETTINGS_ZOOMING","Zoom afbeelding");
define("_ZOOM_SETTINGS_ORDERBY","Thumbnail sorteer methode; sorteren op");
define("_ZOOM_SETTINGS_DATE_ASC","DATUM, oplopend");
define("_ZOOM_SETTINGS_DATE_DESC","DATUM, aflopend");
define("_ZOOM_SETTINGS_FLNM_ASC","BESTANDSNAAM, oplopend");
define("_ZOOM_SETTINGS_FLNM_DESC","BESTANDSNAAM, aflopend");
define("_ZOOM_SETTINGS_NAME_ASC","NAAM, oplopend");
define("_ZOOM_SETTINGS_NAME_DESC","NAAM, aflopend");
define("_ZOOM_SETTINGS_LIGHTBOX","Lightbox");
define("_ZOOM_YES","ja");
define("_ZOOM_NO","nee");
define("_ZOOM_SAVE","Opslaan");
define("_ZOOM_OPTIMIZE","Optimaliseer tabellen");
define("_ZOOM_OPTIMIZE_DESCR","zOOm Image Gallery gebruikt haar tabellen regelmatig en laat overhead data, oftewel 'afval data', achter. Klik hier om dit afval te verwijderen.");

//Image actions
define("_ZOOM_UPLOAD_SINGLE","enkel (ZIP-)bestand");
define("_ZOOM_UPLOAD_MULTIPLE","meerdere bestanden");
define("_ZOOM_UPLOAD_SCANDIR","scan directory");
define("_ZOOM_UPLOAD_INTRO","Klik op de knop <b>Bladeren</b> om een afbeelding te selecteren.");
define("_ZOOM_UPLOAD_STEP1","1. Selecteer het aantal bestanden dat u wilt uploaden: ");
define("_ZOOM_UPLOAD_STEP2","2. Selecteer de galerij voor uw afbeeldingen: ");
define("_ZOOM_UPLOAD_STEP3","3. Gebruik de knop Bladeren om afbeeldingen te vinden op uw computer.");
define("_ZOOM_SCAN_STEP1","Stap 1: geef een lokatie om te scannen naar afbeeldingen...");
define("_ZOOM_SCAN_STEP2","Stap 2: selecteer de afbeeldingen die u wilt uploaden...");
define("_ZOOM_SCAN_STEP3","Stap 3: zOOm verwerkt de opgegeven afbeeldingen...");
define("_ZOOM_SCAN_STEP1_DESCR","De lokatie mag zowel een URL als een directory zijn op de server.<br>&nbsp;   Tip: FTP afbeeldingen naar een directory op uw server en vul hier de lokatie in!");
define("_ZOOM_SCAN_STEP2_DESCR1","zOOm verwerkt");
define("_ZOOM_SCAN_STEP2_DESCR2","als een lokale directory");
define("_ZOOM_FORMCREATE_SHOWPIC","Afbeelding weergeven op album-pagina");
define("_ZOOM_FORM_IMAGEFILE","Afbeelding");
define("_ZOOM_FORM_INGALLERY","In galerij");
define("_ZOOM_FORM_SETFILENAME","Sla afbeeldingen op met de oorspronkelijke bestandsnaam als naam.");
define("_ZOOM_FORM_LOCATION","Locatie");
define("_ZOOM_BUTTON_UPLOAD","Uploaden");
define("_ZOOM_BUTTON_EDIT","Wijzig");
define("_ZOOM_BUTTON_CREATE","Aanmaken");
define("_ZOOM_ALERT_DEL","De galerij is verwijderd!");
define("_ZOOM_ALERT_EDITOK","De gegevens van de galerij zijn gewijzigd!");
define("_ZOOM_ALERT_NEWGALLERY","Nieuwe galerij aangemaakt.");
define("_ZOOM_ALERT_NONEWGALLERY","Aanmaken mislukt!");
define("_ZOOM_ALERT_EDITIMG","Eigenschappen van de afbeelding succesvol opgeslagen!");
define("_ZOOM_ALERT_DELPIC","De afbeelding is verwijderd!");
define("_ZOOM_ALERT_NODELPIC","De afbeelding kon niet worden verwijderd!");
define("_ZOOM_ALERT_NOPICSELECTED","Geen afbeelding geselecteerd.");
define("_ZOOM_ALERT_NOPICSELECTED_MULT","Geen afbeelding geselecteerd.");
define("_ZOOM_ALERT_UPLOADOK","Afbeelding succesvol geupload!");
define("_ZOOM_ALERT_UPLOADSOK","afbeeldingen succesvol geupload!");
define("_ZOOM_ALERT_WRONGFORMAT","Verkeerde bestandsformaat.");
define("_ZOOM_ALERT_WRONGFORMAT_MULT","Verkeerde bestandsformaat.");
define("_ZOOM_ALERT_MOVEFAILURE","Fout bij verplaatsen van bestand.");
define("_ZOOM_ALERT_IMGFOUND","afbeelding(en) gevonden.");
define("_ZOOM_INFO_CHECKCAT","Kies a.u.b. eerst een galerij, voor u begint met uploaden!");
define("_ZOOM_BUTTON_ADDIMAGES","Afbeeldingen toevoegen");
define("_ZOOM_BUTTON_REMIMAGES","Afb. verwijderen");
define("_ZOOM_INFO_PROCESSING","Afbeelding verwerken:");
define("_ZOOM_INFO_DONE","klaar!");
}

//Navigation (including Slideshow buttons and reset-link)
define("_ZOOM_SLIDESHOW","Slideshow:");
define("_ZOOM_PREV_IMG","vorige afbeelding");
define("_ZOOM_NEXT_IMG","volgende afbeelding");
define("_ZOOM_FIRST_IMG","eerste afbeelding");
define("_ZOOM_LAST_IMG","laatste afbeelding");
define("_ZOOM_PLAY","afspelen");
define("_ZOOM_STOP","stop");
define("_ZOOM_RESET","herstel");
define("_ZOOM_FIRST","Eerste");
define("_ZOOM_LAST","Laatste");
define("_ZOOM_PREVIOUS","Vorige");
define("_ZOOM_NEXT","Volgende");

//Gallery actions
define("_ZOOM_IMAGES","afbeelding(en)");
define("_ZOOM_IMGFOUND","gevonden - u bent op pagina");
define("_ZOOM_IMGFOUND2","van");
define("_ZOOM_SUBGALLERIES","sub-galerijen");
define("_ZOOM_ALERT_COMMENTOK","Uw commentaar is nu toegevoegd!");
define("_ZOOM_ALERT_COMMENTERROR","U heeft al commentaar gegeven op deze afbeelding!");
define("_ZOOM_ALERT_VOTE_OK","Uw stem is meegeteld! Dank u.");
define("_ZOOM_ALERT_VOTE_ERROR","U heeft al gestemd voor deze afbeelding!");
define("_ZOOM_WINDOW_CLOSE","Sluiten");
define("_ZOOM_ALERT_NOCHECKBOX","Geen galerij geselecteerd.");
define("_ZOOM_NOPICS","Geen afbeeldingen in de galerij aanwezig");
define("_ZOOM_PROPERTIES","Eigenschappen");
define("_ZOOM_COMMENTS","Commentaar");
define("_ZOOM_YOUR_NAME","Naam");
define("_ZOOM_ADD","Toevoegen");
define("_ZOOM_HITS","hits");
define("_ZOOM_NAME","Naam");
define("_ZOOM_DATE","Datum");
define("_ZOOM_DESCRIPTION","Omschrijving");
define("_ZOOM_IMGNAME","Naam");
define("_ZOOM_FILENAME","Bestandsnaam");
define("_ZOOM_CLOSE","Sluiten");
define("_ZOOM_EDITPIC", "Bewerk Afbeelding");
define("_ZOOM_SETCATIMG","Instellen als galerij-afbeelding");

//rating
define("_ZOOM_RATING","Waardering");
define("_ZOOM_NOTRATED","Nog niet gewaardeerd!");
define("_ZOOM_VOTE","stem");
define("_ZOOM_VOTES","stemmen");
define("_ZOOM_RATE0","waardeloos");
define("_ZOOM_RATE1","slecht");
define("_ZOOM_RATE2","gemiddeld");
define("_ZOOM_RATE3","mooi");
define("_ZOOM_RATE4","zeer mooi");
define("_ZOOM_RATE5","perfekt!");

//special
define("_ZOOM_TOPTEN","Top Tien");
define("_ZOOM_LASTSUBM","Laatst toegevoegd");
define("_ZOOM_LASTCOMM","Laatst becommentarieerd");
define("_ZOOM_SEARCHRESULTS","Zoekresultaten");
define("_ZOOM_TOPRATED","Hoogst gewaardeerd");

//installation-screen
define("_ZOOM_INSTALL_HEAD","WELKOM BIJ ZOOM IMAGE GALLERY!");
define("_ZOOM_INSTALL_DESCR","De stap die u nu zult nemen, maakt lege tabellen voor zOOm Image Gallery aan. Als u al afbeeldingen hebt toegevoegd aan uw album, moet u niet verder gaan! ");
define("_ZOOM_INSTALL_YES","JA");
define("_ZOOM_INSTALL_YES_DESCR"," - maak alle tabellen aan voor zOOm Image Gallery..");
define("_ZOOM_INSTALL_NO","NEE BEDANKT");
define("_ZOOM_INSTALL_NO_DESCR"," - dat is niet wat ik wil en maak de tabellen handmatig aan..");
?>