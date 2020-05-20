<template>
    <div class="pt-3 fizbuzz-container">
        <div class="container shadow p-5">
            <div class="main-title text-center mb-3">
                Fiz-Buzz Test
            </div>
            <div class="items-container">
                <span v-for="(item, itemIndex) in fizBuzz" :key="itemIndex">
                    <span :class="getItemClass(itemIndex)">
                        {{ item }}
                    </span>
                </span>
            </div>
        </div>
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
        },
        getItemClass(itemIndex) {
            let value = itemIndex + 1
            if (value % 15 === 0) {
                return 'item-fizbuzz'
            } else if (value % 3 === 0) {
                return 'item-fizz'
            } else if (value % 5 === 0) {
                return 'item-buzz'
            }

            return null
        }
    },
    created() {
        this.fetchFizBuzzData()
    }
}
</script>

<style lang="scss" scoped>
.fizbuzz-container {
    .main-title {
        font-size: 30px;
    }
    .items-container {
        .item-fizbuzz {
            color: #43aa8b;
            font-weight: bold;
        }
        .item-fizz {
            color: #0077b6;
        }
        .item-buzz {
            color: #ee6c4d;
        }
    }
}
</style>
