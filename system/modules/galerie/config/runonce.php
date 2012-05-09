<?php
   class galerieRunonceJob extends Controller
   {
      public function __construct()
      {
         parent::__construct();
         $this->import('Database');
      }
      public function run()
      {
         if ($this->Database->tableExists('tl_galerie')) {
            $this->Database->execute("UPDATE tl_galerie SET idleMode=true");
            $this->Database->execute("UPDATE tl_galerie SET idleTime='3000'");
            $this->Database->execute("UPDATE tl_galerie SET idleSpeed='200'");
         }
      }
   }
   $objGalerieRunonceJob = new galerieRunonceJob();
   $objGalerieRunonceJob->run();
?>