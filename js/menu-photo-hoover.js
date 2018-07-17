$("#photomenu1").hover(function () {
   $(this).css({
      'background-image': 'url(img/red.jpeg)',
      'text-align': 'center',
      'font-size': "55px",
      'font-weight': '100',
      'line-height':"63px",

   }).html('<a class="lien lienphotomenu" href="#">Présentation du village vacances</a>');
}, function () {
   $(this).css('background-image','url(img/touristra-la-manne-village-vacances.jpg)').html("");
});


$("#photomenu2").hover(function () {
   $(this).css({
      'background-image': 'url(img/red.jpeg)',
      'text-align': 'center',
      'font-size': "55px",
      'font-weight': '100',
      'line-height':"63px",

   }).html('<a class="lien lienphotomenu" href="#">Passez des vacances en famille</a>');
}, function () {
   $(this).css('background-image','url(img/village-vacances-la-manne-vacances-en-famille.jpg)').html("");
});

$("#photomenu3").hover(function () {
   $(this).css({
      'background-image': 'url(img/red.jpeg)',
      'text-align': 'center',
      'font-size': "55px",
      'font-weight': '100',
      'line-height':"63px",

   }).html('<a class="lien lienphotomenu" href="#">Louez une maisonnette</a>');
}, function () {
   $(this).css('background-image','url(img/village-vacacances-la-manne-gite.jpg)').html("");
});