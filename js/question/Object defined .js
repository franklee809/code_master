// Object.defineProperty and Proxy

/**
 * Sample 1
 */
let obj = {
    get a(){
      console.log('triggle get a() method');
      console.log('you can do anything as you want');
      return 1
    },
    set a(value){
      console.log('triggle set a() method');
      console.log('you can do anything as you want');
      console.log(`you are trying to assign ${value} to obj.a`);
    }
  }

obj.a
obj.a = 123;


/**
 * Sample 2
 */
// let obj = {
//     _initValue: 0,
//     get a() {
//       this._initValue++;
//       return this._initValue
//     }
//   }

// console.log(obj.a, obj.a, obj.a)


/**
 * Object.defineProperty
 */

// let obj = {}
// Object.defineProperty(obj, 'a', {
//   get: (function(){
//     let initValue = 0;
//     return function(){
//       initValue++;
//       return initValue
//     }
//   })()
// })
// console.log(obj.a, obj.a, obj.a)