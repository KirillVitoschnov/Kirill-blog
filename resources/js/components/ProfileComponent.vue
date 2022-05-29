<template>
    <div class="container">
        <h3 class="profile-title">Профиль</h3>
        <div class="profile-wrapper">
            <div class="profile-avatar">
                <img width="300px"
                     src="https://filestore.community.support.microsoft.com/api/images/f2e55cbf-8316-4d3a-9412-ecd8194b2a72?upload=true"
                     alt="">

                <el-button class="avatar-button"><label for="file">Загрузить аватар</label></el-button>
                <input id="file" type="file" style="display: none;">
            </div>
            <div class="profile-info">
                <el-input
                    class="profile-input"
                    placeholder="Имя"
                    v-model="input1">
                </el-input>
                <el-input
                    class="profile-input"
                    placeholder="Никнейм"
                    v-model="input1">
                </el-input>
                <el-input class="profile-input" placeholder="Email"></el-input>
                <el-select class="profile-input" v-model="value" placeholder="Гендер">
                    <el-option
                        v-for="item in options"
                        :key="item.value"
                        :label="item.label"
                        :value="item.value">
                    </el-option>
                </el-select>
                <div class="profile-birthday">
                    <el-select class="profile-select" v-model="User.year" placeholder="Год рождения" @change="getDays()">
                        <el-option
                            v-for="item in years"
                            :key="item"
                            :label="item"
                            :value="item">
                        </el-option>
                    </el-select>
                    <el-select class="profile-select" v-model="User.mounth" placeholder="Месяц" @change="getDays()">
                        <el-option
                            v-for="(item,index) in months"
                            :key="item"
                            :label="item"
                            :value="index+1">
                        </el-option>
                    </el-select>
                    <el-select class="profile-select" v-model="User.day" placeholder="День">
                        <el-option
                            v-for="item in days"
                            :key="item"
                            :label="item"
                            :value="item">
                        </el-option>
                    </el-select>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            User: {
                day: '',
                mounth: '',
                year: '',
            },
            years: [],
            days: [],
            months: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь']
        }
    },
    mounted() {
        for (let year = 1900; year <= new Date().getFullYear(); year++) {
            this.years.push(year)
        }

    },
    methods: {
        getDays() {
            this.days=[]
            for (let day = 1; day <= new Date(this.User.year, this.User.mounth, 0).getDate(); day++) {
                this.days.push(day)
            }
        }
    }
}
</script>
