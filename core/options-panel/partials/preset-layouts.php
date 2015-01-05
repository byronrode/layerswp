<?php // Fetch current user information
$user = wp_get_current_user(); ?>

<?php // Instantiate the widget migrator
$layers_migrator = new Layers_Widget_Migrator(); ?>

<?php // Get builder pages
$find_builder_page = layers_get_builder_pages(); ?>

<section class="layers-welcome">

   <div class="layers-page-title layers-section-title layers-large layers-content-massive invert layers-no-push-bottom">
      <div class="layers-container">
         <h2 class="layers-heading" id="layers-options-header"><?php _e( 'Select a Layout', LAYERS_THEME_SLUG ); ?></h2>
         <p class="layers-excerpt">
            <?php _e( 'Layers is a site builder with a lightweight design interface built into the WordPress Visual Customizer.', LAYERS_THEME_SLUG ); ?>
         </p>
      </div>
   </div>

   <div class="layers-row layers-well layers-content-massive">
      <div class="theme-browser rendered">
         <div class="themes">
            <?php foreach( $layers_migrator->get_preset_layouts() as $template_key => $template ) { ?>
               <input id="layers-preset-layout-<?php echo $template_key; ?>-title" type="hidden" value="<?php echo $template[ 'title' ]; ?>" />
               <input id="layers-preset-layout-<?php echo $template_key; ?>-widget_data" type="hidden" value="<?php echo esc_attr( $template[ 'json' ] ); ?>" />

               <div class="theme active  <?php echo ( isset( $template[ 'container_css' ] ) ?  $template[ 'container_css' ] : '' ); ?>" tabindex="0">
                  <div class="theme-screenshot">
                     <?php echo $layers_migrator->generate_preset_layout_screenshot( $template[ 'screenshot' ], $template[ 'screenshot_type' ] ); ?>
                  </div>
                  <h3 class="theme-name" id="<?php echo $template_key; ?>"><?php echo $template[ 'title' ]; ?></h3>
                  <div class="theme-actions">
                     <a class="button button-primary customize load-customize" id="layers-generate-preset-layout-<?php echo $template_key; ?>"  data-key="layers-preset-layout-<?php echo $template_key; ?>"><?php _e( 'Import', LAYERS_THEME_SLUG ); ?></a>
                  </div>
               </div>
            <?php } // Get Preset Layouts ?>
            <div class="theme add-new-theme">
               <input id="layers-preset-layout-blank-title" type="hidden" value="<?php _e( 'Blank' , LAYERS_THEME_SLUG ); ?>" />
               <input id="layers-preset-layout-blank-widget_data" type="hidden" value="{}" />
               <div class="theme-screenshot"><span id="layers-generate-preset-layout-blank" data-key="layers-preset-layout-blank"></span></div>
               <h3 class="theme-name"><?php _e( 'Blank Canvas' , LAYERS_THEME_SLUG ); ?></h3>
         </div>
         <br class="clear">
      </div>
   </div>
</section>

<section class="layers-modal layers-hide">
   <div class="layers-vertical-center">
      <div class="layers-section-title layers-text-center layers-container">

         <h2 class="layers-heading" id="layers-options-header">
            <?php _e( 'Creating Your Page', LAYERS_THEME_SLUG ); ?>
         </h2>
         <p class="layers-excerpt layers-push-bottom">
            <?php _e( 'We\'re busy importing dummy content, placing some widgets and adding some content, promise it won\'t take long. Once we\'re done, you\'ll be redirected to
            the Visual Customizer so that you can start building your page.' , LAYERS_THEME_SLUG ); ?>
         </p>
         <div class="layers-load-bar">
            <span class="layers-progress zero">0%</span>
         </div>

      </div>
   </div>
</section>

<?php $this->footer(); ?>