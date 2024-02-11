<?php // ————————————————————————————————————————————— DOC. ————————————————————————————————————————————— //
      // ———————————————————————————————————————————————————————————————————————————————————————————————— //

      // ...

      // ———————————————————————————————————————————— GUARD ————————————————————————————————————————————— //
      // ———————————————————————————————————————————————————————————————————————————————————————————————— //
      
      if(!isset($layoutSections) || $layoutSections->isEmpty()) return;

      // ———————————————————————————————————————————— ASSETS ———————————————————————————————————————————— //
      // ———————————————————————————————————————————————————————————————————————————————————————————————— //

      // ... 
      
      // ——————————————————————————————————————————— CONTENT ———————————————————————————————————————————— //
      // ———————————————————————————————————————————————————————————————————————————————————————————————— //
      
      // ...

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

<div data-ref      ="content"
     data-is-hidden="true"
     class         ="data-[is-hidden=true]:hidden">

  <?php // Layout sections //
        foreach($layoutSections as $s): ?>
          <section class="@container/section mt-[1em] first:mt-0">

            <?php foreach($s->columns() as $col): ?>
                    <div class="@container/column">
                      <?php foreach($col->blocks() as $b) {
                              $type = $b->type();
                              $args = ['block'  => $b];
                              snippet('blocks/' . $type, $args);
                            } ?>
                    </div>
            <?php endforeach; ?>

          </section>
  <?php endforeach ?>

</div>