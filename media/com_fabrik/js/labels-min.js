/*! Fabrik */
var Labels=my.Class({constructor:function(){var a=this;$(".fabrikElementContainer").each(function(b){var c=$(this).find("label");if(0!==c.length){var d=b.find("input");0===d.length&&(d=b.find("textarea")),0!==d.length&&(d.val(c.html()),d.on("click",function(b){a.toogleLabel(b,d,c.html())}),d.on("blur",function(b){a.toogleLabel(b,d,c.html())}),c.html(""),b.find(".fabrikLabel").remove())}}.bind(this))},toogleLabel:function(a,b,c){a.stopPropagation(),"click"===a.type?b.val()===c&&b.val(""):""===b.val()&&b.val(c)}});window.addEvent("fabrik.loaded",function(){new Labels});