!function($,s,n){$(function(){"use strict";$("#nav-toggle, #nav-close").click(function(){$("body").toggleClass("show-menu")}),$(document).mouseup(function(s){if($("body").hasClass("show-menu")){var n=$("nav#nav-collapse");n.is(s.target)||0!==n.has(s.target).length||$("body").removeClass("show-menu")}})})}(jQuery,this);