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
| Translation: mgr in¿. Andrzej K³os (andrzejklosiem@orange.pl)       |
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
defined( '_VALID_MOS' ) or die( 'Bezpoœredni dostêp do lokalizacji jest zabroniony.' );
//Language translation
define("_ZOOM_DATEFORMAT","%d.%m.%Y %H:%M"); // use the PHP strftime Format, more info at http://www.php.net
define("_ZOOM_PICK","Wybierz galeriê");
define("_ZOOM_DELETE","Usuñ");
define("_ZOOM_BACK","Powrót");
define("_ZOOM_MAINSCREEN","Strona g³ówna");
define("_ZOOM_BACKTOGALLERY","Powrót do galeri");
define("_ZOOM_INFO_DONE","gotowe!");
define("_ZOOM_TOOLTIP", "zOOm ToolTip");
define("_ZOOM_WARNING", "Ostrze¿enie zOOm!");

//Gallery admin page
define("_ZOOM_ADMINSYSTEM","Admin System");
define("_ZOOM_USERSYSTEM","User System");
define("_ZOOM_ADMIN_TITLE","Media Gallery Admin System");
define("_ZOOM_USER_TITLE","Media Gallery User System");
define("_ZOOM_CATSMGR","Manager Galerii");
define("_ZOOM_CATSMGR_DESCR","utwórz nowe galerie dla nowych mediów; utwórz, edytuj i usuñ je w Managerze Galerii.");
define("_ZOOM_SETTINGS_DDONOF","Zezwól na wgrywanie Drag n Drop");
define("_ZOOM_NEW","Zapisz now¹ galeriê");
define("_ZOOM_DEL","Usuñ galeriê");
define("_ZOOM_ORDERSAVE", "Zapisz kolejnoœæ");
define("_ZOOM_MEDIAMGR","Manager Mediów");
define("_ZOOM_MEDIAMGR_DESCR","przenieœ, edytuj, usuñ, skanuj media automatycznie lub wgraj (zbiorowo) nowe media rêcznie.");
define("_ZOOM_THUMB", "Koder Zoom Thumb");
define("_ZOOM_THUMB_DESCR", "Przetwarzaj ³atwiej swoje kody Zoom Thumb");
define("_ZOOM_UPLOAD","Wgraj plik(i)");
define("_ZOOM_EDIT","Edytuj galeriê");
define("_ZOOM_ADMIN_CREATE","Utwórz bazê danych");
define("_ZOOM_ADMIN_CREATE_DESCR","zbuduj wymagane tabele bazy danych aby rozpocz¹æ korzystanie z albumu");
define("_ZOOM_HD_PREVIEW","Podgl¹d");
define("_ZOOM_HD_CHECKALL","Zaznacz/Odznacz wszystko");
define("_ZOOM_HD_CREATEDBY","Utworzone przez");
define("_ZOOM_HD_AFTER","Galeria rodzima");
define("_ZOOM_HD_HIDEMSG","Ukruj tekst 'brak mediów'");
define("_ZOOM_HD_NAME","Tytu³");
define("_ZOOM_HD_DIR","Katalog");
define("_ZOOM_HD_NEW","Nowa galeria");
define("_ZOOM_HD_SHARE","Podziel galeriê");
define("_ZOOM_SHARE","Dziel");
define("_ZOOM_UNSHARE","Nie dziel");
define("_ZOOM_PUBLISH","Publikuj");
define("_ZOOM_UNPUBLISH","Niepublikuj");
define("_ZOOM_TOPLEVEL","Najwy¿szy poziom");
define("_ZOOM_HD_UPLOAD","Wgraj plik");
define("_ZOOM_A_ERROR_ERRORTYPE","B³¹d typu");
define("_ZOOM_A_ERROR_IMAGENAME","Nazwa obrazka");
define("_ZOOM_A_ERROR_NOFFMPEG","Nie stwierdzono istnienia <u>FFmpeg</u>");
define("_ZOOM_A_ERROR_NOPDFTOTEXT","Nie stwierdzono istnienia <u>PDFtoText</u>");
define("_ZOOM_A_ERROR_NOTINSTALLED","Nie zainstalowano");
define("_ZOOM_A_ERROR_CONFTODB","B³¹d podzczas zapisywania konfiguracji do bazy danych!");
define("_ZOOM_A_MESS_NOT_SHURE","* Jeœli jesteœ pewny, u¿yj domyœlnie \"auto\" ");
define("_ZOOM_A_MESS_SAFEMODE1","UWAGA: \"Safe Mode\" zosta³ aktywowany, mo¿e wyst¹piæ b³êdna praca podczas wgrywania wiêkszych plików!<br />Powinieneœ przejœæ do Admin System i prze³¹czyæ siê na FTP-Mode.");
define("_ZOOM_A_MESS_SAFEMODE2","UWAGA: \"Safe Mode\" zosta³ aktywowany, mo¿e wyst¹piæ b³êdna praca podczas wgrywania wiêkszych plików!<br />zOOm zaleca aktywowaæ FTP-Mode w Admin System.");
define("_ZOOM_A_MESS_PROCESSING_FILE","Przetwa¿anie pliku...");
define("_ZOOM_A_MESS_NOTOPEN_URL","Nie mo¿na otworzyæ adresu URL:");
define("_ZOOM_A_MESS_PARSE_URL","Parsing \"%s\" for images... "); // %s = $url
define("_ZOOM_A_MESS_NOJAVA","Jeœli zobaczysz szare okienko powy¿ej lub masz problemy podczas wgrywania plików, mo¿e to byæ spowodowane<br />brakiem zainstalowanej najnowszej wersji aplikacji Java Run-Time. PrzejdŸ do <a href=\"http://www.java.com\" target=\"_blank\">Java.com</a> <br /> i œci¹gnij najnowsz¹ wersjê aplikacji.");
define("_ZOOM_SETTINGS","Ustawienia");
define("_ZOOM_SETTINGS_DESCR","zmieñ i zobacz wszystkie dostêpne ustawienia konfiguracyjne.");
define("_ZOOM_SETTINGS_TAB1","System");
define("_ZOOM_SETTINGS_TAB2","Media");
define("_ZOOM_SETTINGS_TAB3","Szczegó³y");
define("_ZOOM_SETTINGS_TAB4","Warstwa");
define("_ZOOM_SETTINGS_TAB5","Znaki wodne");
define("_ZOOM_SETTINGS_TAB6","Safe Mode");
define("_ZOOM_SETTINGS_TAB7","Dostêpnoœæ");
define("_ZOOM_SETTINGS_TAB8","Reset");
define("_ZOOM_SETTINGS_ERASE","Przyciœnij aby wyczyœciæ dane zoom gallery i rozpocz¹æ korzystanie od pocz¹tku. Ustawienia zostan¹ zresetowane i wszystkie obrazki usuniête.");
define("_ZOOM_SETTINGS_CONVTYPE","Konwersja typu pliku");
define("_ZOOM_SETTINGS_GALLERY_FEATURES","Szczegó³y widoku Galerii");
define("_ZOOM_SETTINGS_VIEW_FEATURES","Szczegó³y widoku Mediów");

define("_ZOOM_SETTINGS_GALLERY","Widok Galerii");
define("_ZOOM_SETTINGS_VIEW","Widok Mediów");

define("_ZOOM_SETTINGS_GENERAL_FEATURES","Szczegó³y Ogólne");
define("_ZOOM_SETTINGS_AUTODET","auto-detected: ");
define("_ZOOM_SETTINGS_IMGPATH","Œcie¿ka do plików mediów:");
define("_ZOOM_SETTINGS_TTIMGPATH","Aktualna œcie¿ka dostêpu do mediów ");
define("_ZOOM_SETTINGS_CONVSETTINGS","Ustawienia konwersji Mediów:");
define("_ZOOM_SETTINGS_IMPATH","Œcie¿ka do ImageMagick: ");
define("_ZOOM_SETTINGS_NETPBMPATH"," lub NetPBM: ");
define("_ZOOM_SETTINGS_FFMPEGPATH","Œcie¿ka do FFmpeg");
define("_ZOOM_SETTINGS_FFMPEGTOOLTIP","FFmpeg jest wymagany do utworzenia thumbnails plików video.<br />Obs³ugiwane rozsze¿enia to: ");
define("_ZOOM_SETTINGS_OVERRIDE_FFMPEG","U¿yj FFmpeg, nawet jeœli zOOm nie jest w stanie stwierdziæ istnienia w systemie.");
define("_ZOOM_SETTINGS_PDFTOTEXTPATH","Œcie¿ka do PDFtoText");
define("_ZOOM_SETTINGS_XPDFTOOLTIP","pdf2text, który jest czêœci¹ paczki Xpdf, jest wynagany do indeksowania pliku PDF.");
define("_ZOOM_SETTINGS_OVERRIDE_PDF","U¿yj PDFtoText, nawet jeœli zOOm nie jest w stanie stwierdziæ istnienia w systemie.");
define("_ZOOM_SETTINGS_MAXSIZE","Max. rozmiar obrazka: ");
define("_ZOOM_SETTINGS_MAXSIZEKB","Element - zawieraj¹cy obrazki - max. rozmiar (w kB): "); //added: 08-08-2006
define("_ZOOM_SETTINGS_MAXSIZEKB_WARNING","Limit wgrywania serwera, ustawiony poprzez ISP jako czêœæ konfiguracji PHP, jest %s.<br />Limit bêdzie podniesiony je¿eli wartoœæ nie bêdzie u¿ywana!"); //added: 09-01-2006
define("_ZOOM_SETTINGS_THUMBSETTINGS","Ustewienia thumbnail:");
define("_ZOOM_SETTINGS_QUALITY","Jakoœæ NetPBM i GD2 JPEG: ");
define("_ZOOM_SETTINGS_SIZE","Max. rozmiar thumbnail: ");
define("_ZOOM_SETTINGS_TEMPNAME","Nazwa tymczasowa: ");
define("_ZOOM_SETTINGS_AUTONUMBER","automatyczna numeracji nazw obrazków (np. 1,2,3)");
define("_ZOOM_SETTINGS_TEMPDESCR","Opis tymczasowy: ");
define("_ZOOM_SETTINGS_TITLE","Tytu³ galeri:");
define("_ZOOM_SETTINGS_SUBCATSPG","Liczba kolumn (pod-)galerii");
define("_ZOOM_SETTINGS_COLUMNS","Liczba kolumn thumbnail");
define("_ZOOM_SETTINGS_THUMBSPG","Thumbs na stronie");
define("_ZOOM_SETTINGS_CMTLENGTH","Max. d³uoœæ komentarzy");
define("_ZOOM_SETTINGS_CHARS","znaki");
define("_ZOOM_SETTINGS_GALLERYPREFIX","Galeria-tytu³ prefix");
define("_ZOOM_SETTINGS_SHOWOCCSPACE","Poka¿ zajmowan¹ przestrzeñ w Menagerze Mediów");
define("_ZOOM_SETTINGS_TEMPLATE_TITLE","Szablon");
define("_ZOOM_SETTINGS_FEATURES_TITLE","Szczegó³y ON/ OFF");
define("_ZOOM_SETTINGS_CSS_TITLE","Edytuj Stylesheets");
define("_ZOOM_SETTINGS_DISPLAY_TITLE","Dane do wyœwyetlenia ON/ OFF");
define("_ZOOM_SETTINGS_TEMPLATE_CHOOSE","Wybierz szablon dla okreœlenia widoku &amp; odczuæ galerii");
define("_ZOOM_SETTINGS_TEMPLATE_TABLES","Klasyczny (z tabelami)");
define("_ZOOM_SETTINGS_TEMPLATE_TABLELESS","Nowoczesny (bez tabel)");
define("_ZOOM_SETTINGS_COMMENTS","Komentarze");
define("_ZOOM_SETTINGS_POPUP","PopUp Media");
define("_ZOOM_SETTINGS_CATIMG","Poka¿ obrazek galeri");
define("_ZOOM_SETTINGS_SLIDESHOW","Prezentacja");
define("_ZOOM_SETTINGS_ZOOMLOGO","Wyœwietl zOOm-logo");
define("_ZOOM_SETTINGS_DESCRINGAL","Poka¿ opis albumu wewn¹trz galeri");
define("_ZOOM_SETTINGS_SHOWHITS","Wyœwyetl liczbê wejœæ");
define("_ZOOM_SETTINGS_READEXIF","Czytaj EXIF-data");
define("_ZOOM_SETTINGS_EXIFTOOLTIP","W³aœciwoœæ wyœwietli dodatkowe dane EXIF i inne IPTC, bez potrzeby instalowania modu³u EXIF dla PHP w Twoim systemie.");
define("_ZOOM_SETTINGS_READID3","Czytaj mp3 ID3-data");
define("_ZOOM_SETTINGS_ID3TOOLTIP","Szczegó³ wyœwietli dodatkowe dane ID3 v1.1 i v2.0 podczas przegl¹dania plików mp3.");
define("_ZOOM_SETTINGS_RATING","Ocenianie");
define("_ZOOM_SETTINGS_CSS","Kono Popup");
define("_ZOOM_SETTINGS_CSSZOOM","widok elementu zOOm gallery");
define("_ZOOM_SETTINGS_SUCCESS","Konfiguracja zaktualizowana pomyœlnie!");
define("_ZOOM_SETTINGS_ZOOMING","Zoom obrazka");
define("_ZOOM_SETTINGS_ORDERBY","Metoda porz¹dkowania thumbnail; porz¹dek przez");
define("_ZOOM_SETTINGS_CATORDERBY","Metoda porz¹dkowania (pod-)galerii; porz¹dek przez");
define("_ZOOM_SETTINGS_NO_POP","Wy³acz okienka PopUp");
define("_ZOOM_SETTINGS_STANDARD_POP","Standardowe okienka PopUp");
define("_ZOOM_SETTINGS_LIGHTBOX_POP","Lightbox JS PopUp");
define("_ZOOM_SETTINGS_LIGHTBOX_SLIDESHOW","<strong><i> W£¥CZ JEŒLI CHCESZ U¯YWAÆ POKAZU DO PRACY Z LIGHTBOX JS</i></strong>");
define("_ZOOM_SETTINGS_DATE_ASC","DATA, rosn¹co");
define("_ZOOM_SETTINGS_DATE_DESC","DATA, malej¹co");
define("_ZOOM_SETTINGS_FLNM_ASC","NAZWA PLIKU, rosn¹co");
define("_ZOOM_SETTINGS_FLNM_DESC","NAZWA PLIKU, malej¹co");
define("_ZOOM_SETTINGS_NAME_ASC","NAZWA, rosn¹co");
define("_ZOOM_SETTINGS_NAME_DESC","NAZWA, malej¹co");
define("_ZOOM_SETTINGS_LBTOOLTIP","Lightbox jest jak wózek na zakupy z mo¿liwoœci¹ wype³niania mediami wybranymi porzez U¿ytkownika, które mog¹ byæ œci¹gniête jaki pliki ZIP.");
define("_ZOOM_SETTINGS_SHOWNAME","Wyœwietl nazwê");
define("_ZOOM_SETTINGS_SHOWDESCR","Wyœwietl opis");
define("_ZOOM_SETTINGS_SHOWKEYWORDS","Wyœwietl s³owa kluczowe");
define("_ZOOM_SETTINGS_SHOWDATE","Wyœwietl datê");
define("_ZOOM_SETTINGS_SHOWUNAME","Wyœwietl nazwê U¿ytkownika");
define("_ZOOM_SETTINGS_SHOWFILENAME","Wyœwietl nazwê pliku");
define("_ZOOM_SETTINGS_METABOX","Wyœwietl p³ywaj¹c¹ skrzynkê ³acznie ze szczegó³ami na stronach galerii");
define("_ZOOM_SETTINGS_METABOXTOOLTIP","Odznacz t¹ w³aœciwoœæ aby zwiêkszyæ prêdkoœæ dzia³ania Twojej galeri. Efektywne przy du¿ych bazach danych.");
define("_ZOOM_SETTINGS_ECARDS","E-kartki");
define("_ZOOM_SETTINGS_ECARDS_LIFETIME","E-cards lifetime");
define("_ZOOM_SETTINGS_ECARDS_ONEWEEK","1 tydzieñ");
define("_ZOOM_SETTINGS_ECARDS_TWOWEEKS","2 tygodnie");
define("_ZOOM_SETTINGS_ECARDS_ONEMONTH","1 miesi¹c");
define("_ZOOM_SETTINGS_ECARDS_THREEMONTHS","3 miesi¹ce");
define("_ZOOM_SETTINGS_SHOWSEARCH","Pole wyszukiwania na wszystkich stronach");
define("_ZOOM_SETTINGS_BOX_ANIMATE","Skrzynki animowane");
define("_ZOOM_SETTINGS_BOX_PROPERTIES","Skrzynka w³aœciwoœci visual state");
define("_ZOOM_SETTINGS_BOX_META","Skrzynka metadata visual state");
define("_ZOOM_SETTINGS_BOX_COMMENTS","Skrzynka komentarzy visual state");
define("_ZOOM_SETTINGS_BOX_RATING","Skrzynka oceniania visual state");
define("_ZOOM_SETTINGS_TOPTEN","Wyœwietl odsy³acz \"Top 10\" na stronie g³ównej");
define("_ZOOM_SETTINGS_LASTSUBM","Wyœwietl odsy³acz \"Ostatnio wprowadzone Media\" na stronie g³ównej");
define("_ZOOM_SETTINGS_SETMENUOPTION","Wyœwietl odsy³¹cz \"Wgraj Media\" w Menu U¿ytkownika");
define("_ZOOM_SETTINGS_USEFTP","U¿yj trybu FTP?");
define("_ZOOM_SETTINGS_FTPHOST","Nazwa Hosta");
define("_ZOOM_SETTINGS_FTPUNAME","Nazwa U¿ytkownika");
define("_ZOOM_SETTINGS_FTPPASS","Has³o");
define("_ZOOM_SETTINGS_FTPWARNING","Ostrze¿enie: Has³o nie jest zapisane bezpiecznie!");
define("_ZOOM_SETTINGS_FTPHOSTDIR","Katalog na host");
define("_ZOOM_SETTINGS_MESS_FTPHOSTDIR","Proszê wprowadziæ œcie¿k¹ dostêpu do Mambo! z ftp-root. WA¯NE: Koniec <b>bez</b> slasha lub backslasha!");
define("_ZOOM_SETTINGS_GROUP","Grupa");
define("_ZOOM_SETTINGS_PRIV_DESCR","Jesteœ w stanie zmieniæ przypisanie ka¿dej grupy u¿ytkowników znanych z Joomla! jak równie¿ zmieniæ przypisanie
    ka¿dego u¿ytkownika, który jest u¿ytkownikiem danej grupy!<br />
    Teoretycznie, u¿ytkownik mo¿e wykonaæ nastêpuj¹ce akcje: wgraæ plik(i), edytowaæ/ usun¹æ media, utworzyæ/ edytowaæ/ usun¹æ (shared) galerie.<br />
    To co mog¹ i nie mog¹ zrobiæ w rzeczywistoœci nale¿y do Ciebie.");
define("_ZOOM_SETTINGS_CLOSE","Wyœwietl odsy³acz \"Zamknij\" w okienku popup");
define("_ZOOM_SETTINGS_MAINSCREEN","Wyœwietl odsy³acz Mainscreen w navigation breadcrumb");
define("_ZOOM_SETTINGS_NAVBUTTONS","Wyœwietl przyciski nawigacyjne");
define("_ZOOM_SETTINGS_PROPERTIES","Wyœwietl w³aœciwiœci poni¿ej elementu");
define("_ZOOM_SETTINGS_MEDIAFOUND","Wyœwietl tekst \"Znalezione Media\" w galeri");
define("_ZOOM_SETTINGS_ANONYMOUS_COMMENTS","Zezwól na anonimowe komentarze");
define("_ZOOM_SETTINGS_WM_ENABLE_TITLE","Aktywuj w³aœciwoœæ");
define("_ZOOM_SETTINGS_WM_TITLE", "Twoje znaki wodne");
define("_ZOOM_SETTINGS_WM_DESCR", "Znak wodny pokazywany jest na górze obrazków w serwisie web. "
 . "Obrazek bêdzie nadal widoczny, ale widzowie nie pokusz¹ sie aby go skopiowaæ lub wydrukowaæ."
 . "<br /><br />PodpowiedŸ: mo¿esz u¿yæ firmowe logo jako znak wodny. "
 . "Upewnij siê ¿e ustawi³eœ znak wodny jako t³o transparentne!");
define("_ZOOM_SETTINGS_WM_IMG", "Obrazek");
define("_ZOOM_SETTINGS_WM_NOWATERMARKS", "Nie znaleziono znaków wodnych. Mo¿esz wgraæ nowy znak wodny poni¿ej.");
define("_ZOOM_SETTINGS_WM_PLACEMENT_TITLE", "Po³o¿enie");
define("_ZOOM_SETTINGS_WM_PLACEMENT_DESCR", "Mo¿esz okreœliæ po³o¿enia znaku wodnego na celowniku obrazka przez "
 . "wybranie jednej z pozycji w poni¿szym szarym oknie.");
define("_ZOOM_SETTINGS_WM_FILE","Wgraj znak wodny");
define("_ZOOM_SETTINGS_WM_UPLOAD_SUCCESS","Znak wodny wgrany pomyœlnie!");
define("_ZOOM_SETTINGS_WM_UPLOAD_FAIL","Wgrywanie znaku wodnego zakoñczy³o siê niepowodzeniem.");
define("_ZOOM_SETTINGS_WM_DEL_SUCCESS","Znak wodny zosta³ usuniêty pomyœlnie!");
define("_ZOOM_SETTINGS_WM_DEL_FAIL","Znak wodny nie mo¿e byæ usuniêty.");
define("_ZOOM_SYSTEM_TITLE","Konfiguracje Systemu");
define("_ZOOM_YES","tak");
define("_ZOOM_NO","nie");
define("_ZOOM_VISIBLE","widoczne");
define("_ZOOM_HIDDEN","ukryte");
define("_ZOOM_SAVE","Zapisz");
define("_ZOOM_MOVEFILES","Przenieœ media");
define("_ZOOM_BUTTON_MOVE","Przenieœ");
define("_ZOOM_MOVEFILES_STEP1","Wybierz galeriê docelow¹ &amp; przenieœ media");
define("_ZOOM_ALERT_MOVE","%s media przeniesione pomyœlnie, %s media nie mog¹ byæ przeniesione.");
define("_ZOOM_OPTIMIZE","Optymalizuj tabele");
define("_ZOOM_OPTIMIZE_DESCR","zOOm Media Gallery uses its tables a lot and thus creates overhead data, ie. 'junk data'. Click here to remove this junk.");
define("_ZOOM_OPTIMIZE_SUCCESS","Zoptymalizowano tabele zOOm Media Gallery!");
define("_ZOOM_UPDATE","Aktualizuj zOOm Media Gallery");
define("_ZOOM_UPDATE_DESCR","dodaj nowe szczegó³y, rozwi¹¿ problemy i resolve bugs! OdwiedŸ <a href=\"http://www.zoomfactory.org\" target=\"_blank\">www.zoomfactory.org</a> po najnowsze aktualizacje!");
define("_ZOOM_UPDATE_XMLDATE","Data ostatniej aktualizacji");
define("_ZOOM_UPDATE_NOUPDATES","jeszcze nie zaktualizowano!"); // added 11-08
define("_ZOOM_UPDATE_PACKAGE","Aktualizuj plik ZIP: ");
define("_ZOOM_CREDITS","O zOOm Media Gallery &amp; Credits");

//Image actions
define("_ZOOM_DISKSPACEUSAGE","Powierzchnia dyskowa %s jest aktualnie u¿ywana");
define("_ZOOM_UPLOAD_SINGLE","pojedynczy plik (ZIP)");
define("_ZOOM_UPLOAD_MULTIPLE","pliki zbiorowe");
define("_ZOOM_UPLOAD_DRAGNDROP","Drag n Drop");
define("_ZOOM_UPLOAD_SCANDIR","skanuj katalog");
define("_ZOOM_UPLOAD_INTRO","Przyciœnij przycisk <b>Przegl¹daj</b> aby wybraæ element do wgrania.");
define("_ZOOM_UPLOAD_STEP1","1. Wybierz liczbê plików do wgrania: ");
define("_ZOOM_UPLOAD_STEP2","2. Wybierz galeriê do której chcesz wgraæ pliki: ");
define("_ZOOM_UPLOAD_STEP3","3. U¿yj przycisku Przegl¹daj aby znaleŸæ zdjêcia na twoim komputerze");
define("_ZOOM_SCAN_STEP1","Krok 1: wska¿ lokalizacjê wyszukiwania plików...");
define("_ZOOM_SCAN_STEP2","Krok 2: wybierz pliki które chcesz wgraæ...");
define("_ZOOM_SCAN_STEP3","Krok 3: zOOm przetwarza pliki które wybra³eœ...");
define("_ZOOM_SCAN_STEP1_DESCR","Lokalizacje mo¿e byæ adresem URL lub katalogiem na serwerze.<br />&nbsp; PodpowiedŸ: WprowadŸ media poprzez FTP do katalogu na serwerze, nastêpnie wprowadŸ œcie¿kê dostêpu do nich tytaj!");
define("_ZOOM_SCAN_STEP2_DESCR1","Przetwarzanie");
define("_ZOOM_SCAN_STEP2_DESCR2","jako lokalny katalog");
define("_ZOOM_FORMCREATE_NAME","Nazwa");
define("_ZOOM_FORM_IMAGEFILE","Element");
define("_ZOOM_FORM_IMAGEFILTER","Obs³ugiwane typy Mediów");
define("_ZOOM_FORM_INGALLERY","W galerii");
define("_ZOOM_FORM_SETFILENAME","Set media names with original filenames.");
define("_ZOOM_FORM_IGNORESIZES","Pomiñ preset maximum image dimensions"); //added: 12-08
define("_ZOOM_FORM_LOCATION","Po³o¿enie");
define("_ZOOM_BUTTON_SCAN","Submit URL or directory");
define("_ZOOM_BUTTON_UPLOAD","Wgraj");
define("_ZOOM_BUTTON_EDIT","Edytuj");
define("_ZOOM_BUTTON_CREATE","Utwórz");
define("_ZOOM_CONFIRM_WIPE","OSTRZE¯ENIE!\\n Uruchomienie tej funkcji ca³kowicie wyma¿e zOOm gallery oraz usunie wszystkie obrazki i galerie.\\n\\n CZy chcesz kontynuowaæ?");
define("_ZOOM_CONFIRM_DEL","Opcja usunie ca³kowicie galeriê ³¹cznie z mediami!\\nCzy potwierdzasz wybór?");
define("_ZOOM_CONFIRM_DELMEDIUM","Zamierzasz ca³kowicie usun¹æ element!\\nCzy potwierdzasz wybór?");
define("_ZOOM_ALERT_DEL","Usuniêto galeriê!");
define("_ZOOM_ALERT_NOCAT","NIe wybrano galerii!");
define("_ZOOM_ALERT_NOMEDIA","Nie wybrano mediów!");
define("_ZOOM_ALERT_EDITOK","Pola galeri zosta³y zedytowane pomyœlnie!");
define("_ZOOM_ALERT_NEWGALLERY","Utworzono now¹ galeriê.");
define("_ZOOM_ALERT_NONEWGALLERY","Nie utworzono galeri!");
define("_ZOOM_ALERT_EDITIMG","W³aœciwoœci elementu zedytowane pomyœlnie.");
define("_ZOOM_ALERT_DELPIC","Element usuniêty pomyœlnie.");
define("_ZOOM_ALERT_NODELPIC","Element nie mo¿e byæ usuniêty!");
define("_ZOOM_ALERT_MOVEFAILURE","Element nie mo¿e byæ przeniesiony."); //added: 08-08-2006
define("_ZOOM_ALERT_NOPICSELECTED","Nie wybrano elementów.");
define("_ZOOM_ALERT_NOPICSELECTED_MULT","Nie wybrano mediów.");
define("_ZOOM_ALERT_UPLOADOK","Element zaktualizowany pomyœlnie!");
define("_ZOOM_ALERT_UPLOADSOK","media zaktualizowane pomyœlnie!");
define("_ZOOM_ALERT_WRONGFORMAT","B³êdny format obrazka.");
define("_ZOOM_ALERT_WRONGFORMAT_MULT","B³êdny format.");
define("_ZOOM_ALERT_TOOBIG","Rozmiar pliku jest zbyt du¿y; %s to max. rozmiar"); //added 08-08-2006
define("_ZOOM_ALERT_IMGERROR","B³¹d zmiany rozmiaru obrazka/ tworzenia thumbnail.");
define("_ZOOM_ALERT_PCLZIPERROR","B³¹d podczas rozwijania archiwum.");
define("_ZOOM_ALERT_INDEXERROR","B³¹d podzcas indeksowania dokumentu.");
define("_ZOOM_ALERT_WATERMARKERROR","B³¹d podczas nak³adania znaku wodnego na obrazek.");
define("_ZOOM_ALERT_IMGFOUND","obrazek(i) znaleziono.");
define("_ZOOM_INFO_CHECKCAT","Proszê wybraæ galeriê zanim przyciœniesz przycisk wgrywania!");
define("_ZOOM_BUTTON_ADDIMAGES","Dodaj media");
define("_ZOOM_BUTTON_REMIMAGES","Usuñ media");
define("_ZOOM_INFO_PROCESSING","Przetwarzanie pliku:");
define("_ZOOM_ITEMEDIT_TAB1","W³aœciwoœci");
define("_ZOOM_ITEMEDIT_TAB2","Cz³onkowie");
define("_ZOOM_ITEMEDIT_TAB3","Akcje");
define("_ZOOM_USERSLIST_LINE1",">>Wybierz cz³onków elementu<<");
define("_ZOOM_USERSLIST_ALLOWALL",">>Dostêp publiczny<<");
define("_ZOOM_USERSLIST_MEMBERSONLY",">>Tylko cz³onkowie<<");
define("_ZOOM_PUBLISHED","Opublikowane");
define("_ZOOM_SHARED","Podzielone");
define("_ZOOM_ROTATE","Obróæ obrazek o 90 stopni");
define("_ZOOM_CLOCKWISE","zgodnie");
define("_ZOOM_CCLOCKWISE","przeciwnie");
define("_ZOOM_FLIP_HORIZ","Przerzuæ obrazek poziomo");
define("_ZOOM_FLIP_VERT","Przerzuæ obrazek pionowo");
define("_ZOOM_PROGRESS_DESCR","Twoja proœba jest przetwarzana... B¹dŸ cierpliwy.");

//Navigation (including Slideshow buttons)
define("_ZOOM_SLIDESHOW","Prezentacja:");
define("_ZOOM_PREV_IMG","poprzenie");
define("_ZOOM_NEXT_IMG","nastêpne");
define("_ZOOM_FIRST_IMG","pierwsze");
define("_ZOOM_LAST_IMG","ostatnie");
define("_ZOOM_PLAY","play");
define("_ZOOM_STOP","stop");
define("_ZOOM_RESET","reset");
define("_ZOOM_FIRST","Pierwsze");
define("_ZOOM_LAST","Ostatnie");
define("_ZOOM_PREVIOUS","Poprzednie");
define("_ZOOM_NEXT","Nastêpne");
define("_ZOOM_IN_DESC", "Umieœæ kursor w pobli¿u obrazja i u¿yj strza³ek dla ustalenia wartoœci zoom.");

//Gallery actions
define("_ZOOM_SEARCH_BOX","Przeszukaj galeriê");
define("_ZOOM_ADVANCED_SEARCH","Wyszukiwanie zaawansowane");
define("_ZOOM_SEARCH_KEYWORD","Wyszukaj s³owa kluczowego");
define("_ZOOM_IMAGES","media");
define("_ZOOM_IMGFOUND","%s mediów znaleziono - strona %s z %s");
define("_ZOOM_SUBGALLERIES","podgalerie");
define("_ZOOM_ALERT_COMMENTOK","Twój komantarz zosta³ pomyœlnie dodany!");
define("_ZOOM_ALERT_COMMENTERROR","Skomentowa³eœ ju¿ ten obrazek!");
define("_ZOOM_ALERT_VOTE_OK","Twój g³os zosta³ wliczony! Dziêkujê.");
define("_ZOOM_ALERT_VOTE_ERROR","Zag³osowa³eœ ju¿ na ten obrazek!");
define("_ZOOM_WINDOW_CLOSE","Zamknij");
define("_ZOOM_NOPICS","Brak mediów w galeri");
define("_ZOOM_PROPERTIES","W³asnoœæ");
define("_ZOOM_COMMENTS","Komentarze");
define("_ZOOM_COMMENTS_INTRO","Napisz poni¿ej swój komentarz:");

define("_ZOOM_NO_COMMENTS","Nie dodano jeszcze komentarzy.");
define("_ZOOM_SAYS","wskazuje");
define("_ZOOM_YOUR_NAME","Imiê i nazwisko");
define("_ZOOM_ADD","Dodaj");
define("_ZOOM_NAME","Nazwa");
define("_ZOOM_DATE","Data dodoania");
define("_ZOOM_UNAME","Dodane przez");
define("_ZOOM_DESCRIPTION","Opis");
define("_ZOOM_IMGNAME","Nazwa");
define("_ZOOM_FILENAME","Nazwa pliku");
define("_ZOOM_CLICKDOCUMENT","(przyciœnij na nazwê pliku aby otworzyæ dokument)");
define("_ZOOM_KEYWORDS","S³owa kluczowe");
define("_ZOOM_HITS","wejœæ");
define("_ZOOM_CLOSE","Zamknij");
define("_ZOOM_NOIMG", "Nie znaleziono mediów!");
define("_ZOOM_NONAME", "Musisz podaæ nazwê!");
define("_ZOOM_NOCAT", "Nie wybrano galeri!");
define("_ZOOM_EDITPIC", "Edytuj");
define("_ZOOM_SETCATIMG","Ustaw obrazek galeri");
define("_ZOOM_SETPARENTIMG","Ustaw obrazek RODZIMEJ galeri");
define("_ZOOM_PASS","Has³o");
define("_ZOOM_PASS_REQUIRED","Galeria wymaga podania has³a.<br />Proszê wype³niæ pole has³a<br />i przycian¹æ przycisk IdŸ. Dziêkujê.");
define("_ZOOM_PASS_BUTTON","IdŸ");
define("_ZOOM_PASS_GALLERY","Has³o");
define("_ZOOM_PASS_INNCORRECT","Has³o niepoprawne");

//Hotlinking
define("_ZOOM_SETTINGS_HOTLINK","Zezwól na ochronê przed Hotlinkowaniem");
define("_ZOOM_SETTINGS_HPTOOLTIP","Kiedy ochrona przed hotlinkowaniem jest aktywna, nazwa pliku obrazka i œcie¿ka zostan¹ ukryte. Jeœli u¿ytkownik spróbuje u¿yæ obrazka na innej stronie, próba zakoñczy siê niepowodzeniem.");


//Lightbox
define("_ZOOM_LIGHTBOX","Lightbox");
define("_ZOOM_LIGHTBOX_GALLERY","WprowadŸ galeriê do Lightbox!");
define("_ZOOM_LIGHTBOX_ITEM","WprowadŸ element do Lightbox!");
define("_ZOOM_LIGHTBOX_VIEW","Zobacz swoj¹ Lightbox");
define("_ZOOM_YOUR_LIGHTBOX","Zawartoœæ Twojej Lightbox:");
define("_ZOOM_LIGHTBOX_EMPTY","Twoja Lightbox jest aktualnie pusta.");
define("_ZOOM_LIGHTBOX_ZIPBTN","Utwórz plik ZIP");
define("_ZOOM_LIGHTBOX_PLAYLISTBTN","Utwórz Playlist &amp; Play");
define("_ZOOM_LIGHTBOX_CATS","Galerie");
define("_ZOOM_LIGHTBOX_TITLEDESCR","Tytu³ &amp; Opis");
define("_ZOOM_ACTION","Akcja");
define("_ZOOM_LIGHTBOX_ADDED","Element pomyœlnie dodany do Twojej lightbox!");
define("_ZOOM_LIGHTBOX_NOTADDED","Element zosta³ ju¿ dodany do Twojej lightbox!");
define("_ZOOM_LIGHTBOX_EDITED","Element zosta³ zedytowany pomyœlnie!");
define("_ZOOM_LIGHTBOX_NOTEDITED","B³¹d edytowania elementu!");
define("_ZOOM_LIGHTBOX_DEL","Element pomyœnie usuniêty z Twojej lightbox!");
define("_ZOOM_LIGHTBOX_NOTDEL","B³¹d usuwania elementu z Twojej lightbox!");
define("_ZOOM_LIGHTBOX_NOZIP","Utworzy³eœ ju¿ plik ZIP Twojej lightbox lub Twoja lightbox nie zawiera elementów!");
define("_ZOOM_LIGHTBOX_PARSEZIP","Parsing obrazków z galeri...");
define("_ZOOM_LIGHTBOX_DOZIP","tworzenie pliku ZIP...");
define("_ZOOM_LIGHTBOX_DLHERE","Mo¿esz teraz œci¹gn¹æ lightbox");
define("_ZOOM_LIGHTBOX_PLSUCCESS","Playlista utworzona pomyœlnie! Wymagane jest odœwie¿enie okna Playera.");
define("_ZOOM_LIGHTBOX_PLERROR","B³¹d tworzenia Playlisty.");
define("_ZOOM_LIGHTBOX_NOAUDIO","Najpierw musisz dodaæ pliki Audio do Twojej Lightbox!");
define("_ZOOM_LIGHTBOX_NOITEMS","Wydaje siê, ¿e Lightbox jest pusta.");

//EXIF information
define("_ZOOM_EXIF","EXIF");
define("_ZOOM_EXIF_SHOWHIDE","Poka¿/Ukryj Metadata");

//MP3 id3 v1.1 or later information
define("_ZOOM_AUDIO_PLAYING","aktualnie odtwarzane:");
define("_ZOOM_AUDIO_CLICKTOPLAY","Przyciœnij aby odtworzyæ plik.");
define("_ZOOM_ID3","ID3");
define("_ZOOM_ID3_SHOWHIDE","Poka¿/Ukryj ID3-tag data");
define("_ZOOM_ID3_LENGTH","D³ugoœæ");
define("_ZOOM_ID3_QUALITY","Jakoœæ");
define("_ZOOM_ID3_TITLE","Tytu³");
define("_ZOOM_ID3_ARTIST","Artysta");
define("_ZOOM_ID3_ALBUM","Album");
define("_ZOOM_ID3_YEAR","Rok");
define("_ZOOM_ID3_COMMENT","Komentarz");
define("_ZOOM_ID3_GENRE","Gatunek");

//Video metadata information
define("_ZOOM_VIDEO_SHOWHIDE","Poka¿/Ukryj Video data");
define("_ZOOM_VIDEO_PIXELRATIO","Stosunek px");
define("_ZOOM_VIDEO_QUALITY","Jakoœæ Video");
define("_ZOOM_VIDEO_AUDIOQUALITY","Jakoœæ Audio");
define("_ZOOM_VIDEO_CODEC","Codec");
define("_ZOOM_VIDEO_RESOLUTION","Rozdzielczoœæ");

//rating
define("_ZOOM_RATING","Ocenianie");
define("_ZOOM_NOTRATED","Nie g³osowano jeszcze!");
define("_ZOOM_VOTE","g³os");
define("_ZOOM_VOTES","g³osy");
define("_ZOOM_RATE0","marne");
define("_ZOOM_RATE1","s³abe");
define("_ZOOM_RATE2","œrednie");
define("_ZOOM_RATE3","dobre");
define("_ZOOM_RATE4","bardzo dobre");
define("_ZOOM_RATE5","perfect!");

//special
define("_ZOOM_TOPTEN","Top 10");
define("_ZOOM_LASTSUBM","Ostatnio przed³o¿one");
define("_ZOOM_LASTCOMM","Ostatnio komentowane");
define("_ZOOM_SEARCHRESULTS","Wyniki wyszukiwania");
define("_ZOOM_TOPRATED","Najlepsze");

//ecard
define("_ZOOM_ECARD_SENDAS","Wyœlij element do przyjaciela jako E-katrkê!");
define("_ZOOM_ECARD_YOURNAME","Twoje imiê i nazwisko");
define("_ZOOM_ECARD_YOUREMAIL","Twój adres e-mail");
define("_ZOOM_ECARD_FRIENDSNAME","Imiê i nazwisko Twojego przyjaciela");
define("_ZOOM_ECARD_FRIENDSEMAIL","Adres e-mail Twojego przyjaciela");
define("_ZOOM_ECARD_MESSAGE","Wiadomoœæ");
define("_ZOOM_ECARD_SENDCARD","Wyœlij E-katrkê");
define("_ZOOM_ECARD_SUCCESS","Twoja E-kartka zosta³a wys³ana pomyœlnie.");
define("_ZOOM_ECARD_CLICKHERE","Przyciœnij aby zobaczyæ!");
define("_ZOOM_ECARD_ERROR","B³¹d wysy³ania E-kartki do");
define("_ZOOM_ECARD_TURN","Zobacz na ty³ kartki!");
define("_ZOOM_ECARD_TURN2","Zobacz na przód kartki!");
define("_ZOOM_ECARD_SENDER","Wys³ane do Ciebie przez:");
define("_ZOOM_ECARD_SUBJ","Otrzyma³eæ E-kartkê od:");
define("_ZOOM_ECARD_MSG1","wys³ano E-kartkê od");
define("_ZOOM_ECARD_MSG2","Przyciœnij na poni¿szy odsy³acz aby zobaczyæ prywatnê E-kartkê!");
define("_ZOOM_ECARD_MSG3","Nie odpowiadaj na ten e-mail, jest on generowany automatycznie.");
define("_ZOOM_ECARD_ECARDEXPIRED","Przepraszam, E-kartka nie jest ju¿ dostêpna lub wymaga wniesiania op³aty.");

//installation-screen
define ('_ZOOM_INSTALL_CREATE_DIR','Instalator zOOm próbuje utworzyæ katalog "images/zoom" ...');
define ('_ZOOM_INSTALL_CREATE_DIR_WM','Instalator zOOm próbuje utworzyæ katalog "images/zoom/watermarks" ...');
define ('_ZOOM_INSTALL_CREATE_DIR_SUCC','wykonano!');
define ('_ZOOM_INSTALL_CREATE_DIR_FAIL','niepowodzenie!');
define ('_ZOOM_INSTALL_CREATE_DBASE_SUCC','Baza danych pomyœlnie utworzona!');
define ('_ZOOM_INSTALL_UPGRADED_DBASE_SUCC','Baza danych upgraded pomyœlnie!');
define ('_ZOOM_INSTALL_MESS1','zOOm Image Gallery zainstalowana pomyœlnie.<br>Jesteœ gotowy do przedstawienia swoich albumów!');
define ('_ZOOM_INSTALL_MESS2','UWAGA: pierwsz¹ rzecz¹ jak¹ powinieneœ zrobiæ, to przejœæ do powy¿szego menu komponentów,<br> znaleŸæ "zOOm Media Gallery Admin", przycisn¹æ i <br>sprawdziæ ustawienia strony w Admin-system.');
define ('_ZOOM_INSTALL_MESS3','Tutaj mo¿esz zmieniæ wszystkie zmienne aby ustawiæ w³asn¹ konfiguracjê zOOm.');
define ('_ZOOM_INSTALL_MESS4','Nie zapomnij utworzyæ galeri i w drogê!');
define ('_ZOOM_INSTALL_MESS_FAIL1','zOOM Gallery nie zosta³ zainstalowany pomyœlnie!');
define ('_ZOOM_INSTALL_MESS_FAIL2','Wyszczególnione katalogi musz¹ byæ utworzone, nastêpnie prawa dostêp do nich zmienione na "0777":<br />'
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
define ('_ZOOM_INSTALL_MESS_FAIL3','Kiedy ju¿ masz utworzone katalogi i zmienione prawa dostêpu do nich, przejdŸ do <br /> "Komponenty -> zOOm Media Gallery" i dopasuj ustawienia do swoich potrzeb.');
?>