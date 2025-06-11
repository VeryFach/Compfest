{{-- File: resources/views/home.blade.php --}}
<x-layout title="Home - SEA Catering">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold text-center mb-8">Welcome to SEA Catering</h1>
        <p class="text-center text-gray-600 mb-8">Healthy, customizable meals delivered across Indonesia</p>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold mb-4">Fresh Ingredients</h3>
                <p class="text-gray-600">We source the freshest ingredients from local farmers across Indonesia.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold mb-4">Customizable Meals</h3>
                <p class="text-gray-600">Tailor your meals to fit your dietary preferences and nutritional needs.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold mb-4">Fast Delivery</h3>
                <p class="text-gray-600">Quick and reliable delivery to cities across Indonesia.</p>
            </div>
        </div>
    </div>
</x-layout>

{{-- File: resources/views/meal-plans.blade.php --}}
<x-layout title="Meal Plans - SEA Catering">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-8">Our Meal Plans</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="bg-emerald-500 text-white p-4">
                    <h3 class="text-xl font-semibold">Basic Plan</h3>
                    <p class="text-emerald-100">Perfect for beginners</p>
                </div>
                <div class="p-6">
                    <div class="text-3xl font-bold text-gray-800 mb-4">Rp 150K<span class="text-sm font-normal text-gray-600">/week</span></div>
                    <ul class="space-y-2 text-gray-600">
                        <li>✓ 5 meals per week</li>
                        <li>✓ Basic customization</li>
                        <li>✓ Nutritional info</li>
                        <li>✓ Free delivery</li>
                    </ul>
                    <button class="w-full mt-6 bg-emerald-500 hover:bg-emerald-600 text-white py-2 px-4 rounded-lg transition-colors">
                        Choose Plan
                    </button>
                </div>
            </div>
            
            <div class="bg-white rounded-lg shadow-md overflow-hidden border-2 border-emerald-500">
                <div class="bg-emerald-500 text-white p-4 relative">
                    <div class="absolute -top-2 -right-2 bg-yellow-400 text-yellow-900 text-xs font-bold px-2 py-1 rounded">
                        POPULAR
                    </div>
                    <h3 class="text-xl font-semibold">Premium Plan</h3>
                    <p class="text-emerald-100">Most popular choice</p>
                </div>
                <div class="p-6">
                    <div class="text-3xl font-bold text-gray-800 mb-4">Rp 280K<span class="text-sm font-normal text-gray-600">/week</span></div>
                    <ul class="space-y-2 text-gray-600">
                        <li>✓ 10 meals per week</li>
                        <li>✓ Advanced customization</li>
                        <li>✓ Detailed nutrition tracking</li>
                        <li>✓ Priority delivery</li>
                        <li>✓ 24/7 support</li>
                    </ul>
                    <button class="w-full mt-6 bg-emerald-500 hover:bg-emerald-600 text-white py-2 px-4 rounded-lg transition-colors">
                        Choose Plan
                    </button>
                </div>
            </div>
            
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="bg-gray-800 text-white p-4">
                    <h3 class="text-xl font-semibold">Corporate Plan</h3>
                    <p class="text-gray-300">For teams & offices</p>
                </div>
                <div class="p-6">
                    <div class="text-3xl font-bold text-gray-800 mb-4">Custom<span class="text-sm font-normal text-gray-600"> pricing</span></div>
                    <ul class="space-y-2 text-gray-600">
                        <li>✓ Bulk orders</li>
                        <li>✓ Team customization</li>
                        <li>✓ Corporate dashboard</li>
                        <li>✓ Flexible scheduling</li>
                        <li>✓ Account manager</li>
                    </ul>
                    <button class="w-full mt-6 bg-gray-800 hover:bg-gray-700 text-white py-2 px-4 rounded-lg transition-colors">
                        Contact Sales
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-layout>

{{-- File: resources/views/about.blade.php --}}
<x-layout title="About Us - SEA Catering">
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-4xl font-bold text-center mb-8">About SEA Catering</h1>
            
            <div class="bg-white rounded-lg shadow-md p-8 mb-8">
                <h2 class="text-2xl font-semibold mb-6 text-emerald-600">Our Story</h2>
                <p class="text-gray-700 mb-4">
                    SEA Catering started as a small business with a simple mission: to make healthy eating accessible and convenient for everyone in Indonesia. What began as a local operation has now grown into a nationwide service, thanks to our commitment to quality, customization, and customer satisfaction.
                </p>
                <p class="text-gray-700 mb-4">
                    We understand that everyone has different dietary needs and preferences. That's why we've built our entire platform around customization - allowing you to create meals that not only taste great but also fit your specific nutritional requirements.
                </p>
                <p class="text-gray-700">
                    Our recent viral growth has shown us how much Indonesia needs a reliable, healthy meal delivery service. We're excited to continue expanding our reach and improving our technology to serve you better.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-emerald-50 rounded-lg p-6">
                    <h3 class="text-xl font-semibold mb-4 text-emerald-800">Our Mission</h3>
                    <p class="text-gray-700">
                        To revolutionize healthy eating in Indonesia by providing customizable, nutritious meals that are convenient, affordable, and accessible to everyone.
                    </p>
                </div>
                
                <div class="bg-blue-50 rounded-lg p-6">
                    <h3 class="text-xl font-semibold mb-4 text-blue-800">Our Vision</h3>
                    <p class="text-gray-700">
                        To become Indonesia's leading healthy meal delivery platform, making nutritious eating the easy choice for millions of families.
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-layout>