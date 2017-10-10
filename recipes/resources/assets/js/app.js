
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
var TIMEOUT = 2000;

var interval = setInterval(handleNext, TIMEOUT);

function handleNext() {

    var $radios = $('[class*="slide-radio"]');
    var $activeRadio = $('[class*="slide-radio"].active');

    var currentIndex = $activeRadio.index();
    var radiosLength = $radios.length;
    console.log("currentIndex" + currentIndex);

    var adjIndex = currentIndex;

    if (currentIndex >= radiosLength - 1) {

        clearInterval(interval);

    } else {
        $radios
            .removeClass('active');
        $('.adjective' + adjIndex).fadeOut(700, function() { $(this).remove()});
        $activeRadio
            .next('[class*="slide-radio"]')
            .addClass('active');

    }

}
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import { Foundation } from 'foundation-sites/js/foundation.core';
import { Reveal } from 'foundation-sites/js/foundation.reveal';



window.onload = function () {
    Foundation.addToJquery($);

    const element = new Reveal($('#keep-postedModal'));


    // let panel1 = new Vue({
    //     el: '#panel1',
    //     data: {
    //         classObject: {
    //             open: false
    //
    //         }
    //     },
    //     methods: {
    //         slidein: function () {
    //             console.log("test");
    //             this.open = !this.open;
    //         }
    //     }
    //
    // });
}

