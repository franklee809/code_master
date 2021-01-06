function iam(input, n = 0) {
  return input
    ? "I am " + "very ".repeat(n) + input
    : x => iam(x, n + 1)
}

console.log(iam()()()()()()('asd'))