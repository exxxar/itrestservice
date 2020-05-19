<template>
    <div style="padding: 2rem 3rem; text-align: left;">
        <div class="field">
            <label class="label">Вы...</label>
            <div class="control">
                <select :class="['input', ($v.form.type.$error) ? 'is-danger' : '']" v-model="form.type">
                    <option v-for="item in typeList" :value="item.id">{{item.title}}</option>
                </select>
            </div>
            <p v-if="$v.form.type.$error" class="help is-danger">Тип пользователя не выбран!</p>
        </div>
        <div class="field">
            <label class="label">Ваш Ф.И.О.</label>
            <div class="control">
                <input :class="['input', ($v.form.name.$error) ? 'is-danger' : '']" type="text"
                       placeholder="Введите ваше Ф.И.О."
                       v-model="form.name">
            </div>
            <p v-if="$v.form.name.$error" class="help is-danger">Имя пользователя не соответствует требованиям</p>
        </div>
        <div class="field">
            <label class="label">Укажите ваш номер телефона</label>
            <div class="control">
                <input :class="['input', ($v.form.phone.$error) ? 'is-danger' : '']" type="text"
                       placeholder="Ваш номер телефона"
                       v-model="form.phone"
                       v-mask="['+38 (###) ###-##-##']"
                >
            </div>
            <p v-if="$v.form.phone.$error" class="help is-danger">Ваш телефон не соответствует требованиям</p>
        </div>

        <label class="container">Мне нужен домен и хостинг<span class="badge">от 3000 ₽</span>
            <input type="checkbox"
                   v-model="form.need_domain_hosting">
            <span class="checkmark"></span>
        </label>
        <div class="field" v-if="form.need_domain_hosting">
            <label class="label">Желаемое имя домена</label>
            <div class="control">
                <input :class="'input'" type="text"
                       placeholder="Например, example.com"
                       v-model="form.domain_name">
            </div>
        </div>

        <label class="container">Мне понадобится отслеживать работу сайта через CRM<span class="badge">от 10000 ₽</span>
            <input type="checkbox"
                   v-model="form.need_crm">
            <span class="checkmark"></span>
        </label>

        <label class="container">Создать корпоративную почту<span class="badge">от 1000 ₽</span>
            <input type="checkbox"
                   v-model="form.need_email">
            <span class="checkmark"></span>
        </label>

    </div>
</template>

<script>
    import {mask} from 'vue-the-mask'

    import {validationMixin} from 'vuelidate'
    import {required, email} from 'vuelidate/lib/validators'

    export default {
        directives: {mask},
        props: ['clickedNext', 'currentStep'],
        mixins: [validationMixin],
        data() {
            return {
                typeList: [
                    {title: "Владелец ресторана", id: 1},
                    {title: "Владелец магазина", id: 2},
                    {title: "Предоставляю услуги", id: 3},
                    {title: "Другое", id: 4},
                ],
                form: {
                    name: '',
                    phone: '',
                    message: '',
                    type: 1,
                    need_domain_hosting:false,
                    need_crm:false,
                    need_email:false,
                    domain_name:''
                }
            }
        },
        validations: {
            form: {
                name: {
                    required
                },
                phone: {
                    required
                },
                type: {
                    required
                }
            }
        },
        watch: {
            $v: {
                handler: function (val) {
                    if (!val.$invalid) {
                        this.$emit('can-continue', {value: true});
                    } else {
                        this.$emit('can-continue', {value: false});
                        setTimeout(() => {
                            this.$emit('change-next', {nextBtnValue: false});
                        }, 3000)
                    }
                },
                deep: true
            },
            clickedNext(val) {
                console.log(val);
                if (val === true) {
                    this.$v.form.$touch();
                }
            }
        },
        mounted() {
            if (!this.$v.$invalid) {
                this.$emit('can-continue', {value: true});
            } else {
                this.$emit('can-continue', {value: false});
            }
        }
    }
</script>
