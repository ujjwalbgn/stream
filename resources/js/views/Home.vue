<template>
    <div class="container">
        <div class="columns">
            <div class="column">
                <div class="message" v-for="status in statuses">
                    <div class="message-header">
                        <p>
                                {{status.user.name}} said...
                        </p>

                        <p>
                           {{status.created_at | ago }}
                        </p>

                    </div>

                    <div class="message-body" v-text="status.body">
                        I'm an example component!
                    </div>
                </div>
                <add-to-stream @completed="addStatus"></add-to-stream>
            </div>
        </div>
    </div>
</template>

<script>
    import moment from 'moment';
    import AddToStream from '../components/AddToStream';

    export default {

        components: {AddToStream},

        data(){
            return{
                statuses: []
            }
        },
        filter: {
          ago(date){
              return moment(date).fromNow();

          }
        },
        created() {
            axios.get('statuses')
                .then(({data}) => this.statuses = data);
        },
        methods: {
            addStatus(status){
                this.statuses.unshift(status);

                alert('Your status has been added to the stream. ');

                window.scrollTo(0,0);
            }
        }
    }
</script>
