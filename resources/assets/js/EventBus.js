// Create a global Event Bus
var EventBus = new Vue();

//EventBus
// Add to Vue properties by exposing a getter for $bus
Object.defineProperties(Vue.prototype, {
  $bus: {
    get: function () {
      return EventBus;
    }
  }
});
