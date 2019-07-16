<?php
//zOOm Media Gallery//
/** 
-----------------------------------------------------------------------
|  zOOm Media Gallery! by Mike de Boer - a multi-gallery component    |
-----------------------------------------------------------------------

-----------------------------------------------------------------------
|                                                                     |
| Author: Mike de Boer, <http://www.mikedeboer.nl>                    |

| Translated by: Andy Demirian, <http://www.armenier.se>		    |

| Copyright: copyright (C) 2004 by Mike de Boer                       |
| Description: zOOm Media Gallery, a multi-gallery component for      |
|              Joomla!. It's the most feature-rich gallery component  |
|              for Joomla!! For documentation and a detailed list     |
|              of features, check the zOOm homepage:                  |
|              http://www.zoomfactory.org                             |
| License: GPL                                                        |
| Version: 2.5.1rc4(w8) Feb 2007                                                 |
| Filename: swedish.php                                               |
|                                                                     |
-----------------------------------------------------------------------
* @package zOOm Media Gallery
* @author Andy Demirian <frighten@home.se> 
**/
// MOS Intruder Alerts
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
//Language translation
define("_ZOOM_DATEFORMAT","%d.%m.%Y %H:%M"); // use the PHP strftime Format, more info at http://www.php.net
//define("_ZOOM_ISO","utf-8");
define("_ZOOM_PICK","V�lj ett galleri");
define("_ZOOM_DELETE","Sl�ng");
define("_ZOOM_BACK","G� tillbaka");
define("_ZOOM_MAINSCREEN","Huvudsida");
define("_ZOOM_BACKTOGALLERY","Tillbaks till galleriet");
define("_ZOOM_INFO_DONE","klar!");
define("_ZOOM_TOOLTIP", "zOOm VerktygsTips");
define("_ZOOM_WARNING", "zOOm Varning!");

//Gallery admin page
define("_ZOOM_ADMINSYSTEM","Adminsystem");
define("_ZOOM_USERSYSTEM","Anv�ndarsystem");
define("_ZOOM_ADMIN_TITLE","Mediagalleri Adminsystem");
define("_ZOOM_USER_TITLE","Mediagalleri Anv�ndarsystem");
define("_ZOOM_CATSMGR","Gallerihanterare");
define("_ZOOM_CATSMGR_DESCR","skapa nya gallerier f�r nya medier; skapa, redigera och sl�ng dem h�r i Gallerihanteraren.");
define("_ZOOM_SETTINGS_DDONOF","Aktivera Drag n Drop");
define("_ZOOM_NEW","Spara nytt galleri");
define("_ZOOM_DEL","Sl�ng galleri");
define("_ZOOM_ORDERSAVE", "Spara Ordning");
define("_ZOOM_MEDIAMGR","Mediahanterare");
define("_ZOOM_MEDIAMGR_DESCR","flytta, redigera, sl�ng, scana efter media automatiskt eller ladda upp (flera) nya medier manuellt.");
define("_ZOOM_THUMB", "Minibild kodgenerator");
define("_ZOOM_THUMB_DESCR", "Skapa dina Zoom Minibildskoder enkelt");
define("_ZOOM_UPLOAD","Ladda upp fil(er)");
define("_ZOOM_EDIT","Redigera galleri");
define("_ZOOM_ADMIN_CREATE","Skapa databas");
define("_ZOOM_ADMIN_CREATE_DESCR","bygg de n�dv�ndiga databastabelerna f�r att kunna b�rja anv�nda albumet");
define("_ZOOM_HD_PREVIEW","F�rhandsgranska");
define("_ZOOM_HD_CHECKALL","Markera/Avmarkera Alla");
define("_ZOOM_HD_CREATEDBY","Skapad av");
define("_ZOOM_HD_AFTER","Huvudkategori");
define("_ZOOM_HD_HIDEMSG","D�lj 'ingen media' text");
define("_ZOOM_HD_NAME","Titel");
define("_ZOOM_HD_DIR","Mapp");
define("_ZOOM_HD_NEW","Nytt galleri");
define("_ZOOM_HD_SHARE","Dela ut detta galleri");
define("_ZOOM_SHARE","Dela ut");
define("_ZOOM_UNSHARE","G�r outdelat");
define("_ZOOM_PUBLISH","Publicera");
define("_ZOOM_UNPUBLISH","G�r Opublicerat");
define("_ZOOM_TOPLEVEL","Toppniv�");
define("_ZOOM_HD_UPLOAD","Ladda upp fil");
define("_ZOOM_A_ERROR_ERRORTYPE","Feltyp");
define("_ZOOM_A_ERROR_IMAGENAME","Bildnamn");
define("_ZOOM_A_ERROR_NOFFMPEG","<u>FFmpeg</u> inte hittad");
define("_ZOOM_A_ERROR_NOPDFTOTEXT","<u>PDFtoText</u> inte hittad");
define("_ZOOM_A_ERROR_NOTINSTALLED","Inte installerad");
define("_ZOOM_A_ERROR_CONFTODB","Fel vid f�rs�k att spara configuration till databas!");
define("_ZOOM_A_MESS_NOT_SHURE","* Om du inte �r s�ker, anv�nd standard \"auto\" ");
define("_ZOOM_A_MESS_SAFEMODE1","Note: \"Safe Mode\" �r aktiverad, det �r d�rf�r m�jligt att uppladdning av st�rre filer inte fungerar!<br />Du b�r g� till Adminsystemet och v�xla till FTP-Mode.");
define("_ZOOM_A_MESS_SAFEMODE2","Obs: \"Safe Mode\" �r aktiverat, det �r d�rf�r m�jligt att uppladdning av st�rre filer inte fungerar!<br />zOOm rekommenderar att aktivera FTP-Mode i Adminsystemet.");
define("_ZOOM_A_MESS_PROCESSING_FILE","Processing file...");
define("_ZOOM_A_MESS_NOTOPEN_URL","Could not open url:");
define("_ZOOM_A_MESS_PARSE_URL","Parsing \"%s\" for images... "); // %s = $url
define("_ZOOM_A_MESS_NOJAVA","Om du ovan endast ser en gr� box eller har problem vid uppladdning, kan det bero p�<br />att du inte har det senaste java run-time installerat. G� till <a href=\"http://www.java.com\" target=\"_blank\">Java.com</a> <br /> och ladda ned senaste versionen.");
define("_ZOOM_SETTINGS","Inst�llningar");
define("_ZOOM_SETTINGS_DESCR","�ndra och visa alla tillg�ngliga konfigurationsinst�llningarna h�r.");
define("_ZOOM_SETTINGS_TAB1","System");
define("_ZOOM_SETTINGS_TAB2","Media");
define("_ZOOM_SETTINGS_TAB3","Funktioner");
define("_ZOOM_SETTINGS_TAB4","Layout");
define("_ZOOM_SETTINGS_TAB5","Vattenst�mpel");
define("_ZOOM_SETTINGS_TAB6","Safe Mode");
define("_ZOOM_SETTINGS_TAB7","Tillg�nglighet");
define("_ZOOM_SETTINGS_TAB8","Nollst�ll");
define("_ZOOM_SETTINGS_ERASE","Klicka f�r att intetg�ra alla zoom gallery data och starta p� nytt. Detta nollst�ller alla inst�llningar och raderar alla bilder.");
define("_ZOOM_SETTINGS_CONVTYPE","Typ av bildkonvertering");
define("_ZOOM_SETTINGS_GALLERY_FEATURES","Funktioner f�r gallerivisning");
define("_ZOOM_SETTINGS_VIEW_FEATURES","Funktioner f�r mediavisning");

define("_ZOOM_SETTINGS_GALLERY","Gallerivisning");
define("_ZOOM_SETTINGS_VIEW","Mediavisning");

define("_ZOOM_SETTINGS_GENERAL_FEATURES","Generella Funktioner");
define("_ZOOM_SETTINGS_AUTODET","hittad automatiskt: ");
define("_ZOOM_SETTINGS_IMGPATH","S�kv�g till mediafiler:");
define("_ZOOM_SETTINGS_TTIMGPATH","Nuvarnade s�kv�g till medium �r ");
define("_ZOOM_SETTINGS_CONVSETTINGS","Inst�llningar f�r Mediakonvertering:");
define("_ZOOM_SETTINGS_IMPATH","S�kv�g till ImageMagick: ");
define("_ZOOM_SETTINGS_NETPBMPATH"," eller NetPBM: ");
define("_ZOOM_SETTINGS_FFMPEGPATH","S�kv�g till FFmpeg");
define("_ZOOM_SETTINGS_FFMPEGTOOLTIP","FFmpeg beh�vs f�r att skapa minibilder av dina videofiler.<br />F�ljande filtyper st�ds: ");
define("_ZOOM_SETTINGS_OVERRIDE_FFMPEG","Anv�nd FFmpeg, �ven om zOOm inte hittar det i detta system.");
define("_ZOOM_SETTINGS_PDFTOTEXTPATH","S�kv�g till PDFtoText");
define("_ZOOM_SETTINGS_XPDFTOOLTIP","pdf2text, som �r en del av Xpdf paketet, beh�vs f�r att indexera PDF filer.");
define("_ZOOM_SETTINGS_OVERRIDE_PDF","Anv�nd PDFtoText, �ven om zOOm inte hittar det i detta system.");
define("_ZOOM_SETTINGS_MAXSIZE","Maxstorlek f�r Bild: ");
define("_ZOOM_SETTINGS_MAXSIZEKB","Media - inklusive bilder - maxstorlek (i kB): "); //added: 08-08-2006
define("_ZOOM_SETTINGS_MAXSIZEKB_WARNING","Uppladdningsbegr�nsningen av denna server, angiven av din ISP som del av PHP konfigurationen, �r %s.<br />D�rf�r g�r det ingen skilnad om om du s�tter gr�nsen h�gre �n detta v�rde!"); //added: 09-01-2006
define("_ZOOM_SETTINGS_THUMBSETTINGS","Minibildsinst�llningar:");
define("_ZOOM_SETTINGS_QUALITY","NetPBM och GD2 JPEG kvalitet: ");
define("_ZOOM_SETTINGS_SIZE","Maxstorlek f�r minibild: ");
define("_ZOOM_SETTINGS_TEMPNAME","Tillf�lligt Namn: ");
define("_ZOOM_SETTINGS_AUTONUMBER","numerera automagiskt bildnamn (ex. 1,2,3)");
define("_ZOOM_SETTINGS_TEMPDESCR","Tillf�llig Beskrivning: ");
define("_ZOOM_SETTINGS_TITLE","Gallerititel:");
define("_ZOOM_SETTINGS_SUBCATSPG","Antal (under-)gallerikolumner");
define("_ZOOM_SETTINGS_COLUMNS","Antal minibildskolumner");
define("_ZOOM_SETTINGS_THUMBSPG","Minibilder per sida");
define("_ZOOM_SETTINGS_CMTLENGTH","Maxl�ngd p� kommentar");
define("_ZOOM_SETTINGS_CHARS","tecken");
define("_ZOOM_SETTINGS_GALLERYPREFIX","Galleri titel prefix");
define("_ZOOM_SETTINGS_SHOWOCCSPACE","Visa f�rbrukad plats i Mediahanteraren");
define("_ZOOM_SETTINGS_TEMPLATE_TITLE","Stilmall");
define("_ZOOM_SETTINGS_FEATURES_TITLE","Funktioner P�/ AV");
define("_ZOOM_SETTINGS_CSS_TITLE","Redigera Stylesheets");
define("_ZOOM_SETTINGS_DISPLAY_TITLE","Visa data P�/ AV");
define("_ZOOM_SETTINGS_TEMPLATE_CHOOSE","V�lj en stilmall f�r att �ndra utseende p� ditt galleri");
define("_ZOOM_SETTINGS_TEMPLATE_TABLES","Klassisk (med tabeller)");
define("_ZOOM_SETTINGS_TEMPLATE_TABLELESS","Modern (utan tabeller)");
define("_ZOOM_SETTINGS_COMMENTS","Kommentarer");
define("_ZOOM_SETTINGS_POPUP","PopUp Media");
define("_ZOOM_SETTINGS_CATIMG","Visa galleribild");
define("_ZOOM_SETTINGS_SLIDESHOW","Bildspel");
define("_ZOOM_SETTINGS_ZOOMLOGO","Visa zOOm-logo");
define("_ZOOM_SETTINGS_DESCRINGAL","Visa albumbeskrivning inom galleriet");

define("_ZOOM_SETTINGS_SHOWHITS","Visa antal tr�ffar");
define("_ZOOM_SETTINGS_READEXIF","L�s EXIF-data");
define("_ZOOM_SETTINGS_EXIFTOOLTIP","Denna funktion visar  EXIF och andra IPTC data, utan att EXIF-modulen f�r PHP �r installerad p� ditt system.");
define("_ZOOM_SETTINGS_READID3","L�s mp3 ID3-data");
define("_ZOOM_SETTINGS_ID3TOOLTIP","Denna funktion visar ID3 v1.1 och v2.0 data n�r man tittar p� detaljerna f�r en mp3-fil.");
define("_ZOOM_SETTINGS_RATING","Betyg");
define("_ZOOM_SETTINGS_CSS","Popup f�nster");
define("_ZOOM_SETTINGS_CSSZOOM","zOOm galleri &amp; mediavisning");
define("_ZOOM_SETTINGS_SUCCESS","Lyckad uppdatering av konfiguration!");
define("_ZOOM_SETTINGS_ZOOMING","Bildzoom");
define("_ZOOM_SETTINGS_ORDERBY","Sortering av minibilder; sortera efter");
define("_ZOOM_SETTINGS_CATORDERBY","(under-)Galleri sorteringsmetod; sortera efter");

define("_ZOOM_SETTINGS_NO_POP","St�ng av alla Popups");
define("_ZOOM_SETTINGS_STANDARD_POP","Standard Popups");
define("_ZOOM_SETTINGS_LIGHTBOX_POP","Lightbox JS Popup");
define("_ZOOM_SETTINGS_LIGHTBOX_SLIDESHOW","<strong><i>S�TT P� DETTA OM DU VILL ATT BILDSPEL SKA FUNGERA MED LIGHTBOX JS</i></strong>");

define("_ZOOM_SETTINGS_DATE_ASC","DATUM, stigande");
define("_ZOOM_SETTINGS_DATE_DESC","DATUM, fallande");
define("_ZOOM_SETTINGS_FLNM_ASC","FILNAMN, stigande");
define("_ZOOM_SETTINGS_FLNM_DESC","FILNAMN, fallande");
define("_ZOOM_SETTINGS_NAME_ASC","NAMN, stigande");
define("_ZOOM_SETTINGS_NAME_DESC","NAMN, fallande");
define("_ZOOM_SETTINGS_LBTOOLTIP","En lightbox �r som en varukorg fylld med media valt av anv�ndaren, som edan kan bli nedladdat som en Zip-fil.");
define("_ZOOM_SETTINGS_SHOWNAME","Visa Namn");
define("_ZOOM_SETTINGS_SHOWDESCR","Visa beskrivning");
define("_ZOOM_SETTINGS_SHOWKEYWORDS","Visa nyckelord");
define("_ZOOM_SETTINGS_SHOWDATE","Visa datum");
define("_ZOOM_SETTINGS_SHOWUNAME","Visa Anv�ndarnamn");
define("_ZOOM_SETTINGS_SHOWFILENAME","Visa filnamn");
define("_ZOOM_SETTINGS_METABOX","Visa flytruta med detaljer p� gallerisidor");
define("_ZOOM_SETTINGS_METABOXTOOLTIP","V�lg bort denna funktion f�r att �ka hastigheten av ditt galleri. Effektivt vid stora databaser.");
define("_ZOOM_SETTINGS_ECARDS","E-kort");
define("_ZOOM_SETTINGS_ECARDS_LIFETIME","E-korts livsl�ngd");
define("_ZOOM_SETTINGS_ECARDS_ONEWEEK","en vecka");
define("_ZOOM_SETTINGS_ECARDS_TWOWEEKS","tv� veckor");
define("_ZOOM_SETTINGS_ECARDS_ONEMONTH","en m�nad");
define("_ZOOM_SETTINGS_ECARDS_THREEMONTHS","tre m�nader");
define("_ZOOM_SETTINGS_SHOWSEARCH","S�kruta p� alla sidor");
define("_ZOOM_SETTINGS_BOX_ANIMATE","Animera boxar");
define("_ZOOM_SETTINGS_BOX_PROPERTIES","Egenskapsrutans visuella status");
define("_ZOOM_SETTINGS_BOX_META","Metadatarutans visuela status");
define("_ZOOM_SETTINGS_BOX_COMMENTS","Kommentarrutans visuella status");
define("_ZOOM_SETTINGS_BOX_RATING","Betygsrutans visuella status");
define("_ZOOM_SETTINGS_TOPTEN","Visa \"Topp Tio\" l�nk p� huvudsidan");
define("_ZOOM_SETTINGS_LASTSUBM","Visa \"Senast skickade Media\" l�nk p� huvudsidan");
define("_ZOOM_SETTINGS_SETMENUOPTION","Visa \"Ladda upp Media\" l�nk i Anv�ndarmeny");
define("_ZOOM_SETTINGS_USEFTP","Anv�nd FTP mode?");
define("_ZOOM_SETTINGS_FTPHOST","V�rdnamn");
define("_ZOOM_SETTINGS_FTPUNAME","Anv�ndarnamn");
define("_ZOOM_SETTINGS_FTPPASS","L�senord");
define("_ZOOM_SETTINGS_FTPWARNING","Varning: L�senord �r inte sparat s�ker!");
define("_ZOOM_SETTINGS_FTPHOSTDIR","Mapp hos v�rd");
define("_ZOOM_SETTINGS_MESS_FTPHOSTDIR","Vanligen ange s�kv�gen till Joomla! fr�n din ftp-rot. VIKTIGT: Avsluta <b>utan</b> slash eller backslash!");
define("_ZOOM_SETTINGS_GROUP","Grupp");
define("_ZOOM_SETTINGS_PRIV_DESCR","Du �r beh�rig att �ndra r�ttigheter f�r varje anv�ndargrupp som Joomla! k�nner till och d�rmed �ven �ndra r�ttigheter f�r varje medlem i den gruppen!<br />
    En anv�ndare kan, i teorin, g�ra f�ljande saker: ladda upp fil(er), redigera/ sl�nga media, skapa/ redigera/ sl�nga (delade) gallerier.<br />
    Vad de kan och inte kan g�ra i den verkliga v�rlden �r helt upp till dig.");
define("_ZOOM_SETTINGS_CLOSE","Visa \"St�ng\" l�nk i popup");
define("_ZOOM_SETTINGS_MAINSCREEN","Visa Huvudsidel�nk i navigationsf�ltet");
define("_ZOOM_SETTINGS_NAVBUTTONS","Visa Navigationsknappar");
define("_ZOOM_SETTINGS_PROPERTIES","Visa Egenskaper under media");
define("_ZOOM_SETTINGS_MEDIAFOUND","Visa \"Media Hittad\" text i galleri");
define("_ZOOM_SETTINGS_ANONYMOUS_COMMENTS","Till�t anonyma kommentarer");
define("_ZOOM_SETTINGS_WM_ENABLE_TITLE","Aktivera Funktion");
define("_ZOOM_SETTINGS_WM_TITLE", "Dina vattenst�mplar");
define("_ZOOM_SETTINGS_WM_DESCR", "Din vattenst�mpel syns p� toppen av dina bilder p� denna sida. "
 . "Bilden kommer fortfarande vara synlig, men bes�kare kommer inte att frestas att kopiera dem."
 . "<br /><br />F�rslag: du kan anv�nda din verksamhets logotyp som vattenst�mpel. "
 . "F�rs�kra dig om att du g�r vattenst�mpelbildens bakgrund transparent!");
define("_ZOOM_SETTINGS_WM_IMG", "Bild");
define("_ZOOM_SETTINGS_WM_NOWATERMARKS", "Ingen vattenst�mpel hittad. Du kan ladda upp en ny vattenst�mpel nedan.");
define("_ZOOM_SETTINGS_WM_PLACEMENT_TITLE", "Placering");
define("_ZOOM_SETTINGS_WM_PLACEMENT_DESCR", "Du kan ange vattenst�mpelns position p� bilden genom att "
 . "v�lja en av positionerna i den gr�a boxen nedan.");
define("_ZOOM_SETTINGS_WM_FILE","Ladda upp vattenst�mpel");
define("_ZOOM_SETTINGS_WM_UPLOAD_SUCCESS","Lyckad uppladdning av vattenst�mpel!");
define("_ZOOM_SETTINGS_WM_UPLOAD_FAIL","Misslyckad uppladdning av vattenst�mpel.");
define("_ZOOM_SETTINGS_WM_DEL_SUCCESS","Lyckad borttagning av Vattenst�mpel!");
define("_ZOOM_SETTINGS_WM_DEL_FAIL","Vattenst�mpel kunde inte tas bort.");
define("_ZOOM_SYSTEM_TITLE","System Konfiguration");
define("_ZOOM_YES","ja");
define("_ZOOM_NO","nej");
define("_ZOOM_VISIBLE","synlig");
define("_ZOOM_HIDDEN","dold");
define("_ZOOM_SAVE","Spara");
define("_ZOOM_MOVEFILES","Flytta media");
define("_ZOOM_BUTTON_MOVE","Flytta");
define("_ZOOM_MOVEFILES_STEP1","V�lj m�l galleri &amp; flytta media");
define("_ZOOM_ALERT_MOVE","%s media flyttad, %s media kunde inte flyttas.");
define("_ZOOM_OPTIMIZE","Optimera tabeller");
define("_ZOOM_OPTIMIZE_DESCR","zOOm Media Gallery anv�nder sina tabeller mycket och skapar d�rf�r mycket �verfl�digt data, ex. 'skr�pdata'. Klicka h�r f�r att ta bort skitet.");
define("_ZOOM_OPTIMIZE_SUCCESS","zOOm Media Galleritabeller optimerade!");
define("_ZOOM_UPDATE","Uppdatera zOOm Media Gallery");
define("_ZOOM_UPDATE_DESCR","l�gg till nya funktioner, l�s problem och fixa buggar! Kolla <a href=\"http://www.zoomfactory.org\" target=\"_blank\">www.zoomfactory.org</a> f�r de senaste uppdateringarna!");
define("_ZOOM_UPDATE_XMLDATE","Senast uppdaterad");
define("_ZOOM_UPDATE_NOUPDATES","inga uppdateringar �nnu!"); // added 11-08
define("_ZOOM_UPDATE_PACKAGE","Uppdatera ZIP-fil: ");
define("_ZOOM_CREDITS","Om zOOm Media Gallery &amp; Credits");

//Image actions
define("_ZOOM_DISKSPACEUSAGE","Diskutrymme: %s anv�nder f�r tillf�llet");
define("_ZOOM_UPLOAD_SINGLE","enkel (ZIP-)fil");
define("_ZOOM_UPLOAD_MULTIPLE","m�nga filer");
define("_ZOOM_UPLOAD_DRAGNDROP","Drag n Drop");
define("_ZOOM_UPLOAD_SCANDIR","scana mapp");
define("_ZOOM_UPLOAD_INTRO","Klicka p� <b>Bl�ddra</b> knappen f�r att hitta en fil att ladda upp.");
define("_ZOOM_UPLOAD_STEP1","1. V�lj antalet filer du vill ladda upp: ");
define("_ZOOM_UPLOAD_STEP2","2. V�lj det galleri som du vill att filerna ska laddas upp till: ");
define("_ZOOM_UPLOAD_STEP3","3. Anv�nd bl�ddra knappen f�r att hitta fotona p� din dator");
define("_ZOOM_SCAN_STEP1","Steg 1: ange en plats att scana efter media...");
define("_ZOOM_SCAN_STEP2","Steg 2: v�lj de filer som du vill ladda upp...");
define("_ZOOM_SCAN_STEP3","Steg 3: zOOm bearebetar de filer du har valt...");
define("_ZOOM_SCAN_STEP1_DESCR","Platsen kan antingen vara en URL eller en mapp p� servern.<br />&nbsp;   Tips: FTP media till en mapp p� din server och ange sedan s�kv�gen h�r!");
define("_ZOOM_SCAN_STEP2_DESCR1","Bearbetar");
define("_ZOOM_SCAN_STEP2_DESCR2","som en lokal mapp");
define("_ZOOM_FORMCREATE_NAME","Namn");
define("_ZOOM_FORM_IMAGEFILE","Media");
define("_ZOOM_FORM_IMAGEFILTER","Godtagbara Mediatyper");
define("_ZOOM_FORM_INGALLERY","I galleri");
define("_ZOOM_FORM_SETFILENAME","S�tt medianamn till original filnamn.");
define("_ZOOM_FORM_IGNORESIZES","Ignorera f�rinst�lld maximum bilddimension"); //added: 12-08
define("_ZOOM_FORM_LOCATION","Plats");
define("_ZOOM_BUTTON_SCAN","Skicka URL eller mapp");
define("_ZOOM_BUTTON_UPLOAD","Ladda Upp");
define("_ZOOM_BUTTON_EDIT","Redigera");
define("_ZOOM_BUTTON_CREATE","Skapa");
define("_ZOOM_CONFIRM_WIPE","VARNING!\\n Att k�ra denna funktion kommer helt att f�rinta din zOOm gallery och sl�nga alla bilder och gallerier.\\n\\n �r du s�ker att du vill forts�tta?");
define("_ZOOM_CONFIRM_DEL","Detta val kommer att ta bort ett galleri helt, inklusive media!\\nVill du forts�tta?");
define("_ZOOM_CONFIRM_DELMEDIUM","Du kommer att ta bort detta medium helt!\\nVill du forts�tta?");
define("_ZOOM_ALERT_DEL","Galleri �r borttagen!");
define("_ZOOM_ALERT_NOCAT","Inget galleri �r valt!");
define("_ZOOM_ALERT_NOMEDIA","Inget media �r valt!");
define("_ZOOM_ALERT_EDITOK","Gallerif�lt har blivit redigerade!");
define("_ZOOM_ALERT_NEWGALLERY","Nytt galleri skapat.");
define("_ZOOM_ALERT_NONEWGALLERY","Galleri inte skapat!");
define("_ZOOM_ALERT_EDITIMG","Mediaegenskaper Redigerade.");
define("_ZOOM_ALERT_DELPIC","Lyckad borttagning av Media.");
define("_ZOOM_ALERT_NODELPIC","Media kunde inte tas bort!");
define("_ZOOM_ALERT_MOVEFAILURE","Media kunde inte flyttas."); //added: 08-08-2006
define("_ZOOM_ALERT_NOPICSELECTED","Inget Media har valts.");
define("_ZOOM_ALERT_NOPICSELECTED_MULT","Inga medier �r valda.");
define("_ZOOM_ALERT_UPLOADOK","lyckad uppladdning av Media!");
define("_ZOOM_ALERT_UPLOADSOK","lyckade uppladdningar av medier!");
define("_ZOOM_ALERT_WRONGFORMAT","Fel bildformat.");
define("_ZOOM_ALERT_WRONGFORMAT_MULT","Fel format.");
define("_ZOOM_ALERT_TOOBIG","Filstorlek �r f�r stort; %s �r det maximalt till�tna."); //added 08-08-2006
define("_ZOOM_ALERT_IMGERROR","Problem med att reducera bildstorlek/ skapa minibild.");
define("_ZOOM_ALERT_PCLZIPERROR","Problem uppstod vid uppackning av arkiv.");
define("_ZOOM_ALERT_INDEXERROR","Problem uppstod vid indexering av dokument.");
define("_ZOOM_ALERT_WATERMARKERROR","Problem uppstod vid vattenst�mpling av bild.");
define("_ZOOM_ALERT_IMGFOUND","bild(er) hittad(e).");
define("_ZOOM_INFO_CHECKCAT","V�nligen v�lj ett galleri innan du klickar p� ladda upp knappen!");
define("_ZOOM_BUTTON_ADDIMAGES","L�gg till media");
define("_ZOOM_BUTTON_REMIMAGES","Ta bort media");
define("_ZOOM_INFO_PROCESSING","Bearbetar fil:");
define("_ZOOM_ITEMEDIT_TAB1","Egenskaper");
define("_ZOOM_ITEMEDIT_TAB2","Medlemmar");
define("_ZOOM_ITEMEDIT_TAB3","�tg�rder");
define("_ZOOM_USERSLIST_LINE1",">>V�lj medlemmar f�r detta f�rem�l<<");
define("_ZOOM_USERSLIST_ALLOWALL",">>Allm�n access<<");
define("_ZOOM_USERSLIST_MEMBERSONLY",">>Endast Medlemmar<<");
define("_ZOOM_PUBLISHED","Publiserad");
define("_ZOOM_SHARED","Delad");
define("_ZOOM_ROTATE","V�nd bilden 90 grader");
define("_ZOOM_CLOCKWISE","medurs");
define("_ZOOM_CCLOCKWISE","moturs");
define("_ZOOM_FLIP_HORIZ","V�nd bild horizontellt");
define("_ZOOM_FLIP_VERT","V�nd bild vertikallt");
define("_ZOOM_PROGRESS_DESCR","Din beg�ran �r under bearbetning... G� ta en kopp kaffe.");

//Navigation (including Slideshow buttons)
define("_ZOOM_SLIDESHOW","Bildspel:");
define("_ZOOM_PREV_IMG","f�rra mediet");
define("_ZOOM_NEXT_IMG","n�sta medium");
define("_ZOOM_FIRST_IMG","f�rsta mediet");
define("_ZOOM_LAST_IMG","sista mediet");
define("_ZOOM_PLAY","spela");
define("_ZOOM_STOP","stopp");
define("_ZOOM_RESET","nollst�ll");
define("_ZOOM_FIRST","F�rst");
define("_ZOOM_LAST","Sista");
define("_ZOOM_PREVIOUS","F�rra");
define("_ZOOM_NEXT","N�sta");
define("_ZOOM_IN_DESC", "Placera mark�r �ver bild och anv�nd piltangenter f�r att justera zoomintensitet.");

//Gallery actions
define("_ZOOM_SEARCH_BOX","S�k i detta galleri");
define("_ZOOM_ADVANCED_SEARCH","Avancerad s�kning");
define("_ZOOM_SEARCH_KEYWORD","S�k p� nyckelord");
define("_ZOOM_IMAGES","media");
define("_ZOOM_IMGFOUND","%s medier hittad(e) - du �r p� sidan %s av %s");
define("_ZOOM_SUBGALLERIES","undergallerier");
define("_ZOOM_ALERT_COMMENTOK","Din kommentar har lagts till!");
define("_ZOOM_ALERT_COMMENTERROR","Du har redan kommenterat denna bild!");
define("_ZOOM_ALERT_VOTE_OK","Din r�st har r�knats! Tack s� mycket.");
define("_ZOOM_ALERT_VOTE_ERROR","Du har redan r�stat p� denna bild!");
define("_ZOOM_WINDOW_CLOSE","St�ng");
define("_ZOOM_NOPICS","inget media i galleri");
define("_ZOOM_PROPERTIES","Egenskaper");
define("_ZOOM_COMMENTS","Kommentarer");
define("_ZOOM_COMMENTS_INTRO","Skriv dina kommentarer nedan:");

define("_ZOOM_NO_COMMENTS","Inga kommentarer �nnu.");
define("_ZOOM_SAYS","s�ger");
define("_ZOOM_YOUR_NAME","Namn");
define("_ZOOM_ADD","L�gg till");
define("_ZOOM_NAME","Namn");
define("_ZOOM_DATE","Datum tillagt");
define("_ZOOM_UNAME","Tillagt av");
define("_ZOOM_DESCRIPTION","Beskrivning");
define("_ZOOM_IMGNAME","Namn");
define("_ZOOM_FILENAME","Filnamn");
define("_ZOOM_CLICKDOCUMENT","(klicka p� filnamn f�r att �ppna dokument)");
define("_ZOOM_KEYWORDS","Nyckelord");
define("_ZOOM_HITS","tr�ffar");
define("_ZOOM_CLOSE","St�ng");
define("_ZOOM_NOIMG", "Inga medier funna!");
define("_ZOOM_NONAME", "Du m�ste ange ett namn!");
define("_ZOOM_NOCAT", "Inget galleri �r valt!");
define("_ZOOM_EDITPIC", "Redigera Medium");
define("_ZOOM_SETCATIMG","Ange som galleribild");
define("_ZOOM_SETPARENTIMG","Ange som galleribild hos F�r�ldergalleri");
define("_ZOOM_PASS","L�senord");
define("_ZOOM_PASS_REQUIRED","Detta galleri kr�ver ett l�senord.<br />V�nligen fyll l�senordsf�ltet<br />och tryck p� G� knappen. Tack.");
define("_ZOOM_PASS_BUTTON","G�");
define("_ZOOM_PASS_GALLERY","L�senord");
define("_ZOOM_PASS_INNCORRECT","L�senord Felaktig");

//Hotlinking
define("_ZOOM_SETTINGS_HOTLINK","Aktivera Hotlinking skydd av bild");
define("_ZOOM_SETTINGS_HPTOOLTIP","N�r hotlinking skyddet �r aktiverat, kommer filnamn och s�kv�gar att vara dolda. N�r en anv�ndare f�rs�ker anv�nda bilden p� en annan sida kommer den inte att visas.");


//Lightbox
define("_ZOOM_LIGHTBOX","Lightbox");
define("_ZOOM_LIGHTBOX_GALLERY","Lightbox detta galleri!");
define("_ZOOM_LIGHTBOX_ITEM","Lightbox detta objekt!");
define("_ZOOM_LIGHTBOX_VIEW","Kolla i din Lightbox");
define("_ZOOM_YOUR_LIGHTBOX","Din Lightbox Inneh�ller:");
define("_ZOOM_LIGHTBOX_EMPTY","Din Lightbox �r tom.");
define("_ZOOM_LIGHTBOX_ZIPBTN","Skapa ZIP-fil");
define("_ZOOM_LIGHTBOX_PLAYLISTBTN","Skapa Spellista &amp; Spela");
define("_ZOOM_LIGHTBOX_CATS","Gallerier");
define("_ZOOM_LIGHTBOX_TITLEDESCR","Titel &amp; Beskrivning");
define("_ZOOM_ACTION","�tg�rd");
define("_ZOOM_LIGHTBOX_ADDED","Objekt tillagt i din lightbox!");
define("_ZOOM_LIGHTBOX_NOTADDED","detta objekt finns redan i din lightbox!");
define("_ZOOM_LIGHTBOX_EDITED","Objekt redigerad!");
define("_ZOOM_LIGHTBOX_NOTEDITED","Problem att redigera objekt!");
define("_ZOOM_LIGHTBOX_DEL","Objekt borttagen fr�n din lightbox!");
define("_ZOOM_LIGHTBOX_NOTDEL","Problem att ta bort objekt fr�n din lightbox!");
define("_ZOOM_LIGHTBOX_NOZIP","Du har redan skapat en Zip-fil av din lightbox eller s� inneh�ller din lightbox inga objekt!");
define("_ZOOM_LIGHTBOX_PARSEZIP","Analyserar bilder fr�n galleri...");
define("_ZOOM_LIGHTBOX_DOZIP","skapar ZIP-fil...");
define("_ZOOM_LIGHTBOX_DLHERE","Du kan nu ladda ned lightboxen");
define("_ZOOM_LIGHTBOX_PLSUCCESS","Spellista skapad! Du m�ste uppdatera spelarf�nstret.");
define("_ZOOM_LIGHTBOX_PLERROR","Problem att skapa Spellista.");
define("_ZOOM_LIGHTBOX_NOAUDIO","Du m�ste l�gga till ljudfiler till din lightbox f�rst!");
define("_ZOOM_LIGHTBOX_NOITEMS","Din Lightbox verkar vara v�ldigt tom.");

//EXIF information
define("_ZOOM_EXIF","EXIF");
define("_ZOOM_EXIF_SHOWHIDE","Visa/ d�lj Metadata");

//MP3 id3 v1.1 or later information
define("_ZOOM_AUDIO_PLAYING","Spelas nu:");
define("_ZOOM_AUDIO_CLICKTOPLAY","Klicka h�r f�r att spela denna fil.");
define("_ZOOM_ID3","ID3");
define("_ZOOM_ID3_SHOWHIDE","Visa/ d�lj ID3-tag data");
define("_ZOOM_ID3_LENGTH","L�ngd");
define("_ZOOM_ID3_QUALITY","Kvalitet");
define("_ZOOM_ID3_TITLE","Titel");
define("_ZOOM_ID3_ARTIST","Artist");
define("_ZOOM_ID3_ALBUM","Album");
define("_ZOOM_ID3_YEAR","�r");
define("_ZOOM_ID3_COMMENT","Kommentar");
define("_ZOOM_ID3_GENRE","Genre");

//Video metadata information
define("_ZOOM_VIDEO_SHOWHIDE","Visa/ d�lj Video data");
define("_ZOOM_VIDEO_PIXELRATIO","Pixelproportion");
define("_ZOOM_VIDEO_QUALITY","Videokvalitet");
define("_ZOOM_VIDEO_AUDIOQUALITY","ljudkvalitet");
define("_ZOOM_VIDEO_CODEC","Codec");
define("_ZOOM_VIDEO_RESOLUTION","Uppl�sning");

//rating
define("_ZOOM_RATING","Betyg");
define("_ZOOM_NOTRATED","Inte betygsatt �nnu!");
define("_ZOOM_VOTE","R�sta");
define("_ZOOM_VOTES","r�ster");
define("_ZOOM_RATE0","skr�p");
define("_ZOOM_RATE1","svag");
define("_ZOOM_RATE2","medel");
define("_ZOOM_RATE3","bra");
define("_ZOOM_RATE4","v�ldigt bra");
define("_ZOOM_RATE5","perfekt!");

//special
define("_ZOOM_TOPTEN","Topp Tio");
define("_ZOOM_LASTSUBM","Senast skickad");
define("_ZOOM_LASTCOMM","Senast kommenterad");
define("_ZOOM_SEARCHRESULTS","S�kresultat");
define("_ZOOM_TOPRATED","Topp Betyg");

//ecard
define("_ZOOM_ECARD_SENDAS","Skicka detta som ett E-kort till en v�n!");
define("_ZOOM_ECARD_YOURNAME","Ditt namn");
define("_ZOOM_ECARD_YOUREMAIL","Din e-postadress");
define("_ZOOM_ECARD_FRIENDSNAME","Din kompis namn");
define("_ZOOM_ECARD_FRIENDSEMAIL","Din kompis e-postadress");
define("_ZOOM_ECARD_MESSAGE","Meddelande");
define("_ZOOM_ECARD_SENDCARD","Skicka E-kort");
define("_ZOOM_ECARD_SUCCESS","Ditt kort har skickats.");
define("_ZOOM_ECARD_CLICKHERE","Klicka h�r f�r att se det!");
define("_ZOOM_ECARD_ERROR","Problem att skicka E-kort till");
define("_ZOOM_ECARD_TURN","Kolla p� baksidan av detta kort!");
define("_ZOOM_ECARD_TURN2","Kolla p� framsidan av detta kort!");
define("_ZOOM_ECARD_SENDER","Skickat till dig fr�n:");
define("_ZOOM_ECARD_SUBJ","Du har mottagit ett E-kort fr�n:");
define("_ZOOM_ECARD_MSG1","har skickat dig ett E-kort fr�n");
define("_ZOOM_ECARD_MSG2","Klicka p� l�nken nedan f�r att se ditt personliga E-kort!");
define("_ZOOM_ECARD_MSG3","Svara inte p� detta meddelande d� det �r genererat automatiskt.");
define("_ZOOM_ECARD_ECARDEXPIRED","Detta E-kort g�ller inte l�ngre.");

//installation-screen
define ('_ZOOM_INSTALL_CREATE_DIR','zOOm Installationen f�rs�ker att skapa bildmappen "images/zoom" ...');
define ('_ZOOM_INSTALL_CREATE_DIR_WM','zOOm Installationen f�rs�ker skapa bildmappen "images/zoom/watermarks" ...');
define ('_ZOOM_INSTALL_CREATE_DIR_SUCC','klar!');
define ('_ZOOM_INSTALL_CREATE_DIR_FAIL','misslyckad!');
define ('_ZOOM_INSTALL_CREATE_DBASE_SUCC','Databas Skapad!');
define ('_ZOOM_INSTALL_UPGRADED_DBASE_SUCC','Databas uppgraderad!');
define ('_ZOOM_INSTALL_MESS1','Lyckad installation av zOOm Bildgalleri.<br>Du �r nu redo f�r att fylla dina album!');
define ('_ZOOM_INSTALL_MESS2','OBS: det f�rsta du ska g�ra nu, �r att g� till componentmenyn ovan,<br>leta efter "zOOm Media Gallery Admin", klicka p� den och<br>kolla inst�llningssidan i Adminsystemet.');
define ('_ZOOM_INSTALL_MESS3','H�r kan du �ndra alla variabler s� att zOOm passar in i din konfiguration.');
define ('_ZOOM_INSTALL_MESS4','Gl�m inte att skapa ett galleri och sedan �r du p� v�g...!');
define ('_ZOOM_INSTALL_MESS_FAIL1','zOOM Gallery kunde inte installeras korrekt!');
define ('_ZOOM_INSTALL_MESS_FAIL2','F�ljande mappar m�ste skapas och sedan  CHMODas till "0777":<br />'
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
define ('_ZOOM_INSTALL_MESS_FAIL3','N�r du v�l har skapat dessa mappar och �ndrat r�ttigheterna, g� till <br /> "Components -> zOOm Media Gallery" och �ndra inst�llningarna.');
?>