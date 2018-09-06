if($(window).width() >= 1024) {
	$('.list-course__right').hover(function () {
		$(this).addClass('moveRight-hover');
		$(".list-course__left").addClass('moveRight-hover');
		$('.list-course').addClass('moveLine');
	}, function () {
		$(this).removeClass('moveRight-hover');
		$(".list-course__left").removeClass('moveRight-hover');
		$('.list-course').removeClass('moveLine');
	});
	$('.list-course__left').hover(function () {
		$(this).addClass('moveLeft-hover');
		$(".list-course__right").addClass('moveLeft-hover');
		$('.list-course').addClass('moveLine');
	}, function () {
		$(this).removeClass('moveLeft-hover');
		$(".list-course__right").removeClass('moveLeft-hover');
		$('.list-course').removeClass('moveLine');
	});
};

$('.fox-navbar__toggler').on(isMobile ? 'touchend' : 'click', function () {
	if($(this).hasClass('clickTransform')) {
		$(this).removeClass('clickTransform');
		$(this).addClass('clickTransformBack');
	} else {
		$(this).addClass('clickTransform');
		$(this).removeClass('clickTransformBack');
	}
});

$.fn.animate_Text = function(speed) {
  var string = this.text();
  return this.each(function(){
   var $this = $(this);
    $this.html(string.replace(/./g, '<span class="dot">$&</span>'));
     $this.find('span.dot').each(function(i, el){
      setTimeout(function(){ $(el).addClass('opacity'); }, speed * i);
     });
  });
 };
$('.animate-dots').show();
$('.animate-dots').animate_Text(200);