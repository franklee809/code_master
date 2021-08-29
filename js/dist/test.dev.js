"use strict";

// Interview Question 1
// const a = [1,2,3,4,5,6,7,8,9,10]
// Array.prototype.multiply = function(){
//     this.push(...this.map(x=> x*x));
//     return this;
// }
// console.log(a.multiply());
// Array.prototype.multiply = function(){
//     Object.assign(this, [...this, ...this.map(n => n * n)])
// }
// a.multiply();
// console.log(a);
// Interview Question 2
// let lang = "JS";
// (function(){
//     let lang = "python";
// })();
// console.log(lang);
// const arr = ['1','2','3','4'];
// if(arr.includes('1')==true){
//     console.log(arr[0]);
// }
// const arr = [];
// arr.forEach((val,i,arr)=>{
//     console.log(val)
// })
// min/max number in an array
var numbers = [5, 6, 2, 3, 7]; // using Math.min/Math.max apply

var max = Math.max.apply(null, numbers); // console.log(max);
// This about equal to Math.max(numbers[0], ...)
// or Math.max(5, 6, ...)

var min = Math.min.apply(null, numbers); // // vs. simple loop based algorithm
// max = -Infinity, min = +Infinity;
// for (let i = 0; i < numbers.length; i++) {
//   if (numbers[i] > max) {
//     max = numbers[i];
//   }
//   if (numbers[i] < min) {
//     min = numbers[i];
//   }
// }
// Comparing two values
// var a = {a:1}, b = {a:2};
// console.log(Object.is(a,b))
// var json =  {
//     2548: {
//     album: "Slippery When Wet",
//     artist: "Bon Jovi",
//     tracks:[]
//   }
// }
// if(json[2548].hasOwnProperty("tracks") ){
//     json[2548]['tracks'].push('123');
//     console.log(json[2548].tracks)
// }
// function bar(){
//   return foo;
//   foo =10;
//   function foo(){
//     var foo = '11';
//   }
// }
// console.log(typeof bar())
// const a = (x,y,z)=> {return {x,y,z}}
// console.log(a(1,2,3))
// let users = {
//     Alan: {
//       age: 27,
//       online: true
//     },
//     Jeff: {
//       age: 32,
//       online: true
//     },
//     Sarah: {
//       age: 48,
//       online: true
//     },
//     Ryan: {
//       age: 19,
//       online: true
//     }
//   };
// let obj = { Jeff: { age: 32, online: true },
// Sarah: { age: 48, online: true },
// Ryan: { age: 19, online: true } }
// console.log(Object.keys(users).every(val=> obj.hasOwnProperty(val)));
// var a = {1:2};
// console.log(Object.values(a));
// console.log(3//2);
// Optional parameter for Object ES6;
// function foo(required, { optionalA, optionalB } = { }) {
//     //available variables:
//     //required, optionalA, optionalB
//     console.log(optionalA)
//     console.log(optionalB)
//   }
//   foo('hi', { optionalA: 1 });
//   foo('hi', { optionalA: 1, optionalB: 1337 });
// let scores = [1,2,3,4,5,6,7,8,9,10,99,100]
// let score = scores.find(val => val > 90)
// console.log(score)
// let a ={"refShopUsername":"lee","shopUsername":"franklee808888","countryCode":"60","phoneNum":"0143076093","OTPNum":"12323","shopName":"jdaskjdkasdkj","password":"123","confirmPassword":"123","businessEmail":"franklee809@gmail.com","picName":"lee ","picPhone":"014032093293","businessAddress":"fdgfdfgdfg","businessLocalCountry":105,"postcode":"23456","businessName":"r3r3r3r3","businessRegistration":"rwerwfdf","businessCategory":"Fashion","otherPlatform":"sdfsdf","businessOverview":"sdfsdfdsfs","bankName":"asdadas","accountName":"lweklwkelw","accountNo":"123123123","businessCountry":"Indonesia"};
// let b = Object.keys(a).reduce((a,val) => a+ 1, 0)
// console.log(b);

var a = {
  data1: {
    status: 200
  }
};
var _a$data = a.data,
    data = _a$data === void 0 ? 200 : _a$data;
console.log(data);
console.log(new Date(Date.now()));