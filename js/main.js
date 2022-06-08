$(document).ready(function(){
   
    $('.collapsible').collapsible();
    $('.showbar').hide();
    $('.modal').modal();

    $('.hidebar').on('click',function(){

        $('.sidebar').css('width','0');
        $('.showbar').toggle();
        $('.side-content').toggle();
    })

    $('.showbar').on('click', function(){

        $('.sidebar').css('width','240px');
        $('.content').css('margin-left','0');
        $('.showbar').toggle();

        setTimeout(function(){

            $('.side-content').toggle();
            
        },300)

    })
   
    

})