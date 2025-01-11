@if (session('success') || $errors->any())
    <div id="alert-message" 
         class="fixed top-4 right-4 z-50 max-w-xs p-4 rounded-lg shadow-lg transition-all duration-700 ease-in-out transform opacity-0 translate-x-full 
                {{ session('success') ? 'bg-green-500 text-white' : 'bg-red-800 text-white' }}">
        <div class="flex items-start">
            <div class="flex-grow">
                <p class="font-bold">{{ session('success') ?? $errors->first() }}</p>
            </div>
            <button id="close-alert" 
                    class="ml-4 text-lg leading-none hover:text-gray-200">
                &times;
            </button>
        </div>
    </div>
@endif

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const alertMessage = document.getElementById('alert-message');
        const closeAlert = document.getElementById('close-alert');

        if (alertMessage) {
            // Exibir o alerta com animação suave
            setTimeout(() => {
                alertMessage.classList.remove('opacity-0', 'translate-x-full');
                alertMessage.classList.add('opacity-100', 'translate-x-0');
            }, 100);  // Retarda a animação de aparecimento

            // Auto-hide o alerta após 2,5 segundos
            setTimeout(() => {
                alertMessage.classList.add('opacity-0', '-translate-x-full');
                setTimeout(() => alertMessage.remove(), 500); // Remove após a animação
            }, 2500); 

            // Fechar manualmente o alerta
            closeAlert.addEventListener('click', () => {
                alertMessage.classList.add('opacity-0', '-translate-x-full');
                setTimeout(() => alertMessage.remove(), 500); // Remove após a animação
            });
        }
    });
</script>
