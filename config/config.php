<?php

#Arquivos diretórios raízes;

$PastaInterna= '';
define('DIRPAGE', "https://{$_SERVER['HTTP_HOST']}/{$PastaInterna}");

if(substr($_SERVER['DOCUMENT_ROOT'], -1) == '/'){
  define('DIRREQ', "https://{$_SERVER['DOCUMENT_ROOT']}{$PastaInterna}");
}else{
  define('DIRREQ', "https://{$_SERVER['DOCUMENT_ROOT']}/{$PastaInterna}");
}

#DIretórios Específicos;
define('DIRIMG', DIRPAGE."public/img");
define('DIRCSS', DIRPAGE."public/css");
define('DIRJS', DIRPAGE."public/js");
define('DIRADM', DIRPAGE."public/adm");

#Acesso ao banco de dados;
define('HOST', "localhost");
define('DB', "smartfast");
define('USER', "root");
define('PW', "");