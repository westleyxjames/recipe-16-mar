<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlavorSprout - Fresh Recipes, Smarter Cooking</title>
    <meta name="description" content="Discover delicious, easy-to-follow recipes crafted for everyday home cooks. From quick dinners to comforting classics, FlavorSprout helps you cook with confidence.">
    <meta name="keywords" content="recipes, cooking, food, easy recipes, quick dinners, healthy meals, family recipes">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Header/Navigation -->
    <header class="header">
        <nav class="nav-container">
            <div class="nav-content">
                <a href="index.html" class="logo">
                    <span class="logo-icon">🌱</span>
                    <span class="logo-text">FlavorSprout</span>
                </a>
                <button class="mobile-menu-btn" id="mobileMenuBtn" aria-label="Toggle menu">
                    <span class="hamburger"></span>
                </button>
                <ul class="nav-menu" id="navMenu">
                    <li><a href="index.html" class="nav-link active">Home</a></li>
                    <li><a href="about.html" class="nav-link">About</a></li>
                    <li><a href="services.html" class="nav-link">Services</a></li>
                    <li><a href="recipes.html" class="nav-link">Recipes</a></li>
                    <li><a href="contact.html" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        <!-- Hero Section -->
        <section class="hero-section">
            <div class="container">
                <div class="hero-grid">
                    <div class="hero-content">
                        <h1 class="hero-title">Fresh Recipes, Smarter Cooking — Welcome to FlavorSprout</h1>
                        <p class="hero-description">
                            Discover delicious, easy-to-follow recipes crafted for everyday home cooks. From
                            quick dinners to comforting classics, FlavorSprout helps you cook with confidence.
                        </p>
                        <div class="hero-buttons">
                            <a href="recipes.html" class="btn btn-primary btn-lg">Explore Recipes</a>
                            <a href="#tips" class="btn btn-outline btn-lg">Get Cooking Tips</a>
                        </div>
                    </div>
                    <div class="hero-image">
                        <img src="https://images.unsplash.com/photo-1765267642253-386c3f39ba36?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxoZWFsdGh5JTIwaG9tZW1hZGUlMjBtZWFscyUyMGtpdGNoZW4lMjB0YWJsZXxlbnwxfHx8fDE3NzMzNDE0Njh8MA&ixlib=rb-4.1.0&q=80&w=1080" 
                             alt="Healthy homemade meals" 
                             class="img-cover">
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured Recipes Section -->
        <section class="featured-recipes-section">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title">Featured Recipes</h2>
                    <p class="section-description">Try these delicious recipes loved by home cooks everywhere</p>
                </div>
                <div class="recipe-grid" id="featuredRecipes">
                    <!-- Recipes will be loaded here by JavaScript -->
                </div>
            </div>
        </section>

        <!-- Popular Categories -->
        <section class="categories-section">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title">Popular Categories</h2>
                    <p class="section-description">Explore recipes by category</p>
                </div>
                <div class="categories-grid">
                    <a href="recipes.html" class="category-card">
                        <img src="https://images.unsplash.com/photo-1769690507359-98ad7820b1bb?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1080" alt="Quick Dinner Recipes" class="category-image">
                        <div class="category-overlay">
                            <h3 class="category-title">Quick Dinner Recipes</h3>
                        </div>
                    </a>
                    <a href="recipes.html" class="category-card">
                        <img src="https://images.unsplash.com/photo-1707529172036-fb5ffbc70bf8?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1080" alt="Healthy Recipes" class="category-image">
                        <div class="category-overlay">
                            <h3 class="category-title">Healthy Recipes</h3>
                        </div>
                    </a>
                    <a href="recipes.html" class="category-card">
                        <img src="https://images.unsplash.com/photo-1772795598475-ac6071eb789b?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1080" alt="Comfort Food" class="category-image">
                        <div class="category-overlay">
                            <h3 class="category-title">Comfort Food</h3>
                        </div>
                    </a>
                    <a href="recipes.html" class="category-card">
                        <img src="https://images.unsplash.com/photo-1559332167-dd24746aa6f5?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1080" alt="Breakfast Favorites" class="category-image">
                        <div class="category-overlay">
                            <h3 class="category-title">Breakfast Favorites</h3>
                        </div>
                    </a>
                    <a href="recipes.html" class="category-card">
                        <img src="https://images.unsplash.com/photo-1607257882338-70f7dd2ae344?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1080" alt="Dessert Recipes" class="category-image">
                        <div class="category-overlay">
                            <h3 class="category-title">Dessert Recipes</h3>
                        </div>
                    </a>
                    <a href="recipes.html" class="category-card">
                        <img src="https://images.unsplash.com/photo-1578496780896-7081cc23c111?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1080" alt="Family Meals" class="category-image">
                        <div class="category-overlay">
                            <h3 class="category-title">Family Meals</h3>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!-- Why Choose FlavorSprout -->
        <section class="features-section">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title">Why Choose FlavorSprout</h2>
                </div>
                <div class="features-grid">
                    <div class="feature-card">
                        <div class="feature-icon">📖</div>
                        <h3 class="feature-title">Easy-to-Follow Recipes</h3>
                        <p class="feature-description">Clear, step-by-step instructions that make cooking simple and enjoyable for everyone.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">✅</div>
                        <h3 class="feature-title">Tested Cooking Instructions</h3>
                        <p class="feature-description">Every recipe is carefully tested to ensure reliable, delicious results every time.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">👨‍👩‍👧‍👦</div>
                        <h3 class="feature-title">Family Friendly Meals</h3>
                        <p class="feature-description">Recipes designed with families in mind - nutritious, tasty, and kid-approved.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">🔄</div>
                        <h3 class="feature-title">Ingredient Substitutions</h3>
                        <p class="feature-description">Flexible options and substitution suggestions for dietary needs and preferences.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">⭐</div>
                        <h3 class="feature-title">Perfect for Beginners</h3>
                        <p class="feature-description">Whether you're new to cooking or a seasoned pro, our recipes work for all skill levels.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">⏰</div>
                        <h3 class="feature-title">Great for Busy Families</h3>
                        <p class="feature-description">Quick and efficient recipes that fit into your hectic schedule without sacrificing flavor.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Cooking Tips Section -->
        <section id="tips" class="tips-section">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title">Kitchen Tips for Better Cooking</h2>
                    <p class="section-description">Learn essential techniques to elevate your home cooking</p>
                </div>
                <div class="tips-grid">
                    <div class="tip-card">
                        <h3 class="tip-title">Keep Chicken Juicy</h3>
                        <p class="tip-description">Brine chicken before cooking, avoid overcooking, and let it rest before slicing to retain moisture and flavor.</p>
                    </div>
                    <div class="tip-card">
                        <h3 class="tip-title">Perfect Pasta Every Time</h3>
                        <p class="tip-description">Salt your pasta water generously, cook al dente, and always reserve pasta water to help sauces adhere better.</p>
                    </div>
                    <div class="tip-card">
                        <h3 class="tip-title">Enhance Everyday Flavors</h3>
                        <p class="tip-description">Toast spices before using, finish dishes with fresh herbs, and don't be afraid to add a squeeze of lemon or lime.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Email Subscription Section -->
        <section class="subscription-section">
            <div class="container-small">
                <div class="section-header text-center">
                    <h2 class="section-title text-white">Get Fresh Recipes Every Week</h2>
                    <p class="section-description text-white">Join our community and receive delicious new recipes, cooking tips, and exclusive content straight to your inbox.</p>
                </div>
                <form id="subscribeForm" class="subscribe-form">
                    <div class="form-row">
                        <input type="text" id="subscribeName" placeholder="Your Name" required class="form-input">
                        <input type="email" id="subscribeEmail" placeholder="Your Email" required class="form-input">
                    </div>
                    <div class="form-checkbox">
                        <input type="checkbox" id="subscribeConsent" required>
                        <label for="subscribeConsent" class="checkbox-label">
                            I agree to the <a href="privacy-policy.html" class="link-white">Privacy Policy</a> and <a href="terms-conditions.html" class="link-white">Terms & Conditions</a>.
                        </label>
                    </div>
                    <button type="submit" class="btn btn-white btn-lg btn-full">Subscribe Now</button>
                </form>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-column">
                    <div class="footer-logo">
                        <span class="logo-icon">🌱</span>
                        <span class="logo-text">FlavorSprout</span>
                    </div>
                    <p class="footer-description">Fresh recipes and cooking inspiration for everyday home cooks.</p>
                </div>
                <div class="footer-column">
                    <h3 class="footer-heading">Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="recipes.html">Recipes</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3 class="footer-heading">Legal</h3>
                    <ul class="footer-links">
                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                        <li><a href="terms-conditions.html">Terms & Conditions</a></li>
                        <li><a href="disclaimer.html">Disclaimer</a></li>
                        <li><a href="cookie-policy.html">Cookie Policy</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3 class="footer-heading">Connect</h3>
                    <p class="footer-text">Follow us for daily recipe inspiration</p>
                    <div class="social-links">
                        <a href="#" class="social-link" aria-label="Facebook">📘</a>
                        <a href="#" class="social-link" aria-label="Instagram">📷</a>
                        <a href="#" class="social-link" aria-label="Pinterest">📌</a>
                        <a href="#" class="social-link" aria-label="Twitter">🐦</a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2026 FlavorSprout. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Cookie Consent Banner -->
    <div id="cookieConsent" class="cookie-consent hidden">
        <div class="cookie-content">
            <p class="cookie-text">
                We use cookies to enhance your browsing experience and analyze our traffic. By clicking "Accept All", you consent to our use of cookies. 
                <a href="cookie-policy.html" class="cookie-link">Learn more</a>
            </p>
            <div class="cookie-buttons">
                <button id="acceptCookies" class="btn btn-primary">Accept All</button>
                <button id="declineCookies" class="btn btn-outline">Decline</button>
            </div>
        </div>
    </div>

    <script src="recipes-data.js"></script>
    <script src="scripts.js"></script>
</body>
</html>
