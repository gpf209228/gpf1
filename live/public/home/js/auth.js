/**
 * 初始化充值系统JS命名空间
 */
if(typeof(pay) == 'undefined'){
	pay = new function(){};
}

/**
 * html模板类，基于JSON生成HTML
 * 
 * @param t
 * @returns
 */
pay.Template = new function(){
	var Template = function(t) {
		if (t instanceof Array) {
			this._t = t.join('');
		} else if (typeof t == 'string') {
			this._t = t;
		} else {
			throw 'no template source';
		}
	};
	
	Template.prototype.renderForJson = function(json) {
		if (this._t) {
			var re = this._t + '';
			for ( var key in json) {
				var val = json[key];
				var reg = new RegExp('\\$\\{' + key + '\\}', 'ig');
				re = re.replace(reg, val + '');
			}
			return re;
		}
	};
	
	return Template;
};

/**
 * URL参数解析
 * @param url
 * @returns {UrlParamParser}
 */
pay.UrlParamParser = new function(){
	var UrlParamParser = function (url){
		this.paraObj = {};
		var paraString = url.substring(url.indexOf("?")+1,url.length).split("&");
		for (i=0; j=paraString[i]; i++){  
			this.paraObj[j.substring(0,j.indexOf("="))] = j.substring(j.indexOf("=")+1,j.length);  
		}
	};
	
	UrlParamParser.prototype.getParam = function(name){
		var returnValue = this.paraObj[name]
		if(typeof(returnValue)=="undefined"){  
			return "";  
		}else{  
			return returnValue; 
		}
	};
	
	return UrlParamParser;
};

pay.JsLoader = {
	load: function(id, fileUrl){
		var scriptTag = document.getElementById( id ); 
		var oHead = document.getElementsByTagName("HEAD").item(0);
		var oScript = document.createElement("script");
		if (scriptTag)oHead.removeChild( scriptTag); 
		oScript.id = id;
		oScript.type = "text/javascript";
		oScript.src = fileUrl;
		oHead.appendChild(oScript);	
	},
	
	loadAuthDiv: function(authParam, callback){
		var protocol = (document.location.protocol || "http:");
		var url = protocol+ "//payapi.duowan.com/payment/showAuth.action?callbackJs=" + callback;
		for(prop in authParam){
			url = url + "&" + prop + "=" + authParam[prop];
		}
		pay.JsLoader.load("payAuthJs", url);
	},
	
	loadAuthDivForUrl: function(result, callback){
		var protocol = (document.location.protocol || "http:");
		var _tmpUrl = "";
		if (typeof result == 'string') {
			_tmpUrl = result;
		}
		else if (typeof result == 'object' && result.info) {
			_tmpUrl = result.info;
		}
		var rq = new pay.UrlParamParser(_tmpUrl);
		var url = protocol + "//payapi.duowan.com/payment/showAuth.action?callbackJs=" + callback;
		for(prop in rq.paraObj){
			url = url + "&" + prop + "=" + rq.paraObj[prop];
		}
		var authDivId = "authDiv";
		var bodyObj = document.getElementsByTagName("body").item(0);
		
		var authDiv = document.getElementById(authDivId);
		
		if(authDiv){
			bodyObj.removeChild(authDiv);
		}
		
		authDiv = document.createElement("div");
		authDiv.id = "authDiv";
		
		bodyObj.appendChild(authDiv);
		
		pay.JsLoader.load("payAuthJs", url);
	}
};
