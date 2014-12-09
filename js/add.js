$(function() {
  var bodyHeight = $(window).height() - 20;
  $(".side-right").height(bodyHeight);
  $(".side-left").height(bodyHeight);
  //浏览器改变重新设置高度
  window.onresize = function() {
    var height = $(window).height() - 20;
    $(".side-right").height($(window).height() - 20);
    $(".side-left").height(height);
  };

   /**
   *跟新显示效果
   */
  function updatePreview(iframeId,value) {
    var previewFrame = document.getElementById(iframeId);
    var preview = previewFrame.contentDocument || previewFrame.contentWindow.document;
    preview.open();
    preview.write('<link href="/stylesheets/style.css" rel="stylesheet"><link href="/stylesheets/markdown.css" rel="stylesheet">');
    preview.write(marked(value.getValue()));
    preview.close();
  }

  var editor = CodeMirror.fromTextArea(document.getElementById("content"), {
    mode: "application/xml",
    styleActiveLine: true,
    lineNumbers: true,
    lineWrapping: true
  });


  var delay;
  editor.on("change", function() {
    clearTimeout(delay);
    delay = setTimeout(updatePreview("preview",editor), 30);
  });
  setTimeout(updatePreview("preview",editor), 300);

})