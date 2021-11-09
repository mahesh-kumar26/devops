<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en">
<![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="en">
<![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="en">
<![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
    <head>
        <meta charset="UTF-8"><script type="text/javascript">(window.NREUM||(NREUM={})).init={privacy:{cookies_enabled:true},ajax:{deny_list:["bam.nr-data.net"]},distributed_tracing:{enabled:true}};(window.NREUM||(NREUM={})).loader_config={agentID:"1113021364",accountID:"1074947",trustKey:"1074947",xpid:"VQYAVV9XDxABVVBRBwMGVVUI",licenseKey:"b9c0505d84",applicationID:"1113021319"};window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o||e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({1:[function(t,e,n){function r(t){try{s.console&&console.log(t)}catch(e){}}var o,i=t("ee"),a=t(29),s={};try{o=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(s.console=!0,o.indexOf("dev")!==-1&&(s.dev=!0),o.indexOf("nr_dev")!==-1&&(s.nrDev=!0))}catch(c){}s.nrDev&&i.on("internal-error",function(t){r(t.stack)}),s.dev&&i.on("fn-err",function(t,e,n){r(n.stack)}),s.dev&&(r("NR AGENT IN DEVELOPMENT MODE"),r("flags: "+a(s,function(t,e){return t}).join(", ")))},{}],2:[function(t,e,n){function r(t,e,n,r,s){try{l?l-=1:o(s||new UncaughtException(t,e,n),!0)}catch(f){try{i("ierr",[f,c.now(),!0])}catch(d){}}return"function"==typeof u&&u.apply(this,a(arguments))}function UncaughtException(t,e,n){this.message=t||"Uncaught error with no additional information",this.sourceURL=e,this.line=n}function o(t,e){var n=e?null:c.now();i("err",[t,n])}var i=t("handle"),a=t(30),s=t("ee"),c=t("loader"),f=t("gos"),u=window.onerror,d=!1,p="nr@seenError";if(!c.disabled){var l=0;c.features.err=!0,t(1),window.onerror=r;try{throw new Error}catch(h){"stack"in h&&(t(13),t(12),"addEventListener"in window&&t(6),c.xhrWrappable&&t(14),d=!0)}s.on("fn-start",function(t,e,n){d&&(l+=1)}),s.on("fn-err",function(t,e,n){d&&!n[p]&&(f(n,p,function(){return!0}),this.thrown=!0,o(n))}),s.on("fn-end",function(){d&&!this.thrown&&l>0&&(l-=1)}),s.on("internal-error",function(t){i("ierr",[t,c.now(),!0])})}},{}],3:[function(t,e,n){var r=t("loader");r.disabled||(r.features.ins=!0)},{}],4:[function(t,e,n){function r(){L++,C=g.hash,this[u]=y.now()}function o(){L--,g.hash!==C&&i(0,!0);var t=y.now();this[h]=~~this[h]+t-this[u],this[d]=t}function i(t,e){E.emit("newURL",[""+g,e])}function a(t,e){t.on(e,function(){this[e]=y.now()})}var s="-start",c="-end",f="-body",u="fn"+s,d="fn"+c,p="cb"+s,l="cb"+c,h="jsTime",m="fetch",v="addEventListener",w=window,g=w.location,y=t("loader");if(w[v]&&y.xhrWrappable&&!y.disabled){var x=t(10),b=t(11),E=t(8),R=t(6),O=t(13),S=t(7),N=t(14),M=t(9),P=t("ee"),T=P.get("tracer");t(16),y.features.spa=!0;var C,L=0;P.on(u,r),b.on(p,r),M.on(p,r),P.on(d,o),b.on(l,o),M.on(l,o),P.buffer([u,d,"xhr-done","xhr-resolved"]),R.buffer([u]),O.buffer(["setTimeout"+c,"clearTimeout"+s,u]),N.buffer([u,"new-xhr","send-xhr"+s]),S.buffer([m+s,m+"-done",m+f+s,m+f+c]),E.buffer(["newURL"]),x.buffer([u]),b.buffer(["propagate",p,l,"executor-err","resolve"+s]),T.buffer([u,"no-"+u]),M.buffer(["new-jsonp","cb-start","jsonp-error","jsonp-end"]),a(N,"send-xhr"+s),a(P,"xhr-resolved"),a(P,"xhr-done"),a(S,m+s),a(S,m+"-done"),a(M,"new-jsonp"),a(M,"jsonp-end"),a(M,"cb-start"),E.on("pushState-end",i),E.on("replaceState-end",i),w[v]("hashchange",i,!0),w[v]("load",i,!0),w[v]("popstate",function(){i(0,L>1)},!0)}},{}],5:[function(t,e,n){function r(t){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var o=t("ee"),i=t("handle"),a=t(13),s=t(12),c="learResourceTimings",f="addEventListener",u="resourcetimingbufferfull",d="bstResource",p="resource",l="-start",h="-end",m="fn"+l,v="fn"+h,w="bstTimer",g="pushState",y=t("loader");if(!y.disabled){y.features.stn=!0,t(8),"addEventListener"in window&&t(6);var x=NREUM.o.EV;o.on(m,function(t,e){var n=t[0];n instanceof x&&(this.bstStart=y.now())}),o.on(v,function(t,e){var n=t[0];n instanceof x&&i("bst",[n,e,this.bstStart,y.now()])}),a.on(m,function(t,e,n){this.bstStart=y.now(),this.bstType=n}),a.on(v,function(t,e){i(w,[e,this.bstStart,y.now(),this.bstType])}),s.on(m,function(){this.bstStart=y.now()}),s.on(v,function(t,e){i(w,[e,this.bstStart,y.now(),"requestAnimationFrame"])}),o.on(g+l,function(t){this.time=y.now(),this.startPath=location.pathname+location.hash}),o.on(g+h,function(t){i("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),f in window.performance&&(window.performance["c"+c]?window.performance[f](u,function(t){i(d,[window.performance.getEntriesByType(p)]),window.performance["c"+c]()},!1):window.performance[f]("webkit"+u,function(t){i(d,[window.performance.getEntriesByType(p)]),window.performance["webkitC"+c]()},!1)),document[f]("scroll",r,{passive:!0}),document[f]("keypress",r,!1),document[f]("click",r,!1)}}},{}],6:[function(t,e,n){function r(t){for(var e=t;e&&!e.hasOwnProperty(u);)e=Object.getPrototypeOf(e);e&&o(e)}function o(t){s.inPlace(t,[u,d],"-",i)}function i(t,e){return t[1]}var a=t("ee").get("events"),s=t("wrap-function")(a,!0),c=t("gos"),f=XMLHttpRequest,u="addEventListener",d="removeEventListener";e.exports=a,"getPrototypeOf"in Object?(r(document),r(window),r(f.prototype)):f.prototype.hasOwnProperty(u)&&(o(window),o(f.prototype)),a.on(u+"-start",function(t,e){var n=t[1],r=c(n,"nr@wrapped",function(){function t(){if("function"==typeof n.handleEvent)return n.handleEvent.apply(n,arguments)}var e={object:t,"function":n}[typeof n];return e?s(e,"fn-",null,e.name||"anonymous"):n});this.wrapped=t[1]=r}),a.on(d+"-start",function(t){t[1]=this.wrapped||t[1]})},{}],7:[function(t,e,n){function r(t,e,n){var r=t[e];"function"==typeof r&&(t[e]=function(){var t=i(arguments),e={};o.emit(n+"before-start",[t],e);var a;e[m]&&e[m].dt&&(a=e[m].dt);var s=r.apply(this,t);return o.emit(n+"start",[t,a],s),s.then(function(t){return o.emit(n+"end",[null,t],s),t},function(t){throw o.emit(n+"end",[t],s),t})})}var o=t("ee").get("fetch"),i=t(30),a=t(29);e.exports=o;var s=window,c="fetch-",f=c+"body-",u=["arrayBuffer","blob","json","text","formData"],d=s.Request,p=s.Response,l=s.fetch,h="prototype",m="nr@context";d&&p&&l&&(a(u,function(t,e){r(d[h],e,f),r(p[h],e,f)}),r(s,"fetch",c),o.on(c+"end",function(t,e){var n=this;if(e){var r=e.headers.get("content-length");null!==r&&(n.rxSize=r),o.emit(c+"done",[null,e],n)}else o.emit(c+"done",[t],n)}))},{}],8:[function(t,e,n){var r=t("ee").get("history"),o=t("wrap-function")(r);e.exports=r;var i=window.history&&window.history.constructor&&window.history.constructor.prototype,a=window.history;i&&i.pushState&&i.replaceState&&(a=i),o.inPlace(a,["pushState","replaceState"],"-")},{}],9:[function(t,e,n){function r(t){function e(){c.emit("jsonp-end",[],p),t.removeEventListener("load",e,!1),t.removeEventListener("error",n,!1)}function n(){c.emit("jsonp-error",[],p),c.emit("jsonp-end",[],p),t.removeEventListener("load",e,!1),t.removeEventListener("error",n,!1)}var r=t&&"string"==typeof t.nodeName&&"script"===t.nodeName.toLowerCase();if(r){var o="function"==typeof t.addEventListener;if(o){var a=i(t.src);if(a){var u=s(a),d="function"==typeof u.parent[u.key];if(d){var p={};f.inPlace(u.parent,[u.key],"cb-",p),t.addEventListener("load",e,!1),t.addEventListener("error",n,!1),c.emit("new-jsonp",[t.src],p)}}}}}function o(){return"addEventListener"in window}function i(t){var e=t.match(u);return e?e[1]:null}function a(t,e){var n=t.match(p),r=n[1],o=n[3];return o?a(o,e[r]):e[r]}function s(t){var e=t.match(d);return e&&e.length>=3?{key:e[2],parent:a(e[1],window)}:{key:t,parent:window}}var c=t("ee").get("jsonp"),f=t("wrap-function")(c);if(e.exports=c,o()){var u=/[?&](?:callback|cb)=([^&#]+)/,d=/(.*)\.([^.]+)/,p=/^(\w+)(\.|$)(.*)$/,l=["appendChild","insertBefore","replaceChild"];Node&&Node.prototype&&Node.prototype.appendChild?f.inPlace(Node.prototype,l,"dom-"):(f.inPlace(HTMLElement.prototype,l,"dom-"),f.inPlace(HTMLHeadElement.prototype,l,"dom-"),f.inPlace(HTMLBodyElement.prototype,l,"dom-")),c.on("dom-start",function(t){r(t[0])})}},{}],10:[function(t,e,n){var r=t("ee").get("mutation"),o=t("wrap-function")(r),i=NREUM.o.MO;e.exports=r,i&&(window.MutationObserver=function(t){return this instanceof i?new i(o(t,"fn-")):i.apply(this,arguments)},MutationObserver.prototype=i.prototype)},{}],11:[function(t,e,n){function r(t){var e=i.context(),n=s(t,"executor-",e,null,!1),r=new f(n);return i.context(r).getCtx=function(){return e},r}var o=t("wrap-function"),i=t("ee").get("promise"),a=t("ee").getOrSetContext,s=o(i),c=t(29),f=NREUM.o.PR;e.exports=i,f&&(window.Promise=r,["all","race"].forEach(function(t){var e=f[t];f[t]=function(n){function r(t){return function(){i.emit("propagate",[null,!o],a,!1,!1),o=o||!t}}var o=!1;c(n,function(e,n){Promise.resolve(n).then(r("all"===t),r(!1))});var a=e.apply(f,arguments),s=f.resolve(a);return s}}),["resolve","reject"].forEach(function(t){var e=f[t];f[t]=function(t){var n=e.apply(f,arguments);return t!==n&&i.emit("propagate",[t,!0],n,!1,!1),n}}),f.prototype["catch"]=function(t){return this.then(null,t)},f.prototype=Object.create(f.prototype,{constructor:{value:r}}),c(Object.getOwnPropertyNames(f),function(t,e){try{r[e]=f[e]}catch(n){}}),o.wrapInPlace(f.prototype,"then",function(t){return function(){var e=this,n=o.argsToArray.apply(this,arguments),r=a(e);r.promise=e,n[0]=s(n[0],"cb-",r,null,!1),n[1]=s(n[1],"cb-",r,null,!1);var c=t.apply(this,n);return r.nextPromise=c,i.emit("propagate",[e,!0],c,!1,!1),c}}),i.on("executor-start",function(t){t[0]=s(t[0],"resolve-",this,null,!1),t[1]=s(t[1],"resolve-",this,null,!1)}),i.on("executor-err",function(t,e,n){t[1](n)}),i.on("cb-end",function(t,e,n){i.emit("propagate",[n,!0],this.nextPromise,!1,!1)}),i.on("propagate",function(t,e,n){this.getCtx&&!e||(this.getCtx=function(){if(t instanceof Promise)var e=i.context(t);return e&&e.getCtx?e.getCtx():this})}),r.toString=function(){return""+f})},{}],12:[function(t,e,n){var r=t("ee").get("raf"),o=t("wrap-function")(r),i="equestAnimationFrame";e.exports=r,o.inPlace(window,["r"+i,"mozR"+i,"webkitR"+i,"msR"+i],"raf-"),r.on("raf-start",function(t){t[0]=o(t[0],"fn-")})},{}],13:[function(t,e,n){function r(t,e,n){t[0]=a(t[0],"fn-",null,n)}function o(t,e,n){this.method=n,this.timerDuration=isNaN(t[1])?0:+t[1],t[0]=a(t[0],"fn-",this,n)}var i=t("ee").get("timer"),a=t("wrap-function")(i),s="setTimeout",c="setInterval",f="clearTimeout",u="-start",d="-";e.exports=i,a.inPlace(window,[s,"setImmediate"],s+d),a.inPlace(window,[c],c+d),a.inPlace(window,[f,"clearImmediate"],f+d),i.on(c+u,r),i.on(s+u,o)},{}],14:[function(t,e,n){function r(t,e){d.inPlace(e,["onreadystatechange"],"fn-",s)}function o(){var t=this,e=u.context(t);t.readyState>3&&!e.resolved&&(e.resolved=!0,u.emit("xhr-resolved",[],t)),d.inPlace(t,g,"fn-",s)}function i(t){y.push(t),h&&(b?b.then(a):v?v(a):(E=-E,R.data=E))}function a(){for(var t=0;t<y.length;t++)r([],y[t]);y.length&&(y=[])}function s(t,e){return e}function c(t,e){for(var n in t)e[n]=t[n];return e}t(6);var f=t("ee"),u=f.get("xhr"),d=t("wrap-function")(u),p=NREUM.o,l=p.XHR,h=p.MO,m=p.PR,v=p.SI,w="readystatechange",g=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],y=[];e.exports=u;var x=window.XMLHttpRequest=function(t){var e=new l(t);try{u.emit("new-xhr",[e],e),e.addEventListener(w,o,!1)}catch(n){try{u.emit("internal-error",[n])}catch(r){}}return e};if(c(l,x),x.prototype=l.prototype,d.inPlace(x.prototype,["open","send"],"-xhr-",s),u.on("send-xhr-start",function(t,e){r(t,e),i(e)}),u.on("open-xhr-start",r),h){var b=m&&m.resolve();if(!v&&!m){var E=1,R=document.createTextNode(E);new h(a).observe(R,{characterData:!0})}}else f.on("fn-end",function(t){t[0]&&t[0].type===w||a()})},{}],15:[function(t,e,n){function r(t){if(!s(t))return null;var e=window.NREUM;if(!e.loader_config)return null;var n=(e.loader_config.accountID||"").toString()||null,r=(e.loader_config.agentID||"").toString()||null,f=(e.loader_config.trustKey||"").toString()||null;if(!n||!r)return null;var h=l.generateSpanId(),m=l.generateTraceId(),v=Date.now(),w={spanId:h,traceId:m,timestamp:v};return(t.sameOrigin||c(t)&&p())&&(w.traceContextParentHeader=o(h,m),w.traceContextStateHeader=i(h,v,n,r,f)),(t.sameOrigin&&!u()||!t.sameOrigin&&c(t)&&d())&&(w.newrelicHeader=a(h,m,v,n,r,f)),w}function o(t,e){return"00-"+e+"-"+t+"-01"}function i(t,e,n,r,o){var i=0,a="",s=1,c="",f="";return o+"@nr="+i+"-"+s+"-"+n+"-"+r+"-"+t+"-"+a+"-"+c+"-"+f+"-"+e}function a(t,e,n,r,o,i){var a="btoa"in window&&"function"==typeof window.btoa;if(!a)return null;var s={v:[0,1],d:{ty:"Browser",ac:r,ap:o,id:t,tr:e,ti:n}};return i&&r!==i&&(s.d.tk=i),btoa(JSON.stringify(s))}function s(t){return f()&&c(t)}function c(t){var e=!1,n={};if("init"in NREUM&&"distributed_tracing"in NREUM.init&&(n=NREUM.init.distributed_tracing),t.sameOrigin)e=!0;else if(n.allowed_origins instanceof Array)for(var r=0;r<n.allowed_origins.length;r++){var o=h(n.allowed_origins[r]);if(t.hostname===o.hostname&&t.protocol===o.protocol&&t.port===o.port){e=!0;break}}return e}function f(){return"init"in NREUM&&"distributed_tracing"in NREUM.init&&!!NREUM.init.distributed_tracing.enabled}function u(){return"init"in NREUM&&"distributed_tracing"in NREUM.init&&!!NREUM.init.distributed_tracing.exclude_newrelic_header}function d(){return"init"in NREUM&&"distributed_tracing"in NREUM.init&&NREUM.init.distributed_tracing.cors_use_newrelic_header!==!1}function p(){return"init"in NREUM&&"distributed_tracing"in NREUM.init&&!!NREUM.init.distributed_tracing.cors_use_tracecontext_headers}var l=t(26),h=t(17);e.exports={generateTracePayload:r,shouldGenerateTrace:s}},{}],16:[function(t,e,n){function r(t){var e=this.params,n=this.metrics;if(!this.ended){this.ended=!0;for(var r=0;r<p;r++)t.removeEventListener(d[r],this.listener,!1);e.aborted||(n.duration=a.now()-this.startTime,this.loadCaptureCalled||4!==t.readyState?null==e.status&&(e.status=0):i(this,t),n.cbTime=this.cbTime,u.emit("xhr-done",[t],t),s("xhr",[e,n,this.startTime]))}}function o(t,e){var n=c(e),r=t.params;r.host=n.hostname+":"+n.port,r.pathname=n.pathname,t.parsedOrigin=n,t.sameOrigin=n.sameOrigin}function i(t,e){t.params.status=e.status;var n=v(e,t.lastSize);if(n&&(t.metrics.rxSize=n),t.sameOrigin){var r=e.getResponseHeader("X-NewRelic-App-Data");r&&(t.params.cat=r.split(", ").pop())}t.loadCaptureCalled=!0}var a=t("loader");if(a.xhrWrappable&&!a.disabled){var s=t("handle"),c=t(17),f=t(15).generateTracePayload,u=t("ee"),d=["load","error","abort","timeout"],p=d.length,l=t("id"),h=t(22),m=t(21),v=t(18),w=NREUM.o.REQ,g=window.XMLHttpRequest;a.features.xhr=!0,t(14),t(7),u.on("new-xhr",function(t){var e=this;e.totalCbs=0,e.called=0,e.cbTime=0,e.end=r,e.ended=!1,e.xhrGuids={},e.lastSize=null,e.loadCaptureCalled=!1,e.params=this.params||{},e.metrics=this.metrics||{},t.addEventListener("load",function(n){i(e,t)},!1),h&&(h>34||h<10)||window.opera||t.addEventListener("progress",function(t){e.lastSize=t.loaded},!1)}),u.on("open-xhr-start",function(t){this.params={method:t[0]},o(this,t[1]),this.metrics={}}),u.on("open-xhr-end",function(t,e){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&e.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid);var n=f(this.parsedOrigin);if(n){var r=!1;n.newrelicHeader&&(e.setRequestHeader("newrelic",n.newrelicHeader),r=!0),n.traceContextParentHeader&&(e.setRequestHeader("traceparent",n.traceContextParentHeader),n.traceContextStateHeader&&e.setRequestHeader("tracestate",n.traceContextStateHeader),r=!0),r&&(this.dt=n)}}),u.on("send-xhr-start",function(t,e){var n=this.metrics,r=t[0],o=this;if(n&&r){var i=m(r);i&&(n.txSize=i)}this.startTime=a.now(),this.listener=function(t){try{"abort"!==t.type||o.loadCaptureCalled||(o.params.aborted=!0),("load"!==t.type||o.called===o.totalCbs&&(o.onloadCalled||"function"!=typeof e.onload))&&o.end(e)}catch(n){try{u.emit("internal-error",[n])}catch(r){}}};for(var s=0;s<p;s++)e.addEventListener(d[s],this.listener,!1)}),u.on("xhr-cb-time",function(t,e,n){this.cbTime+=t,e?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof n.onload||this.end(n)}),u.on("xhr-load-added",function(t,e){var n=""+l(t)+!!e;this.xhrGuids&&!this.xhrGuids[n]&&(this.xhrGuids[n]=!0,this.totalCbs+=1)}),u.on("xhr-load-removed",function(t,e){var n=""+l(t)+!!e;this.xhrGuids&&this.xhrGuids[n]&&(delete this.xhrGuids[n],this.totalCbs-=1)}),u.on("addEventListener-end",function(t,e){e instanceof g&&"load"===t[0]&&u.emit("xhr-load-added",[t[1],t[2]],e)}),u.on("removeEventListener-end",function(t,e){e instanceof g&&"load"===t[0]&&u.emit("xhr-load-removed",[t[1],t[2]],e)}),u.on("fn-start",function(t,e,n){e instanceof g&&("onload"===n&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=a.now()))}),u.on("fn-end",function(t,e){this.xhrCbStart&&u.emit("xhr-cb-time",[a.now()-this.xhrCbStart,this.onload,e],e)}),u.on("fetch-before-start",function(t){function e(t,e){var n=!1;return e.newrelicHeader&&(t.set("newrelic",e.newrelicHeader),n=!0),e.traceContextParentHeader&&(t.set("traceparent",e.traceContextParentHeader),e.traceContextStateHeader&&t.set("tracestate",e.traceContextStateHeader),n=!0),n}var n,r=t[1]||{};"string"==typeof t[0]?n=t[0]:t[0]&&t[0].url?n=t[0].url:window.URL&&t[0]&&t[0]instanceof URL&&(n=t[0].href),n&&(this.parsedOrigin=c(n),this.sameOrigin=this.parsedOrigin.sameOrigin);var o=f(this.parsedOrigin);if(o&&(o.newrelicHeader||o.traceContextParentHeader))if("string"==typeof t[0]||window.URL&&t[0]&&t[0]instanceof URL){var i={};for(var a in r)i[a]=r[a];i.headers=new Headers(r.headers||{}),e(i.headers,o)&&(this.dt=o),t.length>1?t[1]=i:t.push(i)}else t[0]&&t[0].headers&&e(t[0].headers,o)&&(this.dt=o)}),u.on("fetch-start",function(t,e){this.params={},this.metrics={},this.startTime=a.now(),t.length>=1&&(this.target=t[0]),t.length>=2&&(this.opts=t[1]);var n,r=this.opts||{},i=this.target;"string"==typeof i?n=i:"object"==typeof i&&i instanceof w?n=i.url:window.URL&&"object"==typeof i&&i instanceof URL&&(n=i.href),o(this,n);var s=(""+(i&&i instanceof w&&i.method||r.method||"GET")).toUpperCase();this.params.method=s,this.txSize=m(r.body)||0}),u.on("fetch-done",function(t,e){this.params||(this.params={}),this.params.status=e?e.status:0;var n;"string"==typeof this.rxSize&&this.rxSize.length>0&&(n=+this.rxSize);var r={txSize:this.txSize,rxSize:n,duration:a.now()-this.startTime};s("xhr",[this.params,r,this.startTime])})}},{}],17:[function(t,e,n){var r={};e.exports=function(t){if(t in r)return r[t];var e=document.createElement("a"),n=window.location,o={};e.href=t,o.port=e.port;var i=e.href.split("://");!o.port&&i[1]&&(o.port=i[1].split("/")[0].split("@").pop().split(":")[1]),o.port&&"0"!==o.port||(o.port="https"===i[0]?"443":"80"),o.hostname=e.hostname||n.hostname,o.pathname=e.pathname,o.protocol=i[0],"/"!==o.pathname.charAt(0)&&(o.pathname="/"+o.pathname);var a=!e.protocol||":"===e.protocol||e.protocol===n.protocol,s=e.hostname===document.domain&&e.port===n.port;return o.sameOrigin=a&&(!e.hostname||s),"/"===o.pathname&&(r[t]=o),o}},{}],18:[function(t,e,n){function r(t,e){var n=t.responseType;return"json"===n&&null!==e?e:"arraybuffer"===n||"blob"===n||"json"===n?o(t.response):"text"===n||""===n||void 0===n?o(t.responseText):void 0}var o=t(21);e.exports=r},{}],19:[function(t,e,n){function r(){}function o(t,e,n){return function(){return i(t,[f.now()].concat(s(arguments)),e?null:this,n),e?void 0:this}}var i=t("handle"),a=t(29),s=t(30),c=t("ee").get("tracer"),f=t("loader"),u=NREUM;"undefined"==typeof window.newrelic&&(newrelic=u);var d=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],p="api-",l=p+"ixn-";a(d,function(t,e){u[e]=o(p+e,!0,"api")}),u.addPageAction=o(p+"addPageAction",!0),u.setCurrentRouteName=o(p+"routeName",!0),e.exports=newrelic,u.interaction=function(){return(new r).get()};var h=r.prototype={createTracer:function(t,e){var n={},r=this,o="function"==typeof e;return i(l+"tracer",[f.now(),t,n],r),function(){if(c.emit((o?"":"no-")+"fn-start",[f.now(),r,o],n),o)try{return e.apply(this,arguments)}catch(t){throw c.emit("fn-err",[arguments,this,t],n),t}finally{c.emit("fn-end",[f.now()],n)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,e){h[e]=o(l+e)}),newrelic.noticeError=function(t,e){"string"==typeof t&&(t=new Error(t)),i("err",[t,f.now(),!1,e])}},{}],20:[function(t,e,n){function r(t){if(NREUM.init){for(var e=NREUM.init,n=t.split("."),r=0;r<n.length-1;r++)if(e=e[n[r]],"object"!=typeof e)return;return e=e[n[n.length-1]]}}e.exports={getConfiguration:r}},{}],21:[function(t,e,n){e.exports=function(t){if("string"==typeof t&&t.length)return t.length;if("object"==typeof t){if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if(!("undefined"!=typeof FormData&&t instanceof FormData))try{return JSON.stringify(t).length}catch(e){return}}}},{}],22:[function(t,e,n){var r=0,o=navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);o&&(r=+o[1]),e.exports=r},{}],23:[function(t,e,n){function r(){return s.exists&&performance.now?Math.round(performance.now()):(i=Math.max((new Date).getTime(),i))-a}function o(){return i}var i=(new Date).getTime(),a=i,s=t(31);e.exports=r,e.exports.offset=a,e.exports.getLastTimestamp=o},{}],24:[function(t,e,n){function r(t){return!(!t||!t.protocol||"file:"===t.protocol)}e.exports=r},{}],25:[function(t,e,n){function r(t,e){var n=t.getEntries();n.forEach(function(t){"first-paint"===t.name?d("timing",["fp",Math.floor(t.startTime)]):"first-contentful-paint"===t.name&&d("timing",["fcp",Math.floor(t.startTime)])})}function o(t,e){var n=t.getEntries();n.length>0&&d("lcp",[n[n.length-1]])}function i(t){t.getEntries().forEach(function(t){t.hadRecentInput||d("cls",[t])})}function a(t){if(t instanceof h&&!v){var e=Math.round(t.timeStamp),n={type:t.type};e<=p.now()?n.fid=p.now()-e:e>p.offset&&e<=Date.now()?(e-=p.offset,n.fid=p.now()-e):e=p.now(),v=!0,d("timing",["fi",e,n])}}function s(t){"hidden"===t&&d("pageHide",[p.now()])}if(!("init"in NREUM&&"page_view_timing"in NREUM.init&&"enabled"in NREUM.init.page_view_timing&&NREUM.init.page_view_timing.enabled===!1)){var c,f,u,d=t("handle"),p=t("loader"),l=t(28),h=NREUM.o.EV;if("PerformanceObserver"in window&&"function"==typeof window.PerformanceObserver){c=new PerformanceObserver(r);try{c.observe({entryTypes:["paint"]})}catch(m){}f=new PerformanceObserver(o);try{f.observe({entryTypes:["largest-contentful-paint"]})}catch(m){}u=new PerformanceObserver(i);try{u.observe({type:"layout-shift",buffered:!0})}catch(m){}}if("addEventListener"in document){var v=!1,w=["click","keydown","mousedown","pointerdown","touchstart"];w.forEach(function(t){document.addEventListener(t,a,!1)})}l(s)}},{}],26:[function(t,e,n){function r(){function t(){return e?15&e[n++]:16*Math.random()|0}var e=null,n=0,r=window.crypto||window.msCrypto;r&&r.getRandomValues&&(e=r.getRandomValues(new Uint8Array(31)));for(var o,i="xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx",a="",s=0;s<i.length;s++)o=i[s],"x"===o?a+=t().toString(16):"y"===o?(o=3&t()|8,a+=o.toString(16)):a+=o;return a}function o(){return a(16)}function i(){return a(32)}function a(t){function e(){return n?15&n[r++]:16*Math.random()|0}var n=null,r=0,o=window.crypto||window.msCrypto;o&&o.getRandomValues&&Uint8Array&&(n=o.getRandomValues(new Uint8Array(31)));for(var i=[],a=0;a<t;a++)i.push(e().toString(16));return i.join("")}e.exports={generateUuid:r,generateSpanId:o,generateTraceId:i}},{}],27:[function(t,e,n){function r(t,e){if(!o)return!1;if(t!==o)return!1;if(!e)return!0;if(!i)return!1;for(var n=i.split("."),r=e.split("."),a=0;a<r.length;a++)if(r[a]!==n[a])return!1;return!0}var o=null,i=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var s=navigator.userAgent,c=s.match(a);c&&s.indexOf("Chrome")===-1&&s.indexOf("Chromium")===-1&&(o="Safari",i=c[1])}e.exports={agent:o,version:i,match:r}},{}],28:[function(t,e,n){function r(t){function e(){t(a&&document[a]?document[a]:document[o]?"hidden":"visible")}"addEventListener"in document&&i&&document.addEventListener(i,e,!1)}e.exports=r;var o,i,a;"undefined"!=typeof document.hidden?(o="hidden",i="visibilitychange",a="visibilityState"):"undefined"!=typeof document.msHidden?(o="msHidden",i="msvisibilitychange"):"undefined"!=typeof document.webkitHidden&&(o="webkitHidden",i="webkitvisibilitychange",a="webkitVisibilityState")},{}],29:[function(t,e,n){function r(t,e){var n=[],r="",i=0;for(r in t)o.call(t,r)&&(n[i]=e(r,t[r]),i+=1);return n}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],30:[function(t,e,n){function r(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,o=n-e||0,i=Array(o<0?0:o);++r<o;)i[r]=t[e+r];return i}e.exports=r},{}],31:[function(t,e,n){e.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(t,e,n){function r(){}function o(t){function e(t){return t&&t instanceof r?t:t?f(t,c,a):a()}function n(n,r,o,i,a){if(a!==!1&&(a=!0),!l.aborted||i){t&&a&&t(n,r,o);for(var s=e(o),c=m(n),f=c.length,u=0;u<f;u++)c[u].apply(s,r);var p=d[y[n]];return p&&p.push([x,n,r,s]),s}}function i(t,e){g[t]=m(t).concat(e)}function h(t,e){var n=g[t];if(n)for(var r=0;r<n.length;r++)n[r]===e&&n.splice(r,1)}function m(t){return g[t]||[]}function v(t){return p[t]=p[t]||o(n)}function w(t,e){l.aborted||u(t,function(t,n){e=e||"feature",y[n]=e,e in d||(d[e]=[])})}var g={},y={},x={on:i,addEventListener:i,removeEventListener:h,emit:n,get:v,listeners:m,context:e,buffer:w,abort:s,aborted:!1};return x}function i(t){return f(t,c,a)}function a(){return new r}function s(){(d.api||d.feature)&&(l.aborted=!0,d=l.backlog={})}var c="nr@context",f=t("gos"),u=t(29),d={},p={},l=e.exports=o();e.exports.getOrSetContext=i,l.backlog=d},{}],gos:[function(t,e,n){function r(t,e,n){if(o.call(t,e))return t[e];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return t[e]=r,r}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],handle:[function(t,e,n){function r(t,e,n,r){o.buffer([t],r),o.emit(t,e,n)}var o=t("ee").get("handle");e.exports=r,r.ee=o},{}],id:[function(t,e,n){function r(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:a(t,i,function(){return o++})}var o=1,i="nr@id",a=t("gos");e.exports=r},{}],loader:[function(t,e,n){function r(){if(!S++){var t=O.info=NREUM.info,e=m.getElementsByTagName("script")[0];if(setTimeout(f.abort,3e4),!(t&&t.licenseKey&&t.applicationID&&e))return f.abort();c(E,function(e,n){t[e]||(t[e]=n)});var n=a();s("mark",["onload",n+O.offset],null,"api"),s("timing",["load",n]);var r=m.createElement("script");0===t.agent.indexOf("http://")||0===t.agent.indexOf("https://")?r.src=t.agent:r.src=l+"://"+t.agent,e.parentNode.insertBefore(r,e)}}function o(){"complete"===m.readyState&&i()}function i(){s("mark",["domContent",a()+O.offset],null,"api")}var a=t(23),s=t("handle"),c=t(29),f=t("ee"),u=t(27),d=t(24),p=t(20),l=p.getConfiguration("ssl")===!1?"http":"https",h=window,m=h.document,v="addEventListener",w="attachEvent",g=h.XMLHttpRequest,y=g&&g.prototype,x=!d(h.location);NREUM.o={ST:setTimeout,SI:h.setImmediate,CT:clearTimeout,XHR:g,REQ:h.Request,EV:h.Event,PR:h.Promise,MO:h.MutationObserver};var b=""+location,E={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-spa-1210.min.js"},R=g&&y&&y[v]&&!/CriOS/.test(navigator.userAgent),O=e.exports={offset:a.getLastTimestamp(),now:a,origin:b,features:{},xhrWrappable:R,userAgent:u,disabled:x};if(!x){t(19),t(25),m[v]?(m[v]("DOMContentLoaded",i,!1),h[v]("load",r,!1)):(m[w]("onreadystatechange",o),h[w]("onload",r)),s("mark",["firstbyte",a.getLastTimestamp()],null,"api");var S=0}},{}],"wrap-function":[function(t,e,n){function r(t,e){function n(e,n,r,c,f){function nrWrapper(){var i,a,u,p;try{a=this,i=d(arguments),u="function"==typeof r?r(i,a):r||{}}catch(l){o([l,"",[i,a,c],u],t)}s(n+"start",[i,a,c],u,f);try{return p=e.apply(a,i)}catch(h){throw s(n+"err",[i,a,h],u,f),h}finally{s(n+"end",[i,a,p],u,f)}}return a(e)?e:(n||(n=""),nrWrapper[p]=e,i(e,nrWrapper,t),nrWrapper)}function r(t,e,r,o,i){r||(r="");var s,c,f,u="-"===r.charAt(0);for(f=0;f<e.length;f++)c=e[f],s=t[c],a(s)||(t[c]=n(s,u?c+r:r,o,c,i))}function s(n,r,i,a){if(!h||e){var s=h;h=!0;try{t.emit(n,r,i,e,a)}catch(c){o([c,n,r,i],t)}h=s}}return t||(t=u),n.inPlace=r,n.flag=p,n}function o(t,e){e||(e=u);try{e.emit("internal-error",t)}catch(n){}}function i(t,e,n){if(Object.defineProperty&&Object.keys)try{var r=Object.keys(t);return r.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(i){o([i],n)}for(var a in t)l.call(t,a)&&(e[a]=t[a]);return e}function a(t){return!(t&&t instanceof Function&&t.apply&&!t[p])}function s(t,e){var n=e(t);return n[p]=t,i(t,n,u),n}function c(t,e,n){var r=t[e];t[e]=s(r,n)}function f(){for(var t=arguments.length,e=new Array(t),n=0;n<t;++n)e[n]=arguments[n];return e}var u=t("ee"),d=t(30),p="nr@original",l=Object.prototype.hasOwnProperty,h=!1;e.exports=r,e.exports.wrapFunction=s,e.exports.wrapInPlace=c,e.exports.argsToArray=f},{}]},{},["loader",2,16,5,3,4]);</script>
                  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
        <title>A closer look at water-splitting&#039;s solar fuel | EurekAlert!</title>
                    <link rel="stylesheet" href="/build/app.css">
            <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css' />
            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
            <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
            <!--*****START OF Azure Media Player CSS*****-->
            <link href="//amp.azure.net/libs/amp/2.3.7/skins/amp-default/azuremediaplayer.min.css" rel="stylesheet">
            <!--*****END OF Azure Media Player CSS*****-->
                        
            
  <!-- Go to www.addthis.com/dashboard to customize your tools -->
  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-609e0dbb00597456"></script>

    <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@EurekAlert">
  <meta name="twitter:domain" content="www.eurekalert.org">
  <meta name="twitter:title" content="A closer look at water-splitting&#039;s solar fuel potential">
  <meta name="twitter:description" content="Scientists at Berkeley Lab and the Joint Center for Artificial Photosynthesis (JCAP) have gained important new insight into how the performance of a promising semiconducting thin film can be optimized at the nanoscale for renewable energy technologies such as solar fuels.">
      <meta name="twitter:creator" content="BerkeleyLab">
  
        <meta property="og:image" content="https://earimediaprodweb.azurewebsites.net/Api/v1/Multimedia/670e960f-3012-4f27-a5ee-1bd3cea8b0de/Rendition/thumbnail/Content/Public">
    <meta name="twitter:image" content="https://earimediaprodweb.azurewebsites.net/Api/v1/Multimedia/670e960f-3012-4f27-a5ee-1bd3cea8b0de/Rendition/thumbnail/Content/Public">
  
    <meta property="og:title" content="A closer look at water-splitting&#039;s solar fuel potential">
  <meta property="og:description" content="Scientists at Berkeley Lab and the Joint Center for Artificial Photosynthesis (JCAP) have gained important new insight into how the performance of a promising semiconducting thin film can be optimized at the nanoscale for renewable energy technologies such as solar fuels.">
  <meta property="og:site_name" content="EurekAlert!">
  <meta property="og:url" content="https://www.eurekalert.org/news-releases/771663">
  <meta property="og:type" content="website">
      <meta property="fb:profile_id" content="BerkeleyLab">
  
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
        
                                    

<script>
window.AAASdataLayer = window.AAASdataLayer || [];
window.AAASdataLayer = ({"page":{"pageInfo":{"pageTitle":"","pageType":"","pageURL":"http:\/\/www.eurekalert.com\/news-releases\/771663","pubDate":"","pagePath":"","author":"","pageID":"","subject":""},"attributes":{"aaasProgram":"eurekalert","searchTerm":"","searchType":"Eurekalert","searchResultNum":""}},"user":{"cookieConsent":"false","memberID":null,"access":"yes","accessMethod":"guest","accessType":"idp"}});
</script>


                    <script src="//assets.adobedtm.com/a48c09ba9d50/1e36ca10b673/launch-ea90f2ac46ad.min.js" async></script>

        



<script type='text/javascript'>
  var googletag = googletag || {};
  googletag.cmd = googletag.cmd || [];
  (function() {
    var gads = document.createElement('script');
    gads.async = true;
    gads.type = 'text/javascript';
    var useSSL = 'https:' == document.location.protocol;
    gads.src = (useSSL ? 'https:' : 'http:') +
      '//www.googletagservices.com/tag/js/gpt.js';
    var node = document.getElementsByTagName('script')[0];
    node.parentNode.insertBefore(gads, node);
  })();
</script>

<script type='text/javascript'>
  googletag.cmd.push(function() {
    googletag.defineSlot('/93152596/PubHome_Slot3_Ad1', [300, 250], 'div-gpt-ad-1441138239926-0').addService(googletag.pubads());
    googletag.defineSlot('/93152596/PubHome_Slot4_Ad2', [300, 250], 'div-gpt-ad-1441138239926-1').addService(googletag.pubads());
    googletag.defineSlot('/93152596/PubHome_Slot7_Ad3', [300, 250], 'div-gpt-ad-1441138239926-2').addService(googletag.pubads());
    googletag.defineSlot('/93152596/PubHome_Ad4', [300, 250], 'div-gpt-ad-1449158126219-3').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script>
    </head>

    <body class="">
        <div id="wrapper">

            
<header id="navigation" class="hidden-search">
    <div class="navbar navbar-static-top">
        <div class="container flush">
            <div class="search-header col-md-6 col-sm-4 col-md-push-6 col-sm-push-8">
                <div id="search" class="collapse navbar-collapse">

                    <div class="row">
                      <div class="col-md-8 col-md-offset-4">
                        

      <form name="single_line_search" method="post" id="simplesearch" action="/simplesearch" method="POST">

      <div class="input-group">
      <input type="text" id="single_line_search_keywords" name="single_line_search[keywords]" placeholder="SEARCH ARCHIVE" class="form-control placeholder form-control" />
      <span class="input-group-btn"><button type="submit" id="search-btn" name="single_line_search[search]" class="btn btn-default btn" form="simplesearch"><i class="fa fa-search"></i></button></span>
      </div>

      </form>



                      </div>
                    </div>
                    <a href="/advancedSearch" class="advanced-search hidden-xs">Advanced Search</a>
                </div>
            </div>
            <div class="clearfix">
                <div class="col-md-6 col-sm-8 col-md-pull-6 col-sm-pull-4 col-xs-10 hidden-xs">
                <a class="logo" href="/">
                    <img src="/images/logo-2x.png"
                    alt="EurekAlert! Science News">
                </a>
                <a class="brand" href="/">
                    <img src="/images/brand.png"
                    alt="A service of the American Association for the Advancement of Science">
                </a>
                </div>
                <div class="col-md-6 col-sm-8 col-md-pull-6 col-sm-pull-4 col-xs-10 visible-xs">
                <a href="/" class="logo">
                    <img src="/images/logo-2x.png"
                    alt="EurekAlert! Science News">
                </a>
                <a href="/" class="brand">
                    <img src="/images/brand.png"
                    alt="A service of the American Association for the Advancement of Science">
                </a>
                </div>
                <div class="search-wrapper col-xs-2 visible-xs">
                <button type="button" data-toggle="collapse" data-target="#search" class="search-btn"><i class="fa fa-search fa-2x"></i></button>
                </div>
            </div>
        </div>
    </div>
    <div role="navigation" class="navbar navbar-static-top navbar-inverse">
    <div class="container">
                <ul class="nav nav-pills pull-left">
            
                <li class="hidden-xs first">        <a href="/">Home</a>        
    </li>

    
                <li>        <a href="/news-releases/browse">News Releases</a>        
    </li>

    
                <li>        <a href="/multimedia">Multimedia</a>        
    </li>

    
                <li class="last">        <a href="/meetings/announcements">Meetings</a>        
    </li>


    </ul>

                <ul class="account nav nav-pills pull-right">
            
                <li class="first">        <a href="/login">Login</a>        
    </li>

    
                <li class="last">        <a href="/register">Register</a>        
    </li>


    </ul>

    </div>
</div>
</header>

            <div id="content" role="main" class="container ">
                <div class="row equal">
                                                                                  
                    <div id="main-content" class="col-md-8 has-sidebar white">
                                <article class="article">
        <header>
            <div class="release_date">

                                    News Release 
                    <time datetime="TODO">                                                 6-Aug-2020
                    </time>
                            </div>
            <h1 class="page_title">
                A closer look at water-splitting&#039;s solar fuel potential
            </h1>

            
                            <p class="subtitle">
                    Scientists at Berkeley Lab and the Joint Center for Artificial Photosynthesis zero in on bismuth vanadate's role in renewable energy at the nanoscale
                </p>
            <a style="color:red;" href="/releaseguidelines">Peer-Reviewed Publication</a>
            <p class="meta_institute">DOE/Lawrence Berkeley National Laboratory</p>
                        <div class="toolbar hidden-print hidden-search">

<div class='col-xs-6'>
    <div class="addthis_inline_share_toolbox_pnaa"></div>
  </div>
    <div class='col-xs-6'>
      <div class="article-tools pull-right">
            <div class="addthis_inline_share_toolbox_62ef"></div>
      </div>
    </div>
    


</div>
        </header>
        




        

                                  
                
                
        <div class="entry">
                                                                                                                                                                                                        <figure class="thumbnail pull-right" style="position: relative;z-index: 9999;">
                <a href="/multimedia/697813">
                  <div class="img-wrapper">
                    <img src="https://earimediaprodweb.azurewebsites.net/Api/v1/Multimedia/670e960f-3012-4f27-a5ee-1bd3cea8b0de/Rendition/low-res/Content/Public" alt="Atomic Force Microscope">
                  </div>
                </a>
                <figcaption class="caption">
                  <p><strong>image:&nbsp;Francesca Toma (right) and Johanna Eichhorn developed a special technique using an atomic force microscope at Berkeley Lab&#039;s JCAP laboratory to capture images of thin-film bismuth vanadate at the nanoscale to understand how a material&#039;s properties can affect its performance in an artificial photosynthesis device.</strong>
                  <a href="/multimedia/697813">view <span class="no-break-text">more&nbsp;<i class="fa fa-angle-right"></i></span></a></p>
                  <p class="credit">Credit: Marilyn Sargent/ Berkeley Lab</p>
                </figcaption>
              </figure>
            
                            <!-- PUBLIC MULTIMEDIA # 239571 ALIGN:right -->

<p>In the fight against climate change, scientists have searched for ways to replace fossil fuels with carbon-free alternatives such as hydrogen fuel. </p>
	<p>A device known as a photoelectrical chemical cell (PEC) has the potential to produce hydrogen fuel through artificial photosynthesis, an emerging renewable energy technology that uses energy from sunlight to drive chemical reactions such as splitting water into hydrogen and oxygen. </p>
	<p>The key to a PEC's success lies not only in how well its photoelectrode reacts with light to produce hydrogen, but also oxygen. Few materials can do this well, and according to theory, an inorganic material called bismuth vanadate (BiVO4) is a good candidate.</p>
	<p>Yet this technology is still young, and researchers in the field have struggled to make a BiVO4 photoelectrode that lives up to its potential in a PEC device. Now, as reported in the journal <a target="_blank" href="https://doi.org/10.1002/smll.202001600"><em>Small</em></a>, a research team led by scientists at the Department of Energy's Lawrence Berkeley National Laboratory (Berkeley Lab) and the <a target="_blank" href="https://solarfuelshub.org/">Joint Center for Artificial Photosynthesis (JCAP)</a>, a DOE Energy Innovation Hub, have gained important new insight into what might be happening at the nanoscale (billionths of a meter) to hold BiVO4 back. </p>
	<p>"When you make a material, such as an inorganic material like bismuth vanadate, you might assume, just by looking at it with the naked eye, that the material is homogeneous and uniform throughout," said senior author Francesca Toma, a staff scientist at JCAP in Berkeley Lab's Chemical Sciences Division. "But when you can see details in a material at the nanoscale, suddenly what you assumed was homogeneous is actually heterogeneous - with an ensemble of different properties and chemical compositions. And if you want to improve a photoelectrode material's efficiency, you need to know more about what's happening at the nanoscale." </p>
	<strong><p>X-rays and simulations bring a clearer picture into focus  </p>
</strong>	<p>In a previous study supported by the Laboratory Directed Research and Development program, Toma and lead author Johanna Eichhorn developed a special technique using an atomic force microscope at Berkeley Lab's JCAP laboratory to capture images of thin-film bismuth vanadate at the nanoscale to understand how a material's properties can affect its performance in an artificial photosynthesis device. (Eichhorn, who is currently at the Walter Schottky Institute of the Technical University of Munich in Germany was a researcher in Berkeley Lab's Chemical Sciences Division at the time of the study.)</p>
	<p>The current study builds on that pioneering work by using a scanning transmission X-ray microscope (STXM) at Berkeley Lab's Advanced Light Source (ALS) (<a target="_blank" href="https://als.lbl.gov/">https://als.lbl.gov/</a>), a synchrotron user facility, to map out changes in a thin-film semiconducting material made of molybdenum bismuth vanadate (Mo-BiVO4). </p>
	<p>The researchers used bismuth vanadate as a case example of a photoelectrode because the material can absorb light in the visible range in the solar spectrum, and when combined with a catalyst, its physical properties allow it to make oxygen in the water-splitting reaction. Bismuth vanadate is one of the few materials that can do this, and in this case, the addition of a small quantity of molybdenum to BiVO4 somehow improves its performance, Toma explained.</p>
	<p>When water is split into H2 and O2, hydrogen-hydrogen and oxygen-oxygen bonds need to form. But if any step in water-splitting is out of sync, unwanted reactions will happen, which could lead to corrosion. "And if you want to scale up a material into a commercial water-splitting device, no one wants something that degrades. So we wanted to develop a technique that maps out which regions at the nanoscale are the best at making oxygen," Toma explained. </p>
	<p>Working with ALS staff scientist David Shapiro, Toma and her team used STXM to take high-resolution nanoscale measurements of grains in a thin film of Mo-BiVO4 as the material degraded in response to the water-splitting reaction triggered by light and the electrolyte. </p>
	<p>"Chemical heterogeneity at the nanoscale in a material can often lead to interesting and useful properties, and few microscopy techniques can probe the molecular structure of a material at this scale," Shapiro said. "The STXM instruments at the Advanced Light Source are very sensitive probes that can nondestructively quantify this heterogeneity at high spatial resolution and can therefore provide a deeper understanding of these properties."</p>
	<p>David Prendergast, interim division director of the <a target="_blank" href="https://foundry.lbl.gov/">Molecular Foundry</a>, and Sebastian Reyes-Lillo, a former postdoctoral researcher at the Foundry, helped the team understand how Mo-BiVO4 responds to light by developing computational tools to analyze each molecule's spectral "fingerprint." Reyes-Lillo is currently a professor at Andres Bello University in Chile and a Molecular Foundry user. The Molecular Foundry is a Nanoscale Science Research Center national user facility. </p>
	<p>"Prendergast's technique is really powerful," Toma said. "Often when you have complex heterogeneous materials made of different atoms, the experimental data you get is not easy to understand. This approach tells you how to interpret those data. And if we have a better understanding of the data, we can create better strategies for making Mo-BiVO4 photoelectrodes less vulnerable to corrosion during water-splitting."   </p>
	<p>Reyes-Lillo added that Toma's use of this technique and the work at JCAP enabled a deeper understanding of Mo-BiVO4 that would otherwise not be possible. "The approach reveals element-specific chemical fingerprints of a material's local electronic structure, making it especially suited for the study of phenomena at the nanoscale. Our study represents a step toward improving the performance of semiconducting BiVO4-based materials for solar fuel technologies," he said. </p>
	<strong><p>Next steps</p>
</strong>	<p>The researchers next plan to further develop the technique by taking STXM images while the material is operating so that they can understand how the material changes chemically as a photoelectrode in a model PEC system. </p>
	<p>"I'm very proud of this work. We need to find alternative solutions to fossil fuels, and we need renewable alternatives. Even if this technology isn't ready for the marketplace tomorrow, our technique - along with the powerful instruments available to users at the Advanced Light Source and the Molecular Foundry - will open up new routes for renewable energy technologies to make a difference." </p><p align="center">###</p>
	<p>Co-authors with Toma and Eichhorn include Jason K. Cooper, David M. Larson, David Prendergast, Sebastian Reyes-Lillo, Shawn Sallis, Ian D. Sharp, Subhayan Roychoudbury, and Johannes Weis.</p>
	<p>The work was supported by the DOE Office of Science and Berkeley Lab's Laboratory Directed Research and Development program.</p>
	<p>The Joint Center for Artificial Photosynthesis is a DOE Energy Innovation Hub. The Molecular Foundry and Advanced Light Source are DOE Office of Science user facilities co-located at Berkeley Lab. </p>
	
<p>Founded in 1931 on the belief that the biggest scientific challenges are best addressed by teams, Lawrence Berkeley National Laboratory (<a target="_blank" href="http://www.lbl.gov/">http://www.lbl.gov/</a>) and its scientists have been recognized with 13 Nobel Prizes. Today, Berkeley Lab researchers develop sustainable energy and environmental solutions, create useful new materials, advance the frontiers of computing, and probe the mysteries of life, matter, and the universe. Scientists from around the world rely on the Lab's facilities for their own discovery science. Berkeley Lab is a multiprogram national laboratory, managed by the University of California for the U.S. Department of Energy's Office of Science.</p>
	<p>DOE's Office of Science is the single largest supporter of basic research in the physical sciences in the United States, and is working to address some of the most pressing challenges of our time. For more information, please visit energy.gov/science.
</p>
            
                        <hr class="hidden-xs hidden-sm" />
            <hr class="major visible-sm" />
            <div class="featured_image">
                <div class="details">
										                                            <div class="well">
                            <h4>Journal</h4>
                            <p>Small</p>
                        </div>
                                                                <div class="well">
                            <h4>DOI</h4>
                            <p><a href="http://dx.doi.org/10.1002/smll.202001600" target="_blank">10.1002/smll.202001600 <i class="fa fa-sign-out"></i></a></p>
                        </div>
                                                                                                                                            					                </div>
            </div>
                    </div>

        

        <div class="well article_disclaimer hidden-search">
    <p><strong>Disclaimer:</strong> AAAS and EurekAlert! are not responsible for the accuracy of news releases posted to EurekAlert! by contributing institutions or for the use of any information through the EurekAlert system.</p>
</div>

        <div class="toolbar hidden-print hidden-search">

<div class='col-xs-6'>
    <div class="addthis_inline_share_toolbox_pnaa"></div>
  </div>
    <div class='col-xs-6'>
      <div class="article-tools pull-right">
            <div class="addthis_inline_share_toolbox_62ef"></div>
      </div>
    </div>
    


</div>

    </article>

                    </div>

                                          <aside id="sidebar-content" class="white col-md-4">  
            
    <section class="widget">
        <div class="widget-content">
            <div class="contact-info">
                <p><strong>Media Contact</strong></p>

                                    
    <p>
                                    Theresa Duque<br/>
                    		
					<br />
		
                    <a href="mailto:tnduque@lbl.gov">
                tnduque@lbl.gov
            </a><br/>
        
                    Office: 510-495-2418<br/>
        
        
        
        
            </p>
                            </div>
        </div>
    </section>


<hr class="hidden-xs hidden-sm">

<hr class="major visible-xs visible-sm">

<section class="widget hidden-print">
    <h3 class="widget-title red">More on this News Release</h3>
    <div class="widget-content">

        <aside class="more">
            <a href="/news-releases/771663">
                <h3>A closer look at water-splitting&#039;s solar fuel potential</h3>
            </a>

            <p class="meta_institute">DOE/Lawrence Berkeley National Laboratory</p>

            <dl class="dl-horizontal meta stacked">

                                    <dt class="yellow">Journal</dt>
                    <dd class="yellow"><em>Small</em></dd>
                                            
                                    <dt class="red">DOI</dt>
                    <dd class="red"><em>10.1002/smll.202001600</em></dd>
                            </dl>
        </aside>

        <div class="row">
            <div class="col-sm-6 col-md-12">
                <h4 class="widget-subtitle">Keywords</h4>
                <nav class="tag-cloud">
                    <ul class="tags">
                        <li class="active ea-keyword">
                            <a href="#">
                              <span class="ea-keyword__path">/Physical sciences/Chemistry/Chemical processes/Chemical reactions/</span><span class="ea-keyword__short">Water splitting</span>
                            </a>
                        </li>
                        							                            <li class="ea-keyword">
                                <a href="#">
                                  <span class="ea-keyword__path">/Applied sciences and engineering/Environmental sciences/Ecology/Ecological processes/Primary production/</span><span class="ea-keyword__short">Photosynthesis</span>
                                </a>
                            </li>
							                        							                            <li class="ea-keyword">
                                <a href="#">
                                  <span class="ea-keyword__path"> /Physical sciences/Physics/Applied physics/Applied optics/</span><span class="ea-keyword__short">Light sources</span>
                                </a>
                            </li>
							                                            </ul>
                </nav>
            </div>
        </div>
    </div>

    	
	      <div class="col-sm-6 col-md-12">
        <h4 class="widget-subtitle">Original Source</h4>
		<a href="https://newscenter.lbl.gov/2020/08/06/water-splitting-solar-fuel/" style="overflow-wrap:break-word" target="_blank">
		https://newscenter.lbl.gov/2020/08/06/water-splitting-solar-fuel/ <i class="fa fa-sign-out"></i></a>
	  </div>
	
	
    </section>
</aside>
                                    </div>
            </div>
        </div>

        <footer id="footer" class="hidden-print hidden-search">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 col-sm-push-7">
                <p class="logo">
                    <img src="/images/logo-footer.png" alt="EurekAlert! The Global Source for Science News">
                </p>
                <p class="brand">
                    <img src="/images/brand.png" alt="AAAS - American Association for the Advancement of Science">
                </p>
                <p class="copy hidden-xs">Copyright © 2021 by the American Association for the Advancement of Science (AAAS)</p>
            </div>
            <div class="col-sm-7 col-sm-pull-5">
                <div class="row">
                    <div class="col-sm-6">
                                <ul class="list-unstyled">
            
                <li class="first">        <a href="https://facebook.com/EurekAlert" target="_blank"><i class="fa fa-facebook"></i> facebook.com/EurekAlert</a>        
    </li>

    
                <li>        <a href="https://twitter.com/EurekAlert" target="_blank"><i class="fa fa-twitter"></i> @EurekAlert</a>        
    </li>

    
                <li class="last">        <a href="https://youtube.com/EurekAlert" target="_blank"><i class="fa fa-youtube"></i> youtube.com/EurekAlert</a>        
    </li>


    </ul>

                    </div>
                    <div class="col-sm-3">
                        <hr class="visible-xs">
                                <ul class="list-unstyled stack-5">
            
                <li class="first">        <a href="/help">Help / FAQ</a>        
    </li>

    
                <li>        <a href="/services">Services</a>        
    </li>

    
                <li>        <a href="/releaseguidelines">Eligibility Guidelines</a>        
    </li>

    
                <li class="last">        <a href="/contact">Contact EurekAlert!</a>        
    </li>


    </ul>


                    </div>
                    <div class="col-sm-3">
                                <ul class="list-unstyled stack-5">
            
                <li class="first">        <a href="/terms">Terms &amp; Conditions</a>        
    </li>

    
                <li>        <a href="/privacy">Privacy Policy</a>        
    </li>

    
                <li class="last">        <a href="/disclaimer">Disclaimer</a>        
    </li>


    </ul>

                        <hr class="visible-xs">
                        <p class="copy visible-xs">Copyright © 2021 by the American Association for the Advancement of Science (AAAS)</p>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

                  <script src="/build/runtime.js"></script><script src="/build/vendors~app~auth.js"></script><script src="/build/vendors~app.js"></script><script src="/build/app~auth.js"></script><script src="/build/app.js"></script>
          <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
          <![endif]-->
            <!--*****START OF Azure Media Player Scripts*****-->
            <script src="//amp.azure.net/libs/amp/2.3.7/azuremediaplayer.min.js"></script>
            <!--*****END OF Azure Media Player Scripts*****-->
            <script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"b9c0505d84","applicationID":"1113021319","transactionName":"b1QHYkJQXkpVW0ddW1YeJFVEWF9XG3lDRGh7XgtCQl5cVVFKb2dRWUMGXnNeXk1GV19YUUoLX0VZX1dVUXRaWlFrVAREU1k=","queueTime":0,"applicationTime":65,"atts":"QxMEFApKTUQ=","errorBeacon":"bam.nr-data.net","agent":""}</script></body>
</html>
