<div>
    {{-- Success is as dangerous as failure. --}}
    <x-slot name="header">

    </x-slot>
    <div class="container mt-4">
        <div class="messaging">
            <div class="inbox_msg">

                <div class="inbox_people">
                    @livewire('chat.chat-list')
                </div>

                <div class="mesgs">
                    @livewire('chat.chatbox')
                    {{--  @livewire('chat.send-message')  --}}
                </div>

            </div>
        </div>
    </div>
