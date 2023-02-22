const slide_container = document.getElementsByClassName('slider-item-container')
const slide_panal = document.getElementsByClassName('slide-panal')
const slider_img = document.getElementsByClassName('slider-img');

let currentActive = 1

slide_container[1].addEventListener('mouseover', function(e) {
    if (currentActive != 1) {
        currentActive = 1
        add_animation(1);
    }

})


slide_container[2].addEventListener('mouseover', function(e) {

    if (currentActive != 2) {
        currentActive = 2
        add_animation(2);
    }


})

slide_container[3].addEventListener('mouseover', function(e) {
    if (currentActive != 3) {
        currentActive = 3
        add_animation(3);
    }


})

slide_container[4].addEventListener('mouseover', function(e) {
    if (currentActive != 4) {
        currentActive = 4
        add_animation(4);
    }

})


slide_container[1].addEventListener('animationend', function(e) {
    remove_animation()
})

slide_container[2].addEventListener('animationend', function(e) {
    remove_animation()
})

slide_container[3].addEventListener('animationend', function(e) {
    remove_animation()
})

slide_container[4].addEventListener('animationend', function(e) {
    remove_animation()
})


function remove_animation() {
    slide_panal[0].classList.remove('slide-ani-1');
    slide_panal[0].classList.remove('slide-ani-2');
    slide_panal[0].classList.remove('slide-ani-3');
    slide_panal[0].classList.remove('slide-ani-4');

    slide_panal[1].classList.remove('slide-ani-1');
    slide_panal[1].classList.remove('slide-ani-2');
    slide_panal[1].classList.remove('slide-ani-3');
    slide_panal[1].classList.remove('slide-ani-4');

    slide_panal[2].classList.remove('slide-ani-1');
    slide_panal[2].classList.remove('slide-ani-2');
    slide_panal[2].classList.remove('slide-ani-3');
    slide_panal[2].classList.remove('slide-ani-4');

    slide_panal[3].classList.remove('slide-ani-1');
    slide_panal[3].classList.remove('slide-ani-2');
    slide_panal[3].classList.remove('slide-ani-3');
    slide_panal[3].classList.remove('slide-ani-4');

    slide_panal[4].classList.remove('slide-ani-1');
    slide_panal[4].classList.remove('slide-ani-2');
    slide_panal[4].classList.remove('slide-ani-3');
    slide_panal[4].classList.remove('slide-ani-4');

    slide_panal[5].classList.remove('slide-ani-1');
    slide_panal[5].classList.remove('slide-ani-2');
    slide_panal[5].classList.remove('slide-ani-3');
    slide_panal[5].classList.remove('slide-ani-4');

}

function add_animation(index) {


    remove_animation()
    remove_slider_img_active()

    switch (index) {
        case 1:

            slider_img[0].classList.add('slider-img-active-1');

            slide_panal[0].classList.add('slide-ani-4');
            slide_panal[1].classList.add('slide-ani-1');
            slide_panal[2].classList.add('slide-ani-3');
            slide_panal[3].classList.add('slide-ani-2');
            slide_panal[4].classList.add('slide-ani-3');
            slide_panal[5].classList.add('slide-ani-4');
            break;

        case 2:

            slider_img[1].classList.add('slider-img-active-2');

            slide_panal[0].classList.add('slide-ani-4');
            slide_panal[1].classList.add('slide-ani-3');
            slide_panal[2].classList.add('slide-ani-1');
            slide_panal[3].classList.add('slide-ani-2');
            slide_panal[4].classList.add('slide-ani-3');
            slide_panal[5].classList.add('slide-ani-4');
            break;

        case 3:

            slider_img[2].classList.add('slider-img-active-3');

            slide_panal[0].classList.add('slide-ani-4');
            slide_panal[1].classList.add('slide-ani-3');
            slide_panal[2].classList.add('slide-ani-2');
            slide_panal[3].classList.add('slide-ani-1');
            slide_panal[4].classList.add('slide-ani-3');
            slide_panal[5].classList.add('slide-ani-4');
            break;

        case 4:

            slider_img[3].classList.add('slider-img-active-4');

            slide_panal[0].classList.add('slide-ani-4');
            slide_panal[1].classList.add('slide-ani-3');
            slide_panal[2].classList.add('slide-ani-2');
            slide_panal[3].classList.add('slide-ani-3');
            slide_panal[4].classList.add('slide-ani-1');
            slide_panal[5].classList.add('slide-ani-4');
            break;
    }
}


function remove_slider_img_active() {

    slider_img[0].classList.remove('slider-img-active-1');
    slider_img[0].classList.remove('slider-img-active-2');
    slider_img[0].classList.remove('slider-img-active-3');
    slider_img[0].classList.remove('slider-img-active-4');

    slider_img[1].classList.remove('slider-img-active-1');
    slider_img[1].classList.remove('slider-img-active-2');
    slider_img[1].classList.remove('slider-img-active-3');
    slider_img[1].classList.remove('slider-img-active-4');

    slider_img[2].classList.remove('slider-img-active-1');
    slider_img[2].classList.remove('slider-img-active-2');
    slider_img[2].classList.remove('slider-img-active-3');
    slider_img[2].classList.remove('slider-img-active-4');

    slider_img[3].classList.remove('slider-img-active-1');
    slider_img[3].classList.remove('slider-img-active-2');
    slider_img[3].classList.remove('slider-img-active-3');
    slider_img[3].classList.remove('slider-img-active-4');

}