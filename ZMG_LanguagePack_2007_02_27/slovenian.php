<?php
//zOOm Media Gallery//
/** 
-----------------------------------------------------------------------
|  zOOm Media Gallery! by Mike de Boer - a multi-gallery component    |
-----------------------------------------------------------------------

-----------------------------------------------------------------------
|                                                                     |
| Author: Mike de Boer, <http://www.mikedeboer.nl>                    |
| Copyright: copyright (C) 2007 by Mike de Boer                       |
| Description: zOOm Media Gallery, a multi-gallery component for      |
|              Joomla!. It's the most feature-rich gallery component  |
|              for Joomla!! For documentation and a detailed list     |
|              of features, check the zOOm homepage:                  |
|              http://www.zoomfactory.org                             |
| License: GPL                                                        |
| Filename: slovenian.php                                               |
|                                                                     |
-----------------------------------------------------------------------
* @version $Id: slovenian.php 106 2007-02-12 22:30:30Z Gregor@Klemen $
* @package zOOm Media Gallery
* @author Mike de Boer <mailme@mikedeboer.nl> 
**/
// MOS Intruder Alerts
defined( '_VALID_MOS' ) or die( 'Direktni dostop ni dovoljen.' );
//Language translation
define("_ZOOM_DATEFORMAT","%d.%m.%Y %H:%M"); // use the PHP strftime Format, more info at http://www.php.net
define("_ZOOM_ISO","UTF-8");
define("_ZOOM_PICK","Izberi galerijo");
define("_ZOOM_DELETE","Izbriši");
define("_ZOOM_BACK","Nazaj");
define("_ZOOM_MAINSCREEN","Domov");
define("_ZOOM_BACKTOGALLERY","Nazaj na galerijo");
define("_ZOOM_INFO_DONE","Narejeno!");
define("_ZOOM_TOOLTIP", "zOOm Namig");
define("_ZOOM_WARNING", "zOOm Opozorilo!");

//Gallery admin page
define("_ZOOM_ADMINSYSTEM","Admin Sistem");		
define("_ZOOM_USERSYSTEM","Uporabniški Sistem");		
define("_ZOOM_ADMIN_TITLE","Slikovna galerija Admin Sistem");		
define("_ZOOM_USER_TITLE","Slikovna galerija Uporabniški Sistem");		
define("_ZOOM_CATSMGR","Upravitelj galerije");		
define("_ZOOM_CATSMGR_DESCR","Kreiranje albumov (galerij), ustvarjanje in brisanje.");		
define("_ZOOM_SETTINGS_DDONOF","Omogoči povleci in spusti");
define("_ZOOM_NEW","Nov album");		
define("_ZOOM_DEL","Izbriši album");
define("_ZOOM_ORDERSAVE", "Red shranjevanja");		
define("_ZOOM_MEDIAMGR","Upravitelj slik");
define("_ZOOM_MEDIAMGR_DESCR","Urejanje, brisanje, avtomatsko skeniranje slik in ročno nalaganje slik.");	
define("_ZOOM_THUMB", "Zoom Thumb Kodirnik");
define("_ZOOM_THUMB_DESCR", "Compute your Zoom Thumb codes easily");			
define("_ZOOM_UPLOAD","Nalaganje datotek");		
define("_ZOOM_EDIT","Uredi album");		
define("_ZOOM_ADMIN_CREATE","Kreiraj bazo");		
define("_ZOOM_ADMIN_CREATE_DESCR","Kreiraj bazo, da lahko začneš uporabljati album.");		
define("_ZOOM_HD_PREVIEW","Predogled");		
define("_ZOOM_HD_CHECKALL","Označi/Odznači vse");		
define("_ZOOM_HD_CREATEDBY","Ustvaril");		
define("_ZOOM_HD_AFTER","Vnesi kasneje");		
define("_ZOOM_HD_HIDEMSG","Skrij 'no media' tekst");		
define("_ZOOM_HD_NAME","Imenuj album");		
define("_ZOOM_HD_DIR","Direktorij");		
define("_ZOOM_HD_NEW","Nov album");		
define("_ZOOM_HD_SHARE","Skupna raba tega albuma");		
define("_ZOOM_SHARE","Deli z drugimi");		
define("_ZOOM_UNSHARE","Prenehaj z delitvijo z drugimi");		
define("_ZOOM_PUBLISH","Objavi");		
define("_ZOOM_UNPUBLISH","Od-javi");		
define("_ZOOM_TOPLEVEL","Zgornja raven");		
define("_ZOOM_HD_UPLOAD","Naloži datoteko");		
define("_ZOOM_A_ERROR_ERRORTYPE","Napaka tip");		
define("_ZOOM_A_ERROR_IMAGENAME","Ime slike");		
define("_ZOOM_A_ERROR_NOFFMPEG","<u>FFmpeg</u> ni najdena");		
define("_ZOOM_A_ERROR_NOPDFTOTEXT","<u>PDFtoText</u> ni najden");		
define("_ZOOM_A_ERROR_NOTINSTALLED","Ni inštalirano");		
define("_ZOOM_A_ERROR_CONFTODB","Napaka pri shranjevanju nastavitev v bazo.");		
define("_ZOOM_A_MESS_NOT_SHURE","* Če niste sigurni, uporabite možnost \"auto\" ");		
define("_ZOOM_A_MESS_SAFEMODE1","Opomba: \"Varni način\" je aktivirano, zato nalaganje velikih datotek mogoče ne bo možno!<br /> Lahko uporabite možnost nalaganja prek FTP-ja (v Admin sistemu).");		
define("_ZOOM_A_MESS_SAFEMODE2","Opomba: \"Varni način\" je aktivirano, zato nalaganje velikih datotek mogoče ne bo možno!<br /> Zoom priporoča možnost nalaganja prek FTP-ja (v Admin sistemu).");		
define("_ZOOM_A_MESS_PROCESSING_FILE","Obdelujem datoteko...");		
define("_ZOOM_A_MESS_NOTOPEN_URL","Ne morem odpreti url:");		
define("_ZOOM_A_MESS_PARSE_URL","Preiskujem \"%s\", iščem slike... "); // %s = $url		
define("_ZOOM_A_MESS_NOJAVA","Če je polje sivo ali če imate probleme pri nalaganju, mogoče<br />nimate naložen java run-time. Obiščite <a href=\"http://www.java.com\" target=\"_blank\">Java.com</a> <br /> in naložite zadnjo verzijo.");		
define("_ZOOM_SETTINGS","Nastavitve");		
define("_ZOOM_SETTINGS_DESCR","Tu lahko pregledate in določite vse nastavitve Zoom galerije.");		
define("_ZOOM_SETTINGS_TAB1","Sistem");		
define("_ZOOM_SETTINGS_TAB2","Medij");		
define("_ZOOM_SETTINGS_TAB3","Izgled");
define("_ZOOM_SETTINGS_TAB4","Postavitev");
define("_ZOOM_SETTINGS_TAB5","Vodnižig");		
define("_ZOOM_SETTINGS_TAB6","Varni način");				
define("_ZOOM_SETTINGS_TAB7","Dostopnost");
define("_ZOOM_SETTINGS_TAB8","Reset");
define("_ZOOM_SETTINGS_ERASE","Kliknite za izbris vseh podatkov zoom galerije. Ta funkcija povrne vse prvotne nastavitve in izbriše vse slike.");				
define("_ZOOM_SETTINGS_CONVTYPE","Knjižnica za pretvorbo");				
define("_ZOOM_SETTINGS_GALLERY_FEATURES","Nastavitve pogleda galerije");
define("_ZOOM_SETTINGS_VIEW_FEATURES","Nastavitve pogleda slik");

define("_ZOOM_SETTINGS_GALLERY","Pogled galerija");
define("_ZOOM_SETTINGS_VIEW","Pogled slike");

define("_ZOOM_SETTINGS_GENERAL_FEATURES","Splošne nastavitve");
define("_ZOOM_SETTINGS_AUTODET","Auto-odkrita: ");				
define("_ZOOM_SETTINGS_IMGPATH","Pot do slik:");				
define("_ZOOM_SETTINGS_TTIMGPATH","Trenutna pot do slik je ");				
define("_ZOOM_SETTINGS_CONVSETTINGS","Pretvorba slik - nastavitve:");				
define("_ZOOM_SETTINGS_IMPATH","Pot do ImageMagick: ");				
define("_ZOOM_SETTINGS_NETPBMPATH"," ali NetPBM: ");				
define("_ZOOM_SETTINGS_FFMPEGPATH","Pot do FFmpeg");				
define("_ZOOM_SETTINGS_FFMPEGTOOLTIP","FFmpeg je potreben za ustvarjanje sličic.<br />Podprti podaljški so: ");				
define("_ZOOM_SETTINGS_OVERRIDE_FFMPEG","Uporabi FFmpeg, če tudi zOOm ne more preveriti njegovega obstoja na tem sistemu.");
define("_ZOOM_SETTINGS_PDFTOTEXTPATH","Pot do PDFtoText");				
define("_ZOOM_SETTINGS_XPDFTOOLTIP","pdf2text, ki je del paketa Xpdf, je potreben za PDF indeksiranje datotek.");				
define("_ZOOM_SETTINGS_OVERRIDE_PDF","Uporabi PDFtoText,  če tudi zOOm ne more preveriti njegovega obstoja na tem sistemu.");
define("_ZOOM_SETTINGS_MAXSIZE","Slika max. velikost: ");				
define("_ZOOM_SETTINGS_MAXSIZEKB","Mediji - vključno s slikami - max. velikost (v kB): "); //added: 08-08-2006
define("_ZOOM_SETTINGS_MAXSIZEKB_WARNING","The upload limit of this server, set by you ISP as part of the PHP configuration, is %s.<br />Thus, setting the limit higher than this value will have NO use!"); //added: 09-01-2006
define("_ZOOM_SETTINGS_THUMBSETTINGS","Slikice (thumbnail) - nastavitve:");				
define("_ZOOM_SETTINGS_QUALITY","NetPBM in GD2 JPEG kakovost: ");				
define("_ZOOM_SETTINGS_SIZE","Slikica (Thumbnail) max. velikost: ");				
define("_ZOOM_SETTINGS_TEMPNAME","Začasno ime: ");				
define("_ZOOM_SETTINGS_AUTONUMBER","avtomatsko številčenje imen slik (npr. 1,2,3)");				
define("_ZOOM_SETTINGS_TEMPDESCR","Začasni opis: ");				
define("_ZOOM_SETTINGS_TITLE","Ime albuma:");				
define("_ZOOM_SETTINGS_SUBCATSPG","Število. stolpcev (pod-)albumov ");				
define("_ZOOM_SETTINGS_COLUMNS","Število. stolpcev slikic ");				
define("_ZOOM_SETTINGS_THUMBSPG","Slikic na strani");				
define("_ZOOM_SETTINGS_CMTLENGTH","maksimalna dolžina komentarjev");				
define("_ZOOM_SETTINGS_CHARS","črke");				
define("_ZOOM_SETTINGS_GALLERYPREFIX","Ime galerije - predpona");				
define("_ZOOM_SETTINGS_SHOWOCCSPACE","Prikaži zaseden prostor v Media Managerju");				
define("_ZOOM_SETTINGS_TEMPLATE_TITLE","Predloga");
define("_ZOOM_SETTINGS_FEATURES_TITLE","Lastnosti ON/ OFF");				
define("_ZOOM_SETTINGS_CSS_TITLE","Uredi izgled");				
define("_ZOOM_SETTINGS_DISPLAY_TITLE","Prikaži podatke ON/ OFF");				
define("_ZOOM_SETTINGS_TEMPLATE_CHOOSE","Izberi predlogo in definiraj izgled &amp; svoje galerije");
define("_ZOOM_SETTINGS_TEMPLATE_TABLES","Klasično (s tabelami)");
define("_ZOOM_SETTINGS_TEMPLATE_TABLELESS","Moderno (brez tabel)");
define("_ZOOM_SETTINGS_COMMENTS","Komentarji");				
define("_ZOOM_SETTINGS_POPUP","PopUp slike");				
define("_ZOOM_SETTINGS_CATIMG","Pokaži kategorijo slike");				
define("_ZOOM_SETTINGS_SLIDESHOW","Predstavitev");				
define("_ZOOM_SETTINGS_ZOOMLOGO","Prikaži zOOm-logo");	
define("_ZOOM_SETTINGS_DESCRINGAL","Pokaži opis albuma v galeriji");
			
define("_ZOOM_SETTINGS_SHOWHITS","Prikaži število klikov");				
define("_ZOOM_SETTINGS_READEXIF","Beri EXIF-podatke");				
define("_ZOOM_SETTINGS_EXIFTOOLTIP","Ta možnost bo prikazala dodatne EXIF in ostale IPTC podatke, brez potrebe po namestitvi EXIF modula za PHP.");				
define("_ZOOM_SETTINGS_READID3","Beri mp3 ID3-podatke");				
define("_ZOOM_SETTINGS_ID3TOOLTIP","Ta možnost bo prikazala dodatne ID3 v1.1 i v2.0 podatke v zvezi z mp3 datotekami.");				
define("_ZOOM_SETTINGS_RATING","Ocena");				
define("_ZOOM_SETTINGS_CSS","Stilska predloga popup okno");				
define("_ZOOM_SETTINGS_CSSZOOM","zOOm galerija &amp; pregled medijev");				
define("_ZOOM_SETTINGS_SUCCESS","Nastavitve uspešno osvežene!");				
define("_ZOOM_SETTINGS_ZOOMING","Zoom slike");				
define("_ZOOM_SETTINGS_ORDERBY","Metoda ureditve slikic; uredi po");				
define("_ZOOM_SETTINGS_CATORDERBY","Metoda ureditve (pod-)Albuma; uredi po");
				
define("_ZOOM_SETTINGS_NO_POP","Izključi vsa pojavna sporočila");
define("_ZOOM_SETTINGS_STANDARD_POP","Standardni Popupi");
define("_ZOOM_SETTINGS_LIGHTBOX_POP","Lightbox JS Popupi");
define("_ZOOM_SETTINGS_LIGHTBOX_SLIDESHOW","<strong><i>TURN THIS ON IF YOU WANT SLIDESHOWS TO WORK WITH LIGHTBOX JS</i></strong>");

define("_ZOOM_SETTINGS_DATE_ASC","Datum, naraščajoče");				
define("_ZOOM_SETTINGS_DATE_DESC","Datum, padajoče");				
define("_ZOOM_SETTINGS_FLNM_ASC","Ime datoteke, naraščajoče");				
define("_ZOOM_SETTINGS_FLNM_DESC","Ime datoteke, padajoče");				
define("_ZOOM_SETTINGS_NAME_ASC","Ime, naraščajoče");				
define("_ZOOM_SETTINGS_NAME_DESC","Ime, padajoče");				
define("_ZOOM_SETTINGS_LBTOOLTIP","Osebnai album je kot nakupovalni voziček, v katerega zbirate slike. Kasneje jih lahko prenesete v ZIP obliki na vaš računalnik.");
define("_ZOOM_SETTINGS_SHOWNAME","Prikaži ime");
define("_ZOOM_SETTINGS_SHOWDESCR","Prikaži opis");
define("_ZOOM_SETTINGS_SHOWKEYWORDS","Prikaži ključne besede");
define("_ZOOM_SETTINGS_SHOWDATE","Prikaži datum");
define("_ZOOM_SETTINGS_SHOWUNAME","Prikaži uporabniško ime");
define("_ZOOM_SETTINGS_SHOWFILENAME","Prikaži ime datoteke");
define("_ZOOM_SETTINGS_METABOX","Prikaži lebdeće polje s podrobnostmi o straneh albuma.");				
define("_ZOOM_SETTINGS_METABOXTOOLTIP","Odznači to možnost za povečanje hitrosti, predvsem pri večjih bazah podatkov.");
define("_ZOOM_SETTINGS_ECARDS","E-razglednice");
define("_ZOOM_SETTINGS_ECARDS_LIFETIME","E-razglednice življenska doba");
define("_ZOOM_SETTINGS_ECARDS_ONEWEEK","en teden");
define("_ZOOM_SETTINGS_ECARDS_TWOWEEKS","dva tedna");
define("_ZOOM_SETTINGS_ECARDS_ONEMONTH","en mesec");
define("_ZOOM_SETTINGS_ECARDS_THREEMONTHS","tri mesece");
define("_ZOOM_SETTINGS_SHOWSEARCH","Iskalno polje na vseh straneh");
define("_ZOOM_SETTINGS_BOX_ANIMATE","Animiraj");
define("_ZOOM_SETTINGS_BOX_PROPERTIES","Lastnosti box visual state");
define("_ZOOM_SETTINGS_BOX_META","Metadata box vidno stanje");
define("_ZOOM_SETTINGS_BOX_COMMENTS","Komentar box vidno stanje");
define("_ZOOM_SETTINGS_BOX_RATING","Ocene vidno stanje");
define("_ZOOM_SETTINGS_TOPTEN","Prikaži povezavo \"najboljših deset\" na glavni strani");
define("_ZOOM_SETTINGS_LASTSUBM","Prikaži povezavo \"zadnji posredovani mediji\" na glavni strani");
define("_ZOOM_SETTINGS_SETMENUOPTION","Prikaži povezavo 'nalaganje slik' v meniju uporabnika");
define("_ZOOM_SETTINGS_USEFTP","Uporabi FTP možnost?");
define("_ZOOM_SETTINGS_FTPHOST","Host ime");
define("_ZOOM_SETTINGS_FTPUNAME","Ime uporabnika");
define("_ZOOM_SETTINGS_FTPPASS","Geslo");
define("_ZOOM_SETTINGS_FTPWARNING","Opozorilo: Geslo ni najbolj sigurno shranjeno!");
define("_ZOOM_SETTINGS_FTPHOSTDIR","Direktorij na gostitelju");	
define("_ZOOM_SETTINGS_MESS_FTPHOSTDIR","TU vpišite pot do Mamba od vašega FTP root-a. VAŽNO: Končaj <b>brez</b> poševnice!");
define("_ZOOM_SETTINGS_GROUP","Skupina");				
define("_ZOOM_SETTINGS_PRIV_DESCR","Lahko spreminjaš dovoljenja vsake skupine poznane in s tem spreminjaš dovoljenja
    vsakega posameznika v skupini!<br />				
    Uporabnik lahko v teoriji: nalaga, ureja / briše medije, ustvarja/ureja/briše galerije.<br />
    Kaj lahko in česa ne more je odvisno od tebe.");				
define("_ZOOM_SETTINGS_CLOSE","Display \"Close\" link in popup");				
define("_ZOOM_SETTINGS_MAINSCREEN","Display Mainscreen link in navigation breadcrumb");				
define("_ZOOM_SETTINGS_NAVBUTTONS","Display Navigation buttons in popup");				
define("_ZOOM_SETTINGS_PROPERTIES","Prikaži lastnosti pod medijem");				
define("_ZOOM_SETTINGS_MEDIAFOUND","Display \"Media Found\" text in gallery");
define("_ZOOM_SETTINGS_ANONYMOUS_COMMENTS","Dovoli komentiranje neprijavljenim");
define("_ZOOM_SETTINGS_WM_ENABLE_TITLE","Omogoči lastnost");
define("_ZOOM_SETTINGS_WM_TITLE", "Tvoj vodni žig");
define("_ZOOM_SETTINGS_WM_DESCR", "Tvoj vodni žig se pojavi na vrhu tvoje slike na tej internetni strani. "
 . "Slika bo še vedno vidna le obiskovalci je ne bodo mogli kopirati ali natisniti."
 . "<br /><br />Predlog: Za vodni žig lahko uporabiš svoj logotip. "
 . "Prepričaj se da je ozadje vodnega žiga nastavljeno na prosojno!");
define("_ZOOM_SETTINGS_WM_IMG", "Slika");
define("_ZOOM_SETTINGS_WM_NOWATERMARKS", "Ni vodnega žiga. Spodaj lahko naložiš nov vodni žig.");
define("_ZOOM_SETTINGS_WM_PLACEMENT_TITLE", "Postavitev");
define("_ZOOM_SETTINGS_WM_PLACEMENT_DESCR", "Pozicijo vodnega žiga na sliki lahko določiš z"
 . "označitvijo ene od pozicij v sivem okvirčku spodaj.");
define("_ZOOM_SETTINGS_WM_FILE","Naloži vodni žig");
define("_ZOOM_SETTINGS_WM_UPLOAD_SUCCESS","Vodni žig uspršno naložen");
define("_ZOOM_SETTINGS_WM_UPLOAD_FAIL","Nalaganje vodnega žiga ni bilo uspešno !");
define("_ZOOM_SETTINGS_WM_DEL_SUCCESS","Vodni žig izbrisan!");
define("_ZOOM_SETTINGS_WM_DEL_FAIL","Vodnega žiga ni mogoče izbrisati.");				
define("_ZOOM_SYSTEM_TITLE","Konfiguracija sistema");				
define("_ZOOM_YES","Da");				
define("_ZOOM_NO","Ne");				
define("_ZOOM_VISIBLE","vidno");				
define("_ZOOM_HIDDEN","skrito");				
define("_ZOOM_SAVE","Shrani");				
define("_ZOOM_MOVEFILES","Prestavi ");				
define("_ZOOM_BUTTON_MOVE","Prestavi");				
define("_ZOOM_MOVEFILES_STEP1","Korak 1: Izberi izvorni album");				
define("_ZOOM_ALERT_MOVEOK","Slika uspešno prestavljena!");				
define("_ZOOM_OPTIMIZE","Optimiraj tabelo");				
define("_ZOOM_OPTIMIZE_DESCR","zOOm Media Galerija uporablja veliko tabel in pri tem ustvarja nekatere nepotrebne podatke. Kliknite tu za optimiranje podatkov.");				
define("_ZOOM_OPTIMIZE_SUCCESS","zOOm Media Gallerija - tabela optimirana!");				
define("_ZOOM_UPDATE","Ažuriranje zOOm Media Galerije");				
define("_ZOOM_UPDATE_DESCR","Dodajte nove možnosti! Preverite <a href=\"http://zoom.ummagumma.nl\" target=\"_blank\">zoom.ummagumma.nl</a> za zadnjo verzijo!");				
define("_ZOOM_UPDATE_XMLDATE","Datum zadnje nadgradnje");				
define("_ZOOM_UPDATE_XMLDATE","Datum zadnjega ažuriranja");				
define("_ZOOM_UPDATE_PACKAGE","Ažuriranje ZIP-datoteke: ");				
define("_ZOOM_CREDITS","O zOOm Media Galeriji ");				

//Image actions
define("_ZOOM_DISKSPACEUSAGE","Uporabljenaga je %sprostora na trdem disku");
define("_ZOOM_UPLOAD_SINGLE","posamično (ZIP-)");
define("_ZOOM_UPLOAD_MULTIPLE","več datotek");
define("_ZOOM_UPLOAD_DRAGNDROP","Povleci in spusti");
define("_ZOOM_UPLOAD_SCANDIR","Skeniraj direktorij");
define("_ZOOM_UPLOAD_INTRO","Kliknite gumb <b>Browse</b>, da določite datoteke za nalaganje.");
define("_ZOOM_UPLOAD_STEP1","1. Izberite število datotek za nalaganje: ");
define("_ZOOM_UPLOAD_STEP2","2. Izberite album, v katerega želite poslati datoteke: ");
define("_ZOOM_UPLOAD_STEP3","3. Uporabite gumb Browse,  da bi našli datoteke na vašem računalniku.");
define("_ZOOM_SCAN_STEP1","Step 1: izberite lokacijo skeniranja...");
define("_ZOOM_SCAN_STEP2","Step 2: izberite datoteke za nalaganje...");
define("_ZOOM_SCAN_STEP3","Step 3: zOOm obdeluje izbrane datoteke...");
define("_ZOOM_SCAN_STEP1_DESCR","Lokacija je lahko naslov URL ili direktorij na strežniku.<br />&nbsp;   Nasvet: Naloži datoteke na strežnik in nato tu podaj pot do njih.");
define("_ZOOM_SCAN_STEP2_DESCR1","Obdelava");
define("_ZOOM_SCAN_STEP2_DESCR2","kot lokalni direktorij");
define("_ZOOM_FORMCREATE_NAME","Ime");
define("_ZOOM_FORM_IMAGEFILE","Slika");
define("_ZOOM_FORM_IMAGEFILTER","podprti tipi medijev");
define("_ZOOM_FORM_INGALLERY","V album");
define("_ZOOM_FORM_SETFILENAME","Nastavi imena slik tako, kot so originalna imena. ");
define("_ZOOM_FORM_IGNORESIZES","Ignoriraj prednastavljeno vrednost maksimalne velikosti slike"); //added: 12-08
define("_ZOOM_FORM_LOCATION","Lokacija");
define("_ZOOM_BUTTON_SCAN","Pošljite URL ali direktorij");
define("_ZOOM_BUTTON_UPLOAD","Nalaganje");
define("_ZOOM_BUTTON_EDIT","Uredi");
define("_ZOOM_BUTTON_CREATE","Ustvari");
define("_ZOOM_CONFIRM_WIPE","WARNING!\\n Zagon te funkcije izbriše vse nastavitve slike in galerije.\\n\\n Ali si prepričan da želiš nadaljevati?");
define("_ZOOM_CONFIRM_DEL","Ta možnost bo popolnoma izbrisala album, vključno s slikami.\\nŽelite nadaljevati?");
define("_ZOOM_CONFIRM_DELMEDIUM","Popolnoma boste izbrisali sliko.\\nŽelite nadaljevati?");
define("_ZOOM_ALERT_DEL","Album izbrisan!");
define("_ZOOM_ALERT_NOCAT","Album ni izbran!");
define("_ZOOM_ALERT_NOMEDIA","Slika ni izbrana!");
define("_ZOOM_ALERT_EDITOK","Polje albuma je uspešno urejeno!");
define("_ZOOM_ALERT_NEWGALLERY","Novi album ustvarjen.");
define("_ZOOM_ALERT_NONEWGALLERY","Novi album ni ustvarjen.!");
define("_ZOOM_ALERT_EDITIMG","Nastavitve slik uspešno urejene.");
define("_ZOOM_ALERT_DELPIC","Slika uspešno izbrisana.");
define("_ZOOM_ALERT_NODELPIC","Sliko je nemogoče izbrisati!");
define("_ZOOM_ALERT_MOVEFAILURE","Slike ni mogoče premekniti."); //added: 08-08-2006
define("_ZOOM_ALERT_NOPICSELECTED","Slika ni izbrana.");
define("_ZOOM_ALERT_NOPICSELECTED_MULT","Nobena slika ni izbrana.");
define("_ZOOM_ALERT_UPLOADOK","Slika uspešno poslana!");
define("_ZOOM_ALERT_UPLOADSOK","Slika uspešno poslana!");
define("_ZOOM_ALERT_WRONGFORMAT","Format slike ni ustrezen.");
define("_ZOOM_ALERT_WRONGFORMAT_MULT","Napačen format.");
define("_ZOOM_ALERT_TOOBIG","Velikost medija je prevelika; %s je največji maksimum."); //added 08-08-2006
define("_ZOOM_ALERT_IMGERROR","Napaka pri določanju velikosti slike/ ustvarjanju slikice.");
define("_ZOOM_ALERT_PCLZIPERROR","Napaka pri odarhiviranju.");
define("_ZOOM_ALERT_INDEXERROR","Napaka pri indeksiranju dokumenta.");
define("_ZOOM_ALERT_WATERMARKERROR","Error pri dodajanju vodnega žiga.");
define("_ZOOM_ALERT_IMGFOUND","slika najdena.");
define("_ZOOM_INFO_CHECKCAT","Prosim, izberite album pred pritiskom na gumb Naloži. ");
define("_ZOOM_BUTTON_ADDIMAGES","Dodaj sliko");
define("_ZOOM_BUTTON_REMIMAGES","Umakni medij");
define("_ZOOM_INFO_PROCESSING","Obdelava datoteke:");
define("_ZOOM_ITEMEDIT_TAB1","Lastnosti");
define("_ZOOM_ITEMEDIT_TAB2","Člani");
define("_ZOOM_ITEMEDIT_TAB3","Dejanja");
define("_ZOOM_USERSLIST_LINE1",">>Izberi člane tega elementa<<");
define("_ZOOM_USERSLIST_ALLOWALL",">>Javni pristop<<");
define("_ZOOM_USERSLIST_MEMBERSONLY",">>Samo člani<<");
define("_ZOOM_PUBLISHED","Objavljeno");
define("_ZOOM_SHARED","Deljeno");
define("_ZOOM_ROTATE","Rotacija slike za 90 stopinj");
define("_ZOOM_CLOCKWISE","v smeri urinega kazalca ");
define("_ZOOM_CCLOCKWISE","nasprotno smeri urinega kazalca");
define("_ZOOM_FLIP_HORIZ","Zrcali sliko horizontalno");
define("_ZOOM_FLIP_VERT","Zrcali sliko vertikalno");
define("_ZOOM_PROGRESS_DESCR","Vaša zahteva je v obdelavi... prosim bodite potrpežljivi.");

//Navigation (including Slideshow buttons)
define("_ZOOM_SLIDESHOW","Prezentacija - Slideshow:");
define("_ZOOM_PREV_IMG","prejšnja slika");
define("_ZOOM_NEXT_IMG","naslednja slika");
define("_ZOOM_FIRST_IMG","prva slika");
define("_ZOOM_LAST_IMG","zadnja slika");
define("_ZOOM_PLAY","začni");
define("_ZOOM_STOP","stop");
define("_ZOOM_RESET","na začetek");
define("_ZOOM_FIRST","Prva");
define("_ZOOM_LAST","Zadnja");
define("_ZOOM_PREVIOUS","Prejšnja");
define("_ZOOM_NEXT","Naslednja");
define("_ZOOM_IN_DESC", "Pomaknite se z miško nad sliko in pritisnite tipki GOR ali DOL.");

//Gallery actions
define("_ZOOM_SEARCH_BOX","Hitro iskanje...");
define("_ZOOM_ADVANCED_SEARCH","napredno iskanje");
define("_ZOOM_SEARCH_KEYWORD","Iskanje po ključnih besedah");
define("_ZOOM_IMAGES","slik");
define("_ZOOM_IMGFOUND","najdeno- Ste na strani");
define("_ZOOM_SUBGALLERIES","pod-galerija");
define("_ZOOM_ALERT_COMMENTOK","Vaš komentar je uspešno vnesen!");
define("_ZOOM_ALERT_COMMENTERROR","Tu ste že oddali svoj komentar!");
define("_ZOOM_ALERT_VOTE_OK","Hvala. Vaš glas smo prišteli.");
define("_ZOOM_ALERT_VOTE_ERROR","Za to sliko ste že glasovali!");
define("_ZOOM_WINDOW_CLOSE","Zapri");
define("_ZOOM_NOPICS","V tem albumu ni slik");
define("_ZOOM_PROPERTIES","Lastnosti");
define("_ZOOM_COMMENTS","Komentarji");
define("_ZOOM_COMMENTS_INTRO","Spodaj vpiši svoj komentar:");

define("_ZOOM_NO_COMMENTS","Ni vnesenih komentarjev.");
define("_ZOOM_SAYS","povej");
define("_ZOOM_YOUR_NAME","Ime");
define("_ZOOM_ADD","Dodaj");
define("_ZOOM_NAME","Ime");
define("_ZOOM_DATE","Dodano dne:");
define("_ZOOM_UNAME","Dodal");
define("_ZOOM_DESCRIPTION","Opis");
define("_ZOOM_IMGNAME","Ime");
define("_ZOOM_FILENAME","Ime datoteke");
define("_ZOOM_CLICKDOCUMENT","(klikni na datoteko za odpiranje dokumenta)");
define("_ZOOM_KEYWORDS","Ključne besede");
define("_ZOOM_HITS","Pogledov");
define("_ZOOM_CLOSE","zapri");
define("_ZOOM_NOIMG", "Slika ni najdena!");
define("_ZOOM_NONAME", "Vnesti morate ime!");
define("_ZOOM_NOCAT", "Izbrati morate kategorijo!");
define("_ZOOM_EDITPIC", "Uredi sliko");
define("_ZOOM_SETCATIMG","Določi sliko albuma");
define("_ZOOM_SETPARENTIMG","Določi kot sliko albuma od starševskega (PARENT) albuma");
define("_ZOOM_PASS","Geslo");
define("_ZOOM_PASS_REQUIRED","Ta album zahteva geslo.<br />Prosim, da ga vnesete <br />in pritisnete gumb Začni. Hvala.");
define("_ZOOM_PASS_BUTTON","Začni");
define("_ZOOM_PASS_GALLERY","Geslo");
define("_ZOOM_PASS_INNCORRECT","Napačno geslo");

//Hotlinking
define("_ZOOM_SETTINGS_HOTLINK","Omogoči zaščito slik Hotlinking");
define("_ZOOM_SETTINGS_HPTOOLTIP","Ko je hotlink zaščita omogočena, bodo imena datotek in poti do datotek skrite. Če tudi bo uporabnik želel uporabiti sliko na drugi strani to ne bo mogoče.");


//Lightbox
define("_ZOOM_LIGHTBOX","Osebni album");
define("_ZOOM_LIGHTBOX_GALLERY","Dodaj ta album v osebni album!");
define("_ZOOM_LIGHTBOX_ITEM","Dodaj ta element v osebni album!");
define("_ZOOM_LIGHTBOX_VIEW","Poglej v svoj osebni album");
define("_ZOOM_YOUR_LIGHTBOX","Vsebina vašega osebnega albuma:");
define("_ZOOM_LIGHTBOX_EMPTY","Osebni album je trenutno prazen.");
define("_ZOOM_LIGHTBOX_ZIPBTN","Ustvari ZIP-datoteko");
define("_ZOOM_LIGHTBOX_PLAYLISTBTN","Ustvari seznam in predvajaj");
define("_ZOOM_LIGHTBOX_CATS","Album");
define("_ZOOM_LIGHTBOX_TITLEDESCR","Ime & Opis");
define("_ZOOM_ACTION","Akcija");
define("_ZOOM_LIGHTBOX_ADDED","Element uspešno dodan v vaš osebni album!");
define("_ZOOM_LIGHTBOX_NOTADDED","Napaka pri vnosu v osebni album!");
define("_ZOOM_LIGHTBOX_EDITED","Element uspešno vnesen!");
define("_ZOOM_LIGHTBOX_NOTEDITED","Napaka pri urejanju elementa!");
define("_ZOOM_LIGHTBOX_DEL","Element uspešno umaknjen iz vašega osebnega albuma!");
define("_ZOOM_LIGHTBOX_NOTDEL","Napaka pri umikanju elementa iz vašega osebnega albuma!");
define("_ZOOM_LIGHTBOX_NOZIP","Ste že ustvarili ZIP-datoteko iz vašega osebnega albuma ali pa v njem ni elementov!");
define("_ZOOM_LIGHTBOX_PARSEZIP","Obdelava slike iz albuma...");
define("_ZOOM_LIGHTBOX_DOZIP","ustvarjanje ZIP-datoteke...");
define("_ZOOM_LIGHTBOX_DLHERE","Zdaj lahko prenesete vsebino vašega osebnega albuma");
define("_ZOOM_LIGHTBOX_PLSUCCESS","Seznam uspešno ustvarjen! Osvežiti je potrebno okno za predvajanje.");
define("_ZOOM_LIGHTBOX_PLERROR","Napaka pri ustvarjanju seznama.");
define("_ZOOM_LIGHTBOX_NOAUDIO","Najprej moraš dodati audio datoteke v svoj osebni album!");
define("_ZOOM_LIGHTBOX_NOITEMS","Izgleda, da je vaš osebni album prazen.");

//EXIF information
define("_ZOOM_EXIF","EXIF");
define("_ZOOM_EXIF_SHOWHIDE","Prikaži/ skrij Meta podatke");

//MP3 id3 v1.1 or later information
define("_ZOOM_AUDIO_PLAYING","Trenutno predvaja:");
define("_ZOOM_AUDIO_CLICKTOPLAY","Klikni tu za prikaz te datoteke.");
define("_ZOOM_ID3","ID3");
define("_ZOOM_ID3_SHOWHIDE","Prikaži/ skrij ID3-tag podatke");
define("_ZOOM_ID3_LENGTH","Dolžina");
define("_ZOOM_ID3_QUALITY","Kvaliteta");
define("_ZOOM_ID3_TITLE","Ime");
define("_ZOOM_ID3_ARTIST","Izvajalec");
define("_ZOOM_ID3_ALBUM","Album");
define("_ZOOM_ID3_YEAR","Leto");
define("_ZOOM_ID3_COMMENT","Komentarji");
define("_ZOOM_ID3_GENRE","Vrsta");

//Video metadata information
define("_ZOOM_VIDEO_SHOWHIDE","Prikaži/skrij video podatke");
define("_ZOOM_VIDEO_PIXELRATIO","Razmerje pik");
define("_ZOOM_VIDEO_QUALITY","Kvaliteta videa");
define("_ZOOM_VIDEO_AUDIOQUALITY","Kvaliteta zvoka");
define("_ZOOM_VIDEO_CODEC","Kodek");
define("_ZOOM_VIDEO_RESOLUTION","Resolucija");

//rating
define("_ZOOM_RATING","Ocene");
define("_ZOOM_NOTRATED","Še ni ocenjeno!");
define("_ZOOM_VOTE","glasuj");
define("_ZOOM_VOTES","glasov");
define("_ZOOM_RATE0","smeti");
define("_ZOOM_RATE1","slabo");
define("_ZOOM_RATE2","povprečno");
define("_ZOOM_RATE3","dobro");
define("_ZOOM_RATE4","zelo dobro");
define("_ZOOM_RATE5","odlično!");

//special
define("_ZOOM_TOPTEN","Najboljših 10");
define("_ZOOM_LASTSUBM","Zadnja dodana");
define("_ZOOM_LASTCOMM","Zadnja komentirana");
define("_ZOOM_SEARCHRESULTS","Rezultati iskanja");
define("_ZOOM_TOPRATED","Najbolje ocjenjene");

//ecard
define("_ZOOM_ECARD_SENDAS","Pošlji prijatelju kot E-razglednico!");
define("_ZOOM_ECARD_YOURNAME","Vaše ime");
define("_ZOOM_ECARD_YOUREMAIL","Vaš naslov E-pošte");
define("_ZOOM_ECARD_FRIENDSNAME","Ime prijatelja");
define("_ZOOM_ECARD_FRIENDSEMAIL","Prijateljev naslov E-pošte");
define("_ZOOM_ECARD_MESSAGE","Sporočilo");
define("_ZOOM_ECARD_SENDCARD","Pošlji e-razglednico");
define("_ZOOM_ECARD_SUCCESS","Vaša razglednica uspešno poslana.");
define("_ZOOM_ECARD_CLICKHERE","Kliknite tu za pregled!");
define("_ZOOM_ECARD_ERROR","Napaka pri pošiljanju E-razglednice");
define("_ZOOM_ECARD_TURN","Poglej zadnji del razglednice!");
define("_ZOOM_ECARD_TURN2","Poglej sprednji del razglednice");
define("_ZOOM_ECARD_SENDER","Poslano od:");
define("_ZOOM_ECARD_SUBJ","Dobili sta e-razglednico od:");
define("_ZOOM_ECARD_MSG1","poslal ti je E-razglednico od");
define("_ZOOM_ECARD_MSG2","Kliknite na spodnjo povezavo za pregled E-razglednice!");
define("_ZOOM_ECARD_MSG3","Ne odgovarjajte na ta automatsko generirani mail..");
define("_ZOOM_ECARD_ECARDEXPIRED","Oprostite, ta e-razglednica ni več na razpolago ali pa je potekla.");

//installation-screen
define ('_ZOOM_INSTALL_CREATE_DIR','zOOm namestitev poskuša ustvariti direktorij  "images/zoom" ...');
define ('_ZOOM_INSTALL_CREATE_DIR_WM','zOOm Installation is trying to create the Images-directory "images/zoom/watermarks" ...');
define ('_ZOOM_INSTALL_CREATE_DIR_SUCC','narejeno!');
define ('_ZOOM_INSTALL_CREATE_DIR_FAIL','neuspešno!');
define ('_ZOOM_INSTALL_CREATE_DBASE_SUCC','Database created successfully!');
define ('_ZOOM_INSTALL_UPGRADED_DBASE_SUCC','Database upgraded successfully!');
define ('_ZOOM_INSTALL_MESS1','zOOm Image Gallery je uspešno nameščen.<br>Sedaj lahko napolnite vaše albume!');
define ('_ZOOM_INSTALL_MESS2','POZOR: prva stvar, ki jo morate narediti, je obisk component-menu-ja,<br>kjer boste našli povezavo "zOOm Media Gallery Admin"<br>in tam uredili nastavitve v Admin-sistemu.');
define ('_ZOOM_INSTALL_MESS3','Tu lahko nastavite vse spremenljivke tako, da ustrezajo vašim potrebam.');
define ('_ZOOM_INSTALL_MESS4','Ne pozabite najprej odpreti albuma!');
define ('_ZOOM_INSTALL_MESS_FAIL1','zOOM Gallerija ni uspešno nameščena!');
define ('_ZOOM_INSTALL_MESS_FAIL2','Naslednji direktoriji morajo biti ustvarjeni, pravice pisanja morajo biti nastavljene na "0777":<br />'
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
define ('_ZOOM_INSTALL_MESS_FAIL3','Ko naredite te mape in spremenite pravice, pojdite na <br /> "Components -> zOOm Media Gallery" in prilagodite svoje nastavitve.');
?>
