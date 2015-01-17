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
                'sql' => array
                (
                        'keys' => array
                        (
                                'id' => 'primary',
                                'pid' => 'index'
                        )
                )
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
                                'href'                => 'act=paste&amp;mode=copy',
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
                'default'                     => '{title_legend},title;{image_fullscreen_legend},fullscreenSingleSRC;{image_legend},singleSRC,alt,imageUrl,size;{thumbnail_legend},thumbSize;{altThumbnail_legend},thumbSRC;{video_legend},video;{iframe_legend},iframe,iframeThumb;{layerHTML_legend},layerHTML;{dataConfigHTML_legend},dataConfigHTML;{publish_legend},published'
        ),

        // Fields
        'fields' => array
        (
                'id' => array
                (
                        'sql'                     => "int(10) unsigned NOT NULL auto_increment"
                ),
                'pid' => array
                (
                        'foreignKey'              => 'tl_galerie.title',
                        'sql'                     => "int(10) unsigned NOT NULL default '0'",
                        'relation'                => array('type'=>'belongsTo', 'load'=>'eager')
                ),
                'sorting' => array
                (
                        'label'                   => &$GLOBALS['TL_LANG']['MSC']['sorting'],
                        'sorting'                 => true,
                        'flag'                    => 2,
                        'sql'                     => "int(10) unsigned NOT NULL default '0'"
                ),
                'tstamp' => array
                (
                        'sql'                     => "int(10) unsigned NOT NULL default '0'"
                ),
                'published' => array
                (
                        'label'                   => &$GLOBALS['TL_LANG']['tl_galerie_pictures']['published'],
                        'exclude'                 => true,
                        'filter'                  => true,
                        'flag'                    => 2,
                        'inputType'               => 'checkbox',
                        'eval'                    => array('doNotCopy' => true, 'tl_class' => 'w50 m12'),
                        'sql'                     => "char(1) NOT NULL default ''"
                ),
                'title' => array
                (
                        'label'                   => &$GLOBALS['TL_LANG']['tl_galerie_pictures']['title'],
                        'exclude'                 => true,
                        'search'                  => true,
                        'inputType'               => 'text',
                        'eval'                    => array('maxlength' => 255, 'tl_class' => 'w50'),
                        'sql'                     => "varchar(255) NOT NULL default ''"
                ),
                'fullscreenSingleSRC' => array
                (
                        'label'                   => &$GLOBALS['TL_LANG']['tl_galerie_pictures']['fullscreenSingleSRC'],
                        'exclude'                 => true,
                        'inputType'               => 'fileTree',
                        'eval'                    => array('fieldType' => 'radio',
                                                           'extensions'=>Config::get('validImageTypes'),
                                                           'files' => true,
                                                           'filesOnly' => true
                                                          ),
                        'sql'                     => "binary(16) NULL"
                ),
                'singleSRC' => array
                (
                        'label'                   => &$GLOBALS['TL_LANG']['tl_galerie_pictures']['singleSRC'],
                        'exclude'                 => true,
                        'inputType'               => 'fileTree',
                        'eval'                    => array('fieldType' => 'radio',
                                                           'extensions'=>Config::get('validImageTypes'),
                                                           'files' => true,
                                                           'filesOnly' => true
                                                          ),
                        'sql'                     => "binary(16) NULL"
                ),
                'thumbSRC' => array
                (
                        'label'                   => &$GLOBALS['TL_LANG']['tl_galerie_pictures']['thumbSRC'],
                        'exclude'                 => true,
                        'inputType'               => 'fileTree',
                        'eval'                    => array('fieldType' => 'radio',
                                                           'extensions'=>Config::get('validImageTypes'),
                                                           'files' => true,
                                                           'filesOnly' => true
                                                          ),
                        'sql'                     => "binary(16) NULL"
                ),
                'alt' => array
                (
                        'label'                   => &$GLOBALS['TL_LANG']['tl_galerie_pictures']['alt'],
                        'exclude'                 => true,
                        'inputType'               => 'textarea',
                        'eval'                    => array('preserveTags'=>false, 'decodeEntities'=>true, 'tl_class'=>'clr'),
                        'sql'                     => "text NULL"
                ),
                'imageUrl' => array
                (
                        'label'                   => &$GLOBALS['TL_LANG']['tl_galerie_pictures']['imageUrl'],
                        'exclude'                 => true,
                        'inputType'               => 'text',
                        'eval'                    => array('rgxp'=>'url',
                                                           'decodeEntities'=>true,
                                                           'maxlength'=>255,
                                                           'tl_class'=>'w50 wizard'
                                                          ),
                        'wizard'                  => array (
                                                                array('tl_galerie_pictures', 'pagePicker')
                                                           ),
                        'sql'                     => "varchar(255) NOT NULL default ''"
                ),
                'size' => array
                (
                        'label'                   => &$GLOBALS['TL_LANG']['tl_galerie_pictures']['size'],
                        'exclude'                 => true,
                        'inputType'               => 'imageSize',
                        'options'                 => $GLOBALS['TL_CROP'],
                        'reference'               => &$GLOBALS['TL_LANG']['MSC'],
                        'eval'                    => array('rgxp' => 'digit', 'nospace' => true, 'tl_class' => 'w50'),
                        'sql'                     => "varchar(64) NOT NULL default ''"
                ),
                'thumbSize' => array
                (
                        'label'                   => &$GLOBALS['TL_LANG']['tl_galerie_pictures']['thumbSize'],
                        'exclude'                 => true,
                        'inputType'               => 'imageSize',
                        'options'                 => $GLOBALS['TL_CROP'],
                        'reference'               => &$GLOBALS['TL_LANG']['MSC'],
                        'eval'                    => array('rgxp' => 'digit', 'nospace' => true, 'tl_class' => 'w50'),
                        'sql'                     => "varchar(64) NOT NULL default ''"
                ),
                'video' => array
                (
                        'label'                   => &$GLOBALS['TL_LANG']['tl_galerie_pictures']['video'],
                        'exclude'                 => true,
                        'search'                  => true,
                        'inputType'               => 'text',
                        'eval'                    => array('maxlength' => 255, 'tl_class' => 'w50'),
                        'sql'                     => "varchar(255) NOT NULL default ''"
                ),
                'iframe' => array
                (
                        'label'                   => &$GLOBALS['TL_LANG']['tl_galerie_pictures']['iframe'],
                        'exclude'                 => true,
                        'search'                  => true,
                        'inputType'               => 'text',
                        'eval'                    => array('maxlength' => 255, 'tl_class' => 'w50'),
                        'sql'                     => "varchar(255) NOT NULL default ''"
                ),
                'iframeThumb' => array
                (
                        'label'                   => &$GLOBALS['TL_LANG']['tl_galerie_pictures']['iframeThumb'],
                        'exclude'                 => true,
                        'inputType'               => 'checkbox',
                        'eval'                    => array('isBoolean' => true, 'tl_class'=>'w50 m12'),
                        'sql'                     => "char(1) NOT NULL default ''"
                ),
                'dataConfigHTML' => array
                (
                        'label'                   => &$GLOBALS['TL_LANG']['tl_galerie_pictures']['dataConfigHTML'],
                        'exclude'                 => true,
                        'inputType'               => 'textarea',
                        'eval'                    => array('preserveTags'=>true,
                                                           'decodeEntities'=>true,
                                                           'class'=>'monospace',
                                                           'rte'=>'ace|html',
                                                           'tl_class'=>'clr'
                                                          ),
                        'sql'                     => "text NULL"
                ),
                'layerHTML' => array
                (
                        'label'                   => &$GLOBALS['TL_LANG']['tl_galerie_pictures']['layerHTML'],
                        'exclude'                 => true,
                        'inputType'               => 'textarea',
                        'eval'                    => array('preserveTags'=>true,
                                                           'decodeEntities'=>true,
                                                           'class'=>'monospace',
                                                           'rte'=>'ace|html',
                                                           'tl_class'=>'clr'
                                                          ),
                        'sql'                     => "text NULL"
                )
        )
);

/**
 * Class tl_galerie_pictures
 *
 * Provide miscellaneous methods that are used by the data configuration array.
 * @package Controller
 */
class tl_galerie_pictures extends Backend
{
    /**
     * Import the back end user object
     */
    public function __construct()
    {
        parent::__construct();
        $this->import('BackendUser', 'User');
    }

    /**
     * Add the type of input field
     *
     * @param array
     * @return string
     */
    public function listPictures($arrRow)
    {
        $type = '';
        $key = ($arrRow['published']) ? 'published' : 'unpublished';
        $objFile = FilesModel::findByUuid($arrRow['singleSRC']);
        $image = Image::get($objFile->path, 200, 150, 'center_center');

        if ($arrRow['title']) {
            $title = $arrRow['title'];
        } else {
            $title = $GLOBALS['TL_LANG']['tl_galerie_pictures']['untitled'];
        }

        if ($arrRow['video']) {
            $type = $GLOBALS['TL_LANG']['tl_galerie_pictures']['label_video'];
            $type .= " " . $GLOBALS['TL_LANG']['tl_galerie_pictures']['from'] . " " . $this->videoSharingWebsiteName($arrRow['video']);
        } elseif ($arrRow['iframe']) {
            $type = $GLOBALS['TL_LANG']['tl_galerie_pictures']['label_iframe'];
        } else {
            $type = $GLOBALS['TL_LANG']['tl_galerie_pictures']['label_image'];
        }

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
    protected function videoSharingWebsiteName($url)
    {
        $videoSharingWebsiteName = '';

        // Extract the hostname of the url.
        $url_parsed = parse_url($url);
        $domain = $url_parsed['host'];
        // Delete the prefix www.
        $domain = preg_replace('/www./', '', $domain);

        switch($domain) {
            case $domain == 'dai.ly'  || $domain == 'dailymotion.com':
                $videoSharingWebsiteName = 'dailymotion';
                break;
            case $domain == 'youtu.be' || $domain == 'youtube.com':
                $videoSharingWebsiteName = 'youtube';
                break;
            case $domain == 'vimeo.com':
                $videoSharingWebsiteName = 'vimeo';
                break;
            default: $videoSharingWebsiteName = 'undefined';
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
    public function toggleIcon($row, $href, $label, $title, $icon, $attributes)
    {
        if (strlen(Input::get('tid'))) {
            $this->toggleVisibility(Input::get('tid'), (Input::get('state') == 1));
            $this->redirect($this->getReferer());
        }

        // Check permissions AFTER checking the tid, so hacking attempts are logged
        if (!$this->User->isAdmin && !$this->User->hasAccess('tl_galerie_pictures::published', 'alexf')) {
            return '';
        }

        $href .= '&amp;tid=' . $row['id'] . '&amp;state=' . ($row['published'] ? '' : 1);

        if (!$row['published']) {
            $icon = 'invisible.gif';
        }

        return '<a href="' . $this->addToUrl($href) . '" title="' . specialchars($title) . '"' . $attributes . '>' . Image::getHtml($icon, $label) . '</a> ';
    }

    /**
     * Disable/enable a user group
     * @param integer
     * @param boolean
     */
    public function toggleVisibility($intId, $blnVisible)
    {
        // Check permissions to publish
        if (!$this->User->isAdmin && !$this->User->hasAccess('tl_galerie_pictures::published', 'alexf')) {
            $this->log('Not enough permissions to publish/unpublish image ID "'.$intId.'"', __METHOD__, TL_ERROR);
            $this->redirect('contao/main.php?act=error');
        }

        $objVersions = new Versions('tl_galerie_pictures', $intId);
        $objVersions->initialize();

        // Trigger the save_callback
        if (is_array($GLOBALS['TL_DCA']['tl_galerie_pictures']['fields']['published']['save_callback'])) {
            foreach ($GLOBALS['TL_DCA']['tl_galerie_pictures']['fields']['published']['save_callback'] as $callback) {
                $this->import($callback[0]);
                $blnVisible = $this->$callback[0]->$callback[1]($blnVisible, $this);
            }
        }

        // Update the database
        $this->Database->prepare("UPDATE tl_galerie_pictures SET tstamp=". time() .", published='" . ($blnVisible ? 1 : '') . "' WHERE id=?")
                        ->execute($intId);

        $objVersions->create();
        $this->log('A new version of record "tl_galerie_pictures.id='.$intId.'" has been created'.$this->getParentEntries('tl_galerie_pictures', $intId), __METHOD__, TL_GENERAL);
    }

    /**
     * Return the link picker wizard
     * @param \DataContainer
     * @return string
     */
    public function pagePicker(DataContainer $dc)
    {
        return ' <a href="contao/page.php?do='.Input::get('do').'&amp;table='.$dc->table.'&amp;field='.$dc->field.'&amp;value='.str_replace(array('{{link_url::', '}}'), '', $dc->value).'" title="'.specialchars($GLOBALS['TL_LANG']['MSC']['pagepicker']).'" onclick="Backend.getScrollOffset();Backend.openModalSelector({\'width\':765,\'title\':\''.specialchars(str_replace("'", "\\'", $GLOBALS['TL_LANG']['MOD']['page'][0])).'\',\'url\':this.href,\'id\':\''.$dc->field.'\',\'tag\':\'ctrl_'.$dc->field . ((Input::get('act') == 'editAll') ? '_' . $dc->id : '').'\',\'self\':this});return false">' . $this->generateImage('pickpage.gif', $GLOBALS['TL_LANG']['MSC']['pagepicker'], 'style="vertical-align:top;cursor:pointer"') . '</a>';
    }
}
