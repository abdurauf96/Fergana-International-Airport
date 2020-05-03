window.onload = funonload;
var fontS =10;
var interval =10;

function funonload() {
	
var slabovid = ReadSpec('special');
addButton(slabovid);
checkSpec(slabovid);
if (slabovid== 'y')
buttons_control();
}

function checkSpec(spec) {
  setButton(spec);
if (spec == 'y')
{
  addStyleSheet('http://ferganaairport.uz/css/vi.css');
}
}

function ReadSpec(name)
{
 var matches = document.cookie.match(new RegExp(
 "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
  ));
  return matches ? decodeURIComponent(matches[1]) : undefined;
}

function SetCookieSpec(name,value) {
    document.cookie = name + "=" + value;
}

function addButton() {
    var button = document.createElement('input');
    var parentElem = document.body;
    var s = ReadSpec('special');
    button.type = 'button';
    button.id = 'spec';
    button.value = '';
    button.setAttribute("onclick","Spec()");
    button.setAttribute("style","position:fixed; z-index:9999; top:0%; left:3%; margin: 5px; font-size:20px; font-weight:bold; background: #fff;");
    parentElem.insertBefore(button, parentElem.firstChild);
    setButton(s);
	
	
}

function addStyleSheet(url)
{
  // Создаём элемент LINK/STYLE и добавляем в документ
  var style;

//  

//    if (typeof url == 'undefined')
//  {
//    style = document.createElement('style');
//  }
//  else
//  {
    style = document.createElement('link');
   style.rel = 'stylesheet';
   style.type = 'text/css';
    style.href = url;
//    style.id = 'speccss';
//  }
  
   document.getElementsByTagName('head')[0].appendChild(style);
  // Находим новый стиль в коллекции styleSheets
  style = document.styleSheets[document.styleSheets.length - 1];

  // Делаем объект совместимыми с W3C DOM2 (для IE)
  return StyleSheet_makeCompatible(style);

}
function delStyleSheet()
{
style=document.getElementsByTagName('head')[0].lastChild;//document.styleSheets[document.styleSheets.length - 1]
document.getElementsByTagName('head')[0].removeChild(style);//
}


function Spec() {
var spec = ReadSpec('special');
//alert (spec);

if (spec == 'y')
{
   delStyleSheet();
   SetCookieSpec('special','n');  setButton('n');

   location.reload();
}
else {
   addStyleSheet('http://ferganaairport.uz/css/vi.css');
   SetCookieSpec('special','y');  setButton('y');

   buttons_control();
}
}


//кнопки управления
function buttons_control(){

var button = document.createElement('input');
   var parentElem = document.body;
    button.type = 'button';
    button.id = 'zvuk';
    button.value = ' ? ';
    button.setAttribute("onclick","myInfo()");
    button.setAttribute("style","position:fixed; z-index:9999; top:35px;left:30%; font-size: 20px; font-weight: bold;");
    parentElem.insertBefore(button, parentElem.lastChild);

  button = document.createElement('div');
    parentElem = document.body;
    button.innerHTML = 'Звук';
    button.setAttribute("style","position:fixed; z-index:9999; top:10px;left:30%; font-size: 16px; font-weight: bold;");
    parentElem.insertBefore(button, parentElem.lastChild);

    button = document.createElement('input');
    parentElem = document.body;
    button.type = 'button';
    button.id = 'minus';
    button.value = ' а- ';
    button.setAttribute("onclick","fontSize(this)");
    button.setAttribute("style","position:fixed; z-index:9999; top:35px;left:35%; font-size: 20px; font-weight: bold;");
    parentElem.insertBefore(button, parentElem.lastChild);

    button = document.createElement('div');
    parentElem = document.body;
    button.innerHTML = 'Шрифт';
    button.setAttribute("style","position:fixed; z-index:9999; top:10px;left:36%; font-size: 16px; font-weight: bold;");
    parentElem.insertBefore(button, parentElem.lastChild);


    button = document.createElement('input');
    parentElem = document.body;
    button.type = 'button';
    button.id = 'plus';
    button.value = ' А+ ';
    button.setAttribute("onclick","fontSize(this)");
    button.setAttribute("style","position:fixed; z-index:9999; top:35px;left:38%; font-size: 20px; font-weight: bold;");
    parentElem.insertBefore(button, parentElem.lastChild);
	

	button = document.createElement('input');
    parentElem = document.body;
    button.type = 'button';
    button.id = 'intervalMinus';
    button.value = ' И - ';
    button.setAttribute("onclick","intervalSize(this)");
    button.setAttribute("style","position:fixed; z-index:9999; top:35px;left:47%; font-size: 20px; font-weight: bold;");
    parentElem.insertBefore(button, parentElem.lastChild);


  button = document.createElement('div');
    parentElem = document.body;
    button.innerHTML = 'Интервал';
    button.setAttribute("style","position:fixed; z-index:9999; top:10px;left:48%; font-size: 16px; font-weight: bold;");
    parentElem.insertBefore(button, parentElem.lastChild);
	
	button = document.createElement('input');
    parentElem = document.body;
    button.type = 'button';
    button.id = 'intervalPlus';
    button.value = ' И + ';
    button.setAttribute("onclick","intervalSize(this)");
    button.setAttribute("style","position:fixed; z-index:9999; top:35px;left:52%; font-size: 20px; font-weight: bold;");
    parentElem.insertBefore(button, parentElem.lastChild);



  button = document.createElement('div');
    parentElem = document.body;
    button.innerHTML = 'Цветовая схема';
    button.setAttribute("style","position:fixed; z-index:9999; top:10px;left:62%; font-size: 16px; font-weight: bold;");
    parentElem.insertBefore(button, parentElem.lastChild);
	
	button = document.createElement('input');
    parentElem = document.body;
    button.type = 'button';
    button.id = 'blackONwhite';
    button.value = ' Ч/Б ';
    button.setAttribute("onclick","setColorShem(this)");
    button.setAttribute("style","position:fixed; z-index:9999; top:35px;left:60%; font-size: 20px; font-weight: bold; color:#000!important; background: #FFF!important; ");
    parentElem.insertBefore(button, parentElem.lastChild);
		
	button = document.createElement('input');
    parentElem = document.body;
    button.type = 'button';
    button.id = 'whiteONblack';
    button.value = ' Б/Ч ';
    button.setAttribute("onclick","setColorShem(this)");
    button.setAttribute("style","position:fixed; z-index:9999; top:35px;left:65%; font-size: 20px; font-weight: bold; color:#FFF!important; background: #000!important; ");
    parentElem.insertBefore(button, parentElem.lastChild);
	
	button = document.createElement('input');
    parentElem = document.body;
    button.type = 'button';
    button.id = 'yellowONblue';
    button.value = ' Ж/С ';
    button.setAttribute("onclick","setColorShem(this)");
    button.setAttribute("style","position:fixed; z-index:9999; top:35px; left:70%; font-size: 20px; font-weight: bold; color:#FFFF00!important; background: #0000FF!important; ");
    parentElem.insertBefore(button, parentElem.lastChild);


	button = document.createElement('input');
    parentElem = document.body;
    button.type = 'button';
    button.id = 'imgOff';
    button.value = ' Выкл ';
    button.setAttribute("onclick","imgNone()");
    button.setAttribute("style","position:fixed; z-index:9999; top:35px;left:77%; font-size: 20px; font-weight: bold;");
    parentElem.insertBefore(button, parentElem.lastChild);


  button = document.createElement('div');
    parentElem = document.body;
    button.innerHTML = 'Изображения';
    button.setAttribute("style","position:fixed; z-index:9999; top:10px;left:78%; font-size: 16px; font-weight: bold;");
    parentElem.insertBefore(button, parentElem.lastChild);
	
	button = document.createElement('input');
    parentElem = document.body;
    button.type = 'button';
    button.id = 'imgBlack';
    button.value = ' Ч/Б ';
    button.setAttribute("onclick","blackImg()");
    button.setAttribute("style","position:fixed; z-index:9999; top:35px;left:83%; font-size: 20px; font-weight: bold;");
    parentElem.insertBefore(button, parentElem.lastChild);

}


//звук
function myInfo() {

var aud = new Audio('http://ferganaairport.uz/eye/info.mp3');
aud.play();
}


//черно-белые изображения
var blackFilter=true;
function blackImg(){

var btn = document.getElementById("imgBlack");
	if(blackFilter) btn.value=" Цвет "; else 	btn.value=" Ч/Б "; 

  var allimg = document.getElementsByTagName("img");	
	for(var i=0; i<allimg.length; i++) 
		if(blackFilter)
			allimg[i].setAttribute("style", "filter: grayscale(100%);");
		else
			allimg[i].setAttribute("style", "filter: none;");
	blackFilter=!blackFilter;	
}


//включить выключить изображения
var onOff=true;
function imgNone(){
	
	var btn = document.getElementById("imgOff");
	if(onOff) btn.value=" Вкл "; else 	btn.value=" Выкл "; 
	
	var allimg = document.getElementsByTagName("img");
	
	for(var i=0; i<allimg.length; i++) {
		if(onOff)
			allimg[i].style.display = "none";
		else
			allimg[i].style.display = "block";
		 
		}
	onOff=!onOff;
	
}

//цветовая схема
function setColorShem(obj){

	var allelem = document.getElementsByTagName("*");

if(obj.id=="blackONwhite")
	for(var i=0; i<allelem.length; i++) {
		allelem[i].style.background="#fff";
		allelem[i].style.color="#000";
		}

	
if(obj.id=="whiteONblack")
	for(var i=0; i<allelem.length; i++) {
		allelem[i].style.background="#000";
		allelem[i].style.color="#fff";
		}
		
if(obj.id=="yellowONblue")
	for(var i=0; i<allelem.length; i++) {
		allelem[i].style.background="#0000FF";
		allelem[i].style.color="#FFFF00";
		}
	
}


//межстрочный интервал
function intervalSize(obj){
	
	var allelem = document.getElementsByTagName("*");
	
	if(obj.id=="intervalPlus")
		if(interval>60)interval=60; else interval+=10;
	else 
		if(interval<=15) interval=15; else interval-=10;
	for(var i=0; i<allelem.length; i++) allelem[i].style.lineHeight=interval+"px";
	
}

//размер шрифта
function fontSize(obj){
	
	var a = document.getElementsByTagName("*");
	
	if(obj.id=="plus")
		if(fontS>40) fontS = 40; else fontS+=10;
	else 
		if(fontS<=15) fontS=15; else fontS-=10;
	for(var i=0; i<a.length; i++) a[i].style.fontSize=fontS+"px";
	
}

function setButton(spec) {
var inputTag = document.getElementById("spec");

if (spec == 'y')
{

  inputTag.setAttribute("style", "position:fixed; z-index:9999; top:20px; font-size:20px; left:10%; margin: 5px; border: 1px black outset; font-weight:bold; background: #fff;");
  inputTag.value=" Стандартная версия ";
}
else {
  inputTag.setAttribute("style", "position:fixed; z-index:9999; cursor: pointer; outline: none; bottom:20px; font-size:20px; right:20px; margin: 5px;padding:5px; border: none; font-weight:bold; background: url(http://ferganaairport.uz/eye/eye.png) no-repeat; background-size:cover; width:100px; height:73px; " );
 inputTag.value="";
 // inputTag.value=" Версия для слабовидящих ";
}

}


function StyleSheet_makeCompatible(style)
{
  // Mozilla не даёт доступа к cssRules до загрузки стиля
  try
  {
    style.cssRules;
  }
  catch (e)
  {
    return style;
  }

  // Создаём CSSStyleSheet.cssRules
  if (typeof style.cssRules == 'undefined' && typeof style.rules != 'undefined')
    style.cssRules = style.rules;

  // Создаём CSSStyleSheet.insertRule и CSSStyleSheet.deleteRule
  if (typeof style.insertRule == 'undefined' && typeof style.addRule != 'undefined')
    style.insertRule = StyleSheet_insertRule;
  if (typeof style.deleteRule == 'undefined' && typeof style.removeRule != 'undefined')
    style.deleteRule = style.removeRule;

  // Проверяем, существуют ли все нужные свойства
  if (typeof style.cssRules == 'undefined' || typeof style.insertRule == 'undefined'
      || typeof style.deleteRule == 'undefined')
    return null;
  else
    return style;
}

function StyleSheet_insertRule(rule, index)
{
  // Выделяем селектор и стиль из параметра
  if (rule.match(/^([^{]+)\{(.*)\}\s*$/))
  {
    this.addRule(RegExp.$1, RegExp.$2, index);
    return index;
  }
  throw "Syntax error in CSS rule to be added";
}
