let log = console.log;

let obj = {
    name: 'Bob',
    age : 15
};

Object.defineProperty(obj, '_name', {
    // value: 'Bob 2', // cannot be filled when use getter/setter
    enumerable: true,
    // writable: true, // cannot be filled when use getter/setter
    configurable: true,
    get: () => {
        return this.value;
    },
    set: (value) => {
        this.value = value;
    }
});

// Object.defineProperties(obj, {
//     name: {
//         value: 'Bob 3',
//         enumerable: true,
//         writable: false,
//         configurable: true,
//         get: () => {
//             return this.name;
//         },
//         set: (value) => {
//             this.name = value;
//         }
//     },
//     age: {
//         value: 20,
//         enumerable: true,
//         writable: false,
//         configurable: true,
//         get: () => {
//             return this.age;
//         },
//         set: (value) => {
//             this.age = value;
//         }
//     }
// });

// log(Object.getOwnPropertyNames(obj));
// log(Object.isExtensible(obj));
// log(Object.isFrozen(obj));
// log(Object.isSealed(obj));

// Object.preventExtensions(obj) // cannot add properties to it
// Object.freeze(obj)
// Object.seal(obj)
log(obj.name = 212);
log(obj)
// log(obj.name);
// log(obj.age);
// log(obj._name);


// log(obj);
// log(obj._name = 1);
// log(obj._name);