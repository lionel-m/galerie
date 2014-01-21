<?php
class GalleriaRunonceJob extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->import('Database');
    }
    public function run() {

        Database\Updater::convertSingleField('tl_galerie_pictures', 'fullscreenSingleSRC');
        Database\Updater::convertSingleField('tl_galerie_pictures', 'singleSRC');
        Database\Updater::convertSingleField('tl_galerie_pictures', 'thumbSRC');

        Database\Updater::convertSingleField('tl_galerie', 'themesSRC');
        Database\Updater::convertSingleField('tl_galerie', 'dummy');

        Database\Updater::convertMultiField('tl_content', 'imagesFolder');
        Database\Updater::convertMultiField('tl_content', 'imagesFolder');
    }
}
$objGalleriaRunonceJob = new GalleriaRunonceJob();
$objGalleriaRunonceJob->run();
?>