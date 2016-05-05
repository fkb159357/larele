-- PO表增加摘要字段
-- @since 2015-09-14
-- hostker(miku.us) 已同步
-- Office localhost 已同步
-- HP localhost 【未同步】
ALTER TABLE `lr_posts`
ADD COLUMN `digest`  text NULL COMMENT '摘要' AFTER `title`;