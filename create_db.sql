create database test default character set utf8;

set names utf8;

use test;

create table bbsInfo
(
bbsId int auto_increment primary key,
title varchar(20) not null,
clickTimes int default 0,
bbsTime timestamp default current_timestamp
);

insert into bbsInfo(title,clickTimes)values('DotNet会话讲解',0);


insert into bbsInfo(title,clickTimes)values('netajax开发详解'37);


insert into bbsInfo(title,clickTimes)values('全局文件的方法',3);


insert into bbsInfo(title,clickTimes)values('web.cofig的作用',5);


insert into bbsInfo(title,clickTimes)values('第三方插件开发',70);


insert into bbsInfo(title,clickTimes)values('连接池技术',10);


insert into bbsInfo(title,clickTimes)values('在线人员统计',30);


insert into bbsInfo(title,clickTimes)values('程序员60秒',90);


insert into bbsInfo(title,clickTimes)values('十分钟学会DotNet',60);


insert into bbsInfo(title,clickTimes)values('DotNet台前幕后',77);


insert into bbsInfo(title,clickTimes)values('社会调查案例',10);


insert into bbsInfo(title,clickTimes)values('网站天气报道',57);


insert into bbsInfo(title,clickTimes)values('程序员上班那点事',100);


select * from bbsInfo;






























