-- 文章加用于隐藏的字段
-- @since 2015-08-12
-- hostker_fkb159357(miku.us) 已同步
-- Office localhost 【未同步】
-- HP localhost 已同步
ALTER TABLE `lr_posts`
ADD COLUMN `hide`  tinyint NOT NULL DEFAULT 0 COMMENT '是否隐藏' AFTER `sort`;
