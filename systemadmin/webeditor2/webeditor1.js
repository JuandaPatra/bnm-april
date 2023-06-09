// Asbru Web Content Editor
// (C) 2002-2008 Asbru Ltd.
// www.asbrusoft.com

var webeditor = new Object();
webeditor.rootpath = "/webeditor/";
// auto-configure webeditor.rootpath
webeditor.rootpath = "" + document.location.protocol + "//" + document.location.host + document.location.pathname;
//webeditor.rootpath = "" + document.location.pathname;
webeditor.rootpath = "" + webeditor.rootpath.substring(0, webeditor.rootpath.lastIndexOf("/")+1);
var scripts = document.getElementsByTagName("script");
for (var i=0; i<scripts.length; i++) {
	if (scripts[i].src && scripts[i].src.match(/\/webeditor1\.js(\?.*)?$/)) {
		if (scripts[i].src.match(/^(http:|https:|\/|\.\.)/)) {
			webeditor.rootpath = scripts[i].src.replace(/webeditor1\.js(\?.*)?$/,'').replace(/^(http|https):\/\/[^\/]+/, "");
		} else {
			webeditor.rootpath += scripts[i].src.replace(/webeditor1\.js(\?.*)?$/,'').replace(/^(http|https):\/\/[^\/]+/, "");
		}
	}
}
if(webeditor.rootpath.substring(0,3) == "../") {
	var mybase = document.location.pathname.substring(0,document.location.pathname.lastIndexOf('/')+1);
	while(webeditor.rootpath.substring(0,3) == "../") {
		webeditor.rootpath = webeditor.rootpath.substring(3);
		mybase = mybase.substring(0,mybase.length-1);
		mybase = mybase.substring(0,mybase.lastIndexOf('/')+1);
	}
	webeditor.rootpath = mybase+webeditor.rootpath;
}
webeditor.buttonpath = webeditor.rootpath;

var navigator_vendor = navigator.vendor;
var navigator_vendorSub = navigator.vendorSub;
var navigator_userAgent = navigator.userAgent;
var navigator_appVersion = navigator.appVersion;

function vendorIs(string) {
	if (string) {
		return navigator_vendor.toLowerCase().indexOf(string.toLowerCase())+1;
	} else {
		return navigator_vendor.toLowerCase();
	}
}

function vendorNot(string) {
	return ! vendorIs(string);
}

function browserIs(string) {
	if (string) {
		return navigator_userAgent.toLowerCase().indexOf(string.toLowerCase())+1;
	} else {
		return navigator_userAgent.toLowerCase();
	}
}

function browserNot(string) {
	return ! browserIs(string);
}

function versionIs(string) {
	if (string) {
		return navigator_appVersion.toLowerCase().indexOf(string.toLowerCase())+1;
	} else {
		return navigator_appVersion.toLowerCase()
	}
}

function versionNot(string) {
	return ! versionIs(string);
}

if (browserIs("Opera")) {
	webbrowser = "Opera";
	webeditor.minorVersion = parseFloat(versionIs());
	webeditor.majorVersion = parseInt(webeditor.minorVersion);
	webeditor.type = "textarea";
} else if (browserIs("Konqueror")) {
	webbrowser = "Konqueror";
	webeditor.minorVersion = parseFloat(versionIs().substring(versionIs("Konqueror")+8, versionIs().indexOf(";", versionIs("Konqueror"))));
	webeditor.majorVersion = parseInt(webeditor.minorVersion);
	webeditor.type = "textarea";
} else if (browserIs("Safari") && browserIs("Mac") && (browserIs("Safari/31") || browserIs("Safari/41"))) {
	webbrowser = "Safari";
	webeditor.minorVersion = parseFloat(versionIs());
	webeditor.majorVersion = parseInt(webeditor.minorVersion);
	webeditor.type = "safari";
//	webeditor.type = "textarea";
} else if (browserIs("Safari") && browserIs("Mac")) {
	webbrowser = "Safari";
	webeditor.minorVersion = parseFloat(versionIs());
	webeditor.majorVersion = parseInt(webeditor.minorVersion);
	webeditor.type = "textarea";
} else if (browserIs("MSIE") && browserIs("Win")) {
	webbrowser = "MSIE";
	if (versionIs("MSIE")) {
		webeditor.minorVersion = "" + parseFloat(versionIs().substring(versionIs("MSIE")+3, versionIs().indexOf(";", versionIs("MSIE"))));
		webeditor.majorVersion = parseInt(webeditor.minorVersion);
	} else {
		webeditor.minorVersion = "" + parseFloat(versionIs());
		webeditor.majorVersion = parseInt(webeditor.minorVersion);
	}
	if (versionIs("Windows CE")) {
		webeditor.type = "textarea";
	} else if (webeditor.minorVersion >= "5.5") {
		webeditor.type = "msie";
	} else if (webeditor.majorVersion >= 4) {
		webeditor.type = "dhtml";
	} else {
		webeditor.type = "textarea";
	}
} else if (browserIs("Gecko") && browserIs("Mozilla/5") && browserNot("spoofer") && browserNot("compatible") && browserNot("webtv") && browserNot("hotjava") && ((navigator_vendor == "") || vendorIs("netscape") || vendorIs("mozilla") || vendorIs("red hat") || vendorIs("fedora") || vendorIs("suse"))) {
	webbrowser = "Mozilla";
	if (navigator_vendorSub && (! isNaN(parseInt(navigator_vendorSub))) && (! navigator_vendorSub.indexOf("-"))) {
		webeditor.minorVersion = navigator_vendorSub;
		webeditor.majorVersion = parseInt(webeditor.minorVersion);
	} else if (browserIs("rv:")) {
		webeditor.minorVersion = "" + parseFloat(browserIs().substring(browserIs("rv:")+2, browserIs().indexOf(")", browserIs("rv:"))));
		webeditor.majorVersion = parseInt(webeditor.minorVersion);
	} else {
		webeditor.minorVersion = "" + parseFloat(versionIs());
		webeditor.majorVersion = parseInt(webeditor.minorVersion);
	}
	if (webeditor.minorVersion >= "1.3") {
		webeditor.type = "mozilla";
	} else {
		webeditor.type = "textarea";
	}
} else if (browserIs("Gecko") && browserIs("Mozilla/5") && browserNot("spoofer") && browserNot("compatible") && browserNot("webtv") && browserNot("hotjava") && (browserIs("Firefox") || vendorIs("firebird") || vendorIs("firefox"))) {
	webbrowser = "Mozilla";
	if (navigator_vendorSub && (! isNaN(parseInt(navigator_vendorSub))) && (! navigator_vendorSub.indexOf("-"))) {
		webeditor.minorVersion = navigator_vendorSub;
		webeditor.majorVersion = parseInt(webeditor.minorVersion);
	} else if (browserIs("rv:")) {
		webeditor.minorVersion = "" + parseFloat(browserIs().substring(browserIs("rv:")+2, browserIs().indexOf(")", browserIs("rv:"))));
		webeditor.majorVersion = parseInt(webeditor.minorVersion);
	} else {
		webeditor.minorVersion = "" + parseFloat(versionIs());
		webeditor.majorVersion = parseInt(webeditor.minorVersion);
	}
	minorVersionFraction = parseInt(webeditor.minorVersion.substring(webeditor.minorVersion.indexOf(".")+1));
	if ((webeditor.majorVersion >= 1) || (minorVersionFraction >= 7)) {
		webeditor.type = "mozilla";
	} else {
		webeditor.type = "textarea";
	}
} else if (browserIs("Gecko") && browserIs("Mozilla/5") && browserIs("rv:")) {
	webbrowser = "Mozilla";
	if (browserIs("rv:")) {
		webeditor.minorVersion = "" + parseFloat(browserIs().substring(browserIs("rv:")+2, browserIs().indexOf(")", browserIs("rv:"))));
		webeditor.majorVersion = parseInt(webeditor.minorVersion);
	} else {
		webeditor.minorVersion = 0.0;
		webeditor.majorVersion = 0;
	}
	if ((webeditor.majorVersion >= 1) && (webeditor.minorVersion >= "1.3")) {
		webeditor.type = "mozilla";
	} else {
		webeditor.type = "textarea";
	}
} else {
	webbrowser = "other";
	webeditor.minorVersion = parseFloat(versionIs());
	webeditor.majorVersion = parseInt(webeditor.minorVersion);
	webeditor.type = "textarea";
}

if (webeditor.type == "textarea") {
	document.write('<script type="text/javascript" src="' + webeditor.rootpath + 'webeditor.properties.js"></script>');
	document.write('<script type="text/javascript" src="' + webeditor.rootpath + 'webeditor_textarea.js"></script>');
} else if ((webeditor.type == "dhtml") || ((webeditor.type == "msie") && document.designMode)) {
	document.write('<script type="text/javascript" src="' + webeditor.rootpath + 'webeditor.properties.js"></script>');
	document.write('<script type="text/javascript" src="' + webeditor.rootpath + 'webeditor_dhtml_msie.js"></script>');
} else {
	document.write('<script type="text/javascript" src="' + webeditor.rootpath + 'webeditor.properties.js"></script>');
	document.write('<script type="text/javascript" src="' + webeditor.rootpath + 'webeditor_textarea.js"></script>');
}
