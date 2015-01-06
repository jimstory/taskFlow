/**
 * jquery blockUI Dialog plugin
 * v1.1
 * @createDate -- 2012-1-4
 * @author hoojo
 * @email hoojo_@126.com
 * @requires jQuery v1.2.3 or later, jquery.blockUI-2.3.8
 * Copyright (c) 2012 M. hoo
 * http://blog.csdn.net/IBM_hoojo
 */
;
(function($, window, document, undefined) {
	// undefined作为形参的目的是因为在es3中undefined是可以被修改的
	//比如我们可以声明var undefined = 123,这样就影响到了undefined值的判断，幸运的是在es5中,undefined不能被修改了。
	// window和document本身是全局变量，在这个地方作为形参的目的是因为js执行是从里到外查找变量的（作用域），把它们作为局部变量传进来，就避免了去外层查找，提高了效率。
	"use strict";

	/**
	 * Table对象
	 *
	 * @class Table
	 * @constructor
	 * @param {json} ajax成功的返回数据
	 * @return {String} 返回HTML的字符串
	 */
	function Table(obj) {
		var self = this;
		this.obj = obj;
		this.init = function() {
			obj.html(this.creatTb());
			obj.find('thead').html(this.creatThead());
			obj.find('tbody').html(this.creatTbody());
		};
		this.refresh = function() {
			obj.find('tbody').html(this.creatTbody());
		};

		$.extend(self, {})
		self.init();
		return self;
	}

	Table.prototype = {
		creatTb: creatTb,
		creatThead: creatThead,
		creatTbody: creatTbody,
		getData: getData,
		hide: hideTbbody,
		destroy: destroy
	};
	/**
	 * 生成tb框架代码
	 *
	 * @method creatTb
	 * @return {String} 返回HTML的字符串
	 */
	function creatTb() {
			var tbDom = $('<table class="lhz_tb"></table>');
			tbDom.append('<thead><tr><td>载入中</td><td>。。。</td></tr></thead>');
			tbDom.append('<tbody><tr><td>载入中</td><td>。。。</td></tr></tbody>');
			return tbDom;
		}
		/**
		 * 根据获取的数据生成表格标题。
		 *
		 * @method creatThead
		 * @param {json} ajax成功的返回数据
		 * @return {String} 返回HTML的字符串
		 */
	function creatThead() {
			var data = this.getData('thead');
			var thead = [];
			if (data) {
				thead.push("<tr>");
				$.each(data, function(key, val) {
					thead.push("<td id='" + key + "'>" + val + "</td>");
				});
				thead.push("</tr>");
			} else {
				thead.push('<tr>', '<td>暂无数据</td>', '</tr>');
			}
			return thead.join("");
		}
		/**
		 * 根据获取的数据生成表格内容,
		 *
		 * @method creatTbody
		 * @param {json} ajax成功的返回数据
		 * @return {String} 返回HTML的字符串
		 */
	function creatTbody() {
			var data = this.getData('tbody');
			var tbody = [];
			if (data.length > 0) {
				$.each(data, function(index, item) {
					tbody.push("<tr>");
					$.each(item.data, function(key, val) {
						if (typeof val == 'string') {
							tbody.push("<td id='" + key + "'>" + val + "</td>");
						} else {
							tbody.push(showtd(val));
						}
					});
					tbody.push("</tr>");
				});
			} else {
				tbody.push('<tr>', '<td>暂无数据</td>', '</tr>');
			}
			return tbody.join("");
		}
		/**
		 * 处理数据格式显示
		 *
		 * @method showtd
		 * @param {json} ajax成功的返回数据
		 * @return {String} 返回HTML的字符串
		 */
	function showtd(obj) {
			var type = obj.type;
			var value = obj.value;
			var tdHtml = '';
			switch (type) {
				case 'link':
					tdHtml = '<td><a href="' + obj.url + '">' + value + '</a></td>';
					break;
				case 'percent':
					break;
				default:
					tdHtml = '<td>' + value + '</td>';
			}
			return tdHtml;
		}
		/**
		 * 获取数据
		 *
		 * @method getData
		 * @param {String} 要获取数据的类型
		 * @return {json} 数据json格式
		 */
	function getData(type) {
		var retData;
		$.ajax({
			dataType: "json",
			async: false,
			//url: './test/data/table.json',
			url: './routes/getData.php',
			success: function(data) {
				if (type == 'thead') {
					retData = data.thead;
				} else {
					retData = data.tbody;
				}
			}
		});
		return retData;
	}

	function hideTbbody() {
		this.obj.hide();
	}

	function destroy() {
		console.log(666);
	}


	/*
   $.fn.lhz_table.defaults = {    
	  foreground: 'red',    
	  background: 'yellow'    
	};
    */

	$.fn.lhz_table = function(options) {
		var opts = $.extend({}, $.fn.lhz_table.defaults, options);
		var el = $(this).data("Layershow"),
			ret, api;
		this.each(function() {
			var o = $.meta ? $.extend({}, opts, $this.data()) : opts;
			var $this = $(this);

			api = new Table($this);
			//var markup = $this.html();      
			//markup = $.fn.lhz_table.skin(markup);      
		});
		return api ? api : this;
	};

	$.fn.lhz_table.skin = function(txt) {
		return '<table><tr><td>' + txt + '</td></tr></table>';
	};

})(jQuery, window, document);