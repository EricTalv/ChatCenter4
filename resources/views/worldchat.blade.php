@extends('master')

@section('content')
    <!-- TODO: -->
    <!-- [ ] Add Nav Bar -->
    <!-- [ ] Migrate to Design 1.0 -->
    <div>
        <div>
            <a href="{{'/'}}">Back</a>
            <h4 class="title">World Chat</h4>
        </div>
        <hr>
        <div class="chat-app">
            <div class="message-container">
                <ul>
                    <li>stranger: hello</li>
                    <li>stranger: hello</li>
                    <li>stranger: hello</li>
                </ul>
            </div>
                <div class="btn-group w-100">
                    <MessageComposer @send="sendMessage"></MessageComposer>
                    <button type="button" class="btn btn-secondary btn-lg">Send</button>
                </div>
        </div>
    </div>
@endsection

<script>
    import MessageComposer from "../js/components/MessageComposer";
    export default {
        components: {MessageComposer},
        methods: {
            sendMessage(text) {
                console.log(text);
            }
        }
    }
</script>
