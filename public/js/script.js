$(document).ready(function(){

    let sample = document.querySelector('.sample');
    let isSession = $('.data-handler').data('session');
    let random = $('.data-handler').data('random');
    let link = $('input[name="link"]').val();

    if (0 == random) {
        sample.classList.add('sample--white');
    } else if (1 == random) {
        sample.classList.add('sample--black');
    }

    //Переадресация после ответа пользователя
    if (1 == isSession) {
        sample.classList.remove('visually-hidden');

        //Перезапрашиваем страницу для нового теста
        setTimeout(function(){
            window.location = '/' + link;
        }, 3000);
    }

    $('.button__set').on('click', function(ev){

        let random = $('.input__random').val();
        let decision = $('.input__decision:checked').val();

        //Проверка на undefined
        if (decision != undefined) {

            let success = 0;
            if (random == decision) {
                success = 1;
            }

            $('.input__success').val(success);
        } else {
            ev.preventDefault();
        }

    });


});


