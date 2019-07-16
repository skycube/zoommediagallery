<?php
//zOOm Media Gallery//
/** 
-----------------------------------------------------------------------
|  zOOm Media Gallery! by Mike de Boer - a multi-gallery component    |
-----------------------------------------------------------------------

-----------------------------------------------------------------------
|                                                                     |
| Author: Mike de Boer, <http://www.mikedeboer.nl>                    |
| Copyright: copyright (C) 2004 by Mike de Boer                       |
| Description: zOOm Media Gallery, a multi-gallery component for      |
|              Joomla!. It's the most feature-rich gallery component  |
|              for Joomla!! For documentation and a detailed list     |
|              of features, check the zOOm homepage:                  |
|              http://www.zoomfactory.org                             |
| License: GPL                                                        |
| Filename: hungarian.php                                             |
| A ford�t�st modos�totta: Marsalk� Istv�n 2006.12.16.                |
| Az RC4 modos�t�s k�sz�tette: Marsalk� Istv�n 2007.02.12.            |
-----------------------------------------------------------------------
* @version $Id: english.php,v 1.35 2006/11/04 18:50:48 kevinuru Exp $
* @package zOOm Media Gallery
* @author Mike de Boer <mailme@mikedeboer.nl> 
**/
// MOS Intruder Alerts
defined( '_VALID_MOS' ) or die( 'K�zvetlen hozz�f�r�s nem enged�lyezett.' );
//Language translation
define("_ZOOM_DATEFORMAT","%d.%m.%Y %H:%M"); // use the PHP strftime Format, more info at http://www.php.net
//define("_ZOOM_ISO","iso-8859-2"); //Csak az RC4-ben
define("_ZOOM_PICK","Gal�ria kiv�laszt�sa");
define("_ZOOM_DELETE","T�rl�s");
define("_ZOOM_BACK","Vissza");
define("_ZOOM_MAINSCREEN","Nyit� oldal");
define("_ZOOM_BACKTOGALLERY","Vissza a gal�ri�khoz");
define("_ZOOM_INFO_DONE","K�sz!");
define("_ZOOM_TOOLTIP", "zOOm Eszk�ztipp");
define("_ZOOM_WARNING", "zOOm figyelmeztet�s!");

//Gallery admin page
define("_ZOOM_ADMINSYSTEM","Admin rendszer");
define("_ZOOM_USERSYSTEM","Felhaszn�l�i rendszer");
define("_ZOOM_ADMIN_TITLE","M�dia gal�ria adminisztr�ci�s rendszer");
define("_ZOOM_USER_TITLE","M�dia gal�ria felhaszn�l�i rendszer");
define("_ZOOM_CATSMGR","Gal�ria kezel�");
define("_ZOOM_CATSMGR_DESCR","�j gal�ria l�trehoz�sa, megl�v�k m�dos�t�sa vagy t�rl�se.");
define("_ZOOM_SETTINGS_DDONOF","Fogd �s vidd enged�lyez�se");
define("_ZOOM_NEW","�j gal�ria");
define("_ZOOM_DEL","Gal�ria t�rl�se");
define("_ZOOM_ORDERSAVE","Rendez�sek ment�se"), //Csak az RC4-n�l
define("_ZOOM_MEDIAMGR","M�dia kezel�");
define("_ZOOM_MEDIAMGR_DESCR","Szerkeszt�s, t�rl�s, �j m�dia automatikus keres�se vagy manu�lis felt�lt�se.");
define("_ZOOM_THUMB", "Zoom b�lyegk�pek");
define("_ZOOM_THUMB_DESCR", "K�nnyen �sszesz�molja a b�lyegk�peidet.");
define("_ZOOM_UPLOAD","F�jl(ok) felt�lt�se");
define("_ZOOM_EDIT","Gal�ria szerkeszt�se");
define("_ZOOM_ADMIN_CREATE","Adatb�zis l�trehoz�sa");
define("_ZOOM_ADMIN_CREATE_DESCR","�j adatt�bl�k l�trehoz�sa amiket majd az albumokhoz lehet haszn�lni");
define("_ZOOM_HD_PREVIEW","El�n�zet");
define("_ZOOM_HD_CHECKALL","Mind kijel�l�se/kijel�l�s megsz�ntet�se");
define("_ZOOM_HD_CREATEDBY","L�trehozta:");
define("_ZOOM_HD_AFTER","Besz�r�s ezut�n");
define("_ZOOM_HD_HIDEMSG","'Nincs m�dia' sz�veg elrejt�se");
define("_ZOOM_HD_NAME","Gal�ra neve");
define("_ZOOM_HD_DIR","K�nyvt�r");
define("_ZOOM_HD_NEW","�j gal�ria");
define("_ZOOM_HD_SHARE","Gal�ria megoszt�sa");
define("_ZOOM_SHARE","Megoszt�s");
define("_ZOOM_UNSHARE","Nincs megoszt�s");
define("_ZOOM_PUBLISH","Publik�l�s");
define("_ZOOM_UNPUBLISH","Visszavon�s");
define("_ZOOM_TOPLEVEL","Legfels� szint");
define("_ZOOM_HD_UPLOAD","F�jl felt�lt�se");
define("_ZOOM_A_ERROR_ERRORTYPE","Hiba t�pus");
define("_ZOOM_A_ERROR_IMAGENAME","K�p neve");
define("_ZOOM_A_ERROR_NOFFMPEG","<u>FFmpeg</u> nem el�rhet�");
define("_ZOOM_A_ERROR_NOPDFTOTEXT","<u>PDFtoText</u> nem el�rhet�");
define("_ZOOM_A_ERROR_NOTINSTALLED","Nincs telep�tve");
define("_ZOOM_A_ERROR_CONFTODB","Hiba t�rt�nt a be�ll�t�sok ment�se k�zben!");
define("_ZOOM_A_MESS_NOT_SHURE","* Bizonytalans�g eset�n az alapbe�ll�t�s haszn�lata: \"auto\" ");
define("_ZOOM_A_MESS_SAFEMODE1","Megjegyz�s: \"Safe Mode\" aktiv�lva van, ez�rt el�fordulhat, hogy nagyobb f�jlok let�lt�se nem fog m�k�dni!<br />Az Adminisztr�ci�s rendszerben �t kell kapcsolni FTP-m�dba.");
define("_ZOOM_A_MESS_SAFEMODE2","Megjegyz�s: \"Safe Mode\" aktiv�lva van, ez�rt el�fordulhat, hogy nagyobb f�jlok let�lt�se nem fog m�k�dni!<br />Az Adminisztr�ci�s rendszerben �t kell kapcsolni FTP-m�dba.");
define("_ZOOM_A_MESS_PROCESSING_FILE","F�jl feldolgoz�sa...");
define("_ZOOM_A_MESS_NOTOPEN_URL","Nem lehet megnyitni a k�vetkez� URL-t:");
define("_ZOOM_A_MESS_PARSE_URL","\"%s\" �tkutat�sa k�pek ut�n... "); // %s = $url
define("_ZOOM_A_MESS_NOJAVA","Ha csak egy sz�rke mez� jelent meg vagy nem lehet let�lteni akkor val�sz�n�leg<br />nincs telep�tve a leg�jabb Java futtat�k�rnyezet. A <a href=\"http://www.java.com\" target=\"_blank\">Java.com</a> <br /> oldalr�l le lehet t�lteni a legfrissebb verzi�t.");
define("_ZOOM_SETTINGS","Be�ll�t�sok");
define("_ZOOM_SETTINGS_DESCR","A be�ll�t�sok megtekint�se �s megv�ltoztat�sa.");
define("_ZOOM_SETTINGS_TAB1","Rendszer");
define("_ZOOM_SETTINGS_TAB2","M�dia");
define("_ZOOM_SETTINGS_TAB3","Tulajdons�gok");
define("_ZOOM_SETTINGS_TAB4","Elrendez�s");
define("_ZOOM_SETTINGS_TAB5","V�zjel");
define("_ZOOM_SETTINGS_TAB6","Biztons�g");
define("_ZOOM_SETTINGS_TAB7","Hozz�f�r�s");
define("_ZOOM_SETTINGS_TAB8","Reset");
define("_ZOOM_SETTINGS_ERASE","A t�rl�sre kattintva a gal�ria adatai alaphelyzetbe �llnak. <b>Ez t�rli az �sszes k�pet is!</b>");
define("_ZOOM_SETTINGS_CONVTYPE","T�pus �talak�t�s");
define("_ZOOM_SETTINGS_GALLERY_FEATURES","Gal�ria tulajdons�gok");
define("_ZOOM_SETTINGS_VIEW_FEATURES","M�dia tulajdons�gok");

define("_ZOOM_SETTINGS_GALLERY","Gal�ria be�ll�t�s");
define("_ZOOM_SETTINGS_VIEW","M�dia be�ll�t�s");

define("_ZOOM_SETTINGS_GENERAL_FEATURES","�ltal�nos tuajdons�gok");
define("_ZOOM_SETTINGS_AUTODET","Automatikus �rz�kel�s: ");
define("_ZOOM_SETTINGS_IMGPATH","M�dia f�jlok �tvonala:");
define("_ZOOM_SETTINGS_TTIMGPATH","A jelenlegi �tvonal: ");
define("_ZOOM_SETTINGS_CONVSETTINGS","K�p�talak�t�s be�ll�t�sai:");
define("_ZOOM_SETTINGS_IMPATH","ImageMagick �tvonala: ");
define("_ZOOM_SETTINGS_NETPBMPATH"," vagy NetPBM: ");
define("_ZOOM_SETTINGS_FFMPEGPATH","FFmpeg �tvonala:");
define("_ZOOM_SETTINGS_FFMPEGTOOLTIP","FFmpeg sz�ks�ges a vide�k b�lyegk�peinek l�trehoz�s�hoz.<br />T�mogatott kiterjeszt�sek: ");
define("_ZOOM_SETTINGS_OVERRIDE_FFMPEG","Haszn�lja az FFmpeg-et m�g ha a zOOm nem k�pes ellen�rizni a renszer megl�t�t");
define("_ZOOM_SETTINGS_PDFTOTEXTPATH","PDFtoText �tvonala:");
define("_ZOOM_SETTINGS_XPDFTOOLTIP","pdf2text, ami az Xpdf csomag r�sze, sz�ks�ges a PDF f�jlok indexel�s�hez.");
define("_ZOOM_SETTINGS_OVERRIDE_PDF","Haszn�lja az PDFtoText-et m�g ha a zOOm nem k�pes ellen�rizni a renszer megl�t�t");
define("_ZOOM_SETTINGS_MAXSIZE","Image max. size: ");
define("_ZOOM_SETTINGS_MAXSIZEKB","Medium - including images - max. size (in kB): "); //added: 08-08-2006
define("_ZOOM_SETTINGS_MAXSIZEKB_WARNING","A felt�lt�si limit az ISP serveren l�v� PHP be�ll�t�st�l f�gg.<br /> <b>%s.</b><br />�gy a be�ll�t�s nem lehet nagyobb, ez�rt NE haszn�lj nagyobb �rt�ket!"); //added: 09-01-2006
define("_ZOOM_SETTINGS_THUMBSETTINGS","B�lyegk�p be�ll�t�sok:");
define("_ZOOM_SETTINGS_QUALITY","NetPBM �s GD2 JPEG min�s�ge: ");
define("_ZOOM_SETTINGS_SIZE","Kis k�p maxim�lis m�rete: ");
define("_ZOOM_SETTINGS_TEMPNAME","Ideiglenes n�v: ");
define("_ZOOM_SETTINGS_AUTONUMBER","A k�pek nev�nek automatikus sz�moz�sa (pl. 1,2,3)");
define("_ZOOM_SETTINGS_TEMPDESCR","Ideiglenes le�r�s: ");
define("_ZOOM_SETTINGS_TITLE","Gal�ria c�me:");
define("_ZOOM_SETTINGS_SUBCATSPG","Al�rendelt gal�ri�k oszlopsz�ma");
define("_ZOOM_SETTINGS_COLUMNS","No. of thumbnail columns");
define("_ZOOM_SETTINGS_THUMBSPG","Thumbs per page");
define("_ZOOM_SETTINGS_CMTLENGTH","Megjegyz�sek maxim�lis hossza");
define("_ZOOM_SETTINGS_CHARS","karakter");
define("_ZOOM_SETTINGS_GALLERYPREFIX","Gal�ria c�m�nek el�tagja");
define("_ZOOM_SETTINGS_SHOWOCCSPACE","Elfoglalt ter�let megjelen�t�se a M�diakezel�ben");
define("_ZOOM_SETTINGS_TEMPLATE_TITLE","Sablon");
define("_ZOOM_SETTINGS_FEATURES_TITLE","Elemek be/ki");
define("_ZOOM_SETTINGS_CSS_TITLE","St�luslapok szerkeszt�se");
define("_ZOOM_SETTINGS_DISPLAY_TITLE","Megjelen�tend� adatok be/ki");
define("_ZOOM_SETTINGS_TEMPLATE_CHOOSE","V�lassz sablont �s �ll�tsd be a gal�ria n�zet�t.");
define("_ZOOM_SETTINGS_TEMPLATE_TABLES","Klasszikus)");
define("_ZOOM_SETTINGS_TEMPLATE_TABLELESS","Modern");
define("_ZOOM_SETTINGS_COMMENTS","Megjegyz�s");
define("_ZOOM_SETTINGS_POPUP","Felbukkan� m�dia");
define("_ZOOM_SETTINGS_CATIMG","A kateg�ria k�p�nek mutat�sa");
define("_ZOOM_SETTINGS_SLIDESHOW","Vet�t�s");
define("_ZOOM_SETTINGS_ZOOMLOGO","zOOm-logo megjelen�t�se");
define("_ZOOM_SETTINGS_DESCRINGAL","Mutassa az album le�r�s�t a gal�ri�ban"); //Csak az RC4-ben

define("_ZOOM_SETTINGS_SHOWHITS","Tal�latok sz�m�nak megjelen�t�se");
define("_ZOOM_SETTINGS_READEXIF","EXIF adatok kiolvas�sa");
define("_ZOOM_SETTINGS_EXIFTOOLTIP","Ez a lehet�s�g tov�bbi EXIF adatokat jelen�t meg an�lk�l, hogy az EXIF modul telep�tve lenne a PHP kiszolg�l�ra.");
define("_ZOOM_SETTINGS_READID3","Mp3 ID3-adat beolvas�sa");
define("_ZOOM_SETTINGS_ID3TOOLTIP","Ez a lehet�s�g megmutatja a kieg�sz�t� ID3 v1.1 �s v2.0 adatokat az mp3 f�jl r�szleinek megtekint�se k�zben.");
define("_ZOOM_SETTINGS_RATING","Helyez�s");
define("_ZOOM_SETTINGS_CSS","Felbukkan� ablak st�luslapja");
define("_ZOOM_SETTINGS_CSSZOOM","zOOm gal�ria &amp; m�dia n�zet");
define("_ZOOM_SETTINGS_SUCCESS","A be�ll�t�sok sikeresen friss�tve lettek!");
define("_ZOOM_SETTINGS_ZOOMING","K�p nagy�t�s");
define("_ZOOM_SETTINGS_ORDERBY","B�lyegk�pek rendez�si elve:");
define("_ZOOM_SETTINGS_CATORDERBY","al�rendelt kateg�ri�k rendez�si elve:");

define("_ZOOM_SETTINGS_NO_POP","Az �sszes felugr�ablak kikapcsol�sa"); //Csak az RC4-ben
define("_ZOOM_SETTINGS_STANDARD_POP","Szabv�nyos felugr�ablak"); //Csak az RC4-ben
define("_ZOOM_SETTINGS_LIGHTBOX_POP","Lightbox JS Popup"); //Csak az RC4-ben
define("_ZOOM_SETTINGS_LIGHTBOX_SLIDESHOW","<strong><i>KAPCSOLD KI HA VET�T�ST SZERETN�L LIGHTBOX JS-EL!</i></strong>"); //Csak az RC4-ben

define("_ZOOM_SETTINGS_DATE_ASC","D�TUM, n�vekv�");
define("_ZOOM_SETTINGS_DATE_DESC","D�TUM, cs�kken�");
define("_ZOOM_SETTINGS_FLNM_ASC","F�JL NEVE, n�vekv�");
define("_ZOOM_SETTINGS_FLNM_DESC","F�JL NEVE, cs�kken�");
define("_ZOOM_SETTINGS_NAME_ASC","N�V, n�vekv�");
define("_ZOOM_SETTINGS_NAME_DESC","N�V, cs�kken�");
define("_ZOOM_SETTINGS_LBTOOLTIP","A lightbox egy v�s�rl�i kos�rszer� dolog, amibe a felhaszn�l�k kiv�lasztott t�telei ker�lnek �s le lehet t�lteni ZIP form�tumban.");
define("_ZOOM_SETTINGS_SHOWNAME","N�v megjelen�t�se");
define("_ZOOM_SETTINGS_SHOWDESCR","Le�r�s megjelen�t�se");
define("_ZOOM_SETTINGS_SHOWKEYWORDS","Keres� kifejez�sek megjelen�t�se");
define("_ZOOM_SETTINGS_SHOWDATE","D�tum megjelen�t�se");
define("_ZOOM_SETTINGS_SHOWUNAME","Felhaszn�l�n�v megjelen�t�se");
define("_ZOOM_SETTINGS_SHOWFILENAME","F�jln�v megjelen�t�se");
define("_ZOOM_SETTINGS_METABOX","Lebeg� ablak megjelen�t�se a gal�ria r�szleteivel.");
define("_ZOOM_SETTINGS_METABOXTOOLTIP","A gal�ria sebess�g�nek n�vel�s�hez nem kell bejel�lni. Nagy adatb�zis eset�n hasznos.");
define("_ZOOM_SETTINGS_ECARDS","E-k�peslapok");
define("_ZOOM_SETTINGS_ECARDS_LIFETIME","Az e-k�peslapok �lettartama");
define("_ZOOM_SETTINGS_ECARDS_ONEWEEK","1 h�t");
define("_ZOOM_SETTINGS_ECARDS_TWOWEEKS","2 h�t");
define("_ZOOM_SETTINGS_ECARDS_ONEMONTH","1 h�nap");
define("_ZOOM_SETTINGS_ECARDS_THREEMONTHS","3 h�nap");
define("_ZOOM_SETTINGS_SHOWSEARCH","Keres�s mez� az �sszes oldalon");
define("_ZOOM_SETTINGS_BOX_ANIMATE","Dobozok anim�l�sa");
define("_ZOOM_SETTINGS_BOX_PROPERTIES","Tulajdons�g dobozok vizu�lis �llapota");
define("_ZOOM_SETTINGS_BOX_META","Metaadat doboz vizu�lis �llapota");
define("_ZOOM_SETTINGS_BOX_COMMENTS","Hozz�sz�l�s doboz vizu�lis �llapota");
define("_ZOOM_SETTINGS_BOX_RATING","�rt�kel�s doboz vizu�lis �llapota");
define("_ZOOM_SETTINGS_TOPTEN","A \"Top10\" link megjelen�t�se a f�oldalon");
define("_ZOOM_SETTINGS_LASTSUBM","Az \"Utols� bek�ld�tt m�dia\" link megjelen�t�se a f�oldalon");
define("_ZOOM_SETTINGS_SETMENUOPTION","'M�dia felt�lt�s' hivatkoz�s mutat�sa a felhaszn�l�i men�ben");
define("_ZOOM_SETTINGS_USEFTP","FTP m�d haszn�lata?");
define("_ZOOM_SETTINGS_FTPHOST","Kiszolg�l� neve");
define("_ZOOM_SETTINGS_FTPUNAME","Felhaszn�l� n�v");
define("_ZOOM_SETTINGS_FTPPASS","Jelsz�");
define("_ZOOM_SETTINGS_FTPWARNING","Figyelmeztet�s: A jelsz� titkos�t�s n�lk�l lesz t�rolva!");
define("_ZOOM_SETTINGS_FTPHOSTDIR","k�nyvt�r a kiszolg�l�n");
define("_ZOOM_SETTINGS_MESS_FTPHOSTDIR","A Mambo/Joomla teljes el�r�si �tj�t meg kell adni. FONTOS: perjel <b>n�lk�l</b>!");
define("_ZOOM_SETTINGS_GROUP","Csoport");
define("_ZOOM_SETTINGS_PRIV_DESCR","A Mambo/Joomla-ban ismert �sszes felhaszn�l�csoport jogosults�ga megv�ltoztathat� tov�bb� megv�ltoztathat� a csoportnak mindenegyes tagj�� is!<br />Egy felhaszn�l� �gy a k�vetkez� tev�kenys�geket v�gezheti: f�jlok feltt�lt�se, m�dia szerkeszt�se/t�rl�se, (megosztott) gal�ri�k k�sz�t�se / szerkeszt�se / t�rl�se.");
define("_ZOOM_SETTINGS_CLOSE","A \"Bez�r\" link megjelen�t�se a felbukkan� ablakban");
define("_ZOOM_SETTINGS_MAINSCREEN","A F�k�perny� megjelen�t�se az �tvonal s�vban");
define("_ZOOM_SETTINGS_NAVBUTTONS","A navig�ci�s gombok megjelen�t�se a felbukkan� ablakban");
define("_ZOOM_SETTINGS_PROPERTIES","Az al�bbi m�dia tulajdons�gainak megjelen�t�se");
define("_ZOOM_SETTINGS_MEDIAFOUND","A \"Media megtal�lva\" sz�veg megjelen�t�se a gal�ri�ban");
define("_ZOOM_SETTINGS_ANONYMOUS_COMMENTS","Vend�g �rhat megjegyz�st?");
define("_ZOOM_SETTINGS_WM_ENABLE_TITLE","Enged�lyezed ezt a tulajdond�got?");
define("_ZOOM_SETTINGS_WM_TITLE", "V�zjeled");
define("_ZOOM_SETTINGS_WM_DESCR", "A v�zjeled megjelenik a k�peidben a honlapodon. "
 . "A k�p l�that�, de a l�togat� nem tudja m�solni vagy nyomtatni."
 . "<br /><br /><b>Javaslat:</b> haszn�ld a c�g log�dat v�zjelk�nt. "
 . "�ll�tsd be �tl�tsz� h�tt�rk�pnek!");
define("_ZOOM_SETTINGS_WM_IMG", "K�p");
define("_ZOOM_SETTINGS_WM_NOWATERMARKS", "Nem tal�ltam v�zjelet.T�ltsd fel ism�t az �j v�zjelet.");
define("_ZOOM_SETTINGS_WM_PLACEMENT_TITLE", "Elhelyez�s");
define("_ZOOM_SETTINGS_WM_PLACEMENT_DESCR", "Itt tudod pozicion�lni a c�l k�p v�zjel�t, v�laszd ki a sz�rke dobozban a megfelel� pozici�t.");
define("_ZOOM_SETTINGS_WM_FILE","V�zjel felt�lt�s");
define("_ZOOM_SETTINGS_WM_NOWATERMARKS", "Nem tal�ltam v�zjelet.T�ltsd fel ism�t az �j v�zjelet.");
define("_ZOOM_SETTINGS_WM_UPLOAD_SUCCESS","V�zjel sikeresen felt�ltve!");
define("_ZOOM_SETTINGS_WM_UPLOAD_FAIL","V�zjel felt�lt�se nem siker�lt.");
define("_ZOOM_SETTINGS_WM_DEL_SUCCESS","V�zjel sikeresen t�r�lve!");
define("_ZOOM_SETTINGS_WM_DEL_FAIL","V�zjelet nem tudtam t�rlni.");
define("_ZOOM_SYSTEM_TITLE","Rendszer be�ll�t�sok");
define("_ZOOM_YES","Igen");
define("_ZOOM_NO","Nem");
define("_ZOOM_VISIBLE","L�that�");
define("_ZOOM_HIDDEN","Rejtett");
define("_ZOOM_SAVE","Ment�s");
define("_ZOOM_MOVEFILES","M�dia mozgat�sa");
define("_ZOOM_BUTTON_MOVE","Mozgat�s");
define("_ZOOM_MOVEFILES_STEP1","C�lgal�ria kiv�laszt�sa �s a m�dia mozgat�sa");
define("_ZOOM_ALERT_MOVE","%s aM�dia sikeresen �tmozgatva, %s a M�di�t nemsiker�lt �tmozgatni.");
define("_ZOOM_OPTIMIZE","T�bl�k optimaliz�l�sa");
define("_ZOOM_OPTIMIZE_DESCR","A zOOm Media Gallery el�g sokat haszn�lja a t�bl�kat ez�rt el�fordulhatnak benn�k nem haszn�lt adatok. Ide kattintva el lehet ezeket t�vol�tani.");
define("_ZOOM_OPTIMIZE_SUCCESS","A zOOm Media Gallery t�bl�i sikeresen optimaliz�lva lettek!");
define("_ZOOM_UPDATE","zOOm Media Gallery friss�t�se");
define("_ZOOM_UPDATE_DESCR","�j szolg�ltat�sok hozz�ad�sa, probl�m�k �s hib�k megold�sa! A legfrissebb let�lt�sek a <a href=\"http://zoom.ummagumma.nl\" target=\"_blank\">zoom.ummagumma.nl</a> c�men tal�lhat�ak!");
define("_ZOOM_UPDATE_XMLDATE","Az utols� friss�t�s d�tuma");
define("_ZOOM_UPDATE_NOUPDATES","M�g nincsennek friss�t�sek!"); // added 11-08
define("_ZOOM_UPDATE_PACKAGE","ZIP-f�jl friss�t�se: ");
define("_ZOOM_CREDITS","A zOOm Media Gallery n�vjegye");

//Image actions
define("_ZOOM_DISKSPACEUSAGE","Lemezm�ret: jelenleg %s haszn�latban");
define("_ZOOM_UPLOAD_SINGLE","egy darab (ZIP-)f�jl");
define("_ZOOM_UPLOAD_MULTIPLE","T�bb f�jl");
define("_ZOOM_UPLOAD_DRAGNDROP","Fogd �s vidd");
define("_ZOOM_UPLOAD_SCANDIR","k�nyvt�rak ellen�rz�se");
define("_ZOOM_UPLOAD_INTRO","A <b>keres�s</b> gombra kattintva lehet a m�di�kat felt�lteni.");
define("_ZOOM_UPLOAD_STEP1","1. a felt�lteni k�v�nt f�jlok kiv�laszt�sa: ");
define("_ZOOM_UPLOAD_STEP2","2. a c�lgal�ria kiv�laszt�sa amibe a f�jlok ker�lnek: ");
define("_ZOOM_UPLOAD_STEP3","3. A keres�s gombot lehet haszn�lni a f�nyk�pek sz�m�t�g�pen val� keres�s�hez.");
define("_ZOOM_SCAN_STEP1","1. l�p�s: hely megad�sa ahol a m�di�kat keresni kell...");
define("_ZOOM_SCAN_STEP2","2. l�p�s: a felt�lteni k�v�nt f�jlok kiv�laszt�sa...");
define("_ZOOM_SCAN_STEP3","3. l�p�s: a program feldolgozza a kiv�lasztott f�jlokat..");
define("_ZOOM_SCAN_STEP1_DESCR","A hely lehet egy URL vagy egy k�nyvt�r a szerveren.<br />&nbsp;   Tipp: FTP-vel fel leleht t�lteni a szerverre a k�peket �s ut�na azt itt megadni!");
define("_ZOOM_SCAN_STEP2_DESCR1","Feldolgoz�s");
define("_ZOOM_SCAN_STEP2_DESCR2","Mint egy helyi k�nyvt�rat");
define("_ZOOM_FORMCREATE_NAME","N�v");
define("_ZOOM_FORM_IMAGEFILE","M�dium");
define("_ZOOM_FORM_IMAGEFILTER","T�mogatott f�jlt�pusok");
define("_ZOOM_FORM_INGALLERY","gal�ri�ban");
define("_ZOOM_FORM_SETFILENAME","A m�dia neve a f�jl eredeti neve legyen.");
define("_ZOOM_FORM_IGNORESIZES","Be�ll�tott maxim�lis k�pm�retek elvet�se"); //added: 12-08
define("_ZOOM_FORM_LOCATION","�tvonal");
define("_ZOOM_BUTTON_SCAN","URL vagy k�nyvt�r �tad�sa");
define("_ZOOM_BUTTON_UPLOAD","Felt�lt�s");
define("_ZOOM_BUTTON_EDIT","Szerkeszt�s");
define("_ZOOM_BUTTON_CREATE","L�trehoz�s");
define("_ZOOM_CONFIRM_WIPE","VIGY�ZAT!\\n Ez egy teljes t�rl�si funkci� a zOOm Gal�ri�t �s az �sszes k�pet �s gal�ri�t let�rli.\\n\\n Biztos folytatni akarod?");
define("_ZOOM_CONFIRM_DEL","Ez az opci� a teljes gal�ri�t t�rli a m�di�kkal egy�tt!\\nBiztos ezt kell tenni?");
define("_ZOOM_CONFIRM_DELMEDIUM","A m�dium teljes t�rl�sre ker�l!\\nBiztos ezt kell tenni?");
define("_ZOOM_ALERT_DEL","A gal�ria t�r�lve lett!");
define("_ZOOM_ALERT_NOCAT","Nincs gal�ria kiv�lasztva!");
define("_ZOOM_ALERT_NOMEDIA","Nincs m�dia kiv�lasztva!");
define("_ZOOM_ALERT_EDITOK","A gal�ria mez�i sikeresen szerkesztve lettek!");
define("_ZOOM_ALERT_NEWGALLERY","�j gal�ria l�trehozva.");
define("_ZOOM_ALERT_NONEWGALLERY","A gal�ria nem lett l�trehoza!");
define("_ZOOM_ALERT_EDITIMG","A m�dium tulajdons�gai szerkesztve lettek.");
define("_ZOOM_ALERT_DELPIC","A m�dia t�r�lve lett.");
define("_ZOOM_ALERT_NODELPIC","A m�di�t nem lehet t�r�lni!");
define("_ZOOM_ALERT_MOVEFAILURE","A m�di�t nem tudtam �tmozgatni."); //added: 08-08-2006
define("_ZOOM_ALERT_NOPICSELECTED","Nincs m�dium kiv�lasztva.");
define("_ZOOM_ALERT_NOPICSELECTED_MULT","Nincs m�dia kiv�lasztva.");
define("_ZOOM_ALERT_UPLOADOK","Medium uploaded succesfully!");
define("_ZOOM_ALERT_UPLOADOK","A m�diaum sikeresen fel lett t�ltve!");
define("_ZOOM_ALERT_UPLOADSOK","A m�dia sikeresen fel lett t�ltve!");
define("_ZOOM_ALERT_WRONGFORMAT_MULT","Rossz form�tum.");
define("_ZOOM_ALERT_TOOBIG","A m�dia file m�rete t�l nagy; %s ennyi amegengedett maximum."); //added 08-08-2006
define("_ZOOM_ALERT_IMGERROR","Hiba a k�p �tm�retez�se / kis k�p l�trehoz�sa sor�n.");
define("_ZOOM_ALERT_PCLZIPERROR","Hiba a kicsomagol�s sor�n.");
define("_ZOOM_ALERT_INDEXERROR","Hiba a dokumentum indexel�se sor�n.");
define("_ZOOM_ALERT_WATERMARKERROR","Hiba t�rt�n a v�zjel beviteli esem�ny sor�n.");
define("_ZOOM_ALERT_IMGFOUND","K�pet tal�ltam.");
define("_ZOOM_INFO_CHECKCAT","Ki kell v�lasztani egy gal�ri�t a felt�lt�s opci� haszn�lata el�tt!");
define("_ZOOM_BUTTON_ADDIMAGES","M�dia hozz�ad�sa");
define("_ZOOM_BUTTON_REMIMAGES","M�dia t�rl�se");
define("_ZOOM_INFO_PROCESSING","F�jl feldolgoz�sa:");
define("_ZOOM_ITEMEDIT_TAB1","Tulajdons�gok");
define("_ZOOM_ITEMEDIT_TAB2","Tagok");
define("_ZOOM_ITEMEDIT_TAB3","M�veletek");
define("_ZOOM_USERSLIST_LINE1",">>Az elem tagjainak kiv�laszt�sa<<");
define("_ZOOM_USERSLIST_ALLOWALL",">>nyilv�nos hozz�f�r�s<<");
define("_ZOOM_USERSLIST_MEMBERSONLY",">>Csak tagok<<");
define("_ZOOM_PUBLISHED","Publik�lva");
define("_ZOOM_SHARED","gal�ria megoszt�sa");
define("_ZOOM_ROTATE","k�p elforgat�sa 90 fokkal");
define("_ZOOM_CLOCKWISE","�ramutat� j�r�ssal megegyez�en");
define("_ZOOM_CCLOCKWISE","�ramutat� j�r�ssal ellent�tesen");
define("_ZOOM_FLIP_HORIZ","K�pt�kr�z�s v�zszintesen");
define("_ZOOM_FLIP_VERT","K�pt�kr�z�s f�gg�legesen");
define("_ZOOM_PROGRESS_DESCR","K�r�s feldolgoz�sa folyamatban... V�rjon.");

//Navigation (including Slideshow buttons)
define("_ZOOM_SLIDESHOW","Bemutat�:");
define("_ZOOM_PREV_IMG","El�z� k�p");
define("_ZOOM_NEXT_IMG","K�vetkez� k�p");
define("_ZOOM_FIRST_IMG","Els� k�p");
define("_ZOOM_LAST_IMG","Utols� k�p");
define("_ZOOM_PLAY","Lej�tsz�s");
define("_ZOOM_STOP","�llj");
define("_ZOOM_RESET","Vissza�ll�t");
define("_ZOOM_FIRST","Els�");
define("_ZOOM_LAST","Utols�");
define("_ZOOM_PREVIOUS","El�z�");
define("_ZOOM_NEXT","K�vetkez�");
define("_ZOOM_IN_DESC","Mozgassa az egeret a k�p felett �s nyomja le az UP vagy a DOWN gombot!");

//Gallery actions
define("_ZOOM_SEARCH_BOX","gyorskeres�s...");
define("_ZOOM_ADVANCED_SEARCH","b�v�tett keres�s");
define("_ZOOM_SEARCH_KEYWORD","kulcssz� keres�se");
define("_ZOOM_IMAGES","m�dia");
define("_ZOOM_IMGFOUND","tal�lhat� - oldalsz�m: ");
define("_ZOOM_SUBGALLERIES","al�rendelt gal�ri�k");
define("_ZOOM_ALERT_COMMENTOK","A megjegyz�s hozz� lett adva!");
define("_ZOOM_ALERT_COMMENTERROR","M�r megt�rt�nt a megjegyz�s hozz�ad�sa!");
define("_ZOOM_ALERT_VOTE_OK","A szavazatot t�roltuk! K�sz�nj�k.");
define("_ZOOM_ALERT_VOTE_ERROR","M�r r�gz�tett�k a szavazatot!");
define("_ZOOM_WINDOW_CLOSE","Bez�r�s");
define("_ZOOM_NOPICS","Nincs m�dia a gal�ri�ban");
define("_ZOOM_PROPERTIES","Tulajdons�gok");
define("_ZOOM_COMMENTS","Megjegyz�sek");
define("_ZOOM_COMMENTS_INTRO","Enged�lyezd a lenti megjegyz�sed:"); //Csak az RC4-ben

define("_ZOOM_NO_COMMENTS","M�g nincs megjegyz�s.");
define("_ZOOM_SAYS","k�zl�sek"); //Csak az RC4-ben
define("_ZOOM_YOUR_NAME","N�v");
define("_ZOOM_ADD","Hozz�ad");
define("_ZOOM_NAME","N�v");
define("_ZOOM_DATE","D�tum");
define("_ZOOM_UNAME","Hozz�adta: ");
define("_ZOOM_DESCRIPTION","Le�r�s");
define("_ZOOM_IMGNAME","N�v");
define("_ZOOM_FILENAME","F�jln�v");
define("_ZOOM_CLICKDOCUMENT","(a f�jln�vre kattintva lehet megnyitni a dokumentumot)");
define("_ZOOM_KEYWORDS","Kulcsszavak");
define("_ZOOM_HITS","tal�lat");
define("_ZOOM_CLOSE","Bez�r");
define("_ZOOM_NOIMG", "Nem tal�lhat� m�dia!");
define("_ZOOM_NONAME", "Meg kell adni egy nevet!");
define("_ZOOM_NOCAT", "Nincs kateg�ria kiv�lasztva!");
define("_ZOOM_EDITPIC", "M�dium szerkeszt�se");
define("_ZOOM_SETCATIMG","Gal�ria k�p�nek be�ll�tva");
define("_ZOOM_SETPARENTIMG","A sz�l� gal�ria k�p�nek be�ll�tva");
define("_ZOOM_PASS","jelsz�");
define("_ZOOM_PASS_REQUIRED","Meg kell adni a jelsz�.<br />Ki kell t�lteni a jelsz� mez�t<br />majd a bel�p�s gombra kell kattintani. K�sz�nj�k.");
define("_ZOOM_PASS_BUTTON","Bel�p�s");
define("_ZOOM_PASS_GALLERY","Jelsz�");
define("_ZOOM_PASS_INNCORRECT","Helytelen jelsz�");

//Hotlinking
define("_ZOOM_SETTINGS_HOTLINK","K�pek Hotlink v�delem enged�lyez�se");
define("_ZOOM_SETTINGS_HPTOOLTIP","Amikor a hotlink v�delem enged�lyezve van, a f�jl neve �s el�rhet�s�ge rejtett lesz.  Ha megpr�b�lja haszn�lni egy m�sik oldalon ez ugyancsak nem lesz l�that�.");


//Lightbox
define("_ZOOM_LIGHTBOX","Kos�r");
define("_ZOOM_LIGHTBOX_GALLERY","A gal�ria kos�rba helyez�se!");
define("_ZOOM_LIGHTBOX_ITEM","Az elem kos�rba helyez�se!");
define("_ZOOM_LIGHTBOX_VIEW","A kos�r megtekint�se");
define("_ZOOM_YOUR_LIGHTBOX","A kos�r tartalma:");
define("_ZOOM_LIGHTBOX_EMPTY","A kosara jelenleg �res.");
define("_ZOOM_LIGHTBOX_ZIPBTN","ZIP f�jl l�trehoz�sa");
define("_ZOOM_LIGHTBOX_PLAYLISTBTN","J�tsz�lista k�sz�t�s �s lej�tsz�s");
define("_ZOOM_LIGHTBOX_CATS","Gal�ri�k");
define("_ZOOM_LIGHTBOX_TITLEDESCR","C�m �s le�r�s");
define("_ZOOM_ACTION","M�velet");
define("_ZOOM_LIGHTBOX_ADDED","Az elem hozz� lett adva a kos�rhoz!");
define("_ZOOM_LIGHTBOX_NOTADDED","Hiba a kos�rhoz val� hozz�ad�s sor�n!");
define("_ZOOM_LIGHTBOX_EDITED","Az elem sikeresen szerkesztve lett!");
define("_ZOOM_LIGHTBOX_NOTEDITED","Hiba az elem szerkeszt�se sor�n!");
define("_ZOOM_LIGHTBOX_DEL","Az elem el lett t�vol�tva a kos�rb�l!");
define("_ZOOM_LIGHTBOX_NOTDEL","Hiba a kos�rb�l val� elt�vol�t�s sor�n!");
define("_ZOOM_LIGHTBOX_NOZIP","M�r l�tre lett hozva a ZIP f�jl a kos�r tartalma alapj�n!");
define("_ZOOM_LIGHTBOX_PARSEZIP","A gal�ria k�peinek feldolgoz�sa...");
define("_ZOOM_LIGHTBOX_DOZIP","ZIP f�jl l�trehoz�sa...");
define("_ZOOM_LIGHTBOX_DLHERE","Most m�r le lehet t�lteni a kos�r tartalm�t.");
define("_ZOOM_LIGHTBOX_PLSUCCESS","A lej�tsz�lista sikeresen elk�sz�lt! Friss�tse a lej�tsz� ablakot!");
define("_ZOOM_LIGHTBOX_PLERROR","Error creating Playlist.");
define("_ZOOM_LIGHTBOX_NOAUDIO","You need to add Audio files to your Lightbox first!");
define("_ZOOM_LIGHTBOX_NOITEMS","Your Lightbox appears to be empty.");

//EXIF information
define("_ZOOM_EXIF","EXIF");
define("_ZOOM_EXIF_SHOWHIDE","Meta adatok megjelen�t�se/elrejt�se");

//MP3 id3 v1.1 or later information
define("_ZOOM_AUDIO_PLAYING","Lej�tsz�s most:");
define("_ZOOM_AUDIO_CLICKTOPLAY","Kattinston ide a f�jl lej�tsz�s�hoz.");
define("_ZOOM_ID3","ID3");
define("_ZOOM_ID3_SHOWHIDE","ID3-tag adat be/ki");
define("_ZOOM_ID3_LENGTH","Hossz");
define("_ZOOM_ID3_QUALITY","Min�s�g");
define("_ZOOM_ID3_TITLE","C�m");
define("_ZOOM_ID3_ARTIST","Szerz�");
define("_ZOOM_ID3_ALBUM","Album");
define("_ZOOM_ID3_YEAR","�v");
define("_ZOOM_ID3_COMMENT","Hozz�sz�l�s");
define("_ZOOM_ID3_GENRE","Genre");

//Video metadata information
define("_ZOOM_VIDEO_SHOWHIDE","Video adat mutat�sa be/ki");
define("_ZOOM_VIDEO_PIXELRATIO","Pixel ar�ny");
define("_ZOOM_VIDEO_QUALITY","Video min�s�g");
define("_ZOOM_VIDEO_AUDIOQUALITY","Audio min�s�g");
define("_ZOOM_VIDEO_CODEC","Kodek");
define("_ZOOM_VIDEO_RESOLUTION","Felbont�s");

//rating
define("_ZOOM_RATING","Helyez�s");
define("_ZOOM_NOTRATED","M�g nincs helyez�s!");
define("_ZOOM_VOTE","szavazat");
define("_ZOOM_VOTES","szavazatok");
define("_ZOOM_RATE0","rossz");
define("_ZOOM_RATE1","gyenge");
define("_ZOOM_RATE2","�tlagos");
define("_ZOOM_RATE3","j�");
define("_ZOOM_RATE4","nagyon j�");
define("_ZOOM_RATE5","t�k�letes!");

//special
define("_ZOOM_TOPTEN","legjobb 10");
define("_ZOOM_LASTSUBM","utols� felt�lt�s");
define("_ZOOM_LASTCOMM","utols� megjegyz�s");
define("_ZOOM_SEARCHRESULTS","Keres�s eredm�nye");
define("_ZOOM_TOPRATED","Legjobbra �rt�kelt");

//ecard
define("_ZOOM_ECARD_SENDAS","A m�dium elk�ld�se e-k�peslapk�nt!");
define("_ZOOM_ECARD_YOURNAME","A felad� neve");
define("_ZOOM_ECARD_YOUREMAIL","A felad� e-mail c�me");
define("_ZOOM_ECARD_FRIENDSNAME","A c�mzett neve");
define("_ZOOM_ECARD_FRIENDSEMAIL","A c�mzett e-mail c�me");
define("_ZOOM_ECARD_MESSAGE","�zenet");
define("_ZOOM_ECARD_SENDCARD","ek�peslap elk�ld�se");
define("_ZOOM_ECARD_SUCCESS","Az e-k�peslap el lett k�ldve.");
define("_ZOOM_ECARD_CLICKHERE","Ide kattintva meg lehet n�zni!");
define("_ZOOM_ECARD_ERROR","Hiba az e-k�peslap elk�ld�se sor�n a k�vetkez�nek");
define("_ZOOM_ECARD_TURN","A h�tlap megtekint�se!");
define("_ZOOM_ECARD_TURN2","Az el�lap megtekint�se!");
define("_ZOOM_ECARD_SENDER","Felad�:");
define("_ZOOM_ECARD_SUBJ","Egy e-k�peslap �rkezett a k�vetkez� szem�lyt�l:");
define("_ZOOM_ECARD_MSG1","k�ld�tt egy e-k�peslapot a k�vetkez� oldalr�l:");
define("_ZOOM_ECARD_MSG2","A lenti hivatkoz�sra kattintva el lehet olvasni a szem�lyes e-k�peslapot!");
define("_ZOOM_ECARD_MSG3","Ez egy automatikusan l�trehozott e-mail �gy nem lehet r� v�laszolni.");
define("_ZOOM_ECARD_ECARDEXPIRED","Ez a k�peslap m�r nem el�rhet� vagy lej�rt.");

//installation-screen
define ('_ZOOM_INSTALL_CREATE_DIR','A zOOm telep�t� megpr�b�lja l�trehozni a k�vetkez� k�nyvt�rat: "images/zoom" ...');
define ('_ZOOM_INSTALL_CREATE_DIR_WM','A zOOm telep�t� megpr�b�lja l�trehozni a k�vetkez� k�nyvt�rat: "images/zoom/watermarks" ...');
define ('_ZOOM_INSTALL_CREATE_DIR_SUCC','K�sz!');
define ('_ZOOM_INSTALL_CREATE_DIR_FAIL','Hiba!');
define ('_ZOOM_INSTALL_CREATE_DBASE_SUCC','Adatb�zis sikeresen l�trehozva!');
define ('_ZOOM_INSTALL_UPGRADED_DBASE_SUCC','Dikeres adatb�zis friss�t�s!');
define ('_ZOOM_INSTALL_MESS1','A zOOm Image Gallery telep�t�se sikeresen megt�rt�nt.<br>Mostant�l l�tre lehet hozni az albumokat!');
define ('_ZOOM_INSTALL_MESS2','Megjegyz�s: Az els� dolog amit meg k�ne tenni, hogy a fenti Komponens men�b�l,<br>ki k�ne keresni a "zOOm Media Gallery Admin" bejegyz�st, r�kattintani <br>�s be�ll�tani az Admin-fel�letet.');
define ('_ZOOM_INSTALL_MESS3','Itt minden v�ltoz�t be lehet �ll�tani ami a zOOm rendszerhez kapcsol�dik.');
define ('_ZOOM_INSTALL_MESS4','Ne felejtsd el l�trehozni az �j gal�ri�t �s annak testreszab�s�t!');
define ('_ZOOM_INSTALL_MESS_FAIL1','A zOOM Gallery telep�t�se sikertelen!');
define ('_ZOOM_INSTALL_MESS_FAIL2','Hozd l�tre az al�bbi k�nyvt�rakat �s a jogosults�gokat �ll�tsd "0777"-re:<br />'
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
define ('_ZOOM_INSTALL_MESS_FAIL3','Once you have created those directories and changed the rights, go to <br /> "Components -> zOOm Media Gallery" and fit the settings to yours.');
?>
