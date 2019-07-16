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
| Filename: turkish.php                                               |
|                                                                     |
-----------------------------------------------------------------------
* @version $Id: turkish.php,v 1.0 2007/02/25 00:48:17 Togan Exp $
* @package zOOm Media Gallery
* @author Goeksel Togan <admin@kolkola.biz> 
**/
// MOS Intruder Alerts
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
//Language translation
define("_ZOOM_DATEFORMAT","%d.%m.%Y %H:%M"); // use the PHP strftime Format, more info at http://www.php.net
define("_ZOOM_ISO","utf-8");
define("_ZOOM_PICK","Bir Albüm Seçiniz");
define("_ZOOM_DELETE","sil");
define("_ZOOM_BACK","Geri");
define("_ZOOM_MAINSCREEN","Anasayfa");
define("_ZOOM_BACKTOGALLERY","Albüme geri dön");
define("_ZOOM_INFO_DONE","Bitti!");
define("_ZOOM_TOOLTIP", "zOOm-Araçlar");
define("_ZOOM_WARNING", "zOOm-Uyarı!");

//Gallery admin page
define("_ZOOM_ADMINSYSTEM","Yönetici-Sistemi");
define("_ZOOM_USERSYSTEM","Kullanıcı-Sistemi");
define("_ZOOM_ADMIN_TITLE","Medya Galeri Yönetici-Systemi");
define("_ZOOM_USER_TITLE","Medya Galeri Kullanıcı-Systemi");
define("_ZOOM_CATSMGR","Albüm-Yöneticisi");
define("_ZOOM_CATSMGR_DESCR","Resimleriniz için yeni bir Albüm yaratın, Albüm-Yöneticisi ile yeni bir Albüm yapabilir yada silebilirsiniz.");
define("_ZOOM_SETTINGS_DDONOF","Sürükle Bırak için izin:");
define("_ZOOM_NEW","Yeni Albüm");
define("_ZOOM_DEL","Albüm silin");
define("_ZOOM_ORDERSAVE", "İstekleri Kaydet");
define("_ZOOM_MEDIAMGR","Medya Yöneticisi");
define("_ZOOM_MEDIAMGR_DESCR","İsterseniz Medya dosyalarınızın yerlerini değiştirebilir, çalışabilir, silebilir yada Medya dosyalarınızı otomatik yada elle, Albüm içerisinde arayabilirsiniz.");
define("_ZOOM_THUMB", "Zoom Thumb Coder");
define("_ZOOM_THUMB_DESCR", "'Zoom Thumb kodunu' basitçe hesaplayın.");
define("_ZOOM_UPLOAD","Dosya yükleme");
define("_ZOOM_EDIT","Albüm Düzenleme");
define("_ZOOM_ADMIN_CREATE","Veri bankası yarat");
define("_ZOOM_ADMIN_CREATE_DESCR","Yeni Albüm için Veri bankası içinde Tablo yarat");
define("_ZOOM_HD_PREVIEW","Öngörünüş");
define("_ZOOM_HD_CHECKALL","Hepsini  seç/seçme");
define("_ZOOM_HD_CREATEDBY","Yapan");
define("_ZOOM_HD_AFTER","Aktuel Albüm");
define("_ZOOM_HD_HIDEMSG","'medya yok' yazısını gizle");
define("_ZOOM_HD_NAME","Başlık");
define("_ZOOM_HD_DIR","Dizin");
define("_ZOOM_HD_NEW","Yeni Albüm");
define("_ZOOM_HD_SHARE","Bu Albüm paylaşımda");
define("_ZOOM_SHARE","Serbest Bırak");
define("_ZOOM_UNSHARE","Geriçek");
define("_ZOOM_PUBLISH","Açık");
define("_ZOOM_UNPUBLISH","Geri Çek");
define("_ZOOM_TOPLEVEL","Anasayfa");
define("_ZOOM_HD_UPLOAD","Dosya Yükleme");
define("_ZOOM_A_ERROR_ERRORTYPE","Hata Çeşidi");
define("_ZOOM_A_ERROR_IMAGENAME","Medya İsmi");
define("_ZOOM_A_ERROR_NOFFMPEG","<u>FFmpeg</u> bulunamadı");
define("_ZOOM_A_ERROR_NOPDFTOTEXT","<u>PDFtoText</u> Bulunamadı");
define("_ZOOM_A_ERROR_NOTINSTALLED","Kurulu değil");
define("_ZOOM_A_ERROR_CONFTODB","Ayarları kaydederken veri bankasında bir hata oluştu!");
define("_ZOOM_A_MESS_NOT_SHURE","* eğer yaptığınız dan emim değilseniz, lütfen  önseçimli olanı kullanın \"oto\" ");
define("_ZOOM_A_MESS_SAFEMODE1","Uyarı: \"Güvenli Mod\" aktif. Dosya yüklemeleri yaparken hatayla sonuçlanabilir!<br />Bu durumda 'Ayarlar'  içerisinde  FTP-Mod aktif hale getirin.");
define("_ZOOM_A_MESS_SAFEMODE2","Uyarı: \"Güvenli Mod\" aktif. Büyük boyutlu dosyalarda yükleme yaparken hata ile sonuçlanabilir!<br />Bu durumda 'Ayarlar'  içerisinde  FTP-Mod aktif hale getirin.");
define("_ZOOM_A_MESS_PROCESSING_FILE","Dosyada çalışma yapılıyor...");
define("_ZOOM_A_MESS_NOTOPEN_URL","İstenen URL bağlantısı açılamıyor:");
define("_ZOOM_A_MESS_PARSE_URL","hata analizi \"%s\" Dosyası için... "); // %s = $url
define("_ZOOM_A_MESS_NOJAVA","Eğer yükleme yaparken bir gri kutu görürseniz yada başka bir problem oluşursa bunun sebebi<br />Bilgisayarınızda yeni bir Java Runtime Environment (JRE) sürümü yok yada JRE kurulu değil, Lütfen en son sürümü buradan <a href=\"http://www.java.com\" target=\"_blank\">Java.com</a> <br /> indirin.");
define("_ZOOM_SETTINGS","Ayarlar");
define("_ZOOM_SETTINGS_DESCR","Buradan aktuel ayarları görebilir yada değiştirebilirsiniz.");
define("_ZOOM_SETTINGS_TAB1","Sistem");
define("_ZOOM_SETTINGS_TAB2","Medya");
define("_ZOOM_SETTINGS_TAB3","Ayarlar");
define("_ZOOM_SETTINGS_TAB4","Görünüş");
define("_ZOOM_SETTINGS_TAB5","Filigran");
define("_ZOOM_SETTINGS_TAB6","Güvenli Mod");
define("_ZOOM_SETTINGS_TAB7","Yetkiler");
define("_ZOOM_SETTINGS_TAB8","Reset");
define("_ZOOM_SETTINGS_ERASE","tıklayın \"Silin\", Tüm dosyalarınızı zOOm Galeri içerisinde silebilir yada yeni ekleyebilirsiniz, Buradan tüm ayarları ve medyaları geri gelmemecesine silebilirsiniz. Ayarlar silinirse tüm ayarlar önseçimli duruma döner!");
define("_ZOOM_SETTINGS_CONVTYPE","Resim Çalışması:");
define("_ZOOM_SETTINGS_GALLERY_FEATURES","Albüm gösterim ayarları");
define("_ZOOM_SETTINGS_VIEW_FEATURES","Medya gösterim ayarları");

define("_ZOOM_SETTINGS_GALLERY","Albüm gösterimi");
define("_ZOOM_SETTINGS_VIEW","Medya gösterimi");

define("_ZOOM_SETTINGS_GENERAL_FEATURES","Genel Ayarlar");
define("_ZOOM_SETTINGS_AUTODET","Otomatik Algılama: ");
define("_ZOOM_SETTINGS_IMGPATH","Medya için bağlantı yolu:");
define("_ZOOM_SETTINGS_TTIMGPATH","Aktüel Medya bağlantısı");
define("_ZOOM_SETTINGS_CONVSETTINGS","Medya Değiştirilebilirliği:");
define("_ZOOM_SETTINGS_IMPATH","ImageMagick program yolu:  ");
define("_ZOOM_SETTINGS_NETPBMPATH"," Yada NetPBM: ");
define("_ZOOM_SETTINGS_FFMPEGPATH","FFmpeg program yolu");
define("_ZOOM_SETTINGS_FFMPEGTOOLTIP","FFmpeg, geçerli Video dosyalarında  Thumbnail yaratmak için gerekli: ");
define("_ZOOM_SETTINGS_OVERRIDE_FFMPEG","FFmpeg kullan, zOOm eğer sistemde FFmpeg bulamamışsa program yolunu elle verin. (örnek: /usr/bin/ffmpeg");
define("_ZOOM_SETTINGS_PDFTOTEXTPATH","PDFtoText program yolu");
define("_ZOOM_SETTINGS_XPDFTOOLTIP","PDFtoText, xpdf paketinin bir parçasıdır, PDF Dosyaları indekslemek için gereklidir.");
define("_ZOOM_SETTINGS_OVERRIDE_PDF","PDFtoText kullan, eğer zOOm sistemde otomatik bulamamışsa, PDFtoText program yolunu elle verin. örnek: /usr/bin/pdftotext");
define("_ZOOM_SETTINGS_MAXSIZE","Maksimum Resim Büyüklüğü: ");
define("_ZOOM_SETTINGS_MAXSIZEKB","Medya ve Resim için seçilen maksimum veri büyüklüğü (KB olarak): "); 
define("_ZOOM_SETTINGS_MAXSIZEKB_WARNING","Bu serverde hafıza Limiti PHP-Ayarlarında (php.ini dosyasında memory_limit = 16M olmalı) siz yada server Yöneticisi tarafından kısıtlanmış durumda, %s.<br />Bu değerin üstündeki tüm çalışmalar (Script) sonuçsuz kalacaktır!");
define("_ZOOM_SETTINGS_THUMBSETTINGS","Thumbnail-Ayarları:");
define("_ZOOM_SETTINGS_QUALITY","NetPBM ve GD2 JPEG-Kalitesi: ");
define("_ZOOM_SETTINGS_SIZE","Maksimum. Thumbnail-Büyüklüğü: ");
define("_ZOOM_SETTINGS_TEMPNAME","Geçici İsim: ");
define("_ZOOM_SETTINGS_AUTONUMBER","Otomatik medya sıralaması yap(örnek: 1,2,3)");
define("_ZOOM_SETTINGS_TEMPDESCR","Geçici tanımlama: ");
define("_ZOOM_SETTINGS_TITLE","Albüm İsmi:");
define("_ZOOM_SETTINGS_SUBCATSPG","Alt Albüm yan yana konvoy sayısı");
define("_ZOOM_SETTINGS_COLUMNS","Thumbnail yan yana konvoy sayısı");
define("_ZOOM_SETTINGS_THUMBSPG","Sayfa için Thumbnails sayısı");
define("_ZOOM_SETTINGS_CMTLENGTH","En fazla Yorum uzunluğu:");
define("_ZOOM_SETTINGS_CHARS","Harf");
define("_ZOOM_SETTINGS_GALLERYPREFIX","Galeri-Başlığı Önerisi:");
define("_ZOOM_SETTINGS_SHOWOCCSPACE","Kullanılan hafızayı Medya-Yönetisi içinde göster:");
define("_ZOOM_SETTINGS_TEMPLATE_TITLE","Arayüz");
define("_ZOOM_SETTINGS_FEATURES_TITLE","Ayarlar AÇIK/ KAPALI");
define("_ZOOM_SETTINGS_CSS_TITLE","Stylesheets Çalışması");
define("_ZOOM_SETTINGS_DISPLAY_TITLE","Gösterim seçeneği AÇIK/ KAPALI");
define("_ZOOM_SETTINGS_TEMPLATE_CHOOSE","Albümünüzün görünümü için arayüz de değişiklikler yapabilirsiniz, dış görünüm farklılıkları &amp; Albümünüzün etkisinide değiştirecektir");
define("_ZOOM_SETTINGS_TEMPLATE_TABLES","Klasik (Tablo ile)");
define("_ZOOM_SETTINGS_TEMPLATE_TABLELESS","Modern (Tablo olmadan)");
define("_ZOOM_SETTINGS_COMMENTS","Yorum");
define("_ZOOM_SETTINGS_POPUP","PopUp-Medya");
define("_ZOOM_SETTINGS_CATIMG","Albüm resmi olarak göster");
define("_ZOOM_SETTINGS_SLIDESHOW","Kayan Resimler");
define("_ZOOM_SETTINGS_ZOOMLOGO","Göster zOOm-Logo");
define("_ZOOM_SETTINGS_DESCRINGAL","Albüm bilgilerini Galeri içinde göster");
define("_ZOOM_SETTINGS_SHOWHITS","İstek sayısını göster");
define("_ZOOM_SETTINGS_READEXIF","Oku EXIF-Dosyası");
define("_ZOOM_SETTINGS_EXIFTOOLTIP","Bu fonksiyon ayrıca EXIF- ve öbür IPTC-Dosyalarını gösterir. EXIF-Modul olmaması durumunda PHP için yeniden kurulmak zorunda.");
define("_ZOOM_SETTINGS_READID3","MP3 ID3-Bilgilerini oku");
define("_ZOOM_SETTINGS_ID3TOOLTIP","Bu Fonksiyon ayrıca ID3 v.1.1 ve v.2.0- Bilgilerini gösterir. Bununla bir MP3 Dosyasının Detaylarına bakabilirsiniz.");
define("_ZOOM_SETTINGS_RATING","Değerlendirme");
define("_ZOOM_SETTINGS_CSS","PopUp-Pencere");
define("_ZOOM_SETTINGS_CSSZOOM","zOOm Medya Galeri &amp; Medya gösterimi");
define("_ZOOM_SETTINGS_SUCCESS","Ayarlar kaydedildi!");
define("_ZOOM_SETTINGS_ZOOMING","Resim büyütme");
define("_ZOOM_SETTINGS_ORDERBY","Thumbnail-Sıralama; sıra");
define("_ZOOM_SETTINGS_CATORDERBY","(Altında-)Albüm sıralama; Sıra");
define("_ZOOM_SETTINGS_DATE_ASC","TARİH, Yukarıya doğru");
define("_ZOOM_SETTINGS_DATE_DESC","TARİH, Aşağıya doğru");
define("_ZOOM_SETTINGS_NO_POP","Tüm Popuplar kapalı");
define("_ZOOM_SETTINGS_STANDARD_POP","Standard Popups");
define("_ZOOM_SETTINGS_LIGHTBOX_POP","Lightbox JS Popup");
define("_ZOOM_SETTINGS_FLNM_ASC","DOSYAİSMİ, Yukarıya doğru");
define("_ZOOM_SETTINGS_FLNM_DESC","DOSYAİSMİ, Aşağıya doğru");
define("_ZOOM_SETTINGS_NAME_ASC","İSİM, Yukarıya doğru");
define("_ZOOM_SETTINGS_NAME_DESC","İSİM, Aşağıya doğru");
define("_ZOOM_SETTINGS_LBTOOLTIP","Bir Lightbox, bir alışveriş arabası gibidir, bir kullanıcı buraya koyduğu tüm dosyaları eğer isterse bir ZIP-Dosyası olarak kendisi için indirebilir.");
define("_ZOOM_SETTINGS_SHOWNAME","İsim göster");
define("_ZOOM_SETTINGS_SHOWDESCR","Açıklamayı göster");
define("_ZOOM_SETTINGS_SHOWKEYWORDS","Anahtar kelime göster");
define("_ZOOM_SETTINGS_SHOWDATE","Tarih göster");
define("_ZOOM_SETTINGS_SHOWUNAME","Kullanıcı ismini göster");
define("_ZOOM_SETTINGS_SHOWFILENAME","Dosya ismini göster");
define("_ZOOM_SETTINGS_METABOX","Medya bilgileri için Bilgilendirme kutusunu göster");
define("_ZOOM_SETTINGS_METABOXTOOLTIP","Albüm gösterimini hızlandırmak için bu seçeneği deaktif edin. Büyük kapasiteli veri bankaları için uygundur!");
define("_ZOOM_SETTINGS_ECARDS","E-KART");
define("_ZOOM_SETTINGS_ECARDS_LIFETIME","E-Kart geçerlilik süresi");
define("_ZOOM_SETTINGS_ECARDS_ONEWEEK","bir Hafta");
define("_ZOOM_SETTINGS_ECARDS_TWOWEEKS","iki Hafta");
define("_ZOOM_SETTINGS_ECARDS_ONEMONTH","Bir Ay");
define("_ZOOM_SETTINGS_ECARDS_THREEMONTHS","Üç Ay");
define("_ZOOM_SETTINGS_SHOWSEARCH","TÜM sayfalarda arama penceresini göster");
define("_ZOOM_SETTINGS_BOX_ANIMATE","Kutu Animasyonu");
define("_ZOOM_SETTINGS_BOX_PROPERTIES","Kutuyu göster \"Ayarlar\"");
define("_ZOOM_SETTINGS_BOX_META","Kutuyu göster \"Metadata\"");
define("_ZOOM_SETTINGS_BOX_COMMENTS","Kutuyu göster \"Yorum\"");
define("_ZOOM_SETTINGS_BOX_RATING","Kutuyu göster 'değerlendirme'");
define("_ZOOM_SETTINGS_TOPTEN","Göster \"Top 10\"-Anasayfada Link");
define("_ZOOM_SETTINGS_LASTSUBM","Göster \" Son iletilen\"-Anasayfada link");
define("_ZOOM_SETTINGS_SETMENUOPTION","Göster \"Yükleme\"-Kullanıcı menüsü içinde Link;");
define("_ZOOM_SETTINGS_USEFTP","FTP-Mod kullanımı?");
define("_ZOOM_SETTINGS_FTPHOST","Server ismi");
define("_ZOOM_SETTINGS_FTPUNAME","Kullanıcı İsmi");
define("_ZOOM_SETTINGS_FTPPASS","Şifre");
define("_ZOOM_SETTINGS_FTPWARNING","Dikkat: Bu şifre güvenli olarak  kaydedilemez!");
define("_ZOOM_SETTINGS_FTPHOSTDIR","Server dizini");
define("_ZOOM_SETTINGS_MESS_FTPHOSTDIR","Lütfen joomla için FTP-Anadizin bağlantı yolu (URL link) giriniz. Önemli Not: girdiğiniz bağlantı yolu (link) sonunda slaş yada ters slaş <b>olmayacak!</b>");
define("_ZOOM_SETTINGS_GROUP","Grupla");
define("_ZOOM_SETTINGS_PRIV_DESCR","Siz tüm bilinen Joomla!-Gruplarında ve dolayısı ile Kullanıcılarında yetkilendirme ve yetki değişikliği yapabilirsiniz!<br />bir kullanıcıya örnek olarak Medya yüklemesi, çalışma/silme veya yeni Albüm yaratma/açma/çalışma/silme yetkileri verebilirsiniz<br /> veya bir kullanıcıya kısıtlı yetki verip yada hiç yetki vermeyebilirsiniz .");
define("_ZOOM_SETTINGS_CLOSE","Göster \"Kapat\"-Link PopUp içerisinde");
define("_ZOOM_SETTINGS_MAINSCREEN","Bağlantı yolunu Anasayfada üst Şerit içerisinde göster");
define("_ZOOM_SETTINGS_NAVBUTTONS","Bağlantı butonlarını bir PopUp-Penceresi içinde göster");
define("_ZOOM_SETTINGS_PROPERTIES","Medya altında ayarları göster");
define("_ZOOM_SETTINGS_MEDIAFOUND","Göster \"Medya bulundu\"Albüm seç");
define("_ZOOM_SETTINGS_ANONYMOUS_COMMENTS","Anonim Yorumları kabul et");
define("_ZOOM_SETTINGS_WM_ENABLE_TITLE","Filigran Aktif");
define("_ZOOM_SETTINGS_WM_TITLE", "Size ait Filigran ");
define("_ZOOM_SETTINGS_WM_DESCR", "Size ait bu Filigran Resimlerin üstünde görünecektir. " . "Bu sayede kullanıcılar bu resimleri kaydetmez yada yazıcı ile basmaz."
 . "<br /><br />Teklif: Firmanıza ait logoyu filigran olarak kulanabilirsiniz. "
 . "Fligranın arka duvarının saydam (transparent) yapılmış olduğundan emin olun!");
define("_ZOOM_SETTINGS_WM_IMG", "Resim");
define("_ZOOM_SETTINGS_WM_NOWATERMARKS", "Bir filigran bulunamadı. Yüklemek için yeni bir filigran seçin.");
define("_ZOOM_SETTINGS_WM_PLACEMENT_TITLE", "Yerleştirme");
define("_ZOOM_SETTINGS_WM_PLACEMENT_DESCR", "Filigran için resim alanı içinde bir durma pozisyonu seçin "
 . "gri kutucuklarda bir yer seçiniz.");
define("_ZOOM_SETTINGS_WM_FILE","Filigran yükle");
define("_ZOOM_SETTINGS_WM_UPLOAD_SUCCESS","Filigran başarı ile gönderildi!");
define("_ZOOM_SETTINGS_WM_UPLOAD_FAIL","Filigran için <b>Başarısız</b> Yükleme işlemi.");
define("_ZOOM_SETTINGS_WM_DEL_SUCCESS","Filigran başarıyla silindi!");
define("_ZOOM_SETTINGS_WM_DEL_FAIL","Filigran silmesi yapamazsınız.");
define("_ZOOM_SYSTEM_TITLE","Sistem Ayarları");
define("_ZOOM_YES","Evet");
define("_ZOOM_NO","Hayır");
define("_ZOOM_VISIBLE","Görünecek");
define("_ZOOM_HIDDEN","Gizlenmiş");
define("_ZOOM_SAVE","Kaydet");
define("_ZOOM_MOVEFILES","Medya Yeri, Dizini değiştir");
define("_ZOOM_BUTTON_MOVE","Yer değiştir");
define("_ZOOM_MOVEFILES_STEP1","Hedef bir Albüm seçiniz");
define("_ZOOM_ALERT_MOVE","%s Başarıyla Yer, dizin değiştirildi, %s Bunun için yer, dizin degiştirmesi yapılamaz.");
define("_ZOOM_OPTIMIZE","Tablo optimizasyon");
define("_ZOOM_OPTIMIZE_DESCR","zOOm Media Galerisi veri bankası içinde bir çok tablo kullanmaktadır. zaman içinde gereksiz bilgilerde kaydedilmiş olabilir, burayı tıklayın ve kullanılmayan bilgileri silin.");
define("_ZOOM_OPTIMIZE_SUCCESS","Tablo optimize edildi!");
define("_ZOOM_UPDATE","zOOm Media Galeri güncelleme");
define("_ZOOM_UPDATE_DESCR","Yeni sürümde yeni fonksiyonlar ve var olan sorunlar çözülmüş olabilir! Yeni sürüm için bu <a href=\"http://www.zoomfactory.org\" target=\"_blank\">www.zoomfactory.org</a> adrese gidiniz!");
define("_ZOOM_UPDATE_XMLDATE","Son güncelleme tarihi");
define("_ZOOM_UPDATE_NOUPDATES","Şu an yeni güncelleme yok!");
define("_ZOOM_UPDATE_PACKAGE","Güncellenen ZIP-Dosyası: ");
define("_ZOOM_CREDITS","zOOm Medya Galeri &amp; Credits");

//Image actions
define("_ZOOM_DISKSPACEUSAGE","Tüm hafıza alanında %s için kullanılan alan");
define("_ZOOM_UPLOAD_SINGLE","Tek Dosya");
define("_ZOOM_UPLOAD_MULTIPLE","Bir çok Dosya");
define("_ZOOM_UPLOAD_DRAGNDROP","JYükleyici");
define("_ZOOM_UPLOAD_SCANDIR","Medya arama");
define("_ZOOM_UPLOAD_INTRO","'Arama' yı tıklayınız ve bulunan ve seçilen Dosyayı yükleyiniz.");
define("_ZOOM_UPLOAD_STEP1","1. Yüklemek için Dosya sayısını seçiniz: ");
define("_ZOOM_UPLOAD_STEP2","2. Dosyalarınızı kaydetmek için bir Albüm seçiniz: ");
define("_ZOOM_UPLOAD_STEP3","3. Aradığınız Dosyaları bulmak için 'Arama' fonksiyonunu kullanınız");
define("_ZOOM_SCAN_STEP1","Adım 1: Medya araması için bir yer bildiriniz...");
define("_ZOOM_SCAN_STEP2","Adım 2: Göndermek için bir dosya seçiniz...");
define("_ZOOM_SCAN_STEP3","Adım 3: zOOm isteğinizi işleme koydu...");
define("_ZOOM_SCAN_STEP1_DESCR","Yükleme yapılacak yer FTP Bağlantı adresi içerisinde server üzerinde bir dizin şeklinde olacaktır. (ftp://ftp.serverim.com/benim-sayfa.dizinim)<br />&nbsp; İpucu: Eğer FTP üzerinden Medya yüklemesi yapmak isterseniz, buraya bir bağlantı adresi verin!");
define("_ZOOM_SCAN_STEP2_DESCR1","İşlemde");
define("_ZOOM_SCAN_STEP2_DESCR2","Lokal bir Dizin");
define("_ZOOM_FORMCREATE_NAME","İsim");
define("_ZOOM_FORM_IMAGEFILE","Medya");
define("_ZOOM_FORM_IMAGEFILTER","Desteklenen Medya türü");
define("_ZOOM_FORM_INGALLERY","Albüm içinde");
define("_ZOOM_FORM_SETFILENAME","Medya ismini aynı zamanda Dosya ismi olarak seç.");
define("_ZOOM_FORM_IGNORESIZES","Bu medya için, ilk ayarlardaki maksimum Dosya büyüklüğünü dikkate alma.");
define("_ZOOM_FORM_LOCATION","Yer");
define("_ZOOM_BUTTON_SCAN","Bir bağlantı veya dizin bildiriniz");
define("_ZOOM_BUTTON_UPLOAD","Gönder");
define("_ZOOM_BUTTON_EDIT","Düzenle");
define("_ZOOM_BUTTON_CREATE","Oluştur");
define("_ZOOM_CONFIRM_WIPE","DİKKAT!\\nEğer bu işleme devam ederseniz, tüm Galeri içerisindeki oluşturulmuş Albümler ve tüm Medya dosyaları silinecektir!\\n\\nHerşeyi silmek istediğinizden eminmisiniz??");
define("_ZOOM_CONFIRM_DEL","Bu ayarlar yapılırsa eğer bir Albüm ve içindeki Medya dosyalarıda silinecektir!\\nbu işlemin yapılmasını istiyormusunuz?");
define("_ZOOM_CONFIRM_DELMEDIUM","Siz şu anda bir medya dosyasını silmek istiyorsunuz!\\nbu işlemin yapılmasını istiyormusunuz?");
define("_ZOOM_ALERT_DEL","Albüm silindi!");
define("_ZOOM_ALERT_NOCAT","Albüm seçimi yapılmamış!");
define("_ZOOM_ALERT_NOMEDIA","Medya seçimi yapılmamış!");
define("_ZOOM_ALERT_EDITOK","Album bilgileri için çalışma başarılı!");
define("_ZOOM_ALERT_NEWGALLERY","Yeni Albüm oluşturuldu.");
define("_ZOOM_ALERT_NONEWGALLERY","Yeni Albüm oluşturulamadı!");
define("_ZOOM_ALERT_EDITIMG","Yeni Medya ayarları için çalışma başarılı.");
define("_ZOOM_ALERT_DELPIC","Medya silme işlemi başarılı.");
define("_ZOOM_ALERT_NODELPIC","Bu Medya İçin silme işlemi yapamazsınız!");
define("_ZOOM_ALERT_MOVEFAILURE","Bu Medya için yer değiştirme yapamazsınız."); 
define("_ZOOM_ALERT_NOPICSELECTED","Seçilen Medya yok.");
define("_ZOOM_ALERT_NOPICSELECTED_MULT","Seçilen Medya yok.");
define("_ZOOM_ALERT_UPLOADOK","Medya Başarıyla Yüklendi!");
define("_ZOOM_ALERT_UPLOADSOK","Medya Başarıyla Yüklendi!");
define("_ZOOM_ALERT_WRONGFORMAT","Yanlış Resim Formatı.");
define("_ZOOM_ALERT_WRONGFORMAT_MULT","Yanlış Format.");
define("_ZOOM_ALERT_TOOBIG","İzin verilen dosya büyüklüğü;; %s bu dosya izin verilenden büyük.");
define("_ZOOM_ALERT_IMGERROR","Hata! Resim/ Thumbnail Dosya büyüklüğü için değişiklik isteği gerçekleştirilmedi.");
define("_ZOOM_ALERT_PCLZIPERROR","Hata! Açılmak istenen Arşiv açılamadı.");
define("_ZOOM_ALERT_INDEXERROR","Hata! Dökümanda indeks hatası");
define("_ZOOM_ALERT_WATERMARKERROR","Bir resmin içerisine Filigran yerleştirmesinde hata oluştu.");
define("_ZOOM_ALERT_IMGFOUND","Resim(ler) bulundu.");
define("_ZOOM_INFO_CHECKCAT","Lütfen bir şey göndermeden önce bir Albüm seçiniz!");
define("_ZOOM_BUTTON_ADDIMAGES","Medya ekleyin");
define("_ZOOM_BUTTON_REMIMAGES","Medya çıkarın");
define("_ZOOM_INFO_PROCESSING","Dosyada çalışılıyor:");
define("_ZOOM_ITEMEDIT_TAB1","Ayarlar");
define("_ZOOM_ITEMEDIT_TAB2","Üye");
define("_ZOOM_ITEMEDIT_TAB3","Aksiyon");
define("_ZOOM_USERSLIST_LINE1",">>Burada Albüm için yetkili üyeleri seçin<<");
define("_ZOOM_USERSLIST_ALLOWALL",">>Genel İstek<<");
define("_ZOOM_USERSLIST_MEMBERSONLY",">>Sadece Üye olanlar<<");
define("_ZOOM_PUBLISHED","Herkese açık");
define("_ZOOM_SHARED","Albüm Serbest");
define("_ZOOM_ROTATE","Resmi 90 Derece Döndür");
define("_ZOOM_CLOCKWISE","Saat Yönünde");
define("_ZOOM_CCLOCKWISE","Saat yönüne ters");
define("_ZOOM_FLIP_HORIZ","Resmi yatay döndür");
define("_ZOOM_FLIP_VERT","Resmi dikey döndür");
define("_ZOOM_PROGRESS_DESCR","İsteğiniz için işleme başlandı... Lütfen kısa bir süre sabrediniz.");

//Navigation (including Slideshow buttons)
define("_ZOOM_SLIDESHOW","Kayan Resimler:");
define("_ZOOM_PREV_IMG","önceki Medya");
define("_ZOOM_NEXT_IMG","Sonraki Medya");
define("_ZOOM_FIRST_IMG","birinci Medya");
define("_ZOOM_LAST_IMG","sonuncu Medya");
define("_ZOOM_PLAY","Oynat");
define("_ZOOM_STOP","Durdur");
define("_ZOOM_RESET","Reset");
define("_ZOOM_FIRST","Birinci");
define("_ZOOM_LAST","Sonuncu");
define("_ZOOM_PREVIOUS","Önceki");
define("_ZOOM_NEXT","Sonraki");
define("_ZOOM_IN_DESC", "Farenin okunu resmin üzerinde gezdirdiğinizde Resim üzerindeki dilediğiniz bölgeyi büyütebileceksiniz. Detayları sevenler için ideal");

//Gallery actions
define("_ZOOM_SEARCH_BOX","Albüm İçinde arayın");
define("_ZOOM_ADVANCED_SEARCH","Kapsamlı arama");
define("_ZOOM_SEARCH_KEYWORD","Anahtar bir kelime ile arama");
define("_ZOOM_IMAGES","Medya");
define("_ZOOM_IMGFOUND","%s Medya bulundu - Bulunan sayfalar %s den %s");
define("_ZOOM_SUBGALLERIES","Alt Galeri");
define("_ZOOM_ALERT_COMMENTOK","Yorumunuz başarıyla kaydedildi!");
define("_ZOOM_ALERT_COMMENTERROR","Bu medya için daha önce bir yorum yapmıştınız!");
define("_ZOOM_ALERT_VOTE_OK","Değerlendirmeniz kaydedildi! Teşekkürler.");
define("_ZOOM_ALERT_VOTE_ERROR","Bu medya için daha önce bir değerlendirme yapmıştınız!");
define("_ZOOM_WINDOW_CLOSE","Kapat");
define("_ZOOM_NOPICS","Albüm içinde medya bulunamadı");
define("_ZOOM_PROPERTIES","Ayarlar");
define("_ZOOM_COMMENTS_INTRO","Yorumunuzu buraya yazabilirsiniz:");
define("_ZOOM_COMMENTS","Yorum");
define("_ZOOM_NO_COMMENTS","Şu ana kadar hiç bir yorum yapılmadı.");
define("_ZOOM_YOUR_NAME","Ad");
define("_ZOOM_ADD","Ekle");
define("_ZOOM_NAME","Ad");
define("_ZOOM_DATE","Tarih");
define("_ZOOM_UNAME","ekleyen");
define("_ZOOM_DESCRIPTION","Açıklama");
define("_ZOOM_IMGNAME","Ad");
define("_ZOOM_FILENAME","Dosya İsmi");
define("_ZOOM_CLICKDOCUMENT","(Açmak için Dosya ismine tıklayınız.)");
define("_ZOOM_KEYWORDS","Anahtar kelime");
define("_ZOOM_HITS","Değerlendirme");
define("_ZOOM_CLOSE","Kapat");
define("_ZOOM_NOIMG", "Medya bulunamadı!");
define("_ZOOM_NONAME", "Bir isim vermek zorundasınız!");
define("_ZOOM_NOCAT", "Seçilmiş Albüm yok!");
define("_ZOOM_EDITPIC", "Medyayı Düzenle");
define("_ZOOM_SETCATIMG","Albüm Resmi olarak kaydet");
define("_ZOOM_SETPARENTIMG","Albüm Resmini Albümler için kesinleştir");
define("_ZOOM_PASS","Şifre");
define("_ZOOM_PASS_REQUIRED","Bu Albümü seyredebilmeniz için bir şifre gerekli,.<br />Lütfen bir şifre yazınız <br /> Ve lütfen 'devam' butonunu tıklayınız. Teşekkürler.");
define("_ZOOM_PASS_BUTTON","Devam");
define("_ZOOM_PASS_GALLERY","Şifre");
define("_ZOOM_PASS_INNCORRECT","Şifre hatalı");

//Hotlinking
define("_ZOOM_SETTINGS_HOTLINK","Dış bağlantıya karşı korumaları aktif hale getir");
define("_ZOOM_SETTINGS_HPTOOLTIP","Eğer bu seçeneği aktif hale getirirseniz, Resim isimleri ve bulundukları Dizinler gizlenecektir. Doğrusunu söylemek gerekirse bir kullanıcı Resimlerinizi başka bie sayfada yayınlamak isterse, bağlantılar gizlendiği için bunu başaramaz.");


//Lightbox
define("_ZOOM_LIGHTBOX","Lightbox");
define("_ZOOM_LIGHTBOX_GALLERY","Bu Albüm Lightbox içinde var!");
define("_ZOOM_LIGHTBOX_ITEM","Bu Medyayı Lightbox içine ekle!");
define("_ZOOM_LIGHTBOX_VIEW","Lightbox Bakma");
define("_ZOOM_YOUR_LIGHTBOX","Lightbox içeriği:");
define("_ZOOM_LIGHTBOX_EMPTY","Lightbox unuz şu anda boş.");
define("_ZOOM_LIGHTBOX_ZIPBTN","ZIP-Dosyası yap");
define("_ZOOM_LIGHTBOX_PLAYLISTBTN","Playliste hazırla &amp; oynat");
define("_ZOOM_LIGHTBOX_CATS","Albümler");
define("_ZOOM_LIGHTBOX_TITLEDESCR","Başlık &amp; Tanımlama");
define("_ZOOM_ACTION","Yerine getir");
define("_ZOOM_LIGHTBOX_ADDED","Medya Lightbox unuza eklendi!");
define("_ZOOM_LIGHTBOX_NOTADDED","Bu medya Lightbox unuzdan kaldırıldı!");
define("_ZOOM_LIGHTBOX_EDITED","Medya başarıyla düzenlendi!");
define("_ZOOM_LIGHTBOX_NOTEDITED","Düzenlemede hata oluştu!");
define("_ZOOM_LIGHTBOX_DEL","Medya Lightbox unuzdan başarıyla silindi!");
define("_ZOOM_LIGHTBOX_NOTDEL","Medya Lightbox tan silinemiyor!");
define("_ZOOM_LIGHTBOX_NOZIP","Zaten bir ZIP-Dosyası üretildi. Yada Lightbox  boş!");
define("_ZOOM_LIGHTBOX_PARSEZIP","Albümden bir medya ekleyin...");
define("_ZOOM_LIGHTBOX_DOZIP","ZIP-Dosyası yapıldı...");
define("_ZOOM_LIGHTBOX_DLHERE","Lightbox tan indirmeniz gerekiyor");
define("_ZOOM_LIGHTBOX_PLSUCCESS","Oynatma listesi başarıyla yapıldı! Şimdi oynatıcı penceresini güncellemeniz gerekiyor.");
define("_ZOOM_LIGHTBOX_PLERROR","Oynatma listesi hazırlığında hata oluştu.");
define("_ZOOM_LIGHTBOX_NOAUDIO","İlk önce bir müzik dosyasını Lightbox a yüklemelisiniz!");
define("_ZOOM_LIGHTBOX_NOITEMS","LightBox boş görünüyor.");

//EXIF information
define("_ZOOM_EXIF","EXIF");
define("_ZOOM_EXIF_SHOWHIDE","EXIF-Bilgilerini Göster/ Gizle");

//MP3 id3 v1.1 or later information
define("_ZOOM_AUDIO_PLAYING","çalan:");
define("_ZOOM_AUDIO_CLICKTOPLAY","Dinlemek için burayı tıklayınız.");
define("_ZOOM_ID3","ID3");
define("_ZOOM_ID3_SHOWHIDE","ID3-Tag-Bilgilerini Göster/ Gizle");
define("_ZOOM_ID3_LENGTH","Uzunluk");
define("_ZOOM_ID3_QUALITY","Kalite");
define("_ZOOM_ID3_TITLE","Başlık");
define("_ZOOM_ID3_ARTIST","Yorumcu");
define("_ZOOM_ID3_ALBUM","Albüm");
define("_ZOOM_ID3_YEAR","Yıl");
define("_ZOOM_ID3_COMMENT","Yorum");
define("_ZOOM_ID3_GENRE","Genre");

//Video metadata information
define("_ZOOM_VIDEO_SHOWHIDE","Video ayarlarını Göster/gizle");
define("_ZOOM_VIDEO_PIXELRATIO","Pixel Ayarı");
define("_ZOOM_VIDEO_QUALITY","Video Kalitesi");
define("_ZOOM_VIDEO_AUDIOQUALITY","Ses Kalitesi");
define("_ZOOM_VIDEO_CODEC","Codec");
define("_ZOOM_VIDEO_RESOLUTION","Çözünürlük");

//rating
define("_ZOOM_RATING","Değerlendirme");
define("_ZOOM_NOTRATED","Değerlendirme yok!");
define("_ZOOM_VOTE","Doğru");
define("_ZOOM_VOTES","Doğru");
define("_ZOOM_RATE0","Kötü");
define("_ZOOM_RATE1","Zayıf");
define("_ZOOM_RATE2","Memnun edici");
define("_ZOOM_RATE3","İyi");
define("_ZOOM_RATE4","Çok iyi");
define("_ZOOM_RATE5","Harika!");

//special
define("_ZOOM_TOPTEN","Top 10");
define("_ZOOM_LASTSUBM","Son Gönderilen");
define("_ZOOM_LASTCOMM","Son yapılan yorum");
define("_ZOOM_SEARCHRESULTS","Arama sonucu");
define("_ZOOM_TOPRATED","En çok beğenilen");

//ecard
define("_ZOOM_ECARD_SENDAS","Arkadaşınıza bu E-Kart`ı gönderin!");
define("_ZOOM_ECARD_YOURNAME","Adınız");
define("_ZOOM_ECARD_YOUREMAIL","E-Mail adresiniz");
define("_ZOOM_ECARD_FRIENDSNAME","Arkadaşınızın adı");
define("_ZOOM_ECARD_FRIENDSEMAIL","Arkadaşınızın E-Mail adresi");
define("_ZOOM_ECARD_MESSAGE","Haber");
define("_ZOOM_ECARD_SENDCARD","E-Kart Gönder");
define("_ZOOM_ECARD_SUCCESS","EKART başarıyla gönderildi.");
define("_ZOOM_ECARD_CLICKHERE","E-Kart görmek için burayı tıklayın!");
define("_ZOOM_ECARD_ERROR","Gönderimde hata");
define("_ZOOM_ECARD_TURN","Kartın Arkayüzünü göster");
define("_ZOOM_ECARD_TURN2","Kartın Önyüzünü göster");
define("_ZOOM_ECARD_SENDER","Gönderen:");
define("_ZOOM_ECARD_SUBJ","Size E-Kart gönderen:");
define("_ZOOM_ECARD_MSG1","size güzel bir E-Kart gönderdi. Gönderilen sayfa");
define("_ZOOM_ECARD_MSG2","Aşağıdaki bağlantıyı tıklayın, size özel gönderilen E-Kart`ı görün!");
define("_ZOOM_ECARD_MSG3","Lütfen bu E-Mail`i cevaplamayın, bu otomatik gönderilen bir E-Mail dir.");
define("_ZOOM_ECARD_ECARDEXPIRED","Özür dilerim, bu E-Kart kaldırıldı yada zaman aşımına uğradı.");

//installation-screen
define ('_ZOOM_INSTALL_CREATE_DIR','zOOm-Kurulumu bir Medya-Dizini yaratmayı deniyor "images/zoom" ...');
define ('_ZOOM_INSTALL_CREATE_DIR_WM','zOOm-Kurulumu, filigran için bir Medya dizini yaratmayı deniyor. "images/zoom/watermarks" ...');
define ('_ZOOM_INSTALL_CREATE_DIR_SUCC','Bitti!');
define ('_ZOOM_INSTALL_CREATE_DIR_FAIL','Hata Oluştu!');
define ('_ZOOM_INSTALL_CREATE_DBASE_SUCC','Veri Bankası başarıyla oluştu!');
define ('_ZOOM_INSTALL_UPGRADED_DBASE_SUCC','Veri Bankası Başarıyla güncellendi!');
define ('_ZOOM_INSTALL_MESS1','zOOm Medya Galerisi başarıyla kuruldu.<br>Albümlerinizi ve Resimlerinizi artık açabilirsiniz!');
define ('_ZOOM_INSTALL_MESS2','Uyarı: İlk yapılması gereken menü içerisinde "Components" seçildikten sonra <br> "zOOm Media Gallery" menüsüne girin ve Ayarlar bölümünde tüm ayarları kendi isteklerinize göre yapınız.');
define ('_ZOOM_INSTALL_MESS3','Burada tüm değişiklikler kendi Albümünüzde her türlü istediğiniz optimasyon için uygulanabilir.');
define ('_ZOOM_INSTALL_MESS4','Bir Albüm oluşturmayı unutmayın!');
define ('_ZOOM_INSTALL_MESS_FAIL1','zoom Medya Galerisi tam olarak kurulamadı!');
define ('_ZOOM_INSTALL_MESS_FAIL2','Aşağıdaki dizinleri doğru  yetkilendirme ile yeniden oluşturun. "0777":<br />'
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
define ('_ZOOM_INSTALL_MESS_FAIL3','Eğer bu dizinler doğru şekilde oluşturuldu ise  <br /> "Components -> zOOm Media Gallery" menüsüne gidiniz ve ayarları isteğinize göre doğru bir şekilde yapınız.');
?>
