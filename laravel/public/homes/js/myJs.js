
//获取元素
	var small = $('#small');
	var big = $('#big');
	var move = $('#move');
	var bigImg = $('#bigImg');
	var smallImg = $('#smallImg');
	
	//鼠标移入事件
	small.mouseover = function(){
		small.style.cursor = 'move';
		//计算移动div的宽度和高度
		//显示元素
		move.style.display = 'block';
		big.style.display = 'block';

		var w = small.offsetWidth * big.offsetWidth / bigImg.offsetWidth;
		var h = small.offsetHeight * big.offsetHeight / bigImg.offsetHeight;
		//设置样式
		move.style.width = w + 'px';
		move.style.height = h + 'px';
		
	}

	//绑定事件
	small.mousemove = function(e){
		//获取尺寸
		var l = small.offsetLeft;
		var x = e.clientX;
		var w = move.offsetWidth / 2;

		var t = small.offsetTop;
		var y = e.clientY;
		var h = move.offsetHeight / 2;

		var newL = x - l - w;
		var newT = y - t - h;

		//计算边界
		if(newL <= 0){
			newL = 0;
		}

		var maxLeft = small.offsetWidth - move.offsetWidth;
		if(newL >= maxLeft){
			newL = maxLeft;
		}

		if(newT <=0 ){
			newT = 0;
		}

		var maxTop = small.offsetHeight - move.offsetHeight;
		if(newT >= maxTop){
			newT = maxTop;
		}

		//设置css样式
		move.style.left = newL + 'px';
		move.style.top = newT + 'px';

		//计算新的大图的left和top值
		var bWidth = bigImg.offsetWidth;
		var sWidth = small.offsetWidth;// newL是已知的
		var newLeft = newL * bWidth / sWidth;

		var bHeight = bigImg.offsetHeight;
		var sHeight = small.offsetHeight;
		var newTop = newT * bHeight / sHeight;

		bigImg.style.left = -newLeft + 'px';
		bigImg.style.top = -newTop + 'px';
	}

	//
	small.mouseout = function(){
		move.style.display = 'none';
		big.style.display = 'none';
	}

	//点击图片切换显示图

