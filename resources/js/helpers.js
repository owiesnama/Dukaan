import  Vue from 'vue'
function lang(key){
    key = key.split('.')
    console.log(key)
    return 'ssss'
}

Vue.prototype.lang = lang
