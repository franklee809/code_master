/* eslint-disable */
// Simulate the call method of javascript
// @link: https://medium.com/@ankur_anand/implement-your-own-call-apply-and-bind-method-in-javascript-42cc85dba1b

function showProfileForMessage(message) {
    console.log(message, this.name);
}

const obj = {
    name: 'Ankur Anand',
};

// showProfileForMessage.call(obj, 'HIHI'); // normal methods

Function.prototype.myOwnCall = function (someOtherThis) {
    someOtherThis.fnName = this;

    const args = [];

    for (let i = 1, len = arguments.length; i < len; i++) {
        args.push(`arguments[${i}]`);
        console.log('🚀 ~ file: call.js ~ line 22 ~ args', args);
    }

    eval(`someOtherThis.fnName(${args})`);
};

showProfileForMessage.myOwnCall(obj, 'HIHI');
