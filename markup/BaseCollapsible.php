<?php // ————————————————————————————————————————————— DOC. ————————————————————————————————————————————— //
      // ———————————————————————————————————————————————————————————————————————————————————————————————— //

      // ...

      // ———————————————————————————————————————————— GUARD ————————————————————————————————————————————— //
      // ———————————————————————————————————————————————————————————————————————————————————————————————— //
      
      if(!isset($block)) return;

      // ———————————————————————————————————————————— ASSETS ———————————————————————————————————————————— //
      // ———————————————————————————————————————————————————————————————————————————————————————————————— //

      // ...
      
      // ——————————————————————————————————————————— CONTENT ———————————————————————————————————————————— //
      // ———————————————————————————————————————————————————————————————————————————————————————————————— //
      
      $ID             = $block->id();
      $buttonText     = $block->buttonText();
      $layoutSections = $block->layout()->toLayouts();

      ///////////////////////// Availability checks //////////////////////////
      ////////////////////////////////////////////////////////////////////////

      $has_layoutSections = $block->layout()->isNotEmpty();

      // ——————————————————————————————————————————— CONFIG. ———————————————————————————————————————————— //
      // ———————————————————————————————————————————————————————————————————————————————————————————————— //

      $version = $block->version();

      // ————————————————————————— Config. dependant content —————————————————————————— //
      // —————————————————————————————————————————————————————————————————————————————— //

      // ...

      ////////////////////// Parts/Sub-component args. ///////////////////////
      ////////////////////////////////////////////////////////////////////////

      $args_button  = ['text' => $buttonText];
      $args_content = ['layoutSections' => $layoutSections];
      
      // ———————————————————————————————————————————————————————————————————————————————————————————————— //
      // ———————————————————————————————————————————————————————————————————————————————————————————————— //
      ?>

<div id            ="<?= $ID ?>"

     g-component   ="BaseCollapsible"
     g-version     ="<?= $version ?>"

     data-is-hidden="false"
     data-is-active="true"

     class         ="BaseCollapsible group/BaseCollapsible">
             
  <?php ////////////
        // Button //
        //////////// 
        
        snippet('BaseCollapsible/button', $args_button);
        
        /////////////
        // Content //
        /////////////

        snippet('BaseCollapsible/content', $args_content);
        ?>

</div>