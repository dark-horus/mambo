// Size of the image used as map
var imgWidth = 1052;
var imgHeight = 10000;

// Size of the 'visible' map
var mapWidth = $('#map').width();
var mapHeight = $('#map').height();

var map = $('#map'); // map div
var next = $('#next'); // next pointer button

// A list of pointer
var p1 = new Pointer(134,1700);
var p2 = new Pointer(134,3000);
var p3 = new Pointer(134,4000);
var p4 = new Pointer(134,5000);
var p5 = new Pointer(134,6000);
var p6 = new Pointer(134,7000);
var p7 = new Pointer(134,8000);
var p8 = new Pointer(134,10000);
var p9 = new Pointer(134,11000);
var p10 = new Pointer(134,12000);
var p11 = new Pointer(134,13000);
var p12 = new Pointer(134,15000);
var p13 = new Pointer(134,18000);
var pointers = [p1,p2,p3,p4,p5,p6,p7,p8,p9,p10,p11,p12,p13];

// Pointer counter
var p = 0;

// Move to the next pointer
next.click(function(){
  if(p < pointers.length) {
    move(pointers[p]);
    p++;
  }
});

// Move to the pointer
function move(pointer) {
  x = pointer.x - mapWidth/2;
  y = pointer.y - mapHeight/2;
  x = x > imgWidth ? imgWidth : x;
  y = y > imgHeight ? imgHeight : y;
  x = x < 0 ? 0 : x;
  y = y < 0 ? 0 : y;
    console.log(x);
  x = -x;
  y = -y;
  var position = x + 'px ' + y + 'px';
  map.css({
    'background-position':position
  });
}

// Pointer object
function Pointer(x,y) {
    this.x = x;
    this.y = y;
}