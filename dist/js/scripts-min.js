function checkResponsiveMode(){var e;return"none"!==propsNav.hamburguer.css("display")?(e="is-responsive",propsNav.nav.removeClass("is-desktop"),propsNav.nav.addClass("is-responsive")):(e="is-desktop",propsNav.nav.removeClass("is-responsive"),propsNav.nav.addClass("is-desktop")),e}function closeAllSubMenus(){$(".c-subMenu").removeClass("is-active")}function closeResponsiveMenu(){propsNav.hamburguer.removeClass(propsNav.active),propsNav.contentHero.removeClass(propsNav.active)}function hideMaskMenu(){propsNav.mask.removeClass(propsNav.active)}function disableOverflow(){propsNav.body.addClass("u-overflowBlocked")}function enableOverflow(){propsNav.body.removeClass("u-overflowBlocked")}var propsNav,propsTabH,propsSubMenu;function removeGridClass(e){for(var s=1;s<=12;s++)e.removeClass("--col"+s);e.removeClass("--colNaN")}function removeMask(){propsSubMenu.mask.removeClass("is-active")}function mobileAdjusts(){is.mobile()?($(".c-subMenuHover").children("a").addClass("is-blocked-mobile"),$(".c-subMenuHover").addClass("is-mobile")):($(".c-subMenuHover").children("a").removeClass("is-blocked-mobile"),$(".c-subMenuHover").removeClass("is-mobile"))}$(window).on("load",function(){scrollDirection(),initGettersAndSetters(),changeTouchClickText()}),$(window).on("hashchange",function(e){initGettersAndSetters()}),is.not.ie()?AOS.init():$("*").removeAttr("data-aos"),$(".l-nav").length&&((propsNav={active:"is-active",scrollInit:0,scrollClassScrolled:99,scrollClassMiddle:600,body:$("body"),nav:$(".l-nav"),hamburguer:$(".l-nav .c-hamburguer"),contentHero:$(".l-nav__contentHero"),mask:$(".l-nav__maskMenu"),maskAll:$(".l-nav__maskMenu.maskAll")}).hamburguer.on("click",function(){$(this).hasClass(propsNav.active)?(enableOverflow(),$(this).removeClass(propsNav.active),propsNav.maskAll.removeClass(propsNav.active),propsNav.contentHero.removeClass(propsNav.active)):(disableOverflow(),$(this).addClass(propsNav.active),propsNav.maskAll.addClass(propsNav.active),propsNav.contentHero.addClass(propsNav.active))}),propsNav.maskAll.on("click",function(){closeResponsiveMenu(),hideMaskMenu(),closeAllSubMenus(),enableOverflow()}),$(window).on("resize",function(){"is-desktop"===checkResponsiveMode()&&propsNav.contentHero.hasClass(propsNav.active)&&(closeAllSubMenus(),closeResponsiveMenu(),hideMaskMenu())}),$(window).on("load",function(e){checkResponsiveMode(),1<$(this).scrollTop()?propsNav.nav.addClass("scrolled"):propsNav.nav.removeClass("scrolled")}),$(window).on("scroll",function(){var e=$(this).scrollTop();e>propsNav.scrollClassScrolled?propsNav.nav.addClass("scrolled"):propsNav.nav.removeClass("scrolled"),e>propsNav.scrollClassMiddle?(propsNav.nav.addClass("hidden"),propsNav.nav.addClass("scrolledMiddle")):(propsNav.nav.removeClass("hidden"),propsNav.nav.removeClass("scrolledMiddle")),e<propsNav.scrollInit?(propsNav.nav.removeClass("hidden"),propsNav.nav.addClass("scrolledUp"),propsNav.nav.removeClass("scrolledDown")):(propsNav.nav.removeClass("scrolledUp"),propsNav.nav.addClass("scrolledDown")),propsNav.nav.hasClass("hidden")&&(closeAllSubMenus(),hideMaskMenu()),propsNav.scrollInit=e})),$(".l-headerHome").length&&$(document).ready(function(){new Swiper(".swiper__headerHome",{speed:400,spaceBetween:0,pagination:{el:".swiper-pagination",type:"bullets",clickable:!0}})}),$(".s-associationNumbers").length&&$(document).ready(function(){new Swiper(".swiper__numbersOfAssociation",{speed:400,spaceBetween:0,slidesPerView:4})}),$("#page_contato").length&&($("#formContato").validate({submitHandler:function(e){$(e).ajaxSubmit({beforeSubmit:function(){$("#formContato .c-stsSend").removeClass("u-dnone"),$("#formContato .c-stsSend__feedback--load").removeClass("u-dnone"),$("#formContato  #btnContato").attr("disabled",!0)},success:function(e){e=e.split("|"),1==parseInt(e[1])?($("#formContato .c-stsSend__feedback").addClass("u-dnone"),$("#formContato .c-stsSend__feedback--success").removeClass("u-dnone"),setTimeout(function(){$("#formContato #btnContato").attr("disabled",!1),$("#formContato .field").val(""),$("#formContato textarea").val("").html(""),$("#formContato .field").removeClass("error"),$("#formContato .c-stsSend").addClass("u-dnone"),$("#formContato .c-stsSend__feedback").addClass("u-dnone")},2e3)):($("#formContato .c-stsSend__feedback").addClass("u-dnone"),$("#formContato .c-stsSend__feedback--error").removeClass("u-dnone"),$("#formContato .c-stsSend__feedback--error span").html(e[2]),setTimeout(function(){$("#formContato .c-stsSend").addClass("u-dnone"),$("#formContato .c-stsSend__feedback").addClass("u-dnone"),$("#formContato #btnContato").attr("disabled",!1)},3e3))}})}}),$(document).on("change","#formContato_estado",function(){var e=$(this).val();$("#formContato_cidade").html("<option>Carregando cidades...</option>"),$.ajax({type:"POST",data:{uf:e},url:"ajax-cidades.php",success:function(e){$("#formContato_cidade").html(e)}})})),$(".liSelectFull").length&&($(".liSelectFull select").on("click",function(){$(this).closest(".liSelectFull").addClass("is-active")}),$(".liSelectFull select").on("focusout",function(){var e=$(this).children("option:selected").text();$(this).closest(".liSelectFull").find(".inputBox").children("input").val(e),$(this).closest(".liSelectFull").removeClass("is-active")})),$(".liFile").length&&$(".inputAttach").on("change",function(){var e=$(this).val().split("fakepath");console.log(e),$(this).closest(".liFile").find(".inputText").val(e[1])}),is.not.ie()&&($(".cepMask").mask("99999-999"),$(".cpfMask").mask("999.999.999-99"),$(".dataMask").mask("99/99/9999"),$(".foneMask").focusout(function(){var e=$(this);e.unmask(),10<e.val().replace(/\D/g,"").length?e.mask("(99) 99999-999?9"):e.mask("(99) 9999-9999?9")}).trigger("focusout")),$(".c-responsiveGrid").length&&$(window).on("load resize",function(){$(".c-responsiveGrid").each(function(e){var s={maxwBreaks:$(this).attr("data-maxw-breaks").split(", ").map(Number),maxwCols:$(this).attr("data-maxw-cols").split(", ").map(Number),initCols:parseInt($(this).attr("data-cols-init")),windowW:$(window).width()},o=s.maxwBreaks.length;if(s.maxwBreaks.length===s.maxwCols.length)for(var a=0;a<=o;a++)s.maxwBreaks[a]>=s.windowW&&(removeGridClass($(this)),$(this).addClass("--col"+s.maxwCols[a])),s.windowW>s.maxwBreaks[0]&&(removeGridClass($(this)),$(this).addClass("--col"+s.initCols));else console.log("Ta faltando media querie ou colunas, verifique seu componente")})}),$(".c-tabHorizontal").length&&(propsTabH={el:$(".c-tabHorizontal"),item:$(".c-tabHorizontal a"),header:$(".c-tabHorizontal__header"),content:$(".c-tabHorizontal__content")}).item.on("click",function(e){e.preventDefault(),$(this).closest(".c-tabHorizontal__header").find("a").removeClass("is-active"),$(this).addClass("is-active");var s=$(this).attr("href"),o=$(this);o.closest(propsTabH.el).find(propsTabH.content).removeClass("is-active"),setTimeout(function(){o.closest(propsTabH.el).find(propsTabH.content).addClass("u-dnone"),$(s).removeClass("u-dnone"),$(s).addClass("is-active")},150)}),$(".c-toggleList").length&&$(".c-toggleList__header").on("click",function(){$(this).parent().toggleClass("is-active")}),$(".c-subMenu").length&&((propsSubMenu={toggle:$(".c-subMenu__call"),content:$(".c-subMenu__content"),el:$(".c-subMenu"),primary:$(".js-subMenuPrimary"),mask:$(".c-subMenu__mask")}).mask.on("click",function(){propsSubMenu.el.removeClass("is-active"),removeMask()}),propsSubMenu.primary.parent().children(".c-subMenu__content").on("mouseleave",function(){propsSubMenu.el.removeClass("is-active"),removeMask()}),propsSubMenu.primary.on("click",function(e){e.preventDefault(),$(this).parent(".c-subMenu").hasClass("is-active")?$(this).parent(".c-subMenu").removeClass("is-active"):$(this).parents(".l-nav").length&&$(".l-nav").hasClass("is-responsive")?(console.log("l-nav"),$(this).parent(".c-subMenu").toggleClass("is-active")):(console.log("not nav"),$(".c-subMenu").removeClass("is-active"),$(this).parent(".c-subMenu").addClass("is-active"))}),propsSubMenu.toggle.on("click",function(e){e.preventDefault(),$(this).hasClass("js-subMenuPrimary")||$(this).parent(".c-subMenu").toggleClass("is-active")})),$(".c-subMenuHover").length&&($(window).on("load",function(){mobileAdjusts()}),$(window).on("resize",function(){mobileAdjusts()}));
//# sourceMappingURL=scripts-min.js.map
