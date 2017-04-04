<template>
    <div class="nav-tabs-custom">
        <div class="progress progress-sm active">
            <div class="progress-bar progress-bar-success progress-bar-striped"
                 role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
                 style="width: 25%">
                <span class="sr-only">25% Complete</span>
            </div>
        </div>

        <ul class="nav nav-tabs nav-justified">
            <li v-for="step in steps" :class="{'active':step.active}" @click="stepChanged($event.target.id)">
             <a :href="step.link" :id="step.id" :aria-controls="step.id" data-toggle="tab">{{step.title}}</a>
            </li>
        </ul>
        <div class="tab-content">
            <slot></slot>
        </div>
        <div class="box-footer">

            <button type="submit" class="btn btn-primary btn-flat pull-left">Previous</button>
            <button type="submit" class="btn btn-primary btn-flat pull-right">Next</button>

        </div>
    </div>
</template>

<script>
  import {store} from './Store';
  export default {
    data () {
      return {
        steps: [],
        currentStep: store.currentStep
      }
    },
    mounted() {
      console.log('Component mounted.')
      this.$children.forEach( step => {
        if (step.active) {
          this.currentStep = step.id
        }
        this.steps.push(step);
      })
    },
    methods: {
      stepChanged: function(step) {
        store.currentStep = step;
      }
    }
  }
</script>
