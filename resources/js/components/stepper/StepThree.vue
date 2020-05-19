<template>
    <div style="padding: 2rem 3rem; text-align: left;">
        <h2>Напишите комменатрий для нашего менеджера</h2>
        <div class="field">
            <label class="label">Ваш комменатрий</label>
            <div class="control">
                <textarea :class="['input', ($v.form.message.$error) ? 'is-danger' : '']"
                       placeholder="Текст вашего комментария"
                       v-model="form.message"
                >
                </textarea>
            </div>
            <p v-if="$v.form.message.$error" class="help is-danger">Вы не заполнили данное поле</p>
        </div>



    </div>
</template>

<script>

    import {validationMixin} from 'vuelidate'
    import {required, email} from 'vuelidate/lib/validators'

    export default {
        props: ['clickedNext', 'currentStep'],
        mixins: [validationMixin],
        data() {
            return {

                form: {

                    message: '',

                }
            }
        },
        validations: {
            form: {
                message: {
                    required
                },

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
