//array.map
let rectangles = [
    {width: 10, height: 2},
    {width: 2, height: 3},
    {width: 3, height: 4}
]

let c = rectangles.map(({width, height}) => width*height)
console.log(c)
let arr = [1, 2, 3, 4];
//array.find
arr.find(() => {});

//array.reduce
let a = arr.reduce((x, y) => x + y);

console.log(a);
//gio hang
var orders = [
  { name: "a", quantity: 2, price: 100 },
  { name: "b", quantity: 2, price: 100 },
  { name: "c", quantity: 5, price: 15 },
];
//dung reduce de tinh tong cua don hang

let b = orders.map(({price, quantity}) => price*quantity).reduce((price1, price2) => price1+price2)

console.log(b)