const o1 = {
    foo() {
        console.log('this is o1');
    },
};

const o2 = {
    foo() {
        super.foo();
        console.log('this is o2');
    },
};

// console.log('🚀 ~ file: prototype.js ~ line 14 ~ o2', o2.foo());
// TypeError: (intermediate value).foo is not a function

Object.setPrototypeOf(o2, o1);
console.log('🚀 ~ file: prototype.js ~ line 18 ~ o2', o2.foo());
console.table(Object.keys(o2));
