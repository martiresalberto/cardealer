<template>

<form-wizard>
    <tab-content title="Detalles personales">
        Primer paso
    </tab-content>
    <tab-content title="Información adicional">
        Segundo paso
    </tab-content>
    <tab-content title="Verificación">
        Tercer paso
    </tab-content>
</form-wizard>

</template>

<script>

import {FormWizard, TabContent} from 'vue-form-wizard'
import 'vue-form-wizard/dist/vue-form-wizard.min.css'
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        components: {
            FormWizard,
            TabContent
        }
    }
</script>


