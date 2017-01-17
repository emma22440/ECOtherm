/*
	Slimbox v1.64 - The ultimate lightweight Lightbox clone
	(c) 2007-2008 Christophe Beyls <http://www.digitalia.be>
	MIT-style license.
*/
var Slimbox;(function(){var G=0,F,L,B,S,T,O,E,M,J=new Image(),K=new Image(),X,a,P,H,W,Z,I,Y,C;window.addEvent("domready",function(){$(document.body).adopt($$([X=new Element("div",{id:"lbOverlay"}).addEvent("click",N),a=new Element("div",{id:"lbCenter"}),Z=new Element("div",{id:"lbBottomContainer"})]).setStyle("display","none"));P=new Element("div",{id:"lbImage"}).inject(a).adopt(H=new Element("a",{id:"lbPrevLink",href:"#"}).addEvent("click",D),W=new Element("a",{id:"lbNextLink",href:"#"}).addEvent("click",R));I=new Element("div",{id:"lbBottom"}).inject(Z).adopt(new Element("a",{id:"lbCloseLink",href:"#"}).addEvent("click",N),Y=new Element("div",{id:"lbCaption"}),C=new Element("div",{id:"lbNumber"}),new Element("div",{styles:{clear:"both"}}));E={overlay:new Fx.Tween(X,{property:"opacity",duration:500}).set(0),image:new Fx.Tween(P,{property:"opacity",duration:500,onComplete:A}),bottom:new Fx.Tween(I,{property:"margin-top",duration:400})}});Slimbox={open:function(e,d,c){F=$extend({loop:false,overlayOpacity:0.8,resizeDuration:400,resizeTransition:false,initialWidth:250,initialHeight:250,animateCaption:true,showCounter:true,counterText:"Image {x} of {y}"},c||{});if (typeof e=="string"){e=[[e,d]];d=0}L=e;F.loop=F.loop&&(L.length>1);b();Q(true);O=window.getScrollTop()+(window.getHeight()/15);E.resize=new Fx.Morph(a,$extend({duration:F.resizeDuration,onComplete:A},F.resizeTransition?{transition:F.resizeTransition}:{}));a.setStyles({top:O,width:F.initialWidth,height:F.initialHeight,marginLeft:-(F.initialWidth/2),display:""});E.overlay.start(F.overlayOpacity);G=1;return U(d)}};Element.implement({slimbox:function(c,d){$$(this).slimbox(c,d);return this}});Elements.implement({slimbox:function(c,f,e){f=f||function(g){return[g.href,g.title]};e=e||function(){return true};var d=this;d.removeEvents("click").addEvent("click",function(){var g=d.filter(e,this);return Slimbox.open(g.map(f),g.indexOf(this),c)});return d}});function b(){X.setStyles({top:window.getScrollTop(),height:window.getHeight()})}function Q(c){["object",window.ie?"select":"embed"].forEach(function(e){Array.forEach(document.getElementsByTagName(e),function(f){if (c){f._slimbox=f.style.visibility}f.style.visibility=c?"hidden":f._slimbox})});X.style.display=c?"":"none";var d=c?"addEvent":"removeEvent";window[d]("scroll",b)[d]("resize",b);document[d]("keydown",V)}function V(c){switch(c.code){case 27:case 88:case 67:N();break;case 37:case 80:D();break;case 39:case 78:R()}return false}function D(){return U(S)}function R(){return U(T)}function U(c){if ((G==1)&&(c>=0)){G=2;B=c;S=((B||!F.loop)?B:L.length)-1;T=B+1;if (T==L.length){T=F.loop?0:-1}$$(H,W,P,Z).setStyle("display","none");E.bottom.cancel().set(0);E.image.set(0);a.className="lbLoading";M=new Image();M.onload=A;M.src=L[c][0]}return false}function A(){switch(G++){case 2:a.className="";P.setStyles({backgroundImage:"url("+L[B][0]+")",display:""});$$(P,I).setStyle("width",M.width);$$(P,H,W).setStyle("height",M.height);Y.set("html",L[B][1]||"");C.set("html",(F.showCounter&&(L.length>1))?F.counterText.replace(/{x}/,B+1).replace(/{y}/,L.length):"");if (S>=0){J.src=L[S][0]}if (T>=0){K.src=L[T][0]}if (a.clientHeight!=P.offsetHeight){E.resize.start({height:P.offsetHeight});break}G++;case 3:if (a.clientWidth!=P.offsetWidth){E.resize.start({width:P.offsetWidth,marginLeft:-P.offsetWidth/2});break}G++;case 4:Z.setStyles({top:O+a.clientHeight,marginLeft:a.style.marginLeft,visibility:"hidden",display:""});E.image.start(1);break;case 5:if (S>=0){H.style.display=""}if (T>=0){W.style.display=""}if (F.animateCaption){E.bottom.set(-I.offsetHeight).start(0)}Z.style.visibility="";G=1}}function N(){if (G){G=0;M.onload=$empty;for(var c in E){E[c].cancel()}$$(a,Z).setStyle("display","none");E.overlay.chain(Q).start(0)}return false}})();

// AUTOLOAD CODE BLOCK (MAY BE CHANGED OR REMOVED)
Slimbox.scanPage = function() {
	var links = $$("a").filter(function(el) {
		return el.rel && el.rel.test(/^lightbox/i);
	});
	$$(links).slimbox({/* Put custom options here */}, null, function(el) {
		return (this == el) || ((this.rel.length > 8) && (this.rel == el.rel));
	});
};
window.addEvent('domready', Slimbox.scanPage);

require(['fab/fabrik'], function (Fabrik) {
	window.addEvent('fabrik.loaded', function () {
		Fabrik.addEvent('fabrik.list.update', Slimbox.scanPage);
	});
});

