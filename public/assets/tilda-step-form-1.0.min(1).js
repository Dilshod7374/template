function t_form_splittingOnStep(t){var e=document.querySelector("#rec"+t);if(e){var r=e.querySelector(".t-form");if(r){var o=r.querySelectorAll(".t-input-group.t-input-group_st"),n=e.querySelector(".t-form__inputsbox"),i=n.querySelectorAll(".t-input-group_st"),a,s,l=0,c=0,p=n.querySelectorAll(".t-form-step-divider");u()}}function u(){0!==i.length&&(Array.prototype.forEach.call(o,(function(t){t.style.margin="0px"})),n.classList.add("t-form__screen"),d(),s=n.querySelector(".t-form__screen-current-view"),l=n.clientWidth,f(),a=n.querySelectorAll(".t-form__screen-wrapper"),m(),h(),n&&S())}function d(){var t=n.querySelector(".t-form__submit"),r="",o="",i="",a="",s="",l="";a=window.t_forms__lang,p&&p[c]?(s=p[c].getAttribute("data-tilda-form-step-btn-next"),l=p[c].getAttribute("data-tilda-form-step-btn-prev")):c===p.length&&p&&p[c-1]&&(s=p[c-1].getAttribute("data-tilda-form-step-btn-next"),l=p[c-1].getAttribute("data-tilda-form-step-btn-prev")),o=s||("RU"===a&&a?"Далее":"Next"),i=l||("RU"===a&&a?"Назад":"Back");var u=e.querySelector(".t-form__screen-btn-next"),d=e.querySelector(".t-form__screen-btn-prev");if(!u||!d){var r='<button class="t-btn t-btn_sm t-form__screen-btn-prev" type="button"><span>'+i+'</span></button><button class="t-btn t-btn_sm t-form__screen-btn-next" type="button"><span>'+o+"</span></button>",f='<div class="t-form__screen-current-view t-name"></div>',t;return(t=n.querySelector(".t-form__submit")).insertAdjacentHTML("beforeend",r),void t.insertAdjacentHTML("beforeend",f)}u.textContent=o,d.textContent=i}function f(){var t=n.querySelectorAll(".t-input-group"),e=_(),r=[],o=[];Array.prototype.forEach.call(t,(function(t){t.classList.contains("t-input-group_st")?(r.push(e),e=_()):e.appendChild(t)})),r.push(e),Array.prototype.forEach.call(n.children,(function(t,e){t.classList.contains("t-input-group_st")&&o.push(e)})),o.push(o[o.length-1]+1),Array.prototype.forEach.call(r,(function(t,e){n.insertBefore(t,n.children[o[e]]),y(o,e+1)}))}function y(t,e){for(var r=e;r<t.length;r++)t[r]+=1}function _(){var t=document.createElement("div");return t.classList.add("t-form__screen-wrapper"),t}function m(){s.innerHTML='<div class="t-form__screen-number-container"><span class="t-form__screen-number_opacity"></span><span>/</span><span>'+a.length+'</span></div><svg class="t-form__screen-progress" style="-webkit-transform:rotate(-90deg);-ms-transform:rotate(-90deg);transform:rotate(-90deg);" width="30" height="30" viewPort="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg"><circle class="t-form__screen-progress-circle" r="10" cx="15" cy="15" fill="transparent" stroke-dasharray="0" stroke-dashoffset="0"></circle><circle class="t-form__screen-progress-bar" r="10" cx="15" cy="15" fill="transparent" stroke-dasharray="62.8319" stroke-dashoffset="62.8319"></circle></svg>'}function h(){var t=e.querySelector(".t-form__screen-btn-prev"),o=e.querySelector(".t-form__screen-btn-next"),n=e.querySelector(".t-submit"),i=e.querySelector(".t-form-step-divider_novalidate"),s=e.querySelector(".t-form__screen-number_opacity"),l=e.querySelector(".t-form__screen-progress-bar"),p=t_throttle(b,300,this);function u(){Array.prototype.forEach.call(a,(function(t){t.style.display="none",t.classList.remove("t-form__screen-wrapper_active")})),a[c].style.display="block",a[c].classList.add("t-form__screen-wrapper_active"),c===a.length-1?(r.classList.add("js-form-proccess"),n.style.display="inline-block"):(r.classList.remove("js-form-proccess"),n.style.display="none"),f(s,c),y(l,a,c+1),v(c+1),w(e)}function f(t,e){t.innerHTML=e+1}function y(t,e,r){var o=parseFloat(t.getAttribute("stroke-dasharray")).toFixed(3),n=parseFloat(t.getAttribute("stroke-dasharray")).toFixed(3),i=parseFloat(o/e.length).toFixed(3),a=parseFloat(n-r*i).toFixed(3);t.style.strokeDashoffset=a,t.setAttribute("stroke-dashoffset",a)}function _(t){t.preventDefault(),0!==c&&(c-=1,S(),u(),g(),d())}function m(t){var e;t.preventDefault(),!i&&q(r,a,c)||c<a.length-1&&(c+=1,S(),u(),g(),t_form__lazyLoad(),d())}function h(t){var e=a[c].querySelectorAll(".t-input-group.t-input-group_ta");if(13===t.keyCode&&!r.classList.contains("js-form-proccess")&&0===e.length){var o;if(!i&&q(r,a,c))return void t.preventDefault();m(t),t.preventDefault()}}function S(){0===c?(t.style.display="none",o.style.display="inline-block"):c===a.length-1?(t.style.display="inline-block",o.style.display="none"):(t.style.display="inline-block",o.style.display="inline-block")}t.addEventListener("click",_),o.addEventListener("click",m),Array.prototype.forEach.call(a,(function(t){t.addEventListener("keypress",h)})),window.addEventListener("resize",p),u()}function g(){var t=e.querySelector(".t-popup"),o=0;if(t){o=r.offsetTop;var n=document.querySelector(".t702");if(n){var i=n.querySelector(".t702__text-wrapper"),a=n.querySelector(".t702__close, .t-popup__close");if(i){var s=window.getComputedStyle(i),l=parseFloat(s.height),c=parseFloat(s.marginTop),p=parseFloat(s.marginBottom);isNaN(c)||isNaN(l)||(l+=c),isNaN(p)||isNaN(l)||(l+=p),o=o-l-4}if(a){var u=window.getComputedStyle(a),d=parseFloat(u.height),f=parseFloat(u.marginTop),y=parseFloat(u.marginBottom);isNaN(f)||isNaN(d)||(d+=f),isNaN(y)||isNaN(d)||(d+=y),o=o-d-4}}t.scrollTop=o}else(o=e.querySelector(".t-form__screen").getBoundingClientRect().top+window.pageYOffset-150)<window.scrollY&&window.scrollTo(0,o)}function v(t){var r=e.querySelector(".t-cover"),o=e.querySelector("div[data-hook-content]"),n=e.querySelector(".t-cover__carrier");if(r&&o&&n)var i=r.offsetHeight,s=o.offsetHeight,l=n.getAttribute("data-content-cover-height");l&&(l=-1!==l.indexOf("px")?parseInt(l):window.innerHeight*(parseInt(l)/100));var c=0,p=0;if(Array.prototype.forEach.call(a,(function(e,r){"block"===e.style.display&&(r+t<a.length&&(a[r+t].style.display="block",c=a[r+t].offsetHeight,a[r+t].style.display="none"),p=e.offsetHeight,s=s-p+c)})),s>300&&i<s){var s;(s=s+160)>1e3&&(s+=100);var u=e.querySelector(".t-cover__filter"),d=e.querySelector(".t-cover__wrapper"),f=e.querySelector(".t-cover__container");r&&(r.style.height=s+"px"),n&&(n.style.height=s+"px"),u&&(u.style.height=s+"px"),d&&(d.style.height=s+"px"),f&&(f.style.height=s+"px"),console.log("auto correct cover height: "+s),/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)||setTimeout((function(){n.querySelectorAll("iframe").length>0&&(console.log("correct video from cover_fixcontentheight"),t_form__onFuncLoad("setWidthHeightYoutubeVideo",(function(){setWidthHeightYoutubeVideo(n,s+"px")})))}),2e3)}}function b(){v(c+1),n&&S()}function w(t){var e=t.querySelector(".t-popup__container");if(e){var r,o=120,n;parseFloat(getComputedStyle(e,null).height.replace("px",""))>window.innerHeight-120?e.classList.add("t-popup__container-static"):e.classList.remove("t-popup__container-static")}}function S(){window.innerWidth<360?s.style.display="none":s.style.display="block"}function q(t,e,r){var o=e[r],n=window.tildaForm.validate(o),i;window.tildaForm.hideErrors(t);var a=n[0],s;a&&(i="emptyfill"!=a.type[0]&&window.tildaForm.showErrors(t,n));return i}}function t_form__lazyLoad(){var t=document.querySelector("#allrecords");t&&(t.getAttribute("data-tilda-mode")||"y"!==window.lazy&&"yes"!==t.getAttribute("data-tilda-lazy")||t_form__onFuncLoad("t_lazyload_update",(function(){t_lazyload_update()})))}function t_form__onFuncLoad(t,e,r){"function"==typeof window[t]?e():setTimeout((function o(){if("function"!=typeof window[t]){if("complete"===document.readyState&&"function"!=typeof window[t])throw new Error(t+" is undefined");setTimeout(o,r||100)}else e()}))}t_onReady((function(){var t="https://static.tildacdn.com/css/tilda-step-form-1.0.min.css",e;document.querySelector('link[href^="'+t+'"]')||document.head.insertAdjacentHTML("beforeend",'<link href="'+t+'">')}));