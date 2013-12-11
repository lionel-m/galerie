<?php
class GalleriaRunonceJob extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->import('Database');
    }
    public function run()
    {
        if (version_compare(VERSION, '3.2', '>=') && $this->Database->tableExists('tl_galerie_pictures'))
        {
            $arrFields = $this->Database->listFields('tl_galerie_pictures');

            foreach ($arrFields as $arrField)
            {
                if ($arrField['name'] == 'fullscreenSingleSRC' && $arrField['type'] != 'binary')
                {
                    Database\Updater::convertSingleField('tl_galerie_pictures', 'fullscreenSingleSRC');
                }
                else if ($arrField['name'] == 'singleSRC' && $arrField['type'] != 'binary')
                {
                    Database\Updater::convertSingleField('tl_galerie_pictures', 'singleSRC');
                }
                else if ($arrField['name'] == 'thumbSRC' && $arrField['type'] != 'binary')
                {
                    Database\Updater::convertSingleField('tl_galerie_pictures', 'thumbSRC');
                }
            }
        }

        if (version_compare(VERSION, '3.2', '>=') && $this->Database->tableExists('tl_galerie'))
        {
            $arrFields = $this->Database->listFields('tl_galerie');

            foreach ($arrFields as $arrField)
            {
                if ($arrField['name'] == 'themesSRC' && $arrField['type'] != 'binary')
                {
                    Database\Updater::convertSingleField('tl_galerie', 'themesSRC');
                }
                else if ($arrField['name'] == 'dummy' && $arrField['type'] != 'binary')
                {
                    Database\Updater::convertSingleField('tl_galerie', 'dummy');
                }
            }
        }

        if (version_compare(VERSION, '3.2', '>=') && $this->Database->tableExists('tl_content'))
        {
            $arrFields = $this->Database->listFields('tl_content');

            foreach ($arrFields as $arrField)
            {
                if ($arrField['name'] == 'imagesFolder' && $arrField['type'] != 'binary')
                {
                    Database\Updater::convertMultiField('tl_content', 'imagesFolder');
                }
            }
        }

        if (version_compare(VERSION, '3.2', '>=') && $this->Database->tableExists('tl_module'))
        {
            $arrFields = $this->Database->listFields('tl_module');

            foreach ($arrFields as $arrField)
            {
                if ($arrField['name'] == 'imagesFolder' && $arrField['type'] != 'binary')
                {
                    Database\Updater::convertMultiField('tl_content', 'imagesFolder');
                }
            }
        }
    }
}
$objGalleriaRunonceJob = new GalleriaRunonceJob();
$objGalleriaRunonceJob->run();
?>