// Create an empty regular function:
function FnReturningNothing() {}

// Invoke "FnReturningNothing()":
FnReturningNothing()
// Output:
// undefined

// Create a regular function without return statement:
function fnWithoutStatement() {
  const randomNumber = Math.floor(Math.random() * 100)
}

// Invoke "fnWithoutStatement()":
console.log(fnWithoutStatement());
// Output:
// undefined

// Create a regular function with return statement:
function fnWithStatement() {
  const randomNumber = Math.floor(Math.random() * 100)

  return randomNumber
}

// Invoke "fnWithStatement()":
console.log(fnWithStatement())
// Output:
// 7