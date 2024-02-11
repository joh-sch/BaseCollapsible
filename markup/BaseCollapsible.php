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
      
      $ID = $block->id();

      ///////////////////////// Availability checks //////////////////////////
      ////////////////////////////////////////////////////////////////////////

      // ...

      // ——————————————————————————————————————————— CONFIG. ———————————————————————————————————————————— //
      // ———————————————————————————————————————————————————————————————————————————————————————————————— //

      $version               = $block->version();
      
      // Typography
      $fontSize              = $block->fontSize()->toObject();
      $lineHeight            = $block->lineHeight()->toObject();
      $has_ownFontSize       = isset($fontSize)   && $fontSize->isNotEmpty();
      $has_ownLineHeight     = isset($lineHeight) && $lineHeight->isNotEmpty();
      $fontSizeBreakpoints   = $has_ownFontSize   ? derive_componentPropBreakpoints($fontSize)   : [];
      $lineHeightBreakpoints = $has_ownLineHeight ? derive_componentPropBreakpoints($lineHeight) : [];

      // ————————————————————————— Config. dependant content —————————————————————————— //
      // —————————————————————————————————————————————————————————————————————————————— //

      // ...

      ////////////////////// Parts/Sub-component args. ///////////////////////
      ////////////////////////////////////////////////////////////////////////

      // ...
      
      // ———————————————————————————————————————————————————————————————————————————————————————————————— //
      // ———————————————————————————————————————————————————————————————————————————————————————————————— //
      ?>

<div id            ="<?= $ID ?>"

     g-component   ="BaseCollapsible"
     g-version     ="<?= $version ?>"

     data-is-hidden="false"
     data-is-active="true"

     class         ="BaseCollapsible group/BaseCollapsible

                     data-[is-active=false]:opacity-0
                     data-[is-active=false]:pointer-events-none
                     data-[is-hidden=true]:opacity-0
                     data-[is-hidden=true]:pointer-events-none
                     
                     <?php // Font size & line height classes // 
                           render_componentFontSizeClasses($fontSizeBreakpoints);
                           render_componentLineHeightClasses($lineHeightBreakpoints); ?>"
   
     style         ="<?php // Font size & line height (CSS variables) //
                           render_componentFontSize($fontSize);
                           render_componentLineHeight($lineHeight); ?>">
             
  BaseCollapsible
</div>