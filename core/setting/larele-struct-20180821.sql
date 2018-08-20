-- Adminer 4.6.3 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';

CREATE DATABASE `larele` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `larele`;

DROP TABLE IF EXISTS `lr_posts`;
CREATE TABLE `lr_posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `digest` text COLLATE utf8_unicode_ci COMMENT '摘要',
  `content` text COLLATE utf8_unicode_ci,
  `raw_content` text COLLATE utf8_unicode_ci,
  `create_time` int(10) unsigned zerofill DEFAULT NULL,
  `update_time` int(10) unsigned zerofill DEFAULT NULL,
  `uid` int(10) unsigned DEFAULT NULL,
  `urlalia` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '链接别名',
  `sort` tinyint(4) NOT NULL DEFAULT '0' COMMENT '排序值，越小越优先(这样设计更方便)',
  `hide` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否隐藏',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `lr_remind`;
CREATE TABLE `lr_remind` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `uid` int(10) unsigned DEFAULT NULL,
  `cretime` int(10) unsigned zerofill DEFAULT NULL COMMENT '系统创建提醒的时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `lr_reply`;
CREATE TABLE `lr_reply` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `content` text COLLATE utf8_unicode_ci,
  `uid` int(10) unsigned DEFAULT NULL,
  `pid` int(10) unsigned DEFAULT NULL COMMENT '帖子id',
  `create_time` int(10) unsigned zerofill DEFAULT NULL,
  `update_time` int(10) unsigned zerofill DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `lr_rooter`;
CREATE TABLE `lr_rooter` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `passport` varchar(20) NOT NULL COMMENT '通行证',
  `first_ip` varchar(16) NOT NULL DEFAULT '',
  `last_ip` varchar(255) NOT NULL DEFAULT '',
  `first_time` int(10) unsigned NOT NULL DEFAULT '0',
  `last_time` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `lr_topic`;
CREATE TABLE `lr_topic` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tname` varchar(30) NOT NULL COMMENT '专题名',
  `desc` varchar(512) NOT NULL COMMENT '描述',
  `uid` int(11) NOT NULL DEFAULT '0' COMMENT '创建人',
  `time` int(11) DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `lr_user`;
CREATE TABLE `lr_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `passport` varchar(20) NOT NULL COMMENT '登录名',
  `nickname` varchar(20) NOT NULL COMMENT '显示昵称',
  `password` varchar(50) NOT NULL COMMENT '登录密码',
  `forum_name` varchar(20) DEFAULT NULL COMMENT '所属论坛名',
  `forum_section` varchar(20) DEFAULT NULL COMMENT '所属板块名',
  `forum_id` int(11) DEFAULT NULL COMMENT '所属论坛id',
  `forum_sectionid` varchar(10) DEFAULT NULL COMMENT '所属板块id，如2-5表示“论坛id2版块id5”',
  `forum_url` varchar(25) DEFAULT NULL,
  `qq` varchar(15) DEFAULT NULL,
  `weibo` varchar(25) DEFAULT NULL COMMENT '微博昵称',
  `weibo_url` varchar(25) DEFAULT NULL COMMENT '微博主页URL',
  `regtime` int(11) NOT NULL COMMENT '注册时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- 2018-08-20 17:12:45
