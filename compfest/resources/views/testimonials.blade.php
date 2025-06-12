<x-layout title="testimonials">
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Testimonials - SEA Catering</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            primary: '#667eea',
                            secondary: '#764ba2',
                        }
                    }
                }
            }
        </script>
    </head>
    <body class="bg-gradient-to-br from-primary to-secondary min-h-screen">
        <!-- Page Header -->
        <div class="container mx-auto px-4 py-8">
            <div class="text-center mb-12">
                <h1 class="text-5xl font-bold text-white mb-4 drop-shadow-lg">Customer Testimonials</h1>
                <p class="text-xl text-white/90">Hear what our satisfied customers have to say about SEA Catering</p>
            </div>

            <!-- Testimonials Display Section -->
            <section class="bg-white/95 backdrop-blur-lg rounded-3xl p-8 mb-12 shadow-2xl">
                <h2 class="text-4xl font-bold text-center text-primary mb-8">What Our Customers Say</h2>
                
                <div class="relative overflow-hidden rounded-2xl">
                    <div class="flex transition-transform duration-500 ease-in-out" id="testimonialSlider">
                        <!-- Testimonial 1 -->
                        <div class="min-w-full p-8 text-center bg-gradient-to-r from-pink-400 to-red-400 text-white rounded-2xl">
                            <div class="text-2xl mb-4 text-yellow-300">★★★★★</div>
                            <p class="text-lg italic mb-6 leading-relaxed">"SEA Catering has completely transformed my eating habits! The meals are delicious, nutritious, and perfectly portioned. I love how I can customize everything according to my dietary preferences."</p>
                            <div class="font-bold text-xl mb-2">Sarah Wijaya</div>
                            <div class="opacity-80">Jakarta</div>
                        </div>
                        
                        <!-- Testimonial 2 -->
                        <div class="min-w-full p-8 text-center bg-gradient-to-r from-purple-400 to-pink-400 text-white rounded-2xl">
                            <div class="text-2xl mb-4 text-yellow-300">★★★★★</div>
                            <p class="text-lg italic mb-6 leading-relaxed">"As a busy professional, SEA Catering is a lifesaver! The delivery is always on time, and the food quality is consistently excellent. I've recommended it to all my colleagues."</p>
                            <div class="font-bold text-xl mb-2">Budi Santoso</div>
                            <div class="opacity-80">Surabaya</div>
                        </div>
                        
                        <!-- Testimonial 3 -->
                        <div class="min-w-full p-8 text-center bg-gradient-to-r from-blue-400 to-purple-400 text-white rounded-2xl">
                            <div class="text-2xl mb-4 text-yellow-300">★★★★☆</div>
                            <p class="text-lg italic mb-6 leading-relaxed">"The variety of meal options is amazing! I never get bored with my subscription. The nutritional information helps me track my health goals perfectly."</p>
                            <div class="font-bold text-xl mb-2">Maya Sari</div>
                            <div class="opacity-80">Bandung</div>
                        </div>
                        
                        <!-- Testimonial 4 -->
                        <div class="min-w-full p-8 text-center bg-gradient-to-r from-green-400 to-blue-400 text-white rounded-2xl">
                            <div class="text-2xl mb-4 text-yellow-300">★★★★★</div>
                            <p class="text-lg italic mb-6 leading-relaxed">"Excellent service and amazing food quality! The packaging is eco-friendly and the meals arrive fresh every time. SEA Catering exceeded my expectations."</p>
                            <div class="font-bold text-xl mb-2">Ahmad Rahman</div>
                            <div class="opacity-80">Medan</div>
                        </div>
                    </div>
                </div>
                
                <!-- Carousel Controls -->
                <div class="flex justify-center gap-4 mt-8">
                    <button id="prevBtn" class="bg-primary hover:bg-secondary text-white px-6 py-3 rounded-full font-semibold transition-all duration-300 hover:-translate-y-1 shadow-lg">
                        ← Previous
                    </button>
                    <button id="nextBtn" class="bg-primary hover:bg-secondary text-white px-6 py-3 rounded-full font-semibold transition-all duration-300 hover:-translate-y-1 shadow-lg">
                        Next →
                    </button>
                </div>
                
                <!-- Carousel Indicators -->
                <div class="flex justify-center gap-2 mt-4" id="indicators"></div>
            </section>

            <!-- Testimonial Form Section -->
            <section class="bg-white/95 backdrop-blur-lg rounded-3xl p-8 shadow-2xl">
                <h2 class="text-4xl font-bold text-center text-primary mb-8">Share Your Experience</h2>
                
                <div class="grid lg:grid-cols-2 gap-8">
                    <!-- Form Container -->
                    <div class="bg-gradient-to-br from-green-300 to-blue-300 rounded-2xl p-8">
                        <form id="testimonialForm" class="space-y-6">
                            <!-- Customer Name -->
                            <div>
                                <label for="customerName" class="block text-gray-800 font-semibold mb-2">Your Name</label>
                                <input type="text" id="customerName" name="customerName" required 
                                    class="w-full px-4 py-3 rounded-xl border-none bg-white/90 focus:bg-white focus:outline-none focus:ring-4 focus:ring-primary/30 transition-all duration-300 hover:-translate-y-1" 
                                    placeholder="Enter your full name">
                            </div>
                            
                            <!-- Customer Location -->
                            <div>
                                <label for="customerLocation" class="block text-gray-800 font-semibold mb-2">Your Location</label>
                                <input type="text" id="customerLocation" name="customerLocation" 
                                    class="w-full px-4 py-3 rounded-xl border-none bg-white/90 focus:bg-white focus:outline-none focus:ring-4 focus:ring-primary/30 transition-all duration-300 hover:-translate-y-1" 
                                    placeholder="City, Province">
                            </div>
                            
                            <!-- Rating -->
                            <div>
                                <label class="block text-gray-800 font-semibold mb-2">Rating</label>
                                <div class="flex items-center gap-4">
                                    <div class="flex gap-1" id="starRating">
                                        <span class="star text-2xl text-gray-300 cursor-pointer hover:scale-110 transition-transform duration-200" data-rating="1">★</span>
                                        <span class="star text-2xl text-gray-300 cursor-pointer hover:scale-110 transition-transform duration-200" data-rating="2">★</span>
                                        <span class="star text-2xl text-gray-300 cursor-pointer hover:scale-110 transition-transform duration-200" data-rating="3">★</span>
                                        <span class="star text-2xl text-gray-300 cursor-pointer hover:scale-110 transition-transform duration-200" data-rating="4">★</span>
                                        <span class="star text-2xl text-gray-300 cursor-pointer hover:scale-110 transition-transform duration-200" data-rating="5">★</span>
                                    </div>
                                    <span id="ratingText" class="text-gray-700 font-medium">Click to rate</span>
                                </div>
                                <input type="hidden" id="rating" name="rating" value="0">
                            </div>
                            
                            <!-- Review Message -->
                            <div>
                                <label for="reviewMessage" class="block text-gray-800 font-semibold mb-2">Your Review</label>
                                <textarea id="reviewMessage" name="reviewMessage" required rows="5"
                                        class="w-full px-4 py-3 rounded-xl border-none bg-white/90 focus:bg-white focus:outline-none focus:ring-4 focus:ring-primary/30 transition-all duration-300 hover:-translate-y-1 resize-none" 
                                        placeholder="Share your experience with SEA Catering..."></textarea>
                            </div>
                            
                            <!-- Submit Button -->
                            <button type="submit" class="w-full bg-gradient-to-r from-primary to-secondary text-white py-4 px-8 rounded-xl font-bold text-lg hover:-translate-y-1 hover:shadow-xl transition-all duration-300">
                                Submit Review
                            </button>
                        </form>
                    </div>
                    
                    <!-- Preview Container -->
                    <div class="bg-gradient-to-br from-yellow-200 to-orange-200 rounded-2xl p-8">
                        <h3 class="text-2xl font-bold text-primary mb-6 text-center">Preview Your Review</h3>
                        <div id="previewCard" class="bg-white rounded-xl p-6 shadow-lg text-center">
                            <div id="previewStars" class="text-yellow-400 text-xl mb-4">☆☆☆☆☆</div>
                            <div id="previewMessage" class="text-gray-600 italic mb-4 leading-relaxed">Your review will appear here...</div>
                            <div id="previewName" class="font-bold text-gray-800 text-lg">Your Name</div>
                            <div id="previewLocation" class="text-gray-600">Your Location</div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <script>
            // Testimonial Carousel
            let currentSlide = 0;
            const slider = document.getElementById('testimonialSlider');
            const slides = slider.children;
            const totalSlides = slides.length;
            const indicators = document.getElementById('indicators');

            // Create indicators
            for (let i = 0; i < totalSlides; i++) {
                const indicator = document.createElement('div');
                indicator.className = `w-3 h-3 rounded-full cursor-pointer transition-all duration-300 ${i === 0 ? 'bg-primary scale-125' : 'bg-gray-300'}`;
                indicator.addEventListener('click', () => goToSlide(i));
                indicators.appendChild(indicator);
            }

            function updateSlider() {
                slider.style.transform = `translateX(-${currentSlide * 100}%)`;
                
                // Update indicators
                const allIndicators = indicators.children;
                for (let i = 0; i < allIndicators.length; i++) {
                    allIndicators[i].className = `w-3 h-3 rounded-full cursor-pointer transition-all duration-300 ${i === currentSlide ? 'bg-primary scale-125' : 'bg-gray-300'}`;
                }
            }

            function goToSlide(slideIndex) {
                currentSlide = slideIndex;
                updateSlider();
            }

            function nextSlide() {
                currentSlide = (currentSlide + 1) % totalSlides;
                updateSlider();
            }

            function prevSlide() {
                currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
                updateSlider();
            }

            document.getElementById('nextBtn').addEventListener('click', nextSlide);
            document.getElementById('prevBtn').addEventListener('click', prevSlide);

            // Auto-advance carousel
            setInterval(nextSlide, 5000);

            // Star Rating System
            const stars = document.querySelectorAll('.star');
            const ratingInput = document.getElementById('rating');
            const ratingText = document.getElementById('ratingText');
            let selectedRating = 0;

            stars.forEach(star => {
                star.addEventListener('click', () => {
                    selectedRating = parseInt(star.dataset.rating);
                    ratingInput.value = selectedRating;
                    updateStars();
                    updateRatingText();
                    updatePreview();
                });

                star.addEventListener('mouseover', () => {
                    const hoverRating = parseInt(star.dataset.rating);
                    highlightStars(hoverRating);
                });
            });

            document.getElementById('starRating').addEventListener('mouseleave', () => {
                updateStars();
            });

            function updateStars() {
                stars.forEach((star, index) => {
                    if (index < selectedRating) {
                        star.className = 'star text-2xl text-yellow-400 cursor-pointer hover:scale-110 transition-transform duration-200';
                    } else {
                        star.className = 'star text-2xl text-gray-300 cursor-pointer hover:scale-110 transition-transform duration-200';
                    }
                });
            }

            function highlightStars(rating) {
                stars.forEach((star, index) => {
                    if (index < rating) {
                        star.className = 'star text-2xl text-yellow-400 cursor-pointer hover:scale-110 transition-transform duration-200';
                    } else {
                        star.className = 'star text-2xl text-gray-300 cursor-pointer hover:scale-110 transition-transform duration-200';
                    }
                });
            }

            function updateRatingText() {
                const ratingTexts = ['Click to rate', 'Poor', 'Fair', 'Good', 'Very Good', 'Excellent'];
                ratingText.textContent = ratingTexts[selectedRating];
            }

            // Form Preview
            const form = document.getElementById('testimonialForm');
            const previewName = document.getElementById('previewName');
            const previewLocation = document.getElementById('previewLocation');
            const previewMessage = document.getElementById('previewMessage');
            const previewStars = document.getElementById('previewStars');

            function updatePreview() {
                const name = document.getElementById('customerName').value || 'Your Name';
                const location = document.getElementById('customerLocation').value || 'Your Location';
                const message = document.getElementById('reviewMessage').value || 'Your review will appear here...';
                
                previewName.textContent = name;
                previewLocation.textContent = location;
                previewMessage.textContent = message;
                
                // Update preview stars
                let starsHtml = '';
                for (let i = 0; i < 5; i++) {
                    starsHtml += i < selectedRating ? '★' : '☆';
                }
                previewStars.textContent = starsHtml;
            }

            // Update preview on input
            document.getElementById('customerName').addEventListener('input', updatePreview);
            document.getElementById('customerLocation').addEventListener('input', updatePreview);
            document.getElementById('reviewMessage').addEventListener('input', updatePreview);

            // Form Submission
            form.addEventListener('submit', async (e) => {
                e.preventDefault();
                
                if (selectedRating === 0) {
                    alert('Please select a rating before submitting your review.');
                    return;
                }

                // Show loading state
                const submitBtn = form.querySelector('button[type="submit"]');
                const originalText = submitBtn.textContent;
                submitBtn.textContent = 'Submitting...';
                submitBtn.disabled = true;

                try {
                    // Prepare form data
                    const formData = new FormData(form);
                    const reviewData = {
                        customer_name: formData.get('customerName'),
                        customer_location: formData.get('customerLocation') || null,
                        rating: selectedRating,
                        review_message: formData.get('reviewMessage'),
                        created_at: new Date().toISOString()
                    };

                    // Send data to backend API
                    const response = await fetch('/api/testimonials', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || ''
                        },
                        body: JSON.stringify(reviewData)
                    });

                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }

                    const result = await response.json();
                    
                    if (result.success) {
                        // Show success message
                        showNotification('Thank you for your review! Your feedback helps us improve our service.', 'success');
                        
                        // Reset form
                        form.reset();
                        selectedRating = 0;
                        updateStars();
                        updateRatingText();
                        updatePreview();
                        
                        // Optionally reload testimonials to show the new one
                        // loadTestimonials();
                    } else {
                        throw new Error(result.message || 'Failed to submit review');
                    }

                } catch (error) {
                    console.error('Error submitting testimonial:', error);
                    showNotification('Sorry, there was an error submitting your review. Please try again.', 'error');
                } finally {
                    // Reset button state
                    submitBtn.textContent = originalText;
                    submitBtn.disabled = false;
                }
            });

            // Notification function
            function showNotification(message, type = 'info') {
                const notification = document.createElement('div');
                notification.className = `fixed top-4 right-4 z-50 p-4 rounded-lg shadow-lg max-w-sm transition-all duration-500 transform translate-x-full ${
                    type === 'success' ? 'bg-green-500 text-white' :
                    type === 'error' ? 'bg-red-500 text-white' :
                    'bg-blue-500 text-white'
                }`;
                notification.textContent = message;
                
                document.body.appendChild(notification);
                
                // Animate in
                setTimeout(() => {
                    notification.classList.remove('translate-x-full');
                }, 100);
                
                // Remove after 5 seconds
                setTimeout(() => {
                    notification.classList.add('translate-x-full');
                    setTimeout(() => {
                        document.body.removeChild(notification);
                    }, 500);
                }, 5000);
            }

            // Function to load testimonials from database (optional)
            async function loadTestimonials() {
                try {
                    const response = await fetch('/api/testimonials');
                    if (response.ok) {
                        const testimonials = await response.json();
                        updateTestimonialCarousel(testimonials);
                    }
                } catch (error) {
                    console.error('Error loading testimonials:', error);
                }
            }

            // Function to update carousel with database testimonials (optional)
            function updateTestimonialCarousel(testimonials) {
                if (!testimonials || testimonials.length === 0) return;
                
                const slider = document.getElementById('testimonialSlider');
                slider.innerHTML = '';
                
                testimonials.forEach(testimonial => {
                    const slide = document.createElement('div');
                    slide.className = 'min-w-full p-8 text-center bg-gradient-to-r from-pink-400 to-red-400 text-white rounded-2xl';
                    
                    const stars = '★'.repeat(testimonial.rating) + '☆'.repeat(5 - testimonial.rating);
                    
                    slide.innerHTML = `
                        <div class="text-2xl mb-4 text-yellow-300">${stars}</div>
                        <p class="text-lg italic mb-6 leading-relaxed">"${testimonial.review_message}"</p>
                        <div class="font-bold text-xl mb-2">${testimonial.customer_name}</div>
                        <div class="opacity-80">${testimonial.customer_location || 'Indonesia'}</div>
                    `;
                    
                    slider.appendChild(slide);
                });
                
                // Reinitialize carousel
                currentSlide = 0;
                updateSlider();
            }

            // Initialize preview
            updatePreview();
        </script>
    </body>
    </html>
</x-layout>