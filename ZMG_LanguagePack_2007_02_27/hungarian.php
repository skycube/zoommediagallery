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
| A fordítást modosította: Marsalkó István 2006.12.16.                |
| Az RC4 modosítás készítette: Marsalkó István 2007.02.12.            |
-----------------------------------------------------------------------
* @version $Id: english.php,v 1.35 2006/11/04 18:50:48 kevinuru Exp $
* @package zOOm Media Gallery
* @author Mike de Boer <mailme@mikedeboer.nl> 
**/
// MOS Intruder Alerts
defined( '_VALID_MOS' ) or die( 'Közvetlen hozzáférés nem engedélyezett.' );
//Language translation
define("_ZOOM_DATEFORMAT","%d.%m.%Y %H:%M"); // use the PHP strftime Format, more info at http://www.php.net
//define("_ZOOM_ISO","iso-8859-2"); //Csak az RC4-ben
define("_ZOOM_PICK","Galéria kiválasztása");
define("_ZOOM_DELETE","Törlés");
define("_ZOOM_BACK","Vissza");
define("_ZOOM_MAINSCREEN","Nyitó oldal");
define("_ZOOM_BACKTOGALLERY","Vissza a galériákhoz");
define("_ZOOM_INFO_DONE","Kész!");
define("_ZOOM_TOOLTIP", "zOOm Eszköztipp");
define("_ZOOM_WARNING", "zOOm figyelmeztetés!");

//Gallery admin page
define("_ZOOM_ADMINSYSTEM","Admin rendszer");
define("_ZOOM_USERSYSTEM","Felhasználói rendszer");
define("_ZOOM_ADMIN_TITLE","Média galéria adminisztrációs rendszer");
define("_ZOOM_USER_TITLE","Média galéria felhasználói rendszer");
define("_ZOOM_CATSMGR","Galéria kezelõ");
define("_ZOOM_CATSMGR_DESCR","Új galéria létrehozása, meglévõk módosítása vagy törlése.");
define("_ZOOM_SETTINGS_DDONOF","Fogd és vidd engedélyezése");
define("_ZOOM_NEW","Új galéria");
define("_ZOOM_DEL","Galéria törlése");
define("_ZOOM_ORDERSAVE","Rendezések mentése"), //Csak az RC4-nél
define("_ZOOM_MEDIAMGR","Média kezelõ");
define("_ZOOM_MEDIAMGR_DESCR","Szerkesztés, törlés, új média automatikus keresése vagy manuális feltöltése.");
define("_ZOOM_THUMB", "Zoom bélyegképek");
define("_ZOOM_THUMB_DESCR", "Könnyen összeszámolja a bélyegképeidet.");
define("_ZOOM_UPLOAD","Fájl(ok) feltöltése");
define("_ZOOM_EDIT","Galéria szerkesztése");
define("_ZOOM_ADMIN_CREATE","Adatbázis létrehozása");
define("_ZOOM_ADMIN_CREATE_DESCR","új adattáblák létrehozása amiket majd az albumokhoz lehet használni");
define("_ZOOM_HD_PREVIEW","Elõnézet");
define("_ZOOM_HD_CHECKALL","Mind kijelölése/kijelölés megszüntetése");
define("_ZOOM_HD_CREATEDBY","Létrehozta:");
define("_ZOOM_HD_AFTER","Beszúrás ezután");
define("_ZOOM_HD_HIDEMSG","'Nincs média' szöveg elrejtése");
define("_ZOOM_HD_NAME","Galéra neve");
define("_ZOOM_HD_DIR","Könyvtár");
define("_ZOOM_HD_NEW","Új galéria");
define("_ZOOM_HD_SHARE","Galéria megosztása");
define("_ZOOM_SHARE","Megosztás");
define("_ZOOM_UNSHARE","Nincs megosztás");
define("_ZOOM_PUBLISH","Publikálás");
define("_ZOOM_UNPUBLISH","Visszavonás");
define("_ZOOM_TOPLEVEL","Legfelsõ szint");
define("_ZOOM_HD_UPLOAD","Fájl feltöltése");
define("_ZOOM_A_ERROR_ERRORTYPE","Hiba típus");
define("_ZOOM_A_ERROR_IMAGENAME","Kép neve");
define("_ZOOM_A_ERROR_NOFFMPEG","<u>FFmpeg</u> nem elérhetõ");
define("_ZOOM_A_ERROR_NOPDFTOTEXT","<u>PDFtoText</u> nem elérhetõ");
define("_ZOOM_A_ERROR_NOTINSTALLED","Nincs telepítve");
define("_ZOOM_A_ERROR_CONFTODB","Hiba történt a beállítások mentése közben!");
define("_ZOOM_A_MESS_NOT_SHURE","* Bizonytalanság esetén az alapbeállítás használata: \"auto\" ");
define("_ZOOM_A_MESS_SAFEMODE1","Megjegyzés: \"Safe Mode\" aktiválva van, ezért elõfordulhat, hogy nagyobb fájlok letöltése nem fog mûködni!<br />Az Adminisztrációs rendszerben át kell kapcsolni FTP-módba.");
define("_ZOOM_A_MESS_SAFEMODE2","Megjegyzés: \"Safe Mode\" aktiválva van, ezért elõfordulhat, hogy nagyobb fájlok letöltése nem fog mûködni!<br />Az Adminisztrációs rendszerben át kell kapcsolni FTP-módba.");
define("_ZOOM_A_MESS_PROCESSING_FILE","Fájl feldolgozása...");
define("_ZOOM_A_MESS_NOTOPEN_URL","Nem lehet megnyitni a következõ URL-t:");
define("_ZOOM_A_MESS_PARSE_URL","\"%s\" átkutatása képek után... "); // %s = $url
define("_ZOOM_A_MESS_NOJAVA","Ha csak egy szürke mezõ jelent meg vagy nem lehet letölteni akkor valószínûleg<br />nincs telepítve a legújabb Java futtatókörnyezet. A <a href=\"http://www.java.com\" target=\"_blank\">Java.com</a> <br /> oldalról le lehet tölteni a legfrissebb verziót.");
define("_ZOOM_SETTINGS","Beállítások");
define("_ZOOM_SETTINGS_DESCR","A beállítások megtekintése és megváltoztatása.");
define("_ZOOM_SETTINGS_TAB1","Rendszer");
define("_ZOOM_SETTINGS_TAB2","Média");
define("_ZOOM_SETTINGS_TAB3","Tulajdonságok");
define("_ZOOM_SETTINGS_TAB4","Elrendezés");
define("_ZOOM_SETTINGS_TAB5","Vízjel");
define("_ZOOM_SETTINGS_TAB6","Biztonság");
define("_ZOOM_SETTINGS_TAB7","Hozzáférés");
define("_ZOOM_SETTINGS_TAB8","Reset");
define("_ZOOM_SETTINGS_ERASE","A törlésre kattintva a galéria adatai alaphelyzetbe állnak. <b>Ez törli az összes képet is!</b>");
define("_ZOOM_SETTINGS_CONVTYPE","Típus átalakítás");
define("_ZOOM_SETTINGS_GALLERY_FEATURES","Galéria tulajdonságok");
define("_ZOOM_SETTINGS_VIEW_FEATURES","Média tulajdonságok");

define("_ZOOM_SETTINGS_GALLERY","Galéria beállítás");
define("_ZOOM_SETTINGS_VIEW","Média beállítás");

define("_ZOOM_SETTINGS_GENERAL_FEATURES","Általános tuajdonságok");
define("_ZOOM_SETTINGS_AUTODET","Automatikus érzékelés: ");
define("_ZOOM_SETTINGS_IMGPATH","Média fájlok útvonala:");
define("_ZOOM_SETTINGS_TTIMGPATH","A jelenlegi útvonal: ");
define("_ZOOM_SETTINGS_CONVSETTINGS","Képátalakítás beállításai:");
define("_ZOOM_SETTINGS_IMPATH","ImageMagick útvonala: ");
define("_ZOOM_SETTINGS_NETPBMPATH"," vagy NetPBM: ");
define("_ZOOM_SETTINGS_FFMPEGPATH","FFmpeg útvonala:");
define("_ZOOM_SETTINGS_FFMPEGTOOLTIP","FFmpeg szükséges a videók bélyegképeinek létrehozásához.<br />Támogatott kiterjesztések: ");
define("_ZOOM_SETTINGS_OVERRIDE_FFMPEG","Használja az FFmpeg-et még ha a zOOm nem képes ellenõrizni a renszer meglétét");
define("_ZOOM_SETTINGS_PDFTOTEXTPATH","PDFtoText útvonala:");
define("_ZOOM_SETTINGS_XPDFTOOLTIP","pdf2text, ami az Xpdf csomag része, szükséges a PDF fájlok indexeléséhez.");
define("_ZOOM_SETTINGS_OVERRIDE_PDF","Használja az PDFtoText-et még ha a zOOm nem képes ellenõrizni a renszer meglétét");
define("_ZOOM_SETTINGS_MAXSIZE","Image max. size: ");
define("_ZOOM_SETTINGS_MAXSIZEKB","Medium - including images - max. size (in kB): "); //added: 08-08-2006
define("_ZOOM_SETTINGS_MAXSIZEKB_WARNING","A feltöltési limit az ISP serveren lévõ PHP beállítástól függ.<br /> <b>%s.</b><br />Így a beállítás nem lehet nagyobb, ezért NE használj nagyobb értéket!"); //added: 09-01-2006
define("_ZOOM_SETTINGS_THUMBSETTINGS","Bélyegkép beállítások:");
define("_ZOOM_SETTINGS_QUALITY","NetPBM és GD2 JPEG minõsége: ");
define("_ZOOM_SETTINGS_SIZE","Kis kép maximális mérete: ");
define("_ZOOM_SETTINGS_TEMPNAME","Ideiglenes név: ");
define("_ZOOM_SETTINGS_AUTONUMBER","A képek nevének automatikus számozása (pl. 1,2,3)");
define("_ZOOM_SETTINGS_TEMPDESCR","Ideiglenes leírás: ");
define("_ZOOM_SETTINGS_TITLE","Galéria címe:");
define("_ZOOM_SETTINGS_SUBCATSPG","Alárendelt galériák oszlopszáma");
define("_ZOOM_SETTINGS_COLUMNS","No. of thumbnail columns");
define("_ZOOM_SETTINGS_THUMBSPG","Thumbs per page");
define("_ZOOM_SETTINGS_CMTLENGTH","Megjegyzések maximális hossza");
define("_ZOOM_SETTINGS_CHARS","karakter");
define("_ZOOM_SETTINGS_GALLERYPREFIX","Galéria címének elõtagja");
define("_ZOOM_SETTINGS_SHOWOCCSPACE","Elfoglalt terület megjelenítése a Médiakezelõben");
define("_ZOOM_SETTINGS_TEMPLATE_TITLE","Sablon");
define("_ZOOM_SETTINGS_FEATURES_TITLE","Elemek be/ki");
define("_ZOOM_SETTINGS_CSS_TITLE","Stíluslapok szerkesztése");
define("_ZOOM_SETTINGS_DISPLAY_TITLE","Megjelenítendõ adatok be/ki");
define("_ZOOM_SETTINGS_TEMPLATE_CHOOSE","Válassz sablont és állítsd be a galéria nézetét.");
define("_ZOOM_SETTINGS_TEMPLATE_TABLES","Klasszikus)");
define("_ZOOM_SETTINGS_TEMPLATE_TABLELESS","Modern");
define("_ZOOM_SETTINGS_COMMENTS","Megjegyzés");
define("_ZOOM_SETTINGS_POPUP","Felbukkanó média");
define("_ZOOM_SETTINGS_CATIMG","A kategória képének mutatása");
define("_ZOOM_SETTINGS_SLIDESHOW","Vetítés");
define("_ZOOM_SETTINGS_ZOOMLOGO","zOOm-logo megjelenítése");
define("_ZOOM_SETTINGS_DESCRINGAL","Mutassa az album leírását a galériában"); //Csak az RC4-ben

define("_ZOOM_SETTINGS_SHOWHITS","Találatok számának megjelenítése");
define("_ZOOM_SETTINGS_READEXIF","EXIF adatok kiolvasása");
define("_ZOOM_SETTINGS_EXIFTOOLTIP","Ez a lehetõség további EXIF adatokat jelenít meg anélkül, hogy az EXIF modul telepítve lenne a PHP kiszolgálóra.");
define("_ZOOM_SETTINGS_READID3","Mp3 ID3-adat beolvasása");
define("_ZOOM_SETTINGS_ID3TOOLTIP","Ez a lehetõség megmutatja a kiegészítõ ID3 v1.1 és v2.0 adatokat az mp3 fájl részleinek megtekintése közben.");
define("_ZOOM_SETTINGS_RATING","Helyezés");
define("_ZOOM_SETTINGS_CSS","Felbukkanó ablak stíluslapja");
define("_ZOOM_SETTINGS_CSSZOOM","zOOm galéria &amp; média nézet");
define("_ZOOM_SETTINGS_SUCCESS","A beállítások sikeresen frissítve lettek!");
define("_ZOOM_SETTINGS_ZOOMING","Kép nagyítás");
define("_ZOOM_SETTINGS_ORDERBY","Bélyegképek rendezési elve:");
define("_ZOOM_SETTINGS_CATORDERBY","alárendelt kategóriák rendezési elve:");

define("_ZOOM_SETTINGS_NO_POP","Az összes felugróablak kikapcsolása"); //Csak az RC4-ben
define("_ZOOM_SETTINGS_STANDARD_POP","Szabványos felugróablak"); //Csak az RC4-ben
define("_ZOOM_SETTINGS_LIGHTBOX_POP","Lightbox JS Popup"); //Csak az RC4-ben
define("_ZOOM_SETTINGS_LIGHTBOX_SLIDESHOW","<strong><i>KAPCSOLD KI HA VETÍTÉST SZERETNÉL LIGHTBOX JS-EL!</i></strong>"); //Csak az RC4-ben

define("_ZOOM_SETTINGS_DATE_ASC","DÁTUM, növekvõ");
define("_ZOOM_SETTINGS_DATE_DESC","DÁTUM, csökkenõ");
define("_ZOOM_SETTINGS_FLNM_ASC","FÁJL NEVE, növekvõ");
define("_ZOOM_SETTINGS_FLNM_DESC","FÁJL NEVE, csökkenõ");
define("_ZOOM_SETTINGS_NAME_ASC","NÉV, növekvõ");
define("_ZOOM_SETTINGS_NAME_DESC","NÉV, csökkenõ");
define("_ZOOM_SETTINGS_LBTOOLTIP","A lightbox egy vásárlói kosárszerû dolog, amibe a felhasználók kiválasztott tételei kerülnek és le lehet tölteni ZIP formátumban.");
define("_ZOOM_SETTINGS_SHOWNAME","Név megjelenítése");
define("_ZOOM_SETTINGS_SHOWDESCR","Leírás megjelenítése");
define("_ZOOM_SETTINGS_SHOWKEYWORDS","Keresõ kifejezések megjelenítése");
define("_ZOOM_SETTINGS_SHOWDATE","Dátum megjelenítése");
define("_ZOOM_SETTINGS_SHOWUNAME","Felhasználónév megjelenítése");
define("_ZOOM_SETTINGS_SHOWFILENAME","Fájlnév megjelenítése");
define("_ZOOM_SETTINGS_METABOX","Lebegõ ablak megjelenítése a galéria részleteivel.");
define("_ZOOM_SETTINGS_METABOXTOOLTIP","A galéria sebességének növeléséhez nem kell bejelölni. Nagy adatbázis esetén hasznos.");
define("_ZOOM_SETTINGS_ECARDS","E-képeslapok");
define("_ZOOM_SETTINGS_ECARDS_LIFETIME","Az e-képeslapok élettartama");
define("_ZOOM_SETTINGS_ECARDS_ONEWEEK","1 hét");
define("_ZOOM_SETTINGS_ECARDS_TWOWEEKS","2 hét");
define("_ZOOM_SETTINGS_ECARDS_ONEMONTH","1 hónap");
define("_ZOOM_SETTINGS_ECARDS_THREEMONTHS","3 hónap");
define("_ZOOM_SETTINGS_SHOWSEARCH","Keresés mezõ az összes oldalon");
define("_ZOOM_SETTINGS_BOX_ANIMATE","Dobozok animálása");
define("_ZOOM_SETTINGS_BOX_PROPERTIES","Tulajdonság dobozok vizuális állapota");
define("_ZOOM_SETTINGS_BOX_META","Metaadat doboz vizuális állapota");
define("_ZOOM_SETTINGS_BOX_COMMENTS","Hozzászólás doboz vizuális állapota");
define("_ZOOM_SETTINGS_BOX_RATING","Értékelés doboz vizuális állapota");
define("_ZOOM_SETTINGS_TOPTEN","A \"Top10\" link megjelenítése a fõoldalon");
define("_ZOOM_SETTINGS_LASTSUBM","Az \"Utolsó beküldött média\" link megjelenítése a fõoldalon");
define("_ZOOM_SETTINGS_SETMENUOPTION","'Média feltöltés' hivatkozás mutatása a felhasználói menüben");
define("_ZOOM_SETTINGS_USEFTP","FTP mód használata?");
define("_ZOOM_SETTINGS_FTPHOST","Kiszolgáló neve");
define("_ZOOM_SETTINGS_FTPUNAME","Felhasználó név");
define("_ZOOM_SETTINGS_FTPPASS","Jelszó");
define("_ZOOM_SETTINGS_FTPWARNING","Figyelmeztetés: A jelszó titkosítás nélkül lesz tárolva!");
define("_ZOOM_SETTINGS_FTPHOSTDIR","könyvtár a kiszolgálón");
define("_ZOOM_SETTINGS_MESS_FTPHOSTDIR","A Mambo/Joomla teljes elérési útját meg kell adni. FONTOS: perjel <b>nélkül</b>!");
define("_ZOOM_SETTINGS_GROUP","Csoport");
define("_ZOOM_SETTINGS_PRIV_DESCR","A Mambo/Joomla-ban ismert összes felhasználócsoport jogosultsága megváltoztatható továbbá megváltoztatható a csoportnak mindenegyes tagjáé is!<br />Egy felhasználó így a következõ tevékenységeket végezheti: fájlok felttöltése, média szerkesztése/törlése, (megosztott) galériák készítése / szerkesztése / törlése.");
define("_ZOOM_SETTINGS_CLOSE","A \"Bezár\" link megjelenítése a felbukkanó ablakban");
define("_ZOOM_SETTINGS_MAINSCREEN","A Fõképernyõ megjelenítése az útvonal sávban");
define("_ZOOM_SETTINGS_NAVBUTTONS","A navigációs gombok megjelenítése a felbukkanó ablakban");
define("_ZOOM_SETTINGS_PROPERTIES","Az alábbi média tulajdonságainak megjelenítése");
define("_ZOOM_SETTINGS_MEDIAFOUND","A \"Media megtalálva\" szöveg megjelenítése a galériában");
define("_ZOOM_SETTINGS_ANONYMOUS_COMMENTS","Vendég írhat megjegyzést?");
define("_ZOOM_SETTINGS_WM_ENABLE_TITLE","Engedélyezed ezt a tulajdondágot?");
define("_ZOOM_SETTINGS_WM_TITLE", "Vízjeled");
define("_ZOOM_SETTINGS_WM_DESCR", "A vízjeled megjelenik a képeidben a honlapodon. "
 . "A kép látható, de a látogató nem tudja másolni vagy nyomtatni."
 . "<br /><br /><b>Javaslat:</b> használd a cég logódat vízjelként. "
 . "Állítsd be átlátszó háttérképnek!");
define("_ZOOM_SETTINGS_WM_IMG", "Kép");
define("_ZOOM_SETTINGS_WM_NOWATERMARKS", "Nem találtam vízjelet.Töltsd fel ismét az új vízjelet.");
define("_ZOOM_SETTINGS_WM_PLACEMENT_TITLE", "Elhelyezés");
define("_ZOOM_SETTINGS_WM_PLACEMENT_DESCR", "Itt tudod pozicionálni a cél kép vízjelét, válaszd ki a szürke dobozban a megfelelõ poziciót.");
define("_ZOOM_SETTINGS_WM_FILE","Vízjel feltöltés");
define("_ZOOM_SETTINGS_WM_NOWATERMARKS", "Nem találtam vízjelet.Töltsd fel ismét az új vízjelet.");
define("_ZOOM_SETTINGS_WM_UPLOAD_SUCCESS","Vízjel sikeresen feltöltve!");
define("_ZOOM_SETTINGS_WM_UPLOAD_FAIL","Vízjel feltöltése nem sikerült.");
define("_ZOOM_SETTINGS_WM_DEL_SUCCESS","Vízjel sikeresen törölve!");
define("_ZOOM_SETTINGS_WM_DEL_FAIL","Vízjelet nem tudtam törlni.");
define("_ZOOM_SYSTEM_TITLE","Rendszer beállítások");
define("_ZOOM_YES","Igen");
define("_ZOOM_NO","Nem");
define("_ZOOM_VISIBLE","Látható");
define("_ZOOM_HIDDEN","Rejtett");
define("_ZOOM_SAVE","Mentés");
define("_ZOOM_MOVEFILES","Média mozgatása");
define("_ZOOM_BUTTON_MOVE","Mozgatás");
define("_ZOOM_MOVEFILES_STEP1","Célgaléria kiválasztása és a média mozgatása");
define("_ZOOM_ALERT_MOVE","%s aMédia sikeresen átmozgatva, %s a Médiát nemsikerült átmozgatni.");
define("_ZOOM_OPTIMIZE","Táblák optimalizálása");
define("_ZOOM_OPTIMIZE_DESCR","A zOOm Media Gallery elég sokat használja a táblákat ezért elõfordulhatnak bennük nem használt adatok. Ide kattintva el lehet ezeket távolítani.");
define("_ZOOM_OPTIMIZE_SUCCESS","A zOOm Media Gallery táblái sikeresen optimalizálva lettek!");
define("_ZOOM_UPDATE","zOOm Media Gallery frissítése");
define("_ZOOM_UPDATE_DESCR","Új szolgáltatások hozzáadása, problémák és hibák megoldása! A legfrissebb letöltések a <a href=\"http://zoom.ummagumma.nl\" target=\"_blank\">zoom.ummagumma.nl</a> címen találhatóak!");
define("_ZOOM_UPDATE_XMLDATE","Az utolsó frissítés dátuma");
define("_ZOOM_UPDATE_NOUPDATES","Még nincsennek frissítések!"); // added 11-08
define("_ZOOM_UPDATE_PACKAGE","ZIP-fájl frissítése: ");
define("_ZOOM_CREDITS","A zOOm Media Gallery névjegye");

//Image actions
define("_ZOOM_DISKSPACEUSAGE","Lemezméret: jelenleg %s használatban");
define("_ZOOM_UPLOAD_SINGLE","egy darab (ZIP-)fájl");
define("_ZOOM_UPLOAD_MULTIPLE","Több fájl");
define("_ZOOM_UPLOAD_DRAGNDROP","Fogd és vidd");
define("_ZOOM_UPLOAD_SCANDIR","könyvtárak ellenõrzése");
define("_ZOOM_UPLOAD_INTRO","A <b>keresés</b> gombra kattintva lehet a médiákat feltölteni.");
define("_ZOOM_UPLOAD_STEP1","1. a feltölteni kívánt fájlok kiválasztása: ");
define("_ZOOM_UPLOAD_STEP2","2. a célgaléria kiválasztása amibe a fájlok kerülnek: ");
define("_ZOOM_UPLOAD_STEP3","3. A keresés gombot lehet használni a fényképek számítógépen való kereséséhez.");
define("_ZOOM_SCAN_STEP1","1. lépés: hely megadása ahol a médiákat keresni kell...");
define("_ZOOM_SCAN_STEP2","2. lépés: a feltölteni kívánt fájlok kiválasztása...");
define("_ZOOM_SCAN_STEP3","3. lépés: a program feldolgozza a kiválasztott fájlokat..");
define("_ZOOM_SCAN_STEP1_DESCR","A hely lehet egy URL vagy egy könyvtár a szerveren.<br />&nbsp;   Tipp: FTP-vel fel leleht tölteni a szerverre a képeket és utána azt itt megadni!");
define("_ZOOM_SCAN_STEP2_DESCR1","Feldolgozás");
define("_ZOOM_SCAN_STEP2_DESCR2","Mint egy helyi könyvtárat");
define("_ZOOM_FORMCREATE_NAME","Név");
define("_ZOOM_FORM_IMAGEFILE","Médium");
define("_ZOOM_FORM_IMAGEFILTER","Támogatott fájltípusok");
define("_ZOOM_FORM_INGALLERY","galériában");
define("_ZOOM_FORM_SETFILENAME","A média neve a fájl eredeti neve legyen.");
define("_ZOOM_FORM_IGNORESIZES","Beállított maximális képméretek elvetése"); //added: 12-08
define("_ZOOM_FORM_LOCATION","Útvonal");
define("_ZOOM_BUTTON_SCAN","URL vagy könyvtár átadása");
define("_ZOOM_BUTTON_UPLOAD","Feltöltés");
define("_ZOOM_BUTTON_EDIT","Szerkesztés");
define("_ZOOM_BUTTON_CREATE","Létrehozás");
define("_ZOOM_CONFIRM_WIPE","VIGYÁZAT!\\n Ez egy teljes törlési funkció a zOOm Galériát és az összes képet és galériát letörli.\\n\\n Biztos folytatni akarod?");
define("_ZOOM_CONFIRM_DEL","Ez az opció a teljes galáriát törli a médiákkal együtt!\\nBiztos ezt kell tenni?");
define("_ZOOM_CONFIRM_DELMEDIUM","A médium teljes törlésre kerül!\\nBiztos ezt kell tenni?");
define("_ZOOM_ALERT_DEL","A galéria törölve lett!");
define("_ZOOM_ALERT_NOCAT","Nincs galéria kiválasztva!");
define("_ZOOM_ALERT_NOMEDIA","Nincs média kiválasztva!");
define("_ZOOM_ALERT_EDITOK","A galéria mezõi sikeresen szerkesztve lettek!");
define("_ZOOM_ALERT_NEWGALLERY","Új galéria létrehozva.");
define("_ZOOM_ALERT_NONEWGALLERY","A galéria nem lett létrehoza!");
define("_ZOOM_ALERT_EDITIMG","A médium tulajdonságai szerkesztve lettek.");
define("_ZOOM_ALERT_DELPIC","A média törölve lett.");
define("_ZOOM_ALERT_NODELPIC","A médiát nem lehet törölni!");
define("_ZOOM_ALERT_MOVEFAILURE","A médiát nem tudtam átmozgatni."); //added: 08-08-2006
define("_ZOOM_ALERT_NOPICSELECTED","Nincs médium kiválasztva.");
define("_ZOOM_ALERT_NOPICSELECTED_MULT","Nincs média kiválasztva.");
define("_ZOOM_ALERT_UPLOADOK","Medium uploaded succesfully!");
define("_ZOOM_ALERT_UPLOADOK","A médiaum sikeresen fel lett töltve!");
define("_ZOOM_ALERT_UPLOADSOK","A média sikeresen fel lett töltve!");
define("_ZOOM_ALERT_WRONGFORMAT_MULT","Rossz formátum.");
define("_ZOOM_ALERT_TOOBIG","A média file mérete túl nagy; %s ennyi amegengedett maximum."); //added 08-08-2006
define("_ZOOM_ALERT_IMGERROR","Hiba a kép átméretezése / kis kép létrehozása során.");
define("_ZOOM_ALERT_PCLZIPERROR","Hiba a kicsomagolás során.");
define("_ZOOM_ALERT_INDEXERROR","Hiba a dokumentum indexelése során.");
define("_ZOOM_ALERT_WATERMARKERROR","Hiba történ a vízjel beviteli esemény során.");
define("_ZOOM_ALERT_IMGFOUND","Képet találtam.");
define("_ZOOM_INFO_CHECKCAT","Ki kell választani egy galériát a feltöltés opció használata elõtt!");
define("_ZOOM_BUTTON_ADDIMAGES","Média hozzáadása");
define("_ZOOM_BUTTON_REMIMAGES","Média törlése");
define("_ZOOM_INFO_PROCESSING","Fájl feldolgozása:");
define("_ZOOM_ITEMEDIT_TAB1","Tulajdonságok");
define("_ZOOM_ITEMEDIT_TAB2","Tagok");
define("_ZOOM_ITEMEDIT_TAB3","Mûveletek");
define("_ZOOM_USERSLIST_LINE1",">>Az elem tagjainak kiválasztása<<");
define("_ZOOM_USERSLIST_ALLOWALL",">>nyilvános hozzáfárés<<");
define("_ZOOM_USERSLIST_MEMBERSONLY",">>Csak tagok<<");
define("_ZOOM_PUBLISHED","Publikálva");
define("_ZOOM_SHARED","galéria megosztása");
define("_ZOOM_ROTATE","kép elforgatása 90 fokkal");
define("_ZOOM_CLOCKWISE","óramutató járással megegyezõen");
define("_ZOOM_CCLOCKWISE","óramutató járással ellentétesen");
define("_ZOOM_FLIP_HORIZ","Képtükrözés vízszintesen");
define("_ZOOM_FLIP_VERT","Képtükrözés függõlegesen");
define("_ZOOM_PROGRESS_DESCR","Kérés feldolgozása folyamatban... Várjon.");

//Navigation (including Slideshow buttons)
define("_ZOOM_SLIDESHOW","Bemutató:");
define("_ZOOM_PREV_IMG","Elõzõ kép");
define("_ZOOM_NEXT_IMG","Következõ kép");
define("_ZOOM_FIRST_IMG","Elsõ kép");
define("_ZOOM_LAST_IMG","Utolsó kép");
define("_ZOOM_PLAY","Lejátszás");
define("_ZOOM_STOP","Állj");
define("_ZOOM_RESET","Visszaállít");
define("_ZOOM_FIRST","Elsõ");
define("_ZOOM_LAST","Utolsó");
define("_ZOOM_PREVIOUS","Elõzõ");
define("_ZOOM_NEXT","Következõ");
define("_ZOOM_IN_DESC","Mozgassa az egeret a kép felett és nyomja le az UP vagy a DOWN gombot!");

//Gallery actions
define("_ZOOM_SEARCH_BOX","gyorskeresés...");
define("_ZOOM_ADVANCED_SEARCH","bõvített keresés");
define("_ZOOM_SEARCH_KEYWORD","kulcsszó keresése");
define("_ZOOM_IMAGES","média");
define("_ZOOM_IMGFOUND","található - oldalszám: ");
define("_ZOOM_SUBGALLERIES","alárendelt galériák");
define("_ZOOM_ALERT_COMMENTOK","A megjegyzés hozzá lett adva!");
define("_ZOOM_ALERT_COMMENTERROR","Már megtörtént a megjegyzés hozzáadása!");
define("_ZOOM_ALERT_VOTE_OK","A szavazatot tároltuk! Köszönjük.");
define("_ZOOM_ALERT_VOTE_ERROR","Már rögzítettük a szavazatot!");
define("_ZOOM_WINDOW_CLOSE","Bezárás");
define("_ZOOM_NOPICS","Nincs média a galériában");
define("_ZOOM_PROPERTIES","Tulajdonságok");
define("_ZOOM_COMMENTS","Megjegyzések");
define("_ZOOM_COMMENTS_INTRO","Engedélyezd a lenti megjegyzésed:"); //Csak az RC4-ben

define("_ZOOM_NO_COMMENTS","Még nincs megjegyzés.");
define("_ZOOM_SAYS","közlések"); //Csak az RC4-ben
define("_ZOOM_YOUR_NAME","Név");
define("_ZOOM_ADD","Hozzáad");
define("_ZOOM_NAME","Név");
define("_ZOOM_DATE","Dátum");
define("_ZOOM_UNAME","Hozzáadta: ");
define("_ZOOM_DESCRIPTION","Leírás");
define("_ZOOM_IMGNAME","Név");
define("_ZOOM_FILENAME","Fájlnév");
define("_ZOOM_CLICKDOCUMENT","(a fájlnévre kattintva lehet megnyitni a dokumentumot)");
define("_ZOOM_KEYWORDS","Kulcsszavak");
define("_ZOOM_HITS","találat");
define("_ZOOM_CLOSE","Bezár");
define("_ZOOM_NOIMG", "Nem található média!");
define("_ZOOM_NONAME", "Meg kell adni egy nevet!");
define("_ZOOM_NOCAT", "Nincs kategória kiválasztva!");
define("_ZOOM_EDITPIC", "Médium szerkesztése");
define("_ZOOM_SETCATIMG","Galéria képének beállítva");
define("_ZOOM_SETPARENTIMG","A szülõ galéria képének beállítva");
define("_ZOOM_PASS","jelszó");
define("_ZOOM_PASS_REQUIRED","Meg kell adni a jelszó.<br />Ki kell tölteni a jelszó mezõt<br />majd a belépés gombra kell kattintani. Köszönjük.");
define("_ZOOM_PASS_BUTTON","Belépés");
define("_ZOOM_PASS_GALLERY","Jelszó");
define("_ZOOM_PASS_INNCORRECT","Helytelen jelszó");

//Hotlinking
define("_ZOOM_SETTINGS_HOTLINK","Képek Hotlink védelem engedélyezése");
define("_ZOOM_SETTINGS_HPTOOLTIP","Amikor a hotlink védelem engedélyezve van, a fájl neve és elérhetõsége rejtett lesz.  Ha megpróbálja használni egy másik oldalon ez ugyancsak nem lesz látható.");


//Lightbox
define("_ZOOM_LIGHTBOX","Kosár");
define("_ZOOM_LIGHTBOX_GALLERY","A galéria kosárba helyezése!");
define("_ZOOM_LIGHTBOX_ITEM","Az elem kosárba helyezése!");
define("_ZOOM_LIGHTBOX_VIEW","A kosár megtekintése");
define("_ZOOM_YOUR_LIGHTBOX","A kosár tartalma:");
define("_ZOOM_LIGHTBOX_EMPTY","A kosara jelenleg üres.");
define("_ZOOM_LIGHTBOX_ZIPBTN","ZIP fájl létrehozása");
define("_ZOOM_LIGHTBOX_PLAYLISTBTN","Játszólista készítés és lejátszás");
define("_ZOOM_LIGHTBOX_CATS","Galériák");
define("_ZOOM_LIGHTBOX_TITLEDESCR","Cím és leírás");
define("_ZOOM_ACTION","Mûvelet");
define("_ZOOM_LIGHTBOX_ADDED","Az elem hozzá lett adva a kosárhoz!");
define("_ZOOM_LIGHTBOX_NOTADDED","Hiba a kosárhoz való hozzáadás során!");
define("_ZOOM_LIGHTBOX_EDITED","Az elem sikeresen szerkesztve lett!");
define("_ZOOM_LIGHTBOX_NOTEDITED","Hiba az elem szerkesztése során!");
define("_ZOOM_LIGHTBOX_DEL","Az elem el lett távolítva a kosárból!");
define("_ZOOM_LIGHTBOX_NOTDEL","Hiba a kosárból való eltávolítás során!");
define("_ZOOM_LIGHTBOX_NOZIP","Már létre lett hozva a ZIP fájl a kosár tartalma alapján!");
define("_ZOOM_LIGHTBOX_PARSEZIP","A galéria képeinek feldolgozása...");
define("_ZOOM_LIGHTBOX_DOZIP","ZIP fájl létrehozása...");
define("_ZOOM_LIGHTBOX_DLHERE","Most már le lehet tölteni a kosár tartalmát.");
define("_ZOOM_LIGHTBOX_PLSUCCESS","A lejátszólista sikeresen elkészült! Frissítse a lejátszó ablakot!");
define("_ZOOM_LIGHTBOX_PLERROR","Error creating Playlist.");
define("_ZOOM_LIGHTBOX_NOAUDIO","You need to add Audio files to your Lightbox first!");
define("_ZOOM_LIGHTBOX_NOITEMS","Your Lightbox appears to be empty.");

//EXIF information
define("_ZOOM_EXIF","EXIF");
define("_ZOOM_EXIF_SHOWHIDE","Meta adatok megjelenítése/elrejtése");

//MP3 id3 v1.1 or later information
define("_ZOOM_AUDIO_PLAYING","Lejátszás most:");
define("_ZOOM_AUDIO_CLICKTOPLAY","Kattinston ide a fájl lejátszásához.");
define("_ZOOM_ID3","ID3");
define("_ZOOM_ID3_SHOWHIDE","ID3-tag adat be/ki");
define("_ZOOM_ID3_LENGTH","Hossz");
define("_ZOOM_ID3_QUALITY","Minõség");
define("_ZOOM_ID3_TITLE","Cím");
define("_ZOOM_ID3_ARTIST","Szerzõ");
define("_ZOOM_ID3_ALBUM","Album");
define("_ZOOM_ID3_YEAR","Év");
define("_ZOOM_ID3_COMMENT","Hozzászólás");
define("_ZOOM_ID3_GENRE","Genre");

//Video metadata information
define("_ZOOM_VIDEO_SHOWHIDE","Video adat mutatása be/ki");
define("_ZOOM_VIDEO_PIXELRATIO","Pixel arány");
define("_ZOOM_VIDEO_QUALITY","Video minõség");
define("_ZOOM_VIDEO_AUDIOQUALITY","Audio minõség");
define("_ZOOM_VIDEO_CODEC","Kodek");
define("_ZOOM_VIDEO_RESOLUTION","Felbontás");

//rating
define("_ZOOM_RATING","Helyezés");
define("_ZOOM_NOTRATED","Még nincs helyezés!");
define("_ZOOM_VOTE","szavazat");
define("_ZOOM_VOTES","szavazatok");
define("_ZOOM_RATE0","rossz");
define("_ZOOM_RATE1","gyenge");
define("_ZOOM_RATE2","átlagos");
define("_ZOOM_RATE3","jó");
define("_ZOOM_RATE4","nagyon jó");
define("_ZOOM_RATE5","tökéletes!");

//special
define("_ZOOM_TOPTEN","legjobb 10");
define("_ZOOM_LASTSUBM","utolsó feltöltés");
define("_ZOOM_LASTCOMM","utolsó megjegyzés");
define("_ZOOM_SEARCHRESULTS","Keresés eredménye");
define("_ZOOM_TOPRATED","Legjobbra értékelt");

//ecard
define("_ZOOM_ECARD_SENDAS","A médium elküldése e-képeslapként!");
define("_ZOOM_ECARD_YOURNAME","A feladó neve");
define("_ZOOM_ECARD_YOUREMAIL","A feladó e-mail címe");
define("_ZOOM_ECARD_FRIENDSNAME","A címzett neve");
define("_ZOOM_ECARD_FRIENDSEMAIL","A címzett e-mail címe");
define("_ZOOM_ECARD_MESSAGE","Üzenet");
define("_ZOOM_ECARD_SENDCARD","eképeslap elküldése");
define("_ZOOM_ECARD_SUCCESS","Az e-képeslap el lett küldve.");
define("_ZOOM_ECARD_CLICKHERE","Ide kattintva meg lehet nézni!");
define("_ZOOM_ECARD_ERROR","Hiba az e-képeslap elküldése során a következõnek");
define("_ZOOM_ECARD_TURN","A hátlap megtekintése!");
define("_ZOOM_ECARD_TURN2","Az elõlap megtekintése!");
define("_ZOOM_ECARD_SENDER","Feladó:");
define("_ZOOM_ECARD_SUBJ","Egy e-képeslap érkezett a következõ személytõl:");
define("_ZOOM_ECARD_MSG1","küldött egy e-képeslapot a következõ oldalról:");
define("_ZOOM_ECARD_MSG2","A lenti hivatkozásra kattintva el lehet olvasni a személyes e-képeslapot!");
define("_ZOOM_ECARD_MSG3","Ez egy automatikusan létrehozott e-mail így nem lehet rá válaszolni.");
define("_ZOOM_ECARD_ECARDEXPIRED","Ez a képeslap már nem elérhetõ vagy lejárt.");

//installation-screen
define ('_ZOOM_INSTALL_CREATE_DIR','A zOOm telepítõ megpróbálja létrehozni a következõ könyvtárat: "images/zoom" ...');
define ('_ZOOM_INSTALL_CREATE_DIR_WM','A zOOm telepítõ megpróbálja létrehozni a következõ könyvtárat: "images/zoom/watermarks" ...');
define ('_ZOOM_INSTALL_CREATE_DIR_SUCC','Kész!');
define ('_ZOOM_INSTALL_CREATE_DIR_FAIL','Hiba!');
define ('_ZOOM_INSTALL_CREATE_DBASE_SUCC','Adatbázis sikeresen létrehozva!');
define ('_ZOOM_INSTALL_UPGRADED_DBASE_SUCC','Dikeres adatbázis frissítés!');
define ('_ZOOM_INSTALL_MESS1','A zOOm Image Gallery telepítése sikeresen megtörtént.<br>Mostantól létre lehet hozni az albumokat!');
define ('_ZOOM_INSTALL_MESS2','Megjegyzés: Az elsõ dolog amit meg kéne tenni, hogy a fenti Komponens menübõl,<br>ki kéne keresni a "zOOm Media Gallery Admin" bejegyzést, rákattintani <br>és beállítani az Admin-felületet.');
define ('_ZOOM_INSTALL_MESS3','Itt minden változót be lehet állítani ami a zOOm rendszerhez kapcsolódik.');
define ('_ZOOM_INSTALL_MESS4','Ne felejtsd el létrehozni az új galériát és annak testreszabását!');
define ('_ZOOM_INSTALL_MESS_FAIL1','A zOOM Gallery telepítése sikertelen!');
define ('_ZOOM_INSTALL_MESS_FAIL2','Hozd létre az alábbi könyvtárakat és a jogosultságokat állítsd "0777"-re:<br />'
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
