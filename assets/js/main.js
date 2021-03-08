$('document').ready(function(){
  $('.post-slider').slick({
        dots: true,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        autoplay: true,
  autoplaySpeed: 4000,
});

 $('.HotNewses').AcmeTicker({
            type:'marquee',/*horizontal/horizontal/Marquee/type*/
            direction: 'left',/*up/down/left/right*/
            speed: 0.05,/*true/false/number*/ /*For vertical/horizontal 600*//*For marquee 0.05*//*For typewriter 50*/
            controls: {
                toggle: $('.acme-news-ticker-pause'),/*Can be used for horizontal/horizontal/typewriter*//*not work for marquee*/
            }
        });
    
    
    
$('.missedcontent').slick({
  dots: false,
  autoplay:true,
  autoplaySpeed:4000,
  infinite: true,
  speed: 300,
  slidesToShow:5,
  slidesToScroll: 5,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: false,
        autoplay:true,
        autoplaySpeed:4000,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        autoplay:true,
        autoplaySpeed:4000,
        infinite: true,

      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay:true,
        autoplaySpeed:4000,
        infinite: true,
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

})
