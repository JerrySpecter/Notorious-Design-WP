import $ from 'jquery';
import whatInput from 'what-input';

window.$ = $;

import Foundation from 'foundation-sites';
// If you want to pick and choose which modules to include, comment out the above and uncomment
// the line below
//import './lib/foundation-explicit-pieces';

var $openMenu = $('.js-menu-open')
var $closeMenu = $('.js-close-menu')
var $menu = $('.Site-Menu')

$openMenu.on('click', function(e) {
    $menu.addClass('is-open')
})

$closeMenu.on('click', function(e) {
    $menu.removeClass('is-open')
})

var $video = $('.Video-item');

$video.each(function(index){
    console.log(index + ": ");
    console.log($(this));

    var time = 300 * (index + 1);

    $(this).addClass('fade-in fade-in-' + (index + 1))

})

$(document).foundation();
