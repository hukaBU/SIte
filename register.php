<html><head><base href="." />
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>CashFlow | Smart Banking with Effortless Cashback</title>
<style>
:root {
  --primary: #48CAE4;    /* Keep the icy blue */
  --secondary: #00B4D8;  /* Keep the lighter blue */
  --accent: #90E0EF;     /* Keep the light icy blue */
  --light: #f8f9fa;
  --dark: #212529;
  --red: #ff4d4d;        /* Add red color for buttons */
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Inter', sans-serif;
}

body {
  background: var(--light);
  color: var(--dark);
}

.navbar {
  background: white;
  padding: 1rem 2rem;
  box-shadow: 0 2px 15px rgba(0,0,0,0.1);
  position: fixed;
  width: 100%;
  top: 0;
  z-index: 100;
}

.navbar-content {
  max-width: 1200px;
  margin: 0 auto;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.logo {
  font-size: 1.8rem;
  font-weight: 800;
  color: var(--primary);
  display: flex;
  align-items: center;
  gap: 0.5rem;
}

.nav-links {
  display: flex;
  gap: 1rem;
  align-items: center;
}

.nav-links a {
  text-decoration: none;
  color: var(--dark);
  font-weight: 500;
  transition: color 0.3s ease;
}

.nav-links .cta-button {
  background: var(--red);  /* Change to red */
  color: white !important; /* Force white text */
  padding: 1rem 2rem;
  border-radius: 50px;
  text-decoration: none;
  font-weight: 600;
  transition: transform 0.3s ease;
  display: inline-block;
}

.nav-links .cta-button:hover {
  background: #ff3333; /* Darker red on hover */
  color: white !important;
  transform: translateY(-3px);
}

.hero {
  margin-top: 80px;
  padding: 4rem 2rem;
  background: linear-gradient(135deg, var(--primary), var(--secondary));
  color: white;
  text-align: center;
}

.hero-content {
  max-width: 1200px;
  margin: 0 auto;
}

.hero h1 {
  font-size: 3.5rem;
  margin-bottom: 1rem;
}

.hero p {
  font-size: 1.2rem;
  margin-bottom: 2rem;
  opacity: 0.9;
}

.cta-button {
  background: var(--accent);
  color: var(--dark);
  padding: 1rem 2rem;
  border-radius: 50px;
  text-decoration: none;
  font-weight: 600;
  transition: transform 0.3s ease;
  display: inline-block;
}

.cta-button:hover {
  transform: translateY(-3px);
}

.card-section {
  padding: 4rem 2rem;
  max-width: 1200px;
  margin: 0 auto;
  text-align: center;
}

.card-container {
  position: relative;
  width: 400px;
  height: 250px;
  margin: 2rem auto;
  perspective: 1000px;
}

.credit-card {
  width: 100%;
  height: 100%;
  position: relative;
  transform-style: preserve-3d;
  transition: transform 0.8s;
  cursor: pointer;
}

.credit-card:hover {
  transform: rotateY(180deg);
}

.card-front, .card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
  border-radius: 20px;
  padding: 2rem;
}

.card-front {
  background: linear-gradient(135deg, var(--primary), var(--secondary));
  color: white;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.card-back {
  background: linear-gradient(135deg, var(--secondary), var(--primary));
  color: white;
  transform: rotateY(180deg);
  display: flex;
  align-items: center;
  justify-content: center;
}

.chip {
  width: 50px;
  height: 40px;
  background: #ffd700;
  border-radius: 8px;
  margin-bottom: 1rem;
}

.card-number {
  font-size: 1.5rem;
  letter-spacing: 4px;
  margin: 1rem 0;
}

.card-info {
  display: flex;
  justify-content: space-between;
  font-size: 0.9rem;
}

.pricing-info {
  margin-top: 2rem;
  padding: 2rem;
  background: white;
  border-radius: 10px;
  box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

.price {
  font-size: 2.5rem;
  color: var(--primary);
  font-weight: 800;
  margin: 1rem 0;
}

.price-features {
  list-style: none;
  padding: 0;
  margin: 2rem 0;
}

.price-features li {
  margin: 0.5rem 0;
  color: var(--dark);
}

.features {
  padding: 4rem 2rem;
  max-width: 1200px;
  margin: 0 auto;
}

.features-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 2rem;
  margin-top: 2rem;
}

.feature-card {
  background: white;
  padding: 2rem;
  border-radius: 10px;
  box-shadow: 0 4px 15px rgba(0,0,0,0.1);
  transition: transform 0.3s ease;
}

.feature-card:hover {
  transform: translateY(-5px);
}

.feature-icon {
  color: var(--primary);
  font-size: 2.5rem;
  margin-bottom: 1rem;
}

.cashback-animation {
  animation: float 3s ease-in-out infinite;
}

.tabs-section {
  padding: 4rem 2rem;
  max-width: 1200px;
  margin: 0 auto;
}

.tabs {
  display: flex;
  gap: 1rem;
  margin-bottom: 2rem;
}

.tab-button {
  padding: 1rem 2rem;
  background: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-weight: 600;
  transition: all 0.3s ease;
}

.tab-button.active {
  background: var(--primary);
  color: white;
}

.tab-content {
  display: none;
  background: white;
  padding: 2rem;
  border-radius: 10px;
  box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

.tab-content.active {
  display: block;
}

.partners-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 2rem;
}

.partner-category {
  margin-bottom: 2rem;
}

.partner-category h3 {
  color: var(--primary);
  margin-bottom: 1rem;
}

.partner-list {
  list-style: none;
}

.partner-list li {
  padding: 0.5rem 0;
  border-bottom: 1px solid #eee;
}

.loyalty-levels {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 2rem;
}

.loyalty-card {
  background: linear-gradient(135deg, var(--primary), var(--secondary));
  color: white;
  padding: 2rem;
  border-radius: 10px;
  text-align: center;
}

.loyalty-card h3 {
  margin-bottom: 1rem;
}

.points-indicator {
  font-size: 2rem;
  font-weight: bold;
  margin: 1rem 0;
}

.card-section {
  padding: 4rem 2rem;
  max-width: 1200px;
  margin: 0 auto;
  text-align: center;
}

.register-container {
  background: white;
  padding: 2rem;
  border-radius: 10px;
  box-shadow: 0 4px 15px rgba(0,0,0,0.1);
  max-width: 600px;
  margin: 0 auto;
}

.register-container h2 {
  text-align: center;
  color: var(--primary);
  margin-bottom: 2rem;
}

.register-form {
  display: flex;
  flex-direction: column;
  gap: 1rem;
}

.form-group {
  display: flex;
  flex-direction: column;
}

.form-group input,
.form-group select {
  padding: 1rem;
  border: 2px solid #eee;
  border-radius: 5px;
  font-size: 1rem;
  transition: border-color 0.3s ease;
}

.form-group input:focus,
.form-group select:focus {
  outline: none;
  border-color: var(--primary);
}

.form-check {
  display: flex;
  align-items: center;
  gap: 0.5rem;
}

.form-check label {
  font-size: 0.9rem;
  color: var(--dark);
}

.submit-button {
  background: var(--red);
  color: white;
  padding: 1rem;
  border: none;
  border-radius: 5px;
  font-size: 1rem;
  font-weight: 600;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.submit-button:hover {
  background: #ff3333;
}

.form-group input:invalid {
  border-color: var(--red);
}

.form-group input:valid {
  border-color: #28a745;
}

@keyframes float {
  0%, 100% { transform: translateY(0); }
  50% { transform: translateY(-20px); }
}

@media (max-width: 1200px) {
  .partners-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 768px) {
  .partners-grid {
    grid-template-columns: 1fr;
  }
}
</style>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;800&display=swap" rel="stylesheet">
</head>
<body>

<nav class="navbar">
  <div class="navbar-content">
    <div class="logo">
      <svg width="30" height="30" viewBox="0 0 100 100">
        <circle cx="50" cy="50" r="45" fill="none" stroke="#48CAE4" stroke-width="8"/>
        <path d="M35 50h30M50 35v30" stroke="#48CAE4" stroke-width="8" stroke-linecap="round"/>
      </svg>
      CashFlow
    </div>
    <div class="nav-links">
      <a href="#features">Fonctionnalités</a>
      <a href="#partners">Partenaires</a>
      <a href="#loyalty">Fidélité</a>
      <a href="http://localhost/mon_site/index.php/register.php" class="cta-button">S'inscrire</a>
      <a href="http://localhost/mon_site/index.php/login.php" class="cta-button">Connexion</a>
    </div>
  </div>
</nav>

<section class="hero">
  <div class="hero-content">
    <h1>La banque qui vous récompense</h1>
    <p>Gagnez jusqu'à 10% de cashback sur chaque achat. Sans frais cachés, sans frais annuels.</p>
    <a href="http://localhost/mon_site/index.php/register.php" class="cta-button">Commencer Gratuitement</a>
  </div>
</section>

<section class="card-section">
  <div class="register-container">
    <h2>Créer votre compte CashFlow</h2>
    <form class="register-form">
      <div class="form-group">
        <input type="text" id="firstname" name="firstname" placeholder="Prénom" required>
      </div>
      <div class="form-group">
        <input type="text" id="lastname" name="lastname" placeholder="Nom" required>
      </div>
      <div class="form-group">
        <input type="email" id="email" name="email" placeholder="E-mail" required>
      </div>
      <div class="form-group">
        <select id="country" name="country" required>
          <option value="">Sélectionnez votre pays</option>
          <option value="FR">France</option>
          <option value="BE">Belgique</option>
          <option value="CH">Suisse</option>
          <option value="LU">Luxembourg</option>
          <option value="MC">Monaco</option>
        </select>
      </div>
      <div class="form-group">
        <input type="tel" id="phone" name="phone" placeholder="Numéro de téléphone" required>
      </div>
      <div class="form-group">
        <input type="password" id="password" name="password" placeholder="Mot de passe" required>
      </div>
      <div class="form-group">
        <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirmer le mot de passe" required>
      </div>
      <div class="form-check">
        <input type="checkbox" id="terms" name="terms" required>
        <label for="terms">J'accepte les conditions générales d'utilisation et la politique de confidentialité</label>
      </div>
      <button type="submit" class="submit-button">Créer mon compte</button>
    </form>
  </div>
</section>

<section class="card-section">
  <h2>Carte Cashback Premium</h2>
  <div class="card-container">
    <div class="credit-card">
      <div class="card-front">
        <div class="chip"></div>
        <div class="card-number">4532 •••• •••• 7685</div>
        <div class="card-info">
          <span>CASHFLOW PREMIUM</span>
          <span>VALID THRU 12/26</span>
        </div>
      </div>
      <div class="card-back">
        <div class="magnetic-strip"></div>
        <div class="cvv">***</div>
      </div>
    </div>
  </div>
  
  <div class="pricing-info">
    <h3>Avantages de la Carte Premium</h3>
    <div class="price">35€/mois</div>
    <ul class="price-features">
      <li>✨ Jusqu'à 10% de cashback sur tous les achats</li>
      <li>🌟 Accès prioritaire aux offres exclusives des partenaires</li>
      <li>🛡️ Protection complète des achats et assurance</li>
      <li>✈️ Avantages voyage premium et accès aux salons</li>
      <li>💎 Service de conciergerie 24h/24 et 7j/7</li>
    </ul>
    <a href="http://localhost/mon_site/index.php/register.php" class="cta-button">Souscrire</a>
  </div>
</section>

<section class="features" id="features">
  <div class="features-grid">
    <div class="feature-card">
      <div class="feature-icon">
        <svg class="cashback-animation" width="50" height="50" viewBox="0 0 100 100">
          <circle cx="50" cy="50" r="45" fill="none" stroke="#48CAE4" stroke-width="8"/>
          <path d="M30 50h40M50 30v40" stroke="#48CAE4" stroke-width="8" stroke-linecap="round"/>
        </svg>
      </div>
      <h3>Cashback Instantané</h3>
      <p>Recevez vos récompenses instantanément créditées sur votre compte après chaque achat éligible.</p>
    </div>
    
    <div class="feature-card">
      <div class="feature-icon">
        <svg width="50" height="50" viewBox="0 0 100 100">
          <path d="M20 80l60-60M80 80L20 20" stroke="#48CAE4" stroke-width="8" stroke-linecap="round"/>
        </svg>
      </div>
      <h3>Zéro Frais</h3>
      <p>Pas de frais mensuels, pas de solde minimum, pas de frais de transaction à l'étranger. La banque en toute simplicité.</p>
    </div>
    
    <div class="feature-card">
      <div class="feature-icon">
        <svg width="50" height="50" viewBox="0 0 100 100">
          <path d="M20 50c0-16.569 13.431-30 30-30s30 13.431 30 30-13.431 30-30 30S20 66.569 20 50z" fill="none" stroke="#48CAE4" stroke-width="8"/>
          <path d="M50 35v15l10 10" stroke="#48CAE4" stroke-width="8" stroke-linecap="round"/>
        </svg>
      </div>
      <h3>Support 24/7</h3>
      <p>Notre équipe dédiée est toujours là pour vous aider, à tout moment, partout.</p>
    </div>
  </div>
</section>

<section class="tabs-section">
  <div class="tabs">
    <button class="tab-button active" data-tab="partners">Nos Partenaires</button>
    <button class="tab-button" data-tab="loyalty">Programme Fidélité</button>
  </div>

  <div id="partners" class="tab-content active">
    <div class="partners-grid">
      <div class="partner-category">
        <h3>Shopping</h3>
        <ul class="partner-list">
          <li>Amazon - 5% de cashback</li>
          <li>Fnac - 4% de cashback</li>
          <li>Decathlon - 3% de cashback</li>
        </ul>
      </div>

      <div class="partner-category">
        <h3>Restaurants</h3>
        <ul class="partner-list">
          <li>Uber Eats - 8% de cashback</li>
          <li>Deliveroo - 6% de cashback</li>
          <li>McDonald's - 5% de cashback</li>
          <li>Starbucks - 4% de cashback</li>
        </ul>
      </div>

      <div class="partner-category">
        <h3>Voyage</h3>
        <ul class="partner-list">
          <li>Air France - 10% de cashback</li>
          <li>SNCF - 5% de cashback</li>
          <li>Booking.com - 6% de cashback</li>
          <li>Airbnb - 4% de cashback</li>
        </ul>
      </div>

      <div class="partner-category">
        <h3>Courses</h3>
        <ul class="partner-list">
          <li>Carrefour - 10% de cashback</li>
          <li>Leclerc - 10% de cashback</li>
          <li>Auchan - 10% de cashback</li>
          <li>Lidl - 10% de cashback</li>
          <li>Intermarché - 10% de cashback</li>
          <li>Casino - 10% de cashback</li>
          <li>Monoprix - 10% de cashback</li>
        </ul>
      </div>
    </div>
  </div>

  <div id="loyalty" class="tab-content">
    <div class="loyalty-levels">
      <div class="loyalty-card">
        <h3>Niveau Argent</h3>
        <div class="points-indicator">1 000 pts</div>
        <p>• 2% de cashback bonus<br>• Retraits gratuits aux DAB<br>• Assurance voyage de base</p>
      </div>

      <div class="loyalty-card">
        <h3>Niveau Or</h3>
        <div class="points-indicator">5 000 pts</div>
        <p>• 5% de cashback bonus<br>• Support prioritaire<br>• Assurance voyage étendue</p>
      </div>

      <div class="loyalty-card">
        <h3>Niveau Platine</h3>
        <div class="points-indicator">10 000 pts</div>
        <p>• 10% de cashback bonus<br>• Service de conciergerie<br>• Avantages voyage premium</p>
      </div>
    </div>
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Tab switching functionality
    const tabButtons = document.querySelectorAll('.tab-button');
    const tabContents = document.querySelectorAll('.tab-content');

    tabButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Remove active class from all buttons and contents
            tabButtons.forEach(btn => btn.classList.remove('active'));
            tabContents.forEach(content => content.classList.remove('active'));

            // Add active class to clicked button and corresponding content
            button.classList.add('active');
            document.getElementById(button.dataset.tab).classList.add('active');
        });
    });

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    // Add intersection observer for animation on scroll
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = 1;
                entry.target.style.transform = 'translateY(0)';
            }
        });
    });

    document.querySelectorAll('.feature-card').forEach((card) => {
        observer.observe(card);
    });

    // Handle form submission
    document.querySelector('.register-form').addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Check if passwords match
        const password = document.getElementById('password').value;
        const confirmPassword = document.getElementById('confirm-password').value;
        
        if (password !== confirmPassword) {
            alert('Les mots de passe ne correspondent pas');
            return;
        }
        
        // Here you would normally send the form data to your server
        // For now, we'll just show a success message
        alert('Compte créé avec succès! Vous allez être redirigé vers la page de connexion.');
        window.location.href = 'http://localhost/mon_site/index.php/login.php';
    });
});
</script>

</body></html>