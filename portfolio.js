$(document).ready(function() {

    // navigation colors
    $(window).scroll(function() {
        if(this.scrollY > 20){
            $('.navbar-inverse').addClass('sticky')
        }else{
            $('.navbar-inverse').removeClass('sticky')
        }
        //adding a class the scrollUp button
        if(this.scrollY > 500){
            $('.scrolltop').addClass('show')
        }else{
            $('.scrolltop').removeClass('show')
        }
        //adding a class the social media
        if(this.scrollY > 300){
            $('.media').addClass('display')
        }else{
            $('.media').removeClass('display')
        }
    });

    //script for scrollUp button
    $('.scrolltop').click(function(){
        $('html').animate({scrollTop: 0})
    });


    /// typing animation
    var typed = new Typed(".typing1", {
        strings: ["Designer", "Programmer", "Blogger", "Developer", "Data Analyst"],
        typeSpeed: 100,
        backSpeed: 60,
        loop: true
    })
});





/*====== scroll animation =====*/
const sr = ScrollReveal({
    origin: 'top',
    distance: '80px',
    duration: 2000,
    reset: true
})

//navbar
/*sr.reveal('.navbar', {})
sr.reveal('.navbar-brand', {delay: 200})
sr.reveal('.navbar-right', {delay: 200})
*/
//bacground
sr.reveal('.background', {})
sr.reveal('.text1', {delay: 200})
sr.reveal('.text2', {delay: 210})
sr.reveal('.text3', {delay: 220})
sr.reveal('.btn-light', {delay: 230})

//about me
sr.reveal('.about', {})
sr.reveal('.me-scroll', {delay: 200})
sr.reveal('.under', {delay: 200})
sr.reveal('.image-scroll', {delay: 300})
sr.reveal('.about-text', {delay: 400})

//passion
sr.reveal('.passion', {})
sr.reveal('.me-scroll', {delay: 200})
sr.reveal('.centerline', {delay: 200})
sr.reveal('.card', {delay: 400})


//experience and skills
sr.reveal('.experience', {})
sr.reveal('.me-scroll', {delay: 200})
sr.reveal('.experienceline', {delay: 200})
sr.reveal('.textScroll', {delay: 300})
sr.reveal('.row', {delay: 350})
sr.reveal('.progress', {delay: 450})


//projects
sr.reveal('.projects', {})
sr.reveal('.me-scroll', {delay: 200})
sr.reveal('.projectline', {delay: 200})
sr.reveal('.textScroll', {delay: 300})
sr.reveal('.showcase', {delay: 450})


//contacts
sr.reveal('.contacts', {})
sr.reveal('.me-scroll', {delay: 200})
sr.reveal('.contactline', {delay: 200})
sr.reveal('.form', {delay: 400})
//sr.reveal('.scrollForm', {delay: 300})









