/*! Fabrik */
var FbMediaViz=my.Class({options:{which_player:"jw",width:600,height:450},constructor:function(a,b){this.el=a,this.options=$.extend(this.options,b),this.render()},render:function(){"jw"===this.options.which_player&&jwplayer("jw_player").setup({width:this.options.width,height:this.options.height,playlistfile:this.options.jw_playlist_url,"playlist.position":"right",skin:this.options.jw_skin,modes:[{type:"flash",src:this.options.jw_swf_url},{type:"html5"},{type:"download"}]})}});