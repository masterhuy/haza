<?php
/**
* 2007-2017 PrestaShop
*
* Slider Layer module for prestashop
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2019 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/

$query = "DROP TABLE IF EXISTS `_DB_PREFIX_jms_slides`;
CREATE TABLE IF NOT EXISTS `_DB_PREFIX_jms_hook` (
  `id_hook` INT NOT NULL ,
  `name` VARCHAR(255) NOT NULL ,
  PRIMARY KEY (`id_hook`)
) ENGINE = _MYSQL_ENGINE_;

INSERT INTO `_DB_PREFIX_jms_hook` (`id_hook`, `name`) VALUES
('1', 'displayWrapperTop'),
('2', 'displayWrapperBottom'),
('3', 'displayLeftColumn'),
('4', 'displayRightColumn'),
('5', 'displayHome');

CREATE TABLE IF NOT EXISTS `_DB_PREFIX_jms_slider_hook` (
  `id_slider` INT NOT NULL ,
  `id_hook` INT NOT NULL ,
  PRIMARY KEY (`id_slider`, `id_hook`)
) ENGINE = _MYSQL_ENGINE_;

INSERT INTO `_DB_PREFIX_jms_slider_hook` (`id_slider`, `id_hook`) VALUES ('1', '5');

CREATE TABLE IF NOT EXISTS `_DB_PREFIX_jms_slider` (
  `id_slider` INT NOT NULL AUTO_INCREMENT ,
  `title` VARCHAR(255) NOT NULL ,
  `delay` INT NOT NULL,
  `x` INT NOT NULL ,
  `y` INT NOT NULL ,
  `trans` VARCHAR(255) NOT NULL ,
  `trans_in` VARCHAR(255) NOT NULL ,
  `trans_out` VARCHAR(255) NOT NULL ,
  `ease_in` VARCHAR(255) NOT NULL ,
  `ease_out` VARCHAR(255) NOT NULL ,
  `speed_in` INT NOT NULL ,
  `speed_out` INT NOT NULL ,
  `duration` INT NOT NULL ,
  `bg_animation` BOOLEAN NOT NULL ,
  `bg_ease` VARCHAR(255) NOT NULL ,
  `end_animate` BOOLEAN NOT NULL ,
  `full_width` BOOLEAN NOT NULL ,
  `responsive` BOOLEAN NOT NULL ,
  `max_width` INT NOT NULL ,
  `max_height` INT NOT NULL ,
  `mobile_height` INT NOT NULL ,
  `tablet_height` INT NOT NULL DEFAULT 600,
  `mobile2_height` INT NOT NULL DEFAULT 500,
  `auto_change` BOOLEAN NOT NULL ,
  `pause_hover` BOOLEAN NOT NULL ,
  `show_pager` BOOLEAN NOT NULL ,
  `show_control` BOOLEAN NOT NULL ,
  `active` BOOLEAN DEFAULT '1',
  `order` INT NOT NULL,
  PRIMARY KEY (`id_slider`)
) ENGINE = _MYSQL_ENGINE_;

INSERT INTO `_DB_PREFIX_jms_slider` (`id_slider`, `delay`, `title`, `x`, `y`, `trans`, `trans_in`, `trans_out`, `ease_in`, `ease_out`, `speed_in`, `speed_out`, `duration`, `bg_animation`, `bg_ease`, `end_animate`, `full_width`, `responsive`, `max_width`, `max_height`, `mobile_height`, `auto_change`, `pause_hover`, `show_pager`, `show_control`, `active`, `order`) VALUES
(NULL, 1000, 'slider 1', '0', '0', 'fade', 'left', 'left', 'easeInCubic', 'easeOutExpo', '300', '0', '7000', '1', 'easeOutCubic', '1', '1', '1', '1920', '875', '420', '1', '0', '1', '1', '1', '1');

CREATE TABLE IF NOT EXISTS `_DB_PREFIX_jms_slides` (
  `id_slide` int(10) NOT NULL AUTO_INCREMENT,
  `id_slider` INT NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `class_suffix` varchar(100) NOT NULL,
  `bg_type` int(10) NOT NULL DEFAULT '1',
  `bg_image` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `bg_color` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '#FFF',
  `slide_link` varchar(100) NOT NULL,
  `order` int(10) NOT NULL,
  `status` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_slide`)
) ENGINE=_MYSQL_ENGINE_  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

INSERT INTO `_DB_PREFIX_jms_slides` (`id_slide`, `id_slider`, `title`, `class_suffix`, `bg_type`, `bg_image`, `bg_color`, `slide_link`, `order`, `status`) VALUES
(7, 1, 'Home 1 - Slider 1', '', 1, '0e822c064f436a476823126f81c2b89d.jpg', '', '', 0, 1),
(8, 1, 'Home1 - Slide 2', '', 1, '6a5a75bb8d4aedd8b76085cb40024054.jpg', '', '', 1, 1);

DROP TABLE IF EXISTS `_DB_PREFIX_jms_slider_lang`;
CREATE TABLE IF NOT EXISTS `_DB_PREFIX_jms_slider_lang` (
  `id_slider` int(10) NOT NULL ,
  `id_lang` int(10) NOT NULL,
  PRIMARY KEY (`id_slider`,`id_lang`)
) ENGINE=_MYSQL_ENGINE_  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

INSERT INTO `_DB_PREFIX_jms_slider_lang` (`id_slider`, `id_lang`) VALUES
(1, 0);

DROP TABLE IF EXISTS `_DB_PREFIX_jms_slides_layers`;
CREATE TABLE IF NOT EXISTS `_DB_PREFIX_jms_slides_layers` (
  `id_layer` int(10) NOT NULL AUTO_INCREMENT,
  `id_slide` int(10) NOT NULL,
  `data_title` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `data_class_suffix` varchar(50) NOT NULL,
  `data_fixed` int(10) NOT NULL DEFAULT '0',
  `data_delay` int(10) NOT NULL DEFAULT '1000',
  `data_time` int(10) NOT NULL DEFAULT '1000',
  `data_in` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'left',
  `data_out` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'right',
  `data_ease_in` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'linear',
  `data_ease_out` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'linear',
  `data_transform_in` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'bounce',
  `data_transform_out` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'bounce',
  `data_type` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `data_image` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `data_html` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `data_video` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `data_video_controls` int(10) NOT NULL DEFAULT '1',
  `data_video_muted` int(10) NOT NULL DEFAULT '0',
  `data_video_autoplay` int(10) NOT NULL DEFAULT '1',
  `data_video_loop` int(10) NOT NULL DEFAULT '1',
  `data_video_bg` int(10) NOT NULL DEFAULT '0',
  `data_color` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT '#FFFFFF',
  `data_width` int(10) NOT NULL,
  `data_height` int(10) NOT NULL,
  `data_order` int(10) NOT NULL,
  `data_status` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_layer`,`id_slide`)
) ENGINE=_MYSQL_ENGINE_  DEFAULT CHARSET=utf8 AUTO_INCREMENT=86 ;


INSERT INTO `_DB_PREFIX_jms_slides_layers` (`id_layer`, `id_slide`, `data_title`, `data_class_suffix`, `data_fixed`, `data_delay`, `data_time`, `data_in`, `data_out`, `data_ease_in`, `data_ease_out`, `data_transform_in`, `data_transform_out`, `data_type`, `data_image`, `data_html`, `data_video`, `data_video_controls`, `data_video_muted`, `data_video_autoplay`, `data_video_loop`, `data_video_bg`, `data_color`, `data_width`, `data_height`, `data_order`, `data_status`) VALUES
(22, 8, 'Modern. Simple. Minimalist.', '', 0, 700, 1400, 'top', 'bottom', 'linear', 'linear', 'bounce', 'bounce', 'text', NULL, '<span class=\"text-large\">Modern. Simple.<br />\r\nMinimalist.</span>', NULL, 0, 0, 0, 0, 0, '#111111', 311, 278, 0, 1),
(23, 8, 'Creative Design Everyone Wants From Fluent Store', '', 0, 1000, 1500, 'bottom', 'top', 'linear', 'linear', 'bounce', 'bounce', 'text', NULL, '<span class=\"text-small\">Creative Design Everyone Wants From Fluent Store</span>', NULL, 0, 0, 0, 0, 0, '#303030', 564, 66, 0, 1),
(41, 8, 'Shopnow', '', 0, 1700, 2400, 'bottom', 'bottom', 'linear', 'linear', 'bounce', 'bounce', 'text', NULL, '<a href=\"#\" title=\"Shop now\" class=\"btn-shopnow btn-effect1\">Shop Now</a>', NULL, 0, 0, 0, 0, 0, '#111111', 200, 50, 0, 1),
(62, 7, 'Modern Chair Design 2017', '', 0, 1000, 1700, 'right', 'right', 'linear', 'linear', 'bounce', 'bounce', 'text', NULL, '<span class=\"text-large\">Modern Chair Design 2017</span>', NULL, 0, 0, 0, 0, 0, '#111111', 200, 50, 0, 1),
(63, 7, 'Interface Creative Design Everyone Wants From Fluent Store', '', 0, 1500, 2200, 'right', 'right', 'linear', 'linear', 'bounce', 'bounce', 'text', NULL, '<span class=\"text-small\">Interface Creative Design Everyone Wants From Fluent Store</span>', NULL, 0, 0, 0, 0, 0, '#303030', 200, 50, 0, 1),
(64, 7, 'shopnow', '', 0, 2200, 2700, 'right', 'left', 'linear', 'linear', 'bounce', 'bounce', 'text', NULL, '<a href=\"#\" title=\"Shop now\" class=\"btn-shopnow btn-effect1\">Shop Now\r\n</a>', NULL, 0, 0, 0, 0, 0, '#111111', 67, 19, 0, 1);

DROP TABLE IF EXISTS `_DB_PREFIX_jms_slides_shop`;
CREATE TABLE IF NOT EXISTS `_DB_PREFIX_jms_slides_shop` (
  `id_slide` int(10) NOT NULL AUTO_INCREMENT,
  `id_shop` int(10) NOT NULL,
  PRIMARY KEY (`id_slide`,`id_shop`)
) ENGINE=_MYSQL_ENGINE_  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

INSERT INTO `_DB_PREFIX_jms_slides_shop` (`id_slide`, `id_shop`) VALUES
(7, 1),
(8, 1);

CREATE TABLE `_DB_PREFIX_jms_layer_style` (
  `id_style` INT NOT NULL AUTO_INCREMENT ,
  `id_layer` INT NOT NULL ,
  `type` VARCHAR(10) NOT NULL ,
  `data_style` VARCHAR(10) NOT NULL ,
  `data_font_weight` INT NOT NULL DEFAULT 400,
  `data_font_size` INT NOT NULL ,
  `data_line_height` INT NOT NULL ,
  `data_x` INT(10) NOT NULL ,
  `data_y` INT(10) NOT NULL ,
  `data_width` INT(10) NOT NULL DEFAULT 100,
  `data_height` INT(10) NOT NULL DEFAULT 50,
  `data_show` BOOLEAN NOT NULL ,
  PRIMARY KEY (`id_style`)
) ENGINE = _MYSQL_ENGINE_;


INSERT INTO `_DB_PREFIX_jms_layer_style` (`id_style`, `id_layer`, `type`, `data_style`,`data_font_weight`, `data_font_size`, `data_line_height`, `data_x`, `data_y`,`data_width`,`data_height`, `data_show`) VALUES
(1,22,'desktop','normal',400,52,65,880,88,651,177,1),
(2,23,'desktop','normal',400,18,56,885,289,570,61,1),
(7,41,'desktop','normal',400,16,26,887,406,100,50,1),
(19,62,'desktop','normal',400,48,56,586,72,641,69,1),
(20,63,'desktop','normal',400,18,56,590,162,602,68,1),
(21,64,'desktop','normal',400,16,26,593,255,100,50,1),
(254,22,'mobile','normal',400,26,65,227,30,239,130,1),
(255,23,'mobile','normal',400,9,56,225,174,251,48,1),
(260,41,'mobile','normal',400,8,26,227,241,100,50,1),
(272,62,'mobile','normal',400,24,56,106,126,348,67,1),
(273,63,'mobile','normal',400,9,56,105,48,290,71,1),
(274,64,'mobile','normal',400,8,26,177,212,81,36,1),
(317,22,'tablet','normal',400,52,65,563,46,566,155,1),
(318,23,'tablet','normal',400,18,56,570,213,476,76,1),
(323,41,'tablet','normal',400,16,26,569,340,100,50,1),
(335,62,'tablet','normal',400,48,56,404,67,655,59,1),
(336,63,'tablet','normal',400,18,56,406,156,550,63,1),
(337,64,'tablet','normal',400,16,26,408,255,100,50,1),
(359,22,'mobile2','normal',400,26,65,365,40,290,123,1),
(360,23,'mobile2','normal',400,9,56,364,180,288,51,1),
(365,41,'mobile2','normal',400,8,26,367,257,85,48,1),
(377,62,'mobile2','normal',400,40,40,206,59,516,56,1),
(378,63,'mobile2','normal',400,9,56,261,126,331,70,1),
(379,64,'mobile2','normal',400,8,26,294,221,100,50,1);


";
