function replacer(key, value) {
    // Filtering out properties
    if (typeof value === 'string') {
      return undefined;
    }
    return value;
  }

  // var foo = {foundation: 'Mozilla', model: 'box', week: 45, transport: 'car', month: 7};
  // console.log(JSON.stringify(foo, null, '\t'));

let n = parseFloat('123.00');

console.log(n)
console.log(Number(n) === n && n % 1 !== 0);