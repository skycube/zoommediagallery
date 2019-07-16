<?php
//zOOm Media Gallery//
/**
-----------------------------------------------------------------------
|  zOOm Media Gallery! by Mike de Boer - a multi-gallery component    |
-----------------------------------------------------------------------

-----------------------------------------------------------------------
|                                                                     |
| Author: Mike de Boer, <http://www.mikedeboer.nl>                    |
| Copyright: copyright (C) 2006 by Mike de Boer                       |
| Description: zOOm Media Gallery, a multi-gallery component for      |
|              Joomla!. It's the most feature-rich gallery component  |
|              for Joomla!! For documentation and a detailed list     |
|              of features, check the zOOm homepage:                  |
|              http://www.zoomfactory.org                             |
| Translation: Lu�s Guerra                                            |
| License: GPL                                                        |
| Filename: portuguese.php                                            |
|                                                                     |
-----------------------------------------------------------------------
* @package zOOm Media Gallery
* @author Mike de Boer <mailme@mikedeboer.nl> 
**/
// MOS Intruder Alerts
defined( '_VALID_MOS' ) or die( 'O acesso directo a este recurso n�o � permitido.' );
//Language translation
define("_ZOOM_DATEFORMAT","%d.%m.%Y %H:%M"); // use the PHP strftime Format, more info at http://www.php.net
define("_ZOOM_PICK","Escolha uma galeria");
define("_ZOOM_DELETE","Apagar");
define("_ZOOM_BACK","Voltar");
define("_ZOOM_MAINSCREEN","Menu principal");
define("_ZOOM_BACKTOGALLERY","Voltar � galeria");
define("_ZOOM_INFO_DONE","Feito!");
define("_ZOOM_TOOLTIP", "Dica zOOm");
define("_ZOOM_WARNING", "Aviso zOOm!");

//Gallery admin page
define("_ZOOM_ADMINSYSTEM","Administra��o");
define("_ZOOM_USERSYSTEM","Sistema do utilizador");
define("_ZOOM_ADMIN_TITLE","Administra��o da galeria de media");
define("_ZOOM_USER_TITLE","Galeria de media do utilizador");
define("_ZOOM_CATSMGR","Gestor de galeria");
define("_ZOOM_CATSMGR_DESCR","Crie novas galerias para os seus novos medias; crie, edite e remova-as aqui no gestor de galeria");
define("_ZOOM_SETTINGS_DDONOF","Activar Envio por Drag n Drop");
define("_ZOOM_NEW","Nova galeria");
define("_ZOOM_DEL","Apagar galeria");
define("_ZOOM_ORDERSAVE", "Salvar Ordena��o");
define("_ZOOM_MEDIAMGR","Gestor de media");
define("_ZOOM_MEDIAMGR_DESCR","Mova, edite, apague, procure automaticamente por medias ou envie (m�ltiplos) novos medias manualmente.");
define("_ZOOM_THUMB", "Zoom Thumb Codificador"); 
define("_ZOOM_THUMB_DESCR", "Crie c�digo com o Zoom Thumb para inserir nos seus documentos");
define("_ZOOM_UPLOAD","Enviar arquivo(s)");
define("_ZOOM_EDIT","Editar galeria");
define("_ZOOM_ADMIN_CREATE","Criar base de dados");
define("_ZOOM_ADMIN_CREATE_DESCR","Construa as tabelas da base de dados exigidas, de forma a que possa come�ar a usar o �lbum");
define("_ZOOM_HD_PREVIEW","Visualizar");
define("_ZOOM_HD_CHECKALL","Marcar/Desmarcar tudo");
define("_ZOOM_HD_CREATEDBY","Criado por");
define("_ZOOM_HD_AFTER","Inserir em");
define("_ZOOM_HD_HIDEMSG","Esconder texto 'sem media'");
define("_ZOOM_HD_NAME","T�tulo");
define("_ZOOM_HD_DIR","Direct�rio");
define("_ZOOM_HD_NEW","Nova galeria");
define("_ZOOM_HD_SHARE","Partilhe esta galeria");
define("_ZOOM_SHARE","Partilhar");
define("_ZOOM_UNSHARE","Remover Partilha");
define("_ZOOM_PUBLISH","Publicar");
define("_ZOOM_UNPUBLISH","Remover Publica��o");
define("_ZOOM_TOPLEVEL","N�vel principal");
define("_ZOOM_HD_UPLOAD","Enviar media");
define("_ZOOM_A_ERROR_ERRORTYPE","Tipo de erro");
define("_ZOOM_A_ERROR_IMAGENAME","Nome da imagem");
define("_ZOOM_A_ERROR_NOFFMPEG","<u>FFmpeg</u> n�o detectado");
define("_ZOOM_A_ERROR_NOPDFTOTEXT","<u>PDFtoText</u> n�o detectado");
define("_ZOOM_A_ERROR_NOTINSTALLED","N�o instalado");
define("_ZOOM_A_ERROR_CONFTODB","Erro enquanto salvava configura��o na base de dados!");
define("_ZOOM_A_MESS_NOT_SHURE","* Se n�o tiver a certeza, use o padr�o \"auto\" ");
define("_ZOOM_A_MESS_SAFEMODE1","Nota: \"Modo Seguro\" est� activo, consequentemente � poss�vel que o envio de imagens muito grandes n�o funcione!<br />zOOm recomenda que active o modo de FTP no Sistema de Administra��o.");
define("_ZOOM_A_MESS_SAFEMODE2","Nota: \"Modo Seguro\" est� activo, consequentemente � poss�vel que o envio de medias muito grandes n�o funcione!<br />zOOm recomenda que active o modo FTP no Sistema de Administra��o.");
define("_ZOOM_A_MESS_PROCESSING_FILE","A processar media...");
define("_ZOOM_A_MESS_NOTOPEN_URL","N�o foi possivel abrir a hiperliga��o:");
define("_ZOOM_A_MESS_PARSE_URL","A analisar \"%s\" para imagens... "); // %s = $url
define("_ZOOM_A_MESS_NOJAVA","Se apenas v� uma caixa cinzenta ou est� tendo problemas enquanto descarrega novas imagens, deve ser porque <br />n�o tem o �ltimo java run-time instalado. Visite <a href=\"http://www.java.com\" target=\"_blank\">Java.com</a> <br /> e descarregue a vers�o mais recente.");
define("_ZOOM_SETTINGS","Configura��es");
define("_ZOOM_SETTINGS_DESCR","Modifique e visualize todas as configura��es dispon�veis aqui.");
define("_ZOOM_SETTINGS_TAB1","Sistema");
define("_ZOOM_SETTINGS_TAB2","Media");
define("_ZOOM_SETTINGS_TAB3","Funcionalidades");
define("_ZOOM_SETTINGS_TAB4","Layout");
define("_ZOOM_SETTINGS_TAB5","Marca de �gua");
define("_ZOOM_SETTINGS_TAB6","Modo Seguro");
define("_ZOOM_SETTINGS_TAB7","Accessibilidade");
define("_ZOOM_SETTINGS_TAB8","Repor");
define("_ZOOM_SETTINGS_ERASE","Clique para limpar todos os dados da galeria Zoom e come�ar uma nova. Esta op��o ir� repor as defini��es e remover todas as imagens.");
define("_ZOOM_SETTINGS_CONVTYPE","Tipo de Convers�o de imagem");
define("_ZOOM_SETTINGS_GALLERY_FEATURES","Ver funcionalidades da Galeria");
define("_ZOOM_SETTINGS_VIEW_FEATURES","Ver funcionalidades de Media");
define("_ZOOM_SETTINGS_GALLERY","Ver Galeria");
define("_ZOOM_SETTINGS_VIEW","Ver Media");
define("_ZOOM_SETTINGS_GENERAL_FEATURES","Funcionalidades gerais");
define("_ZOOM_SETTINGS_AUTODET","auto-detectado: ");
define("_ZOOM_SETTINGS_IMGPATH","Caminho para os ficheiros de media:");
define("_ZOOM_SETTINGS_TTIMGPATH","O caminho actual para os media � ");
define("_ZOOM_SETTINGS_CONVSETTINGS","Configura��o da convers�o de medias:");
define("_ZOOM_SETTINGS_IMPATH","Caminho do ImageMagick: ");
define("_ZOOM_SETTINGS_NETPBMPATH"," ou NetPBM: ");
define("_ZOOM_SETTINGS_FFMPEGPATH","Caminho do FFmpeg");
define("_ZOOM_SETTINGS_FFMPEGTOOLTIP","FFmpeg � necess�rio para criar miniaturas dos seus ficheiros de v�deo.<br />As extens�es suportadas s�o: ");
define("_ZOOM_SETTINGS_OVERRIDE_FFMPEG","Usar FFmpeg, mesmo se o zOOm for incapaz de verificar a sua exist�ncia neste sistema.");
define("_ZOOM_SETTINGS_PDFTOTEXTPATH","Caminho do PDFtoText");
define("_ZOOM_SETTINGS_XPDFTOOLTIP","pdf2text, que � parte do pacote Xpdf, � necess�rio para a indexa��o dos ficheiros PDF.");
define("_ZOOM_SETTINGS_OVERRIDE_PDF","Usar PDFtoText, mesmo se zOOm for incapaz de verificar a sua exist�ncia neste sistema.");
define("_ZOOM_SETTINGS_MAXSIZE","Tamanho m�ximo da Imagem: ");
define("_ZOOM_SETTINGS_MAXSIZEKB","Media - incluindo imagens - tamanho m�ximo (em kB): "); //added: 08-08-2006
define("_ZOOM_SETTINGS_MAXSIZEKB_WARNING","O limite de envio deste servidor, definido pelo seu ISP como parte da configura��o PHP, � %s.<br />Desta forma definir um limite maior que este valor n�o ter� utilidade!"); //added: 09-01-2006
define("_ZOOM_SETTINGS_THUMBSETTINGS","Configura��o da miniatura:");
define("_ZOOM_SETTINGS_QUALITY","Qualidade NetPBM e GD2 JPEG: ");
define("_ZOOM_SETTINGS_SIZE","Tamanho m�ximo da miniatura: ");
define("_ZOOM_SETTINGS_TEMPNAME","Nome tempor�rio: ");
define("_ZOOM_SETTINGS_AUTONUMBER","auto-numerar as imagens (ex. 1,2,3)");
define("_ZOOM_SETTINGS_TEMPDESCR","Descri��o tempor�ria: ");
define("_ZOOM_SETTINGS_TITLE","T�tulo da galeria:");
define("_ZOOM_SETTINGS_SUBCATSPG","Numero de colunas das (sub)galerias");
define("_ZOOM_SETTINGS_COLUMNS","Numero de colunas das miniaturas");
define("_ZOOM_SETTINGS_THUMBSPG","Miniaturas por p�gina");
define("_ZOOM_SETTINGS_CMTLENGTH","Tamanho m�ximo para coment�rio");
define("_ZOOM_SETTINGS_CHARS","caracteres");
define("_ZOOM_SETTINGS_GALLERYPREFIX","Prefixo do t�tulo da galeria");
define("_ZOOM_SETTINGS_SHOWOCCSPACE","Mostrar espa�o ocupado no Gestor de Media");
define("_ZOOM_SETTINGS_TEMPLATE_TITLE","Template");
define("_ZOOM_SETTINGS_FEATURES_TITLE","Caracter�sticas ON/OFF");
define("_ZOOM_SETTINGS_CSS_TITLE","Editar folhas de estilo");
define("_ZOOM_SETTINGS_DISPLAY_TITLE","Dados para exibir ON/OFF");
define("_ZOOM_SETTINGS_TEMPLATE_CHOOSE","Seleccione o layout para definir a apar�ncia da sua galeria");
define("_ZOOM_SETTINGS_TEMPLATE_TABLES","Cl�ssico (com tabelas)");
define("_ZOOM_SETTINGS_TEMPLATE_TABLELESS","Moderno (design sem tabelas)");
define("_ZOOM_SETTINGS_COMMENTS","Coment�rios");
define("_ZOOM_SETTINGS_POPUP","PopUp Media");
define("_ZOOM_SETTINGS_CATIMG","Mostrar imagem da categoria");
define("_ZOOM_SETTINGS_SLIDESHOW","Apresenta��o");
define("_ZOOM_SETTINGS_ZOOMLOGO","Mostrar logo zOOm");
define("_ZOOM_SETTINGS_DESCRINGAL","Mostrar Descri��o do Album na Galeria");
define("_ZOOM_SETTINGS_SHOWHITS","Mostrar numero de cliques");
define("_ZOOM_SETTINGS_READEXIF","Ler dados EXIF");
define("_ZOOM_SETTINGS_EXIFTOOLTIP","Esta caracter�stica vai exibir dados adicionais do EXIF e outros metadados IPTC, sem necessidade do m�dulo EXIF para o PHP ser instalado no seu sistema.");
define("_ZOOM_SETTINGS_READID3","Ler mp3 ID3-data");
define("_ZOOM_SETTINGS_ID3TOOLTIP","Esta caracter�stica vai exibir dados adicionais de ID3 v1.1 e v2.0 quando estiver a visualizar os detalhes de um ficheiro mp3.");
define("_ZOOM_SETTINGS_RATING","Classifica��o");
define("_ZOOM_SETTINGS_CSS","Janela Popup");
define("_ZOOM_SETTINGS_CSSZOOM","Galeria zOOm &amp; Visualiza��o de media");
define("_ZOOM_SETTINGS_SUCCESS","Configura��es actualizadas com sucesso!");
define("_ZOOM_SETTINGS_ZOOMING","Aumentar imagens");
define("_ZOOM_SETTINGS_ORDERBY","M�todo de ordena��o das miniaturas; ordenado por");
define("_ZOOM_SETTINGS_CATORDERBY","M�todo de ordena��o da (Sub)galeria; ordenado por");
define("_ZOOM_SETTINGS_NO_POP","Desactivar todos os Popups");
define("_ZOOM_SETTINGS_STANDARD_POP","Popups Comuns");
define("_ZOOM_SETTINGS_LIGHTBOX_POP","Porta-retratos JS Popup");
define("_ZOOM_SETTINGS_LIGHTBOX_SLIDESHOW","<strong><i>Active esta op��o se pretender que as apresenta��es funcionem com o Porta-retratos JS</i></strong>");

define("_ZOOM_SETTINGS_DATE_ASC","Data, crescente");
define("_ZOOM_SETTINGS_DATE_DESC","Data, decrescente");
define("_ZOOM_SETTINGS_FLNM_ASC","Nome do media, crescente");
define("_ZOOM_SETTINGS_FLNM_DESC","Nome do media, decrescente");
define("_ZOOM_SETTINGS_NAME_ASC","Nome, crescente");
define("_ZOOM_SETTINGS_NAME_DESC","Nome, decrescente");
define("_ZOOM_SETTINGS_LBTOOLTIP","Um porta-retratos � como um carrinho de compras preenchido com as imagens que seleccionou e pode ser descarregado como um ficheiro ZIP.");
define("_ZOOM_SETTINGS_SHOWNAME","Mostrar nome");
define("_ZOOM_SETTINGS_SHOWDESCR","Mostrar descri��o");
define("_ZOOM_SETTINGS_SHOWKEYWORDS","Mostrar palavras-chave");
define("_ZOOM_SETTINGS_SHOWDATE","Mostrar data");
define("_ZOOM_SETTINGS_SHOWUNAME","Mostrar nome do utilizador");
define("_ZOOM_SETTINGS_SHOWFILENAME","Mostrar nome do media");
define("_ZOOM_SETTINGS_METABOX","Mostrar caixa flutuante com os detalhes das p�ginas das galerias");
define("_ZOOM_SETTINGS_METABOXTOOLTIP","Desmarque esta caracter�stica para melhorar a velocidade de sua galeria. Eficiente com grandes bases de dados.");
define("_ZOOM_SETTINGS_ECARDS","Cart�es");
define("_ZOOM_SETTINGS_ECARDS_LIFETIME","Tempo dos cart�es");
define("_ZOOM_SETTINGS_ECARDS_ONEWEEK","uma semana");
define("_ZOOM_SETTINGS_ECARDS_TWOWEEKS","duas semanas");
define("_ZOOM_SETTINGS_ECARDS_ONEMONTH","um m�s");
define("_ZOOM_SETTINGS_ECARDS_THREEMONTHS","tr�s meses");
define("_ZOOM_SETTINGS_SHOWSEARCH","Campo de procura em todas as p�ginas");
define("_ZOOM_SETTINGS_BOX_ANIMATE","Caixas animadas");
define("_ZOOM_SETTINGS_BOX_PROPERTIES","Propriedades do estado visual da caixa");
define("_ZOOM_SETTINGS_BOX_META","Metadata do estado visual da caixa");
define("_ZOOM_SETTINGS_BOX_COMMENTS","Coment�rios do estado visual da caixa");
define("_ZOOM_SETTINGS_BOX_RATING","Vota��o do estado visual da caixa");
define("_ZOOM_SETTINGS_TOPTEN","Mostrar link dos \"10 mais\" na p�gina principal");
define("_ZOOM_SETTINGS_LASTSUBM","Mostrar link \"�ltimos medias enviados\" na p�gina principal");
define("_ZOOM_SETTINGS_SETMENUOPTION","Mostrar o link \"Enviar imagens\" no menu do utilizador");
define("_ZOOM_SETTINGS_USEFTP","Usar modo FTP?");
define("_ZOOM_SETTINGS_FTPHOST","Nome do anfitri�o");
define("_ZOOM_SETTINGS_FTPUNAME","Nome do Utilizador");
define("_ZOOM_SETTINGS_FTPPASS","Palavra-passe");
define("_ZOOM_SETTINGS_FTPWARNING","Aten��o: A palavra-passe n�o � guardada com seguran�a!");
define("_ZOOM_SETTINGS_FTPHOSTDIR","Direct�rio no Anfitri�o");
define("_ZOOM_SETTINGS_MESS_FTPHOSTDIR","Por favor forne�a o caminho do Jommla! pela raiz FTP aqui. IMPORTANTE: Terminar <b>sem</b> a barra ou barra invertida!");
define("_ZOOM_SETTINGS_GROUP","Grupo");
define("_ZOOM_SETTINGS_PRIV_DESCR","Pode  mudar as permiss�es de cada grupo conhecido no Joomla! e mudar por este meio as permiss�es de cada utilizador membro desse grupo!<br/> Um utilizador, na teoria, pode fazer as seguintes ac��es:  enviar media(s), editar/apagar media(s), cr�ar/editar/apagar galerias(partilhadas).<br/> O que eles podem e n�o podem fazer no mundo real � consigo.");
define("_ZOOM_SETTINGS_CLOSE","Mostra link \"Fechar\" no popup");
define("_ZOOM_SETTINGS_MAINSCREEN","Mostrar barra de navega��o no menu principal");
define("_ZOOM_SETTINGS_NAVBUTTONS","Mostrar bot�es da barra de navega��o no popup");
define("_ZOOM_SETTINGS_PROPERTIES","Mostrar propriedades abaixo do media");
define("_ZOOM_SETTINGS_MEDIAFOUND","Mostrar texto \"Media encontrado\" na galeria");
define("_ZOOM_SETTINGS_ANONYMOUS_COMMENTS","Permitir coment�rio an�nimo");
define("_ZOOM_SETTINGS_WM_ENABLE_TITLE","Activar fun��o"); 
define("_ZOOM_SETTINGS_WM_TITLE", "Sua marca de �gua"); 
define("_ZOOM_SETTINGS_WM_DESCR", "Sua marca de �gua aparece por cima das imagens neste site. " 
    . "A imagem estar� vis�vel, mas os visitantes n�o ser�o tentados a tentar copiar ou imprimir." 
    . "<br /><br />Sugest�o: Pode usar o logotipo da empresa como marca de �gua. " 
    . "Por favor, tenha a certeza que definiu o fundo da marca de �gua como transparente!"); 
define("_ZOOM_SETTINGS_WM_IMG", "Imagem"); 
define("_ZOOM_SETTINGS_WM_NOWATERMARKS", "N�o foi encontrada nenhuma Marca de �gua. Pode enviar uma nova marca de �gua abaixo."); 
define("_ZOOM_SETTINGS_WM_PLACEMENT_TITLE", "Localiza��o"); 
define("_ZOOM_SETTINGS_WM_PLACEMENT_DESCR", "Voc� pode definir a posi��o da marca de �gua na imagem-alvo " 
    . "selecionando uma das posi��es no quadro cinza abaixo."); 
define("_ZOOM_SETTINGS_WM_FILE","Envio da marca de �gua"); 
define("_ZOOM_SETTINGS_WM_UPLOAD_SUCCESS","Marca de �gua foi enviada com sucesso!"); 
define("_ZOOM_SETTINGS_WM_UPLOAD_FAIL","O envio da marca de �gua falhou."); 
define("_ZOOM_SETTINGS_WM_DEL_SUCCESS","Marca de �gua apagada com sucesso!"); 
define("_ZOOM_SETTINGS_WM_DEL_FAIL","A Marca de �gua n�o p�de ser apagada."); 
define("_ZOOM_SYSTEM_TITLE","Configura��es do Sistema");
define("_ZOOM_YES","Sim");
define("_ZOOM_NO","N�o");
define("_ZOOM_VISIBLE","Vis�vel");
define("_ZOOM_HIDDEN","Ocultar");
define("_ZOOM_SAVE","Salvar");
define("_ZOOM_MOVEFILES","Mover media");
define("_ZOOM_BUTTON_MOVE","Mover");
define("_ZOOM_MOVEFILES_STEP1","Seleccione a galeria de destino e mova os media");
define("_ZOOM_ALERT_MOVE","%s medias movidos com sucesso, %s medias n�o podem ser movidos.");
define("_ZOOM_OPTIMIZE","Optimizar tabelas");
define("_ZOOM_OPTIMIZE_DESCR","A Galeria de Imagens zOOm usa muito as tabelas e cria assim muitos dados sem import�ncia. Clique aqui para remover o lixo.");
define("_ZOOM_OPTIMIZE_SUCCESS","A Galeria de Imagens zOOm foi optimizada!");
define("_ZOOM_UPDATE","Actualizar Galeria de Imagens zOOm");
define("_ZOOM_UPDATE_DESCR","Adicionar novas funcionalidades, solucionar problemas e resolver erros! Visite <a href=\"http://www.zoomfactory.org\" target=\"_blank\">www.zoomfactory.org</a> para as �ltimas actualiza��es!");
define("_ZOOM_UPDATE_XMLDATE","Data da �ltima actualiza��o");
define("_ZOOM_UPDATE_NOUPDATES","nenhuma actualiza��o ainda!"); // added 11-08
define("_ZOOM_UPDATE_PACKAGE","Arquivo ZIP de actualiza��o: ");
define("_ZOOM_CREDITS","Sobre a Galeria de Imagens zOOm &amp; Cr�ditos");

//Image actions
define("_ZOOM_DISKSPACEUSAGE","O espa�o usado pela galeria %s �");
define("_ZOOM_UPLOAD_SINGLE","ficheiro (ZIP) �nico");
define("_ZOOM_UPLOAD_MULTIPLE","Multiplos ficheiros");
define("_ZOOM_UPLOAD_DRAGNDROP","Arrastar & Soltar");
define("_ZOOM_UPLOAD_SCANDIR","Pesquisar direct�rio");
define("_ZOOM_UPLOAD_INTRO","Clique no bot�o <b>Procurar</b> para localizar o media a enviar.");
define("_ZOOM_UPLOAD_STEP1","1. Seleccione o n�mero de medias que deseja enviar: ");
define("_ZOOM_UPLOAD_STEP2","2. Seleccione a galeria para onde quer enviar os medias: ");
define("_ZOOM_UPLOAD_STEP3","3. Use o bot�o Procurar... para encontrar os medias no seu computador");
define("_ZOOM_SCAN_STEP1","Step 1: Forne�a um local para procurar por meias...");
define("_ZOOM_SCAN_STEP2","Step 2: Seleccione os medias que deseja enviar...");
define("_ZOOM_SCAN_STEP3","Step 3: zOOm processa os arquivos seleccionados...");
define("_ZOOM_SCAN_STEP1_DESCR","O local pode ser tanto uma hiperliga��o como um direct�rio no Servidor.<br />&nbsp;   Dica: enviar medias por FTP para um directorio no seu servidor, e indique o caminho aqui!");
define("_ZOOM_SCAN_STEP2_DESCR1","A processar");
define("_ZOOM_SCAN_STEP2_DESCR2","Como um direct�rio local");
define("_ZOOM_FORMCREATE_NAME","Nome");
define("_ZOOM_FORM_IMAGEFILE","Media");
define("_ZOOM_FORM_IMAGEFILTER","Tipos de medias suportados");
define("_ZOOM_FORM_INGALLERY","Na galeria");
define("_ZOOM_FORM_SETFILENAME","Utilizar o nome dos arquivos originais.");
define("_ZOOM_FORM_IGNORESIZES","Ignorar dimens�o m�xima da imagem pr�-configurada"); //added: 12-08
define("_ZOOM_FORM_LOCATION","Local");
define("_ZOOM_BUTTON_SCAN","Enviar hiperliga��o ou diret�rio");
define("_ZOOM_BUTTON_UPLOAD","Upload");
define("_ZOOM_BUTTON_EDIT","Editar");
define("_ZOOM_BUTTON_CREATE","Criar");
define("_ZOOM_CONFIRM_WIPE","Aten��o!\\n Executar esta fun��o ir� limpar completamente a sua galeria zOOm e remover todas as imagens e galerias.\\n\\n Tem a certeza que quer continuar?");
define("_ZOOM_CONFIRM_DEL","Esta op��o vai remover a galeria completamente, incluindo as imagens!\\n Deseja prosseguir?");
define("_ZOOM_CONFIRM_DELMEDIUM","Vai remover completamente este media!\\n Deseja prosseguir?");
define("_ZOOM_ALERT_DEL","A galeria foi apagada!");
define("_ZOOM_ALERT_NOCAT","Nenhuma galeria foi seleccionada!");
define("_ZOOM_ALERT_NOMEDIA","Nenhuma imagem seleccionada!");
define("_ZOOM_ALERT_EDITOK","Os campos da galeria foram editados com sucesso!");
define("_ZOOM_ALERT_NEWGALLERY","Nova galeria criada.");
define("_ZOOM_ALERT_NONEWGALLERY","A galeria n�o foi criada!");
define("_ZOOM_ALERT_EDITIMG","As propriedades do media foram editadas com sucesso.");
define("_ZOOM_ALERT_DELPIC","Media apagado com sucesso.");
define("_ZOOM_ALERT_NODELPIC","Media n�o pode ser apagado!");
define("_ZOOM_ALERT_MOVEFAILURE","Media n�o pode ser movido."); //added: 08-08-2006
define("_ZOOM_ALERT_NOPICSELECTED","Nenhum media seleccionado.");
define("_ZOOM_ALERT_NOPICSELECTED_MULT","Nenhum media seleccionado.");
define("_ZOOM_ALERT_UPLOADOK","Media enviado com sucesso!");
define("_ZOOM_ALERT_UPLOADSOK","Medias enviados com sucesso!");
define("_ZOOM_ALERT_WRONGFORMAT","Formato incorrecto da imagem.");
define("_ZOOM_ALERT_WRONGFORMAT_MULT","Formato incorrecto.");
define("_ZOOM_ALERT_TOOBIG","O tamanho do media � muito grande; %s � o max. permitido"); //added 08-08-2006
define("_ZOOM_ALERT_IMGERROR","Erro ao ajustar o tamanho da imagem/ criar miniatura.");
define("_ZOOM_ALERT_PCLZIPERROR","Erro enquanto extraia o ficheiro.");
define("_ZOOM_ALERT_INDEXERROR","Erro enquanto indexava o documento.");
define("_ZOOM_ALERT_WATERMARKERROR","Erro enquanto aplicava a marca de �gua na imagem.");
define("_ZOOM_ALERT_IMGFOUND","imagem(s) encontrada(s).");
define("_ZOOM_INFO_CHECKCAT","Por favor escolha uma galeria antes de clicar no bot�o de envio!");
define("_ZOOM_BUTTON_ADDIMAGES","Adicionar media");
define("_ZOOM_BUTTON_REMIMAGES","Remover media");
define("_ZOOM_INFO_PROCESSING","A processar ficheiro:");
define("_ZOOM_ITEMEDIT_TAB1","Propriedades");
define("_ZOOM_ITEMEDIT_TAB2","Membros");
define("_ZOOM_ITEMEDIT_TAB3","Ac��es");
define("_ZOOM_USERSLIST_LINE1",">>Seleccione os membros deste �tem<<");
define("_ZOOM_USERSLIST_ALLOWALL",">>Acesso P�blico<<");
define("_ZOOM_USERSLIST_MEMBERSONLY",">>Somente Membros<<");
define("_ZOOM_PUBLISHED","Publicado");
define("_ZOOM_SHARED","Partilhado");
define("_ZOOM_ROTATE","Rodar a imagem 90 graus");
define("_ZOOM_CLOCKWISE","Sentido ponteiros do rel�gio");
define("_ZOOM_CCLOCKWISE","Sentido contr�ro aos ponteiros do rel�gio");
define("_ZOOM_FLIP_HORIZ","Inverter imagem horizontalmente");
define("_ZOOM_FLIP_VERT","Inverter imagem verticalmente");
define("_ZOOM_PROGRESS_DESCR","O seu pedido esta a ser processado... Por favor seja paciente.");

//Navigation (including Slideshow buttons)
define("_ZOOM_SLIDESHOW","Apresenta��o:");
define("_ZOOM_PREV_IMG","Media anterior");
define("_ZOOM_NEXT_IMG","Pr�ximo Media");
define("_ZOOM_FIRST_IMG","Primeiro Media");
define("_ZOOM_LAST_IMG","�ltimo Media");
define("_ZOOM_PLAY","Iniciar");
define("_ZOOM_STOP","Parar");
define("_ZOOM_RESET","Reiniciar");
define("_ZOOM_FIRST","Primeiro");
define("_ZOOM_LAST","�ltimo");
define("_ZOOM_PREVIOUS","Anterior");
define("_ZOOM_NEXT","Pr�ximo");
define("_ZOOM_IN_DESC", "Coloque o seu rato sobre a imagem e pressione a tecla CIMA ou BAIXO.");

//Gallery actions
define("_ZOOM_SEARCH_BOX","Procurar nesta galeria...");
define("_ZOOM_ADVANCED_SEARCH","Procura avan�ada");
define("_ZOOM_SEARCH_KEYWORD","Procurar por palavra-chave");
define("_ZOOM_IMAGES","medias");
define("_ZOOM_IMGFOUND","%s medias encontrados - voc� est� na p�gina %s de %s");
define("_ZOOM_SUBGALLERIES","Sub-galerias");
define("_ZOOM_ALERT_COMMENTOK","O seu coment�rio foi adicionado com sucesso!");
define("_ZOOM_ALERT_COMMENTERROR","J� comentou esta imagem!");
define("_ZOOM_ALERT_VOTE_OK","O seu voto foi contabilizado! Obrigado.");
define("_ZOOM_ALERT_VOTE_ERROR","J� votou nesta imagem!");
define("_ZOOM_WINDOW_CLOSE","Fechar");
define("_ZOOM_NOPICS","Nenhum media na Galeria");
define("_ZOOM_PROPERTIES","Propriedades");
define("_ZOOM_COMMENTS","Coment�rios");
define("_ZOOM_NO_COMMENTS","Nenhum coment�rio adicionado ainda.");
define("_ZOOM_SAYS","diz");
define("_ZOOM_YOUR_NAME","Nome");
define("_ZOOM_ADD","Adicionar");
define("_ZOOM_NAME","Nome");
define("_ZOOM_DATE","Data adicionada");
define("_ZOOM_UNAME","Adicionado por");
define("_ZOOM_DESCRIPTION","Descri��o");
define("_ZOOM_IMGNAME","Nome");
define("_ZOOM_FILENAME","Nome do Media");
define("_ZOOM_CLICKDOCUMENT","(clique no nome do media para abrir o documento)");
define("_ZOOM_KEYWORDS","Palavras-Chave");
define("_ZOOM_HITS","Cliques");
define("_ZOOM_CLOSE","Fechar");
define("_ZOOM_NOIMG", "Nenhum media encontrado!");
define("_ZOOM_NONAME", "Tem de fornecer um nome!");
define("_ZOOM_NOCAT", "Nenhuma categoria seleccionada!");
define("_ZOOM_EDITPIC", "Editar Media");
define("_ZOOM_SETCATIMG","Definir como imagem da galeria");
define("_ZOOM_SETPARENTIMG","Definir como imagem da galeria PRINCIPAL");
define("_ZOOM_PASS","Palavra-passe");
define("_ZOOM_PASS_REQUIRED","Esta galeria precisa de uma palavra-passe.<br />Por favor, preencha o campo da palavra-passe<br />e pressione o bot�o OK. Obrigado.");
define("_ZOOM_PASS_BUTTON","Ir");
define("_ZOOM_PASS_GALLERY","Palavra-passe");
define("_ZOOM_PASS_INNCORRECT","Palavra-passe Incorreta");

//Lightbox
define("_ZOOM_LIGHTBOX","Porta-Retratos");
define("_ZOOM_LIGHTBOX_GALLERY","Guarde esta galeria!");
define("_ZOOM_LIGHTBOX_ITEM","Guarde este item!");
define("_ZOOM_LIGHTBOX_VIEW","Ver seu porta-retratos");
define("_ZOOM_YOUR_LIGHTBOX","Conteudo do seu porta-retratos:");
define("_ZOOM_LIGHTBOX_EMPTY","O seu porta-retratos est� actualmente vazio.");
define("_ZOOM_LIGHTBOX_ZIPBTN","Criar ficheiro ZIP");
define("_ZOOM_LIGHTBOX_PLAYLISTBTN","Criar Playlist &amp; Tocar");
define("_ZOOM_LIGHTBOX_CATS","Galerias");
define("_ZOOM_LIGHTBOX_TITLEDESCR","T�tulo &amp; Descri��o");
define("_ZOOM_ACTION","Ac��o");
define("_ZOOM_LIGHTBOX_ADDED","�tem adicionado ao porta-retratos com sucesso!");
define("_ZOOM_LIGHTBOX_NOTADDED","Este item j� foi adicionado ao seu porta-retratos!");
define("_ZOOM_LIGHTBOX_EDITED","�tem editado com sucesso!");
define("_ZOOM_LIGHTBOX_NOTEDITED","Erro ao editar �tem!");
define("_ZOOM_LIGHTBOX_DEL","�tem removido do seu porta-retratos com sucesso!");
define("_ZOOM_LIGHTBOX_NOTDEL","Erro ao remover o item do seu porta-retratos!");
define("_ZOOM_LIGHTBOX_NOZIP","J� criou um arquivo Zip do seu porta-retratos ou o seu porta-retratos n�o cont�m nenhum �tem!");
define("_ZOOM_LIGHTBOX_PARSEZIP","A analizar imagens da galeria...");
define("_ZOOM_LIGHTBOX_DOZIP","criando arquivo ZIP...");
define("_ZOOM_LIGHTBOX_DLHERE","Pode descarregar o porta-retratos");
define("_ZOOM_LIGHTBOX_PLSUCCESS","Playlist criado com sucesso! Precisa de actualizar a janela do Player.");
define("_ZOOM_LIGHTBOX_PLERROR","Erro ao criar Playlist.");
define("_ZOOM_LIGHTBOX_NOAUDIO","Primeiro precisa adicionar ficheiros de �udio ao porta-retratos!");
define("_ZOOM_LIGHTBOX_NOITEMS","O seu porta-retratos parece estar vazio.");

//EXIF information
define("_ZOOM_EXIF","EXIF");
define("_ZOOM_EXIF_SHOWHIDE","Mostrar/ esconder Metadata");

//MP3 id3 v1.1 or later information
define("_ZOOM_AUDIO_PLAYING","A reproduzir:");
define("_ZOOM_AUDIO_CLICKTOPLAY","Clique aqui para reproduzir este ficheiro.");
define("_ZOOM_ID3","ID3");
define("_ZOOM_ID3_SHOWHIDE","Mostrar/ esconder ID3-tag data");
define("_ZOOM_ID3_LENGTH","Tamanho");
define("_ZOOM_ID3_QUALITY","Qualidade");
define("_ZOOM_ID3_TITLE","T�tulo");
define("_ZOOM_ID3_ARTIST","Artista");
define("_ZOOM_ID3_ALBUM","�lbum");
define("_ZOOM_ID3_YEAR","Ano");
define("_ZOOM_ID3_COMMENT","Coment�rio");
define("_ZOOM_ID3_GENRE","Genero");

//Video metadata information
define("_ZOOM_VIDEO_SHOWHIDE","Mostrar/ esconder dados do video");
define("_ZOOM_VIDEO_PIXELRATIO","Taxa de Pixeis");
define("_ZOOM_VIDEO_QUALITY","Qualidade do V�deo");
define("_ZOOM_VIDEO_AUDIOQUALITY","Qualidade de Audio");
define("_ZOOM_VIDEO_CODEC","Codec");
define("_ZOOM_VIDEO_RESOLUTION","Resolu��o");

//rating
define("_ZOOM_RATING","Avalia��o");
define("_ZOOM_NOTRATED","Ainda n�o foi avaliado!");
define("_ZOOM_VOTE","voto");
define("_ZOOM_VOTES","votos");
define("_ZOOM_RATE0","mau");
define("_ZOOM_RATE1","fraco");
define("_ZOOM_RATE2","m�dio");
define("_ZOOM_RATE3","bom");
define("_ZOOM_RATE4","muito bom");
define("_ZOOM_RATE5","perfeito!");

//special
define("_ZOOM_TOPTEN","Dez primeiros");
define("_ZOOM_LASTSUBM","�ltimas enviadas");
define("_ZOOM_LASTCOMM","�ltimas comentadas");
define("_ZOOM_SEARCHRESULTS","Resultados da pesquisa");
define("_ZOOM_TOPRATED","Mais Votadas");

//ecard
define("_ZOOM_ECARD_SENDAS","Enviar esta imagem como um cart�o para um amigo!");
define("_ZOOM_ECARD_YOURNAME","O seu nome");
define("_ZOOM_ECARD_YOUREMAIL","O seu endere�o de e-mail");
define("_ZOOM_ECARD_FRIENDSNAME","O nome do seu amigo");
define("_ZOOM_ECARD_FRIENDSEMAIL","O e-mail do seu amigo");
define("_ZOOM_ECARD_MESSAGE","Menssagem");
define("_ZOOM_ECARD_SENDCARD","Enviar cart�o");
define("_ZOOM_ECARD_SUCCESS","O seu cart�o foi enviado com sucesso.");
define("_ZOOM_ECARD_CLICKHERE","Clique aqui para v�-lo!");
define("_ZOOM_ECARD_ERROR","Erro ao enviar cart�o para");
define("_ZOOM_ECARD_TURN","Veja as costas deste Cart�o!");
define("_ZOOM_ECARD_TURN2","Veja a frente deste Cart�o!");
define("_ZOOM_ECARD_SENDER","Enviado para si por");
define("_ZOOM_ECARD_SUBJ","Recebeu um cart�o de:");
define("_ZOOM_ECARD_MSG1","Enviou para si um cart�o de");
define("_ZOOM_ECARD_MSG2","Clique na hiperliga��o abaixo para ver o seu cart�o pessoal!");
define("_ZOOM_ECARD_MSG3","N�o responda este e-mail, pois ele foi gerado automaticamente.");

//installation-screen
define ('_ZOOM_INSTALL_CREATE_DIR','A instala��o do zOOm est� a criar o direct�rio de imagens "images/zoom" ...');
define ('_ZOOM_INSTALL_CREATE_DIR_WM','A instala��o do zOOm est� a tentar criar o direct�rio de imagens "images/zoom/watermarks" ...');
define ('_ZOOM_INSTALL_CREATE_DIR_SUCC','feito!');
define ('_ZOOM_INSTALL_CREATE_DIR_FAIL','falhou!');
define ('_ZOOM_INSTALL_CREATE_DBASE_SUCC','Base de Dados criada com sucesso!');
define ('_ZOOM_INSTALL_UPGRADED_DBASE_SUCC','Base de Dados atualizada com sucesso!');
define ('_ZOOM_INSTALL_MESS1','A Galeria de imagens zOOm foi instalada com sucesso.<br>J� pode criar os seus albuns!');
define ('_ZOOM_INSTALL_MESS2','NOTA: A primeira coisa que deve fazer agora, � ir ao menu dos componentes acima,<br>procurar pelo t�tulo "Administra��o da Galeria de Media", clique na hiperliga��o e <br>visualize o painel de administra��o.');
define ('_ZOOM_INSTALL_MESS3','Aqui pode ajustar todas as vari�veis do zOOm para a sua configura��o.');
define ('_ZOOM_INSTALL_MESS4','N�o se esque�a de criar uma Galeria, e est� no caminho certo.');
define ('_ZOOM_INSTALL_MESS_FAIL1','A Galeria zOOM n�o p�de ser instalada com sucesso');
define ('_ZOOM_INSTALL_MESS_FAIL2','Os seguintes direct�rios devem ser criados e dever� mudar as suas permiss�e para "0777":<br />'
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
define ('_ZOOM_INSTALL_MESS_FAIL3','Uma vez que tenha criado todos os direct�rios e mudado as permiss�es, v� a <br /> "Components -> Galeria de Imagem zOOm" e defina as suas configura��es.');
?>