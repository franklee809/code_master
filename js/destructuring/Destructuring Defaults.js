// Destructuring Defaults + Parameter Defaults

function f6({ x = 10 } = {}, { y } = { y: 10 }) {
    console.log(x, y);
}

f6();
f6(undefined, undefined);
f6({}, undefined);
f6({}, {});
f6(undefined, {});
f6({ x: 2 }, { y: 3 });
