const grandparent = document.querySelector('.grandparent')
const parent = document.querySelector('.parent')
const child = document.querySelector('.child')


grandparent.addEventListener('click', (e) => {
    // console.log(e.target.className)
    console.log("grandparent")
}, {capture: true})

parent.addEventListener('click', (e) => {
    // console.log(e.target.className)
    console.log("parent")

})

child.addEventListener('click', (e) => {
    // console.log(e.target.className)
    console.log("child")

})