<template>
    <div style="padding: 2rem 3rem; text-align: left;">
        <h3>Телеграм бот</h3>
        <div class="field">
            <label class="label">Выбор типа бота</label>
            <div class="control">
                <select :class="'input'" v-model="form.bot_type">
                    <option v-for="item in telegram_bot_type" :value="item.id">{{item.title}} ({{item.price}} ₽)
                    </option>
                </select>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-6 col-sm-12 col-12 col-lg-6 td" v-for="(tls, index) in telegram_loyalty_system">

                <label class="container" v-tooltip="tls.description">{{tls.title}}<span
                    class="badge">{{tls.price}} ₽</span>
                    <input type="checkbox"
                           :value="tls.id" v-model="form.loyalty_system_type">
                    <span class="checkmark"></span>
                </label>

            </div>

        </div>
        <h3>Продающая страница</h3>
        <div class="row mt-2">
            <div class="col-md-6 col-sm-12 col-12 col-lg-6 td" v-for="(lpt, index) in landing_page_type">

                <label class="container">{{lpt.title}}<span class="badge">{{lpt.price}} ₽</span>
                    <input type="checkbox"
                           :value="lpt.id" v-model="form.landing_page_type">
                    <span class="checkmark"></span>
                </label>

            </div>

        </div>
        <h3>Настройка рекламы</h3>
        <div class="row mt-2">
            <div class="col-md-6 col-sm-12 col-12 col-lg-6 td" v-for="(pt, index) in promotion_type">

                <label class="container" v-tooltip="pt.description">{{pt.title}}<span
                    class="badge">{{pt.price}} ₽</span>
                    <input type="checkbox"
                           :value="pt.id" v-model="form.promotion_type">
                    <span class="checkmark"></span>
                </label>

            </div>

        </div>
        <h3>Разработка дизайна</h3>
        <div class="row mt-2">
            <div class="col-md-6 col-sm-12 col-12 col-lg-6 td" v-for="(dt, index) in design_type">

                <label class="container" v-tooltip="dt.description">{{dt.title}}<span
                    class="badge">{{dt.price}} ₽</span>
                    <input type="checkbox"
                           :value="dt.id" v-model="form.design_type">
                    <span class="checkmark"></span>
                </label>

            </div>

        </div>
        <h3>SMM</h3>
        <div class="row mt-2">
            <div class="col-md-6 col-sm-12 col-12 col-lg-6 td" v-for="(st, index) in smm_type">

                <label class="container" v-tooltip="st.description">{{st.title}}<span
                    class="badge">{{st.price}} ₽</span>
                    <input type="checkbox"
                           :value="st.id" v-model="form.smm_type">
                    <span class="checkmark"></span>
                </label>

            </div>

        </div>
    </div>
</template>

<script>
    import {mask} from 'vue-the-mask'

    import {validationMixin} from 'vuelidate'

    export default {
        directives: {mask},
        props: ['clickedNext', 'currentStep'],
        data() {
            return {
                telegram_bot_type: [
                    // {id: 0, title: "Бот не нужен", price: 0, description: "Test"},
                    {id: 1, title: "Информационный бот", price: 1000, description: "Test"},
                    {id: 2, title: "Квестовый бот", price: 5000, description: "Test"},
                    {id: 3, title: "Бот интернет-магазин", price: 10000, description: "Test"},
                ],
                telegram_loyalty_system: [
                    {id: 1, title: "Система скидок", price: 0, description: "Test sdada sda "},
                    {id: 2, title: "Система CashBack", price: 100, description: "Test asda dasdasd a"},
                    {id: 3, title: "Система Акция и мероприятий", price: 200, description: "Test da dad asd asd asda"},
                    {id: 4, title: "Система Достижений", price: 300, description: "Test"},
                    {id: 5, title: "Воронка продаж (через квиз)", price: 400, description: "Test"},
                    {id: 6, title: "Система заданий", price: 500, description: "Test"},
                    {id: 7, title: "Система благотворительности", price: 600, description: "Test"},
                    {id: 8, title: "Система Instagram-заданий", price: 700, description: "Test"},
                    {id: 9, title: "Система промокодов", price: 700, description: "Test"},
                ],
                landing_page_type: [
                    {id: 1, title: "Простая продающая страница", price: 1000, description: "Test"},
                    {id: 2, title: "+ калькулятор цены", price: 5000, description: "Test"},
                    {id: 3, title: "+ лотерея призов", price: 5000, description: "Test"},
                    {id: 4, title: "+ автоматический расчет цены доставки", price: 5000, description: "Test"},
                    {id: 5, title: "+ корзина товаров", price: 5000, description: "Test"},
                    {id: 6, title: "+ загрузка товаров из вконтакте", price: 5000, description: "Test"},
                    {id: 7, title: "+ загрузка товаров из вконтакте", price: 5000, description: "Test"},
                    {id: 8, title: "+ sms подтверждение заказа", price: 5000, description: "Test"},
                    {id: 9, title: "+ sms рассылка", price: 5000, description: "Test"},
                    {id: 10, title: "+ реальные отзывы из вк", price: 5000, description: "Test"},
                    {id: 11, title: "+ галлерея из вк", price: 5000, description: "Test"},
                ],
                design_type: [
                    {id: 1, title: "Разработка бренда", price: 1000, description: "Test"},
                    {id: 2, title: "Формирование бренд-бука", price: 1000, description: "Test"},
                    {id: 3, title: "Отрисовка дизайна сайта", price: 1000, description: "Test"},
                    {id: 4, title: "Отрисовка визиток", price: 1000, description: "Test"},
                    {id: 5, title: "Отрисовка рекламных листовок", price: 1000, description: "Test"},
                ],
                promotion_type: [
                    {id: 1, title: "Настройка рекламы в VK", price: 1000, description: "Test"},
                    {id: 2, title: "Настройка рекламы в Instagram", price: 1000, description: "Test"},
                    {id: 3, title: "Настройка рекламы Google", price: 1000, description: "Test"},
                    {id: 4, title: "Настройка рекламы Yandex", price: 1000, description: "Test"},
                ],
                smm_type: [
                    {id: 1, title: "Оформление группы в VK", price: 1000, description: "Test"},
                    {id: 2, title: "Оформление аккаунта Instagram", price: 1000, description: "Test"},
                    {id: 3, title: "Разработка маски для Instagram", price: 1000, description: "Test"},
                    {id: 4, title: "Съемка рекламных роликов", price: 1000, description: "Test"},

                ],
                form: {
                    bot_type: 1,
                    has_loyalty_system: false,
                    loyalty_system_type: [],
                    landing_page_type: [],
                    promotion_type: [],
                    design_type: [],
                    smm_type: [],
                    name: '',
                    phone: '',
                    message: '',
                    type: 1
                }
            }
        },

        mounted() {
            this.$emit('can-continue', {value: true});
        }

    }
</script>

