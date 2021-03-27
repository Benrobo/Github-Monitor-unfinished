$(document).ready(function () {
  //init controller
  let controller = new ScrollMagic.Controller();

  // header scene 1
  new ScrollMagic.Scene({
    triggerElement: "#header-text-area",
  })
    .setClassToggle("#header-text-area", "fadein")
    .addTo(controller);
  
  // header scene 2
  new ScrollMagic.Scene({
    triggerElement: "#header-img-cont",
  })
    .setClassToggle("#header-img-cont", "fadein")
    .addTo(controller);


  // g-about cont
  new ScrollMagic.Scene({
    triggerElement: "#g-about",
  })
    .setClassToggle("#g-about", "fadein")
    .addTo(controller);

  // why-g cont
  new ScrollMagic.Scene({
    triggerElement: "#why-g",
  })
    .setClassToggle("#why-g", "fadein")
    .addTo(controller);


    // feautures head
  new ScrollMagic.Scene({
    triggerElement: "#f-head",
  })
    .setClassToggle("#f-head", "fadein")
    .addTo(controller);

    // feautures boxes
  new ScrollMagic.Scene({
    triggerElement: "#f-boxes",
  })
    .setClassToggle("#f-boxes", "fadein")
    .addTo(controller);

    // cretaor img
  new ScrollMagic.Scene({
    triggerElement: "#creator-img",
  })
    .setClassToggle("#creator-img", "fadein")
    .addTo(controller);

    // creator cont
  new ScrollMagic.Scene({
    triggerElement: "#creator-cont",
  })
    .setClassToggle("#creator-cont", "fadein")
    .addTo(controller);
  
  // contact head
  new ScrollMagic.Scene({
    triggerElement: "#contact-head",
  })
    .setClassToggle("#contact-head", "fadein")
    .addTo(controller);

  // contact form
  new ScrollMagic.Scene({
    triggerElement: "#contact-form",
  })
    .setClassToggle("#contact-form", "fadein")
    .addTo(controller);
});
