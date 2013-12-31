CREATE TABLE `userinfo` (
 `uid` int(10) NOT NULL AUTO_INCREMENT,
 `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
 `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
 `saltkey` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
 `email` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
 `mobile` varchar(11) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
 `idate` int(10) NOT NULL,
 PRIMARY KEY (`uid`),
 UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;