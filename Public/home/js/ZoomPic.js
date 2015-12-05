
        document.getElementById("top_expert_span").onclick = function(){
            document.getElementById("img_teacher").style.display = "none";
            document.getElementById("img_expert").style.display = "block";
            document.getElementById("top_teacher_span").style.background = "rgb(199, 199, 199)";
            document.getElementById("top_expert_span").style.background = "white";
        };
        document.getElementById("top_teacher_span").onclick = function(){
            document.getElementById("img_teacher").style.display = "block";
            document.getElementById("img_expert").style.display = "none";
            document.getElementById("top_expert_span").style.background = "rgb(199, 199, 199)";
            document.getElementById("top_teacher_span").style.background = "white";
        };


var Effect = (function() {
    
    var Slider = function(o) {
        this.setting      = typeof o === 'object' ? o : {};
        this.target       = this.setting.target || 'slider';
        this.showMarkers  = this.setting.showMarkers || false;
        this.showControls = this.setting.showControls || false;
        this.timer        = null;
        this.currentTime  = null;
        this.ms           = 35;
        this.autoMs       = 3000;
        this.iTarget      = 0;
        this.nextTarget   = 0;
        this.speed        = 0;
        
        this.init();
        this.handleEvent();
    };
    
    Slider.prototype = {
        init: function() {
            this.obj      = document.getElementById(this.target);
            this.oUl      = this.obj.getElementsByTagName('ul')[0];
            this.aUlLis   = this.oUl.getElementsByTagName('li');
            this.width    = this.aUlLis[0].offsetWidth;
            this.number   = this.aUlLis.length;
            
            this.oUl.style.width = this.width * this.number + 'px';
            
            if(this.showMarkers) {
                var oDiv = document.createElement('div');
                var aLis = [];
                for(var i = 0; i < this.number; i++) {
                    aLis.push('<li>'+ (i+1) +'<\/li>');
                };
                oDiv.innerHTML = '<ol>'+ aLis.join('') +'<\/ol>';
                this.obj.appendChild(oDiv.firstChild);
                this.aLis = this.obj.getElementsByTagName('ol')[0].getElementsByTagName('li');
                this.aLis[0].className = 'active';
                oDiv = null;
            };
            
            if(this.showControls) {
                this.oPrev = document.createElement('p');
                this.oNext = document.createElement('p');
                this.oPrev.className = 'prev';
                this.oPrev.innerHTML = '&laquo;';
                this.oNext.className = 'next';
                this.oNext.innerHTML = '&raquo;';
                this.obj.appendChild(this.oPrev);
                this.obj.appendChild(this.oNext);
                
            };
            
        },
        
        handleEvent: function() {
            var that = this;
            
            this.currentTime = setInterval(function() {
                that.autoPlay();
            }, this.autoMs);
            
            this.addEvent(this.obj, 'mouseover', function() {
                clearInterval(that.currentTime);
            });
            
            this.addEvent(this.obj, 'mouseout', function() {
                that.currentTime = setInterval(function() {
                    that.autoPlay();
                }, that.autoMs);
            });
            
            if(this.showMarkers) {
                for(var i = 0; i < this.number; i++) {
                    var el = this.aLis[i];
                    (function(index) {
                        that.addEvent(el, 'mouseover', function() {
                            that.goTime(index);
                        });
                    })(i);
                };
            };
            
            if(this.showControls) {
                this.addEvent(this.oPrev, 'click', function() {
                    that.fnPrev();
                });
                this.addEvent(this.oNext, 'click', function() {
                    that.autoPlay();
                });
            };
            
        },
        
        addEvent: function(el, type, fn) {
            if(window.addEventListener) {
                el.addEventListener(type, fn, false);
            }
            else if(window.attachEvent) {
                el.attachEvent('on' + type, fn);
            };
        },
        
        fnPrev: function() {
            this.nextTarget--;
            if(this.nextTarget < 0) {
                this.nextTarget = this.number - 1;
            };
            this.goTime(this.nextTarget);
        },
        
        autoPlay: function() {
            this.nextTarget++;
            if(this.nextTarget >= this.number) {
                this.nextTarget = 0;
            };
            this.goTime(this.nextTarget);
        },
        
        goTime: function(index) {
            var that = this;
            
            if(this.showMarkers) {
                for(var i = 0; i < this.number; i++) {
                    i == index ? this.aLis[i].className = 'active' : this.aLis[i].className = '';
                };
            };
            
            this.iTarget = -index * this.width;
            if(this.timer) {
                clearInterval(this.timer);
            };
            this.timer = setInterval(function() {
                that.doMove(that.iTarget);
            }, this.ms);
        },
        
        doMove: function(target) {
            this.oUl.style.left = this.speed + 'px';
            this.speed += (target - this.oUl.offsetLeft) / 3;
            if(Math.abs(target - this.oUl.offsetLeft) === 0) {
                this.oUl.style.left = target + 'px';
                clearInterval(this.timer);
                this.timer = null;
            };
        }

    };
    
    return {
        
        slider: function(o) {
            var tt = new Slider(o);
        }
    };
})();



// 调用语句
Effect.slider({
    'targetElement': 'slider',
    'showMarkers': true,
    'showControls': true
});

var Effect1 = (function() {
    
    var Slider = function(o) {
        this.setting      = typeof o === 'object' ? o : {};
        this.target       = this.setting.target || 'slider1';
        this.showMarkers  = this.setting.showMarkers || false;
        this.showControls = this.setting.showControls || false;
        this.timer        = null;
        this.currentTime  = null;
        this.ms           = 35;
        this.autoMs       = 3000;
        this.iTarget      = 0;
        this.nextTarget   = 0;
        this.speed        = 0;
        
        this.init();
        this.handleEvent();
    };
    
    Slider.prototype = {
        init: function() {
            this.obj      = document.getElementById(this.target);
            this.oUl      = this.obj.getElementsByTagName('ul')[0];
            this.aUlLis   = this.oUl.getElementsByTagName('li');
            this.width    = this.aUlLis[0].offsetWidth;
            this.number   = this.aUlLis.length;
            
            this.oUl.style.width = this.width * this.number + 'px';
            
            if(this.showMarkers) {
                var oDiv = document.createElement('div');
                var aLis = [];
                for(var i = 0; i < this.number; i++) {
                    aLis.push('<li>'+ (i+1) +'<\/li>');
                };
                oDiv.innerHTML = '<ol>'+ aLis.join('') +'<\/ol>';
                this.obj.appendChild(oDiv.firstChild);
                this.aLis = this.obj.getElementsByTagName('ol')[0].getElementsByTagName('li');
                this.aLis[0].className = 'active';
                oDiv = null;
            };
            
            if(this.showControls) {
                this.oPrev = document.createElement('p');
                this.oNext = document.createElement('p');
                this.oPrev.className = 'prev';
                this.oPrev.innerHTML = '&laquo;';
                this.oNext.className = 'next';
                this.oNext.innerHTML = '&raquo;';
                this.obj.appendChild(this.oPrev);
                this.obj.appendChild(this.oNext);
                
            };
            
        },
        
        handleEvent: function() {
            var that = this;
            
            this.currentTime = setInterval(function() {
                that.autoPlay();
            }, this.autoMs);
            
            this.addEvent(this.obj, 'mouseover', function() {
                clearInterval(that.currentTime);
            });
            
            this.addEvent(this.obj, 'mouseout', function() {
                that.currentTime = setInterval(function() {
                    that.autoPlay();
                }, that.autoMs);
            });
            
            if(this.showMarkers) {
                for(var i = 0; i < this.number; i++) {
                    var el = this.aLis[i];
                    (function(index) {
                        that.addEvent(el, 'mouseover', function() {
                            that.goTime(index);
                        });
                    })(i);
                };
            };
            
            if(this.showControls) {
                this.addEvent(this.oPrev, 'click', function() {
                    that.fnPrev();
                });
                this.addEvent(this.oNext, 'click', function() {
                    that.autoPlay();
                });
            };
            
        },
        
        addEvent: function(el, type, fn) {
            if(window.addEventListener) {
                el.addEventListener(type, fn, false);
            }
            else if(window.attachEvent) {
                el.attachEvent('on' + type, fn);
            };
        },
        
        fnPrev: function() {
            this.nextTarget--;
            if(this.nextTarget < 0) {
                this.nextTarget = this.number - 1;
            };
            this.goTime(this.nextTarget);
        },
        
        autoPlay: function() {
            this.nextTarget++;
            if(this.nextTarget >= this.number) {
                this.nextTarget = 0;
            };
            this.goTime(this.nextTarget);
        },
        
        goTime: function(index) {
            var that = this;
            
            if(this.showMarkers) {
                for(var i = 0; i < this.number; i++) {
                    i == index ? this.aLis[i].className = 'active' : this.aLis[i].className = '';
                };
            };
            
            this.iTarget = -index * this.width;
            if(this.timer) {
                clearInterval(this.timer);
            };
            this.timer = setInterval(function() {
                that.doMove(that.iTarget);
            }, this.ms);
        },
        
        doMove: function(target) {
            this.oUl.style.left = this.speed + 'px';
            this.speed += (target - this.oUl.offsetLeft) / 3;
            if(Math.abs(target - this.oUl.offsetLeft) === 0) {
                this.oUl.style.left = target + 'px';
                clearInterval(this.timer);
                this.timer = null;
            };
        }

    };
    
    return {
        
        slider1: function(o) {
            var tt = new Slider(o);
        }
    };
})();
Effect1.slider1({
    'targetElement': 'slider1',
    'showMarkers': true,
    'showControls': true
});

var Effect2 = (function() {
    
    var Slider = function(o) {
        this.setting      = typeof o === 'object' ? o : {};
        this.target       = this.setting.target || 'slider2';
        this.showMarkers  = this.setting.showMarkers || false;
        this.showControls = this.setting.showControls || false;
        this.timer        = null;
        this.currentTime  = null;
        this.ms           = 35;
        this.autoMs       = 3000;
        this.iTarget      = 0;
        this.nextTarget   = 0;
        this.speed        = 0;
        
        this.init();
        this.handleEvent();
    };
    
    Slider.prototype = {
        init: function() {
            this.obj      = document.getElementById(this.target);
            this.oUl      = this.obj.getElementsByTagName('ul')[0];
            this.aUlLis   = this.oUl.getElementsByTagName('li');
            this.width    = this.aUlLis[0].offsetWidth;
            this.number   = this.aUlLis.length;
            
            this.oUl.style.width = this.width * this.number + 'px';
            
            if(this.showMarkers) {
                var oDiv = document.createElement('div');
                var aLis = [];
                for(var i = 0; i < this.number; i++) {
                    aLis.push('<li>'+ (i+1) +'<\/li>');
                };
                oDiv.innerHTML = '<ol>'+ aLis.join('') +'<\/ol>';
                this.obj.appendChild(oDiv.firstChild);
                this.aLis = this.obj.getElementsByTagName('ol')[0].getElementsByTagName('li');
                this.aLis[0].className = 'active';
                oDiv = null;
            };
            
            if(this.showControls) {
                this.oPrev = document.createElement('p');
                this.oNext = document.createElement('p');
                this.oPrev.className = 'prev';
                this.oPrev.innerHTML = '&laquo;';
                this.oNext.className = 'next';
                this.oNext.innerHTML = '&raquo;';
                this.obj.appendChild(this.oPrev);
                this.obj.appendChild(this.oNext);
                
            };
            
        },
        
        handleEvent: function() {
            var that = this;
            
            this.currentTime = setInterval(function() {
                that.autoPlay();
            }, this.autoMs);
            
            this.addEvent(this.obj, 'mouseover', function() {
                clearInterval(that.currentTime);
            });
            
            this.addEvent(this.obj, 'mouseout', function() {
                that.currentTime = setInterval(function() {
                    that.autoPlay();
                }, that.autoMs);
            });
            
            if(this.showMarkers) {
                for(var i = 0; i < this.number; i++) {
                    var el = this.aLis[i];
                    (function(index) {
                        that.addEvent(el, 'mouseover', function() {
                            that.goTime(index);
                        });
                    })(i);
                };
            };
            
            if(this.showControls) {
                this.addEvent(this.oPrev, 'click', function() {
                    that.fnPrev();
                });
                this.addEvent(this.oNext, 'click', function() {
                    that.autoPlay();
                });
            };
            
        },
        
        addEvent: function(el, type, fn) {
            if(window.addEventListener) {
                el.addEventListener(type, fn, false);
            }
            else if(window.attachEvent) {
                el.attachEvent('on' + type, fn);
            };
        },
        
        fnPrev: function() {
            this.nextTarget--;
            if(this.nextTarget < 0) {
                this.nextTarget = this.number - 1;
            };
            this.goTime(this.nextTarget);
        },
        
        autoPlay: function() {
            this.nextTarget++;
            if(this.nextTarget >= this.number) {
                this.nextTarget = 0;
            };
            this.goTime(this.nextTarget);
        },
        
        goTime: function(index) {
            var that = this;
            
            if(this.showMarkers) {
                for(var i = 0; i < this.number; i++) {
                    i == index ? this.aLis[i].className = 'active' : this.aLis[i].className = '';
                };
            };
            
            this.iTarget = -index * this.width;
            if(this.timer) {
                clearInterval(this.timer);
            };
            this.timer = setInterval(function() {
                that.doMove(that.iTarget);
            }, this.ms);
        },
        
        doMove: function(target) {
            this.oUl.style.left = this.speed + 'px';
            this.speed += (target - this.oUl.offsetLeft) / 3;
            if(Math.abs(target - this.oUl.offsetLeft) === 0) {
                this.oUl.style.left = target + 'px';
                clearInterval(this.timer);
                this.timer = null;
            };
        }

    };
    
    return {
        
        slider2: function(o) {
            var tt = new Slider(o);
        }
    };
})();



// 调用语句
Effect2.slider2({
    'targetElement': 'slider2',
    'showMarkers': true,
    'showControls': true
});

function ZoomPic ()
{
    this.initialize.apply(this, arguments)  
}
ZoomPic.prototype = 
{
    initialize : function (id)
    {
        var _this = this;
        this.wrap = typeof id === "string" ? document.getElementById(id) : id;
        this.oUl = this.wrap.getElementsByTagName("ul")[0];
        this.aLi = this.wrap.getElementsByTagName("li");
        this.prev = this.wrap.getElementsByTagName("span")[0];
        this.next = this.wrap.getElementsByTagName("span")[1];
        this.timer = 1000;
        this.aSort = [];
        this.iCenter = 2;
        this._doPrev = function () {return _this.doPrev.apply(_this)};
        this._doNext = function () {return _this.doNext.apply(_this)};
        this.options = [
            {width:675, height:294, top:126, left:123, zIndex:1},
            {width:715, height:340, top:80, left:214, zIndex:2},
            {width:758, height:400, top:20, left:297, zIndex:3},
            {width:715, height:340, top:80, left:426, zIndex:2},
            {width:676, height:294, top:126, left:553, zIndex:1},
        ];
        for (var i = 0; i < this.aLi.length; i++) this.aSort[i] = this.aLi[i];
        this.aSort.unshift(this.aSort.pop());
        this.setUp();
        this.addEvent(this.prev, "click", this._doPrev);
        this.addEvent(this.next, "click", this._doNext);
        this.doImgClick();      
        this.timer = setInterval(function ()
        {
            _this.doNext()  
        }, 3000);       
        this.wrap.onmouseover = function ()
        {
            clearInterval(_this.timer)  
        };
        this.wrap.onmouseout = function ()
        {
            _this.timer = setInterval(function ()
            {
                _this.doNext()  
            }, 3000);   
        }
    },
    doPrev : function ()
    {
        this.aSort.unshift(this.aSort.pop());
        this.setUp()
    },
    doNext : function ()
    {
        this.aSort.push(this.aSort.shift());
        this.setUp()
    },
    doImgClick : function ()
    {
        var _this = this;
        for (var i = 0; i < this.aSort.length; i++)
        {
            this.aSort[i].onclick = function ()
            {
                if (this.index > _this.iCenter)
                {
                    for (var i = 0; i < this.index - _this.iCenter; i++) _this.aSort.push(_this.aSort.shift());
                    _this.setUp()
                }
                else if(this.index < _this.iCenter)
                {
                    for (var i = 0; i < _this.iCenter - this.index; i++) _this.aSort.unshift(_this.aSort.pop());
                    _this.setUp()
                }
            }
        }
    },
    setUp : function ()
    {
        var _this = this;
        var i = 0;
        for (i = 0; i < this.aSort.length; i++) this.oUl.appendChild(this.aSort[i]);
        for (i = 0; i < this.aSort.length; i++)
        {
            this.aSort[i].index = i;
            if (i < 5)
            {
                this.css(this.aSort[i], "display", "block");
                this.doMove(this.aSort[i], this.options[i], function ()
                {
                    _this.doMove(_this.aSort[_this.iCenter].getElementsByTagName("img")[0], {opacity:100}, function ()
                    {
                        _this.doMove(_this.aSort[_this.iCenter].getElementsByTagName("img")[0], {opacity:100}, function ()
                        {
                            _this.aSort[_this.iCenter].onmouseover = function ()
                            {
                                _this.doMove(this.getElementsByTagName("div")[0], {bottom:0})
                            };
                            _this.aSort[_this.iCenter].onmouseout = function ()
                            {
                                _this.doMove(this.getElementsByTagName("div")[0], {bottom:-100})
                            }
                        })
                    })
                });
            }
            else
            {
                this.css(this.aSort[i], "display", "none");
                this.css(this.aSort[i], "width", 0);
                this.css(this.aSort[i], "height", 0);
                this.css(this.aSort[i], "top", 37);
                this.css(this.aSort[i], "left", this.oUl.offsetWidth / 2)
            }
            if (i < this.iCenter || i > this.iCenter)
            {
                this.css(this.aSort[i].getElementsByTagName("img")[0], "opacity", 100)
                this.aSort[i].onmouseover = function ()
                {
                    _this.doMove(this.getElementsByTagName("img")[0], {opacity:100})    
                };
                this.aSort[i].onmouseout = function ()
                {
                    _this.doMove(this.getElementsByTagName("img")[0], {opacity:100})
                };
                this.aSort[i].onmouseout();
            }
            else
            {
                this.aSort[i].onmouseover = this.aSort[i].onmouseout = null
            }
        }       
    },
    addEvent : function (oElement, sEventType, fnHandler)
    {
        return oElement.addEventListener ? oElement.addEventListener(sEventType, fnHandler, false) : oElement.attachEvent("on" + sEventType, fnHandler)
    },
    css : function (oElement, attr, value)
    {
        if (arguments.length == 2)
        {
            return oElement.currentStyle ? oElement.currentStyle[attr] : getComputedStyle(oElement, null)[attr]
        }
        else if (arguments.length == 3)
        {
            switch (attr)
            {
                case "width":
                case "height":
                case "top":
                case "left":
                case "bottom":
                    oElement.style[attr] = value + "px";
                    break;
                case "opacity" :
                    oElement.style.filter = "alpha(opacity=" + value + ")";
                    oElement.style.opacity = value / 100;
                    break;
                default :
                    oElement.style[attr] = value;
                    break
            }   
        }
    },
    doMove : function (oElement, oAttr, fnCallBack)
    {
        var _this = this;
        clearInterval(oElement.timer);
        oElement.timer = setInterval(function ()
        {
            var bStop = true;
            for (var property in oAttr)
            {
                var iCur = parseFloat(_this.css(oElement, property));
                property == "opacity" && (iCur = parseInt(iCur.toFixed(2) * 100));
                var iSpeed = (oAttr[property] - iCur) / 5;
                iSpeed = iSpeed > 0 ? Math.ceil(iSpeed) : Math.floor(iSpeed);
                
                if (iCur != oAttr[property])
                {
                    bStop = false;
                    _this.css(oElement, property, iCur + iSpeed)
                }
            }
            if (bStop)
            {
                clearInterval(oElement.timer);
                fnCallBack && fnCallBack.apply(_this, arguments)    
            }
        }, 30)
    }
};
window.onload = function ()
{
    new ZoomPic("focus_Box");
};





