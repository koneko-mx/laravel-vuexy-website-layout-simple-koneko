var code = `tailwind.config = {
    darkMode: 'class',
    theme: {
      extend: {}
    }
  }`

try {
    eval(code)

} catch (e) {
    console.log('Error in tailwind css config')

    eval(`tailwind.config = {
        darkMode: 'class',
        theme: {
            extend: {}
        }
    }`)
}
