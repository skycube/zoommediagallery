<?php
//zOOm Media Gallery//
/** 
-----------------------------------------------------------------------
|  zOOm Media Gallery! by Mike de Boer - a multi-gallery component    |
-----------------------------------------------------------------------

-----------------------------------------------------------------------
|                                                                     |
|                                                                     |
| Author: Mike de Boer, <http://www.mikedeboer.nl>                    |
| Copyright: copyright (C) 2007 by Mike de Boer                       |
| Description: zOOm Media Gallery, a multi-gallery component for      |
|              Joomla!. It's the most feature-rich gallery component  |
|              for Joomla!! For documentation and a detailed list     |
|              of features, check the zOOm homepage:                  |
|              http://www.zoomfactory.org                             |
| License: GPL                                                        |
| Filename: finnish.php, version 12.02.2006                           |
| Finnish language file for zOOm Media Gallery 2.5.1 RC4 - 2/11 Update|
| Creator: Finnish Joomla translation team		                      |
|          Mikko Mustalampi, mikko@planeetta.net                      |
| Updates to 2.5.1 RC4 by Sami Haaranen, administrator@mortti.com     |
| Updates to 2.5.1 RC3 by Sami Haaranen, administrator@mortti.com     |
| Updates to 2.5.1 RC2 by Markku Suominen, admin@joomlaportal.fi      |
| Updates to 2.5.1 RC1 by Markku Suominen, admin@joomlaportal.fi      |
| Homepage: http://www.joomlaportal.fi				                  |
| 		                                                              |
-----------------------------------------------------------------------


**/
// MOS Intruder Alerts
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
//Language translation

define("_ZOOM_DATEFORMAT","%d.%m.%Y %H:%M"); // use the PHP strftime Format, more info at http://www.php.net
define("_ZOOM_PICK","Valitse galleria");
define("_ZOOM_DELETE","Poista");
define("_ZOOM_BACK","Takaisin");
define("_ZOOM_MAINSCREEN","P��valikko");
define("_ZOOM_BACKTOGALLERY","Takaisin galleriaan");
define("_ZOOM_INFO_DONE","valmis!");
define("_ZOOM_TOOLTIP", "zOOm infolaatikko");
define("_ZOOM_WARNING", "zOOm varoitus!");

//Gallery admin page
define("_ZOOM_ADMINSYSTEM","Yll�pito");
define("_ZOOM_USERSYSTEM","K�ytt�j�t");
define("_ZOOM_ADMIN_TITLE","Kuvagalleria yll�pito");
define("_ZOOM_USER_TITLE","Kuvagalleria k�ytt�j�t");
define("_ZOOM_CATSMGR","Kuvagalleria hallinta");
define("_ZOOM_CATSMGR_DESCR","Kuvagallerian hallinnassa voit luoda ja poistaa tiedostogallerioita.");
define("_ZOOM_SETTINGS_DDONOF","Salli Drag n Drop");
define("_ZOOM_NEW","Uusi Galleria");
define("_ZOOM_DEL","Poista galleria");
define("_ZOOM_ORDERSAVE", "Tallenna j�rjestys");
define("_ZOOM_MEDIAMGR","Kuvien hallinta");
define("_ZOOM_MEDIAMGR_DESCR","Muokkaa, poista ja skannaa automaattisesti tai siirr� mediaa manuaalisesti.");
define("_ZOOM_THUMB", "Thumb kuvien koodit");
define("_ZOOM_THUMB_DESCR", "Muodosta helposti Zoom pikkukuvien koodit");
define("_ZOOM_UPLOAD","Siirr� tiedosto(t) palvelimelle");
define("_ZOOM_EDIT","Muokkaa galleriaa");
define("_ZOOM_ADMIN_CREATE","Luo tietokanta");
define("_ZOOM_ADMIN_CREATE_DESCR","luo vaadittavat tietokantataulut jotta voit aloittaa k�ytt�m��n albumia");
define("_ZOOM_HD_PREVIEW","Esikatselu");
define("_ZOOM_HD_CHECKALL","Kaikki/Poista valinta kaikista");
define("_ZOOM_HD_CREATEDBY","Luonut");
define("_ZOOM_HD_AFTER","Luo hakemistoon");
define("_ZOOM_HD_HIDEMSG","Piilota 'ei mediaa' teksti");
define("_ZOOM_HD_NAME","Gallerian nimi");
define("_ZOOM_HD_DIR","Hakemisto");
define("_ZOOM_HD_NEW","Uusi Galleria");
define("_ZOOM_HD_SHARE","Jaa t�m� galleria");
define("_ZOOM_SHARE","Jaa");
define("_ZOOM_UNSHARE","Poista jako");
define("_ZOOM_PUBLISH","Julkaise");
define("_ZOOM_UNPUBLISH","Lopeta julkaisu");
define("_ZOOM_TOPLEVEL","P��hakemisto");
define("_ZOOM_HD_UPLOAD","Siirr� tiedosto palvelimelle");
define("_ZOOM_A_ERROR_ERRORTYPE","Virhetyyppi");
define("_ZOOM_A_ERROR_IMAGENAME","Kuvan nimi");
define("_ZOOM_A_ERROR_NOFFMPEG","<u>FFmpeg</u> ei asennettu");
define("_ZOOM_A_ERROR_NOPDFTOTEXT","<u>PDFtoText</u> ei asennettu");
define("_ZOOM_A_ERROR_NOTINSTALLED","Ei asennettu");
define("_ZOOM_A_ERROR_CONFTODB","Virhe tallennettaessa asetuksia tietokantaan!");
define("_ZOOM_A_MESS_NOT_SHURE","* Jos et ole varma, k�yt� oletusarvoa \"auto\" ");
define("_ZOOM_A_MESS_SAFEMODE1","Huom: \"Safe Mode\" on aktivoitu, joten on mahdollista ett� suurempien tiedostojen siirto palvelimelle ei onnistu!<br />Sinun tulisi vaihtaa yll�pitoalueella FTP-tilaan.");
define("_ZOOM_A_MESS_SAFEMODE2","Huom: \"Safe Mode\" on aktivoitu, joten on mahdollista ett� suurempien tiedostojen siirto palvelimelle ei onnistu!<br />zOOm suosittelee vaihtamaan yll�pitoalueella FTP-tilaan.");
define("_ZOOM_A_MESS_PROCESSING_FILE","Tiedostoa k�sitell��n...");
define("_ZOOM_A_MESS_NOTOPEN_URL","URL-osoitetta ei voitu avata:");
define("_ZOOM_A_MESS_PARSE_URL","Luodaan \"%s\" osoitetta kuville... "); // %s = $url
define("_ZOOM_A_MESS_NOJAVA","Jos n�et vain harmaan laatikon tai jos tiedoston siirrossa on ongelmia, voi olla<br />ett� sinulla ei ole uusinta javan versiota. Hae uusin versio osoitteesta <a href=\"http://www.java.com\" target=\"_blank\">Java.com</a> <br /> .");
define("_ZOOM_SETTINGS","Asetukset");
define("_ZOOM_SETTINGS_DESCR","Vaihda n�kym�� ja asetuksia.");
define("_ZOOM_SETTINGS_TAB1","J�rjestelm�");
define("_ZOOM_SETTINGS_TAB2","Media");
define("_ZOOM_SETTINGS_TAB3","Toiminnot");
define("_ZOOM_SETTINGS_TAB4","Ulkoasu");
define("_ZOOM_SETTINGS_TAB5","Vesileimat");
define("_ZOOM_SETTINGS_TAB6","Safe Mode");
define("_ZOOM_SETTINGS_TAB7","K�ytt�oikeudet");
define("_ZOOM_SETTINGS_TAB8","Palauta asetukset");
define("_ZOOM_SETTINGS_ERASE","Napsauta poistaaksesi Zoom-galleriaan liittyv�t kaikki tiedot ja aloittaaksesi uuden gallerian. T�m� palauttaa asetukset ja poistaa kaikki kuvat.");
define("_ZOOM_SETTINGS_CONVTYPE","Kuvan muunnostyyppi");
define("_ZOOM_SETTINGS_GALLERY_FEATURES","Gallerian n�ytt� toiminnot");
define("_ZOOM_SETTINGS_VIEW_FEATURES","Median n�ytt� toiminnot");

define("_ZOOM_SETTINGS_GALLERY","Galleria n�kym�");
define("_ZOOM_SETTINGS_VIEW","Media n�kym�");

define("_ZOOM_SETTINGS_GENERAL_FEATURES","Perus toiminnot");
define("_ZOOM_SETTINGS_AUTODET","Havaittu: ");
define("_ZOOM_SETTINGS_IMGPATH","Kuvatiedostojen hakemistopolku:");
define("_ZOOM_SETTINGS_TTIMGPATH","Nykyinen mediatiedostojen hakemistopolku ");
define("_ZOOM_SETTINGS_CONVSETTINGS","Kuvanmuutos asetukset:");
define("_ZOOM_SETTINGS_IMPATH","ImageMagick polku: ");
define("_ZOOM_SETTINGS_NETPBMPATH"," tai NetPBM: ");
define("_ZOOM_SETTINGS_FFMPEGPATH","FFmpeg polku");
define("_ZOOM_SETTINGS_FFMPEGTOOLTIP","FFmpeg vaaditaan videotiedostojen esikatselukuvien luomiseen.<br />Tuettuja tiedostop��tteit� ovat: ");
define("_ZOOM_SETTINGS_OVERRIDE_FFMPEG","K�yt� Ffmpeg-asetusta vaikka zOOm ei l�yd� sit� j�rjestelm�st�.");
define("_ZOOM_SETTINGS_PDFTOTEXTPATH","PDFtoText polku");
define("_ZOOM_SETTINGS_XPDFTOOLTIP","pdf2text, joka on osa Xpdf pakettia, vaaditaan PDF tiedoston listaamiseen.");
define("_ZOOM_SETTINGS_OVERRIDE_PDF","K�yt� PDFtoText-asetusta vaikka zOOm ei l�yd� sit� j�rjestelm�st�.");
define("_ZOOM_SETTINGS_MAXSIZE","Kuvan maks. koko: ");
define("_ZOOM_SETTINGS_MAXSIZEKB","Media - sis�lt�� kuvia - maksimi koko (kB): "); //added: 08-08-2006
define("_ZOOM_SETTINGS_MAXSIZEKB_WARNING","Latausrajan t�ll� palvelimella m��rittelee palveluntarjoajasi PHP asetuksissa joka on %s.<br />Aseta raja korkeammaksi kuin tuo tai t�m� arvo ei ole k�ytett�viss�!"); //added: 09-01-2006
define("_ZOOM_SETTINGS_THUMBSETTINGS","Thumbnail asetukset:");
define("_ZOOM_SETTINGS_QUALITY","NetPBM ja GD2 JPEG laatu: ");
define("_ZOOM_SETTINGS_SIZE","Esikatselukuvan maks. koko: ");
define("_ZOOM_SETTINGS_TEMPNAME","V�liaikainen nimi: ");
define("_ZOOM_SETTINGS_AUTONUMBER","numeroi kuvat automaattisesti (esim. 1,2,3)");
define("_ZOOM_SETTINGS_TEMPDESCR","V�liaikainen kuvaus: ");
define("_ZOOM_SETTINGS_TITLE","Gallerian otsikko:");
define("_ZOOM_SETTINGS_SUBCATSPG","(Ali-)galleria sarakkeiden lkm.");
define("_ZOOM_SETTINGS_COLUMNS","Esikatselusarakkeiden lkm.");
define("_ZOOM_SETTINGS_THUMBSPG","Esikatselukuvia per sivu");
define("_ZOOM_SETTINGS_CMTLENGTH","Kommenttien maks. pituus");
define("_ZOOM_SETTINGS_CHARS","merkki�");
define("_ZOOM_SETTINGS_GALLERYPREFIX","Gallerian otsikon etuliite");
define("_ZOOM_SETTINGS_SHOWOCCSPACE","N�yt� varattu tila Mediamanagerissa");
define("_ZOOM_SETTINGS_TEMPLATE_TITLE","Sivupohja");
define("_ZOOM_SETTINGS_FEATURES_TITLE","Toiminnot P��LL�/ POIS");
define("_ZOOM_SETTINGS_CSS_TITLE","Muokkaa tyylitiedostoja");
define("_ZOOM_SETTINGS_DISPLAY_TITLE","N�yt� tiedot P��LL�/ POIS");
define("_ZOOM_SETTINGS_TEMPLATE_CHOOSE","Valitse sivupohja m��ritt��ksesi ulkoasun &amp; tunnelman galleriaasi");
define("_ZOOM_SETTINGS_TEMPLATE_TABLES","Klassinen (taulukoilla)");
define("_ZOOM_SETTINGS_TEMPLATE_TABLELESS","Moderni (taulukoton tyyli)");
define("_ZOOM_SETTINGS_COMMENTS","Kommentit");
define("_ZOOM_SETTINGS_POPUP","PopUp Kuvat");
define("_ZOOM_SETTINGS_CATIMG","N�yt� gallerian kuva");
define("_ZOOM_SETTINGS_SLIDESHOW","Diashow");
define("_ZOOM_SETTINGS_ZOOMLOGO","N�yt� zOOm-logo");
define("_ZOOM_SETTINGS_DESCRINGAL","N�yt� albumin kuvaus galleriassa");

define("_ZOOM_SETTINGS_SHOWHITS","N�yt� osumien m��r�");
define("_ZOOM_SETTINGS_READEXIF","N�yt� EXIF-tiedot");
define("_ZOOM_SETTINGS_EXIFTOOLTIP","T�m� toiminto n�ytt�� EXIF ja muut IPTC tiedot, ilman PHP:n EXIF moduulin asennusta.");
define("_ZOOM_SETTINGS_READID3","N�yt� mp3 ID3-tiedot");
define("_ZOOM_SETTINGS_ID3TOOLTIP","T�m� toiminto n�ytt�� ID3 v1.1 ja v2.0 tiedot mp3 tiedoston lis�tietoja katsottaessa.");
define("_ZOOM_SETTINGS_RATING","Arvostelu");
define("_ZOOM_SETTINGS_CSS","Popup-ikkuna");
define("_ZOOM_SETTINGS_CSSZOOM","zOOm galleria &amp; median�kym�");
define("_ZOOM_SETTINGS_SUCCESS","Konfiguraatio p�ivitetty!");
define("_ZOOM_SETTINGS_ZOOMING","Kuva zoom");
define("_ZOOM_SETTINGS_ORDERBY","Esikatselukuvien j�rjestystapa; j�rjest�");
define("_ZOOM_SETTINGS_CATORDERBY","(Ali-)gallerian j�rjestystapa; j�rjest�");

define("_ZOOM_SETTINGS_NO_POP","Aseta pois kaikki Popup:t");
define("_ZOOM_SETTINGS_STANDARD_POP","Standardi Popup:t");
define("_ZOOM_SETTINGS_LIGHTBOX_POP","Lightbox JS Popup:t");
define("_ZOOM_SETTINGS_LIGHTBOX_SLIDESHOW","<strong><i>LAITA T�M� P��LLE JOS HALUAT DIASHOW:N TOIMIVAN LIGHTBOX JS:N KANSSA</i></strong>");

define("_ZOOM_SETTINGS_DATE_ASC","P�IV�YS, nouseva");
define("_ZOOM_SETTINGS_DATE_DESC","P�IV�YS, laskeva");
define("_ZOOM_SETTINGS_FLNM_ASC","TIEDOSTONIMI, nouseva");
define("_ZOOM_SETTINGS_FLNM_DESC","TIEDOSTONIMI, laskeva");
define("_ZOOM_SETTINGS_NAME_ASC","NIMI, nouseva");
define("_ZOOM_SETTINGS_NAME_DESC","NIMI, laskeva");
define("_ZOOM_SETTINGS_LBTOOLTIP","Mediakori on kuin ostoskori joka on t�ytetty k�ytt�j�n valitsemilla tiedostoilla, jotka voidaan ladata koneelle ZIP tiedostona.");
define("_ZOOM_SETTINGS_SHOWNAME","N�yt� nimi");
define("_ZOOM_SETTINGS_SHOWDESCR","N�yt� kuvaus");
define("_ZOOM_SETTINGS_SHOWKEYWORDS","N�yt� avainsanat");
define("_ZOOM_SETTINGS_SHOWDATE","N�yt� p�iv�ys");
define("_ZOOM_SETTINGS_SHOWUNAME","N�yt� k�ytt�j�nimi");
define("_ZOOM_SETTINGS_SHOWFILENAME","N�yt� tiedostonimi");
define("_ZOOM_SETTINGS_METABOX","N�yt� sivuilla yksityiskohdat kelluvassa laatikossa");
define("_ZOOM_SETTINGS_METABOXTOOLTIP","K��nn� t�m� toiminto pois p��lt� lis�t�ksesi galleriasi nopeutta. Tehokas isojen tietokantojen kanssa.");
define("_ZOOM_SETTINGS_ECARDS","E-kortit");
define("_ZOOM_SETTINGS_ECARDS_LIFETIME","E-korttien elinaika");
define("_ZOOM_SETTINGS_ECARDS_ONEWEEK","viikko");
define("_ZOOM_SETTINGS_ECARDS_TWOWEEKS","kaksi viikkoa");
define("_ZOOM_SETTINGS_ECARDS_ONEMONTH","kuukausi");
define("_ZOOM_SETTINGS_ECARDS_THREEMONTHS","kolme kuukautta");
define("_ZOOM_SETTINGS_SHOWSEARCH","Hakukentt� KAIKILLA sivuilla");
define("_ZOOM_SETTINGS_BOX_ANIMATE","Animaatio kentiss�");
define("_ZOOM_SETTINGS_BOX_PROPERTIES","Ominaisuudet-kent�n tila visuaalisesti");
define("_ZOOM_SETTINGS_BOX_META","Metadata-kent�n tila visuaalisesti");
define("_ZOOM_SETTINGS_BOX_COMMENTS","Kommenttikent�n tila visuaalisesti");
define("_ZOOM_SETTINGS_BOX_RATING","Arvio-kent�n tila visuaalisesti");
define("_ZOOM_SETTINGS_TOPTEN","N�yt� \"Top Ten\" linkki etusivulla");
define("_ZOOM_SETTINGS_LASTSUBM","N�yt� \"Viimeksi lis�tty\" linkki etusivulla");
define("_ZOOM_SETTINGS_SETMENUOPTION","N�yt� 'Siirr� kuvia palvelimelle'-linkki K�ytt�j�valikossa");
define("_ZOOM_SETTINGS_USEFTP","K�yt� FTP tilaa?");
define("_ZOOM_SETTINGS_FTPHOST","Palvelinnimi");
define("_ZOOM_SETTINGS_FTPUNAME","K�ytt�j�nimi");
define("_ZOOM_SETTINGS_FTPPASS","Salasana");
define("_ZOOM_SETTINGS_FTPWARNING","Varoitus: Salasanaa ei tallenneta turvallisesti!");
define("_ZOOM_SETTINGS_FTPHOSTDIR","Hakemisto palvelimella");
define("_ZOOM_SETTINGS_MESS_FTPHOSTDIR","Anna polku Joomla!-asennukseesi ftp-juurihakemistostasi. T�RKE��: P��t� <b>ilman</b> kautta- tai kenoviivaa!");
define("_ZOOM_SETTINGS_GROUP","Ryhm�");
define("_ZOOM_SETTINGS_PRIV_DESCR","Voit muuttaa Joomla!-k�ytt�j�ryhmien k�ytt�oikeuksia.<br />
    Ryhmien k�ytt�j�t voivat vied� tiedostoja palvelimelle, muokata/ poistaa tiedostoja, luoda, muokata tai poistaa (jaettuja) gallerioita.<br />
    Voit m��ritell� mit� kukin ryhm� voi tehd�.");

define("_ZOOM_SETTINGS_CLOSE","N�yt� \"Sulje\" linkki popup-ikkunassa");
define("_ZOOM_SETTINGS_MAINSCREEN","N�yt� p��n�yt�n linkki polussa");
define("_ZOOM_SETTINGS_NAVBUTTONS","N�yt� navigointipainikkeet popup-ikkunassa");
define("_ZOOM_SETTINGS_PROPERTIES","N�yt� ominaisuudet median alla");
define("_ZOOM_SETTINGS_MEDIAFOUND","N�yt� \"Media l�ytyi\" teksti galleriassa");
define("_ZOOM_SETTINGS_ANONYMOUS_COMMENTS","Salli nimett�m�t kommentit");
define("_ZOOM_SETTINGS_WM_ENABLE_TITLE","Ota toiminto k�ytt��n");
define("_ZOOM_SETTINGS_WM_TITLE", "Vesileimasi");
define("_ZOOM_SETTINGS_WM_DESCR", "Vesileimasi n�kyy jokaisen sivustolla olevan kuvan p��ll�. "
 . "Kuva on edelleen n�kyviss�, mutta k�ytt�jille kuvien kopiointi tai tulostaminen on v�hemm�n houkuttelevaa."
 . "<br /><br />Ehdotus: voit k�ytt�� yrityksen liikemerkki� vesileimana. "
 . "Muista m��ritell� vesileiman tausta l�pin�kyv�ksi.");
define("_ZOOM_SETTINGS_WM_IMG", "Kuva");
define("_ZOOM_SETTINGS_WM_NOWATERMARKS", "Vesileimaa ei l�ydetty. Voit ladata uuden vesileiman alla.");
define("_ZOOM_SETTINGS_WM_PLACEMENT_TITLE", "Sijainti");
define("_ZOOM_SETTINGS_WM_PLACEMENT_DESCR", "Voit m��ritell� vesileiman sijainnin kohdekuvassa "
 . "valitsemalla yhden sijainnin alla olevasta harmaasta laatikosta.");
define("_ZOOM_SETTINGS_WM_FILE","Vie vesileima palvelimelle");
define("_ZOOM_SETTINGS_WM_UPLOAD_SUCCESS","Vesileima viety palvelimelle.");
define("_ZOOM_SETTINGS_WM_UPLOAD_FAIL","Vesileiman vienti palvelimelle ep�onnistui.");
define("_ZOOM_SETTINGS_WM_DEL_SUCCESS","Vesileima poistettu.");
define("_ZOOM_SETTINGS_WM_DEL_FAIL","Vesileimaa ei voitu poistaa.");
define("_ZOOM_SYSTEM_TITLE","J�rjestelm�asetukset");
define("_ZOOM_YES","kyll�");
define("_ZOOM_NO","ei");
define("_ZOOM_VISIBLE","n�kyviss�");
define("_ZOOM_HIDDEN","piilotettu");
define("_ZOOM_SAVE","Tallenna");
define("_ZOOM_MOVEFILES","Siirr� mediaa");
define("_ZOOM_BUTTON_MOVE","Siirr�");
define("_ZOOM_MOVEFILES_STEP1","Askel 1: Valitse l�hdegalleria &amp; siirr� media");
define("_ZOOM_ALERT_MOVE","%s media siirretty, %s mediaa ei voitu siirt��.");
define("_ZOOM_OPTIMIZE","Optimoi taulut");
define("_ZOOM_OPTIMIZE_DESCR","zOOm Mediagalleria k�ytt�� taulujaan paljon luoden n�in my�s ylim��r�ist� dataa, ns. 'roskadataa'. Napsauta t�ss� poistaaksesi roskadatan.");
define("_ZOOM_OPTIMIZE_SUCCESS","zOOm Mediagallerian taulut optimoitu!");
define("_ZOOM_UPDATE","P�ivit� zOOm Media Galleria");
define("_ZOOM_UPDATE_DESCR","Lis�� uusia toimintoja, ratkaise ongelmia ja selvit� bugeja! Tarkista <a href=\"http://www.zoomfactory.org\" target=\"_blank\">www.zoomfactory.org</a> uusimman p�ivityksen varalta!");
define("_ZOOM_UPDATE_XMLDATE","Viimeksi p�ivitetty");
define("_ZOOM_UPDATE_NOUPDATES","ei p�ivityksi�!"); // added 11-08
define("_ZOOM_UPDATE_PACKAGE","P�ivit� ZIP-tiedosto: ");
define("_ZOOM_CREDITS","Tietoja zOOm Mediagalleriasta &amp; tekij�tiedot");

//Image actions
define("_ZOOM_DISKSPACEUSAGE","Gallerian %s k�ytt�m� levytila");
define("_ZOOM_UPLOAD_SINGLE","Yksitt�inen (ZIP-)tiedosto");
define("_ZOOM_UPLOAD_MULTIPLE","Useampia tiedostoja");
define("_ZOOM_UPLOAD_DRAGNDROP","Ved� ja Pudota");
define("_ZOOM_UPLOAD_SCANDIR","Skannaa hakemisto");
define("_ZOOM_UPLOAD_INTRO","Napsauta <b>Selaa</b> nappia etsi�ksesi siirrett�v�n tiedoston.");
define("_ZOOM_UPLOAD_STEP1","1. M��rit� montako tiedostoa haluat siirt��: ");
define("_ZOOM_UPLOAD_STEP2","2. M��rit� galleria johon haluat siirt�� tiedostot: ");
define("_ZOOM_UPLOAD_STEP3","3. K�yt� Selaa nappia etsi�ksesi tiedostot koneeltasi");
define("_ZOOM_SCAN_STEP1","1. Askel: anna sijainti josta skannataan tiedostoja...");
define("_ZOOM_SCAN_STEP2","2. Askel: valitse tiedostot jotka haluat siirt��...");
define("_ZOOM_SCAN_STEP3","3. Askel: zOOm k�sittelee valitsemiasi tiedostoja...");
define("_ZOOM_SCAN_STEP1_DESCR","Sijainti voi olla joko URL tai palvelimen hakemisto.<br />&nbsp;   Vinkki: Siirr� tiedostot hakemistoon palvelimellasi ja laita t�h�n hakemistopolku!");
define("_ZOOM_SCAN_STEP2_DESCR1","K�sitell��n");
define("_ZOOM_SCAN_STEP2_DESCR2","paikallishakemistona");
define("_ZOOM_FORMCREATE_NAME","Nimi");
define("_ZOOM_FORM_IMAGEFILE","Kuva");
define("_ZOOM_FORM_IMAGEFILTER","Tuetut mediatyypit");
define("_ZOOM_FORM_INGALLERY","Galleriaan");
define("_ZOOM_FORM_SETFILENAME","Aseta tiedostonimet alkuper�isten tiedostonimien mukaan.");
define("_ZOOM_FORM_IGNORESIZES","Ohita ennalta asetetut kokorajoitukset"); //added: 12-08
define("_ZOOM_FORM_LOCATION","Sijainti");
define("_ZOOM_BUTTON_SCAN","L�het� URL tai hakemisto");
define("_ZOOM_BUTTON_UPLOAD","Siirr� palvelimelle");
define("_ZOOM_BUTTON_EDIT","Muokkaa");
define("_ZOOM_BUTTON_CREATE","Luo");
define("_ZOOM_CONFIRM_WIPE","VAROITUS!\\n T�m� toiminto pyyhkii zOOM Gallegyn kokonaan ja poistaa kaikki kuvat ja galleriat.\\n\\n Haluatko varmasti jatkaa?");
define("_ZOOM_CONFIRM_DEL","T�m� valinta poistaa gallerian kokonaan, mukaanlukien tiedostot.\\nHaluatko jatkaa?");
define("_ZOOM_CONFIRM_DELMEDIUM","Olet poistamassa t�m�n tiedoston!\\nHaluatko jatkaa?");
define("_ZOOM_ALERT_DEL","Galleria on poistettu!");
define("_ZOOM_ALERT_NOCAT","Galleriaa ei valittu!");
define("_ZOOM_ALERT_NOMEDIA","Tiedostoa ei valittu!");
define("_ZOOM_ALERT_EDITOK","Gallerian kent�t muokattu!");
define("_ZOOM_ALERT_NEWGALLERY","Uusi galleria luotu.");
define("_ZOOM_ALERT_NONEWGALLERY","Galleriaa ei ole luotu!!");
define("_ZOOM_ALERT_EDITIMG","Median ominaisuudet muutettu onnistuneesti.");
define("_ZOOM_ALERT_DELPIC","Tiedosto poistettu onnistuneesti.");
define("_ZOOM_ALERT_NODELPIC","Mediaa ei voitu poistaa!");
define("_ZOOM_ALERT_MOVEFAILURE","Mediaa ei voitu siirt��."); //added: 08-08-2006
define("_ZOOM_ALERT_NOPICSELECTED","Mediaa ei valittu.");
define("_ZOOM_ALERT_NOPICSELECTED_MULT","Tiedostoa ei valittu.");
define("_ZOOM_ALERT_UPLOADOK","Kuvan siirto onnistui!");
define("_ZOOM_ALERT_UPLOADSOK","kuvan siirto palvelimelle onnistui!");
define("_ZOOM_ALERT_WRONGFORMAT","V��r� kuvaformaatti.");
define("_ZOOM_ALERT_WRONGFORMAT_MULT","V��r� formaatti.");
define("_ZOOM_ALERT_TOOBIG","Median tiedostokoko on liian suuri; %s on suurin sallittu koko."); //added 08-08-2006
define("_ZOOM_ALERT_IMGERROR","Virhe kuvan koon muuttamisessa/ esikatselukuvan luonnissa.");
define("_ZOOM_ALERT_PCLZIPERROR","Virhe tapahtui arkistoa purettaessa.");
define("_ZOOM_ALERT_INDEXERROR","Virhe tapahtui luetteloitaessa dokumenttia.");
define("_ZOOM_ALERT_WATERMARKERROR","Havaittiin virhe lis�tt�ess� vesileimaa kuvaan.");
define("_ZOOM_ALERT_IMGFOUND","media(a) l�ytyi.");
define("_ZOOM_INFO_CHECKCAT","Valitse galleria ennenkuin painat 'Siirr� palvelimelle'-nappia!");
define("_ZOOM_BUTTON_ADDIMAGES","Lis�� kuvia");
define("_ZOOM_BUTTON_REMIMAGES","Poista kuvia");
define("_ZOOM_INFO_PROCESSING","K�sitell��n tiedostoa:");
define("_ZOOM_ITEMEDIT_TAB1","Ominaisuudet");
define("_ZOOM_ITEMEDIT_TAB2","J�senet");
define("_ZOOM_ITEMEDIT_TAB3","Toiminnot");
define("_ZOOM_USERSLIST_LINE1",">>Valitse j�senet t�lle kohteelle<<");
define("_ZOOM_USERSLIST_ALLOWALL",">>Julkinen<<");
define("_ZOOM_USERSLIST_MEMBERSONLY",">>Vain j�senille<<");
define("_ZOOM_PUBLISHED","Julkaistu");
define("_ZOOM_SHARED","Jaa t�m� galleria");
define("_ZOOM_ROTATE","Kierr� kuvaa 90 astetta");
define("_ZOOM_CLOCKWISE","my�t�p�iv��n");
define("_ZOOM_CCLOCKWISE","vastap�iv��n");
define("_ZOOM_FLIP_HORIZ","Peilaa kuva vaakasuuntaisesti");
define("_ZOOM_FLIP_VERT","Peilaa kuva pystysuuntaisesti");
define("_ZOOM_PROGRESS_DESCR","Pyynt��si k�sitell��n... odota.");

//Navigation (including Slideshow buttons)
define("_ZOOM_SLIDESHOW","Diashow:");
define("_ZOOM_PREV_IMG","edellinen kuva");
define("_ZOOM_NEXT_IMG","seuraava kuva");
define("_ZOOM_FIRST_IMG","ensimm�inen kuva");
define("_ZOOM_LAST_IMG","viimeinen kuva");
define("_ZOOM_PLAY","toista");
define("_ZOOM_STOP","lopeta");
define("_ZOOM_RESET","paluu");
define("_ZOOM_FIRST","Ensimm�inen");
define("_ZOOM_LAST","Viimeinen");
define("_ZOOM_PREVIOUS","Edellinen");
define("_ZOOM_NEXT","Seuraava");
define("_ZOOM_IN_DESC", "Vie hiiren kohdistin kuvan p��lle paina YL�S tai ALAS n�pp�imi�.");

//Gallery actions
define("_ZOOM_SEARCH_BOX","Pikahaku...");
define("_ZOOM_ADVANCED_SEARCH","Laajennettu haku");
define("_ZOOM_SEARCH_KEYWORD","Etsi hakusanalla");
define("_ZOOM_IMAGES","media(a)");
define("_ZOOM_IMGFOUND","%s l�ytyi - olet sivulla %s / %s");
define("_ZOOM_SUBGALLERIES","alagalleriat");
define("_ZOOM_ALERT_COMMENTOK","Kommenttisi on lis�tty!");
define("_ZOOM_ALERT_COMMENTERROR","Olet jo kommentoinut t�t� kuvaa!");
define("_ZOOM_ALERT_VOTE_OK","��nesi on huomioitu! Kiitos.");
define("_ZOOM_ALERT_VOTE_ERROR","Olet jo ��nest�nyt t�t� kuvaa!");
define("_ZOOM_WINDOW_CLOSE","Sulje");
define("_ZOOM_NOPICS","Ei kuvia galleriassa");
define("_ZOOM_PROPERTIES","Ominaisuudet");
define("_ZOOM_COMMENTS","Kommentti(a)");
define("_ZOOM_COMMENTS_INTRO","Kirjoita kommentisi alapuolelle:");

define("_ZOOM_NO_COMMENTS","Ei viel� kommentoitu.");
define("_ZOOM_SAYS","kommentoi");
define("_ZOOM_YOUR_NAME","Nimesi");
define("_ZOOM_ADD","Lis��");
define("_ZOOM_NAME","Nimi");
define("_ZOOM_DATE","Lis�tty");
define("_ZOOM_UNAME","Lis�nnyt");
define("_ZOOM_DESCRIPTION","Kuvaus");
define("_ZOOM_IMGNAME","Nimi");
define("_ZOOM_FILENAME","Tiedostonimi");
define("_ZOOM_CLICKDOCUMENT","(napsauta tiedoston nime� avataksesi dokumentin)");
define("_ZOOM_KEYWORDS","Hakusanat");
define("_ZOOM_HITS","Osumia");
define("_ZOOM_CLOSE","Sulje");
define("_ZOOM_NOIMG", "Mediaa ei l�ytynyt!");
define("_ZOOM_NONAME", "Sinun t�ytyy antaa nimi!");
define("_ZOOM_NOCAT", "Galleriaa ei valittu!");
define("_ZOOM_EDITPIC", "Muokkaa mediaa");
define("_ZOOM_SETCATIMG","Aseta gallerian esittelykuvaksi");
define("_ZOOM_SETPARENTIMG","Aseta is�nt�gallerian esittelykuvaksi");
define("_ZOOM_PASS","Salasana");
define("_ZOOM_PASS_REQUIRED","T�m� galleria vaatii salasanan.<br />Ole hyv� t�yt� salasanakentt�<br />ja paina Go nappulaa. Kiitos.");
define("_ZOOM_PASS_BUTTON","Hae");
define("_ZOOM_PASS_GALLERY","Salasana");
define("_ZOOM_PASS_INNCORRECT","Salasana Virheellinen");

//Hotlinking
define("_ZOOM_SETTINGS_HOTLINK","Salli kuvien kuumalinkitys suojaus");
define("_ZOOM_SETTINGS_HPTOOLTIP","Kun kuvien kuumalinkitys suojaus on p��ll�, niin kuvan tiedostonimi ja -polku ovat piiloitettuna. Samoin jos k�ytt�j� yritt�� linkitt��/k�ytt�� kuvaa toiselle sivustolle, se ei onnistu.");



//Lightbox
define("_ZOOM_LIGHTBOX","Mediakori");
define("_ZOOM_LIGHTBOX_GALLERY","Siirr� t�m� galleria mediakoriin!");
define("_ZOOM_LIGHTBOX_ITEM","Siirr� t�m� kohde mediakoriin!");
define("_ZOOM_LIGHTBOX_VIEW","N�yt� mediakorisi");
define("_ZOOM_YOUR_LIGHTBOX","Mediakorisi sis�lt�:");
define("_ZOOM_LIGHTBOX_EMPTY","Mediakorisi on tyhj�.");
define("_ZOOM_LIGHTBOX_ZIPBTN","Luo ZIP-tiedosto");
define("_ZOOM_LIGHTBOX_PLAYLISTBTN","Luo Soittolista & toista");
define("_ZOOM_LIGHTBOX_CATS","Galleriat");
define("_ZOOM_LIGHTBOX_TITLEDESCR","Otsikko &amp; Kuvaus");
define("_ZOOM_ACTION","Toiminto");
define("_ZOOM_LIGHTBOX_ADDED","Kohde siirretty mediakoriin!");
define("_ZOOM_LIGHTBOX_NOTADDED","Virhe siirrett�ess� kohdetta mediakoriin!");
define("_ZOOM_LIGHTBOX_EDITED","Kohde muokattu onnistuneestid!");
define("_ZOOM_LIGHTBOX_NOTEDITED","Virhe muokatessa kohdetta!");
define("_ZOOM_LIGHTBOX_DEL","Kohde poistettu mediakorista!");
define("_ZOOM_LIGHTBOX_NOTDEL","Virhe poistettaessa kohdetta mediakorista!");
define("_ZOOM_LIGHTBOX_NOZIP","Loit jo Zip tiedoston mediakoristasi tai mediakorisi on tyhj�!");
define("_ZOOM_LIGHTBOX_PARSEZIP","K�sitell��n gallerian kuvia...");
define("_ZOOM_LIGHTBOX_DOZIP","Luodaan ZIP-tiedostoa...");
define("_ZOOM_LIGHTBOX_DLHERE","Voit nyt ladata mediakorin sis�ll�n");
define("_ZOOM_LIGHTBOX_PLSUCCESS","Soittolista luotu onnistuneesti! P�ivit� Soitin-ikkunasi.");
define("_ZOOM_LIGHTBOX_PLERROR","Virhe luotaessa soittolistaa.");
define("_ZOOM_LIGHTBOX_NOAUDIO","Sinun tulee ensin lis�t� ��nitiedostoja mediakoriisi!");
define("_ZOOM_LIGHTBOX_NOITEMS","Mediakorisi on tyhj�.");

//EXIF information
define("_ZOOM_EXIF","EXIF");
define("_ZOOM_EXIF_SHOWHIDE","N�yt�/Piilota Meta tiedot");

//MP3 id3 v1.1 or later information
define("_ZOOM_AUDIO_PLAYING","nyt soi:");
define("_ZOOM_AUDIO_CLICKTOPLAY","Napsauta t�ss� avataksesi tiedoston.");
define("_ZOOM_ID3","ID3");
define("_ZOOM_ID3_SHOWHIDE","N�yt�/ piilota ID3 tiedot");
define("_ZOOM_ID3_LENGTH","Pituus");
define("_ZOOM_ID3_QUALITY","Laatu");
define("_ZOOM_ID3_TITLE","Kappale");
define("_ZOOM_ID3_ARTIST","Artisti");
define("_ZOOM_ID3_ALBUM","Albumi");
define("_ZOOM_ID3_YEAR","Vuosi");
define("_ZOOM_ID3_COMMENT","Kommentti");
define("_ZOOM_ID3_GENRE","Tyylilaji");

//Video metadata information
define("_ZOOM_VIDEO_SHOWHIDE","N�yt�/ piilota Videotiedot");
define("_ZOOM_VIDEO_PIXELRATIO","Pikselien kerroin");
define("_ZOOM_VIDEO_QUALITY","Videon laatu");
define("_ZOOM_VIDEO_AUDIOQUALITY","��nenlaatu");
define("_ZOOM_VIDEO_CODEC","Koodekki (Codec)");
define("_ZOOM_VIDEO_RESOLUTION","Resoluutio");

//rating
define("_ZOOM_RATING","Arvosana");
define("_ZOOM_NOTRATED","Ei viel� ��ni�!");
define("_ZOOM_VOTE","��ni");
define("_ZOOM_VOTES","��nt�");
define("_ZOOM_RATE0","roskaa");
define("_ZOOM_RATE1","heikko");
define("_ZOOM_RATE2","keskinkertainen");
define("_ZOOM_RATE3","hyv�");
define("_ZOOM_RATE4","eritt�in hyv�");
define("_ZOOM_RATE5","t�ydellinen!");

//special
define("_ZOOM_TOPTEN","Top-10");
define("_ZOOM_LASTSUBM","Viimeksi lis�tty");
define("_ZOOM_LASTCOMM","Viimeksi kommentoitu");
define("_ZOOM_SEARCHRESULTS","Etsi tuloksia");
define("_ZOOM_TOPRATED","Paras arvosana");

//ecard
define("_ZOOM_ECARD_SENDAS","L�het� t�m� media E-korttina yst�v�llesi!");
define("_ZOOM_ECARD_YOURNAME","Nimesi");
define("_ZOOM_ECARD_YOUREMAIL","S�hk�postiosoitteesi");
define("_ZOOM_ECARD_FRIENDSNAME","Yst�v�si nimi");
define("_ZOOM_ECARD_FRIENDSEMAIL","Yst�v�si s�hk�postiosoite");
define("_ZOOM_ECARD_MESSAGE","Viesti");
define("_ZOOM_ECARD_SENDCARD","L�het� E-kortti");
define("_ZOOM_ECARD_SUCCESS","Korttisi on l�hetetty onnistuneesti.");
define("_ZOOM_ECARD_CLICKHERE","Napsauta t�ss� katsoaksesi sit�!");
define("_ZOOM_ECARD_ERROR","Virhe l�hett�ess� E-korttia");
define("_ZOOM_ECARD_TURN","Katso t�m�n kortin taustapuolta!");
define("_ZOOM_ECARD_TURN2","Katso t�m�n kortin etupuolta!");
define("_ZOOM_ECARD_SENDER","L�hett�j�:");
define("_ZOOM_ECARD_SUBJ","E-kortin l�hett�j�:");
define("_ZOOM_ECARD_MSG1","l�hetti sinulle E-kortin osoitteesta");
define("_ZOOM_ECARD_MSG2","Napsauta alla olevaa linkki� katsoaksesi omia E-korttejasi!");
define("_ZOOM_ECARD_MSG3","�l� vastaa t�h�n s�hk�posti ilmoitukseen sill� t�m� on automaattiviesti.");
define("_ZOOM_ECARD_ECARDEXPIRED","E-kortti ei ole en�� saatavilla tai on vanhentunut.");

//installation-screen
define ('_ZOOM_INSTALL_CREATE_DIR','zOOm Asennus yritt�� luoda kuvakansiota "images/zoom" ...');
define ('_ZOOM_INSTALL_CREATE_DIR_WM','zOOm asennus yritt�� luoda hakemiston "images/zoom/watermarks" ...');
define ('_ZOOM_INSTALL_CREATE_DIR_SUCC','valmis!');
define ('_ZOOM_INSTALL_CREATE_DIR_FAIL','ep�onnistui!');
define ('_ZOOM_INSTALL_CREATE_DBASE_SUCC','Tietokanta luotu.');
define ('_ZOOM_INSTALL_UPGRADED_DBASE_SUCC','Tietokanta p�ivitetty.');
define ('_ZOOM_INSTALL_MESS1','zOOm Kuvagalleria asennettu onnistuneesti.<br>Voit nyt luoda albumeitasi!');
define ('_ZOOM_INSTALL_MESS2','HUOM: Ensimm�iseksi sinun tulee tarkistaa asetukset <br>komponenttivalikon "zOOm Media Gallery Admin" kohdasta, napsauta sit�<br> ja valitse asetukset-sivu Yll�pitoj�rjestelm�st�.');
define ('_ZOOM_INSTALL_MESS3','T��ll� voit muuttaa asetuksia saadaksesi mukautettua zOOm gallerian j�rjestelm��si.');
define ('_ZOOM_INSTALL_MESS4','Luo vain galleria ja olet valmis aloittamaan!');
define ('_ZOOM_INSTALL_MESS_FAIL1','zOOM Gallerian asennus ei onnistunut!');
define ('_ZOOM_INSTALL_MESS_FAIL2','Seuraavat hakemistot tulee luoda j�lkeenp�in "0777" oikeuksilla:<br />'
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
define ('_ZOOM_INSTALL_MESS_FAIL3','Luotuasi hakemistot oikeuksineen ,mene <br /> "Components -> zOOm Media Gallery" ja m��rit� asetukset kohdalleen.');
?>