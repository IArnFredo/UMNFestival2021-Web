gsap.to("#yellow",{
  scrollTrigger: {
    scrub: 1
  },
  scale: 3.0
})
gsap.to("#text",{
  scrollTrigger: {
    scrub: 1
  },
  y: 1000,
  scale: 1.2
})
gsap.to("#cloud",{
  scrollTrigger: {
    scrub: 1
  },
  scale: 2.0,
  y: 1000
})
gsap.to("#mountain",{
  scrollTrigger: {
    scrub: 1
  },
  y:1500,
  scale: 5.0
})

gsap.to("#nav",{
  scrollTrigger: {
  scrub:1,
  trigger: "#double",
  start: 'top 10%',
  end: 'bottom 10%',
  toggleActions: 'play reset play reset',
  },
  backgroundColor: "#f1bb1c",
  duration:0.5,
})
jQuery(function($){
    $(document).scroll(function () {
        var y = $(this).scrollTop();

        if (y > 480) {
            $("nav").addClass("display");
        } else {
             $("nav").removeClass("display");
        }
    });
});
