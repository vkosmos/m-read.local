$(document).ready(function(){

    let sample = document.querySelector('.sample');
    let random = document.querySelector('.random').getAttribute('data-random');

    if (0 == random) {
        sample.classList.add('sample--white');
    } else if (1 == random) {
        sample.classList.add('sample--black');
    }
    sample.classList.remove('visually-hidden');


    $('.button__set').on('click', function(ev){

        let random = $('.input__random').val();
        let decision = $('.input__decision:checked').val();

        //Проверка на undefined
        if (decision != undefined) {

            let isRight = 0;
            if (random == decision) {
                isRight = 1;
            }

            $('.input__success').val(isRight);

        } else {
            ev.preventDefault();
        }

    });


});
