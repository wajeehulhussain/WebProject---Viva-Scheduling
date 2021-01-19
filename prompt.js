const Username = document.getElementById('Username')
const password = document.getElementById('password')
const form = document.getElementById('form')
const errorElement = document.getElementById('error')

form.addEventListener('submit', (e) => {
  let messages = []
  if (Username.value === '' || name.value == null) {
    messages.push('Username is required')
  }

  if (password.value.length <= 8) {
    messages.push('Password must be greater than 8 characters.')
  }

  if (password.value.length >= 15) {
    messages.push('Password must be less than 20 characters')
  }

  if (messages.length > 0) {
    e.preventDefault()
    errorElement.innerText = messages.join(' and ')
  }
})
