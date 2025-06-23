<x-app-layout>
    <div class="max-w-xl mx-auto mt-10 bg-white p-4 rounded shadow">
        <h2 class="text-2xl font-bold mb-4 text-center">🐾 Animal Rescue Chatbot</h2>
        <div id="chatbox" class="h-72 overflow-y-auto border p-3 bg-gray-100 mb-4 rounded"></div>

        <form id="chat-form" class="flex gap-2">
            <input id="message" type="text" class="flex-1 border p-2 rounded" placeholder="Ask anything..." required>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Send</button>
        </form>
    </div>

    <script>
        const form = document.getElementById('chat-form');
        const messageInput = document.getElementById('message');
        const chatbox = document.getElementById('chatbox');

        function appendMessage(sender, text) {
            const msg = document.createElement('div');
            msg.innerHTML = `<strong>${sender}:</strong> ${text}`;
            msg.classList.add('mb-2');
            chatbox.appendChild(msg);
            chatbox.scrollTop = chatbox.scrollHeight;
        }

        form.addEventListener('submit', function (e) {
            e.preventDefault();
            const userMessage = messageInput.value.trim();
            if (!userMessage) return;

            appendMessage('You', userMessage);
            messageInput.value = '';

            fetch('/chatbot', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ message: userMessage })
            })
            .then(res => res.json())
            .then(data => {
                appendMessage('RescueBot', data.reply);
            })
            .catch(() => {
                appendMessage('RescueBot', 'Something went wrong. Please try again.');
            });
        });
    </script>
</x-app-layout>
