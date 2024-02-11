// ————————————————————————————————————————————— LIB. ————————————————————————————————————————————— //
// ———————————————————————————————————————————————————————————————————————————————————————————————— //

import Component from "../../../../app/lib/jGia/jGia/src/Component";
import eventbus from "../../../../app/lib/jGia/jGia/src/eventbus";

// ———————————————————————————————————————————— UTIL. ————————————————————————————————————————————— //
// ———————————————————————————————————————————————————————————————————————————————————————————————— //

import logger from "../../../../app/baseUtilities/logger";
import validate_refEL from "../../../../app/baseUtilities/validate/validate_refEl.js";
import cancel_featureInit from "../../../../app/baseUtilities/cancel/cancel_featureInit";
import cancel_ebh from "../../../../app/baseUtilities/cancel/cancel_ebh.js";

// —————————————————————————————————————— INITIALIZATION F() —————————————————————————————————————— //
// ———————————————————————————————————————————————————————————————————————————————————————————————— //

// ...

// ————————————————————————————— EVENT/EVENTBUS/STATE CHANGE HANDLERS ————————————————————————————— //
// ———————————————————————————————————————————————————————————————————————————————————————————————— //

import ebh_window_resize from "./eventbusHandlers/ebh_window_resize.js";

// ———————————————————————————————————————————— ASSETS ———————————————————————————————————————————— //
// ———————————————————————————————————————————————————————————————————————————————————————————————— //

// Options with case-sensitive keys that are not to be
// automatically extracted from the options arg. but be
// assigned to an option key manually to preserve its case
// (Kirby CMS converts all fields/option keys to lowercase)
// (see constructor).

const manualOptionKeys = ["optionkey"];

//  Default values for manually extracted options
//  (see constructor, in case specific option has not been provided
//  in comp. config.).

const defaultOptions = {
  optionkey: { foo: "bar" },
};

// ———————————————————————————————————————————————————————————————————————————————————————————————— //
// ———————————————————————————————————————————————————————————————————————————————————————————————— //

class BaseCollapsible extends Component {
  ///////////////////////////// Constructor //////////////////////////////
  ////////////////////////////////////////////////////////////////////////

  constructor(element, options) {
    super(element);

    ///////// DOM references //////////
    ///////////////////////////////////

    this.ref = { someRef: null };

    //////////// Options /////////////
    //////////////////////////////////

    // Get options not to be manually extracted from the options arg...
    const autoOptions = {};
    for (const key in options) if (!manualOptionKeys.includes(key)) autoOptions[key] = options[key];

    this.options = {
      name: "BaseCollapsible",
      version: element.getAttribute("g-version") ?? "1",
      // optionKey: options.optionkey,
      ...autoOptions,
    };

    //////////// Utilities /////////////
    ////////////////////////////////////

    this.logger = logger.bind(this);
    this.validate_refEL = validate_refEL.bind(this);
    this.cancel_featureInit = cancel_featureInit.bind(this);
    this.cancel_ebh = cancel_ebh.bind(this);

    //////////// Init. f() /////////////
    ////////////////////////////////////

    // ...

    ///////////// Modules //////////////
    ////////////////////////////////////

    // ...

    //////// Eventbus listeners ////////
    ////////////////////////////////////

    this.ebl_window_resize = ebh_window_resize.bind(this);

    ////// State-change listeners //////
    ////////////////////////////////////

    // ...

    ////// Custom event handlers ///////
    // (To be passed to parent class) //

    ///////// Pre-mount init. //////////
    ////////////////////////////////////

    // ...
  }

  //////////////////////////////// Mount /////////////////////////////////
  ////////////////////////////////////////////////////////////////////////

  mount() {
    this.logger("info", ["mounting"], "action", { inline: true });
    this.init();
  }

  /////////////////////////////// Unmount ////////////////////////////////
  ////////////////////////////////////////////////////////////////////////

  unmount() {
    this.logger("info", ["unmounting"], "action", { inline: true });

    /////////////////////////////
    // Listener deregistration //
    /////////////////////////////

    eventbus.off("window_resize", this.ebl_window_resize);
  }

  ///////////////////////////////// Init. ////////////////////////////////
  ////////////////////////////////////////////////////////////////////////

  init() {
    this.init_states();
    this.init_eventbus();
  }

  ////////////////////////////////////
  ////////////////////////////////////

  init_states() {
    this.logger("init", ["states"], "action", { inline: true });
    this.setState({ is_mobile: window.innerWidth < 640 });
  }

  ////////////////////////////////////
  ////////////////////////////////////

  init_eventbus() {
    this.logger("init", ["eventbus"], "action", { inline: true });

    ///////////////////////////
    // Listener registration //
    ///////////////////////////

    eventbus.on("window_resize", this.ebl_window_resize);
  }

  //////////////////////////// State Changes /////////////////////////////
  ////////////////////////////////////////////////////////////////////////

  stateChange(CHANGES) {
    ////////////// Change //////////////
    ////////////////////////////////////

    if ("change" in CHANGES) this.stChL_change(CHANGES);
  }
}

// ———————————————————————————————————————————————————————————————————————————————————————————————— //
// ———————————————————————————————————————————————————————————————————————————————————————————————— //

export default BaseCollapsible;
