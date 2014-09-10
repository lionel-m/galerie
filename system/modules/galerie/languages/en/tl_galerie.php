<?php

/**
 * Galerie
 * Professional pictures galleries for the web and mobile devices.
 *
 * @author    Lionel Maccaud
 * @copyright Lionel Maccaud
 * @package   galerie
 * @license   MIT (http://lionel-m.mit-license.org/)
 */

/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_galerie']['title']     = array('Title', 'Please enter the gallery title.');
$GLOBALS['TL_LANG']['tl_galerie']['alias']     = array('Alias', 'This alias is a unique reference to the gallery which can be called instead of its numeric ID.');
$GLOBALS['TL_LANG']['tl_galerie']['published'] = array('Publish', 'Make the gallery publicly visible on the website.');
$GLOBALS['TL_LANG']['tl_galerie']['themesSRC'] = array('Themes', 'Select the theme folder of the gallery. (e.g. "classic")');

// Options
$GLOBALS['TL_LANG']['tl_galerie']['width'] = array('Width (Number or \'auto\')', 'By default, Galleria fetches the width from the containing element. But you can use this option to set a gallery width manually.');
$GLOBALS['TL_LANG']['tl_galerie']['height'] = array('Height', 'Galleria need a height to work properly. You can set the height using this option to make sure it has the correct height. If no height is set, Galleria will try to find the height of the parent container. You can set an exact value, f.ex 200, and it will apply this exact height in pixels. You can also set a relative ratio value which is anything below 2. If you set a relative ratio value, the gallery height will be calculated by multiplying this value with the width at any given scaling process. This is very useful when programming responsive layouts.');
$GLOBALS['TL_LANG']['tl_galerie']['transition'] = array('Transition', 'The transition that is used when displaying the images.');
$GLOBALS['TL_LANG']['tl_galerie']['initialTransition'] = array('Initial transition', 'Defines a different transition to show on the first image. F.ex, if you are using a slide transition, you might want the first image to fade. You can then set this option to \'fade\'.');
$GLOBALS['TL_LANG']['tl_galerie']['transitionSpeed'] = array('Transition speed', 'The milliseconds used in the animation when applying the transition. The higher number, the slower transition.');
$GLOBALS['TL_LANG']['tl_galerie']['easing'] = array('Easing', 'You can use this option to control the animation easing on a global level in Galleria. Besides the built-in jQuery easings “linear” and “swing”, Galleria includes the following easings:<br />galleria<br />galleriaIn<br />galleriaOut<br />You can use any of these easings or any other easing plugin, f.ex the jQuery Easing Plugin.');
$GLOBALS['TL_LANG']['tl_galerie']['clicknext'] = array('Click next', 'This options adds a click event over the stage that navigates to the next image in the gallery. Useful for mobile browsers and other simpler applications. Note that setting this to true will disable any other links that you might have in the data object.');
$GLOBALS['TL_LANG']['tl_galerie']['swipe'] = array('Swipe', 'Enables a swipe movement for flicking through images on touch devices.');
$GLOBALS['TL_LANG']['tl_galerie']['fullscreenDoubleTap'] = array('Fullscreen double tap', 'This options listens for the double-tap event on touch devices and toggle fullscreen mode if it happens.');
$GLOBALS['TL_LANG']['tl_galerie']['popupLinks'] = array('Popup links', 'Setting this to true will open any image links in a new window. You can add image links using the longdesc attribute (default) or customize it using data_config');
$GLOBALS['TL_LANG']['tl_galerie']['gShow'] = array('Show', 'This defines what image index to show at first. If you use the history plugin, a permalink will override this number.');
$GLOBALS['TL_LANG']['tl_galerie']['showInfo'] = array('Show info', 'Set this to false if you do not wish to display the caption.');
$GLOBALS['TL_LANG']['tl_galerie']['showImagenav'] = array('Show image navigation', 'Select this option if you want to display the image navigation (next/prev arrows).');
$GLOBALS['TL_LANG']['tl_galerie']['showCounter'] = array('Show counter', 'Select this option if you want to display the counter.');
$GLOBALS['TL_LANG']['tl_galerie']['lightbox'] = array('Lightbox', 'This option acts as a helper for attaching a lightbox when the user clicks on an image. If you have a link defined for the image, the link will take precedence.');
$GLOBALS['TL_LANG']['tl_galerie']['lightboxFadeSpeed'] = array('Lightbox fade speed', 'The lightbox will animate and fade the images and captions. This value controls how fast they should fade in milliseconds.');
$GLOBALS['TL_LANG']['tl_galerie']['lightboxTransitionSpeed'] = array('Lightbox transition speed', 'The lightbox will animate the white square before displaying the image. This value controls how fast it should animate in milliseconds.');
$GLOBALS['TL_LANG']['tl_galerie']['overlayBackground'] = array('Overlay background', 'This defines the overlay background color.');
$GLOBALS['TL_LANG']['tl_galerie']['overlayOpacity'] = array('Overlay opacity', 'This sets how much opacity the overlay should have.');
$GLOBALS['TL_LANG']['tl_galerie']['imageCrop'] = array('Image crop', 'Defines how the main image will be cropped inside it’s container.<br />\'Yes\' means that all images will be scaled to fill the stage, centered and cropped.<br />\'No\' will scale down so the entire image fits.<br />\'Height\' will scale the image to fill the height of the stage.<br />\'Width\' will scale the image to fill the width of the stage.');
$GLOBALS['TL_LANG']['tl_galerie']['imageMargin'] = array('Image margin', 'Since images are scaled to fit the stage container, there might be occations when you need to apply a margin between the image and stage border. This is what this option is for. The margin is set in pixels.');
$GLOBALS['TL_LANG']['tl_galerie']['imagePosition'] = array('Image position', 'Positions the main image inside the stage container. Works like the CSS background-position property, f.ex \'top right\' or \'20% 100%\'. You can use keywords, percents or pixels. The first value is the horizontal position and the second is the vertical.');
$GLOBALS['TL_LANG']['tl_galerie']['imagePan'] = array('Image pan', 'Galleria comes with a built-in panning effect. The effect is sometimes useful if you have cropped images and want to let the users pan across the stage to see the entire image. Set imagePan to true to apply a mouse-controlled movement of the image to reveal the cropped parts. This effect is useful if you want to avoid dark areas around the image but still be able to view the entire image. Popular on many fashion websites. If the panning becomes slow, you can control the smoothness ( and CPU ) using the image_pan_smoothness option.');
$GLOBALS['TL_LANG']['tl_galerie']['imagePanSmoothness'] = array('Image pan smoothness', 'This value sets how "smooth" the image pan movement should be when setting image_pan to true. The higher value, the smoother effect but also CPU consuming.');
$GLOBALS['TL_LANG']['tl_galerie']['maxScaleRatio'] = array('Max scale ratio', 'Sets the maximum scale ratio for images. F.ex, if you don’t want Galleria to upscale any images, set this to 1.<br />\'0\' will allow any scaling of the images.');
$GLOBALS['TL_LANG']['tl_galerie']['autoplay'] = array('Autoplay', 'If true, this will start playing the slideshow with 5 seconds interval (default).');
$GLOBALS['TL_LANG']['tl_galerie']['autoplayInterval'] = array('Autoplay - Time interval', 'If you set this to any number, f.ex 4000, it will start playing with that interval (in milliseconds)');
$GLOBALS['TL_LANG']['tl_galerie']['carousel'] = array('Carousel', 'Galleria comes with a built-in horizontal carousel. This options is for activating / deactivating the carousel feature. Setting this to true, the carousel will be automatically applied if the total som of thumbnails width exceeds the thumbnail container. This will be re-calculated on resize. If you set this to false, you will prevent Galleria from adding the carousel.');
$GLOBALS['TL_LANG']['tl_galerie']['carouselSpeed'] = array('Carousel speed', 'This option controls the slide speed of the carousel in milliseconds. It globally affects the carousel animation, both when following and sliding.');
$GLOBALS['TL_LANG']['tl_galerie']['carouselSteps'] = array('Carousel steps (Number or \'auto\')', 'The number of "steps" the carousel will advance when navigating between available thumbnails. You can control the animation speed using the carouselSpeed option. \'auto\' will move the carousel as many steps as there are visible thumbnails.');
$GLOBALS['TL_LANG']['tl_galerie']['pauseOnInteraction'] = array('Pause on interaction', 'During playback, Galleria will stop the playback if the user presses thumbnails or any other navigational links. If you dont want this behaviour, set this option to false.');
$GLOBALS['TL_LANG']['tl_galerie']['thumbnails'] = array('Thumbnails', 'Sets the creation of thumbnails. If false, Galleria will not create thumbnails and no carousel. If you set this to ‘empty’, Galleria will create empty spans with the className img instead of thumbnails. If you set this to ‘numbers’, Galleria will create empty spans with numbers instead of thumbnails. If you set this to ‘lazy’, Galleria will create empty images with the class ‘lazy’. You can then call loadLazyThumbs() to load the thumbnails at run time.');
$GLOBALS['TL_LANG']['tl_galerie']['thumbCrop'] = array('Thumb crop', 'Defines how the thumbnail will be cropped inside it’s container.<br />\'Yes\' means that all thumbnails will be scaled to fill the stage, centered and cropped.<br />\'No\' will scale down so the entire thumbnail fits.<br />\'Height\' will scale the thumbnail to fill the height of the stage.<br />\'Width\' will scale the thumbnail to fill the width of the stage.');
$GLOBALS['TL_LANG']['tl_galerie']['thumbMargin'] = array('Thumb margin', 'Since thumbnails are scaled to fit the stage container, there might be occations when you need to apply a margin between the thumbnail and stage border. This is what this option is for. The margin is set in pixels.');
$GLOBALS['TL_LANG']['tl_galerie']['thumbQuality'] = array('Thumb quality', 'Defines if and how IE should use bicubic image rendering for thumbnails.<br />\'Yes\' will force high quality renedring (can slow down performance).<br />\'No\' will not use high quality (better performance).<br />\'auto\' uses high quality if image scaling is moderate.');
$GLOBALS['TL_LANG']['tl_galerie']['extend'] = array('Extend', 'Documentation: http://galleria.io/docs/options/extend/. This function is used to extend the init function of the theme. You will have full access to the Galleria API here. The argument is the cascaded options object, and the scope is always the Galleria gallery instance. Use extend as a method for adding custom modifications such as play/pause without creating a new theme.');
$GLOBALS['TL_LANG']['tl_galerie']['preload'] = array('Preload', 'Defines how many images Galleria should preload in advance. Please note that this only applies when you are using separate thumbnail files. Galleria always cache all preloaded images.<br />\'2\' preloads the next 2 images in line<br />\'all\' forces Galleria to start preloading all images. This may slow down client.<br />\'0\' will not preload any images');
$GLOBALS['TL_LANG']['tl_galerie']['debug'] = array('Debug', 'This option is for turning debug on/off. By default, Galleria displays errors by printing them out in the gallery container and sometimes throw exceptions. For deployment you can turn debug off to generate a more generic error message if a fatal error is raised.');
$GLOBALS['TL_LANG']['tl_galerie']['queue'] = array('Queue', 'Galleria queues all activation clicks (next/prev & thumbnails). You can see this effect when f.ex clicking "next" fast many times. If you don’t want Galleria to queue, set this to false. This will make Galleria stall during animations.');
$GLOBALS['TL_LANG']['tl_galerie']['layerFollow'] = array('Layer follow', 'By default, the layer follows the image size on the stage, even if crop is set. This means that the HTML layer will stretch according to the active image. If you want the layer to fill the stage regardless of cropping settings, set this to false.');
$GLOBALS['TL_LANG']['tl_galerie']['dummy'] = array('Dummy', 'This option allows you to define an image that should be shown if Galleria can’t find the original image. Think of it as a 404 for Galleria.');
$GLOBALS['TL_LANG']['tl_galerie']['imageTimeout'] = array('Image timeout', 'This option defines how long Galleria will try to fetch the images (unless it returns 404) before an exception is thrown. It uses milliseconds, so 30000 is 30 sec.');
$GLOBALS['TL_LANG']['tl_galerie']['fullscreenCrop'] = array('Fullscreen crop', 'Sets how Galleria should crop when in fullscreen mode. See imageCrop for cropping options.');
$GLOBALS['TL_LANG']['tl_galerie']['fullscreenTransition'] = array('Fullscreen transition', 'Defines a different transition for fullscreen mode. Some transitions are less smooth in fullscreen mode, this option allows you to set a different transition when in fullscreen mode.');
$GLOBALS['TL_LANG']['tl_galerie']['touchTransition'] = array('Touch transition', 'Defines a different transition when a touch device is detected.');
$GLOBALS['TL_LANG']['tl_galerie']['dataConfig'] = array('Data config', 'Documentation: http://galleria.io/docs/options/dataConfig/. This very useful function configures how the data should be extracted from the source. It should return an object that will blend in with the default extractions.');
$GLOBALS['TL_LANG']['tl_galerie']['dailymotion'] = array('Dailymotion', 'You can customize the Dailymotion player using the Dailymotion Player options. You can view the different options at Dailymotion when you choose embed -> options.');
$GLOBALS['TL_LANG']['tl_galerie']['vimeo'] = array('Vimeo', 'You can customize the Vimeo player : http://vimeo.com/api/docs/player#universal-params');
$GLOBALS['TL_LANG']['tl_galerie']['youtube'] = array('YouTube', 'You can customize the YouTube player : http://code.google.com/apis/youtube/player_parameters.html');
$GLOBALS['TL_LANG']['tl_galerie']['trueFullscreen'] = array('True fullscreen', 'Galleria supports true fullscreen mode if it is supported by the browser (currently FF10+, Safari 5.1+ and Chrome 15+). That means that it will enter a native OS fullscreen if the fullscreen method is triggered. If you don’t want this behavior, set this option to false.');
$GLOBALS['TL_LANG']['tl_galerie']['wait'] = array('Wait', 'Sets how long Galleria should wait when trying to extract measurements, before throwing an error. Set this to true for infinity.');
$GLOBALS['TL_LANG']['tl_galerie']['responsive'] = array('Responsive', 'This option sets thew Gallery in responsive mode. That means that it will resize the entire container if your CSS is dynamic. In other words, you can add media queries or dynamic proportions in your CSS and the gallery will follow these proportions as the window resizes.');
$GLOBALS['TL_LANG']['tl_galerie']['dataSource'] = array('Data source', 'This is for defining where to look for the Galleria data. By default, Galleria looks for HTML data in the target selector, but you can tell Galleria to look elsewhere in the document using this option. If you are using JSON data, you can use this option to bring that JSON Array into Galleria.');
$GLOBALS['TL_LANG']['tl_galerie']['dataSelector'] = array('Data selector', 'The selector Galleria should look for in the HTML source. If you are using other elements than images to store data in the HTML, you can set this option to configure Galleria to look for the right elements.');
$GLOBALS['TL_LANG']['tl_galerie']['keepSource'] = array('Keep source', 'By default, Galleria clears the source container when rendering the gallery. Sometimes you need to apply the gallery some place else, like a lightbox, but still want to keep the thumbnails in the source. This option sets if the source HTML should be left intact. Setting this to true will also add click events inside the source code, to make your thumbnails clickable. Useful for building custom thumbnails and still have galleria control the gallery.');
$GLOBALS['TL_LANG']['tl_galerie']['json'] = array('JSON', 'Another handy way to serve data is to provide a JSON array to Galleria. This method is preferred by many developers, since you gain more control over what is served to the client, and when. By serving HTML to the client and then let Galleria parse that HTML into Galleria data might be a performance downer if you don’t provide separate thumbnails, since the client has to download all images at once.');
$GLOBALS['TL_LANG']['tl_galerie']['idleMode'] = array('Idle mode', 'Global option for turning on/off idle mode. Each gallery enters idle mode after certain amount of time and themes behave differently when this happens, f.ex clears the stage from distractions. If you want to prevent idle mode from ever occuring, set this to false. New in 1.2.8: you can also set this to ‘hover’, this will make idleMode happen as soon as the user moves the mouse outside the gallery container, and then activate it again when the mouse enters the gallery.');
$GLOBALS['TL_LANG']['tl_galerie']['idleTime'] = array('Idle time', 'If you are adding elements into idle mode using the .addIdleState() method, you can control the delay before Galleria falls into Idle mode using this option. idleTime is set using milliseconds, so 3000 equals 3 full seconds.');
$GLOBALS['TL_LANG']['tl_galerie']['idleSpeed'] = array('Idle speed', 'If you are adding elements into idle mode using the addIdleState() method, you can control the animation speed of the idle elements. idleSpeed is set using milliseconds.');
$GLOBALS['TL_LANG']['tl_galerie']['thumbDisplayOrder'] = array('Thumb display order', 'This defines if the gallery should display the loaded thumbnails in order. All thumbnails are loaded async regardless of this setting, but if you set this to false, it will pop up the thumbnails whenever they are ready, regardless of order.');
$GLOBALS['TL_LANG']['tl_galerie']['dataSort'] = array('Data sort', 'Function to sort the data before using it. You can use it the same way you would use Array.sort(). If you want to sort the images in a random order, you can set this to ‘random’.');
$GLOBALS['TL_LANG']['tl_galerie']['maxVideoSize'] = array('Max video size', 'Defines the maximum size for videos (or any other iframe). If set, a video iframe will never be taller or wider than this value in pixels. This also applies to lightbox and fullscreen. \'0\' will allow any scaling of the videos.');
$GLOBALS['TL_LANG']['tl_galerie']['variation'] = array('Variation', 'Some themes have visual variations defined in the CSS. It can be a lighter color scheme, different arrows or something else. You can read about each variation in the documentation for each theme. You can add multiple variations byseparating them by spaces, f.ex "light smallarow".');
$GLOBALS['TL_LANG']['tl_galerie']['videoPoster'] = array('Video poster', 'Since Galleria 1.3 it will use a poster image before showing the video iframe. You can set a custom image or load one automatically from the provider (YouTube, etc). If you wish to load the iframe directly, set this option to false.');
$GLOBALS['TL_LANG']['tl_galerie']['thumbPosition'] = array('Thumb position', 'Positions the thumbnail image inside it\'s container. Works like the CSS background-position property, f.ex \'top right\' or \'20% 100%\'. You can use keywords, percents or pixels. The first value is the horizontal position and the second is the vertical.');

// Flickr Options
$GLOBALS['TL_LANG']['tl_galerie']['flickr'] = array('Flickr', 'Use the gallery with the Flickr API.');
$GLOBALS['TL_LANG']['tl_galerie']['flickrMethods'] = array('Research Methods', 'Select the research method that you want to use for fetching images.');
$GLOBALS['TL_LANG']['tl_galerie']['flickrMethodsValue'] = array('Research Methods Value', 'Insert the value associated with the selected research method.');
$GLOBALS['TL_LANG']['tl_galerie']['flickrOptMax'] = array('Max', 'Maximum number of photos to return (maximum value 100)');
$GLOBALS['TL_LANG']['tl_galerie']['flickrOptImageSize'] = array('Image size', 'The size to fetch for the main image. The bigger size, the slower downloads and interaction. Use this to match image sizes with your gallery layout.');
$GLOBALS['TL_LANG']['tl_galerie']['flickrOptThumbSize'] = array('Thumb size', 'The size to fetch for the thumbnail image. The bigger size, the slower downloads and interaction. Use this to match thumbnail sizes with your gallery layout.');
$GLOBALS['TL_LANG']['tl_galerie']['flickrOptSort'] = array('Sort', 'Sets in what order the photos will be shown.');
$GLOBALS['TL_LANG']['tl_galerie']['flickrOptDescription'] = array('Description', 'The plugin fetches the title per default. If you also wish to fetch the description, set this option to true.');

// Picasa Options
$GLOBALS['TL_LANG']['tl_galerie']['picasa'] = array('Picasa', 'Use the gallery with the Picasa API.');
$GLOBALS['TL_LANG']['tl_galerie']['picasaMethods'] = array('Research Methods', 'Select the research method that you want to use for fetching images.');
$GLOBALS['TL_LANG']['tl_galerie']['picasaMethodsValue'] = array('Research Methods Value', 'Insert the value associated with the selected research method.');
$GLOBALS['TL_LANG']['tl_galerie']['picasaOptMax'] = array('Max', 'Maximum number of photos to return (maximum value 100)');
$GLOBALS['TL_LANG']['tl_galerie']['picasaOptImageSize'] = array('Image size', 'The size to fetch for the main image. The bigger size, the slower downloads and interaction. Use this to match image sizes with your gallery layout. You can apply any number here, and the plugin will fetch the closest match. And since Picasa has many different sizes cached, it will most often be a very close match.');
$GLOBALS['TL_LANG']['tl_galerie']['picasaOptThumbSize'] = array('Thumb size', 'The size to fetch for the thumbnail image. The bigger size, the slower downloads and interaction. Use this to match thumbnail sizes with your gallery layout.');

// History Plugin
$GLOBALS['TL_LANG']['tl_galerie']['history'] = array('History', 'The Galleria History plugin is a simple extension to create Galleria add hash tags for permalinks and back button functionality enabled. This is useful on fullscreen views and other use cases. The plugin simply adds a #/[id] hash to the URL and then applies the necessary code for all browsers to enable the back button. It also makes permalinks possible by simply bookmarking f.ex http://mygalleria.com/#/4 and the user will be shown the 5th image in the gallery (index starts at 0).');


/**
 * Reference
 */
$GLOBALS['TL_LANG']['tl_galerie']['undefined'] = 'Undefined';
$GLOBALS['TL_LANG']['tl_galerie']['fade']      = 'Crossfade betweens images.';
$GLOBALS['TL_LANG']['tl_galerie']['flash']     = 'Fades into background color between images.';
$GLOBALS['TL_LANG']['tl_galerie']['pulse']     = 'Quickly removes the image into background color, then fades the next image.';
$GLOBALS['TL_LANG']['tl_galerie']['slide']     = 'Slides the images depending on image position.';
$GLOBALS['TL_LANG']['tl_galerie']['fadeslide'] = 'Fade between images and slide slightly at the same time.';
$GLOBALS['TL_LANG']['tl_galerie']['doorslide'] = 'Slide the images in opposite directions.';
$GLOBALS['TL_LANG']['tl_galerie']['false']     = 'No';
$GLOBALS['TL_LANG']['tl_galerie']['true']      = 'Yes';
$GLOBALS['TL_LANG']['tl_galerie']['empty']     = 'Empty';
$GLOBALS['TL_LANG']['tl_galerie']['numbers']   = 'Numbers';
$GLOBALS['TL_LANG']['tl_galerie']['lazy']      = 'Lazy';
$GLOBALS['TL_LANG']['tl_galerie']['auto']      = 'auto';
$GLOBALS['TL_LANG']['tl_galerie']['landscape'] = 'Landscape';
$GLOBALS['TL_LANG']['tl_galerie']['portrait']  = 'Portrait';

//Flickr methods
$GLOBALS['TL_LANG']['tl_galerie']['search']               = 'Search';
$GLOBALS['TL_LANG']['tl_galerie']['tags']                 = 'Tags';
$GLOBALS['TL_LANG']['tl_galerie']['user']                 = 'User';
$GLOBALS['TL_LANG']['tl_galerie']['set']                  = 'Set';
$GLOBALS['TL_LANG']['tl_galerie']['gallery']              = 'Gallery';
$GLOBALS['TL_LANG']['tl_galerie']['groupsearch']          = 'Group search';
$GLOBALS['TL_LANG']['tl_galerie']['group']                = 'Group';
$GLOBALS['TL_LANG']['tl_galerie']['small']                = 'Small';
$GLOBALS['TL_LANG']['tl_galerie']['thumb']                = 'Thumb';
$GLOBALS['TL_LANG']['tl_galerie']['medium']               = 'Medium';
$GLOBALS['TL_LANG']['tl_galerie']['big']                  = 'Big';
$GLOBALS['TL_LANG']['tl_galerie']['original']             = 'Original';
$GLOBALS['TL_LANG']['tl_galerie']['date-posted-asc']      = 'Date posted (asc)';
$GLOBALS['TL_LANG']['tl_galerie']['date-posted-desc']     = 'Date posted (desc)';
$GLOBALS['TL_LANG']['tl_galerie']['date-taken-asc']       = 'Date taken (asc)';
$GLOBALS['TL_LANG']['tl_galerie']['date-taken-desc']      = 'Date taken (desc)';
$GLOBALS['TL_LANG']['tl_galerie']['interestingness-desc'] = 'Interestingness (desc)';
$GLOBALS['TL_LANG']['tl_galerie']['interestingness-asc']  = 'Interestingness (asc)';
$GLOBALS['TL_LANG']['tl_galerie']['relevance']            = 'Relevance';

//Picasa methods
$GLOBALS['TL_LANG']['tl_galerie']['useralbum'] = 'User album';

/**
 * Video options
 */
$GLOBALS['TL_LANG']['tl_galerie']['vimeo_options'] = "{
    title: 0,
    byline: 0,
    portrait: 0,
    color: 'aaaaaa'
}";
$GLOBALS['TL_LANG']['tl_galerie']['youtube_options'] = "{
    modestbranding: 1,
    autohide: 1,
    color: 'white',
    hd: 1,
    rel: 0,
    showinfo: 0
}";
$GLOBALS['TL_LANG']['tl_galerie']['dailymotion_options'] = "{
    foreground: '#EEEEEE',
    highlight: '#5BCEC5',
    background: '#222222',
    logo: 0,
    hideInfos: 1
}";

/**
 * Label
 */
$GLOBALS['TL_LANG']['tl_galerie']['label_datas']   = 'datas';
$GLOBALS['TL_LANG']['tl_galerie']['label_data']    = 'data';
$GLOBALS['TL_LANG']['tl_galerie']['label_image']   = 'image';
$GLOBALS['TL_LANG']['tl_galerie']['label_images']  = 'images';
$GLOBALS['TL_LANG']['tl_galerie']['label_video']   = 'video';
$GLOBALS['TL_LANG']['tl_galerie']['label_videos']  = 'videos';
$GLOBALS['TL_LANG']['tl_galerie']['label_iframe']  = 'iframe';
$GLOBALS['TL_LANG']['tl_galerie']['label_iframes'] = 'iframes';

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_galerie']['title_legend']      = 'Title and alias';
$GLOBALS['TL_LANG']['tl_galerie']['themes_legend']     = 'Themes';
$GLOBALS['TL_LANG']['tl_galerie']['dimensions_legend'] = 'Dimensions';
$GLOBALS['TL_LANG']['tl_galerie']['effects_legend']    = 'Effects';
$GLOBALS['TL_LANG']['tl_galerie']['navigation_legend'] = 'Navigation';
$GLOBALS['TL_LANG']['tl_galerie']['publish_legend']    = 'Publish settings';
$GLOBALS['TL_LANG']['tl_galerie']['lightbox_legend']   = 'Lightbox';
$GLOBALS['TL_LANG']['tl_galerie']['images_legend']     = 'Image settings';
$GLOBALS['TL_LANG']['tl_galerie']['autoplay_legend']   = 'Slideshow';
$GLOBALS['TL_LANG']['tl_galerie']['carousel_legend']   = 'Carousel';
$GLOBALS['TL_LANG']['tl_galerie']['show_legend']       = 'Display';
$GLOBALS['TL_LANG']['tl_galerie']['thumbnails_legend'] = 'Thumbnails';
$GLOBALS['TL_LANG']['tl_galerie']['extend_legend']     = 'Expert settings';
$GLOBALS['TL_LANG']['tl_galerie']['flickr_legend']     = 'Flickr';
$GLOBALS['TL_LANG']['tl_galerie']['history_legend']    = 'History Plugin';
$GLOBALS['TL_LANG']['tl_galerie']['error_legend']      = 'Error handling';
$GLOBALS['TL_LANG']['tl_galerie']['fullscreen_legend'] = 'Fullscreen';
$GLOBALS['TL_LANG']['tl_galerie']['picasa_legend']     = 'Picasa';
$GLOBALS['TL_LANG']['tl_galerie']['video_legend']      = 'Video';
$GLOBALS['TL_LANG']['tl_galerie']['idle_legend']       = 'Idle';

/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_galerie']['new']        = array('New gallery', 'Create a new gallery');
$GLOBALS['TL_LANG']['tl_galerie']['edit']       = array('Edit the gallery', 'Edit the gallery ID %s');
$GLOBALS['TL_LANG']['tl_galerie']['editheader'] = array('Edit settings for this gallery', 'Edit settings for the gallery ID %s');
$GLOBALS['TL_LANG']['tl_galerie']['copy']       = array('Duplicate', 'Duplicate the gallery ID %s');
$GLOBALS['TL_LANG']['tl_galerie']['delete']     = array('Delete', 'Delete the gallery ID %s');
$GLOBALS['TL_LANG']['tl_galerie']['toggle']     = array('Publish/unpublish', 'Publish/unpublish the gallery ID %s');
$GLOBALS['TL_LANG']['tl_galerie']['show']       = array('Gallery details', 'Show the details of the gallery ID %s');
