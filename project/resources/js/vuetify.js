import { createVuetify } from 'vuetify'
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'

const customTheme = {
    colors: {
        primary: '#673ab7',
        secondary: '#424242',
    }
}

const vuetify = createVuetify({
    components,
    directives,
    theme: {
        defaultTheme: 'customTheme',
        themes: {
            customTheme
        }
    }
})

export default vuetify;