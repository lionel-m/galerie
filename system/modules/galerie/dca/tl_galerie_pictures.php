<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2012 Leo Feyer
 *
 * @package galerie
 * @link    http://www.contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

/**
 * Table tl_galerie_pictures 
 */
$GLOBALS['TL_DCA']['tl_galerie_pictures'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'               => 'Table',
		'enableVersioning'            => true,
                'ptable'                      => 'tl_galerie',
	),

	// List
	'list' => array
	(
		'sorting' => array
		(
			'mode' => 4,
                        'fields' => array('sorting'),
                        'filter' => true,
                        'flag' => 11,
                        'panelLayout' => 'filter,search,limit',
                        'headerFields' => array('title', 'width', 'height'),
                        'child_record_callback' => array('tl_galerie_pictures', 'listPictures')
		),
		'global_operations' => array
		(
			'all' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['MSC']['all'],
				'href'                => 'act=select',
				'class'               => 'header_edit_all',
				'attributes'          => 'onclick="Backend.getScrollOffset();" accesskey="e"'
			)
		),
		'operations' => array
		(
			'edit' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_galerie_pictures']['edit'],
				'href'                => 'act=edit',
				'icon'                => 'edit.gif'
			),
			'copy' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_galerie_pictures']['copy'],
				'href'                => 'act=copy',
				'icon'                => 'copy.gif'
			),
                        'cut' => array
                        (
                                'label'               => &$GLOBALS['TL_LANG']['tl_galerie_pictures']['cut'],
                                'href'                => 'act=paste&amp;mode=cut',
                                'icon'                => 'cut.gif'
                        ),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_galerie_pictures']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.gif',
				'attributes'          => 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
			),
                        'toggle' => array
                        (
                                'label'               => &$GLOBALS['TL_LANG']['tl_galerie_pictures']['toggle'],
                                'icon'                => 'visible.gif',
                                'attributes'          => 'onclick="Backend.getScrollOffset(); return AjaxRequest.toggleVisibility(this, %s);"',
                                'button_callback'     => array('tl_galerie_pictures', 'toggleIcon')
                        ),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_galerie_pictures']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.gif'
			)
		)
	),

	// Palettes
	'palettes' => array
	(
		'__selector__'                => array(''),
		'default'                     => '{title_legend},title;{image_fullscreen_legend},fullscreenSingleSRC;{image_legend},singleSRC,alt,imageUrl,size;{thumbnail_legend},thumbSize;{altThumbnail_legend},thumbSRC;{video_legend},video,videoThumb;{iframe_legend},iframe,iframeThumb;{dataConfigHTML_legend},dataConfigHTML;{publish_legend},published'
	),

	// Subpalettes
	'subpalettes' => array
	(
		''                            => ''
	),

	// Fields
	'fields' => array
	(
		'published' => array
                (
                        'label'                   => &$GLOBALS['TL_LANG']['tl_galerie_pictures']['published'],
                        'exclude'                 => true,
                        'filter'                  => true,
                        'flag'                    => 2,
                        'inputType'               => 'checkbox',
                        'eval'                    => array('doNotCopy' => true, 'tl_class' => 'w50 m12')
                ),
                'title' => array
                (
                        'label'                   => &$GLOBALS['TL_LANG']['tl_galerie_pictures']['title'],
                        'exclude'                 => true,
                        'search'                  => true,
                        'inputType'               => 'text',
                        'eval'                    => array('maxlength' => 255, 'tl_class' => 'w50')
                ),
                'fullscreenSingleSRC' => array
                (
                        'label'                   => &$GLOBALS['TL_LANG']['tl_galerie_pictures']['fullscreenSingleSRC'],
                        'exclude'                 => true,
                        'inputType'               => 'fileTree',
                        'eval'                    => array('fieldType' => 'radio', 'files' => true, 'filesOnly' => true)
                ),
                'singleSRC' => array
                (
                        'label'                   => &$GLOBALS['TL_LANG']['tl_galerie_pictures']['singleSRC'],
                        'exclude'                 => true,
                        'inputType'               => 'fileTree',
                        'eval'                    => array('fieldType' => 'radio', 'files' => true, 'filesOnly' => true)
                ),
                'thumbSRC' => array
                (
                        'label'                   => &$GLOBALS['TL_LANG']['tl_galerie_pictures']['thumbSRC'],
                        'exclude'                 => true,
                        'inputType'               => 'fileTree',
                        'eval'                    => array('fieldType' => 'radio', 'files' => true, 'filesOnly' => true)
                ),
                'alt' => array
                (
                        'label'                   => &$GLOBALS['TL_LANG']['tl_galerie_pictures']['alt'],
                        'exclude'                 => true,
                        'inputType'               => 'textarea',
                        'eval'                    => array('preserveTags'=>false, 'decodeEntities'=>true, 'tl_class' => 'clr')
                ),
                'imageUrl' => array
                (
                        'label'                   => &$GLOBALS['TL_LANG']['tl_galerie_pictures']['imageUrl'],
                        'exclude'                 => true,
                        'inputType'               => 'text',
                        'eval'                    => array('rgxp' => 'url', 'decodeEntities' => true, 'maxlength' => 255, 'tl_class' => 'w50 wizard'),
                        'wizard'                  => array
                        (
                            array('tl_galerie_pictures', 'pagePicker')
                        )
                ),
                'size' => array
                (
                        'label'                   => &$GLOBALS['TL_LANG']['tl_galerie_pictures']['size'],
                        'exclude'                 => true,
                        'inputType'               => 'imageSize',
                        'options'                 => (version_compare(VERSION.'.'.BUILD, '2.11.0', '>=') ? $GLOBALS['TL_CROP'] : array('crop', 'proportional', 'box')),
                        'reference'               => &$GLOBALS['TL_LANG']['MSC'],
                        'eval'                    => array('rgxp' => 'digit', 'nospace' => true, 'tl_class' => 'w50')
                ),
                'thumbSize' => array
                (
                        'label'                   => &$GLOBALS['TL_LANG']['tl_galerie_pictures']['thumbSize'],
                        'exclude'                 => true,
                        'inputType'               => 'imageSize',
                        'options'                 => (version_compare(VERSION.'.'.BUILD, '2.11.0', '>=') ? $GLOBALS['TL_CROP'] : array('crop', 'proportional', 'box')),
                        'reference'               => &$GLOBALS['TL_LANG']['MSC'],
                        'eval'                    => array('rgxp' => 'digit', 'nospace' => true, 'tl_class' => 'w50')
                ),
                'video' => array
                (
                        'label'                   => &$GLOBALS['TL_LANG']['tl_galerie_pictures']['video'],
                        'exclude'                 => true,
                        'search'                  => true,
                        'inputType'               => 'text',
                        'eval'                    => array('maxlength' => 255, 'tl_class' => 'w50')
                ),
                'videoThumb' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie_pictures']['videoThumb'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('isBoolean' => true, 'tl_class'=>'w50 m12')
		),
                'iframe' => array
                (
                        'label'                   => &$GLOBALS['TL_LANG']['tl_galerie_pictures']['iframe'],
                        'exclude'                 => true,
                        'search'                  => true,
                        'inputType'               => 'text',
                        'eval'                    => array('maxlength' => 255, 'tl_class' => 'w50')
                ),
                'iframeThumb' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie_pictures']['iframeThumb'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('isBoolean' => true, 'tl_class'=>'w50 m12')
		),
                'dataConfigHTML' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_galerie_pictures']['dataConfigHTML'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'textarea',
			'eval'                    => (version_compare(VERSION.'.'.BUILD, '2.10.0', '>=') ? array('preserveTags'=>true, 'decodeEntities'=>true, 'class'=>'monospace', 'rte'=>'codeMirror|html', 'tl_class'=>'clr') : array('preserveTags'=>true, 'decodeEntities'=>true, 'class'=>'monospace', 'tl_class'=>'clr'))
		)
	)
);

/**
 * Class tl_galerie_pictures
 *
 * Provide miscellaneous methods that are used by the data configuration array.
 * @package Controller
 */
class tl_galerie_pictures extends Backend {

    /**
     * Add the type of input field
     *
     * @param array
     * @return string
     */
    public function listPictures($arrRow) {

        $type = '';
        $key = ($arrRow['published']) ? 'published' : 'unpublished';
        $image = $this->getImage($arrRow['singleSRC'], 150, 150, 'box');
        
        if($arrRow['title'])
            $title = $arrRow['title'];
        else
            $title = $GLOBALS['TL_LANG']['tl_galerie_pictures']['untitled'];
        
        if($arrRow['video']) {
            $type = $GLOBALS['TL_LANG']['tl_galerie_pictures']['label_video'];
            $type .= " " . $GLOBALS['TL_LANG']['tl_galerie_pictures']['from'] . " " . $this->videoSharingWebsiteName($arrRow['video']);
        }
        elseif($arrRow['iframe'])
            $type = $GLOBALS['TL_LANG']['tl_galerie_pictures']['label_iframe'];
        else
            $type = $GLOBALS['TL_LANG']['tl_galerie_pictures']['label_image'];
        
        return '
          <div class="cte_type ' . $key . '" style="color:#444;"> ' . '<span style="color:#777;">[' . $type . ']</span> - ' . $title . '</div>
          <div class="limit_height h64 block' . (!$GLOBALS['TL_CONFIG']['doNotCollapse'] ? ' h52' : '') . ' block">
          <div style="float: left; margin-right: 10px;">'
          . ($arrRow['singleSRC'] ? '<img src="' . $image . '" />' : '')
          .'</div>'
        . '</div>' . "\n";
    }
    
    /**
     * Return the name of the video sharing website
     * 
     * @access protected
     * @param String
     * @return String
     */
    protected function videoSharingWebsiteName($url) {
        
        $videoSharingWebsiteName = '';
        
        $url = Galleria::urlVerification($url);
        
        // Extract the hostname of the url.
        $url_parsed = parse_url($url);
        $domain = $url_parsed['host'];
        // Delete the prefix www.
        $domain = preg_replace('/www./', '', $domain);
        
        switch($domain) {
            case $domain == 'dai.ly'  || $domain == 'dailymotion.com' :
                $videoSharingWebsiteName = 'dailymotion';
                break;
            case $domain == 'youtu.be' || $domain == 'youtube.com' :
                $videoSharingWebsiteName = 'youtube';
                break;
            case $domain == 'vimeo.com' :
                $videoSharingWebsiteName = 'vimeo';
                break;
            default : $videoSharingWebsiteName = 'undefined';
        }
        
        return $videoSharingWebsiteName;
    }

    /**
     * Return the "toggle visibility" button
     * @param array
     * @param string
     * @param string
     * @param string
     * @param string
     * @param string
     * @return string
     */
    public function toggleIcon($row, $href, $label, $title, $icon, $attributes) {

        if (strlen($this->Input->get('tid'))) {

            $this->toggleVisibility($this->Input->get('tid'), ($this->Input->get('state') == 1));
            $this->redirect($this->getReferer());
        }

        $href .= '&amp;tid=' . $row['id'] . '&amp;state=' . ($row['published'] ? '' : 1);

        if (!$row['published']) {

            $icon = 'invisible.gif';
        }

        return '<a href="' . $this->addToUrl($href) . '" title="' . specialchars($title) . '"' . $attributes . '>' . $this->generateImage($icon, $label) . '</a> ';
    }

    /**
     * Disable/enable a user group
     * @param integer
     * @param boolean
     */
    public function toggleVisibility($intId, $blnVisible) {

        $this->createInitialVersion('tl_galerie_pictures', $intId);

        // Trigger the save_callback
        if (is_array($GLOBALS['TL_DCA']['tl_galerie_pictures']['fields']['published']['save_callback'])) {

            foreach ($GLOBALS['TL_DCA']['tl_galerie_pictures']['fields']['published']['save_callback'] as $callback) {

                $this->import($callback[0]);
                $blnVisible = $this->$callback[0]->$callback[1]($blnVisible, $this);
            }
        }

        // Update the database
        $this->Database->prepare("UPDATE tl_galerie_pictures SET published='" . ($blnVisible ? 1 : '') . "' WHERE id=?")
                ->execute($intId);

        $this->createNewVersion('tl_galerie_pictures', $intId);
    }

    /**
     * Return the link picker wizard
     * @param object
     * @return string
     */
    public function pagePicker(DataContainer $dc) {
        $strField = 'ctrl_' . $dc->field . (($this->Input->get('act') == 'editAll') ? '_' . $dc->id : '');
        return ' ' . $this->generateImage('pickpage.gif', $GLOBALS['TL_LANG']['MSC']['pagepicker'], 'style="vertical-align:top; cursor:pointer;" onclick="Backend.pickPage(\'' . $strField . '\')"');
    }

}

?>