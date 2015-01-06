(function(win){

function arrMax(tmp){
	var max = tmp[0];
	for(var i=1;i<tmp.length;i++){ 
	  if(max<tmp[i]){
	  	max=tmp[i];
	  }
	}
	return max;
}


win.arrMax = arrMax;



})(window);