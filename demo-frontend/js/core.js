$( document ).ready(function() { 
    $('a').click(function(e){
      e.preventDefault();
    $('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 800);
    });
  $('.content >ul>li:even').css('color','#2B407E');
});