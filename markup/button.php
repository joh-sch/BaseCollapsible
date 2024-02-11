<?php // ————————————————————————————————————————————— DOC. ————————————————————————————————————————————— //
      // ———————————————————————————————————————————————————————————————————————————————————————————————— //

      // ...

      // ———————————————————————————————————————————— GUARD ————————————————————————————————————————————— //
      // ———————————————————————————————————————————————————————————————————————————————————————————————— //
      
      // if(!isset($foo)) return;

      // ———————————————————————————————————————————— ASSETS ———————————————————————————————————————————— //
      // ———————————————————————————————————————————————————————————————————————————————————————————————— //

      $defaultConfig = [
        'text' => $activeLang == 'de' ? 'Weiterlesen…' : 'Read more…'
      ];
      
      // ——————————————————————————————————————————— CONTENT ———————————————————————————————————————————— //
      // ———————————————————————————————————————————————————————————————————————————————————————————————— //
      
      $text = isset($text) ? $text : $defaultConfig['text'];

      ///////////////////////// Availability checks //////////////////////////
      ////////////////////////////////////////////////////////////////////////

      // ...

      // ———————————————————————————————————————— CHECKS/CONFIG. ———————————————————————————————————————— //
      // ———————————————————————————————————————————————————————————————————————————————————————————————— //

      // ...

      ////////////////////// Parts/Sub-component args. ///////////////////////
      ////////////////////////////////////////////////////////////////////////

      // ...
      
      // ———————————————————————————————————————————————————————————————————————————————————————————————— //
      // ———————————————————————————————————————————————————————————————————————————————————————————————— //
      ?>

<button data-is-active="false"
        class         ="group 
                        relative
                        text-left leading-none
                        cursor-pointer"
                        
        onClick       ="(() => { const content = this.closest('div').querySelector('[data-ref=content]');
                                  const btn     = this;
                                  const is_open = btn.dataset.isActive === 'true';
                                  btn.setAttribute('data-is-active', !is_open);
                                  content.setAttribute('data-is-hidden', is_open);})()">

  <?php // Button text // ?>
  <span><?= $text ?></span>

</button>