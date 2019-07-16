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
| Translation: mgr in¿. Andrzej Klos (andrzejklosiem@orange.pl)       |
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
defined( '_VALID_MOS' ) or die( 'Bezposredni dostep do lokalizacji jest zabroniony.' );
//Language translation
define("_ZOOM_DATEFORMAT","%d.%m.%Y %H:%M"); // use the PHP strftime Format, more info at http://www.php.net
define("_ZOOM_PICK","Wybierz galerie");
define("_ZOOM_DELETE","Usun");
define("_ZOOM_BACK","Powrot");
define("_ZOOM_MAINSCREEN","Strona glowna");
define("_ZOOM_BACKTOGALLERY","Powrot do galeri");
define("_ZOOM_INFO_DONE","gotowe!");
define("_ZOOM_TOOLTIP", "zOOm ToolTip");
define("_ZOOM_WARNING", "Ostrzezenie zOOm!");

//Gallery admin page
define("_ZOOM_ADMINSYSTEM","Admin System");
define("_ZOOM_USERSYSTEM","User System");
define("_ZOOM_ADMIN_TITLE","Media Gallery Admin System");
define("_ZOOM_USER_TITLE","Media Gallery User System");
define("_ZOOM_CATSMGR","Manager Galerii");
define("_ZOOM_CATSMGR_DESCR","utworz nowe galerie dla nowych mediow; utworz, edytuj i usun je w Managerze Galerii.");
define("_ZOOM_SETTINGS_DDONOF","Zezwol na wgrywanie Drag n Drop");
define("_ZOOM_NEW","Zapisz nowa galerie");
define("_ZOOM_DEL","Usun galerie");
define("_ZOOM_ORDERSAVE", "Zapisz kolejnosc");
define("_ZOOM_MEDIAMGR","Manager Mediow");
define("_ZOOM_MEDIAMGR_DESCR","przenies, edytuj, usun, skanuj media automatycznie lub wgraj (zbiorowo) nowe media recznie.");
define("_ZOOM_THUMB", "Koder Zoom Thumb");
define("_ZOOM_THUMB_DESCR", "Przetwarzaj ³atwiej swoje kody Zoom Thumb");
define("_ZOOM_UPLOAD","Wgraj plik(i)");
define("_ZOOM_EDIT","Edytuj galerie");
define("_ZOOM_ADMIN_CREATE","Utworz baze danych");
define("_ZOOM_ADMIN_CREATE_DESCR","zbuduj wymagane tabele bazy danych aby rozpoczac korzystanie z albumu");
define("_ZOOM_HD_PREVIEW","Podglad");
define("_ZOOM_HD_CHECKALL","Zaznacz/Odznacz wszystko");
define("_ZOOM_HD_CREATEDBY","Utworzone przez");
define("_ZOOM_HD_AFTER","Galeria rodzima");
define("_ZOOM_HD_HIDEMSG","Ukruj tekst 'brak mediow'");
define("_ZOOM_HD_NAME","Tytul");
define("_ZOOM_HD_DIR","Katalog");
define("_ZOOM_HD_NEW","Nowa galeria");
define("_ZOOM_HD_SHARE","Podziel galerie");
define("_ZOOM_SHARE","Dziel");
define("_ZOOM_UNSHARE","Nie dziel");
define("_ZOOM_PUBLISH","Publikuj");
define("_ZOOM_UNPUBLISH","Niepublikuj");
define("_ZOOM_TOPLEVEL","Najwyzszy poziom");
define("_ZOOM_HD_UPLOAD","Wgraj plik");
define("_ZOOM_A_ERROR_ERRORTYPE","Blad typu");
define("_ZOOM_A_ERROR_IMAGENAME","Nazwa obrazka");
define("_ZOOM_A_ERROR_NOFFMPEG","Nie stwierdzono istnienia <u>FFmpeg</u>");
define("_ZOOM_A_ERROR_NOPDFTOTEXT","Nie stwierdzono istnienia <u>PDFtoText</u>");
define("_ZOOM_A_ERROR_NOTINSTALLED","Nie zainstalowano");
define("_ZOOM_A_ERROR_CONFTODB","Blad podzczas zapisywania konfiguracji do bazy danych!");
define("_ZOOM_A_MESS_NOT_SHURE","* Jesli jestes pewny, uzyj domyslnie \"auto\" ");
define("_ZOOM_A_MESS_SAFEMODE1","UWAGA: \"Safe Mode\" zostal aktywowany, moze wystapic bledna praca podczas wgrywania wiekszych plikow!<br />Powinienes przejsc do Admin System i przelaczyc sie na FTP-Mode.");
define("_ZOOM_A_MESS_SAFEMODE2","UWAGA: \"Safe Mode\" zostal aktywowany, moze wystapic bledna praca podczas wgrywania wiekszych plikow!<br />zOOm zaleca aktywowac FTP-Mode w Admin System.");
define("_ZOOM_A_MESS_PROCESSING_FILE","Przetwazanie pliku...");
define("_ZOOM_A_MESS_NOTOPEN_URL","Nie mozna otworzyc adresu URL:");
define("_ZOOM_A_MESS_PARSE_URL","Parsing \"%s\" for images... "); // %s = $url
define("_ZOOM_A_MESS_NOJAVA","Jesli zobaczysz szare okienko powyzej lub masz problemy podczas wgrywania plikow, moze to byc spowodowane<br />brakiem zainstalowanej najnowszej wersji aplikacji Java Run-Time. Przejdz do <a href=\"http://www.java.com\" target=\"_blank\">Java.com</a> <br /> i sciagnij najnowsza wersje aplikacji.");
define("_ZOOM_SETTINGS","Ustawienia");
define("_ZOOM_SETTINGS_DESCR","zmien i zobacz wszystkie dostepne ustawienia konfiguracyjne.");
define("_ZOOM_SETTINGS_TAB1","System");
define("_ZOOM_SETTINGS_TAB2","Media");
define("_ZOOM_SETTINGS_TAB3","Szczegoly");
define("_ZOOM_SETTINGS_TAB4","Warstwa");
define("_ZOOM_SETTINGS_TAB5","Znaki wodne");
define("_ZOOM_SETTINGS_TAB6","Safe Mode");
define("_ZOOM_SETTINGS_TAB7","Dostepnosc");
define("_ZOOM_SETTINGS_TAB8","Reset");
define("_ZOOM_SETTINGS_ERASE","Przycisnij aby wyczyscic dane zoom gallery i rozpoczac korzystanie od poczatku. Ustawienia zostana zresetowane i wszystkie obrazki usuniete.");
define("_ZOOM_SETTINGS_CONVTYPE","Konwersja typu pliku");
define("_ZOOM_SETTINGS_GALLERY_FEATURES","Szczegoly widoku Galerii");
define("_ZOOM_SETTINGS_VIEW_FEATURES","Szczegoly widoku Mediow");

define("_ZOOM_SETTINGS_GALLERY","Widok Galerii");
define("_ZOOM_SETTINGS_VIEW","Widok Mediow");

define("_ZOOM_SETTINGS_GENERAL_FEATURES","Szczegoly Ogolne");
define("_ZOOM_SETTINGS_AUTODET","auto-detected: ");
define("_ZOOM_SETTINGS_IMGPATH","sciezka do plikow mediow:");
define("_ZOOM_SETTINGS_TTIMGPATH","Aktualna sciezka dostepu do mediow ");
define("_ZOOM_SETTINGS_CONVSETTINGS","Ustawienia konwersji Mediow:");
define("_ZOOM_SETTINGS_IMPATH","sciezka do ImageMagick: ");
define("_ZOOM_SETTINGS_NETPBMPATH"," lub NetPBM: ");
define("_ZOOM_SETTINGS_FFMPEGPATH","sciezka do FFmpeg");
define("_ZOOM_SETTINGS_FFMPEGTOOLTIP","FFmpeg jest wymagany do utworzenia thumbnails plikow video.<br />Obslugiwane rozszezenia to: ");
define("_ZOOM_SETTINGS_OVERRIDE_FFMPEG","Uzyj FFmpeg, nawet jesli zOOm nie jest w stanie stwierdzic istnienia w systemie.");
define("_ZOOM_SETTINGS_PDFTOTEXTPATH","sciezka do PDFtoText");
define("_ZOOM_SETTINGS_XPDFTOOLTIP","pdf2text, ktory jest czescia paczki Xpdf, jest wynagany do indeksowania pliku PDF.");
define("_ZOOM_SETTINGS_OVERRIDE_PDF","Uzyj PDFtoText, nawet jesli zOOm nie jest w stanie stwierdzic istnienia w systemie.");
define("_ZOOM_SETTINGS_MAXSIZE","Max. rozmiar obrazka: ");
define("_ZOOM_SETTINGS_MAXSIZEKB","Element - zawierajacy obrazki - max. rozmiar (w kB): "); //added: 08-08-2006
define("_ZOOM_SETTINGS_MAXSIZEKB_WARNING","Limit wgrywania serwera, ustawiony poprzez ISP jako czesc konfiguracji PHP, jest %s.<br />Limit bedzie podniesiony jezeli wartosc nie bedzie uzywana!"); //added: 09-01-2006
define("_ZOOM_SETTINGS_THUMBSETTINGS","Ustewienia thumbnail:");
define("_ZOOM_SETTINGS_QUALITY","Jakosc NetPBM i GD2 JPEG: ");
define("_ZOOM_SETTINGS_SIZE","Max. rozmiar thumbnail: ");
define("_ZOOM_SETTINGS_TEMPNAME","Nazwa tymczasowa: ");
define("_ZOOM_SETTINGS_AUTONUMBER","automatyczna numeracji nazw obrazkow (np. 1,2,3)");
define("_ZOOM_SETTINGS_TEMPDESCR","Opis tymczasowy: ");
define("_ZOOM_SETTINGS_TITLE","Tytul galeri:");
define("_ZOOM_SETTINGS_SUBCATSPG","Liczba kolumn (pod-)galerii");
define("_ZOOM_SETTINGS_COLUMNS","Liczba kolumn thumbnail");
define("_ZOOM_SETTINGS_THUMBSPG","Thumbs na stronie");
define("_ZOOM_SETTINGS_CMTLENGTH","Max. dlugosc komentarzy");
define("_ZOOM_SETTINGS_CHARS","znaki");
define("_ZOOM_SETTINGS_GALLERYPREFIX","Galeria-tytul prefix");
define("_ZOOM_SETTINGS_SHOWOCCSPACE","Pokaz zajmowana przestrzen w Menagerze Mediow");
define("_ZOOM_SETTINGS_TEMPLATE_TITLE","Szablon");
define("_ZOOM_SETTINGS_FEATURES_TITLE","Szczegoly ON/ OFF");
define("_ZOOM_SETTINGS_CSS_TITLE","Edytuj Stylesheets");
define("_ZOOM_SETTINGS_DISPLAY_TITLE","Dane do wyswyetlenia ON/ OFF");
define("_ZOOM_SETTINGS_TEMPLATE_CHOOSE","Wybierz szablon dla okreslenia widoku &amp; odczuc galerii");
define("_ZOOM_SETTINGS_TEMPLATE_TABLES","Klasyczny (z tabelami)");
define("_ZOOM_SETTINGS_TEMPLATE_TABLELESS","Nowoczesny (bez tabel)");
define("_ZOOM_SETTINGS_COMMENTS","Komentarze");
define("_ZOOM_SETTINGS_POPUP","PopUp Media");
define("_ZOOM_SETTINGS_CATIMG","Pokaz obrazek galeri");
define("_ZOOM_SETTINGS_SLIDESHOW","Prezentacja");
define("_ZOOM_SETTINGS_ZOOMLOGO","Wyswietl zOOm-logo");
define("_ZOOM_SETTINGS_DESCRINGAL","Pokaz opis albumu wewnatrz galeri");
define("_ZOOM_SETTINGS_SHOWHITS","Wyswyetl liczbe wejsc");
define("_ZOOM_SETTINGS_READEXIF","Czytaj EXIF-data");
define("_ZOOM_SETTINGS_EXIFTOOLTIP","Wlasciwosc wyswietli dodatkowe dane EXIF i inne IPTC, bez potrzeby instalowania modulu EXIF dla PHP w Twoim systemie.");
define("_ZOOM_SETTINGS_READID3","Czytaj mp3 ID3-data");
define("_ZOOM_SETTINGS_ID3TOOLTIP","Szczegol wyswietli dodatkowe dane ID3 v1.1 i v2.0 podczas przegladania plikow mp3.");
define("_ZOOM_SETTINGS_RATING","Ocenianie");
define("_ZOOM_SETTINGS_CSS","Kono Popup");
define("_ZOOM_SETTINGS_CSSZOOM","widok elementu zOOm gallery");
define("_ZOOM_SETTINGS_SUCCESS","Konfiguracja zaktualizowana pomyslnie!");
define("_ZOOM_SETTINGS_ZOOMING","Zoom obrazka");
define("_ZOOM_SETTINGS_ORDERBY","Metoda porzadkowania thumbnail; porzadek przez");
define("_ZOOM_SETTINGS_CATORDERBY","Metoda porzadkowania (pod-)galerii; porzadek przez");
define("_ZOOM_SETTINGS_NO_POP","Wylacz okienka PopUp");
define("_ZOOM_SETTINGS_STANDARD_POP","Standardowe okienka PopUp");
define("_ZOOM_SETTINGS_LIGHTBOX_POP","Lightbox JS PopUp");
define("_ZOOM_SETTINGS_LIGHTBOX_SLIDESHOW","<strong><i> WLACZ JESLI CHCESZ UZYWAC POKAZU DO PRACY Z LIGHTBOX JS</i></strong>");
define("_ZOOM_SETTINGS_DATE_ASC","DATA, rosnaco");
define("_ZOOM_SETTINGS_DATE_DESC","DATA, malejaco");
define("_ZOOM_SETTINGS_FLNM_ASC","NAZWA PLIKU, rosnaco");
define("_ZOOM_SETTINGS_FLNM_DESC","NAZWA PLIKU, malejaco");
define("_ZOOM_SETTINGS_NAME_ASC","NAZWA, rosnaco");
define("_ZOOM_SETTINGS_NAME_DESC","NAZWA, malejaco");
define("_ZOOM_SETTINGS_LBTOOLTIP","Lightbox jest jak wozek na zakupy z mozliwoscia wypelniania mediami wybranymi porzez Uzytkownika, ktore moga byc sciagniete jaki pliki ZIP.");
define("_ZOOM_SETTINGS_SHOWNAME","Wyswietl nazwe");
define("_ZOOM_SETTINGS_SHOWDESCR","Wyswietl opis");
define("_ZOOM_SETTINGS_SHOWKEYWORDS","Wyswietl slowa kluczowe");
define("_ZOOM_SETTINGS_SHOWDATE","Wyswietl date");
define("_ZOOM_SETTINGS_SHOWUNAME","Wyswietl nazwe Uzytkownika");
define("_ZOOM_SETTINGS_SHOWFILENAME","Wyswietl nazwe pliku");
define("_ZOOM_SETTINGS_METABOX","Wyswietl plywajaca skrzynke lacznie ze szczegolami na stronach galerii");
define("_ZOOM_SETTINGS_METABOXTOOLTIP","Odznacz ta wlasciwosc aby zwiekszyc predkosc dzialania Twojej galeri. Efektywne przy duzych bazach danych.");
define("_ZOOM_SETTINGS_ECARDS","E-kartki");
define("_ZOOM_SETTINGS_ECARDS_LIFETIME","E-cards lifetime");
define("_ZOOM_SETTINGS_ECARDS_ONEWEEK","1 tydzien");
define("_ZOOM_SETTINGS_ECARDS_TWOWEEKS","2 tygodnie");
define("_ZOOM_SETTINGS_ECARDS_ONEMONTH","1 miesiac");
define("_ZOOM_SETTINGS_ECARDS_THREEMONTHS","3 miesiace");
define("_ZOOM_SETTINGS_SHOWSEARCH","Pole wyszukiwania na wszystkich stronach");
define("_ZOOM_SETTINGS_BOX_ANIMATE","Skrzynki animowane");
define("_ZOOM_SETTINGS_BOX_PROPERTIES","Skrzynka wlasciwosci visual state");
define("_ZOOM_SETTINGS_BOX_META","Skrzynka metadata visual state");
define("_ZOOM_SETTINGS_BOX_COMMENTS","Skrzynka komentarzy visual state");
define("_ZOOM_SETTINGS_BOX_RATING","Skrzynka oceniania visual state");
define("_ZOOM_SETTINGS_TOPTEN","Wyswietl odsylacz \"Top 10\" na stronie glownej");
define("_ZOOM_SETTINGS_LASTSUBM","Wyswietl odsylacz \"Ostatnio wprowadzone Media\" na stronie glownej");
define("_ZOOM_SETTINGS_SETMENUOPTION","Wyswietl odsylacz \"Wgraj Media\" w Menu Uzytkownika");
define("_ZOOM_SETTINGS_USEFTP","Uzyj trybu FTP?");
define("_ZOOM_SETTINGS_FTPHOST","Nazwa Hosta");
define("_ZOOM_SETTINGS_FTPUNAME","Nazwa Uzytkownika");
define("_ZOOM_SETTINGS_FTPPASS","Haslo");
define("_ZOOM_SETTINGS_FTPWARNING","Ostrzezenie: Haslo nie jest zapisane bezpiecznie!");
define("_ZOOM_SETTINGS_FTPHOSTDIR","Katalog na host");
define("_ZOOM_SETTINGS_MESS_FTPHOSTDIR","Prosze wprowadzic sciezka dostepu do Mambo! z ftp-root. WAzNE: Koniec <b>bez</b> slasha lub backslasha!");
define("_ZOOM_SETTINGS_GROUP","Grupa");
define("_ZOOM_SETTINGS_PRIV_DESCR","Jestes w stanie zmienic przypisanie kazdej grupy uzytkownikow znanych z Joomla! jak rowniez zmienic przypisanie
    kazdego uzytkownika, ktory jest czlonkiem danej grupy!<br />
    Teoretycznie, uzytkownik moze wykonac nastepujace akcje: wgrac plik(i), edytowac/ usunac media, utworzyc/ edytowac/ usunac (shared) galerie.<br />
    To co moga i nie moga zrobic w rzeczywistosci nalezy do Ciebie.");
define("_ZOOM_SETTINGS_CLOSE","Wyswietl odsylacz \"Zamknij\" w okienku popup");
define("_ZOOM_SETTINGS_MAINSCREEN","Wyswietl odsylacz Mainscreen w navigation breadcrumb");
define("_ZOOM_SETTINGS_NAVBUTTONS","Wyswietl przyciski nawigacyjne");
define("_ZOOM_SETTINGS_PROPERTIES","Wyswietl wlasciwisci ponizej elementu");
define("_ZOOM_SETTINGS_MEDIAFOUND","Wyswietl tekst \"Znalezione Media\" w galeri");
define("_ZOOM_SETTINGS_ANONYMOUS_COMMENTS","Zezwol na anonimowe komentarze");
define("_ZOOM_SETTINGS_WM_ENABLE_TITLE","Aktywuj wlasciwosc");
define("_ZOOM_SETTINGS_WM_TITLE", "Twoje znaki wodne");
define("_ZOOM_SETTINGS_WM_DESCR", "Znak wodny pokazywany jest na gorze obrazkow w serwisie web. "
 . "Obrazek bedzie nadal widoczny, ale widzowie nie pokusza sie aby go skopiowac lub wydrukowac."
 . "<br /><br />Podpowiedz: mozesz uzyc firmowe logo jako znak wodny. "
 . "Upewnij sie ze ustawiles znak wodny jako tlo transparentne!");
define("_ZOOM_SETTINGS_WM_IMG", "Obrazek");
define("_ZOOM_SETTINGS_WM_NOWATERMARKS", "Nie znaleziono znakow wodnych. Mozesz wgrac nowy znak wodny ponizej.");
define("_ZOOM_SETTINGS_WM_PLACEMENT_TITLE", "Polozenie");
define("_ZOOM_SETTINGS_WM_PLACEMENT_DESCR", "Mozesz okreslic polozenia znaku wodnego na celowniku obrazka przez "
 . "wybranie jednej z pozycji w ponizszym szarym oknie.");
define("_ZOOM_SETTINGS_WM_FILE","Wgraj znak wodny");
define("_ZOOM_SETTINGS_WM_UPLOAD_SUCCESS","Znak wodny wgrany pomyslnie!");
define("_ZOOM_SETTINGS_WM_UPLOAD_FAIL","Wgrywanie znaku wodnego zakonczylo sie niepowodzeniem.");
define("_ZOOM_SETTINGS_WM_DEL_SUCCESS","Znak wodny zostal usuniety pomyslnie!");
define("_ZOOM_SETTINGS_WM_DEL_FAIL","Znak wodny nie moze byc usuniety.");
define("_ZOOM_SYSTEM_TITLE","Konfiguracje Systemu");
define("_ZOOM_YES","tak");
define("_ZOOM_NO","nie");
define("_ZOOM_VISIBLE","widoczne");
define("_ZOOM_HIDDEN","ukryte");
define("_ZOOM_SAVE","Zapisz");
define("_ZOOM_MOVEFILES","Przenies media");
define("_ZOOM_BUTTON_MOVE","Przenies");
define("_ZOOM_MOVEFILES_STEP1","Wybierz galerie docelowa &amp; przenies media");
define("_ZOOM_ALERT_MOVE","%s media przeniesione pomyslnie, %s media nie moga byc przeniesione.");
define("_ZOOM_OPTIMIZE","Optymalizuj tabele");
define("_ZOOM_OPTIMIZE_DESCR","zOOm Media Gallery uses its tables a lot and thus creates overhead data, ie. 'junk data'. Click here to remove this junk.");
define("_ZOOM_OPTIMIZE_SUCCESS","Zoptymalizowano tabele zOOm Media Gallery!");
define("_ZOOM_UPDATE","Aktualizuj zOOm Media Gallery");
define("_ZOOM_UPDATE_DESCR","dodaj nowe szczegoly, rozwiaz problemy! Odwiedz <a href=\"http://www.zoomfactory.org\" target=\"_blank\">www.zoomfactory.org</a> po najnowsze aktualizacje!");
define("_ZOOM_UPDATE_XMLDATE","Data ostatniej aktualizacji");
define("_ZOOM_UPDATE_NOUPDATES","jeszcze nie zaktualizowano!"); // added 11-08
define("_ZOOM_UPDATE_PACKAGE","Aktualizuj plik ZIP: ");
define("_ZOOM_CREDITS","O zOOm Media Gallery &amp; Credits");

//Image actions
define("_ZOOM_DISKSPACEUSAGE","Powierzchnia dyskowa %s jest aktualnie uzywana");
define("_ZOOM_UPLOAD_SINGLE","pojedynczy plik (ZIP)");
define("_ZOOM_UPLOAD_MULTIPLE","pliki zbiorowe");
define("_ZOOM_UPLOAD_DRAGNDROP","Drag n Drop");
define("_ZOOM_UPLOAD_SCANDIR","skanuj katalog");
define("_ZOOM_UPLOAD_INTRO","Przycisnij przycisk <b>Przegladaj</b> aby wybrac element do wgrania.");
define("_ZOOM_UPLOAD_STEP1","1. Wybierz liczbe plikow do wgrania: ");
define("_ZOOM_UPLOAD_STEP2","2. Wybierz galerie do ktorej chcesz wgrac pliki: ");
define("_ZOOM_UPLOAD_STEP3","3. Uzyj przycisku Przegladaj aby znalezc zdjecia na twoim komputerze");
define("_ZOOM_SCAN_STEP1","Krok 1: wskaz lokalizacje wyszukiwania plikow...");
define("_ZOOM_SCAN_STEP2","Krok 2: wybierz pliki ktore chcesz wgrac...");
define("_ZOOM_SCAN_STEP3","Krok 3: zOOm przetwarza pliki ktore wybrales...");
define("_ZOOM_SCAN_STEP1_DESCR","Lokalizacje moze byc adresem URL lub katalogiem na serwerze.<br />&nbsp; Podpowiedz: Wprowadz media poprzez FTP do katalogu na serwerze, nastepnie wprowadz sciezke dostepu do nich tytaj!");
define("_ZOOM_SCAN_STEP2_DESCR1","Przetwarzanie");
define("_ZOOM_SCAN_STEP2_DESCR2","jako lokalny katalog");
define("_ZOOM_FORMCREATE_NAME","Nazwa");
define("_ZOOM_FORM_IMAGEFILE","Element");
define("_ZOOM_FORM_IMAGEFILTER","Obslugiwane typy Mediow");
define("_ZOOM_FORM_INGALLERY","W galerii");
define("_ZOOM_FORM_SETFILENAME","Set media names with original filenames.");
define("_ZOOM_FORM_IGNORESIZES","Pomin preset maximum image dimensions"); //added: 12-08
define("_ZOOM_FORM_LOCATION","Polozenie");
define("_ZOOM_BUTTON_SCAN","Submit URL or directory");
define("_ZOOM_BUTTON_UPLOAD","Wgraj");
define("_ZOOM_BUTTON_EDIT","Edytuj");
define("_ZOOM_BUTTON_CREATE","Utworz");
define("_ZOOM_CONFIRM_WIPE","OSTRZEZENIE!\\n Uruchomienie tej funkcji calkowicie wymaze zOOm gallery oraz usunie wszystkie obrazki i galerie.\\n\\n Czy chcesz kontynuowac?");
define("_ZOOM_CONFIRM_DEL","Opcja usunie calkowicie galerie lacznie z mediami!\\nCzy potwierdzasz wybor?");
define("_ZOOM_CONFIRM_DELMEDIUM","Zamierzasz calkowicie usunac element!\\nCzy potwierdzasz wybor?");
define("_ZOOM_ALERT_DEL","Usunieto galerie!");
define("_ZOOM_ALERT_NOCAT","NIe wybrano galerii!");
define("_ZOOM_ALERT_NOMEDIA","Nie wybrano mediow!");
define("_ZOOM_ALERT_EDITOK","Pola galeri zostaly zedytowane pomyslnie!");
define("_ZOOM_ALERT_NEWGALLERY","Utworzono nowa galerie.");
define("_ZOOM_ALERT_NONEWGALLERY","Nie utworzono galeri!");
define("_ZOOM_ALERT_EDITIMG","Wlasciwosci elementu zedytowane pomyslnie.");
define("_ZOOM_ALERT_DELPIC","Element usuniety pomyslnie.");
define("_ZOOM_ALERT_NODELPIC","Element nie moze byc usuniety!");
define("_ZOOM_ALERT_MOVEFAILURE","Element nie moze byc przeniesiony."); //added: 08-08-2006
define("_ZOOM_ALERT_NOPICSELECTED","Nie wybrano elementow.");
define("_ZOOM_ALERT_NOPICSELECTED_MULT","Nie wybrano mediow.");
define("_ZOOM_ALERT_UPLOADOK","Element zaktualizowany pomyslnie!");
define("_ZOOM_ALERT_UPLOADSOK","media zaktualizowane pomyslnie!");
define("_ZOOM_ALERT_WRONGFORMAT","Bledny format obrazka.");
define("_ZOOM_ALERT_WRONGFORMAT_MULT","Bledny format.");
define("_ZOOM_ALERT_TOOBIG","Rozmiar pliku jest zbyt duzy; %s to max. rozmiar"); //added 08-08-2006
define("_ZOOM_ALERT_IMGERROR","Blad zmiany rozmiaru obrazka/ tworzenia thumbnail.");
define("_ZOOM_ALERT_PCLZIPERROR","Blad podczas rozwijania archiwum.");
define("_ZOOM_ALERT_INDEXERROR","Blad podzcas indeksowania dokumentu.");
define("_ZOOM_ALERT_WATERMARKERROR","Blad podczas nakladania znaku wodnego na obrazek.");
define("_ZOOM_ALERT_IMGFOUND","obrazek(i) znaleziono.");
define("_ZOOM_INFO_CHECKCAT","Prosze wybrac galerie zanim przycisniesz przycisk wgrywania!");
define("_ZOOM_BUTTON_ADDIMAGES","Dodaj media");
define("_ZOOM_BUTTON_REMIMAGES","Usun media");
define("_ZOOM_INFO_PROCESSING","Przetwarzanie pliku:");
define("_ZOOM_ITEMEDIT_TAB1","Wlasciwosci");
define("_ZOOM_ITEMEDIT_TAB2","Czlonkowie");
define("_ZOOM_ITEMEDIT_TAB3","Akcje");
define("_ZOOM_USERSLIST_LINE1",">>Wybierz czlonkow elementu<<");
define("_ZOOM_USERSLIST_ALLOWALL",">>Dostep publiczny<<");
define("_ZOOM_USERSLIST_MEMBERSONLY",">>Tylko czlonkowie<<");
define("_ZOOM_PUBLISHED","Opublikowane");
define("_ZOOM_SHARED","Podzielone");
define("_ZOOM_ROTATE","Obroc obrazek o 90 stopni");
define("_ZOOM_CLOCKWISE","zgodnie");
define("_ZOOM_CCLOCKWISE","przeciwnie");
define("_ZOOM_FLIP_HORIZ","Przerzuc obrazek poziomo");
define("_ZOOM_FLIP_VERT","Przerzuc obrazek pionowo");
define("_ZOOM_PROGRESS_DESCR","Twoja prosba jest przetwarzana... Badz cierpliwy.");

//Navigation (including Slideshow buttons)
define("_ZOOM_SLIDESHOW","Prezentacja:");
define("_ZOOM_PREV_IMG","poprzenie");
define("_ZOOM_NEXT_IMG","nastepne");
define("_ZOOM_FIRST_IMG","pierwsze");
define("_ZOOM_LAST_IMG","ostatnie");
define("_ZOOM_PLAY","play");
define("_ZOOM_STOP","stop");
define("_ZOOM_RESET","reset");
define("_ZOOM_FIRST","Pierwsze");
define("_ZOOM_LAST","Ostatnie");
define("_ZOOM_PREVIOUS","Poprzednie");
define("_ZOOM_NEXT","Nastepne");
define("_ZOOM_IN_DESC", "Umiesc kursor w poblizu obrazja i uzyj strzalek dla ustalenia wartosci zoom.");

//Gallery actions
define("_ZOOM_SEARCH_BOX","Przeszukaj galerie");
define("_ZOOM_ADVANCED_SEARCH","Wyszukiwanie zaawansowane");
define("_ZOOM_SEARCH_KEYWORD","Wyszukaj slowa kluczowego");
define("_ZOOM_IMAGES","media");
define("_ZOOM_IMGFOUND","%s mediow znaleziono - strona %s z %s");
define("_ZOOM_SUBGALLERIES","podgalerie");
define("_ZOOM_ALERT_COMMENTOK","Twoj komantarz zostal pomyslnie dodany!");
define("_ZOOM_ALERT_COMMENTERROR","Skomentowales juz ten obrazek!");
define("_ZOOM_ALERT_VOTE_OK","Twoj glos zostal wliczony! Dziekuje.");
define("_ZOOM_ALERT_VOTE_ERROR","Zaglosowales juz na ten obrazek!");
define("_ZOOM_WINDOW_CLOSE","Zamknij");
define("_ZOOM_NOPICS","Brak mediow w galeri");
define("_ZOOM_PROPERTIES","Wlasnosc");
define("_ZOOM_COMMENTS","Komentarze");
define("_ZOOM_COMMENTS_INTRO","Napisz ponizej swoj komentarz:");

define("_ZOOM_NO_COMMENTS","Nie dodano jeszcze komentarzy.");
define("_ZOOM_SAYS","wskazuje");
define("_ZOOM_YOUR_NAME","Imie i nazwisko");
define("_ZOOM_ADD","Dodaj");
define("_ZOOM_NAME","Nazwa");
define("_ZOOM_DATE","Data dodoania");
define("_ZOOM_UNAME","Dodane przez");
define("_ZOOM_DESCRIPTION","Opis");
define("_ZOOM_IMGNAME","Nazwa");
define("_ZOOM_FILENAME","Nazwa pliku");
define("_ZOOM_CLICKDOCUMENT","(przycisnij na nazwe pliku aby otworzyc dokument)");
define("_ZOOM_KEYWORDS","Slowa kluczowe");
define("_ZOOM_HITS","wejsc");
define("_ZOOM_CLOSE","Zamknij");
define("_ZOOM_NOIMG", "Nie znaleziono mediow!");
define("_ZOOM_NONAME", "Musisz podac nazwe!");
define("_ZOOM_NOCAT", "Nie wybrano galeri!");
define("_ZOOM_EDITPIC", "Edytuj");
define("_ZOOM_SETCATIMG","Ustaw obrazek galeri");
define("_ZOOM_SETPARENTIMG","Ustaw obrazek RODZIMEJ galeri");
define("_ZOOM_PASS","Haslo");
define("_ZOOM_PASS_REQUIRED","Galeria wymaga podania hasla.<br />Prosze wypelnic pole hasla<br />i przycianac przycisk Idz. Dziekuje.");
define("_ZOOM_PASS_BUTTON","Idz");
define("_ZOOM_PASS_GALLERY","Haslo");
define("_ZOOM_PASS_INNCORRECT","Haslo niepoprawne");

//Hotlinking
define("_ZOOM_SETTINGS_HOTLINK","Zezwol na ochrone przed Hotlinkowaniem");
define("_ZOOM_SETTINGS_HPTOOLTIP","Kiedy ochrona przed hotlinkowaniem jest aktywna, nazwa pliku obrazka i sciezka zostana ukryte. Jesli uzytkownik sprobuje uzyc obrazka na innej stronie, proba zakonczy sie niepowodzeniem.");


//Lightbox
define("_ZOOM_LIGHTBOX","Lightbox");
define("_ZOOM_LIGHTBOX_GALLERY","Wprowadz galerie do Lightbox!");
define("_ZOOM_LIGHTBOX_ITEM","Wprowadz element do Lightbox!");
define("_ZOOM_LIGHTBOX_VIEW","Zobacz swoja Lightbox");
define("_ZOOM_YOUR_LIGHTBOX","Zawartosc Twojej Lightbox:");
define("_ZOOM_LIGHTBOX_EMPTY","Twoja Lightbox jest aktualnie pusta.");
define("_ZOOM_LIGHTBOX_ZIPBTN","Utworz plik ZIP");
define("_ZOOM_LIGHTBOX_PLAYLISTBTN","Utworz Playlist &amp; Play");
define("_ZOOM_LIGHTBOX_CATS","Galerie");
define("_ZOOM_LIGHTBOX_TITLEDESCR","Tytul &amp; Opis");
define("_ZOOM_ACTION","Akcja");
define("_ZOOM_LIGHTBOX_ADDED","Element pomyslnie dodany do Twojej lightbox!");
define("_ZOOM_LIGHTBOX_NOTADDED","Element zostal juz dodany do Twojej lightbox!");
define("_ZOOM_LIGHTBOX_EDITED","Element zostal zedytowany pomyslnie!");
define("_ZOOM_LIGHTBOX_NOTEDITED","Blad edytowania elementu!");
define("_ZOOM_LIGHTBOX_DEL","Element pomysnie usuniety z Twojej lightbox!");
define("_ZOOM_LIGHTBOX_NOTDEL","Blad usuwania elementu z Twojej lightbox!");
define("_ZOOM_LIGHTBOX_NOZIP","Utworzyles juz plik ZIP Twojej lightbox lub Twoja lightbox nie zawiera elementow!");
define("_ZOOM_LIGHTBOX_PARSEZIP","Parsing obrazkow z galeri...");
define("_ZOOM_LIGHTBOX_DOZIP","tworzenie pliku ZIP...");
define("_ZOOM_LIGHTBOX_DLHERE","Mozesz teraz sciagnac lightbox");
define("_ZOOM_LIGHTBOX_PLSUCCESS","Playlista utworzona pomyslnie! Wymagane jest odswiezenie okna Playera.");
define("_ZOOM_LIGHTBOX_PLERROR","Blad tworzenia Playlisty.");
define("_ZOOM_LIGHTBOX_NOAUDIO","Najpierw musisz dodac pliki Audio do Twojej Lightbox!");
define("_ZOOM_LIGHTBOX_NOITEMS","Wydaje sie, ze Lightbox jest pusta.");

//EXIF information
define("_ZOOM_EXIF","EXIF");
define("_ZOOM_EXIF_SHOWHIDE","Pokaz/Ukryj Metadata");

//MP3 id3 v1.1 or later information
define("_ZOOM_AUDIO_PLAYING","aktualnie odtwarzane:");
define("_ZOOM_AUDIO_CLICKTOPLAY","Przycisnij aby odtworzyc plik.");
define("_ZOOM_ID3","ID3");
define("_ZOOM_ID3_SHOWHIDE","Pokaz/Ukryj ID3-tag data");
define("_ZOOM_ID3_LENGTH","Dlugosc");
define("_ZOOM_ID3_QUALITY","Jakosc");
define("_ZOOM_ID3_TITLE","Tytul");
define("_ZOOM_ID3_ARTIST","Artysta");
define("_ZOOM_ID3_ALBUM","Album");
define("_ZOOM_ID3_YEAR","Rok");
define("_ZOOM_ID3_COMMENT","Komentarz");
define("_ZOOM_ID3_GENRE","Gatunek");

//Video metadata information
define("_ZOOM_VIDEO_SHOWHIDE","Pokaz/Ukryj Video data");
define("_ZOOM_VIDEO_PIXELRATIO","Stosunek px");
define("_ZOOM_VIDEO_QUALITY","Jakosc Video");
define("_ZOOM_VIDEO_AUDIOQUALITY","Jakosc Audio");
define("_ZOOM_VIDEO_CODEC","Codec");
define("_ZOOM_VIDEO_RESOLUTION","Rozdzielczosc");

//rating
define("_ZOOM_RATING","Ocenianie");
define("_ZOOM_NOTRATED","Nie glosowano jeszcze!");
define("_ZOOM_VOTE","glos");
define("_ZOOM_VOTES","glosy");
define("_ZOOM_RATE0","marne");
define("_ZOOM_RATE1","slabe");
define("_ZOOM_RATE2","srednie");
define("_ZOOM_RATE3","dobre");
define("_ZOOM_RATE4","bardzo dobre");
define("_ZOOM_RATE5","perfect!");

//special
define("_ZOOM_TOPTEN","Top 10");
define("_ZOOM_LASTSUBM","Ostatnio przedlozone");
define("_ZOOM_LASTCOMM","Ostatnio komentowane");
define("_ZOOM_SEARCHRESULTS","Wyniki wyszukiwania");
define("_ZOOM_TOPRATED","Najlepsze");

//ecard
define("_ZOOM_ECARD_SENDAS","Wyslij element do przyjaciela jako E-katrke!");
define("_ZOOM_ECARD_YOURNAME","Twoje imie i nazwisko");
define("_ZOOM_ECARD_YOUREMAIL","Twoj adres e-mail");
define("_ZOOM_ECARD_FRIENDSNAME","Imie i nazwisko Twojego przyjaciela");
define("_ZOOM_ECARD_FRIENDSEMAIL","Adres e-mail Twojego przyjaciela");
define("_ZOOM_ECARD_MESSAGE","Wiadomosc");
define("_ZOOM_ECARD_SENDCARD","Wyslij E-kartke");
define("_ZOOM_ECARD_SUCCESS","Twoja E-kartka zostala wyslana pomyslnie.");
define("_ZOOM_ECARD_CLICKHERE","Przycisnij aby zobaczyc!");
define("_ZOOM_ECARD_ERROR","Blad wysylania E-kartki do");
define("_ZOOM_ECARD_TURN","Zobacz na tyl kartki!");
define("_ZOOM_ECARD_TURN2","Zobacz na przod kartki!");
define("_ZOOM_ECARD_SENDER","Wyslane do Ciebie przez:");
define("_ZOOM_ECARD_SUBJ","Otrzymales E-kartke od:");
define("_ZOOM_ECARD_MSG1","wyslano E-kartke od");
define("_ZOOM_ECARD_MSG2","Przycisnij na ponizszy odsylacz aby zobaczyc prywatne E-kartke!");
define("_ZOOM_ECARD_MSG3","Nie odpowiadaj na ten e-mail, jest on generowany automatycznie.");
define("_ZOOM_ECARD_ECARDEXPIRED","Przepraszam, E-kartka nie jest juz dostepna lub wymaga wniesiania oplaty.");

//installation-screen
define ('_ZOOM_INSTALL_CREATE_DIR','Instalator zOOm probuje utworzyc katalog "images/zoom" ...');
define ('_ZOOM_INSTALL_CREATE_DIR_WM','Instalator zOOm probuje utworzyc katalog "images/zoom/watermarks" ...');
define ('_ZOOM_INSTALL_CREATE_DIR_SUCC','wykonano!');
define ('_ZOOM_INSTALL_CREATE_DIR_FAIL','niepowodzenie!');
define ('_ZOOM_INSTALL_CREATE_DBASE_SUCC','Baza danych pomyslnie utworzona!');
define ('_ZOOM_INSTALL_UPGRADED_DBASE_SUCC','Baza danych upgraded pomyslnie!');
define ('_ZOOM_INSTALL_MESS1','zOOm Image Gallery zainstalowana pomyslnie.<br>Jestes gotowy do przedstawienia swoich albumow!');
define ('_ZOOM_INSTALL_MESS2','UWAGA: pierwsza rzecza jaka powinienes zrobic, to przejsc do powyzszego menu komponentow,<br> znalezc "zOOm Media Gallery Admin", przycisnac i <br>sprawdzic ustawienia strony w Admin-system.');
define ('_ZOOM_INSTALL_MESS3','Tutaj mozesz zmienic wszystkie zmienne aby ustawic wlasna konfiguracje zOOm.');
define ('_ZOOM_INSTALL_MESS4','Nie zapomnij utworzyc galeri i w droge!');
define ('_ZOOM_INSTALL_MESS_FAIL1','zOOM Gallery nie zostal zainstalowany pomyslnie!');
define ('_ZOOM_INSTALL_MESS_FAIL2','Wyszczegolnione katalogi musza byc utworzone, nastepnie prawa dostep do nich zmienione na "0777":<br />'
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
define ('_ZOOM_INSTALL_MESS_FAIL3','Kiedy juz masz utworzone katalogi i zmienione prawa dostepu do nich, przejdz do <br /> "Komponenty -> zOOm Media Gallery" i dopasuj ustawienia do swoich potrzeb.');
?>