
//Mobile menu handling
const menuIconClosed = document.getElementById('menu-icon-closed')
const menuIconOpen = document.getElementById('menu-icon-open')
const backToPage = document.getElementById('back-to-page')
const menu = document.getElementById('menu')

const buttons = [menuIconClosed, menuIconOpen, backToPage]

buttons.forEach(item => {
    item.addEventListener('click', () => {
        if (item === buttons[2]) { //After form send go back to contact page
            window.location = 'http://localhost/pages/contact.php'
        }
        else if (item === buttons[0]) {
            menu.classList.toggle('mobile-menu-open')
            menuIconClosed.classList.toggle('closed')
            menuIconOpen.classList.toggle('open')
            menuIconClosed.classList.remove('default')
            menuIconOpen.classList.remove('hidden')
        } 
        else if (item === buttons[1]) {
            menu.classList.toggle('mobile-menu-open')
            menuIconClosed.classList.toggle('default')
            menuIconOpen.classList.toggle('hidden')
            menuIconClosed.classList.remove('closed')
            menuIconOpen.classList.remove('open')
        }
    })
})


