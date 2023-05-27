$(document).ready(function(){
    $('.header__burger').click(function(event){
        $('.header__burger, .menu').toggleClass('active');
        $('body').toggleClass('lock');
        $('.menu').toggleClass('open');
    });
    $('.menu__link').click(function(event){
        $('.header__burger, .menu').removeClass('active');
        $('body').removeClass('lock');
    });
});


$(document).ready(function() {

	$('.question__block--title').click(function(event) {
		if($('.question__block').hasClass('one')){
			$('.question__block--title').not($(this)).removeClass('active');
			$('.question__block--text').not($(this).next()).slideUp(300);

		}
		$(this).toggleClass('active').next().slideToggle(300);

	});

});



const scrollUp = () => {
    const scrollUp = document.getElementById('scroll-up')
    this.scrollY >= 350 ? scrollUp.classList.add('show-scroll')
        : scrollUp.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollUp)



