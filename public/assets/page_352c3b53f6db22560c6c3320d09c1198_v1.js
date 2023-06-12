
; /* Start:"a:4:{s:4:"full";s:70:"/local/templates/youtravel/src/js/globals/PayLate.min.js?1686322826554";s:6:"source";s:52:"/local/templates/youtravel/src/js/globals/PayLate.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
"use strict";let PayLate={listenPaylateClick:function(){$(".js-paylate-block-text-info").click(function(t){showModal(".js-paylate-info"),t.preventDefault(),t.stopPropagation()})},applyButton:function(){closeModal(".js-paylate-info");let t=$(".js-booking-btn-container .js-booking-btn"),n=$(".js-booking-btn-container .booking__btn");t.length>0?t.click():n.length>0&&(window.location=n.attr("href"))}};jQuery(function(){PayLate.listenPaylateClick(),$(".js-paylate-apply").click(function(t){PayLate.applyButton(),t.preventDefault(),t.stopPropagation()})});
/* End */
;; /* /local/templates/youtravel/src/js/globals/PayLate.min.js?1686322826554*/
