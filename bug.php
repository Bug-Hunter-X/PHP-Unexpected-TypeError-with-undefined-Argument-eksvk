function foo(a, b) {
  if (a === null || b === null) {
    return null; 
  }
  return a + b;
}

function bar(a) {
  if (a === null) {
    return null;
  }
  return foo(a, 10);
}

console.log(bar(null)); //null
console.log(bar(5)); //15
console.log(bar(undefined)); //Uncaught TypeError: Cannot read properties of undefined (reading '+')