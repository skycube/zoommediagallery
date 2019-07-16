<?php
//zOOm Media Gallery//
/**
-----------------------------------------------------------------------
|  zOOm Media Gallery! by Mike de Boer - a multi-gallery component    |
-----------------------------------------------------------------------

-----------------------------------------------------------------------
|                                                                     |
| Date: Enero, 2006                                                   |
| Author: Marcelo Fern�ndez, <fernandezm22 _at_ yahoo.com.ar>         |
|         Ricardo Cheing, RC3, <rcheing@compusolutionsonline.com>     |
| Copyright: copyright (C) 2007 by Mike de Boer                       |
| Description: zOOm Media Gallery, a multi-gallery component for      |
|              Mambo. It's the most feature-rich gallery component    |
|              for Mambo! For documentation and a detailed list       |
|              of features, check the zOOm homepage:                  |
|              http://www.zoomfactory.org                             |
| License: GPL                                                        |
| Filename: spanish.php                                               |
|                                                                     |
-----------------------------------------------------------------------
* @package zOOm Media Gallery
* @author Mike de Boer <mailme@mikedeboer.nl>
**/
// MOS Intruder Alerts
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
//Language translation
define("_ZOOM_DATEFORMAT","%d.%m.%Y %H:%M"); // use the PHP strftime Format, more info at http://www.php.net
define("_ZOOM_PICK","Elija una Galer�a");
define("_ZOOM_DELETE","Borrar");
define("_ZOOM_BACK","Volver");
define("_ZOOM_MAINSCREEN","Pantalla Principal");
define("_ZOOM_BACKTOGALLERY","Volver a Galer�a");
define("_ZOOM_INFO_DONE","Hecho!");
define("_ZOOM_TOOLTIP", "Sugerencia de zOOm");
define("_ZOOM_WARNING", "Advertencia de zOOm!");

//Gallery admin page
define("_ZOOM_ADMINSYSTEM","Sistema");
define("_ZOOM_USERSYSTEM","Usuario");
define("_ZOOM_ADMIN_TITLE","Galer�a de Im�genes de Administrador");
define("_ZOOM_USER_TITLE","Galer�a de Im�genes de Usuario");
define("_ZOOM_CATSMGR","Administrador de Galer�as");
define("_ZOOM_CATSMGR_DESCR","Cree nuevas galer�as para sus archivos: cree, edite y borre aqu� en el Administrador de Galer�as.");
define("_ZOOM_SETTINGS_DDONOF","Activar arrastre y caer de archivos");
define("_ZOOM_NEW","Nueva galeria");
define("_ZOOM_DEL","Borrar galeria");
define("_ZOOM_MEDIAMGR","Administrador de Medios ");
define("_ZOOM_MEDIAMGR_DESCR","Mueva, edite, borre, busque medios autom�ticamente o suba (m�ltiples) im�genes/medios nuevos manualmente.");
define("_ZOOM_THUMB", "Codificador de Zoom Thumb");
define("_ZOOM_THUMB_DESCR", "Cree sus codigos de Zoom Thumb facilmente");
define("_ZOOM_UPLOAD","Subir archivo(s)");
define("_ZOOM_EDIT","Editar galeria");
define("_ZOOM_ADMIN_CREATE","Crear Base de Datos");
define("_ZOOM_ADMIN_CREATE_DESCR","construye las tablas de la base de datos necesaras, para que usted pueda comenzar a utilizar el album");
define("_ZOOM_HD_PREVIEW","Vista Previa");
define("_ZOOM_HD_CHECKALL","Marcar/Desmarcar Todo");
define("_ZOOM_HD_CREATEDBY","Creado por");
define("_ZOOM_HD_AFTER","Galeria Padre");
define("_ZOOM_HD_HIDEMSG","Ocultar leyenda que dice 'sin archivos'");
define("_ZOOM_HD_NAME","Titulo");
define("_ZOOM_HD_DIR","Directorio");
define("_ZOOM_HD_NEW","Nueva galeria");
define("_ZOOM_HD_SHARE","Compartir esta galeria");
define("_ZOOM_SHARE","Compartir");
define("_ZOOM_UNSHARE","Descompartir");
define("_ZOOM_PUBLISH","Publicar");
define("_ZOOM_UNPUBLISH","Despublicar");
define("_ZOOM_TOPLEVEL","Nivel Principal");
define("_ZOOM_HD_UPLOAD","Subir archivo");
define("_ZOOM_A_ERROR_ERRORTYPE","Tipo de Error");
define("_ZOOM_A_ERROR_IMAGENAME","Nombre de Imagen");
define("_ZOOM_A_ERROR_NOFFMPEG","<u>FFmpeg</u> no detectado");
define("_ZOOM_A_ERROR_NOPDFTOTEXT","<u>PDFtoText</u> no detectado");
define("_ZOOM_A_ERROR_NOTINSTALLED","No instalado");
define("_ZOOM_A_ERROR_CONFTODB","Error al guardar la configuraci�n en la base de datos!");
define("_ZOOM_A_MESS_NOT_SHURE","* Si usted no est� seguro, use por defecto \"auto\" ");
define("_ZOOM_A_MESS_SAFEMODE1","Nota: \"Safe Mode\" est� activado, consecuentemente es posible que archivos que se suban de mayor tama�o no funcionen!<br />Usted deber�a ir al Sistema Administrativo y cambiar a Modo-FTP.");
define("_ZOOM_A_MESS_SAFEMODE2","Nota: \"Safe Mode\" est� activado, consecuentemente es posible que archivos que se suban de mayor tama�o no funcionen!<br />zOOm recomienda activar el Modo-FTP en el Sistema Administrativo.");
define("_ZOOM_A_MESS_PROCESSING_FILE","Procesando archivo...");
define("_ZOOM_A_MESS_NOTOPEN_URL","No fue posible abrir la url:");
define("_ZOOM_A_MESS_PARSE_URL","Analizando \"%s\" para im�genes... "); // %s = $url
define("_ZOOM_A_MESS_NOJAVA","Si usted ve arriba una caja gris o tiene problemas mientras baja nuevas im�genes, debe ser porque<br>no tiene la �ltima versi�n del Java Runtime instalado. Visite <a href=\"http://www.java.com/es\" target=\"_blank\">Java.com</a> <br /> y baje la �ltima versi�n.");
define("_ZOOM_SETTINGS","Configuraci�n");
define("_ZOOM_SETTINGS_DESCR","Vea y Cambie todas las opciones de configuraci�n disponibles aqu�.");
define("_ZOOM_SETTINGS_TAB1","Sistema");
define("_ZOOM_SETTINGS_TAB2","Medios");
define("_ZOOM_SETTINGS_TAB3","Caracteristicas");
define("_ZOOM_SETTINGS_TAB4","Disposici�n");
define("_ZOOM_SETTINGS_TAB5","Marca de Agua");
define("_ZOOM_SETTINGS_TAB6","Modo Seguro");
define("_ZOOM_SETTINGS_TAB7","Accesibilidad");
define("_ZOOM_SETTINGS_TAB8","Reajuste");
define("_ZOOM_SETTINGS_ERASE","Click para borrar toda la informacion en la galeria Zoom y empezar de nuevo. Este reajusta la configuracion y borra todas las imagenes.");
define("_ZOOM_SETTINGS_CONVTYPE","M�todo de Conversi�n de Im�genes");
define("_ZOOM_SETTINGS_GALLERY_FEATURES","Caracteristicas de Vista de Galeria");
define("_ZOOM_SETTINGS_VIEW_FEATURES","Caracteristicas de Vista de Medios");

define("_ZOOM_SETTINGS_GALLERY","Vista de Galeria");
define("_ZOOM_SETTINGS_VIEW","Vista de Medios");

define("_ZOOM_SETTINGS_GENERAL_FEATURES","Caracteristicas Generales");
define("_ZOOM_SETTINGS_AUTODET","auto-detectado: ");
define("_ZOOM_SETTINGS_IMGPATH","Direcci�n de los archivos de im�genes/medios:");
define("_ZOOM_SETTINGS_TTIMGPATH","Direcci�n actual para las im�genes/medios es ");
define("_ZOOM_SETTINGS_CONVSETTINGS","Configuraci�n para la conversi�n de im�genes/medios:");
define("_ZOOM_SETTINGS_IMPATH","Direcci�n de ImageMagick: ");
define("_ZOOM_SETTINGS_NETPBMPATH"," o NetPBM: ");
define("_ZOOM_SETTINGS_FFMPEGPATH","Direcci�n de FFmpeg");
define("_ZOOM_SETTINGS_FFMPEGTOOLTIP","FFmpeg es necesario para crear thumbnails de sus archivos de video.<br />Las extensiones soportadas son: ");
define("_ZOOM_SETTINGS_OVERRIDE_FFMPEG","Utilizar FFmpeg, aunque zOOm no pueda verificar su existencia en este sistema.");
define("_ZOOM_SETTINGS_PDFTOTEXTPATH","Direcci�n de PDFtoText");
define("_ZOOM_SETTINGS_XPDFTOOLTIP","pdf2text, que es parte del paquete Xpdf, es necesario para indexar los archivos PDF.");
define("_ZOOM_SETTINGS_OVERRIDE_PDF","Utilizar PDFtoText, aunque zOOm no pueda verificar su existencia en este sistema.");
define("_ZOOM_SETTINGS_MAXSIZE","Tama�o m�x. de Imagen: ");
define("_ZOOM_SETTINGS_MAXSIZEKB","Medios - incluyendo imagenes - tama�o max. (en kB): "); //added: 08-08-2006
define("_ZOOM_SETTINGS_MAXSIZEKB_WARNING","El limite de subir de este servidor, establecido por su ISP como parte de la configuracion PHP, es %s.<br />Estableciendo este limite por encima de este valor no tendra efectos!"); //added: 09-01-2006
define("_ZOOM_SETTINGS_THUMBSETTINGS","Configuraci�n de Thumbnail:");
define("_ZOOM_SETTINGS_QUALITY","Calidad de NetPBM y GD2 JPEG: ");
define("_ZOOM_SETTINGS_SIZE","Tama�o m�x. de Thumbnail: ");
define("_ZOOM_SETTINGS_TEMPNAME","Nombre Temporario: ");
define("_ZOOM_SETTINGS_AUTONUMBER","auto-numerar el nombre de las im�genes (ej. 1,2,3)");
define("_ZOOM_SETTINGS_TEMPDESCR","Descripci�n Temporaria: ");
define("_ZOOM_SETTINGS_TITLE","T�tulo de la Galeria:");
define("_ZOOM_SETTINGS_SUBCATSPG","N�m. de Colunas de las (sub)galerias");
define("_ZOOM_SETTINGS_COLUMNS","N�m. de Columnas del Thumbnail");
define("_ZOOM_SETTINGS_THUMBSPG","Thumbs por p�gina");
define("_ZOOM_SETTINGS_CMTLENGTH","Tama�o m�x. para comentario");
define("_ZOOM_SETTINGS_CHARS","caracteres");
define("_ZOOM_SETTINGS_GALLERYPREFIX","Prefijo del T�tulo de la Galeria");
define("_ZOOM_SETTINGS_SHOWOCCSPACE","Mostrar espacio ocupado en el Administrador de Im�genes/Medios");
define("_ZOOM_SETTINGS_TEMPLATE_TITLE","Plantilla");
define("_ZOOM_SETTINGS_FEATURES_TITLE","Caracter�sticas SI/NO");
define("_ZOOM_SETTINGS_CSS_TITLE","Editar Hojas de Estilo");
define("_ZOOM_SETTINGS_DISPLAY_TITLE","Datos para mostrar SI/NO");
define("_ZOOM_SETTINGS_TEMPLATE_CHOOSE","Seleccione una plantilla para definir el dise�o de su galeria.");
define("_ZOOM_SETTINGS_TEMPLATE_TABLES","Clasico (con tablas)");
define("_ZOOM_SETTINGS_TEMPLATE_TABLELESS","Moderno (sin tablas)");
define("_ZOOM_SETTINGS_COMMENTS","Comentarios");
define("_ZOOM_SETTINGS_POPUP","Imagen PopUp");
define("_ZOOM_SETTINGS_CATIMG","Mostrar la galer�a de las Im�genes");
define("_ZOOM_SETTINGS_SLIDESHOW","Presentaci�n");
define("_ZOOM_SETTINGS_ZOOMLOGO","Mostrar Logo de zOOm");
define("_ZOOM_SETTINGS_SHOWHITS","Mostrar n�m. de clicks");
define("_ZOOM_SETTINGS_READEXIF","Leer datos EXIF");
define("_ZOOM_SETTINGS_EXIFTOOLTIP","Esta caracter�stica va a mostrar datos adicionales de EXIF u otros datos IPTC, sin necesidad de que el m�dulo EXIF de PHP est� instalado en el sistema.");
define("_ZOOM_SETTINGS_READID3","Leer datos ID3 de los .mp3");
define("_ZOOM_SETTINGS_ID3TOOLTIP","Esta caracter�stica va a mostrar datos adicionales de ID3 v1.1 y v2.0 cuando est� viendo los detalles de un archivo mp3.");
define("_ZOOM_SETTINGS_RATING","Puntaje");
define("_ZOOM_SETTINGS_CSS","Ventana Emergente");
define("_ZOOM_SETTINGS_CSSZOOM","Galer�a z00m  &amp; Visualizaci�n");
define("_ZOOM_SETTINGS_SUCCESS","Configuraci�n actualizada exitosamente!");
define("_ZOOM_SETTINGS_ZOOMING","Zoom de las im�genes");
define("_ZOOM_SETTINGS_ORDERBY","M�todo de ordenamiento de los Thumbnails; ordenado por");
define("_ZOOM_SETTINGS_CATORDERBY","M�todo de ordenamiento (Sub-)Galeria; ordenado por");
define("_ZOOM_SETTINGS_DATE_ASC","DATOS, ascendente");
define("_ZOOM_SETTINGS_DATE_DESC","DATOS, descendente");
define("_ZOOM_SETTINGS_FLNM_ASC","NOMBRE-ARCHIVO, ascendente");
define("_ZOOM_SETTINGS_FLNM_DESC","NOMBRE-ARCHIVO, descendente");
define("_ZOOM_SETTINGS_NAME_ASC","NOMBRE, ascendente");
define("_ZOOM_SETTINGS_NAME_DESC","NOMBRE, descendente");
define("_ZOOM_SETTINGS_LBTOOLTIP","Un Porta-Im�genes es como un carro de compras cargado con las im�genes que usted ha seleccionado, que luego puede ser descargado como un archivo ZIP.");
define("_ZOOM_SETTINGS_SHOWNAME","Mostrar Nombre");
define("_ZOOM_SETTINGS_SHOWDESCR","Mostrar descripci�n");
define("_ZOOM_SETTINGS_SHOWKEYWORDS","Mostrar palabras clave");
define("_ZOOM_SETTINGS_SHOWDATE","Mostrar fecha");
define("_ZOOM_SETTINGS_SHOWUNAME","Mostrar nombre de usuario");
define("_ZOOM_SETTINGS_SHOWFILENAME","Mostrar nombre del archivo");
define("_ZOOM_SETTINGS_METABOX","Mostrar caja flotante con detalles en las p�ginas de las galer�as");
define("_ZOOM_SETTINGS_METABOXTOOLTIP","Desmarque esta caracter�stica para mejorar la velocidad de su galer�a. Eficiente con bases de datos grandes.");
define("_ZOOM_SETTINGS_ECARDS","Postales Electr�nicas (E-Cards)");
define("_ZOOM_SETTINGS_ECARDS_LIFETIME","Tiempo de Vida de las Postales");
define("_ZOOM_SETTINGS_ECARDS_ONEWEEK","una semana");
define("_ZOOM_SETTINGS_ECARDS_TWOWEEKS","dos semanas");
define("_ZOOM_SETTINGS_ECARDS_ONEMONTH","un mes");
define("_ZOOM_SETTINGS_ECARDS_THREEMONTHS","tres meses");
define("_ZOOM_SETTINGS_SHOWSEARCH","Campo de b�squeda en todas las p�ginas");
define("_ZOOM_SETTINGS_BOX_ANIMATE","Animar cajas");
define("_ZOOM_SETTINGS_BOX_PROPERTIES","Estado visual de la caja de Propiedades");
define("_ZOOM_SETTINGS_BOX_META","Estado visual de los Metadatos");
define("_ZOOM_SETTINGS_BOX_COMMENTS","Estado visual de la caja de Comentarios");
define("_ZOOM_SETTINGS_BOX_RATING","Estado visual de la caja de Puntaje");
define("_ZOOM_SETTINGS_TOPTEN","Mostrar enlace de \"M�s Vistas\" en la p�gina superior");
define("_ZOOM_SETTINGS_LASTSUBM","Mostrar enlace de \"Ultimas im�genes/medios Enviados\" en la p�gina superior");
define("_ZOOM_SETTINGS_SETMENUOPTION","Mostrar enlace de 'Subir Im�genes' en el Men� del Usuario");
define("_ZOOM_SETTINGS_USEFTP","Usar Modo-FTP?");
define("_ZOOM_SETTINGS_FTPHOST","Nombre de Host");
define("_ZOOM_SETTINGS_FTPUNAME","Nombre de Usuario");
define("_ZOOM_SETTINGS_FTPPASS","Contrase�a");
define("_ZOOM_SETTINGS_FTPWARNING","Atenci�n: La contrase�a no se guarda de forma segura!");
define("_ZOOM_SETTINGS_FTPHOSTDIR","Directorio en el Host");
define("_ZOOM_SETTINGS_MESS_FTPHOSTDIR","Por favor provea el directorio a Joomla desde su root FTP aqu�. IMPORTANTANTE: Terminar <b>sin</b> una barra o una barra invertida!");
define("_ZOOM_SETTINGS_GROUP","Grupo");
define("_ZOOM_SETTINGS_PRIV_DESCR","Usted puede cambiar los privilegios de cada grupo de usuario conocido en Joomla! y cambar los privilegios de cada usuario que es miembro de ese grupo!<br/> Un usuario, en teor�a, realiza las siguientes acciones: subir archivo(s), editar/borrar medios, crear/editar/borrar galer�as compartidas.<br/> Lo que ellos puedan y lo que no puedan hacer en el mundo real depende de usted.");
define("_ZOOM_SETTINGS_CLOSE","Mostrar enlace de \"Cerrar\" en la ventana emergente");
define("_ZOOM_SETTINGS_MAINSCREEN","Mostrar enlace a Pantalla Superior en la navegaci�n");
define("_ZOOM_SETTINGS_NAVBUTTONS","Mostrar botones de navegaci�n en ventana emergente");
define("_ZOOM_SETTINGS_PROPERTIES","Mostrar Propiedades debajo de los medios");
define("_ZOOM_SETTINGS_MEDIAFOUND","Mostrar texto de \"Medios Encontrados\" en la galer�a");
define("_ZOOM_SETTINGS_ANONYMOUS_COMMENTS","Permitir comentarios anonimos");
define("_ZOOM_SETTINGS_WM_ENABLE_TITLE","Establecer Caracteristicas");
define("_ZOOM_SETTINGS_WM_TITLE", "Su marca de agua");
define("_ZOOM_SETTINGS_WM_DESCR", "Su marca de agua aparece encima de sus imagenes en la pagina web. "
 . "La imagen seguira visible, pero sus visitantes no seran animados a copiar o imprimir la imagen."
 . "<br /><br />Sugerencia: usted puede utilizar su logotipo de empresa como una marca de agua."
 . "Por favor asegurese de configurar el fondo de su imagen, transparente!");
define("_ZOOM_SETTINGS_WM_IMG", "Imagen");
define("_ZOOM_SETTINGS_WM_NOWATERMARKS", "Marca de agua no encontrado.  Usted puede subir una marca de agua.");
define("_ZOOM_SETTINGS_WM_PLACEMENT_TITLE", "Colocacion");
define("_ZOOM_SETTINGS_WM_PLACEMENT_DESCR", "Usted puede definir la posicion de la marca de agua en la imagen "
 . "Seleccionando una de las posiciones en el cuadro gris de abajo.");
define("_ZOOM_SETTINGS_WM_FILE","Subir marca de agua");
define("_ZOOM_SETTINGS_WM_UPLOAD_SUCCESS","Marca de agua subida con exito!");
define("_ZOOM_SETTINGS_WM_UPLOAD_FAIL","Marca de agua subio sin exito.");
define("_ZOOM_SETTINGS_WM_DEL_SUCCESS","Marca de agua borrado exitosamente!");
define("_ZOOM_SETTINGS_WM_DEL_FAIL","Marca de agua no pudo ser borrada.");
define("_ZOOM_SYSTEM_TITLE","Configuraci�n del Sistema");
define("_ZOOM_YES","si");
define("_ZOOM_NO","no");
define("_ZOOM_VISIBLE","visible");
define("_ZOOM_HIDDEN","oculto");
define("_ZOOM_SAVE","Guardar");
define("_ZOOM_MOVEFILES","Mover imagen");
define("_ZOOM_BUTTON_MOVE","Mover");
define("_ZOOM_MOVEFILES_STEP1","Selecciones una galer�a destino y mover im�genes/medios");
define("_ZOOM_ALERT_MOVE","Imagen/Medio %s movido exitosamente, Imagen/Medio %s no pudo ser movido.");
define("_ZOOM_OPTIMIZE","Optimizar tablas");
define("_ZOOM_OPTIMIZE_DESCR","La Galer�a de Im�genes/Medios de z00m utiliza mucho sus tablas y de esta manera genera muchos datos sin importancia. Haga click aqu� para borrarlos.");
define("_ZOOM_OPTIMIZE_SUCCESS","La Galer�a de Im�genes/Medios z00m fue optimizada!");
define("_ZOOM_UPDATE","Actualizar Galeria de Imagens zOOm");
define("_ZOOM_UPDATE_DESCR","Agregar nuevas caracter�sticas, resolver problemas y solucionar bugs! Visite <a href=\"http://www.zoomfactory.org\" target=\"_blank\">www.zoomfactory.org</a> para las �ltimas actualizaciones!");
define("_ZOOM_UPDATE_XMLDATE","Fecha de �ltima actualizaci�n");
define("_ZOOM_UPDATE_NOUPDATES","sin actualizaciones todav�a!"); // added 11-08
define("_ZOOM_UPDATE_PACKAGE","Archivo ZIP de actualizaci�n: ");
define("_ZOOM_CREDITS","Acerca de Galer�a de Im�genes y Medios z00m");

//Image actions
define("_ZOOM_DISKSPACEUSAGE","Espacio que ocupa actualmente la galer�a %s");
define("_ZOOM_UPLOAD_SINGLE","�nico archivo(ZIP)");
define("_ZOOM_UPLOAD_MULTIPLE","m�ltiples archivos");
define("_ZOOM_UPLOAD_DRAGNDROP","Arrastar & Soltar");
define("_ZOOM_UPLOAD_SCANDIR","Escanear/Rastrear directorio");
define("_ZOOM_UPLOAD_INTRO","Haga click en el bot�n <b>Examinar</b> para encontrar una imagen/medio para subir.");
define("_ZOOM_UPLOAD_STEP1","1. Seleccione el n�mero de im�genes/medios que usted quiere subir: ");
define("_ZOOM_UPLOAD_STEP2","2. Seleccione la Galeria donde quiere subir los archivos: ");
define("_ZOOM_UPLOAD_STEP3","3. Use el bot�n Examinar... para encontrar las im�genes/medios en su computadora");
define("_ZOOM_SCAN_STEP1","Paso 1: Elija una ubicaci�n para escanear/rastrear por im�genes/medios...");
define("_ZOOM_SCAN_STEP2","Paso 2: Selecciones los archivos que usted quiere subir...");
define("_ZOOM_SCAN_STEP3","Paso 3: zOOm procesa los archivos seleccionados...");
define("_ZOOM_SCAN_STEP1_DESCR","La ubicaci�n puede ser una URL o un directorio en el servidor.<br />&nbsp; Tip: Suba im�genes/medios (v�a FTP) a un directorio en el servidor y despu�s provea el directorio aqu�!");
define("_ZOOM_SCAN_STEP2_DESCR1","Procesando");
define("_ZOOM_SCAN_STEP2_DESCR2","como un directorio local");
define("_ZOOM_FORMCREATE_NAME","Nobrme");
define("_ZOOM_FORM_IMAGEFILE","Imagen/Medio");
define("_ZOOM_FORM_IMAGEFILTER","Tipos de Im�genes Soportadas");
define("_ZOOM_FORM_INGALLERY","En Galeria");
define("_ZOOM_FORM_SETFILENAME","Seleccionar el nombre de las im�genes con el nombre de los archivos originales.");
define("_ZOOM_FORM_IGNORESIZES","Ignorar m�xima dimensi�n de la imagen pre-configurada"); //added: 12-08
define("_ZOOM_FORM_LOCATION","Ubicaci�n");
define("_ZOOM_BUTTON_SCAN","Enviar URL o directorio");
define("_ZOOM_BUTTON_UPLOAD","Subir");
define("_ZOOM_BUTTON_EDIT","Editar");
define("_ZOOM_BUTTON_CREATE","Crear");
define("_ZOOM_CONFIRM_WIPE","ADVERTENCIA!\\n Esta funcion borrara por completo su galeria zoom y removera todas las imagenes y galerias.\\n\\n Esta seguro que desea continuar?");
define("_ZOOM_CONFIRM_DEL","Esta opci�n va a eliminar una galer�a completamente, incluyendo las im�genes!\\n Desea continuar?");
define("_ZOOM_CONFIRM_DELMEDIUM","Usted va a eliminar completamente este medio!\\n Desea continuar?");
define("_ZOOM_ALERT_DEL","La galeria fue eliminada!");
define("_ZOOM_ALERT_NOCAT","Ninguna Galer�a fue seleccionada!");
define("_ZOOM_ALERT_NOMEDIA","Ninguna imagen seleccionada!");
define("_ZOOM_ALERT_EDITOK","Los Campos de la Galer�a fueron editados con �xito!");
define("_ZOOM_ALERT_NEWGALLERY","Nueva Galeria creada.");
define("_ZOOM_ALERT_NONEWGALLERY","Galeria no creada!");
define("_ZOOM_ALERT_EDITIMG","Las propiedades de la imagen fueron editadas exitosamente.");
define("_ZOOM_ALERT_DELPIC","Imagen eliminada exitosamente.");
define("_ZOOM_ALERT_NODELPIC","La Imagen no pudo ser eliminada!");
define("_ZOOM_ALERT_MOVEFAILURE","El medio no se pudo mover."); //added: 08-08-2006
define("_ZOOM_ALERT_NOPICSELECTED","Ninguna imagen seleccionada.");
define("_ZOOM_ALERT_NOPICSELECTED_MULT","Ninguna imagen seleccionada.");
define("_ZOOM_ALERT_UPLOADOK","Imagen enviada/subida con �xito!");
define("_ZOOM_ALERT_UPLOADSOK","Im�genes enviadas/subidas con �xito!");
define("_ZOOM_ALERT_WRONGFORMAT","Formato incorrecto de la imagen.");
define("_ZOOM_ALERT_WRONGFORMAT_MULT","Formato incorrecto.");
define("_ZOOM_ALERT_TOOBIG","El tama�o del archivo es muy grande; %s es el max. reconocido."); //added 08-08-2006
define("_ZOOM_ALERT_IMGERROR","Error ajustando tama�o de la imagen/ creando thumbnail.");
define("_ZOOM_ALERT_PCLZIPERROR","Ha ocurrido un error mientras se extra�a el archivo.");
define("_ZOOM_ALERT_INDEXERROR","Ha ocurrido un error mientras se indexaba el documento.");
define("_ZOOM_ALERT_WATERMARKERROR","HA Ocurrido un error mientras se aplicaba la marca de agua a la imagen.");
define("_ZOOM_ALERT_IMGFOUND","im�gen(es) encontradas.");
define("_ZOOM_INFO_CHECKCAT","Por favor seleccione una galeria antes de cliquear en el bot�n de subir/upload!");
define("_ZOOM_BUTTON_ADDIMAGES","Agregar imagen");
define("_ZOOM_BUTTON_REMIMAGES","Eliminar imagen");
define("_ZOOM_INFO_PROCESSING","Procesando archivo:");
define("_ZOOM_ITEMEDIT_TAB1","Propiedades");
define("_ZOOM_ITEMEDIT_TAB2","Miembros");
define("_ZOOM_ITEMEDIT_TAB3","Acciones");
define("_ZOOM_USERSLIST_LINE1",">>Seleccione los miembros de este �tem<<");
define("_ZOOM_USERSLIST_ALLOWALL",">>Acceso P�blico<<");
define("_ZOOM_USERSLIST_MEMBERSONLY",">>S�lo Miembros<<");
define("_ZOOM_PUBLISHED","Publicado");
define("_ZOOM_SHARED","Compartido");
define("_ZOOM_ROTATE","Rotar im�gen 90 grados");
define("_ZOOM_CLOCKWISE","sentido horario");
define("_ZOOM_CCLOCKWISE","sentido anti-horario");
define("_ZOOM_FLIP_HORIZ","Invertir imagen horizontalmente");
define("_ZOOM_FLIP_VERT","Invertir imagen verticalmente");
define("_ZOOM_PROGRESS_DESCR","Su pedido esta siendo procesado... Por favor espere.");

//Navigation (including Slideshow buttons)
define("_ZOOM_SLIDESHOW","Presentaci�n:");
define("_ZOOM_PREV_IMG","Imagen Anterior");
define("_ZOOM_NEXT_IMG","Siguiente Imagen ");
define("_ZOOM_FIRST_IMG","Primero");
define("_ZOOM_LAST_IMG","Ultimo");
define("_ZOOM_PLAY","Reproducir");
define("_ZOOM_STOP","Detener");
define("_ZOOM_RESET","Reiniciar");
define("_ZOOM_FIRST","Primero");
define("_ZOOM_LAST","Ultimo");
define("_ZOOM_PREVIOUS","Anterior");
define("_ZOOM_NEXT","Siguiente");
define("_ZOOM_IN_DESC", "Pase el cursor del mouse sobre la imagen y presione la tecla Avg.P�g. o Ret.P�g.");

//Gallery actions
define("_ZOOM_SEARCH_BOX","B�squeda r�pida...");
define("_ZOOM_ADVANCED_SEARCH","B�squeda avanzada");
define("_ZOOM_SEARCH_KEYWORD","B�squeda por palabra clave");
define("_ZOOM_IMAGES","im�genes/medios");
define("_ZOOM_IMGFOUND","%s im�genes/medios encontrados - usted est� en la p�gina %s de %s");
define("_ZOOM_SUBGALLERIES","sub-galerias");
define("_ZOOM_ALERT_COMMENTOK","Su comentario fue agregado con �xito!");
define("_ZOOM_ALERT_COMMENTERROR","Usted ya ha hecho un comentario acerca de esta imagen!");
define("_ZOOM_ALERT_VOTE_OK","Su voto hace sido contado! Gracias.");
define("_ZOOM_ALERT_VOTE_ERROR","Usted ya ha votado por esta im�gen!");
define("_ZOOM_WINDOW_CLOSE","Cerrar");
define("_ZOOM_NOPICS","Ninguna imagen/medio en esta Galeria");
define("_ZOOM_PROPERTIES","Propiedades");
define("_ZOOM_COMMENTS","Comentarios");
define("_ZOOM_NO_COMMENTS","No se ha hecho ning�n comentario.");
define("_ZOOM_YOUR_NAME","Su Nombre");
define("_ZOOM_ADD","Agregar");
define("_ZOOM_NAME","Nombre");
define("_ZOOM_DATE","Fecha Agregada");
define("_ZOOM_UNAME","Agregado por");
define("_ZOOM_DESCRIPTION","Descripci�n");
define("_ZOOM_IMGNAME","Nombre");
define("_ZOOM_FILENAME","Nombre de Archivo");
define("_ZOOM_CLICKDOCUMENT","(haga click en el nombre de archivo para abrir el documento)");
define("_ZOOM_KEYWORDS","Palabras Clave");
define("_ZOOM_HITS","clicks/hits");
define("_ZOOM_CLOSE","Cerrar");
define("_ZOOM_NOIMG", "Ninguna imagen/medio encontrado!");
define("_ZOOM_NONAME", "Usted debe proveer un nombre!");
define("_ZOOM_NOCAT", "Ninguna categoria seleccionada!");
define("_ZOOM_EDITPIC", "Editar Imagen/Medio");
define("_ZOOM_SETCATIMG","Definir como Imagen de Galeria");
define("_ZOOM_SETPARENTIMG","Definir como Galeria de im�genes de una Galeria PRINCIPAL");
define("_ZOOM_PASS","Contrase�a");
define("_ZOOM_PASS_REQUIRED","Esta galer�a requiere contrase�a.<br />Por favor ingr�sela en el campo de contrase�a<br />y presione el bot�n de Ir. Gracias.");
define("_ZOOM_PASS_BUTTON","Ir");
define("_ZOOM_PASS_GALLERY","Contrase�a");
define("_ZOOM_PASS_INNCORRECT","Contrase�a Incorrecta");

//Hotlinking
define("_ZOOM_SETTINGS_HOTLINK","Activar proteccion de imagen anti-copiar.");
define("_ZOOM_SETTINGS_HPTOOLTIP","Cuando la proteccion de anti-copiar esta activada, los nombres de archivos de las imagenes y direccion seran ocultados.  Si un usuario intenta utilizar la imagen en otro sitio, la imagen no aparecera.");

//Lightbox
define("_ZOOM_LIGHTBOX","Porta-Im�genes");
define("_ZOOM_LIGHTBOX_GALLERY","Guarde esta galeria!");
define("_ZOOM_LIGHTBOX_ITEM","Guarde este item!");
define("_ZOOM_LIGHTBOX_VIEW","Vea su Porta-Im�genes");
define("_ZOOM_YOUR_LIGHTBOX","Contenido de su Porta-Im�genes:");
define("_ZOOM_LIGHTBOX_EMPTY","Su Porta-Im�genes est� actualmente vac�o.");
define("_ZOOM_LIGHTBOX_ZIPBTN","Crear archivo ZIP");
define("_ZOOM_LIGHTBOX_PLAYLISTBTN","Crear Lista de Reproducci�n & Reproducir");
define("_ZOOM_LIGHTBOX_CATS","Galerias");
define("_ZOOM_LIGHTBOX_TITLEDESCR","T�tulo & Descripci�n");
define("_ZOOM_ACTION","Acci�n");
define("_ZOOM_LIGHTBOX_ADDED","Item agregado a su Porta-Im�genes con �xito!");
define("_ZOOM_LIGHTBOX_NOTADDED","Error agregando �tem a su Porta-Im�genes!");
define("_ZOOM_LIGHTBOX_EDITED","Item editado con �xito!");
define("_ZOOM_LIGHTBOX_NOTEDITED","Error editando �tem!");
define("_ZOOM_LIGHTBOX_DEL","Item eliminado exitosamente de su Porta-Im�genes!");
define("_ZOOM_LIGHTBOX_NOTDEL","Error eliminando item de su Porta-Retratos!");
define("_ZOOM_LIGHTBOX_NOZIP","O Usted ya ha creado un archivo Zip de su Porta-Im�genes o su Porta-Im�genes no contiene items!");
define("_ZOOM_LIGHTBOX_PARSEZIP","Analizando im�genes de la Galeria...");
define("_ZOOM_LIGHTBOX_DOZIP","creando archivo ZIP...");
define("_ZOOM_LIGHTBOX_DLHERE","Usted ahora puede descargar el Porta-Im�genes");
define("_ZOOM_LIGHTBOX_PLSUCCESS","Lista de Reproducci�n creada exitosamente! Necesita refrescar la Ventana del Reproductor.");
define("_ZOOM_LIGHTBOX_PLERROR","Error creando Lista de Reproducci�n.");
define("_ZOOM_LIGHTBOX_NOAUDIO","Usted necesita agregar archivos de audio a su Porta-Im�genes primero!");
define("_ZOOM_LIGHTBOX_NOITEMS","Su Porta-Im�genes parece estar vac�o.");

//EXIF information
define("_ZOOM_EXIF","EXIF");
define("_ZOOM_EXIF_SHOWHIDE","Mostrar/ocultar Metadatos");

//MP3 id3 v1.1 or later information
define("_ZOOM_AUDIO_PLAYING","Reproduciendo:");
define("_ZOOM_AUDIO_CLICKTOPLAY","Haga aqui para reproducir este archivo.");
define("_ZOOM_ID3","ID3");
define("_ZOOM_ID3_SHOWHIDE","Mostrar/ocultar datos ID3");
define("_ZOOM_ID3_LENGTH","Tama�o");
define("_ZOOM_ID3_QUALITY","Calidad");
define("_ZOOM_ID3_TITLE","T�tulo");
define("_ZOOM_ID3_ARTIST","Artista");
define("_ZOOM_ID3_ALBUM","Album");
define("_ZOOM_ID3_YEAR","A�o");
define("_ZOOM_ID3_COMMENT","Comentario");
define("_ZOOM_ID3_GENRE","G�nero");

//Video metadata information
define("_ZOOM_VIDEO_SHOWHIDE","Mostrar/ocultar datos del Video");
define("_ZOOM_VIDEO_PIXELRATIO","Ratio de Pixel");
define("_ZOOM_VIDEO_QUALITY","Calidad del Video");
define("_ZOOM_VIDEO_AUDIOQUALITY","Calidad de Audio");
define("_ZOOM_VIDEO_CODEC","Codec");
define("_ZOOM_VIDEO_RESOLUTION","Resoluci�n");

//rating
define("_ZOOM_RATING","Puntaje");
define("_ZOOM_NOTRATED","No tiene puntaje todav�a!");
define("_ZOOM_VOTE","voto");
define("_ZOOM_VOTES","votos");
define("_ZOOM_RATE0","p�simo");
define("_ZOOM_RATE1","malo");
define("_ZOOM_RATE2","regular");
define("_ZOOM_RATE3","bueno");
define("_ZOOM_RATE4","muy bueno");
define("_ZOOM_RATE5","excelente!");

//special
define("_ZOOM_TOPTEN","M�s vistas");
define("_ZOOM_LASTSUBM","Ultimas enviadas");
define("_ZOOM_LASTCOMM","Ultimas comentadas");
define("_ZOOM_SEARCHRESULTS","Resultados de la b�squeda");
define("_ZOOM_TOPRATED","M�s Votadas");

//ecard
define("_ZOOM_ECARD_SENDAS","Enviar esta imagen como una Postal Electr�nica a un amigo!");
define("_ZOOM_ECARD_YOURNAME","Su nombre");
define("_ZOOM_ECARD_YOUREMAIL","Su direcci�n de e-mail");
define("_ZOOM_ECARD_FRIENDSNAME","El nombre de su amigo");
define("_ZOOM_ECARD_FRIENDSEMAIL","El e-mail de su amigo");
define("_ZOOM_ECARD_MESSAGE","Mensaje");
define("_ZOOM_ECARD_SENDCARD","Enviar Postal");
define("_ZOOM_ECARD_SUCCESS","Su Postal fue enviada con �xito.");
define("_ZOOM_ECARD_CLICKHERE","Haga click aqui para verla!");
define("_ZOOM_ECARD_ERROR","Error enviando Postal a");
define("_ZOOM_ECARD_TURN","Mire la parte de atr�s de esta postal!");
define("_ZOOM_ECARD_TURN2","Mire el frente de esta postal!");
define("_ZOOM_ECARD_SENDER","Enviado a usted por");
define("_ZOOM_ECARD_SUBJ","Usted recibi� una Postal Electr�nica de:");
define("_ZOOM_ECARD_MSG1","envi� una Postal Electr�nica de");
define("_ZOOM_ECARD_MSG2","Haga click en el enlace de abajo para ver su Postal Electr�nica!");
define("_ZOOM_ECARD_MSG3","No responda este e-mail, ya que fue generado autom�ticamente.");
define("_ZOOM_ECARD_ECARDEXPIRED","Lo siento, esta Postal Electr�nica no est� disponible o ha expirado.");

//installation-screen
define ('_ZOOM_INSTALL_CREATE_DIR','La instalaci�n de z00m est� tratando de crear el directorio de Im�genes "images/zoom" ...');
define ('_ZOOM_INSTALL_CREATE_DIR_WM','La instalacion de zOOm esta tratando de crear el directorio de Imagenes "images/zoom/watermarks" ...');
define ('_ZOOM_INSTALL_CREATE_DIR_SUCC','hecho!');
define ('_ZOOM_INSTALL_CREATE_DIR_FAIL','fall�!');
define ('_ZOOM_INSTALL_CREATE_DBASE_SUCC','Base de datos creado exitosamente!');
define ('_ZOOM_INSTALL_UPGRADED_DBASE_SUCC','Base de datos actualizado exitosamente!');
define ('_ZOOM_INSTALL_MESS1','La Galer�a de Im�genes z00m se instal� con �xito.<br>Ya puede crear sus albums de fotos, videos y sonidos!');
define ('_ZOOM_INSTALL_MESS2','NOTA: la primer cosa que deber�a hacer ahora, es ir al men� de componentes de arriba,<br>buscar el �tem "z00m Media Gallery Admin", seleccionarlo y<br>revisar la p�gina de configuraci�n en el panel administrativo.');
define ('_ZOOM_INSTALL_MESS3','Aqu� usted puede cambiar todas las variables de z00m para su configuraci�n.');
define ('_ZOOM_INSTALL_MESS4','No olvide crear una galer�a, y a partir de all�, es su responsabilidad!');
define ('_ZOOM_INSTALL_MESS_FAIL1','La Galer�a z00m NO pudo ser instalada con �xito');
define ('_ZOOM_INSTALL_MESS_FAIL2','Los siguientes directorios deben ser creados y luego cambiarles los permisos a "0777":<br />'
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
define ('_ZOOM_INSTALL_MESS_FAIL3','Una vez que usted ha creado todos los directorios y cambiado sus permisos, vaya a <br /> "Componentes -> z00m Media Gallery" y configure sus opciones.');


//Module Language
define("_ZOOM_M_config","M�dulo");
define("_ZOOM_M_method","M�todo de Visualizaci�n");
define("_ZOOM_M_all","todo");
define("_ZOOM_M_random","aleatorio");
define("_ZOOM_M_newest","nuevo");
define("_ZOOM_M_hits","clicks");
define("_ZOOM_M_votes","votos");
define("_ZOOM_M_count","N�mero de im�genes:");
define("_ZOOM_M_lastup","Ultima actualizaci�n:");
define("_ZOOM_M_admin_count","Mostrar N�mero de im�genes:");
define("_ZOOM_M_admin_lastup","Mostrar Ultima actualizaci�n:");
define("_ZOOM_M_admin_cats","Mostrar categor�as:");
define("_ZOOM_M_admin_meth","Mostrar m�todo:");
define("_ZOOM_M_admin_df","Formato de fecha (j M, H:i):");
define("_ZOOM_M_admin_hits","Mostrar Clicks:");
?>