panel.plugin("components/BaseCollapsible", {
  blocks: {
    BaseCollapsible: {
      computed: {
        version() {
          return this.content.version;
        },
        zIndex() {
          return this.content.zindex;
        },
        is_active() {
          return this.content.is_active;
        },
        is_global() {
          return this.content.is_global;
        },
        is_logging() {
          return this.content.logging.run_withlogs;
        },
        logStyles() {
          return this.content.logging.logstyles;
        },
      },
      template: `
       <div class    ="componentBlock"
            data-size="sm">

          <header>
            <div class="buttonGroup">
              <input type      ="checkbox" 
                     :checked  ="is_active"
                     @click    ="update({ is_active: !is_active })" 
                     class     ="toggleButton k-toggle-input k-toggle-input-native"
                     data-color="green">

              <input type      ="checkbox" 
                     :checked  ="is_logging"
                     @click    ="update({ logging: { run_withlogs: !is_logging, logstyles: logStyles }})" 
                     class     ="toggleButton k-toggle-input k-toggle-input-native"
                     data-color="lilac">
            </div>
            
            <span class="title">BaseCollapsible</span>

            <div class="indicatorGroup">
              <span v-if="version"
                    class="headerText 
                           headerText_zIndex">v{{ version }}</span>

              <span v-if="zIndex"
                    class="headerText 
                           headerText_zIndex">{{ zIndex }}</span>

              <div class          ="indicator"
                   :data-is-active="is_active ? 'true' : 'false'"></div>
              <div class          ="indicator indicator_logging"
                   :data-is-active="is_logging ? 'true' : 'false'"></div>
              <div class          ="indicator indicator_global"
                   :data-is-active="is_global ? 'true' : 'false'"></div>
            </div>
          </header>

          <div class="content">
            <span class="k-icon k-icon-grid-full"
                  style="--size: 1.6rem">
              <svg viewBox="0 0 16 16"><use xlink:href="#icon-grid-full"></use></svg>
            </span>
          </div>
            
        </div>
      `,
    },
  },
});
