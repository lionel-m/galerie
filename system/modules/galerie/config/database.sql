-- ********************************************************
-- *                                                      *
-- * IMPORTANT NOTE                                       *
-- *                                                      *
-- * Do not import this file manually but use the Contao  *
-- * install tool to create and maintain database tables! *
-- *                                                      *
-- ********************************************************


-- --------------------------------------------------------

-- 
-- Table `tl_galerie`
-- 

CREATE TABLE `tl_galerie` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `pid` int(10) unsigned NOT NULL default '0',
  `sorting` int(10) unsigned NOT NULL default '0',
  `tstamp` int(10) unsigned NOT NULL default '0',
  `published` char(1) NOT NULL default '',
  `title` varchar(255) NOT NULL default '',
  `alias` varchar(128) NOT NULL default '',
  `themesSRC` varchar(255) NOT NULL default '',
  `minifiedJS` char(1) NOT NULL default '',
  `width` int(10) unsigned NOT NULL default '0',
  `height` double unsigned NOT NULL default '0',
  `transition` varchar(32) NOT NULL default '',
  `initialTransition` varchar(32) NOT NULL default '',
  `fullscreenTransition` varchar(32) NOT NULL default '',
  `touchTransition` varchar(32) NOT NULL default '',
  `transitionSpeed` int(10) unsigned NOT NULL default '0',
  `clicknext` char(1) NOT NULL default '',
  `swipe` char(1) NOT NULL default '',
  `fullscreenDoubleTap` char(1) NOT NULL default '',
  `gShow` int(10) unsigned NOT NULL default '0',
  `showInfo` char(1) NOT NULL default '',
  `showImagenav` char(1) NOT NULL default '',
  `showCounter` char(1) NOT NULL default '',
  `lightbox` char(1) NOT NULL default '',
  `lightboxFadeSpeed` int(10) unsigned NOT NULL default '0',
  `lightboxTransitionSpeed` int(10) unsigned NOT NULL default '0',
  `overlayBackground` varchar(6) NOT NULL default '',
  `overlayOpacity` float unsigned NOT NULL default '0',
  `imageCrop` varchar(32) NOT NULL default '',
  `imageMargin` int(10) unsigned NOT NULL default '0',
  `imagePan` char(1) NOT NULL default '',
  `imagePanSmoothness` int(10) unsigned NOT NULL default '0',
  `imagePosition` varchar(32) NOT NULL default '',
  `minScaleRatio` float unsigned NOT NULL default '0',
  `maxScaleRatio` float unsigned NOT NULL default '0',
  `autoplay` char(1) NOT NULL default '',
  `autoplayInterval` int(10) unsigned NOT NULL default '0',
  `pauseOnInteraction` char(1) NOT NULL default '',
  `carousel` char(1) NOT NULL default '',
  `carouselFollow` char(1) NOT NULL default '',
  `carouselSpeed` int(10) unsigned NOT NULL default '0',
  `carouselSteps` varchar(32) NOT NULL default '',
  `thumbnails` varchar(32) NOT NULL default '',
  `thumbCrop` varchar(32) NOT NULL default '',
  `thumbMargin` int(10) unsigned NOT NULL default '0',
  `thumbQuality` varchar(32) NOT NULL default '',
  `thumbFit` char(1) NOT NULL default '',
  `easing` varchar(32) NOT NULL default '',
  `extend` text NULL,
  `dataConfig` text NULL,
  `popupLinks` char(1) NOT NULL default '',
  `preload` varchar(32) NOT NULL default '',
  `debug` char(1) NOT NULL default '',
  `queue` char(1) NOT NULL default '',
  `flickr` char(1) NOT NULL default '',
  `flickrMethods` varchar(32) NOT NULL default '',
  `flickrMethodsValue` varchar(32) NOT NULL default '',
  `flickrOptMax` int(10) unsigned NOT NULL default '0',
  `flickrOptImageSize` varchar(32) NOT NULL default '',
  `flickrOptThumbSize` varchar(32) NOT NULL default '',
  `flickrOptSort` varchar(32) NOT NULL default '',
  `flickrOptDescription` char(1) NOT NULL default '',
  `history` char(1) NOT NULL default '',
  `dummy` varchar(255) NOT NULL default '',
  `layerFollow` char(1) NOT NULL default '',
  `imageTimeout` int(10) unsigned NOT NULL default '0',
  `fullscreenCrop` varchar(32) NOT NULL default '',
  `picasa` char(1) NOT NULL default '',
  `picasaMethods` varchar(32) NOT NULL default '',
  `picasaMethodsValue` varchar(32) NOT NULL default '',
  `picasaOptMax` int(10) unsigned NOT NULL default '0',
  `picasaOptImageSize` varchar(32) NOT NULL default '',
  `picasaOptThumbSize` varchar(32) NOT NULL default '',
  `dailymotion` text NULL,
  `vimeo` text NULL,
  `youtube` text NULL,
  `trueFullscreen` char(1) NOT NULL default '',
  `wait` varchar(32) NOT NULL default '',
  `responsive` char(1) NOT NULL default '',
  `dataSource` varchar(32) NOT NULL default '',
  `dataSelector` varchar(32) NOT NULL default '',
  `keepSource` char(1) NOT NULL default '',
  `json` text NULL,
  `idleMode` char(1) NOT NULL default '',
  `idleTime` int(10) unsigned NOT NULL default '0',
  `idleSpeed` int(10) unsigned NOT NULL default '0',
  `thumbDisplayOrder` char(1) NOT NULL default '1',
  `dataSort` text NULL,
  PRIMARY KEY  (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- --------------------------------------------------------

-- 
-- Table `tl_galerie_pictures`
-- 

CREATE TABLE `tl_galerie_pictures` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `pid` int(10) unsigned NOT NULL default '0',
  `sorting` int(10) unsigned NOT NULL default '0',
  `tstamp` int(10) unsigned NOT NULL default '0',
  `published` char(1) NOT NULL default '',
  `title` varchar(255) NOT NULL default '',
  `fullscreenSingleSRC` varchar(255) NOT NULL default '',
  `singleSRC` varchar(255) NOT NULL default '',
  `alt` text NULL,
  `imageUrl` varchar(255) NOT NULL default '',
  `size` varchar(64) NOT NULL default '',
  `thumbSize` varchar(64) NOT NULL default '',
  `video` varchar(255) NOT NULL default '',
  `videoThumb` char(1) NOT NULL default '',
  `iframe` varchar(255) NOT NULL default '',
  `iframeThumb` char(1) NOT NULL default '',
  `dataConfigHTML` text NULL,
  PRIMARY KEY  (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- --------------------------------------------------------

--
-- Table `tl_content`
--

CREATE TABLE `tl_content` (
  `galerie` int(10) unsigned NOT NULL default '0',
  `imagesFolder` blob NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- --------------------------------------------------------

--
-- Table `tl_module`
--

CREATE TABLE `tl_module` (
  `galerie` int(10) unsigned NOT NULL default '0',
  `imagesFolder` blob NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;