set names utf8;
drop database if exists clipboard;
create database clipboard default character set utf8 collate utf8_polish_ci;
grant all on clipboard.* to clpadmin@localhost identified by 'sEcRetPassWoRD';
flush privileges;

