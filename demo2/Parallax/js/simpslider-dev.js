/*
 Simpslider v1.0 - jQuery slider for web developers
 author : Pavel A. Hryshayeu
 author's email : gigatrop@gmail.com
 author's site : http://psdvhtml.com
 license : GPL
 */

(function( $ ){ $.fn.simpslider = function(params) {

	/** @type {jQuery} **/
	var slider = $(this);
	var sl_cont = $("#slider-controls");

	var p = {
		/** @type {jQuery} **/
		slider : slider,
		/** @type {number} **/
		moveWidth : slider.width(), // length of one item move
		/** @type {number} **/
		moveHeight : slider.height(), // vertical length of one item move
		/** @type {jQuery} **/
		mover : slider.find('.mover'),
		/** @type {jQuery} **/
		left : slider.find('.left'),
		/** @type {jQuery} **/
		right : slider.find('.right'),
		/** @type {boolean} **/
		autoStart : true,
		/** @type {number} **/
		speed : 800,
		/** @type {string} **/
		easing : 'swing', // 'easeInOutCubic' (plugin needed)
		/** @type {number} **/
		wait : 5000,
		/** @type {boolean} **/
		stopOnHover : true,
		/** @type {jQuery} **/
		dots : sl_cont.find("li"),
		/** @type {string} **/
		itemsSelector : 'img',
		/** @type {boolean} **/
		horizontal : true,
		/** @type {function} **/
		doAfter : null, // doAfter : function( currentID, wasID ){ ... }
		/** @type {function} **/
		doBefore : null, // doBefore : function( willID, currentID ){ ... }
		/** @type {number} **/
		visibleCount : 1, // for multiple
		/** @type {boolean} **/
		infinit : true, // infinit slider - last item becomes first, if false - slider stops at the end
		/** @type {string} **/
		effect : 'move', // 'fade'
		/** @type {number} **/
		itemsZ : 1, // items z-index for fade effect (active item has z-index+2)
		/** @type {number} **/
		touchLength : 50, // touch distance in pixels to move slider (sensitivity)
		/** @type {boolean} **/
		touchSimple : false, // simplify touch moving, may help in several situations
		/** @type {string} **/
		activeClass : 'active',
		/** @type {string} **/
		disabledClass : 'disabled',
		/** @type {string} **/
		direction : '', // 'prev'|'next'|'to' - slider moving direction, just for get
		/** @type {number} **/
		itemsCount : 0,
		/** @type {number} **/
		curID : 0,
		/** @type {number} **/
		willID : 0, // future ID before animation start
		/** @type {Array} **/
		idHistory : [0], // history of ids, every new id adds to beginning
		/** @type {boolean} **/
		moving : false,
		/** @type {number} **/
		iterator : 0,
		/** @type {boolean} **/
		stopped : false,
		/** @type {object} **/
		touch : {
			/** @type {boolean} **/
			started : false,
			/** @type {number} **/
			x : 0,
			/** @type {number} **/
			y : 0,
			/** @type {number} **/
			moveX : 0,
			/** @type {number} **/
			moveY : 0,
			/** @type {string} **/
			direction : ''
		}
	};

	function init(){
		p = $.extend( p, params ); // p - resulting slider params
		p.itemsCount = p.slider.find(p.itemsSelector).length;
		initEffects();
	}

	function initEffects(){
		function initFade(){
			var items = p.mover.find( p.itemsSelector );
			items.css({
				position : 'absolute',
				left : 0,
				top : 0,
				zIndex : p.itemsZ
			});
			items.eq(p.curID).css('z-index',p.itemsZ+1);
		}
		if( p.effect === 'fade' ) initFade();
	}

	init();


	function animateFade( curID, wasID ){
		var items = p.mover.find( p.itemsSelector );
		items.css({
			opacity : 0,
			zIndex : p.itemsZ
		});
		items.eq(wasID).css({
			opacity : 1,
			zIndex : p.itemsZ+1
		});
		items.eq(curID).css({
			opacity : 0,
			zIndex : p.itemsZ+2
		});
		items.eq(curID).animate({opacity:1}, p.speed, p.easing, function(){
			moveEnd( curID, wasID );
		});
	}


	function prev(isTouch){
		if( p.itemsCount == 1 ) return;
		if( p.moving ) return;
		if( !p.infinit && (p.curID == 0) ) return;
		p.moving = true;
		p.direction = 'prev';
		var wasID = p.curID;
		p.curID--;
		p.idHistory.unshift( p.curID );
		if( p.curID < 0 ) p.curID = p.itemsCount-1;
		p.willID = p.curID;
		if( p.doBefore !== null ) p.doBefore( p.willID, wasID );
		p.dots.removeClass( p.activeClass ).eq( p.curID ).addClass( p.activeClass );
		if( p.effect === 'move' ) animateMove();
		else if( p.effect === 'fade' ) animateFade( p.curID, wasID );

		function animateMove(){
			var track, moveSpeed;
			if( p.touch.direction != 'prev' ) p.mover.prepend( p.mover.find( p.itemsSelector+':last' ) );
			if( p.horizontal ){
				var startLeft = ((isTouch && !p.touchSimple) ? (p.touch.moveX-p.touch.x)-p.moveWidth : -p.moveWidth);
				track = ((isTouch && !p.touchSimple) ? p.moveWidth-(p.touch.moveX-p.touch.x) : p.moveWidth);
				moveSpeed = ((track > 0) ? p.speed : 0);
				p.mover.css( 'left', startLeft+'px' ).animate({ left : '+='+track+'px' }, moveSpeed, p.easing, function(){
					moveEnd( p.curID, wasID );
				});
			} else {
				var startTop = ((isTouch && !p.touchSimple) ? (p.touch.y-p.touch.moveY)+p.moveHeight : p.moveHeight);
				track = ((isTouch && !p.touchSimple) ? p.moveHeight-(p.touch.moveY-p.touch.y) : p.moveHeight);
				moveSpeed = ((track > 0) ? p.speed : 0);
				p.mover.css( 'top' , '-'+startTop+'px' ).animate({ top : '+='+track+'px' }, moveSpeed, p.easing, function(){
					moveEnd( p.curID, wasID );
				});
			}
		}
	}

	function next(isTouch){
		if( p.itemsCount == 1 ) return;
		if( p.moving ) return;
		if( !p.infinit && (p.curID == p.itemsCount - p.visibleCount) ) return;
		p.moving = true;
		p.direction = 'next';
		var wasID = p.curID;
		p.curID++;
		p.idHistory.unshift( p.curID );
		if( p.curID > p.itemsCount-1 ) p.curID = 0;
		p.willID = p.curID;
		if( p.doBefore !== null ) p.doBefore( p.willID, wasID );
		p.dots.removeClass( p.activeClass ).eq( p.curID ).addClass( p.activeClass );
		if( p.effect === 'move' ) animateMove();
		else if( p.effect === 'fade' ) animateFade( p.curID, wasID );

		function animateMove(){
			var track, moveSpeed;
			if( p.horizontal ){
				track = ((isTouch && !p.touchSimple) ? p.moveWidth+(p.touch.moveX-p.touch.x) : p.moveWidth);
				moveSpeed = ((track > 0) ? p.speed : 0);
				p.mover.animate({left : '-='+track+'px'}, moveSpeed, p.easing, function(){
					p.mover.append( p.mover.find( p.itemsSelector+':first' ) );
					p.mover.css('left',0);
					moveEnd( p.curID, wasID );
				});
			} else {
				track = ((isTouch && !p.touchSimple) ? p.moveHeight+(p.touch.moveY-p.touch.y) : p.moveHeight);
				moveSpeed = ((track > 0) ? p.speed : 0);
				p.mover.animate({top : '-='+track+'px'}, moveSpeed, p.easing, function(){
					p.mover.append( p.mover.find( p.itemsSelector+':first' ) );
					p.mover.css('top',0);
					moveEnd( p.curID, wasID );
				});
			}
		}

	}

	/**
	 * @param {number} id
	 * @param {boolean=} fast
	 */
	function to( id, fast ){
		if( p.itemsCount == 1 ) return;
		if( p.moving ) return;
		p.moving = true;
		p.direction = 'to';
		var wasID = p.curID;
		p.curID = id;
		p.idHistory.unshift( p.curID );
		p.willID = p.curID;
		if( p.doBefore !== null ) p.doBefore( p.willID, wasID );
		var speed_ = fast ? 0 : p.speed;
		p.dots.removeClass( p.activeClass ).eq( p.curID ).addClass( p.activeClass );
		if( p.effect === 'move' ) animateMove();
		else if( p.effect === 'fade' ) animateFade( p.curID, wasID );

		function animateMove(){
			var replaceCount = p.curID - wasID;
			if( replaceCount < 0 ) {
				var cnt = -replaceCount;
				for( var i = 0; i < cnt; i++ ){ // make many appends to end from begin
					p.mover.prepend( p.mover.find(p.itemsSelector+':eq('+(p.itemsCount-1)+')') );
				}
				if( p.horizontal ){
					p.mover.css('left', '-'+(p.moveWidth*cnt)+'px').animate({left:'0'}, speed_, p.easing, function(){
						moveEnd( p.curID, wasID );
					});
				} else {
					p.mover.css('top', '-'+(p.moveHeight*cnt)+'px').animate({top:'0'}, speed_, p.easing, function(){
						moveEnd( p.curID, wasID );
					});
				}
			} else {
				if( p.horizontal ){
					p.mover.animate({
						left : '+=' + ( p.moveWidth * ( wasID - p.curID ) ) + 'px'
					}, speed_, p.easing, function(){
						if( replaceCount > 0 ){
							p.mover.append( p.mover.find(p.itemsSelector).slice(0,replaceCount) );
							p.mover.css('left','0');
						}
						moveEnd( p.curID, wasID );
					});
				} else {
					p.mover.animate({
						top : '+=' + ( p.moveHeight * ( wasID - p.curID ) ) + 'px'
					}, speed_, p.easing, function(){
						if( replaceCount > 0 ){
							p.mover.append( p.mover.find(p.itemsSelector).slice(0,replaceCount) );
							p.mover.css('top','0');
						}
						moveEnd( p.curID, wasID );
					});
				}
			}
		}
	}

	function moveEnd( curID, wasID ){
		p.moving = false;
		arrowsActive();
		if( p.doAfter !== null ) p.doAfter( curID, wasID );
	}

	function arrowsActive(){
		if( p.infinit ) return;
		p.left.toggleClass( p.disabledClass, (p.curID == 0) || (p.itemsCount<p.visibleCount) );
		p.right.toggleClass( p.disabledClass, (p.curID == p.itemsCount-p.visibleCount) || (p.itemsCount<p.visibleCount) );
	}
	arrowsActive();

	function leftClicked(){ if( !p.left.hasClass(p.disabledClass) ) prev() }
	function rightClicked(){ if( !p.right.hasClass(p.disabledClass) ) next() }
	function dotClicked(){ to( $(this).index() ) }

	if( $.isFunction(p.left.on) ){
		p.left.on( 'touchstart click', leftClicked );
		p.right.on( 'touchstart click', rightClicked );
		p.dots.on( 'touchstart click', dotClicked );
	} else {
		p.left.live( 'touchstart click', leftClicked );
		p.right.live( 'touchstart click', rightClicked );
		p.dots.live( 'touchstart click', dotClicked );
	}


	function touchMove(){
		if( $.isFunction(p.mover.on) ) p.mover.on( 'touchstart', moverTouchStart );
		else p.mover.live( 'touchstart', moverTouchStart );
		function moverTouchStart(e){
			if(p.moving) return;
			p.moving = true;
			p.touch.started = true;
			p.touch.x = e.originalEvent.touches[0].clientX;
			p.touch.y = e.originalEvent.touches[0].clientY;
			p.touch.moveX = p.touch.x;
			p.touch.moveY = p.touch.y;
		}
		if( $.isFunction(p.mover.on) ) p.mover.on( 'touchend', moverTouchEnd );
		else p.mover.live( 'touchend', moverTouchEnd );
		function moverTouchEnd(e){
			if( !p.touch.started ) return;
			p.touch.started = false;
			p.moving = false;
			var track = {
				x : p.touch.moveX-p.touch.x,
				y : p.touch.moveY-p.touch.y
			};
			if( p.effect == 'move' ){
				if( !p.touchSimple ){
					if( p.horizontal ){
						if( track.x > p.touchLength ){
							prev(true);
						} else if( track.x > 0 ){
							p.curID = p.curID-1;
							if( p.curID < 0 ) p.curID = p.itemsCount-1;
							p.touch.x = 0;
							p.touch.moveX = track.x - p.moveWidth;
							next(true);
						} else if( track.x < -p.touchLength ){
							next(true);
						} else if( track.x < 0 ){
							p.curID = p.curID+1;
							if( p.curID > p.itemsCount-1 ) p.curID = 0;
							p.touch.x = 0;
							p.touch.moveX = p.moveWidth+track.x;
							if( p.touch.direction == 'next' ) p.mover.append( p.mover.find( p.itemsSelector+':first' ) );
							prev(true);
						}
					} else {
						if( track.y > p.touchLength ){
							prev(true);
						} else if( track.y > 0 ){
							p.curID = p.curID-1;
							if( p.curID < 0 ) p.curID = p.itemsCount-1;
							p.touch.y = 0;
							p.touch.moveY = track.y - p.moveHeight;
							next(true);
						} else if( track.y < -p.touchLength ){
							next(true);
						} else if( track.y < 0 ){
							p.curID = p.curID+1;
							if( p.curID > p.itemsCount-1 ) p.curID = 0;
							p.touch.y = 0;
							p.touch.moveY = p.moveHeight+track.y;
							if( p.touch.direction == 'next' ) p.mover.append( p.mover.find( p.itemsSelector+':first' ) );
							prev(true);
						}
					}
				}
			}
			if( (p.effect == 'fade') || p.touchSimple ){
				if( p.horizontal ){
					if( track.x > p.touchLength ){
						prev(true);
					}
					if( track.x < -p.touchLength ){
						next(true);
					}
				} else {
					if( track.y > p.touchLength ){
						prev(true);
					}
					if( track.y < -p.touchLength ){
						next(true);
					}
				}
			}
			p.touch.direction = '';
		}
		if( $.isFunction(p.mover.on) ) p.mover.on( 'touchmove', moverTouchMove );
		else p.mover.live( 'touchmove', moverTouchMove );
		function moverTouchMove(e){
			if( !p.touch.started ) return;
			e.preventDefault();
			p.touch.moveX = e.originalEvent.touches[0].clientX;
			p.touch.moveY = e.originalEvent.touches[0].clientY;

			if( (p.effect == 'move') && !p.touchSimple ){
				if( p.horizontal ) touchMoveHoriz(); else touchMoveVert();
			}
		}

		function touchMoveHoriz(){
			var left = p.touch.moveX-p.touch.x;
			if( left > 0 ){
				if( left > p.moveWidth ){
					left = p.moveWidth;
					p.touch.moveX = p.touch.x + left;
				}
				if( p.touch.direction != 'prev' ){
					p.mover.prepend( p.mover.find( p.itemsSelector+':last' ) );
					p.touch.direction = 'prev';
				}
			}
			if( p.touch.direction == 'prev' ) p.mover.css( 'left', (left-p.moveWidth)+'px' );
			if( left < 0 ){
				if( left < -p.moveWidth ){
					left = -p.moveWidth;
					p.touch.moveX = p.touch.x + left;
				}
				if( p.touch.direction != 'next' ){
					if( p.touch.direction == 'prev' ) p.mover.append( p.mover.find( p.itemsSelector+':first' ) );
					p.touch.direction = 'next';
				}
			}
			if( p.touch.direction == 'next' ) p.mover.css( 'left', left+'px' );
		}

		function touchMoveVert(){
			var top = p.touch.moveY-p.touch.y;
			if( top > 0 ){
				if( top > p.moveHeight ){
					top = p.moveHeight;
					p.touch.moveY = p.touch.y + top;
				}
				if( p.touch.direction != 'prev' ){
					p.mover.prepend( p.mover.find( p.itemsSelector+':last' ) );
					p.touch.direction = 'prev';
				}
			}
			if( p.touch.direction == 'prev' ) p.mover.css( 'top', (top-p.moveHeight)+'px' );
			if( top < 0 ){
				if( top < -p.moveHeight ){
					top = -p.moveHeight;
					p.touch.moveX = p.touch.y + top;
				}
				if( p.touch.direction != 'next' ){
					if( p.touch.direction == 'prev' ) p.mover.append( p.mover.find( p.itemsSelector+':first' ) );
					p.touch.direction = 'next';
				}
			}
			if( p.touch.direction == 'next' ) p.mover.css( 'top', top+'px' );
		}
	}
	touchMove();




	function timerStart(){
		timerStop();
		p.iterator = setInterval( next, p.wait );
	}
	function timerStop(){
		if( p.iterator ) clearInterval( p.iterator );
	}
	if( p.autoStart ) timerStart();

	if( p.autoStart && p.stopOnHover ){
		slider.mouseenter( timerStop ).mouseleave(function(){
			if( !p.stopped ) timerStart();
		});
	}

	// methods

	this.stop = function(){
		timerStop();
		p.stopped = true;
	};

	this.start = function(){
		timerStart();
		p.stopped = false;
	};

	this.next = next;
	this.prev = prev;
	this.to = to;
	this.back = function( fast ){ // returns to a previous active item
		if( p.idHistory.length > 1 ) this.to( p.idHistory[1], fast );
	};

	this.refresh = function(){
		init();
		arrowsActive();
	};

	// set params with reinitialising
	this.setParams = function( params ){
		$.extend( p, params );
		this.refresh();
	};

	// params explicit
	this.params = p;


	return this;

}; })( jQuery );