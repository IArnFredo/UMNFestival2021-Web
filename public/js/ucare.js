gsap.to("#nav",{
  scrollTrigger: {
  scrub:1,
  trigger: "#double",
  start: 'top 10%',
  end: 'bottom 10%',
  toggleActions: 'play reset play reset',
  },
  backgroundColor: "#319329",
  duration:0.5,
})

jQuery(function($){
    $(document).scroll(function () {
        var y = $(this).scrollTop();

        if (y > 680) {
            $("nav").addClass("display");
        } else {
             $("nav").removeClass("display");
        }
    });
});
