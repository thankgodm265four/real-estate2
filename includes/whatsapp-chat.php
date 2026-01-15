<!-- WhatsApp Chat Widget -->
<div id="whatsapp-chat-widget" class="fixed bottom-6 right-6 z-50">
    <!-- WhatsApp Button -->
    <button id="whatsapp-btn" class="group relative w-16 h-16 bg-[#25D366] rounded-full shadow-2xl hover:shadow-3xl transition-all duration-300 hover:scale-110 flex items-center justify-center">
        <!-- WhatsApp Icon -->
        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
        </svg>
        
        <!-- Pulse Animation -->
        <span class="absolute inset-0 rounded-full bg-[#25D366] animate-ping opacity-20"></span>
        
        <!-- Notification Badge (optional) -->
        <span class="absolute -top-1 -right-1 w-5 h-5 bg-red-500 rounded-full text-white text-xs flex items-center justify-center font-bold">1</span>
    </button>
    
    <!-- Chat Preview (Optional - appears on hover) -->
    <div id="chat-preview" class="absolute bottom-20 right-0 w-72 bg-white rounded-2xl shadow-2xl opacity-0 invisible transition-all duration-300 overflow-hidden">
        <!-- Header -->
        <div class="bg-[#25D366] p-4 flex items-center gap-3">
            <div class="relative">
                <img src="https://kindreal-properties.com/images/logo.svg" alt="Kindreal" class="w-12 h-12 rounded-full bg-white p-1">
                <div class="absolute bottom-0 right-0 w-3 h-3 bg-green-400 rounded-full border-2 border-[#25D366]"></div>
            </div>
            <div class="flex-1">
                <h4 class="text-white font-bold text-sm">Kindreal Properties</h4>
                <p class="text-white/80 text-xs">Online now</p>
            </div>
        </div>
        
        <!-- Message -->
        <div class="p-4 bg-gray-50">
            <div class="bg-white rounded-xl rounded-tl-none p-3 shadow-sm">
                <p class="text-gray-700 text-sm">👋 Hi! How can we help you find your dream home today?</p>
                <span class="text-xs text-gray-400 mt-1 block">Just now</span>
            </div>
        </div>
        
        <!-- CTA -->
        <div class="p-4">
            <a href="#" id="whatsapp-link" target="_blank" class="block w-full bg-[#25D366] text-white text-center py-3 rounded-xl font-medium hover:bg-[#20BA5A] transition-colors">
                Start Chat
            </a>
        </div>
    </div>
</div>

<style>
/* WhatsApp Widget Styles */
@keyframes pulse-ring {
    0% {
        transform: scale(0.8);
        opacity: 0.8;
    }
    50% {
        transform: scale(1.2);
        opacity: 0.3;
    }
    100% {
        transform: scale(1.4);
        opacity: 0;
    }
}

#whatsapp-btn:hover + #chat-preview,
#chat-preview:hover {
    opacity: 1;
    visibility: visible;
}

/* Mobile adjustments */
@media (max-width: 768px) {
    #whatsapp-chat-widget {
        bottom: 1rem;
        right: 1rem;
    }
    
    #whatsapp-btn {
        width: 56px;
        height: 56px;
    }
    
    #chat-preview {
        width: calc(100vw - 2rem);
        right: 0;
        bottom: 80px;
    }
}
</style>

<script>
// WhatsApp Widget Configuration
document.addEventListener('DOMContentLoaded', function() {
    // WhatsApp number (will be loaded from settings later)
    const whatsappNumber = '+2347032291977'; // Placeholder - will be replaced with setting
    const defaultMessage = 'Hi! I\'m interested in Kindreal Properties.';
    
    // Generate WhatsApp link
    const whatsappLink = document.getElementById('whatsapp-link');
    const whatsappBtn = document.getElementById('whatsapp-btn');
    
    const generateWhatsAppURL = () => {
        const encodedMessage = encodeURIComponent(defaultMessage);
        return `https://wa.me/${whatsappNumber.replace(/\D/g, '')}?text=${encodedMessage}`;
    };
    
    // Set link href
    if (whatsappLink) {
        whatsappLink.href = generateWhatsAppURL();
    }
    
    // Click WhatsApp button directly
    whatsappBtn.addEventListener('click', function() {
        window.open(generateWhatsAppURL(), '_blank');
    });
    
    // Show/hide chat preview
    const chatPreview = document.getElementById('chat-preview');
    let hideTimeout;
    
    whatsappBtn.addEventListener('mouseenter', function() {
        clearTimeout(hideTimeout);
        chatPreview.style.opacity = '1';
        chatPreview.style.visibility = 'visible';
    });
    
    whatsappBtn.addEventListener('mouseleave', function() {
        hideTimeout = setTimeout(() => {
            if (!chatPreview.matches(':hover')) {
                chatPreview.style.opacity = '0';
                chatPreview.style.visibility = 'hidden';
            }
        }, 300);
    });
    
    chatPreview.addEventListener('mouseleave', function() {
        chatPreview.style.opacity = '0';
        chatPreview.style.visibility = 'hidden';
    });
});
</script>
