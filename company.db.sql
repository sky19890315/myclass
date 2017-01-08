 #创建数据库
 create database sky default character set utf8;
 
 set names utf8;
 
 use sky;
 
 #创建表 lanke_download

 CREATE TABLE `lanke_download` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `title` varchar(200) NOT NULL DEFAULT '',
  `ename` varchar(200) NOT NULL DEFAULT '',
  `etitle` varchar(300) NOT NULL DEFAULT '',
  `url` varchar(300) NOT NULL DEFAULT '',
  `keywords` varchar(300) NOT NULL DEFAULT '',
  `description` varchar(400) NOT NULL DEFAULT '',
  `contents` text NOT NULL,
  `ekeywords` varchar(300) NOT NULL DEFAULT '',
  `edescription` varchar(400) NOT NULL DEFAULT '',
  `econtents` text NOT NULL,
  `filename` varchar(400) NOT NULL DEFAULT '',
  `pid` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `time` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `url` (`url`)
);

#默认引擎和字符集 ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 

 #创建表  lanke_feedback
 
 CREATE TABLE `lanke_feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL DEFAULT '',
  `name` varchar(50) NOT NULL DEFAULT '',
  `tel` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `add` varchar(200) NOT NULL DEFAULT '',
  `contents` varchar(500) NOT NULL DEFAULT '',
  `time` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
);

 #创建表 lanke_flash
 
CREATE TABLE `lanke_flash` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL DEFAULT '',
  `link` varchar(300) NOT NULL DEFAULT '',
  `photo` varchar(100) NOT NULL DEFAULT '',
  `sort` int(11) NOT NULL DEFAULT '0',
  `description` varchar(400) NOT NULL DEFAULT '',
  `edescription` varchar(400) NOT NULL DEFAULT '',
  `type` varchar(30) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
); 

 #创建表 lanke_inquiry 
 
 CREATE TABLE `lanke_inquiry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product` varchar(100) NOT NULL DEFAULT '',
  `num` varchar(50) NOT NULL DEFAULT '0',
  `name` varchar(30) NOT NULL DEFAULT '',
  `company` varchar(50) NOT NULL DEFAULT '',
  `add` varchar(200) NOT NULL DEFAULT '',
  `tel` varchar(50) NOT NULL DEFAULT '',
  `fax` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `contents` varchar(500) NOT NULL DEFAULT '',
  `time` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
);

 #创建表 lanke_inside 
 
CREATE TABLE `lanke_inside` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `keyword` varchar(50) NOT NULL DEFAULT '',
  `url` varchar(300) NOT NULL DEFAULT '',
  `ekeyword` varchar(100) NOT NULL DEFAULT '',
  `eurl` varchar(300) NOT NULL DEFAULT '',
  `number` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
);

 #创建表   lanke_link 

 CREATE TABLE `lanke_link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `url` varchar(500) NOT NULL DEFAULT '',
  `ename` varchar(100) NOT NULL DEFAULT '',
  `eurl` varchar(500) NOT NULL DEFAULT '',
  `sort` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
);

  #创建表  lanke_list
 
CREATE TABLE `lanke_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `ename` varchar(200) NOT NULL DEFAULT '',
  `pid` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `title` varchar(200) NOT NULL DEFAULT '',
  `etitle` varchar(200) NOT NULL DEFAULT '',
  `url` varchar(300) NOT NULL DEFAULT '',
  `keywords` varchar(200) NOT NULL DEFAULT '',
  `ekeywords` varchar(200) NOT NULL DEFAULT '',
  `description` varchar(400) NOT NULL DEFAULT '',
  `edescription` varchar(400) NOT NULL DEFAULT '',
  `sort` tinyint(1) NOT NULL DEFAULT '1',
  `nav` tinyint(1) NOT NULL DEFAULT '1',
  `type` varchar(30) NOT NULL DEFAULT '',
  `link` varchar(200) NOT NULL DEFAULT '',
  `elink` varchar(200) NOT NULL DEFAULT '',
  `contents` text NOT NULL,
  `econtents` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `url` (`url`)
); 
 
  #创建表 lanke_new 
 
CREATE TABLE `lanke_new` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL DEFAULT '',
  `url` varchar(300) NOT NULL DEFAULT '',
  `etitle` varchar(300) NOT NULL DEFAULT '',
  `ekeywords` varchar(300) NOT NULL DEFAULT '',
  `edescription` varchar(400) NOT NULL DEFAULT '',
  `econtents` text NOT NULL,
  `keywords` varchar(300) NOT NULL DEFAULT '',
  `description` varchar(400) NOT NULL DEFAULT '',
  `contents` text NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `bid` int(11) NOT NULL,
  `sort` int(11) NOT NULL DEFAULT '0',
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `url_2` (`url`),
  KEY `url` (`url`)
);

 #创建表  lanke_photo 
 
CREATE TABLE `lanke_photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `title` varchar(200) NOT NULL DEFAULT '',
  `ename` varchar(200) NOT NULL DEFAULT '',
  `etitle` varchar(300) NOT NULL DEFAULT '',
  `url` varchar(300) NOT NULL DEFAULT '',
  `keywords` varchar(300) NOT NULL DEFAULT '',
  `description` varchar(400) NOT NULL DEFAULT '',
  `contents` text NOT NULL,
  `ekeywords` varchar(300) NOT NULL DEFAULT '',
  `edescription` varchar(400) NOT NULL DEFAULT '',
  `econtents` text NOT NULL,
  `thumb` varchar(100) NOT NULL DEFAULT '',
  `photo` varchar(400) NOT NULL DEFAULT '',
  `pid` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `url` (`url`)
); 
 
 #创建表  lanke_product
 
  CREATE TABLE `lanke_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `title` varchar(200) NOT NULL DEFAULT '',
  `url` varchar(300) NOT NULL DEFAULT '',
  `keywords` varchar(300) NOT NULL DEFAULT '',
  `description` varchar(400) NOT NULL DEFAULT '',
  `contents` text NOT NULL,
  `ename` varchar(200) NOT NULL DEFAULT '',
  `etitle` varchar(300) NOT NULL DEFAULT '',
  `ekeywords` varchar(300) NOT NULL DEFAULT '',
  `edescription` varchar(400) NOT NULL DEFAULT '',
  `econtents` text NOT NULL,
  `pid` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `photo` varchar(400) NOT NULL DEFAULT '',
  `thumb` varchar(100) NOT NULL DEFAULT '',
  `property1` varchar(200) NOT NULL DEFAULT '',
  `property2` varchar(200) NOT NULL DEFAULT '',
  `property3` varchar(200) NOT NULL DEFAULT '',
  `property4` varchar(200) NOT NULL,
  `eproperty1` varchar(200) NOT NULL DEFAULT '',
  `eproperty2` varchar(200) NOT NULL DEFAULT '',
  `eproperty3` varchar(200) NOT NULL DEFAULT '',
  `eproperty4` varchar(200) NOT NULL DEFAULT '',
  `sort` int(11) NOT NULL DEFAULT '0',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `url` (`url`)
); 

# 创建表 lanke_user

CREATE TABLE `lanke_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL,
  PRIMARY KEY (`id`)
);

# 创建表  lanke_tags

CREATE TABLE `lanke_tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `ename` varchar(100) NOT NULL DEFAULT '',
  `type` varchar(10) NOT NULL DEFAULT '',
  `sort` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
);
 
 
 #lanke_download #
# lanke_feedback #
# lanke_flash    #
# lanke_inquiry  #
# lanke_inside   #
# lanke_link     #
# lanke_list     #
# lanke_new      #
# lanke_photo    #
# lanke_product  #
# lanke_tags     #
# lanke_user 
 
 
 
 
 
