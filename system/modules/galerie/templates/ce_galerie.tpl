<div class="<?php echo $this->class; ?> block"<?php echo $this->cssID; ?><?php if ($this->style): ?> style="<?php echo $this->style; ?>"<?php endif; ?>>
    <?php if ($this->headline): ?>
        <<?php echo $this->hl; ?>><?php echo $this->headline; ?></<?php echo $this->hl; ?>>
    <?php endif; ?>
    
        <?php if (($this->flickr == FALSE) && ($this->picasa == FALSE)): ?>
        
            <div id="<?php echo $this->alias.'-'.$this->tstamp; ?>">

                <?php foreach ($this->pictures as $pictures):
                        echo '<a' . ($pictures['imageFullscreenSRC'] ? ' rel="'.$pictures['imageFullscreenSRC'].'" ' : ' ') . 'href="'.$pictures['imageSRC'].'"><img alt="'.$pictures['alt'].'" title="'.$pictures['title'].'" src="'.$pictures['thumbnailSRC'].'" ' . ($pictures['imageUrl'] ? 'longdesc="'.$pictures['imageUrl'].'" ' : '') . '/></a>';
                      endforeach; ?>

            </div>

            <?php else: echo '<div id='.$this->alias.'-'.$this->tstamp.'></div>'; ?>
        
        <?php endif; ?>
        
        <?php if (($this->noImages) && ($this->flickr == FALSE) && ($this->picasa == FALSE)): echo '<p>'.$this->noImages.'</p>'; endif; ?>
</div>

<script>
    <!--//--><![CDATA[//><!--
    // Load JS file theme
    Galleria.loadTheme('<?php echo $this->pathJS; ?>');
    
    // Initialize Galleria
    jQuery.noConflict();
    jQuery(document).ready(function(){
	jQuery('#<?php echo $this->alias.'-'.$this->tstamp; ?>').galleria(<?php if($this->options) echo '{'; ?>

        <?php
            for ($i = 0; $i < count($this->options); $i++) {
                echo($this->options[$i]);
            }
        ?>
              
        <?php if ($this->flickr == TRUE): echo ',' ?>
            
            <?php echo $this->flickrFunction; ?>

        <?php endif; ?>

        <?php if ($this->picasa == TRUE): echo ',' ?>
            
            <?php echo $this->picasaFunction; ?>

        <?php endif; ?>

        <?php if($this->options) echo '}'; ?>);
    });
    //--><!]]>
</script>

    