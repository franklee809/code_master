
/**
 * ? call() methods - example 1
 *
 */

// let getName = function() {
//     console.log(this.address);
// }

// let user = {
//   name: 'Tapas',
//   address: 'Freecodecamp'
// };

// getName.call(user);


/**
 * ? call() methods - example 2
 */
// let getName2 = function(hobby1, hobby2) {
//     console.log(this.name + ' likes ' + hobby1 + ' , ' + hobby2);
// }

// let user2 = {
//   name: 'Tapas',
//   address: 'Bangalore'
// };

// let hobbies = ['Swimming', 'Blogging'];

// getName2.call(user2, hobbies[0], hobbies[1]);


/**
 *  ? compare apply() with previous call() method
 */
// let getName = function(hobby1, hobby2) { // * difference of call and apply is here
//     console.log(this.name + ' likes ' + hobby1 + ' , ' + hobby2);
// }

// let user = {
//   name: 'Tapas',
//   address: 'Bangalore'
// };

// let hobbies = ['Swimming', 'Blogging'];

// getName.apply(user, hobbies);


/**
 * ? bind() methods  : not invoke immediately
 */
// let getName = function(hobby1, hobby2) {
//     console.log(this.name + ' likes ' + hobby1 + ' , ' + hobby2);
// }

// let user = {
//   name: 'Tapas',
//   address: 'Bangalore'
// };

// let hobbies = ['Swimming', 'Blogging'];
// let invoke = getName.bind(user, hobbies[0], hobbies[1]);

// invoke();

/**
 * ? `new` keyword
 * @param {*} name
 * @param {*} animal
 */
let Cartoon = function(name, animal) {
    this.name = name;
    this.animal = animal;
    this.log = function() {
        console.log(this.name +  ' is a ' + this.animal);
    }
};

let tom = new Cartoon('Tom', 'Cat');
let jerry = new Cartoon('Jerry', 'Mouse');

console.log(tom.animal);
