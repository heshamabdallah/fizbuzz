require('./bootstrap')
import Vue from 'vue'

const app = new Vue({
    el: '#app',
    created() {
        console.log('started!!')
    }
})
