$(function(){var t="dark"===$("html").attr("data-bs-theme")?"default-dark":"default",e=$("#jstree-basic"),s=$("#jstree-custom-icons"),a=$("#jstree-context-menu"),n=$("#jstree-drag-drop"),i=$("#jstree-checkbox"),c=$("#jstree-ajax");e.length&&e.jstree({core:{themes:{name:t}}}),s.length&&s.jstree({core:{themes:{name:t},data:[{text:"css",children:[{text:"app.css",type:"css"},{text:"style.css",type:"css"}]},{text:"img",state:{opened:!0},children:[{text:"bg.jpg",type:"img"},{text:"logo.png",type:"img"},{text:"avatar.png",type:"img"}]},{text:"js",state:{opened:!0},children:[{text:"jquery.js",type:"js"},{text:"app.js",type:"js"}]},{text:"index.html",type:"html"},{text:"page-one.html",type:"html"},{text:"page-two.html",type:"html"}]},plugins:["types"],types:{default:{icon:"icon-base ti tabler-folder"},html:{icon:"icon-base ti tabler-brand-html5 bg-danger"},css:{icon:"icon-base ti tabler-brand-css3 bg-info"},img:{icon:"icon-base ti tabler-photo bg-success"},js:{icon:"icon-base ti tabler-brand-javascript bg-warning"}}}),a.length&&a.jstree({core:{themes:{name:t},check_callback:!0,data:[{text:"css",children:[{text:"app.css",type:"css"},{text:"style.css",type:"css"}]},{text:"img",state:{opened:!0},children:[{text:"bg.jpg",type:"img"},{text:"logo.png",type:"img"},{text:"avatar.png",type:"img"}]},{text:"js",state:{opened:!0},children:[{text:"jquery.js",type:"js"},{text:"app.js",type:"js"}]},{text:"index.html",type:"html"},{text:"page-one.html",type:"html"},{text:"page-two.html",type:"html"}]},plugins:["types","contextmenu"],types:{default:{icon:"icon-base ti tabler-folder"},html:{icon:"icon-base ti tabler-brand-html5 bg-danger"},css:{icon:"icon-base ti tabler-brand-css3 bg-info"},img:{icon:"icon-base ti tabler-photo bg-success"},js:{icon:"icon-base ti tabler-brand-javascript bg-warning"}}}),n.length&&n.jstree({core:{themes:{name:t},check_callback:!0,data:[{text:"css",children:[{text:"app.css",type:"css"},{text:"style.css",type:"css"}]},{text:"img",state:{opened:!0},children:[{text:"bg.jpg",type:"img"},{text:"logo.png",type:"img"},{text:"avatar.png",type:"img"}]},{text:"js",state:{opened:!0},children:[{text:"jquery.js",type:"js"},{text:"app.js",type:"js"}]},{text:"index.html",type:"html"},{text:"page-one.html",type:"html"},{text:"page-two.html",type:"html"}]},plugins:["types","dnd"],types:{default:{icon:"icon-base ti tabler-folder"},html:{icon:"icon-base ti tabler-brand-html5 bg-danger"},css:{icon:"icon-base ti tabler-brand-css3 bg-info"},img:{icon:"icon-base ti tabler-photo bg-success"},js:{icon:"icon-base ti tabler-brand-javascript bg-warning"}}}),i.length&&i.jstree({core:{themes:{name:t},data:[{text:"css",children:[{text:"app.css",type:"css"},{text:"style.css",type:"css"}]},{text:"img",state:{opened:!0},children:[{text:"bg.jpg",type:"img"},{text:"logo.png",type:"img"},{text:"avatar.png",type:"img"}]},{text:"js",state:{opened:!0},children:[{text:"jquery.js",type:"js"},{text:"app.js",type:"js"}]},{text:"index.html",type:"html"},{text:"page-one.html",type:"html"},{text:"page-two.html",type:"html"}]},plugins:["types","checkbox","wholerow"],types:{default:{icon:"icon-base ti tabler-folder"},html:{icon:"icon-base ti tabler-brand-html5 bg-danger"},css:{icon:"icon-base ti tabler-brand-css3 bg-info"},img:{icon:"icon-base ti tabler-photo bg-success"},js:{icon:"icon-base ti tabler-brand-javascript bg-warning"}}}),c.length&&c.jstree({core:{themes:{name:t},data:{url:assetsPath+"json/jstree-data.json",dataType:"json",data:function(t){return{id:t.id}}}},plugins:["types","state"],types:{default:{icon:"icon-base ti tabler-folder"},html:{icon:"icon-base ti tabler-brand-html5 bg-danger"},css:{icon:"icon-base ti tabler-brand-css3 bg-info"},img:{icon:"icon-base ti tabler-photo bg-success"},js:{icon:"icon-base ti tabler-brand-javascript bg-warning"}}})});