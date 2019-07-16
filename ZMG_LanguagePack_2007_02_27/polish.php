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
| Filename: polish.php                                                |
| Translation: mgr in�. Andrzej K�os (andrzejklosiem@orange.pl)       |
| Date of translation: 2007/02/12 18:00:00                            |
| Translation version: 2.0                                            |
| Please report every language bugs to the author!                    |
|                                                                     |
-----------------------------------------------------------------------
* @version $Id: polish.php,v 1.38 2007/02/12 18:00:00 kevinuru Exp $
* @package zOOm Media Gallery
* @author Mike de Boer <mailme@mikedeboer.nl> 
*
**/
// MOS Intruder Alerts
defined( '_VALID_MOS' ) or die( 'Bezpo�redni dost�p do lokalizacji jest zabroniony.' );
//Language translation
define("_ZOOM_DATEFORMAT","%d.%m.%Y %H:%M"); // use the PHP strftime Format, more info at http://www.php.net
define("_ZOOM_PICK","Wybierz galeri�");
define("_ZOOM_DELETE","Usu�");
define("_ZOOM_BACK","Powr�t");
define("_ZOOM_MAINSCREEN","Strona g��wna");
define("_ZOOM_BACKTOGALLERY","Powr�t do galeri");
define("_ZOOM_INFO_DONE","gotowe!");
define("_ZOOM_TOOLTIP", "zOOm ToolTip");
define("_ZOOM_WARNING", "Ostrze�enie zOOm!");

//Gallery admin page
define("_ZOOM_ADMINSYSTEM","Admin System");
define("_ZOOM_USERSYSTEM","User System");
define("_ZOOM_ADMIN_TITLE","Media Gallery Admin System");
define("_ZOOM_USER_TITLE","Media Gallery User System");
define("_ZOOM_CATSMGR","Manager Galerii");
define("_ZOOM_CATSMGR_DESCR","utw�rz nowe galerie dla nowych medi�w; utw�rz, edytuj i usu� je w Managerze Galerii.");
define("_ZOOM_SETTINGS_DDONOF","Zezw�l na wgrywanie Drag n Drop");
define("_ZOOM_NEW","Zapisz now� galeri�");
define("_ZOOM_DEL","Usu� galeri�");
define("_ZOOM_ORDERSAVE", "Zapisz kolejno��");
define("_ZOOM_MEDIAMGR","Manager Medi�w");
define("_ZOOM_MEDIAMGR_DESCR","przenie�, edytuj, usu�, skanuj media automatycznie lub wgraj (zbiorowo) nowe media r�cznie.");
define("_ZOOM_THUMB", "Koder Zoom Thumb");
define("_ZOOM_THUMB_DESCR", "Przetwarzaj �atwiej swoje kody Zoom Thumb");
define("_ZOOM_UPLOAD","Wgraj plik(i)");
define("_ZOOM_EDIT","Edytuj galeri�");
define("_ZOOM_ADMIN_CREATE","Utw�rz baz� danych");
define("_ZOOM_ADMIN_CREATE_DESCR","zbuduj wymagane tabele bazy danych aby rozpocz�� korzystanie z albumu");
define("_ZOOM_HD_PREVIEW","Podgl�d");
define("_ZOOM_HD_CHECKALL","Zaznacz/Odznacz wszystko");
define("_ZOOM_HD_CREATEDBY","Utworzone przez");
define("_ZOOM_HD_AFTER","Galeria rodzima");
define("_ZOOM_HD_HIDEMSG","Ukruj tekst 'brak medi�w'");
define("_ZOOM_HD_NAME","Tytu�");
define("_ZOOM_HD_DIR","Katalog");
define("_ZOOM_HD_NEW","Nowa galeria");
define("_ZOOM_HD_SHARE","Podziel galeri�");
define("_ZOOM_SHARE","Dziel");
define("_ZOOM_UNSHARE","Nie dziel");
define("_ZOOM_PUBLISH","Publikuj");
define("_ZOOM_UNPUBLISH","Niepublikuj");
define("_ZOOM_TOPLEVEL","Najwy�szy poziom");
define("_ZOOM_HD_UPLOAD","Wgraj plik");
define("_ZOOM_A_ERROR_ERRORTYPE","B��d typu");
define("_ZOOM_A_ERROR_IMAGENAME","Nazwa obrazka");
define("_ZOOM_A_ERROR_NOFFMPEG","Nie stwierdzono istnienia <u>FFmpeg</u>");
define("_ZOOM_A_ERROR_NOPDFTOTEXT","Nie stwierdzono istnienia <u>PDFtoText</u>");
define("_ZOOM_A_ERROR_NOTINSTALLED","Nie zainstalowano");
define("_ZOOM_A_ERROR_CONFTODB","B��d podzczas zapisywania konfiguracji do bazy danych!");
define("_ZOOM_A_MESS_NOT_SHURE","* Je�li jeste� pewny, u�yj domy�lnie \"auto\" ");
define("_ZOOM_A_MESS_SAFEMODE1","UWAGA: \"Safe Mode\" zosta� aktywowany, mo�e wyst�pi� b��dna praca podczas wgrywania wi�kszych plik�w!<br />Powiniene� przej�� do Admin System i prze��czy� si� na FTP-Mode.");
define("_ZOOM_A_MESS_SAFEMODE2","UWAGA: \"Safe Mode\" zosta� aktywowany, mo�e wyst�pi� b��dna praca podczas wgrywania wi�kszych plik�w!<br />zOOm zaleca aktywowa� FTP-Mode w Admin System.");
define("_ZOOM_A_MESS_PROCESSING_FILE","Przetwa�anie pliku...");
define("_ZOOM_A_MESS_NOTOPEN_URL","Nie mo�na otworzy� adresu URL:");
define("_ZOOM_A_MESS_PARSE_URL","Parsing \"%s\" for images... "); // %s = $url
define("_ZOOM_A_MESS_NOJAVA","Je�li zobaczysz szare okienko powy�ej lub masz problemy podczas wgrywania plik�w, mo�e to by� spowodowane<br />brakiem zainstalowanej najnowszej wersji aplikacji Java Run-Time. Przejd� do <a href=\"http://www.java.com\" target=\"_blank\">Java.com</a> <br /> i �ci�gnij najnowsz� wersj� aplikacji.");
define("_ZOOM_SETTINGS","Ustawienia");
define("_ZOOM_SETTINGS_DESCR","zmie� i zobacz wszystkie dost�pne ustawienia konfiguracyjne.");
define("_ZOOM_SETTINGS_TAB1","System");
define("_ZOOM_SETTINGS_TAB2","Media");
define("_ZOOM_SETTINGS_TAB3","Szczeg�y");
define("_ZOOM_SETTINGS_TAB4","Warstwa");
define("_ZOOM_SETTINGS_TAB5","Znaki wodne");
define("_ZOOM_SETTINGS_TAB6","Safe Mode");
define("_ZOOM_SETTINGS_TAB7","Dost�pno��");
define("_ZOOM_SETTINGS_TAB8","Reset");
define("_ZOOM_SETTINGS_ERASE","Przyci�nij aby wyczy�ci� dane zoom gallery i rozpocz�� korzystanie od pocz�tku. Ustawienia zostan� zresetowane i wszystkie obrazki usuni�te.");
define("_ZOOM_SETTINGS_CONVTYPE","Konwersja typu pliku");
define("_ZOOM_SETTINGS_GALLERY_FEATURES","Szczeg�y widoku Galerii");
define("_ZOOM_SETTINGS_VIEW_FEATURES","Szczeg�y widoku Medi�w");

define("_ZOOM_SETTINGS_GALLERY","Widok Galerii");
define("_ZOOM_SETTINGS_VIEW","Widok Medi�w");

define("_ZOOM_SETTINGS_GENERAL_FEATURES","Szczeg�y Og�lne");
define("_ZOOM_SETTINGS_AUTODET","auto-detected: ");
define("_ZOOM_SETTINGS_IMGPATH","�cie�ka do plik�w medi�w:");
define("_ZOOM_SETTINGS_TTIMGPATH","Aktualna �cie�ka dost�pu do medi�w ");
define("_ZOOM_SETTINGS_CONVSETTINGS","Ustawienia konwersji Medi�w:");
define("_ZOOM_SETTINGS_IMPATH","�cie�ka do ImageMagick: ");
define("_ZOOM_SETTINGS_NETPBMPATH"," lub NetPBM: ");
define("_ZOOM_SETTINGS_FFMPEGPATH","�cie�ka do FFmpeg");
define("_ZOOM_SETTINGS_FFMPEGTOOLTIP","FFmpeg jest wymagany do utworzenia thumbnails plik�w video.<br />Obs�ugiwane rozsze�enia to: ");
define("_ZOOM_SETTINGS_OVERRIDE_FFMPEG","U�yj FFmpeg, nawet je�li zOOm nie jest w stanie stwierdzi� istnienia w systemie.");
define("_ZOOM_SETTINGS_PDFTOTEXTPATH","�cie�ka do PDFtoText");
define("_ZOOM_SETTINGS_XPDFTOOLTIP","pdf2text, kt�ry jest cz�ci� paczki Xpdf, jest wynagany do indeksowania pliku PDF.");
define("_ZOOM_SETTINGS_OVERRIDE_PDF","U�yj PDFtoText, nawet je�li zOOm nie jest w stanie stwierdzi� istnienia w systemie.");
define("_ZOOM_SETTINGS_MAXSIZE","Max. rozmiar obrazka: ");
define("_ZOOM_SETTINGS_MAXSIZEKB","Element - zawieraj�cy obrazki - max. rozmiar (w kB): "); //added: 08-08-2006
define("_ZOOM_SETTINGS_MAXSIZEKB_WARNING","Limit wgrywania serwera, ustawiony poprzez ISP jako cz�� konfiguracji PHP, jest %s.<br />Limit b�dzie podniesiony je�eli warto�� nie b�dzie u�ywana!"); //added: 09-01-2006
define("_ZOOM_SETTINGS_THUMBSETTINGS","Ustewienia thumbnail:");
define("_ZOOM_SETTINGS_QUALITY","Jako�� NetPBM i GD2 JPEG: ");
define("_ZOOM_SETTINGS_SIZE","Max. rozmiar thumbnail: ");
define("_ZOOM_SETTINGS_TEMPNAME","Nazwa tymczasowa: ");
define("_ZOOM_SETTINGS_AUTONUMBER","automatyczna numeracji nazw obrazk�w (np. 1,2,3)");
define("_ZOOM_SETTINGS_TEMPDESCR","Opis tymczasowy: ");
define("_ZOOM_SETTINGS_TITLE","Tytu� galeri:");
define("_ZOOM_SETTINGS_SUBCATSPG","Liczba kolumn (pod-)galerii");
define("_ZOOM_SETTINGS_COLUMNS","Liczba kolumn thumbnail");
define("_ZOOM_SETTINGS_THUMBSPG","Thumbs na stronie");
define("_ZOOM_SETTINGS_CMTLENGTH","Max. d�uo�� komentarzy");
define("_ZOOM_SETTINGS_CHARS","znaki");
define("_ZOOM_SETTINGS_GALLERYPREFIX","Galeria-tytu� prefix");
define("_ZOOM_SETTINGS_SHOWOCCSPACE","Poka� zajmowan� przestrze� w Menagerze Medi�w");
define("_ZOOM_SETTINGS_TEMPLATE_TITLE","Szablon");
define("_ZOOM_SETTINGS_FEATURES_TITLE","Szczeg�y ON/ OFF");
define("_ZOOM_SETTINGS_CSS_TITLE","Edytuj Stylesheets");
define("_ZOOM_SETTINGS_DISPLAY_TITLE","Dane do wy�wyetlenia ON/ OFF");
define("_ZOOM_SETTINGS_TEMPLATE_CHOOSE","Wybierz szablon dla okre�lenia widoku &amp; odczu� galerii");
define("_ZOOM_SETTINGS_TEMPLATE_TABLES","Klasyczny (z tabelami)");
define("_ZOOM_SETTINGS_TEMPLATE_TABLELESS","Nowoczesny (bez tabel)");
define("_ZOOM_SETTINGS_COMMENTS","Komentarze");
define("_ZOOM_SETTINGS_POPUP","PopUp Media");
define("_ZOOM_SETTINGS_CATIMG","Poka� obrazek galeri");
define("_ZOOM_SETTINGS_SLIDESHOW","Prezentacja");
define("_ZOOM_SETTINGS_ZOOMLOGO","Wy�wietl zOOm-logo");
define("_ZOOM_SETTINGS_DESCRINGAL","Poka� opis albumu wewn�trz galeri");
define("_ZOOM_SETTINGS_SHOWHITS","Wy�wyetl liczb� wej��");
define("_ZOOM_SETTINGS_READEXIF","Czytaj EXIF-data");
define("_ZOOM_SETTINGS_EXIFTOOLTIP","W�a�ciwo�� wy�wietli dodatkowe dane EXIF i inne IPTC, bez potrzeby instalowania modu�u EXIF dla PHP w Twoim systemie.");
define("_ZOOM_SETTINGS_READID3","Czytaj mp3 ID3-data");
define("_ZOOM_SETTINGS_ID3TOOLTIP","Szczeg� wy�wietli dodatkowe dane ID3 v1.1 i v2.0 podczas przegl�dania plik�w mp3.");
define("_ZOOM_SETTINGS_RATING","Ocenianie");
define("_ZOOM_SETTINGS_CSS","Kono Popup");
define("_ZOOM_SETTINGS_CSSZOOM","widok elementu zOOm gallery");
define("_ZOOM_SETTINGS_SUCCESS","Konfiguracja zaktualizowana pomy�lnie!");
define("_ZOOM_SETTINGS_ZOOMING","Zoom obrazka");
define("_ZOOM_SETTINGS_ORDERBY","Metoda porz�dkowania thumbnail; porz�dek przez");
define("_ZOOM_SETTINGS_CATORDERBY","Metoda porz�dkowania (pod-)galerii; porz�dek przez");
define("_ZOOM_SETTINGS_NO_POP","Wy�acz okienka PopUp");
define("_ZOOM_SETTINGS_STANDARD_POP","Standardowe okienka PopUp");
define("_ZOOM_SETTINGS_LIGHTBOX_POP","Lightbox JS PopUp");
define("_ZOOM_SETTINGS_LIGHTBOX_SLIDESHOW","<strong><i> W��CZ JE�LI CHCESZ U�YWA� POKAZU DO PRACY Z LIGHTBOX JS</i></strong>");
define("_ZOOM_SETTINGS_DATE_ASC","DATA, rosn�co");
define("_ZOOM_SETTINGS_DATE_DESC","DATA, malej�co");
define("_ZOOM_SETTINGS_FLNM_ASC","NAZWA PLIKU, rosn�co");
define("_ZOOM_SETTINGS_FLNM_DESC","NAZWA PLIKU, malej�co");
define("_ZOOM_SETTINGS_NAME_ASC","NAZWA, rosn�co");
define("_ZOOM_SETTINGS_NAME_DESC","NAZWA, malej�co");
define("_ZOOM_SETTINGS_LBTOOLTIP","Lightbox jest jak w�zek na zakupy z mo�liwo�ci� wype�niania mediami wybranymi porzez U�ytkownika, kt�re mog� by� �ci�gni�te jaki pliki ZIP.");
define("_ZOOM_SETTINGS_SHOWNAME","Wy�wietl nazw�");
define("_ZOOM_SETTINGS_SHOWDESCR","Wy�wietl opis");
define("_ZOOM_SETTINGS_SHOWKEYWORDS","Wy�wietl s�owa kluczowe");
define("_ZOOM_SETTINGS_SHOWDATE","Wy�wietl dat�");
define("_ZOOM_SETTINGS_SHOWUNAME","Wy�wietl nazw� U�ytkownika");
define("_ZOOM_SETTINGS_SHOWFILENAME","Wy�wietl nazw� pliku");
define("_ZOOM_SETTINGS_METABOX","Wy�wietl p�ywaj�c� skrzynk� �acznie ze szczeg�ami na stronach galerii");
define("_ZOOM_SETTINGS_METABOXTOOLTIP","Odznacz t� w�a�ciwo�� aby zwi�kszy� pr�dko�� dzia�ania Twojej galeri. Efektywne przy du�ych bazach danych.");
define("_ZOOM_SETTINGS_ECARDS","E-kartki");
define("_ZOOM_SETTINGS_ECARDS_LIFETIME","E-cards lifetime");
define("_ZOOM_SETTINGS_ECARDS_ONEWEEK","1 tydzie�");
define("_ZOOM_SETTINGS_ECARDS_TWOWEEKS","2 tygodnie");
define("_ZOOM_SETTINGS_ECARDS_ONEMONTH","1 miesi�c");
define("_ZOOM_SETTINGS_ECARDS_THREEMONTHS","3 miesi�ce");
define("_ZOOM_SETTINGS_SHOWSEARCH","Pole wyszukiwania na wszystkich stronach");
define("_ZOOM_SETTINGS_BOX_ANIMATE","Skrzynki animowane");
define("_ZOOM_SETTINGS_BOX_PROPERTIES","Skrzynka w�a�ciwo�ci visual state");
define("_ZOOM_SETTINGS_BOX_META","Skrzynka metadata visual state");
define("_ZOOM_SETTINGS_BOX_COMMENTS","Skrzynka komentarzy visual state");
define("_ZOOM_SETTINGS_BOX_RATING","Skrzynka oceniania visual state");
define("_ZOOM_SETTINGS_TOPTEN","Wy�wietl odsy�acz \"Top 10\" na stronie g��wnej");
define("_ZOOM_SETTINGS_LASTSUBM","Wy�wietl odsy�acz \"Ostatnio wprowadzone Media\" na stronie g��wnej");
define("_ZOOM_SETTINGS_SETMENUOPTION","Wy�wietl odsy��cz \"Wgraj Media\" w Menu U�ytkownika");
define("_ZOOM_SETTINGS_USEFTP","U�yj trybu FTP?");
define("_ZOOM_SETTINGS_FTPHOST","Nazwa Hosta");
define("_ZOOM_SETTINGS_FTPUNAME","Nazwa U�ytkownika");
define("_ZOOM_SETTINGS_FTPPASS","Has�o");
define("_ZOOM_SETTINGS_FTPWARNING","Ostrze�enie: Has�o nie jest zapisane bezpiecznie!");
define("_ZOOM_SETTINGS_FTPHOSTDIR","Katalog na host");
define("_ZOOM_SETTINGS_MESS_FTPHOSTDIR","Prosz� wprowadzi� �cie�k� dost�pu do Mambo! z ftp-root. WA�NE: Koniec <b>bez</b> slasha lub backslasha!");
define("_ZOOM_SETTINGS_GROUP","Grupa");
define("_ZOOM_SETTINGS_PRIV_DESCR","Jeste� w stanie zmieni� przypisanie ka�dej grupy u�ytkownik�w znanych z Joomla! jak r�wnie� zmieni� przypisanie
    ka�dego u�ytkownika, kt�ry jest u�ytkownikiem danej grupy!<br />
    Teoretycznie, u�ytkownik mo�e wykona� nast�puj�ce akcje: wgra� plik(i), edytowa�/ usun�� media, utworzy�/ edytowa�/ usun�� (shared) galerie.<br />
    To co mog� i nie mog� zrobi� w rzeczywisto�ci nale�y do Ciebie.");
define("_ZOOM_SETTINGS_CLOSE","Wy�wietl odsy�acz \"Zamknij\" w okienku popup");
define("_ZOOM_SETTINGS_MAINSCREEN","Wy�wietl odsy�acz Mainscreen w navigation breadcrumb");
define("_ZOOM_SETTINGS_NAVBUTTONS","Wy�wietl przyciski nawigacyjne");
define("_ZOOM_SETTINGS_PROPERTIES","Wy�wietl w�a�ciwi�ci poni�ej elementu");
define("_ZOOM_SETTINGS_MEDIAFOUND","Wy�wietl tekst \"Znalezione Media\" w galeri");
define("_ZOOM_SETTINGS_ANONYMOUS_COMMENTS","Zezw�l na anonimowe komentarze");
define("_ZOOM_SETTINGS_WM_ENABLE_TITLE","Aktywuj w�a�ciwo��");
define("_ZOOM_SETTINGS_WM_TITLE", "Twoje znaki wodne");
define("_ZOOM_SETTINGS_WM_DESCR", "Znak wodny pokazywany jest na g�rze obrazk�w w serwisie web. "
 . "Obrazek b�dzie nadal widoczny, ale widzowie nie pokusz� sie aby go skopiowa� lub wydrukowa�."
 . "<br /><br />Podpowied�: mo�esz u�y� firmowe logo jako znak wodny. "
 . "Upewnij si� �e ustawi�e� znak wodny jako t�o transparentne!");
define("_ZOOM_SETTINGS_WM_IMG", "Obrazek");
define("_ZOOM_SETTINGS_WM_NOWATERMARKS", "Nie znaleziono znak�w wodnych. Mo�esz wgra� nowy znak wodny poni�ej.");
define("_ZOOM_SETTINGS_WM_PLACEMENT_TITLE", "Po�o�enie");
define("_ZOOM_SETTINGS_WM_PLACEMENT_DESCR", "Mo�esz okre�li� po�o�enia znaku wodnego na celowniku obrazka przez "
 . "wybranie jednej z pozycji w poni�szym szarym oknie.");
define("_ZOOM_SETTINGS_WM_FILE","Wgraj znak wodny");
define("_ZOOM_SETTINGS_WM_UPLOAD_SUCCESS","Znak wodny wgrany pomy�lnie!");
define("_ZOOM_SETTINGS_WM_UPLOAD_FAIL","Wgrywanie znaku wodnego zako�czy�o si� niepowodzeniem.");
define("_ZOOM_SETTINGS_WM_DEL_SUCCESS","Znak wodny zosta� usuni�ty pomy�lnie!");
define("_ZOOM_SETTINGS_WM_DEL_FAIL","Znak wodny nie mo�e by� usuni�ty.");
define("_ZOOM_SYSTEM_TITLE","Konfiguracje Systemu");
define("_ZOOM_YES","tak");
define("_ZOOM_NO","nie");
define("_ZOOM_VISIBLE","widoczne");
define("_ZOOM_HIDDEN","ukryte");
define("_ZOOM_SAVE","Zapisz");
define("_ZOOM_MOVEFILES","Przenie� media");
define("_ZOOM_BUTTON_MOVE","Przenie�");
define("_ZOOM_MOVEFILES_STEP1","Wybierz galeri� docelow� &amp; przenie� media");
define("_ZOOM_ALERT_MOVE","%s media przeniesione pomy�lnie, %s media nie mog� by� przeniesione.");
define("_ZOOM_OPTIMIZE","Optymalizuj tabele");
define("_ZOOM_OPTIMIZE_DESCR","zOOm Media Gallery uses its tables a lot and thus creates overhead data, ie. 'junk data'. Click here to remove this junk.");
define("_ZOOM_OPTIMIZE_SUCCESS","Zoptymalizowano tabele zOOm Media Gallery!");
define("_ZOOM_UPDATE","Aktualizuj zOOm Media Gallery");
define("_ZOOM_UPDATE_DESCR","dodaj nowe szczeg�y, rozwi�� problemy i resolve bugs! Odwied� <a href=\"http://www.zoomfactory.org\" target=\"_blank\">www.zoomfactory.org</a> po najnowsze aktualizacje!");
define("_ZOOM_UPDATE_XMLDATE","Data ostatniej aktualizacji");
define("_ZOOM_UPDATE_NOUPDATES","jeszcze nie zaktualizowano!"); // added 11-08
define("_ZOOM_UPDATE_PACKAGE","Aktualizuj plik ZIP: ");
define("_ZOOM_CREDITS","O zOOm Media Gallery &amp; Credits");

//Image actions
define("_ZOOM_DISKSPACEUSAGE","Powierzchnia dyskowa %s jest aktualnie u�ywana");
define("_ZOOM_UPLOAD_SINGLE","pojedynczy plik (ZIP)");
define("_ZOOM_UPLOAD_MULTIPLE","pliki zbiorowe");
define("_ZOOM_UPLOAD_DRAGNDROP","Drag n Drop");
define("_ZOOM_UPLOAD_SCANDIR","skanuj katalog");
define("_ZOOM_UPLOAD_INTRO","Przyci�nij przycisk <b>Przegl�daj</b> aby wybra� element do wgrania.");
define("_ZOOM_UPLOAD_STEP1","1. Wybierz liczb� plik�w do wgrania: ");
define("_ZOOM_UPLOAD_STEP2","2. Wybierz galeri� do kt�rej chcesz wgra� pliki: ");
define("_ZOOM_UPLOAD_STEP3","3. U�yj przycisku Przegl�daj aby znale�� zdj�cia na twoim komputerze");
define("_ZOOM_SCAN_STEP1","Krok 1: wska� lokalizacj� wyszukiwania plik�w...");
define("_ZOOM_SCAN_STEP2","Krok 2: wybierz pliki kt�re chcesz wgra�...");
define("_ZOOM_SCAN_STEP3","Krok 3: zOOm przetwarza pliki kt�re wybra�e�...");
define("_ZOOM_SCAN_STEP1_DESCR","Lokalizacje mo�e by� adresem URL lub katalogiem na serwerze.<br />&nbsp; Podpowied�: Wprowad� media poprzez FTP do katalogu na serwerze, nast�pnie wprowad� �cie�k� dost�pu do nich tytaj!");
define("_ZOOM_SCAN_STEP2_DESCR1","Przetwarzanie");
define("_ZOOM_SCAN_STEP2_DESCR2","jako lokalny katalog");
define("_ZOOM_FORMCREATE_NAME","Nazwa");
define("_ZOOM_FORM_IMAGEFILE","Element");
define("_ZOOM_FORM_IMAGEFILTER","Obs�ugiwane typy Medi�w");
define("_ZOOM_FORM_INGALLERY","W galerii");
define("_ZOOM_FORM_SETFILENAME","Set media names with original filenames.");
define("_ZOOM_FORM_IGNORESIZES","Pomi� preset maximum image dimensions"); //added: 12-08
define("_ZOOM_FORM_LOCATION","Po�o�enie");
define("_ZOOM_BUTTON_SCAN","Submit URL or directory");
define("_ZOOM_BUTTON_UPLOAD","Wgraj");
define("_ZOOM_BUTTON_EDIT","Edytuj");
define("_ZOOM_BUTTON_CREATE","Utw�rz");
define("_ZOOM_CONFIRM_WIPE","OSTRZE�ENIE!\\n Uruchomienie tej funkcji ca�kowicie wyma�e zOOm gallery oraz usunie wszystkie obrazki i galerie.\\n\\n CZy chcesz kontynuowa�?");
define("_ZOOM_CONFIRM_DEL","Opcja usunie ca�kowicie galeri� ��cznie z mediami!\\nCzy potwierdzasz wyb�r?");
define("_ZOOM_CONFIRM_DELMEDIUM","Zamierzasz ca�kowicie usun�� element!\\nCzy potwierdzasz wyb�r?");
define("_ZOOM_ALERT_DEL","Usuni�to galeri�!");
define("_ZOOM_ALERT_NOCAT","NIe wybrano galerii!");
define("_ZOOM_ALERT_NOMEDIA","Nie wybrano medi�w!");
define("_ZOOM_ALERT_EDITOK","Pola galeri zosta�y zedytowane pomy�lnie!");
define("_ZOOM_ALERT_NEWGALLERY","Utworzono now� galeri�.");
define("_ZOOM_ALERT_NONEWGALLERY","Nie utworzono galeri!");
define("_ZOOM_ALERT_EDITIMG","W�a�ciwo�ci elementu zedytowane pomy�lnie.");
define("_ZOOM_ALERT_DELPIC","Element usuni�ty pomy�lnie.");
define("_ZOOM_ALERT_NODELPIC","Element nie mo�e by� usuni�ty!");
define("_ZOOM_ALERT_MOVEFAILURE","Element nie mo�e by� przeniesiony."); //added: 08-08-2006
define("_ZOOM_ALERT_NOPICSELECTED","Nie wybrano element�w.");
define("_ZOOM_ALERT_NOPICSELECTED_MULT","Nie wybrano medi�w.");
define("_ZOOM_ALERT_UPLOADOK","Element zaktualizowany pomy�lnie!");
define("_ZOOM_ALERT_UPLOADSOK","media zaktualizowane pomy�lnie!");
define("_ZOOM_ALERT_WRONGFORMAT","B��dny format obrazka.");
define("_ZOOM_ALERT_WRONGFORMAT_MULT","B��dny format.");
define("_ZOOM_ALERT_TOOBIG","Rozmiar pliku jest zbyt du�y; %s to max. rozmiar"); //added 08-08-2006
define("_ZOOM_ALERT_IMGERROR","B��d zmiany rozmiaru obrazka/ tworzenia thumbnail.");
define("_ZOOM_ALERT_PCLZIPERROR","B��d podczas rozwijania archiwum.");
define("_ZOOM_ALERT_INDEXERROR","B��d podzcas indeksowania dokumentu.");
define("_ZOOM_ALERT_WATERMARKERROR","B��d podczas nak�adania znaku wodnego na obrazek.");
define("_ZOOM_ALERT_IMGFOUND","obrazek(i) znaleziono.");
define("_ZOOM_INFO_CHECKCAT","Prosz� wybra� galeri� zanim przyci�niesz przycisk wgrywania!");
define("_ZOOM_BUTTON_ADDIMAGES","Dodaj media");
define("_ZOOM_BUTTON_REMIMAGES","Usu� media");
define("_ZOOM_INFO_PROCESSING","Przetwarzanie pliku:");
define("_ZOOM_ITEMEDIT_TAB1","W�a�ciwo�ci");
define("_ZOOM_ITEMEDIT_TAB2","Cz�onkowie");
define("_ZOOM_ITEMEDIT_TAB3","Akcje");
define("_ZOOM_USERSLIST_LINE1",">>Wybierz cz�onk�w elementu<<");
define("_ZOOM_USERSLIST_ALLOWALL",">>Dost�p publiczny<<");
define("_ZOOM_USERSLIST_MEMBERSONLY",">>Tylko cz�onkowie<<");
define("_ZOOM_PUBLISHED","Opublikowane");
define("_ZOOM_SHARED","Podzielone");
define("_ZOOM_ROTATE","Obr�� obrazek o 90 stopni");
define("_ZOOM_CLOCKWISE","zgodnie");
define("_ZOOM_CCLOCKWISE","przeciwnie");
define("_ZOOM_FLIP_HORIZ","Przerzu� obrazek poziomo");
define("_ZOOM_FLIP_VERT","Przerzu� obrazek pionowo");
define("_ZOOM_PROGRESS_DESCR","Twoja pro�ba jest przetwarzana... B�d� cierpliwy.");

//Navigation (including Slideshow buttons)
define("_ZOOM_SLIDESHOW","Prezentacja:");
define("_ZOOM_PREV_IMG","poprzenie");
define("_ZOOM_NEXT_IMG","nast�pne");
define("_ZOOM_FIRST_IMG","pierwsze");
define("_ZOOM_LAST_IMG","ostatnie");
define("_ZOOM_PLAY","play");
define("_ZOOM_STOP","stop");
define("_ZOOM_RESET","reset");
define("_ZOOM_FIRST","Pierwsze");
define("_ZOOM_LAST","Ostatnie");
define("_ZOOM_PREVIOUS","Poprzednie");
define("_ZOOM_NEXT","Nast�pne");
define("_ZOOM_IN_DESC", "Umie�� kursor w pobli�u obrazja i u�yj strza�ek dla ustalenia warto�ci zoom.");

//Gallery actions
define("_ZOOM_SEARCH_BOX","Przeszukaj galeri�");
define("_ZOOM_ADVANCED_SEARCH","Wyszukiwanie zaawansowane");
define("_ZOOM_SEARCH_KEYWORD","Wyszukaj s�owa kluczowego");
define("_ZOOM_IMAGES","media");
define("_ZOOM_IMGFOUND","%s medi�w znaleziono - strona %s z %s");
define("_ZOOM_SUBGALLERIES","podgalerie");
define("_ZOOM_ALERT_COMMENTOK","Tw�j komantarz zosta� pomy�lnie dodany!");
define("_ZOOM_ALERT_COMMENTERROR","Skomentowa�e� ju� ten obrazek!");
define("_ZOOM_ALERT_VOTE_OK","Tw�j g�os zosta� wliczony! Dzi�kuj�.");
define("_ZOOM_ALERT_VOTE_ERROR","Zag�osowa�e� ju� na ten obrazek!");
define("_ZOOM_WINDOW_CLOSE","Zamknij");
define("_ZOOM_NOPICS","Brak medi�w w galeri");
define("_ZOOM_PROPERTIES","W�asno��");
define("_ZOOM_COMMENTS","Komentarze");
define("_ZOOM_COMMENTS_INTRO","Napisz poni�ej sw�j komentarz:");

define("_ZOOM_NO_COMMENTS","Nie dodano jeszcze komentarzy.");
define("_ZOOM_SAYS","wskazuje");
define("_ZOOM_YOUR_NAME","Imi� i nazwisko");
define("_ZOOM_ADD","Dodaj");
define("_ZOOM_NAME","Nazwa");
define("_ZOOM_DATE","Data dodoania");
define("_ZOOM_UNAME","Dodane przez");
define("_ZOOM_DESCRIPTION","Opis");
define("_ZOOM_IMGNAME","Nazwa");
define("_ZOOM_FILENAME","Nazwa pliku");
define("_ZOOM_CLICKDOCUMENT","(przyci�nij na nazw� pliku aby otworzy� dokument)");
define("_ZOOM_KEYWORDS","S�owa kluczowe");
define("_ZOOM_HITS","wej��");
define("_ZOOM_CLOSE","Zamknij");
define("_ZOOM_NOIMG", "Nie znaleziono medi�w!");
define("_ZOOM_NONAME", "Musisz poda� nazw�!");
define("_ZOOM_NOCAT", "Nie wybrano galeri!");
define("_ZOOM_EDITPIC", "Edytuj");
define("_ZOOM_SETCATIMG","Ustaw obrazek galeri");
define("_ZOOM_SETPARENTIMG","Ustaw obrazek RODZIMEJ galeri");
define("_ZOOM_PASS","Has�o");
define("_ZOOM_PASS_REQUIRED","Galeria wymaga podania has�a.<br />Prosz� wype�ni� pole has�a<br />i przycian�� przycisk Id�. Dzi�kuj�.");
define("_ZOOM_PASS_BUTTON","Id�");
define("_ZOOM_PASS_GALLERY","Has�o");
define("_ZOOM_PASS_INNCORRECT","Has�o niepoprawne");

//Hotlinking
define("_ZOOM_SETTINGS_HOTLINK","Zezw�l na ochron� przed Hotlinkowaniem");
define("_ZOOM_SETTINGS_HPTOOLTIP","Kiedy ochrona przed hotlinkowaniem jest aktywna, nazwa pliku obrazka i �cie�ka zostan� ukryte. Je�li u�ytkownik spr�buje u�y� obrazka na innej stronie, pr�ba zako�czy si� niepowodzeniem.");


//Lightbox
define("_ZOOM_LIGHTBOX","Lightbox");
define("_ZOOM_LIGHTBOX_GALLERY","Wprowad� galeri� do Lightbox!");
define("_ZOOM_LIGHTBOX_ITEM","Wprowad� element do Lightbox!");
define("_ZOOM_LIGHTBOX_VIEW","Zobacz swoj� Lightbox");
define("_ZOOM_YOUR_LIGHTBOX","Zawarto�� Twojej Lightbox:");
define("_ZOOM_LIGHTBOX_EMPTY","Twoja Lightbox jest aktualnie pusta.");
define("_ZOOM_LIGHTBOX_ZIPBTN","Utw�rz plik ZIP");
define("_ZOOM_LIGHTBOX_PLAYLISTBTN","Utw�rz Playlist &amp; Play");
define("_ZOOM_LIGHTBOX_CATS","Galerie");
define("_ZOOM_LIGHTBOX_TITLEDESCR","Tytu� &amp; Opis");
define("_ZOOM_ACTION","Akcja");
define("_ZOOM_LIGHTBOX_ADDED","Element pomy�lnie dodany do Twojej lightbox!");
define("_ZOOM_LIGHTBOX_NOTADDED","Element zosta� ju� dodany do Twojej lightbox!");
define("_ZOOM_LIGHTBOX_EDITED","Element zosta� zedytowany pomy�lnie!");
define("_ZOOM_LIGHTBOX_NOTEDITED","B��d edytowania elementu!");
define("_ZOOM_LIGHTBOX_DEL","Element pomy�nie usuni�ty z Twojej lightbox!");
define("_ZOOM_LIGHTBOX_NOTDEL","B��d usuwania elementu z Twojej lightbox!");
define("_ZOOM_LIGHTBOX_NOZIP","Utworzy�e� ju� plik ZIP Twojej lightbox lub Twoja lightbox nie zawiera element�w!");
define("_ZOOM_LIGHTBOX_PARSEZIP","Parsing obrazk�w z galeri...");
define("_ZOOM_LIGHTBOX_DOZIP","tworzenie pliku ZIP...");
define("_ZOOM_LIGHTBOX_DLHERE","Mo�esz teraz �ci�gn�� lightbox");
define("_ZOOM_LIGHTBOX_PLSUCCESS","Playlista utworzona pomy�lnie! Wymagane jest od�wie�enie okna Playera.");
define("_ZOOM_LIGHTBOX_PLERROR","B��d tworzenia Playlisty.");
define("_ZOOM_LIGHTBOX_NOAUDIO","Najpierw musisz doda� pliki Audio do Twojej Lightbox!");
define("_ZOOM_LIGHTBOX_NOITEMS","Wydaje si�, �e Lightbox jest pusta.");

//EXIF information
define("_ZOOM_EXIF","EXIF");
define("_ZOOM_EXIF_SHOWHIDE","Poka�/Ukryj Metadata");

//MP3 id3 v1.1 or later information
define("_ZOOM_AUDIO_PLAYING","aktualnie odtwarzane:");
define("_ZOOM_AUDIO_CLICKTOPLAY","Przyci�nij aby odtworzy� plik.");
define("_ZOOM_ID3","ID3");
define("_ZOOM_ID3_SHOWHIDE","Poka�/Ukryj ID3-tag data");
define("_ZOOM_ID3_LENGTH","D�ugo��");
define("_ZOOM_ID3_QUALITY","Jako��");
define("_ZOOM_ID3_TITLE","Tytu�");
define("_ZOOM_ID3_ARTIST","Artysta");
define("_ZOOM_ID3_ALBUM","Album");
define("_ZOOM_ID3_YEAR","Rok");
define("_ZOOM_ID3_COMMENT","Komentarz");
define("_ZOOM_ID3_GENRE","Gatunek");

//Video metadata information
define("_ZOOM_VIDEO_SHOWHIDE","Poka�/Ukryj Video data");
define("_ZOOM_VIDEO_PIXELRATIO","Stosunek px");
define("_ZOOM_VIDEO_QUALITY","Jako�� Video");
define("_ZOOM_VIDEO_AUDIOQUALITY","Jako�� Audio");
define("_ZOOM_VIDEO_CODEC","Codec");
define("_ZOOM_VIDEO_RESOLUTION","Rozdzielczo��");

//rating
define("_ZOOM_RATING","Ocenianie");
define("_ZOOM_NOTRATED","Nie g�osowano jeszcze!");
define("_ZOOM_VOTE","g�os");
define("_ZOOM_VOTES","g�osy");
define("_ZOOM_RATE0","marne");
define("_ZOOM_RATE1","s�abe");
define("_ZOOM_RATE2","�rednie");
define("_ZOOM_RATE3","dobre");
define("_ZOOM_RATE4","bardzo dobre");
define("_ZOOM_RATE5","perfect!");

//special
define("_ZOOM_TOPTEN","Top 10");
define("_ZOOM_LASTSUBM","Ostatnio przed�o�one");
define("_ZOOM_LASTCOMM","Ostatnio komentowane");
define("_ZOOM_SEARCHRESULTS","Wyniki wyszukiwania");
define("_ZOOM_TOPRATED","Najlepsze");

//ecard
define("_ZOOM_ECARD_SENDAS","Wy�lij element do przyjaciela jako E-katrk�!");
define("_ZOOM_ECARD_YOURNAME","Twoje imi� i nazwisko");
define("_ZOOM_ECARD_YOUREMAIL","Tw�j adres e-mail");
define("_ZOOM_ECARD_FRIENDSNAME","Imi� i nazwisko Twojego przyjaciela");
define("_ZOOM_ECARD_FRIENDSEMAIL","Adres e-mail Twojego przyjaciela");
define("_ZOOM_ECARD_MESSAGE","Wiadomo��");
define("_ZOOM_ECARD_SENDCARD","Wy�lij E-katrk�");
define("_ZOOM_ECARD_SUCCESS","Twoja E-kartka zosta�a wys�ana pomy�lnie.");
define("_ZOOM_ECARD_CLICKHERE","Przyci�nij aby zobaczy�!");
define("_ZOOM_ECARD_ERROR","B��d wysy�ania E-kartki do");
define("_ZOOM_ECARD_TURN","Zobacz na ty� kartki!");
define("_ZOOM_ECARD_TURN2","Zobacz na prz�d kartki!");
define("_ZOOM_ECARD_SENDER","Wys�ane do Ciebie przez:");
define("_ZOOM_ECARD_SUBJ","Otrzyma�e� E-kartk� od:");
define("_ZOOM_ECARD_MSG1","wys�ano E-kartk� od");
define("_ZOOM_ECARD_MSG2","Przyci�nij na poni�szy odsy�acz aby zobaczy� prywatn� E-kartk�!");
define("_ZOOM_ECARD_MSG3","Nie odpowiadaj na ten e-mail, jest on generowany automatycznie.");
define("_ZOOM_ECARD_ECARDEXPIRED","Przepraszam, E-kartka nie jest ju� dost�pna lub wymaga wniesiania op�aty.");

//installation-screen
define ('_ZOOM_INSTALL_CREATE_DIR','Instalator zOOm pr�buje utworzy� katalog "images/zoom" ...');
define ('_ZOOM_INSTALL_CREATE_DIR_WM','Instalator zOOm pr�buje utworzy� katalog "images/zoom/watermarks" ...');
define ('_ZOOM_INSTALL_CREATE_DIR_SUCC','wykonano!');
define ('_ZOOM_INSTALL_CREATE_DIR_FAIL','niepowodzenie!');
define ('_ZOOM_INSTALL_CREATE_DBASE_SUCC','Baza danych pomy�lnie utworzona!');
define ('_ZOOM_INSTALL_UPGRADED_DBASE_SUCC','Baza danych upgraded pomy�lnie!');
define ('_ZOOM_INSTALL_MESS1','zOOm Image Gallery zainstalowana pomy�lnie.<br>Jeste� gotowy do przedstawienia swoich album�w!');
define ('_ZOOM_INSTALL_MESS2','UWAGA: pierwsz� rzecz� jak� powiniene� zrobi�, to przej�� do powy�szego menu komponent�w,<br> znale�� "zOOm Media Gallery Admin", przycisn�� i <br>sprawdzi� ustawienia strony w Admin-system.');
define ('_ZOOM_INSTALL_MESS3','Tutaj mo�esz zmieni� wszystkie zmienne aby ustawi� w�asn� konfiguracj� zOOm.');
define ('_ZOOM_INSTALL_MESS4','Nie zapomnij utworzy� galeri i w drog�!');
define ('_ZOOM_INSTALL_MESS_FAIL1','zOOM Gallery nie zosta� zainstalowany pomy�lnie!');
define ('_ZOOM_INSTALL_MESS_FAIL2','Wyszczeg�lnione katalogi musz� by� utworzone, nast�pnie prawa dost�p do nich zmienione na "0777":<br />'
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
define ('_ZOOM_INSTALL_MESS_FAIL3','Kiedy ju� masz utworzone katalogi i zmienione prawa dost�pu do nich, przejd� do <br /> "Komponenty -> zOOm Media Gallery" i dopasuj ustawienia do swoich potrzeb.');
?>