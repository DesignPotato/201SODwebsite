//var $container = $('#container');
// init
//$container.packery({
 // itemSelector: '.item',
 // gutter: 10
//});

var container = document.querySelector('#container');
var pckry = new Packery( container, {
  // options
  itemSelector: '.item',
  gutter: 10
});