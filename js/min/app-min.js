jQuery(document).ready(function($){$(".tab-content div").hide(),$(".active").fadeIn(),$(".motive-tabs li").click(function(){var t=$(this),i="."+$(t).attr("class");$(i).addClass("active").siblings().removeClass("active"),$(".active").fadeIn(),$(".tab-content div:not(.active)").hide()}),$(".close").click(function(){$(".subscribe").slideUp()}),$("input").jvFloat(),$(".secondary-navigation").stick_in_parent(),$(".secondary-navigation").onePageNav({currentClass:"current",changeHash:!0,scrollSpeed:750,scrollThreshold:.5,filter:"",easing:"swing",begin:function(){},end:function(){},scrollChange:function(t){}}),$(".secondary-navigation li").click(function(){window.location=$("a",this).attr("href")})}),function($){function t(t){return"object"==typeof t?t:{top:t,left:t}}var i=$.scrollTo=function(t,i,e){$(window).scrollTo(t,i,e)};i.defaults={axis:"xy",duration:parseFloat($.fn.jquery)>=1.3?0:1,limit:!0},i.window=function(t){return $(window)._scrollable()},$.fn._scrollable=function(){return this.map(function(){var t=this,i=!t.nodeName||-1!=$.inArray(t.nodeName.toLowerCase(),["iframe","#document","html","body"]);if(!i)return t;var e=(t.contentWindow||t).document||t.ownerDocument||t;return/webkit/i.test(navigator.userAgent)||"BackCompat"==e.compatMode?e.body:e.documentElement})},$.fn.scrollTo=function(e,n,o){return"object"==typeof n&&(o=n,n=0),"function"==typeof o&&(o={onAfter:o}),"max"==e&&(e=9e9),o=$.extend({},i.defaults,o),n=n||o.duration,o.queue=o.queue&&o.axis.length>1,o.queue&&(n/=2),o.offset=t(o.offset),o.over=t(o.over),this._scrollable().each(function(){function s(t){a.animate(u,n,o.easing,t&&function(){t.call(this,e,o)})}if(e){var r=this,a=$(r),c=e,l,u={},f=a.is("html,body");switch(typeof c){case"number":case"string":if(/^([+-]=)?\d+(\.\d+)?(px|%)?$/.test(c)){c=t(c);break}if(c=$(c,this),!c.length)return;case"object":(c.is||c.style)&&(l=(c=$(c)).offset())}$.each(o.axis.split(""),function(t,e){var n="x"==e?"Left":"Top",d=n.toLowerCase(),h="scroll"+n,p=r[h],g=i.max(r,e);if(l)u[h]=l[d]+(f?0:p-a.offset()[d]),o.margin&&(u[h]-=parseInt(c.css("margin"+n))||0,u[h]-=parseInt(c.css("border"+n+"Width"))||0),u[h]+=o.offset[d]||0,o.over[d]&&(u[h]+=c["x"==e?"width":"height"]()*o.over[d]);else{var v=c[d];u[h]=v.slice&&"%"==v.slice(-1)?parseFloat(v)/100*g:v}o.limit&&/^\d+$/.test(u[h])&&(u[h]=u[h]<=0?0:Math.min(u[h],g)),!t&&o.queue&&(p!=u[h]&&s(o.onAfterFirst),delete u[h])}),s(o.onAfter)}}).end()},i.max=function(t,i){var e="x"==i?"Width":"Height",n="scroll"+e;if(!$(t).is("html,body"))return t[n]-$(t)[e.toLowerCase()]();var o="client"+e,s=t.ownerDocument.documentElement,r=t.ownerDocument.body;return Math.max(s[n],r[n])-Math.min(s[o],r[o])}}(jQuery),function(){var t,i;t=this.jQuery||window.jQuery,i=t(window),t.fn.stick_in_parent=function(e){var n,o,s,r,a,c,l,u,f,d;for(null==e&&(e={}),l=e.sticky_class,o=e.inner_scrolling,c=e.recalc_every,a=e.parent,r=e.offset_top,s=e.spacer,n=e.bottoming,null==r&&(r=0),null==a&&(a=void 0),null==o&&(o=!0),null==l&&(l="is_stuck"),null==n&&(n=!0),u=function(e,u,f,d,h,p,g,v){var m,b,y,w,k,x,_,C,j,I,T;if(!e.data("sticky_kit")){if(e.data("sticky_kit",!0),x=e.parent(),null!=a&&(x=x.closest(a)),!x.length)throw"failed to find stick parent";if(m=y=!1,(I=null!=s?s&&e.closest(s):t("<div />"))&&I.css("position",e.css("position")),_=function(){var t,i,n;return!v&&(t=parseInt(x.css("border-top-width"),10),i=parseInt(x.css("padding-top"),10),u=parseInt(x.css("padding-bottom"),10),f=x.offset().top+t+i,d=x.height(),y&&(m=y=!1,null==s&&(e.insertAfter(I),I.detach()),e.css({position:"",top:"",width:"",bottom:""}).removeClass(l),n=!0),h=e.offset().top-parseInt(e.css("margin-top"),10)-r,p=e.outerHeight(!0),g=e.css("float"),I&&I.css({width:e.outerWidth(!0),height:p,display:e.css("display"),"vertical-align":e.css("vertical-align"),"float":g}),n)?T():void 0},_(),p!==d)return w=void 0,k=r,j=c,T=function(){var t,a,b,C;return!v&&(null!=j&&(--j,0>=j&&(j=c,_())),b=i.scrollTop(),null!=w&&(a=b-w),w=b,y?(n&&(C=b+p+k>d+f,m&&!C&&(m=!1,e.css({position:"fixed",bottom:"",top:k}).trigger("sticky_kit:unbottom"))),h>b&&(y=!1,k=r,null==s&&("left"!==g&&"right"!==g||e.insertAfter(I),I.detach()),t={position:"",width:"",top:""},e.css(t).removeClass(l).trigger("sticky_kit:unstick")),o&&(t=i.height(),p+r>t&&!m&&(k-=a,k=Math.max(t-p,k),k=Math.min(r,k),y&&e.css({top:k+"px"})))):b>h&&(y=!0,t={position:"fixed",top:k},t.width="border-box"===e.css("box-sizing")?e.outerWidth()+"px":e.width()+"px",e.css(t).addClass(l),null==s&&(e.after(I),"left"!==g&&"right"!==g||I.append(e)),e.trigger("sticky_kit:stick")),y&&n&&(null==C&&(C=b+p+k>d+f),!m&&C))?(m=!0,"static"===x.css("position")&&x.css({position:"relative"}),e.css({position:"absolute",bottom:u,top:"auto"}).trigger("sticky_kit:bottom")):void 0},C=function(){return _(),T()},b=function(){return v=!0,i.off("touchmove",T),i.off("scroll",T),i.off("resize",C),t(document.body).off("sticky_kit:recalc",C),e.off("sticky_kit:detach",b),e.removeData("sticky_kit"),e.css({position:"",bottom:"",top:"",width:""}),x.position("position",""),y?(null==s&&("left"!==g&&"right"!==g||e.insertAfter(I),I.remove()),e.removeClass(l)):void 0},i.on("touchmove",T),i.on("scroll",T),i.on("resize",C),t(document.body).on("sticky_kit:recalc",C),e.on("sticky_kit:detach",b),setTimeout(T,0)}},f=0,d=this.length;d>f;f++)e=this[f],u(t(e));return this}}.call(this),function($,t,i,e){var n=function(e,n){this.elem=e,this.$elem=$(e),this.options=n,this.metadata=this.$elem.data("plugin-options"),this.$win=$(t),this.sections={},this.didScroll=!1,this.$doc=$(i),this.docHeight=this.$doc.height()};n.prototype={defaults:{navItems:"a",currentClass:"current",changeHash:!1,easing:"swing",filter:"",scrollSpeed:750,scrollThreshold:.5,begin:!1,end:!1,scrollChange:!1},init:function(){return this.config=$.extend({},this.defaults,this.options,this.metadata),this.$nav=this.$elem.find(this.config.navItems),""!==this.config.filter&&(this.$nav=this.$nav.filter(this.config.filter)),this.$nav.on("click.onePageNav",$.proxy(this.handleClick,this)),this.getPositions(),this.bindInterval(),this.$win.on("resize.onePageNav",$.proxy(this.getPositions,this)),this},adjustNav:function(t,i){t.$elem.find("."+t.config.currentClass).removeClass(t.config.currentClass),i.addClass(t.config.currentClass)},bindInterval:function(){var t=this,i;t.$win.on("scroll.onePageNav",function(){t.didScroll=!0}),t.t=setInterval(function(){i=t.$doc.height(),t.didScroll&&(t.didScroll=!1,t.scrollChange()),i!==t.docHeight&&(t.docHeight=i,t.getPositions())},250)},getHash:function(t){return t.attr("href").split("#")[1]},getPositions:function(){var t=this,i,e,n;t.$nav.each(function(){i=t.getHash($(this)),n=$("#"+i),n.length&&(e=n.offset().top,t.sections[i]=Math.round(e))})},getSection:function(t){var i=null,e=Math.round(this.$win.height()*this.config.scrollThreshold);for(var n in this.sections)this.sections[n]-e<t&&(i=n);return i},handleClick:function(i){var e=this,n=$(i.currentTarget),o=n.parent(),s="#"+e.getHash(n);o.hasClass(e.config.currentClass)||(e.config.begin&&e.config.begin(),e.adjustNav(e,o),e.unbindInterval(),e.scrollTo(s,function(){e.config.changeHash&&(t.location.hash=s),e.bindInterval(),e.config.end&&e.config.end()})),i.preventDefault()},scrollChange:function(){var t=this.$win.scrollTop(),i=this.getSection(t),e;null!==i&&(e=this.$elem.find('a[href$="#'+i+'"]').parent(),e.hasClass(this.config.currentClass)||(this.adjustNav(this,e),this.config.scrollChange&&this.config.scrollChange(e)))},scrollTo:function(t,i){var e=$(t).offset().top;$("html, body").animate({scrollTop:e},this.config.scrollSpeed,this.config.easing,i)},unbindInterval:function(){clearInterval(this.t),this.$win.unbind("scroll.onePageNav")}},n.defaults=n.prototype.defaults,$.fn.onePageNav=function(t){return this.each(function(){new n(this,t).init()})}}(jQuery,window,document),function($){function t(t){return"object"==typeof t?t:{top:t,left:t}}var i=$.scrollTo=function(t,i,e){$(window).scrollTo(t,i,e)};i.defaults={axis:"xy",duration:parseFloat($.fn.jquery)>=1.3?0:1,limit:!0},i.window=function(t){return $(window)._scrollable()},$.fn._scrollable=function(){return this.map(function(){var t=this,i=!t.nodeName||-1!=$.inArray(t.nodeName.toLowerCase(),["iframe","#document","html","body"]);if(!i)return t;var e=(t.contentWindow||t).document||t.ownerDocument||t;return/webkit/i.test(navigator.userAgent)||"BackCompat"==e.compatMode?e.body:e.documentElement})},$.fn.scrollTo=function(e,n,o){return"object"==typeof n&&(o=n,n=0),"function"==typeof o&&(o={onAfter:o}),"max"==e&&(e=9e9),o=$.extend({},i.defaults,o),n=n||o.duration,o.queue=o.queue&&o.axis.length>1,o.queue&&(n/=2),o.offset=t(o.offset),o.over=t(o.over),this._scrollable().each(function(){function s(t){a.animate(u,n,o.easing,t&&function(){t.call(this,e,o)})}if(e){var r=this,a=$(r),c=e,l,u={},f=a.is("html,body");switch(typeof c){case"number":case"string":if(/^([+-]=)?\d+(\.\d+)?(px|%)?$/.test(c)){c=t(c);break}if(c=$(c,this),!c.length)return;case"object":(c.is||c.style)&&(l=(c=$(c)).offset())}$.each(o.axis.split(""),function(t,e){var n="x"==e?"Left":"Top",d=n.toLowerCase(),h="scroll"+n,p=r[h],g=i.max(r,e);if(l)u[h]=l[d]+(f?0:p-a.offset()[d]),o.margin&&(u[h]-=parseInt(c.css("margin"+n))||0,u[h]-=parseInt(c.css("border"+n+"Width"))||0),u[h]+=o.offset[d]||0,o.over[d]&&(u[h]+=c["x"==e?"width":"height"]()*o.over[d]);else{var v=c[d];u[h]=v.slice&&"%"==v.slice(-1)?parseFloat(v)/100*g:v}o.limit&&/^\d+$/.test(u[h])&&(u[h]=u[h]<=0?0:Math.min(u[h],g)),!t&&o.queue&&(p!=u[h]&&s(o.onAfterFirst),delete u[h])}),s(o.onAfter)}}).end()},i.max=function(t,i){var e="x"==i?"Width":"Height",n="scroll"+e;if(!$(t).is("html,body"))return t[n]-$(t)[e.toLowerCase()]();var o="client"+e,s=t.ownerDocument.documentElement,r=t.ownerDocument.body;return Math.max(s[n],r[n])-Math.min(s[o],r[o])}}(jQuery),function(){var t,i;t=this.jQuery||window.jQuery,i=t(window),t.fn.stick_in_parent=function(e){var n,o,s,r,a,c,l,u,f,d;for(null==e&&(e={}),l=e.sticky_class,o=e.inner_scrolling,c=e.recalc_every,a=e.parent,r=e.offset_top,s=e.spacer,n=e.bottoming,null==r&&(r=0),null==a&&(a=void 0),null==o&&(o=!0),null==l&&(l="is_stuck"),null==n&&(n=!0),u=function(e,u,f,d,h,p,g,v){var m,b,y,w,k,x,_,C,j,I,T;if(!e.data("sticky_kit")){if(e.data("sticky_kit",!0),x=e.parent(),null!=a&&(x=x.closest(a)),!x.length)throw"failed to find stick parent";if(m=y=!1,(I=null!=s?s&&e.closest(s):t("<div />"))&&I.css("position",e.css("position")),_=function(){var t,i,n;return!v&&(t=parseInt(x.css("border-top-width"),10),i=parseInt(x.css("padding-top"),10),u=parseInt(x.css("padding-bottom"),10),f=x.offset().top+t+i,d=x.height(),y&&(m=y=!1,null==s&&(e.insertAfter(I),I.detach()),e.css({position:"",top:"",width:"",bottom:""}).removeClass(l),n=!0),h=e.offset().top-parseInt(e.css("margin-top"),10)-r,p=e.outerHeight(!0),g=e.css("float"),I&&I.css({width:e.outerWidth(!0),height:p,display:e.css("display"),"vertical-align":e.css("vertical-align"),"float":g}),n)?T():void 0},_(),p!==d)return w=void 0,k=r,j=c,T=function(){var t,a,b,C;return!v&&(null!=j&&(--j,0>=j&&(j=c,_())),b=i.scrollTop(),null!=w&&(a=b-w),w=b,y?(n&&(C=b+p+k>d+f,m&&!C&&(m=!1,e.css({position:"fixed",bottom:"",top:k}).trigger("sticky_kit:unbottom"))),h>b&&(y=!1,k=r,null==s&&("left"!==g&&"right"!==g||e.insertAfter(I),I.detach()),t={position:"",width:"",top:""},e.css(t).removeClass(l).trigger("sticky_kit:unstick")),o&&(t=i.height(),p+r>t&&!m&&(k-=a,k=Math.max(t-p,k),k=Math.min(r,k),y&&e.css({top:k+"px"})))):b>h&&(y=!0,t={position:"fixed",top:k},t.width="border-box"===e.css("box-sizing")?e.outerWidth()+"px":e.width()+"px",e.css(t).addClass(l),null==s&&(e.after(I),"left"!==g&&"right"!==g||I.append(e)),e.trigger("sticky_kit:stick")),y&&n&&(null==C&&(C=b+p+k>d+f),!m&&C))?(m=!0,"static"===x.css("position")&&x.css({position:"relative"}),e.css({position:"absolute",bottom:u,top:"auto"}).trigger("sticky_kit:bottom")):void 0},C=function(){return _(),T()},b=function(){return v=!0,i.off("touchmove",T),i.off("scroll",T),i.off("resize",C),t(document.body).off("sticky_kit:recalc",C),e.off("sticky_kit:detach",b),e.removeData("sticky_kit"),e.css({position:"",bottom:"",top:"",width:""}),x.position("position",""),y?(null==s&&("left"!==g&&"right"!==g||e.insertAfter(I),I.remove()),e.removeClass(l)):void 0},i.on("touchmove",T),i.on("scroll",T),i.on("resize",C),t(document.body).on("sticky_kit:recalc",C),e.on("sticky_kit:detach",b),setTimeout(T,0)}},f=0,d=this.length;d>f;f++)e=this[f],u(t(e));return this}}.call(this),!function(t){"use strict";t.fn.jvFloat=function(){return this.filter("input:not([type=submit]), textarea, select").each(function(){function i(t){var i=t.attr("placeholder");return"undefined"==typeof i&&(i=t.attr("title")),i}function e(){var t=s.val();if(null==t)t="";else if(s.is("select")){var e=i(s);e==t&&(t="")}c.toggleClass("active",""!==t)}function n(){var i="";do i=("0000"+(Math.random()*Math.pow(36,4)<<0).toString(36)).substr(-4);while(t("#"+i).length);return i}function o(t){var i=n();return t.prop("id",i),i}var s=t(this).wrap("<div class=jvFloat>"),r=s.attr("id");r||(r=o(s));var a=s.attr("required")||"",c="",l=i(s);c=t(this).is("textarea")?t('<label class="placeHolder  textarea '+a+'" for="'+r+'">'+l+"</label>").insertBefore(s):t('<label class="placeHolder '+a+'" for="'+r+'">'+l+"</label>").insertBefore(s),e(),s.bind("keyup blur",e)})}}(window.jQuery||window.Zepto||window.$);
//# sourceMappingURL=./app-min.js.map