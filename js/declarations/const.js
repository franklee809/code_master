// Constant for Arrays
{
    const a = [1,2,3];
    a.push(4);
    console.log("🚀 ~ file: const.js ~ line 5 ~ a", a)

    a = 42;
    // a variable doesn't hold a constant array, but a constant reference to the array.
    // value with constant will never able to be garbage collected, since the reference to the value can never be unset.
}


// Constant declarations
{
    const a = 2;
    console.log(a);  // 2

    a = 3;   // Type error
}
