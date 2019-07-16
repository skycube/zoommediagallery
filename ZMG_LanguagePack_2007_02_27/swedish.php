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
define("_ZOOM_PICK","Välj ett galleri");
define("_ZOOM_DELETE","Släng");
define("_ZOOM_BACK","Gå tillbaka");
define("_ZOOM_MAINSCREEN","Huvudsida");
define("_ZOOM_BACKTOGALLERY","Tillbaks till galleriet");
define("_ZOOM_INFO_DONE","klar!");
define("_ZOOM_TOOLTIP", "zOOm VerktygsTips");
define("_ZOOM_WARNING", "zOOm Varning!");

//Gallery admin page
define("_ZOOM_ADMINSYSTEM","Adminsystem");
define("_ZOOM_USERSYSTEM","Användarsystem");
define("_ZOOM_ADMIN_TITLE","Mediagalleri Adminsystem");
define("_ZOOM_USER_TITLE","Mediagalleri Användarsystem");
define("_ZOOM_CATSMGR","Gallerihanterare");
define("_ZOOM_CATSMGR_DESCR","skapa nya gallerier för nya medier; skapa, redigera och släng dem här i Gallerihanteraren.");
define("_ZOOM_SETTINGS_DDONOF","Aktivera Drag n Drop");
define("_ZOOM_NEW","Spara nytt galleri");
define("_ZOOM_DEL","Släng galleri");
define("_ZOOM_ORDERSAVE", "Spara Ordning");
define("_ZOOM_MEDIAMGR","Mediahanterare");
define("_ZOOM_MEDIAMGR_DESCR","flytta, redigera, släng, scana efter media automatiskt eller ladda upp (flera) nya medier manuellt.");
define("_ZOOM_THUMB", "Minibild kodgenerator");
define("_ZOOM_THUMB_DESCR", "Skapa dina Zoom Minibildskoder enkelt");
define("_ZOOM_UPLOAD","Ladda upp fil(er)");
define("_ZOOM_EDIT","Redigera galleri");
define("_ZOOM_ADMIN_CREATE","Skapa databas");
define("_ZOOM_ADMIN_CREATE_DESCR","bygg de nödvändiga databastabelerna för att kunna börja använda albumet");
define("_ZOOM_HD_PREVIEW","Förhandsgranska");
define("_ZOOM_HD_CHECKALL","Markera/Avmarkera Alla");
define("_ZOOM_HD_CREATEDBY","Skapad av");
define("_ZOOM_HD_AFTER","Huvudkategori");
define("_ZOOM_HD_HIDEMSG","Dölj 'ingen media' text");
define("_ZOOM_HD_NAME","Titel");
define("_ZOOM_HD_DIR","Mapp");
define("_ZOOM_HD_NEW","Nytt galleri");
define("_ZOOM_HD_SHARE","Dela ut detta galleri");
define("_ZOOM_SHARE","Dela ut");
define("_ZOOM_UNSHARE","Gör outdelat");
define("_ZOOM_PUBLISH","Publicera");
define("_ZOOM_UNPUBLISH","Gör Opublicerat");
define("_ZOOM_TOPLEVEL","Toppnivå");
define("_ZOOM_HD_UPLOAD","Ladda upp fil");
define("_ZOOM_A_ERROR_ERRORTYPE","Feltyp");
define("_ZOOM_A_ERROR_IMAGENAME","Bildnamn");
define("_ZOOM_A_ERROR_NOFFMPEG","<u>FFmpeg</u> inte hittad");
define("_ZOOM_A_ERROR_NOPDFTOTEXT","<u>PDFtoText</u> inte hittad");
define("_ZOOM_A_ERROR_NOTINSTALLED","Inte installerad");
define("_ZOOM_A_ERROR_CONFTODB","Fel vid försök att spara configuration till databas!");
define("_ZOOM_A_MESS_NOT_SHURE","* Om du inte är säker, använd standard \"auto\" ");
define("_ZOOM_A_MESS_SAFEMODE1","Note: \"Safe Mode\" är aktiverad, det är därför möjligt att uppladdning av större filer inte fungerar!<br />Du bör gå till Adminsystemet och växla till FTP-Mode.");
define("_ZOOM_A_MESS_SAFEMODE2","Obs: \"Safe Mode\" är aktiverat, det är därför möjligt att uppladdning av större filer inte fungerar!<br />zOOm rekommenderar att aktivera FTP-Mode i Adminsystemet.");
define("_ZOOM_A_MESS_PROCESSING_FILE","Processing file...");
define("_ZOOM_A_MESS_NOTOPEN_URL","Could not open url:");
define("_ZOOM_A_MESS_PARSE_URL","Parsing \"%s\" for images... "); // %s = $url
define("_ZOOM_A_MESS_NOJAVA","Om du ovan endast ser en grå box eller har problem vid uppladdning, kan det bero på<br />att du inte har det senaste java run-time installerat. Gå till <a href=\"http://www.java.com\" target=\"_blank\">Java.com</a> <br /> och ladda ned senaste versionen.");
define("_ZOOM_SETTINGS","Inställningar");
define("_ZOOM_SETTINGS_DESCR","ändra och visa alla tillgängliga konfigurationsinställningarna här.");
define("_ZOOM_SETTINGS_TAB1","System");
define("_ZOOM_SETTINGS_TAB2","Media");
define("_ZOOM_SETTINGS_TAB3","Funktioner");
define("_ZOOM_SETTINGS_TAB4","Layout");
define("_ZOOM_SETTINGS_TAB5","Vattenstämpel");
define("_ZOOM_SETTINGS_TAB6","Safe Mode");
define("_ZOOM_SETTINGS_TAB7","Tillgänglighet");
define("_ZOOM_SETTINGS_TAB8","Nollställ");
define("_ZOOM_SETTINGS_ERASE","Klicka för att intetgöra alla zoom gallery data och starta på nytt. Detta nollställer alla inställningar och raderar alla bilder.");
define("_ZOOM_SETTINGS_CONVTYPE","Typ av bildkonvertering");
define("_ZOOM_SETTINGS_GALLERY_FEATURES","Funktioner för gallerivisning");
define("_ZOOM_SETTINGS_VIEW_FEATURES","Funktioner för mediavisning");

define("_ZOOM_SETTINGS_GALLERY","Gallerivisning");
define("_ZOOM_SETTINGS_VIEW","Mediavisning");

define("_ZOOM_SETTINGS_GENERAL_FEATURES","Generella Funktioner");
define("_ZOOM_SETTINGS_AUTODET","hittad automatiskt: ");
define("_ZOOM_SETTINGS_IMGPATH","Sökväg till mediafiler:");
define("_ZOOM_SETTINGS_TTIMGPATH","Nuvarnade sökväg till medium är ");
define("_ZOOM_SETTINGS_CONVSETTINGS","Inställningar för Mediakonvertering:");
define("_ZOOM_SETTINGS_IMPATH","Sökväg till ImageMagick: ");
define("_ZOOM_SETTINGS_NETPBMPATH"," eller NetPBM: ");
define("_ZOOM_SETTINGS_FFMPEGPATH","Sökväg till FFmpeg");
define("_ZOOM_SETTINGS_FFMPEGTOOLTIP","FFmpeg behövs för att skapa minibilder av dina videofiler.<br />Följande filtyper stöds: ");
define("_ZOOM_SETTINGS_OVERRIDE_FFMPEG","Använd FFmpeg, även om zOOm inte hittar det i detta system.");
define("_ZOOM_SETTINGS_PDFTOTEXTPATH","Sökväg till PDFtoText");
define("_ZOOM_SETTINGS_XPDFTOOLTIP","pdf2text, som är en del av Xpdf paketet, behövs för att indexera PDF filer.");
define("_ZOOM_SETTINGS_OVERRIDE_PDF","Använd PDFtoText, även om zOOm inte hittar det i detta system.");
define("_ZOOM_SETTINGS_MAXSIZE","Maxstorlek för Bild: ");
define("_ZOOM_SETTINGS_MAXSIZEKB","Media - inklusive bilder - maxstorlek (i kB): "); //added: 08-08-2006
define("_ZOOM_SETTINGS_MAXSIZEKB_WARNING","Uppladdningsbegränsningen av denna server, angiven av din ISP som del av PHP konfigurationen, är %s.<br />Därför gör det ingen skilnad om om du sätter gränsen högre än detta värde!"); //added: 09-01-2006
define("_ZOOM_SETTINGS_THUMBSETTINGS","Minibildsinställningar:");
define("_ZOOM_SETTINGS_QUALITY","NetPBM och GD2 JPEG kvalitet: ");
define("_ZOOM_SETTINGS_SIZE","Maxstorlek för minibild: ");
define("_ZOOM_SETTINGS_TEMPNAME","Tillfälligt Namn: ");
define("_ZOOM_SETTINGS_AUTONUMBER","numerera automagiskt bildnamn (ex. 1,2,3)");
define("_ZOOM_SETTINGS_TEMPDESCR","Tillfällig Beskrivning: ");
define("_ZOOM_SETTINGS_TITLE","Gallerititel:");
define("_ZOOM_SETTINGS_SUBCATSPG","Antal (under-)gallerikolumner");
define("_ZOOM_SETTINGS_COLUMNS","Antal minibildskolumner");
define("_ZOOM_SETTINGS_THUMBSPG","Minibilder per sida");
define("_ZOOM_SETTINGS_CMTLENGTH","Maxlängd på kommentar");
define("_ZOOM_SETTINGS_CHARS","tecken");
define("_ZOOM_SETTINGS_GALLERYPREFIX","Galleri titel prefix");
define("_ZOOM_SETTINGS_SHOWOCCSPACE","Visa förbrukad plats i Mediahanteraren");
define("_ZOOM_SETTINGS_TEMPLATE_TITLE","Stilmall");
define("_ZOOM_SETTINGS_FEATURES_TITLE","Funktioner PÅ/ AV");
define("_ZOOM_SETTINGS_CSS_TITLE","Redigera Stylesheets");
define("_ZOOM_SETTINGS_DISPLAY_TITLE","Visa data PÅ/ AV");
define("_ZOOM_SETTINGS_TEMPLATE_CHOOSE","Välj en stilmall för att ändra utseende på ditt galleri");
define("_ZOOM_SETTINGS_TEMPLATE_TABLES","Klassisk (med tabeller)");
define("_ZOOM_SETTINGS_TEMPLATE_TABLELESS","Modern (utan tabeller)");
define("_ZOOM_SETTINGS_COMMENTS","Kommentarer");
define("_ZOOM_SETTINGS_POPUP","PopUp Media");
define("_ZOOM_SETTINGS_CATIMG","Visa galleribild");
define("_ZOOM_SETTINGS_SLIDESHOW","Bildspel");
define("_ZOOM_SETTINGS_ZOOMLOGO","Visa zOOm-logo");
define("_ZOOM_SETTINGS_DESCRINGAL","Visa albumbeskrivning inom galleriet");

define("_ZOOM_SETTINGS_SHOWHITS","Visa antal träffar");
define("_ZOOM_SETTINGS_READEXIF","Läs EXIF-data");
define("_ZOOM_SETTINGS_EXIFTOOLTIP","Denna funktion visar  EXIF och andra IPTC data, utan att EXIF-modulen för PHP är installerad på ditt system.");
define("_ZOOM_SETTINGS_READID3","Läs mp3 ID3-data");
define("_ZOOM_SETTINGS_ID3TOOLTIP","Denna funktion visar ID3 v1.1 och v2.0 data när man tittar på detaljerna för en mp3-fil.");
define("_ZOOM_SETTINGS_RATING","Betyg");
define("_ZOOM_SETTINGS_CSS","Popup fönster");
define("_ZOOM_SETTINGS_CSSZOOM","zOOm galleri &amp; mediavisning");
define("_ZOOM_SETTINGS_SUCCESS","Lyckad uppdatering av konfiguration!");
define("_ZOOM_SETTINGS_ZOOMING","Bildzoom");
define("_ZOOM_SETTINGS_ORDERBY","Sortering av minibilder; sortera efter");
define("_ZOOM_SETTINGS_CATORDERBY","(under-)Galleri sorteringsmetod; sortera efter");

define("_ZOOM_SETTINGS_NO_POP","Stäng av alla Popups");
define("_ZOOM_SETTINGS_STANDARD_POP","Standard Popups");
define("_ZOOM_SETTINGS_LIGHTBOX_POP","Lightbox JS Popup");
define("_ZOOM_SETTINGS_LIGHTBOX_SLIDESHOW","<strong><i>SÄTT PÅ DETTA OM DU VILL ATT BILDSPEL SKA FUNGERA MED LIGHTBOX JS</i></strong>");

define("_ZOOM_SETTINGS_DATE_ASC","DATUM, stigande");
define("_ZOOM_SETTINGS_DATE_DESC","DATUM, fallande");
define("_ZOOM_SETTINGS_FLNM_ASC","FILNAMN, stigande");
define("_ZOOM_SETTINGS_FLNM_DESC","FILNAMN, fallande");
define("_ZOOM_SETTINGS_NAME_ASC","NAMN, stigande");
define("_ZOOM_SETTINGS_NAME_DESC","NAMN, fallande");
define("_ZOOM_SETTINGS_LBTOOLTIP","En lightbox är som en varukorg fylld med media valt av användaren, som edan kan bli nedladdat som en Zip-fil.");
define("_ZOOM_SETTINGS_SHOWNAME","Visa Namn");
define("_ZOOM_SETTINGS_SHOWDESCR","Visa beskrivning");
define("_ZOOM_SETTINGS_SHOWKEYWORDS","Visa nyckelord");
define("_ZOOM_SETTINGS_SHOWDATE","Visa datum");
define("_ZOOM_SETTINGS_SHOWUNAME","Visa Användarnamn");
define("_ZOOM_SETTINGS_SHOWFILENAME","Visa filnamn");
define("_ZOOM_SETTINGS_METABOX","Visa flytruta med detaljer på gallerisidor");
define("_ZOOM_SETTINGS_METABOXTOOLTIP","Välg bort denna funktion för att öka hastigheten av ditt galleri. Effektivt vid stora databaser.");
define("_ZOOM_SETTINGS_ECARDS","E-kort");
define("_ZOOM_SETTINGS_ECARDS_LIFETIME","E-korts livslängd");
define("_ZOOM_SETTINGS_ECARDS_ONEWEEK","en vecka");
define("_ZOOM_SETTINGS_ECARDS_TWOWEEKS","två veckor");
define("_ZOOM_SETTINGS_ECARDS_ONEMONTH","en månad");
define("_ZOOM_SETTINGS_ECARDS_THREEMONTHS","tre månader");
define("_ZOOM_SETTINGS_SHOWSEARCH","Sökruta på alla sidor");
define("_ZOOM_SETTINGS_BOX_ANIMATE","Animera boxar");
define("_ZOOM_SETTINGS_BOX_PROPERTIES","Egenskapsrutans visuella status");
define("_ZOOM_SETTINGS_BOX_META","Metadatarutans visuela status");
define("_ZOOM_SETTINGS_BOX_COMMENTS","Kommentarrutans visuella status");
define("_ZOOM_SETTINGS_BOX_RATING","Betygsrutans visuella status");
define("_ZOOM_SETTINGS_TOPTEN","Visa \"Topp Tio\" länk på huvudsidan");
define("_ZOOM_SETTINGS_LASTSUBM","Visa \"Senast skickade Media\" länk på huvudsidan");
define("_ZOOM_SETTINGS_SETMENUOPTION","Visa \"Ladda upp Media\" länk i Användarmeny");
define("_ZOOM_SETTINGS_USEFTP","Använd FTP mode?");
define("_ZOOM_SETTINGS_FTPHOST","Värdnamn");
define("_ZOOM_SETTINGS_FTPUNAME","Användarnamn");
define("_ZOOM_SETTINGS_FTPPASS","Lösenord");
define("_ZOOM_SETTINGS_FTPWARNING","Varning: Lösenord är inte sparat säker!");
define("_ZOOM_SETTINGS_FTPHOSTDIR","Mapp hos värd");
define("_ZOOM_SETTINGS_MESS_FTPHOSTDIR","Vanligen ange sökvägen till Joomla! från din ftp-rot. VIKTIGT: Avsluta <b>utan</b> slash eller backslash!");
define("_ZOOM_SETTINGS_GROUP","Grupp");
define("_ZOOM_SETTINGS_PRIV_DESCR","Du är behörig att ändra rättigheter för varje användargrupp som Joomla! känner till och därmed även ändra rättigheter för varje medlem i den gruppen!<br />
    En användare kan, i teorin, göra följande saker: ladda upp fil(er), redigera/ slänga media, skapa/ redigera/ slänga (delade) gallerier.<br />
    Vad de kan och inte kan göra i den verkliga världen är helt upp till dig.");
define("_ZOOM_SETTINGS_CLOSE","Visa \"Stäng\" länk i popup");
define("_ZOOM_SETTINGS_MAINSCREEN","Visa Huvudsidelänk i navigationsfältet");
define("_ZOOM_SETTINGS_NAVBUTTONS","Visa Navigationsknappar");
define("_ZOOM_SETTINGS_PROPERTIES","Visa Egenskaper under media");
define("_ZOOM_SETTINGS_MEDIAFOUND","Visa \"Media Hittad\" text i galleri");
define("_ZOOM_SETTINGS_ANONYMOUS_COMMENTS","Tillåt anonyma kommentarer");
define("_ZOOM_SETTINGS_WM_ENABLE_TITLE","Aktivera Funktion");
define("_ZOOM_SETTINGS_WM_TITLE", "Dina vattenstämplar");
define("_ZOOM_SETTINGS_WM_DESCR", "Din vattenstämpel syns på toppen av dina bilder på denna sida. "
 . "Bilden kommer fortfarande vara synlig, men besökare kommer inte att frestas att kopiera dem."
 . "<br /><br />Förslag: du kan använda din verksamhets logotyp som vattenstämpel. "
 . "Försäkra dig om att du gör vattenstämpelbildens bakgrund transparent!");
define("_ZOOM_SETTINGS_WM_IMG", "Bild");
define("_ZOOM_SETTINGS_WM_NOWATERMARKS", "Ingen vattenstämpel hittad. Du kan ladda upp en ny vattenstämpel nedan.");
define("_ZOOM_SETTINGS_WM_PLACEMENT_TITLE", "Placering");
define("_ZOOM_SETTINGS_WM_PLACEMENT_DESCR", "Du kan ange vattenstämpelns position på bilden genom att "
 . "välja en av positionerna i den gråa boxen nedan.");
define("_ZOOM_SETTINGS_WM_FILE","Ladda upp vattenstämpel");
define("_ZOOM_SETTINGS_WM_UPLOAD_SUCCESS","Lyckad uppladdning av vattenstämpel!");
define("_ZOOM_SETTINGS_WM_UPLOAD_FAIL","Misslyckad uppladdning av vattenstämpel.");
define("_ZOOM_SETTINGS_WM_DEL_SUCCESS","Lyckad borttagning av Vattenstämpel!");
define("_ZOOM_SETTINGS_WM_DEL_FAIL","Vattenstämpel kunde inte tas bort.");
define("_ZOOM_SYSTEM_TITLE","System Konfiguration");
define("_ZOOM_YES","ja");
define("_ZOOM_NO","nej");
define("_ZOOM_VISIBLE","synlig");
define("_ZOOM_HIDDEN","dold");
define("_ZOOM_SAVE","Spara");
define("_ZOOM_MOVEFILES","Flytta media");
define("_ZOOM_BUTTON_MOVE","Flytta");
define("_ZOOM_MOVEFILES_STEP1","Välj mål galleri &amp; flytta media");
define("_ZOOM_ALERT_MOVE","%s media flyttad, %s media kunde inte flyttas.");
define("_ZOOM_OPTIMIZE","Optimera tabeller");
define("_ZOOM_OPTIMIZE_DESCR","zOOm Media Gallery använder sina tabeller mycket och skapar därför mycket överflödigt data, ex. 'skräpdata'. Klicka här för att ta bort skitet.");
define("_ZOOM_OPTIMIZE_SUCCESS","zOOm Media Galleritabeller optimerade!");
define("_ZOOM_UPDATE","Uppdatera zOOm Media Gallery");
define("_ZOOM_UPDATE_DESCR","lägg till nya funktioner, lös problem och fixa buggar! Kolla <a href=\"http://www.zoomfactory.org\" target=\"_blank\">www.zoomfactory.org</a> för de senaste uppdateringarna!");
define("_ZOOM_UPDATE_XMLDATE","Senast uppdaterad");
define("_ZOOM_UPDATE_NOUPDATES","inga uppdateringar ännu!"); // added 11-08
define("_ZOOM_UPDATE_PACKAGE","Uppdatera ZIP-fil: ");
define("_ZOOM_CREDITS","Om zOOm Media Gallery &amp; Credits");

//Image actions
define("_ZOOM_DISKSPACEUSAGE","Diskutrymme: %s använder för tillfället");
define("_ZOOM_UPLOAD_SINGLE","enkel (ZIP-)fil");
define("_ZOOM_UPLOAD_MULTIPLE","många filer");
define("_ZOOM_UPLOAD_DRAGNDROP","Drag n Drop");
define("_ZOOM_UPLOAD_SCANDIR","scana mapp");
define("_ZOOM_UPLOAD_INTRO","Klicka på <b>Bläddra</b> knappen för att hitta en fil att ladda upp.");
define("_ZOOM_UPLOAD_STEP1","1. Välj antalet filer du vill ladda upp: ");
define("_ZOOM_UPLOAD_STEP2","2. Välj det galleri som du vill att filerna ska laddas upp till: ");
define("_ZOOM_UPLOAD_STEP3","3. Använd bläddra knappen för att hitta fotona på din dator");
define("_ZOOM_SCAN_STEP1","Steg 1: ange en plats att scana efter media...");
define("_ZOOM_SCAN_STEP2","Steg 2: välj de filer som du vill ladda upp...");
define("_ZOOM_SCAN_STEP3","Steg 3: zOOm bearebetar de filer du har valt...");
define("_ZOOM_SCAN_STEP1_DESCR","Platsen kan antingen vara en URL eller en mapp på servern.<br />&nbsp;   Tips: FTP media till en mapp på din server och ange sedan sökvägen här!");
define("_ZOOM_SCAN_STEP2_DESCR1","Bearbetar");
define("_ZOOM_SCAN_STEP2_DESCR2","som en lokal mapp");
define("_ZOOM_FORMCREATE_NAME","Namn");
define("_ZOOM_FORM_IMAGEFILE","Media");
define("_ZOOM_FORM_IMAGEFILTER","Godtagbara Mediatyper");
define("_ZOOM_FORM_INGALLERY","I galleri");
define("_ZOOM_FORM_SETFILENAME","Sätt medianamn till original filnamn.");
define("_ZOOM_FORM_IGNORESIZES","Ignorera förinställd maximum bilddimension"); //added: 12-08
define("_ZOOM_FORM_LOCATION","Plats");
define("_ZOOM_BUTTON_SCAN","Skicka URL eller mapp");
define("_ZOOM_BUTTON_UPLOAD","Ladda Upp");
define("_ZOOM_BUTTON_EDIT","Redigera");
define("_ZOOM_BUTTON_CREATE","Skapa");
define("_ZOOM_CONFIRM_WIPE","VARNING!\\n Att köra denna funktion kommer helt att förinta din zOOm gallery och slänga alla bilder och gallerier.\\n\\n Är du säker att du vill fortsätta?");
define("_ZOOM_CONFIRM_DEL","Detta val kommer att ta bort ett galleri helt, inklusive media!\\nVill du fortsätta?");
define("_ZOOM_CONFIRM_DELMEDIUM","Du kommer att ta bort detta medium helt!\\nVill du fortsätta?");
define("_ZOOM_ALERT_DEL","Galleri är borttagen!");
define("_ZOOM_ALERT_NOCAT","Inget galleri är valt!");
define("_ZOOM_ALERT_NOMEDIA","Inget media är valt!");
define("_ZOOM_ALERT_EDITOK","Gallerifält har blivit redigerade!");
define("_ZOOM_ALERT_NEWGALLERY","Nytt galleri skapat.");
define("_ZOOM_ALERT_NONEWGALLERY","Galleri inte skapat!");
define("_ZOOM_ALERT_EDITIMG","Mediaegenskaper Redigerade.");
define("_ZOOM_ALERT_DELPIC","Lyckad borttagning av Media.");
define("_ZOOM_ALERT_NODELPIC","Media kunde inte tas bort!");
define("_ZOOM_ALERT_MOVEFAILURE","Media kunde inte flyttas."); //added: 08-08-2006
define("_ZOOM_ALERT_NOPICSELECTED","Inget Media har valts.");
define("_ZOOM_ALERT_NOPICSELECTED_MULT","Inga medier är valda.");
define("_ZOOM_ALERT_UPLOADOK","lyckad uppladdning av Media!");
define("_ZOOM_ALERT_UPLOADSOK","lyckade uppladdningar av medier!");
define("_ZOOM_ALERT_WRONGFORMAT","Fel bildformat.");
define("_ZOOM_ALERT_WRONGFORMAT_MULT","Fel format.");
define("_ZOOM_ALERT_TOOBIG","Filstorlek är för stort; %s är det maximalt tillåtna."); //added 08-08-2006
define("_ZOOM_ALERT_IMGERROR","Problem med att reducera bildstorlek/ skapa minibild.");
define("_ZOOM_ALERT_PCLZIPERROR","Problem uppstod vid uppackning av arkiv.");
define("_ZOOM_ALERT_INDEXERROR","Problem uppstod vid indexering av dokument.");
define("_ZOOM_ALERT_WATERMARKERROR","Problem uppstod vid vattenstämpling av bild.");
define("_ZOOM_ALERT_IMGFOUND","bild(er) hittad(e).");
define("_ZOOM_INFO_CHECKCAT","Vänligen välj ett galleri innan du klickar på ladda upp knappen!");
define("_ZOOM_BUTTON_ADDIMAGES","Lägg till media");
define("_ZOOM_BUTTON_REMIMAGES","Ta bort media");
define("_ZOOM_INFO_PROCESSING","Bearbetar fil:");
define("_ZOOM_ITEMEDIT_TAB1","Egenskaper");
define("_ZOOM_ITEMEDIT_TAB2","Medlemmar");
define("_ZOOM_ITEMEDIT_TAB3","Åtgärder");
define("_ZOOM_USERSLIST_LINE1",">>Välj medlemmar för detta föremål<<");
define("_ZOOM_USERSLIST_ALLOWALL",">>Allmän access<<");
define("_ZOOM_USERSLIST_MEMBERSONLY",">>Endast Medlemmar<<");
define("_ZOOM_PUBLISHED","Publiserad");
define("_ZOOM_SHARED","Delad");
define("_ZOOM_ROTATE","Vänd bilden 90 grader");
define("_ZOOM_CLOCKWISE","medurs");
define("_ZOOM_CCLOCKWISE","moturs");
define("_ZOOM_FLIP_HORIZ","Vänd bild horizontellt");
define("_ZOOM_FLIP_VERT","Vänd bild vertikallt");
define("_ZOOM_PROGRESS_DESCR","Din begäran är under bearbetning... Gå ta en kopp kaffe.");

//Navigation (including Slideshow buttons)
define("_ZOOM_SLIDESHOW","Bildspel:");
define("_ZOOM_PREV_IMG","förra mediet");
define("_ZOOM_NEXT_IMG","nästa medium");
define("_ZOOM_FIRST_IMG","första mediet");
define("_ZOOM_LAST_IMG","sista mediet");
define("_ZOOM_PLAY","spela");
define("_ZOOM_STOP","stopp");
define("_ZOOM_RESET","nollställ");
define("_ZOOM_FIRST","Först");
define("_ZOOM_LAST","Sista");
define("_ZOOM_PREVIOUS","Förra");
define("_ZOOM_NEXT","Nästa");
define("_ZOOM_IN_DESC", "Placera markör över bild och använd piltangenter för att justera zoomintensitet.");

//Gallery actions
define("_ZOOM_SEARCH_BOX","Sök i detta galleri");
define("_ZOOM_ADVANCED_SEARCH","Avancerad sökning");
define("_ZOOM_SEARCH_KEYWORD","Sök på nyckelord");
define("_ZOOM_IMAGES","media");
define("_ZOOM_IMGFOUND","%s medier hittad(e) - du är på sidan %s av %s");
define("_ZOOM_SUBGALLERIES","undergallerier");
define("_ZOOM_ALERT_COMMENTOK","Din kommentar har lagts till!");
define("_ZOOM_ALERT_COMMENTERROR","Du har redan kommenterat denna bild!");
define("_ZOOM_ALERT_VOTE_OK","Din röst har räknats! Tack så mycket.");
define("_ZOOM_ALERT_VOTE_ERROR","Du har redan röstat på denna bild!");
define("_ZOOM_WINDOW_CLOSE","Stäng");
define("_ZOOM_NOPICS","inget media i galleri");
define("_ZOOM_PROPERTIES","Egenskaper");
define("_ZOOM_COMMENTS","Kommentarer");
define("_ZOOM_COMMENTS_INTRO","Skriv dina kommentarer nedan:");

define("_ZOOM_NO_COMMENTS","Inga kommentarer ännu.");
define("_ZOOM_SAYS","säger");
define("_ZOOM_YOUR_NAME","Namn");
define("_ZOOM_ADD","Lägg till");
define("_ZOOM_NAME","Namn");
define("_ZOOM_DATE","Datum tillagt");
define("_ZOOM_UNAME","Tillagt av");
define("_ZOOM_DESCRIPTION","Beskrivning");
define("_ZOOM_IMGNAME","Namn");
define("_ZOOM_FILENAME","Filnamn");
define("_ZOOM_CLICKDOCUMENT","(klicka på filnamn för att öppna dokument)");
define("_ZOOM_KEYWORDS","Nyckelord");
define("_ZOOM_HITS","träffar");
define("_ZOOM_CLOSE","Stäng");
define("_ZOOM_NOIMG", "Inga medier funna!");
define("_ZOOM_NONAME", "Du måste ange ett namn!");
define("_ZOOM_NOCAT", "Inget galleri är valt!");
define("_ZOOM_EDITPIC", "Redigera Medium");
define("_ZOOM_SETCATIMG","Ange som galleribild");
define("_ZOOM_SETPARENTIMG","Ange som galleribild hos Föräldergalleri");
define("_ZOOM_PASS","Lösenord");
define("_ZOOM_PASS_REQUIRED","Detta galleri kräver ett lösenord.<br />Vänligen fyll lösenordsfältet<br />och tryck på Gå knappen. Tack.");
define("_ZOOM_PASS_BUTTON","Gå");
define("_ZOOM_PASS_GALLERY","Lösenord");
define("_ZOOM_PASS_INNCORRECT","Lösenord Felaktig");

//Hotlinking
define("_ZOOM_SETTINGS_HOTLINK","Aktivera Hotlinking skydd av bild");
define("_ZOOM_SETTINGS_HPTOOLTIP","När hotlinking skyddet är aktiverat, kommer filnamn och sökvägar att vara dolda. När en användare försöker använda bilden på en annan sida kommer den inte att visas.");


//Lightbox
define("_ZOOM_LIGHTBOX","Lightbox");
define("_ZOOM_LIGHTBOX_GALLERY","Lightbox detta galleri!");
define("_ZOOM_LIGHTBOX_ITEM","Lightbox detta objekt!");
define("_ZOOM_LIGHTBOX_VIEW","Kolla i din Lightbox");
define("_ZOOM_YOUR_LIGHTBOX","Din Lightbox Innehåller:");
define("_ZOOM_LIGHTBOX_EMPTY","Din Lightbox är tom.");
define("_ZOOM_LIGHTBOX_ZIPBTN","Skapa ZIP-fil");
define("_ZOOM_LIGHTBOX_PLAYLISTBTN","Skapa Spellista &amp; Spela");
define("_ZOOM_LIGHTBOX_CATS","Gallerier");
define("_ZOOM_LIGHTBOX_TITLEDESCR","Titel &amp; Beskrivning");
define("_ZOOM_ACTION","Åtgärd");
define("_ZOOM_LIGHTBOX_ADDED","Objekt tillagt i din lightbox!");
define("_ZOOM_LIGHTBOX_NOTADDED","detta objekt finns redan i din lightbox!");
define("_ZOOM_LIGHTBOX_EDITED","Objekt redigerad!");
define("_ZOOM_LIGHTBOX_NOTEDITED","Problem att redigera objekt!");
define("_ZOOM_LIGHTBOX_DEL","Objekt borttagen från din lightbox!");
define("_ZOOM_LIGHTBOX_NOTDEL","Problem att ta bort objekt från din lightbox!");
define("_ZOOM_LIGHTBOX_NOZIP","Du har redan skapat en Zip-fil av din lightbox eller så innehåller din lightbox inga objekt!");
define("_ZOOM_LIGHTBOX_PARSEZIP","Analyserar bilder från galleri...");
define("_ZOOM_LIGHTBOX_DOZIP","skapar ZIP-fil...");
define("_ZOOM_LIGHTBOX_DLHERE","Du kan nu ladda ned lightboxen");
define("_ZOOM_LIGHTBOX_PLSUCCESS","Spellista skapad! Du måste uppdatera spelarfönstret.");
define("_ZOOM_LIGHTBOX_PLERROR","Problem att skapa Spellista.");
define("_ZOOM_LIGHTBOX_NOAUDIO","Du måste lägga till ljudfiler till din lightbox först!");
define("_ZOOM_LIGHTBOX_NOITEMS","Din Lightbox verkar vara väldigt tom.");

//EXIF information
define("_ZOOM_EXIF","EXIF");
define("_ZOOM_EXIF_SHOWHIDE","Visa/ dölj Metadata");

//MP3 id3 v1.1 or later information
define("_ZOOM_AUDIO_PLAYING","Spelas nu:");
define("_ZOOM_AUDIO_CLICKTOPLAY","Klicka här för att spela denna fil.");
define("_ZOOM_ID3","ID3");
define("_ZOOM_ID3_SHOWHIDE","Visa/ dölj ID3-tag data");
define("_ZOOM_ID3_LENGTH","Längd");
define("_ZOOM_ID3_QUALITY","Kvalitet");
define("_ZOOM_ID3_TITLE","Titel");
define("_ZOOM_ID3_ARTIST","Artist");
define("_ZOOM_ID3_ALBUM","Album");
define("_ZOOM_ID3_YEAR","År");
define("_ZOOM_ID3_COMMENT","Kommentar");
define("_ZOOM_ID3_GENRE","Genre");

//Video metadata information
define("_ZOOM_VIDEO_SHOWHIDE","Visa/ dölj Video data");
define("_ZOOM_VIDEO_PIXELRATIO","Pixelproportion");
define("_ZOOM_VIDEO_QUALITY","Videokvalitet");
define("_ZOOM_VIDEO_AUDIOQUALITY","ljudkvalitet");
define("_ZOOM_VIDEO_CODEC","Codec");
define("_ZOOM_VIDEO_RESOLUTION","Upplösning");

//rating
define("_ZOOM_RATING","Betyg");
define("_ZOOM_NOTRATED","Inte betygsatt ännu!");
define("_ZOOM_VOTE","Rösta");
define("_ZOOM_VOTES","röster");
define("_ZOOM_RATE0","skräp");
define("_ZOOM_RATE1","svag");
define("_ZOOM_RATE2","medel");
define("_ZOOM_RATE3","bra");
define("_ZOOM_RATE4","väldigt bra");
define("_ZOOM_RATE5","perfekt!");

//special
define("_ZOOM_TOPTEN","Topp Tio");
define("_ZOOM_LASTSUBM","Senast skickad");
define("_ZOOM_LASTCOMM","Senast kommenterad");
define("_ZOOM_SEARCHRESULTS","Sökresultat");
define("_ZOOM_TOPRATED","Topp Betyg");

//ecard
define("_ZOOM_ECARD_SENDAS","Skicka detta som ett E-kort till en vän!");
define("_ZOOM_ECARD_YOURNAME","Ditt namn");
define("_ZOOM_ECARD_YOUREMAIL","Din e-postadress");
define("_ZOOM_ECARD_FRIENDSNAME","Din kompis namn");
define("_ZOOM_ECARD_FRIENDSEMAIL","Din kompis e-postadress");
define("_ZOOM_ECARD_MESSAGE","Meddelande");
define("_ZOOM_ECARD_SENDCARD","Skicka E-kort");
define("_ZOOM_ECARD_SUCCESS","Ditt kort har skickats.");
define("_ZOOM_ECARD_CLICKHERE","Klicka här för att se det!");
define("_ZOOM_ECARD_ERROR","Problem att skicka E-kort till");
define("_ZOOM_ECARD_TURN","Kolla på baksidan av detta kort!");
define("_ZOOM_ECARD_TURN2","Kolla på framsidan av detta kort!");
define("_ZOOM_ECARD_SENDER","Skickat till dig från:");
define("_ZOOM_ECARD_SUBJ","Du har mottagit ett E-kort från:");
define("_ZOOM_ECARD_MSG1","har skickat dig ett E-kort från");
define("_ZOOM_ECARD_MSG2","Klicka på länken nedan för att se ditt personliga E-kort!");
define("_ZOOM_ECARD_MSG3","Svara inte på detta meddelande då det är genererat automatiskt.");
define("_ZOOM_ECARD_ECARDEXPIRED","Detta E-kort gäller inte längre.");

//installation-screen
define ('_ZOOM_INSTALL_CREATE_DIR','zOOm Installationen försöker att skapa bildmappen "images/zoom" ...');
define ('_ZOOM_INSTALL_CREATE_DIR_WM','zOOm Installationen försöker skapa bildmappen "images/zoom/watermarks" ...');
define ('_ZOOM_INSTALL_CREATE_DIR_SUCC','klar!');
define ('_ZOOM_INSTALL_CREATE_DIR_FAIL','misslyckad!');
define ('_ZOOM_INSTALL_CREATE_DBASE_SUCC','Databas Skapad!');
define ('_ZOOM_INSTALL_UPGRADED_DBASE_SUCC','Databas uppgraderad!');
define ('_ZOOM_INSTALL_MESS1','Lyckad installation av zOOm Bildgalleri.<br>Du är nu redo för att fylla dina album!');
define ('_ZOOM_INSTALL_MESS2','OBS: det första du ska göra nu, är att gå till componentmenyn ovan,<br>leta efter "zOOm Media Gallery Admin", klicka på den och<br>kolla inställningssidan i Adminsystemet.');
define ('_ZOOM_INSTALL_MESS3','Här kan du ändra alla variabler så att zOOm passar in i din konfiguration.');
define ('_ZOOM_INSTALL_MESS4','Glöm inte att skapa ett galleri och sedan är du på väg...!');
define ('_ZOOM_INSTALL_MESS_FAIL1','zOOM Gallery kunde inte installeras korrekt!');
define ('_ZOOM_INSTALL_MESS_FAIL2','Följande mappar måste skapas och sedan  CHMODas till "0777":<br />'
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
define ('_ZOOM_INSTALL_MESS_FAIL3','När du väl har skapat dessa mappar och ändrat rättigheterna, gå till <br /> "Components -> zOOm Media Gallery" och ändra inställningarna.');
?>