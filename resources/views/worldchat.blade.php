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
                    <message-composer></message-composer>
                </div>
        </div>
    </div>
@endsection

