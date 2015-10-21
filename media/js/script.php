







//we check if short-term variable is expired, if it's expired we need to delete it.

//async block
try {
     _gaq.push(function() {
        var pageTracker = _gat._getTrackerByName(); // Gets the default tracker.
        var visitorCustomVar4Value = pageTracker._getVisitorCustomVar(4);
        var current_timestamp=new Date().getTime();
        if (visitorCustomVar4Value && ((current_timestamp-visitorCustomVar4Value)>(3600*24*2*1000))) {
      //delete expired var
          _gaq.push(['_deleteCustomVar', 4]);
    } 
     });
} catch(err) {
  var error="async";
}


//sync block
try {
     var visitorCustomVar4Value = pageTracker._getVisitorCustomVar(4);
     var current_timestamp=new Date().getTime();
     if (visitorCustomVar4Value && ((current_timestamp-visitorCustomVar4Value)>(3600*24*2*1000))) {
     //delete expired var
       pageTracker._deleteCustomVar(4);
     } 
} catch(err) {
  var error="sync";
}


function addgaevent() {
    var current_timestamp=new Date().getTime();
    //async
    try {
      _gaq.push(['_setCustomVar',4,'theshopexpert',current_timestamp,1]);
      _gaq.push(['_setCustomVar',5,'theshopexpert','yes',1]);
      _gaq.push(['_trackEvent', 'The_Shop_Expert', 'activated']);
    } catch (err) {
      var error='async';
    }
    //old sync style
    try {
      pageTracker._setCustomVar(4,'theshopexpert','current_timestamp',1);
      pageTracker._setCustomVar(5,'theshopexpert','yes',1);
      pageTracker._trackEvent('The_Shop_Expert', 'activated', '0', 0);
    } catch (err) {
      var error='sync';
    }

}


function addEvent(elem, event, fn) {
      try {
      if (elem.addEventListener) {
        elem.addEventListener(event, fn, false);
      } else {
        elem.attachEvent("on" + event, function() {
            // set the this pointer same as addEventListener when fn is called
            return(fn.call(elem, window.event));   
        });
      } 
      } catch (err) {
        var error='add_event';
      }
}




function getElementsByClassName(classname, node)  {
    if(!node) node = document.getElementsByTagName("body")[0];
    var a = [];
    var re = new RegExp('\\b' + classname + '\\b');
    var els = node.getElementsByTagName("*");
    for(var i=0,j=els.length; i<j; i++)
        if(re.test(els[i].className))a.push(els[i]);
    return a;
}

function insertToBody() {
    var body = document.body;
    body.insertBefore(button_, body.lastChild);
}


function openchat() {
    if(navigator.userAgent.toLowerCase().indexOf('opera') != -1 && window.event.preventDefault) window.event.preventDefault();
    this.newWindow = window.open('https://s2.theshopexpert.com/chatcenter/client.php?company=160&lang=sp&locale=sp&style=theshopexpert&url='+escape(document.location.href)+'&referrer='+escape(document.referrer), 'theshopexpert','toolbar=0,scrollbars=0,location=0,status=1,menubar=0,width=323,height=374,resizable=1');
    this.newWindow.focus();
    this.newWindow.opener=window;
    return false;
  }

var custom_padding_top="";
var custom_height = "";
var custom_background = "";
var domain = "s2.theshopexpert.com";
var customized =  document.getElementById("theshopexpert-button");

if (customized) {

  var elements = new Array();
  elements = getElementsByClassName('theshopexpert-button-custom');
  for(i in elements ){
     elements[i].title="Chat hours: 10:00 to 14:00 and 15:00 to 19:00 ()";
     elements[i].href="javascript:void(0)";
     //elements[i].target="_blank";
     elements[i].onclick="";
     addEvent(elements[i],"click",openchat);
       }

  customized.title="Chat hours: 10:00 to 14:00 and 15:00 to 19:00 ()";
  //customized.href="https://s2.theshopexpert.com/chatcenter/client.php?company=160&amp;lang=sp&amp;locale=sp&amp;style=theshopexpert";
  customized.href="javascript:void(0)";
  //customized.target="_blank";
  customized.onclick="";
  addEvent(customized,"click",openchat);
  
} else {

var button_ = document.createElement('div');
button_.setAttribute("id", "theshopexpert-widget");
button_.style.top="40%";
button_.style.bottom="auto";
button_.style.position="fixed";
button_.style.right="0px";
button_.style.left="auto";
button_.style.zIndex="2147483647";

if (custom_height && 0 != custom_height.length) {
    button_.style.height=custom_height;
}
if (custom_background && 0 != custom_background.length) {
    button_.style.background=custom_background;
}
if (custom_padding_top && 0 != custom_padding_top.length) {
    button_.style.paddingTop=custom_padding_top; 
}

button_.innerHTML='<a title="Chat hours: 10:00 to 14:00 and 15:00 to 19:00 ()" style="height:100%;display:block;" href="https://s2.theshopexpert.com/chatcenter/client.php?company=160&amp;lang=sp&amp;locale=sp&amp;style=theshopexpert" target="_blank" onclick="if(navigator.userAgent.toLowerCase().indexOf(\'opera\') != -1 &amp;&amp; window.event.preventDefault) window.event.preventDefault();this.newWindow = window.open(\'https://s2.theshopexpert.com/chatcenter/client.php?company=160&amp;lang=sp&amp;locale=sp&amp;style=theshopexpert&amp;url=\'+escape(document.location.href)+\'&amp;referrer=\'+escape(document.referrer), \'theshopexpert\', \'toolbar=0,scrollbars=0,location=0,status=1,menubar=0,width=323,height=374,resizable=1\');this.newWindow.focus();this.newWindow.opener=window;return false;"><img id="theshopexpert-widget-image" style="vertical-align:bottom;" src="https://s2.theshopexpert.com/chatcenter/b.php?company=160&amp;i=templatemonster&amp;lang=sp" border="0" alt=""></a>';


addEvent(window,"load",insertToBody);
}




