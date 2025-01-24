<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PawsitiveWellbeing - Benefactor</title>
    <link rel="stylesheet" href="../css/Style.css">
</head>
<body>
    <!-- Header -->
    <header>
    <div style="display: flex; align-items: center; justify-content: center; gap: 10px;">
    <img src="../../Main/images/Icon.png" alt="PawsitiveWellbeing Logo" style="height: 60px;">
        <h1>PawsitiveWellbeing</h1>
    </div>
        <nav>
            <a href="#home">Home</a>
            <a href="#donate">Donate</a>
            <a href="#adoption">Adopt an Animal</a>
            <a href="#impact">Impact & Updates</a>
            <a href="#transparency">Transparency</a>
        </nav>
    </header>

    <!-- Home Section -->
    <section id="home">
        <h2>Welcome, Generous Benefactors!</h2>
        <p>Empowering change through compassion. Be a part of our mission to rescue, rehabilitate, and support animals in need.</p>
        <p>Whether you're an individual donor, a corporate sponsor, or an NGO partner, your contributions make a lasting difference!</p>
    </section>

    <!-- Donate Section -->
    <section id="donate">
    <h2>Donate to Make a Difference</h2>
    <p>Support our mission by donating to specific animal cases, campaigns, or general funds. Your contributions directly help animals in need.</p>
    <p>Support specific animal cases, campaigns, or contribute to our general fund to make a lasting impact!</p>

            <!-- Campaigns Section -->
            <div id="campaigns">
                <h3>Ongoing Campaigns</h3>
                <div id="campaign-list"></div> <!-- Dynamically load campaigns -->
            </div>

            <!-- Animal Cases Section -->
            <div id="animals">
                <h3>Support Specific Animals</h3>
                <div id="animal-list"></div> <!-- Dynamically load animal cases -->
            </div>

            <!-- General Fund Donation -->
            <div id="general-fund">
                <h3>General Fund Donations</h3>
                <p>Make a one-time or recurring donation to support all our efforts.</p>
                <form id="general-donation-form">
                    <label for="donation-amount">Amount:</label>
                    <input type="number" id="donation-amount" name="donation-amount" required>
                    <label for="donation-type">Donation Type:</label>
                    <select id="donation-type" name="donation-type" required>
                        <option value="One-time">One-time</option>
                        <option value="Monthly">Monthly</option>
                    </select>
                    <button type="submit" class="btn">Donate Now</button>
                </form>
            </div>
    </section>


    <!-- Adoption Section -->
    <section id="adoption">
        <h2>Adopt an Animal</h2>
        <p>Give a forever home to a rescued animal. Browse available animals and track your application status seamlessly.</p>
        <a href="Adoption.php" class="btn">Explore Adoptions</a>
    </section>

    <!-- Impact Section -->
    <section id="impact">
        <h2>See the Impact of Your Donations</h2>
        <p>Stay connected with the causes you support. View updates, success stories, and the outcomes of your generous contributions.</p>
        <a href="Impact.php" class="btn">View Updates</a>
    </section>

    <!-- Transparency Section -->
    <section id="transparency">
        <h2>Financial Transparency</h2>
        <p>We value your trust. Access detailed reports on how your funds are utilized for rescues, treatments, and operations. Transparency is our priority!</p>
        <a href="Transparency.php" class="btn">View Reports</a>
    </section>

    <!-- Footer -->
    <footer>
        <p>© 2024 Benefactor | Empowering Animal Welfare</p>
        <p>Follow us on: 
            <a href="#">Facebook</a> | 
            <a href="#">Twitter</a> | 
            <a href="#">Instagram</a>
        </p>
    </footer>
</body>
</html>
