$(document).ready(function(){var e,t={speed:1e3,autoplay:!0,parallax:!0,loop:!0,grabCursor:!0,centeredSlides:!0,pagination:{el:".swiper-pagination",clickable:!0},on:{init:function(){let e=this;for(let t=0;t<e.slides.length;t++)$(e.slides[t]).find(".img-container").attr({"data-swiper-parallax":.75*e.width,"data-swiper-paralalx-opacity":.5}),$(e.slides[t]).find(".title").attr("data-swiper-parallax",.65*e.width),$(e.slides[t]).find(".description").attr("data-swiper-parallax",.5*e.width)},resize:function(){this.update()}},navigation:{nextEl:".parallax-slider .next-ctrl",prevEl:".parallax-slider .prev-ctrl"}};e=new Swiper(".parallax-slider",t),$(window).on("resize",function(){e.destroy(),e=new Swiper(".parallax-slider",t)}),$("#year").text((new Date).getFullYear());const a=document.getElementById("popup"),l=document.getElementById("popup-overlay"),o=document.getElementById("popup-close"),i=document.getElementById("popup-close-button"),n=location.href.split("/").slice(-1);console.log(n[0]),$("#local-host-text").text("");let s=localStorage.getItem("hasPopupDisplayed");function r(){console.log("Button clicked"),localStorage.setItem("hasPopupDisplayed",!0),a.classList.remove("active"),l.classList.remove("active")}console.log(s),console.log(s),("false"==s||undefined==s)&&(console.log("so popup will show up"),setTimeout(function(){a.classList.add("active"),l.classList.add("active"),o.addEventListener("click",r),i.addEventListener("click",r)},1e4))}),$('a[href*="#"]').not('[href="#"]').not('[href="#0"]').click(function(e){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var t=$(this.hash);(t=t.length?t:$("[name="+this.hash.slice(1)+"]")).length&&(e.preventDefault(),$("html, body").animate({scrollTop:t.offset().top},1e3,function(){var e=$(t);if(e.focus(),e.is(":focus"))return!1;e.attr("tabindex","-1"),e.focus()}))}});