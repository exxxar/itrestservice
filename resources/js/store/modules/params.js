const state = {
    params: null//localStorage.getItem('vuejs__params') == null ? [] : JSON.parse(localStorage.getItem('vuejs__params')),
}

// getters
const getters = {
    getParams: (state, getters, rootState) => {
        return state.params;
    },
}

// actions
const actions = {
  /*  getParams({state, commit}) {
        state.params = localStorage.getItem('vuejs__params') == null ? [] : JSON.parse(localStorage.getItem('vuejs__params'))
        return state.params
    },*/
    setParams({state, commit}, product) {
        commit('setParamsTest', product);
        localStorage.setItem('vuejs__params', JSON.stringify(state.items));
    },

}

// mutations
const mutations = {
    setParamsTest(state, params) {
       state.params = params
    },
}

export default {
    state,
    getters,
    actions,
    mutations
}
