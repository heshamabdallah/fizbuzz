<template>
    <div>
        FizBuzz page!!
    </div>
</template>

<script>
import axios from 'axios'
export default {
    data: () => ({
        fizBuzz: []
    }),
    methods: {
        fetchFizBuzzData() {
            axios.get('/fizbuzz').then(({ data }) => {
                this.fizBuzz = data.data
            })
        }
    },
    created() {
        this.fetchFizBuzzData()
    }
}
</script>

<style type="scss" scoped>

</style>
