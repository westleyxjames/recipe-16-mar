// Main JavaScript File

// Mobile Menu Toggle
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const navMenu = document.getElementById('navMenu');
    
    if (mobileMenuBtn && navMenu) {
        mobileMenuBtn.addEventListener('click', function() {
            navMenu.classList.toggle('active');
        });
    }

    // Load featured recipes on home page
    const featuredRecipesContainer = document.getElementById('featuredRecipes');
    if (featuredRecipesContainer && typeof featuredRecipes !== 'undefined') {
        loadFeaturedRecipes();
    }

    // Load all recipes on recipes page
    const allRecipesContainer = document.getElementById('allRecipes');
    if (allRecipesContainer && typeof recipes !== 'undefined') {
        loadAllRecipes();
    }

    // Subscribe form handler
    const subscribeForm = document.getElementById('subscribeForm');
    if (subscribeForm) {
        subscribeForm.addEventListener('submit', handleSubscribe);
    }

    // Contact form handler
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', handleContactForm);
    }

    // Cookie consent
    initCookieConsent();

    // Set active nav link
    setActiveNavLink();

    // Load recipe detail if on recipe page
    loadRecipeDetail();
});

// Load Featured Recipes
function loadFeaturedRecipes() {
    const container = document.getElementById('featuredRecipes');
    if (!container) return;

    container.innerHTML = featuredRecipes.map(recipe => `
        <div class="recipe-card">
            <div class="recipe-image">
                <img src="${recipe.image}" alt="${recipe.title}" class="img-cover">
            </div>
            <div class="recipe-content">
                <h3 class="recipe-title">${recipe.title}</h3>
                <div class="recipe-meta">
                    <div class="recipe-meta-item">
                        <span>🕒</span>
                        <span>${recipe.totalTime}</span>
                    </div>
                    <div class="recipe-meta-item">
                        <span>👨‍🍳</span>
                        <span>${recipe.difficulty}</span>
                    </div>
                </div>
                <a href="recipe.html?slug=${recipe.slug}" class="btn btn-primary btn-full">View Recipe</a>
            </div>
        </div>
    `).join('');
}

// Load All Recipes
function loadAllRecipes() {
    const container = document.getElementById('allRecipes');
    if (!container) return;

    container.innerHTML = recipes.map(recipe => `
        <div class="recipe-card">
            <div class="recipe-image">
                <img src="${recipe.image}" alt="${recipe.title}" class="img-cover">
            </div>
            <div class="recipe-content">
                <h3 class="recipe-title">${recipe.title}</h3>
                <p style="color: var(--color-gray-600); font-size: 0.875rem; margin-bottom: 0.75rem;">${recipe.description}</p>
                <div class="recipe-meta">
                    <div class="recipe-meta-item">
                        <span>🕒</span>
                        <span>${recipe.totalTime}</span>
                    </div>
                    <div class="recipe-meta-item">
                        <span>👨‍🍳</span>
                        <span>${recipe.difficulty}</span>
                    </div>
                    <div class="recipe-meta-item">
                        <span>🍽️</span>
                        <span>${recipe.servings} servings</span>
                    </div>
                </div>
                <a href="recipe.html?slug=${recipe.slug}" class="btn btn-primary btn-full">View Recipe</a>
            </div>
        </div>
    `).join('');
}

// Load Recipe Detail
function loadRecipeDetail() {
    const urlParams = new URLSearchParams(window.location.search);
    const slug = urlParams.get('slug');
    
    if (!slug || typeof recipes === 'undefined') return;

    const recipe = recipes.find(r => r.slug === slug);
    if (!recipe) return;

    // Update page title
    document.title = `${recipe.title} - FlavorSprout`;

    // Update recipe header
    const recipeHeader = document.getElementById('recipeHeader');
    if (recipeHeader) {
        recipeHeader.innerHTML = `
            <h1 class="recipe-detail-title">${recipe.title}</h1>
            <p style="font-size: 1.25rem; color: var(--color-gray-600); margin-bottom: 1rem;">${recipe.description}</p>
            <div class="recipe-detail-meta">
                <div><strong>Prep Time:</strong> ${recipe.prepTime}</div>
                <div><strong>Cook Time:</strong> ${recipe.cookTime}</div>
                <div><strong>Total Time:</strong> ${recipe.totalTime}</div>
                <div><strong>Servings:</strong> ${recipe.servings}</div>
                <div><strong>Difficulty:</strong> ${recipe.difficulty}</div>
                <div><strong>Category:</strong> ${recipe.category}</div>
            </div>
        `;
    }

    // Update recipe image
    const recipeImage = document.getElementById('recipeImage');
    if (recipeImage) {
        recipeImage.src = recipe.image;
        recipeImage.alt = recipe.title;
    }

    // Update ingredients
    const ingredientsList = document.getElementById('ingredientsList');
    if (ingredientsList) {
        ingredientsList.innerHTML = recipe.ingredients.map(ingredient => 
            `<li>${ingredient}</li>`
        ).join('');
    }

    // Update instructions
    const instructionsList = document.getElementById('instructionsList');
    if (instructionsList) {
        instructionsList.innerHTML = recipe.instructions.map(instruction => 
            `<li>${instruction}</li>`
        ).join('');
    }

    // Update tips
    const tipsList = document.getElementById('tipsList');
    if (tipsList && recipe.tips) {
        tipsList.innerHTML = recipe.tips.map(tip => 
            `<li>${tip}</li>`
        ).join('');
    }

    // Update nutrition
    const nutritionInfo = document.getElementById('nutritionInfo');
    if (nutritionInfo && recipe.nutrition) {
        nutritionInfo.innerHTML = `
            <p><strong>Calories:</strong> ${recipe.nutrition.calories}</p>
            <p><strong>Protein:</strong> ${recipe.nutrition.protein}</p>
            <p><strong>Carbohydrates:</strong> ${recipe.nutrition.carbs}</p>
            <p><strong>Fat:</strong> ${recipe.nutrition.fat}</p>
        `;
    }
}

// Handle Subscribe Form
function handleSubscribe(e) {
    e.preventDefault();
    
    const name = document.getElementById('subscribeName').value;
    const email = document.getElementById('subscribeEmail').value;
    const consent = document.getElementById('subscribeConsent').checked;
    
    if (!consent) {
        showToast('Please agree to the Privacy Policy and Terms & Conditions', 'error');
        return;
    }
    
    showToast('Thank you for subscribing!', 'success');
    e.target.reset();
}

// Handle Contact Form
function handleContactForm(e) {
    e.preventDefault();
    
    const consent = document.getElementById('contactConsent').checked;
    
    if (!consent) {
        showToast('Please agree to the Privacy Policy', 'error');
        return;
    }
    
    showToast('Thank you for your message! We will get back to you soon.', 'success');
    e.target.reset();
}

// Show Toast Notification
function showToast(message, type = 'success') {
    const toast = document.createElement('div');
    toast.className = `toast ${type}`;
    toast.textContent = message;
    
    document.body.appendChild(toast);
    
    setTimeout(() => {
        toast.remove();
    }, 3000);
}

// Cookie Consent
function initCookieConsent() {
    const cookieConsent = document.getElementById('cookieConsent');
    const acceptCookies = document.getElementById('acceptCookies');
    const declineCookies = document.getElementById('declineCookies');
    
    if (!cookieConsent) return;
    
    // Check if user has already made a choice
    const cookieChoice = localStorage.getItem('cookieConsent');
    
    if (!cookieChoice) {
        cookieConsent.classList.remove('hidden');
    }
    
    if (acceptCookies) {
        acceptCookies.addEventListener('click', function() {
            localStorage.setItem('cookieConsent', 'accepted');
            cookieConsent.classList.add('hidden');
        });
    }
    
    if (declineCookies) {
        declineCookies.addEventListener('click', function() {
            localStorage.setItem('cookieConsent', 'declined');
            cookieConsent.classList.add('hidden');
        });
    }
}

// Set Active Nav Link
function setActiveNavLink() {
    const currentPage = window.location.pathname.split('/').pop() || 'index.html';
    const navLinks = document.querySelectorAll('.nav-link');
    
    navLinks.forEach(link => {
        const href = link.getAttribute('href');
        if (href === currentPage || (currentPage === '' && href === 'index.html')) {
            link.classList.add('active');
        } else {
            link.classList.remove('active');
        }
    });
}

// Google Maps Initialization (for contact page)
function initMap() {
    const mapContainer = document.getElementById('map');
    if (!mapContainer) return;
    
    // This is a placeholder - in production, you would use actual Google Maps API
    mapContainer.innerHTML = `
        <iframe 
            width="100%" 
            height="100%" 
            frameborder="0" 
            style="border:0" 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.215192551031!2d-73.98823492346624!3d40.758895971386135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2sTimes%20Square!5e0!3m2!1sen!2sus!4v1710000000000!5m2!1sen!2sus" 
            allowfullscreen>
        </iframe>
    `;
}

// Initialize map if on contact page
if (document.getElementById('map')) {
    initMap();
}
