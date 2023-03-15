const login = document.getElementById('login')
const password = document.getElementById('password')
const btn = document.getElementById('btn')
// const table = document.querySelectorAll('grade')

// alert('sad')

btn.addEventListener('click', function () {
    var log = Math.random().toString(36).slice(-5);
    var pas = Math.random().toString(36).slice(-5);
    login.value = log;
    password.value = pas;
})

// console.log(table)
