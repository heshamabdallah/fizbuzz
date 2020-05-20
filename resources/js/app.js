require('./bootstrap')
import Vue from 'vue'
import FizBuzz from './components/FizBuzz'

const app = new Vue({
    el: '#app',
    components: {
        FizBuzz
    }
})
