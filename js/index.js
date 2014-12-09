function sum(x){function sumIt(y){return x+y;} return sumIt;} var sumA = sum(4);var sumB = sumA(3); console.log(sumB);

var totalTime,
    start = new Date;
    iterations = 1000;
    while(iterations--){
    	//Code
    }

    totalTime = new Date - start;

    console.log(totalTime);



    写一个函数给一个元素添加20个div

/*bad*/
    function addDivs (element) {
    	var div;
    	for (var i = 20; i > 0; i--) {
    		div = document.createElement('div');
    		div.innerHTML = 'heya!';
    		element.appendChild(div);
    	};
    }
    /better/
    function addDivs (element) {
    	var div;
    	var fragment = document.creatDocumentFragent();
    	for (var i = 0; i < 20; i++) {
    		div = document.createElement('a');
    		div.innerHTML = 'heya!';
    		fragemnt.appendChild(div);	
    	};
    	element.appendChild(fragemnt);
     }


    要解决这个问题，可以使用DocumentFragment来代替，我们可以每次添加一个新的div到里面。完成后将DocumentFragment添加到DOM中只会触发一次回流。


    当浏览器重新渲染文档中的元素时需要 重新计算它们的位置和几何形状，我们称之为回流。回流会阻塞用户在浏览器中的操作，因此理解提升回流时间是非常有帮助的。