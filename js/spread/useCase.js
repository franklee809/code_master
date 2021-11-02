// doing things in the new ES6 way

function foo(...args) {
    // `args` is already a real array

    // doing first element in `args`
    args.shift();

    // pass along all of `args` as arguments to console.log
    console.log("🚀 ~ file: useCase.js ~ line 4 ~ foo ~ ...args", ...args)
}

// doing things in the old school pre-ES6 way
function bar() {

    // turn arguments into a real array
    var args = Array.prototype.slice.call(arguments);

    args.push(4, 5);

    // filter out odd numbers
    args = args.filter(function (v) {
        return v % 2 == 0;
    });

    // pass along all of `args` as arguments
    foo.apply(null, args);
}

foo(0, 1, 2, 3);
bar(0, 1, 2, 3);
