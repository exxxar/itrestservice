<template>
    <section class="section calc">
        <div class="container">
            <div class="columns">
                <div class="column is-8 is-offset-2">
                    <horizontal-stepper :steps="demoSteps"
                                        :locale="'ru'"
                                        @completed-step="completeStep"
                                        @active-step="isStepActive" @stepper-finished="alert"
                    >
                    </horizontal-stepper>
                </div>
            </div>
        </div>
    </section>
</template>
<script>

    import HorizontalStepper from 'vue-stepper';

    // This components will have the content for each stepper step.
    import StepOne from './stepper/StepOne.vue';
    import StepTwo from './stepper/StepTwo.vue';
    import StepThree from './stepper/StepThree.vue';

    export default {
        components: {
            HorizontalStepper
        },
        data(){
            return {
                demoSteps: [
                    {
                        //icon: 'mail',
                        name: 'first',
                        title: 'Шаг 1',
                        subtitle: 'Информация о вас',
                        component: StepOne,
                        completed: true

                    },
                    {
                        //icon: 'mail',
                        name: 'second',
                        title: 'Шаг 2',
                        subtitle: 'Расчет стоимости',
                        component: StepTwo,
                        completed: false

                    },
                    {
                       // icon: 'report_problem',
                        name: 'third',
                        title: 'Шаг 3',
                        subtitle: 'Оформление заявки',
                        component: StepThree,
                        completed: false
                    }
                ]
            }
        },
        methods: {
            // Executed when @completed-step event is triggered
            completeStep(payload) {
                this.demoSteps.forEach((step) => {
                    if (step.name === payload.name) {
                        step.completed = true;
                    }
                })
            },
            // Executed when @active-step event is triggered
            isStepActive(payload) {
                this.demoSteps.forEach((step) => {
                    if (step.name === payload.name) {
                        if(step.completed === true) {
                            step.completed = false;
                        }
                    }
                })
            },
            // Executed when @stepper-finished event is triggered
            alert(payload) {
                alert('end')
            }
        }
    }
</script>

<style lang="scss" >
    .stepper-box .top .steps-wrapper .step .circle i {
        background-color:#8d3e9e !important;
        border-radius: 5px !important;
        display: table !important;
    }

    .calc input[type="checkbox"],
    .calc input[type="radio"] {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
    }

    .calc .container {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 12px;
        cursor: pointer;
        font-size: 14px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;

        color: blueviolet;
        text-align: left;
        font-weight: 800;
    }

    .calc .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 25px;
        width: 25px;
        background-color: #eee;
    }

    .calc .container:hover input ~ .checkmark {
        background-color: #ccc;
    }

    .calc .container:hover input:disabled:not(:checked) ~ .checkmark {
        background-color: rgba(31, 0, 8, 0.77);
    }

    .calc .container input:checked ~ .checkmark {
        background-color: blueviolet;
    }

    .calc .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    .calc input:checked ~ .checkmark:after {
        display: block;
    }

    .calc .checkmark:after {
        left: 9px;
        top: 5px;
        width: 5px;
        height: 10px;
        border: solid white;
        border-width: 0 3px 3px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    .calc [type=radio] {
        position: absolute;
        opacity: 0;
        width: 0;
        height: 0;
    }

    .calc [type=radio] + img {
        cursor: pointer;
        width: 100%;
        height: 100%;
        border: 5px solid transparent;
    }

    .calc [type=radio]:checked + img {
        border: 5px solid blueviolet;
    }

    span.badge {
        font-size: 8px;
        background: #8d3e9e;
        padding: 5px;
        position: relative;
        margin-left: 10px;
        color: white;
    }


    .tooltip {
        display: block !important;
        z-index: 10000;

        .tooltip-inner {
            background: black;
            color: white;
            border-radius: 5px;
            min-width: 100px;
            width: 100%;
            text-align: center;
            padding: 5px 10px 4px;
        }

        .tooltip-arrow {
            width: 0;
            height: 0;
            border-style: solid;
            position: absolute;
            margin: 5px;
            border-color: black;
            z-index: 1;
        }

        &[x-placement^="top"] {
            margin-bottom: 5px;

            .tooltip-arrow {
                border-width: 5px 5px 0 5px;
                border-left-color: transparent !important;
                border-right-color: transparent !important;
                border-bottom-color: transparent !important;
                bottom: -5px;
                left: calc(50% - 5px);
                margin-top: 0;
                margin-bottom: 0;
            }
        }

        &[x-placement^="bottom"] {
            margin-top: 5px;

            .tooltip-arrow {
                border-width: 0 5px 5px 5px;
                border-left-color: transparent !important;
                border-right-color: transparent !important;
                border-top-color: transparent !important;
                top: -5px;
                left: calc(50% - 5px);
                margin-top: 0;
                margin-bottom: 0;
            }
        }

        &[x-placement^="right"] {
            margin-left: 5px;

            .tooltip-arrow {
                border-width: 5px 5px 5px 0;
                border-left-color: transparent !important;
                border-top-color: transparent !important;
                border-bottom-color: transparent !important;
                left: -5px;
                top: calc(50% - 5px);
                margin-left: 0;
                margin-right: 0;
            }
        }

        &[x-placement^="left"] {
            margin-right: 5px;

            .tooltip-arrow {
                border-width: 5px 0 5px 5px;
                border-top-color: transparent !important;
                border-right-color: transparent !important;
                border-bottom-color: transparent !important;
                right: -5px;
                top: calc(50% - 5px);
                margin-left: 0;
                margin-right: 0;
            }
        }

        &.popover {
            $color: #f9f9f9;

            .popover-inner {
                background: $color;
                color: black;
                padding: 24px;
                border-radius: 5px;
                box-shadow: 0 5px 30px rgba(black, .1);
            }

            .popover-arrow {
                border-color: $color;
            }
        }

        &[aria-hidden='true'] {
            visibility: hidden;
            opacity: 0;
            transition: opacity .15s, visibility .15s;
        }

        &[aria-hidden='false'] {
            visibility: visible;
            opacity: 1;
            transition: opacity .15s;
        }
    }

</style>
