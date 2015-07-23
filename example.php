<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Demo ryUnbound</title>

<link type='text/css' href='ryque.css' rel='stylesheet' />
<style>
input,select,a:focus{outline:none;border:none;}
.contextMenu{position:absolute;display:none;}
.contextMenu>ul>li{font-family:verdana;font-size:12px;text-align:left;}
.contextMenu>ul>li>a{color:black;}
.contextMenu>ul>li>a:focus{outline:1px dotted;color:black;}
.contextDisabled>a{color:silver !important;}
</style>

<script type='text/javascript' src='js/jquery.js' ></script>
<script type='text/javascript' src='js/jquery.ui.core.js'></script>
<script type='text/javascript' src='js/jquery.ui.widget.js'></script>
<script type='text/javascript' src='js/jquery.ui.mouse.js'></script>
<script type='text/javascript' src='js/jquery.ui.draggable.js'></script>
<script type='text/javascript' src='js/jquery.ui.mousewheel.js'></script>
<script type='text/javascript' src='js/jquery.ui.position.js' ></script>
<script type='text/javascript' src='js/jquery.cookie.js' ></script>
<script type='text/javascript' src='js/jquery.ui.contextmenu.js' ></script>
<script type='text/javascript' src='js/jquery.desktop.ry.js' ></script>
<script type='text/javascript' src='js/rygeneral.js' ></script>
<script type='text/javascript' src='js/rybox.js' ></script>
<script type='text/javascript' src='ryunbound.js' ></script>

<script language="JavaScript">

var Obj;

function init(){

    // for stand-alone uses (without Cambusa framework)
    _systeminfo.relative.cambusa="";

    Obj=$("#gotha").ryunbound({
        left:50,
        top:150,
        width:700,
        height:350,
        maxwidth:-1,
        numbered:true,
        checkable:true,
        sortable:true,
        columns:[
            {id:"STRING", caption:"String", width:300},
            {id:"DECIMAL", caption:"Decimal", width:180, type:"2"},
            {id:"DATE", caption:"Date", width:120, type:"/"},
            {id:"TIMESTAMP", caption:"Timestamp", width:150, type:":"},
            {id:"BOOLEAN", caption:"Boolean", width:120, type:"?"}
        ],
        enter:function(o,i){
            $("#mess").html("enter: "+i);
        },
        changesel:function(o){
            $("#mess").html("changesel: "+o.checked().join("|"));
        },
        changerow:function(o,i){
            $("#mess").html("changerow: "+i);
        },
        ready:function(o,q){
            $("#mess").html("count: "+o.count());
        },
        before:function(o, d){
            var id=o.colbyname("DECIMAL");
            for(var i in d){
                if(d[i]["DECIMAL"].actualNumber()<0){
                    $( o.screencell(i, id) ).css({"background":"#F8D0D8"});
                    d[i]["STRING"]=d[i]["STRING"].toUpperCase();
                }
                else{
                    $( o.screencell(i, id) ).css({"background":"transparent"});
                }
            }
        }
    });
    
    var v=[];
    
    v.push({"STRING":"Isaac Newton", "DECIMAL":"123456.78", "DATE":"2015-05-21", "TIMESTAMP":"2015-05-01 14:11", "BOOLEAN":"1"});
    v.push({"STRING":"Joseph-Louis Lagrange", "DECIMAL":"-123456.78", "DATE":"2015-04-23", "TIMESTAMP":"2015-05-01 14:11", "BOOLEAN":"1"});
    v.push({"STRING":"Salvatore Pincherle", "DECIMAL":"123456.78", "DATE":"2013-04-23", "TIMESTAMP":"2015-05-01 14:11", "BOOLEAN":"0"});
    v.push({"STRING":"Hedwig Eva Maria Kiesler", "DECIMAL":"123456.78", "DATE":"2015-04-23", "TIMESTAMP":"2015-05-01 14:11", "BOOLEAN":"1"});
    v.push({"STRING":"Andrei Nicolayevich Kolmogorov", "DECIMAL":"123456.78", "DATE":"2012-12-01", "TIMESTAMP":"2015-05-01 14:11", "BOOLEAN":"1"});
    v.push({"STRING":"Rudolf Otto Sigismund Lipschitz", "DECIMAL":"-123456.78", "DATE":"2015-04-23", "TIMESTAMP":"2015-05-01 14:11", "BOOLEAN":"0"});
    v.push({"STRING":"Vladimir Ivanovich Smirnov", "DECIMAL":"123456.78", "DATE":"2015-04-23", "TIMESTAMP":"2015-05-01 14:11", "BOOLEAN":"1"});
    v.push({"STRING":"William Thomson, Lord Kelvin", "DECIMAL":"123456.78", "DATE":"2015-04-23", "TIMESTAMP":"2015-05-01 14:11", "BOOLEAN":"1"});
    v.push({"STRING":"Henri Paul Cartan", "DECIMAL":"123456.78", "DATE":"2015-04-23", "TIMESTAMP":"2015-05-01 14:11", "BOOLEAN":"1"});
    v.push({"STRING":"Ernst Friedrich Ferdinand Zermelo", "DECIMAL":"123456.78", "DATE":"2015-04-23", "TIMESTAMP":"2015-05-01 14:11", "BOOLEAN":"1"});
    v.push({"STRING":"Cesare Burali-Forti", "DECIMAL":"123456.78", "DATE":"2015-04-23", "TIMESTAMP":"2015-05-01 14:11", "BOOLEAN":"1"});
    v.push({"STRING":"Moritz Benedikt Cantor", "DECIMAL":"123456.78", "DATE":"2015-04-23", "TIMESTAMP":"2014-02-01 14:11", "BOOLEAN":"0"});
    v.push({"STRING":"Hermann Ludwig Ferdinand von Helmholtz", "DECIMAL":"123456.78", "DATE":"2010-01-23", "TIMESTAMP":"2015-05-01 14:11", "BOOLEAN":"1"});
    v.push({"STRING":"James Joseph Sylvester", "DECIMAL":"123456.78", "DATE":"2015-04-23", "TIMESTAMP":"2015-05-01 14:11", "BOOLEAN":"1"});
    v.push({"STRING":"Georg Friedrich Bernhard Riemann", "DECIMAL":"123456.78", "DATE":"2015-04-23", "TIMESTAMP":"2015-05-01 14:11", "BOOLEAN":"1"});
    v.push({"STRING":"Bernhard Placidus Johann Nepomuk Bolzano", "DECIMAL":"123456.78", "DATE":"2015-04-23", "TIMESTAMP":"2015-05-01 14:11", "BOOLEAN":"1"});
    v.push({"STRING":"Subrahmanyan Chandrasekhar", "DECIMAL":"123456.78", "DATE":"2015-04-23", "TIMESTAMP":"2015-05-01 14:11", "BOOLEAN":"1"});
    v.push({"STRING":"Emma Markovna Trotskaia Lehmer", "DECIMAL":"123456.78", "DATE":"2015-04-23", "TIMESTAMP":"2015-05-01 14:11", "BOOLEAN":"1"});
    v.push({"STRING":"Nobuo Yoneda", "DECIMAL":"123456.78", "DATE":"2015-04-23", "TIMESTAMP":"2015-05-01 14:11", "BOOLEAN":"1"});
    v.push({"STRING":"Évariste Galois", "DECIMAL":"123456.78", "DATE":"2015-04-23", "TIMESTAMP":"2015-05-01 14:11", "BOOLEAN":"0"});
    v.push({"STRING":"Emmy Amalie Noether", "DECIMAL":"123456.78", "DATE":"2015-04-23", "TIMESTAMP":"2015-05-01 14:11", "BOOLEAN":"1"});
    v.push({"STRING":"Elizabeth Leonard Scott", "DECIMAL":"-123456.78", "DATE":"2015-04-23", "TIMESTAMP":"2015-05-01 14:11", "BOOLEAN":"1"});
    v.push({"STRING":"Karl Theodor Wilhelm Weierstrass", "DECIMAL":"-123456.78", "DATE":"2015-04-23", "TIMESTAMP":"2015-05-01 14:11", "BOOLEAN":"1"});
    
    Obj.setmatrix(v);
    Obj.autofit();
    
}

</script>

</head>

<body onload="init()" spellcheck="false" style="font-family:sans-serif;font-size:100%;">
<h2 style="text-align:center;">Demo ryUnbound</h2>

<div id="mess" style="position:absolute;left:50px;top:100px;color:#1B82E6;font-size:80%;"></div>

<div id="gotha" class="window_main"></div>

</body>
</html>
