class Events {
    fire(event, payload) {
        events.$emit(event, payload)
    }

    on(event, callback) {
        if (Array.isArray(event)) {
            event.forEach(singleEvent => {
                events.$on(singleEvent, callback)
            })
        } else {
            events.$on(event, callback)
        }
    }
}
export default Events;